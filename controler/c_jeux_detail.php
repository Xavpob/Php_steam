<?php

$id= $_GET['id'];
include_once('../model/m_manif_detail.php');
$manifs= get_manif_detail($id);
include_once('../view/v_manif_detail.php');

?>