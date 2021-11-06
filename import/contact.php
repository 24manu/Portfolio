<?php
include "head.php";
?>

<main>

    <?php
    // on peut importer le menu en PHP sans passer par index.php
    include "menu.php";
    ?>

    <section>
        <div class="contenu">
            <h1> Contact </h1>
            <h2>Un petit mot ou une question ?</h2>
            <form method="post">
                <div>
                    <input type="text" name="nom" placeholder="Votre nom">
                    <input type="text" name="prenom" placeholder="Votre prénom">
                    <input type="text" name="email" placeholder="Votre adresse email">
                </div>
                <div>
                    <textarea name="askorelse" placeholder="Votre question, suggestion et/ou avis !"></textarea>
                </div>
                <input type="submit" name="envoyer" value="Envoyer" class="btnenvoyer">

            </form>
            <a href="?acc"><button>
                    Retour à l'accueil
                </button></a>
        </div>
    </section>

</main>

<?php
include "footer.php";
?>