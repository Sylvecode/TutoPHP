<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonctions PHP</title>
</head>

<body>
    <?php
    function Bonjour()
    {
        echo "Bonjour à tous";
    }

    Bonjour();

    function BonjourUtilisateur($prenom)
    {
        echo 'Bonjour ' . $prenom . ' !';
    }

    BonjourUtilisateur('Pierre');

    function NomAge($prenom, $age)
    {
        echo $prenom . ' a' . $age . 'ans';
    }

    NomAge('Pierre', 24);

    function DireBonjour()
    {
        return "Bonjour";
    }

    function DireBonsoir()
    {
        echo "Bonsoir";
    }

    $bonjour = DireBonjour(); // la fonction DireBonjour retourne la valeur "Bonjour" qui est stockée dans la variable $bonjour
    $bonsoir = DireBonsoir(); // la fonction DireBonsoir echo la valeur "Bonsoir" immédiatement mais cette fonction ne retourne aucune valeur
    
    echo $bonjour;
    echo $bonsoir;

    ?>

</body>

</html>