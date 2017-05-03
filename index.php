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
								<h2>Experimente nossos serviços</h2>
								<p>Saiba mais informações e veja nossos templates</p>
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
					<h2>Futebol</h2>
					<div class="container">
						<div class="row">
							<div class="12u 12u(medium)">

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
											<p>Mostramos aqui todas as informações sobres os templates e como usar cada um deles, de forma simple. Assim qualquer pessoa conseguirá até com um pouco conhecimento</p>
											<a href="login.html" class="button icon fa-arrow-circle-right">Continue!</a>
										</section>
									</div>

							</div>
						</div>
					</div>
				</div>

			<!-- Footer -->
				<div id="footer-wrapper">
					<footer id="footer" class="container">
						<div class="row">
							<div class="12u">
								<div id="copyright">
										<ul id="copyright">
											<li>&copy; Alexa e Rudan</li><li>Design: <a href="https://www.facebook.com/alexa.goncalves.56?qsefr=1">Alexa Lins</a></li>
										</ul>
								</div>
							</div>
						</div>
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