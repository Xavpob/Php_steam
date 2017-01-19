<?php
	
		function get_manif_page($debut){
			$bdd=new PDO("mysql:host=localhost;dbname=basemmi14b12",'mmi14b12','Q1LS');
			$bdd->query("SET NAMES 'utf8'");
			$result=$bdd->query("SELECT manif_date,
								UPPER (manif_prix_place*1.13) as manif_prix_place, 
								UPPER(manif_intitule) as manif_intitule,
                UPPER(manif_id) as manif_id,
								UPPER (manif_photo) as manif_photo
								FROM manif
								LIMIT ".$debut.", 3");
			$manifs=$result->fetchAll();
			return $manifs;
		}



?>