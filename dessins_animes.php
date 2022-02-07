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

    <title>Stweaming ~ Dessins Animés</title>
</head>
<body class="container bg-test w100">

    <?php require './src/php/header/header.php' ?>

<main>


<div class="top_page">
<h1 class="page__title">Dessins Animés</h1>

<p class="alphabet"> 
    <a href="#DA_letter_a">A</a>
    <a href="#DA_letter_b">B</a>
    <a href="#DA_letter_c">C</a>
    <a href="#DA_letter_d">D</a>
    <a href="#DA_letter_e">E</a>
    <a href="#DA_letter_f">F</a>
    <a href="#DA_letter_g">G</a>
    <a href="#DA_letter_h">H</a>
    <a href="#DA_letter_i">I</a>
    <a href="#DA_letter_j">J</a>
    <a href="#DA_letter_k">K</a>
    <a href="#DA_letter_l">L</a>
    <a href="#DA_letter_m">M</a>
    <a href="#DA_letter_n">N</a>
    <a href="#DA_letter_o">O</a>
    <a href="#DA_letter_p">P</a>
    <a href="#DA_letter_q">Q</a>
    <a href="#DA_letter_r">R</a>
    <a href="#DA_letter_s">S</a>
    <a href="#DA_letter_t">T</a>
    <a href="#DA_letter_u">U</a>
    <a href="#DA_letter_v">V</a>
    <a href="#DA_letter_w">W</a>
    <a href="#DA_letter_x">X</a>
    <a href="#DA_letter_y">Y</a>
    <a href="#DA_letter_z">Z</a>
</p>
</div>

<div class="container">

<!-- ================================================== A ================================================== -->
<section id="DA_letter_a" class="section_alphabet row">
    <h2 class="title_alphabet">A</h2>

    <!-- Cards -->

    <?php foreach ($da_a as $cards_a)
    { ?>

    <div class="card bg-primary">

        <div class="imgBx">

            <img src="<?= $cards_a["minia_da"] ?>" alt="Image1">

        </div>

        <div class="content">
            <h2 class="card__title"><?= $cards_a["title_da"] ?></h2>
            <p><?= $cards_a["pitch_da"] ?> </p>
            <a href="<?= $cards_a["url_da"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
        </div>

    </div>   

    <?php } ?>

</section>

<!-- ================================================== B ================================================== -->
<section id="DA_letter_b" class="section_alphabet row">
    <h2 class="title_alphabet">B</h2>

    <!-- Cards -->

    <?php foreach ($da_b as $cards_b)
    { ?>

    <div class="card bg-primary">

        <div class="imgBx">

            <img src="<?= $cards_b["minia_da"] ?>" alt="Image1">

        </div>

        <div class="content">
            <h2 class="card__title"><?= $cards_b["title_da"] ?></h2>
            <p><?= $cards_b["pitch_da"] ?> </p>
            <a href="<?= $cards_b["url_da"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
        </div>

    </div>   

    <?php } ?>

</section>


<!-- ================================================== C ================================================== -->
<section id="DA_letter_c" class="section_alphabet row">
    <h2 class="title_alphabet">C</h2>

    <!-- Cards -->

    <?php foreach ($da_c as $cards_c)
    { ?>

    <div class="card bg-primary">

        <div class="imgBx">

            <img src="<?= $cards_c["minia_da"] ?>" alt="Image1">

        </div>

        <div class="content">
            <h2 class="card__title"><?= $cards_c["title_da"] ?></h2>
            <p><?= $cards_c["pitch_da"] ?> </p>
            <a href="<?= $cards_c["url_da"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
        </div>

    </div>   

    <?php } ?>

</section>


