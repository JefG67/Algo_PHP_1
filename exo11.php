<h1>Exercice 11</h1>

<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce 
tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé 
d’afficher le nombre de marques de voitures présentes dans le tableau.<br>
Exemple : tableau ➔ « Peugeot », « Renault », « BMW », « Mercedes »</p>

<h2>Résultat</h2>

<?php

$Nmarque = ["Peugeot","Renault","BMW","Mercedes"];
$nb = count($Nmarque);

echo "Il y a $nb de voitures dans le tableau :<br><br>";

foreach($Nmarque as $Nmarque) {
    echo "<li>$Nmarque</li><br>";
}