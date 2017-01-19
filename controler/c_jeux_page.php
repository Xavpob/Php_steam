<?php
	include_once ('../model/m_manif_page.php');
	$manifs= get_manif_page($_GET['debut']);
	$debut = $_GET['debut'];
	$preview = $debut - 3;
	$next = $debut + 3;
	if($preview < 0){$preview = 0;};
	if($next > 17){$next = 17;};
	include_once('../view/v_manif_page.php');
?>


