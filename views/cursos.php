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

    <div style="padding-left:30px;"class="tab" align="center">
          CURSOS
          <div class="" style="margin-top: 0; float: right;">
        <a href="<?php echo BASE; ?>cart">
          <div class="cartarea">
            <div class="carticon">
              <div class="cartqt"><?php echo $viewData['curso_qt']; ?></div>
            </div>
            <div class="carttotal">
              <span>R$ <?php echo number_format($viewData['curso_subtotal'], 2, ',', '.'); ?></span>
            </div>
          </div>
        </a>
          </div>
      </div>
    </div>

     <div class="table-responsive">
<div style="min-height: 550px">
<table width="80%"  >
  <thead>
    <tr>
      <th>Imagem</th>
      <th>Nome</th>
      <th width="500">Descriçao</th>
      <th>Preço</th>
      <th width="50">Acoes</th>
    </tr>
  </thead>


  <?php foreach($cursos as $not):?>

    <tr>
    <td width="50" ><img src="<?php echo BASE; ?>curso/assets/images/cursos/<?php echo $not['imagem']?>" border="0" height="75" /></td>
    <td style="padding-left: 10px"><?php echo $not['nome']; ?></td>
      <td width="500" style="padding-left: 10px"><?php echo $not['descricao']; ?></td>
      <td width="100" align="center"><?php echo number_format($not['preco'], 2,',','.'); ?></td>
    <td>
      <a href="<?php echo BASE; ?>product/open/<?php echo $not['id']; ?>" class="btn btn-default">Visualizar Curso</a>
    </td>
  </tr>
  <?php endforeach; ?>

  <tr>
<td colspan="5" style="margin-left:10px">
<?php
$conta = ceil($total_cursos / $limit_cursos);
for($q=1;$q <= $conta;$q++): ?>

<a href="<?php echo BASE; ?>cursos?p=<?php echo $q; ?>"><?php echo $q; ?></a>

<?php endfor; ?>

</td>

  </tr>
</table>

</div>
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