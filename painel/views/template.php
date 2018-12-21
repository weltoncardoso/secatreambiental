<html>
  <head>
<link rel="sortcut icon" href="logo.ico" type="image/x-icon" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Painel Administrativo</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE; ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE; ?>assets/css/template.css">
  </head>
  <body>
	<nav class="navbar navbar-inverse">
      <div class="container">
        <div id="navbar">
          <ul class="nav navbar-nav navbar-left">
            <li class="active"><a href="<?php echo BASE; ?>">Home</a></li>
            <li><a href="<?php echo BASE; ?>noticias">Noticias</a></li>            
            <li><a href="<?php echo BASE; ?>clientes">Clientes</a></li>            
            <li><a href="<?php echo BASE; ?>leis">PDFs</a></li>            
            <li><a href="<?php echo BASE; ?>slide">Slides</a></li>            
            <li><a href="<?php echo BASE; ?>agenda">Agenda</a></li>            
            <!-- <li><a href="<?php echo BASE; ?>cursos">Cursos</a></li>  -->           
          </ul>
          <ul class="nav navbar-nav navbar-right">
          	<li><a href="<?php echo BASE; ?>login/sair">Sair</a></li>
          </ul>
        </div>
      </div>
    </nav>

	<div class="container">
		<?php $this->loadViewInTemplate($viewName, $viewData); ?>
	</div>
	<div class="rodape"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE; ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>