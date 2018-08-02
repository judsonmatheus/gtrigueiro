<!DOCTYPE html>
<html>
	<head>
		<title><?php
       	if(isset($title))
       	{
           echo $title;
       	}
       	else
       	{
           echo "Grupo G Trigueiro - Natal/RN";
       	}
   		?></title>
		<meta charset="utf8">
		<meta name="description" content="As empresas do grupo G Trigueiro trabalham em segmentos diferentes, de forma integrada, gerando soluções de estrutura e equipamento para empresas, eventos, etc.">
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/fonts/font-awesome.css">

		<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
		<link rel="manifest" href="favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">


		<link rel="stylesheet" type="text/css" href="assets/components/bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/components/OwlCarousel/owl-carousel/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="assets/components/OwlCarousel/owl-carousel/owl.theme.css">
		<link rel="stylesheet" type="text/css" href="assets/components/OwlCarousel/owl-carousel/owl.transitions.css">
		<link rel="stylesheet" type="text/css" href="assets/css/fonts/font.css">

		<link rel="stylesheet" type="text/css" href="assets/components/fancybox/source/jquery.fancybox.css">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css?19102016">



		<script type="text/javascript" src="assets/components/jquery/dist/jquery.min.js"></script>

		<script type="text/javascript" src="assets/components/bootstrap/dist/js/bootstrap.min.js"></script>

		<script type="text/javascript" src="assets/components/OwlCarousel/owl-carousel/owl.carousel.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js"></script>
		<script type="text/javascript" src="assets/components/fancybox/source/jquery.fancybox.js"></script>
		<script type="text/javascript" src="assets/components/fancybox/source/jquery.fancybox.pack.js"></script>
		<script type="text/javascript" src="assets/scripts/main.js"></script>
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<script type="text/javascript">
			$(document).ready(function(){
				$(".scroll").click(function(event){
			        event.preventDefault();
			        $('html,body').animate({scrollTop:$(this.hash).offset().top - 83}, 2000);
			    });
			});
		</script>
		<script type="text/javascript">
		$(document).ready(function(){
			if ($(window).width() < 840) {
		   	$("#socialmenu").remove();
		   	$("#numero-topo").removeClass('numero-topo');
		   	$("#numero-topo").addClass('numero-topo-small');

			}
		});
		</script>


		<!-- Google 12 Analytics-->
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
					(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-85359129-1', 'auto');
			ga('send', 'pageview');

		</script>
	</head>
<body>
	<div class="area-topo">
		<div class="limit">
			<header id="topo" class="clear-fix">
				<div id="logo-topo">
					<a href="index.php">
						<img src="assets/pics/logo-topo.png" width="80%">
					</a>
				</div>

				<div class="area-botao-menu">
					<div id="botao-menu" class="btn btn-menu">
						<i class="icon icon-menu-fechado"></i>
						<i class="icon icon-menu-aberto"></i>
						<span>Menu</span>
					</div>
					<div class="area-menu">
						<nav id="menu-topo" class="menu-vertical">
							<div class="row">
								<div class="col-sm-4 col-xs-12">
									<div class="col-sm-12">
										<h3>Grupo</h3>
									</div>
									<div class="col-xs-6">
										<ul >
											<!-- <li><a class="scroll" href="#sobre">Sobre o Grupo</a></li> -->
											<li><a href="ogrupo.php">Sobre</a></li>
											<li><a class="scroll" href="#cases">Cases</a></li>
											<li><a class="scroll" href="#depoimentos">Depoimentos</a></li>
											<li><a href="trabalhe-conosco.php">Trabalhe conosco</a></li>
										</ul>
									</div>
									<div class="col-xs6">
										<ul>
											<li><a class="scroll" href="#localizacao">Localização</a></li>
											<li><a href="revista.php">Revista</a></li>
											<li><a href="contato.php">Contato</a></li>
										</ul>
									</div>
									<div class="col-sm-12">
										<ul class="redes-sociais">
											<li><a href="https://www.facebook.com/GrupoGTrigueiro/?fref=ts" target="_blank"><i class="icon icon-facebook"></i></a></li>
											<li><a href="https://www.instagram.com/grupogtrigueiro/" target="_blank"><i class="icon icon-instagram"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="col-sm-8 col-xs-12">
									<div class="col-sm-12">
										<h3>Empresas</h3>
										<ul class="lista-empresas-logos" style="text-align: center;">
											<li><a href="empresa-maquip.php"><img src="assets/pics/logos-empresas-menor/maquip.png"></a></li>
											<li><a href="empresa-arquivar.php"><img src="assets/pics/logos-empresas-menor/arquivar.png"></a></li>
											<li><a href="empresa-marelli.php"><img src="assets/pics/logos-empresas-menor/marelli.png"></a></li>
											<li><a href="empresa-celmar.php"><img src="assets/pics/logos-empresas-menor/celmar.png"></a></li>
											<li><a href="empresa-moveloc.php"><img src="assets/pics/logos-empresas-menor/moveloc.png"></a></li>
											<li><a href="empresa-london.php"><img src="assets/pics/logos-empresas-menor/london.png"></a></li>
											<li><a href="empresa-biccateca.php"><img src="assets/pics/logos-empresas-menor/biccateca.png"></a></li>
											<li><a href="empresa-milliken.php"><img  src="assets/pics/logos-empresas-menor/milliken.png"></a></li>
											<li><a href="empresa-bibliotheca.php"><img  src="assets/pics/logos-empresas-menor/bibliotheca.png"></a></li>
										</ul>
									</div>
								</div>
							</div>
						</nav>
					</div>

				</div>
				<div id="socialmenu" class="numero-topo" >
					<a style="color: white;" href="https://www.facebook.com/GrupoGTrigueiro/?fref=ts" target="_blank"><i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i></a>
					<a style="color: white;" href="https://www.instagram.com/grupogtrigueiro/" target="_blank"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>
				</div>
				<div id="numero-topo" class="numero-topo">
					<span style="font-size:22px; margin-right: 5px;" class="glyphicon glyphicon-earphone" aria-hidden="true"></span><b>(84) 4006-5767</b>
				</div>

			</header>
		</div>
	</div>
