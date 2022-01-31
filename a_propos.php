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

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, ipsam dolorem. Laborum nam provident natus suscipit quis, 
    ut voluptatum molestias inventore corporis, vero numquam assumenda? Fugiat ad temporibus quis ab!Lorem ipsum dolor sit amet consectetur 
    adipisicing elit. Architecto, ipsam dolorem. Laborum nam provident natus suscipit quis, ut voluptatum molestias inventore corporis, 
    vero numquam assumenda? Fugiat ad temporibus quis ab! <br> <br>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, ipsam dolorem. Laborum nam provident natus suscipit quis, 
    ut voluptatum molestias inventore corporis, vero numquam assumenda? Fugiat ad temporibus quis ab!Lorem ipsum dolor sit amet consectetur 
    adipisicing elit. Architecto, ipsam dolorem. Laborum nam provident natus suscipit quis, ut voluptatum molestias inventore corporis, 
    vero numquam assumenda? Fugiat ad temporibus quis ab! <br> <br>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, ipsam dolorem. Laborum nam provident natus suscipit quis, 
    ut voluptatum molestias inventore corporis, vero numquam assumenda? Fugiat ad temporibus quis ab!Lorem ipsum dolor sit amet consectetur 
    adipisicing elit. Architecto, ipsam dolorem. Laborum nam provident natus suscipit quis, ut voluptatum molestias inventore corporis, 
    vero numquam assumenda? Fugiat ad temporibus quis ab! </p>


<section class="propos_moi">
    <div class="propos_main">
        <img src="./public/img/avatar.png" alt="avatar de Marwin">
            <div class="propos_text">
                    <h1>À propos de moi</h1>
                    <h5>Futur <span class="propos_blue"> Développeur Web</span></h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, odio! Ipsum, quisquam. Enim veritatis vero delectus placeat facere tempora repudiandae doloremque dicta cum maiores magnam, voluptates, labore officiis beatae esse.</p>            
                    <a href="https://marwin-rdgs.fr/" target="_blank"><button type="button" class="propos_button">Savoir Plus</button></a>
            </div>
</section>





    <!-- Project Card #1 -->
    <div class="project__card">
    <div class="project__card__inner project__card1"
        x-on:click="project('project__card1');">

            <!-- Avant Card -->
            <div class="project__card__face project__card__face--front">
                <h2>Projet 1</h2>
            </div>

            <!-- Arrière Card -->
            <div class="project__card__face project__card__face--back">
                <div class="project__card__content">
                    
                    <div class="project__card__header">
                        <h3>Titre Projet</h3>
                    </div>


                    <div class="project__card__body">
                        <h4>Projet Scolaire (ex)</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi suscipit voluptate quam architecto mollitia reiciendis sed tempore debitis, libero accusantium! Nisi eligendi rerum molestiae molestias voluptatem labore alias consectetur nemo?.</p>
                        <a href="#"><button type="button" class="btn btn-outline-info project__card__button">Découvrir</button></a>
                    </div>
                </div>
            </div>
    </div>
    </div>

    <!-- Project Card #2 -->
    <div class="project__card">
    <div class="project__card__inner project__card2"
        x-on:click="project('project__card2');">

            <!-- Avant Card -->
            <div class="project__card__face project__card__face--front">
                <h2>Projet 2</h2>
            </div>

            <!-- Arrière Card -->
            <div class="project__card__face project__card__face--back">
                <div class="project__card__content">
                    
                    <div class="project__card__header">
                        <h3>Titre Projet</h3>
                    </div>


                    <div class="project__card__body">
                        <h4>Projet Scolaire (ex)</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi suscipit voluptate quam architecto mollitia reiciendis sed tempore debitis, libero accusantium! Nisi eligendi rerum molestiae molestias voluptatem labore alias consectetur nemo?.</p>
                        <a href="#"><button type="button" class="btn btn-outline-info project__card__button">Découvrir</button></a>
                    </div>
                </div>
            </div>
    </div>
    </div>


</main>

    <?php require './src/php/footer/footer.php' ?>

</body>
</html>