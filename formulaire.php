<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire PHP</title>
</head>

<body>
    <form method="POST" action="target.php">
        <p>
            <label for="prenom">Entrez votre prénom :</label>
            <input type="text" name="prenom" />
        </p>
        <p>
            <label for="nom">Entrez votre nom :</label>
            <input type="text" name="nom" />
        </p>
        <p>
            <label for="pseudo">Entrez votre pseudo :</label>
            <input type="text" name="pseudo" />
        </p>
        <p>
            <input type="submit" value="Envoyer" />
        </p>

    </form>

</body>

</html>