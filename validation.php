<?php
require('config/config.php');
require('model/functions.fn.php');
session_start();

if(	isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && 
	!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {

	header('Location: view/v_index.php');
    }

}else{ 
	$_SESSION['message'] = 'Error : incomplete forms !';
	header('Location: register.php');
}