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

<?php
	
		function get_magasin_categorie(){
			$bdd=new PDO("mysql:host=localhost;dbname=store",'root','root');
			$bdd->query("SET NAMES 'utf8'");
			$result=$bdd->query("SELECT Jeux.id, name, categories_id FROM Jeux INNER JOIN Categories_jeux ON Jeux.id = Categories_jeux.jeux_id WHERE categories_id = 2");
			$magasin_all=$result->fetchAll();
			return $magasin_all;
		}
		

?>

<?php
	
		function get_categorie(){
			$bdd=new PDO("mysql:host=localhost;dbname=store",'root','root');
			$bdd->query("SET NAMES 'utf8'");
			$result=$bdd->query("SELECT * FROM Categories");
			$categorie=$result->fetchAll();
			return $categorie;
		}



?>