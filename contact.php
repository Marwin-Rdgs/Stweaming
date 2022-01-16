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

    <title>Streaming-Win ~ Contact</title>

    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>

</head>
<body class="container bg-test w100">

    <?php require 'header.php' ?>

<main>

      <div class="form">
        <div class="contact-info">
          <h3 class="contact_title">Me Contacter autrement</h3>
          <p class="text">
            Je suis également disponible sur mon adresse mail ci-jointe, mais également mes différents réseaux sociaux.
          </p>

          <div class="info">

            <div class="information">
            <a href="mailto:contact@marwin-rodrigues.fr">    
              <img src="public/img/email.png" class="icon" alt="icône mail" style="float:left">
              <p class="contact__mail"><NOBR>contact@marwin-rodrigues.fr</NOBR></p>
            </a>  
            </div>

          </div>

          <div class="social-media">
            <p>Mes Réseaux :</p>
            <div class="social-icons">
              <a href="https://www.linkedin.com/in/marwin-rodrigues/" target="_blank">
                <i class="fab fa-linkedin"></i>
              </a>
              <a href="https://www.instagram.com/marwin.rdgs/" target="_blank">
                <i class="fab fa-fw fa-instagram"></i>
              </a>
              <a href="https://www.snapchat.com/add/marwin.25" target="_blank">
                <i class="fab fa-snapchat"></i>
              </a>
              <a href="https://twitter.com/ElMarWin25" target="_blank">
                <i class="fab fa-fw fa-twitter"></i>
              </a>
              <a href="https://www.facebook.com/profile.php?id=100012345095394" target="_blank">
                <i class="fab fa-fw fa-facebook-f"></i>
              </a>
              <a href="https://discords.com/bio/p/marwin" target="_blank">
                <i class="fab fa-discord"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">

          <form action="index.html" autocomplete="off">
            <h3 class="contact_title">Me Contacter</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" placeholder="Nom"/>
              <span>Nom</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" placeholder="Email"/>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="object" name="object" class="input" placeholder="Objet"/>
              <span>Objet</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input" placeholder="Message"></textarea>
              <span>Message</span>
            </div>
            <input type="submit" value="Envoyer" class="btn contact__envoyer" />
          </form>
        </div>
      </div>
    </div>

    <script src="src/js/fonctions.js"></script>


</main>

    <?php require 'footer.php' ?>

</body>
</html>