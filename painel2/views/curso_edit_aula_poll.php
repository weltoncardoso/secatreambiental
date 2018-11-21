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
          <h1>Editar Aula Questionário</h1> 
           
          <p> 
            <label for="nome_cad">Pergunta</label>
            <input id="nome_cad" name="pergunta" required="required" type="text" value="<?php echo $aula['pergunta']; ?>" />
          </p>
           
          <p> 
            <label for="nome_cad">Opção 1</label>
            <input id="nome_cad" name="opcao1" type="text" value="<?php echo $aula['opcao1']; ?>" />
          </p>
           <p> 
            <label for="nome_cad">Opção 2</label>
            <input id="nome_cad" name="opcao2" type="text" value="<?php echo $aula['opcao2']; ?>" />
          </p>
          <p> 
            <label for="nome_cad">Opção 3</label>
            <input id="nome_cad" name="opcao3" type="text" value="<?php echo $aula['opcao3']; ?>" />
          </p>
          <p> 
            <label for="nome_cad">Opção 4</label>
            <input id="nome_cad" name="opcao4" type="text" value="<?php echo $aula['opcao4']; ?>" />
          </p>
          <p> 
            <label for="nome_cad">Resposta</label>
            <select name="resposta" style="height: 30px; line-height: 30px;border-radius: 5px; width: 200px; color: #4a8f92; font-size: 17px">
              <option value="1" <?php echo ($aula['resposta']=='1')?'selected="selected"':''; ?>>Opção 1</option>
              <option value="2" <?php echo ($aula['resposta']=='2')?'selected="selected"':''; ?>>Opção 2</option>
              <option value="3" <?php echo ($aula['resposta']=='3')?'selected="selected"':''; ?>>Opção 3</option>
              <option value="4" <?php echo ($aula['resposta']=='4')?'selected="selected"':''; ?>>Opção 4</option>
            </select>
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