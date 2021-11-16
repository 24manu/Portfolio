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
            <h2>Tutoriel de Openclassrooms sur les fonctions en Javascript </h2>
            <p>Je le trouve vraiment pas mal, on aborde assez bien les bases.</br>
                Le chapitre est bien structuré, à la fin de chaque partie tu as même un résumé des points importants à retenir.</br>
                Facile à comprendre pour les débutants. </br>
                Je recommande ce site, comme tous les tutoriels d'Openclassrooms. </p>
            <a href="https://openclassrooms.com/fr/courses/6175841-apprenez-a-programmer-avec-javascript/6279223-travaillez-sur-les-fonctions" target="_blank">
                <img src="./images/Logo_OpenClassrooms.png" alt="Logo Openclassrooms" height="100px" width="100px" />
            </a>
        </div>

        <div class="tuto2">
            <h2>Tutoriel de MDN Web Docs mozilla sur les fonctions en Javascript</h2>
            <p>La bible des développeurs, mais pas facile à comprendre pour les débutants.</br>
                Nécessite un certain temps d'adaptation pour assimiler toutes les explications.</p>
            <a href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Functions" target="_blank">
                <img src="./images/MDN_Web_Docs.svg.png" alt="MDN mozilla" height="100px" width="400px" />
            </a>
        </div>

        <a href="?acc"><button>
                Retour à l'accueil
            </button></a>

    </section>

</main>

<?php
include "footer.php";
?>