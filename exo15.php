<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.</br>
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ; </br>
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;</p>


<h2> Resultat </h2>

<?php


class personne {
    public string $nom;
    public string $prenom;
    public string $datenaissance;

public function __construct(string $nom, string $prenom, string $datenaissance){
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->datenaissance = $datenaissance;
}

public function getnom() {
    return $this->nom;
}
public function getprenom() {
    return $this->prenom;
}

public function getdatenaissance() {
    return $this->datenaissance;
}

public function calculage () {
        $datenaissance = new DateTime($this->datenaissance);
        $dateaujourdhui = new DateTime();
        $agedif = $dateNaissance->diff($dateaujourdhui);
        return $agedif->y;
    }
public function __toString() {
        return $this-> getnom().''.$this-> getprenom().''.$this-> calculage() . " ans";
    }

}

$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;

echo $p1;
echo $p2;