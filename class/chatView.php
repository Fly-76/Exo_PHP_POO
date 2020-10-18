<h2>Liste des Chats</h2>
<ul>
    <?php
    foreach($chats as $chat) {
        // var_dump($chat);
        echo "<li>"
            . "Nom : " . $chat->getNom()
            . " | Age : " . $chat->getAge() 
            // . " | Sexe : " . $chat->getSexe() 
            // . " | Couleur : ". $chat->getCouleur() 
            ."</li>";
    }
    ?>
</ul>

<h2>Nouveau chat</h2>
<form action="" method="post">
    <div class="">
        Nom <input type="text" name="nom" value="" placeholder="Nom">
    </div>
    <div class="">
        Age <input type="number" name="age" placeholder="Age">
    </div>
    <div class="">
        Sexe <input type="text" name="sexe">
    </div>
    <div class="">
        Couleur <input type="text" name="couleur" placeholder="Couleur">
    </div>
    <div class="">
        <input type="submit" name="newChat" value="Enregistrer">
    </div>
</form>
