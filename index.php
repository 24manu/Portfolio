<?php

/*
Contrôleur frontal
*/

// chargement des dépendances
require_once "config.php"; // configuration
// si on a un fichier de fonctions on le charge ici

// si on a besoin de se connecter à une base de donnée, on se connecte ici!

// Routeur
if (!isset($_GET['pg'])) {
    // chargement de l'accueil
    include_once "import/homepage.php";
} else {
    // pas sur l'accueil
    switch ($_GET['pg']) {
        case "cv":
            // import du cv
            include_once "import/curriculum.php";
            break;
        case "tuto":
            // import de la page des tutod
            include_once "import/tutoriels.php";
            break;
        default:
            // chargement de l'accueil
            include_once "import/homepage.php";
    }
}

// si on fermer notre connexion, on le fait ici