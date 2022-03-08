<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-indicators aaaa">
    <!-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
      aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
      aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
      aria-label="Slide 3"></button> -->
    <?php

    for ($i = 0; $i < 3; $i++) {
        ?>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $i; ?>"
              <?php if ($i == 0) { ?> class="active" aria-current="true" <?php } ?>
              aria-label="Slide <?php echo $i + 1; ?>"></button>
            <?php
    }?>

  </div>
  <div class="carousel-inner">

    <div class="carousel-item active" data-bs-interval="7000">
      <img src="./assets/image/background.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption aaaa d-none d-md-block">
        <div class="titre_animation" title="JITENSHIA">JITENSHIA</div>

      </div>
    </div>

    <div class="carousel-item" data-bs-interval="5000">
      <img src="./assets/image/background.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption aaaa d-none d-md-block">
        <h5>Présentation de l’entreprise</h5>
        <p>Jitensha est une entreprise qui fût crée en 1970 par deux personnes.
          Elle travaille uniquement dans le domaine du vélo et essaye au quotidien de proposer ces meilleurs
          produits.
        </p>
      </div>
    </div>

    <div class="carousel-item" data-bs-interval="5000">
      <img src="./assets/image/background.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption aaaa d-none d-md-block">
          <div class="slide3_texte">Cliquer sur le lien ci-dessous pour découvrir nos autres modèles</div>
        <div class="home_conteneur">
            <a href="<?= ROOT_URL?>carousel_velo" ><span class="home_bouton">Découvrir</span></a>
        </div>
      </div>
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
    data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
    data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
