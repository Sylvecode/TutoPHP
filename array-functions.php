<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonctions PHP pour Tableaux</title>
</head>

<body>
    <?php
    // Déclaration d'un tableau associatif contenant des voitures et leurs modèles
    $voitures = array(
        "Citroen" => "DS3",
        "Renaullt" => "Clio",
        "Peugeot" => "306",
        "Peugeot2" => 306
    );

    // array_keys: Retourne un tableau avec les clés associées à la valeur "306".
    // Le troisième argument (true) permet de faire une comparaison stricte (type inclus).
    print_r(array_keys($voitures, "306", true));

    // Déclaration d'un autre tableau associatif pour les loisirs
    $loisirs = array(
        "sport" => "trail",
        "voyage" => "Ecosse",
        "musique" => "Guitare"
    );

    // array_values: Retourne un tableau indexé avec toutes les valeurs du tableau associatif $loisirs.
    echo "<pre>";
    print_r(array_values($loisirs));
    echo "</pre>";

    // array_key_exists: Vérifie si la clé "Citroen" existe dans le tableau $voitures.
    if (array_key_exists("Citroen", $voitures)) {
        echo "La clef existe";
    } else {
        echo "La clef n'existe pas";
    }

    // array_search: Cherche la valeur "DS3" dans le tableau $voitures et retourne la clé associée.
    echo array_search("DS3", $voitures);

    // Déclaration d'un tableau simple contenant des prénoms
    $prenoms = array("Pierre", "Paul", "Jacques");

    // in_array: Vérifie si "Pierre" existe dans le tableau $prenoms.
    // Le troisième argument (true) effectue une comparaison stricte.
    if (in_array("Pierre", $prenoms, true)) {
        echo "Prénom trouvé";
    } else {
        echo "Prénom non trouvé";
    }

    // Déclaration d'un tableau contenant des sports
    $sport = array("natation", "velo", "course");

    // count: Compte le nombre d'éléments dans le tableau $sport.
    echo count($sport);

    // Déclaration d'un tableau avec des valeurs répétées
    $compter = array("A", "velo", "natation", "velo", "A");

    // array_count_values: Retourne un tableau où chaque clé est une valeur unique du tableau,
    // et chaque valeur est le nombre de fois que cette clé apparaît dans le tableau d'origine.
    print_r(array_count_values($compter));

    // Déclaration de deux tableaux associatifs pour comparer leurs différences
    $compare = array("a" => "bleu", "b" => "vert", "c" => "jaune");
    $comparant = array("a" => "bleu", "b" => "vert");

    // array_diff_assoc: Compare les deux tableaux et retourne les différences (en tenant compte des clés).
    print_r(array_diff_assoc($compare, $comparant));

    // array_diff_key: Retourne les différences entre les deux tableaux en ne comparant que les clés.
    print_r(array_diff_key($compare, $comparant));

    // array_diff: Compare les tableaux et retourne les différences basées uniquement sur les valeurs.
    print_r(array_diff($compare, $comparant));

    // array_intersect_assoc: Retourne les éléments communs aux deux tableaux, en tenant compte des clés et des valeurs.
    print_r(array_intersect_assoc($compare, $comparant));

    // array_intersect: Retourne les éléments communs entre les deux tableaux basés uniquement sur les valeurs.
    print_r(array_intersect($compare, $comparant));

    // array_fill: Crée un tableau de 5 éléments, tous égaux à "vert", et commence à l'index 0.
    print_r(array_fill(0, 5, "vert"));

    // Déclaration d'un tableau de clés
    $clefs = array("a", "b", "c", "d");

    // array_fill_keys: Crée un tableau associatif avec les clés définies dans $clefs et leur associe la valeur "bleu".
    $remplir = array_fill_keys($clefs, "bleu");
    print_r($remplir);

    // Déclaration d'un tableau de couleurs
    $couleur = array("bleu", "vert");

    // array_push: Ajoute les éléments "rouge" et "jaune" à la fin du tableau $couleur.
    array_push($couleur, "rouge", "jaune");
    print_r($couleur);

    // array_pop: Supprime le dernier élément du tableau $couleur.
    array_pop($couleur);
    print_r($couleur);

    // array_unshift: Ajoute "jaune" et "violet" au début du tableau $couleur.
    array_unshift($couleur, "jaune", "violet");
    print_r($couleur);

    // array_shift: Supprime le premier élément du tableau $couleur.
    array_shift($couleur);
    print_r($couleur);

    // Déclaration de deux tableaux associatifs pour utiliser array_splice
    $couleur1 = array("a" => "bleu", "b" => "vert", "c" => "jaune");
    $couleur2 = array("a" => "rouge", "b" => "violet");

    // array_splice: Supprime des éléments du tableau $couleur1 à partir de l'index 1.
    // Les éléments supprimés sont retournés et le tableau original est modifié.
    print_r(array_splice($couleur1, 1));
    print_r($couleur1);

    // Déclaration de deux tableaux simples
    $alpha = array("a", "b");
    $beta = array("c", "d");

    // array_merge: Fusionne les deux tableaux $alpha et $beta en un seul.
    $omega = array_merge($alpha, $beta);
    print_r($omega);

    // array_combine: Crée un tableau associatif en utilisant les éléments de $alpha comme clés et ceux de $beta comme valeurs.
    $teta = array_combine($alpha, $beta);
    print_r($teta);

    // Déclaration d'un tableau contenant des prénoms, avec des doublons
    $prenomss = array("Pierre", "Paul", "Pierre", "Jacques");

    // array_unique: Supprime les doublons du tableau $prenomss.
    print_r(array_unique($prenomss));

    // rsort: Trie le tableau $prenomss par ordre décroissant (en fonction des valeurs).
    rsort($prenomss);
    print_r($prenomss);

    // Déclaration d'un tableau associatif avec des âges
    $agenom = array("Pierre" => 24, "Paul" => 27, "Jean" => 34);

    // ksort: Trie le tableau par les clés en ordre croissant.
    ksort($agenom);
    print_r($agenom);

    // krsort: Trie le tableau par les clés en ordre décroissant.
    krsort($agenom);

    // asort: Trie le tableau par les valeurs en ordre croissant.
    asort($agenom);

    // arsort: Trie le tableau par les valeurs en ordre décroissant.
    arsort($agenom);
    ?>
</body>

</html>