<?php
	
	include_once "../controller/index_controller.php";

	$controller = new index_controller();

	$eventos = $controller->select_eventos();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Gerenciador Esportivo</title>
	<meta charset="UTF-8">
	<meta name="description" content="HALO photography portfolio template">
	<meta name="keywords" content="Administrador JIFSC, gestor JIFSC">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon -->   
	<link href="../img/logo.png" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/font-awesome.min.css"/>
	<link rel="stylesheet" href="../css/flaticon.css"/>
	<link rel="stylesheet" href="../css/animate.css"/>
	<link rel="stylesheet" href="../css/owl.carousel.css"/>
	<link rel="stylesheet" href="../css/style.css"/>

	</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section start -->
	<header class="header-section sp-pad">
		
		<img class="site-logo" src="../img/icon.png"></img>
		<div class="nav-switch">
			<i class="fa fa-bars"></i>
		</div>
		<nav class="main-menu">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="#evento">Evento</a></li>
				<li><a href="#contact">Contato</a></li>
			</ul>
		</nav>
	</header>

	<!-- Hero section start -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg sp-pad" data-setbg="../img/futsal.jpg">
				<div class="hs-text">
					<h2 class="hs-title">Futsal</h2>
					<p class="hs-des"></p>
				</div>
			</div>
			<div class="hs-item set-bg sp-pad" data-setbg="../img/volei.jpg">
				<div class="hs-text">
					<h2 class="hs-title">Vôlei</h2>
					<p class="hs-des"></p>
				</div>
			</div>
		</div>
	</section>

	<!-- Work nav section start -->
<br>

	<section id="evento" class="portfolio-section">

		<div class="sp-pad spad">
			<h3 class="sp-title">Eventos</h3>
			<!-- portfolio filter menu -->
		</div>
		<div class="portfolio-warp">
			<?php
			
				foreach ($eventos as $key => $e) {
					echo '<div class="mix single-portfolio set-bg col-sm-12 col-md-12 col-lg-12" style="height: 450px; width: 450px;" data-setbg="../img/contato.jpg">
							<a href="estatisticas.php?mod=Futsal&evento=' . $e->get_nome() . '&idevento=' . $e->get_id() . '" class="portfolio-info">
								<div class="pfbg set-bg" data-setbg="../img/contato.jpg"></div>
								<h5>Evento: ' . $e->get_nome() . '</h5>
								<p> Data: ' . $e->get_data() . '</p>
								<p> Local: ' . $e->get_local_torneios() . '</p>
							</a>
						</div>';
				}

			?>
		</div>
		
	</section>

	<section id="contact" class="contact-section set-bg spad" data-setbg="../img/fundo_contact.jpg">
		<div class="container-fluid contact-warp">
			<div class="contact-text">
				<div class="container p-0">
					<h3 class="sp-title">Manter Contato</h3>
					<ul class="con-info">
						<li><i class="flaticon-phone-call"></i>(47) 3318-3700</li>
						<li><i class="flaticon-envelope"></i>renato.reinhold@aluno.ifsc.edu.br</li>
						<li><i class="flaticon-envelope"></i>fabio.felsky@aluno.ifsc.edu.br</li>
						<li><i class="flaticon-placeholder"></i>R. Adriano Korman, 456 - Bela Vista, 89110-971<br> Gaspar, SC</li>
					</ul>
				</div>
			</div>
			<div class="container p-0">
				<div class="row">
					<div class="col-xl-8 offset-xl-4">
						<form class="contact-form">
							<div class="row">
								<div class="col-md-6">
									<input type="text" placeholder="Nome">
								</div>
								<div class="col-md-6">
									<input type="email" placeholder="E-mail">
								</div>
								<div class="col-md-12">
									<input type="text" placeholder="Assunto">
									<textarea placeholder="Mensagem"></textarea>
									<button class="site-btn light">Enviar</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- 
			<div class="clearfix">
			</div>  
			-->
			<div class="sp-pad next-portfolio-link">
				<a href="#" class="arrow-btn">
					<i class="fa fa-angle-right"></i>
					<i class="fa fa-angle-right"></i>
					<i class="fa fa-angle-right"></i>
				</a>
			</div>
		</div>

	</section>

	<!--====== Javascripts & Jquery ======-->
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/owl.carousel.min.js"></script>
	<script src="../js/mixitup.min.js"></script>
	<script src="../js/circle-progress.min.js"></script>
	<script src="../js/main.js"></script>
	<script src="../js/link-scroll.js"></script>

</body>
</html>
