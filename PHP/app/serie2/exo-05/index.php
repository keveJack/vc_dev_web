<?php

// Tableau de films avec leurs réalisateurs
$films = [
    "The Shawshank Redemption" => "Frank Darabont",
    "The Godfather" => "Francis Ford Coppola",
    "The Dark Knight" => "Christopher Nolan",
    "The Lord of the Rings: The Return of the King" => "Peter Jackson",
    "Pulp Fiction" => "Quentin Tarantino"
];

// Affichage dans une liste simple
echo "<h3>Liste des films avec leurs réalisateurs :</h3>";
echo "<ul>";
foreach ($films as $film => $realisateur) {
    echo "<li>$film : $realisateur</li>";
}
echo "</ul>";

// Affichage dans une liste avec plus d'informations
echo "<h3>Liste des films avec plus d'informations :</h3>";
echo "<ul>";
foreach ($films as $film => $realisateur) {
    echo "<li>$film
        <ul>
            <li>$realisateur</li>
            <li>Année : " . getAnnee($film) . "</li>
            <li>Note : " . getNote($film) . "</li>
        </ul>
    </li>";
}
echo "</ul>";

// Fonctions factices pour obtenir l'année et la note des films (à titre d'exemple)
function getAnnee($film) {
    $annees = [
        "The Shawshank Redemption" => 1994,
        "The Godfather" => 1972,
        "The Dark Knight" => 2008,
        "The Lord of the Rings: The Return of the King" => 2003,
        "Pulp Fiction" => 1994
    ];
    return $annees[$film];
}

function getNote($film) {
    $notes = [
        "The Shawshank Redemption" => 9.2,
        "The Godfather" => 9.1,
        "The Dark Knight" => 9.0,
        "The Lord of the Rings: The Return of the King" => 8.9,
        "Pulp Fiction" => 8.9
    ];
    return $notes[$film];
}
?>
