<?php

include_once('../model/m_salle_page.php');
$salles= get_salle_page($_GET['debut']);
$debut = $_GET['debut'];
$preview = $debut - 3;
$next = $debut + 3;
if($preview < 0){$preview = 0;};
if($next > 12){$next = 12;};
include_once('../view/v_salle_page.php');

?>