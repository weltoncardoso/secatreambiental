<h1>Cursos</h1>

<a href="<?php echo BASE; ?>cursos/add" class="btn btn-default">Adicionar Curso</a>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Imagem</th>
			<th>Nome</th>
			<th>Descricao</th>
			<th>Preco</th>
			<th width="200">Acoes</th>
		</tr>
	</thead>


	<?php foreach($images as $img): ?>
	<?php foreach($cursos as $not):?>


		<tr> 
		<?php if ($not['id']== $img['id_curso']): ?>
			<td width="110"><img src="<?php echo BASE; ?>assets/images/prods/<?php echo $img['url']?>" border="0" height="80" /></td> 
		<td><?php echo $not['nome']; ?></td>
	    <td><?php echo $not['descricao']; ?></td>
	    <td><?php echo $not['preco']; ?></td>
		<td>
			<a href="<?php echo BASE; ?>cursos/edit/<?php echo $not['id']; ?>" class="btn btn-default">Editar</a>
			<a href="<?php echo BASE; ?>cursos/remove/<?php echo $not['id']; ?>" class="btn btn-default">Excluir</a>
		</td>
	</tr>
        <?php  endif ?>
	<?php endforeach; ?>
	<?php endforeach; ?>
</table>

<?php
$conta = ceil($total_cursos / $limit_cursos);
for($q=1;$q <= $conta;$q++): ?>

<a href="<?php echo BASE; ?>cursos?p=<?php echo $q; ?>"><?php echo $q; ?></a>

<?php endfor; ?>











