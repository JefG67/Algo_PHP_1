<h1>Exercice 9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de 
plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).</p>

<h2>Résultat</h2>

<?php

//// Variables représentant l'âge et le sexe de la personne

$age = 32; //Remplacez cette valeur par l'âge réel de la personne
$sexe = "femme"; //Remplacez cette valeur par "homme" ou "femme" selon le cas

if (($sexe == "femme" && $age >= 18 && $age <= 35) || ($sexe == "homme" && $age > 20)) {
    echo "La personne est imposable.";
} else {
    echo "La personne n'est pas imposable.";
}
    echo"<br>";
    echo"Age : $age<br>";
    echo"Sexe : $sexe";

