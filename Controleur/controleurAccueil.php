<?php
include ('D:\wamp64\www\TP1WEB2\Modèle\voitures.php');
include ('D:\wamp64\www\TP1WEB2\Vue\accueil.php');

/*--------------- Liste deroulante modele ------------------*/

function listeDeroulante($marque) {
foreach($tabs_modele as $marque1 => $listeModele) {
  foreach($listeModele as $modele) {
    switch($marque) {
        case 'Honda':
            echo '<option value="'.$marque[$modele].'">'.$marque[$modele]. '</option>';
            echo '<br><br>';
            break;
            case 'Toyota':
            echo '<option value="'.$marque[$modele].'">'.$marque[$modele]. '</option>';
            echo '<br><br>';
            break; 
            case 'Chevrolet':
            echo '<option value="'.$marque[$modele].'">'.$marque[$modele]. '</option>';
            echo '<br><br>';
            break;
            case 'BMW':
            echo '<option value="'.$marque[$modele].'">'.$marque[$modele]. '</option>';
            echo '<br><br>';
            break;
            }
        }
    }
}
?>