<?php
    @session_start();
    if (!isset($_SESSION['userid'])) {  
        if (!isset($_COOKIE['remember'])) {
            if (isset($_SESSION['remember'])) {  
                setcookie('remember', $_SESSION['remember'], time() + (86400 * 30), '/' );
                setcookie('rkey', $_SESSION['rkey'], time() + (86400 * 30), '/' );
            } 
        }  
    }

require 'config.php';
require 'util/Auth.php';

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];
    
    $no_security = explode(':', $url)[0];
    $valid_url = str_replace('www.', '', $_SERVER["HTTP_HOST"]);
    
    if (strpos($url, 'www') == false) {
        header("Location: https://www." . $valid_url . $_SERVER["REQUEST_URI"], true, 301);
    } else if ($no_security == 'http') {
        header("Location: https://www." . $valid_url . $_SERVER["REQUEST_URI"], true, 301);
    } 
    
    if ($_SERVER['REMOTE_ADDR'] == '105.2✓°9.165.234') {
      die( "Ok");
    }
  
  

spl_autoload_register("autoload");

function autoload($className) {
	
	$class_path = LIBS . $className .".php";
	if (file_exists($class_path))
		require LIBS . $className .".php";
	else {
		require_once 'public/pdf/dompdf/autoload.inc.php';
	}
}

$app = new App();
$app->init();

