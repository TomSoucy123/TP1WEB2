<?php

$tab_marqueHonda = array(
    ('modele' => 'civic', 'prix' => 2999, 'descritpion' => "Honda civic 2003 bleu avec 4 pneus d'hiver pirelli neufs tout fonctionne", 'photo' => '<img src="D:\wamp64\www\TP1WEB2\Modèle\photo voiture tpweb\civicBleu.JPG" width="280" height="125" title="civicBleu" alt="civicBleu" />'),
    ('modele' => 'civic', 'prix' => 4299, 'descritpion' => "Honda civic 2005 noir en tres bonne condition", 'photo' => '<img src="D:\wamp64\www\TP1WEB2\Modèle\photo voiture tpweb\civicNoir.JPG" width="280" height="125" title="civicNoir" alt="civicNoir" />'),
    ('modele' => 'accord', 'prix' => 4999, 'descritpion' => "Honda accord 2002 v6 gris, tout équipé, faut que sa parte !", 'photo' => '<img src="D:\wamp64\www\TP1WEB2\Modèle\photo voiture tpweb\accordGris.JPG" width="280" height="125" title="accordGris" alt="accordGris" />'),
    ('modele' => 'cr-v', 'prix' => 2499, 'descritpion' => "Honda Cr-V 2004 v4 gris, fonctionne très bien, appartenait à une mère de famille, 1 seul proprio !", 'photo' => '<img src="D:\wamp64\www\TP1WEB2\Modèle\photo voiture tpweb\crvGris.JPG" width="280" height="125" title="crvGris" alt="crvGris" />'));

$tab_marqueToyota = array(
    ('modele' => 'camry', 'prix' => 5999, 'descritpion' => "Toyota camry 2003 v4 noir, super bonne voiture, traité à l'antirouille", 'photo' => '<img src="D:\wamp64\www\TP1WEB2\Modèle\photo voiture tpweb\camry.JPG" width="280" height="125" title="camry" alt="camry" />'),
    ('modele' => 'corolla', 'prix' => 5499, 'descritpion' => "Toyota corolla 2005 gris, très économique, parfait pour faire de la route", 'photo' => '<img src="D:\wamp64\www\TP1WEB2\Modèle\photo voiture tpweb\corolla.JPG" width="280" height="125" title="corolla" alt="corolla" />'),
    ('modele' => 'yaris', 'prix' => 4299, 'descritpion' => "Toyota yaris 2009 bleu, seulement 160 000 km au compteur", 'photo' => '<img src="D:\wamp64\www\TP1WEB2\Modèle\photo voiture tpweb\yarisBleu.JPG" width="280" height="125" title="yarisBleu" alt="yarisBleu" />'),
    ('modele' => 'yaris', 'prix' => 3000, 'descritpion' => "Toyota yaris 2007 orange, traité à l'antirouille", 'photo' => '<img src="D:\wamp64\www\TP1WEB2\Modèle\photo voiture tpweb\yarisOrange.JPG" width="280" height="125" title="yarisOrange" alt="yarisOrange" />'));

$tab_marqueChevrolet = array(
    ('modele' => 'malibu', 'prix' => 3400, 'descritpion' => "Chevrolet malibu 2009, excellent état, seulement 130 000km", 'photo' => '<img src="D:\wamp64\www\TP1WEB2\Modèle\photo voiture tpweb\malibu.JPG" width="280" height="125" title="malibu" alt="malibu" />'),
    ('modele' => 'colorado', 'prix' => 1500, 'descritpion' => "4 cyl 2.8L , boite de 6pieds, vien avec couvre boite , brake arriere neuf , brake avant ok , 4 pneus hiver en tres bon etats neuf de cette année , body ruff raison du bas prix , roule bien pratique et economique", 'photo' => '<img src="D:\wamp64\www\TP1WEB2\Modèle\photo voiture tpweb\coloradoRouge.JPG" width="280" height="125" title="coloradoRouge" alt="coloradoRouge" />'),
    ('modele' => 'colorado', 'prix' => 9499, 'descritpion' => "4X4, automatique, seulement 160 00 km, 2007, tres bon camion", 'photo' => '<img src="D:\wamp64\www\TP1WEB2\Modèle\photo voiture tpweb\coloradoBeige.JPG" width="280" height="125" title="coloradoBeige" alt="coloradoBeige" />'),
    ('modele' => 'corvette', 'prix' => 18995, 'descritpion' => "belle corvette decapotable, manuelle, 72 000 km, couleur grise", 'photo' => '<img src="D:\wamp64\www\TP1WEB2\Modèle\photo voiture tpweb\corvetteGrise.JPG" width="280" height="125" title="corvette" alt="corvette" />'));

    /*--------------- fonction liste deroulante marque ------------------*/

$tab_marques=array("Honda","Toyota","Chevrolet");
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