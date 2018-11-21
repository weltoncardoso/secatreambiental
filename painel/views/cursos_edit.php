<!DOCTYPE html>
<html>
<head></head>
<meta charset="utf-8">
<body>




<h1>Cursos - Editar</h1>
</br>
<form method="POST" enctype="multipart/form-data">
        <table border="1" width="100%">
<tr>
	<td>
		    <label form="nome">Nome</label><br/>

	<input type="text" name="nome" value="<?php echo $cursos['nome']; ?>" placeholder="nome" class="form-control" /><br/>
</td>
<td>
	    <label form="descricao">Descrição</label><br/>

	<textarea name="descricao"  maxlength="500" placeholder="Descrição da Noticia" class="form-control"><?php echo $cursos['descricao']; ?></textarea><br/>
	</td>
</tr>
<tr>
	<td>
		    <label form="preco">Preco</label><br/>

	<textarea name="preco" placeholder="Preco do Curso" class="form-control"><?php echo $cursos['preco']; ?></textarea><br/>
</td>
<td>
<br/>
	<input type="file" name="imagem" />
    <label form="imagem">Imagem</label><br/>
	<?php foreach($imagem as $img): ?>
		<?php if ($cursos['id']== $img['id_curso']): ?>
	<img src="<?php echo BASE; ?>assets/images/prods/<?php echo $img['url']?>" border="0" height="100" />
	<br/><br/>
        <?php endif ?>
    <?php endforeach; ?>
</td>
</tr>
</table>
<br/>
<div style="text-align:center">
    <input type="submit" value="Editar" class="btn btn-default" /></div>

</form>

</body>
</html>