<h1>Noticias</h1>

<div style="text-align:center">
<a href="<?php echo BASE; ?>noticias/add" class="btn btn-default" style="background-color:#ff0000; color:#ffffff">Adicionar Noticias</a>
</div>
</br></br>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Imagem</th>
			<th>Titulo</th>
			<th>Descricao</th>
			<th width="200">Acoes</th>
		</tr>
	</thead>


	<?php foreach($images as $img): ?>
	<?php foreach($noticias as $not):?>


		<tr> 
		<?php if ($not['id']== $img['id_noticia']): ?>
			<td width="110"><img src="<?php echo BASE; ?>assets/images/prods/<?php echo $img['url']?>" border="0" height="80" /></td> 
		<td><?php echo $not['titulo']; ?></td>
	    <td><?php echo $not['descricao']; ?></td>
		<td>
			<a href="<?php echo BASE; ?>noticias/edit/<?php echo $not['id']; ?>" class="btn btn-default">Editar</a>
			<a href="<?php echo BASE; ?>noticias/remove/<?php echo $not['id']; ?>" class="btn btn-default">Excluir</a>
		</td>
	</tr>
        <?php  endif ?>
	<?php endforeach; ?>
	<?php endforeach; ?>
</table>

<div style="text-align: center">
 <div class="pagination">
<div class="pag_item" ><a href="<?php echo BASE; ?>noticias?p=<?php echo $p-1; ?>" aria-label="Previous">
<span aria-hidden="true">&laquo;</span></a></div>
<?php
$conta = ceil($total_noticias = 3);
for($q=1;$q <= $conta;$q++): ?>
<div class="pag_item <?php echo($q==$p)?'pag_ativo':''; ?>"><a href="<?php echo BASE; ?>noticias?p=<?php echo $q; ?>"><?php echo $q; ?></a></div>

<?php endfor; ?>

<?php if($p>$conta): ?>
  <div style="color: #FFFFFF" class="pag_item <?php echo $p?'pag_ativo':''; ?>"><?php echo $p; ?></div>
  <?php endif; ?>


<div class="pag_item" ><a href="<?php echo BASE; ?>noticias?p=<?php echo $p+1; ?>" aria-label="Next">
    <span aria-hidden="true">&raquo;</span></a></div>

</div>
</div>









