<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome</p>

<h2>Résultat</h2>

<?php


  $str = 'Engage le jeu que je le gagne';
  echo strtolower($str);
  $replaced = str_replace(' ', '', $str);
  echo $replaced;
  echo strrev("Engage le jeu que je le gagne");

if($phrase2 == $reverse)
{
    echo "La phrase « $phrase1 » est palindrome";
}
else
{
    echo"La phrase « $phrase1 » n'est pas palindrome";
}
