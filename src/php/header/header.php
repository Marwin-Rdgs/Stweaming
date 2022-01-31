<header>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary header-radius">
  <div class="container-fluid">
    <a class="navbar-brand header__title" href="index.php">Stweaming</a>

    <!-- Réaliser le bouton menu comme les cours ici -->
    <div id="toggleIcon" onclick="menuToggle()">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    </div>

    <div id="menu-overlay" class="nav">
                <ul class="menu_ul">
                    <li class="menu_li menu_liens"> <img src="./public/img/close.png" id="toggleIcon" onclick="menuToggle()" class="menu__close"> </li>
                    <li class="menu_li"><a href="./animes_vostfr.php" class="menu_liens">Animes VOSTFR</a></li>
                    <li class="menu_li"><a href="./animes_vf.php" class="menu_liens">Animes VF</a></li>
                    <li class="menu_li"><a href="./dessins_animes.php" class="menu_liens">Dessins Animés</a></li>
                    <li class="menu_li"><a href="./contact.php" class="menu_liens">Contact</a></li>
                    <li class="menu_li"><a href="./a_propos.php" class="menu_liens">À Propos</a></li>
                </ul>
        
        
                <script type="text/javascript">
                    function menuToggle(){
                        var nav = document.getElementById('menu-overlay');
                        nav.classList.toggle('active');
        
                        var nav = document.getElementById('toggleIcon');
                        nav.classList.toggle('active');
                        }
                </script>
        
    </div>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
            <li class="nav-item">
            <a class="nav-link" href="animes_vostfr.php">Animes VOSTFR</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="animes_vf.php">Animes VF</a>
            </li>
            <li class="nav-item">
            <a class="nav-link espace10" href="dessins_animes.php">Dessins Animés</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="a_propos.php">à propos</a>
            </li>
      </ul>
    </div>
  </div>
</nav>

</header>