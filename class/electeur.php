<?php
class Electeur extends Person{

    private string $bureau;
    private $voteStatus=false;

    public function __construct(array $pers) {
        $this->setNom($pers['nom']);
        $this->setPrenom($pers['prenom']);
        $this->setBureau($pers['bureau']);
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

    // Bureau
    public function setBureau(string $bureau) {
        $this->bureau = $bureau;
    }
    public function getBureau() {
        return $this->bureau;
    }

    function vote() {
        echo "<p>Bureau de vote : " . $this->getBureau() . "</p>";
        if ($this->voteStatus)
            echo "<p>Vous ne pouvez voter qu'une seule foi</p>";
        else {
            $this->voteStatus = true;
            echo "<p>" . $this->getPrenom() . " " . $this->getNom() . " a voté</p>";
        }
    }
}
