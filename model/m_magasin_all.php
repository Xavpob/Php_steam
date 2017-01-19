<?php
	
		function get_magasin_all(){
			$bdd=new PDO("mysql:host=localhost;dbname=store",'root','root');
			$bdd->query("SET NAMES 'utf8'");
			$result=$bdd->query("SELECT `id`,`name`,`cover_url` 
								FROM Jeux");
			$magasin_all=$result->fetchAll();
			return $magasin_all;
		}



?>