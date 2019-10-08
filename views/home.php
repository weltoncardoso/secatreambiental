<!DOCTYPE html>

<html class="no-js">

<head>
  <!-- BASICS -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>SECATRE AMBIENTAL</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="<?php echo BASE; ?>assets/css/isotope.css" media="screen" />
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE; ?>assets/img/ico.ico" />
  <link rel="stylesheet" href="<?php echo BASE; ?>assets/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="<?php echo BASE; ?>assets/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo BASE; ?>assets/css/bootstrap-theme.css">
  <link href="<?php echo BASE; ?>assets/css/responsive-slider.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo BASE; ?>assets/css/animate.css">
  <link rel="stylesheet" href="<?php echo BASE; ?>assets/css/style2.css">

  <link rel="stylesheet" href="<?php echo BASE; ?>assets/css/font-awesome.min.css">
  <!-- skin -->
  <link rel="stylesheet" href="<?php echo BASE; ?>assets/skin/default.css">
  <script src="<?php echo BASE; ?>assets/js/jquery.min.js"></script>
  <script src="<?php echo BASE; ?>assets/js/menu.js"></script>
 
</head>

<body>
<script>
function openWinCurso() {
    window.open("<?php echo BASE; ?>painel2");
}
</script>

  <div class="header">
    <section id="header" class="appear">

      <div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.8);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="fa fa-bars color-white"></span>
          </button>
          <a href="<?php echo BASE; ?>" class="navbar-brand"><img style="width: 220px;height: 50px;margin-left: 10px;margin-bottom: 25px;" src="<?php echo BASE; ?>assets/img/logo.png" alt=""></a>
        </div>
        <div class="navbar-collapse collapse">

          <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
     
             <li class="nav-item"><a class="nav-link" href="<?php echo BASE; ?>">Início</a></li>
         <li class="nav-item"><a class="nav-link" href="<?php echo BASE; ?>historia">História</a></li>

         <li class="menu-container">
    <ul class="menu clearfix">
        <li><a  href="#">Curiosidades</a>
            <!-- Nível 1 -->
            <!-- submenu -->
            <ul class="sub-menu clearfix" style="background-color: rgba(0, 0, 0, 0.8);">
                <li><a style="text-transform: capitalize" href="<?php echo BASE; ?>curiosidades">Vultos</a>
                </li>
                <li><a style="text-transform: capitalize" href="<?php echo BASE; ?>saiba_mais">Saiba mais</a>
                </li>
            </ul><!-- submenu -->
             </ul>
        </li>
         <li class="menu-container ">
    <ul class="menu clearfix">
        <li><a  href="#">Legislação</a>
            <!-- Nível 1 -->
            <!-- submenu -->
            <ul class="sub-menu clearfix" style="background-color: rgba(0, 0, 0, 0.8);">
                <li><a style="text-transform: capitalize" href="#">Federal</a>
                    <!-- Nível 2 -->
                    <!-- submenu do submenu -->
                    <ul class="sub-menu">
                        <li><a style="text-transform: capitalize"href="<?php echo BASE; ?>leisFederais">Leis</a></li>
                        <li><a style="text-transform: capitalize" href="<?php echo BASE; ?>decretosFederais">Decretos</a></li>
                        <li><a style="text-transform: capitalize" href="<?php echo BASE; ?>resolucoesFederais">Resoluções</a></li>
                        <li><a style="text-transform: capitalize" href="<?php echo BASE; ?>portariasFederais">Portarias</a></li>
                    </ul><!-- submenu do submenu -->
                   
                </li>
                <li><a style="text-transform: capitalize" href="#">Distrital</a>
                    <!-- Nível 2 -->
                    <!-- submenu do submenu -->
                    <ul class="sub-menu">
                        <li><a style="text-transform: capitalize" href="<?php echo BASE; ?>leisDistritais">Leis</a></li>
                        <li><a style="text-transform: capitalize" href="<?php echo BASE; ?>decretosDistritais">Decretos</a></li>
                        <li><a style="text-transform: capitalize" href="<?php echo BASE; ?>resolucoesDistritais">Resoluções</a></li>
                        <li><a style="text-transform: capitalize" href="<?php echo BASE; ?>portariasDistritais">Portarias</a></li>
                    </ul><!-- submenu do submenu -->
                </li>
            </ul><!-- submenu -->
             </ul>
        </li>
      
         <li class="nav-item"><a class="nav-link" href="<?php echo BASE; ?>clientes">Clientes</a></li>
         <li class="nav-item"><a class="nav-link" href="<?php echo BASE; ?>noticias">Notícias</a></li>
         <li class="nav-item" ><a class="nav-link" style="color: #54ee23" href="<?php echo BASE; ?>cursos">Cursos</a></li>
         <li class="nav-item"><a class="nav-link" href="<?php echo BASE; ?>contato">Contato</a></li>
         <li type="button" class="nav-item" style="color: #fff; font-size: 13px; font-weight: bold; text-transform: uppercase; margin-top: 15px; cursor: pointer" onMouseOver="this.style.color='#54ee23';" onMouseOut="this.style.color='#ffffff';" onclick="openWinCurso()">Área do aluno</a></li>

          </ul>
        </div>
        <!--/.navbar-collapse -->
      </div>


    </section>
  </div>


  <div class="slider">
    <div id="about-slider">
      <div id="carousel-slider" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators visible-xs">
          <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-slider" data-slide-to="1"></li>
          
        </ol>

        <div class="carousel-inner">
          <div class="item active" style="background-image: url(assets/img/bg.jpg);">
            <div class="carousel-caption">
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                <h2>Bem vindo a Secatre Ambiental </h2>
              </div>
              <div class="col-md-10 col-md-offset-1">
                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                  <p>A CONSERVAÇÃO E PRESERVAÇÃO DO MEIO AMBIENTE DEPENDE DE VOCÊ, FAÇA A SUA PARTE!</p>
                </div>
              </div>
   
            </div>
          </div>

          <div class="item" style="background-image: url(assets/img/bg2.jpg);">
            <div class="carousel-caption">
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">
                <h2>Ganhe tempo reciclando seu conhecimento</h2>
              </div>
              <div class="col-md-10 col-md-offset-1">
                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                  <p>CURSOS EAD - AGILIDADE E PRATICIDADE PARA APROVEITAR O SEU TEMPO!</p>
                </div>
              </div>

            </div>
          </div>
        </div>

        <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
          <i class="fa fa-angle-left"></i>
        </a>

        <a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
          <i class="fa fa-angle-right"></i>
        </a>
      </div>
      <!--/#carousel-slider-->
    </div>
    <!--/#about-slider-->
  </div>
  <!--/#slider-->

  <!--about-->
  <section id="section-about">
    <div class="container">
      <div class="about">
        <div class="row mar-bot40">
          <div class="col-md-offset-3 col-md-6">
            <div class="title">
              <div class="wow bounceIn">

                <h2 class="section-heading animated" data-animation="bounceInUp">Lançamento da Secatre</h2>


              </div>
            </div>
          </div>
        </div>
        <div class="row">

          <div class="row-slider">
            <div class="col-lg-6 mar-bot30">
              <div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true">
                <div class="slides" data-group="slides">
                  <ul>
                      
                    <div class="slide-body" data-group="slide">

                </li>

                </a>
                


              <?php foreach($images as $img): ?>
            

              <?php if ($noticiaSld['id'] == $img['id_noticia']): ?>


                      <li><img alt="" class="img-responsive" src="./painel/assets/images/prods/<?php echo $img['url']?>" width="100%" height="350" /></li> 
                      <li><img alt="" class="img-responsive" src="./painel/assets/images/prods/<?php echo $img['url']?>" width="100%" height="350" /></li> 
                      

               <?php  endif ?>
              
              <?php endforeach; ?>

                    </div>
                  </ul>
                  <a class="slider-control left" href="#" data-jump="prev"><i class="fa fa-angle-left fa-2x"></i></a>
                  <a class="slider-control right" href="#" data-jump="next"><i class="fa fa-angle-right fa-2x"></i></a>


                </div>


              </div>
            </div>

            <div class="col-lg-6 ">
              <div class="company mar-left10">
                <h4 style="font-weight: bold;"><?php echo $noticiaSld['titulo']?></h4>
                 <p style="font-size: 16px; font-weight: 500"><?php echo $noticiaSld['descricao']?></p>
        
   
              </div>
  
            </div>

          </div>

        </div>

      </div>

    </div>

  </section>
  <!--/about-->

  <!-- spacer section:testimonial -->
  <section id="testimonials-3" class="section" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="align-center">
            <div class="testimonial pad-top40 pad-bot40 clearfix">
              <h2 style="color: #FFFAF0">
                Trabalhar com sustentabilidade é plantar um presente que garanta a subsistência das novas gerações
                  num planeta que pede socorro e se aquece a cada dia.
                  Pois melhor que plantar árvores, despoluir rios, proteger animais,
                é semear a consciência de que a garantia da vida é respeitar as fronteiras da natureza.
              </h2>
              <br />
              <span class="author">&mdash; Nildo Lage <a href="https://www.pensador.com/autor/nildo_lage/">Nildo Lage</a></span>
            </div>

          </div>
        </div>
      </div>

    </div>

  </section>

  
  <!-- section works -->
  <section id="section-works" class="section appear clearfix">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Últimas notícias</h2>
          </div>
        </div>
      </div>

      <div class="row">
  
        <div class="col-md-12">
          <div class="row">
            <div class="portfolio-items isotopeWrapper clearfix" id="3">

              


            <?php foreach($images as $img): ?>
            <?php foreach($noticias as $not):?>

              <?php if ($not['id']== $img['id_noticia']): ?>
                <article class="col-md-4 isotopeItem webdesign">
                <div class="portfolio-item">

                <div class="wow rotateInUpLeft" data-animation-delay="4.8s">
                  <a href="<?php echo BASE; ?>noticias">
                <img src="./painel/assets/images/prods/<?php echo $img['url']?>" class="img-fluid" alt="welcome" /> 
                </a>
                </div>

              </div>
              </article>
              <?php  endif ?>
              <?php endforeach; ?>
              <?php endforeach; ?>
             
            </div>

          </div>


        </div>
      </div>

    </div>
  </section>
  <section id="parallax2" class="section parallax" data-stellar-background-ratio="0.5">
    <div class="align-center pad-top40 pad-bot30">
      <h4 class="color-white pad-top50">O relacionamento dos seres humanos com a natureza</h4>
      <p class="color-white">O maior desafio tanto no nosso século quanto nos próximos é salvar o planeta da destruição. Isso vai exigir uma mudança nos próprios fundamentos da civilização moderna.</p>
        <br />
              <span class="author">&mdash; Mikhail Gorbachev <a href="https://www.pensador.com/autor/mikhail_gorbachev/">Mikhail Gorbachev</a></span>
    </div>
  </section>

