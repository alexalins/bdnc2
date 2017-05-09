<?php
	include("conexaoRedis.php");
	try{
		if($redis->exists("email")){
			if($redis->exists("senha")){
				header('location:gerenciador.php');		
			}
		}
	}catch (Exception $e) {
	  echo $e->getMessage();
	}	
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Inicio</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/main.css"/>
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<header id="header" class="container">
						<!-- Logo -->
							<div id="logo">
								<h1><a href="index.php">MyClube</a></h1>
							</div>
					</header>
				</div>

			<!-- Banner -->
				<div id="banner-wrapper">
					<div id="banner" class="box container">
						<div class="row">
							<div class="7u 12u(medium)">
								<h2>Experimente nosso template de futebol</h2>
								<p>Veja nosso template e faça seu site sobre seu time do coração</p>
							</div>
							<div class="5u 12u(medium)">
								<ul>
									<li><a href="login.php" class="button big icon fa-arrow-circle-right">Login</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			<!-- Features -->
				<div id="features-wrapper">
					<div class="container">
						<div class="row">
							<div class="12u 12u(medium)">
								<h2>Template</h2>
								<!-- Box -->
									<section class="box feature">
										<iframe style="position: relative" width="100%" height="500px" src="template-default.php"></iframe>
									</section>

							</div>
						</div>
					</div>
				</div>

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div class="row 200%">
							<div class="8u 12u(medium) important(medium)">

								<!-- Content -->
									<div id="content">
										<section class="last">
											<h2>Informações?</h2>
											<p>Crie seu site de futebol rápidamente como nosso template. Você podera fazer do jeito como quiser apenas com alguns cliques. Um jeito fácil e simples de divulgar seu time, com as principais noticias sobre ele  e sua escalação</p>
										</section>
									</div>

							</div>
						</div>
					</div>
				</div>

			<!-- Footer -->
				<div>
					<footer >
						<ul id="copyright">
							<li>&copy; Alexa e Rudan</li><li>Design: <a href="https://www.facebook.com/alexa.goncalves.56?qsefr=1">Alexa Lins</a></li>
						</ul>
					</footer>
				</div>

			</div>

		<!-- Scripts -->

			<script src="js/jquery.min.js"></script>
			<script src="js/jquery.dropotron.min.js"></script>
			<script src="js/skel.min.js"></script>
			<script src="js/util.js"></script>
			<script src="js/main.js"></script>

	</body>
</html>