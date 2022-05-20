<?php
namespace core;

session_start();

class Request {
	
	public static function login_in( $data ) {
		
		$db = new DB();
		
		if( $db->check_auth( $data ) ) {
			
			$_SESSION['user_auth'] = $data['pass'];
		}
	}
	
	public static function check_auth() {
		
		if( !isset( $_SESSION['user_auth'] )) {
			
			header('Location: /admin/login.php');
		}
	}
}