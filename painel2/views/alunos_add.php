<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>Cadastro Aluno</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="<?php echo BASE; ?>assets/css/cadastro.css" />
</head>
<body style=" background: url('<?php echo BASE; ?>/assets/images/bg.jpg') no-repeat center center fixed; 
   -webkit-background-size: cover;
   -moz-background-size: cover;
   -o-background-size: cover;
   background-size: cover;" >
  <div class="container" style="background-image: url('<?php echo BASE; ?>/assets/images/bg.jpg'); background-repeat: no-repeat" >
    <a class="links" id="paracadastro"></a>
     
    <div class="content" style="margin-left: 35%; margin-right: 35%">      

<div id="cadastro">
        <form method="POST" enctype="multipart/form-data"> 
          <h1>Adicionar Aluno</h1> 
           
          <p> 
            <label for="nome_cad">Nome do Aluno</label>
            <input id="nome_cad" name="nome" required="required" type="text" placeholder="Nome do Aluno" />
          </p>
           
          <p> 
            <label for="nome_cad">E-mail</label>
            <input id="nome_cad" name="email" type="text" required="required" placeholder="E-mail ou login" />
          </p>
           
          <p> 
            <label for="Imagem">Senha</label>
            <input id="nome_cad" name="senha" type="password" required="required" placeholder="Senha do Aluno"/>
          </p>
           
          <p> 
            <input type="submit" value="Adicionar Aluno"/> 
          </p>
             </form>
      </div>
    </div>
  </div>  
</body>
</html>