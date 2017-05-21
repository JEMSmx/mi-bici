<?php include("./_head.php"); ?>
  <!-- Jumbotron: Page header -->
  <div class="k-jumbotron">
    <div class="k-page-header-80">
      <h1 class="k-heading"><?php echo __("Contacto"); ?></h1>
      <p><?php echo __("MIBICI mejora con tu colaboración, estamos para servirte"); ?></p>
    </div>
  </div>
  <!-- Section: More info <(^_^<) 4 -->
  <section class="k-section-80 contact">
    <div class="grid">
      <div class="unit one-third">
        <h2><?php echo __("Atención telefónica"); ?></h2>
        <a href="tel:30022424">
         (33) 3002 2424 (BICI)
        </a>
        <p class="k-sm"><?php echo __("Lunes-Domingo"); ?> <br>
        <?php echo __("9:00 hrs a 21:00 hrs"); ?></p>
      </div>
      <div class="unit one-third">
        <h2><?php echo __("Correo"); ?></h2>
        <a href="mailto:<?php echo __("contacto@mibici.net"); ?>">
          <?php echo __("contacto@mibici.net"); ?>
        </a>
      </div>
      <div class="unit one-third">
        <h2><?php echo __("Redes"); ?></h2>
        <div class="social-networks">
          <a href="https://www.facebook.com/MiBiciPublica" target="_blank" alt="Facebook MIBICI">
            <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/facebook.svg" alt="">
          </a>
          <a href="https://twitter.com/MiBiciPublica" target="_blank" alt="Twitter MIBICI">
            <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/twitter.svg" alt="">
          </a>
          <a href="http://instagram.com/mibicipublica" target="_blank" alt="instagram MIBICI">
            <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/instagram.svg" alt="">
          </a>
          <a href="https://www.youtube.com/user/MiBiciPublica/" target="_blank" alt="Youtube MIBICI">
            <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/youtube.svg" alt="">
          </a>
        </div>
      </div>
    </div>
    <hr>
    <div class="grid customer-service">
      <div class="unit half">
        <h2><?php echo __("Centro de atención Guadalajara"); ?></h2>
        <p><?php echo __("Av. Federalismo 403, Centro, Guadalajara"); ?></p>
        <p style="margin-top:15px;" class="k-sm">
        <?php echo __("L-V 9:00 a 20:00 horas - S 9:00 a 3:00 horas"); ?></p>
        <iframe style="margin-top:15px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14931.897450534152!2d-103.3545505!3d20.670622!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x34bb18a86a5aa163!2sMIBICI+Guadalajara!5e0!3m2!1ses-419!2smx!4v1481565040941" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="unit half">
        <h2><?php echo __("Centro de atención Zapopan"); ?></h2>
        <p><?php echo __("Calle Ramón Corona 180, Centro, Zapopan"); ?></p>
        <p style="margin-top:15px;" class="k-sm">
        <?php echo __("L-V 8:30 hrs a 16:30 horas"); ?></p>
        <iframe style="margin-top:15px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14926.652660987098!2d-103.3943603!3d20.7238983!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x631a74d35a864ce3!2sIMTJ!5e0!3m2!1ses-419!2smx!4v1482955265385" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
  </section>


<?php include("./_foot.php"); ?>
