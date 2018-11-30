<!DOCTYPE html>
<html>
<head></head>
<meta charset="utf-8">
<body>




<h1>Editar Slide</h1>
<form method="POST" enctype="multipart/form-data">
        <table border="1" width="100%">
<tr>
	<td>
		    <label form="nome">nome</label><br/>

	<input type="text" name="nome" value="<?php echo $slide['nome']; ?>" placeholder="nome" class="form-control" /><br/>
</td>

<td>
<br/>
	<input type="file" name="imagem" />
    <label form="imagem">Imagem</label><br/>
	<?php foreach($imagem as $img): ?>
		<?php if ($slide['id']== $img['id_slide']): ?>
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