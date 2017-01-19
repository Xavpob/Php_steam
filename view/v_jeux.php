<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Manifestations</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<link rel="stylesheet" href="../assets/css/style.css" />
	</head>
	<body>
		<div id="page-wrapper">

			<!-- HEADER -->

			<div id="header">

					<!-- Logo -->
						<h1><a href="c_index.php" id="logo">Steam<em></em></a></h1>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li class="current"><a href="c_index.php">Accueil</a></li>
								<li> <a href="c_jeux_page.php?debut=0">Magasin</a> </li>
								<li><a href="#">Bibliothèque</a></li>
								<li><a href="#">Panier</a></li>
								<li><a href="#">Profil</a></li>
							</ul>
								
						</nav>

				</div>

			<!-- Main -->
				<section class="wrapper style1">
					<div class="container">
						<div id="content">

							<!-- Content -->

								<article>
									<header>
										<h2>Nos manifestations</h2>
										<p>Vous retrouverez ici l'ensemble des évênements que nous vous proposons.</p>
									</header>

									

									<?php foreach ($manifs as $key => $une):?>
									<div class="manif">
										<h4>. <?php echo $une['manif_intitule'] ?></h4>
										au prix de 
										<?php echo $une['manif_prix_place']?>
										dollars
										<br>
										<img src="../photos/<?php echo $une['manif_photo']?>">
										<br>

                            	  
									</div>
									<?php endforeach ?>	

									<div id="revenir">
									  <ul class="pagination pagination-lg">
									    <a href="../controler/c_manif_page.php?debut=0">Revenir aux pages</a><hr>
									  </ul>
									</div>
								</article>



						</div>
					</div>
				</section>

			<!-- Footer -->
				<div id="footer">
					<div class="container">
						<div class="row">
							<section class="3u 6u(narrower) 12u$(mobilep)">
								<h3>Liens utiles</h3>
								<ul class="links">
									<li><a href="c_index.php">Accueil</a></li>
									<li><a href="c_manif_page.php?debut=0">Manifestations par page</a></li>
									<li><a href="c_manif.php">Toutes les manifestions</a></li>
									<li><a href="c_salle_page.php?debut=0">Salles par page</a></li>
									<li><a href="c_salle.php">Toutes les salles</a></li>
									
								</ul>
							</section>
							<section class="3u 6u(narrower) 12u$(mobilep)">
								<h3>Autres liens utiles</h3>
								<ul class="links">
									
									<li><a href="c_manif_pdf.php">Le catalogue</a></li>
									<li><a href="c_search.php">Rechercher</a></li>
								</ul>
							</section>
							
							<section class="6u 12u(narrower)">
								<h3>Une question ? Contactez nous</h3>
								<form>
									<div class="row 50%">
										<div class="6u 12u(mobilep)">
											<input type="text" name="name" id="name" placeholder="Name" />
										</div>
										<div class="6u 12u(mobilep)">
											<input type="email" name="email" id="email" placeholder="Email" />
										</div>
									</div>
									<div class="row 50%">
										<div class="12u">
											<textarea name="message" id="message" placeholder="Message" rows="5"></textarea>
										</div>
									</div>
									<div class="row 50%">
										<div class="12u">
											<ul class="actions">
												<li><input type="submit" class="button alt" value="Send Message" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>
						</div>
					</div>

					<!-- Icons -->
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
							<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
							<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
						</ul>

					<!-- Copyright -->
						<div class="copyright">
							<ul class="menu">
								<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>

				</div>

		</div>

		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.dropotron.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="../assets/js/main.js"></script>

	</body>
</html>