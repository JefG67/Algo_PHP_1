<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge<p>

<h2>Résultat</h2>

<?php

$age = 10;
if(gettype($age) == "double" || gettype($age) == "integer" ) {
    if($age >= 6 || $age <= 7){
        $resultat = "Poussin";
    }elseif($age >= 8 || $age <= 9){    
        $resultat = "Pupille";
    }elseif($age >= 10 || $age <= 11){ 
        $resultat = "Minime";
    }elseif($age >= 12){
        $resultat = "Cadet";
    }else {$resultat = "Catégorie non gérée";
    }
}
echo "L’enfant qui a $age ans est : $resultat<br>";