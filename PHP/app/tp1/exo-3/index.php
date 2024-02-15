<?php
// Déclaration des variables
$x = 5;
$y = 10;

// Affichage du message en fonction des valeurs de x et y
echo "<p>";
if ($x > $y) {
    echo "x est plus grand que y";
} elseif ($x <= $y) {
    echo "x est plus petit ou égal à y";
}
echo "</p>";

// Tester le rendu quand x = 10 et y = 5
$x = 10;
$y = 5;

echo "<p>";
if ($x > $y) {
    echo "x est plus grand que y";
} elseif ($x <= $y) {
    echo "x est plus petit ou égal à y";
}
echo "</p>";
?>
