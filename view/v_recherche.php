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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<link rel="stylesheet" href="../view/css/main2.css" />
		<link rel="stylesheet" href="../view/css/style.css" />
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
                        console.log ( 'test console2' );
                    }

                });
            }

        });
    });

</script>
	<body>
		<div id="page-wrapper">


			<!-- HEADER -->

			<div id="header">

					<!-- Logo -->
						<h1><a href="c_index.php" id="logo">Steam<em></em></a></h1>
						<ul>
							<li><a href="c_recherche.php">Rechercher un jeu</a></li>
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

			<!-- Main -->
				<section class="wrapper style1">
					<div class="container">
						<div id="content">

							<!-- Content -->
						<article>
									<header>
										<h2>Rechercher</h2>
										<p>Cherchez ici le nom de votre jeu.</p>
									</header>

						<div class="form-group">
						    <div class="input-group input-group-lg icon-addon addon-lg">
						        <input type="text" placeholder="Votre recherche" name="search" id="search" class="form-control input-lg">
						       
						        
						    </div>
						</div>
 <div class="col-xs-12 col-sm-12 col-md-11 col-ld-11 affiche">





    </div></article>
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