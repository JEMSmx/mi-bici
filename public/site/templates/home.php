<?php include('./_head.php'); ?>
<style type="text/css">
  .morphing-btn-wrap {
  display: inline-block;
  position: relative;
  text-align: center;
}

.morphing-btn {
  -webkit-transition: background 0.3s, color 0.2s 0.2s, width 0.2s 0s;
  -moz-transition: background 0.3s, color 0.2s 0.2s, width 0.2s 0s;
  -o-transition: background 0.3s, color 0.2s 0.2s, width 0.2s 0s;
  transition: color 0.3s 0.2s, width 0.2s 0s;
  white-space: nowrap;
  box-sizing: border-box;
}

.morphing-btn_circle {
  color: transparent !important;
  padding-left: 0;
  padding-right: 0;
  width: 35.6px !important;

  /* Override inline style rule */
  -webkit-transition: color 0.2s 0s, width .3s 0.2s;
  -moz-transition: color 0.2s 0s, width .3s 0.2s;
  -o-transition: color 0.2s 0s, width .3s 0.2s;
  transition: color 0.2s 0s, width .3s 0.2s;
}

.morphing-btn-clone {
  position: fixed;
  background: #FF6666;
  border-radius: 50%;
  z-index: 3;
  -webkit-transition: all 0.5s cubic-bezier(.65, .05, .36, 1);
  -moz-transition: all 0.5s cubic-bezier(.65, .05, .36, 1);
  -o-transition: all 0.5s cubic-bezier(.65, .05, .36, 1);
  transition: all 0.5s cubic-bezier(.65, .05, .36, 1);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.morphing-btn-clone_visible {
  display: block;
  -webkit-transform: scale(1) !important;
  -moz-transform: scale(1) !important;
  -ms-transform: scale(1) !important;
  -o-transform: scale(1) !important;
  transform: scale(1) !important;
}

.fancybox-morphing .fancybox-bg {
  background: #FF6666;
  opacity: 1;
}

.fancybox-morphing .fancybox-toolbar {
  top: 20px;
  right: 40px;
}

.fancybox-morphing .fancybox-button--close {
  background: rgba(0, 0, 0, 0.2);
  border-radius: 50%;
  color: #fff;
}

.fancybox-morphing .fancybox-button--close::after, 
.fancybox-morphing .fancybox-button--close::before {
    height: 1.55px;
    width: 22px;
    left: calc(50% - 11px);
}

.fancybox-morphing .fancybox-button--close:hover {
  background: rgba(0, 0, 0, 0.25);
}

/* Styling for element used in example */

#morphing-content {
  margin: 0;
  position: relative;
  background: transparent;
  color: #fff;
  padding: 6em 10vw;
  line-height: 2;
  z-index: 3;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

#morphing-content a {
  color: #fff;
}
.hidden{
  display: none;
}
</style>
  <section class="k-message" id="home-message">
    <div class="k-message-container">
      <div class="k-message-center">
        <p><?php echo $page->notification ?></p>
      </div>
      <div class="k-message-close" onclick="toggMessage()">
        <img src="<?php echo $config->urls->templates; ?>static/455375-1495356493/images/times.svg" alt="">
      </div>
    </div>
  </section>
   <section class="j-workspace aniverary-hero">
    <article class="j-wrap">
      <div class="head-container">
        <img src="<?php echo $config->urls->templates; ?>static/455375-1495356493/images/mibici-logo.svg" alt="" height="90px;">
        <h1><?php echo __("Gracias a tí"); ?></h1>
        <a href="/es/registro/" alt="Registro">
          <button>
          <?php echo __("Regístrate"); ?>                <span>
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="15px" height="15px"><path d="M23.9 13.8L13.1 3C12 1.8 10 1.8 8.9 3c-1.2 1.2-1.2 3.1 0 4.2l8.8 8.8-8.8 8.8c-1.2 1.2-1.2 3.1 0 4.2 1.2 1.2 3.1 1.2 4.2 0l10.8-10.8c.6-.6.9-1.4.9-2.2 0-.8-.3-1.6-.9-2.2z" fill="#de223d"></path></svg>
            </span>
          </button>
        </a>
      </div>
      <ul>
        <!-- Foto Usuario -->
      <?php $users=$pages->find("template=usertres");  
         foreach($users as $user){ 
          $image = $user->img1;
              if($image) {
                $img = $image->size(256, 256, array('quality' => 90, 'upscaling' => false, 'cropping' => true)); } ?>
        <a data-morphing id="morphing<?= $user->id;?>" data-src="#morphing-content<?= $user->id;?>" href="javascript:;" class="btn">
          <li>
            <img src="<?= $img->url;?>" alt="<?= $user->title;?>">
          </li>
        </a>

        <div id="morphing-content" class="hidden">
          <?= $user->body;?>
      </div>
        <?php } ?>
        
      </ul>
    </article>
  </section>
  <!-- Jumbotron: Home -->
  
  <!-- Liber,Pedalea,Devuelve -->
  <section class="k-section wrap wider">
    <div class="grid no-gutters">

      <div class="unit one-third">
          <figure class="k-figure" data-aos="zoom-in" data-aos-offset="-100">
            <a href="<?php echo $pages->get(1090)->url; ?>" alt="<?php echo $pages->get(1090)->title; ?>">
              <div class="k-container-img" style="width: 198px"><img src="<?php echo $config->urls->templates; ?>static/455375-1495356493/images/devuelve-icon.svg"></div>
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
            <div class="k-container-img"><img src="<?php echo $config->urls->templates; ?>static/455375-1495356493/images/pedalea-icon.svg"></div>
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
            <div class="k-container-img" style="width: 156px"><img src="<?php echo $config->urls->templates; ?>static/455375-1495356493/images/libera-icon.svg"></div>
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
<script type="text/javascript">
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
$(document).ready(function() {
  userFeed.run();
    AOS.init({
        easing: 'ease-in-back',
        duration: 1000
    });
  //setInterval(change, 4500);
});
$.fn.fancyMorph = function( opts ) {
  var Morphing = function( $btn, opts ) {
    var self = this;

    self.opts = $.extend({
      animationEffect : false,
      infobar    : false,
      buttons    : ['close'],
      smallBtn   : false,
      touch      : false,
      baseClass  : 'fancybox-morphing',
      afterClose : function() {
        self.close();
      }
    }, opts);

    self.init( $btn );
  };

  Morphing.prototype.init = function( $btn ) {
    var self = this;

    self.$btn = $btn.addClass('morphing-btn');

    self.$clone = $('<div class="morphing-btn-clone" />')
      .hide()
      .insertAfter( $btn );

    // Add wrapping element and set initial width used for positioning
    $btn.wrap( '<span class="morphing-btn-wrap"></span>' ).on('click', function(e) {
      e.preventDefault();

      self.start();
    });

  };

  Morphing.prototype.start = function() {
    var self = this;

    if ( self.$btn.hasClass('morphing-btn_circle') ) {
      return;
    }

    // Set initial width, because it is not possible to start CSS transition from "auto"
    self.$btn.width( self.$btn.width() ).parent().width( self.$btn.outerWidth() );

    self.$btn.off('.fm').on("transitionend.fm webkitTransitionEnd.fm oTransitionEnd.fm MSTransitionEnd.fm", function(e) {

      if ( e.originalEvent.propertyName === 'width' ) {
        self.$btn.off('.fm');

        self.animateBg();
      }

    }).addClass('morphing-btn_circle');

  };

  Morphing.prototype.animateBg = function() {
    var self = this;

    self.scaleBg();

    self.$clone.show();

    // Trigger repaint
    self.$clone[0].offsetHeight;

    self.$clone.off('.fm').on("transitionend.fm webkitTransitionEnd.fm oTransitionEnd.fm MSTransitionEnd.fm", function(e) {
      self.$clone.off('.fm');

      self.complete();

    }).addClass('morphing-btn-clone_visible');
  };

  Morphing.prototype.scaleBg = function() {
    var self = this;

    var $clone = self.$clone;
    var scale  = self.getScale();
    var $btn   = self.$btn;
    var pos    = $btn.offset();

    $clone.css({
      top       : pos.top  + $btn.outerHeight() * 0.5 - ( $btn.outerHeight() * scale * 0.5 ) - $(window).scrollTop(),
      left      : pos.left + $btn.outerWidth()  * 0.5 - ( $btn.outerWidth()  * scale * 0.5 ) - $(window).scrollLeft(),
      width     : $btn.outerWidth()  * scale,
      height    : $btn.outerHeight() * scale,
      transform : 'scale(' + ( 1 / scale ) + ')'
    });
  };

  Morphing.prototype.getScale = function() {
    var $btn    = this.$btn,
        radius  = $btn.outerWidth() * 0.5,
        left    = $btn.offset().left + radius - $(window).scrollLeft(),
        top     = $btn.offset().top  + radius - $(window).scrollTop(),
        windowW = $(window).width(),
        windowH = $(window).height();

    var maxDistHor  = ( left > windowW / 2 ) ? left : ( windowW - left ),
        maxDistVert = ( top > windowH / 2 )  ? top  : ( windowH - top );

    return Math.ceil(Math.sqrt( Math.pow( maxDistHor, 2 ) + Math.pow( maxDistVert, 2 ) ) / radius );
  };

  Morphing.prototype.complete = function() {
    var self = this;
    var $btn = self.$btn;

    $.fancybox.open({ src : $btn.data('src') || $btn.attr('href') }, self.opts);

    $(window).on('resize.fm', function() {
      //self.scaleBg();
    });
  };

  Morphing.prototype.close = function() {
    var self   = this;
    var $clone = self.$clone;

    self.scaleBg();

    $clone.one('transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd', function(e) {
      $clone.hide();

      self.$btn.removeClass('morphing-btn_circle');
    });

    $clone.removeClass('morphing-btn-clone_visible');

    $(window).off('resize.fm');
  };

  // Init
  this.each(function() {
    var $this = $(this);

    if ( !$this.data("morphing") ) {
      $this.data( "morphing", new Morphing( $this, opts ) );
    }

  });

  return this;
};

$("[data-morphing]").fancyMorph({
  hash : 'morphing'
});

</script>