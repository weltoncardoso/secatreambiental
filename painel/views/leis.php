<h1>Leis e Normas</h1>

<div style="text-align:center">
<a href="<?php echo BASE; ?>leis/add" class="btn btn-default" style="background-color:#ff0000; color:#ffffff">Adicionar Leis e Normas</a>
</div>
</br>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Categoria</th>
			<th width="200">Acoes</th>
		</tr>
	</thead>


	<?php foreach($leis as $not):?>


		<tr> 
		<td><?php echo $not['nome']; ?></td>
		<td><?php echo $not['categoria']; ?></td>
		<td width="300">
		    <a target="_blank" href="<?php echo BASE; ?>leis/view/<?php echo $not['id']; ?>" style="background-color:#0000FF; color:#FFFFFF" class="btn btn-default">Ver PDF</a>
			<a href="<?php echo BASE; ?>leis/edit/<?php echo $not['id']; ?>" class="btn btn-default">Editar</a>
			<a href="<?php echo BASE; ?>leis/remove/<?php echo $not['id']; ?>" class="btn btn-default">Excluir</a>
		</td>
	</tr>
	<?php endforeach; ?>
</table>


<div style="text-align: center">
 <div class="pagination">
<div class="pag_item" ><a href="<?php echo BASE; ?>leis?p=<?php echo $p-1; ?>" aria-label="Previous">
<span aria-hidden="true">&laquo;</span></a></div>
<?php

$conta = ceil($total_leis = 3);
$limit = ceil($total_leis / $limit_leis);
for($q=1;$q <= $conta;$q++): ?>
<div class="pag_item <?php echo($q==$p)?'pag_ativo':''; ?>"><a href="<?php echo BASE; ?>leis?p=<?php echo $q; ?>"><?php echo $q; ?></a></div>

<?php endfor; ?>

<?php if($p>$conta): ?>
  <div style="color: #FFFFFF" class="pag_item <?php echo $p?'pag_ativo':''; ?>"><?php echo $p; ?></div>
  <?php endif; ?>


<div class="pag_item" ><a href="<?php echo BASE; ?>leis?p=<?php echo $p+1; ?>" aria-label="Next">
    <span aria-hidden="true">&raquo;</span></a></div>

</div>
</div>







