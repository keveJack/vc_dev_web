<?php
// Affichage des puissances de 2 avec une boucle for
echo "<p>Puissances de 2 avec une boucle for :</p>";
echo "<ul>";
for ($i = 0; $i <= 16; $i++) {
    $resultat = pow(2, $i);
    echo "<li>2<sup>$i</sup> = $resultat</li>";
}
echo "</ul>";

// Affichage des puissances de 2 avec une boucle while
echo "<p>Puissances de 2 avec une boucle while :</p>";
echo "<ul>";
$i = 0;
while ($i <= 16) {
    $resultat = pow(2, $i);
    echo "<li>2<sup>$i</sup> = $resultat</li>";
    $i++;
}
echo "</ul>";
?>
