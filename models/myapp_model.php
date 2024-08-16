<?php

class MyApp_Model extends Model
{
    
	public function __construct()
	{
		parent::__construct();
	}
	
	public function content_update() {
	    $get = $this->_get('contents', 'cont_given_id', [ $_POST['cont_id'] ], false) ;
	    
	    if ($get[0] == 0) {
	        // insert 
	       echo $this->_insert('contents', 'cont_date, cont_body, cont_given_id, cont_title, cont_img', [date('Y-m-d'),$_POST['body'], $_POST['cont_id'], $_POST['title'], $_POST['imageid'] ] ); return;
	    }
	     
	    echo $this->_update('contents', 'cont_date, cont_body, cont_title, cont_img', 'cont_given_id', [date('Y-m-d'), $_POST['body'], $_POST['title'], $_POST['imageid'], $_POST['cont_id'] ] );
	    
	    $this->log(Session::get('email')." updated content titled {$_POST['title']} at " . date('Y-m-d, H:i:s'), 'Company' );
	}
	public function forgotpasswordaction() { 

		if (CustomFunctions::validateEmail($_POST['email'])) {

			// first delete any previous reset by the user 
			$this->_delete('password_reset', 'reset_email', [ $_POST['email'] ] );
		 
				
			//create required inputs
			$selector = bin2hex(random_bytes(8));
			$token = random_bytes(32);  
			$url = "https://{$_SERVER['HTTP_HOST']}/login/password-reset?selector=" .$selector . "&validator=" .bin2hex($token);
			$expiry = date('U') + 3600;
			$hashToken = password_hash($token, PASSWORD_DEFAULT);
	
			// insert new details 
			$this->_insert('password_reset', 'reset_email, reset_selector, reset_token, reset_expiry', [ $_POST['email'], $selector, $hashToken, $expiry ] ); 
			
			//send mail					
			$body = "<h3 style='padding: 4px; background-color:darkblue!important;color:white;'> Password Reset </h3>";
			$body .= "<p>Dear user, <br>";
			$body .= "Click button below to reset your password before 2 hour expiry. Just ignore if you didn't make this request.";
			$body .= "<br><a  href='$url'><button style='background:blue; color: white; font-weight: bold; border:none; border-radius: 5px;'>  Reset Password  </button></a>";
			CustomFunctions::SendMail($_POST['email'], "Password Reset Request | MiziziPay", $body, $this->_company() );
			die($this->_ms(false, "Check your email to continue. Check your spam folder if you don't see our mail!"));
				 
            $this->log("{$_POST['email']} requested a password reset at " . date('Y-m-d, H:i:s') . "| <br> {$_SERVER['HTTP_USER_AGENT']}", 'Account' );
			} else die($this->_ms(true, "Incorrect! Enter valid email."));
			 
	}

	public function passwordresetaction() {
	     

		if ((ctype_xdigit($_POST['selector']) != true)  || (ctype_xdigit($_POST['validator']) != true)) 
		    die($this->_ms(true, "We couldn't validate your password request. Start the reset process again"));

		
		if ($_POST['pass1'] != $_POST['pass2'])  die($this->_ms(true, "Passwords don't match"));
		

		// select if valid from db  
		$data = $this->_get('password_reset', 'reset_selector, reset_expiry >= ', [ $_POST['selector'], date("U") ], false);
		if ($data[0] != 1) { 
			die($this->_ms(true, "Invalid or expired token. Start the reset process again!"));
		} 
		$email = $data[1]['reset_email'];  
		    
		// reset the password  
		$this->_update('users', 'user_pass, user_status', 'user_email', [password_hash($_POST['pass1'], PASSWORD_DEFAULT), "Active", $email] );
		echo $this->_ms(false, "Password reset succesful. You can <a href='/login'>login</a>!");
		 

		// delete the row on success 
		$this->_delete('password_reset', 'reset_selector',  [ $_POST['selector'] ]);
        $this->log("{$email} completed a password reset at " . date('Y-m-d, H:i:s') ."| <br> {$_SERVER['HTTP_USER_AGENT']}", 'Account' );
	 
	}
	
	public function send_email() {
	    $email = explode(',', $_POST['email']);
	    
	     CustomFunctions::SendMail($email, "{$_POST['subject']}", "{$_POST['body']}", $this->_company() );
	     $this->log(Session::get('email')." sent an email at {$_POST['email']} at " . date('Y-m-d, H:i:s'), 'Company' );
	     echo $this->_ms(false);
	}
	
