<?php
$bdd = new PDO("mysql:host=localhost; dbname=stweaming; charset=utf8", "root", '');
// $bdd = new PDO("mysql:host=2s24l.myd.infomaniak.com; dbname=2s24l_stweaming; charset=utf8", "2s24l_stweaming", 'Root123456');
$requeteSQL = 'SELECT * FROM avostfr_danganronpa WHERE id_danganronpa = ?';
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

    <title>Stweaming ~ Danganronpa EP<?= $dtr["id_danganronpa"] ?></title>
</head>
<body class="container bg-test w100">

    <?php require './src/php/header/header.php' ?>

<main>


<div class="top_page">
<h1 class="page__title">Danganronpa <br>Épisode <?= $dtr["id_danganronpa"] ?></h1>
</div>

<a href="animes_vostfr.php"><span class="badge rounded-pill bg-danger badge-categ">Animé VOSTFR</span></a>

<?= $dtr["ep_danganronpa"] ?>
    
<?= $dtr["back_danganronpa"] ?>
<?= $dtr["next_danganronpa"] ?>

    <p class="syno">Danganronpa: The Animation, connue au Japon sous le nom de Danganronpa: Kibō no gakuen to zetsubō no kōkōsei The Animation (ダンガンロンパ 希望の学園と絶望の高校生 The Animation?), est une série télévisée d'animation japonaise de 13 épisodes basée sur la série de jeux vidéo de Spike (devenu Spike Chunsoft), Danganronpa. La série produite par le studio d'animation Lerche reprend l'histoire du premier jeu Danganronpa: Trigger Happy Havoc, sorti au Japon en 2010 sur PlayStation Portable1,2. 
        <br> <br>
        La série raconte la même histoire que le jeu. Un groupe de 15 étudiants se retrouve prisonnier dans Hope's Peak Academy, une école prestigieuse recrutant des étudiants ayant une très grande maîtrise ou connaissances dans un domaine particulier. Un ours en peluche télécommandé appelé Monokuma se présentant comme le directeur, leur annonce qu'ils sont prisonniers à vie dans cette école. Le seul moyen d'en sortir est de commettre un meurtre sans se faire démasquer au cours du procès de classe qui s'ensuit. L'histoire suit Makoto Naegi et 14 autres étudiants « Ultime » possédant chacun un talent unique.</p>

<table class="table table-hover list_episode">
  <thead>
    <tr>
      <th scope="col">Liste Episode</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-active
    <?php 
    if ($dtr["id_danganronpa"] == 1) {
    echo "episode_here";
    }
    ?>">
    <th scope="row"> <a href="AVOSTFR_danganronpa.php?id=1"> Danganronpa Episode 1 </a> </th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_danganronpa"] == 2) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="AVOSTFR_danganronpa.php?id=2"> Danganronpa Episode 2 </a></th>
    </tr>


    <tr class="table-active 
    <?php 
    if ($dtr["id_danganronpa"] == 3) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="AVOSTFR_danganronpa.php?id=3"> Danganronpa Episode 3 </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_danganronpa"] == 4) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="AVOSTFR_danganronpa.php?id=4"> Danganronpa Episode 4 </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_danganronpa"] == 5) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="AVOSTFR_danganronpa.php?id=5"> Danganronpa Episode 5 </a></th>
    </tr>


    <tr class="    
    <?php 
    if ($dtr["id_danganronpa"] == 6) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="AVOSTFR_danganronpa.php?id=6"> Danganronpa Episode 6 </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_danganronpa"] == 7) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="AVOSTFR_danganronpa.php?id=7"> Danganronpa Episode 7 </a></th>
    </tr>

    
    <tr class="
    <?php 
    if ($dtr["id_danganronpa"] == 8) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="AVOSTFR_danganronpa.php?id=8"> Danganronpa Episode 8 </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_danganronpa"] == 9) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="AVOSTFR_danganronpa.php?id=9"> Danganronpa Episode 9 </a></th>
    </tr>

    
    <tr class="
    <?php 
    if ($dtr["id_danganronpa"] == 10) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="AVOSTFR_danganronpa.php?id=10"> Danganronpa Episode 10 </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_danganronpa"] == 11) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="AVOSTFR_danganronpa.php?id=11"> Danganronpa Episode 11 </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_danganronpa"] == 12) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="AVOSTFR_danganronpa.php?id=12"> Danganronpa Episode 12 </a></th>
    </tr>

    <tr class="table-active
    <?php 
    if ($dtr["id_danganronpa"] == 13) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="AVOSTFR_danganronpa.php?id=13"> Danganronpa Episode 13 </a></th>
    </tr>
  </tbody>
</table>

</main>

    <?php require './src/php/footer/footer.php' ?>

</body>
</html>