<?php
if(empty($_GET['search'])){

}else{
    function donnee_manifestations(){
        $bdd=new PDO("mysql:host=localhost;dbname=basemmi14b12",'mmi14b12','Q1LS');
        $bdd->query("SET NAMES 'utf8'");
        $result = $bdd->query("SELECT (manif_prix_place*1.13) as manif_prix_place , UPPER(manif_intitule) as
manif_intitule, manif_id, manif_description, manif_photo, salle_code FROM manif WHERE manif_intitule
 LIKE '%".$_GET['search']."%'");
        $toutesLesManifs = $result->fetchAll();
        return $toutesLesManifs;


    }
    $manifs = donnee_manifestations();
    function get_dispo($manif){
        $bdd=new PDO("mysql:host=localhost;dbname=basemmi14b12",'mmi14b12','Q1LS');
        $result=$bdd->query("SELECT salle_place_max, SUM( abo_qte_place_reserv ) AS totalresa
FROM reservation INNER JOIN manif ON manif.manif_id = reservation.manif_id
INNER JOIN salle ON manif.salle_code = salle.salle_code WHERE manif.manif_id =".$manif);
        $resa = $result->fetchAll();

        foreach ($resa as $value) {

            $occupation = round( ($value['totalresa'] / $value['salle_place_max'])*100 );

            if($occupation>=100){

                $output = '
                <div class="progress" style="margin-bottom: 0; height: 25px;">
                  <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar"
                  aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="padding-top: 3px;height:25px;width:100%">
                    '.$occupation.' % de réservation
                  </div>
                </div>';

                return $output;

            } else {

                $output = '
                <div class="progress" style="margin-bottom: 0; height: 25px;">
                  <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"
                  aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="padding-top: 3px;height:25px;width:'.$occupation.'%">
                    '.$occupation.' %
                  </div>
                </div>';

                return $output;

            }
        }
    }
}


?>


<?php foreach ($manifs as $key => $une):

    $id = $une['manif_id'];




    ?>

    <div class="manif">
                                       <h4>. <?php echo "<a href=\"../controler/c_manif_detail.php?id=".$une['manif_id']."\">".$une['manif_intitule']."</a>"  ?></h4>
                                        
                                        
                                        
                                       
                                        <br>
                                        <div id="photo_search">

                                        <img src="../photos/<?php echo $une['manif_photo']?>"></div>
                                    </div>

                                    <?php endforeach ?> 

                                    <hr>