<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constantes</title>
</head>

<body>
    <?php

    // La valeur d'une constante est... constante (exception : constantes "magiques")
    // Le nom des constantes est sensible à la casse
    // Nom des constantes magique est insensible à la casse mais majuscule par convention
    // Par convention, on écrit les constantes en majuscules
    // Le nom d'une constante commence soit par un underscore soit par une lettre
    // constante peut être définie n'importe ou et sera accéssible depuis n'importe ou
    
    define("BIENVENUE", "Bienvenue sur mon site !");
    echo BIENVENUE;

    $a = "Bonjour";
    define("NOMBRE", 4);

    function portee()
    {
        //echo $a;
        echo NOMBRE;

        echo "<br/>";

        $b = 36;
        echo $b;
    }

    portee();

    /*
    Constantes magiques
        __FILE__
        __DIR__
        __FUNCTION__
        __LINE__

        __CLASS__
        __METHOD__
        __NAMESPACE__

    */

    echo __LINE__ . '<br/>';

    function test()
    {
        echo __FUNCTION__ . '<br/>';
    }

    test();

    echo __FILE__ . '<br/>';
    echo __DIR__ . '<br/>';
    echo __LINE__;








    ?>
</body>

</html>