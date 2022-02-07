<?php
//$bdd = new PDO("mysql:host=localhost; dbname=stweaming; charset=utf8", "root", '');
$bdd = new PDO("mysql:host=2s24l.myd.infomaniak.com; dbname=2s24l_stweaming; charset=utf8", "2s24l_stweaming", 'Root123456');
$requeteSQL = 'SELECT * FROM avostfr_noragami WHERE id_noragami = ?';
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

    <title>Stweaming ~ Noragami Saison <?php
    if ($dtr["id_noragami"] >= 13) {
        echo "2"; }
        else {
        echo "1";
        } ?> EP <?php if ($dtr["id_noragami"] >= 13) {
          echo $dtr["id_noragami"] - 12;}
          else { 
            echo $dtr["id_noragami"];}
         ?></title>
</head>
<body class="container bg-test w100">

    <?php require './src/php/header/header.php' ?>

<main>


<div class="top_page">
<h1 class="page__title">Noragami <br>Saison <?php
    if ($dtr["id_noragami"] >= 13) {
        echo "2"; }
        else {
        echo "1";
        } ?> Épisode <?php if ($dtr["id_noragami"] >= 13) {
          echo $dtr["id_noragami"] - 12;}
          else { 
            echo $dtr["id_noragami"];}
         ?></h1>
</div>

<a href="animes_vostfr.php"><span class="badge rounded-pill bg-danger badge-categ">Animé VOSTFR</span></a>

<?= $dtr["ep_noragami"] ?>
    
<?= $dtr["back_noragami"] ?>
<?= $dtr["next_noragami"] ?>

    <p class="syno">Yato est un dieu errant oublié par les humains. Il parcourt le Japon afin d'exécuter les vœux des mortels dans l'espoir de pouvoir convertir assez de fidèles pour avoir enfin un temple à son honneur et un culte digne de ce nom.</p>

<table class="table table-hover list_episode" x-data="{S1: 1}">
  <thead>
    <tr>
      <th scope="col" x-on:click="S1 = !S1">Liste Episode - Saison 1</th>
    </tr>
  </thead>
  <tbody x-show="S1">
    <tr class="table-active
    <?php 
    if ($dtr["id_noragami"] == 1) {
    echo "episode_here";
    }
    ?>">
    <th scope="row"> <a href="AVOSTFR_noragami.php?id=1"> Noragami Saison 1 Episode 1 </a> </th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_noragami"] == 2) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="AVOSTFR_noragami.php?id=2"> Noragami Saison 1 Episode 2 </a></th>
    </tr>


    <tr class="table-active 
    <?php 
    if ($dtr["id_noragami"] == 3) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="AVOSTFR_noragami.php?id=3"> Noragami Saison 1 Episode 3 </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_noragami"] == 4) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="AVOSTFR_noragami.php?id=4"> Noragami Saison 1 Episode 4 </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_noragami"] == 5) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="AVOSTFR_noragami.php?id=5"> Noragami Saison 1 Episode 5 </a></th>
    </tr>


    <tr class="    
    <?php 
    if ($dtr["id_noragami"] == 6) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="AVOSTFR_noragami.php?id=6"> Noragami Saison 1 Episode 6 </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_noragami"] == 7) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="AVOSTFR_noragami.php?id=7"> Noragami Saison 1 Episode 7 </a></th>
    </tr>

    
    <tr class="
    <?php 
    if ($dtr["id_noragami"] == 8) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="AVOSTFR_noragami.php?id=8"> Noragami Saison 1 Episode 8 </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_noragami"] == 9) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="AVOSTFR_noragami.php?id=9"> Noragami Saison 1 Episode 9 </a></th>
    </tr>

    
    <tr class="
    <?php 
    if ($dtr["id_noragami"] == 10) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="AVOSTFR_noragami.php?id=10"> Noragami Saison 1 Episode 10 </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_noragami"] == 11) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="AVOSTFR_noragami.php?id=11"> Noragami Saison 1 Episode 11 </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_noragami"] == 12) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="AVOSTFR_noragami.php?id=12"> Noragami Saison 1 Episode 12 </a></th>
    </tr>

  </tbody>
</table>


<!-- ////////////////////////////////////////////////  SAISON 2 ////////////////////////////////////////////////////// -->
<table class="table table-hover list_episode" x-data="{S2 : 1}">
  <thead>
    <tr>
      <th scope="col" x-on:click="S2 = !S2">Liste Episode - Saison 2</th>
    </tr>
  </thead>
  <tbody x-show="S2">
    <tr class="table-active
    <?php 
    if ($dtr["id_noragami"] == 13) {
    echo "episode_here";
    }
    ?>">
    <th scope="row"> <a href="AVOSTFR_noragami.php?id=13"> Noragami Saison 2 Episode 1 </a> </th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_noragami"] == 14) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="AVOSTFR_noragami.php?id=14"> Noragami Saison 2 Episode 2 </a></th>
    </tr>


    <tr class="table-active 
    <?php 
    if ($dtr["id_monsieurs_madames"] == 15) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="AVOSTFR_noragami.php?id=15"> Noragami Saison 2 Episode 3 </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_noragami"] == 16) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="AVOSTFR_noragami.php?id=16"> Noragami Saison 2 Episode 4 </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_noragami"] == 17) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="AVOSTFR_noragami.php?id=17"> Noragami Saison 2 Episode 5 </a></th>
    </tr>


    <tr class="    
    <?php 
    if ($dtr["id_noragami"] == 18) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="AVOSTFR_noragami.php?id=18"> Noragami Saison 2 Episode 6 </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_noragami"] == 19) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="AVOSTFR_noragami.php?id=19"> Noragami Saison 2 Episode 7 </a></th>
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
      <th scope="row"><a href="AVOSTFR_noragami.php?id=20"> Noragami Saison 2 Episode 8 </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 21) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="AVOSTFR_noragami.php?id=21"> Noragami Saison 2 Episode 9 </a></th>
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
      <th scope="row"><a href="AVOSTFR_noragami.php?id=22"> Noragami Saison 2 Episode 10 </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 23) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="AVOSTFR_noragami.php?id=23"> Noragami Saison 2 Episode 11 </a></th>
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
      <th scope="row"><a href="AVOSTFR_noragami.php?id=24"> Noragami Saison 2 Episode 12 </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_monsieurs_madames"] == 65) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="AVOSTFR_noragami.php?id=25"> Noragami Saison 2 Episode 13 </a></th>
    </tr>

  </tbody>
</table>

</main>

    <?php require './src/php/footer/footer.php' ?>

</body>
</html>