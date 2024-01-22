<?php

// Tableau de notes de l'élève
$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];

// Calcul de la moyenne générale
$totalNotes = 0;
foreach ($notes as $note) {
    $totalNotes += $note;
}

$moyenneGenerale = $totalNotes / count($notes);

// Affichage des notes et de la moyenne générale
echo "Les notes obtenues par l'élève sont : " . implode(' ', $notes) . PHP_EOL;
echo "Sa moyenne générale est donc de : " . number_format($moyenneGenerale, 2) . PHP_EOL;

?>
