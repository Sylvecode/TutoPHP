<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtres PHP</title>
</head>

<body>
    <?php
    $url1 = "http://piééerre-giraud.fr";

    $newurl = filter_var($url1, FILTER_SANITIZE_URL);
    if (!filter_var($newurl, FILTER_VALIDATE_URL) === false) {
        if ($newurl != $url1) {
            echo 'L\'url ' . $url1 . ' a été modifié en ' . $newurl . ' afin de la rendre valide<br/>';
        } else {
            echo 'url valide';
        }
    } else {
        echo 'url non valide';
    }








    ?>

</body>

</html>