<?php
	session_start();
	if(!isset($_SESSION['id_usuario'])) {
		header("location: login.php");
		exit;
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=yes">
		<title>.:: X-Dbv ::.</title>
		<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="lib/owl.carousel/owl-carousel/owl.carousel.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/xdbv.css">
		<link rel="stylesheet" href="css/xdbv-mobile.css">
		<link href="https://fonts.googleapis.com/css?family=ZCOOL+KuaiLe" rel="stylesheet">
	</head>
	<body>
		<header>				
			<!-- ####### FAIXA-BLACK DOS CLUBES	#######	 -->
			<div class="header-black">
				<div class="container">
					<ul class="pull-right" style="height: 40px; margin: 0;">
						<li class="club-01"><a href="https://www.facebook.com/5regiaomsma/" target="_blank" title="5ª Região"></a></li>
						<li class="club-02"><a href="https://www.facebook.com/5regiaomsma/" target="_blank" title="Clube de Líderes Elias Medeiros"></a></li>
						<li class="club-03"><a href="https://www.facebook.com/Guerreiros-de-Cristo-1034146440012338/" target="_blank" title="Guerreiros de Cristo"></a></li>
						<li class="club-04"><a href="https://www.facebook.com/Ex%C3%A9rcito-de-Cristo-1561949410765704/" target="_blank" title="Exército de Cristo"></a></li>
						<li class="club-05"><a href="https://www.facebook.com/HeroisdaFe.Acailandia/" target="_blank" title="Heróis da Fé"></a></li>
						<li class="club-06"><a href="https://www.facebook.com/profetas.dorei.37" target="_blank" title="Profetas do Rei"></a></li>
						<li class="club-07"><a href="https://www.facebook.com/Clube-Soldados-Da-Cruz-1207696189246902/" target="_blank" title="Soldados da Cruz"></a></li>
						<li class="club-08"><a href="#" target="_blank" title="Sigma"></a></li>
						<li class="club-09"><a href="https://www.facebook.com/pioneirosdagloria/" target="_blank" title="Pioneiros da Glória"></a></li>
						<li class="club-10"><a href="https://www.facebook.com/heroisdecristoo/" target="_blank" title="Heróis de Cristo"></a></li>
						<li class="club-11"><a href="#" target="_blank" title="Comando do Rei"></a></li>
						<li class="club-12"><a href="https://www.facebook.com/Aguiasceu/" target="_blank" title="Águias do Céu"></a></li>
						<li class="club-13"><a href="#" target="_blank" title="Herdeiros de Cristo"></a></li>
						<li class="club-14"><a href="#" target="_blank" title="Guerreiros de Hebrom"></a></li>
						<li class="club-15"><a href="#" target="_blank" title="Comando de Cristo"></a></li>
					</ul>
				</div>
			</div>

			<!-- ####### MENU DE NAVEGAÇÃO ####### -->
			<nav id="menu" class="navbar navbar-inverse">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="index.php"><img id="logotipo-mobile" src="img/XDbv-logo.png" alt="Logotipo"></a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <a class="navbar-brand hidden-xs" href="#">
			        <img id="logotipo" class="hidden-xs" alt="Brand" src="img/XDbv-logo.png">
			      </a>
			      <ul class="nav navbar-nav nav-menu pull-right">
			        <li><a href="index.php">Inicio</a></li>
			        <li><a href="#especialidades-anexos">Especialidades</a></li>
			        <!-- <li><a href="index.php#especialidades">Especialidades</a></li>
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Xtremers <span class="caret"></span></a>
			          <ul class="dropdown-menu navbar-inverse">
			            <li><a href="index.php#galeria-xtreme" style="padding-right: 3px;">Galeria Xtreme</a></li>
			          </ul>
			        </li> -->
			        <li><a href="sair.php"> Sair  <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span></a></li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>	
		</header>
		<section>
			<!-- ####### BANNER ####### -->
			<div id="banner-especialidades">
				<h1>Especialidades<small>Especialistas Xtremers</small></h1>
			</div>

			<!-- ####### ESPECIALIDADES PARA DOWNLOADS ####### -->
			<div id="especialidades-anexos" class="container">
				<div class="row text-center">
					<h2>Especialidades</h2>
					<hr>
					<br><br>
				</div>
				<div class="container">
					<div class="row text-center">
						<div class="col-md-4">
							<div class="card">		<!--.../100px180/ -->
							  <img class="card-img-top" src="img/especialidades/EN-Felinos.jpg">  
							  <div class="card-body">
							    <h5 class="card-title">Felinos</h5>
							    <!-- <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p> -->
							    <a href="pdf/especialidades/EN-Felinos-Conteudo.pdf" download class="btn btn-primary">Conteúdo</a>
							    <a href="pdf/especialidades/EN-Felinos-Prova.pdf" download class="btn btn-success">Prova</a>
							  </div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">		<!--.../100px180/ -->
							  <img class="card-img-top" src="img/especialidades/EN-Caes.jpg">  
							  <div class="card-body">
							    <h5 class="card-title">Cães</h5>
							    <!-- <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p> -->
							    <a href="pdf/especialidades/EN-Caes-Conteudo.pdf" download class="btn btn-primary">Conteúdo</a>
							    <a href="pdf/especialidades/EN-Caes-Prova.pdf" download class="btn btn-success">Prova</a>
							  </div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">		<!--.../100px180/ -->
							  <img class="card-img-top" src="img/especialidades/astro.png">  
							  <div class="card-body">
							    <h5 class="card-title">Astronomia</h5>
							    <!-- <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p> -->
							    <a href="pdf/especialidades/EN-Astronomia-Conteudo.pdf" download class="btn btn-primary">Conteúdo</a>
							    <a href="pdf/especialidades/EN-Astronomia-Prova.pdf" download class="btn btn-success">Prova</a>
							  </div>
							</div>
						</div>
					</div>
				</div>
				<br><br><br>

				<h5>EM BREVE MAIS ESPECIALIDADES</h5>
				<!-- <div class="row text-center" id="fotounidari">
					<h2>Fotos do Último Unidari</h2>
					<hr>
				</div>				
				<div class="container galeria2">
					
				</div> -->
			</div>
			<!-- ####### BOTÃO TOPO ####### -->
			<a href="#" class="scrollToTop glyphicon glyphicon-hand-up hidden-xs"></a>
		</section>
		<footer>
			<!-- ####### RODAPÉ CINZA CLARO ####### -->
			<div class="row row-cinza-claro">
				<div class="container">
					<div class="row">
						<div class="col-md-2 hidden-xs">
							<img class="logotipo text-center" src="img/XDbv-logo.png" alt="Logotipo">			
						</div>
						<div class="col-md-10">
							<div class="row row-cols">
								<div class="col-md-4 col-link hidden-xs">
									<h4>Links</h4>
									<ul class="list-unstyled">
										<li><a href="index.html"><i class="fa fa-angle-right">Home</i></a></li>
										<li><a href="#news"><i class="fa fa-angle-right">Notícias</i></a></li>
										<li><a href="#especialidades"><i class="fa fa-angle-right">Especialidades</i></a></li>
									</ul>
								</div>
								<div class="col-md-4 col-contato">
									<h4 class="hidden-xs">Contato</h4>
									<address class="hidden-xs">
										<a href="#">contato@x-dbv.com.br</a>
									</address>
									<p class="hidden-xs"><a href="tel:991418730"><i class="fa fa-phone"></i> Cel: (99)3538-2945</a></p>
									<ul class="list-unstyled list-socials">
										<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
										<li><a href="https://www.youtube.com/channel/UCbeEUoV-G2-XqDzGLmHwkDg" target="_blank"><i class="fa fa-youtube"></i></a></li>
										<li><a href="#" class="scrollToTop-mobile"><i class="fa fa-chevron-up"></i></a></li>
									</ul>
								</div>
								<div class="col-md-4 col-restrita hidden-xs">
									<h4>Área Restrita</h4>
									<ul class="list-unstyled">
										<li>
											<h5><a href="http://cpanel.x-dbv.com.br:2082/logout/?locale=pt_br" target="_blank"><i class="fa fa-angle-right">Administrativo</i></a></h5>
										</li>
										<li>
											<h5><a href="http://cpanel.x-dbv.com.br:2095/logout/?locale=pt_br" target="_blank"><i class="fa fa-angle-right">E-mail</i></a></h5>
										</li>
										<li>
											<h5><a href="https://sad-us-fm-1.sgc.live.apps.sdasystems.org/cms/login.php?lang=pt_br" target="_blank"><i class="fa fa-angle-right">SGC</i></a></h5>
										</li>
									</ul>
								</div>
							</div>							
						</div>
					</div>
				</div>
			</div>
			<!-- ####### RODAPÉ CINZA ESCURO ####### -->
			<div class="row row-cinza-escuro">
				<div class="container copyright-mobile">
					<div class="col-md-4">
						<p class="pull-left">Copyright X-Dbv 2019. All rights public.</p>
					</div>
					<div class="col-md-4 hidden-xs">
						<p class="text-center">Atualização: 20190501</p>
					</div>
					<div class="col-md-4">
						<p class="pull-right text-roxo">Criado por SERGIO, Líder de Desbravadores.</p>
					</div>
				</div>
			</div>
		</footer>
		<script src="lib/jquery/jquery.min.js"></script>
		<script src="lib/owl.carousel/owl-carousel/owl.carousel.min.js"></script>
		<script src="lib/bootstrap/js/bootstrap.min.js"></script>
		<script src="js/efeitos.js"></script>
	</body>
</html>