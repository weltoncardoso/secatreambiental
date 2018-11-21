<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="shortcut icon" href="<?php echo BASE; ?>assets/img/thor.ico">
    <link rel="stylesheet" href="<?php echo BASE; ?>assets/fonts/font-awesome/css/all.css" />
    <link rel="stylesheet" href="<?php echo BASE; ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE; ?>assets/css/style.css">

    <title>Secatre Ambiental</title>
  </head>
  <body>    

    <?php include('header.php'); ?>

    <div class="tab">
      <div class="container" align="center">
        Administraçao da Empresa
      </div>
    </div>

    <section class="about-page py-5 my-5">
      <div class="container">

<script>
function openWinSite() {
    window.open("<?php echo BASE; ?>painel");
}
function openWinCurso() {
    window.open("<?php echo BASE; ?>painel2");
}
</script>


</br>
<div style="text-align:center">
          <button type="button" class="btn btn-primary" style="background-color:#FF0000;"  onclick="openWinSite()"> Painel do Site</a></button>
           <button type="button" class="btn btn-primary" style="background-color:#0000FF"  onclick="openWinCurso()">Painel do Curso</a></button>
</div>


      </div>
    </section>

    <?php include('footer.php'); ?>

  </body>
</html>








