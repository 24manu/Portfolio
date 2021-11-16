<?php
include "head.php"
?>

<main class="mainGalerie">

    <?php
    // on peut importer le menu en PHP sans passer par index.php
    include "menu.php";
    ?>

    <h1>Galerie</h1>

    <div class="galerie">

        <figure id="projetPrefo">
            <a href="http://manuel.webdev-cf2m.be/projet/index.html" target="_blank">
                <img src="./images/sitePrefo.PNG" alt="Site projet préfo" height="400" width="400" /></a>
            <p>Mon premier site web réalisé en préformation, le début d'apprentissage en HTML et CSS</p>
        </figure>

        <figure id="projetLivreDor">
            <a href="http://manuel.webdev-cf2m.be/livre-d-or/index.php" target="_blank">
                <img src="./images/guestBookMM2.PNG" alt="Site projet livre d'or" height="400" width="400" /></a>
            <p>Livre d'or et gestion des messages, réalisé en PHP</p>
        </figure>

        <figure id="projetDublin">
            <a href="http://manuel.webdev-cf2m.be/manuDublinV2/index.php" target="_blank">
                <img src="./images/dublin.PNG" alt="Site Dublin" height="400" width="400" /></a>
            <p>Site sur la ville de Dublin, réalisé en PHP et responsive/design</p>
        </figure>

        <a href="?acc"><button>
                Retour à l'accueil
            </button></a>

    </div>

</main>

<?php
include "footer.php";
?>