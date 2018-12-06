<?php
	
	require_once '../controller/estatisticas_controller.php';

	$estatisticas_controller = new estatisticas_controller();

	$torneios = $estatisticas_controller->select_torneios_for_evento($_GET['idevento']);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Gerenciador Esportivo</title>
	<meta charset="UTF-8">
	<meta name="description" content="Gestor esportivo">
	<meta name="keywords" content="photography, portfolio, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="../img/logo.png" rel="shortcut icon"/>
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
		<h3 class="site-logo">Gerenciador Esportivo</h3>
		<div class="nav-switch">
			<i class="fa fa-bars"></i>
		</div>
		<nav class="main-menu">
			<ul>
				<li><a href="index.php">Home</a></li>
			</ul>
		</nav>
	</header>
	<!-- Header section end -->



	<!-- Page top section start -->
	<div class="page-top-area set-bg" data-setbg="../img/futsal.jpg">
		<div class="breadcrumb-area">
			<a href="#">Home</a> / <span>Estatisticas</span> / <span><?php echo $_GET['evento']; ?></span>
		</div>
	</div>
	<!-- Page top section end -->

	<!-- Elements section start -->
	
				<div class="sp-pad spad">
					<h3 class="sp-title">Torneios</h3>
					<!-- portfolio filter menu -->
					<ul class="portfolio-filter controls">
						<li class="control" data-filter="*">All</li>
						<li class="control" data-filter=".Futsal">Futsal</li>
						<li class="control" data-filter=".Vôlei">Vôlei</li>
					</ul>
				</div>
				<div class="sp-pad spad">
					<?php
						
						foreach ($torneios as $key => $t) {
							$modalidade = null;
							$img = null;

							if($t->get_modalidade()){
								$modalidade = 'Futsal';
								$img = '../img/futsal.jpg';
							}
							else{
								$modalidade = 'Vôlei';
								$img = '../img/volei.jpg';
							}
								
							echo '<div class="mix single-portfolio set-bg ' . $modalidade . '" style="height: 420px; width: 420px;" data-setbg="' . $img . '">
									<a href="estatisticas.php" class="portfolio-info">
										<div class="pfbg set-bg" data-setbg="' . $img . '"></div>
									</a>
								</div>';
						}

					?>
				</div>
		
	<!-- Elements section end -->
	<!--====== Javascripts & Jquery ======-->
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/owl.carousel.min.js"></script>
	<script src="../js/mixitup.min.js"></script>
	<script src="../js/circle-progress.min.js"></script>
	<script src="../js/main.js"></script>
</body>
</html>
