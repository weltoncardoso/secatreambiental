<?php


    //incluindo arquivo config
    include 'config.php';

    // Incluindo arquivo de funcoes
    include 'funciones.php';

    // Obtendo o id do evento
    $id  = evaluar($_GET['id']);

    //buscando dados na base
    $bd  = $conexion->query("SELECT * FROM eventos WHERE id=$id");

    // pegando os dados
    $row = $bd->fetch_assoc();

    // titulo
    $titulo=$row['title'];

    // corpo
    $evento=$row['body'];

    // Fecha inicio
    $inicio=$row['inicio_normal'];

    // Fecha Termino
    $final=$row['final_normal'];

// Eliminar evento
if (isset($_POST['eliminar_evento']))
{
    $id  = evaluar($_GET['id']);
    $sql = "DELETE FROM eventos WHERE id = $id";
    if ($conexion->query($sql))
    {
        echo "Evento eliminado";
    }
    else
    {
        echo "O evento nao pode ser eliminar";
    }
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?=$titulo?></title>
</head>
<body>
	 <h3><b>Titulo do evento:</b><br/><?=$titulo?></h3>
	 <hr>
     <b>Inicio do evento:</b> <?=$inicio?> <br/>
     <b>Termino do evento:</b> <?=$final?>
     <hr>
 	<p><b>Descricao do evento:</b><br/><?=$evento?></p><br/><br/><br/>
</body>
<form action="" method="post">
    <button type="submit" class="btn btn-danger" name="eliminar_evento">Eliminar</button>
</form>
</html>
