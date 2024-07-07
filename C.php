<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact</title>
</head>

<body>
    <h1>Contactez-nous</h1>
    <p>Pour toute demande, remplissez le formulaire ci-dessous.</p>
    <form method="post">
        <label>Email</label>
        <input type="email" name="email" required>
        <label>Sujet</label>
        <input type="text" name="sujet" required>
        <textarea name="message" required> </textarea>
        <input type="submit" value="Envoyer le message">
    </form>
    <?php
    // Si le formulaire a été soumis
    if (isset($_POST["message"])) {
        $message = "Ce message vous a été envoyé via la page contact du site BH AUTO
    Nom :" . $_POST["nom"] . "
    
    Email :" . $_POST["email"] . "
    Message :" . $_POST["message"] .
            $retour = mail("mouhamad69140@gmail.com", $_POST["sujet"], $message, "From:mouhamad69140@gmail.com" . "\r\n" . "Reply-to:" . $_POST["email"]);

        if ($retour) {
            echo "<p>L'email a bien été envoyé.</p>";
        }
    }
    ?>
</body>

</html>