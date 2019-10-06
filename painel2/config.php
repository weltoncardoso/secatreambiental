<?php
require 'environment.php';

define("BASE", "http://localhost/sitenovo/painel2/");


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

$config['status_pgto'] = array(
	'1' => 'Aguardando Pgto.',
	'2' => 'Em análise',
	'3' => 'Pago',
	'4' => 'Disponível',
	'5' => 'Em disputa',
	'6' => 'Devolvida',
	'7' => 'Cancelada',
	'8' => 'Debitado',
	'9' => 'Retenção Temporária'
);
?>