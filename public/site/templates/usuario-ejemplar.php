<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <html lang="<?php echo (isset($_COOKIE['language'])) ? ($_COOKIE['language']=='1087') ? 'es':'en':'es'; ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?php echo __("MIBICI"); ?> | <?php echo $page->title; ?> </title>
  <meta name="description" content="<?php echo $page->summary; ?>">
  <meta name="distribution" content="global">
  <meta name="robots" content="INDEX,FOLLOW"/>
  <meta property="og:url"                content="https://www.mibici.net" />
  <meta property="og:title"              content="<?php echo __("MIBICI"); ?> | <?php echo $page->title; ?>" />
  <meta property="og:description"        content="<?php echo $page->summary; ?>" />
  <meta property="og:image"              content="https://www.mibici.net/site/assets/files/1/portada-1.jpg" />
  <link rel="canonical" href="<?php echo 'https://www.mibici.net'.$page->localPath(($_COOKIE['language'])); ?>" />
  <link rel="alternate" hreflang="en" href="<?php echo 'https://www.mibici.net'.$page->localPath(1089); ?>"; />
  <link rel="alternate" hreflang="es" href="<?php echo 'https://www.mibici.net'.$page->localPath(1087); ?>" />
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css" integrity="sha256-K3Njjl2oe0gjRteXwX01fQD5fkk9JFFBdUHy/h38ggY=" crossorigin="anonymous" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
  <link href="<?php echo $config->urls->templates; ?>assets/usrej/main.css" rel="stylesheet">
  <link rel="apple-touch-icon" href="<?php echo $config->urls->templates; ?>static/455375-1495356493/images/favicon-180x180.png">
  <link rel="shortcut icon" href="<?php echo $config->urls->templates; ?>static/455375-1495356493/images/favicon-64x64.png">
  <style type="text/css">
    .text-bold{
      font-weight: bold;
    }
  </style>
</head>

