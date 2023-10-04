<?php
if(isset($_POST['submit'])){
    $to = "dombesbressetaxi@hotmail.com";
    $subject = "Devis depuis TAXI DB";
    $message = "Prénom: ".$_POST['firstname']."\n";
    $message .= "Nom: ".$_POST['lastname']."\n";
    $message .= "Email: ".$_POST['email']."\n";
    $message .= "Téléphone: ".$_POST['reason']."\n";
    $message .= "Point A: ".$_POST['pointa']."\n";
    $message .= "POINT B: ".$_POST['pointb']."\n";
    if (isset($_POST['typeCourse'])) {
        $typeCourse = $_POST['typeCourse'];
        if ($typeCourse === "VSL") {
            $message .= "Type de course: VSL\n";
        } elseif ($typeCourse === "GareAeroport") {
            $message .= "Type de course: Gare/Aéroport\n";
        }
    }
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