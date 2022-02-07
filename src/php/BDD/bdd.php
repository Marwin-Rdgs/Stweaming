<?php     
$bdd = new PDO("mysql:host=localhost; dbname=stweaming; charset=utf8", "root", '');
// $bdd = new PDO("mysql:host=2s24l.myd.infomaniak.com; dbname=2s24l_stweaming; charset=utf8", "2s24l_stweaming", 'Root123456');

//========================================================  Partie Animes VOSTFR ===================================================================== 
// LETTRE A
$requeteSQL = "SELECT * FROM anime_vostfr_main WHERE alphabet_anime_vostfr = 'a'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vostfr_a = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE B
$requeteSQL = "SELECT * FROM anime_vostfr_main WHERE alphabet_anime_vostfr = 'b'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vostfr_b = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE A
$requeteSQL = "SELECT * FROM anime_vostfr_main WHERE alphabet_anime_vostfr = 'c'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vostfr_c = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE D
$requeteSQL = "SELECT * FROM anime_vostfr_main WHERE alphabet_anime_vostfr = 'd'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vostfr_d = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE E
$requeteSQL = "SELECT * FROM anime_vostfr_main WHERE alphabet_anime_vostfr = 'e'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vostfr_e = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE F
$requeteSQL = "SELECT * FROM anime_vostfr_main WHERE alphabet_anime_vostfr = 'f'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vostfr_f = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE G
$requeteSQL = "SELECT * FROM anime_vostfr_main WHERE alphabet_anime_vostfr = 'g'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vostfr_g = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE H
$requeteSQL = "SELECT * FROM anime_vostfr_main WHERE alphabet_anime_vostfr = 'h'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vostfr_h = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE I
$requeteSQL = "SELECT * FROM anime_vostfr_main WHERE alphabet_anime_vostfr = 'i'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vostfr_i = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE J
$requeteSQL = "SELECT * FROM anime_vostfr_main WHERE alphabet_anime_vostfr = 'j'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vostfr_j = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE K
$requeteSQL = "SELECT * FROM anime_vostfr_main WHERE alphabet_anime_vostfr = 'k'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vostfr_k = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE L
$requeteSQL = "SELECT * FROM anime_vostfr_main WHERE alphabet_anime_vostfr = 'l'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vostfr_l = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE M
$requeteSQL = "SELECT * FROM anime_vostfr_main WHERE alphabet_anime_vostfr = 'm'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vostfr_m = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE N
$requeteSQL = "SELECT * FROM anime_vostfr_main WHERE alphabet_anime_vostfr = 'n'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vostfr_n = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE O
$requeteSQL = "SELECT * FROM anime_vostfr_main WHERE alphabet_anime_vostfr = 'o'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vostfr_o = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE P
$requeteSQL = "SELECT * FROM anime_vostfr_main WHERE alphabet_anime_vostfr = 'p'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vostfr_p = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE Q
$requeteSQL = "SELECT * FROM anime_vostfr_main WHERE alphabet_anime_vostfr = 'q'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vostfr_q = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE R
$requeteSQL = "SELECT * FROM anime_vostfr_main WHERE alphabet_anime_vostfr = 'r'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vostfr_r = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE S
$requeteSQL = "SELECT * FROM anime_vostfr_main WHERE alphabet_anime_vostfr = 's'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vostfr_s = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE T
$requeteSQL = "SELECT * FROM anime_vostfr_main WHERE alphabet_anime_vostfr = 't'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vostfr_t = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE U
$requeteSQL = "SELECT * FROM anime_vostfr_main WHERE alphabet_anime_vostfr = 'u'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vostfr_u = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE V
$requeteSQL = "SELECT * FROM anime_vostfr_main WHERE alphabet_anime_vostfr = 'v'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vostfr_v = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE W
$requeteSQL = "SELECT * FROM anime_vostfr_main WHERE alphabet_anime_vostfr = 'w'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vostfr_w = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE X
$requeteSQL = "SELECT * FROM anime_vostfr_main WHERE alphabet_anime_vostfr = 'x'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vostfr_x = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE Y
$requeteSQL = "SELECT * FROM anime_vostfr_main WHERE alphabet_anime_vostfr = 'y'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vostfr_y = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE Z
$requeteSQL = "SELECT * FROM anime_vostfr_main WHERE alphabet_anime_vostfr = 'z'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vostfr_z = $requete->fetchAll(PDO ::FETCH_ASSOC);




