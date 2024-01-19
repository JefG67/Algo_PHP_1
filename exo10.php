<h1>Exercice 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui 
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 
1 €.<p>

<h2>Résultat</h2>

<?php

$montantpayer=152;
$montantverse=200;
$billets10=0;
$billets5=0;
$piece2=0;
$piece1=0;

//Calcul du reste a payer
$restepayer = $montantverse - $montantpayer;

//calcul rendu de monnaie



