<?php
session_start();

// Vérifier si l'utilisateur est déjà connecté
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header("Location: info.php");
    exit;
}
// Vérifier si le formulaire est soumis
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier les identifiants
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Vérifier si les identifiants sont corrects
    if($username === 'admin' && $password === 'admin') {
        // Authentification réussie, rediriger vers la page d'actualités
        $_SESSION['logged_in'] = true;
        header("Location: info.php");
        exit;
    } else {
        $error_message = "Identifiants incorrects. Veuillez réessayer.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if(isset($error_message)) { ?>
        <p style="color: red;"><?php echo $error_message; ?></p>
    <?php } ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>