<!-- ================================================== D ================================================== -->
<section id="DA_letter_d" class="section_alphabet row">
    <h2 class="title_alphabet">D</h2>

    <!-- Cards -->

    <?php foreach ($da_d as $cards_d)
    { ?>

    <div class="card bg-primary">

        <div class="imgBx">

            <img src="<?= $cards_d["minia_da"] ?>" alt="Image1">

        </div>

        <div class="content">
            <h2 class="card__title"><?= $cards_d["title_da"] ?></h2>
            <p><?= $cards_d["pitch_da"] ?> </p>
            <a href="<?= $cards_d["url_da"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
        </div>

    </div>   

    <?php } ?>

</section>


<!-- ================================================== E ================================================== -->
<section id="DA_letter_e" class="section_alphabet row">
    <h2 class="title_alphabet">E</h2>

    <!-- Cards -->

    <?php foreach ($da_e as $cards_e)
    { ?>

    <div class="card bg-primary">

        <div class="imgBx">

            <img src="<?= $cards_e["minia_da"] ?>" alt="Image1">

        </div>

        <div class="content">
            <h2 class="card__title"><?= $cards_e["title_da"] ?></h2>
            <p><?= $cards_e["pitch_da"] ?> </p>
            <a href="<?= $cards_e["url_da"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
        </div>

    </div>   

    <?php } ?>

</section>


<!-- ================================================== F ================================================== -->
<section id="DA_letter_f" class="section_alphabet row">
    <h2 class="title_alphabet">F</h2>

    <!-- Cards -->

    <?php foreach ($da_f as $cards_f)
    { ?>

    <div class="card bg-primary">

        <div class="imgBx">

            <img src="<?= $cards_f["minia_da"] ?>" alt="Image1">

        </div>

        <div class="content">
            <h2 class="card__title"><?= $cards_f["title_da"] ?></h2>
            <p><?= $cards_f["pitch_da"] ?> </p>
            <a href="<?= $cards_f["url_da"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
        </div>

    </div>   

    <?php } ?>

</section>


<!-- ================================================== G ================================================== -->
<section id="DA_letter_g" class="section_alphabet row">
    <h2 class="title_alphabet">G</h2>

    <!-- Cards -->

    <?php foreach ($da_g as $cards_g)
    { ?>

    <div class="card bg-primary">

        <div class="imgBx">

            <img src="<?= $cards_g["minia_da"] ?>" alt="Image1">

        </div>

        <div class="content">
            <h2 class="card__title"><?= $cards_g["title_da"] ?></h2>
            <p><?= $cards_g["pitch_da"] ?> </p>
            <a href="<?= $cards_g["url_da"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
        </div>

    </div>   

    <?php } ?>

</section>


<!-- ================================================== H ================================================== -->
<section id="DA_letter_h" class="section_alphabet row">
    <h2 class="title_alphabet">H</h2>

    <!-- Cards -->

    <?php foreach ($da_h as $cards_h)
    { ?>

    <div class="card bg-primary">

        <div class="imgBx">

            <img src="<?= $cards_h["minia_da"] ?>" alt="Image1">

        </div>

        <div class="content">
            <h2 class="card__title"><?= $cards_h["title_da"] ?></h2>
            <p><?= $cards_h["pitch_da"] ?> </p>
            <a href="<?= $cards_h["url_da"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
        </div>

    </div>   

    <?php } ?>

</section>

<!-- ================================================== I ================================================== -->
<section id="DA_letter_i" class="section_alphabet row">
    <h2 class="title_alphabet">I</h2>

    <!-- Cards -->

    <?php foreach ($da_i as $cards_i)
    { ?>

    <div class="card bg-primary">

        <div class="imgBx">

            <img src="<?= $cards_i["minia_da"] ?>" alt="Image1">

        </div>

        <div class="content">
            <h2 class="card__title"><?= $cards_i["title_da"] ?></h2>
            <p><?= $cards_i["pitch_da"] ?> </p>
            <a href="<?= $cards_i["url_da"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
        </div>

    </div>   

    <?php } ?>

</section>


