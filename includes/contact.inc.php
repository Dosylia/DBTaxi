<?php
if(isset($_POST['submit'])){
    $to = "dombesbressetaxi@hotmail.com";
    $subject = "Contact depuis DB Taxi";
    $message = "Prénom: ".$_POST['firstname']."\n";
    $message .= "Nom: ".$_POST['lastname']."\n";
    $message .= "Email: ".$_POST['email']."\n";
    $message .= "Téléphone: ".$_POST['reason']."\n";
    $message .= "Message: ".$_POST['message']."\n";
    $headers = "From: ".$_POST['email'];

    if (mail($to, $subject, $message, $headers)) {
        echo "L'e-mail a été envoyé avec succès.";
        header("location: ../index.php?mailenvoye");
        exit();  
    } else {
        echo "Une erreur s'est produite lors de l'envoi de l'e-mail.";
        header("location: ../index.php?error=mailnonenvoye");
        exit();  
    }
}