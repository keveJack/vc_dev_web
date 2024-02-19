<?php
// Vérifier si un cookie existe pour le nombre d'actualités à afficher
$nbActualites = isset($_COOKIE['nbActualites']) ? $_COOKIE['nbActualites'] : 10;

// Vérifier si le formulaire a été soumis
if (isset($_POST['submit'])) {
    // Récupérer le nombre d'actualités à afficher depuis le formulaire
    $nbActualites = $_POST['nbActualites'];
    // Définir le cookie pour sauvegarder le nombre d'actualités à afficher
    setcookie('nbActualites', $nbActualites, time() + (86400 * 30), "/"); // expire dans 30 jours
}

// Tableau d'actualités
$actualites = array(
    
    "Des chercheurs découvrent une nouvelle espèce de grenouille fluorescente en Amazonie, capable de briller dans le noir.",
"Un homme construit une réplique exacte de la pyramide de Gizeh dans son jardin arrière, juste pour le plaisir.",
"Une ville en Finlande élève une statue en hommage à un célèbre renard roux qui est devenu une sensation sur les réseaux sociaux.",
"Des scientifiques développent un parfum qui sent la viande grillée pour décourager les moustiques.",
"Un café en Thaïlande propose un menu entièrement composé de plats à base d'insectes.",
"Un homme bat le record du monde en construisant la plus grande tour de cartes, atteignant plus de 7 mètres de hauteur.",
"Une compétition annuelle de lancer de téléphones portables attire des participants du monde entier en Finlande.",
"Des agriculteurs au Japon utilisent des techniques de culture spéciales pour cultiver des pastèques carrées, plus faciles à empiler et à transporter.",
"Un artiste crée une œuvre d'art vendue aux enchères pour des millions de dollars consistant en une simple banane scotchée à un mur.",
"Une ville en Norvège installe des miroirs géants sur les montagnes pour apporter de la lumière naturelle aux rues pendant les longs hivers sombres.",
);

?>

<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
    <style>
        .actualite {
            border: 2px solid black;
            border-radius: 10px;
            background-color: yellow;
            margin-bottom: 10px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Actualités</h1>
    <?php
// Afficher les actualités en fonction du nombre choisi
for ($i = 0; $i < $nbActualites; $i++) {
    echo '<div class="actualite">' . $actualites[$i] . '</div>';
}
?>

    <form method="POST">
        <label for="nbActualites">Combien d'actualités voulez-vous voir affichées ?</label>
        <select name="nbActualites" id="nbActualites">
            <?php
// Afficher les options de 5 à 9
for ($i = 5; $i <= 9; $i++) {
    echo "<option value='$i'" . ($nbActualites == $i ? ' selected' : '') . ">$i</option>";
}
?>
        </select>
        <button type="submit" name="submit">OK</button>
    </form>
</body>
</html>
