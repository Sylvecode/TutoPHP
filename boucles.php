<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les boucles</title>
</head>

<body>
    <?php

    $x = 1;

    /*while ($x <= 10) {
        echo 'Ceci est le nombre : ' . $x . '.<br/>';
        $x++; // Correspond à $x = $x+1
    }

    do {
        echo 'Ceci est le nombre : ' . $x . '.</br>';
        $x++;
    }
    while ($x <= 0);*/

    for ($x = 1; $x <= 10; $x++) {
        echo 'Ceci est le nombre : ' . $x . '.</br>';
    }

    for ($x = 10; $x >= 1; $x--) {
        echo 'Ceci est le nombre : ' . $x . '.</br>';
    }







    ?>

</body>

</html>