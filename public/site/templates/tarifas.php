<?php include("./_head.php"); ?>

  <!-- Jumbotron: Page header -->
  <div class="k-jumbotron">
    <div class="k-page-header-80">
      <h1 class="k-heading"><?php echo __("Tarifas"); ?></h1>
      <p><?php echo __("Conoce las diferentes opciones para acceder a MIBICI y elige la que más te convenga"); ?></p>
    </div>
  </div>

  <section class="k-section-80 pricing">
    <div class="grid">
      <div class="unit half">
        <figure class="badge-annual-pricing">
          <h3><?php echo __("Suscripción Anual"); ?></h3>
          <p class="k-xl"><?php echo __("$365"); ?>
          <span> <?php echo __("al año"); ?></span></p>
          <p><?php echo __("Paga una vez y disfruta el servicio durante 365 días continuos. Llega a tus reuniones, haz tus compras, trámites etc. dentro del polígono MIBICI de forma rápida y divertida."); ?></p>
          <p class="k-xs"><?php echo __("Incluye todos los viajes estación a estación de 30 minutos sin costo adicional y dentro de los horarios de servicio."); ?></p>
          <div class="badge-footer">
            <div class="left-side">
              <a href="<?php echo $pages->get(1025)->url; ?>" alt="<?php echo $pages->get(1025)->title; ?>"><?php echo __("Más información"); ?></a>
            </div>
            <div class="right-side">
              <div class="k-annual-badge-button">
                <a href="<?php echo $pages->get(1095)->url; ?>" alt="<?php echo $pages->get(1095)->title; ?>">
                  <button>
                    <?php echo __("Regístrate"); ?>
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="10px" height="10px"><path d="M23.9 13.8L13.1 3C12 1.8 10 1.8 8.9 3c-1.2 1.2-1.2 3.1 0 4.2l8.8 8.8-8.8 8.8c-1.2 1.2-1.2 3.1 0 4.2 1.2 1.2 3.1 1.2 4.2 0l10.8-10.8c.6-.6.9-1.4.9-2.2 0-.8-.3-1.6-.9-2.2z" fill="#10AE9C"/></svg>
                    </span>
                  </button>
                </a>
              </div>
            </div>
          </div>
        </figure>
      </div>
      <div class="unit half">
        <figure class="badge-temporary" >
          <h3><?php echo __("Suscripciones Temporales"); ?></h3>
          <p class="k-xl"><?php echo __("1 día"); ?> 
          <span>|</span> 
          <?php echo __("$80"); ?></p>
          <p style="min-height: 88px;"><?php echo __("En nuestra ciudad hay muchas opciones divertidas y MIBICI está cerca de ellas. Aprovecha tu  día pedaleando, llegarás más rápido y es más barato."); ?> <br></p>
          <p class="k-xs"><?php echo __("Incluye todos los viajes estación a estación de 30 minutos sin costo adicional y dentro de los horarios de servicio."); ?></p>
          <div class="badge-footer">
            <div class="left-side">
              <a href="<?php echo $pages->get(1026)->url; ?>" alt="<?php echo $pages->get(1026)->title; ?>"><?php echo __("Conocer detalles"); ?></a>
            </div>
          </div>
        </figure>
      </div>
      <div class="unit half">
        <figure class="badge-temporary" >
          <h3><?php echo __("Suscripciones Temporales"); ?></h3>
          <p class="k-xl"><?php echo __("3 días"); ?> <span>|</span> 
          <?php echo __("$160"); ?></p>
          <p><?php echo __("Conoce los diferentes barrios y zonas de la ciudad, encuentra en ellos la riqueza arquitectónica, su oferta gastronómica y cultural en MIBICI."); ?></p>
          <p class="k-xs"><?php echo __("Incluye todos los viajes estación a estación de 30 minutos sin costo adicional y dentro de los horarios de servicio."); ?></p>
          <div class="badge-footer">
            <div class="left-side">
              <a href="<?php echo $pages->get(1026)->url; ?>" alt="<?php echo $pages->get(1026)->title; ?>"><?php echo __("Conocer detalles"); ?></a>
            </div>
          </div>
        </figure>
      </div>
      <div class="unit half">
        <figure class="badge-temporary" >
          <h3><?php echo __("Suscripciones Temporales"); ?></h3>
          <p class="k-xl"><?php echo __("7 días"); ?> <span>|</span> 
          <?php echo __("$280"); ?></p>
          <p><?php echo __("MIBICI se encuentra en la zona más activa de la ciudad. Si visitas por negocios o placer aprovecha el servicio y experimenta una rutina diferente cada día."); ?></p>
          <p class="k-xs"><?php echo __("Incluye todos los viajes estación a estación de 30 minutos sin costo adicional y dentro de los horarios de servicio."); ?></p>
          <div class="badge-footer">
            <div class="left-side">
              <a href="<?php echo $pages->get(1026)->url; ?>" alt="<?php echo $pages->get(1026)->title; ?>"><?php echo __("Conocer detalles"); ?></a>
            </div>
          </div>
        </figure>
      </div>
    </div>
  </section>

  <?php if (file_exists("./_{$page->name}.php")) include("./_{$page->name}.php"); ?>

<?php include("./_foot.php"); ?>
