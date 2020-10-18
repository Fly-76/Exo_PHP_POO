<?php
class City {
    private $nom;
    private $departement;

    public function __construct(string $nom="", int $département=0) {
        $this->setNom($nom);
        $this->setDepartement($département);
    }

    // Nom
    public function setNom(string $nom) {
        $this->nom = $nom;
    }
    public function getNom() {
        return $this->nom;
    }
    // Département
    public function setDepartement(string $departement) {
        $this->departement = $departement;
    }        
    public function getDepartement() {
        return $this->departement;
    }

    function showLocation() {
        echo "<p>la ville " . $this->nom . " est dans le département " . $this->departement . "<p>";
    }
}