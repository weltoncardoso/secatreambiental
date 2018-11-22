<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Secatre Ambiental Cursos</title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE; ?>assets/img/ico.ico" />
	<link rel="stylesheet" type="text/css" href="<?php echo BASE; ?>assets/css/template.css">
	<script type="text/javascript" src="<?php echo BASE; ?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE; ?>assets/js/script.js"></script>
</head>
<body>
	<div class="topo">
		<a href="<?php echo BASE; ?>login/logout">
		<div>Sair</div>
	</a>
		<div class="topousuario"> <?php echo $viewData['info']->getNome(); ?></div>
		
	</div>
<?php $this->loadViewInTemplate($viewName, $viewData); ?>
</body>
</html>