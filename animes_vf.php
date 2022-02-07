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

    <title>Stweaming ~ Animes VF</title>
</head>
<body class="container bg-test w100">

    <?php require './src/php/header/header.php' ?>

<main>



<div class="top_page">

<h1 class="page__title">Animes VF</h1>

<p class="alphabet"> 
    <a href="#anim_vf_letter_a">A</a>
    <a href="#anim_vf_letter_b">B</a>
    <a href="#anim_vf_letter_c">C</a>
    <a href="#anim_vf_letter_d">D</a>
    <a href="#anim_vf_letter_e">E</a>
    <a href="#anim_vf_letter_f">F</a>
    <a href="#anim_vf_letter_g">G</a>
    <a href="#anim_vf_letter_h">H</a>
    <a href="#anim_vf_letter_i">I</a>
    <a href="#anim_vf_letter_j">J</a>
    <a href="#anim_vf_letter_k">K</a>
    <a href="#anim_vf_letter_l">L</a>
    <a href="#anim_vf_letter_m">M</a>
    <a href="#anim_vf_letter_n">N</a>
    <a href="#anim_vf_letter_o">O</a>
    <a href="#anim_vf_letter_p">P</a>
    <a href="#anim_vf_letter_q">Q</a>
    <a href="#anim_vf_letter_r">R</a>
    <a href="#anim_vf_letter_s">S</a>
    <a href="#anim_vf_letter_t">T</a>
    <a href="#anim_vf_letter_u">U</a>
    <a href="#anim_vf_letter_v">V</a>
    <a href="#anim_vf_letter_w">W</a>
    <a href="#anim_vf_letter_x">X</a>
    <a href="#anim_vf_letter_y">Y</a>
    <a href="#anim_vf_letter_z">Z</a>
</p>

</div>

<div class="container">

<!-- ================================================== A ================================================== -->
<section id="anim_vf_letter_a" class="section_alphabet row">
    <h2 class="title_alphabet">A</h2>

        <!-- Card  -->

        <?php foreach ($vf_a as $cards_a)
    { ?>

        <div class="card bg-primary">

            <div class="imgBx">

                <img src="<?= $cards_a["minia_anime_vf"] ?>" alt="Image1">

            </div>

            <div class="content">
                <h2 class="card__title"><?= $cards_a["title_anime_vf"] ?></h2>
                <p><?= $cards_a["pitch_anime_vf"] ?></p>
                <a href="<?= $cards_a["url_anime_vf"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
            </div>

        </div> 

        <?php } ?>

</section>


<!-- ================================================== B ================================================== -->
<section id="anim_vf_letter_b" class="section_alphabet row">
    <h2 class="title_alphabet">B</h2>

        <!-- Card  -->

        <?php foreach ($vf_b as $cards_b)
    { ?>

        <div class="card bg-primary">

            <div class="imgBx">

                <img src="<?= $cards_b["minia_anime_vf"] ?>" alt="Image1">

            </div>

            <div class="content">
                <h2 class="card__title"><?= $cards_b["title_anime_vf"] ?></h2>
                <p><?= $cards_b["pitch_anime_vf"] ?></p>
                <a href="<?= $cards_b["url_anime_vf"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
            </div>

        </div> 

        <?php } ?>

</section>


<!-- ================================================== C ================================================== -->
<section id="anim_vf_letter_c" class="section_alphabet row">
    <h2 class="title_alphabet">C</h2>

        <!-- Card  -->

        <?php foreach ($vf_c as $cards_c)
    { ?>

        <div class="card bg-primary">

            <div class="imgBx">

                <img src="<?= $cards_c["minia_anime_vf"] ?>" alt="Image1">

            </div>

            <div class="content">
                <h2 class="card__title"><?= $cards_c["title_anime_vf"] ?></h2>
                <p><?= $cards_c["pitch_anime_vf"] ?></p>
                <a href="<?= $cards_c["url_anime_vf"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
            </div>

        </div> 

        <?php } ?>

</section>


