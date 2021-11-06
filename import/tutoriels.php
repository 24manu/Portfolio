<?php
include "head.php";
?>

<main>

    <?php
    // on peut importer le menu en PHP sans passer par index.php
    include "menu.php";
    ?>

    <h1>Tutoriels</h1>

    <section class="tutos">

        <div class="tuto1">
            <h2>Titre tuto1</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, optio sit quis recusandae necessitatibus temporibus. Est sed eaque iure fugiat voluptatum quas porro itaque nesciunt aut, rerum possimus beatae debitis!</p>
        </div>

        <div class="tuto2">
            <h2>Titre tuto2</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, optio sit quis recusandae necessitatibus temporibus. Est sed eaque iure fugiat voluptatum quas porro itaque nesciunt aut, rerum possimus beatae debitis!</p>
        </div>

        <a href="?acc"><button>
                Retour à l'accueil
            </button></a>

    </section>

</main>

<?php
include "footer.php";
?>