<?php
class Personne {
    private $nom;
    private $prenom;
    private $adresse;

    public function __construct(array $pers) {
        $this->setNom($pers['nom']);
        $this->setPrenom($pers['prenom']);
        $this->setAdresse($pers['adresse']);

        // foreach($tableau as $clef => $valeur)
    }

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

    // Adresse
    public function setAdresse(string $adresse) {
        $this->adresse = $adresse;
    }
    public function getAdresse() {
        return $this->adresse;
    }


    function getCoord() {
        echo "<p>" . $this->prenom . " " . $this->nom . " habite " . $this->adresse . "</p>";
    }
}