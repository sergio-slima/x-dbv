<?php

require_once 'inc/usuarios.php';
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
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

	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
	<header>		
		<!-- ####### FAIXA-BLACK DOS CLUBES	#######	 -->
		<div class="header-black hidden-xs">
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

		<!-- ####### FAIXA-BLACK DOS CLUBES	- MOBILE #######	 -->
		<div class="header-black-mobile">
			<div class="container-mobile">
				<span><marquee behavior=scroll><img src="img/clubs.png"></marquee></span>
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
			        <!-- <audio controls autoplay loop preload="auto" controlsList="nodownload">
			    		<source src="mp4/musica-unidari.mp3" type="audio/mp3">
			    			Seu navegador não suporte esse tipo de audio.
			    		</audio> -->
			    	</a>
			    	<ul class="nav navbar-nav nav-menu pull-right">
			    		<li><a href="index.php">Inicio</a></li>
			    		<li><a href="#organograma">Organograma</a></li>
			    		<li><a href="#especialidades">Especialidades</a></li>
			    		<li><a href="#unidari">Unidari</a></li>
			    		<li><a href="#galeria-xtreme">Galeria</a></li>
			    		<li><a href="#formulario-info">Contato</a></li>
			    		<?php
			    		if(isset($_SESSION['id_usuario'])) { ?>
			    			<li><a href="sair.php" id="sair"> Sair  <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span></a></li>
			    			<?php 
			    		} else { ?>
			    			<li><a href="login.php">Entrar  <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></a></li>
			    			<?php
			    		} ?>					
			    	</ul>
			    </div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>	
	</header>

	<div id="login-modal" class="modal fade" role="dialog">   <!-- MODAL DE LOGIN -->
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal">&times;  </button>
				<div class="modal-body">
					<p>Bem Vindo ao DBV Xtreme!</p>
				</div>
			</div>
		</div>
	</div>

	<!-- ####### BANNER ####### -->
	<section id="banner" class="banner-site">			
		<div class="container">
			<div class="row">
				<div class="col-xs-12 titulo">
					<h1>X-DBV<small>Desbravador  Xtreme</small></h1>
				</div>
			</div>
		</div>

	</section>
	

	<!-- ####### NOTICIAS ####### -->
	<section class="conteudo-site">
		<div id="organograma">
			
			<div class="container scroll">
				<div class="row text-center">
					<h2 style="color: #fff;">Organograma da R5</h2>
					<hr>
				</div>	

				<div id="tree" class="tree-chart" height="500" width="100%">
					<div class="dogtag boy" style="top: 46.7px; left: 10.7px; width: 279.6px; height: 279.6px;">
						<a>
							<img src="img/organograma/1-diretor-geral.png" class="img-responsive">
							<p>Pr. Andrés Peralta</p>
							<span class="year"></span>
							<span class="gender">Diretor da Associação Geral</span>
						</a>
					</div>
					<div class="dogtag boy" style="top: 46.7px; left: 325.7px; width: 279.6px; height: 279.6px;">
						<a>
							<img src="img/organograma/2-diretor-dsa.png" class="img-responsive">
							<p>Pr. Udolcy Zukowski</p>
							<span class="year"></span>
							<span class="gender">Diretor da DSA</span>
						</a>
					</div>
					<div class="dogtag girl" style="top: 46.7px; left: 643.7px; width: 279.6px; height: 279.6px;">
						<a>
							<img src="img/organograma/3-diretor-unb.png" class="img-responsive">
							<p>Pr. Tadeu Monteiro</p>
							<span class="year"></span>
							<span class="gender">Diretor da UNB</span>
						</a>
					</div>
					<div class="link father-branch" style="opacity: 1 !important; left: 288.3px; top: -12px; width: 77.4px; height: 200px;">
						<span class="first"></span>
					</div>
					<div class="link father-branch" style="opacity: 1 !important; left: 605.3px; top: -12px; width: 77.4px; height: 200px;">
						<span class="first"></span>
					</div>
					<div class="dogtag boy" style="top: 46.7px; left: 963.7px; width: 279.6px; height: 279.6px;">
						<a>
							<img src="img/organograma/4-diretor-msma.png" class="img-responsive">
							<p>Pr. Jânio Sousa</p>
							<span class="year"></span>
							<span class="gender">Diretor da MSMA</span>
						</a>
					</div>
					<div class="dogtag boy" style="top: 46.7px; left: 1285.7px; width: 279.6px; height: 279.6px;">
						<a>
							<img src="img/organograma/5-associado-msma.png" class="img-responsive">
							<p>Líder Valdecy Araújo</p>
							<span class="year"></span>
							<span class="gender">Associado da MSMA</span>
						</a>
					</div>
					<div class="dogtag girl" style="top: 46.7px; left: 1607.7px; width: 279.6px; height: 279.6px;">
						<a>
							<img src="img/organograma/6-regional.png" class="img-responsive">
							<p>Líder Marcos Moraes</p>
							<span class="year"></span>
							<span class="gender">Regional da R5</span>
						</a>
					</div>
					<div class="link father-branch" style="opacity: 1 !important; left: 922.3px; top: -12px; width: 80.4px; height: 200px;">
						<span class="first"></span>
					</div>
					<div class="link father-branch" style="opacity: 1 !important; left: 1242.3px; top: -12px; width: 82.4px; height: 200px;">
						<span class="first"></span>
					</div>
					<div class="link father-branch" style="opacity: 1 !important; left: 1565.3px; top: -12px; width: 85.4px; height: 200px;">
						<span class="first"></span>
					</div>
					<div class="dogtag boy" style="top: -46.7px; left: 2000.7px; width: 210.6px; height: 210.6px;">
						<a>
							<img src="img/organograma/7-distrital1.png" class="img-responsive">
							<p>Gustavo Cabral</p>
							<span class="year"></span>
							<span class="gender">Distrital de Açailândia I</span>
						</a>
					</div>
					<div class="dogtag girl" style="top: 196.7px; left: 2000.7px; width: 210.6px; height: 210.6px;">
						<a>
							<img src="img/organograma/8-distrital2.png" class="img-responsive">
							<p>Felipe Kavasac</p>
							<span class="year"></span>
							<span class="gender">Distrital de Laranjeiras</span>
						</a>
					</div>
					<div class="dogtag girl" style="top: 80px; left: 2230.7px; width: 210.6px; height: 210.6px;">
						<a>
							<img src="img/organograma/9-distrital3.png" class="img-responsive">
							<p>Franck Araújo</p>
							<span class="year"></span>
							<span class="gender">Distrital de Itinga</span>
						</a>
					</div>
					<div class="link mother-branch" style="opacity: 1 !important; left: 1888px; top: 185px; width: 115px; height: 116px;">
						<span class="first"></span>
						<span class="second"></span>
					</div>
					<div class="link father-branch" style="opacity: 1 !important; left: 1888px; top: 60px; width: 111px; height: 127px;">
						<span class="first"></span>
						<span class="second"></span>
					</div>
					<div class="link father-branch" style="opacity: 1 !important; left: 1888px; top: 60px; width: 687px; height: 127px;">
						<span class="first"></span>
					</div>
				</div>				
			</div>
			
		</div>
		

		<?php
		$urlUNB='https://clubes.adventistas.org/br/unb/';
		$SiteUnb=file_get_contents($urlUNB);
		$varUNB1=explode('<p>Desbravadores</p>', $SiteUnb);
		$varUNB2=explode('<p>Clubes de Aventureiros</p>', $varUNB1[0]);
		$varUNB3=explode('</h3>', $varUNB2[1]);
		$varUNB4=explode('<h3>', $varUNB3[0]);

		$urlMSMA='https://clubes.adventistas.org/br/unb/msma/';
		$SiteMSMA=file_get_contents($urlMSMA);
		$varMSMA1=explode('<p>Desbravadores</p>', $SiteMSMA);
		$varMSMA2=explode('<p>Clubes de Aventureiros</p>', $varMSMA1[0]);
		$varMSMA3=explode('</h3>', $varMSMA2[1]);
		$varMSMA4=explode('<h3>', $varMSMA3[0]);

		$varClub1=explode('>R5 DBV', $SiteMSMA);
		$varClub2=explode('>R6 DBV', $varClub1[1]);
		$varClub3=explode('</td>', $varClub2[0]);
		$varClub4=explode('<td>', $varClub3[1]);

		$varREG1=explode('>R5 DBV', $SiteMSMA);
		$varREG2=explode('>R6 DBV', $varREG1[1]);
		$varREG3=explode('<td>'.$varClub4[1].'</td>', $varREG2[0]);
		$varREG4=explode('<td>', $varREG3[1]);
		?>

		<!-- ####### ESTATISTICAS ####### -->
		<div id="estatisticas">
			<div class="container">
				<div class="row">
					<div class="row text-center">
						<h2 style="color: #fff;">Estatísticas</h2>
						<hr>
					</div>
					<div class="col-md-4"><p><?php print $varUNB4[1]; ?><small>Desbravadores - UNB</small></p></div>
					<div class="col-md-4"><p><?php print $varMSMA4[1]; ?><small>Desbravadores - MSMA</small></p></div>
					<div class="col-md-4"><p><?php print $varREG4[1]; ?><small>Desbravadores - R5</small></p></div>
				</div>
			</div>
		</div>
	</section>

	<section class="especialidade">
		<!-- ####### ESPECIALIDADES ####### -->
		<div id="especialidades">
			<div class="container">
				<div class="row text-center">
					<h2 style="color: #fff;">Especialidades</h2>
					<hr>
				</div>
				<div class="row">
					<p>Nesta seção estaremos disponibilizando provas de especialidades para você diretor/conselheiro estar aplicando no seu clube/unidade nas reuniões. Serão provas somente com as perguntas das especialidades prontinha para você imprimir e levar para os seus desbravadores.</p>						
					<p><b>Vamos estudar! Vamos cumprir especialidades!</b></p>
				</div>
				<div class="text-center">
					<div class="row">
						<a href="especialidades.php" class="btn btn-danger" id="btn-especialidades">
							<h4><b>Arquivos para Downloads</b></h4>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div id="unidari">
			<div class="container">
				<div class="row">
					<div class="row text-center">
						<h2>III Unidari da R5</h2>
						<hr>
					</div>
					<br><br>

					<div class="col-md-4 rotate">
						<img src="img/unidari.png">
					</div>

					<div class="col-md-4">
						<br><br>
						<ul>
							<li><i class="fa fa-music"></i> Música Oficial <i class="fa fa-music"></i></li>
							<li><i class="fa fa-play-circle"></i> Clips da Música <i class="fa fa-play-circle"></i></li>
							<li><i class="fa fa-play"></i> Série: Forte e Fiel <i class="fa fa-play"></i></li>
							<li><i class="fa fa-image"></i> Self com o Regional <i class="fa fa-image"></i></li>
						</ul>
					</div>

					<div class="col-md-4 btn-unidari">
						<div class="text-center">
							<div class="row">
								<button id="send" class="send is-loading">
									<span>
										<a href="eventos-unidari.php" class="button">
											<h4><b>VEJA AGORA</b></h4>
										</a>
									</span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="academia-materiais">
			<div class="container">
				<div class="row">
					<br>
					<div class="row text-center">
						<h2 style="color: #fff;">Materiais para Download</h2>
						<hr>
					</div>
					<br><br>
					<div class="col-md-4 text-center">
						<a href="https://drive.google.com/drive/folders/1tQyL23lotQqX15egJhDO0tTS3ujE0O0Q" target="_blank"><img src="img/google-drive.png"></a><br>
						<a href="https://drive.google.com/drive/folders/1tQyL23lotQqX15egJhDO0tTS3ujE0O0Q" target="_blank" class="btn btn-success">Documentos e Arquivos <br> Link I</a><br>							
					</div>
					<div class="col-md-4 text-center">
						<a href="https://drive.google.com/drive/folders/15UHEanGgaxnSJWGKpEAFDmcfYtAkZBQI" target="_blank"><img src="img/google-drive.png"></a><br>
						<a href="https://drive.google.com/drive/folders/15UHEanGgaxnSJWGKpEAFDmcfYtAkZBQI" target="_blank" class="btn btn-success">Documentos e Arquivos <br> Link II</a><br>							
					</div>
					<div class="col-md-4 text-center">
						<a href="https://drive.google.com/drive/folders/1v9kUp4cnI8xHVwgltsXIoshbtGzEtfLi" target="_blank"><img src="img/google-drive.png"></a><br>
						<a href="https://drive.google.com/drive/folders/1v9kUp4cnI8xHVwgltsXIoshbtGzEtfLi" target="_blank" class="btn btn-success">Documentos e Arquivos <br> Link III</a>
					</div>
				</div>
				<br>
			</div>
		</div>
	</section>

	<section>
		<!-- ####### GALERIA XTREME ####### -->
		<div id="galeria-xtreme">
			<div class="container">
				<div class="row text-center">
					<h2>Galeria Xtreme</h2>
					<hr>
				</div>
				<br><br>
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
						<li data-target="#myCarousel" data-slide-to="4"></li>
						<li data-target="#myCarousel" data-slide-to="5"></li>
						<li data-target="#myCarousel" data-slide-to="6"></li>
						<li data-target="#myCarousel" data-slide-to="7"></li>
						<li data-target="#myCarousel" data-slide-to="8"></li>
						<li data-target="#myCarousel" data-slide-to="9"></li>
						<li data-target="#myCarousel" data-slide-to="10"></li>
						<li data-target="#myCarousel" data-slide-to="11"></li>
						<li data-target="#myCarousel" data-slide-to="12"></li>
						<li data-target="#myCarousel" data-slide-to="13"></li>
						<li data-target="#myCarousel" data-slide-to="14"></li>
						<li data-target="#myCarousel" data-slide-to="15"></li>
						<li data-target="#myCarousel" data-slide-to="16"></li>
						<li data-target="#myCarousel" data-slide-to="17"></li>
						<li data-target="#myCarousel" data-slide-to="18"></li>
						<li data-target="#myCarousel" data-slide-to="19"></li>
						<li data-target="#myCarousel" data-slide-to="20"></li>
						<li data-target="#myCarousel" data-slide-to="21"></li>
						<li data-target="#myCarousel" data-slide-to="22"></li>
						<li data-target="#myCarousel" data-slide-to="23"></li>
						<li data-target="#myCarousel" data-slide-to="24"></li>
						<li data-target="#myCarousel" data-slide-to="25"></li>
						<li data-target="#myCarousel" data-slide-to="26"></li>
						<li data-target="#myCarousel" data-slide-to="27"></li>
						<li data-target="#myCarousel" data-slide-to="28"></li>
						<li data-target="#myCarousel" data-slide-to="29"></li>
						<li data-target="#myCarousel" data-slide-to="30"></li>
						<li data-target="#myCarousel" data-slide-to="31"></li>
						<li data-target="#myCarousel" data-slide-to="32"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<img src="img/galeria-xtreme/01.jpg" alt="Desbravadores">
							<div class="carousel-caption d-none d-md-block">
								<h5>Guerreiros de Cristo</h5>
								<!-- <p>5ª Região - Açailândia - MA</p> -->
								<p>MiniCamping</p>
							</div>
						</div>
						<div class="item">
							<img src="img/galeria-xtreme/02.jpg" alt="Desbravadores">
							<div class="carousel-caption d-none d-md-block">
								<h5>Heróis da Fé</h5>
								<!-- <p>5ª Região - Açailândia - MA</p> -->
								<p>Campori da DSA</p>
							</div>
						</div>
						<div class="item">
							<img src="img/galeria-xtreme/03.jpeg" alt="Desbravadores">
							<div class="carousel-caption d-none d-md-block">
								<h5>Comando do Rei</h5>
								<!-- <p>5ª Região - Açailândia - MA</p> -->
								<p>Caminhada</p>
							</div>
						</div>	
						<div class="item">
							<img src="img/galeria-xtreme/04.jpeg" alt="Desbravadores">
							<div class="carousel-caption d-none d-md-block">
								<h5>Heróis de Cristo</h5>
								<!-- <p>5ª Região - Açailândia - MA</p> -->
								<p>Caminhada</p>
							</div>
						</div>
						<div class="item">
							<img src="img/galeria-xtreme/05.jpeg" alt="Desbravadores">
							<div class="carousel-caption d-none d-md-block">
								<h5>Exército de Cristo</h5>
								<!-- <p>5ª Região - Açailândia - MA</p> -->
								<p>Caminhada</p>
							</div>
						</div>
						<div class="item">
							<img src="img/galeria-xtreme/06.jpeg" alt="Desbravadores">
							<div class="carousel-caption d-none d-md-block">
								<h5>Pioneiros da Glória</h5>
								<!-- <p>5ª Região - Açailândia - MA</p> -->
								<p>Acampamento</p>
							</div>
						</div>	
						<div class="item">
							<img src="img/galeria-xtreme/07.jpeg" alt="Desbravadores">
							<div class="carousel-caption d-none d-md-block">
								<h5>Profetas do Rei</h5>
								<!-- <p>5ª Região - Açailândia - MA</p> -->
								<p>MiniCamping</p>
							</div>
						</div>
						<div class="item">
							<img src="img/galeria-xtreme/08.jpg" alt="Desbravadores">
							<div class="carousel-caption d-none d-md-block">
								<h5>Soldados da Cruz</h5>
								<!-- <p>5ª Região - Açailândia - MA</p> -->
								<p>Pão no Espeto</p>
							</div>
						</div>
						<div class="item">
							<img src="img/galeria-xtreme/09.jpeg" alt="Desbravadores">
							<div class="carousel-caption d-none d-md-block">
								<h5>Guerreiros de Cristo</h5>
								<!-- <p>5ª Região - Açailândia - MA</p> -->
								<p>Projeto</p>
							</div>
						</div>
						<div class="item">
							<img src="img/galeria-xtreme/10.jpg" alt="Desbravadores">
							<div class="carousel-caption d-none d-md-block">
								<h5>Soldados da Cruz</h5>
								<!-- <p>5ª Região - Açailândia - MA</p> -->
								<p>Campori</p>
							</div>
						</div>
						<div class="item">
							<img src="img/galeria-xtreme/11.jpg" alt="Desbravadores">
							<div class="carousel-caption d-none d-md-block">
								<h5>5ª Região</h5>
								<!-- <p>Açailândia - MSMA</p> -->
								<p>Clubão</p>
							</div>
						</div>					  
						<div class="item">
							<img src="img/galeria-xtreme/12.jpeg" alt="Desbravadores">
							<div class="carousel-caption d-none d-md-block">
								<h5>Herdeiros de Cristo</h5>
								<!-- <p>Açailândia - MSMA</p> -->
								<p>Fogueiras</p>
							</div>
						</div>					  
						<div class="item">
							<img src="img/galeria-xtreme/13.jpeg" alt="Desbravadores">
							<div class="carousel-caption d-none d-md-block">
								<h5>Herdeiros de Cristo</h5>
								<!-- <p>Açailândia - MSMA</p> -->
								<p>Investidura</p>
							</div>
						</div>					  
						<div class="item">
							<img src="img/galeria-xtreme/14.jpeg" alt="Desbravadores">
							<div class="carousel-caption d-none d-md-block">
								<h5>Exercito de Cristo</h5>
								<!-- <p>Açailândia - MSMA</p> -->
								<p>Caminhada</p>
							</div>
						</div>					  
						<div class="item">
							<img src="img/galeria-xtreme/15.jpeg" alt="Desbravadores">
							<div class="carousel-caption d-none d-md-block">
								<h5>Herdeiros de Cristo</h5>
								<!-- <p>Açailândia - MSMA</p> -->
								<p>MiniCamping</p>
							</div>
						</div>					  
						<div class="item">
							<img src="img/galeria-xtreme/16.jpeg" alt="Desbravadores">
							<div class="carousel-caption d-none d-md-block">
								<h5>Conquistadores da Serra</h5>
								<!-- <p>Sao Vicente - SP</p> -->
								<p>Caminhada</p>
							</div>
						</div>					  
						<div class="item">
							<img src="img/galeria-xtreme/17.jpeg" alt="Desbravadores">
							<div class="carousel-caption d-none d-md-block">
								<h5>Águias do Céu</h5>
								<!-- <p>Açailândia - MSMA</p> -->
								<p>Caminhada</p>
							</div>
						</div>					  
						<div class="item">
							<img src="img/galeria-xtreme/18.jpeg" alt="Desbravadores">
							<div class="carousel-caption d-none d-md-block">
								<h5>Exército de Cristo</h5>
								<!-- <p>Açailândia - MSMA</p> -->
								<p>MiniCamping</p>
							</div>
						</div>
						<div class="item">
							<img src="img/galeria-xtreme/19.jpg" alt="Desbravadores">
							<div class="carousel-caption d-none d-md-block">
								<h5>Liderança R5</h5>
								<!-- <p>São Luis - MA</p> -->
								<p>Investidura de Líderes</p>
							</div>
						</div>
						<div class="item">
							<img src="img/galeria-xtreme/20.jpg" alt="Desbravadores">
							<div class="carousel-caption d-none d-md-block">
								<h5>Clube de Líderes R5</h5>
								<!-- <p>Carolina - MA</p> -->
								<p>Excursão - Morro do Chapeu</p>
							</div>
						</div>
						<div class="item">
							<img src="img/galeria-xtreme/21.jpeg" alt="Desbravadores">
							<div class="carousel-caption d-none d-md-block">
								<h5>Guerreiros de Hebrom</h5>
								<!-- <p>Açailândia - MSMA</p> -->
								<p>Reunião Semanal</p>
							</div>
						</div>
						<div class="item">
							<img src="img/galeria-xtreme/22.jpg" alt="Desbravadores">
							<div class="carousel-caption d-none d-md-block">
								<h5>Comando de Cristo e HF</h5>
								<!-- <p>5ª Região - MSMA</p> -->
								<p>Caminhada</p>
							</div>
						</div>
						<div class="item">
							<img src="img/galeria-xtreme/23.jpg" alt="Desbravadores">
							<div class="carousel-caption d-none d-md-block">
								<h5>Soldados da Cruz</h5>
								<!-- <p>5ª Região - MSMA</p> -->
								<p>Liderança</p>
							</div>
						</div>
						<div class="item">
							<img src="img/galeria-xtreme/24.jpg" alt="Desbravadores">
							<div class="carousel-caption d-none d-md-block">
								<h5>Heróis da Fé</h5>
								<!-- <p>Açailândia - MSMA</p> -->
								<p>Caminhada</p>
							</div>
						</div>
						<div class="item">
							<img src="img/galeria-xtreme/25.jpeg" alt="Desbravadores">
							<div class="carousel-caption d-none d-md-block">
								<h5>Clube de Lideres</h5>
								<!-- <p>Carolina - MA</p> -->
								<p>1ª Excursão</p>
							</div>
						</div>
						<div class="item">
							<img src="img/galeria-xtreme/26.jpg" alt="Desbravadores">
							<div class="carousel-caption d-none d-md-block">
								<h5>Guerreiros de Cristo</h5>
								<!-- <p>Açailândia - MSMA</p> -->
								<p>Pernoite</p>
							</div>
						</div>
						<div class="item">
							<img src="img/galeria-xtreme/27.jpg" alt="Desbravadores">
							<div class="carousel-caption d-none d-md-block">
								<h5>Guerreiros de Hebrom</h5>
								<!-- <p>Açailândia - MSMA</p> -->
								<p>Pernoite</p>
							</div>
						</div>
						<div class="item">
							<img src="img/galeria-xtreme/28.jpg" alt="Desbravadores">
							<div class="carousel-caption d-none d-md-block">
								<h5>V Região</h5>
								<!-- <p>Açailândia - MSMA</p> -->
								<p>Olimpíadas R5</p>
							</div>
						</div>
						<div class="item">
							<img src="img/galeria-xtreme/29.jpg" alt="Desbravadores">
							<div class="carousel-caption d-none d-md-block">
								<h5>Guerreiros de Cristo</h5>
								<!-- <p>Açailândia - MSMA</p> -->
								<p>23º MiniCamping</p>
							</div>
						</div>
						<div class="item">
							<img src="img/galeria-xtreme/30.jpg" alt="Desbravadores">
							<div class="carousel-caption d-none d-md-block">
								<h5>Exército de Cristo</h5>
								<!-- <p>Açailândia - MSMA</p> -->
								<p>Reunião Normal</p>
							</div>
						</div>
						<div class="item">
							<img src="img/galeria-xtreme/31.jpg" alt="Desbravadores">
							<div class="carousel-caption d-none d-md-block">
								<h5>Pioneiros da Glória</h5>
								<!-- <p>Açailândia - MSMA</p> -->
								<p>Pequeno Grupo</p>
							</div>
						</div>
						<div class="item">
							<img src="img/galeria-xtreme/32.jpg" alt="Desbravadores">
							<div class="carousel-caption d-none d-md-block">
								<h5>Heróis da Fé</h5>
								<!-- <p>Açailândia - MSMA</p> -->
								<p>Pequeno Grupo</p>
							</div>
						</div>
						<div class="item">
							<img src="img/galeria-xtreme/33.jpg" alt="Desbravadores">
							<div class="carousel-caption d-none d-md-block">
								<h5>Príncipes do Rei</h5>
								<!-- <p>Açailândia - MSMA</p> -->
								<p>Dia Mundial DBV</p>
							</div>
						</div>
					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Next</span>
					</a>					  
				</div>					
			</div>
		</div>

		<!-- ####### MODAL DE AVISO GALERIA ####### -->
		<p id="aviso-galeria" style="font-weight: bold; text-align: center;">Faça parte da Galeria Xtreme. <a href="" class="btn btn-sucess btn-sm" data-toggle="modal" data-target="#myModal-galeria"><u>Saiba como.</u></a></p>

		<div class="modal fade" id="myModal-galeria" role="dialog">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Galeria Xtreme</h4>
					</div>
					<div class="modal-body">
						<p>Preencha o formulário abaixo "Contato Xtreme" e envie uma foto do seu clube.</p>
					</div>
					<div class="modal-footer">			          
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
					<!-- <div id="unidade-xtreme" class="row text-center">
						<h2>Desafio Xtreme</h2>
						<hr>
					</div> -->

					<!-- ####### FORMULARIO DE CONTATO XTREME ####### -->
					<div id="formulario-info" class="container">
						<div class="row">
							<div class="col-md-4 text-center" style="margin-top: 20px;">
								<span style="font-size: 4em; color: Tomato; text-align: center;"><i class="fa fa-envelope"></i></span>
								<h3>Contato Xtreme</h3>
								<hr>
								<ul style="text-align: left;">
									<li>Envie uma mensagem</li>
									<li>Deixe aqui a sua opinião</li>
									<li>Envie uma foto do seu clube</li>
								</ul>
							</div>	
							<div id="formulario-dados" class="col-md-8">						
								<form enctype="multipart/form-data" method="POST" action="envia.php">
									<div class="form-row">						  
										<div class="form-group col-md-5">
											<label for="exampleInputName2">Nome</label>
											<input type="text" class="form-control" id="exampleInputName2" name="inputNome" placeholder="Nome" required="">
										</div>						  
										<div class="form-group col-md-7">
											<label for="exampleInputEmail2">E-mail</label>
											<input type="email" class="form-control" id="exampleInputEmail2" name="inputEmail" placeholder="Email" required="">
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-md-5">
											<label for="exampleInputMsg2">Mensagem</label>
											<textarea class="form-control" id="exampleInputMsg2" rows="5" name="inputMsg" placeholder="Digite sua mensagem aqui" required=""></textarea>
										</div>						  
										<div class="form-group col-md-7">
											<label for="exampleInputFile">Anexar</label>
											<input type="file" id="exampleInputFile" name="arquivo">	

											<div class="g-recaptcha" data-sitekey="6LdNjqMUAAAAAKZ5kNlEWU8jlHVYfcl8YjDkaH81"></div>	 
											<div class="text-center"><button type="submit" name="enviar-formulario" class="btn btn-sucess">Enviar Mensagem</button></div>	
										</div>
										<!-- data-size="compact" -->
									</div>
								</form>
							</div>				
						</div>
					</div>			
					<!-- FIM DE FORMULARIO DE MENSAGEM -->

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
												<li><a href="index.php"><i class="fa fa-angle-right">Inicio</i></a></li>
												<li><a href="#unidari"><i class="fa fa-angle-right">Unidari</i></a></li>
												<li><a href="#especialidades"><i class="fa fa-angle-right">Especialidades</i></a></li>
											</ul>
										</div>
										<div class="col-md-4 col-contato">
											<h4 class="hidden-xs">Contato</h4>
											<address class="hidden-xs">
												<a href="#">contato@x-dbv.com.br</a>
											</address>
											<p class="hidden-xs"><a href="#formulario-dados"><i class="fa fa-email"></i>Mensagem</a></p>
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
												<li>
													<h5><a href="politica-privacidade.html" target="_blank"><i class="fa fa-angle-right">Política de Privacidade</i></a></h5>
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
<!-- 		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
	<script src="lib/slick/slick/slick.min.js"></script>
	<script>
		<?php
		if(isset($_SESSION['id_usuario'])) { ?>
			$(document).ready(function() { 
				var lg = localStorage.getItem("modal");
				if (!lg) {
					$('#login-modal').modal('show'); 
				}					
			});
		<?php } ?>

		$('#login-modal').on('shown.bs.modal', function() {
			localStorage.setItem("modal", false);
		});

		<?php
		if(!isset($_SESSION['id_usuario'])) { ?>
			$('#send').on("click", function(){
				alert("Entre ou Cadastre-se para Acessar!");
			});
			$('#btn-especialidades').on("click", function(){
				alert("Entre ou Cadastre-se para Acessar!");
			});
		<?php } ?>

		$('#sair').on("click", function() {
			localStorage.removeItem("modal");
		});			
	</script>
</body>
</html>