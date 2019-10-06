<?php include('header.php'); ?>
    <div class="tab">
      <div class="container" align="center">
        Administraçao da Empresa
      </div>
    </div>

    <section class="about-page py-5 my-5">
      <div class="container">

<script>
function openWinSite() {
    window.open("<?php echo BASE; ?>painel");
}
function openWinCurso() {
    window.open("<?php echo BASE; ?>painel2");
}
</script>


</br>
<div style="text-align:center; margin-top: 200px; margin-bottom:200px ">
          <button type="button" class="btn btn-primary" style="background-color:#FF0000; height: 100px ;width: 200px; border-radius: 20px"  onclick="openWinSite()"> Painel do Site
          </button>
           <button type="button" class="btn btn-primary" style="background-color:#0000FF; height: 100px ;width: 200px; border-radius: 20px"  onclick="openWinCurso()">Painel do Curso
           </button>
</div>


      </div>
    </section>
    <br />

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
