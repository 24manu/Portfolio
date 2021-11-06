<?php

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Comme le titre de la page est chaque fois différent,
    il est nécessaire de connaître le nom du fichier demandé pour
    savoir quel texte afficher dans la balise TITLE.
    La variable $_SERVER['PHP_SELF'] permet de connaître le fichier lu actuellement
    La fonction PHP basename() permet d'extraire le nom du fichier
    -->
    <?php
    $title = ""; /* Cette variable contient le texte à placer dans <title> */
    switch (basename($_SERVER['PHP_SELF'])) {
        case "homepage.php":
            $title = "Portfolio-Accueil";
            break;
        case "galerie.php":
            $title = "Portfolio-Galerie";
            break;
        case "liens.php":
            $title = "Portfolio-Liens";
            break;
        case "tutoriels.php":
            $title = "Portfolio-Tutoriels";
            break;
        case "contact.php":
            $title = "Portfolio-Contact";
            break;
        case "curriculum.php":
            $title = "Portfolio-CV";
            break;
        case "admin.php":
            $title = "Portfolio-Log in";
            break;
        default:
            $title = "Portfolio";
    }
    echo "<title>" . $title . "</title>";

    ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Styles spécifiques pour le menu hamburger -->
    <link type="text/css" rel="stylesheet" href="./css/menu.css">
    <!-- Styles de base -->
    <link type="text/css" rel="stylesheet" href="./css/style.css">
    <!-- 1. Lien vers la CSS du module LightBox 
        A ajouter dans chacune des pages qui utilisent LightBox
        -->
    <!--<link href="lightbox/css/lightbox.min.css" rel="stylesheet" type="text/css" />-->
</head>

<body>

    <img id="hamburger" src="images/burger.png" onclick="toggle();" />