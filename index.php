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
        case "galerie":
            // import de la page galerie
            include_once "import/galerie.php";
            break;
        case "liens":
            // import de la page des liens
            include_once "import/liens.php";
            break;
        case "tuto":
            // import de la page des tuto
            include_once "import/tutoriels.php";
            break;
        case "contact":
            // import de la page des contact
            include_once "import/contact.php";
            break;
        case "cv":
            // import du cv
            include_once "import/curriculum.php";
            break;
        case "admin":
            // import du log in
            include_once "import/admin.php";
            break;
        default:
            // chargement de l'accueil
            include_once "import/homepage.php";
    }
}

// si on fermer notre connexion, on le fait ici