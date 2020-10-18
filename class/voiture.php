<?php
class Voiture extends Vehicule {

    const NB_PORTES = [3, 5];

    protected int $nbPortes;

    public function __construct(array $data) {
        $this->setImmatriculation($data['immatriculation']);
        $this->setCouleur($data['couleur']);
        $this->setNbPortes($data['nbPortes']);
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
    
    // Nombre de portes
    public function setNbPortes(int $nbPortes) {
        if (in_array($nbPortes, self::NB_PORTES))
            $this->nbPortes = $nbPortes;
    }
    public function getNbPortes() {
        return $this->nbPortes;
    }

    function showInfo() {
        echo "<p>Le véhicule " . $this->getCouleur() . " immatriculé " . $this->getImmatriculation()
            . " comporte " . $this->getNbPortes() . " portes</p>";
    }
}
