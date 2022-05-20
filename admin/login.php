<?php
define('TEMPLATEPATH', $_SERVER['DOCUMENT_ROOT']);
require( TEMPLATEPATH . '/core/autoload.php' );

\core\Render::output( TEMPLATEPATH . '/templates/admin/login' );