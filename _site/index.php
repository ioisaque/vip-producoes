<?php
   // DEFAULTS API FETCH
   $url = 'https://cdn.ideyou.com.br/defaults/header.php';
   
   $data = array( 'title'     => 'VIP Produções - DJ Ipatinga e Cabine de Fotos',
                  'keywords' 	=> 'noivastimoteo, noivasvaledoaco, noivasipatinga, casamentovaledoaço, timoteo, coronelfabriciano, santanadoparaíso, iapu, belooriente, ipatinga, noivadoano, casamentovaledoaco, noivas, casamentos, cabinedefotosipatinga, cabinefotográfica, cabinedefotosvaledoaço, cabinedefotosoronelfabriciano, cabinedefotos, 15anosipatinga, festaseeventos, 15anos, debutantes, Bethânia, Naque, noivas2020, debutantesvaledoaco, love, instagood',
                  'scroll_bg'     => '#000'
               );

	// use key 'http' even if you send the request to https://...
	$options = array(
			'http' => array(
					'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
					'method'  => 'POST',
					'content' => http_build_query($data)
			)
	);
	$context  = stream_context_create($options);
	$defaults = file_get_contents($url, false, $context);
?>

<!DOCTYPE HTML>
<html class="no-js" lang="pt-br">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136056589-5"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-136056589-5');
    </script>

    <!-- HEAD DEFAULTS - START -->
      <?=$defaults;?>    
    <!-- HEAD DEFAULTS - END -->

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

    <!-- StyleSheets -->
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- FontsOnline -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900|Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <!-- JavaScripts -->
    <script src="js/vendors/modernizr.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
  <!-- LOADER -->
  <div id="loader">
    <div class="loader">
      <div class="position-center-center"> <img src="img/logo.png" alt="">
        <div class="loading">
          <div class="sk-circle">
            <div class="sk-circle1 sk-child"></div>
            <div class="sk-circle2 sk-child"></div>
            <div class="sk-circle3 sk-child"></div>
            <div class="sk-circle4 sk-child"></div>
            <div class="sk-circle5 sk-child"></div>
            <div class="sk-circle6 sk-child"></div>
            <div class="sk-circle7 sk-child"></div>
            <div class="sk-circle8 sk-child"></div>
            <div class="sk-circle9 sk-child"></div>
            <div class="sk-circle10 sk-child"></div>
            <div class="sk-circle11 sk-child"></div>
            <div class="sk-circle12 sk-child"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- Page Wrapper -->