//======================================================== Partie Anime VF =====================================================================
// LETTRE A
$requeteSQL = "SELECT * FROM anime_vf_main WHERE alphabet_anime_vf = 'a'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vf_a = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE B
$requeteSQL = "SELECT * FROM anime_vf_main WHERE alphabet_anime_vf = 'b'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vf_b = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE C
$requeteSQL = "SELECT * FROM anime_vf_main WHERE alphabet_anime_vf = 'c'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vf_c = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE D
$requeteSQL = "SELECT * FROM anime_vf_main WHERE alphabet_anime_vf = 'd'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vf_d = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE E
$requeteSQL = "SELECT * FROM anime_vf_main WHERE alphabet_anime_vf = 'e'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vf_e = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE F
$requeteSQL = "SELECT * FROM anime_vf_main WHERE alphabet_anime_vf = 'f'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vf_f = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE G
$requeteSQL = "SELECT * FROM anime_vf_main WHERE alphabet_anime_vf = 'g'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vf_g = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE H
$requeteSQL = "SELECT * FROM anime_vf_main WHERE alphabet_anime_vf = 'h'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vf_h = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE I
$requeteSQL = "SELECT * FROM anime_vf_main WHERE alphabet_anime_vf = 'i'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vf_i = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE J
$requeteSQL = "SELECT * FROM anime_vf_main WHERE alphabet_anime_vf = 'j'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vf_j = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE k
$requeteSQL = "SELECT * FROM anime_vf_main WHERE alphabet_anime_vf = 'k'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vf_k = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE L
$requeteSQL = "SELECT * FROM anime_vf_main WHERE alphabet_anime_vf = 'l'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vf_l = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE M
$requeteSQL = "SELECT * FROM anime_vf_main WHERE alphabet_anime_vf = 'm'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vf_m = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE N
$requeteSQL = "SELECT * FROM anime_vf_main WHERE alphabet_anime_vf = 'n'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vf_n = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE O
$requeteSQL = "SELECT * FROM anime_vf_main WHERE alphabet_anime_vf = 'o'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vf_o = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE P
$requeteSQL = "SELECT * FROM anime_vf_main WHERE alphabet_anime_vf = 'p'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vf_p = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE Q
$requeteSQL = "SELECT * FROM anime_vf_main WHERE alphabet_anime_vf = 'q'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vf_q = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE R
$requeteSQL = "SELECT * FROM anime_vf_main WHERE alphabet_anime_vf = 'r'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vf_r = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE S
$requeteSQL = "SELECT * FROM anime_vf_main WHERE alphabet_anime_vf = 's'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vf_s = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE T
$requeteSQL = "SELECT * FROM anime_vf_main WHERE alphabet_anime_vf = 't'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vf_t = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE U
$requeteSQL = "SELECT * FROM anime_vf_main WHERE alphabet_anime_vf = 'u'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vf_u = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE V
$requeteSQL = "SELECT * FROM anime_vf_main WHERE alphabet_anime_vf = 'v'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vf_v = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE W
$requeteSQL = "SELECT * FROM anime_vf_main WHERE alphabet_anime_vf = 'w'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vf_w = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE X
$requeteSQL = "SELECT * FROM anime_vf_main WHERE alphabet_anime_vf = 'x'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vf_x = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE Y
$requeteSQL = "SELECT * FROM anime_vf_main WHERE alphabet_anime_vf = 'y'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vf_y = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE Z
$requeteSQL = "SELECT * FROM anime_vf_main WHERE alphabet_anime_vf = 'z'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$vf_z = $requete->fetchAll(PDO ::FETCH_ASSOC);


//======================================================== Partie Dessins Animes =====================================================================
// LETTRE A
$requeteSQL = "SELECT * FROM dessins_animes_main WHERE alphabet_da = 'a'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$da_a = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE B
$requeteSQL = "SELECT * FROM dessins_animes_main WHERE alphabet_da = 'b'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$da_b = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE C
$requeteSQL = "SELECT * FROM dessins_animes_main WHERE alphabet_da = 'c'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$da_c = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE D
$requeteSQL = "SELECT * FROM dessins_animes_main WHERE alphabet_da = 'd'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$da_d = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE E
$requeteSQL = "SELECT * FROM dessins_animes_main WHERE alphabet_da = 'e'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$da_e = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE F
$requeteSQL = "SELECT * FROM dessins_animes_main WHERE alphabet_da = 'f'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$da_f = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE G
$requeteSQL = "SELECT * FROM dessins_animes_main WHERE alphabet_da = 'g'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$da_g = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE H
$requeteSQL = "SELECT * FROM dessins_animes_main WHERE alphabet_da = 'h'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$da_h = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE I
$requeteSQL = "SELECT * FROM dessins_animes_main WHERE alphabet_da = 'i'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$da_i = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE J
$requeteSQL = "SELECT * FROM dessins_animes_main WHERE alphabet_da = 'j'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$da_j = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE K
$requeteSQL = "SELECT * FROM dessins_animes_main WHERE alphabet_da = 'k'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$da_k = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE L
$requeteSQL = "SELECT * FROM dessins_animes_main WHERE alphabet_da = 'l'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$da_l = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE M
$requeteSQL = "SELECT * FROM dessins_animes_main WHERE alphabet_da = 'm'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$da_m = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE N
$requeteSQL = "SELECT * FROM dessins_animes_main WHERE alphabet_da = 'n'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$da_n = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE O
$requeteSQL = "SELECT * FROM dessins_animes_main WHERE alphabet_da = 'o'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$da_o = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE P
$requeteSQL = "SELECT * FROM dessins_animes_main WHERE alphabet_da = 'p'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$da_p = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE Q
$requeteSQL = "SELECT * FROM dessins_animes_main WHERE alphabet_da = 'q'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$da_q = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE R
$requeteSQL = "SELECT * FROM dessins_animes_main WHERE alphabet_da = 'r'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$da_r = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE S
$requeteSQL = "SELECT * FROM dessins_animes_main WHERE alphabet_da = 's'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$da_s = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE T
$requeteSQL = "SELECT * FROM dessins_animes_main WHERE alphabet_da = 't'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$da_t = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE U
$requeteSQL = "SELECT * FROM dessins_animes_main WHERE alphabet_da = 'u'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$da_u = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE V
$requeteSQL = "SELECT * FROM dessins_animes_main WHERE alphabet_da = 'v'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$da_v = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE W
$requeteSQL = "SELECT * FROM dessins_animes_main WHERE alphabet_da = 'w'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$da_w = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE X
$requeteSQL = "SELECT * FROM dessins_animes_main WHERE alphabet_da = 'x'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$da_x = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE Y
$requeteSQL = "SELECT * FROM dessins_animes_main WHERE alphabet_da = 'y'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$da_y = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE Z
$requeteSQL = "SELECT * FROM dessins_animes_main WHERE alphabet_da = 'z'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$da_z = $requete->fetchAll(PDO ::FETCH_ASSOC);


