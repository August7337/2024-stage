<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <style>
        body{
            padding: 20px;
        }

        div{
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <form action="">
        <div>
            <label for="email">Email</label>
            <input type="text" id="email">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" id="password">
        </div>
        <button onclick="send(event)">Envoyer</button>
    </form>
    <div id="response"></div>

    <script>
        const send = async (event) => {
            event.preventDefault();
            let mail = document.querySelector("#email").value;
            let pass = document.querySelector("#password").value;
            console.log(mail, pass);
            const req = await fetch('traitement.php', {
                method: "POST",
                body: JSON.stringify({
                    mail: mail,
                    pass : pass
                }),
                header: {
                    "Content-Type": "application/json"
                }
            });
            const res = await req.json();
            if (res.response) {
                document.querySelector("#response").innerHTML = "Valide";
            } else{
                document.querySelector("#response").innerHTML = "Non valide";
            }
        }
    </script>

</body>
</html>