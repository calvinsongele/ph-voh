<?php

class Auth
{
	
	public static function handleLogin() {
		@session_start();
	
		if (Session::get('userid') == null) {
			session_destroy();
			@session_start();
			Session::set('await_login', $_SERVER["REQUEST_URI"]);
			
			setcookie('remember', '', time() - (time() + (86400 * 30)), '/' );
			setcookie('rkey', '', time() - (time() + (86400 * 30)), '/' );
			
			CustomFunctions::relocate('/login?loginRequired=true');
			exit;
		}

		Session::init();
		if (Session::get('userid') == null) {
			Session::destroy();
			@session_start();
			Session::set('await_login', $_SERVER["REQUEST_URI"]);
			
			setcookie('remember', '', time() - (time() + (86400 * 30)), '/' );
			setcookie('rkey', '', time() - (time() + (86400 * 30)), '/' );
			
			CustomFunctions::relocate('/login?loginRequired=true');
			exit;
		}
		
	}
	
	public static function defaultUrl() {
		return ROOT;		
	}
	

}