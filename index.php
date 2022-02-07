<?php 
$bdd = new PDO("mysql:host=localhost; dbname=stweaming; charset=utf8", "root", '');
// $bdd = new PDO("mysql:host=2s24l.myd.infomaniak.com; dbname=2s24l_stweaming; charset=utf8", "2s24l_stweaming", 'Root123456');
// Nouveautés
$requeteSQL = "SELECT * FROM index_main";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$index = $requete->fetchAll(PDO ::FETCH_ASSOC);
?>

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

    <!-- Connexion à la BDD -->
    <?php require './src/php/BDD/bdd.php' ?>

    <title>Stweaming</title>
</head>
<body class="container bg-test w100">

    <?php require './src/php/header/header.php' ?>

<main>

<div class="top_page">
<h1 class="page__title">Annonce</h1>
<!-- (taille d'un grand carousel) -->
</div>

<img src="./public/img/start.png" alt="Image d'anonce" width="100%">

<br><br><br>


<section class="row">
<div class="top_page">
<h1 class="page__title">Les nouveautés</h1>
</div>

    <!-- Card -->
    
    <?php foreach ($index as $cards_index)
    { ?>

    <div class="card bg-primary">

        <div class="imgBx">

            <img src="<?= $cards_index["minia_index"] ?>" alt="Image1">

        </div>

        <div class="content">
            <h2 class="card__title"><?= $cards_index["title_index"] ?></h2>
            <?= $cards_index["badge_index"] ?> <br>

            <p><?= $cards_index["pitch_index"] ?> </p>
            <a href="<?= $cards_index["url_index"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
        </div>

    </div>   


    <?php } ?>

</section>
</main>

    <?php require './src/php/footer/footer.php' ?>

</body>
</html>