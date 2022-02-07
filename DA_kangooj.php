<?php
// $bdd = new PDO("mysql:host=localhost; dbname=stweaming; charset=utf8", "root", '');
$bdd = new PDO("mysql:host=2s24l.myd.infomaniak.com; dbname=2s24l_stweaming; charset=utf8", "2s24l_stweaming", 'Root123456');
$requeteSQL = 'SELECT * FROM da_kangooj WHERE id_mkangooj = ?';
$requete = $bdd ->prepare($requeteSQL);
$requete->execute(array($_GET['id']));
$dtr = $requete->fetch(PDO::FETCH_ASSOC);
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

    <!-- Librairie nécessaire pour la carte -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" defer></script> 
    <script src="https://unpkg.com/alpinejs@3.2.2/dist/cdn.min.js" defer></script>

    <title>Stweaming ~ Kangoo Junior EP <?= $dtr["id_kangooj"]?></title>
</head>
<body class="container bg-test w100">

    <?php require './src/php/header/header.php' ?>

<main>


<div class="top_page">
<h1 class="page__title">Kangoo Junior Épisode <?= $dtr["id_kangooj"]?></h1>
</div>

<a href="dessins_animes.php"><span class="badge rounded-pill bg-success badge-categ">Dessins Animé</span></a>

<?= $dtr["ep_kangooj"] ?>
    
<?= $dtr["back_kangooj"] ?>
<?= $dtr["next_kangooj"] ?>

    <p class="syno">Cette série met en scène les aventures de cinq jeunes kangourous, appelés les Kangoo, dans une école de l'île appelée School Island, située dans l'archipel du Grand West. ... Leurs pires ennemis sont la Bande des Cinq et ils étudient tous dans la petite école de School Island.</p>

