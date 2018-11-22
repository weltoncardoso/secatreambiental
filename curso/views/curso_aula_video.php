
<div class="cursoinfo">

	<img src="<?php echo BASE; ?>../painel2/assets/images/<?php echo $curso->getImagem(); ?>" border="0" height="80" />
	<h3><?php echo $curso->getNome(); ?></h3>
	<?php echo $curso->getDescricao(); ?>
	<p><?php echo $aulas_assistidas.' / '.$total_aulas.' '.'('.(($aulas_assistidas/$total_aulas)*100).'%) do Curso'; ?></p>
	<br/>
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
	<h1>Video - <?php echo $aula_info['nome']; ?></h1>
	<iframe id="video"  frameborder="0" src="//player.vimeo.com/video/<?php echo $aula_info['url']; ?>"></iframe><br/>
	<p><?php echo $aula_info['descricao']; ?><br/><p/>
	<?php if ($aula_info['assistido'] == '1'): ?>
			<h3>Esta aula ja foi assistida!</h3>
	<?php else: ?>
		<div class="botao"><h3>
	<button style="border:0; background-color: #81f106; color:#FFF; width: 40%; height: 40px; line-height: 40px;border-radius: 8px; padding-left: 20px; padding-right: 20px; padding-bottom: 20px; cursor:pointer; font-size: 13px;display:inline-block;text-align: center; margin-left: 30%; margin-right: 30%; margin-bottom: 10px " onclick="marcarAssistido(this)" data-id="<?php echo $aula_info['id']; ?>" >Marcar Como assistido</button></h3></div>
	<?php endif; ?>
	<!-- <hr/> -->
	<!-- <h3>Duvidas? envie sua pergunta!</h3>
	<form method="POST" class="form_duvida">
		<textarea name="duvida"></textarea><br/><br/>
		<input type="submit" value="Enviar Duvida" /> -->
	</form>
</div>