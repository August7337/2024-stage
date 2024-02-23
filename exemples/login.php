<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    
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



    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST['email'];
        $password = $_POST['password'];
        if($email != "" && $password != ""){

            $token =bin2hex(random_bytes(32));
            $req = $bdd->query("SELECT * FROM users WHERE email = '$email' AND mdp = '$password' ");
            $rep = $req->fetch();
            if($rep['id'] != false){
                $bdd->exec("UPDATE users SET token = '$token' WHERE email = '$email' and mdp = '$password' ");
                setcookie("token", $token, time() + 3600);
                setcookie("email", $email, time() + 3600);
                header("Location: client.php");
                exit();
            }
            else{
                $error_msg = "Email ou mdp incorrect !";
            }
        }
    }
    ?>

    <form method="POST" action="">
        <label for="email">Email</label>
        <input type="email" placeholder="Entrez votre e-mail..." id="email" name="email" required>

        <label for="password">Mot de passe</label>
        <input type="password" placeholder="Entrez votre e-mail..." id="password" name="password" required>
        <input type="submit" name="ok" value="login">
    </form>

    <?php
    if($error_msg){

        ?>
            <p><?php echo $error_msg; ?></p>
        <?php

    }
    ?>

</body>
</html>