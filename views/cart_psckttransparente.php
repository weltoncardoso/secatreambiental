<h1>Checkout Transparente - Pagseguro</h1>

<h3>Dados Pessoais</h3>

<strong>Nome:</strong><br/>
<input type="text" name="name" value="Welton cardoso" /><br/><br/>

<strong>CPF:</strong><br/>
<input type="text" name="cpf" value="93346557120" /><br/><br/>

<strong>Telefone:</strong><br/>
<input type="text" name="telefone" value="61994107525" /><br/><br/>

<strong>E-mail:</strong><br/>
<input type="email" name="email" value="c75128610136929672058@sandbox.pagseguro.com.br" /><br/><br/>

<strong>Senha:</strong><br/>
<input type="password" name="password" value="bPU355KuTuF27p1B" /><br/><br/>

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

<h3>Informações de Pagamento</h3>

<strong>Titular do cartão:</strong><br/>
<input type="text" name="cartao_titular" value="Welton cardoso" /><br/><br/>

<strong>CPF do Titular do cartão:</strong><br/>
<input type="text" name="cartao_cpf" value="93346557120" /><br/><br/>

<strong>Número do cartão:</strong><br/>
<input type="text" name="cartao_numero" /><br/><br/>

<strong>Código de Segurança:</strong><br/>
<input type="text" name="cartao_cvv" value="123" /><br/><br/>

<strong>Validade:</strong><br/>
<select name="cartao_mes">
	<?php for($q=1;$q<=12;$q++): ?>
	<option><?php echo ($q<10)?'0'.$q:$q; ?></option>
	<?php endfor; ?>
</select>
<select name="cartao_ano">
	<?php $ano = intval(date('Y')); ?>
	<?php for($q=$ano;$q<=($ano+20);$q++): ?>
	<option><?php echo $q; ?></option>
	<?php endfor; ?>
</select><br/><br/>

<strong>Parcelas:</strong><br/>
<select name="parc"></select><br/><br/>

<input type="hidden" name="total" value="<?php echo $total; ?>" />

<button class="button efetuarCompra">Efetuar Compra</button>










<script type="text/javascript" src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/psckttransparente.js"></script>
<script type="text/javascript">
PagSeguroDirectPayment.setSessionId("<?php echo $sessionCode; ?>");
</script>