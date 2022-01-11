<?php


for ($i = 0; $i < 3; $i++) {
    ?>
    <button type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="<?php echo $i; ?>" <?php if ($i == 0) { ?> class="active" aria-current="true" <?php } ?>
            aria-label="Slide <?php echo $i + 1; ?>"></button>
    <?php
}?>
