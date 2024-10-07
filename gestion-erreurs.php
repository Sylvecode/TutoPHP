<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des erreurs et exceptions en PhP</title>
</head>

<body>
    <?php

    function Division($x, $y)
    {
        if ($y == 0) {
            throw new Exception("Division par zéro impossible");
        }
        return $x / $y;
    }

    try {
        echo Division(2, 4);
        echo Division(2, 0);
    } catch (Exception $e) {
        echo 'Message d\'erreur : ' . $e->getMessage();
    }


    ?>

</body>

</html>