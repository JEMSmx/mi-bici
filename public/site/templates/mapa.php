<?php include("./_head.php"); ?>
  <!-- Jumbotron: Page header -->
  <div class="k-jumbotron">
    <div class="k-page-header-map">
      <ul>
        <li>
          <p>
           <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/full-station-icon.png" alt="<?php echo __("Estación llena"); ?>">
          <?php echo __("Estación llena"); ?>
          </p>
        </li>
        <li>
          <p>
            <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/out-of-service-station-icon.png" alt="<?php echo __("Estación vacía"); ?>">
            <?php echo __("Estación vacía"); ?>
          </p>
        </li>
        <li>
          <p>
            <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/empty-station-icon.png" alt="<?php echo __("Fuera de servicio"); ?>">
            <?php echo __("Fuera de servicio"); ?>
          </p>
        </li>
      </ul>
    </div>
  </div>
  <iframe frameborder="0" height="525px" scrolling="no" src="https://amg.bktbp.com/monitor4.php" width="100%"></iframe>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <!-- schema card -->
  <div itemscope itemtype="https://schema.org/Organization" class="sr-only">
    <div itemprop="legalName"><?php echo __("MiBici"); ?></div>
    <div itemprop="description"><?php echo __("Excelente auto-servicio de renta de bicicletas en el área metropolitana"); ?></div>
    <div itemprop="areaServed"><?php echo __("Jalisco, México"); ?></div>
  </div>
  <script src="<?php echo $config->urls->templates; ?>static/455375-147357/scripts/main.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      var height_window=$(window).height();
      var height_header=$('header').height();
      var height_estaciones=$('.k-jumbotron').height();
      var padding=40;
        $("iframe").height(height_window-(height_header+height_estaciones+padding));
    });
    $('body').on('scroll touchmove mousewheel', function(e){
      e.preventDefault();
      e.stopPropagation();
      return false;
    })
  </script>
