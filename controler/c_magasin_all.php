<?php
	include_once ('../model/m_magasin_all.php');
	$categorie_jeux = $_GET['categorie'];
	$categorie= get_categorie();
	$magasin_all= get_magasin_all();
	$trie= get_magasin_categorie();
	if ($categorie_jeux = '') {
			$categorie;
		}else{
			echo "hello fuck you";
		}

	include_once('../view/v_magasin_all.php');
?>