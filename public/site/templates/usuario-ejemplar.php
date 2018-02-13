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
  <link rel="apple-touch-icon" href="<?php echo $config->urls->templates; ?>static/455375-147357/images/favicon-180x180.png">
  <link rel="shortcut icon" href="<?php echo $config->urls->templates; ?>static/455375-147357/images/favicon-64x64.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <style type="text/css">
    .text-bold{
      font-weight: bold;
    }
  </style>
</head>

<body class="test animated">
 
  <!--  Pantalla uno -->
  <main id="screen-0" class="j-workspace test-structure" style="z-index:15;background-color:white;" >
    <div class="j-wrap">
      <div class="grid">
        <div class="unit intro" style="">
          <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/usuario-ejemplar.svg" width="70%" alt="">
          <h2>Todos podemos mejorar la percepción de nuestro sistema</h2>
          <button class="bg-color-success next">Comenzar</button>
        </div>
      </div>
    </div>
  </main>
  <!--  Pantalla uno -->
  <main id="screen-1" class="j-workspace test-structure" style="z-index:14;background-color:white;" >
    <div class="j-wrap">
      <div class="grid">
        <div class="unit half">
          <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/title-piramide-movilidad.svg" alt="" height="48px">
          <p>Todos los actores de la movilidad son diferentes y para lograr la seguridad de todos debemos de aprender a convivir en armonia respetando la prelación de paso segun el medio en el que nos movemos.</p>
          <button class="bg-color-success next">Siguiente</button>
        </div>
        <div class="unit half">
          <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/slide-piramide.svg" alt="">
        </div>
      </div>
    </div>
  </main>
  <!--  Pantalla dos: La BICILEY -->
  <main id="screen-2" class="j-workspace test-structure" style="z-index:13;background-color:white;" >
    <div class="j-wrap">
      <div class="grid">
        <div class="unit half">
          <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/title-biciley.svg" alt="" height="48px">
          <p>La reforma legal llamada ‘Biciley’ avalada por los legisladores plantea que los ciclistas tienen el derecho de circular al centro del carril en las vialidades. La ‘Biciley’ son cambios y adiciones a nuevos artículos a la Ley de Movilidad y Transporte, obligará a los ciclistas a circular en el sentido de la calle, a portar materiales reflejantes y a rebasar sólo por la izquerda a los vehículos automotores cuando el tránsito esté totalmente detenido o lo esté el vehículo que se pretenda rebasar.</p>
          <div class="horizontal-btn-group">
            <button class="bg-color-success next">Siguiente</button>
            <button class=" btn-outline bg-color-info sm">Regresar</button>
          </div>
        </div>
        <div class="unit half">
          <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/slide-biciley.svg" alt="">
        </div>
      </div>
    </div>
  </main>
  <!--  Pantalla Tres -->
  <main id="screen-3" class="j-workspace test-structure" style="z-index:12;background-color:white;" >
    <div class="j-wrap">
      <div class="grid">
        <div class="unit half" id="car1">
          <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/title-derechos-ciclistas.svg" alt="" height="48px">
          <!-- Texto -->
          <p id="slide-2" class="text-bold">Tener una movilidad segura y preferencial antes que el transporte público y particular.</p>
          <!-- Texto -->
          <p id="slide-3">Circular al centro del carril derecho y contar con áreas de espera ciclista al frente del carril en las vialidades, así como contar con vías de circulación seguras, interconectadas y de uso exclusivo.</p>
          <!-- Texto -->
          <p id="slide-4">Contar con áreas de espera ciclista al frente del carril en las vialidades, así como contar con vías de circulación seguras, interconectadas y de uso exclusivo.</p>
          <!-- Boton -->
          <div class="horizontal-btn-group">
            <button class="bg-color-success next">Siguiente</button>
            <button class=" btn-outline bg-color-info sm">Regresar</button>
          </div>
        </div>
        <div class="unit half">
          <div class="owl-carousel" id="carousel1">
            <div>
              <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/slide-derechos-piramide.svg" alt="">
            </div>
            <div>
              <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/slide-derechos-carril.svg" alt="">
            </div>
            <div>
              <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/slide-derechos-areas.svg" alt="">
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
          <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/title-obligaciones.svg" alt="" height="48px">
          <!-- Texto -->
          <ul>
            <li id="slide-2" class="text-bold">Respetar los semáforos y pedalear sobre y en el sentido de la vialidad, nunca por la banqueta.</li>
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
            <button class="bg-color-success next">Siguiente</button>
            <button class=" btn-outline bg-color-info sm">Regresar</button>
          </div>
        </div>
        <div class="unit half">
          <div class="owl-carousel" id="carousel2">
            <div>
              <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/slide-obligaciones-circulacion.svg" alt="">
            </div>
            <div>
              <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/slide-obligaciones-infrestructura.svg" alt="">
            </div>
            <div>
              <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/slide-obligaciones-senalar.svg" alt="">
            </div>
            <div>
              <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/slide-obligaciones-evitar.svg" alt="">
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
          <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/title-seguridad-vial.svg" alt="" height="48px">
          <!-- Texto -->
          <p id="slide-2" class="text-bold">El ciclista al igual que el automovilista debe indicar sus movimientos, es importante aprender las señales (como ciclista) y entenderlas (como automovilista).</p>
          <p id="slide-3">Los automóviles y autobuses tienen distintos puntos ciegos y zonas de peligro, debemos conocerlos para evitar colisiones.</p>
          <!-- Boton -->
          <div class="horizontal-btn-group">
            <button class="bg-color-success next">Siguiente</button>
            <button class=" btn-outline bg-color-info sm">Regresar</button>
          </div>
        </div>
        <div class="unit half">
          <div class="owl-carousel" id="carousel3">
            <div>
              <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/slide-seguridad-vial-indicar.svg" alt="">
            </div>
            <div>
              <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/slide-seguridad-vial-puntos-ciegos.svg" alt="">
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
          <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/title-infrestructura.svg" alt="" height="48px">
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
            <button class="bg-color-success next">Siguiente</button>
            <button class=" btn-outline bg-color-info sm">Regresar</button>
          </div>
        </div>
        <div class="unit half">
          <div class="owl-carousel" id="carousel4">
            <div>
              <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/slide-seguridad-vial-indicar.svg" alt="">
            </div>
            <div>
              <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/slide-seguridad-vial-puntos-ciegos.svg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <form id="questions-p1">
  <input type="hidden" name="p1" value="true">
  <main id="screen-x" class="j-workspace test-structure" style="z-index:8;background-color:white;" >
    <div class="j-wrap">
      <div class="grid">
        <div class="unit half">
          <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/title-piramide-movilidad.svg" alt="" height="48px">
          <p>Todos los actores de la movilidad son diferentes y para lograr la seguridad de todos debemos de aprender a convivir en armonia respetando la prelación de paso segun el medio en el que nos movemos.</p>
          <!-- Pregunta uno -->
          <div class="question-one">
            <p>
              <b>1.  Sólo puedes pedalear sobre la banqueta si eres menor de
              <select class="custom-exam" name="questions[]" id="question-1">
                <option value="1"> 17</option>
                <option value="2"> 18</option>
                <option value="3"> 19</option>
              </select> años.</b>
            </p>
          </div>
          <!--  Pregunta dos-->
          <div class="question-two">
            <p><b>2.Sí andas en bici y no hay carril exclusivo o preferencia ciclista, debes circular por:</b></p>
            <select class="custom-exam" name="questions[]" id="question-2">
              <option value="1">La banqueta.</option>
              <option value="2">Extrema derecha del carril derecho.</option>
              <option value="3">Por el centro del carril derecho.</option>
              <option value="4">Corredores exclusivos de Transporte Público.</option>
            </select>
          </div>
        </div>
        <div class="unit half">
          <!-- Pregunta tres -->
          <div class="question-three">
            <p><b>3.Acomoda en orden correcto a los actores de la calle según su prioridad en la pirámide de movilidad:</b></p>
            <div class="option-group">
              <!--  Option -->
              <div class="test-option-order">
                <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/examen-automotor.svg" alt="" height="32px;">
                <label for="">Vehiculos Motorizados</label>
                <select class="custom-exam" name="questions[]" id="question-3">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                </select>
              </div>
              <!--  Option -->
              <div class="test-option-order">
                <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/examen-transporte-publico.svg" alt="" height="32px;">
                <label for="">Transporte público</label>
                <select class="custom-exam"  name="questions[]" id="question-4">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                </select>
              </div>
              <!--  Option -->
              <div class="test-option-order">
                <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/examen-ciclista.svg" alt="" height="32px;">
                <label for="">Ciclistas</label>
                <select class="custom-exam"  name="questions[]" id="question-5">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                </select>
              </div>
              <!--  Option -->
              <div class="test-option-order">
                <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/examen-peaton.svg" alt="" height="32px;">
                <label for="">Peaton </label>
                <select class="custom-exam" name="questions[]" id="question-6">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                </select>
              </div>
            </div>
          </div>
          <button type="submit" class="bg-color-success questions">Siguiente</button>
        </div>
      </div>
    </div>
  </main>
