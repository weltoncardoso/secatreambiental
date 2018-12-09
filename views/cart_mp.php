<head>
  <meta charset="UTF-8" />
  <title>Checkout Transparente - Pagseguro</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="<?php echo BASE; ?>assets/css/cadastro.css" />

</head>
<body style=" background: url('<?php echo BASE; ?>/assets/img/bg.jpg') no-repeat center center fixed; 
   -webkit-background-size: cover;
   -moz-background-size: cover;
   -o-background-size: cover;
   background-size: cover;" >
   <?php if(!empty($error)): ?>
<div class="warn">
  <?php echo $error; ?>
</div>
<?php endif; ?>
  <div class="container" style="width: 100%; height: 100%">

<div id="cadastro">
        <form method="POST"> 
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
            <input  name="email" required="required" type="email" value="testempsecatre@gmail.com" />
          </p>
          <p> 
            <label for="nome_cad">Senha</label>
            <input  name="password" required="required" type="password" value="12345"/>
          </p>



 <h1>Informações de Endereço</h1>

 <p> 
            <label for="nome_cad">CEP</label>
            <input  name="cep" required="required"  type="text" value="72301407" />
          </p><p> 
            <label for="nome_cad">Rua</label>
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

            <p>
            <input class="efetuarCompra" type="submit" value="Efetuar Pagamento"/> 
          </p>
          <p>
          <a style="color:#fff;text-decoration: none" href="JavaScript: window.history.back();">
          <div class="voltar" style="background-color: red; text-align: center ">Cancelar</div>
          </a>
          </p>
          </form> 
</div>
</div>
<div class="parceiro-div2">
 <img src="<?php echo BASE; ?>assets/img/mercadopago.png" border="0">        
</div>

</body>
</html>