<!-- ================================================== J ================================================== -->
<section id="DA_letter_j" class="section_alphabet row">
    <h2 class="title_alphabet">J</h2>

    <!-- Cards -->

    <?php foreach ($da_j as $cards_j)
    { ?>

    <div class="card bg-primary">

        <div class="imgBx">

            <img src="<?= $cards_j["minia_da"] ?>" alt="Image1">

        </div>

        <div class="content">
            <h2 class="card__title"><?= $cards_j["title_da"] ?></h2>
            <p><?= $cards_j["pitch_da"] ?> </p>
            <a href="<?= $cards_j["url_da"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
        </div>

    </div>   

    <?php } ?>

</section>


<!-- ================================================== K ================================================== -->
<section id="DA_letter_k" class="section_alphabet row">
    <h2 class="title_alphabet">K</h2>

    <!-- Cards -->

    <?php foreach ($da_k as $cards_k)
    { ?>

    <div class="card bg-primary">

        <div class="imgBx">

            <img src="<?= $cards_k["minia_da"] ?>" alt="Image1">

        </div>

        <div class="content">
            <h2 class="card__title"><?= $cards_k["title_da"] ?></h2>
            <p><?= $cards_k["pitch_da"] ?> </p>
            <a href="<?= $cards_k["url_da"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
        </div>

    </div>   

    <?php } ?>

</section>


<!-- ================================================== L ================================================== -->
<section id="DA_letter_l" class="section_alphabet row">
    <h2 class="title_alphabet">L</h2>

    <!-- Cards -->

    <?php foreach ($da_l as $cards_l)
    { ?>

    <div class="card bg-primary">

        <div class="imgBx">

            <img src="<?= $cards_l["minia_da"] ?>" alt="Image1">

        </div>

        <div class="content">
            <h2 class="card__title"><?= $cards_l["title_da"] ?></h2>
            <p><?= $cards_l["pitch_da"] ?> </p>
            <a href="<?= $cards_l["url_da"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
        </div>

    </div>   

    <?php } ?>

</section>


<!-- ================================================== M ================================================== -->
<section id="DA_letter_m" class="section_alphabet row">
    <h2 class="title_alphabet">M</h2>

    <!-- Cards -->

    <?php foreach ($da_m as $cards_m)
    { ?>

    <div class="card bg-primary">

        <div class="imgBx">

            <img src="<?= $cards_m["minia_da"] ?>" alt="Image1">

        </div>

        <div class="content">
            <h2 class="card__title"><?= $cards_m["title_da"] ?></h2>
            <p><?= $cards_m["pitch_da"] ?> </p>
            <a href="<?= $cards_m["url_da"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
        </div>

    </div>   

    <?php } ?>

</section>



<!-- ================================================== N ================================================== -->
<section id="DA_letter_n" class="section_alphabet row">
    <h2 class="title_alphabet">N</h2>

    <!-- Cards -->

    <?php foreach ($da_n as $cards_n)
    { ?>

    <div class="card bg-primary">

        <div class="imgBx">

            <img src="<?= $cards_n["minia_da"] ?>" alt="Image1">

        </div>

        <div class="content">
            <h2 class="card__title"><?= $cards_n["title_da"] ?></h2>
            <p><?= $cards_n["pitch_da"] ?> </p>
            <a href="<?= $cards_n["url_da"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
        </div>

    </div>   

    <?php } ?>

</section>


<!-- ================================================== O ================================================== -->
<section id="DA_letter_o" class="section_alphabet row">
    <h2 class="title_alphabet">O</h2>

    <!-- Cards -->

    <?php foreach ($da_o as $cards_o)
    { ?>

    <div class="card bg-primary">

        <div class="imgBx">

            <img src="<?= $cards_o["minia_da"] ?>" alt="Image1">

        </div>

        <div class="content">
            <h2 class="card__title"><?= $cards_o["title_da"] ?></h2>
            <p><?= $cards_o["pitch_da"] ?> </p>
            <a href="<?= $cards_o["url_da"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
        </div>

    </div>   

    <?php } ?>

