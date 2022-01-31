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

    <title>Stweaming ~ Animes VOSTFR</title>
</head>
<body class="container bg-test w100">

    <?php require './src/php/header/header.php' ?>

<main>


<div class="top_page">
<h1 class="page__title">Animes VOSTFR</h1>

<p class="alphabet"> 
    <a href="#anim_vostfr_letter_a">A</a>
    <a href="#anim_vostfr_letter_b">B</a>
    <a href="#anim_vostfr_letter_c">C</a>
    <a href="#anim_vostfr_letter_d">D</a>
    <a href="#anim_vostfr_letter_e">E</a>
    <a href="#anim_vostfr_letter_f">F</a>
    <a href="#anim_vostfr_letter_g">G</a>
    <a href="#anim_vostfr_letter_h">H</a>
    <a href="#anim_vostfr_letter_i">I</a>
    <a href="#anim_vostfr_letter_j">J</a>
    <a href="#anim_vostfr_letter_k">K</a>
    <a href="#anim_vostfr_letter_l">L</a>
    <a href="#anim_vostfr_letter_m">M</a>
    <a href="#anim_vostfr_letter_n">N</a>
    <a href="#anim_vostfr_letter_o">O</a>
    <a href="#anim_vostfr_letter_p">P</a>
    <a href="#anim_vostfr_letter_q">Q</a>
    <a href="#anim_vostfr_letter_r">R</a>
    <a href="#anim_vostfr_letter_s">S</a>
    <a href="#anim_vostfr_letter_t">T</a>
    <a href="#anim_vostfr_letter_u">U</a>
    <a href="#anim_vostfr_letter_v">V</a>
    <a href="#anim_vostfr_letter_w">W</a>
    <a href="#anim_vostfr_letter_x">X</a>
    <a href="#anim_vostfr_letter_y">Y</a>
    <a href="#anim_vostfr_letter_z">Z</a>
</p>
</div>

<div class="container">


<!-- ================================================== A ================================================== -->
<section id="anim_vostfr_letter_a" class="section_alphabet">
    <h2 class="title_alphabet">A</h2>

</section>

<!-- ================================================== B ================================================== -->
<section id="anim_vostfr_letter_b" class="section_alphabet">
    <h2 class="title_alphabet">B</h2>

</section>

<!-- ================================================== C ================================================== -->
<section id="anim_vostfr_letter_c" class="section_alphabet">
    <h2 class="title_alphabet">C</h2>

</section>


<!-- ================================================== D ================================================== -->
<section id="anim_vostfr_letter_d" class="section_alphabet">
    <h2 class="title_alphabet">D</h2>

    <!-- Card -->
    
    <?php foreach ($vostfr_d as $cards_d)
    { ?>

    <div class="card bg-primary">

        <div class="imgBx">

            <img src="<?= $cards_d["minia_anime_vostfr"] ?>" alt="Image1">

        </div>

        <div class="content">
            <h2 class="card__title"><?= $cards_d["title_anime_vostfr"] ?></h2>
            <p><?= $cards_d["pitch_anime_vostfr"] ?> </p>
            <a href="<?= $cards_d["url_anime_vostfr"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
        </div>

    </div>   


    <?php } ?>



</section>

<!-- ================================================== E ================================================== -->
<section id="anim_vostfr_letter_e" class="section_alphabet">
    <h2 class="title_alphabet">E</h2>

</section>

<!-- ================================================== F ================================================== -->
<section id="anim_vostfr_letter_f" class="section_alphabet">
    <h2 class="title_alphabet">F</h2>

</section>

<!-- ================================================== G ================================================== -->
<section id="anim_vostfr_letter_g" class="section_alphabet">
    <h2 class="title_alphabet">G</h2>

</section>

<!-- ================================================== H ================================================== -->
<section id="anim_vostfr_letter_h" class="section_alphabet">
    <h2 class="title_alphabet">H</h2>

</section>

<!-- ================================================== I ================================================== -->
<section id="anim_vostfr_letter_i" class="section_alphabet">
    <h2 class="title_alphabet">I</h2>

</section>

<!-- ================================================== J ================================================== -->
<section id="anim_vostfr_letter_j" class="section_alphabet">
    <h2 class="title_alphabet">J</h2>

</section>

<!-- ================================================== k ================================================== -->
<section id="anim_vostfr_letter_k" class="section_alphabet">
    <h2 class="title_alphabet">K</h2>

</section>

<!-- ================================================== L ================================================== -->
<section id="anim_vostfr_letter_l" class="section_alphabet">
    <h2 class="title_alphabet">L</h2>

</section>

<!-- ================================================== M ================================================== -->
<section id="anim_vostfr_letter_m" class="section_alphabet">
    <h2 class="title_alphabet">M</h2>

</section>

<!-- ================================================== N ================================================== -->
<section id="anim_vostfr_letter_n" class="section_alphabet">
    <h2 class="title_alphabet">N</h2>

</section>

<!-- ================================================== O ================================================== -->
<section id="anim_vostfr_letter_o" class="section_alphabet">
    <h2 class="title_alphabet">O</h2>

</section>

<!-- ================================================== P ================================================== -->
<section id="anim_vostfr_letter_p" class="section_alphabet">
    <h2 class="title_alphabet">P</h2>

</section>

<!-- ================================================== Q ================================================== -->
<section id="anim_vostfr_letter_q" class="section_alphabet">
    <h2 class="title_alphabet">Q</h2>

</section>

<!-- ================================================== R ================================================== -->
<section id="anim_vostfr_letter_r" class="section_alphabet">
    <h2 class="title_alphabet">R</h2>

</section>

<!-- ================================================== S ================================================== -->
<section id="anim_vostfr_letter_s" class="section_alphabet">
    <h2 class="title_alphabet">S</h2>

</section>

<!-- ================================================== T ================================================== -->
<section id="anim_vostfr_letter_t" class="section_alphabet">
    <h2 class="title_alphabet">T</h2>

</section>

<!-- ================================================== U ================================================== -->
<section id="anim_vostfr_letter_u" class="section_alphabet">
    <h2 class="title_alphabet">u</h2>

</section>

<!-- ================================================== V ================================================== -->
<section id="anim_vostfr_letter_v" class="section_alphabet">
    <h2 class="title_alphabet">V</h2>

</section>

<!-- ================================================== W ================================================== -->
<section id="anim_vostfr_letter_w" class="section_alphabet">
    <h2 class="title_alphabet">W</h2>

</section>

<!-- ================================================== X ================================================== -->
<section id="anim_vostfr_letter_x" class="section_alphabet">
    <h2 class="title_alphabet">X</h2>

</section>

<!-- ================================================== Y ================================================== -->
<section id="anim_vostfr_letter_y" class="section_alphabet">
    <h2 class="title_alphabet">Y</h2>

</section>

<!-- ================================================== Z ================================================== -->
<section id="anim_vostfr_letter_z" class="section_alphabet">
    <h2 class="title_alphabet">Z</h2>

</section>

</div>



</main>

    <?php require './src/php/footer/footer.php' ?>

</body>
</html>