<?php

/* Creation de la fonction pour inserer les objets dans la bdd */

function insert_data_user($user)
{
    $pdo = new PDO("mysql:host=localhost;dbname=;port=3306", "root", "");

    $serializedObject = serialize($user);

    $stmt = $pdo->prepare("INSERT INTO  (data) VALUES (?)");

    $stmt->execute(array($serializedObject));
}

?>