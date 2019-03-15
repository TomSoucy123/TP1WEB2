
<?php
include ('..\Modèle\voitures.php');
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








 function selectionTableauDeMarque($marque) {
    include ('..\Modèle\voitures.php');
    $tableau = array(array());
    
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

function selectionModele($modele, $marque){
    include ('..\Modèle\voitures.php');
    $tableauDeMarque = selectionTableauDeMarque($marque);
   
for($i = 0; $i < sizeof($tableauDeMarque); $i++){
    foreach($tableauDeMarque[$i] as $value){
   if($value == $modele){
       $tableauAretourner = $tableauDeMarque[$i];

}
}

}
return $tableauAretourner;

} 
 
function recupererPhotoDuModele($modele,$marque){
    include ('..\Modèle\voitures.php');
    $tableau = selectionModele($modele, $marque);
    foreach($tableau as $key => $value){
        if($key == 'photo'){
            $photo = $value;
            

        }

    }

return $photo;

}

function afficherImageDuModele($marque, $modele){
    
    include ('..\Modèle\voitures.php');
    $photo = recupererPhotoDuModele($modele,$marque);
    $image_source = imagecreatefromjpeg($photo);
    $image_dest = imagecreatetruecolor(400,400);
    
    $image_source1 = imagecreatefromjpeg($photo);
    $image_dest1 = imagecreatetruecolor(150,150);
    
    //Largeur et la hauteur de ma source
    $haut_source = imagesy($image_source);
    $larg_source = imagesx($image_source);

    $haut_source1 = imagesy($image_source1);
    $larg_source1 = imagesx($image_source1);
    
    
    
    $larg_dest = 400;
    $haut_dest = 400;
    $larg_dest1 = 150;
    $haut_dest1 = 150;
    
    imagecopyresampled($image_dest1,$image_source1,0,0,0,0,$larg_dest1,$haut_dest1,$larg_source1,$haut_source1);
    imagecopyresampled($image_dest,$image_source,0,0,0,0,$larg_dest,$haut_dest,$larg_source,$haut_source);
    
    //Enregistrement de la miniature
    imagejpeg($image_dest,'auto.jpg');
    imagejpeg($image_dest1,'miniAuto.jpg');
    
    
    
    /* echo "<a href='miniAuto.jpg'> <img src='auto.jpg'> </a>"; */
    echo "<img onclick ='auto.jpg' style='cursor: pointer;' src='miniAuto.jpg'/>";
    
    
    
    imagedestroy($image_source);
    imagedestroy($image_dest);
    imagedestroy($image_source1);
    imagedestroy($image_dest1);
    


}

?>