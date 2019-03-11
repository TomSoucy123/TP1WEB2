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
  
    <form name='formulaire' method='post'>
  <!--------------- Liste deroulante marque ------------------>
  <label for='marques'> Liste De Marques <select name="liste_marque" value=''>
    <?php
    include ('\wamp64\www\TP1WEB2\Modèle\voitures.php');
    sort($tab_marques);
    choisirMarques($tab_marques);
    ?>
  </select>

  <!--------------- Liste deroulante modele ------------------>
  <label for='modele'> Liste De Marques <select name="liste_modele" value=''>
    <?php
    include ('\wamp64\www\TP1WEB2\Modèle\voitures.php');
    sort($tab_modele);
    choisirModele($tab_modele);
    ?>
  </select>


  </form>

    

</html>