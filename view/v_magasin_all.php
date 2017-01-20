<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Saint Pavut</title>
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
						<h1><a href="c_index.php" id="logo">Steam<em></em></a></h1>
						<ul>
							<li><a href="c_panier.php">Panier</a></li>
							<li><a href="c_profil.php">Profil</a></li>
							<li><a href="../logout.php">Logout</a></li>

						</ul>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="c_index.php">Accueil</a></li>
								<li class="current"> <a href="c_magasin.php?debut=0">Magasin</a> </li>
								<li><a href="c_biblio.php">Bibliothèque</a></li>
								<li><a href="c_comm.php">Communauté</a></li>
								
							</ul>
								
						</nav>

				</div>

			<!-- Banner -->
				<section id="banner">
					<header>
						<h2>Ne jouez pas seul : <em>vos amis et futurs rencontres sont sur Steam.</em></h2>
						<a href="c_comm.php?debut=0" class="button">Retrouvez les</a>
					</header>
				</section>

				<!-- CONTENU -->

				<section class="wrapper style1">
					<div class="container">
						<div id="content">

							<!-- Content -->
							<div class="categorie" style="float:left; width: 30%;">
								<article>
									<header>
										<h2>Catégories</h2>

									<?php 
									foreach ($categorie as $key => $une):?>

									
									<div class="manif">
										<ul>
										<li><?php echo "<a href=\"../controler/c_magasin_all.php?categorie=".$une['id']."\">".$une['name']."</a>"?></li>
										</ul>
									</div>

									
									<?php endforeach ?>	
									</header>




									
								</article>
								</div>
							<div class="jeux" style="float:right; width: 70%;">
								<article>
									<header>
										<h2>Nos jeux</h2>
										<p>Vous retrouverez ici l'ensemble des jeux que nous vous proposons.</p>
									</header>




									<?php 
									foreach ($magasin_all as $key => $une):?>

									
									<div class="manif">
										<h4>. <?php echo "<a href=\"../controler/c_magasin.php?id=".$une['id']."\">".$une['name']."</a>"  ?></h4>
										<img src="http:<?php echo $une['cover_url']?>">
										<br>
										GRATUIT
									</div>

									
									<?php endforeach ?>	

									  <ul>
									    <a href="../controler/c_magasin.php?debut=<?php echo 0 ?>">Retour aux pages</a>
									   
									   </ul>
									  
				
								</article>
								</div>
								
						</div>
					</div>
				</section>

			<!-- FOOTER -->

			<?php include '_footer.php'; ?>

		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.dropotron.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="../assets/js/main.js"></script>

	</body>
</html>