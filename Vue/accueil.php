<?php
include ('\wamp64\www\TP1WEB2\Modèle\voitures.php');
sort($tab_marques);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Concessionnaire Sam et Tom</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">

    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
    
</head>


  
  <!--------------- Barre de navigation ------------------>
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="D:\wamp64\www\TP1WEB2\Vue\Dealer-Car.jpg" width="200" height="120" class="d-inline-block align-top" alt="car-brand">
      </a>
    </nav>
    <h1>Bienvenue sur notre site d'achat de voitures en ligne</h1><br>
  
    

<?php
$marque = (isset($_POST['listeMarque']))? $_POST['listeMarque'] : $_GET['marque'];
$valider = (isset($_POST['rechercher']))? $_POST['rechercher'] : null;
if($valider !=null){

  
  $marque2 = $_POST['listeMarque'];
  header('Location:accueil.php?marque=' .$marque2);
}

if(isset($_POST['envoyer'])){
  $modele_choisi = $_POST['modele']; 
  $marque_choisi = $marque;
  header('Location:selection.php?marque=' .$marque_choisi. '&modele=' .$modele_choisi);
} 

?>

  <!--------------- Liste deroulante marque ------------------>
  <form method="POST">

  Marques de voitures: <select name="listeMarque" value ="<?php $_POST['listeMarque']; ?>">
<?php

  foreach($tab_marques as $valeur){
    if($valeur == $marque){
        echo "<option value='$valeur' selected>$valeur</option>";
        }
        else{
            echo "<option value='$valeur'>$valeur</option>";
        }
    }
 
?>
<input type="submit" name="rechercher" value="Rechercher" />
<br><br>
  <!--------------- Liste deroulante modele ------------------>
  Modeles de voitures: <select name="modele">
  <?php

      foreach($tabs_modele as $cle  =>$valeur ){
       
           if($_GET['marque'] == $cle){ 
            for($i = 0; $i < count($tabs_modele); $i++){
      echo "<option value='$valeur[$i]' selected>$valeur[$i]</option>";
        }

      }
    }
      
 ?>
<input type="submit" name="envoyer" value="Voir les modeles" />
 </form>   

</html>