<!-- ================================================== D ================================================== -->
<section id="anim_vf_letter_d" class="section_alphabet row">
    <h2 class="title_alphabet">D</h2>

        <!-- Card  -->

        <?php foreach ($vf_d as $cards_d)
    { ?>

        <div class="card bg-primary">

            <div class="imgBx">

                <img src="<?= $cards_d["minia_anime_vf"] ?>" alt="Image1">

            </div>

            <div class="content">
                <h2 class="card__title"><?= $cards_d["title_anime_vf"] ?></h2>
                <p><?= $cards_d["pitch_anime_vf"] ?></p>
                <a href="<?= $cards_d["url_anime_vf"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
            </div>

        </div> 

        <?php } ?>

</section>


<!-- ================================================== E ================================================== -->
<section id="anim_vf_letter_e" class="section_alphabet row">
    <h2 class="title_alphabet">E</h2>

        <!-- Card  -->

        <?php foreach ($vf_e as $cards_e)
    { ?>

        <div class="card bg-primary">

            <div class="imgBx">

                <img src="<?= $cards_e["minia_anime_vf"] ?>" alt="Image1">

            </div>

            <div class="content">
                <h2 class="card__title"><?= $cards_e["title_anime_vf"] ?></h2>
                <p><?= $cards_e["pitch_anime_vf"] ?></p>
                <a href="<?= $cards_e["url_anime_vf"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
            </div>

        </div> 

        <?php } ?>

</section>


<!-- ================================================== F ================================================== -->
<section id="anim_vf_letter_f" class="section_alphabet row">
    <h2 class="title_alphabet">F</h2>

        <!-- Card  -->

        <?php foreach ($vf_f as $cards_f)
    { ?>

        <div class="card bg-primary">

            <div class="imgBx">

                <img src="<?= $cards_f["minia_anime_vf"] ?>" alt="Image1">

            </div>

            <div class="content">
                <h2 class="card__title"><?= $cards_f["title_anime_vf"] ?></h2>
                <p><?= $cards_f["pitch_anime_vf"] ?></p>
                <a href="<?= $cards_f["url_anime_vf"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
            </div>

        </div> 

        <?php } ?>

</section>


<!-- ================================================== G ================================================== -->
<section id="anim_vf_letter_g" class="section_alphabet row">
    <h2 class="title_alphabet">G</h2>

        <!-- Card  -->

        <?php foreach ($vf_g as $cards_g)
    { ?>

        <div class="card bg-primary">

            <div class="imgBx">

                <img src="<?= $cards_g["minia_anime_vf"] ?>" alt="Image1">

            </div>

            <div class="content">
                <h2 class="card__title"><?= $cards_g["title_anime_vf"] ?></h2>
                <p><?= $cards_g["pitch_anime_vf"] ?></p>
                <a href="<?= $cards_g["url_anime_vf"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
            </div>

        </div> 

        <?php } ?>

</section>


<!-- ================================================== H ================================================== -->
<section id="anim_vf_letter_h" class="section_alphabet row">
    <h2 class="title_alphabet">H</h2>

        <!-- Card  -->

        <?php foreach ($vf_h as $cards_h)
    { ?>

        <div class="card bg-primary">

            <div class="imgBx">

                <img src="<?= $cards_h["minia_anime_vf"] ?>" alt="Image1">

            </div>

            <div class="content">
                <h2 class="card__title"><?= $cards_h["title_anime_vf"] ?></h2>
                <p><?= $cards_h["pitch_anime_vf"] ?></p>
                <a href="<?= $cards_h["url_anime_vf"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
            </div>

        </div> 

        <?php } ?>

</section>


<!-- ================================================== I ================================================== -->
<section id="anim_vf_letter_i" class="section_alphabet row">
    <h2 class="title_alphabet">I</h2>

        <!-- Card  -->

        <?php foreach ($vf_i as $cards_i)
    { ?>

        <div class="card bg-primary">

            <div class="imgBx">

                <img src="<?= $cards_i["minia_anime_vf"] ?>" alt="Image1">

            </div>

            <div class="content">
                <h2 class="card__title"><?= $cards_i["title_anime_vf"] ?></h2>
                <p><?= $cards_i["pitch_anime_vf"] ?></p>
                <a href="<?= $cards_i["url_anime_vf"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
            </div>

        </div> 

        <?php } ?>

