<h1>Exercice 2</h1>

<p>Soit la phrase << Notre formation DL commence aujourd'hui >> .<br>
Ecrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase </p>

<h2>Résultat</h2>

<?php

$phrase = "Notre formation DL commence aujourd'hui";
$nbMots = str_word_count($phrase);
echo "La phrase << $phrase >> contient $nbMots mots<br>";