 <?php include('header.php'); ?>

    <div style="padding-left:30px;"class="tab" align="center">
          Decretos Federais
      </div>

    <h1 align="center" style="margin-top: 10px"></h1>
	   <div class="table-responsive">

<table width="65%" style="margin: 0 15% 0 15%" >
	<thead>
		<tr>
			<th style="width: 30%; text-align: center;">Decreto</th>
      <th style="text-align: center">Ementa</th>

		</tr>
	</thead>


	<?php foreach($decretosfederais as $not):?>
	<tr>
      <td style="background-color: #dee2e6;
  border-bottom: 2px solid #fff; font-family: sans-serif; line-height: 1.5; font-size: 15px" align="center">
        <a title="Click para visualizar o documento!" target="_blank" href="<?php echo BASE; ?>decretosDistritais/view/<?php echo $not['id']; ?>">
          <?php echo ($not['nome']); ?></a>
        </td>
        <td style="background-color: #dee2e6;
  border-bottom: 2px solid #fff; padding-left: 10px; font-family: sans-serif; font-style: normal; font-size: 13px; font-weight: 500;line-height: 1.5">
    <?php echo ($not['descricao']); ?>
       </td>

      </tr>
	<?php endforeach; ?>

	<tr>
<td colspan="2" style="margin-left:10px">
 <div class="pagination_leis">
        <div class="pag_item" ><a href="<?php echo BASE; ?>decretosfederais?p=<?php echo $p-1; ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span></a></div>
        <?php
        $conta = ceil($total_decretos_federais = 3);
        for($q=1;$q <= $conta;$q++): ?>
        <div class="pag_item <?php echo($q==$p)?'pag_ativo':''; ?>"><a href="<?php echo BASE; ?>decretosfederais?p=<?php echo $q; ?>"><?php echo $q; ?></a></div>
        <?php endfor; ?>
        <?php if($p>$conta): ?>
          <div style="color: #FFFFFF" class="pag_item <?php echo $p?'pag_ativo':''; ?>"><?php echo $p; ?></div>
          <?php endif; ?>
        <div class="pag_item" ><a href="<?php echo BASE; ?>decretosfederais?p=<?php echo $p+1; ?>" aria-label="Next">
            <span aria-hidden="true">&raquo;</span></a></div>
  </div>

</td>

	</tr>
</table>
</div>
</div>
<br />

</div>

 <?php include('footer.php'); ?>
  <a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>

  <script src="<?php echo BASE; ?>assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  <script src="<?php echo BASE; ?>assets/js/jquery.js"></script>
  <script src="<?php echo BASE; ?>assets/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo BASE; ?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo BASE; ?>assets/js/jquery.isotope.min.js"></script>
  <script src="<?php echo BASE; ?>assets/js/jquery.nicescroll.min.js"></script>
  <script src="<?php echo BASE; ?>assets/js/fancybox/jquery.fancybox.pack.js"></script>
  <script src="<?php echo BASE; ?>assets/js/skrollr.min.js"></script>
  <script src="<?php echo BASE; ?>assets/js/jquery.scrollTo.js"></script>
  <script src="<?php echo BASE; ?>assets/js/jquery.localScroll.js"></script>
  <script src="<?php echo BASE; ?>assets/js/stellar.js"></script>
  <script src="<?php echo BASE; ?>assets/js/responsive-slider.js"></script>
  <script src="<?php echo BASE; ?>assets/js/jquery.appear.js"></script>
  <script src="<?php echo BASE; ?>assets/js/grid.js"></script>
  <script src="<?php echo BASE; ?>assets/js/main.js"></script>
  <script src="<?php echo BASE; ?>assets/js/wow.min.js"></script>
  <script>
    wow = new WOW({}).init();
  </script>
  <script src="<?php echo BASE; ?>assets/contactform/contactform.js"></script>