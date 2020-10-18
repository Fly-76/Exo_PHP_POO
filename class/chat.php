<?php
class Chat {
    const MAX_NAME_LENGTH = 15;
    const MAX_AGE = 30;
    const MIN_AGE = 0;
    const SEXE = ["male", "femelle"];
    const COULEUR = ["noir", "roux", "gris", "blanc"];

    private ?string $nom;
    private ?int $age;
    private ?string $sexe="";
    private ?string $couleur="";

    // public function __construct(?string $nom, ?int $age, ?string $sexe, ?string $couleur) {
    //     $this->setNom($nom);
    //     $this->setAge($age);
    //     $this->setSexe($sexe);
    //     $this->setCouleur($couleur);
    // }
    
    // now constructor use array as input
    public function __construct(?array $data) {
        $this->setNom($data['nom']);
        $this->setAge($data['age']);
        $this->setSexe($data['sexe']);
        $this->setCouleur($data['couleur']);
    }

    // Nom ne dépasse pas 15 caractères
    public function setNom(?string $nom):Chat {
        if (strlen($nom)<=self::MAX_NAME_LENGTH) 
            $this->nom = $nom;
        return $this;
    }
    public function getNom():string {
        return $this->nom;
    }

    // Age est compris entre 0 et 30
    public function setAge(string $age):Chat {
        if ($age>=self::MIN_AGE && $age<=self::MAX_AGE)
            $this->age = $age;
        return $this;
    }
    public function getAge():int {
        return $this->age;
    }

    // Sexe appartient aux sexes définis dans la constante de classe
    public function setSexe(string $sexe):Chat {
        if (in_array($sexe, self::SEXE))
            $this->sexe = $sexe;
        return $this;
    }
    public function getSexe():string {
        return $this->sexe;
    }

    // Couleur appartient aux couleurs définies dans la constante de classe
    public function setCouleur(string $couleur):Chat {
        if (in_array($couleur, self::COULEUR))
            $this->couleur = $couleur;
        return $this;
    }
    public function getCouleur() {
        return $this->couleur;
    }

    public function showInfo() {
        echo "<p>" 
            . "<br>Nom : " . $this->getNom()
            . "<br>Age : " . $this->getAge() 
            . "<br>Sex : " . $this->getSexe() 
            . "<br>Couleur : ". $this->getCouleur() 
        . "<p>";
    }
}