</section>


<!-- ================================================== P ================================================== -->
<section id="DA_letter_p" class="section_alphabet row">
    <h2 class="title_alphabet">P</h2>

    <!-- Cards -->

    <?php foreach ($da_p as $cards_p)
    { ?>

    <div class="card bg-primary">

        <div class="imgBx">

            <img src="<?= $cards_p["minia_da"] ?>" alt="Image1">

        </div>

        <div class="content">
            <h2 class="card__title"><?= $cards_p["title_da"] ?></h2>
            <p><?= $cards_p["pitch_da"] ?> </p>
            <a href="<?= $cards_p["url_da"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
        </div>

    </div>   

    <?php } ?>

</section>


<!-- ================================================== Q ================================================== -->
<section id="DA_letter_q" class="section_alphabet row">
    <h2 class="title_alphabet">Q</h2>

    <!-- Cards -->

    <?php foreach ($da_q as $cards_q)
    { ?>

    <div class="card bg-primary">

        <div class="imgBx">

            <img src="<?= $cards_q["minia_da"] ?>" alt="Image1">

        </div>

        <div class="content">
            <h2 class="card__title"><?= $cards_q["title_da"] ?></h2>
            <p><?= $cards_q["pitch_da"] ?> </p>
            <a href="<?= $cards_q["url_da"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
        </div>

    </div>   

    <?php } ?>

</section>


<!-- ================================================== R ================================================== -->
<section id="DA_letter_r" class="section_alphabet row">
    <h2 class="title_alphabet">R</h2>

    <!-- Cards -->

    <?php foreach ($da_r as $cards_r)
    { ?>

    <div class="card bg-primary">

        <div class="imgBx">

            <img src="<?= $cards_r["minia_da"] ?>" alt="Image1">

        </div>

        <div class="content">
            <h2 class="card__title"><?= $cards_r["title_da"] ?></h2>
            <p><?= $cards_r["pitch_da"] ?> </p>
            <a href="<?= $cards_r["url_da"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
        </div>

    </div>   

    <?php } ?>

</section>


<!-- ================================================== S ================================================== -->
<section id="DA_letter_S" class="section_alphabet row">
    <h2 class="title_alphabet">S</h2>

    <!-- Cards -->

    <?php foreach ($da_s as $cards_s)
    { ?>

    <div class="card bg-primary">

        <div class="imgBx">

            <img src="<?= $cards_s["minia_da"] ?>" alt="Image1">

        </div>

        <div class="content">
            <h2 class="card__title"><?= $cards_s["title_da"] ?></h2>
            <p><?= $cards_s["pitch_da"] ?> </p>
            <a href="<?= $cards_s["url_da"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
        </div>

    </div>   

    <?php } ?>

</section>


<!-- ================================================== T ================================================== -->
<section id="DA_letter_t" class="section_alphabet row">
    <h2 class="title_alphabet">T</h2>

    <!-- Cards -->

    <?php foreach ($da_t as $cards_t)
    { ?>

    <div class="card bg-primary">

        <div class="imgBx">

            <img src="<?= $cards_t["minia_da"] ?>" alt="Image1">

        </div>

        <div class="content">
            <h2 class="card__title"><?= $cards_t["title_da"] ?></h2>
            <p><?= $cards_t["pitch_da"] ?> </p>
            <a href="<?= $cards_t["url_da"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
        </div>

    </div>   

    <?php } ?>

</section>


<!-- ================================================== U ================================================== -->
<section id="DA_letter_u" class="section_alphabet row">
    <h2 class="title_alphabet">U</h2>

    <!-- Cards -->

    <?php foreach ($da_u as $cards_u)
    { ?>

    <div class="card bg-primary">

        <div class="imgBx">

            <img src="<?= $cards_u["minia_da"] ?>" alt="Image1">

        </div>

        <div class="content">
            <h2 class="card__title"><?= $cards_u["title_da"] ?></h2>
            <p><?= $cards_u["pitch_da"] ?> </p>
            <a href="<?= $cards_u["url_da"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
        </div>

    </div>   

    <?php } ?>

