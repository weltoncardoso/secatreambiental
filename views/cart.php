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

    <?php include('header.php'); ?>

    <div style="padding-left:30px;;"class="tab" align="center">
          Carrinho De Compras
          <div class="" style="margin-top: 0; float: right;">
        <a href="<?php echo BASE; ?>cart">
          <div class="cartarea">
            <div class="carticon">
              <div class="cartqt"><?php echo $viewData['cart_qt']; ?></div>
            </div>
            <div class="carttotal">
              <span>R$ <?php echo number_format($viewData['cart_subtotal'], 2, ',', '.'); ?></span>
            </div>
          </div>
        </a>
          </div>
      </div>

    <div style="min-height: 250px">
      <table  width="80%" style="margin-left:10%;  margin-top:70px" >
        <tr>
          <th width="150">Imagem</th>
          <th width="300">Nome</th>
          <th width="100" >Qtd</th>
          <th colspan="2" width="150">Preço</th>
        </tr>
        <?php
          $Subtotal = 0;
        ?>
        <?php foreach ($list as $item): ?>
          <?php
          $Subtotal += (floatval($item['price']) * intval($item['qt']));
        ?>
          <tr>
            <td style="text-align: center;"><img src="<?php echo BASE; ?>curso/assets/images/cursos/<?php echo $item['image']; ?>" width="110"/></td>
            <td style="text-align: center;"><?php echo $item['name']; ?></td>
            <td style="text-align: center;"><?php echo $item['qt']; ?></td>
            <td width="30" style="text-align: center;">R$ <?php echo number_format($item['price'], 2,',','.'); ?></td>
            <td width="30"><a href="<?php echo BASE; ?>cart/del/<?php echo $item['id']; ?>"> <img src="<?php echo BASE; ?>assets/img/delete.png" width="20" style="text-align: center"></a></td>
          </tr>
        <?php endforeach ?>
        <tr>
          <td colspan="3" style="text-align: right; color: red">Total:</td>
          <td style="text-align: center; color: red">R$ <?php echo number_format($Subtotal, 2,',','.'); ?></td>
          <td></td>
        </tr>
      </table>
      </tr>
     <?php if ($Subtotal > 0): ?>
      <form method="POST" action="<?php echo BASE; ?>cart/payment_redirect" style="float: right; margin-right: 10%">
    <select name="payment_type" style="height: 30px; line-height: 30px;border-radius: 5px; width: 200px; color: #4a8f92; font-size: 17px">
    <option value="checkout_transparente">Pagseguro Checkout Transparente</option>
    <option value="mp">Mercado Pago</option>
  </select>

 <input type="submit" value="Finalizar Compra" class="btn btn-default" />
      </form>
     <?php endif ?>
  </div>
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
