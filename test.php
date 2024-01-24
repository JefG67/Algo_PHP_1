<?php
Class Ordinateur{
private $marque;
private $cpuClock;
private static $nbPostes = 0;//attribut statique
public function __construct($data){
$this->marque = $data[0];
$this->cpuClock = $data[1];
self::$nbPostes++;//le compteur est incrémenté
}
public function setMarque($marque){
 $this->marque = $marque;
}
public function setCpuClock($speed){
$this->cpuClock = $speed;
}
public static function combien(){//méthode statique
echo self::$nbPostes."<br/>";
}
}
Ordinateur::combien();//affiche 0
$poste = new Ordinateur(array("Samsung", 2.4));
$poste2 = new Ordinateur(array("Hitachi", 1.6));
Ordinateur::combien();//affiche 2