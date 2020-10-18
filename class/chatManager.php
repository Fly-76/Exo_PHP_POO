<?php

class ChatManager {
  private $db;

  public function __construct() {
    $this->db = new PDO('mysql:host=localhost;dbname=db_chat', 'chatAdmin', 'pwd');
  }

  public function getChats():array {
    $query = $this->db->query("SELECT * FROM chat");
    $chats = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach ($chats as $key => $value) {
        $chats[$key] = new Chat($value);
        // echo "<br>";
        // var_dump($value);
    }
    return $chats;
  }

  public function addChat(Chat $chat):bool {
    $query = $this->db->prepare(
      "INSERT INTO chat
      VALUES (null, :nom, :age, :sexe, :couleur)"
    );
    $result = $query->execute([
        "nom" => $chat->getNom(),
        "age" => $chat->getAge(),
        "sexe" => $chat->getSexe(),
        "couleur" => $chat->getCouleur() 
    ]);
    return $result;
  }

}