</section>


<!-- ================================================== J ================================================== -->
<section id="anim_vf_letter_j" class="section_alphabet row">
    <h2 class="title_alphabet">J</h2>

        <!-- Card  -->

        <?php foreach ($vf_j as $cards_j)
    { ?>

        <div class="card bg-primary">

            <div class="imgBx">

                <img src="<?= $cards_j["minia_anime_vf"] ?>" alt="Image1">

            </div>

            <div class="content">
                <h2 class="card__title"><?= $cards_j["title_anime_vf"] ?></h2>
                <p><?= $cards_j["pitch_anime_vf"] ?></p>
                <a href="<?= $cards_j["url_anime_vf"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
            </div>

        </div> 

        <?php } ?>

</section>


<!-- ================================================== K ================================================== -->
<section id="anim_vf_letter_k" class="section_alphabet row">
    <h2 class="title_alphabet">K</h2>

        <!-- Card  -->

        <?php foreach ($vf_k as $cards_k)
    { ?>

        <div class="card bg-primary">

            <div class="imgBx">

                <img src="<?= $cards_k["minia_anime_vf"] ?>" alt="Image1">

            </div>

            <div class="content">
                <h2 class="card__title"><?= $cards_k["title_anime_vf"] ?></h2>
                <p><?= $cards_k["pitch_anime_vf"] ?></p>
                <a href="<?= $cards_k["url_anime_vf"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
            </div>

        </div> 

        <?php } ?>

</section>


<!-- ================================================== L ================================================== -->
<section id="anim_vf_letter_l" class="section_alphabet row">
    <h2 class="title_alphabet">L</h2>

        <!-- Card  -->

        <?php foreach ($vf_l as $cards_l)
    { ?>

        <div class="card bg-primary">

            <div class="imgBx">

                <img src="<?= $cards_l["minia_anime_vf"] ?>" alt="Image1">

            </div>

            <div class="content">
                <h2 class="card__title"><?= $cards_l["title_anime_vf"] ?></h2>
                <p><?= $cards_l["pitch_anime_vf"] ?></p>
                <a href="<?= $cards_l["url_anime_vf"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
            </div>

        </div> 

        <?php } ?>

</section>


<!-- ================================================== M ================================================== -->
<section id="anim_vf_letter_m" class="section_alphabet row">
    <h2 class="title_alphabet">M</h2>

        <!-- Card  -->

        <?php foreach ($vf_m as $cards_m)
    { ?>

        <div class="card bg-primary">

            <div class="imgBx">

                <img src="<?= $cards_m["minia_anime_vf"] ?>" alt="Image1">

            </div>

            <div class="content">
                <h2 class="card__title"><?= $cards_m["title_anime_vf"] ?></h2>
                <p><?= $cards_m["pitch_anime_vf"] ?></p>
                <a href="<?= $cards_m["url_anime_vf"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
            </div>

        </div> 

        <?php } ?>

</section>


<!-- ================================================== N ================================================== -->
<section id="anim_vf_letter_n" class="section_alphabet row">
    <h2 class="title_alphabet">N</h2>

        <!-- Card  -->

        <?php foreach ($vf_n as $cards_n)
    { ?>

        <div class="card bg-primary">

            <div class="imgBx">

                <img src="<?= $cards_n["minia_anime_vf"] ?>" alt="Image1">

            </div>

            <div class="content">
                <h2 class="card__title"><?= $cards_n["title_anime_vf"] ?></h2>
                <p><?= $cards_n["pitch_anime_vf"] ?></p>
                <a href="<?= $cards_n["url_anime_vf"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
            </div>

        </div> 

        <?php } ?>

</section>


<!-- ================================================== O ================================================== -->
<section id="anim_vf_letter_o" class="section_alphabet row">
    <h2 class="title_alphabet">O</h2>

        <!-- Card  -->

        <?php foreach ($vf_o as $cards_o)
    { ?>

        <div class="card bg-primary">

            <div class="imgBx">

                <img src="<?= $cards_o["minia_anime_vf"] ?>" alt="Image1">

            </div>

            <div class="content">
                <h2 class="card__title"><?= $cards_o["title_anime_vf"] ?></h2>
                <p><?= $cards_o["pitch_anime_vf"] ?></p>
                <a href="<?= $cards_o["url_anime_vf"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
            </div>

        </div> 

        <?php } ?>