//======================================================== Partie Films =====================================================================
// LETTRE A
$requeteSQL = "SELECT * FROM film_main WHERE alphabet_film = 'a'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$film_a = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE B
$requeteSQL = "SELECT * FROM film_main WHERE alphabet_film = 'b'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$film_b = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE C
$requeteSQL = "SELECT * FROM film_main WHERE alphabet_film = 'c'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$film_c = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE D
$requeteSQL = "SELECT * FROM film_main WHERE alphabet_film = 'd'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$film_d = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE E
$requeteSQL = "SELECT * FROM film_main WHERE alphabet_film = 'e'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$film_e = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE F
$requeteSQL = "SELECT * FROM film_main WHERE alphabet_film = 'f'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$film_f = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE G
$requeteSQL = "SELECT * FROM film_main WHERE alphabet_film = 'g'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$film_g = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE H
$requeteSQL = "SELECT * FROM film_main WHERE alphabet_film = 'h'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$film_h = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE I
$requeteSQL = "SELECT * FROM film_main WHERE alphabet_film = 'i'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$film_i = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE J
$requeteSQL = "SELECT * FROM film_main WHERE alphabet_film = 'j'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$film_j = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE K
$requeteSQL = "SELECT * FROM film_main WHERE alphabet_film = 'k'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$film_k = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE L
$requeteSQL = "SELECT * FROM film_main WHERE alphabet_film = 'l'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$film_l = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE M
$requeteSQL = "SELECT * FROM film_main WHERE alphabet_film = 'm'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$film_m = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE N
$requeteSQL = "SELECT * FROM film_main WHERE alphabet_film = 'n'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$film_n = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE O
$requeteSQL = "SELECT * FROM film_main WHERE alphabet_film = 'o'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$film_o = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE P
$requeteSQL = "SELECT * FROM film_main WHERE alphabet_film = 'p'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$film_p = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE Q
$requeteSQL = "SELECT * FROM film_main WHERE alphabet_film = 'q'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$film_q = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE R
$requeteSQL = "SELECT * FROM film_main WHERE alphabet_film = 'r'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$film_r = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE S
$requeteSQL = "SELECT * FROM film_main WHERE alphabet_film = 's'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$film_s = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE T
$requeteSQL = "SELECT * FROM film_main WHERE alphabet_film = 't'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$film_t = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE U
$requeteSQL = "SELECT * FROM film_main WHERE alphabet_film = 'u'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$film_u = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE V
$requeteSQL = "SELECT * FROM film_main WHERE alphabet_film = 'v'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$film_v = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE W
$requeteSQL = "SELECT * FROM film_main WHERE alphabet_film = 'w'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$film_w = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE X
$requeteSQL = "SELECT * FROM film_main WHERE alphabet_film = 'x'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$film_x = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE Y
$requeteSQL = "SELECT * FROM film_main WHERE alphabet_film = 'y'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$film_y = $requete->fetchAll(PDO ::FETCH_ASSOC);
// LETTRE Z
$requeteSQL = "SELECT * FROM film_main WHERE alphabet_film = 'z'";
$requete = $bdd ->prepare($requeteSQL);
$requete->execute();
$film_z = $requete->fetchAll(PDO ::FETCH_ASSOC);



?>