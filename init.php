<?php

$GLOBALS['config'] = array(
	'mysql' 	=> array(
		'host' 			=> '127.0.0.1',
		'username' 		=> 'root',
		'password' 		=> '',
		'db' 			=> ''
	)
);

spl_autoload_register(function($class)
{
    $class = str_replace('\\', '/', $class);
    require_once $class . '.php';
    return;
});