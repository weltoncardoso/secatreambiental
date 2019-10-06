
<div class="cursoinfo">

	<img src="<?php echo BASE; ?>../painel2/assets/images/<?php echo $curso->getImagem(); ?>" border="0" height="60" />
	<h3><?php echo $curso->getNome(); ?></h3>
	<?php echo $curso->getDescricao(); ?>
	<p><?php echo $aulas_assistidas.' / '.$total_aulas.' '.'('.(($aulas_assistidas/$total_aulas)*100).'%) do Curso'; ?></p>
	<?php $param = (($aulas_assistidas/$total_aulas)*100);  ?>
	<?php if($param == 100): ?>
     <a style="margin-top: -35px;position: absolute;margin-left: 350px;text-decoration: none;color:#6aca76" href="<?php echo BASE; ?>certificados" style="color: #ffffff"><i class="fa fa-pencil"></i>☺ Emitir Certificado!</a>
      <a style="margin-top: -35px;position: absolute;margin-left: 520px;text-decoration: none;color:#6aca76" href="<?php echo BASE; ?>pagamento" style="color: #ffffff"><i class="fa fa-pencil"></i>☺ Certificado Impresso!</a>
       <a style="margin-top: -35px;position: absolute;margin-left: 700px;text-decoration: none;color:#6aca76" href="<?php echo BASE; ?>apostila" style="color: #ffffff"><i class="fa fa-pencil"></i>☺ Apostila Impressa!</a>
<?php endif; ?>
</div>
<div class="curso_left">
	<?php foreach ($modulos as $modulo): ?>
		<div class="modulo"><strong><?php echo utf8_encode($modulo['nome']); ?></strong>
		</div>

		<?php foreach ($modulo['aulas'] as $aula): ?>
			<a href="<?php echo BASE; ?>cursos/aula/<?php echo $aula['id'] ?>"><div class="aula"><?php echo utf8_encode($aula['nome']); ?>
	<?php if ($aula['assistido'] === true): ?>
		<img style="float: right; margin-right: 10px; margin-top: 3px" src="<?php echo BASE; ?>assets/images/v.png" border="0" height="20" />
	<?php endif; ?>
			</div>
		</a>
		<?php endforeach ?>
	<?php endforeach ?>
	
</div>
<div class="curso_right">
	
</div>