<body class="test">
  <!--  Pantalla uno -->
  <main id="screen-0" class="j-workspace test-structure" style="z-index:15;background-color:white;" >
    <div class="j-wrap">
      <div class="grid">
        <div class="unit intro" style="">
          <img src="assets/images/usuario-ejemplar.svg" width="70%" alt="">
          <h2>Todos podemos mejorar la percepción de nuestro sistema</h2>
          <button class="bg-color-success">Comenzar</button>
        </div>
      </div>
    </div>
  </main>
  <!--  Pantalla uno -->
  <main id="screen-1" class="j-workspace test-structure" style="z-index:14;background-color:white;" >
    <div class="j-wrap">
      <div class="grid">
        <div class="unit half">
          <img src="<?php echo $config->urls->templates; ?>static/455375-1511338445/images/title-piramide-movilidad.svg" alt="" height="48px">
          <p>Todos los actores de la movilidad son diferentes y para lograr la seguridad de todos debemos de aprender a convivir en armonia respetando la prelación de paso segun el medio en el que nos movemos.</p>
          <button class="bg-color-success">Siguiente</button>
        </div>
        <div class="unit half">
          <img src="<?php echo $config->urls->templates; ?>static/455375-1511338445/images/slide-piramide.svg" alt="">
        </div>
      </div>
    </div>
  </main>
  <!--  Pantalla dos: La BICILEY -->
  <main id="screen-2" class="j-workspace test-structure" style="z-index:13;background-color:white;" >
    <div class="j-wrap">
      <div class="grid">
        <div class="unit half">
          <img src="<?php echo $config->urls->templates; ?>static/455375-1511338445/images/title-biciley.svg" alt="" height="48px">
          <p>La reforma legal llamada ‘Biciley’ avalada por los legisladores plantea que los ciclistas tienen el derecho de circular al centro del carril en las vialidades. La ‘Biciley’ son cambios y adiciones a nuevos artículos a la Ley de Movilidad y Transporte, obligará a los ciclistas a circular en el sentido de la calle, a portar materiales reflejantes y a rebasar sólo por la izquerda a los vehículos automotores cuando el tránsito esté totalmente detenido o lo esté el vehículo que se pretenda rebasar.</p>
          <div class="horizontal-btn-group">
            <button class="bg-color-success">Siguiente</button>
            <button class=" btn-outline bg-color-info sm">Regresar</button>
          </div>
        </div>
        <div class="unit half">
          <img src="<?php echo $config->urls->templates; ?>static/455375-1511338445/images/slide-biciley.svg" alt="">
        </div>
      </div>
    </div>
  </main>
  <!--  Pantalla Tres -->
  <main id="screen-3" class="j-workspace test-structure" style="z-index:12;background-color:white;" >
    <div class="j-wrap">
      <div class="grid">
        <div class="unit half" id="car1">
          <img src="<?php echo $config->urls->templates; ?>static/455375-1511338445/images/title-derechos-ciclistas.svg" alt="" height="48px">
          <!-- Texto -->
          <p id="slide-2" class="text-bold">Tener una movilidad segura y preferencial antes que el transporte público y particular.</p>
          <!-- Texto -->
          <p id="slide-3">Circular al centro del carril derecho y contar con áreas de espera ciclista al frente del carril en las vialidades, así como contar con vías de circulación seguras, interconectadas y de uso exclusivo.</p>
          <!-- Texto -->
          <p id="slide-4">Contar con áreas de espera ciclista al frente del carril en las vialidades, así como contar con vías de circulación seguras, interconectadas y de uso exclusivo.</p>
          <!-- Boton -->
          <div class="horizontal-btn-group">
            <button class="bg-color-success">Siguiente</button>
            <button class=" btn-outline bg-color-info sm">Regresar</button>
          </div>
        </div>
        <div class="unit half">
          <div class="owl-carousel" id="carousel1">
            <div>
              <img src="<?php echo $config->urls->templates; ?>static/455375-1511338445/images/slide-derechos-piramide.svg" alt="">
            </div>
            <div>
              <img src="<?php echo $config->urls->templates; ?>static/455375-1511338445/images/slide-derechos-carril.svg" alt="">
            </div>
            <div>
              <img src="<?php echo $config->urls->templates; ?>static/455375-1511338445/images/slide-derechos-areas.svg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!--  Pantalla Cuatro -->
  <main id="screen-4" class="j-workspace test-structure" style="z-index:11;background-color:white;" >
    <div class="j-wrap">
      <div class="grid">
        <div class="unit half" id="car2">
          <img src="<?php echo $config->urls->templates; ?>static/455375-1511338445/images/title-obligaciones.svg" alt="" height="48px">
          <!-- Texto -->
          <ul>
            <li id="slide-2" class="text-bold">Respetar los semáforos y pedalear sobre y en el sentido de la vialidad, nunca por la banqueta.</li>
            <li id="slide-2">Respetar los semáforos y pedalear sobre y en el sentido de la vialidad, nunca por la banqueta.</li>
            <li id="slide-2">Sólo niños y niñas menores de 12 años pueden pedalear por la banqueta. En caso de querer ir por la banqueta, debe bajarse de la bici y caminar.</li>
            <li id="slide-3">Utilizar la infraestructura ciclista existente y no utilizar los carriles exclusivos del transporte público masivo.</li>
            <li id="slide-3">Dar preferencia de paso a los peatones y personas con discapacidad.</li>
            <li id="slide-4">Indica tus movimientos mediante señales con el brazo o la mano.</li>
            <li id="slide-4">Rebasar solo por el carril izquierdo.</li>
            <li id="slide-5">Evitar el uso de audífonos y celulares mientras circulas.</li>
            <li id="slide-5">No exceder la capacidad de transporte o carga de la bicicleta.</li>
          </ul>
          <!-- Boton -->
          <div class="horizontal-btn-group">
            <button class="bg-color-success">Siguiente</button>
            <button class=" btn-outline bg-color-info sm">Regresar</button>
          </div>
        </div>
        <div class="unit half">
          <div class="owl-carousel" id="carousel2">
            <div>
              <img src="<?php echo $config->urls->templates; ?>static/455375-1511338445/images/slide-obligaciones-circulación.svg" alt="">
            </div>
            <div>
              <img src="<?php echo $config->urls->templates; ?>static/455375-1511338445/images/slide-obligaciones-infrestructura.svg" alt="">
            </div>
            <div>
              <img src="<?php echo $config->urls->templates; ?>static/455375-1511338445/images/slide-obligaciones-señalar.svg" alt="">
            </div>
            <div>
              <img src="<?php echo $config->urls->templates; ?>static/455375-1511338445/images/slide-obligaciones-evitar.svg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!--  Pantalla Cinco -->
  <main id="screen-5" class="j-workspace test-structure" style="z-index:10;background-color:white;" >
    <div class="j-wrap">
      <div class="grid">
        <div class="unit half" id="car3">
          <img src="<?php echo $config->urls->templates; ?>static/455375-1511338445/images/title-seguridad-vial.svg" alt="" height="48px">
          <!-- Texto -->
          <p id="slide-2" class="text-bold">El ciclista al igual que el automovilista debe indicar sus movimientos, es importante aprender las señales (como ciclista) y entenderlas (como automovilista).</p>
          <p id="slide-3">Los automóviles y autobuses tienen distintos puntos ciegos y zonas de peligro, debemos conocerlos para evitar colisiones.</p>
          <!-- Boton -->
          <div class="horizontal-btn-group">
            <button class="bg-color-success">Siguiente</button>
            <button class=" btn-outline bg-color-info sm">Regresar</button>
          </div>
        </div>
        <div class="unit half">
          <div class="owl-carousel" id="carousel3">
            <div>
              <img src="<?php echo $config->urls->templates; ?>static/455375-1511338445/images/slide-seguridad-vial-indicar.svg" alt="">
            </div>
            <div>
              <img src="<?php echo $config->urls->templates; ?>static/455375-1511338445/images/slide-seguridad-vial-puntos-ciegos.svg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!--  Pantalla Seis -->
  <main id="screen-6" class="j-workspace test-structure" style="z-index:9;background-color:white;" >
    <div class="j-wrap">
      <div class="grid">
        <div class="unit half" id="car4">
          <img src="<?php echo $config->urls->templates; ?>static/455375-1511338445/images/title-infrestructura.svg" alt="" height="48px">
          <h4>Triángulo de prioridad ciclista</h4>
          <p>Indica las vías en la que el ciclista tiene preferencia sobre automóviles, motos y transporte público.</p>
          <h4>Área de protección o buffers</h4>
          <p>Indica la zona de riesgo por donde ningún vehículo automotor o ciclista debe circular o invadir.</p>
          <h4>Cruce ciclista</h4>
          <p>Indica por donde debe cruzar el ciclista previniéndolo de cruces o cocheras.</p>
          <h4>Caja bici</h4>
          <p>Es el espacio destinado para que el ciclista espere el semáforo y tenga prioridad de paso sobre el auto.</p>
          <h4>Sólo ciclistas</h4>
          <p>Indica que es un carril exclusivo para la circulación ciclista.</p>
          <h4>Ciclovía</h4>
          <p>Señala los carriles exclusivos para la circulación ciclista.
          Ni autos, ni motos deben invadirlas.</p>
          <div class="horizontal-btn-group">
            <button class="bg-color-success">Siguiente</button>
            <button class=" btn-outline bg-color-info sm">Regresar</button>
          </div>
        </div>
        <div class="unit half">
          <div class="owl-carousel" id="carousel4">
            <div>
              <img src="<?php echo $config->urls->templates; ?>static/455375-1511338445/images/slide-seguridad-vial-indicar.svg" alt="">
            </div>
            <div>
              <img src="<?php echo $config->urls->templates; ?>static/455375-1511338445/images/slide-seguridad-vial-puntos-ciegos.svg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer>
    <div class="j-wrap">
      <!-- Progress bar -->
      <div class="progress">
        <div id="p-bar" class="progress-bar" style="width:0%;">
        </div>
      </div>
      <!-- Navegation Icons  -->
      <nav>
        <!-- icon -->
        <a href="">
          <img src="<?php echo $config->urls->templates; ?>static/455375-1511338445/images/imtj-logo.svg" alt="">
        </a>
        <!-- icon -->
        <a href="">
          <img src="<?php echo $config->urls->templates; ?>static/455375-1511338445/images/mibici-logo.svg" alt="">
        </a>
        <!-- icon -->
        <a href="">
          <img src="<?php echo $config->urls->templates; ?>static/455375-1511338445/images/jalisco-logo.svg" alt="">
        </a>
      </nav>
    </div>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
  <script>
    $(document).ready(function(){
      $('#carousel1, #carousel2, #carousel3, #carousel4').owlCarousel({
        items:1,
        margin:8,
        loop:true,
        responsiveClass:true,
        nav: false,
        autoplay:true,
        autoplayTimeout:4000,
      })
      $('#carousel1').on('changed.owl.carousel', function (e) {
          $('#car1 p').removeClass('text-bold')
          $("#car1 #slide-"+e.item.index).addClass('text-bold')
          if(e.item.index==e.item.count+2)
            $("#car1 #slide-2").addClass('text-bold')
          
      })
      $('#carousel2').on('changed.owl.carousel', function (e) {
          $('#car2 li').removeClass('text-bold')
          $("#car2 #slide-"+e.item.index).addClass('text-bold')
          if(e.item.index==e.item.count+2)
            $("#car2 #slide-2").addClass('text-bold')
      })
      $('#carousel3').on('changed.owl.carousel', function (e) {
          $('#car3 p').removeClass('text-bold')
          $("#car3 #slide-"+e.item.index).addClass('text-bold')
          if(e.item.index==e.item.count+2)
            $("#car3 #slide-2").addClass('text-bold')
      })
    })
    let por=0;
  const clases=["hide-top", "hide-bottom", "hide-left", "hide-right", "hide-right", "hide-left", "hide-bottom", "hide-top"];
  $('.bg-color-success').click(function() {
     por+=14.2857142857;
     $('#p-bar').css('width', por+'%')
     let rand=Math.floor((Math.random() * 8))
     let id=$(this).closest('main').attr('id')
     $("#"+id).addClass(clases[rand]);
   })
  $('.btn-outline').click(function() {
    por-=14.2857142857;
     $('#p-bar').css('width', por+'%')
    let num = parseInt($(this).closest('main').attr('id').replace("screen-", ""))
     $("#screen-"+(num-1)).removeClass("hide-top").removeClass("hide-left").removeClass("hide-right").removeClass("hide-bottom")
   })
  </script>
</body>
</html>
