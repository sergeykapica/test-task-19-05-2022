<?php

class Autoload {
	
	function __construct() {
		
		$rootpath = TEMPLATEPATH . '/core';
		$fileinfos = new RecursiveIteratorIterator( new RecursiveDirectoryIterator( $rootpath ) );

		foreach( $fileinfos as $pathname => $fileinfo ) {
			
			if ( !$fileinfo->isFile() ) 
			{
				continue;
			}
			
			if( !strpos( $pathname, 'autoload.php' ) )
			{
				require_once $pathname;
			}
		}
	}
}

( new Autoload() );