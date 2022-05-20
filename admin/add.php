<?php
session_start();

define('TEMPLATEPATH', $_SERVER['DOCUMENT_ROOT']);
require( TEMPLATEPATH . '/core/autoload.php' );

\core\Request::check_auth();

$db = new \core\DB();

if( $_SERVER['REQUEST_METHOD'] === 'POST' && !empty( $_POST ) ) {
	
	$_POST['date'] = time();
	
	if( $db->insert_object( $_POST ) ) {
		
		$_SESSION['response'] = true;
	}
	else
	{
		$_SESSION['response'] = false;
	}
	
	header('Location: /admin/add');
	die();
}

$data['all_objects'] = $db->get_all_objects();

if( isset( $_SESSION['response'] ) ) {
	
	$data['response'] = $_SESSION['response'];
	unset( $_SESSION['response'] );
}

\core\Render::output( TEMPLATEPATH . '/templates/admin/add', $data );