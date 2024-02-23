<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <style>
        input{
            margin-bottom: 10px
        }
    </style>
</head>
<body>
    <form method="POST" action="traitement.php">
    <label for="nom">Voter nom</label>
        <input type="text" id="nom" name="nom" placeholder="Entrez votre nom..." required>
        <br>
        <label for="prenom">Voter prénom</label>
        <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom..." >
        <br>
        <label for="pseudo">Voter pseudo</label>
        <input type="text" id="pseudo" name="pseudo" placeholder="Entrez votre pseudo..." >
        <br>
        <label for="email">Voter e-mail</label>
        <input type="text" id="email" name="email" placeholder="Entrez votre email..." >
        <br>
        <label for="pass">Voter pass</label>
        <input type="password" id="pass" name="pass" placeholder="Entrez votre pass..." >
        <br>
        <input type="submit" value="M'inscrire" name="ok" >
    </form>
</body>
</html>