<?php
/*------------------- financement ----------------*/
$capitalInvesti = 10000;
$dureePret = 60;
$prix = 10000;


function determinerLeTauxDinteret($dureePret, $prix){
        $interet = 0;
        if($prix <= 10000){
                switch($dureePret){
                    case "12";
                        $interet = 0.695;
                        break;
                    case "24";
                        $interet = 0.695;
                        break;
                    case "36";
                        $interet = 0.625;
                        break;
                    case "48";
                        $interet = 0.610;
                        break;
                    case "60";
                        $interet = 0.600;
                        break;
                }
                
            }
            else{
                switch($dureePret){
                    case "12";
                        $interet = 0.725;
                        break;
                    case "24";
                        $interet = 0.725;
                        break;
                    case "36";
                        $interet = 0.630;
                        break;
                    case "48";
                        $interet = 0.630;
                        break;
                    case "60";
                        $interet = 0.585;
                        break;
                }
                
            }
            $tauxInteret = $interet/100;
            return $tauxInteret;
        }
       
/*     $tauxInteret = 0;
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
echo $tauxInteret;



return $tauxInteret;
} */



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

function calculerTaxes($prix){
$tps = ($prix * 5) / 100;
$tvq = ($prix * 9.975) / 100;
$taxes= $tps + $tvq;
return $taxes;

}
$tableauInteretPrixMoinsQue10000=array('12' => 6.95, '24' => 6.95, '36' => 6.25, '48' => 6.10, '60'=> 6.00);

$tableauInteretPrixPlusQue10000=array('12' => 7.25, '24' => 7.25, '36' => 6.30, '48' => 6.30, '60'=> 5.85);

function listeDeroulante($tableauInteretPrixMoinsQue10000){
        foreach($tableauInteretPrixMoinsQue10000 as $key => $value) {
            
            echo '<option value="'.$key.'">'.$key." mois-".$value."%".'</option>';
            echo '<br><br>';
        
            
        
    }
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
 
/*---------------------- selection.php ------------------------*/
include ('\wamp64\www\TP1WEB2\Modèle\voitures.php');
function selectionTableau($marque) {
    switch($marque) {
        case 'Honda';
        return $tab_marqueVoituresHonda;
        break;
        case 'Chevrolet';
        return $tab_marqueVoituresChevrolet;
        break;
        case 'Toyota';
        return $tab_marqueVoituresToyota;
        break;
        case 'BMW';
        return $tab_marqueVoituresBmw;
        break;
    }
}

function slectionModele($tableau) {
    for($i = 0;$i < sizeof($tableau);$i++){
        echo
    }
}
?>