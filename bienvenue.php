<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
</head>
<body>

    <?php
    // Vérifie si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupère le nom d'utilisateur depuis le formulaire
        $username = $_POST["username"];

        // Affiche un message de bienvenue
        echo "<h2>Bienvenue, $username !</h2>";
    } else {
        // Redirige vers le formulaire si le formulaire n'a pas été soumis
        header("Location: index.html");
        exit();
    }
    ?>

</body>
</html>
