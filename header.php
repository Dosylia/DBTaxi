<?php
$current_url = "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$page_titles = array(
    "index.php" => "DB Taxi - Accueil",
    "apropos.php" => "DB Taxi - À propos",
    "contact.php" => "DB Taxi - Contact",
    "devis.php" => "DB Taxi - Devis",
    "reservation.php" => "DB Taxi - Réservation",
    "informations.php" => "DB Taxi - Informations",
    "mentionslegales.php" => "DB Taxi - Mentions légales",
    "sitemap.php" => "DB Taxi - Plan du site"
);

$page_title = "DB Taxi";
if (array_key_exists(basename($_SERVER['PHP_SELF']), $page_titles)) {
    $page_title = $page_titles[basename($_SERVER['PHP_SELF'])];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title><?php echo $page_title; ?></title>
    <meta name="google-site-verification" content="lTlEuxDRTZJXDTZmWpP43huIPMPGm_QoIbVJzYkni7k" />
    <meta property="og:title" content="DB Taxi - Marine BAILLY">
    <meta property="og:description" content="Taxi VSL, gare, aéroport sur la région Dombes-Bresse">
    <meta property="og:url" content="https://www.dbtaxi.fr/">
    <meta property="og:image" content="http://dbtaxi.store/images/bannieredbtaxi.jpg">
    <meta name="description" content="DB Taxi - Marine BAILLY, Taxi VSL/Gare/Aéroport sur la région Dombes-Bresse.">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="style.css" rel="stylesheet" >
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <script src='main.js'></script>
    <link rel="canonical" href="<?php echo $current_url; ?>" />
    <link rel="icon" type="image/png" href="images/icons/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/icons/favicon-16x16.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&family=Permanent+Marker&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@1,600&display=swap" rel="stylesheet"> 
    <meta property="og:type" content="website">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://dbtaxi.store/">
    <meta property="twitter:title" content="DB Taxi - TAXI VSL">
    <meta property="twitter:description" content="Taxi VSL, gare, aéroport sur la région Dombes-Bresse">
    <meta property="twitter:image" content="http://dbtaxi.store/images/bannieredbtaxi.jpg">
</head>

<header>
    <div class="blackheader">

        <div class="phone_header">
        <img src="images/phone.png" alt="phone" />
        <p>06.38.21.43.06</p>
        </div>

        <div class="email_header">
        <a href="mailto:Dombesbressetaxi@hotmail.com">
        <img src="images/email.png" alt="email" />
        <p>Dombesbressetaxi@hotmail.com</p></a>
        </div>

    </div>  


    <div class="greyheader">

        <div class="leftpart_header">
            <a href="index.php"><img src="images/logodbtaxi.png" alt="logo"></a>
        </div>

        <div class="rest_header">
            <ul>
                <li><a href="index.php">Accueil</a><li>
                <li><a href="apropos">À propos</a><li>
                <li><a href="contact">Contact</a><li>
                <li><a href="devis">Devis</a><li>
                <li><a href="reservation">Réservation</a><li>
                <li><a href="informations">Informations</a><li>
            </ul>
        </div>

    </div>

</header>