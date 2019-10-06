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
          Notícias
      </div>
    </div>


           <?php foreach($images as $img): ?>
            <?php foreach($noticias as $not):?>

              <?php if ($not['id']== $img['id_noticia']): ?>

                <div class="areaImagem">
                <img src="<?php echo BASE; ?>painel/assets/images/prods/<?php echo $img['url']?>" />
                </div>

                <div class="texto">
                <h2><?php echo $not['titulo']; ?></h2>
                <p><?php echo $not['texto']; ?> </p>
                </div>

              <?php  endif ?>
              <?php endforeach; ?>
              <?php endforeach; ?>

         <div class="pagination">
        <div class="pag_item" ><a href="<?php echo BASE; ?>noticias?p=<?php echo $p-1; ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span></a></div>
        <?php
        $conta = ceil($total_noticias = 3);
        for($q=1;$q <= $conta;$q++): ?>
        <div class="pag_item <?php echo($q==$p)?'pag_ativo':''; ?>"><a href="<?php echo BASE; ?>noticias?p=<?php echo $q; ?>"><?php echo $q; ?></a></div>

        <?php endfor; ?>

        <?php if($p>$conta): ?>
          <div style="color: #FFFFFF" class="pag_item <?php echo $p?'pag_ativo':''; ?>"><?php echo $p; ?></div>
          <?php endif; ?>


        <div class="pag_item" ><a href="<?php echo BASE; ?>noticias?p=<?php echo $p+1; ?>" aria-label="Next">
            <span aria-hidden="true">&raquo;</span></a></div>

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
