<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. 
Attention, la valeur générée devra être arrondie à 2 décimales.</p>

<h2>Résultat</h2>

<?php

$francs = 100;
$tauxfrancs = 6.55957;
$euros = $francs / $tauxfrancs;
$eurosArrondis = round($euros, 2);
echo "$francs  francs = $eurosArrondis €<br>";

echo "montant en francs : $francs";