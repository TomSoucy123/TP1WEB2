<?php
$capitalInvesti = 10000;
$dureePret = 60;


function determinerLeTauxDinteret($dureePret, $capitalInvesti){
    $tauxInteret = 0;
if($dureePret == 24 || $dureePret == 12 && $capitalInvesti <= 10000){
    $tauxInteret = 6.95;
    

}
if($dureePret == 24 || $dureePret == 12 && $capitalInvesti> 10000){
    $tauxInteret = 7.25;
    

}
if($dureePret == 36 && $capitalInvesti <= 10000){
    $tauxInteret = 6.25;
    
    
}
if($dureePret == 36 && $capitalInvesti > 10000){
        $tauxInteret = 6.30;
        
        
    
}
if($dureePret == 48 && $capitalInvesti <= 10000){
        $tauxInteret = 6.10;
        
}
if($dureePret == 48 && $capitalInvesti > 10000){
        $tauxInteret = 6.30;
        
    
}
if($dureePret == 60 && $capitalInvesti <= 10000){
        $tauxInteret = 6.00;
        
}
if($dureePret == 60 && $capitalInvesti > 10000){
        $tauxInteret = 5.85;
        
    
}

$tauxInteret = $tauxInteret/1000;
// echo $tauxInteret;



return $tauxInteret;
}



function calcul_mensualite($dureePret,$capitalInvesti){
        
$interet = determinerLeTauxDinteret($dureePret, $capitalInvesti);




$premiereLigne = $capitalInvesti * ($interet/12);




$deuxiemeLigne = 1 - pow((1+($interet/12)),-$dureePret);




$mensualite = $premiereLigne/$deuxiemeLigne;
return $mensualite;
}

function calculerInterets($dureePret,$capitalInvesti){
        $mensualite = calcul_mensualite($dureePret,$capitalInvesti);
        $interets = ($mensualite * $dureePret) - $capitalInvesti;
        
        return $interets;
        
}
$prix = 10000;
function calculerTaxes($prix){
$tps = ($prix * 5) / 100;
$tvq = ($prix * 9.975) / 100;
$taxes= $tps + $tvq;
return taxes;


}














/* $capitalInvesti = 5000;
$dureeDuPret = 36;

function calcul_mensualite($dureeDuPret,$capitalInvesti){
        
$interet = determinerLeTauxDinteret($dureeDuPret, $capitalInvesti);
echo $interet;

echo "<br><br>";

$premiereLigne = $interet * pow(1+$interet, $dureeDuPret);
echo $premiereLigne;
echo "<br><br>";

$deuxiemeLigne = pow(1+$interet, $dureeDuPret) - 1;
echo $deuxiemeLigne;
echo "<br><br>";
$mensualite = $capitalInvesti * ($premiereLigne/$deuxiemeLigne);
return $mensualite;
}

$mensualite = calcul_mensualite($dureePret,$capitalInvesti);
echo $mensualite;  */
 

 



?>