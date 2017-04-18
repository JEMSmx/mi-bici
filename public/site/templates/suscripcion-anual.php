<?php include("./_head.php"); ?>
  <!-- Jumbotron: Page header -->
  <div class="k-jumbotron">
    <div class="k-page-header-80">
      <h1 class="k-heading"><?php echo __("Suscripción anual"); ?></h1>
      <p style="margin-bottom:0;"><?php echo __("Si vives en el Área Metropolitana de Guadalajara , esta es tu mejor opción"); ?></p>
    </div>
  </div>
  <section class="k-section-80">
  <article class="k-article">
    <h2 class="k-heading"><strong><?php echo __("¿Qué es la suscripción anual?"); ?></strong></h2>
    <p>
      <?php echo __("Acceso ilimitado a las bicicletas MIBICI por el periodo de 365 días en los"); ?>
      <a href="<?php echo $pages->get(1090)->url; ?>" alt="<?php echo $pages->get(1090)->title; ?>">
      <?php echo __("horarios de servicio"); ?></a> <br>
      <?php echo __("Recibirás la llave MIBICI que te permite liberar automáticamente la bicicleta en cualquiera de las estaciones por un costo de $365.00 MXN."); ?>
    </p>
    <p align="center"><img alt="" src="<?php echo $config->urls->templates; ?>static/455375-147357/images/susc-anual.jpg" style="max-width:100%"></p>
    <h2 class="k-heading"><strong><?php echo __("¿Qué incluye la suscripción anual?"); ?></strong></h2>
    <p><?php echo __("Todos los viajes que realices de una estación a otra en menos de 30 minutos están incluidos en tu suscripción."); ?> <br>
   <?php echo __(" Es decir: viajes ilimitados de menos 30 minutos sin cargo extra durante el periodo de la suscripción adquirida."); ?></p>
    <h2 class="k-heading"><strong><?php echo __("¿Cómo se adquiere?"); ?></strong></h2>
    <p><a href="<?php echo $pages->get(1095)->url; ?>" alt="<?php echo $pages->get(1095)->title; ?>">
    <?php echo __("Registro y pago en línea"); ?></a>
    <?php echo __("o en los centros de atención MIBICI con tarjeta de crédito ó débito."); ?></p>
    <h2 class="k-heading"><strong><?php echo __("Cargos adicionales"); ?></strong></h2>
    <div class="vertical-split">
      <div>
        <p><?php echo __("Juntos mejoraremos la ciudad; al pedalear dispones de viajes ilimitados de 30 minutos sin cargo adicional. Si decides hacer viajes que duren más de 30 minutos se generarán cargos adicionales correspondientes al tiempo que dure tu viaje."); ?></p>
        <p><?php echo __("Si no deseas incurrir en estos cargos, cuida que todos tus viajes se hagan dentro del periodo de 30 minutos. Toma una bici y déjala en cualquier estación, repite esta acción cuantas veces sea necesario sin costos adicionales siempre y cuando sea dentro del margen de 30 minutos."); ?></p>
      </div>
      <div>
        <p align="center"><img src="<?php echo $page->banner->url ?>" alt="<?php echo __("Cargos adicionales MIBICI"); ?>"></p>
      </div>
    </div>
    <hr>
    <h2 class="k-heading"><strong><?php echo __("Ejemplo de uso uno"); ?></strong></h2>
    <p>
    <?php echo __("Laura es diseñadora y le encanta salir de su taller a pedalear en MIBICI. Todas las mañanas sale a la panadería en busca de algo rico para acompañar su café. Toma una bici en la estación cerca de su taller y en solo 15 minutos llega a la estación cerca de la panadería donde ancla la bici. De regreso a su taller, Laura encuentra a su mejor amiga Ana y aunque pasan un momento juntas, a Laura le da tiempo de llegar a la estación cerca de su taller y dejar la bicicleta a tiempo para no generar un cargo adicional."); ?>
    </p>
    <p align="right">
      <img alt="" src="<?php echo $page->img1->url ?>" style="max-width:100%" >
    </p>
    <hr>
    <h2 class="k-heading"><strong><?php echo __("Ejemplo de uso dos"); ?></strong></h2>
    <p>
     <?php echo __("Pedro tiene dos pasiones: su coche deportivo y la arquitectura. Pedro va de su casa a su oficina en su deportivo; durante la jornada visita a sus clientes cerca de su oficina usando MIBICI, tarda menos en llegar y no gasta su tiempo buscando estacionamiento. A la hora de la comida le gusta dar un paseo en bici para contemplar la arquitectura de la zona, tiene 1 hora libre y no le interesa otra cosa que pasear y apreciar los edificios mas bellos de la ciudad."); ?>
    </p>
    <p>
      <img alt="" src="<?php echo $page->img2->url ?>" style="max-width:100%" align="right">
    </p>
  </article>
</section>

<?php include("./_foot.php"); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
   function showAnsw(variable){
    $("#answ-" + variable).toggle();
    $("#chev-up-" + variable).toggle ();
    $("#chev-down-" + variable).toggle ();
  }
</script>