	public function processlogin() {
	    		
		$data = $this->_get('users', '(user_email = ? or user_tel = ?) and user_status = ?', [$_POST['username'], $_POST['username'], 'Active' ], false);
		
		if ($data[0] == 0) die($this->_ms(true, "Incorrect details")); // user not found
        
		    $data = $data[1];

			if (password_verify($_POST['pass'], $data['user_pass'])) {
				// login
				Session::init();
				Session::set('role', $data['user_role']);
				Session::set('loggedIn', true);
				Session::set('userid', $data['user_ID']);
				Session::set('email', $data['user_email']);    
			    $this->_update('users', 'user_last_login', 'user_ID', [time(), $data['user_ID']]);
			 
				
			 
                $this->log("{$data['user_email']} logged into the system at " . date('Y-m-d, H:i:s') ."| <br> {$_SERVER['HTTP_USER_AGENT']}", 'Account' );
		
				$direction = "/profile"; 
			    if (!empty($_POST['pid'])) $direction = "/profile/internal-transfer?pid={$_POST['pid']}";
		
					
					$await_login = Session::get('await_login') != null ? Session::get('await_login') : $direction; 
                    die($this->_ms(false, CustomFunctions::relocate($await_login, true)));
                    
			} else die($this->_ms(true, "Incorrect details")); // wrong password
			 
	}
	public function processsignup() {
	    
	     //$2y$10$QbWoWFyyaWGBRD/FV5233.MrqKV8uI.tR9mvo/v679Cj0MAqJDQYO
		if (empty($_POST['name'])   || empty($_POST['email'])  ||  empty($_POST['pass']) ) 
			die($this->_ms(true, "Required fields are empty"));
		
		if (!CustomFunctions::validateEmail($_POST['email'])) die($this->_ms(true, "Invalid email"));   

		 

        if ($this->_get('users', 'user_email', [$_POST['email']], false)[0] > 0 ) die($this->_ms(true, "Email exists already"));
 
			$rand = random_int(1000000, 90000000000);
			$token = password_hash($rand, PASSWORD_DEFAULT); 
			$token = str_replace('/', '', $token);
			$body = "<h3 style='padding: 4px; background-color:darkblue; color:white; font-weigh:bold;'> Email verification </h3>";
			$body .= "<p>Dear " . $_POST['name'] . ",<br>";
			$body .= "Click button below to verifiy your email.";
			$body .= "<button style='border:none; background:blue;border-radius: 5px;'> <a style='color:white; font-weight:bold;' 
			href='https://{$_SERVER['HTTP_HOST']}/login/email-verify/" . $_POST['email'] . "/$token'>Verify</a></button>";
		//	CustomFunctions::SendMail($_POST['email'], "Verify your Email | {$this->_company()['c_name']}", $body, $this->_company() );
		 	
		  
  
	    	$this->_insert('users', 'user_email, user_fname, user_pass, user_status, user_role, user_datecreated, user_dateupdated', 
	    	[ $_POST['email'], $_POST['name'], password_hash($_POST['pass'], PASSWORD_DEFAULT), 'Active', "User", time(), time() ] );
        
			//echo $this->_ms(false, "Registration successful. Check your email if our email is missing check your spam folder and whitelist us");
 
            //$this->_delete('email_verification', 'ev_email', [$_POST['email']]);
            //$this->_delete('email_verification', 'ev_email, ev_token', [$_POST['email'], $token]);
            
			// get the last insert id 
			$lastInsertId = $this->_getmore('users', 'MAX(user_ID)', 'user_email', [ $_POST['email'] ]); 

			// enter the user into a payment roll 
			//$this->_insert('userearnings', 'ue_user_fk', [$lastInsertId ] );
			
			Session::set('role', $role);
			Session::set('loggedIn', true);
			Session::set('userid', $lastInsertId);
			Session::set('email', $_POST['email']); 
			Session::set('name', $_POST['name']); 
			Session::set('url', $url);
		    $this->log("{$_POST['email']} signup into the system at " . date('Y-m-d, H:i:s') ."| <br> {$_SERVER['HTTP_USER_AGENT']}", 'Account' );
		    
	        $direction = "/dashboard"; 
			    
			$await_login = Session::get('await_login') != null ? Session::get('await_login') : $direction;
            echo $this->_ms(false, CustomFunctions::relocate($await_login, true));

 
	} 
	
	 
	// new session
		public function newsession() {
			
			$_SESSION['onlineusers'] = 1;
			$ipAddress = strip_tags(CustomFunctions::getIPAddress());
			$dataArray = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ipAddress));
			$country = $dataArray["geoplugin_countryName"]; 
			//should expire after 10 mins
	        $time = time() + (1440);
	        $time_a = (time() . rand(10, 1000));
		 
			$this->_insert('user_sessions', 'us_uniq, us_time, us_ip_address, us_country, us_day, us_month, us_year, us_page, us_robot, us_referrer_site', 
			[$time_a, $time, $ipAddress, $country, date('d'), date('m'), date('Y'), $_POST['current'], $this->isBotDetected(), $_POST['ref'] ]);
		}
		
		private function isBotDetected() {

            if ( preg_match('/abacho|accona|duckduckgo|skype|java|sogou|acoi|AddThis|AdsBot|ahoy|AhrefsBot|AISearchBot|alexa|altavista|anthill|appie|applebot|arale|araneo|AraybOt|ariadne|arks|aspseek|ATN_Worldwide|Atomz|baiduspider|baidu|bbot|bingbot|bing|Bjaaland|BlackWidow|BotLink|bot|boxseabot|bspider|calif|CCBot|ChinaClaw|christcrawler|CMC\/0\.01|combine|confuzzledbot|contaxe|CoolBot|cosmos|crawler|crawlpaper|crawl|curl|cusco|cyberspyder|cydralspider|dataprovider|digger|DIIbot|DotBot|downloadexpress|DragonBot|DuckDuckBot|dwcp|EasouSpider|ebiness|ecollector|elfinbot|esculapio|ESI|esther|eStyle|Ezooms|facebookexternalhit|facebook|facebot|fastcrawler|FatBot|FDSE|FELIX IDE|fetch|fido|find|Firefly|fouineur|Freecrawl|froogle|gammaSpider|gazz|gcreep|geona|Getterrobo-Plus|get|girafabot|golem|googlebot|\-google|grabber|GrabNet|griffon|Gromit|gulliver|gulper|hambot|havIndex|hotwired|htdig|HTTrack|ia_archiver|iajabot|IDBot|Informant|InfoSeek|InfoSpiders|INGRID\/0\.1|inktomi|inspectorwww|Internet Cruiser Robot|irobot|Iron33|JBot|jcrawler|Jeeves|jobo|KDD\-Explorer|KIT\-Fireball|ko_yappo_robot|label\-grabber|larbin|legs|libwww-perl|linkedin|Linkidator|linkwalker|Lockon|logo_gif_crawler|Lycos|m2e|majesticsEO|marvin|mattie|mediafox|mediapartners|MerzScope|MindCrawler|MJ12bot|mod_pagespeed|moget|Motor|msnbot|muncher|muninn|MuscatFerret|MwdSearch|NationalDirectory|naverbot|NEC\-MeshExplorer|NetcraftSurveyAgent|NetScoop|NetSeer|newscan\-online|nil|none|Nutch|ObjectsSearch|Occam|openstat.ru\/Bot|packrat|pageboy|ParaSite|patric|pegasus|perlcrawler|phpdig|piltdownman|Pimptrain|pingdom|pinterest|pjspider|PlumtreeWebAccessor|PortalBSpider|psbot|rambler|Raven|RHCS|RixBot|roadrunner|Robbie|robi|RoboCrawl|robofox|Scooter|Scrubby|Search\-AU|searchprocess|search|SemrushBot|Senrigan|seznambot|Shagseeker|sharp\-info\-agent|sift|SimBot|Site Valet|SiteSucker|skymob|SLCrawler\/2\.0|slurp|snooper|solbot|speedy|spider_monkey|SpiderBot\/1\.0|spiderline|spider|suke|tach_bw|TechBOT|TechnoratiSnoop|templeton|teoma|titin|topiclink|twitterbot|twitter|UdmSearch|Ukonline|UnwindFetchor|URL_Spider_SQL|urlck|urlresolver|Valkyrie libwww\-perl|verticrawl|Victoria|void\-bot|Voyager|VWbot_K|wapspider|WebBandit\/1\.0|webcatcher|WebCopier|WebFindBot|WebLeacher|WebMechanic|WebMoose|webquest|webreaper|webspider|webs|WebWalker|WebZip|wget|whowhere|winona|wlm|WOLP|woriobot|WWWC|XGET|xing|yahoo|YandexBot|YandexMobileBot|yandex|yeti|Zeus/i', $_SERVER['HTTP_USER_AGENT'])
            ) {
                return true; // 'Above given bots detected'
            }
        
            return false;
        
        } 

 
	public function update_user_data() {
	    if (!$this->validate_csrf()  ) return;
	    echo $this->_update('users', $_POST['col'], 'user_ID', [ $_POST['val'],Session::get('userid') ]);
	}
 
	public function change_password() {
	    
	    if (!$this->validate_csrf()  ) return;
	    if (!password_verify($_POST['pass'], $this->me()['user_pass'] )) die($this->_ms(true, 'Incorrect current password'));
	    if ( $_POST['pass1'] != $_POST['pass2'] ) die($this->_ms(true, 'Passwords do not match'));
	    
	    echo $this->_update('users', 'user_pass', 'user_ID', [ password_hash($_POST['pass2'], PASSWORD_DEFAULT),Session::get('userid') ]);
	}
 
 
	
	public function get_csrf() {
	    $token = bin2hex(random_bytes(32));
	    $this->_delete('csrf', 'csrf_expiry < ', [time() ] );
	    $this->_insert('csrf', 'csrf_token,csrf_expiry', [$token, time() + 1800 ] );
	    echo $this->_ms(false, $token);
	}
	
	private function validate_csrf() {
	    $valid = $this->_get('csrf', 'csrf_token,csrf_expiry > ', [$_POST['csrf'], time() ], false )[0];
	    if ($valid < 1) {
	        echo ($this->_ms(true, 'Invalid security token. Please refresh the page'));
	        return false;
	    }
	    else return true;
	}

	public function contactus() { 
	    
	    if (!$this->validate_csrf()  ) return;
	    echo $this->_insert('contactus', 'email,phone,message, date',   [
	            $_POST['email'] , $_POST['tel'], $_POST['msg'], time()
	        ]);
	}
	 
     
	
	
	
	
	
	
	
   // end of class
}