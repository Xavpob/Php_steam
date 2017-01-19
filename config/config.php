<?php

$host = 'localhost';
$dbName = 'IIM_Git_SoundCloud';
$user = 'root';
$password = 'root';


try{
	$db = new PDO('mysql:host='.$host.';dbname='.$dbName.';charset=utf8', $user, $password);
}
catch(Exception $e)
{
	die ('Erreur : '.$e->getMessage());
}
?>