<?php
include ('\wamp64\www\TP1WEB2\Controleur\index.php');

echo '--------- test fonction selectionTableauDeMarque($marque) -----------'.'<br><br><br>';

echo '1-' . print_r(selectionTableauDeMarque('Honda')) .' -fonctionne'. '<br><br>';
echo '2-' . print_r(selectionTableauDeMarque('BMW')) .' -fonctionne'. '<br><br>';
echo '3-' . print_r(selectionTableauDeMarque('cr-v')) .' -ne doit pas fonctionne'. '<br><br>';

echo '--------- test fonction selectionModele($modele, $marque) -----------'.'<br><br><br>';

echo '1-' . print_r(selectionModele('cr-v','Honda')) .' -fonctionne'. '<br><br>';
echo '2-' . print_r(selectionModele('m4','BMW')) .' -fonctionne'. '<br><br>';
echo '3-' . print_r(selectionModele('corvette','Chevrolet')) .' -fonctionne'. '<br><br>';
echo '4-' . print_r(selectionModele('cr-v','BMW')) .' -ne doit pas fonctionne'. '<br><br>';
echo '5-' . print_r(selectionModele('m4','Honda')) .' -ne doit pas fonctionne'. '<br><br>';

echo '--------- test fonction recupererDescriptionDuModele($modele,$marque) -----------'.'<br><br><br>';

echo '1-' . recupererDescriptionDuModele('corolla','Toyota') .' -fonctionne'. '<br><br>';
echo '2-' . recupererDescriptionDuModele('yaris','Toyota') .' -fonctionne'. '<br><br>';
echo '3-' . recupererDescriptionDuModele('colorado','Chevrolet') .' -fonctionne'. '<br><br>';
echo '4-' . recupererDescriptionDuModele('','Chevrolet') .' -ne doit pas fonctionne'. '<br><br>';
echo '5-' . recupererDescriptionDuModele('colorado','') .' -ne doit pas fonctionne'. '<br><br>';
echo '6-' . recupererDescriptionDuModele('Chevrolet','colorado') .' -ne doit pas fonctionne'. '<br><br>';

echo '--------- test fonction recupererPrixDuModele($modele,$marque) -----------'.'<br><br><br>';

echo '1-' . recupererPrixDuModele('civic','Honda') .' -fonctionne'. '<br><br>';
echo '2-' . recupererPrixDuModele('malibu','Chevrolet') .' -fonctionne'. '<br><br>';
echo '3-' . recupererPrixDuModele('camry','Toyota') .' -fonctionne'. '<br><br>';
echo '4-' . recupererPrixDuModele('','Toyota') .' -ne doit pas fonctionne'. '<br><br>';
echo '5-' . recupererPrixDuModele('camry','') .' -ne doit pas fonctionne'. '<br><br>';
echo '6-' . recupererPrixDuModele('Toyota','camry') .' -ne doit pas fonctionne'. '<br><br>';

echo '--------- test fonction determinerLeTauxDinteret($dureePret, $prix) -----------'.'<br><br><br>';

echo '1-' . determinerLeTauxDinteret(12, 5000) .' -fonctionne'. '<br><br>';
echo '2-' . determinerLeTauxDinteret(12, 10001) .' -fonctionne'. '<br><br>';
echo '3-' . determinerLeTauxDinteret(0, 10001) .' -fonctionne'. '<br><br>';
echo '4-' . determinerLeTauxDinteret(45, 10001) .' -ne doit pas fonctionne'. '<br><br>';
echo '5-' . determinerLeTauxDinteret(45, 10000) .' -ne doit pas fonctionne'. '<br><br>';

echo '--------- test fonction trouverTauxInteret($dureePret, $prix) -----------'.'<br><br><br>';

echo '1-' . trouverTauxInteret(12, 5000) .' -fonctionne'. '<br><br>';
echo '2-' . trouverTauxInteret(12, 10001) .' -fonctionne'. '<br><br>';
echo '3-' . trouverTauxInteret(0, 10001) .' -fonctionne'. '<br><br>';
echo '4-' . trouverTauxInteret(45, 10001) .' -ne doit pas fonctionne'. '<br><br>';
echo '5-' . trouverTauxInteret(45, 10000) .' -ne doit pas fonctionne'. '<br><br>';

echo '--------- test fonction calcul_mensualite($dureePret,$capitalInvesti) -----------'.'<br><br><br>';

echo '1-' . calcul_mensualite(12, 5000) .' -fonctionne'. '<br><br>';
echo '2-' . calcul_mensualite(12, 10001) .' -fonctionne'. '<br><br>';
echo '3-' . calcul_mensualite(0, 10001) .' -fonctionne'. '<br><br>';
echo '4-' . calcul_mensualite(45, 10001) .' -ne doit pas fonctionne'. '<br><br>';
echo '5-' . calcul_mensualite(45, 10000) .' -ne doit pas fonctionne'. '<br><br>';

echo '--------- test fonction calculerInterets($prix,$mois,$accompte,$interet) -----------'.'<br><br><br>';

<<<<<<< HEAD
echo '1-' . calculerInterets(4500,12,2000,6.1) .' -fonctionne'. '<br><br>';
=======
echo '1-' . calculerInterets(4500,12,2000,5) .' -fonctionne'. '<br><br>';
echo '2-' . calculerInterets(4500,12,0,3) .' -fonctionne'. '<br><br>';

echo '--------- test fonction calculerTaxes($prix) -----------'.'<br><br><br>';

echo '1-' . calculerTaxes(3000) .' -fonctionne'. '<br><br>';
echo '2-' . calculerTaxes(1000) .' -fonctionne'. '<br><br>';
echo '3-' . calculerTaxes(10001) .' -fonctionne'. '<br><br>';
echo '4-' . calculerTaxes(0) .' -fonctionne'. '<br><br>';
>>>>>>> 6a1bb44138c6734156443a68db6e715bce571fc2
?>