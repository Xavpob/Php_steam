<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Rechercher</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<link rel="stylesheet" href="../assets/css/main.css" />
		<link rel="stylesheet" href="../assets/css/style.css" />
	</head>
	<script>
    $(document).ready(function(){

        $('body').keyup(function( event ) {
            console.log ( 'test console' );
            var search = $('#search').val();
            if(search === ''){

            }else{
                $.ajax({
                    url : 'recherche.php?search='+search+'',
                    success: function(){

                        $(".affiche").load('recherche.php?search='+search+'');
                    }

                });
            }

        });
    });

</script>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Logo -->
						<h1><a href="c_index.php" id="logo">Saint Pavut <em></em></a></h1>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li ><a href="c_index.php">Accueil</a></li>
								<li>
									<a href="c_manif_page.php?debut=0">Nos manifestions</a>
									
										</li>
										<li><a href="c_salle_page.php?debut=0">Nos salles</a></li>
										<li class="current"><a href="c_search.php">Rechercher</a></li>
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
										<h2>Rechercher</h2>
										<p>Vous retrouverez ici l'ensemble des manifestations qui correspondent au mot-clef que vous avez tapé.</p>
									</header>

						<div class="form-group">
						    <div class="input-group input-group-lg icon-addon addon-lg">
						        <input type="text" placeholder="Votre recherche" name="search" id="search" class="form-control input-lg">
						        <i class="icon icon-search"></i>
						        
						    </div>
						</div>
 <div class="col-xs-12 col-sm-12 col-md-11 col-ld-11 affiche">





    </div></article>
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