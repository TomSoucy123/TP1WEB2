<?php

$tab_marques = array('Honda','Chevrolet','Toyota','BMW');

$tabs_modele = array("Honda" => array ("civic","accord","cr-v"),
                     "Toyota" => array ("camry","corolla","yaris"),
                     "BMW" => array("330xi","m4","z4"),
                     "Chevrolet" => array("malibu","colorado","corvette"),
                    );
                    

$tab_marqueVoituresHonda = array(
    0=>array('modele' => 'civic', 'prix' => 4299, 'description' => "Honda civic 2005 noir en tres bonne condition", 'photo' => '<img src="D:\wamp64\www\TP1WEB2\Modèle\photo voiture tpweb\civicNoir.JPG" width="280" height="125" title="civicNoir" alt="civicNoir" />'),
    1=>array('modele' => 'accord', 'prix' => 4999, 'description' => "Honda accord 2002 v6 gris, tout équipé, faut que sa parte !", 'photo' => '<img src="D:\wamp64\www\TP1WEB2\Modèle\photo voiture tpweb\accordGris.JPG" width="280" height="125" title="accordGris" alt="accordGris" />'),
    2=>array('modele' => 'cr-v', 'prix' => 2499, 'description' => "Honda Cr-V 2004 v4 gris, fonctionne très bien, appartenait à une mère de famille, 1 seul proprio !", 'photo' => '<img src="D:\wamp64\www\TP1WEB2\Modèle\photo voiture tpweb\crvGris.JPG" width="280" height="125" title="crvGris" alt="crvGris" />'));

$tab_marqueVoituresToyota = array(
    0=>array('modele' => 'camry', 'prix' => 5999, 'description' => "Toyota camry 2003 v4 noir, super bonne voiture, traité à l'antirouille", 'photo' => '<img src="D:\wamp64\www\TP1WEB2\Modèle\photo voiture tpweb\camry.JPG" width="280" height="125" title="camry" alt="camry" />'),
    1=>array('modele' => 'corolla', 'prix' => 5499, 'description' => "Toyota corolla 2005 gris, très économique, parfait pour faire de la route", 'photo' => '<img src="D:\wamp64\www\TP1WEB2\Modèle\photo voiture tpweb\corolla.JPG" width="280" height="125" title="corolla" alt="corolla" />'),
    2=>array('modele' => 'yaris', 'prix' => 4299, 'description' => "Toyota yaris 2009 bleu, seulement 160 000 km au compteur", 'photo' => '<img src="D:\wamp64\www\TP1WEB2\Modèle\photo voiture tpweb\yarisBleu.JPG" width="280" height="125" title="yarisBleu" alt="yarisBleu" />'));

$tab_marqueVoituresChevrolet = array(
    0=>array('modele' => 'malibu', 'prix' => 3400, 'description' => "Chevrolet malibu 2009, excellent état, seulement 130 000km", 'photo' => '<img src="D:\wamp64\www\TP1WEB2\Modèle\photo voiture tpweb\malibu.JPG" width="280" height="125" title="malibu" alt="malibu" />'),
    1=>array('modele' => 'colorado', 'prix' => 1500, 'description' => "4 cyl 2.8L , boite de 6pieds, vien avec couvre boite , brake arriere neuf , brake avant ok , 4 pneus hiver en tres bon etats neuf de cette année , body ruff raison du bas prix , roule bien pratique et economique", 'photo' => '<img src="D:\wamp64\www\TP1WEB2\Modèle\photo voiture tpweb\coloradoRouge.JPG" width="280" height="125" title="coloradoRouge" alt="coloradoRouge" />'),
    2=>array('modele' => 'corvette', 'prix' => 18995, 'description' => "belle corvette decapotable, manuelle, 72 000 km, couleur grise", 'photo' => '<img src="D:\wamp64\www\TP1WEB2\Modèle\photo voiture tpweb\corvetteGrise.JPG" width="280" height="125" title="corvette" alt="corvette" />'));

$tab_marqueVoituresBmw = array(
    0=>array('modele' => '330xi', 'prix' => 7900, 'description' => "Bmw 330xi 2006, excellent état, seulement 130 000km", 'photo' => '<img src="D:\wamp64\www\TP1WEB2\Modèle\photo voiture tpweb\330xi.JPG" width="280" height="125" title="330xi" alt="330xi" />'),
    1=>array('modele' => 'm4', 'prix' => 75990, 'description' => "Bmw m4 2019, neuve, venez la voir !", 'photo' => '<img src="D:\wamp64\www\TP1WEB2\Modèle\photo voiture tpweb\m4.JPG" width="280" height="125" title="m4" alt="m4" />'),
    2=>array('modele' => 'z4', 'prix' => 21900, 'description' => "Bmw z4 2007, excellent état, seulement 46 000km", 'photo' => '<img src="D:\wamp64\www\TP1WEB2\Modèle\photo voiture tpweb\z4.JPG" width="280" height="125" title="z4" alt="z4" />'));

    $tableauInteretPrixMoinsQue10000=array('12' => 6.95, '24' => 6.95, '36' => 6.25, '48' => 6.10, '60'=> 6.00);

    $tableauInteretPrixPlusQue10000=array('12' => 7.25, '24' => 7.25, '36' => 6.30, '48' => 6.30, '60'=> 5.85);

?>