<table class="table table-hover list_episode">
  <thead>
    <tr>
      <th scope="col">Liste Episode</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-active
    <?php 
    if ($dtr["id_kangooj"] == 1) {
    echo "episode_here";
    }
    ?>">
    <th scope="row"> <a href="DA_kangooj.php?id=1"> Kangoo Junior - Episode 1 -  Tableau d'honneur </a> </th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_kangooj"] == 2) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_kangooj.php?id=2"> Kangoo Junior - Episode 2 - Halloween </a></th>
    </tr>


    <tr class="table-active 
    <?php 
    if ($dtr["id_kangooj"] == 3) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_kangooj.php?id=3"> Kangoo Juniot - Episode 3 - Double énigme</a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_kangooj"] == 4) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=4"> Les Monsieurs, Madames Saison 1 Episode 4 - A la ferme </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 5) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=5"> Les Monsieurs, Madames Saison 1 Episode 5 - Lac </a></th>
    </tr>


    <tr class="    
    <?php 
    if ($dtr["id_monsieurs_madames"] == 6) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=6"> Les Monsieurs, Madames Saison 1 Episode 6 - La plage </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 7) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=7"> Les Monsieurs, Madames Saison 1 Episode 7 - Bobos </a></th>
    </tr>

    
    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 8) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=8"> Les Monsieurs, Madames Saison 1 Episode 8 - Centre-commercial </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 9) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=9"> Les Monsieurs, Madames Saison 1 Episode 9 - L'anniversaire </a></th>
    </tr>

    
    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 10) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=10"> Les Monsieurs, Madames Saison 1 Episode 10 - Bateaux </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 11) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=11"> Les Monsieurs, Madames Saison 1 Episode 11 - Supermarché </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 12) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=12"> Les Monsieurs, Madames Saison 1 Episode 12 - Les livres </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 13) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=13"> Les Monsieurs, Madames Saison 1 Episode 13 - Camping </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 14) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=14"> Les Monsieurs, Madames Saison 1 Episode 14 - Science </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 15) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=15"> Les Monsieurs, Madames Saison 1 Episode 15 - Poissons </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 16) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=16"> Les Monsieurs, Madames Saison 1 Episode 16 - Peinture </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 17) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=17"> Les Monsieurs, Madames Saison 1 Episode 17 - Construction </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 18) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=18"> Les Monsieurs, Madames Saison 1 Episode 18 - Travail </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 19) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=19"> Les Monsieurs, Madames Saison 1 Episode 19 - Trains </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 20) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=20"> Les Monsieurs, Madames Saison 1 Episode 20 - Passe-temps </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 21) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=21"> Les Monsieurs, Madames Saison 1 Episode 21 - Foire </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 22) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=22"> Les Monsieurs, Madames Saison 1 Episode 22 - Films </a></th>
    </tr>



    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 23) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=23"> Les Monsieurs, Madames Saison 1 Episode 23 - Danse </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 24) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=24"> Les Monsieurs, Madames Saison 1 Episode 24 - Inventions </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 25) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=25"> Les Monsieurs, Madames Saison 1 Episode 25 - Parc d'attractions </a></th>
    </tr>

    
    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 26) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=26"> Les Monsieurs, Madames Saison 1 Episode 26 - Aventure </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 27) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=27"> Les Monsieurs, Madames Saison 1 Episode 27 - Jour de pluie </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 28) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=28"> Les Monsieurs, Madames Saison 1 Episode 28 - Fête de Jolieville </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 29) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=29"> Les Monsieurs, Madames Saison 1 Episode 29 - Jeux </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 30) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=30"> Les Monsieurs, Madames Saison 1 Episode 30 - Hôtel </a></th>
    </tr>

    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 31) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=31"> Les Monsieurs, Madames Saison 1 Episode 31 - Corvées </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 32) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=32"> Les Monsieurs, Madames Saison 1 Episode 32 - Neige </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 33) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=33"> Les Monsieurs, Madames Saison 1 Episode 33 - Nourriture </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 34) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=34"> Les Monsieurs, Madames Saison 1 Episode 34 - Vie sauvage </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 35) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=35"> Les Monsieurs, Madames Saison 1 Episode 35 - Les restaurants </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 36) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=36"> Les Monsieurs, Madames Saison 1 Episode 36 - Insectes </a></th>
    </tr> 

    
    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 37) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=37"> Les Monsieurs, Madames Saison 1 Episode 37 - Cirque </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 38) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=38"> Les Monsieurs, Madames Saison 1 Episode 38 - Jardins </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 39) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=39"> Les Monsieurs, Madames Saison 1 Episode 39 - Voitures </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 40) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=40"> Les Monsieurs, Madames Saison 1 Episode 40 - Boites de conserve </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 41) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=41"> Les Monsieurs, Madames Saison 1 Episode 41 - Navires </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 42) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=42"> Les Monsieurs, Madames Saison 1 Episode 42 - Cuisiner </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 43) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=43"> Les Monsieurs, Madames Saison 1 Episode 43 - Nuit </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 44) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=44"> Les Monsieurs, Madames Saison 1 Episode 44 - Collectionner </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 45) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=45"> Les Monsieurs, Madames Saison 1 Episode 45 - Pleine lune </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 46) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=46"> Les Monsieurs, Madames Saison 1 Episode 46 - Canicule </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 47) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=47"> Les Monsieurs, Madames Saison 1 Episode 47 - Sommeil </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 48) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=48"> Les Monsieurs, Madames Saison 1 Episode 48 - Station de lavage </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 49) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=49"> Les Monsieurs, Madames Saison 1 Episode 49 - Tourisme </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 50) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=50"> Les Monsieurs, Madames Saison 1 Episode 50 - Obscurité </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 51) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=51"> Les Monsieurs, Madames Saison 1 Episode 51 - Pelouse </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 52) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=52"> Les Monsieurs, Madames Saison 1 Episode 52 - Parade </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 53) {
    echo "episode_here";
    }
    ?>">
    <th scope="row"> <a href="DA_monsieur_madame.php?id=53"> Les Monsieurs, Madames Saison 2 Episode 1 - Pique-Nique </a> </th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 54) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=54"> Les Monsieurs, Madames Saison 2 Episode 2 - Leçon de conduite </a></th>
    </tr>


    <tr class="table-active 
    <?php 
    if ($dtr["id_monsieurs_madames"] == 55) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=55"> Les Monsieurs, Madames Saison 2 Episode 3 - Dans l'espace </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 56) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=56"> Les Monsieurs, Madames Saison 2 Episode 4 - Dents propres </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 57) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=57"> Les Monsieurs, Madames Saison 2 Episode 5 - Aéroport </a></th>
    </tr>


    <tr class="    
    <?php 
    if ($dtr["id_monsieurs_madames"] == 58) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=58"> Les Monsieurs, Madames Saison 2 Episode 6 - Chaussures </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 59) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=59"> Les Monsieurs, Madames Saison 2 Episode 7 - Art et artisanat </a></th>
    </tr>

    
    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 60) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=60"> Les Monsieurs, Madames Saison 2 Episode 8 - Jeux télé </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 61) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=61"> Les Monsieurs, Madames Saison 2 Episode 9 - Garages </a></th>
    </tr>

    
    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 62) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=62"> Les Monsieurs, Madames Saison 2 Episode 10 - Lunettes </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 63) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=63"> Les Monsieurs, Madames Saison 2 Episode 11 - Jouets </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 64) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=64"> Les Monsieurs, Madames Saison 2 Episode 12 - Reptiles </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 65) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=65"> Les Monsieurs, Madames Saison 2 Episode 13 - Chapeaux </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 66) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=66"> Les Monsieurs, Madames Saison 2 Episode 14 - Robots </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 67) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=67"> Les Monsieurs, Madames Saison 2 Episode 15 - Fêtes </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 68) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=68"> Les Monsieurs, Madames Saison 2 Episode 16 - Haut et bas </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 69) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=69"> Les Monsieurs, Madames Saison 2 Episode 17 - Diner dehors </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 70) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=70"> Les Monsieurs, Madames Saison 2 Episode 18 - Cadeaux </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 71) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=71"> Les Monsieurs, Madames Saison 2 Episode 19 - Soleil et lune </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 72) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=72"> Les Monsieurs, Madames Saison 2 Episode 20 - Téléphone </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 73) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=73"> Les Monsieurs, Madames Saison 2 Episode 21 - Bords de mer </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 74) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=74"> Les Monsieurs, Madames Saison 2 Episode 22 - Lavage et séchage </a></th>
    </tr>



    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 75) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=75"> Les Monsieurs, Madames Saison 2 Episode 23 - Eternuements et hocquets </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 76) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=76"> Les Monsieurs, Madames Saison 2 Episode 24 - Gratte-ciels </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 77) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=77"> Les Monsieurs, Madames Saison 2 Episode 25 - Fruits </a></th>
    </tr>

    
    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 78) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=78"> Episodes 26 - Non disponible </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 79) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=79"> Les Monsieurs, Madames Saison 2 Episode 27 - Supermarché </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 80) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=80"> Les Monsieurs, Madames Saison 2 Episode 28 - Cinéma </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 81) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=81"> Les Monsieurs, Madames Saison 2 Episode 29 - Bureau de poste </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 82) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=82"> Les Monsieurs, Madames Saison 2 Episode 30 - Se déplacer </a></th>
    </tr>

    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 83) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=83"> Les Monsieurs, Madames Saison 2 Episode 31 - Horloge </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 84) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=84"> Les Monsieurs, Madames Saison 2 Episode 32 - Animaux de compagnie </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 85) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=85"> Les Monsieurs, Madames Saison 2 Episode 33 - Danse, danse, danse </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 86) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=86"> Les Monsieurs, Madames Saison 2 Episode 34 - Arbres </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 87) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=87"> Les Monsieurs, Madames Saison 2 Episode 35 - Bibliothèque </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 88) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=88"> Les Monsieurs, Madames Saison 2 Episode 36 - Pirates </a></th>
    </tr> 

    
    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 89) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=89"> Les Monsieurs, Madames Saison 2 Episode 37 - Gluant </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 90) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=90"> Les Monsieurs, Madames Saison 2 Episode 38 - Trains et avions </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 91) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=91"> Les Monsieurs, Madames Saison 2 Episode 39 - Pleine mer </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 92) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=92"> Les Monsieurs, Madames Saison 2 Episode 40 - Voisins d'à côté </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 93) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=93"> Les Monsieurs, Madames Saison 2 Episode 41 - Déjeuner </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 94) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=94"> Les Monsieurs, Madames Saison 2 Episode 42 - Machines </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 95) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=95"> Les Monsieurs, Madames Saison 2 Episode 43 - Fées et lutins </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 96) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=96"> Les Monsieurs, Madames Saison 2 Episode 44 - Amélioration de maison </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 97) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=97"> Les Monsieurs, Madames Saison 2 Episode 45 - Oiseaux </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 98) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=98"> Les Monsieurs, Madames Saison 2 Episode 46 - Bain et bulles </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 99) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=99"> Les Monsieurs, Madames Saison 2 Episode 47 - Sable et surf </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 100) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=100"> Les Monsieurs, Madames Saison 2 Episode 48 - Parcs </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 101) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=101"> Les Monsieurs, Madames Saison 2 Episode 49 - Surprises </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 102) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=102"> Les Monsieurs, Madames Saison 2 Episode 50 - Voyages </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 103) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=103"> Les Monsieurs, Madames Saison 2 Episode 51 - Mauvais temps </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_monsieurs_madames"] == 104) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="DA_monsieur_madame.php?id=104"> Les Monsieurs, Madames Saison 2 Episode 52 - Indésirables </a></th>
    </tr>

  </tbody>
</table>

</main>

    <?php require './src/php/footer/footer.php' ?>

</body>
</html>