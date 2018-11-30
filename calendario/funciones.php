<?php


// Avalia os dados que o usuário digita e elimina caracteres indesejados.
function evaluar($valor)
{
	$nopermitido = array("'",'\\','<','>',"\"");
	$valor = str_replace($nopermitido, "", $valor);
	return $valor;
}

//Formata uma data no microtime para adicionar ao evento.
function _formatear($fecha)
{
	return strtotime(substr($fecha, 6, 4)."-".substr($fecha, 3, 2)."-".substr($fecha, 0, 2)." " .substr($fecha, 10, 6)) * 1000;
}
 ?>
