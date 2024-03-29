<?php

$servername = "localhost";
$username = "root";
$password = "root";

try {
    $bdd = new PDO("mysql:host=$servername;dbname=utilisateurs", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOEception $e) {
    echo "Erreur : ".$e->getMessage();    
}

if(isset($_POST['ok'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $pseudo = $_POST['pseudo'];
    $mdp = $_POST['pass'];
    $email = $_POST['email'];

    $requete = $bdd->prepare("INSERT INTO users VALUES (0, :pseudo, :nom, :prenom, :mdp, :email, '')");
    $requete->execute(
        array(
            "pseudo" => $pseudo,
            "nom" => $nom,
            "prenom" => $prenom,
            "mdp" => $mdp,
            "email" => $email
        )
    );
    echo "Inscription réussite !";
}

?>