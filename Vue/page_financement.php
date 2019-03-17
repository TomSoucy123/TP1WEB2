
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Concessionnaire Sam et Tom</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
                
                <!--Boostrap-->
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
    <!-- CSS -->
    <style>
    
    td{
        width: 200px;
    }
    </style>

     <!--------------- Barre de navigation ------------------>
     <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="..\Vue\Dealer-Car.jpg" width="200" height="120" class="d-inline-block align-top" alt="car-brand">
      </a>
    </nav> 
    <h1>Financement de votre tout nouveau véhicule</h1><br>


    <?php
    include ('..\Controleur\index.php');
    /* $valider = (isset($_POST['calcul']))? $_POST['calcul'] : null;
    if($valider !=null){

  
      $valeurListeDeroulante = $_POST['interets'];
      header('Location:page_financement.php?listeDerulante=' .$valeurListeDeroulante );
    }  */
    $prix = (isset($_POST['prix'])) ? $couts : $_GET['prix'];
    $accompte = (isset($_POST['accompte'])) ? $_POST['accompte'] : $_POST['accompte'];
    $dureeDuPret = (isset($_POST['calcul']))? $_POST['interets'] : $_POST['interets']; 
    $couts = $prix;
    $coutsFinal = $couts - $accompte;
    $taxes = calculerTaxes($couts);
   $taxes_finaux = calculerTaxes($coutsFinal);
   $taux = determinerLeTauxDinteret($dureeDuPret, $couts);
   $taux_interet = $taux * 1000;
   $interets = calculerInterets($couts, $dureeDuPret,$accompte,$taux_interet);
   $interets_finaux = calculerInterets($coutsFinal , $dureeDuPret, $accompte, $taux_interet);
   $montantAFinancer = $couts + $interets;
   $montantAFinancerFinal = $couts + $interets;
   $mensualite =  calcul_mensualite($dureeDuPret,$couts);
   $mensualite_final = calcul_mensualite($dureeDuPret,$coutsFinal);
   

   
    
?>

    </head>
    <body>
    
    <h1>Voici votre facutre et ses details</h2>
    <br>
    <form method="POST">
    <label for='nom'>Saisissez votre accompte :</label>           <input type='number' name="accompte" value="<?php echo $accompte ?>" />
     <br><br>
    Intérêts: <select name="interets" value="<?php  $_POST['listeMarque'];  ?>">
    
    <?php
    
    if($couts <= 10000){

    
        listeDeroulante($tableauInteretPrixMoinsQue10000);
    }
    else{
        listeDeroulante($tableauInteretPrixPlusQue10000);
    }
        ?>
        </select>
        <input type='submit' name="calcul" value="Calculer" />
        <br><br>



  
    <table>
  <tr> 
    <td>Coût :</td>
    <td><?php echo $couts."$"?></td>
    <td><?php echo $couts."$"; ?></td>
  </tr>
  
  <tr>
    <td>Coût total :</td>
    <td><?php echo $couts."$"?></td>
    <td><?php echo $coutsFinal."$"; ?></td>
    
  </tr>
  <tr>
    <td>Taxes :</td>
    <td><?php echo $taxes."$"; ?></td>
    <td><?php echo $taxes_finaux."$"; ?></td>
  </tr>
  
  <tr>
    <td>Intérêt :</td>
    <td><?php echo $interets."$"; ?></td>
    <td><?php echo $interets_finaux."$"; ?></td>
    
  </tr>
  <tr>
    <td>Montant à financer :</td>
    <td><?php echo $montantAFinancer."$"; ?></td>
    <td><?php echo $montantAFinancerFinal."$"; ?></td>
  </tr>
  
  <tr>
    <td>Paiement mensuel :</td>
    <td><?php echo $mensualite."$"; ?></td>
    <td><?php echo $mensualite_final."$"; ?></td>
    
  </tr>
</table>
 </form>
</body>
</html>


