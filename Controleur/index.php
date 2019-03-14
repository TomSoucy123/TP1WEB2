<?php
include ('\wamp64\www\TP1WEB2\Modèle\voitures.php');

?>
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

function trouverTauxInteret($dureePret, $prix){
    $taux_interet = determinerLeTauxDinteret($dureePret, $prix);
    $taux_interet = $taux_interet * 1000;
    return $taux_interet;
}

function calcul_mensualite($dureePret,$capitalInvesti){
$interet = determinerLeTauxDinteret($dureePret, $capitalInvesti);
$premiereLigne = $capitalInvesti * ($interet/12);
$deuxiemeLigne = 1 - pow((1+($interet/12)),-$dureePret);
$mensualite = $premiereLigne/$deuxiemeLigne;
return $mensualite;
}


function calculerInterets($prix,$mois,$accompte,$interet){
        $valeur_temporaire = ($prix-$accompte)*pow(1+$interet/12/100,$mois);
        $interet = $valeur_temporaire - $prix;
        return $interet;
        
}

function calculerTaxes($prix){
$tps = ($prix * 5) / 100;
$tvq = ($prix * 9.975) / 100;
$taxes= $tps + $tvq;
return $taxes;

}


function listeDeroulante($tableauInteretPrixMoinsQue10000){
        foreach($tableauInteretPrixMoinsQue10000 as $key => $value) {
            
            echo '<option value="'.$key.'">'.$key." mois-".$value."%".'</option>';
            echo '<br><br>';
        
            
        
    }
}

<<<<<<< HEAD

=======
>>>>>>> 393dff22b7604b8e4b4782b84a295f0f992aeb71
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

 function selectionTableau($marque) {
     $tableau = array();
    switch($marque) {
        case 'Honda';
        $tableau = $tab_marqueVoituresHonda;
        break;
        case 'Chevrolet';
        $tableau = $tab_marqueVoituresChevrolet;
        break;
        case 'Toyota';
        $tableau = $tab_marqueVoituresToyota;
        break;
        case 'BMW';
        $tableau = $tab_marqueVoituresBmw;
        break;
    }
    return $tableau;
} 

<<<<<<< HEAD
function slectionVoiture($tableau) {
=======
 function selectionModele($tableau) {
>>>>>>> 393dff22b7604b8e4b4782b84a295f0f992aeb71
    for($i = 0;$i < sizeof($tableau);$i++){
        return $tableau['modele'];
    }
} 



?>