<?php 
function get_user(){
			$bdd=new PDO("mysql:host=localhost;dbname=store",'root','root');
			$bdd->query("SET NAMES 'utf8'");
			$result=$bdd->query("SELECT * FROM Users");
			$user=$result->fetchAll();
			return $user;
		}

 ?>