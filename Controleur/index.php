<?php
$dureePret = 36;
$montantFinance = 8000;

function determinerLeTauxDinteret($dureePret, $montantFinance){
    $tauxInteret = 0;
if($dureePret == 24 || $dureePret == 12 && $montantFinance <= 10000){
    $tauxInteret = 6.95;
    

}
if($dureePret == 24 || $dureePret == 12 && $montantFinance > 10000){
    $tauxInteret = 7.25;
    

}
if($dureePret == 36 && $montantFinance <= 10000){
    $tauxInteret = 6.25;
    
    
}
if($dureePret == 36 && $montantFinance > 10000){
        $tauxInteret = 6.30;
        
        
    
}
if($dureePret == 48 && $montantFinance <= 10000){
        $tauxInteret = 6.10;
        
}
if($dureePret == 48 && $montantFinance > 10000){
        $tauxInteret = 6.30;
        
    
}
if($dureePret == 60 && $montantFinance <= 10000){
        $tauxInteret = 6.00;
        
}
if($dureePret == 60 && $montantFinance > 10000){
        $tauxInteret = 5.85;
        
    
}

$tauxInteret = $tauxInteret/1000;
// echo $tauxInteret;



return $tauxInteret;
}









/* function mensualités($dureeDuPret){
$mensualite = 0;
$interet = DeterminerLeTauxDinteret($dureeDuPret, $montantFinance);
$nombre = 1+$interet;
$puissance = puissance($nombre, $dureeDuPret);
$calcul = ($interet * $puissance)/($puissance -1);
echo $calcul; */


/* } */
$capitalInvesti = 5000;
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
echo $mensualite; 
 

 



?>