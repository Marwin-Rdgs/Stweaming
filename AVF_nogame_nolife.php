<?php
$bdd = new PDO("mysql:host=localhost; dbname=stweaming; charset=utf8", "root", '');
// $bdd = new PDO("mysql:host=2s24l.myd.infomaniak.com; dbname=2s24l_stweaming; charset=utf8", "2s24l_stweaming", 'Root123456');
$requeteSQL = 'SELECT * FROM avf_nogame_nolife WHERE id_nogame_nolife = ?';
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

    <title>Stweaming ~ No Game No Life EP<?= $dtr["id_nogame_nolife"] ?></title>
</head>
<body class="container bg-test w100">

    <?php require './src/php/header/header.php' ?>

<main>


<div class="top_page">
<h1 class="page__title">No Game No Life <br>Épisode <?= $dtr["id_nogame_nolife"] ?></h1>
</div>

<a href="animes_vf.php"><span class="badge rounded-pill bg-warning badge-categ">Animé VF</span></a>

<?= $dtr["ep_nogame_nolife"] ?>
    
<?= $dtr["back_nogame_nolife"] ?>
<?= $dtr["next_nogame_nolife"] ?>

    <p class="syno">Shiro et Sora, un couple de frère et sœur gamers, sont transportés dans un univers parallèle où la vie se résume à des jeux et où l'humanité est menacée d'extinction.</p>

<table class="table table-hover list_episode">
  <thead>
    <tr>
      <th scope="col">Liste Episode</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-active
    <?php 
    if ($dtr["id_nogame_nolife"] == 1) {
    echo "episode_here";
    }
    ?>">
    <th scope="row"> <a href="AVF_nogame_nolife.php?id=1"> No Game No Life Episode 1 </a> </th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_nogame_nolife"] == 2) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="AVF_nogame_nolife.php?id=2"> No Game No Life Episode 2 </a></th>
    </tr>


    <tr class="table-active 
    <?php 
    if ($dtr["id_nogame_nolife"] == 3) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="AVF_nogame_nolife.php?id=3"> No Game No Life Episode 3 </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_nogame_nolife"] == 4) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="AVF_nogame_nolife.php?id=4"> No Game No Life Episode 4 </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_nogame_nolife"] == 5) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="AVF_nogame_nolife.php?id=5"> No Game No Life Episode 5 </a></th>
    </tr>


    <tr class="    
    <?php 
    if ($dtr["id_nogame_nolife"] == 6) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="AVF_nogame_nolife.php?id=6"> No Game No Life Episode 6 </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_nogame_nolife"] == 7) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="AVF_nogame_nolife.php?id=7"> No Game No Life Episode 7 </a></th>
    </tr>

    
    <tr class="
    <?php 
    if ($dtr["id_nogame_nolife"] == 8) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="AVF_nogame_nolife.php?id=8"> No Game No Life Episode 8 </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_nogame_nolife"] == 9) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="AVF_nogame_nolife.php?id=9"> No Game No Life Episode 9 </a></th>
    </tr>

    
    <tr class="
    <?php 
    if ($dtr["id_nogame_nolife"] == 10) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="AVF_nogame_nolife.php?id=10"> No Game No Life Episode 10 </a></th>
    </tr>


    <tr class="table-active
    <?php 
    if ($dtr["id_nogame_nolife"] == 11) {
    echo "episode_here";
    }
    ?>">
      <th scope="row"><a href="AVF_nogame_nolife.php?id=11"> No Game No Life Episode 11 </a></th>
    </tr>


    <tr class="
    <?php 
    if ($dtr["id_nogame_nolife"] == 12) {
    echo "episode_here";
    }
    else {
      echo "table-secondary";
    }
    ?>">
      <th scope="row"><a href="AVF_nogame_nolife.php?id=12"> No Game No Life Episode 12 </a></th>
    </tr>
  </tbody>
</table>

</main>

    <?php require './src/php/footer/footer.php' ?>

</body>
</html>