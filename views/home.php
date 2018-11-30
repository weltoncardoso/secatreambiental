<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Secatre Ambiental</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE; ?>assets/img/ico.ico" />
		<link href="<?php echo BASE; ?>assets/css/style.css" rel="stylesheet" />
		<script type="text/javascript" src="<?php echo BASE; ?>assets/js/script.js"></script>
   		<link href="https://fonts.googleapis.com/css?family=Poppins:400,800,900" rel="stylesheet">

	    <link rel="shortcut icon" href="<?php echo BASE; ?>assets/img/ico.ico">
	    <link rel="stylesheet" href="<?php echo BASE; ?>assets/fonts/font-awesome/css/all.css" />
	    <link rel="stylesheet" href="<?php echo BASE; ?>assets/css/bootstrap.min.css">
	    <link rel="stylesheet" href="<?php echo BASE; ?>owlcarousel/assets/owl.carousel.min.css">
	    <link rel="stylesheet" href="<?php echo BASE; ?>owlcarousel/assets/owl.theme.default.min.css">
	    <link rel="stylesheet" href="<?php echo BASE; ?>assets/css/style.css">
	</head>
	<body>

    <section class="banner">

      <?php include('header.php'); ?>

      <?php include('banner.php'); ?>

    </section>

    <section class="partners py-5 my-5">

      <div class="container">
        <div class="row">
          <span>Colaboradores</span>
        </div>
        <div class="row">
          <div class="owl-carousel owl-theme">

						<div class="item"><a href="http://www.confea.org.br/"><img src="<?php echo BASE; ?>assets/img/confea.png" alt="CONFEA"></a></div>
						<div class="item"><a href="https://www.creadf.org.br/"><img src="<?php echo BASE; ?>assets/img/creadf.jpg" alt="CREADF"></a></div>
						<div class="item"><a href="http://www.mutua.com.br/"><img src="<?php echo BASE; ?>assets/img/mutua.png" alt="MUTUA"></a></div>

          </div>
        </div>
      </div>
    </section>

    <section class="about py-5 my-5">
    	<div class="container">
    		<h1>Secatre Ambiental</h1>
        <p class="mt-4">Foi a primeira empresa institu&iacute;da em Bras&iacute;lia/DF com atua&ccedil;&atilde;o em engenharia de seguran&ccedil;a do trabalho. Atuando h&aacute; mais de vinte anos no mercado de trabalho, em especial  com a &aacute;rea de seguran&ccedil;a, sa&uacute;de e meio ambiente; A Secatre desenvolveu v&aacute;rias per&iacute;cias t&eacute;cnicas em assuntos trabalhistas, v&aacute;rios semin&aacute;rios de repercuss&atilde;o nacional onde s&atilde;o destacados a &quot;Seguran&ccedil;a em Esteriliza&ccedil;&atilde;o a G&aacute;s &Oacute;xido de Etileno e Seguran&ccedil;a em Radia&ccedil;&atilde;o Ionizante, ambos com n&uacute;mero de participantes superior a trezentos, oriundos de v&aacute;rios pontos do Pa&iacute;s. Mais recentemente desenvolveu Semin&aacute;rio sobre Tratamento de Res&iacute;duos de Servi&ccedil;os de Sa&uacute;de e o Workshop sobre Novas Diretrizes para o Tratamento de Res&iacute;duos de Servi&ccedil;os de Sa&uacute;de.</p>
    	</div>
    </section>

    <section class="differential py-4 mt-5">
      <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top" src="<?php echo BASE; ?>assets/img/icon-experiencia.png" alt="Experiência">
                <div class="card-body">
                  <h5 class="card-title">Experiência</h5>
                  <p class="card-text">A secatre Ambiental já promoveu a compensação de reserva legal em dezenas de propriedades, especialmente nos biomas Mata Atlântica e Cerrado.</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top" src="<?php echo BASE; ?>assets/img/icon-seguranca.png" alt="Segurança">
                <div class="card-body">
                  <h5 class="card-title">Segurança</h5>
                  <p class="card-text">Nossas áreas tiveram toda sua documentação verificada desde a origem e foram certificadas junto aos órgãos ambientais.</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top" src="<?php echo BASE; ?>assets/img/icon-rapidez.png" alt="Rapidez">
                <div class="card-body">
                  <h5 class="card-title">Rapidez</h5>
                  <p class="card-text">Nosso corpo jurídico mantém toda a documentação necessária atualizada e pronta para averbação, agilizando assim a efetivação do negócio e a regularização ambiental de sua propriedade.</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top" src="<?php echo BASE; ?>assets/img/icon-garantia.png" alt="Garantia">
                <div class="card-body">
                  <h5 class="card-title">Garantia</h5>
                  <p class="card-text">O pagamento só será realizado no ato da averbação da matrícula da área adquirida, propiciando absoluta segurança e tranquilidade ao comprador.</p>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>
        <div class="titulo">Últimas Notícias</div>

    <section class="view py-5 my-5">
      <div class="container">
        <div class="row my-5 py-5">

           <?php foreach($images as $img): ?>
            <?php foreach($noticias as $not):?>

              <?php if ($not['id']== $img['id_noticia']): ?>

                <div class="col-md-6">
                <img src="./painel/assets/images/prods/<?php echo $img['url']?>" class="img-fluid" /> </br></br></br></br>
                </div>

                <div class="col-md-6">
            <h2><?php echo $not['titulo']; ?></h2>
            <p><?php echo $not['descricao']; ?> </p>

                </div>

              <?php  endif ?>
              <?php endforeach; ?>
              <?php endforeach; ?>

        </div>
           <div style="clear:both"></div>
              <div style="text-align:center; ">
        <div class="noticias-button">

          <button type="button" class="btn btn-primary"> <a href="<?php echo BASE; ?>noticias">Mais Notícias</a></button></div>

      </div>
    </section>

    <section class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d61418.74155764689!2d-47.95201305230152!3d-15.82127421209615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x935a3a9b57957e05%3A0x12037641d60f6974!2sSQS+312+Bl+J+-+s%2Fn+PA%2C+Asa+Sul+Superquadra+Sul+312+Cond+do+Bloco+J+da+Sqs+312+-+Bras%C3%ADlia%2C+DF%2C+70365-100!3m2!1d-15.8213596!2d-47.9169935!4m5!1s0x935a3a9b57957e05%3A0x12037641d60f6974!2sCond+do+Bloco+J+da+Sqs+312+-+Bras%C3%ADlia%2C+DF!3m2!1d-15.8213596!2d-47.9169935!5e0!3m2!1spt-BR!2sbr!4v1542155200915" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>

    <?php include('footer.php'); ?>

    <script src="<?php echo BASE; ?>owlcarousel/owl.carousel.min.js"></script>
    <script type="text/javascript">
      $('.owl-carousel').owlCarousel({
          loop:true,
          margin:10,
          nav:true,
          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:2
              },
              1000:{
                  items:3
              }
          }
      })
    </script>

  </body>
</html>
