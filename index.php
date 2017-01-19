<?php session_start();


if(isset($_SESSION) && !empty($_SESSION)){
	header('Location: view/v_index.php');
}

else{
	header('Location: login.php');
}