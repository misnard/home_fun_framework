<?php

class Autoloader {
	
	public static function register() {
		spl_autoload_register(array(__CLASS__, 'autoload'));   
	}
	
	public static function autoload($class) {
		$class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
		require RACINE_SITE.'/'.$class.'.php';
	}
	
}