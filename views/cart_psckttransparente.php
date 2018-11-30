<head>
  <meta charset="UTF-8" />
  <title>Checkout Transparente - Pagseguro</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="<?php echo BASE; ?>assets/css/cadastro.css" />

</head>
<body style=" background: url('<?php echo BASE; ?>assets/img/bg.jpg') no-repeat center center fixed; 
   -webkit-background-size: cover;
   -moz-background-size: cover;
   -o-background-size: cover;
   background-size: cover;" >
  <div class="container" style="width: 100%; height: 100%">

<div id="cadastro">
          <h1>Dados Pessoais</h1> 
           
          <p> 
            <label for="nome_cad">Nome</label>
            <input name="name" required="required" type="text" value="welton viana cardoso" />
          </p>
          <p> 
            <label for="nome_cad">CPF</label>
            <input  name="cpf" required="required" type="text" value="93346557120" />
          </p>
          <p> 
            <label for="nome_cad">Telefone</label>
            <input  name="telefone" required="required" type="text" value="61994107525" />
          </p>
          <p> 
            <label for="nome_cad">E-mail</label>
            <input  name="email" required="required" type="email" value="75128610136929672058@sandbox.pagseguro.com.br" />
          </p>
          <p> 
            <label for="nome_cad">Senha</label>
            <input  name="password" required="required" type="password"/>
          </p>



 <h1>Informações de Endereço</h1>

 <p> 
            <label for="nome_cad">CEP</label>
            <input  name="cep" required="required"  type="text" value="72301407" />
          </p><p> 
            <label for="nome_cad">Rua</label></br>
            <input  name="rua" required="required"  type="text" value="Qr 111, conjunto 07, lote" />
          </p><p> 
            <label for="nome_cad">Numero</label>
            <input  name="numero" required="required"  type="text" value="14" />
          </p><p> 
            <label for="nome_cad">Complemento</label>
            <input  name="complemento"  type="text" value="" />
          </p><p> 
            <label for="nome_cad">Bairro</label>
            <input  name="bairro" required="required"  type="text" value="Samambaia sul" />
          </p><p> 
            <label for="nome_cad">Cidade</label>
            <input  name="cidade" required="required"  type="text" value="Samambaia" />
          </p><p> 
            <label for="nome_cad">Estado</label>
            <input  name="estado" required="required"  type="text" value="DF" />
          </p>

<h1>Informações de Pagamento</h1>

<p> 
            <label for="nome_cad">Titular do cartão</label>
            <input  name="cartao_titular" required="required"  type="text" value="welton viana cardoso" />
          </p>
          <p> 
            <label for="nome_cad">CPF do Titular</label>
            <input name="cartao_cpf" required="required"  type="text" value="93346557120" />
          </p>
          <p> 
            <label for="nome_cad">Número do cartão</label>
            <input  name="cartao_numero" required="required"  type="text" value="" />
          </p>
          <p> 
            <label for="nome_cad">Código de Segurança</label>
            <input  name="cartao_cvv" required="required"  type="text" value="" />
          </p>
          <p> 
            <label for="nome_cad">Validade</label>
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
			</select>
          </p>
          <p> 
            <label for="nome_cad">Parcelas</label>
            <select name="parc"></select><br/><br/>
          </p>

<input type="hidden" name="total" value="<?php echo $total; ?>" />
<p> 
            <input class="efetuarCompra" type="submit" value="Efetuar Pagamento"/> 
          </p> 
</div>
</div>
<div class="parceiro-div">
 <img src="<?php echo BASE; ?>assets/img/comprasegura.png" border="0">        
</div>
<!-- tirar sandbox quando for producao -->
<script type="text/javascript" src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>
<script type="text/javascript" src="<?php echo BASE; ?>assets/js/psckttransparente.js"></script>
<script type="text/javascript">
PagSeguroDirectPayment.setSessionId("<?php echo $sessionCode; ?>");
</script>

</body>
</html>