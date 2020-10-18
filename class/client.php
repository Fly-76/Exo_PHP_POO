<?php
class Client extends Person{

    private string $adresse;

    public function __construct(array $pers) {
        $this->setNom($pers['nom']);
        $this->setPrenom($pers['prenom']);
        $this->setAdresse($pers['adresse']);

    }

    // Nom
    public function setNom(string $nom) {
        parent::setNom($nom);
    }
    public function getNom() {
        return parent::getNom();
    }

    // Prenom
    public function setPrenom(string $prenom) {
        parent::setPrenom($prenom);
    }
    public function getPrenom() {
        return parent::getPrenom();
    }

    // Adresse
    public function setAdresse(string $adresse) {
        $this->adresse = $adresse;
    }
    public function getAdresse() {
        return $this->adresse;
    }

    function getCoord() {
        echo "<p>" . $this->getPrenom() . " " . $this->getNom() . " habite " . $this->getAdresse() . "</p>";
    }
}
