<?php
include ("\wamp64\www\TP1WEB2\Controleur\index.php"); 

echo '1- ' . calcul_mensualite(24,9000) . '<br>'; 
echo '2- ' . calcul_mensualite(60,10000) . '<br>';//169.22
//http://www4.bmo.com/popup/prets/Calculator.html

echo "<br><br>";
echo '1- ' . calculerInterets(15000,60,0, 5.85) . '<br>'; 


?>