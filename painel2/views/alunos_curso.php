<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="<?php echo BASE; ?>assets/css/template.css" rel="stylesheet" />
</head>
<body style=" background: url('<?php echo BASE; ?>assets/images/bg.jpg') no-repeat center center fixed; 
   -webkit-background-size: cover;
   -moz-background-size: cover;
   -o-background-size: cover;
   background-size: cover;" >
	<h1> Painel Administrativo Alunos </h1>
</div>
<div class="tabelacurso">

	<table border="0" width="80%">
		<tr style="color: #000">
			<th>Aluno</th>
			<th>Curso</th>
			<th>modulo</th>
			<th>Qtd Aulas</th>
			<th>Assistidas</th>
		</tr>
		<?php foreach ($alunos as $aluno): ?>

			<tr style="color: #black">
				<td align="center"><?php echo $aluno['aluno']; ?></td>
				<td align="center"><?php echo $aluno['curso']; ?></td>
				<td align="center"><?php echo $aluno['modulo']; ?></td>
				<td align="center"><?php echo $aluno['qtd_de_aula']; ?></td>
				<td align="center"><?php echo $aluno['qtd_assitida']; ?></td>
			</tr>
		<?php endforeach ?>
	</table>
</div>
</body>
</html>
