<?php
class Bus extends Vehicule {

    const MAX_ETAGES = 2;
    protected int $nbEtages;

    public function __construct(array $data) {
        $this->setImmatriculation($data['immatriculation']);
        $this->setCouleur($data['couleur']);
        $this->setNbEtages($data['nbEtages']);
    }
    
    // Immatriculation
    public function setImmatriculation(string $immatriculation) {
        parent::setImmatriculation($immatriculation);
    }
    public function getImmatriculation() {
        return parent::getImmatriculation();
    }

    // Couleur
    public function setCouleur(string $couleur) {
        parent::setCouleur($couleur);
    }
    public function getCouleur() {
        return parent::getCouleur();
    }

    // Nombre d'étages
    public function setNbEtages(int $nbEtages) {
        if ($nbEtages>0 && $nbEtages<=self::MAX_ETAGES) 
            $this->nbEtages = $nbEtages;
    }
    public function getNbEtages() {
        return $this->nbEtages;
    }

    function showInfo() {
        echo "<p>Le véhicule " . $this->getCouleur() . " immatriculé " . $this->getImmatriculation()
            . " comporte " . $this->getNbEtages() . " étages</p>";
    }
}
