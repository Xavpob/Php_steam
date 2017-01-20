<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Steam</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../view/css/main2.css" />
		<link rel="stylesheet" href="../view/css/style.css" />
	</head>
	<body>
		<div id="page-wrapper">


			<!-- HEADER -->

			<div id="header">

				<!-- Logo -->
				<div class="top">
					<ul>
						<li><h1><a href="c_index.php" id="logo"><img id="steam" src="../images/steam.png" alt="">Steam<em></em></a>
							</h1></li>
						<li><a href="c_panier.php">Panier</a></li>
						<li><a href="c_profil.php">Profil</a></li>
						<li><a href="../logout.php">Logout</a></li>
					</ul>
				</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li class="current"><a href="c_index.php">Accueil</a></li>
								<li> <a href="c_magasin.php?debut=0">Magasin</a> </li>
								<li><a href="c_biblio.php">Bibliothèque</a></li>
								<li><a href="c_comm.php">Communauté</a></li>
								
							</ul>
								
						</nav>

				</div>

			<!-- Banner -->
				<section id="banner">
					<header>
						<h2>Bienvenue sur notre site : <em>Vous trouverez ici tous les jeux que vous cherchez.</em></h2>
						<a href="c_manif_page.php?debut=0" class="button">Magasin</a>
					</header>
				</section>

			<!-- FOOTER -->

			<?php include '_footer.php'; ?>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>