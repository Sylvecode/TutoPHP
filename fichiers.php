<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les fichiers en PhP</title>
</head>

<body>
    <?php

    $definition = fopen("definition-php.txt", "r+");
    $affichagedef = fread($definition, 1000);
    echo $affichagedef;
    fclose($definition);

    ?>

</body>

</html>