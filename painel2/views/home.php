<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE; ?>assets/img/ico.ico" />
	<link href="<?php echo BASE; ?>/assets/css/template.css" rel="stylesheet" />
</head>
<body style=" background: url('<?php echo BASE; ?>/assets/images/bg.jpg') no-repeat center center fixed; 
   -webkit-background-size: cover;
   -moz-background-size: cover;
   -o-background-size: cover;
   background-size: cover;" >
	<h1> Painel Administrativo Cursos</h1>
	<div class="botaoAdd" align="center">
	<a href="<?php echo BASE; ?>home/adicionar">Adicionar Curso</a></div><br/>
</div>

<div class="tabelacurso">
	<table border="0" width="80%" >
		<tr style="color: #000">
			<th>Imagem</th>
			<th>Nome</th>
			<th width="200">Qtd. de Alunos</th>
			<th>Ações</th>
		</tr>
		<?php foreach ($cursos as $curso): ?>
			<tr style="color: #black; font-size:23px">
				<td width="50" align="center"><img src="<?php echo BASE; ?>../painel2/assets/images/<?php echo $curso['imagem']; ?>" border="0" height="70"></td>
				<td width="600" align="center"><?php echo $curso['nome']; ?></td>
				<td align="center"><?php echo $curso['qtalunos']; ?></td>
				<td width="300" align="center">
				<div class="botao" align="center">
				<a href="<?php echo BASE; ?>home/editar/<?php echo $curso['id']; ?>">Editar</a> </div>
				<div class="botaodel" align="center">
				<a href="<?php echo BASE; ?>home/excluir/<?php echo $curso['id']; ?>">Excluir</a>
			    </div>
				</td>
			</tr>
		<?php endforeach ?>
	</table>
</div>
</body>
</html>
