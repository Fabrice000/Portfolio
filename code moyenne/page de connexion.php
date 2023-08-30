<?php
// connexion a la base de donnee
$servername = "localhost";
$username = "root";
$password = "carlos";
$dbname = "calculmoyenne"
$conn = new mysqli($servername, $username, $password, $dbname);

// Verification de la connection
if ($conn->connect_error){
    die("Connection echouer:".
    $conn->connect_error);

}

// Recuperation des donnees sur l'utilisateur
$nom = $_POST["mom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$mot_de_passe = $_POST["mdp"];
$telephone = $_POST["telephone"];
$birthday = $_POST["age"];
$classe = $_POST["classe"];

// enregistrement des utilisateurs
$sql = "INSERT INTO utilisateurs (nom, prenom, email, mot_de_passe, age, classe)
VALUES ('$nom', '$prenom', '$email', '$mot_de_passe', '$birthday', '$classe')";

if ($conn->query($sql)===TRUE) {
    echo "L'utilisateur a été enregistrer avec succès! ";
}
else {
    echo "Erreur:".$sql."<br>".$conn->error;
}
// Fermeture de la connection à la base de données
$conn->close();