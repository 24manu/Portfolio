<?php
include "head.php";

// dépendances
require_once "config.php";

// modification de variables de configuration du serveur, utile pour le mail sur un serveur local (change le contenu de php.ini pour cette page seulement), inutile d'utiliser ini_set pour envoyer un mail sur un serveur distant, il suffit de paramétrer le smtp comme dans votre doc (gmail.com outlook etc...)
ini_set('SMTP',SMTP_HOST);
ini_set('smtp_port',SMTP_PORT);
ini_set('sendmail_from',MAIL_ADMIN);

// var_dump($_POST);

// si le formulaire a été envoyé
if(!empty($_POST)){
    // traîtement des variables (htmlspecialchars est souvant inutile sans insertion dans la DB)
    $thename = htmlspecialchars(trim($_POST['thename']),ENT_QUOTES);
    $themail = filter_var(trim($_POST['themail']), FILTER_VALIDATE_EMAIL);
    $thetext = strip_tags(trim($_POST['thetext']));
    // si au moins 1 équivalante à vide ou false
    if(empty($thename) || !$themail || empty($thetext)){
        // création d'une variable pour l'erreur
        $message = "Votre mail n'a pas été envoyé, veuillez recommencer";
    }else{
        // on va créer nos variables pour l'envoi des mails

        // premier, envoi du mail à l'admin
        $aQui   = MAIL_ADMIN;
        $sujet = 'Réponse à votre formulaire 23-mail';
        $message = $thename." à écrit : \n".$thetext;
        $entete = array(
             'From' => "$themail",
             'Reply-To' => "$themail",
             'X-Mailer' => 'PHP/' . phpversion()
        );

        mail($aQui, $sujet, $message, $entete);

        // envoi du mail de confirmation à l'utilisateur
        $aQui   = $themail;
        $sujet = 'Merci pour votre mail sur 23-mail';
        $message = "Vous recevrez une réponse dans les plus brefs délais";
        $entete = array(
             'From' => MAIL_ADMIN,
             'Reply-To' => MAIL_ADMIN,
             'X-Mailer' => 'PHP/' . phpversion()
        );

        mail($aQui, $sujet, $message, $entete);

        // mail($themail, 'Depuis 23-mail', $thename." à écrit : \n".$thetext);
        // création de la variable de confirmation
        $message = "Votre mail a bien été envoyé, merci";
    }
}
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

            <?php
    if(isset($message)):
    ?>

    <h3 class="confirmationMail"><?=$message?></h3>

<?php
    endif;
    ?>

            <p class="entete"><img src="./images/contacts.jpg" width="480px" /></p>
            <form id="form1" name="contact" method="post" action="">

                <div><label for="frm1_nom">NOM : </label><input name="thename" type="text" id="frm1_nom" size="50" required /></div>
                
                <div><label for="frm1_email">E-MAIL : </label><input name="themail" type="email" id="frm1_email" size="50" required /></div>


                <div><label for="frm1_message">COMMENTAIRES : </label><textarea name="thetext" id="frm1_message" cols="40" rows="5" required ></textarea></div>

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