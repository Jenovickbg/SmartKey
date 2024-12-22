<?php

$UIDresult = htmlspecialchars($_POST["UIDresult"], ENT_QUOTES);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  try {

    $bdd = new PDO('mysql:host=localhost;dbname=nodemcu_rfidrc522_mysql;charset=utf8', 'root', '');


    $insertUser = $bdd->prepare('INSERT INTO `nodemcu_rfidrc522_mysql`.`operation` 
    (id_agent, prenom, nom, departement, mobile, date_ouv)
      SELECT id, prenom, nom, departement, mobile, NOW()
      FROM nodemcu_rfidrc522_mysql.utilisateurs WHERE id = :UIDresult');


    $insertUser->bindParam(':UIDresult', $UIDresult);


    $insertUser->execute();


    if ($insertUser->rowCount() > 0) {

      $response = array("success" => true, "message" => "UID insere avec success");
      http_response_code(200);
      header('Content-Type: application/json');
      echo json_encode($response);
      exit();
    } else {
      $insertUser = $bdd->prepare('INSERT INTO `nodemcu_rfidrc522_mysql`.`operation`
      (id_agent, prenom, nom, departement, mobile, date_ouv)
      VALUES ( :UIDresult, " Non autorisé ", " Non autorisé ", "Non autorisé ", " Non autorisé ",NOW())');
      $insertUser->bindParam(':UIDresult', $UIDresult);
      $insertUser->execute();
      http_response_code(500);
      header('Content-Type: application/json');
      echo json_encode(array("error" => "Une erreur s'est produite lors de l'insertion de l'UID non autorisé "));
      exit();
    }
  } catch (PDOException $e) {

    http_response_code(500);
    header('Content-Type: application/json');
    echo json_encode(array("error" => "Erreur de connexion à la base de données : " . $e->getMessage()));
    exit();
  }
} else {

  http_response_code(405);
  header('Content-Type: application/json');
  echo json_encode(array("error" => "Methode non autorisee : Seules les requetes POST sont acceptees"));
  exit();
}
