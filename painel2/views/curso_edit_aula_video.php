<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>Cadastro Curso</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="<?php echo BASE; ?>assets/css/cadastro.css" />
</head>
<body style=" background: url('<?php echo BASE; ?>/assets/images/bg.jpg') no-repeat center center fixed; 
   -webkit-background-size: cover;
   -moz-background-size: cover;
   -o-background-size: cover;
   background-size: cover;" >
  <div class="container">
    <a class="links" id="paracadastro"></a>
     
    <div class="content" style="margin-left: 35%; margin-right: 35%">      

<div id="cadastro">
        <form method="POST"> 
          <h1>Editar Aula Vídeo</h1> 
           
          <p> 
            <label for="nome_cad">Titulo da Aula</label>
            <input id="nome_cad" name="nome" required="required" type="text" value="<?php echo $aula['nome']; ?>" />
          </p>
           
          <p> 
            <label for="nome_cad">Descrição</label>
            <input id="nome_cad" name="descricao" type="text" value="<?php echo $aula['descricao']; ?>" />
          </p>
           
          <p> 
            <label for="Imagem">URL do Video</label>
            <input id="nome_cad" name="url" type="text" value="<?php echo $aula['url']; ?>" />
          </p>
           
          <p> 
            <input type="submit" value="Salvar Aula"/> 
          </p>
             </form>
      </div>
    </div>
     </div> <br/><br/>
  <div style="clear:both"></div>
</body>
</html>