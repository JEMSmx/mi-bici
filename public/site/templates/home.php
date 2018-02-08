<?php include('./_head.php'); ?>
  <section class="k-message" id="home-message" style="background-color:#5e4099">
    <div class="k-message-container">
      <div class="k-message-center">
        <p><?php echo $page->notification ?></p>
      </div>
      <div class="k-message-close" onclick="toggMessage()">
        <img src="<?php echo $config->urls->templates; ?>static/455375-1511338445/images/times.svg" alt="">
      </div>
    </div>
  </section>
   <section class="j-workspace aniverary-hero">
    <!-- Jumbotron: Home -->
  <div class="k-jumbotron" id="home-wrapper" style="background-image: url(<?php echo $page->banner->url ?>)">
      <div class="k-jumbotron-color" style="background-color: transparent;">
        <div class="k-page-header-flex">
          <h1 class="k-heading" style="margin-top: 40px;">
            <span><?php //echo __("MIBICI"); ?></span> 
            <?php //echo __("somos"); ?>
            <span id="changeText"><?php //echo __("miles de usuarios"); ?></span>
          </h1>
          <p><?php //echo __("Súmate al sistema de transporte eficiente de la ciudad"); ?></p>
          <div class="k-signup-button">
            <a href="<?php echo $pages->get(1095)->url; ?>" alt="<?php echo $pages->get(1095)->title; ?>">
              <button>
              <?php echo __("Regístrate"); ?>
                <span>
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="15px" height="15px"><path d="M23.9 13.8L13.1 3C12 1.8 10 1.8 8.9 3c-1.2 1.2-1.2 3.1 0 4.2l8.8 8.8-8.8 8.8c-1.2 1.2-1.2 3.1 0 4.2 1.2 1.2 3.1 1.2 4.2 0l10.8-10.8c.6-.6.9-1.4.9-2.2 0-.8-.3-1.6-.9-2.2z" fill="#de223d"/></svg>
                </span>
              </button>
            </a>
          </div>
          <a href="<?php echo $pages->get(1090
          )->url; ?>" alt="<?php echo $pages->get(1090)->title; ?>"><?php echo __("Conoce MIBICI"); ?></a>
        </div>
  </section>
  <!-- Jumbotron: Home -->
  
  <!-- Liber,Pedalea,Devuelve -->
  <section class="k-section wrap wider">
    <div class="grid no-gutters">

      <div class="unit one-third">
          <figure class="k-figure" data-aos="zoom-in" data-aos-offset="-100">
            <a href="<?php echo $pages->get(1090)->url; ?>" alt="<?php echo $pages->get(1090)->title; ?>">
              <div class="k-container-img" style="width: 198px"><img src="<?php echo $config->urls->templates; ?>static/455375-1511395627/images/devuelve-icon.svg"></div>
              <figcaption>
                <h2 class="k-heading"><?php echo __("Libera"); ?></h2>
                <p><?php echo __("Bicicletas siempre a tu disposición"); ?></p>
              </figcaption>
            </a>
          </figure>
      </div>

      <div class="unit one-third">
        <figure class="k-figure" data-aos="zoom-in" data-aos-offset="-100" data-aos-delay="400">
          <a href="<?php echo $pages->get(1090)->url; ?>" alt="<?php echo $pages->get(1090)->title; ?>">
            <div class="k-container-img"><img src="<?php echo $config->urls->templates; ?>static/455375-1511395627/images/pedalea-icon.svg"></div>
            <figcaption>
              <h2 class="k-heading"><?php echo __("Pedalea"); ?></h2>
              <p><?php echo __("¡Disfruta la ciudad!"); ?></p>
            </figcaption>
          </a>
        </figure>
      </div>

      <div class="unit one-third">
        <figure class="k-figure" data-aos="zoom-in" data-aos-offset="-100" data-aos-delay="800">
          <a href="<?php echo $pages->get(1090)->url; ?>" alt="<?php echo $pages->get(1090)->title; ?>">
            <div class="k-container-img" style="width: 156px"><img src="<?php echo $config->urls->templates; ?>static/455375-1511395627/images/libera-icon.svg"></div>
            <figcaption>
              <h2 class="k-heading"><?php echo __("Devuelve"); ?></h2>
              <p><?php echo __("Alguien más espera por ella."); ?></p>
            </figcaption>
          </a>
        </figure>
      </div>
    </div>
  </section>
  <!-- Mapa -->
  <section>
    <div class="map-wrapper">
      <div class="map-wrapper-color">
        <div class="map-wrapper-message">
          <h2 data-aos="zoom-in" >
            <?php echo __("236 estaciones, más de 2000 bicicletas"); ?>
          </h2>
          <p data-aos="zoom-in" data-aos-delay="300"><?php echo __("Usa el"); ?>
          <a href="<?php echo $pages->get(1094)->url; ?>" alt="<?php echo $pages->get(1094)->title; ?>">
          <?php echo __("mapa de estaciones"); ?></a> 
          <?php echo __("o descarga la app para"); ?> 
          <a href="https://play.google.com/store/apps/details?id=itds.lo.Mibici&hl=es_419" target="_blank">
          <?php echo __("Android"); ?></a> o <a href="https://itunes.apple.com/mx/app/mibici/id901265862?mt=8" target="_blank">
          <?php echo __("IOS"); ?></a> <br> 
          <?php echo __("y revisa disponibilidad de bicicletas en tiempo real"); ?></p>
          <div class="k-find-a-bike-button" data-aos="zoom-in" data-aos-delay="5000">
            <a href="<?php echo $pages->get(1094)->url; ?>" alt="<?php echo $pages->get(1094)->title; ?>">
              <button>
                <?php echo __("Encuentra una Bici"); ?>
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="15px" height="15px"><path d="M23.9 13.8L13.1 3C12 1.8 10 1.8 8.9 3c-1.2 1.2-1.2 3.1 0 4.2l8.8 8.8-8.8 8.8c-1.2 1.2-1.2 3.1 0 4.2 1.2 1.2 3.1 1.2 4.2 0l10.8-10.8c.6-.6.9-1.4.9-2.2 0-.8-.3-1.6-.9-2.2z" fill="#fff"/></svg>
                </span>
              </button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Tarifas -->
  <section class="k-section pricing">
    <div class="grid">
     <h2 class="k-xl"><?php echo __("MIBICI es una excelente alternativa, conoce las diferentes suscripciones y elige la mejor para ti."); ?></h2>
      <div class="unit half">
        <figure class="badge-temporary">
          <h3><?php echo __("Suscripción Temporal"); ?></h3>
          <p class="k-xl"><?php echo __("1, 3 o 7"); ?><span> 
          <?php echo __("días"); ?></span></p>
          <p><?php echo $page->txt2 ?></p>
          <div class="badge-footer">
            <div class="left-side">
              <a href="<?php echo $pages->get(1026)->url; ?>" alt="<?php echo $pages->get(1026)->title; ?>"><?php echo __("Más información"); ?></a>
            </div>
          </div>
        </figure>
      </div>
      <div class="unit half">
        <figure class="badge-annual">
          <h3><?php echo __("Suscripción Anual"); ?></h3>
          <p class="k-xl"><?php echo __("$365"); ?> 
          <span><?php echo __("al año"); ?></span></p>
          <p><?php echo $page->txt1 ?></p>
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
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="10px" height="10px"><path d="M23.9 13.8L13.1 3C12 1.8 10 1.8 8.9 3c-1.2 1.2-1.2 3.1 0 4.2l8.8 8.8-8.8 8.8c-1.2 1.2-1.2 3.1 0 4.2 1.2 1.2 3.1 1.2 4.2 0l10.8-10.8c.6-.6.9-1.4.9-2.2 0-.8-.3-1.6-.9-2.2z" fill="#10af9d"/></svg>
                    </span>
                  </button>
                </a>
              </div>
            </div>
          </div>
        </figure>
      </div>
    </div>
  </section>

