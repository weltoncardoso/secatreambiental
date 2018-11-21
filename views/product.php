<!doctype html>
<html lang="en">
<style type="text/css">
tr:nth-child(even) {background: #eee}
tr:nth-child(odd) {background: #ccc}
table{margin-top: 20px;margin-bottom: 60px;margin-left: 25%;}
table th{height: 40px;line-height: 40px;text-align: left;padding-left: 10px;padding-right: 10px;}
table td{height: 40px;line-height: 40px;text-align: left;padding-left: 10px;padding-right: 10px;}</style>
 
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


    <?php include('footer.php'); ?>

  </body>
</html>