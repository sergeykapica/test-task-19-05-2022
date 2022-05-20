<?php

namespace core;

class Render {
	
	public static function output( $path, $data = [] ) {
		
		include $path . '.php';
	}
}