</form>
  <!--  Pantalla Examen -->
<form id="questions-p2">
  <input type="hidden" name="p2" value="true">
  <main id="screen-x-2" class="j-workspace test-structure" style="z-index:77;background-color:white;" >
    <div class="j-wrap">
      <div class="grid">
        <div class="unit half">
          <!-- Pregunta cuatro -->
          <div class="question-four">
            <p>
              <b>4. Escribe qué significan los señalamientos que hace la ciclista.</b>
            </p>
            <div class="option-group horizontal">
              <!-- Option one-->
              <div class="question-option-vertical">
                <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/examen-senale-primera.svg" alt="" height="80px">
                <select class="custom-exam" name="questions[]" id="question-7">
                  <option value="1">Vuelta a la derecha</option>
                  <option value="2">Vuelta a la izquierda</option>
                  <option value="3">Alto</option>
                </select>
              </div>
              <!-- Option two-->
              <div class="question-option-vertical">
                <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/examen-senale-segunda.svg" alt="" height="80px">
                <select class="custom-exam" name="questions[]" id="question-8">
                  <option value="1">Vuelta a la derecha</option>
                  <option value="2">Vuelta a la izquierda</option>
                  <option value="3">Alto</option>
                </select>
              </div>
              <!-- Option three-->
              <div class="question-option-vertical">
                <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/examen-senale-tercera.svg" alt="" height="80px">
                <select class="custom-exam" name="questions[]" id="question-9">
                  <option value="1">Vuelta a la derecha</option>
                  <option value="2">Vuelta a la izquierda</option>
                  <option value="3">Alto</option>
                </select>
              </div>

            </div>
          </div>
          <!--  Pregunta cinco -->
          <div class="question-five">
            <p>
              <b>5. Indica la distancia mínima frontal y lateral cuando circulas y haces un rebase.</b>
            </p>
            <div class="option-group horizontal">
              <div class="question-option-vertical">
                <label for="">Lateral</label>
                <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/examen-distancia-vertical.svg" alt="" height="48px;">
                <select class="custom-exam" name="questions[]" id="question-10">
                  <option value="1"> 30 cm</option>
                  <option value="2"> 1.5 metros</option>
                  <option value="3"> 5.5 metros</option>
                </select>
              </div>
              <div class="question-option-vertical">
                <label for="">Frontal</label>
                <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/examen-distancia-horizontal.svg" alt="" height="48px;">
                <select class="custom-exam" name="questions[]" id="question-11">
                  <option value="1"> Entre 1 y 2 metros</option>
                  <option value="2"> Entre 5 y 7 metros</option>
                  <option value="3"> entre 10 y 15 metros</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="unit half">
          <!-- Pregunta Seis -->
          <div class="question-six">
            <p><b>6. Circula tus obligaciones y /o derechos con base en la Ley de Movilidad y Transporte del Estado de Jalisco en su artículo 12 “De los derechos y obligaciones de las y los ciclistas”</b></p>
            <div class="option-group">
                <p><input type="checkbox" name="options[]" value="1">Respetar los señalamientos que regulan la circulación vial compartida o exclusiva, los espacios de circulación y de accesibilidad PEATONAL(banquetas).</p>
                <p><input type="checkbox" name="options[]" value="2">Circular por cualquier vía.</p>
                <p><input type="checkbox" name="options[]" value="3">Dar preferencia a las personas con discapacidad.</p>
                <p><input type="checkbox" name="options[]" value="4">Circular en el sentido de la vialidad.</p>
                <p><input type="checkbox" name="options[]" value="5">No exceder la capacidad de transporte o de carga de la bicicleta.</p>
                <p><input type="checkbox" name="options[]" value="6">Rebasar solo por el carril izquierdo.</p>
                <p><input type="checkbox" name="options[]" value="7">En horarios nocturnos, circular en el sentido que favorezca siempre y cuando se lleven luces y aditamentos para uso nocturno. Indicar los movimientos direccionales mediante señales con el brazo o la mano.</p>
                <p><input type="checkbox" name="options[]" value="8">De no existir la presencia de peatones en banquetas, circular por ellas.</p>
            </div>
          </div>
          <button class="bg-color-success">Siguiente</button>
        </div>
      </div>
    </div>
  </main>
