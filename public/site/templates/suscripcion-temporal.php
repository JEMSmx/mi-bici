<?php include("./_head.php"); ?>
  <!-- Jumbotron: Page header -->
  <div class="k-jumbotron">
    <div class="k-page-header-80">
      <h1 class="k-heading"><?php echo __("Suscripción temporal"); ?></h1>
      <p style="margin-bottom:0;"><?php echo __("¿Turista en la ciudad? ¿Te interesa probar el sistema? Tenemos una opción para ti"); ?></p>
    </div>
  </div>
  <section class="k-section-80">
  <article class="k-article">
    <h2 class="k-heading"><strong><?php echo __("¿Qué es la suscripción temporal?"); ?></strong></h2>
    <p><?php echo __("Acceso ilimitado a las bicicletas MIBICI por un periodo de 1, 3 ó 7 días y en los horarios de servicio"); ?> <br>
      <?php echo __("Se genera un código en la pantalla del quiosco de la estación que debe ser tecleado en el puerto de anclaje para liberar una bicicleta."); ?></p>
    <p align="center"><img alt="" src="<?php echo $config->urls->templates; ?>static/455375-147357/images/degollado-for-susc-temp.jpg" style="max-width:100%"></p>
    <h2 class="k-heading"><strong><?php echo __("¿Qué incluye la suscripción temporal?"); ?></strong></h2>
    <p>
       <?php echo __("Todos los viajes que realices de una estación a otra en menos de 30 minutos están incluidos en tu suscripción"); ?> <br>
       <?php echo __("Es decir: viajes ilimitados de menos 30 minutos sin cargo extra durante el periodo de la suscripción adquirida."); ?>
    </p>
    <h2 class="k-heading"><strong><?php echo __("¿Costo de la suscripción temporal?"); ?></strong></h2>
    <p>
      <strong><?php echo __("1 día"); ?></strong> <?php echo __("$80.00 MXN"); ?> <br>
      <strong><?php echo __("3 días"); ?></strong> <?php echo __("$160.00 MXN"); ?> <br>
      <strong><?php echo __("7 días"); ?></strong> <?php echo __("$280.00 MXN"); ?> <br>
      <?php echo __("Exclusivo"); ?> 
      <strong><?php echo __("TARJETA DE CRÉDITO"); ?></strong>. 
      <?php echo __("Se hará la"); ?> 
      <strong><?php echo __("retención de $1,200"); ?></strong>  
      <?php echo __("pesos por bicicleta."); ?> 
      <?php echo __("Este monto se liberará siete días despues de la expiración tu suscripción y conforme a las reglas tu banco."); ?>
    </p>
    <h2 class="k-heading"><strong><?php echo __("¿Cómo se adquiere?"); ?></strong></h2>
    <div class="vertical-split">
      <div>
        <p><?php echo __("Directamente en los quioscos de las"); ?> 
        <a href="<?php echo $pages->get(1094)->url; ?>" alt="<?php echo $pages->get(1094)->title; ?>">
        <?php echo __("estaciones de la red MIBICI"); ?></a> 
        <?php echo __("sigue los siguiente pasos para realizar la compra:"); ?></p>
        <ul>
          <li><?php echo __("Selecciona en la pantalla: rentar bicicleta."); ?> </li>
          <li><?php echo __("Indica la cantidad de bicicletas a rentar."); ?></li>
          <li><?php echo __("Elige el periodo de renta."); ?></li>
          <li><?php echo __("Inserta y retira tu tarjeta de crédito."); ?></li>
          <li><?php echo __("Llena los campos con los datos solicitados en la pantalla."); ?></li>
          <li><?php echo __("Memoriza o imprime el código para retirar una bicicleta."); ?></li>
        </ul>
        <img src="<?php echo $page->img3->url ?>" alt="">
      </div>
      <div>
        <img alt="" src="<?php echo $config->urls->templates; ?>static/455375-147357/images/renta-bici-2.gif">
      </div>
    </div>
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
