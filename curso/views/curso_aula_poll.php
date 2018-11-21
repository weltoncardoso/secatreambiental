
<div class="cursoinfo">

	<img src="<?php echo BASE; ?>../painel2/assets/images/<?php echo $curso->getImagem(); ?>" border="0" height="60" />
	<h3><?php echo $curso->getNome(); ?></h3>
	<?php echo $curso->getDescricao(); ?>
	<p><?php echo $aulas_assistidas.' / '.$total_aulas.' '.'('.(($aulas_assistidas/$total_aulas)*100).'%) do Curso'; ?></p>
</div>
<div class="curso_left">
	<?php foreach ($modulos as $modulo): ?>
		<div class="modulo"><strong><?php echo utf8_encode($modulo['nome']); ?></strong></div>

		<?php foreach ($modulo['aulas'] as $aula): ?>
			<a href="<?php echo BASE; ?>cursos/aula/<?php echo $aula['id'] ?>"><div class="aula"><?php echo utf8_encode($aula['nome']); ?>
				<?php if ($aula['assistido'] === true): ?>
		<img style="float: right; margin-right: 10px; margin-top: 3px" src="<?php echo BASE; ?>assets/images/v.png" border="0" height="20" />
	<?php endif; ?>
			</div></a>
		<?php endforeach ?>
	<?php endforeach ?>
	
</div>
<div class="curso_right">
	<h1>Questionario</h1>

	<?php 
	if ($_SESSION['poll'.$aula_info['id_aula']] > 4) {
		echo "Limite de tentaivas atingido.";
	} else {
		echo "Tentativa: ".$_SESSION['poll'.$aula_info['id_aula']]." de 4"; 
			?>	
			<h3><?php echo utf8_encode($aula_info['pergunta']); ?></h3>
			<form method="POST">
			<input type="radio" name="opcao" value="1" id="opcao1">
			<label for="opcao1"><?php echo utf8_encode($aula_info['opcao1']); ?></label><br/><br/>

			<input type="radio" name="opcao" value="2" id="opcao2">
			<label for="opcao2"><?php echo utf8_encode($aula_info['opcao2']); ?></label><br/><br/>

			<input type="radio" name="opcao" value="3" id="opcao3">
			<label for="opcao3"><?php echo utf8_encode($aula_info['opcao3']); ?></label><br/><br/>

			<input type="radio" name="opcao" value="4" id="opcao4">
			<label for="opcao4"><?php echo utf8_encode($aula_info['opcao4']); ?></label><br/><br/>
			<input type="submit" value="Enviar Resposta" />
		</form><br/><br/>
			<div style="color: green; height:  50px; line-height: 50px">
			<?php if (isset($resposta)) {
				if ($resposta === true) {
					echo "Resposta Correta!";
				} 
				else {
					echo "Resposta Incorreta!";
				}
			} 
			?>
<?php } ?>
	</div>
</div>