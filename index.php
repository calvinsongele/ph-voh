<?php
  

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
    
 
  
  

spl_autoload_register("autoload");

function autoload($className) {
	$class_path = LIBS . $className .".php";
	if (file_exists($class_path))
		require LIBS . $className .".php";
}

$app = new App();
$app->init();