</form>
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
          <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/imtj-logo.svg" alt="">
        </a>
        <!-- icon -->
        <a href="">
          <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/mibici-logo.svg" alt="">
        </a>
        <!-- icon -->
        <a href="">
          <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/jalisco-logo.svg" alt="">
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
  let por=0
  const clases=["hide-top", "hide-bottom", "hide-left", "hide-right", "hide-right", "hide-left", "hide-bottom", "hide-top"];
  $('.next').click(function() {
     por+=12.5
     $('#p-bar').css('width', por+'%')
     let rand=Math.floor((Math.random() * 8))
     let id=$(this).closest('main').attr('id')
     $("#"+id).addClass(clases[rand]);
   })
  $('.btn-outline').click(function() {
    por-=12.5
     $('#p-bar').css('width', por+'%')
    let num = parseInt($(this).closest('main').attr('id').replace("screen-", ""))
     $("#screen-"+(num-1)).removeClass("hide-top").removeClass("hide-left").removeClass("hide-right").removeClass("hide-bottom")
   })
  $.fn.extend({
  animateCss: function(animationName, callback) {
    var animationEnd = (function(el) {
      var animations = {
        animation: 'animationend',
        OAnimation: 'oAnimationEnd',
        MozAnimation: 'mozAnimationEnd',
        WebkitAnimation: 'webkitAnimationEnd',
      };

      for (var t in animations) {
        if (el.style[t] !== undefined) {
          return animations[t];
        }
      }
    })(document.createElement('div'));

    this.addClass('animated ' + animationName).one(animationEnd, function() {
      $(this).removeClass('animated ' + animationName);

      if (typeof callback === 'function') callback();
    });

    return this;
  },
});
  const answers=[0,1,3,4,3,2,1,2,1,3,2,2]
  $("select").change(function() {
    let num=$(this).attr('id').split('-')
    if(parseInt($(this).val())===answers[num[1]]){
      $(this).removeClass('wrong')
      $(this).addClass('success')
    }else{
      $(this).removeClass('success')
      $(this).addClass('wrong')
      $("body").animateCss('shake');
    }
  })
  $("#questions-p1").submit(function( event ) {
      $.ajax({
      url: "<?=$page->url?>res",
      type: "post",
      data: $(this).serialize(),
      dataType: "json",
      }).done(function(msg){
        if(msg.state=='approved'){
          por+=12.5
         $('#p-bar').css('width', por+'%')
         let rand=Math.floor((Math.random() * 8))
         $("#screen-x").addClass(clases[rand]);
        }else{
          $.each(msg, function( key, value ) {
              $("#question-"+(parseInt(key)+1)).removeClass('success')
              $("#question-"+(parseInt(key)+1)).addClass('wrong')
              $("body").animateCss('shake');
          })
        }
      }).fail(function (jqXHR, textStatus) {
          console.log(textStatus)
      })
    event.preventDefault();  
  });
  $("#questions-p2").submit(function( event ) {
      $.ajax({
      url: "<?=$page->url?>res",
      type: "post",
      data: $(this).serialize(),
      dataType: "html",
      }).done(function(msg){
        console.log(msg);
      }).fail(function (jqXHR, textStatus) {
          console.log(textStatus)
      })
    event.preventDefault();  
  });
</script>
</body>
</html>
