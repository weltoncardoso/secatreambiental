<?php
require 'environment.php';

define("BASE", "http://localhost/secatreambiental/");

global $config;
$config = array();
if(ENVIRONMENT == 'development') {
	$config['dbname'] = 'ead';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	$config['dbname'] = 'secatreambient02';
	$config['host'] = 'mysql.secatreambiental.com.br';
	$config['dbuser'] = '';
	$config['dbpass'] = '';
}
//colocar email do vendedor ao final
$config['pagseguro_seller'] = "emyr.mendes@gmail.com";
//colocar appid e key do mp https://applications.mercadopago.com.br
$config['mp_appid'] = '';
$config['mp_key'] = '';

\PagSeguro\Library::initialize();
\PagSeguro\Library::cmsVersion()->setName("SecatreAmbiental")->setRelease("2.0.0");
\PagSeguro\Library::moduleVersion()->setName("SecatreAmbiental")->setRelease("2.0.0");

\PagSeguro\Configuration\Configure::setEnvironment('production');

//urlpra pegar token sandbox.pagseguro.uol.com.br 
//perfis de integracao/vendedor
//emyr.mendes@gmail.com
//
//\PagSeguro\Configuration\Configure::setAccountCredentials('emyr.mendes@gmail.com','');
\PagSeguro\Configuration\Configure::setAccountCredentials('emyr.mendes@gmail.com','');
\PagSeguro\Configuration\Configure::setCharset('UTF-8');
\PagSeguro\Configuration\Configure::setLog(true, 'pagseguro.log');
?>
