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
            <p class="entete"><img src="./images/contacts.jpg" height="200px" width="480px" /></p>
            <form id="form1" name="form1" method="post" action="" class="contact">

                <div><label for="frm1_nom">NOM : </label><input name="nom" type="text" id="frm1_nom" size="50" /></div>
                <div><label for="frm1_prenom">PRENOM : </label><input name="prenom" type="text" id="frm1_prenom" size="50" /></div>
                <div><label for="frm1_email">E-MAIL : </label><input name="email" type="email" id="frm1_email" size="50" /></div>


                <div><label for="frm1_message">COMMENTAIRES : </label><textarea name="message" id="frm1_message" cols="40" rows="5"></textarea></div>

                <div><input type="submit" id="frm1_submit" value="Envoyer votre message" /></div>

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