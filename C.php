<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["message"]) && isset($_POST["nom"]) && isset($_POST["email"]) && isset($_POST["sujet"])) {
        $nom = htmlspecialchars($_POST["nom"]);
        $email = htmlspecialchars($_POST["email"]);
        $sujet = htmlspecialchars($_POST["sujet"]);
        $message = htmlspecialchars($_POST["message"]);

        $email_message = "Ce message vous a été envoyé via la page contact du site exemple\n\n";
        $email_message .= "Nom: " . $nom . "\n";
        $email_message .= "Email: " . $email . "\n";
        $email_message .= "Message: " . $message;

        $to = "example@gmail.com";
        $headers = "From: example2@gmail.com\r\n";
        $headers .= "Reply-To: " . $email;

        $retour = mail($to, $sujet, $email_message, $headers);

        if ($retour) {
            echo "<p>L'email a bien été envoyé.</p>";
        } else {
            echo "<p>Une erreur s'est produite lors de l'envoi de l'email. Veuillez réessayer plus tard.</p>";
        }
    } else {
        echo "<p>Veuillez remplir tous les champs du formulaire.</p>";
    }
}
