<?php
abstract class Vehicule {
    protected string $immatriculation;
    protected string $couleur;

    // Immatriculation
    public function setImmatriculation(string $immatriculation) {
        $this->immatriculation = $immatriculation;
    }
    public function getImmatriculation() {
        return $this->immatriculation;
    }

    // Couleur
    public function setCouleur(string $couleur) {
        $this->couleur = $couleur;
    }
    public function getCouleur() {
        return $this->couleur;
    }

    abstract function showInfo();
}