<?php
if(isset($_POST['id'])){



    $servername = "localhost";
    $username = "root";
    $password = "root";
    $connected = false;

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
            $connected = true;
            echo "Vous etes bien connecté  ".$rep['pseudo']." !!   ";

            $id = $_POST['id'];
            echo "id : " . $id;

            $req = $bdd->query("SELECT * FROM `Last Release` WHERE id = $id");
            $rep = $req->fetch();
            echo ', title : ' . $rep['title'];
            echo ', tome : ' . $rep['tome'];
            


            $file_pointer = "img/nouvautes/" . $rep['title'] . $rep['tome'] . ".png";
            unlink("../" . $file_pointer);
            
            $req = $bdd->query("DELETE FROM `Last Release` WHERE `Last Release`.`id` = $id");
            header('Location: index.php');
        }
    } else{
        header("Location: ../login/");
    }
} else {
    echo "ID non fourni";
}
?>
