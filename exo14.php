<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>

<h2> Resultat </h2>

<?php

$dateNaissance = new DateTime("17-01-1985");
$dateaujourdhui = new DateTime("21-05-2018");
$interval = $dateNaissance->diff($dateaujourdhui);

echo "Age de la personne ". $interval->format('%y ans, %m mois, %d jours');