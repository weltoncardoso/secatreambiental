<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>Cadastro de novo Aluno</title>
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
          <h1>Editar Aluno</h1> 
           
          <p> 
            <label for="nome_cad">Nome do Aluno</label>
            <input id="nome_cad" name="nome" required="required" type="text" value="<?php echo $aluno['nome']; ?>" />
          </p>
           
          <p> 
            <label for="nome_cad">E-mail</label>
            <input id="nome_cad" name="email" type="email" value="<?php echo $aluno['email']; ?>" />
          </p>
           
          <p> 
            <label for="nome_cad">Senha</label>
            <input id="nome_cad" name="senha" type="password" value="<?php echo $aluno['senha']; ?>"/>
          </p>
           <p>
            <label for="nome_cad">Cursos Inscrito</label>

             <select name="cursos[]" style="height: 150px; line-height: 30px; border-radius: 10px; width: 100%; color: #4a8f92; font-size: 17px" multiple>
               <?php foreach ($cursos as $curso): ?>
                 <option value="<?php echo $curso['id']; ?>" <?php
                    if (in_array($curso['id'], $inscrito)) {
                      echo 'selected="selected"';
                    }
                   ?>><?php echo $curso['nome']; ?></option>
               <?php endforeach; ?>
             </select>
           </p>
           <label for="nome_cad">Ps. Mantenha pressionado CTRL para marcar outros cursos!</label>
          <p> 
            <input type="submit" value="Salvar Aluno"/> 
          </p>
             </form>
      </div>
    </div>
  </div> <br/><br/>
  <div style="clear:both"></div>
</body>
</html>