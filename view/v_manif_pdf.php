<?php

require_once('../tcpdf/tcpdf.php');

$pdf=new TCPDF();
$pdf->AddPage();
$bMargin = $pdf->getBreakMargin();
$auto_page_break = $pdf->getAutoPageBreak();
$pdf->SetAutoPageBreak(false, 0);
$img_file = K_PATH_IMAGES.'page_garde.jpg';
$pdf->Image($img_file, 0, 0, 210, 297, '', '', '', false, 300, '', false, false, 0);
$pdf->SetAutoPageBreak($auto_page_break, $bMargin);
$pdf->setPageMark();

$pdf->AddPage();

foreach($manifs as $key => $une):

$txt = '
<div id="pdf" >
<div id="intitule" style="color:blue;">. '.$une['manif_intitule'].'</div>
<div id="prix_place" style="margin-bottom:50px;">Au prix de '.(number_format($une['manif_prix_place'],2)).' $ </br></div>
<img id="photos" style="width:220px; margin-top:50px" src="../photos/'.$une['manif_photo'].'"alt="photo"/>
</div>';

$pdf->WriteHTML($txt,0);
endforeach;
$pdf->Output('catalogue.pdf');
?>