<div id="wrap"> 
  
  <!-- Header -->
  <header class="header header-menu">
    <div class="container-fluid">
      <div class="logo"> <a href="index.html"><img src="img/logo_sm.png" alt=""></a> </div>
      
      <!-- Nav -->
      <div class="fat-nav">
        <div class="fat-nav__wrapper">
          <div class="position-center-center"> <a class="logo" href="index.html"><img src="img/logo.png" alt=""></a>
            <ul>
              <li class="scroll active"><a href="#hme">Início </a></li>
              <li class="scroll"><a href="#abt">Sobre </a> </li>
              <li class="scroll"><a href="#wrk">Galeria </a></li>
              <li class="scroll"><a href="#test">Testemunhos </a></li>
              <li class="scroll"><a href="#fnc">Fornecedores </a></li>
              <li class="scroll"><a href="#price">Pacotes </a></li>
              <li class="scroll"><a href="#contact">Contato</a></li>
            </ul>
          </div>
        </div>
        <!-- Right Img -->
        <div class="fat-right"> </div>
      </div>
    </div>
  </header>
  <!-- End Header --> 
  
  <!--======= HOME MAIN SLIDER =========-->
  <section class="home-slider" id="hme">
    <div class="tp-banner-container">
      <div class="tp-banner">
        <ul>
          
          <!-- SLIDE  -->
          <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" > 
            <!-- MAIN IMAGE --> 
            <img src="img/slides/slide-bg-1.jpg"  alt="home_slider2"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
            <!-- LAYERS --> 
            
            <!-- LAYER NR. 1 -->
            <div class="tp-caption sfr tp-resizeme text-color-primary" 
                data-x="center" data-hoffset="0" 
                data-y="center" data-voffset="-100" 
                data-speed="500" 
                data-start="1000" 
                data-easing="Power3.easeInOut" 
                data-splitin="chars" 
                data-splitout="none" 
                data-elementdelay="0.06" 
                data-endelementdelay="0.1" 
                data-endspeed="300"
                style="z-index: 5; max-width: auto; font-weight:900; font-size:120px; letter-spacing:-5px; color:#222; max-height: auto; white-space: nowrap;">LUZ, </div>
            
            <!-- LAYER NR. 2 -->
            <div class="tp-caption sfl tp-resizeme text-color-secondary" 
                data-x="center" data-hoffset="0" 
                data-y="center" data-voffset="40" 
                data-speed="500" 
                data-start="1500" 
                data-easing="Power3.easeInOut" 
                data-splitin="chars" 
                data-splitout="none" 
                data-elementdelay="0.07" 
                data-endelementdelay="0.1" 
                data-endspeed="300" 
                style="z-index: 6; max-width: auto; font-weight:900; font-size:140px; letter-spacing:-7px; max-height: auto; white-space: nowrap;">MÚSICA E  </div>
            
            <!-- LAYER NR. 3 -->
            <div class="tp-caption sfb tp-resizeme text-color-primary" 
                data-x="center" data-hoffset="0" 
                data-y="center" data-voffset="160" 
                data-speed="500" 
                data-start="2300" 
                data-easing="Power3.easeInOut" 
                data-splitin="none" 
                data-splitout="none" 
                data-elementdelay="0.08" 
                data-endelementdelay="0.1" 
                data-endspeed="300" 
                style="z-index: 7; max-width: auto; font-weight:900; font-size:120px; letter-spacing:-5px; color:#222; max-height: auto; white-space: nowrap;">ANIMAÇÃO! </div>
          </li>
          <!-- SLIDE  -->
          <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" > 
            <!-- MAIN IMAGE --> 
            <img src="img/slides/slide-bg-2.jpg"  alt="slider"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
            <!-- LAYERS --> 
            
            <!-- LAYER NR. 1 -->
            <div class="tp-caption sfr tp-resizeme text-color-secondary"
                data-x="center" data-hoffset="0" 
                data-y="center" data-voffset="70" 
                data-speed="500" 
                data-start="1000" 
                data-easing="Power3.easeInOut" 
                data-splitin="chars" 
                data-splitout="none" 
                data-elementdelay="0.06" 
                data-endelementdelay="0.1" 
                data-endspeed="300"
                style="z-index: 5; max-width: auto; font-weight:900; font-size:120px; letter-spacing:-5px; color:#222; max-height: auto; white-space: nowrap;">Se prepare pra </div>
            
            <!-- LAYER NR. 2 -->
            <div class="tp-caption sfl tp-resizeme text-color-primary" 
                data-x="center" data-hoffset="0" 
                data-y="center" data-voffset="200" 
                data-speed="500" 
                data-start="1500" 
                data-easing="Power3.easeInOut" 
                data-splitin="chars" 
                data-splitout="none" 
                data-elementdelay="0.07" 
                data-endelementdelay="0.1" 
                data-endspeed="300" 
                style="z-index: 6; max-width: auto; font-weight:900; font-size:150px; letter-spacing:-7px; max-height: auto; white-space: nowrap;">dançar MUITO! </div>
          </li>
          <!-- SLIDE  -->
          <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" > 
            <!-- MAIN IMAGE --> 
            <img src="img/slides/slide-bg-3.jpg"  alt="home_slider2"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
            <!-- LAYERS --> 
            
            <!-- LAYER NR. 1 -->
            <div class="tp-caption sfr tp-resizeme text-color-secondary"
                data-x="center" data-hoffset="0" 
                data-y="center" data-voffset="-35" 
                data-speed="500" 
                data-start="1000" 
                data-easing="Power3.easeInOut" 
                data-splitin="chars" 
                data-splitout="none" 
                data-elementdelay="0.06" 
                data-endelementdelay="0.1" 
                data-endspeed="300"
                style="z-index: 5; max-width: auto; font-weight:900; font-size:120px; letter-spacing:-5px; color:#222; max-height: auto; white-space: nowrap;">NOITES </div>
            
            <!-- LAYER NR. 2 -->
            <div class="tp-caption sfl tp-resizeme text-color-primary" 
                data-x="center" data-hoffset="0" 
                data-y="center" data-voffset="100" 
                data-speed="500" 
                data-start="1500" 
                data-easing="Power3.easeInOut" 
                data-splitin="chars" 
                data-splitout="none" 
                data-elementdelay="0.07" 
                data-endelementdelay="0.1" 
                data-endspeed="300" 
                style="z-index: 6; max-width: auto; font-weight:900; font-size:150px; letter-spacing:-7px; max-height: auto; white-space: nowrap;">INESQUECÍVEIS! </div>
          </li>
        </ul>
      </div>
    </div>
  </section>
  
  <!-- Content -->
  <div id="content">

    <!-- SOBRE NÓS -->
    <section id="abt" class="padding-top-100 padding-bottom-100 padding-left-20 padding-right-20"> 
      <!-- HEADING -->
      <div class="heading-block text-center margin-bottom-60">
        <h2>Nosso Trabalho</h2>
        <hr>
      </div>
      
      <!-- Services -->
      <div class="row"> 
          <!-- Basic Plan -->
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <p class="about-text">
            Uma festa só pode ser considerada como tal quando seu ambiente é capaz de atrair todos os seus convidados à pista de dança. Este árduo trabalho é realizado com bastante profissionalismo pela equipe da Vip Produções Dj Ipatinga. A empresa utiliza a sua estrutura disponível, incluindo um DJ especializado em eventos do gênero, para recriar o clima encontrado em casas noturnas.
            </p>
          </div>
          <div class="col-md-3"></div>
      </div>
    </section>

    <!-- ASSESSORIA -->
    <section class="HnH">
      <!-- Left Content -->
      <div class="col-md-6 col-sm-12 H-content">
      <h3 class="text-gold">FAQ VIP</h3>
        <h6>Ficou alguma dúvida?<br> Deixa a gente te ajudar!</h6>
        
        <!-- About Content -->
        <div class="panel-group accordion padding-top-20" id="accordion"> 
          
          <!-- According 1 -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">A VIP atende na minha cidade?</a> </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
              <div class="panel-body">
                <p>Atendemos toda a região do vale do aço, sem cobrar nenhuma taxa de deslocamento a mais.
                <br>
                Para demais cidades, é necessário fazer um orçamento para combinar o valor da taxa de deslocamento.
              </div>
            </div>
          </div>
          
          <!-- According 2 -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">Quanto tempo de serviço?</a> </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
              <div class="panel-body">
                <p>Todos os nossos pacotes são de <b>6 horas</b> de festa. No entando <b>ficamos até o final da festa</b>, enquanto a pista de dança estiver cheia e os convidados dançando.
                <br><br></p>
              </div>
            </div>
          </div>

          <!-- According 3 -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">Posso ter a minha boate ao ar livre?</a> </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
              <div class="panel-body">
                <p>Para eventos durante o dia, sim.</p>
                <p>Para eventos durante a noite, apenas mediante ao aluguel adicional de tenda.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Right Content -->
      <div class="col-md-6 col-sm-12 padding-0">
        <img class="H-img" src="./img/ad-1.jpg" />
      </div>
    </section>

    <!-- FATOS / CONTADORES -->
    <section class="dark our-banafits padding-top-100 padding-bottom-100">
      <div class="container">
        
        <!-- Counter -->
        <div class="counters nolist-style">
          <ul class="row">
            
            <!-- PROPOSALS SENT -->
            <li class="col-sm-3"> <i class="icon-wine"></i> <span class="counter" >1000</span><span>+</span>
              <p class="text-white">Eventos Realizados</p>
            </li>
            <!-- PROPOSALS SENT -->
            <li class="col-sm-3"> <i class="icon-clock"></i> <span class="counter">6</span> ANOS
              <p class="text-white">de mercado</p>
            </li>
            <!-- AWARDS WON -->
            <li class="col-sm-3"> <i class="icon-briefcase"></i> <span class="counter">180</span><span>+</span>
              <p class="text-white">Fornecedores</p>
            </li>
            <li class="col-sm-3"> <i class="icon-map"></i> <span class="counter">60</span><span>+</span>
              <p class="text-white">Cidades</p>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- EQUIPE - YOU CAN FIND IT ON disabled.html -->
    
    <!-- GALERIA -->
    <section id="wrk" class="portfolio padding-top-100 padding-bottom-100">
      <div class="container"> 
        <!-- Heading Block -->
        <div class="heading-block text-center margin-bottom-100">
          <h2>Eventos Realizados</h2>
          <hr>
        </div>
      </div>
      <div class="container-fluid no-padding"> 
        
        <!-- PORTOFLIO ITEMS FILTER -->
        <div class="text-center">
          <div id="js-filters-awesome-work" class="cbp-l-filters-buttonCenter filter-style-3">
            <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> Todos
              <div class="cbp-filter-counter"></div>
            </div>
              <div data-filter=".15anos" class="cbp-filter-item">
                15 ANOS
                <div class="cbp-filter-counter"></div>
              </div>
              <div data-filter=".casamento" class="cbp-filter-item">
                CASAMENTO
                <div class="cbp-filter-counter"></div>
              </div>
              <div data-filter=".formatura" class="cbp-filter-item">
                FORMATURA
                <div class="cbp-filter-counter"></div>
              </div>
          </div>
        </div>
        
        <!-- Item Start -->
        <div id="js-grid-awesome-work" class="no-space col-4 text-left"> 
          
          <!-- Item 1 -->
          <div class="cbp-item col-md-6 casamento">
            <div class="port-item"> 
              <!-- article img -->
              <article> <img src="img/portfolio/edrys_amaury/img-1.jpg" alt=""> 
                <!-- Portfolio Hover -->
                <div class="port-hover">
                  <div class="position-bottom">
                    <div class="animated fadeInUp">
                      <h4 class="text-white">23/03/2018<span>Edrys & Amaury</span> <a href="img/portfolio/edrys_amaury/img-1.jpg" class="cbp-lightbox" data-title=""><i class="icon-magnifier"></i></a> </h4>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
          
          <!-- Item 2 -->
          <div class="cbp-item col-md-6 15anos">
            <div class="port-item"> 
              <!-- article img -->
              <article> <img src="img/portfolio/taina/img-2.jpeg" alt=""> 
                <!-- Portfolio Hover -->
                <div class="port-hover">
                  <div class="position-bottom">
                    <div class="animated fadeInUp">
                      <h4 class="text-white">20/10/2018 <span>15 Anos de Tainá</span> <a href="img/portfolio/taina/img-2.jpeg" class="cbp-lightbox" data-title=""><i class="icon-magnifier"></i></a> </h4>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
          
          <!-- Item 3 -->
          <div class="cbp-item col-md-3 casamento">
            <div class="port-item"> 
              <!-- article img -->
              <article> <img src="img/portfolio/barbara_mauricelio/img-3.jpeg" alt=""> 
                <!-- Portfolio Hover -->
                <div class="port-hover">
                  <div class="position-bottom">
                    <div class="animated fadeInUp">
                      <h4 class="text-white">23/06/2018<span>Bárbara & Mauricélio</span> <a href="img/portfolio/barbara_mauricelio/img-3.jpeg" class="cbp-lightbox" data-title=""><i class="icon-magnifier"></i></a> </h4>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
          
          <!-- Item VIDEO -->
          <!-- <div class="cbp-item col-md-3 casamento">
            <div class="port-item">
              <article>
                <iframe width="100%" height="425px" src="https://www.youtube.com/embed/hwYoFR1sGGQ?autoplay=1&mute=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </article>
            </div>
          </div> -->
          
          <!-- Item 4 -->
          <div class="cbp-item col-md-6 casamento">
            <div class="port-item"> 
              <!-- article img -->
              <article> <img src="img/portfolio/edrys_amaury/img-2.jpg" alt=""> 
                <!-- Portfolio Hover -->
                <div class="port-hover">
                  <div class="position-bottom">
                    <div class="animated fadeInUp">
                      <h4 class="text-white">23/03/2018<span>Edrys & Amaury</span> <a href="img/portfolio/edrys_amaury/img-2.jpg" class="cbp-lightbox" data-title=""><i class="icon-magnifier"></i></a> </h4>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
          
          <!-- Item 5 -->
          <div class="cbp-item col-md-3 casamento">
            <div class="port-item"> 
              <!-- article img -->
              <article> <img src="img/portfolio/edrys_amaury/img-5.jpg" alt=""> 
                <!-- Portfolio Hover -->
                <div class="port-hover">
                  <div class="position-bottom">
                    <div class="animated fadeInUp">
                      <h4 class="text-white">23/03/2018<span>Edrys & Amaury</span> <a href="img/portfolio/edrys_amaury/img-5.jpg" class="cbp-lightbox" data-title=""><i class="icon-magnifier"></i></a> </h4>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
          
          <!-- Item 6 -->
          <div class="cbp-item col-md-3 15anos">
            <div class="port-item"> 
              <!-- article img -->
              <article> <img src="img/portfolio/yasmin/img-1.jpeg" alt=""> 
                <!-- Portfolio Hover -->
                <div class="port-hover">
                  <div class="position-bottom">
                    <div class="animated fadeInUp">
                      <h4 class="text-white">26/01/2019<span>15 Anos de Yasmin</span> <a href="img/portfolio/yasmin/img-1.jpeg" class="cbp-lightbox" data-title=""><i class="icon-magnifier"></i></a> </h4>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
          
          <!-- Item 7 -->
          <div class="cbp-item col-md-6 15anos">
            <div class="port-item"> 
              <!-- article img -->
              <article> <img src="img/portfolio/taina/img-4.jpeg" alt=""> 
                <!-- Portfolio Hover -->
                <div class="port-hover">
                  <div class="position-bottom">
                    <div class="animated fadeInUp">
                      <h4 class="text-white">20/10/2018 <span>15 Anos de Tainá</span> <a href="img/portfolio/taina/img-4.jpeg" class="cbp-lightbox" data-title=""><i class="icon-magnifier"></i></a> </h4>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>          
          
          <!-- Item 8 -->
          <div class="cbp-item col-md-6 casamento">
            <div class="port-item"> 
              <!-- article img -->
              <article> <img src="img/portfolio/natalia_vitor/img-5.jpeg" alt=""> 
                <!-- Portfolio Hover -->
                <div class="port-hover">
                  <div class="position-bottom">
                    <div class="animated fadeInUp">
                      <h4 class="text-white">07/09/2018 <span>Natália & Vitor</span> <a href="img/portfolio/natalia_vitor/img-5.jpeg" class="cbp-lightbox" data-title=""><i class="icon-magnifier"></i></a> </h4>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>

          <!-- Item 9 -->
          <div class="cbp-item col-md-6 casamento">
            <div class="port-item"> 
              <!-- article img -->
              <article> <img src="img/portfolio/barbara_mauricelio/img-6.jpeg" alt=""> 
                <!-- Portfolio Hover -->
                <div class="port-hover">
                  <div class="position-bottom">
                    <div class="animated fadeInUp">
                      <h4 class="text-white">23/06/2018<span>Bárbara & Mauricélio</span> <a href="img/portfolio/barbara_mauricelio/img-7.jpeg" class="cbp-lightbox" data-title=""><i class="icon-magnifier"></i></a> </h4>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
          
          <!-- Item 10 -->
          <div class="cbp-item col-md-6 casamento">
            <div class="port-item"> 
              <!-- article img -->
              <article> <img src="img/portfolio/natalia_vitor/img-4.jpeg" alt=""> 
                <!-- Portfolio Hover -->
                <div class="port-hover">
                  <div class="position-bottom">
                    <div class="animated fadeInUp">
                      <h4 class="text-white">07/09/2018 <span>Natália & Vitor</span> <a href="img/portfolio/natalia_vitor/img-4.jpeg" class="cbp-lightbox" data-title=""><i class="icon-magnifier"></i></a> </h4>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
          
          <!-- Item 11 -->
          <div class="cbp-item col-md-6 casamento">
            <div class="port-item"> 
              <!-- article img -->
              <article> <img src="img/portfolio/edrys_amaury/img-4.jpg" alt=""> 
                <!-- Portfolio Hover -->
                <div class="port-hover">
                  <div class="position-bottom">
                    <div class="animated fadeInUp">
                      <h4 class="text-white">23/03/2018<span>Edrys & Amaury</span> <a href="img/portfolio/edrys_amaury/img-4.jpg" class="cbp-lightbox" data-title=""><i class="icon-magnifier"></i></a> </h4>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
          
          <!-- Item 11 -->
          <div class="cbp-item col-md-6 casamento">
            <div class="port-item"> 
              <!-- article img -->
              <article> <img src="img/portfolio/paloma_alef/img-6.jpg" alt=""> 
                <!-- Portfolio Hover -->
                <div class="port-hover">
                  <div class="position-bottom">
                    <div class="animated fadeInUp">
                      <h4 class="text-white">04/03/2018<span>Paloma & Alef</span> <a href="img/portfolio/paloma_alef/img-6.jpg" class="cbp-lightbox" data-title=""><i class="icon-magnifier"></i></a> </h4>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>

        </div>
        
        <!-- LOAD MORE -->
        <div class="text-center margin-top-50 animate fadeInUp" data-wow-delay="0.4s">
          <div id="js-loadMore-awesome-work"> <a href="ajax-work/loadMore-portfolio-1.html" class="cbp-l-loadMore-link btn" rel="nofollow"> <span class="cbp-l-loadMore-defaultText">CARREGAR MAIS</span> <span class="cbp-l-loadMore-loadingText">CARREGANDO...</span> <span class="cbp-l-loadMore-noMoreLoading">#- FIM -#</span> </a> </div>
        </div>
      </div>
    </section> 

    <!-- TESTEMUNHOS -->
    <section id="test" class="dark testimonial padding-bottom-100 padding-top-100">
      <div class="container"> 
        <!-- Heading Block -->
        <div class="heading-block text-center margin-bottom-30">
          <h2>O que nossos clientes dizem ?</h2>
          <hr>
        </div>
        
        <!-- Slider -->
        <div id="testi-slide"> 
          <!-- Slide -->
          <div class="item">         
          <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Flukiinha09%2Fposts%2F1464616870372248&width=500" width="500" height="161" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe></div>

          <!-- Slide -->
          <div class="item"> 
          <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FDesigner.Beatriz.Leite%2Fposts%2F2534425870105145&width=500" width="500" height="161" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe></div>
          
          <!-- Slide -->
          <div class="item"> 
          <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FMnr.Alex.33%2Fposts%2F2656655964658373&width=500" width="500" height="199" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe></div>
          
          <!-- Slide -->
          <div class="item"> 
          <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Ffabricio.correa.165%2Fposts%2F539706540050277&width=500" width="500" height="161" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe></div>
          
          <!-- Slide -->
          <div class="item"> 
          <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fcinarareis.barreto%2Fposts%2F1112555069091127&width=500" width="500" height="180" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe></div>
        
        </div>
      </div>
    </section>

    <!-- CABINE -->
    <section class="HnH">    
      <!-- Left Content -->
      <div class="col-md-6 col-sm-12 padding-0">
        <img class="H-img" src="./img/cabine-capa.jpg" />
      </div>
      <!-- Right Content -->
      <div class="col-md-6 col-sm-12 H-content">
        <div class="heading-block text-center margin-top-100 margin-bottom-100">
          <h2>Cabine de Fotos</h2>
          <hr>
        </div>
        <p class="text-justify">
        Diversão e inovação no seu evento , tornando cada momento único , com muita alegria e brincadeiras 😍❤ Afinal de contas seu convidado vai a festa para se divertir né ?! Além de ser incrível e divertido ainda seu convidado terá a recordação do seu evento 🤗🤗
        </p>
        <a href="https://api.whatsapp.com/send?phone=5531988530432&text=Ol%C3%A1%20Lu%C3%A3,%20tudo%20Joia?%0d%0a%0d%0aAcabo%20de%20dar%20uma%20olhadinha%20*no%20site%20da%20VIP*,%20e%20gostaria%20de%20fazer%20um%20*or%C3%A7amento%20de%20CABINE*!" class="btn bot-btn btn-copper" target="_blank">PEDIR ORÇAMENTO</a>
      </div>
    </section>

    <!-- BOATES -->
    <section class="pricing dark style-2 padding-top-100 padding-bottom-100">
      <div class="container">
        <!-- Heading Block -->
        <div class="heading-block text-center margin-bottom-100">
          <h2>Boates</h2>
          <hr>
        </div>
        <!-- Carrousel -->
        <div class="pacotes margin-bottom-50">
          <!-- BOATE 02 -->
          <a class="cbp-singlePage link" href="pages/pacotes/02.html">
            <ul class="pricing-table">
              <img class="capa" src="./img/pacote02/capa.jpg"/>
              <li class="title text-copper">BOATE 02 
                <div class="price">ENTRADA FACILITADA!</div> <span class="price2">dividimos em até 12x no cartão</span>
              </li>
              <li class="bullet-item">Equipamento Profissional</li>
              <li class="bullet-item">SOM Ambiente Recepção</li>
              <li class="bullet-item">06hrs de festa c/ DJ</li>
              <li class="bullet-item">+1 Hora de festa <img src="./img/brinde.png"/></li>
              <li class="bullet-item text-center">-</li>
              <li class="bullet-item">+Tapete 4x4 <img src="./img/brinde.png"/></li>
              <div class="btn bot-btn btn-copper">+ DETALHES</div>
            </ul>
          </a>
          <!-- BOATE 03 -->
          <a class="cbp-singlePage link" href="pages/pacotes/03.html">
            <ul class="pricing-table">
              <img class="capa" src="./img/pacote03/capa.jpg"/>
              <li class="title text-diamond">BOATE 03
                <div class="price">ENTRADA FACILITADA!</div> <span class="price2">dividimos em até 12x no cartão</span>
              </li>              
              <li class="bullet-item">Equipamento Profissional</li>
              <li class="bullet-item">SOM Ambiente Recepção</li>
              <li class="bullet-item">06hrs de festa c/ DJ</li>
              <li class="bullet-item">+1 Hora de festa <img src="./img/brinde.png"/></li>
              <li class="bullet-item text-center">-</li>
              <li class="bullet-item">+Tapete 4x4 <img src="./img/brinde.png"/></li>
              <div class="btn bot-btn btn-diamond">+ DETALHES</div>
            </ul>
          </a>
          <!-- BOATE 05 -->
          <a class="cbp-singlePage link" href="pages/pacotes/05.html">
            <ul class="pricing-table">
              <img class="capa" src="./img/pacote05/capa.jpg"/>
              <li class="title text-copper">BOATE 05
                <div class="price">ENTRADA FACILITADA!</div> <span class="price2">dividimos em até 12x no cartão</span>
              </li>
              <li class="bullet-item">Equipamento Profissional</li>
              <li class="bullet-item">SOM Ambiente Recepção</li>
              <li class="bullet-item">06hrs de festa c/ DJ</li>
              <li class="bullet-item">+1 Hora de festa <img src="./img/brinde.png"/></li>
              <li class="bullet-item">+Chuva de Prata  <img src="./img/brinde.png"/></li>
              <li class="bullet-item">+Tapete 4x4 <img src="./img/brinde.png"/></li>
              <div class="btn bot-btn btn-copper">+ DETALHES</div>
            </ul>
          </a>
          <!-- BOATE 06 -->
          <a class="cbp-singlePage link" href="pages/pacotes/06.html">
            <ul class="pricing-table">
              <img class="capa" src="./img/pacote06/capa.jpg"/>
              <li class="title text-diamond">BOATE 06
                <div class="price">ENTRADA FACILITADA!</div> <span class="price2">dividimos em até 12x no cartão</span>
              </li>
              <li class="bullet-item">Equipamento Profissional</li>
              <li class="bullet-item">SOM Ambiente Recepção</li>
              <li class="bullet-item">06hrs de festa c/ DJ</li>
              <li class="bullet-item">+1 Hora de festa <img src="./img/brinde.png"/></li>
              <li class="bullet-item">+Chuva de Prata  <img src="./img/brinde.png"/></li>
              <li class="bullet-item">+Tapete 4x4 <img src="./img/brinde.png"/></li>
              <div class="btn bot-btn btn-diamond">+ DETALHES</div>
            </ul>
          </a>
          <!-- BOATE 08 -->
          <a class="cbp-singlePage link" href="pages/pacotes/08.html">
            <ul class="pricing-table">
              <img class="capa" src="./img/pacote08/capa.jpg"/>
              <li class="title text-copper">BOATE 08
                <div class="price">ENTRADA FACILITADA!</div> <span class="price2">dividimos em até 12x no cartão</span>
              </li>
              <li class="bullet-item">Equipamento Profissional</li>
              <li class="bullet-item">SOM Ambiente Recepção</li>
              <li class="bullet-item">06hrs de festa c/ DJ</li>
              <li class="bullet-item">+1 Hora de festa <img src="./img/brinde.png"/></li>
              <li class="bullet-item">+Chuva de Prata  <img src="./img/brinde.png"/></li>
              <li class="bullet-item">+Tapete 4x4 <img src="./img/brinde.png"/></li>
              <div class="btn bot-btn btn-copper">+ DETALHES</div>
            </ul>
          </a>
          <!-- BOATE 09 -->
          <a class="cbp-singlePage link" href="pages/pacotes/09.html">
            <ul class="pricing-table">
              <img class="capa" src="./img/pacote09/capa.jpg"/>
              <li class="title text-diamond">BOATE 09
                <div class="price">ENTRADA FACILITADA!</div> <span class="price2">dividimos em até 12x no cartão</span>
              </li>              
              <li class="bullet-item">Equipamento Profissional</li>
              <li class="bullet-item">SOM Ambiente Recepção</li>
              <li class="bullet-item">06hrs de festa c/ DJ</li>
              <li class="bullet-item">+1 Hora de festa <img src="./img/brinde.png"/></li>
              <li class="bullet-item">+Chuva de Prata  <img src="./img/brinde.png"/></li>
              <li class="bullet-item">+Tapete 4x4 <img src="./img/brinde.png"/></li>
              <div class="btn bot-btn btn-diamond">+ DETALHES</div>
            </ul>
          </a>
          <!-- BOATE 10 -->
          <a class="cbp-singlePage link" href="pages/pacotes/10.html">
            <ul class="pricing-table">
              <img class="capa" src="./img/pacote10/capa.jpg"/>
              <li class="title text-copper">BOATE 10
                <div class="price">ENTRADA FACILITADA!</div> <span class="price2">dividimos em até 12x no cartão</span>
              </li>
              <li class="bullet-item">Equipamento Profissional</li>
              <li class="bullet-item">SOM Ambiente Recepção</li>
              <li class="bullet-item">06hrs de festa c/ DJ</li>
              <li class="bullet-item">+1 Hora de festa <img src="./img/brinde.png"/></li>
              <li class="bullet-item">+Chuva de Prata  <img src="./img/brinde.png"/></li>
              <li class="bullet-item">+Tapete 4x4 <img src="./img/brinde.png"/></li>
              <div class="btn bot-btn btn-copper">+ DETALHES</div>
            </ul>
          </a>
          <!-- BOATE 11 -->
          <a class="cbp-singlePage link" href="pages/pacotes/11.html">
            <ul class="pricing-table">
              <img class="capa" src="./img/pacote11/capa.jpg"/>
              <li class="title text-diamond">BOATE 11
                <div class="price">ENTRADA FACILITADA!</div> <span class="price2">dividimos em até 12x no cartão</span>
              </li>
              <li class="bullet-item">Equipamento Profissional</li>
              <li class="bullet-item">SOM Ambiente Recepção</li>
              <li class="bullet-item">06hrs de festa c/ DJ</li>
              <li class="bullet-item">+1 Hora de festa <img src="./img/brinde.png"/></li>
              <li class="bullet-item">+Chuva de Prata  <img src="./img/brinde.png"/></li>
              <li class="bullet-item">+Tapete 4x4 <img src="./img/brinde.png"/></li>
              <div class="btn bot-btn btn-diamond">+ DETALHES</div>
            </ul>
          </a>
          <!-- BOATE 12 -->
          <a class="cbp-singlePage link" href="pages/pacotes/12.html">
            <ul class="pricing-table">
              <img class="capa" src="./img/pacote12/capa.jpg"/>
              <li class="title text-copper">BOATE 12
                <div class="price">ENTRADA FACILITADA!</div> <span class="price2">dividimos em até 12x no cartão</span>
              </li>
              <li class="bullet-item">Equipamento Profissional</li>
              <li class="bullet-item">SOM Ambiente Recepção</li>
              <li class="bullet-item">06hrs de festa c/ DJ</li>
              <li class="bullet-item">+1 Hora de festa <img src="./img/brinde.png"/></li>
              <li class="bullet-item">+Chuva de Prata  <img src="./img/brinde.png"/></li>
              <li class="bullet-item">+Tapete 4x4 <img src="./img/brinde.png"/></li>
              <div class="btn bot-btn btn-copper">+ DETALHES</div>
            </ul>
          </a>
          <!-- BOATE 14 -->
          <a class="cbp-singlePage link" href="pages/pacotes/14.html">
            <ul class="pricing-table">
              <img class="capa" src="./img/pacote14/capa.jpg"/>
              <li class="title text-diamond">BOATE 14
                <div class="price">ENTRADA FACILITADA!</div> <span class="price2">dividimos em até 12x no cartão</span>
              </li>
              <li class="bullet-item">Equipamento Profissional</li>
              <li class="bullet-item">SOM Ambiente Recepção</li>
              <li class="bullet-item">06hrs de festa c/ DJ</li>
              <li class="bullet-item">+1 Hora de festa <img src="./img/brinde.png"/></li>
              <li class="bullet-item">+Chuva de Prata  <img src="./img/brinde.png"/></li>
              <li class="bullet-item">+Tapete 4x4 <img src="./img/brinde.png"/></li>
              <div class="btn bot-btn btn-diamond">+ DETALHES</div>
            </ul>
          </a>
          <!-- BOATE 15 -->
          <a class="cbp-singlePage link" href="pages/pacotes/15.html">
            <ul class="pricing-table">
              <img class="capa" src="./img/pacote15/capa.jpg"/>
              <li class="title text-copper">BOATE 15
                <div class="price">ENTRADA FACILITADA!</div> <span class="price2">dividimos em até 12x no cartão</span>
              </li>
              <li class="bullet-item">Equipamento Profissional</li>
              <li class="bullet-item">SOM Ambiente Recepção</li>
              <li class="bullet-item">06hrs de festa c/ DJ</li>
              <li class="bullet-item">+1 Hora de festa <img src="./img/brinde.png"/></li>
              <li class="bullet-item">+Chuva de Prata  <img src="./img/brinde.png"/></li>
              <li class="bullet-item">+Tapete 4x4 <img src="./img/brinde.png"/></li>
              <div class="btn bot-btn btn-copper">+ DETALHES</div>
            </ul>
          </a>
        </div>
      </div>
    </section>

    <!-- LOCAÇÕES -->
    <section class="HnH">       
      <!-- Left Content -->
      <div class="col-md-6 col-sm-12 H-content">
        <div class="heading-block text-center margin-top-100 margin-bottom-100">
          <h2>Backdrop, Projetor, SOM</h2>
          <hr>
        </div>
        <p class="text-justify">
          Aqui você encontra tudo que precisa para realizar eventos profissionais e completos. Estrutura para backdrop, projetor para apresentações, SOM para palestras entre outros equipamentos para melhorar ainda mais a qualidade do seu evento!
        </p>
        <a href="https://api.whatsapp.com/send?phone=5531988530432&text=Ol%C3%A1%20Lu%C3%A3,%20tudo%20Joia?%0d%0a%0d%0aAcabo%20de%20dar%20uma%20olhadinha%20*no%20site%20da%20VIP*,%20e%20gostaria%20de%20fazer%20um%20*or%C3%A7amento%20de%20LOCA%C3%87%C3%83O*!" class="btn bot-btn btn-copper" target="_blank">PEDIR ORÇAMENTO</a>
      </div>
      <!-- Right Content -->
      <div class="col-md-6 col-sm-12 padding-0">
        <img class="H-img" src="./img/locacao-capa.jpg" />
      </div>
    </section>

    <!-- VAMOS AGITAR A SUA FESTA  -->
    <section class="let-talk-sec" data-stellar-background-ratio="0.5">
      <div class="container">
        <h1>Vamos agitar a sua festa!</h1>
        <a href="https://api.whatsapp.com/send?phone=5531988530432&text=Ol%C3%A1%20Lu%C3%A3,%20tudo%20Joia?%0d%0a%0d%0aAcabo%20de%20dar%20uma%20olhadinha%20*no%20site%20da%20VIP*,%20e%20gostaria%20de%20fazer%20um%20or%C3%A7amento!" target="_blank" class="btn btn-whatsapp margin-top-50"> <i class="ion-social-whatsapp"></i> ABRIR O WHATSAPP</a> </div>
    </section>
  </div>
  <!-- End Content --> 
  
  <!-- Footer -->
  <footer id="contact" class="footer">
    <div class="container"> 
      
      <!-- Heading Block -->
      <div class="heading-block text-center margin-bottom-30">
        <h2>Fale Conosco</h2>
        <hr>
      </div>
    </div>

    <!-- Contact Info -->
    <div class="container">

      <!-- Services -->
      <ul class="row  margin-bottom-30">        
        <li class="col-sm-6">
          <a href="pages/orcamento.html" class="cbp-singlePage link" rel="nofollow">
            <div class="services">
              <div class="service-part"> <i class="flaticon-monitor animate fadeInLeft" data-wow-delay="0.4s"></i>
                <h6>Faça seu Orçamento</h6>
                <p>Preencha um pequeno formulário que lhe retornaremos em breve.</p>
              </div>
            </div>
          </a>
        </li>
        <li class="col-sm-6">
          <a href="pages/trabalhe_conosco.html" class="cbp-singlePage link" rel="nofollow">
            <div class="services">
              <div class="service-part"> <i class="flaticon-group-of-students animate fadeInLeft" data-wow-delay="0.4s"></i>
                <h6>Trabalhe Conosco</h6>
                <p>Faça parte da nossa equipe, nosso banco de talentos está sempre aberto.</p>
              </div>
            </div>
          </a>
        </li>
      </ul>

      <div class="row"> 
        
        <!-- Contact Form -->
        <div class="col-md-6 col-sm-12">
          <div class="contact">
            <h6>Mande-nos uma Mensagem</h6>
            
            <!-- Response Messages -->
            <div class="hiSuccessMSG"> <i class="fa fa-paper-plane-o"></i>Obrigado. Retornaremos em breve.</div>
            <div class="hiErrorMSG"> <i class="fa fa-times"></i>Desculpe. Ocorreu um erro ao enviar seus dados.</div>
            
            <!-- FORM -->
            <form class="hiForm contact-form" method="post" action="">
              <ul class="row">
                <li class="col-sm-6">
                  <label>
                    <input type="text" class="form-control" name="nome" placeholder="Nome" required>
                  </label>
                </li>
                <li class="col-sm-6">
                  <label>
                    <input type="text" class="form-control" name="email" placeholder="E-mail" required>
                  </label>
                </li>
                <li class="col-sm-12">
                  <label>
                    <textarea class="form-control" style="resize: none;" name="mensagem" rows="5" placeholder="Sua mensagem para nós..." required></textarea>
                  </label>
                </li>
                <li class="col-sm-12">
                  <button type="submit" value="submit">ENVIAR</button>
                </li>
              </ul>

                <input type="hidden" name="name" value="Ellite Festa">
                <input type="hidden" name="mailto" value="contato@ellitefesta.com.br">
                <input type="hidden" name="subject" value="Novo contato via SITE!">

            </form>
          </div>
        </div>

        <div class="col-md-6 col-sm-12"> 

          <div class="row">
            <div class="col-md-6 col-sm-12">
              
              <div class="row">
                <!-- Endereço -->
                <div class="col-md-12 col-sm-6 margin-top-30">
                  <h6>Endereço</h6>
                  <p>Rua Tupiniquins, 330 <br>
                  Iguaçu, Ipatinga - MG</p>
                </div>
                <!-- Social Icons -->
                <div class="col-md-12 col-sm-6 margin-top-30">
                  <h6>Segue lá!</h6>
                  <div class="social-icons"> 
                    <a href="https://www.instagram.com/vipproducoesdj/" target="_blank"><i class="ion-social-instagram"></i></a>
                    <a href="https://www.facebook.com/vipproducoesdjipatingaecabinedefotos/" target="_blank"><i class="ion-social-facebook"></i></a>
                    <a href="https://www.casamentos.com.br/musica-de-casamento/vip-producoes-dj-ipatinga--e160189" target="_blank"><i class="ion-heart"></i></a> 
                  </div>
                </div>
              </div>

            </div>
            
            <!-- Contatos -->
            <div class="col-md-6 col-sm-12 margin-top-30">
              <div class="office-info">
                <h6>Contatos</h6>
                <p><i class="icon-call-in"></i> (31) 9 8853 0432</p>
                <p><i class="icon-envelope"></i> contato@vipproducoesdj.com.br</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Map -->
    <section class="map-block">
      <iframe class="map-wrapper" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7522.94983505927!2d-42.557661!3d-19.478193!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xafffe4e2dfd027%3A0x62059285303ae11d!2sVip%20Produ%C3%A7%C3%B5es%20-%20Dj%20Ipatinga%20-%20Boate%20Completa%20e%20Cabine%20de%20Fotos!5e0!3m2!1spt-BR!2sbr!4v1593956222775!5m2!1spt-BR!2sbr" frameborder="0" style="border:0;" allowfullscreen></iframe>
    </section>
    
    <!-- Rights -->
    <div class="rights">
      <div class="container">
        <?=file_get_contents('https://cdn.ideyou.com.br/defaults/footer.php?type=light');?>
      </div>
    </div>
  </footer>
  <!-- End Footer --> 
  
  <!-- GO TO TOP  --> 
  <a href="#" class="cd-top"><i class="fa fa-angle-up"></i></a> 
  <!-- GO TO TOP End --> 
</div>
<!-- End Page Wrapper -->

  <!-- JavaScripts --> 
  <script src="js/vendors/jquery/jquery.min.js"></script> 
  <script src="js/vendors/wow.min.js"></script> 
  <script src="js/vendors/bootstrap.min.js"></script> 
  <script src="js/vendors/jquery.cubeportfolio.min.js"></script> 
  <script src="js/vendors/own-menu.js"></script> 
  <script src="js/vendors/jquery.sticky.js"></script> 
  <script src="js/vendors/owl.carousel.min.js"></script> 
  <script src="js/vendors/jquery.fatNav.min.js"></script>
  <script src="js/vendors/jquery.mb.YTPlayer.js"></script> 

  <!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
  <script type="text/javascript" src="rs-plugin/js/jquery.tp.t.min.js"></script> 
  <script type="text/javascript" src="rs-plugin/js/jquery.tp.min.js"></script> 

  <!-- BLOCK CUSTOM -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
  <script type="text/javascript" src="https://cdn.isaquecosta.com.br/lib/js/hiAjaxMail.js"></script>
  <script src="js/main.js"></script>
</body>
</html>