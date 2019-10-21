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
	$config['dbuser'] = 'secatrea02_add1';
	$config['dbpass'] = 'eltim325';
}
//colocar email do vendedor ao final
$config['pagseguro_seller'] = "emyr.mendes@gmail.com";
//colocar appid e key do mp https://applications.mercadopago.com.br
$config['mp_appid'] = '7162423875927553';
$config['mp_key'] = 'Fs9SGZ5FTst9H1lSrsViPV9exls9Xinq';

\PagSeguro\Library::initialize();
\PagSeguro\Library::cmsVersion()->setName("SecatreAmbiental")->setRelease("2.0.0");
\PagSeguro\Library::moduleVersion()->setName("SecatreAmbiental")->setRelease("2.0.0");

\PagSeguro\Configuration\Configure::setEnvironment('production');

//urlpra pegar token sandbox.pagseguro.uol.com.br 
//perfis de integracao/vendedor
//emyr.mendes@gmail.com
//9A36A46ADE534696BF20671C8AD22C82
//\PagSeguro\Configuration\Configure::setAccountCredentials('emyr.mendes@gmail.com','9A36A46ADE534696BF20671C8AD22C82');
\PagSeguro\Configuration\Configure::setAccountCredentials('emyr.mendes@gmail.com','880614A9CFCC4DDB9CFD21FE98022ACF');
\PagSeguro\Configuration\Configure::setCharset('UTF-8');
\PagSeguro\Configuration\Configure::setLog(true, 'pagseguro.log');
?>