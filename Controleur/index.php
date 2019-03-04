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

$tauxInteret = $tauxInteret/100;
// echo $tauxInteret;



return $tauxInteret;
}


function puissance($nombre,$exposant){
$resultat=0;
        for ($i=0;$i<$exposant;$i++){
                $resultat =  $resultat *$nombre;
        }
return $resultat;
 }






/* function mensualités($dureeDuPret){
$mensualite = 0;
$interet = DeterminerLeTauxDinteret($dureeDuPret, $montantFinance);
$nombre = 1+$interet;
$puissance = puissance($nombre, $dureeDuPret);
$calcul = ($interet * $puissance)/($puissance -1);
echo $calcul; */


/* } */
$dureeDuPret = 24;
$montantFinance = 11000;
function mensualités($dureeDuPret){
$interet = determinerLeTauxDinteret($dureeDuPret, $montantFinance);
$mensualite = $montantFinance / ((1-(1+ (((1+$interet)(1/12))-1)(-$dureeDuPret))/(((1+$interet)(1/12))-1);
echo $mensualite;
return $mensualite;
}


 

 



?>