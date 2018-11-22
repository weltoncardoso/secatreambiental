<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="<?php echo BASE_URL; ?>/assets/css/template.css" rel="stylesheet" />
</head>
<body style=" background: url('<?php echo BASE; ?>/assets/images/bg.jpg') no-repeat center center fixed; 
   -webkit-background-size: cover;
   -moz-background-size: cover;
   -o-background-size: cover;
   background-size: cover;" >
	<h1> Painel Administrativo Alunos </h1>
	<div class="botaoAdd" align="center">
	<a href="<?php echo BASE; ?>alunos/adicionar">Adicionar Aluno</a></div><br/>
</div>
<div class="tabelacurso">

	<table border="0" width="80%">
		<tr style="color: #000">
			<th>Nome</th>
			<th>Qtd. de Cursos</th>
			<th>Ações</th>
		</tr>
		<?php foreach ($alunos as $aluno): ?>
			<tr style="color: #black">
				<td align="center"><?php echo $aluno['nome']; ?></td>
				<td align="center"><?php echo $aluno['qtcursos']; ?></td>
				<td align="center">
				<div class="botao" align="center">
				<a href="<?php echo BASE; ?>alunos/editar/<?php echo $aluno['id']; ?>">Editar</a> </div>
				<div class="botao" align="center">
				<a href="<?php echo BASE; ?>alunos/excluir/<?php echo $aluno['id']; ?>">Excluir</a>
			    </div>
				</td>
			</tr>
		<?php endforeach ?>
	</table>
</div>
</body>
</html>
