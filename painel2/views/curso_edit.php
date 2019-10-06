<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>Cadastro de novo Curso</title>
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
     
    <div class="content">      

<div id="cadastro">
        <form method="POST" enctype="multipart/form-data"> 
          <h1>Editar Curso</h1> 
           
          <p> 
            <label for="nome_cad">Nome do Curso</label>
            <input id="nome_cad" name="nome" required="required" type="text" value="<?php echo $curso['nome']; ?>" />
          </p>
           
          <p> 
            <label for="nome_cad">Descrição</label>
            <input id="nome_cad" name="descricao" type="text" value="<?php echo $curso['descricao']; ?>" />
          </p>
          <p> 
            <label for="nome_cad">preço</label>
            <input id="nome_cad" name="preco" type="text" value="<?php echo $curso['preco']; ?>" />
          </p>
           
          <p> 
            <label for="Imagem">Imagem</label>
            <input id="imagem" name="imagem" type="file"/>
            <label for="Imagem">Imagem atual</label><br/>
            <img src="<?php echo BASE; ?>../painel2/assets/images/<?php echo $curso['imagem']; ?>" border="0" height="80">
          </p>

          <p> 
            <label for="Imagem">Certificado</label>
            <input id="certificado" name="certificado" type="file"/>
            <label for="Imagem">Certificado atual</label><br/>
            <img src="<?php echo BASE; ?>../curso/certificados/img/<?php echo "bg-".$curso['type'].".png"; ?>" border="0" height="80">
          </p>
           
          <p> 
            <input type="submit" value="Salvar Curso"/> 
          </p>
             </form>
      </div>
    </div>
    <!--  -->
    <div class="content2" > 
<div id="cadastro">
          <form method="POST">
          <h1>Módulos</h1>  
            <p>
            <h2>Adicionar Módulo</h2>
          <label for="nome_cad">Nome do Módulo</label>
            <input id="nome_cad" name="modulo" required="required" type="text" placeholder="Digite o nome do Modulo" />
          </p>
          <p> 
            <input type="submit" value="Salvar Modulo"/> 
          </p>
          </form>
          <p>
                       <?php foreach ($modulos as $modulo): ?>
               <h2> <?php echo utf8_encode($modulo['nome']) ?><div class="botaoExcMod" align="center">
        <a href="<?php echo BASE; ?>home/del_modulo/<?php echo $modulo['id']; ?>">Excluir</a>
          </div></h2>
             <?php endforeach ?>
             </p>
      </div>
    </div>
    <!--  -->
    <!--  -->
    <div class="content3"> 
<div id="cadastro">
        <form method="POST">
          <h1>Aulas</h1>  
            <p>
            <h2>Adicionar Aula</h2>
          <label for="nome_cad">Titulo da Aula</label>
          <input id="nome_cad" name="aula" required="required" type="text" placeholder="Digite o nome da Aula" />

            <label for="nome_cad">Modulo da Aula</label><br/>
            <select name="moduloaula" style="height: 30px; line-height: 30px;border-radius: 5px; width: 200px; color: #4a8f92; font-size: 17px">
              <?php foreach ($modulos as $modulo): ?>
              <option value="<?php echo $modulo['id']; ?>"><?php echo utf8_encode($modulo['nome']); ?></option>
            <?php endforeach; ?>
            </select><br/>

            <label for="nome_cad">Tipo da Aula</label><br/>
            <select name="tipo" style="height: 30px; line-height: 30px;border-radius: 5px; width: 200px; color: #4a8f92; font-size: 17px">
              <option value="video">Video</option>
              <option value="questionario">Questionario</option>
            </select>
          </p>
          <p> 
            <input type="submit" value="Adicionar Aula"/> 
          </p>
          </form>             
    <p>
   <?php foreach ($modulos as $modulo): ?>
   <h2> <?php echo utf8_encode($modulo['nome']) ?></h2>
    <?php foreach ($modulo['aulas'] as $aula): ?>
    <h5><?php echo utf8_encode($aula['nome']) ?>
    <div class="botaoExcAul" align="center">
        <a href="<?php echo BASE; ?>home/del_aula/<?php echo $aula['id']; ?>">Excluir</a></div>
    <div class="botaoEditAul" align="center">
        <a href="<?php echo BASE; ?>home/edit_aula/<?php echo $aula['id']; ?>">Editar</a></div>
      </h5>
    <?php endforeach; ?>
   <?php endforeach; ?>
             </p>            
      </div><br/><br/>
      <div style="clear:both"></div>
    </div><br/><br/>
    <div style="clear:both"></div>
  </div> <br/><br/>
  <div style="clear:both"></div>
</body>
</html>