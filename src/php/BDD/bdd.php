<?php     
$bdd = new PDO("mysql:host=localhost; dbname=stweaming; charset=utf8", "root", '');

//============================ Partie Dessins Animes =========================================
// LETTRE D
$requeteSQL = "SELECT * FROM anime_vostfr_main WHERE alphabet_anime_vostfr = 'd'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vostfr_d = $requete->fetchAll(PDO ::FETCH_ASSOC);


?>
