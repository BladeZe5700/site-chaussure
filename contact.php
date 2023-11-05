<!DOCTYPE html>
<html lang="fr">
<head>
<link rel="icon" type="image/png" href="icon.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-nous</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>
<header>
        <h1>Ma Boutique de Chaussures</h1>
        <nav>
            <ul>
                <li><a href="index.html">Accueil</a></li>
                <li><a href="produits.php">Produits</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <h1>Contactez-nous</h1>
    <form action="envoyer_email.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="message">Message :</label>
        <textarea id="message" name="message" rows="4" required></textarea><br><br>

        <input type="submit" value="Envoyer">
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "leo.menestrel52300@gmail.com"; // Remplacez par votre adresse e-mail
    $sujet = "Nouveau message de contact de $nom";
    $headers = "De: $email";
    
    // Envoi du courriel
    if (mail($to, $sujet, $message, $headers)) {
        echo 'Votre message a été envoyé avec succès.';
    } else {
        echo 'Erreur lors de l\'envoi du message.';
    }
}
?>

<link rel="stylesheet" href="contact.css">