<h1> Exercice 12 </h1>

<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée 
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue 
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)<br>
Exemple : tableau ➔ Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG </p>


<h2>Résultat</h2>

<?php


$person = [ "Mickaël"=>"Salut","Virgile"=>"Hola","Marie-Claire"=>"Hello" ];

foreach($person as $prénom => $mot) { //pas besoin de cree 2 nouvelle variable $rénom et $mot
    echo "$mot $prénom <br>";         
}


ksort($person);  //trier sur la clé (A à Z) sachant que la clé ici c'est le mot
                // et la valeur ici c'est le prénom
echo "<br>";

foreach($person as $prénom => $mot) {
    echo "$mot $prénom <br>";
}
