<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Appel à la librairie Bootsrap = Lux -->
    <link rel="stylesheet" href="https://bootswatch.com/5/lux/bootstrap.css">

    <!-- Appel à la feuille de style -->
    <link rel="stylesheet" href="./src/css/style.css">

    <script src="https://unpkg.com/alpinejs@3.2.2/dist/cdn.min.js"></script>
    <script src="https://animejs.com/lib/anime.min.js"></script>
    <script src="./src/js/propos.js"></script>

    <title>Stweaming ~ À Propos</title>
</head>
<body class="container bg-test w100">

    <?php require './src/php/header/header.php' ?>

<main>

<div class="top_page">

<h1 class="page__title">À Propos</h1>

</div>

<p>Bienvenue sur <strong>Stweaming</strong>, une plateforme proposant énormement de contenus vidéoludiques tels que des animes (VOSTFR & VF), des dessins animes, des films et d'autres contenus arriveront dans le futur ! <br>
En tant qu'étudiant, ce projet avait pour but de réviser l'aspect développement web.  <br>
Pour rentrer dans les détails, ce site de streaming ne consiste qu'en un référencement de liens vidéos hébergés par des sites publics et légalement reconnus: 
    Dailymotion, Youtube, Odysee, Vostanimez... Je n'héberge aucune vidéo. Je n'upload aucune vidéo. </p>


<section class="propos_moi">
    <div class="propos_main">
        <img src="./public/img/avatar.png" alt="avatar de Marwin">
            <div class="propos_text">
                    <h1>À propos de moi</h1>
                    <h5>Futur <span class="propos_blue"> Développeur Web</span></h5>
                    <p>Hey ! Je me nomme RODRIGUES Marwin, un étudiant agé de 20 ans, actuellement en première année au MMI Montbéliard. Passionné par le web, le design, les animations 2D, les animés et les jeux vidéos. </p>            
                    <a href="https://marwin-rdgs.fr/" target="_blank"><button type="button" class="propos_button">Savoir Plus</button></a>
            </div>
</section>

<h2 class="autres_projets">Mes autres projets</h2>
<section class="row project__section">

    <!-- Cards Projets 1 -->
    <div class="project__card">
        <div class="project__card_face project__card_face1">
            <div class="project__card_content">
                <h2>Portfolio <br> <br></h2>
                <p>Site permettant de me présenter professionnellement.</p>
                <a href="https://marwin-rdgs.fr/" target="_blank"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
            </div>
        </div>

        <div class="project__card_face project__card_face2">
            <h2 class="project__card__title">Portfolio</h2>
        </div>

    </div>

    <!-- Cards Projets 2 -->
    <div class="project__card">
        <div class="project__card_face project__card_face1">
            <div class="project__card_content">
                <h2>AAPIB <br> <br></h2>
                <p>AAPIB est un projet réalisé en BTS SIO qui avait pour but de répondre à une demande pour une association de Belfort.</p>
                <a href="https://marwin-rdgs.fr/index2.php" target="_blank"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
            </div>
        </div>

        <div class="project__card_face project__card_face2">
            <h2 class="project__card__title">AAPIB</h2>
        </div>
    </div>

    <!-- Cards Projets 3 -->
    <div class="project__card">
        <div class="project__card_face project__card_face1">
            <div class="project__card_content">
                <h2>Trois Cent Team <br> <br></h2>
                <p>Trois Cent Team était le nom de mon groupe en seconde, et ce site est un projet réalisé durant les cours d'ICN.</p>
                <a href="https://marwin-rdgs25.wixsite.com/no-aim" target="_blank"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
            </div>
        </div>

        <div class="project__card_face project__card_face2">
            <h2 class="project__card__title">Trois Cent Team</h2>
        </div>
    </div>

    <!-- Cards Projets 4 -->
    <div class="project__card">
        <div class="project__card_face project__card_face1">
            <div class="project__card_content">
                <h2>Prod'Squad <br> <br></h2>
                <p>Prod'Squad était une communauté privée dont j'avais réalisé un site web pour cette dernière.</p>
                <a href="https://marwin-rdgs25.wixsite.com/prodsquad" target="_blank"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
            </div>
        </div>

        <div class="project__card_face project__card_face2">
            <h2 class="project__card__title">Prod'Squad</h2>
        </div>
    </div>

    <!-- Cards Projets 5 -->
    <div class="project__card">
        <div class="project__card_face project__card_face1">
            <div class="project__card_content">
                <h2>Feminisme, une guerre sans fin <br><br></h2>
                <p>Ce projet a été réalisé durant le premier semestre en BUT MMI qui avait pour but de découvrir les différents domaines du web aux étudiants. <br> (ATTENTION, produits pour un format de téléphone)</p>
                <a href="https://feminism.marwin-rodrigues.fr/" target="_blank"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
            </div>
        </div>

        <div class="project__card_face project__card_face2">
            <h2 class="project__card__title">Projet MMI S1</h2>
        </div>
    </div>

    <!-- Cards Projets 5 -->
    <div class="project__card">
        <div class="project__card_face project__card_face1">
            <div class="project__card_content">
                <h2>ARTIFICIAL <br> <br></h2>
                <p>ARTIFICIAL est un site reproduis à la suite d'une transmission d'une maquette, ce projet est le résultat d'un examen durant 3 jours. (ATTENTION, produits pour un format de téléphone)</p>
                <a href="https://artificial.marwin-rodrigues.fr/" target="_blank"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
            </div>
        </div>

        <div class="project__card_face project__card_face2">
            <h2 class="project__card__title">Examen MMI <br> ARTIFICIAL</h2>
        </div>
    </div>

</section>


</main>

    <?php require './src/php/footer/footer.php' ?>

</body>
</html>