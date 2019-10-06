<!DOCTYPE html>

<html class="no-js">
<style type="text/css">
table{margin-top: 60px;margin-bottom: 60px; margin-left: 120px}
</style>
<head>
  <!-- BASICS -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>SECATRE AMBIENTAL</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="<?php echo BASE; ?>assets/css/isotope.css" media="screen" />
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE; ?>assets/img/ico.ico" />
  <link rel="stylesheet" href="<?php echo BASE; ?>assets/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="<?php echo BASE; ?>assets/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo BASE; ?>assets/css/bootstrap-theme.css">
  <link href="<?php echo BASE; ?>assets/css/responsive-slider.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo BASE; ?>assets/css/animate.css">
  <link rel="stylesheet" href="<?php echo BASE; ?>assets/css/style2.css">

  <link rel="stylesheet" href="<?php echo BASE; ?>assets/css/font-awesome.min.css">
  <!-- skin -->
  <link rel="stylesheet" href="<?php echo BASE; ?>assets/skin/default.css">
 
</head>
<body>


      <div class="header">
    <section id="header" class="appear">

      <div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px;  background-color:rgba(0,0,0,1);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="fa fa-bars color-white"></span>
          </button>
          <a href="<?php echo BASE; ?>" class="navbar-brand"><img style="width: 220px;height: 50px;margin-left: 10px;margin-bottom: 25px;" src="<?php echo BASE; ?>assets/img/logo.png" alt=""></a>
        </div>
        <div class="navbar-collapse collapse">

          <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
     
             <li class="nav-item"><a class="nav-link" href="<?php echo BASE; ?>">Início</a></li>
         <li class="nav-item"><a class="nav-link" href="<?php echo BASE; ?>historia">História</a></li>
         <li class="dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Curiosidades
                  </a>
                  <div class="dropdown-menu" style="border-radius: 10px; background-color:rgba(0,0,0,0.8); border: 2"  aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="<?php echo BASE; ?>curiosidades">Vultos da ciênçia</a>
                    <a class="dropdown-item" href="<?php echo BASE; ?>saiba_mais">Saiba mais</a>
                  </div>
         </li>
         <li class="dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Legislação
              </a>
              <div class="dropdown-menu" style="border-radius: 10px; background-color:rgba(0,0,0,0.8); text-align: center; border: 2"  aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item"  href="<?php echo BASE; ?>leis">Federal</a>
                <a class="dropdown-item" href="<?php echo BASE; ?>leis2">Distrital</a>
              </div>
         </li>
         <li class="nav-item"><a class="nav-link" href="<?php echo BASE; ?>clientes">Clientes</a></li>
         <li class="nav-item"><a class="nav-link" href="<?php echo BASE; ?>noticias">Notícias</a></li>
         <li class="nav-item"><a class="nav-link" href="<?php echo BASE; ?>cursos">Cursos</a></li>
         <li class="nav-item"><a class="nav-link" href="<?php echo BASE; ?>contato">Contato</a></li>
         <li class="nav-item"><a class="nav-link" href="<?php echo BASE; ?>curso">Área do Aluno</a></li>
          </ul>
        </div>
       <!--  navbar-collapse -->
    </div>


    </section>
  </div> 

    <div style="padding-left:30px;"class="tab" align="center">
          Curso
      </div>

<div class="row" style="    margin-right: 0px;
	margin-top: 10px;
    margin-left: 15px">
	<div class="col-sm-5">
		<div class="mainphoto">
			<img src="<?php echo BASE; ?>curso/assets/images/cursos/<?php echo $product_info['imagem']; ?>" />
		</div>

	</div>
	<div class="col-sm-5">
		<h2><?php echo $product_info['nome']; ?></h2>
		<hr/>
		<p><?php echo utf8_encode($product_info['descricao']); ?></p>
		<hr/>
		Preco: <span class="original_price">R$ <?php echo number_format($product_info['preco'], 2,',','.'); ?></span>

		<form method="POST" class="addtocartform" action="<?php echo BASE; ?>cart/add">
			<input type="hidden" name="id_product" value="<?php echo $product_info['id']; ?>" />
			<input type="hidden" name="qt_product" value="1" />
			<input class="addtocart_submit" type="submit" value="Adicionar ao Carrinho" />
		</form>
	</div>
