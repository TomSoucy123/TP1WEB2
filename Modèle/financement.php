<?php
include ('\wamp64\www\Exer\TP1WEB2\Controleur\index.php');
$mensualite = calcul_mensualite($dureePret,$capitalInvesti);
echo "La mensualité est ".$mensualite; 
echo "<br><br>";

$interets = calculerInterets($dureePret,$capitalInvesti);
echo "Les interets sont ".$interets;


?>