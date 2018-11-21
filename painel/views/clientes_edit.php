<!DOCTYPE html>
<html>
<head></head>
<meta charset="utf-8">
<body>




<h1>Clientes - Editar</h1>
</br>

<form method="POST" enctype="multipart/form-data">

        <table border="1" width="100%">
    <tr>
        <td>
    <label form="name">Nome</label><br/>

	<input type="text" name="nome" value="<?php echo $clientes['nome']; ?>" placeholder="Nome" class="form-control" /><br/>
</td>
<td>
    <label form="estado">Estado</label><br/>

 <select name="estado" class="form-control">
    <option value="AC" <?php echo ($clientes['estado']=='AC')?'selected="selected"':'';?>>Acre</option>
    <option value="AL" <?php echo ($clientes['estado']=='AL')?'selected="selected"':'';?>>Alagoas</option>
    <option value="AP" <?php echo ($clientes['estado']=='AP')?'selected="selected"':'';?>>Amapá</option>
    <option value="AM" <?php echo ($clientes['estado']=='AM')?'selected="selected"':'';?>>Amazonas</option>
    <option value="BA" <?php echo ($clientes['estado']=='BA')?'selected="selected"':'';?>>Bahia</option>
    <option value="CE" <?php echo ($clientes['estado']=='CE')?'selected="selected"':'';?>>Ceará</option>
    <option value="DF" <?php echo ($clientes['estado']=='DF')?'selected="selected"':'';?>>Distrito Federal</option>
    <option value="ES" <?php echo ($clientes['estado']=='ES')?'selected="selected"':'';?>>Espírito Santo</option>
    <option value="GO" <?php echo ($clientes['estado']=='GO')?'selected="selected"':'';?>>Goiás</option>
    <option value="MA" <?php echo ($clientes['estado']=='MA')?'selected="selected"':'';?>>Maranhão</option>
    <option value="MT" <?php echo ($clientes['estado']=='MT')?'selected="selected"':'';?>>Mato Grosso</option>
    <option value="MS" <?php echo ($clientes['estado']=='MS')?'selected="selected"':'';?>>Mato Grosso do Sul</option>
    <option value="MG" <?php echo ($clientes['estado']=='MG')?'selected="selected"':'';?>>Minas Gerais</option>
    <option value="PA" <?php echo ($clientes['estado']=='PA')?'selected="selected"':'';?>>Pará</option>
    <option value="PB" <?php echo ($clientes['estado']=='PB')?'selected="selected"':'';?>>Paraíba</option>
    <option value="PR" <?php echo ($clientes['estado']=='PR')?'selected="selected"':'';?>>Paraná</option>
    <option value="PE" <?php echo ($clientes['estado']=='PR')?'selected="selected"':'';?>>Pernambuco</option>
    <option value="PI" <?php echo ($clientes['estado']=='PI')?'selected="selected"':'';?>>Piauí</option>
    <option value="RJ" <?php echo ($clientes['estado']=='RJ')?'selected="selected"':'';?>>Rio de Janeiro</option>
    <option value="RN" <?php echo ($clientes['estado']=='RN')?'selected="selected"':'';?>>Rio Grande do Norte</option>
    <option value="RS" <?php echo ($clientes['estado']=='RS')?'selected="selected"':'';?>>Rio Grande do Sul</option>
    <option value="RO" <?php echo ($clientes['estado']=='RO')?'selected="selected"':'';?>>Rondônia</option>
    <option value="RR" <?php echo ($clientes['estado']=='RR')?'selected="selected"':'';?>>Roraima</option>
    <option value="SC" <?php echo ($clientes['estado']=='SC')?'selected="selected"':'';?>>Santa Catarina</option>
    <option value="SP" <?php echo ($clientes['estado']=='SP')?'selected="selected"':'';?>>São Paulo</option>
    <option value="SE" <?php echo ($clientes['estado']=='SE')?'selected="selected"':'';?>>Sergipe</option>
    <option value="TO" <?php echo ($clientes['estado']=='TO')?'selected="selected"':'';?>>Tocantins</option>
    </select></br>
</td>
</tr>
<tr>
    <td>
            <label form="alunos">Alunos</label><br/>

    	<input type="number" name="alunos" class="form-control" value="<?php echo $clientes['alunos']; ?>" placeholder="Quantidade de Alunos" class="form-control" /><br/>
</td>
<td>
</br>

	<input type="file" name="imagem" />
    <label form="image">Logo</label><br/>
	<?php foreach($imagem as $img): ?>
		<?php if ($clientes['id']== $img['id_cliente']): ?>
	<img src="<?php echo BASE; ?>assets/images/prods/<?php echo $img['url']?>" border="0" height="100" />
	<br/><br/>
        <?php endif ?>
    <?php endforeach; ?>
</td>
</table>
<div style="text-align:center">
    <input type="submit" value="Editar" class="btn btn-default" /></div>

</form>

</body>
</html>