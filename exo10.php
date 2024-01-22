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
$restepayerD = $montantverse - $montantpayer;

//Calcul du reste a payer
$restepayer = $montantverse - $montantpayer;

//calcul rendu de monnaie

while ($restepayer>=10) {
        $restepayer=$restepayer-10;
        $billets10++;

    }

while ($restepayer>=5) {
        $restepayer=$restepayer-5;
        $billets5++;
}

while ($restepayer>=2) {
        $restepayer=$restepayer-2;
        $piece2++;
}

while ($restepayer>=1) {
        $restepayer=$restepayer-1;
        $piece1++;
}

echo "Montant à payer : $montantpayer  €<br>";
echo "Montant versé : $montantverse €<br>";
echo "Reste à payer : $restepayerD €<br>";
echo "********************************************<br>";
echo "Rendu de monnaie : $billets10 billets de 10 € - $billets5 billets de 5 € - $piece2 pièces de 2 € - $piece1 pièces de 1 €";

// rajouter un if pour les s de billet de 5 et de piece de 2