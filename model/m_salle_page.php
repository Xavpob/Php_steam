<?php
		function get_salle_page($debut){
			$bdd=new PDO("mysql:host=localhost;dbname=basemmi14b12",'mmi14b12','Q1LS');
			$bdd->query("SET NAMES 'utf8'");
			$result=$bdd->query("SELECT * 
								FROM salle
								LIMIT ".$debut.", 3");
			$LesSalles=$result->fetchAll();
			return $LesSalles;
		}
?>