<?php

// Incluindo config
include 'config.php';

// pegando base de dados
$sql="SELECT * FROM eventos";

// Verifica se existe um dado
if ($conexion->query($sql)->num_rows)
{

    $datos = array();


    $i=0;


    $e = $conexion->query($sql);

    while($row=$e->fetch_array())
    {

        $datos[$i] = $row;
        $i++;
    }


        echo json_encode(
                array(
                    "success" => 1,
                    "result" => $datos
                )
            );

    }
    else
    {
        // Si no existen eventos mostramos este mensaje.
        echo "Não há dados";
    }


?>
