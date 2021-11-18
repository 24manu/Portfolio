<?php
include "head.php";
?>

<main>

    <?php
    // on peut importer le menu en PHP sans passer par index.php
    include "menu.php";
    ?>
    <div id="container">

        <!-- zone de connexion -->

            <h1>Log in</h1>
            
            <form action="verification.php" method="POST">
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='LOGIN' >

                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>

            </form>
        
      </div>

    <a href="?acc"><button>
            Retour à l'accueil
        </button></a>

</main>

<?php
include "footer.php";
?>