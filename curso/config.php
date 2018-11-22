<?php
require 'environment.php';

<<<<<<< HEAD
define("BASE", "http://localhost/secatre1.0/curso/");
=======
define("BASE", "http://localhost/secatreambiental/curso/");
>>>>>>> origin/master

global $config;
$config = array();
if(ENVIRONMENT == 'development') {
	$config['dbname'] = 'ead';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	$config['dbname'] = 'ead';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}
?>