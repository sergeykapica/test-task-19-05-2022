<?php

namespace core;

class DataHandler {
	
	public static function generate_code( $length ) {
		
		$str = '';
		$range = range('A', 'Z');
		
		for( $i = 0; $i < $length; $i++ ) {
			
			$str .= $range[array_rand( $range )];
		}
		
		return $str;
	}
	
	public static function hash_password( $password ) {
		
		$hash_value = $password;
		$hash_salt = 'vadikAkrobatik';
		$iteration_length = 100;
		
		for( $i = 0; $i < $iteration_length; $i++ ) {
			
			$hash_value = md5( $hash_value . $hash_salt );
		}
		
		return $hash_value;
	}
	
	public static function recursiveThree( $arr, $full_array, $sublvl = false, $admin = false, $element_data = [] ) {
		
		if( $sublvl ) {
			
			echo '<ul class="sublvl">';
		}
		else
		{
			echo '<ul>';
			
			?>
				
				<li>
					<div class="row header">
						<div class="title">Название</div>
						<div class="description">Описание</div>
						<div class="parent_id">Родительская запись</div>
					</div>
				</li>
				
			<?php
		}
		
		$counter = 1;
		
		foreach( $arr as $element_k => $element ) {
			
			echo '<li>';
			
			$element = array_merge( $element, $element_data );
			$element['key'] = $counter;
			
			\core\Render::output( TEMPLATEPATH . '/templates/element', $element );
			
			if( isset( $full_array[ $element_k ] ) ) {
				
				self::recursiveThree( $full_array[ $element_k ], $full_array, true, $admin, $element_data );
				
				echo '</li>';
			}
			else
			{
				echo '</li>';
			}
			
			$counter++;
		}
		
		echo '</ul>';
	}
}