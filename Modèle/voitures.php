<?php

$tab_marques = array('Honda','Chevrolet','Toyota','BMW');

$tabs_modele = array("Honda" => array ("civic","accord","cr-v"),
                     "Toyota" => array ("camry","corolla","yaris"),
                     "BMW" => array("330xi","m4","z4"),
                     "Chevrolet" => array("malibu","colorado","corvette"),
                    );
                    

$tab_marqueVoituresHonda = array(
    0=>array('modele' => 'civic', 'prix' => 4299, 'description' => "Honda civic 2005 noir en tres bonne condition", 'photo' => '..\Modèle\photo voiture tpweb\civicNoir.JPG'),
    1=>array('modele' => 'accord', 'prix' => 4999, 'description' => "Honda accord 2002 v6 gris, tout équipé, faut que sa parte !", 'photo' => '..\Modèle\photo voiture tpweb\accordGris.JPG'),
    2=>array('modele' => 'cr-v', 'prix' => 2499, 'description' => "Honda Cr-V 2004 v4 gris, fonctionne très bien, appartenait à une mère de famille, 1 seul proprio !", 'photo' => '..\Modèle\photo voiture tpweb\crvGris.JPG'));

$tab_marqueVoituresToyota = array(
    0=>array('modele' => 'camry', 'prix' => 5999, 'description' => "Toyota camry 2003 v4 noir, super bonne voiture, traité à l'antirouille", 'photo' => '..\Modèle\photo voiture tpweb\camry.JPG'),
    1=>array('modele' => 'corolla', 'prix' => 5499, 'description' => "Toyota corolla 2005 gris, très économique, parfait pour faire de la route", 'photo' => '..\Modèle\photo voiture tpweb\corolla.JPG'),
    2=>array('modele' => 'yaris', 'prix' => 4299, 'description' => "Toyota yaris 2009 bleu, seulement 160 000 km au compteur", 'photo' => '..\Modèle\photo voiture tpweb\yarisBleu.JPG'));

$tab_marqueVoituresChevrolet = array(
    0=>array('modele' => 'malibu', 'prix' => 3400, 'description' => "Chevrolet malibu 2009, excellent état, seulement 130 000km", 'photo' => '..\Modèle\photo voiture tpweb\malibu.JPG'),
    1=>array('modele' => 'colorado', 'prix' => 1500, 'description' => "4 cyl 2.8L , boite de 6pieds, vien avec couvre boite , brake arriere neuf , brake avant ok , 4 pneus hiver en tres bon etats neuf de cette année , body ruff raison du bas prix , roule bien pratique et economique", 'photo' => '..\Modèle\photo voiture tpweb\coloradoRouge.JPG" title='),
    2=>array('modele' => 'corvette', 'prix' => 18995, 'description' => "belle corvette decapotable, manuelle, 72 000 km, couleur grise", 'photo' => '..\Modèle\photo voiture tpweb\corvetteGrise.JPG'));

$tab_marqueVoituresBmw = array(
    0=>array('modele' => '330xi', 'prix' => 7900, 'description' => "Bmw 330xi 2006, excellent état, seulement 130 000km", 'photo' => '..\Modèle\photo voiture tpweb\330xi.JPG'),
    1=>array('modele' => 'm4', 'prix' => 75990, 'description' => "Bmw m4 2019, neuve, venez la voir !", 'photo' => '..\Modèle\photo voiture tpweb\m4.JPG'),
    2=>array('modele' => 'z4', 'prix' => 21900, 'description' => "Bmw z4 2007, excellent état, seulement 46 000km", 'photo' => '..\Modèle\photo voiture tpweb\z4.JPG'));

    $tableauInteretPrixMoinsQue10000=array('12' => 6.95, '24' => 6.95, '36' => 6.25, '48' => 6.10, '60'=> 6.00);

    $tableauInteretPrixPlusQue10000=array('12' => 7.25, '24' => 7.25, '36' => 6.30, '48' => 6.30, '60'=> 5.85);

?>