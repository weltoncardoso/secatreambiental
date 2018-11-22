<!doctype html>
<html >
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800,900" rel="stylesheet">
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

  </body>
</html>








