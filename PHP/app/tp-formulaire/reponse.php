<!-- Version non sécurisé -->



<!-- <!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réponse du serveur</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Merci pour votre soumission !</h1>

    <?php if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['annee_naissance']) && !empty($_POST['identifiant']) && !empty($_POST['mot_de_passe'])) : ?>
        <h2>Voici les informations que vous avez saisies :</h2>
        <p>Civilité : <?= $_POST['civilite'] ?></p>
        <p>Nom : <?= $_POST['nom'] ?></p>
        <p>Prénom : <?= $_POST['prenom'] ?></p>
        <p>Année de naissance : <?= $_POST['annee_naissance'] ?></p>
        <p>Identifiant : <?= $_POST['identifiant'] ?></p>
        <p>Mot de passe : <?= $_POST['mot_de_passe'] ?></p>
        <?php if (!empty($_POST['sexe'])) : ?>
            <p>Sexe : <?= $_POST['sexe'] ?></p>
        <?php endif; ?>
        <?php if (!empty($_POST['experience_php'])) : ?>
            <p>Vous débutez en PHP.</p>
        <?php else : ?>
            <p>Vous n'êtes pas débutant en PHP.</p>
        <?php endif; ?>
    <?php else : ?>
        <p>Vous n'avez pas rempli tous les champs du formulaire.</p>
    <?php endif; ?>
</body>

</html> -->


<!--version sécurisé -->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réponse du serveur</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Merci pour votre soumission !</h1>

    <?php
    // Vérification des données
    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['annee_naissance']) && !empty($_POST['identifiant']) && !empty($_POST['mot_de_passe'])) {
        // Sécurisation des données
        $civilite = strip_tags($_POST['civilite']);
        $nom = strip_tags($_POST['nom']);
        $prenom = strip_tags($_POST['prenom']);
        $annee_naissance = strip_tags($_POST['annee_naissance']);
        $identifiant = strip_tags($_POST['identifiant']);
        $mot_de_passe = strip_tags($_POST['mot_de_passe']);
        $sexe = isset($_POST['sexe']) ? strip_tags($_POST['sexe']) : '';
        $experience_php = isset($_POST['experience_php']) ? strip_tags($_POST['experience_php']) : '';

        // Affichage des données
    ?>
        <h2>Voici les informations que vous avez saisies :</h2>
        <p>Civilité : <?= $civilite ?></p>
        <p>Nom : <?= $nom ?></p>
        <p>Prénom : <?= $prenom ?></p>
        <p>Année de naissance : <?= $annee_naissance ?></p>
        <p>Identifiant : <?= $identifiant ?></p>
        <p>Mot de passe : <?= $mot_de_passe ?></p>
        <?php
        if (!empty($sexe)) {
        ?>
            <p>Sexe : <?= $sexe ?></p>
        <?php
        }
        if (!empty($experience_php)) {
        ?>
            <p>Vous débutez en PHP.</p>
        <?php
        } else {
        ?>
            <p>Vous n'êtes pas débutant en PHP.</p>
        <?php
        }
    } else {
        ?>
        <p>Vous n'avez pas rempli tous les champs du formulaire.</p>
    <?php
    }
    ?>
</body>

</html>