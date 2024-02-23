<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection</title>

    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
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

        $token =bin2hex(random_bytes(64));
        $req = $bdd->query("SELECT * FROM users WHERE email = '$email' AND mdp = '$password' ");
        $rep = $req->fetch();
        if($rep['id'] != false){
            $bdd->exec("UPDATE users SET token = '$token' WHERE email = '$email' and mdp = '$password' ");
            setcookie("token", $token, time() + 3600, '/');
            setcookie("email", $email, time() + 3600, '/');
            header("Location: ../dashboard");
            exit();
        }
        else{
            $error_msg = "Email ou mdp incorrect !";
        }
    }
}
?>

    <div class="login">
        <div class="card">
            <h1>CONNECTION</h1>
            <form action="" method="POST">
                <div class="section">
                    <label for="email">E-mail</label>
                    <input type="text" id="email" name="email" placeholder="Entrez votre e-mail..." required>
                </div>
                <div class="section">
                    <label for="password">Mots de passe</label>
                    <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe..." required>
                </div>
                <input type="submit" value="SE CONNECTER" name="ok"></input>
            </form>
        </div>
    </div>

    <?php
    if($error_msg){

        ?>
            <p><?php echo $error_msg; ?></p>
        <?php

    }
    ?>

</body>
</html>