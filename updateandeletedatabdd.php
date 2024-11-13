<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maj et suppression de données dans une BDD</title>
</head>

<body>
    <?php
    $serveur = "localhost";
    $login = "wordpress";
    $pass = "wordpress";

    try {
        $connexion = new PDO("mysql:host=$serveur;dbname=testpierregiraud2", $login, $pass);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //$modif = "UPDATE Visiteurs SET prenom='Anne' WHERE id=1";
        $suppr = "DELETE FROM Visiteurs WHERE id=1";
        //$addcolumn = "ALTER TABLE ADD";
        //$supprtable = "DROP TABLE Visiteurs";
    
        $requete = $connexion->prepare($suppr);
        $requete->execute();
        echo "Informations mise à jour";
    } catch (PDOException $e) {
        echo 'Echec : ' . $e->getMessage();
    }

    ?>

</body>

</html>