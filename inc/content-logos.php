<div class="container-fluid  section-logos">
  <div class="container">
    <div class="products-category">
      <?php
      $homa = get_template_directory_uri() . "/assets/images/homa.png";
      $noavaran = get_template_directory_uri() . "/assets/images/noavaran.png";
      $setare = get_template_directory_uri() . "/assets/images/setare.png";
      $soheil = get_template_directory_uri() . "/assets/images/soheil.png";
      $yazd = get_template_directory_uri() . "/assets/images/kashi-yazd.png";
      $yaghot = get_template_directory_uri() . "/assets/images/yaghot.png";
      $logos = array(
        $homa,
        $noavaran,
        $setare,
        $soheil,
        $yazd,
        $yaghot
      );
      ?>
      <?php for ($i = 0; $i < 6; $i++) : ?>
        <div class="logos-image">
          <img src="<?php echo $logos[$i] ?>" alt="client">
        </div>
      <?php endfor ?>
    </div>
  </div>
</div>