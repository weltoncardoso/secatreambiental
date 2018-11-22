<!DOCTYPE html>
<html>
<head></head>
<meta charset="utf-8">
<body>




<h1>Leis - Editar</h1>
</br>

<form method="POST" enctype="multipart/form-data">
        <table border="1" width="100%">
<tr>
	<td>
		    <label form="nome">Nome</label><br/>

	<input type="text" name="nome" value="<?php echo $leis['nome']; ?>" placeholder="Nome" class="form-control" /><br/>
</td>
<td>
 <label form="categoria">Categoria</label><br/>

    <select name="categoria" class="form-control">
    <option value="leis distritais" <?php echo ($leis['categoria']=='leis distritais')?'selected="selected"':'';?>>Leis Distritais</option>
    <option value="leis federais" <?php echo ($leis['categoria']=='leis federais')?'selected="selected"':'';?>>Leis Federais</option>
    <option value="biografias" <?php echo ($leis['categoria']=='biografias')?'selected="selected"':'';?>>Biografias</option>
    <option value="outras" <?php echo ($leis['categoria']=='outras')?'selected="selected"':'';?>>Outras</option>
    </select></br>
</td>
</tr>
<tr>	  
<td colspan="2">
<br/>
	<input type="file" name="pdfs" />
    <label form="pdfs">PDF</label><br/>
	<?php foreach($pdfs as $pd): ?>
		<?php if ($leis['id']== $pd['id_lei']): ?>
<?php echo $pd['url']; ?>
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