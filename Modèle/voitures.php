<?php

$tab_marqueHonda = array(
    0=>array('modele' => 'civic', 'prix' => 2999, 'description' => 'Honda civic 2003 bleu avec 4 pneus d\'hiver pirelli neufs tout fonctionne', 'photo' => '<img src="D:\wamp64\www\TP1WEB2\Modèle\photo voiture tpweb\civicBleu.JPG" width="280" height="125" title="civicBleu" alt="civicBleu" />'),
    1=>array('modele' => 'civic', 'prix' => 4299, 'description' => "Honda civic 2005 noir en tres bonne condition", 'photo' => '<img src="D:\wamp64\www\TP1WEB2\Modèle\photo voiture tpweb\civicNoir.JPG" width="280" height="125" title="civicNoir" alt="civicNoir" />'),
    2=>array('modele' => 'accord', 'prix' => 4999, 'description' => "Honda accord 2002 v6 gris, tout équipé, faut que sa parte !", 'photo' => '<img src="D:\wamp64\www\TP1WEB2\Modèle\photo voiture tpweb\accordGris.JPG" width="280" height="125" title="accordGris" alt="accordGris" />'),
    3=>array('modele' => 'cr-v', 'prix' => 2499, 'description' => "Honda Cr-V 2004 v4 gris, fonctionne très bien, appartenait à une mère de famille, 1 seul proprio !", 'photo' => '<img src="D:\wamp64\www\TP1WEB2\Modèle\photo voiture tpweb\crvGris.JPG" width="280" height="125" title="crvGris" alt="crvGris" />'));

$tab_marqueToyota = array(
    0=>array('modele' => 'camry', 'prix' => 5999, 'description' => "Toyota camry 2003 v4 noir, super bonne voiture, traité à l'antirouille", 'photo' => '<img src="D:\wamp64\www\TP1WEB2\Modèle\photo voiture tpweb\camry.JPG" width="280" height="125" title="camry" alt="camry" />'),
    1=>array('modele' => 'corolla', 'prix' => 5499, 'description' => "Toyota corolla 2005 gris, très économique, parfait pour faire de la route", 'photo' => '<img src="D:\wamp64\www\TP1WEB2\Modèle\photo voiture tpweb\corolla.JPG" width="280" height="125" title="corolla" alt="corolla" />'),
    2=>array('modele' => 'yaris', 'prix' => 4299, 'description' => "Toyota yaris 2009 bleu, seulement 160 000 km au compteur", 'photo' => '<img src="D:\wamp64\www\TP1WEB2\Modèle\photo voiture tpweb\yarisBleu.JPG" width="280" height="125" title="yarisBleu" alt="yarisBleu" />'),
    3=>array('modele' => 'yaris', 'prix' => 3000, 'description' => "Toyota yaris 2007 orange, traité à l'antirouille", 'photo' => '<img src="D:\wamp64\www\TP1WEB2\Modèle\photo voiture tpweb\yarisOrange.JPG" width="280" height="125" title="yarisOrange" alt="yarisOrange" />'));

$tab_marqueChevrolet = array(
    0=>array('modele' => 'malibu', 'prix' => 3400, 'description' => "Chevrolet malibu 2009, excellent état, seulement 130 000km", 'photo' => '<img src="D:\wamp64\www\TP1WEB2\Modèle\photo voiture tpweb\malibu.JPG" width="280" height="125" title="malibu" alt="malibu" />'),
    1=>array('modele' => 'colorado', 'prix' => 1500, 'description' => "4 cyl 2.8L , boite de 6pieds, vien avec couvre boite , brake arriere neuf , brake avant ok , 4 pneus hiver en tres bon etats neuf de cette année , body ruff raison du bas prix , roule bien pratique et economique", 'photo' => '<img src="D:\wamp64\www\TP1WEB2\Modèle\photo voiture tpweb\coloradoRouge.JPG" width="280" height="125" title="coloradoRouge" alt="coloradoRouge" />'),
    2=>array('modele' => 'colorado', 'prix' => 9499, 'description' => "4X4, automatique, seulement 160 00 km, 2007, tres bon camion", 'photo' => '<img src="D:\wamp64\www\TP1WEB2\Modèle\photo voiture tpweb\coloradoBeige.JPG" width="280" height="125" title="coloradoBeige" alt="coloradoBeige" />'),
    3=>array('modele' => 'corvette', 'prix' => 18995, 'description' => "belle corvette decapotable, manuelle, 72 000 km, couleur grise", 'photo' => '<img src="D:\wamp64\www\TP1WEB2\Modèle\photo voiture tpweb\corvetteGrise.JPG" width="280" height="125" title="corvette" alt="corvette" />'));

$tab_marqueBmw = array(
    0=>array('modele' => '330xi', 'prix' => 7900, 'description' => "Bmw 330xi 2006, excellent état, seulement 130 000km", 'photo' => '<img src="D:\wamp64\www\TP1WEB2\Modèle\photo voiture tpweb\330xi.JPG" width="280" height="125" title="330xi" alt="330xi" />'),
    1=>array('modele' => 'm4', 'prix' => 75990, 'description' => "Bmw m4 2019, neuve, venez la voir !", 'photo' => '<img src="D:\wamp64\www\TP1WEB2\Modèle\photo voiture tpweb\m4.JPG" width="280" height="125" title="m4" alt="m4" />'),
    2=>array('modele' => 'z4', 'prix' => 21900, 'description' => "Bmw z4 2007, excellent état, seulement 46 000km", 'photo' => '<img src="D:\wamp64\www\TP1WEB2\Modèle\photo voiture tpweb\z4.JPG" width="280" height="125" title="z4" alt="z4" />'));

    /*--------------- fonction liste deroulante marque ------------------*/

$tab_marques=array("Honda","Toyota","Chevrolet","Bmw");
sort($tab_marques);
$max = sizeof($tab_marques);
    function choisirMarques($tab_marques){
        for($i = 0; $i < sizeof($tab_marques); $i++){
            echo '<option>' .$tab_marques[$i]. '</option>';
            echo '<br><br>';
        }
    }

/*     function listeMarque($tableauMarque) {
switch($tableauMarque) {
    case $tab_marqueHonda:
    echo '<option>' ."Honda". '</option>';
    echo '<br><br>';
    break;
    case $tab_marqueToyota:
    echo '<option>' ."Toyota". '</option>';
    echo '<br><br>';
    break;
    case $tab_marqueChevrolet:
    echo '<option>' ."Chevrolet". '</option>';
    echo '<br><br>';
    break;
    }
} */
?>