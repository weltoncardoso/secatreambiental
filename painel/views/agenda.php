<h1>Agenda</h1>
<div style="text-align:center"></br>
<a href="<?php echo BASE; ?>agenda/add" class="btn btn-default" style="background-color:#0000ff; color:#ffffff">Adicionar Evento</a>
</div>
</br></br>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Data</th>
            <th width="200">Acões</th>
        </tr>
    </thead>


    <?php foreach($agenda as $not):?>


        <tr> 
        <td><?php echo $not['title']; ?></td>
        <td><?php echo $not['start']; ?></td>
        <td>
            <a href="<?php echo BASE; ?>agenda/edit/<?php echo $not['id']; ?>" class="btn btn-default" style="background-color:blue; color:#fff;">Editar</a>
            <a href="<?php echo BASE; ?>agenda/remove/<?php echo $not['id']; ?>" style="background-color:#FF0000; color:#FFFFFF" class="btn btn-default">Excluir</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>


<div style="text-align: center">
 <div class="pagination">
<div class="pag_item" ><a href="<?php echo BASE; ?>agenda?p=<?php echo $p-1; ?>" aria-label="Previous">
<span aria-hidden="true">&laquo;</span></a></div>
<?php
$conta = ceil($total_noticias = 3);
for($q=1;$q <= $conta;$q++): ?>
<div class="pag_item <?php echo($q==$p)?'pag_ativo':''; ?>"><a href="<?php echo BASE; ?>agenda?p=<?php echo $q; ?>"><?php echo $q; ?></a></div>

<?php endfor; ?>

<?php if($p>$conta): ?>
  <div style="color: #FFFFFF" class="pag_item <?php echo $p?'pag_ativo':''; ?>"><?php echo $p; ?></div>
  <?php endif; ?>


<div class="pag_item" ><a href="<?php echo BASE; ?>agenda?p=<?php echo $p+1; ?>" aria-label="Next">
    <span aria-hidden="true">&raquo;</span></a></div>

</div>
</div>









