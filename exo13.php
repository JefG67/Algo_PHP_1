<h1> Exercice 13 </h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de 
coefficient). Elle devra être affichée avec 2 décimales.</p>

<h2>Résultat</h2>

<?php

$notes = [10,12,8,19,3,16,11,13,9];


function calculerMoyenne(array $notes) : float {
       $nbnote = count($notes);  
       $sommenote = array_sum($notes);
       $moyenne = round($sommenote / $nbnote,2 );

       return $moyenne;
}

echo "Les notes obtenues par l'élève son :"; 
foreach($notes as $note){
    echo " $note";
}
echo "<br>";

echo "Sa moyenne génèral est donc de : " .calculerMoyenne($notes);
         