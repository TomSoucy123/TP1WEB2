<?php

function($dureePret, $montantFinance){
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
return $tauxInteret;




}



?>