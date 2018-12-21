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
	$config['dbname'] = 'ead';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}
//colocar email do vendedor ao final
$config['pagseguro_seller'] = "weltonvcardoso@gmail.com";
//colocar appid e key do mp https://applications.mercadopago.com.br
$config['mp_appid'] = '1502216307414767';
$config['mp_key'] = 'wS2IIj9JmXk6PxvKemrFFPcXw1HKLlzv';

\PagSeguro\Library::initialize();
\PagSeguro\Library::cmsVersion()->setName("SecatreAmbiental")->setRelease("1.0.0");
\PagSeguro\Library::moduleVersion()->setName("SecatreAmbiental")->setRelease("1.0.0");

\PagSeguro\Configuration\Configure::setEnvironment('sandbox');

//urlpra pegar token sandbox.pagseguro.uol.com.br 
//perfis de integracao/vendedor
\PagSeguro\Configuration\Configure::setAccountCredentials('weltonvcardoso@gmail.com','AE5F24800A594E028A4BF765549EFA10');
\PagSeguro\Configuration\Configure::setCharset('UTF-8');
\PagSeguro\Configuration\Configure::setLog(true, 'pagseguro.log');
?>