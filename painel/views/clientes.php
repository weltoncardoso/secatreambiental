<h1>Clientes</h1>
<div style="text-align:center"></br>
<a href="<?php echo BASE; ?>clientes/add" class="btn btn-default" style="background-color:#0000ff; color:#ffffff">Adicionar Clientes</a>
</div>
</br></br>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Imagem</th>
			<th>Nome</th>
			<th>Estado</th>
			<th>Qtde Alunos</th>
			<th width="200">Acões</th>
		</tr>
	</thead>


	<?php foreach($images as $img): ?>
	<?php foreach($clientes as $not):?>


		<tr> 
		<?php if ($not['id']== $img['id_cliente']): ?>
			<td width="110"><img src="<?php echo BASE; ?>assets/images/prods/<?php echo $img['url']?>" border="0" height="80" width="160" /></td> 
		<td><?php echo $not['nome']; ?></td>
		<td><?php echo $not['estado']; ?></td>
	    <td><?php echo $not['alunos']; ?></td>
		<td>
			<a href="<?php echo BASE; ?>clientes/edit/<?php echo $not['id']; ?>" class="btn btn-default" style="background-color:blue; color:#fff;">Editar</a>
			<a href="<?php echo BASE; ?>clientes/remove/<?php echo $not['id']; ?>" style="background-color:#FF0000; color:#FFFFFF" class="btn btn-default">Excluir</a>
		</td>
	</tr>
        <?php  endif ?>
	<?php endforeach; ?>
	<?php endforeach; ?>
</table>


<div style="text-align: center">
 <div class="pagination">
<div class="pag_item" ><a href="<?php echo BASE; ?>clientes?p=<?php echo $p-1; ?>" aria-label="Previous">
<span aria-hidden="true">&laquo;</span></a></div>
<?php
$conta = ceil($total_noticias = 3);
for($q=1;$q <= $conta;$q++): ?>
<div class="pag_item <?php echo($q==$p)?'pag_ativo':''; ?>"><a href="<?php echo BASE; ?>clientes?p=<?php echo $q; ?>"><?php echo $q; ?></a></div>

<?php endfor; ?>

<?php if($p>$conta): ?>
  <div style="color: #FFFFFF" class="pag_item <?php echo $p?'pag_ativo':''; ?>"><?php echo $p; ?></div>
  <?php endif; ?>


<div class="pag_item" ><a href="<?php echo BASE; ?>clientes?p=<?php echo $p+1; ?>" aria-label="Next">
    <span aria-hidden="true">&raquo;</span></a></div>

</div>
</div>









