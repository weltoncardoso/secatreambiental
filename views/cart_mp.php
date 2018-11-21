<h1>Checkout Mercado Pago</h1>

<?php if(!empty($error)): ?>
<div class="warn">
	<?php echo $error; ?>
</div>
<?php endif; ?>

<h3>Dados Pessoais</h3>

<form method="POST">
	<strong>Nome:</strong><br/>
<input type="text" name="name" value="Welton cardoso" /><br/><br/>

<strong>CPF:</strong><br/>
<input type="text" name="cpf" value="93346557120" /><br/><br/>

<strong>Telefone:</strong><br/>
<input type="text" name="telefone" value="61994107525" /><br/><br/>

<strong>E-mail:</strong><br/>
<input type="email" name="email" value="testemp@hotmail.com" /><br/><br/>

<strong>Senha:</strong><br/>
<input type="password" name="password" value="123" /><br/><br/>

<h3>Informações de Endereço</h3>

<strong>CEP:</strong><br/>
<input type="text" name="cep" value="72301407" /><br/><br/>

<strong>Rua:</strong><br/>
<input type="text" name="rua" value="Rua sn" /><br/><br/>

<strong>Número:</strong><br/>
<input type="text" name="numero" value="00" /><br/><br/>

<strong>Complemento:</strong><br/>
<input type="text" name="complemento" /><br/><br/>

<strong>Bairro:</strong><br/>
<input type="text" name="bairro" value="Samambaia sul" /><br/><br/>

<strong>Cidade:</strong><br/>
<input type="text" name="cidade" value="Distrito Federal" /><br/><br/>

<strong>Estado:</strong><br/>
<input type="text" name="estado" value="DF" /><br/><br/>
<input type="submit" value="Efetuar Compra" class="button efetuarCompra" />
</form>