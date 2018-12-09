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

<div class="v-banner">
  <div id="carouselExampleControls" class="carousel slide d-flex align-items-center" data-ride="carousel">
    <div class="carousel-inner">
         <div class="carousel-item active">
    <?php foreach($images1 as $img): ?>
    <?php foreach($slides1 as $not):?>
    <?php if ($not['id']== $img['id_slide']): ?>
              <img class="d-block" src="<?php echo BASE; ?>./painel/assets/images/prods/<?php echo $img['url']?>"
               alt="<?php echo $not['nome']; ?>"/>
    <?php  endif ?>
    <?php endforeach; ?>
    <?php endforeach; ?>

      </div>
      <div class="carousel-item">
    <?php foreach($images2 as $img): ?>
    <?php foreach($slides2 as $not):?>
    <?php if ($not['id']== $img['id_slide']): ?>
              <img class="d-block" src="<?php echo BASE; ?>./painel/assets/images/prods/<?php echo $img['url']?>"
               alt="<?php echo $not['nome']; ?>"/>
    <?php  endif ?>
    <?php endforeach; ?>
    <?php endforeach; ?>

      </div>
      <div class="carousel-item">
    <?php foreach($images3 as $img): ?>
    <?php foreach($slides3 as $not):?>
    <?php if ($not['id']== $img['id_slide']): ?>
              <img class="d-block" src="<?php echo BASE; ?>./painel/assets/images/prods/<?php echo $img['url']?>"
               alt="<?php echo $not['nome']; ?>"/>
    <?php  endif ?>
    <?php endforeach; ?>
    <?php endforeach; ?>

      </div>
  <div class="carousel-item">
    <?php foreach($images4 as $img): ?>
    <?php foreach($slides4 as $not):?>
    <?php if ($not['id']== $img['id_slide']): ?>
              <img class="d-block" src="<?php echo BASE; ?>./painel/assets/images/prods/<?php echo $img['url']?>"
               alt="<?php echo $not['nome']; ?>"/>
    <?php  endif ?>
    <?php endforeach; ?>
    <?php endforeach; ?>

      </div>
       <div class="carousel-item">
    <?php foreach($images5 as $img): ?>
    <?php foreach($slides5 as $not):?>
    <?php if ($not['id']== $img['id_slide']): ?>
              <img class="d-block" src="<?php echo BASE; ?>./painel/assets/images/prods/<?php echo $img['url']?>"
               alt="<?php echo $not['nome']; ?>"/>
    <?php  endif ?>
    <?php endforeach; ?>
    <?php endforeach; ?>

      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="m-banner">
  <div id="carouselExampleControls2" class="carousel slide d-flex align-items-center" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
    <?php foreach($images1 as $img): ?>
    <?php foreach($slides1 as $not):?>
    <?php if ($not['id']== $img['id_slide']): ?>
              <img class="d-block" src="<?php echo BASE; ?>./painel/assets/images/prods/<?php echo $img['url']?>"
               alt="<?php echo $not['nome']; ?>"/>
    <?php  endif ?>
    <?php endforeach; ?>
    <?php endforeach; ?>

      </div>
      <div class="carousel-item">
    <?php foreach($images2 as $img): ?>
    <?php foreach($slides2 as $not):?>
    <?php if ($not['id']== $img['id_slide']): ?>
              <img class="d-block" src="<?php echo BASE; ?>./painel/assets/images/prods/<?php echo $img['url']?>"
               alt="<?php echo $not['nome']; ?>"/>
    <?php  endif ?>
    <?php endforeach; ?>
    <?php endforeach; ?>

      </div>
      <div class="carousel-item">
    <?php foreach($images3 as $img): ?>
    <?php foreach($slides3 as $not):?>
    <?php if ($not['id']== $img['id_slide']): ?>
              <img class="d-block" src="<?php echo BASE; ?>./painel/assets/images/prods/<?php echo $img['url']?>"
               alt="<?php echo $not['nome']; ?>"/>
    <?php  endif ?>
    <?php endforeach; ?>
    <?php endforeach; ?>

      </div>
  <div class="carousel-item">
    <?php foreach($images4 as $img): ?>
    <?php foreach($slides4 as $not):?>
    <?php if ($not['id']== $img['id_slide']): ?>
              <img class="d-block" src="<?php echo BASE; ?>./painel/assets/images/prods/<?php echo $img['url']?>"
               alt="<?php echo $not['nome']; ?>"/>
    <?php  endif ?>
    <?php endforeach; ?>
    <?php endforeach; ?>

      </div>
       <div class="carousel-item">
    <?php foreach($images5 as $img): ?>
    <?php foreach($slides5 as $not):?>
    <?php if ($not['id']== $img['id_slide']): ?>
              <img class="d-block" src="<?php echo BASE; ?>./painel/assets/images/prods/<?php echo $img['url']?>"
               alt="<?php echo $not['nome']; ?>"/>
    <?php  endif ?>
    <?php endforeach; ?>
    <?php endforeach; ?>

      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

    </section>

    <section class="partners py-5 my-5">


      <div class="container">

          <h1 style="
					text-transform: uppercase;
    letter-spacing: .2em;
    font-size: 3.125em;
    color: #263e3d;"
		>Colaboradores</h1>

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
        <p class="mt-4">Foi a primeira empresa instituída em Brasília/DF com atuação em engenharia de segurança do trabalho e em segurança ambiental. Atuando a quase trinta anos no mercado de trabalho, vem agora lançar Cursos à Distância - EAD, para dar maior conforto aos seus clientes e garantir maior flexibilidade.</p>
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
                  <p class="card-text">A experiência acumulada e adquirida em longo período será repassada aos seus clientes com muita dedicação!.</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top" src="<?php echo BASE; ?>assets/img/icon-seguranca.png" alt="Segurança">
                <div class="card-body">
                  <h5 class="card-title">Segurança</h5>
                  <p class="card-text">Sempre atuando em segurança ocupacional garante que seus cursos trarão segurança para você no amanhã!</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top" src="<?php echo BASE; ?>assets/img/icon-rapidez.png" alt="Rapidez">
                <div class="card-body">
                  <h5 class="card-title">Rapidez</h5>
                  <p class="card-text">O tempo quem faz é o aluno! Propomos dar subsídios para que alcance com rapidez o mercado de trabalho!</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top" src="<?php echo BASE; ?>assets/img/icon-garantia.png" alt="Garantia">
                <div class="card-body">
                  <h5 class="card-title">Garantia</h5>
                  <p class="card-text">Nossos serviços e cursos são oferecidos com a garantia de que seguem as legislações pertinentes ao tema escolhido!</p>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>
		<h1 style="
					text-transform: uppercase;
					letter-spacing: .2em;
					font-size: 3.125em;
					color: #263e3d;"
				>Últimas Notícias</h1>
        <!-- <div class="titulo">Últimas Notícias</div> -->

    <section class="view py-5 my-5">
      <div class="container">
        <div class="row my-5 py-5">

           <?php foreach($images as $img): ?>
            <?php foreach($noticias as $not):?>

              <?php if ($not['id']== $img['id_noticia']): ?>

                <div class="areaImagem">
                <img src="./painel/assets/images/prods/<?php echo $img['url']?>" class="img-fluid" /> </br></br></br></br>
                </div>

                <div class="col-md-6">
            <h1 style="
						text-transform: uppercase;
	    			letter-spacing: .1em;
	    			font-size: 2.0em;
	    			color: #263e3d">
						<?php echo $not['titulo']; ?></h1>
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
      <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d61418.74155764689!2d-47.95201305230152!3d-15.82127421209615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x935a3a9b57957e05%3A0x12037641d60f6974!2sSQS+312+Bl+J+-+s%2Fn+PA%2C+Asa+Sul+Superquadra+Sul+312+Cond+do+Bloco+J+da+Sqs+312+-+Bras%C3%ADlia%2C+DF%2C+70365-100!3m2!1d-15.8213596!2d-47.9169935!4m5!1s0x935a3a9b57957e05%3A0x12037641d60f6974!2sCond+do+Bloco+J+da+Sqs+312+-+Bras%C3%ADlia%2C+DF!3m2!1d-15.8213596!2d-47.9169935!5e0!3m2!1spt-BR!2sbr!4v1542155200915" width="49%" float="left" margin-right="10%"  height="540" frameborder="0" style="border:0" allowfullscreen></iframe>

			<iframe class="calendario" width="49%" float="left" margin-right="10%"  height="540" src="<?php echo BASE; ?>/agenda" >
</iframe>


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
