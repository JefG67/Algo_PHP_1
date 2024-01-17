<h1>Exercice 6</h1>

<p> Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité 
d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)</p>

<h2>Résultat</h2>

<?php

$prixUnitaire = 9.99;
$quantite = 5;
$tauxTVA = 0.2;
$montantHorsTVA = $prixUnitaire * $quantite;
$montantTVA = $montantHorsTVA * $tauxTVA;
$montantTotal = $montantHorsTVA + $montantTVA;

echo "Prix unitaire de l'article : $prixUnitaire € <br> ";
echo "Quantité : $quantite <br>";
echo " taux de tva : $tauxTVA <br>";
echo "Le montant de la facture à régler est de : $montantTotal €";