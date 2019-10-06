<!DOCTYPE html>

<html class="no-js">
<head>
  <!-- BASICS -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>SECATRE AMBIENTAL</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="<?php echo BASE; ?>../assets/css/isotope.css" media="screen" />
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE; ?>../assets/img/ico.ico" />
  <link rel="stylesheet" href="<?php echo BASE; ?>../assets/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="<?php echo BASE; ?>../assets/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo BASE; ?>../assets/css/bootstrap-theme.css">
  <link href="<?php echo BASE; ?>../assets/css/responsive-slider.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo BASE; ?>../assets/css/animate.css">
  <link rel="stylesheet" href="<?php echo BASE; ?>../assets/css/style2.css">

  <link rel="stylesheet" href="<?php echo BASE; ?>../assets/css/font-awesome.min.css">
  <!-- skin -->
  <link rel="stylesheet" href="<?php echo BASE; ?>../assets/skin/default.css">
 
</head>
<body>
    <div style="padding-left:30px;margin-top: 0.1%;;"class="tab" align="center">
          Pagamento Certificado Impresso
      </div>
    <p align="center">Para efetuar o pagamento de seu certificado impresso, basta apenas clicar no botão abaixo.</p>
    <div align="center">
    <!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
<form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">
<!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
<!-- Gerar o botao apartir do email da secatre  -->
<input type="hidden" name="code" value="884769DA2B2B442334A6CFA12A8FE237" />
<input type="hidden" name="iot" value="button" />
<input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/209x48-pagar-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
</form>
<script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
   </div> 
   <p align="center">Ao efetuar o pagamento de seu certificado,</br> envie o comprovante para nosso email a fim de Agilizarmos o envio!</p>
<br />
<section id="footer" class="section footer">
    <div class="container">

    <div class="row">
      <div class="col-md-3">
        <div class="logofooter"><a href="<?php echo BASE;?>../"></a></div>

      </div>
      <div class="col-md-3">
       <h5>Institucional</h5>
        <ul>
          <li><a href="<?php echo BASE; ?>">Início</a></li>

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
          
            Designed by <a href="https://weltoncardoso.github.io/">Welton Cardoso</a>
          </div>
  
      </div>
    </div>

  </section>
  <a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>

  <script src="<?php echo BASE; ?>../assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  <script src="<?php echo BASE; ?>../assets/js/jquery.js"></script>
  <script src="<?php echo BASE; ?>../assets/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo BASE; ?>../assets/js/bootstrap.min.js"></script>
  <script src="<?php echo BASE; ?>../assets/js/jquery.isotope.min.js"></script>
  <script src="<?php echo BASE; ?>../assets/js/jquery.nicescroll.min.js"></script>
  <script src="<?php echo BASE; ?>../assets/js/fancybox/jquery.fancybox.pack.js"></script>
  <script src="<?php echo BASE; ?>../assets/js/skrollr.min.js"></script>
  <script src="<?php echo BASE; ?>../assets/js/jquery.scrollTo.js"></script>
  <script src="<?php echo BASE; ?>../assets/js/jquery.localScroll.js"></script>
  <script src="<?php echo BASE; ?>../assets/js/stellar.js"></script>
  <script src="<?php echo BASE; ?>../assets/js/responsive-slider.js"></script>
  <script src="<?php echo BASE; ?>../assets/js/jquery.appear.js"></script>
  <script src="<?php echo BASE; ?>../assets/js/grid.js"></script>
  <script src="<?php echo BASE; ?>../assets/js/main.js"></script>
  <script src="<?php echo BASE; ?>../assets/js/wow.min.js"></script>
  <script>
    wow = new WOW({}).init();
  </script>
  <script src="<?php echo BASE; ?>../assets/contactform/contactform.js"></script>

  </body>
</html>