</div>
<hr/>
<br />
<section id="footer" class="section footer">
    <div class="container">

    <div class="row">
      <div class="col-md-3">
        <div class="logofooter"><a href="<?php echo BASE;?>"></a></div>

      </div>
      <div class="col-md-3">
       <h5>Institucional</h5>
        <ul>
          <li><a href="<?php echo BASE; ?>">Início</a></li>
          <li><a href="<?php echo BASE; ?>historia">História</a></li>
          <li><a href="<?php echo BASE; ?>diferenciais">Diferenciais</a></li>
          <li><a href="<?php echo BASE; ?>clientes">Clientes</a></li>
          <li><a href="<?php echo BASE; ?>leis">Legislação</a></li>
          <li><a href="<?php echo BASE; ?>curiosidades">Curiosidades</a></li>
          <li><a href="<?php echo BASE; ?>noticias">Noticias</a></li>
          <li><a href="<?php echo BASE; ?>cursos">Cursos</a></li>
          <li><a href="<?php echo BASE; ?>admin">Area da Empresa</a></li>

        </ul>
      </div>
      <div class="col-md-3">
        <h5>Contato</h5>
        <p>
        WhatsApp<br>
        <span>61 99984-7102</span><br>
        Fixo<br>
        <span>61 3345-7105</span><br>
        E-mail<br>
        <h6>secatre@secatreambiental.com.br</h6>
        </p>
      </div>
      <div class="col-md-3">
        <h5>Nossas Redes Sociais</h5>
        <div class="row animated opacity mar-bot0" data-andown="fadeIn" data-animation="animation">
        <div class="col-sm-12 align-center">
          <ul class="social-network social-circle">
            <li><a href="https://www.facebook.com/secatre/" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://plus.google.com/116573924145624763988" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="https://www.linkedin.com/company/secatre-seguran%C3%A7a-ambiental-&-gerenc.residuos-ltda/" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      </div>
    </div>
  

      <div class="row align-center copyright">
      
          <div class="credits">
          
            Developed by <a href="https://weltoncardoso.github.io/">Welton Cardoso</a>
          </div>
  
      </div>
    </div>

  </section>
  <a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>

  <script src="<?php echo BASE; ?>assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  <script src="<?php echo BASE; ?>assets/js/jquery.js"></script>
  <script src="<?php echo BASE; ?>assets/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo BASE; ?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo BASE; ?>assets/js/jquery.isotope.min.js"></script>
  <script src="<?php echo BASE; ?>assets/js/jquery.nicescroll.min.js"></script>
  <script src="<?php echo BASE; ?>assets/js/fancybox/jquery.fancybox.pack.js"></script>
  <script src="<?php echo BASE; ?>assets/js/skrollr.min.js"></script>
  <script src="<?php echo BASE; ?>assets/js/jquery.scrollTo.js"></script>
  <script src="<?php echo BASE; ?>assets/js/jquery.localScroll.js"></script>
  <script src="<?php echo BASE; ?>assets/js/stellar.js"></script>
  <script src="<?php echo BASE; ?>assets/js/responsive-slider.js"></script>
  <script src="<?php echo BASE; ?>assets/js/jquery.appear.js"></script>
  <script src="<?php echo BASE; ?>assets/js/grid.js"></script>
  <script src="<?php echo BASE; ?>assets/js/main.js"></script>
  <script src="<?php echo BASE; ?>assets/js/wow.min.js"></script>
  <script>
    wow = new WOW({}).init();
  </script>
  <script src="<?php echo BASE; ?>assets/contactform/contactform.js"></script>

  </body>
</html>
