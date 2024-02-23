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

$email = $_COOKIE['email'];
$token = $_COOKIE['token'];

if ($token) {
    $req = $bdd->query("SELECT * FROM users WHERE email = '$email' AND token = '$token' ");
    $rep = $req->fetch();

    if ($rep['pseudo'] != false) {
        echo "Vous etes bien connecté ".$rep['pseudo']." !";
    }
} else{
    header("Location:login.php");
}

?>