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


    <?php include('footer.php'); ?>

  </body>
</html>
