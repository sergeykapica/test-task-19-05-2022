<?php
session_start();

define('TEMPLATEPATH', $_SERVER['DOCUMENT_ROOT']);
require( TEMPLATEPATH . '/core/autoload.php' );

$db = new \core\DB();

if( $_SERVER['REQUEST_METHOD'] === 'POST' && !empty( $_POST ) ) {
	
	if( !isset( $_POST['edit'] ) && !isset( $_POST['delete'] ) ) {
		
		$_POST['pass'] = \core\DataHandler::hash_password( $_POST['pass'] );
		
		\core\Request::login_in( $_POST );
	}
	else if( isset( $_POST['edit'] ) )
	{
		$response = false;
		
		if( $db->check_parent_category( 0 ) ) {
		
			foreach( $_POST['edit'] as $field_k => $field ) {
				
				$field['id'] = $field_k;
				
				$response = $db->update_object( $field );
			}
		}
		
		if( $response ) {
			
			$_SESSION['response'] = true;
		}
		else
		{
			$_SESSION['response'] = false;
		}
		
		header('Location: /admin/');
		die();
	}
	else
	{
		$db->delete_object( $_POST['delete'] );
		
		header('Location: /admin/');
		die();
	}
}

\core\Request::check_auth();

$data = [];

if( isset( $_SESSION['response'] ) ) {
	
	$data['response'] = $_SESSION['response'];
	unset( $_SESSION['response'] );
}

$user_auth = $_SESSION['user_auth'];
$user = $db->get_user( $user_auth );
$data['user'] = $user;

\core\Render::output( TEMPLATEPATH . '/templates/admin/index', $data );

?>