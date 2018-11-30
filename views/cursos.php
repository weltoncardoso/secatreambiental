<!doctype html>
<html>

<style type="text/css">
table{margin-top: 60px;margin-bottom: 60px; margin-left: 120px}
</style>

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
    <div>
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
		<td width="110"><img src="<?php echo BASE; ?>curso/assets/images/cursos/<?php echo $not['imagem']?>" border="0" height="80" /></td>
		<td><?php echo $not['nome']; ?></td>
	    <td width="500"><?php echo $not['descricao']; ?></td>
	    <td><?php echo $not['preco']; ?></td>
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

  </body>
</html>
