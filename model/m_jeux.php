<?php
		function get_manif_tous(){
			$bdd=new PDO("mysql:host=localhost;dbname=basemmi14b12",'mmi14b12','Q1LS');
			$bdd->query("SET NAMES 'utf8'");
			$result=$bdd->query("SELECT (manif_prix_place*1.13) as manif_prix_place, 
								UPPER(manif_intitule) as manif_intitule,
								UPPER (manif_photo) as manif_photo
								FROM manif");
			$toutesLesManifs=$result->fetchAll();
			return $toutesLesManifs;
		}
?>