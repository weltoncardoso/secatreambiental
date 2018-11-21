<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE; ?>assets/img/ico.ico" />
</head>
<body>
	<h1 style="color: black" align="center"> Meus Cursos </h1>
	<div class="ho" style="margin-left: 20%; ">

	<?php foreach ($cursos as $curso): ?>
		<a href="<?php echo BASE; ?>cursos/entrar/<?php echo $curso['id_curso']; ?>">
		<div class="cursoitem">
			<img  src="<?php echo BASE; ?>../painel2/assets/images/<?php echo $curso['imagem']; ?>"  border="0" width="260" height="150" /><br/><br/>
			<strong><?php echo $curso['nome'] ?></strong><br/><br/>
			<!--<?php// echo $curso['descricao'] ?><br/><br/>!-->
		</div>
		</a>
		
	<?php endforeach ?>
	</div>
</body>
</html>
