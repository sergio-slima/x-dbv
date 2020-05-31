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
		<link rel="stylesheet" type="text/css" href="lib/slick/slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="lib/slick/slick/slick-theme.css"/>
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
			        <li><a href="#unidari-musica-oficial">Música</a></li>
			        <li><a href="#unidari-video">Clips</a></li>
			        <li><a href="#unidari-serie">Série</a></li>
			        <li><a href="#unidari-galeria">Self</a></li>
			        <li><a href="sair.php"> Sair  <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span></a></li>
			        <!-- <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Xtremers <span class="caret"></span></a>
			          <ul class="dropdown-menu navbar-inverse">
			            <li><a href="#galeria-xtreme" style="padding-right: 3px;">Galeria Xtreme</a></li>
			          </ul>
			        </li> -->
			      </ul>      
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>	
		</header>
		<section>
			<!-- ####### BANNER ####### -->
			<div id="banner-unidari">
				<h1>FORTE E FIEL<small>III Unidari da R5</small></h1>
			</div>
		</section>

		<section>
			<!-- ####### UNIDARI MÚSICA OFICIAL ####### -->
			<div id="unidari-musica-oficial" class="row text-center">
				<h2>Música Oficial Unidari</h2>
				<hr>
			</div>
			<br><br>
			<div id="unidari-musica">
				<!-- <span style="text-align: center; font-size: 10em; font-family: monospace; color: red;"><h3>EM BREVE!</h3></span> -->
				<div class="container musica">
					<div class="row">
						<div class="col-md-6">
							<span><p>Clip Oficial</p></span>
							<div class="row text-center">
								<video controls autoplay loop preload="auto" oncontextmenu="return false" controlsList="nodownload">
								    <source src="mp4/video-musica.mp4" type="video/mp4">
								    Seu navegador não suporte esse tipo de video.
								</video>
							</div>
						</div>

						<div class="col-md-6">
							<span><p>Downloads</p></span>
							<div class="text-center">
								<a href="mp4/video-musica.mp4" download class="btn btn-success">Vídeo - Oficial</a><br>

								<a href="mp4/video-musica-pb.mp4" download class="btn btn-success">Vídeo - PlayBack</a><br>

								<a href="mp4/musica-unidari.mp3" download class="btn btn-success">Música - Oficial</a><br>

								<a href="mp4/musica-unidari-pb.mp3" download class="btn btn-success">Música - PlayBack</a><br>

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section>
			<!-- ####### UNIDARI VIDEOS ####### -->
			<br><br>
			<div id="unidari-video">
				<div class="row text-center">
					<h2>Clips das Unidades</h2>
					<hr>
				</div>
				<br>
				<div class="clips">
					<div class="text-center">
						<ul class="nav nav-tabs nav-pills nav-justified">
						    <li class="active nav-link"><a data-toggle="tab" href="#primeiro">1º Lugar</a></li>
						    <li><a class="nav-link" data-toggle="tab" href="#segundo">2º Lugar</a></li>
						    <li><a class="nav-link" data-toggle="tab" href="#terceiro">3º Lugar</a></li>
						    <li><a class="nav-link" data-toggle="tab" href="#quarto">4º Lugar</a></li>
						    <li><a class="nav-link" data-toggle="tab" href="#quinto">5º Lugar</a></li>
						</ul>
					</div>

					<div class="tab-content text-center">
					    <div id="primeiro" class="tab-pane fade in active">
					      <h3>Unidade Theron Jhonson - Clube Pioneiros da Gloria</h3>
					      <video src="https://drive.google.com/uc?id=1WWKswGHPnSRjHZEGkGbaFndkYEMHv-xg" controls controlsList="nodownload" oncontextmenu="return false"></video>
					    </div>
					    <div id="segundo" class="tab-pane fade">
					      <h3>Unidade Thiago White - Clube Amigos da Verdade</h3>
					      <video src="https://drive.google.com/uc?id=16OJAUmGdso3flc-gFg5XmrFxnBipPBHb" controls controlsList="nodownload" oncontextmenu="return false"></video>
					    </div>
					    <div id="terceiro" class="tab-pane fade">
					      <h3>Unidade Mirian Jackson - Clube Pioneiros da Gloria</h3>
					      <video src="https://drive.google.com/uc?id=1sFYohDmvXgNnkzAAvYihguGYtEc91sU3" controls controlsList="nodownload" oncontextmenu="return false"></video>
					    </div>
					    <div id="quarto" class="tab-pane fade">
					      <h3>Unidade Conquistadoras do Rei - Clube Vencedores do Rei</h3>
					      <video src="https://drive.google.com/uc?id=1CeYsOQq8129FXFKgse-5PYWPhV1_OBtA" controls controlsList="nodownload" oncontextmenu="return false"></video>
					    </div>	
					    <div id="quinto" class="tab-pane fade">
					      <h3>Unidade Pérolas do Rei - Clube Comando do Rei</h3>
					      <video src="https://drive.google.com/uc?id=1OMPO1En_hHkVvCZchViz0A6PoYp_1j-_" controls controlsList="nodownload" oncontextmenu="return false"></video>
					    </div>
					</div>
					<br>
					<hr>
					<br>
					<div class="container text-center todos">
						<a href="https://drive.google.com/drive/folders/1vJZ0q19n5A5nglm6OJE7Q3uIuJvn2LU8" class="btn btn-danger" target="_blank"><span>Todas as Unidades<img src="img/google-drive.png"></a>	
					</div>
					<br>
					<!--   https://drive.google.com/open?id=1vJZ0q19n5A5nglm6OJE7Q3uIuJvn2LU8	 -->
				</div>
			</div>
			<br><br><br>

			<!-- ####### SERIE UNIDARI ####### -->
			<div id="unidari-serie">
				<div class="row text-center">
					<span><h3>Série: Forte e Fiel</h3></span>
					<hr>
				</div>	
				<br><br>
				<div class="row">
					<div class="col-md-4">
						<h4>Episódio 1: David e Raul Golias</h4>
						<video src="mp4/EP01.mp4" controls controlsList="nodownload" oncontextmenu="return false"></video>
					</div>
					<div class="col-md-4">
						<h4>Episódio 2:  Bullying na Escola</h4>
						<video src="mp4/EP02.mp4" controls controlsList="nodownload" oncontextmenu="return false"></video>
					</div>			
					<div class="col-md-4">
						<h4>Episódio 3: Forte e Fiel</h4>
						<video src="mp4/EP03.mp4" controls controlsList="nodownload" oncontextmenu="return false"></video>
					</div>
				</div>
				<br><br>
			</div>
			<br><br><br>

			<!-- ####### GALERIA UNIDARI ####### -->
			<div id="unidari-galeria">
				<div class="row text-center">
					<span><h2>Self com o Regional</h2></span>
					<hr>
				</div>	
				<div class="row">
					<div class="col-sm-1"></div>

					<div class="col-md-10 carousel-unidari">
						<!-- <div><img src="https://drive.google.com/uc?id=1Hk6ttVFe9leQTly-O2yw_fIoyI_cC2aX"></div> -->
					  	<div><img src="img/galeria-unidari/01.jpg"></div>
					 	<div><img src="img/galeria-unidari/02.jpg"></div>
					  	<div><img src="img/galeria-unidari/03.jpg"></div>
					  	<div><img src="img/galeria-unidari/04.jpg"></div>
					  	<div><img src="img/galeria-unidari/05.jpg"></div>
					  	<div><img src="img/galeria-unidari/06.jpg"></div>
					  	<div><img src="img/galeria-unidari/07.jpg"></div>
					  	<div><img src="img/galeria-unidari/08.jpg"></div>
					  	<div><img src="img/galeria-unidari/09.jpg"></div>
					  	<div><img src="img/galeria-unidari/10.jpg"></div>
					  	<div><img src="img/galeria-unidari/11.jpg"></div>
					  	<div><img src="img/galeria-unidari/12.jpg"></div>
					  	<div><img src="img/galeria-unidari/13.jpg"></div>
					  	<div><img src="img/galeria-unidari/14.jpg"></div>
					  	<div><img src="img/galeria-unidari/15.jpg"></div>
					  	<div><img src="img/galeria-unidari/16.jpg"></div>
					  	<div><img src="img/galeria-unidari/17.jpg"></div>
					  	<div><img src="img/galeria-unidari/18.jpg"></div>
					  	<div><img src="img/galeria-unidari/19.jpg"></div>
					  	<div><img src="img/galeria-unidari/20.jpg"></div>
					  	<div><img src="img/galeria-unidari/21.jpg"></div>
					  	<div><img src="img/galeria-unidari/22.jpg"></div>
					  	<div><img src="img/galeria-unidari/23.jpg"></div>
					  	<!-- <div><img src="img/galeria-unidari/99.jpg"></div> -->
					</div>
										
					<div class="col-sm-1"></div>
				</div>
			</div>
			
			<!-- ####### BOTÃO TOPO DA PAGINA ####### -->
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
										<li><a href="index.html"><i class="fa fa-angle-right">Inicio</i></a></li>
										<li><a href="#news"><i class="fa fa-angle-right">Eventos</i></a></li>
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
		<script src="lib/slick/slick/slick.min.js"></script>
	</body>
</html>