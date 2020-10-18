<?php
/***********************************************************************
* Exercices POO PHP https://thomgo.github.io/Exercices/backend/php/poo/
*
***********************************************************************/
function classLoader($class)
{
  require 'class/' . $class . '.php';
}
spl_autoload_register('classLoader');

echo "<center><h1>Exercices POO en PHP</h1></center>";

/***********************************************************************
* Exercice 1 : travailler les propriétés et méthodes
* https://thomgo.github.io/Exercices/backend/php/poo/exo1/exo1.html
*
* Exercice 2 : utiliser le constructeur d’objets
* https://thomgo.github.io/Exercices/backend/php/poo/exo2/exo2.html
*
*/
echo "<hr><h2><u>Exercices 1 et 2 : travailler les propriétés et méthodes, utiliser le constructeur d’objets</u></h1>";
echo "<p>";
  $city1 = new City("Rouen", 76);
  $city1->showLocation();
echo "</p>";

/************************************************************************
* Exercice 3 : pratiquer les objets
* https://thomgo.github.io/Exercices/backend/php/poo/exo3/exo3.html
*
*/
echo "<hr><h2><u>Exercice 3 : pratiquer les objets</u></h1>";
echo "<p>";
  $perso1 = new Personne(array (
    "nom" => "Neige",
    "prenom" => "Blanche",
    "adresse" => "impasse des sept nains"
    ));
  $perso1->getCoord();
echo "</p>";

/************************************************************************
* Exercice 4 : la poo appliquée à un formulaire
* https://thomgo.github.io/Exercices/backend/php/poo/exo4/exo4.html
*
*/
echo "<hr><h2><u>Exercice 4 : la poo appliquée à un formulaire</u></h1>";
echo "<p>";
  $form = new Form("");
  $form->setText("Nom");
  $form->setText("Prenom");
  $form->setSubmit("profil", "Envoyer");
  $form->showForm();
echo "</p>";

/************************************************************************
* Exercice 5 : L’opérateur de résolution de portée
* https://thomgo.github.io/Exercices/backend/php/poo/exo5/exo5.html
*
*/
echo "<hr><h2><u>Exercice 5 : L’opérateur de résolution de portée</u></h1>";
echo "<p>";
  $clio1 = new Clio(2, "Rouge");
  $clio1->setCouleur("elephant");
  $clio1->showInfo();
echo "</p>";

/************************************************************************
* Exercice 6 : Gérer ses objets en base de données
* https://thomgo.github.io/Exercices/backend/php/poo/exo6/exo6.html
*
*/
echo "<hr><h2><u>Exercice 6 : Gérer ses objets en base de données</u></h1>";
echo "<p>";
  // Etape 1 : 
  // definition de l'objet chat, get et set des attributs
  //$chat1 = new Chat("Félix", 4, "male", "blanc");
  $chat1 = new Chat([
    'nom' => "Félix",
    'age' => 4,
    'sexe' => "male",
    'couleur' => "blanc"
    ]);

  $chat1->showInfo();

  // Etape 2 : ajout du manager
  $chatManager = new ChatManager();
  //$chatManager->addChat($chat1);

  $chats = $chatManager->getChats();
  //var_dump($chats);

  // Etape 3 : ajout de la vue
  if(isset($_POST["newChat"])) {
    $newchat = new Chat($_POST);
    $chatManager->addChat($newchat);
  }
  include "class/chatView.php";


echo "</p>";

/************************************************************************
* Exercice 7 : Héritage au travers d’un formulaire
* https://thomgo.github.io/Exercices/backend/php/poo/exo7/exo7.html
*
*/
echo "<hr><h2><u>Exercice 7 : Héritage au travers d’un formulaire</u></h1>";
echo "<p>";
  $form = new UpgradedForm("");
  $form->setText("Nom");
  $form->setText("Prenom");
  $form->setCheckBox("Majeur");
  $form->setRadio("Genre", ["Homme", "Femme"]);
  $form->setSubmit("profil2", "Envoyer");
  $form->showForm();
echo "</p>";

/************************************************************************
* Exercice 8 : Héritage la suite
* https://thomgo.github.io/Exercices/backend/php/poo/exo8/exo8.html
*
*/
echo "<hr><h2><u>Exercice 8 : Héritage la suite</u></h1>";
echo "<p>";
  $perso1 = new Client(array (
    "nom" => "King comtesse de Lovelace",
    "prenom" => "Ada Augusta",
    "adresse" => "St James's Square, London"
    ));
    $perso1->getCoord();
echo "</p>";
echo "<p>";
  $perso1 = new Electeur(array (
    "nom" => "King comtesse de Lovelace",
    "prenom" => "Ada Augusta",
    "bureau" => "London"
    ));
    $perso1->vote();
    $perso1->vote();
echo "</p>";

/************************************************************************
* Exercice 9 : Héritage le retour
* https://thomgo.github.io/Exercices/backend/php/poo/exo9/exo9.html
*
*/
echo "<hr><h2><u>Exercice 9 : Héritage le retour</u></h1>";
echo "<p>";
  $bus = new Bus(array (
    'immatriculation' => '2020YZ76',
    'couleur' => 'bleu',
    'nbEtages' => 1
  ));
  $voiture = new Voiture(array (
    'immatriculation' => '1234PP89',
    'couleur' => 'jaune',
    'nbPortes' => 3
  ));
  $bus->showInfo();
  $voiture->showInfo();
echo "</p>";
echo "<hr>";