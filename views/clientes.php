<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800,900" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo BASE; ?>assets/<?php echo BASE; ?>assets/img/thor.ico">
    <link rel="stylesheet" href="fonts/font-awesome/css/all.css" />
    <link rel="stylesheet" href="<?php echo BASE; ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE; ?>assets/css/style.css">

    <title>Secatre Ambiental</title>
  </head>
  <body>

    <?php include('header.php'); ?>

    <div class="tab">
      <div class="container" align="center">
        Nossos Clientes
      </div>
    </div>
    <div class="tudo">
<div class="clientestabela" style="float: left;">
     <div class="table-responsive">

  <table>
  <thead>
    <tr>
      <th>Logo</th>
      <th>Instituição</th>
      <th>UF</th>
      <th>Alunos</th>
    </tr>
  </thead>
  <?php foreach($images as $img): ?>
  <?php foreach($clientes as $not):?>
    <tr>
    <?php if ($not['id']== $img['id_cliente']): ?>
      <td width="110"><img src="./painel/assets/images/prods/<?php echo $img['url']?>" border="0" height="80" width="160" /></td>
    <td width="290"><?php echo $not['nome']; ?></td>
    <td width="80"><?php echo $not['estado']; ?></td>
      <td width="50"><?php echo $not['alunos']; ?></td>
  </tr>
  <?php  endif ?>
  <?php endforeach; ?>
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
<div class="mapa">

    <?php include('mapa.php'); ?>
</div>
<div style="clear:both"></div>
</div>

    <?php include('footer.php'); ?>

  </body>
</html>
