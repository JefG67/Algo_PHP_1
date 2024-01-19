<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme:<p>

<h2>Résultat</h2>

<?php

    echo "table de 8 :<br>";
for ($i = 1; $i <= 10; $i++) {
    $resultat = 8 * $i;
    echo "8 x $i = $resultat<br>";
}
    echo "<br>";

    echo"table de 8 :<br>";
$j = 1;
while($j <= 10) {
   $resultat = 8 * $j;
    echo "8 x $j = $resultat<br>";
    $j++;
}


