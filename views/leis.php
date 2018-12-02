<!doctype html>
<html lang="en">
<style type="text/css">
tr:nth-child(even) {background: #eee}
tr:nth-child(odd) {background: #ccc}
table{margin-top: 20px;margin-bottom: 60px;margin-left: 25%;}
table th{height: 40px;line-height: 40px;text-align: left;padding-left: 10px;padding-right: 10px;}
table td{height: 40px;line-height: 40px;text-align: left;padding-left: 10px;padding-right: 10px;}</style>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800,900" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo BASE; ?>assets/img/thor.ico">
    <link rel="stylesheet" href="<?php echo BASE; ?>assets/fonts/font-awesome/css/all.css" />
    <link rel="stylesheet" href="<?php echo BASE; ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE; ?>assets/css/style.css">

    <title>Secatre Ambiental</title>
  </head>
  <body>

    <?php include('header.php'); ?>

    <div style="padding-left:30px;"class="tab" align="center">
          LEIS E NORMAS
      </div>

    <h1>Leis Distritais</h1>
	   <div class="table-responsive">

<table width="50%">
	<thead>
		<tr>
			<th>Nome</th>
			<th width="50">Acoes</th>
		</tr>
	</thead>


	<?php foreach($leisdistritais as $not):?>
		<tr>
		<td><?php echo $not['nome']; ?></td>
		<td width="50">
		    <a target="_blank" href="<?php echo BASE; ?>painel/leis/view/<?php echo $not['id']; ?>" style="background-color:#1E90FF; color:#FFFFFF" class="btn btn-default">Ver PDF</a>
		</td>
	</tr>
	<?php endforeach; ?>

	<tr>
<td colspan="2" style="margin-left:10px">
 <div class="pagination_leis">
        <div class="pag_item" ><a href="<?php echo BASE; ?>leis?p=<?php echo $p-1; ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span></a></div>
        <?php
        $conta = ceil($total_leis_distritais = 3);
        for($q=1;$q <= $conta;$q++): ?>
        <div class="pag_item <?php echo($q==$p)?'pag_ativo':''; ?>"><a href="<?php echo BASE; ?>leis?p=<?php echo $q; ?>"><?php echo $q; ?></a></div>
        <?php endfor; ?>
        <?php if($p>$conta): ?>
          <div style="color: #FFFFFF" class="pag_item <?php echo $p?'pag_ativo':''; ?>"><?php echo $p; ?></div>
          <?php endif; ?>
        <div class="pag_item" ><a href="<?php echo BASE; ?>leis?p=<?php echo $p+1; ?>" aria-label="Next">
            <span aria-hidden="true">&raquo;</span></a></div>
  </div>

</td>

	</tr>
</table>
</div>
</div>

	   <div class="table-responsive">

<h1>Leis Federais</h1>
<table width="50%">
	<thead>
		<tr>
			<th>Nome</th>
			<th width="50">Acoes</th>
		</tr>
	</thead>


	<?php foreach($leisfederais as $not):?>
		<tr>
		<td><?php echo $not['nome']; ?></td>
		<td width="50">
		    <a target="_blank" href="<?php echo BASE; ?>painel/leis/view/<?php echo $not['id']; ?>" style="background-color:#1E90FF; color:#FFFFFF" class="btn btn-default">Ver PDF</a>
		</td>
	</tr>
	<?php endforeach; ?>
<tr>
<td colspan="2" style="margin-left:10px">
 <div class="pagination_leis">
        <div class="pag_item" ><a href="<?php echo BASE; ?>leis?p=<?php echo $p-1; ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span></a></div>
        <?php
        $conta = ceil($total_leis_federais = 3);
        for($q=1;$q <= $conta;$q++): ?>
        <div class="pag_item <?php echo($q==$p)?'pag_ativo':''; ?>"><a href="<?php echo BASE; ?>leis?p=<?php echo $q; ?>"><?php echo $q; ?></a></div>
        <?php endfor; ?>
        <?php if($p>$conta): ?>
          <div style="color: #FFFFFF" class="pag_item <?php echo $p?'pag_ativo':''; ?>"><?php echo $p; ?></div>
          <?php endif; ?>
        <div class="pag_item" ><a href="<?php echo BASE; ?>leis?p=<?php echo $p+1; ?>" aria-label="Next">
            <span aria-hidden="true">&raquo;</span></a></div>
  </div>

</td>

	</tr>
</table>
</div>

	   <div class="table-responsive">

<h1>Biografias</h1>
<table width="50%" >
	<thead>
		<tr>
			<th>Nome</th>
			<th width="50">Acoes</th>
		</tr>
	</thead>


	<?php foreach($leisbiografias as $not):?>
		<tr>
		<td><?php echo $not['nome']; ?></td>
		<td width="50">
		    <a target="_blank" href="<?php echo BASE; ?>painel/leis/view/<?php echo $not['id']; ?>" style="background-color:#1E90FF; color:#FFFFFF" class="btn btn-default">Ver PDF</a>
		</td>
	</tr>
	<?php endforeach; ?>
<tr>
<td colspan="2" style="margin-left:10px">
 <div class="pagination_leis">
        <div class="pag_item" ><a href="<?php echo BASE; ?>leis?p=<?php echo $p-1; ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span></a></div>
        <?php
        $conta = ceil($total_leis_biografias = 3);
        for($q=1;$q <= $conta;$q++): ?>
        <div class="pag_item <?php echo($q==$p)?'pag_ativo':''; ?>"><a href="<?php echo BASE; ?>leis?p=<?php echo $q; ?>"><?php echo $q; ?></a></div>
        <?php endfor; ?>
        <?php if($p>$conta): ?>
          <div style="color: #FFFFFF" class="pag_item <?php echo $p?'pag_ativo':''; ?>"><?php echo $p; ?></div>
          <?php endif; ?>
        <div class="pag_item" ><a href="<?php echo BASE; ?>leis?p=<?php echo $p+1; ?>" aria-label="Next">
            <span aria-hidden="true">&raquo;</span></a></div>
  </div>

</td>

	</tr>
</table>
</div>
	   <div class="table-responsive">

<h1>Outras</h1>
<table width="50%" >
	<thead>
		<tr>
			<th>Nome</th>
			<th width="50">Acoes</th>
		</tr>
	</thead>


	<?php foreach($leisoutras as $not):?>
		<tr>
		<td><?php echo $not['nome']; ?></td>
		<td width="50">
		    <a target="_blank" href="<?php echo BASE; ?>painel/leis/view/<?php echo $not['id']; ?>" style="background-color:#1E90FF; color:#FFFFFF" class="btn btn-default">Ver PDF</a>
		</td>
	</tr>
	<?php endforeach; ?>
<tr>
<td colspan="2" style="margin-left:10px">
 <div class="pagination_leis">
        <div class="pag_item" ><a href="<?php echo BASE; ?>leis?p=<?php echo $p-1; ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span></a></div>
        <?php
        $conta = ceil($total_leis_outras = 3);
        for($q=1;$q <= $conta;$q++): ?>
        <div class="pag_item <?php echo($q==$p)?'pag_ativo':''; ?>"><a href="<?php echo BASE; ?>leis?p=<?php echo $q; ?>"><?php echo $q; ?></a></div>
        <?php endfor; ?>
        <?php if($p>$conta): ?>
          <div style="color: #FFFFFF" class="pag_item <?php echo $p?'pag_ativo':''; ?>"><?php echo $p; ?></div>
          <?php endif; ?>
        <div class="pag_item" ><a href="<?php echo BASE; ?>leis?p=<?php echo $p+1; ?>" aria-label="Next">
            <span aria-hidden="true">&raquo;</span></a></div>
  </div>

</td>

	</tr>
</table>
<div>
</div>

  </div>


    <?php include('footer.php'); ?>

  </body>
</html>
