<?php
#[AllowDynamicProperties]
class CustomFunctions {

    public function __construct()
    {
   
    }
     
     
    public static function randchars($len = 8, $password = false) {
       $str = '';
       $alphabet = "a1AbBcCd2DeEfFg3GhHiIjJ4kKlLm56MnNoOpPqQr7RsStYu8UvVwWxX8yYz0Z";
       $alphabet .= "0123456789abcdfghjkmnpqrstvwxyzABCDEFGHIJKLMNOPQRESTUVWXYZ";

       if ($password)  $alphabet .= "?#@!_-,+=/.}{|;:&^*()%$";

       $b = str_split($alphabet);
       shuffle($b);
       shuffle($b);

       for ($i = 1; $i <= $len ; $i++) { 
           $str .= $b[rand(0, strlen($alphabet) - 1)];
       }
       return $str;
   }
    
    public static function deleteDir($dirPath = 'public/') {
        if (! is_dir($dirPath)) {
            throw new InvalidArgumentException("$dirPath must be a directory");
        }
        if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
            $dirPath .= '/';
        }
        $files = glob($dirPath . '*', GLOB_MARK);
        foreach ($files as $file) {
            if (is_dir($file)) {
                self::deleteDir($file);
            } else {
                unlink($file);
            }
        }
        rmdir($dirPath);
    }
    // remove links ie from comments
    public static function removelinks($string) { 
        // Regular expression pattern to match URLs
        $pattern = '/\b(?:https?|ftp):\/\/[^\s]+/i';
        // Replace all matches with an empty string
        $clean_comment = preg_replace($pattern, '', $string);
        
        return $clean_comment;
    }
    public static function time_elapsed_string($datetime, $full = false) {
        $now = new DateTime;
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);
    
        $total_days = $diff->days;
        $weeks = floor($total_days / 7);
        $days = $total_days % 7;
    
        $string = array(
            'y' => 'year',
            'm' => 'month',
            'w' => 'week',
            'd' => 'day',
            'h' => 'hour',
            'i' => 'minute',
            's' => 'second',
        );
    
        $output = array();
        foreach ($string as $key => $value) {
            if (@$diff->$key) {
                $output[] = $diff->$key . ' ' . $value . ($diff->$key > 1 ? 's' : '');
            }
        }
    
        if ($weeks > 0) {
            $output[] = $weeks . ' ' . $string['w'] . ($weeks > 1 ? 's' : '');
        }
        if ($days > 0) {
            $output[] = $days . ' ' . $string['d'] . ($days > 1 ? 's' : '');
        }
    
        if (!$full) {
            $output = array_slice($output, 0, 1);
        }
    
        return $output ? implode(', ', $output) . ' ago' : 'just now';
    }
    
    //time ago eg 2years ago, 1 sec ago
    public static function timeago($date1, $date2 = '' ) {
        if (empty($date1)) {
            return "1 year ago";
        }
        else if ($date2 == '') {
            $date = $date1;
        } else if (!is_numeric($date2)) {
            $date = strtotime($date2);
        } else {
            $date = $date1;
        }
        
        return CustomFunctions::time_elapsed_string('@' . $date);
    }
    public static function time_int($date1, $date2 ) {
        if (empty($date1)) {
            return time() - ( 86400 * 365 );
        }
        else if ($date2 == '') {
            $date = $date1;
        } else if (!is_numeric($date2)) {
            $date = strtotime($date2);
        } else {
            $date = $date1;
        }
        
        return $date;
    }
    
    public static function validateEmail($email) {
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
			return true;
		else 
		    return false;		
    }
    public static function verifyTel($tel) {   
        $length = strlen($tel);
    
        if ( (!preg_match("/^[0-9+-]*$/", $tel)) || (($length < 10) || $length > 15) ) 
            return true;
        else
            return false;        
    
    }
    //accepted image formats
    public static function verifyImage($image) {
        $array = array("jpg", "jpeg", "png", "gif", "webp");
        $exp = explode(".", $image);
        $ext = strtolower(end($exp));
    
        if (in_array($ext, $array)) 
            return true;
        else
            return false;
        
    }

    
    public static function SendMail($email, $subject, $body, $company, $mailer = true){
        
            
        $from = 'business@example.com';
        if ($mailer) {
            $body1 = [];
            if (!is_array($email)) $email = [$email];
            
            if (!is_array($body)) { 
                for ($j = 0; $j < count($email); $j++)  $body1[] = $body;
            } else $body1 = $body;
                
            $messages = []; 
            $i = 0;
            foreach ($email as $rowemail) {    
                $message = "<section style='background:#3cb043; padding:15px;'> <center> <img style='max-height:100px;' src='https://".$_SERVER['HTTP_HOST']."/public/assets/system/logo.png'> </center> ";
                $message .= "<div style='background:#3cb043; position: relative;padding: 0.75rem 1.25rem;margin-bottom: 1rem;border: 1px solid #f3f3f3; border-radius: 0.25rem; color:white'
                ><div style='margin: 2px; padding: 1px; '> $body1[$i]  <hr> <div style='background:#3cb043; color:white; padding:3px;'> 
                <p>".$company['c_name']." <br> ".$company['c_address']."<br> ".$company['c_email']." <br>  https://".$_SERVER['HTTP_HOST'].". </p> </div> </div></div>";
                 
        	    $message .= "<br><hr><div style='background:#3cb043;color:lightgrey;padding:2px;'>This email was sent to $rowemail.The information in this message is confidential and is intended solely for the addressee. 
        	    Access to this e-mail by anyone else is unauthorised. If you are not the intended recipient, any disclosure, copying, distribution or any action taken or omitted in 
        	    reliance on this, is prohibited and may be unlawful. Whilst all reasonable steps are taken to ensure the accuracy and integrity of information and data transmitted 
        	    electronically and to preserve the confidentiality thereof, no liability or responsibility whatsoever is accepted if information or data is, for whatever reason, 
        	    corrupted or does not reach its intended destination. </div>";
        	    $message .= "</section>";
        	    
        	    $messages[] = $message;
        	    $i++;
            }
                
                
                 
            require 'public/phpmailer/sendemail.php';
             return 'success'; 
        }
                 
         
        $subject = $subject;
        $message = "<div style=' position: relative;padding: 0.75rem 1.25rem;margin-bottom: 1rem;border: 1px solid #f3f3f3; border-radius: 0.25rem;'>
        <div style='margin: 2px; padding: 1px; background: white;'>
        $body 
        <hr>";
        $headers = "From:".$company['c_name']." <$from> \r\n";
        $headers .= "Reply-To: <$from> \r\n";
        $headers .= "Content-type: text/html; utf-8 \r\n";
        
         

        if (mail($email, $subject, $message, $headers))
            return true;
        else
            return false;
    }

    public static function validUrl($url) {
        $url = trim($url);
        $url = strtolower($url);
        $url = str_replace(' ', '-', $url);
        $url = str_replace('"', '', $url);
        $url = str_replace("'", '', $url);
        $url = str_replace("/", '', $url);
        $url = str_replace("#", '', $url);
        return preg_replace('/[^A-Za-z0-9\-]/', '', $url);
    }
    public static function NoSpaceUrl($url, $strtolower = true) {
        $url = trim($url);
        if ($strtolower) $url = strtolower($url);
        $url = str_replace('-', '', $url);
        $url = str_replace('"', '', $url);
        $url = str_replace("'", '', $url);
        $url = str_replace("/", '', $url);
        $url = str_replace("#", '', $url);
        return preg_replace('/[^A-Za-z0-9\-]/', '', $url);
        return str_replace(' ', '', $url);
    }

     
    public static function relocate($target, $return = false) {
        if ($return) return "<script> window.location.href='" . $target . "'</script>";
        echo "<script> window.location.href='" . $target . "'</script>";
    }

    public static function movefile($name, $nameAs, $path = "/public/assets/uploads/") {
        if(move_uploaded_file($_FILES[$name]['tmp_name'], getenv("DOCUMENT_ROOT") . $path . $nameAs))
            return true;
        else 
            return false;
                 
    }
   
    public static function movefiles($name, $nameAs, int $loop) {        
        if(move_uploaded_file($_FILES[$name]['tmp_name'][$loop], getenv("DOCUMENT_ROOT") . "/views/assets/uploads/" . $nameAs)) 
            return true;
        else 
            return false;
    }
 
    
    // returns keyswords
    public static function keywords(string $string) {
        $string = strip_tags($string);
            
            $array = explode(" ", $string);
            
            $array = array_count_values($array);
            
             arsort($array);
            
           
            
            $j = 0;
            foreach($array as $key=>$value) {
                $highest = current($array);
                
                if($value == $highest)
                  $repeat[] = $key;
                  
                  $j++;
                  unset($array[$key]);
            }  
            $max = max(30, count($repeat));
            $output = '';
        
        if ($max > 30) 
            $max = 30;
        
        for($i = 0; $i < $max; $i++) {
            $output .= $repeat[$i] . ',';
        }
        
        return $output;
        
    }

    // get ip address
    public static function getIPAddress() {  
        //whether ip is from the share internet  
         if(!empty($_SERVER['HTTP_CLIENT_IP'])) $ip = $_SERVER['HTTP_CLIENT_IP'];  
          
        //whether ip is from the proxy  
        else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
        
        //whether ip is from the remote address  
        else $ip = $_SERVER['REMOTE_ADDR'];  
         
        return $ip;  
    } 
    public static function SendSMS($message, $number) {
            $url = 'http://bulksms.example.com/api/sendsms';
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json')); //setting custom header
            $curl_post_data = array(
                    //Fill in the request parameters with valid values
                        "api_key" => " ",
                        "username" => " ",
                        "sender_id" => " ",
                        "message" => $message ,
                        "phone" => $number
            );
            
            $data_string = json_encode($curl_post_data);
            
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
            
            $curl_response = curl_exec($curl);
            
            return $curl_response;
    }
    public static function SendSMS_MobiTech($message, $number) {
        CustomFunctions::SendSMS($message, $number);return;
        $url = 'http://bulksms.example.com/api/sendsms';
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json')); //setting custom header
        $curl_post_data = array(
                //Fill in the request parameters with valid values
                    "api_key" => " ",
                    "username" => " ",
                    "sender_id" => " ",
                    "message" => $message ,
                    "phone" => $number
        );
        
        $data_string = json_encode($curl_post_data);
        
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
        
        $curl_response = curl_exec($curl);
        print_r($curl_response);
        
        return $curl_response;
}
    public static function return_ucwords($string) {
        $string = strtolower(strip_tags($string));
        return ucwords($string);
    } 
    
    public static function stringdate($date) {
        
        // $dateObj   = DateTime::createFromFormat('!m', $month);
        // $monthString = $dateObj->format('F');
        
        return date('jS F Y', strtotime($date)); 
    }
    
    
    public static function getdevice($device) {
        //Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36
        $ex = explode(')', $device);
         
        return explode('/', $ex[2])[0] .' in '. explode('(', $ex[0])[1];
        
    }
    public static function extractDate($date) {
	    //2024-07
	    $date = explode('-', $date); 
	    
	     $dateObj = DateTime::createFromFormat('!m', $date[1]);
         return "{$dateObj->format('M')}, {$date[0]}";
	}
    
    
	public static function profileImg($img) {
        if(!empty($img)) $data = "https://assets.example.com/files/$img";
	    else $data = "/public/assets/uploads/download.jpeg";
	    return $data;
	}
	public static function profileCover($img) {
        if(!empty($img)) $data = "https://assets.example.com/files/$img";
	    else $data = "/public/assets/uploads/default-cover.jpg";
	    return $data;
	}
	public static function readTime($text = '') {
	    $text = strip_tags($text);

        $wordCount = str_word_count($text); 
        $minutesToRead = round($wordCount / 200); 
        
        if($minutesToRead < 1){ 
            return 1;
        }else{
            $minutes = $minutesToRead; 
        }
        return $minutes;
	}
	public static function trimImgName($imgname, $n = 6) {
	    $explode = explode('.', $imgname);
	    
	    $firstpart = substr($explode[0], 0, round($n/2));
	    
	    $all = str_split($explode[0]);
	    if (count($all) <= $n) return $imgname;
	    
	    $secondpart = substr($explode[0], -round($n/2) );
	    
	    return "$firstpart...$secondpart.".end($explode);
	}
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    //end of class
    
}