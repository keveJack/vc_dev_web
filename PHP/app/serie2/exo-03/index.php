<?php
// Tableau de films
$films = array(
    "The Shawshank Redemption",
    "The Godfather",
    "The Dark Knight",
    "The Lord of the Rings: The Return of the King",
    "Pulp Fiction"
);

// Affichage des films avec une boucle foreach
foreach ($films as $film) {
    echo $film . "<br>"; // Affichage avec un saut de ligne après chaque film
}

// Affichage des films dans une liste <ul><li>
echo "<ul>";
foreach ($films as $film) {
    echo "<li>$film</li>"; // Chaque film est placé dans une balise <li>
}
echo "</ul>";
?>