</section>


<!-- ================================================== P ================================================== -->
<section id="anim_vf_letter_p" class="section_alphabet row">
    <h2 class="title_alphabet">P</h2>

        <!-- Card  -->

        <?php foreach ($vf_p as $cards_p)
    { ?>

        <div class="card bg-primary">

            <div class="imgBx">

                <img src="<?= $cards_p["minia_anime_vf"] ?>" alt="Image1">

            </div>

            <div class="content">
                <h2 class="card__title"><?= $cards_p["title_anime_vf"] ?></h2>
                <p><?= $cards_p["pitch_anime_vf"] ?></p>
                <a href="<?= $cards_p["url_anime_vf"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
            </div>

        </div> 

        <?php } ?>

</section>


<!-- ================================================== Q ================================================== -->
<section id="anim_vf_letter_q" class="section_alphabet row">
    <h2 class="title_alphabet">Q</h2>

        <!-- Card  -->

        <?php foreach ($vf_q as $cards_q)
    { ?>

        <div class="card bg-primary">

            <div class="imgBx">

                <img src="<?= $cards_q["minia_anime_vf"] ?>" alt="Image1">

            </div>

            <div class="content">
                <h2 class="card__title"><?= $cards_q["title_anime_vf"] ?></h2>
                <p><?= $cards_q["pitch_anime_vf"] ?></p>
                <a href="<?= $cards_q["url_anime_vf"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
            </div>

        </div> 

        <?php } ?>

</section>



<!-- ================================================== R ================================================== -->
<section id="anim_vf_letter_r" class="section_alphabet row">
    <h2 class="title_alphabet">R</h2>

        <!-- Card  -->

        <?php foreach ($vf_r as $cards_r)
    { ?>

        <div class="card bg-primary">

            <div class="imgBx">

                <img src="<?= $cards_r["minia_anime_vf"] ?>" alt="Image1">

            </div>

            <div class="content">
                <h2 class="card__title"><?= $cards_r["title_anime_vf"] ?></h2>
                <p><?= $cards_r["pitch_anime_vf"] ?></p>
                <a href="<?= $cards_r["url_anime_vf"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
            </div>

        </div> 

        <?php } ?>

</section>


<!-- ================================================== S ================================================== -->
<section id="anim_vf_letter_s" class="section_alphabet row">
    <h2 class="title_alphabet">S</h2>

        <!-- Card  -->

        <?php foreach ($vf_s as $cards_s)
    { ?>

        <div class="card bg-primary">

            <div class="imgBx">

                <img src="<?= $cards_s["minia_anime_vf"] ?>" alt="Image1">

            </div>

            <div class="content">
                <h2 class="card__title"><?= $cards_s["title_anime_vf"] ?></h2>
                <p><?= $cards_s["pitch_anime_vf"] ?></p>
                <a href="<?= $cards_s["url_anime_vf"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
            </div>

        </div> 

        <?php } ?>

</section>


<!-- ================================================== T ================================================== -->
<section id="anim_vf_letter_t" class="section_alphabet row">
    <h2 class="title_alphabet">T</h2>

        <!-- Card  -->

        <?php foreach ($vf_t as $cards_t)
    { ?>

        <div class="card bg-primary">

            <div class="imgBx">

                <img src="<?= $cards_t["minia_anime_vf"] ?>" alt="Image1">

            </div>

            <div class="content">
                <h2 class="card__title"><?= $cards_t["title_anime_vf"] ?></h2>
                <p><?= $cards_t["pitch_anime_vf"] ?></p>
                <a href="<?= $cards_t["url_anime_vf"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
            </div>

        </div> 

        <?php } ?>

</section>