</section>


<!-- ================================================== V ================================================== -->
<section id="DA_letter_v" class="section_alphabet row">
    <h2 class="title_alphabet">V</h2>

    <!-- Cards -->

    <?php foreach ($da_v as $cards_v)
    { ?>

    <div class="card bg-primary">

        <div class="imgBx">

            <img src="<?= $cards_v["minia_da"] ?>" alt="Image1">

        </div>

        <div class="content">
            <h2 class="card__title"><?= $cards_v["title_da"] ?></h2>
            <p><?= $cards_v["pitch_da"] ?> </p>
            <a href="<?= $cards_v["url_da"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
        </div>

    </div>   

    <?php } ?>

</section>


<!-- ================================================== W ================================================== -->
<section id="DA_letter_w" class="section_alphabet row">
    <h2 class="title_alphabet">W</h2>

    <!-- Cards -->

    <?php foreach ($da_w as $cards_w)
    { ?>

    <div class="card bg-primary">

        <div class="imgBx">

            <img src="<?= $cards_w["minia_da"] ?>" alt="Image1">

        </div>

        <div class="content">
            <h2 class="card__title"><?= $cards_w["title_da"] ?></h2>
            <p><?= $cards_w["pitch_da"] ?> </p>
            <a href="<?= $cards_w["url_da"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
        </div>

    </div>   

    <?php } ?>

</section>


<!-- ================================================== X ================================================== -->
<section id="DA_letter_x" class="section_alphabet row">
    <h2 class="title_alphabet">X</h2>

    <!-- Cards -->

    <?php foreach ($da_x as $cards_x)
    { ?>

    <div class="card bg-primary">

        <div class="imgBx">

            <img src="<?= $cards_x["minia_da"] ?>" alt="Image1">

        </div>

        <div class="content">
            <h2 class="card__title"><?= $cards_x["title_da"] ?></h2>
            <p><?= $cards_x["pitch_da"] ?> </p>
            <a href="<?= $cards_x["url_da"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
        </div>

    </div>   

    <?php } ?>

</section>


<!-- ================================================== Y ================================================== -->
<section id="DA_letter_y" class="section_alphabet row">
    <h2 class="title_alphabet">Y</h2>

    <!-- Cards -->

    <?php foreach ($da_y as $cards_y)
    { ?>

    <div class="card bg-primary">

        <div class="imgBx">

            <img src="<?= $cards_y["minia_da"] ?>" alt="Image1">

        </div>

        <div class="content">
            <h2 class="card__title"><?= $cards_y["title_da"] ?></h2>
            <p><?= $cards_y["pitch_da"] ?> </p>
            <a href="<?= $cards_y["url_da"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
        </div>

    </div>   

    <?php } ?>

</section>

<!-- ================================================== Z ================================================== -->
<section id="DA_letter_z" class="section_alphabet row">
    <h2 class="title_alphabet">Z</h2>

    <!-- Cards -->

    <?php foreach ($da_z as $cards_z)
    { ?>

    <div class="card bg-primary">

        <div class="imgBx">

            <img src="<?= $cards_z["minia_da"] ?>" alt="Image1">

        </div>

        <div class="content">
            <h2 class="card__title"><?= $cards_z["title_da"] ?></h2>
            <p><?= $cards_z["pitch_da"] ?> </p>
            <a href="<?= $cards_z["url_da"] ?>"><button type="button" class="btn btn-outline-info">Découvrir</button></a>
        </div>

    </div>   

    <?php } ?>

</section>


</div>


</main>

    <?php require './src/php/footer/footer.php' ?>

</body>
</html>