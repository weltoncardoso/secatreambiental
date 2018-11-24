<?php global $config; ?>
<h1>Venda </h1>

<fieldset>
	<legend>Informações da venda</legend>
	<table border="0" width="100%">
		<tr>
			<td valign="top" width="50%">
				<strong>ID da venda:</strong> <?php echo $venda['id']; ?><br/>
				<strong>Nome do cliente:</strong> <?php echo $venda['nome_usuario']; ?><br/>
				<strong>E-mail do cliente:</strong> <?php echo $venda['email']; ?><br/>
				<strong>Valor da venda:</strong> R$ <?php echo  number_format($venda['total_amount'], 2); ?><br/>
				<strong>Tipo de pagamento:</strong> <?php echo $venda['pg_nome']; ?><br/>
				<strong>Status de pagamento:</strong> <?php echo $config['status_pgto'][$venda['payment_status']]; ?><br/><br/>

				<form method="POST">
					<select name="status">
						<option></option>
						<?php foreach($config['status_pgto'] as $stid => $st): ?>
						<option value="<?php echo $stid; ?>"><?php echo $st; ?></option>
						<?php endforeach; ?>
					</select>
					<input type="submit" value="Alterar Status" />
				</form> 
			</td>
			<td valign="top">
				<strong>Endereço do Cliente:</strong><br/>
				
			 <strong>CEP: </strong><?php echo utf8_encode($venda['cep']); ?><br/>
			 <strong>RUA: </strong><?php echo utf8_encode($venda['rua']); ?><br/>
			 <strong>NUMERO: </strong><?php echo utf8_encode($venda['numero']); ?><br/>
			 <strong>COMPLEMENTO: </strong><?php echo utf8_encode($venda['complemento']); ?><br/>
			 <strong>BAIRRO: </strong><?php echo utf8_encode($venda['bairro']); ?><br/>
			 <strong>CIDADE: </strong><?php echo utf8_encode($venda['cidade']); ?><br/>
			 <strong>ESTADO: </strong><?php echo utf8_encode($venda['estado']); ?>
			</td>
		</tr>
	</table>
</fieldset>

<h3>Curso da venda</h3>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Imagem</th>
			<th>Nome</th>
			<th>Qtd.</th>
			<th>Preço</th>
		</tr>
	</thead>
	<?php foreach($produtos as $prod): ?>

	<tr>
      <td width="100"><img src="<?php echo BASE; ?>assets/images/<?php echo $prod['imagem'];?>" border="0" width="100" /></td>
		<td><?php echo $prod['name']; ?></td>
		<td><?php echo $prod['quantity']; ?></td>
		<td>R$ <?php echo number_format($prod['price'], 2); ?></td>
	</tr>
	<?php endforeach; ?>
</table>