<!-- ================================================== U ================================================== -->
<section id="anim_vf_letter_u" class="section_alphabet row">
    <h2 class="title_alphabet">U</h2>

        <!-- Card  -->

        <?php foreach ($vf_u as $cards_u)
    { ?>

        <div class="card bg-primary">

            <div class="imgBx">

                <img src="<?= $cards_u["minia_anime_vf"] ?>" alt="Image1">

            </div>

            <div class="content">
                <h2 class="card__title"><?= $cards_u["title_anime_vf"] ?></h2>
                <p><?= $cards_u["pitch_anime_vf"] ?></p>
                <a href="<?= $cards_u["url_anime_vf"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
            </div>

        </div> 

        <?php } ?>

</section>
  

<!-- ================================================== V ================================================== -->
<section id="anim_vf_letter_v" class="section_alphabet row">
    <h2 class="title_alphabet">V</h2>

        <!-- Card  -->

        <?php foreach ($vf_v as $cards_v)
    { ?>

        <div class="card bg-primary">

            <div class="imgBx">

                <img src="<?= $cards_v["minia_anime_vf"] ?>" alt="Image1">

            </div>

            <div class="content">
                <h2 class="card__title"><?= $cards_v["title_anime_vf"] ?></h2>
                <p><?= $cards_v["pitch_anime_vf"] ?></p>
                <a href="<?= $cards_v["url_anime_vf"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
            </div>

        </div> 

        <?php } ?>

</section>


<!-- ================================================== W ================================================== -->
<section id="anim_vf_letter_w" class="section_alphabet row">
    <h2 class="title_alphabet">W</h2>

        <!-- Card  -->

        <?php foreach ($vf_w as $cards_w)
    { ?>

        <div class="card bg-primary">

            <div class="imgBx">

                <img src="<?= $cards_w["minia_anime_vf"] ?>" alt="Image1">

            </div>

            <div class="content">
                <h2 class="card__title"><?= $cards_w["title_anime_vf"] ?></h2>
                <p><?= $cards_w["pitch_anime_vf"] ?></p>
                <a href="<?= $cards_w["url_anime_vf"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
            </div>

        </div> 

        <?php } ?>

</section>

<!-- ================================================== X ================================================== -->
<section id="anim_vf_letter_x" class="section_alphabet row">
    <h2 class="title_alphabet">X</h2>

        <!-- Card  -->

        <?php foreach ($vf_x as $cards_x)
    { ?>

        <div class="card bg-primary">

            <div class="imgBx">

                <img src="<?= $cards_x["minia_anime_vf"] ?>" alt="Image1">

            </div>

            <div class="content">
                <h2 class="card__title"><?= $cards_x["title_anime_vf"] ?></h2>
                <p><?= $cards_x["pitch_anime_vf"] ?></p>
                <a href="<?= $cards_x["url_anime_vf"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
            </div>

        </div> 

        <?php } ?>

</section>


<!-- ================================================== Y ================================================== -->
<section id="anim_vf_letter_y" class="section_alphabet row">
    <h2 class="title_alphabet">Y</h2>

        <!-- Card  -->

        <?php foreach ($vf_y as $cards_y)
    { ?>

        <div class="card bg-primary">

            <div class="imgBx">

                <img src="<?= $cards_y["minia_anime_vf"] ?>" alt="Image1">

            </div>

            <div class="content">
                <h2 class="card__title"><?= $cards_y["title_anime_vf"] ?></h2>
                <p><?= $cards_y["pitch_anime_vf"] ?></p>
                <a href="<?= $cards_y["url_anime_vf"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
            </div>

        </div> 

        <?php } ?>

</section>


<!-- ================================================== Z ================================================== -->
<section id="anim_vf_letter_z" class="section_alphabet row">
    <h2 class="title_alphabet">Z</h2>

        <!-- Card  -->

        <?php foreach ($vf_z as $cards_z)
    { ?>

        <div class="card bg-primary">

            <div class="imgBx">

                <img src="<?= $cards_z["minia_anime_vf"] ?>" alt="Image1">

            </div>

            <div class="content">
                <h2 class="card__title"><?= $cards_z["title_anime_vf"] ?></h2>
                <p><?= $cards_z["pitch_anime_vf"] ?></p>
                <a href="<?= $cards_z["url_anime_vf"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
            </div>

        </div> 

        <?php } ?>

</section>

</div>


</main>

    <?php require './src/php/footer/footer.php' ?>

</body>
</html>