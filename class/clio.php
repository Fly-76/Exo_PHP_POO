<?php
class Clio {

    public const PORTES = [3, 5];
    public const COULEUR = [
        "Noir"   => "#000000",
        "Marron" => "#800000",
        "Rouge"  => "#FF0000",
        "Jaune"  => "#FFFF00",
        "Vert"   => "#008000",
        "Bleu"   => "#0000FF",
        "Violet" => "#800080",
        "Blanc"  => "#FFFFFF"
    ];
    public static $prix = 17300.5;

    private int $nombrePortes;
    public function setNombrePortes(int $nombrePortes) {
        $this->nombrePortes = $nombrePortes;
    }
    public function getNombrePortes() {
        return $this->nombrePortes;
    }

    private string $couleur;
    public function setCouleur(string $couleur) {
        // echo $couleur;
        // var_dump(self::COULEUR);
        if (array_key_exists ($couleur, self::COULEUR)) {
            $this->couleur = $couleur;
        } 
    }  
    public function getCouleur() {
        return self::COULEUR[$this->couleur];
    }

    public function __construct(int $nombrePortes, string $couleur) {
        $this->setNombrePortes($nombrePortes);
        $this->setCouleur($couleur);
    }

    function showInfo() {
        echo "<p>"
            . "<br>Nombre de portes : " . $this->getNombrePortes() 
            . "<br>Couleur : " . $this->getCouleur() 
            . "<br>Prix : " . self::$prix . " €"
        . "<p>";
    }
}