<?php
abstract class Person {
    protected $nom;
    protected $prenom;

    // Nom
    public function setNom(string $nom) {
        $this->nom = $nom;
    }
    public function getNom() {
        return $this->nom;
    }

    // Prenom
    public function setPrenom(string $prenom) {
        $this->prenom = $prenom;
    }
    public function getPrenom() {
        return $this->prenom;
    }
}