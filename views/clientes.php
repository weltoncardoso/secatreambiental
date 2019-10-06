<!DOCTYPE html>

<html class="no-js">

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

 
   <div class="tab">
      <div class="container" align="center">
        Nossos Clientes
      </div>
    </div>

    <div class="tudo" style="margin-left: 5%">
    <div class="clientestabela" style="float: left;">
      <div class="table-responsive">
  <table>
  <thead>
    <tr>
      <th>Estado</th>   
      <th>Instituição</th>
      <th>Logo</th>
    </tr>
  </thead>
  <?php foreach($clientes as $not):?>
    <tr align="center">
    <td width="80"><?php echo $not['estado']; ?></td>
    <td width="350"><?php echo $not['nome']; ?></td>
    <td width="150"><img src="./assets/img/prods/<?php echo $not['url']?>" border="0" height="60" width="70" /></td>
    

  </tr>
  <?php endforeach; ?>
</table>
</div>

   <div class="pagination_clientes">
        <div class="pag_item" ><a href="<?php echo BASE; ?>clientes?p=<?php echo $p-1; ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span></a></div>
        <?php
        $conta = ceil($total_clientes = 3);
        for($q=1;$q <= $conta;$q++): ?>
        <div class="pag_item <?php echo($q==$p)?'pag_ativo':''; ?>"><a href="<?php echo BASE; ?>clientes?p=<?php echo $q; ?>"><?php echo $q; ?></a></div>

        <?php endfor; ?>

        <?php if($p>$conta): ?>
          <div style="color: #FFFFFF" class="pag_item <?php echo $p?'pag_ativo':''; ?>"><?php echo $p; ?></div>
          <?php endif; ?>


        <div class="pag_item" ><a href="<?php echo BASE; ?>clientes?p=<?php echo $p+1; ?>" aria-label="Next">
            <span aria-hidden="true">&raquo;</span></a></div>

        </div>

</div>
<div class="mapa" style="float: right; margin-top: 50px">

    <?php include('mapa.php'); ?>
</div>
<div style="clear:both"></div>
</div>



 <?php include('footer.php'); ?>
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