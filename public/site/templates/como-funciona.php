<?php include("./_head.php"); ?>
  <!-- Jumbotron: Page header -->
  <div class="k-jumbotron">
    <div class="k-page-header-80" style="max-width: 1180px;">
      <h1 class="k-heading"><?php echo __("Cómo funciona"); ?></h1>
      <p><?php echo __("Libera, pedalea y devuelve. Utilizar MIBICI es sencillo, práctico y económico."); ?></p>
    </div>
  </div>
  <main id="pasos-main-wrap" class="intro-section">
    <section id="intro-section" class="pasos-section">
      <div class="text">
        <h2 class="trigger" aria-hidden="true">trigger-intro</h2>
        <span class="text-wrap">
        <h3 class="heading"><?php echo __("Qué es MIBICI"); ?></h3>
          <p>
            <?php echo __("MIBICI es un"); ?> 
            <strong><?php echo __("servicio de transporte público"); ?></strong> 
            <?php echo __("basado en una"); ?> 
            <strong><?php echo __("red de estaciones automáticas"); ?></strong> 
            <?php echo __("donde puedes tomar y/o dejar una bicicleta."); ?>
          </p>
          <p>
            <?php echo __("Disponible todos los días de"); ?> 
            <strong><?php echo __("6:00 a 00:00 horas."); ?></strong>
          </p>
          <p>
           <?php echo __("Adquiere una"); ?> 
           <a href="<?php echo $pages->get(1025)->url; ?>" alt="<?php echo $pages->get(1025)->title; ?>"><?php echo __("suscripción anual"); ?></a> 
           <?php echo __("y recibe tu llave MIBICI o  compra una"); ?> 
           <a href="<?php echo $pages->get(1026)->url; ?>" alt="<?php echo $pages->get(1026)->title; ?>">
           <?php echo __("suscripción temporal"); ?></a> 
           <?php echo __("directamente en cualquiera de las estaciones."); ?>
          </p>
        </span>
      </div>
     </section>
      <span id="counter-wrap"><span class="counter-circle"><span>1</span><span>2</span><span>3</span></span></span>
      <section id="section-1" class="step-1 pasos-section">
      <div class="text">
        <h2 data-step="num-1" class="trigger" aria-hidden="true">trigger-1</h2>
        <span class="text-wrap">
        <h3 class="heading"><?php echo __("Libera"); ?></h3>
        <p><strong><?php echo __("Inserta tu llave MIBICI"); ?></strong> 
        <?php echo __("en el puerto de anclaje y espera la luz verde."); ?></p>
        <p><strong><?php echo __("Con suscripción temporal"); ?></strong>: 
        <?php echo __("digita el código con los números del teclado en el puerto de anclaje."); ?></p>
          </span>
      </div>
     </section>
       <section id="section-2" class="step-2 pasos-section">
      <div class="text">
        <h2 data-step="num-1" class="trigger" aria-hidden="true">trigger-2</h2>
        <span class="text-wrap">
          <p><strong><?php echo __("Retira la bicicleta."); ?></strong> 
          <?php echo __("Levántala jalando el asiento con un movimiento vertical, es la forma más fácil."); ?></p>
          <p><strong><?php echo __("¡Ajusta el asiento a la altura más cómoda!"); ?></strong></p>
        </span>
      </div>
     </section>
        <section id="section-3" class="step-3 pasos-section">
      <div class="text">
        <h2 data-step="num-2" class="trigger" aria-hidden="true">trigger-3</h2>
        <span class="text-wrap">
          <h3 class="heading"><?php echo __("Pedalea"); ?></h3>
          <p><strong><?php echo __("Disfruta de tu recorrido."); ?></strong> 
          <?php echo __("Es perfecta para realizar trayectos cortos, en combinación con otros medios de transporte."); ?></p>
          <p><?php echo __("Atiende las"); ?> 
          <a href="http://periodicooficial.jalisco.gob.mx/sites/periodicooficial.jalisco.gob.mx/files/10-11-16-ix.pdf" target="_blank">
          <?php echo __("leyes de tránsito"); ?></a> 
          <?php echo __("y reglas de convivencia."); ?></p>
        </span>
      </div>
     </section>
       <section id="section-4" class="step-4 pasos-section">
      <div class="text">
        <h2 data-step="num-3" class="trigger" aria-hidden="true">trigger-4</h2>
        <span class="text-wrap">
          <h3 class="heading"><?php echo __("Devuelve"); ?></h3>
          <p><?php echo __("Regresa la bicicleta en"); ?> 
          <a href="<?php echo $pages->get(1094)->url; ?>" alt="<?php echo $pages->get(1094)->title; ?>"><?php echo __("cualquier estación"); ?></a> 
          <?php echo __("de la red MIBICI"); ?> 
          <strong><?php echo __("cercana a tu destino."); ?></strong></p>
          <p><?php echo __("Ancla la bicicleta en el puerto de anclaje, apóyate en el pedal para tener mejor precisión."); ?></p>
        </span>
      </div>
     </section>

     <section id="section-6" class="step-6 pasos-section">
      <div class="text">
        <h2 data-step="num-3" class="trigger" aria-hidden="true">trigger-6</h2>
        <span class="text-wrap">
          <p><?php echo __("La"); ?>  <strong>
          <?php echo __("luz verde"); ?></strong> 
          <?php echo __("indica que has cerrado tu viaje correctamente."); ?></p>
          <p><?php echo __("La"); ?> 
          <strong><?php echo __("luz roja"); ?></strong> 
          <?php echo __("quiere decir que"); ?> 
          <strong><?php echo __("no anclaste bien la bicicleta"); ?></strong>, 
          <?php echo __("inténtalo de nuevo y espera la luz verde."); ?></p>
        </span>
      </div>
     </section>
      <span aria-hidden="true" id="bg-images">
      <span class="bg-img" style="background-image: url('<?php echo $config->urls->templates; ?>static/455375-1495356493/images/como-funciona-6.gif');"></span>
      <span class="bg-img" style="background-image: url('<?php echo $config->urls->templates; ?>static/455375-1495356493/images/como-funciona-6.gif');"></span>
      <span class="bg-img" style="background-image: url('<?php echo $config->urls->templates; ?>static/455375-1495356493/images/como-funciona-5.gif');"></span>
      <span class="bg-img" style="background-image: url('<?php echo $config->urls->templates; ?>static/455375-1495356493/images/como-funciona-4.gif');"></span>
      <span class="bg-img" style="background-image: url('<?php echo $config->urls->templates; ?>static/455375-1495356493/images/como-funciona-3.gif');"></span>
      <span class="bg-img" style="background-image: url('<?php echo $config->urls->templates; ?>static/455375-1495356493/images/como-funciona-2.gif');"></span>
      <span class="bg-img" style="background-image: url('<?php echo $config->urls->templates; ?>static/455375-1495356493/images/como-funciona-1.png')" ></span>
      </span>
    </main>
    <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>
    <script src="https://cdn.rawgit.com/leafo/sticky-kit/v1.1.2/jquery.sticky-kit.min.js"></script>
    <script>
        var trigger = $(".trigger");
        var section = $('.pasos-section');

        trigger.stick_in_parent({spacer: false, offset_top: 142})
        .on("sticky_kit:stick", function(e) {
           section.parent().removeClass('intro-section section-1 section-2 section-3 section-4 section-5 section-6 num-1 num-2 num-3');
           $(this).parents('#pasos-main-wrap').addClass($(this).parents('.pasos-section').attr('id'));
           $(this).parents('#pasos-main-wrap').addClass($(this).attr('data-step'));
          })

        .on("sticky_kit:unbottom", function(e) {
          section.parent().removeClass('intro-section section-1 section-2 section-3 section-4 section-5 section-6 num-1 num-2 num-3');
          $(this).parents('#pasos-main-wrap').addClass($(this).parents('.pasos-section').attr('id'));
          $(this).parents('#pasos-main-wrap').addClass($(this).attr('data-step'));
          })

        $(document.body).trigger("sticky_kit:recalc");

        var counter = $('#counter-wrap');
        counter.stick_in_parent({spacer: false, offset_top: 290})

        .on("sticky_kit:bottom", function(e) {
           counter.removeClass('is-visible');
          })
        .on("sticky_kit:stick", function(e) {
           counter.addClass('is-visible');
          })

        .on("sticky_kit:unstick", function(e) {
           counter.removeClass('is-visible');
          })

        .on("sticky_kit:unbottom", function(e) {
           counter.addClass('is-visible');
          });
    </script>
    <section class="grid">
      <div class="unit half complement-info-card--meet-the-bike">
        <div class="color-layer">
          <h3 class="k-heading-xl"><?php echo __("Conoce la Bici"); ?></h3>
          <p><?php echo __("Contamos con bicicletas especiales para"); ?><br>
          <?php echo __("las necesidades de la ciudad."); ?></p>
          <a href="<?php echo $pages->get(1093)->url; ?>" alt="<?php echo $pages->get(1093)->title; ?>">
          <?php echo __("Conoce más"); ?></a>
          <img src="<?php echo $config->urls->templates; ?>static/455375-1495356493/images/foto-bici.png" alt="<?php echo __("MIBICI Bicicleta de Gudalajara"); ?>" align="center">
        </div>
      </div>
      <div class="unit half complement-info-card--register">
        <div class="color-layer">
          <h3 class="k-heading-xl"><?php echo __("¿No te has registrado?"); ?></h3>
          <p><?php echo __("Súmate al transporte eficiente de la"); ?> <br> 
          <?php echo __("ciudad y comienza a disfrutar de sus beneficios."); ?></p>
          <div class="k-annual-badge-button">
            <a href="<?php echo $pages->get(1095)->url; ?>" alt="<?php echo $pages->get(1095)->title; ?>">
              <button>
                <?php echo __("Regístrate"); ?>
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="10px" height="10px"><path d="M23.9 13.8L13.1 3C12 1.8 10 1.8 8.9 3c-1.2 1.2-1.2 3.1 0 4.2l8.8 8.8-8.8 8.8c-1.2 1.2-1.2 3.1 0 4.2 1.2 1.2 3.1 1.2 4.2 0l10.8-10.8c.6-.6.9-1.4.9-2.2 0-.8-.3-1.6-.9-2.2z" fill="#d72538"/></svg>
                </span>
              </button>
            </a>
          </div>
        </div>
      </div>
    </section>
<?php include("./_foot.php"); ?>
