<?php
function donnee_manifestations(){
    $bdd=new PDO("mysql:host=localhost;dbname=basemmi14b12",'mmi14b12','Q1LS');

    $bdd->query("SET NAMES 'utf8'");
    $result = $bdd->query("SELECT (manif_prix_place*1.13) as manif_prix_place , UPPER(manif_intitule) as
manif_intitule, manif_id, manif_description, manif_photo, salle_code FROM manif ORDER BY manif_id ASC");
    $toutesLesManifs = $result->fetchAll();
    return $toutesLesManifs;


}


?>

