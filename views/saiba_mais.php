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
          CURIOSIDADES
      </div>

	   
	   <div class="table-responsive">

<h1>Saiba mais</h1>
<table width="65%" style="margin: 0 15% 0 15%" >
	<thead>
		<tr>
			<th style="width: 50%; text-align: center;">Documento</th>
      <th style="text-align: center">Descrição</th>

		</tr>
	</thead>


	<?php foreach($leisoutras as $not):?>
		<tr>
		<td style="background-color: #dee2e6;
  border-bottom: 2px solid #fff">
  <a target="_blank" style="text-decoration: none" href="<?php echo BASE; ?>leis/view/<?php echo $not['id']; ?>" title="Clic para abrir o documento em PDF!">
      <?php echo $not['nome']; ?></a></td>
      <td style="background-color: #dee2e6;
  border-bottom: 2px solid #fff">
  <?php echo $not['descricao']; ?>
</td>
	</tr>
	<?php endforeach; ?>
<tr>
<td colspan="2" style="margin-left:10px">
 <div class="pagination_leis">
        <div class="pag_item" ><a href="<?php echo BASE; ?>saiba_mais?p=<?php echo $p-1; ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span></a></div>
        <?php
        $conta = ceil($total_leis_outras = 3);
        for($q=1;$q <= $conta;$q++): ?>
        <div class="pag_item <?php echo($q==$p)?'pag_ativo':''; ?>"><a href="<?php echo BASE; ?>saiba_mais?p=<?php echo $q; ?>"><?php echo $q; ?></a></div>
        <?php endfor; ?>
        <?php if($p>$conta): ?>
          <div style="color: #FFFFFF" class="pag_item <?php echo $p?'pag_ativo':''; ?>"><?php echo $p; ?></div>
          <?php endif; ?>
        <div class="pag_item" ><a href="<?php echo BASE; ?>saiba_mais?p=<?php echo $p+1; ?>" aria-label="Next">
            <span aria-hidden="true">&raquo;</span></a></div>
  </div>

</td>

	</tr>
</table>
<div>
</div>

  </div>


    <?php include('footer.php'); ?>

  </body>
</html>