<br />
  <!-- map -->
  <section id="section-map" class="clearfix">
    <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d61418.74155764689!2d-47.95201305230152!3d-15.82127421209615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x935a3a9b57957e05%3A0x12037641d60f6974!2sSQS+312+Bl+J+-+s%2Fn+PA%2C+Asa+Sul+Superquadra+Sul+312+Cond+do+Bloco+J+da+Sqs+312+-+Bras%C3%ADlia%2C+DF%2C+70365-100!3m2!1d-15.8213596!2d-47.9169935!4m5!1s0x935a3a9b57957e05%3A0x12037641d60f6974!2sCond+do+Bloco+J+da+Sqs+312+-+Bras%C3%ADlia%2C+DF!3m2!1d-15.8213596!2d-47.9169935!5e0!3m2!1spt-BR!2sbr!4v1542155200915" width="49%" float="left" margin-right="10%"  height="540" frameborder="0" style="border:0" allowfullscreen></iframe>
    <iframe class="calendario" width="49%" height="540" frameborder="0" style="border:0" allowfullscreen src="<?php echo BASE; ?>agenda" >
</iframe>
  </section>

  <section id="footer" class="section footer">
    <div class="container">


      <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="logofooter"><a href="<?php echo BASE;?>"></a></div>

      </div>
      <div class="col-md-3">
       <h5>Institucional</h5>
        <ul>
          <li><a href="<?php echo BASE; ?>">Início</a></li>
          <li><a href="<?php echo BASE; ?>historia">História</a></li>
          <li><a href="<?php echo BASE; ?>diferenciais">Diferenciais</a></li>
          <li><a href="<?php echo BASE; ?>clientes">Clientes</a></li>
          <li><a href="<?php echo BASE; ?>leis">Legislação</a></li>
          <li><a href="<?php echo BASE; ?>curiosidades">Curiosidades</a></li>
          <li><a href="<?php echo BASE; ?>noticias">Noticias</a></li>
          <li><a href="<?php echo BASE; ?>cursos">Cursos</a></li>
          <li><a href="<?php echo BASE; ?>admin">Area da Empresa</a></li>

        </ul>
      </div>
      <div class="col-md-3">
        <h5>Contato</h5>
        <p>
        WhatsApp<br>
        <span>61 99984-7102</span><br>
        Fixo<br>
        <span>61 3345-7105</span><br>
        E-mail<br>
        <h6>secatre@secatreambiental.com.br</h6>
        </p>
      </div>
      <div class="col-md-3">
        <h5>Nossas Redes Sociais</h5>
        <div class="row animated opacity mar-bot0" data-andown="fadeIn" data-animation="animation">
        <div class="col-sm-12 align-center">
          <ul class="social-network social-circle">
            <li><a href="https://www.facebook.com/secatre/" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://plus.google.com/116573924145624763988" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="https://www.linkedin.com/company/secatre-seguran%C3%A7a-ambiental-&-gerenc.residuos-ltda/" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      </div>
    </div>
  </div>

      <div class="row align-center copyright">
      
          <div class="credits">
          
            Developed by <a href="https://weltoncardoso.github.io/">Welton Cardoso</a>
          </div>
  
      </div>
    </div>

  </section>
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

</body>

</html>
