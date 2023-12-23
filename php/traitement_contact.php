<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = htmlspecialchars($_POST["nom"]);
    $email = htmlspecialchars($_POST["email"]);
    $objet = htmlspecialchars($_POST["objet"]);
    $message = htmlspecialchars($_POST["message"]);

    if (empty($nom) || empty($email) || empty($objet) || empty($message)) {
        echo "Tous les champs doivent être remplis.";
    } else {
        // Envoyer l'e-mail
        $to = "@email.com";
        $sujet = "Nouveau message de $nom - $objet";
        $messageEmail = "De: $nom\nAdresse e-mail: $email\nObjet: $objet\n\nMessage:\n$message";


        mail($to, $sujet, $messageEmail);


        echo "Votre message a été envoyé avec succès !";
    }
} else {
    header("Location: index.php");
    exit();
}
?>