<?php if($page->active){ ?>
  <section class="k-section k-auto-banner">
  <a href="<?php echo $page->url1; ?>" target="_blank">
  <?php if($page->img1){
          $img = $page->img1->size(800, 200, array('upscaling' => true, 'cropping' => false, 'quality' => 90)); ?>
    <img src="<?php echo $img->url ?>">
  <?php } ?>
  </a>
  </section>
<?php } ?>
  <!-- Instafeed -->
  <div class="instagram">
    <section class="k-section-80">
      <div class="grid">
      <div class="instagram-head">
        <div class="instagram-logo-container">
          <img src="<?php echo $config->urls->templates; ?>static/455375-1495356493/images/instagram-icon.svg" alt="">
        </div>
        <div class="instagram-text-container">
          <h2 class="k-xl"><?php echo __("MIBICI en fotografías #MIBICIpública"); ?></h2>
          <p><?php echo __("Las expresiones y momentos de los usuarios en Instagram"); ?> </p>
        </div>
      </div>
      <div class="unit">
        <div id="instafeed">
        </div>
      </div>
      </div>
    </section>
  </div>
<?php include('./_foot.php'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-beta.2/lazyload.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $("img.lazyload").lazyload();
    userFeed.run();
    AOS.init({
        easing: 'ease-in-back',
        duration: 1000
    });
  });
  function toggMessage(){
    $("#home-message").slideToggle("");
  }
  var userFeed = new Instafeed({
    get: 'user',
    userId: '1413909578',
    clientId: '107493f39f8844368cbbfe8a44677e06',
    accessToken: '1413909578.1677ed0.f50956cea40a4df7b0fcca22c10c9130',
    resolution: 'low_resolution',
    template: '<a href="{{link}}" target="_blank" id="{{id}}"><img src="{{image}}" /></a>',
    sortBy: 'most-recent',
    limit: 8,
    links: false
  });
    $('[data-fancybox]' ).fancybox({
    buttons : [
      'close'
    ]
  });
</script>