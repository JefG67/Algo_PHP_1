<?php

class Personne {
    private $nom;
    private $prenom;
    private $dateNaissance;

    public function __construct($nom, $prenom, $dateNaissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getDateNaissance() {
        return $this->dateNaissance;
    }

    public function calculerAge() {
        $dateNaissance = new DateTime($this->dateNaissance);
        $aujourdHui = new DateTime();
        $difference = $aujourdHui->diff($dateNaissance);
        return $difference->y; // Années
    }
}

$p1 = new Personne("DUPONT", "Michel", "1980-02-19");
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");

echo $p1->getPrenom() . " " . $p1->getNom() . " a " . $p1->calculerAge() . " ans\n</br>";
echo $p2->getPrenom() . " " . $p2->getNom() . " a " . $p2->calculerAge() . " ans\n";

?>
