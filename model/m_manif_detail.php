<?php
		function get_manif_detail($id){
			$bdd=new PDO("mysql:host=localhost;dbname=basemmi14b12",'mmi14b12','Q1LS');
			$bdd->query("SET NAMES 'utf8'");
			$result=$bdd->query("SELECT manif_id,manif_intitule,manif_photo,salle_code,manif_categorie,manif_date,manif_description
								FROM manif 
								WHERE manif_id=$id");

			$toutesLesManifs=$result->fetchAll();
			return $toutesLesManifs;
		}

function get_dispo($id){
    $bdd=new PDO("mysql:host=localhost;dbname=basemmi14b12",'mmi14b12','Q1LS');
    $result=$bdd->query("SELECT salle_place_max, SUM(abo_qte_place_reserv) AS totalresa FROM reservation
                        INNER JOIN manif ON manif.manif_id = reservation.manif_id
                        INNER JOIN salle ON manif.salle_code = salle.salle_code WHERE manif.manif_id =$id");
    $resa = $result->fetchAll();

    foreach ($resa as $value) {

        $occupation = round( ($value['totalresa'] / $value['salle_place_max'])*100 );

        if($occupation>=100){

            $output = '<div class="progress">
                          <div class="progress-bar progress-bar-purple" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                              Déjà complet !
                          </div>
                      </div>';


            return $output;

        } else {

            $output = '<div class="progress">
                          <div class="progress-bar progress-bar-purple" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:'.$occupation.'%;">
                              '.$occupation.' % de réservation
                          </div>
                      </div>';

            return $output;

        }
    }
}
?>

