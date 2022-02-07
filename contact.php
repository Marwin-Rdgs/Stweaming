<?php
if(isset($_POST['mailform']))
{
	if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message']))
	{
		$header="MIME-Version: 1.0\r\n";
		$header.='From:"stweaming.marwin-rodrigues.fr"<contact@marwin-rodrigues.fr>'."\n";
		$header.='Content-Type:text/html; charset="uft-8"'."\n";
		$header.='Content-Transfer-Encoding: 8bit';

		$message='
		<html>
			<body>
				<div align="center">
					<u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br />
					<u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
					<br />
					'.nl2br($_POST['message']).'
				</div>
			</body>
		</html>
		';

		mail("marwin-rdgs.25@laposte.net", "CONTACT - Stweaming", $message, $header);
		$msg="Votre message a bien été envoyé !";
	}
	else
	{
		$msg="Tous les champs doivent être complétés !";
	}
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Appel à la librairie Bootsrap = Lux -->
    <link rel="stylesheet" href="https://bootswatch.com/5/lux/bootstrap.css">

    <!-- Appel à la feuille de style -->
    <link rel="stylesheet" href="./src/css/style.css">

    <title>Stweaming ~ Contact</title>

    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>

</head>
<body class="container bg-test w100">

    <?php require './src/php/header/header.php' ?>

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
              <input type="text" name="name" class="input" placeholder="Votre nom" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>"/>
              <span>Nom</span>
            </div>
            <div class="input-container">
              <input type="email" name="mail" class="input" placeholder="Votre email" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>"/>
              <span>Email</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input" placeholder="Votre message"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea>
              <span>Message</span>
            </div>
            <input type="submit" value="Envoyer !" class="btn contact__envoyer" name="mailform"/>
          </form>
          <?php
		if(isset($msg))
		{
			echo $msg;
		}
		?>
        </div>
      </div>
    </div>

    <script src="src/js/contact.js"></script>


</main>

<br><br><br>
    <?php require './src/php/footer/footer.php' ?>

</body>
</html>