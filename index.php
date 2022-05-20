<?php
	define('TEMPLATEPATH', $_SERVER['DOCUMENT_ROOT']);

	require( TEMPLATEPATH . '/core/autoload.php' );
	
	$header_title = 'Страница пользователя';
	
	include_once( TEMPLATEPATH . '/templates/header.php' );
	
	$db = new \core\DB();
	$all_objects = $db->get_all_objects();
	$three = [];
	$three_formatted = [];
	$all_objects_formatted = [];

	if( $all_objects ) {
		
		foreach( $all_objects as $object ) {
			
			$three[ $object['parent_id'] ] [ $object['id'] ] = $object;
		}

		foreach( $all_objects as $object ) {
			
			$all_objects_formatted[ $object['id'] ] = $object;
		}
	}

	$all_objects_formatted[0]['title'] = 'Корневой';
	$element_data = ['all_objects_formatted' => $all_objects_formatted];
	$element_data['admin'] = false;
?>

<div class="user-area">
		<h2>Страница пользователя</h2>
		<div class="data-env">
				<?php if( isset( $three[0] ) ): ?>
				
					<?php \core\DataHandler::recursiveThree( $three[0], $three, false, false, $element_data ); ?>
				<?php else: ?>
				
					<span>Корневые записи отсутствуют</span>
					
				<?php endif; ?>
		</div>

<?php include_once( TEMPLATEPATH . '/templates/header.php' ); ?>