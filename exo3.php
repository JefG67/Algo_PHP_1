<h1>Exercice 3</h1>

<p>Soit la phrase << Notre formation DL commence aujourd'hui >> .<br>
Ecrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase </p>

<h2>Résultat</h2>

<?php
echo "Notre formation DL commence aujourd'hui<br>";
$str = "Notre formation DL commence aujourd'hui";
echo str_replace("aujourd'hui", "demain", $str);
?>