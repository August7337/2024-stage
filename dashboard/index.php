<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

</head>
<body>
    

    <div class="header">
        <h1>DASHBOARD</h1>
        <a href="/">SITE PRINCIPALE</a>
    </div>


    <?php

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
            $msg = "Vous etes bien connecté  ".$rep['pseudo']." !!   ";
            echo $msg;
        }
    } else{
        header("Location: ../login/");
    }



    if(isset($_POST['ds']) && $connected){
        $title = $_POST['title'];
        $image = $_FILES["image"]["tmp_name"];
        $release = $_POST['release'];
        $tome = $_POST['tome'];
        $tag1 = $_POST['tag1'];
        $tag2 = $_POST['tag2'];


        $path = "img/nouvautes/$title$tome.png";
        move_uploaded_file($image, "../$path");

        $requete = $bdd->prepare("INSERT INTO `Last Release` VALUES (0, :title, :image, :release, :tome, :tag1, :tag2)");
        $requete->execute(
            array(
                "title" => $title,
                "image" => $path,
                "release" => $release,
                "tome" => $tome,
                "tag1" => $tag1,
                "tag2" => $tag2
            )
        );
        echo "Envoi réussite du tome $tome de $title !   ";
        header('Location:/dashboard/');
        exit();
    }

?>




    <div class="DS">
        <h2>DERNIERES SORTIES</h2>
        <form  method="POST" enctype="multipart/form-data">
            <div class="section">
                <label for="title">Titre</label>
                <input type="text" id="title" name="title" placeholder="..." required>
            </div>
            <div class="section">
                <label for="image">Image</label>
                <input type="file" id="image" name="image" required>
            </div>
            <div class="section">
                <label for="release">Date de sortie</label>
                <input type="text" id="release" name="release" placeholder="..." required>
            </div>
            <div class="section">
                <label for="tome">Numéro du tome</label>
                <input type="number" id="tome" name="tome" placeholder="..." required>
            </div>
            <div class="section">
                <label for="tag1">Categorie 1</label>
                <input type="text" id="tag1" name="tag1" placeholder="..." required>
            </div>
            <div class="section">
                <label for="tag2">Categorie 2</label>
                <input type="text" id="tag2" name="tag2" placeholder="..." required>
            </div>
    
            <input type="submit" value="ENVOYER" name="ds"></input>
            <input type="reset" value="REINITIALISER"></input>
        </form>    
    </div>


<div class="tableau">

<?php
$req = $bdd->query("SELECT * FROM `Last Release`");

echo '<table border="1">';
echo '<tr>';
echo '<th>ID</th>';
echo '<th>Titre</th>';
echo '<th>Image</th>';
echo '<th>Date de sortie</th>';
echo '<th>Numéro du tome</th>';
echo '<th>Categorie 1</th>';
echo '<th>Categorie 2</th>';
echo '<th>Suprimer</th>';
echo '</tr>';

while ($rep = $req->fetch(PDO::FETCH_ASSOC)) {
    echo '<tr>';
    echo '<td>' . htmlspecialchars($rep['id']) . '</td>';
    echo '<td>' . htmlspecialchars($rep['title']) . '</td>';
    echo '<td>' . htmlspecialchars($rep['image']) . '</td>';
    echo '<td>' . htmlspecialchars($rep['releaseDate']) . '</td>';
    echo '<td>' . htmlspecialchars($rep['tome']) . '</td>';
    echo '<td>' . htmlspecialchars($rep['tag1']) . '</td>';
    echo '<td>' . htmlspecialchars($rep['tag2']) . '</td>';
    echo '<td>' . "<form method='POST' action='delete.php'><input type='hidden' name='id' value='" . $rep['id'] . "'/><input type='submit' value='Supprimer'/></form>" . '</td>';
    echo '</tr>';
}

echo '</table>';
?>
</div>
    
</div>

</body>
</html>