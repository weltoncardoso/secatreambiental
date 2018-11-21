<!DOCTYPE html>
<html>
<head></head>
<meta charset="utf-8">
<body>




<h1>Noticias - Editar</h1>
<form method="POST" enctype="multipart/form-data">
        <table border="1" width="100%">
<tr>
	<td>
		    <label form="titulo">Titulo</label><br/>

	<input type="text" name="titulo" value="<?php echo $noticias['titulo']; ?>" placeholder="Titulo" class="form-control" /><br/>
</td>
<td>
	    <label form="descricao">Descrição</label><br/>

	<textarea name="descricao"  maxlength="500" placeholder="Descrição da Noticia" class="form-control"><?php echo $noticias['descricao']; ?></textarea><br/>
	</td>
</tr>
<tr>
	<td>
		    <label form="texto">Texto</label><br/>

	<textarea name="texto" placeholder="texto da Noticia" class="form-control"><?php echo $noticias['texto']; ?></textarea><br/>
</td>
<td>
<br/>
	<input type="file" name="imagem" />
    <label form="imagem">Imagem</label><br/>
	<?php foreach($imagem as $img): ?>
		<?php if ($noticias['id']== $img['id_noticia']): ?>
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