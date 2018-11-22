<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>Cadastro de novo Curso</title>
  <meta name="viewport" content="width=device-width, initial-scale=5.0"> 
  <link rel="stylesheet" type="text/css" href="<?php echo BASE; ?>assets/css/cadastro.css" />
  
</head>
<body style=" background: url('<?php echo BASE; ?>/assets/images/bg.jpg') no-repeat center center fixed; 
   -webkit-background-size: cover;
   -moz-background-size: cover;
   -o-background-size: cover;
   background-size: cover;" >
  <div class="container" style="background-image: url('<?php echo BASE; ?>assets/images/bg.jpg'); background-repeat: no-repeat" >
    <a class="links" id="paracadastro"></a>
     
    <div class="content" style="margin-left: 35%; margin-right: 35%">      

<div id="cadastro">
        <form method="POST" enctype="multipart/form-data"> 
          <h1>Adicionar Curso</h1> 
           
          <p> 
            <label for="nome_cad">Nome do Curso</label>
            <input id="nome_cad" name="nome" required="required" type="text" placeholder="Nome do Curso" />
          </p>
           
          <p> 
            <label for="nome_cad">Descrição</label>
            <input id="nome_cad" name="descricao" type="text" placeholder="Descrição do Curso" />
          </p>
          <p> 
            <label for="nome_cad">Preço</label>
            <input id="preco" name="preco" type="number" placeholder="0.00" />
          </p>
           
          <p> 
            <label for="Imagem">Imagem</label>
            <input id="imagem" name="imagem" type="file" required="required"/>
          </p>
           
          <p> 
            <input type="submit" value="Adicionar Curso"/> 
          </p>
             </form>
      </div>
    </div>
  </div> 
</body>
</html>