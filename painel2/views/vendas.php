<?php
global $config;
?>
<h1>Vendas</h1>

<table class="table table-striped">
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
				<a href="<?php echo BASE; ?>vendas/ver/<?php echo $venda['id']; ?>">Visualizar</a>
			</td>
		</tr>
	<?php endforeach; ?>
</table>