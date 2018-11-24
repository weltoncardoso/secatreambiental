<?php
global $config;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="<?php echo BASE; ?>assets/css/template.css" rel="stylesheet" />
</head>
<body style=" background: url('<?php echo BASE; ?>assets/images/bg.jpg') no-repeat center center fixed; 
   -webkit-background-size: cover;
   -moz-background-size: cover;
   -o-background-size: cover;
   background-size: cover;" >

<h1>Vendas</h1>
<div class="tabelavendas">

	<table border="0" width="80%">
	<thead>
		<tr>
			<th width="50">ID</th>
			<th>Nome do Aluno</th>
			<th>Valor</th>
			<th>Forma Pgto.</th>
			<th>Status</th>
			<th width="200">Ações</th>
		</tr>
	</thead>
	<?php foreach($vendas as $venda): ?>
		<tr>
			<td><?php echo $venda['id']; ?></td>
			<td><?php echo $venda['nome_usuario']; ?></td>
			<td>R$ <?php echo $venda['total_amount']; ?></td>
			<td><?php echo $venda['pg_nome']; ?></td>
			<td><?php echo $config['status_pgto'][$venda['payment_status']]; ?></td>
			<td>
			<div class="botaovizualizar" >
				<a href="<?php echo BASE; ?>vendas/ver/<?php echo $venda['id']; ?>">Visualizar</a></div>
			</td>
		</tr>
	<?php endforeach; ?>
</table>
</div>

</body>
</html>
