<?php
if (isset($_POST['submit'])) {
    $to = "dombesbressetaxi@hotmail.com";
    $subject = "Reservation depuis TAXI DB";
    $message = "Prénom: ".$_POST['firstname']."\n";
    $message .= "Nom: ".$_POST['lastname']."\n";
    $message .= "Email: ".$_POST['email']."\n";
    $message .= "Téléphone: ".$_POST['reason']."\n";
    if ($_POST['typeCourse'] === "VSL") {
        $message .= "Adresse point A: ".$_POST['adresseDepart']."\n";
        $message .= "Adresse point B: ".$_POST['adresseArrivee']."\n";
        $message .= "Date Taxit: ".$_POST['dateVSL']."\n";
        $message .= "Horaire VSL: ".$_POST['horaireVSL']."\n";
    } elseif ($_POST['typeCourse'] === "GareAeroport") {
        $message .= "Numéro de train ou de vol: ".$_POST['numeroTrainVol']."\n";
        $message .= "Date Gare/Aéroport: ".$_POST['dateGareAeroport']."\n";
        $message .= "Horaire Gare/Aéroport: ".$_POST['horaireGareAeroport']."\n";
        $message .= "Adresse arrivée: ".$_POST['adresseArriveeGare']."\n";
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