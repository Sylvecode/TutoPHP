<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertion en bdd</title>
</head>

<body>
    <?php
    $serveur = "localhost";
    $login = "wordpress";
    $pass = "wordpress";

    try {
        $connexion = new PDO("mysql:host=$serveur;dbname=testpierregiraud2", $login, $pass);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $requete = $connexion->prepare(
            "INSERT INTO Visiteurs(nom,prenom,email)
            VALUES(:nom, :prenom, :email)"
        );

        $requete->bindParam(':nom', $nom);
        $requete->bindParam(':prenom', $prenom);
        $requete->bindParam(':email', $email);

        $nom = "Astier";
        $prenom = "Alexandre";
        $email = "alex.Astier@gmail.com";
        $requete->execute();

        echo "Valeurs bien insérées";

    } catch (PDOException $e) {
        echo 'Echec : ' . $e->getMessage();
    }











    ?>

</body>

</html>