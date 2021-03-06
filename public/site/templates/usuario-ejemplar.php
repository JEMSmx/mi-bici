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
  <link href="<?php echo $config->urls->templates; ?>/assets/usrej/main.css" rel="stylesheet">
  <link rel="apple-touch-icon" href="<?php echo $config->urls->templates; ?>static/455375-1495356493/images/favicon-180x180.png">
  <link rel="shortcut icon" href="<?php echo $config->urls->templates; ?>static/455375-1495356493/images/favicon-64x64.png">
</head>

<body class="test">
  <!--  Pantalla uno -->
  <main id="screen-0" class="j-workspace test-structure" style="z-index:15;background-color:white;" >
    <div class="j-wrap">
      <div class="grid">
        <div class="unit intro" style="">
          <img src="<?php echo $config->urls->templates; ?>assets/images/usuario-ejemplar.svg" width="70%" alt="">
          <h2>Todos podemos mejorar la percepción de nuestro sistema</h2>
          <button class="bg-color-success">Comenzar</button>
        </div>
      </div>
    </div>
  </main>
  <!--  Pantalla uno -->
  <main id="screen-1" class="j-workspace test-structure" style="z-index:14;background-color:#ccceff;" >
    <div class="j-wrap">
      <div class="grid">
        <div class="unit half">
          <h2>Piramide de Movilidad</h2>
          <p>Todos los actores de la movilidad son diferentes y para lograr la seguridad de todos debemos de aprender a convivir en armonia respetando la prelación de paso segun el medio en el que nos movemos.</p>
          <button class="bg-color-success">Siguiente</button>
        </div>
        <div class="unit half">
          <svg version="1.1" id="Layer_1" style="height:80%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 542.2 692.8" style="enable-background:new 0 0 542.2 692.8;" xml:space="preserve">
            <g>
              <polygon style="opacity:0.3;fill:#006EA0;" points="223.6,329.3 363.7,308.4 349.5,343 223.6,363.8  "/>
              <polygon style="opacity:0.5;fill:#7DAC41;" points="223.6,329.3 363.7,308.4 349.5,343 223.6,363.8  "/>
              <polygon style="opacity:0.5;fill:#7DAC41;" points="223.6,329.3 363.7,308.4 349.5,343 223.6,363.8  "/>
              <polygon style="opacity:0.5;fill:#7DAC41;" points="223.6,329.3 84.3,308.4 98.2,342.8 223.6,363.8  "/>
              <polygon style="opacity:0.5;fill:#7DC941;" points="84.3,308.4 223.6,287.6 363.7,308.4 223.6,329.3   "/>
              <polygon style="opacity:0.5;fill:#F2AF2D;" points="223.6,419.3 328.7,403.5 314.3,438.8 223.6,453.7  "/>
              <polygon style="opacity:0.5;fill:#F2AF2D;" points="223.6,419.3 328.7,403.5 314.3,438.7 223.6,453.7  "/>
              <polygon style="opacity:0.5;fill:#F2AF2D;" points="223.6,419.3 119,403.6 133.3,438.6 223.6,453.7  "/>
              <polygon style="opacity:0.5;fill:#F2C82D;" points="119,403.6 223.5,389.3 328.7,403.5 223.6,419.3  "/>
              <polygon style="opacity:0.5;fill:#E15B31;" points="223.6,506.4 298.7,495.2 284.2,530.8 223.6,540.8  "/>
              <polygon style="opacity:0.5;fill:#E15B31;" points="223.6,506.4 298.7,495.2 284.2,530.8 223.6,540.8  "/>
              <polygon style="opacity:0.5;fill:#E15B31;" points="223.6,506.4 148.9,495.4 163,530 223.6,540.8  "/>
              <polygon style="opacity:0.5;fill:#E17D31;" points="148.9,495.4 223.6,488.2 298.7,495.2 223.6,506.4  "/>
              <polygon style="opacity:0.5;fill:#EE283B;" points="223.6,592.7 272.9,585.7 258.2,621.8 223.6,627.2  "/>
              <polygon style="opacity:0.5;fill:#EE283B;" points="223.6,592.7 272.9,585.7 258.2,621.8 223.6,627.2  "/>
              <polygon style="opacity:0.5;fill:#F04B4B;" points="223.6,592.7 174.5,585.8 188.7,620.8 223.6,627.2  "/>
              <polygon style="opacity:0.5;fill:#F26D61;" points="174.5,585.8 223.6,582.5 272.9,585.7 223.6,592.7  "/>
              <polygon style="opacity:0.5;fill:#EE2346;" points="223.6,658.3 248.2,654.9 233.3,691.3 223.6,692.8  "/>
              <polygon style="opacity:0.5;fill:#EE2346;" points="223.6,658.3 248.2,654.9 233.3,691.3 223.6,692.8  "/>
              <polygon style="opacity:0.5;fill:#EF4351;" points="223.6,658.3 199,654.9 213.5,691 223.6,692.8  "/>
              <polygon style="opacity:0.5;fill:#F15D5D;" points="199,654.9 223.6,651.9 248.2,654.9 223.6,658.3  "/>
              <polygon style="opacity:0.5;fill:#A3D6B1;" points="223.6,213.5 402.8,186.6 388.7,221.2 223.6,247.9  "/>
              <polygon style="opacity:0.5;fill:#A3D6B1;" points="223.6,213.5 402.8,186.6 388.7,221.2 223.6,247.9  "/>
              <polygon style="opacity:0.5;fill:#A3D6B1;" points="223.6,213.5 45.2,186.6 59.1,221 223.6,247.9  "/>
              <polygon style="opacity:0.5;fill:#C0E2C6;" points="45.2,186.6 223.6,159.7 402.8,186.6 223.6,213.5   "/>
              <polygon style="opacity:0.3;fill:#006EA0;" points="223.6,97.5 448.5,63.6 434.5,97.8 223.6,132   "/>
              <polygon style="opacity:0.3;fill:#006EA0;" points="223.6,97.5 0,63.8 13.7,97.5 223.6,132  "/>
              <polygon style="opacity:0.3;fill:#78B4D8;" points="0,63.8 224.3,29.8 448.5,63.6 223.6,97.5  "/>
              <g>
                <g>
                  <g>
                    <defs>
                      <path id="SVGID_1_" d="M273.5,401.8h-99.4c-2.2,0-4-1.8-4-4v-3.6l9-20.7c1.1-2.5,3.5-4.1,6.2-4.1H277v28.9
                        C277,400.2,275.4,401.8,273.5,401.8z"/>
                    </defs>
                    <clipPath id="SVGID_2_">
                      <use xlink:href="#SVGID_1_"  style="overflow:visible;"/>
                    </clipPath>
                    <linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="170.1404" y1="385.3898" x2="276.973" y2="385.3898">
                      <stop  offset="0" style="stop-color:#62B946"/>
                      <stop  offset="1" style="stop-color:#629050"/>
                    </linearGradient>
                    <rect x="170.1" y="368.9" style="clip-path:url(#SVGID_2_);fill:url(#SVGID_3_);" width="106.8" height="33"/>
                    <linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="170.1404" y1="395.2852" x2="276.9703" y2="395.2852">
                      <stop  offset="0" style="stop-color:#424242;stop-opacity:0"/>
                      <stop  offset="1" style="stop-color:#747474"/>
                    </linearGradient>
                    <rect x="170.1" y="392.5" style="opacity:0.35;clip-path:url(#SVGID_2_);fill:url(#SVGID_4_);" width="106.8" height="5.6"/>
                    <linearGradient id="SVGID_5_" gradientUnits="userSpaceOnUse" x1="157.9371" y1="389.4111" x2="212.7826" y2="389.4111">
                      <stop  offset="0" style="stop-color:#424242;stop-opacity:0"/>
                      <stop  offset="1" style="stop-color:#747474"/>
                    </linearGradient>
                    <path style="opacity:0.3;clip-path:url(#SVGID_2_);fill:url(#SVGID_5_);" d="M212.8,403.1c0-15.1-12.3-27.4-27.4-27.4
                      c-15.1,0-27.4,12.3-27.4,27.4H212.8z"/>
                    <linearGradient id="SVGID_6_" gradientUnits="userSpaceOnUse" x1="170.1404" y1="396.366" x2="173.8033" y2="396.366">
                      <stop  offset="0" style="stop-color:#FAB11F"/>
                      <stop  offset="1" style="stop-color:#FFC55D"/>
                    </linearGradient>
                    <path style="clip-path:url(#SVGID_2_);fill:url(#SVGID_6_);" d="M170.1,398.6L170.1,398.6v-4.4h3.7v0.7
                      C173.8,396.9,172.2,398.6,170.1,398.6z"/>
                    <g style="clip-path:url(#SVGID_2_);">
                      <defs>
                        <path id="SVGID_7_" d="M170.9,389.2L170.9,389.2l7.2-17.2h4.6l-5.4,12.9C176.2,387.5,173.7,389.2,170.9,389.2z"/>
                      </defs>
                      <clipPath id="SVGID_8_">
                        <use xlink:href="#SVGID_7_"  style="overflow:visible;"/>
                      </clipPath>
                      <polygon style="clip-path:url(#SVGID_8_);fill:#D6D6D5;" points="178.1,372 183.8,372 175.3,395.1 169.6,395.1           "/>
                      <linearGradient id="SVGID_9_" gradientUnits="userSpaceOnUse" x1="173.5331" y1="380.0242" x2="183.2068" y2="380.0242">
                        <stop  offset="0" style="stop-color:#D6D6D5"/>
                        <stop  offset="1" style="stop-color:#D6D6D5;stop-opacity:0"/>
                      </linearGradient>
                      <path style="opacity:0.5;clip-path:url(#SVGID_8_);fill:url(#SVGID_9_);" d="M173.5,380c0,5.3,4.3,9.7,9.7,9.7v-19.3
                        C177.9,370.4,173.5,374.7,173.5,380z"/>
                    </g>
                    <g style="clip-path:url(#SVGID_2_);">
                      <defs>
                        <path id="SVGID_10_" d="M193.3,385.8h-12.4l4.8-11.8c0.2-0.5,0.7-0.9,1.3-0.9h4.9c0.8,0,1.4,0.6,1.4,1.4V385.8z M209.1,385.8
                          v-6.7c0-3.3-2.7-6-6-6h0c-3.3,0-6,2.7-6,6v6.7H209.1z M225,385.8v-6.7c0-3.3-2.7-6-6-6h0c-3.3,0-6,2.7-6,6v6.7H225z
                           M240.9,385.8v-6.7c0-3.3-2.7-6-6-6h0c-3.3,0-6,2.7-6,6v6.7H240.9z"/>
                      </defs>
                      <clipPath id="SVGID_11_">
                        <use xlink:href="#SVGID_10_"  style="overflow:visible;"/>
                      </clipPath>
                      <polygon style="clip-path:url(#SVGID_11_);fill:#D6D6D5;" points="241.3,386.6 179.6,386.6 185.7,372.2 241.3,372.2          "/>
                      <linearGradient id="SVGID_12_" gradientUnits="userSpaceOnUse" x1="186.4043" y1="376.5387" x2="193.7999" y2="376.5387">
                        <stop  offset="0" style="stop-color:#D6D6D5"/>
                        <stop  offset="1" style="stop-color:#D6D6D5;stop-opacity:0"/>
                      </linearGradient>
                      <path style="opacity:0.5;clip-path:url(#SVGID_11_);fill:url(#SVGID_12_);" d="M186.4,376.5c0,3.1,3.3,5.6,7.4,5.6v-11.3
                        C189.7,370.9,186.4,373.4,186.4,376.5z"/>
                      <linearGradient id="SVGID_13_" gradientUnits="userSpaceOnUse" x1="202.0058" y1="376.5387" x2="209.4014" y2="376.5387">
                        <stop  offset="0" style="stop-color:#D6D6D5"/>
                        <stop  offset="1" style="stop-color:#D6D6D5;stop-opacity:0"/>
                      </linearGradient>
                      <path style="opacity:0.5;clip-path:url(#SVGID_11_);fill:url(#SVGID_13_);" d="M202,376.5c0,3.1,3.3,5.6,7.4,5.6v-11.3
                        C205.3,370.9,202,373.4,202,376.5z"/>
                      <linearGradient id="SVGID_14_" gradientUnits="userSpaceOnUse" x1="218.4399" y1="376.5387" x2="225.4899" y2="376.5387">
                        <stop  offset="0" style="stop-color:#D6D6D5"/>
                        <stop  offset="1" style="stop-color:#D6D6D5;stop-opacity:0"/>
                      </linearGradient>
                      <path style="opacity:0.5;clip-path:url(#SVGID_11_);fill:url(#SVGID_14_);" d="M218.4,376.5c0,3.1,3.2,5.6,7,5.6v-11.3
                        C221.6,370.9,218.4,373.4,218.4,376.5z"/>
                      <linearGradient id="SVGID_15_" gradientUnits="userSpaceOnUse" x1="234.5896" y1="376.5387" x2="241.6396" y2="376.5387">
                        <stop  offset="0" style="stop-color:#D6D6D5"/>
                        <stop  offset="1" style="stop-color:#D6D6D5;stop-opacity:0"/>
                      </linearGradient>
                      <path style="opacity:0.5;clip-path:url(#SVGID_11_);fill:url(#SVGID_15_);" d="M234.6,376.5c0,3.1,3.2,5.6,7,5.6v-11.3
                        C237.7,370.9,234.6,373.4,234.6,376.5z"/>
                    </g>
                    <g style="clip-path:url(#SVGID_2_);">
                      <defs>
                        <path id="SVGID_16_" d="M257,385.8v-6.7c0-3.3-2.7-6-6-6l0,0c-3.3,0-6,2.7-6,6v6.7H257z M272.8,385.8v-6.7c0-3.3-2.7-6-6-6
                          l0,0c-3.3,0-6,2.7-6,6v6.7H272.8z"/>
                      </defs>
                      <clipPath id="SVGID_17_">
                        <use xlink:href="#SVGID_16_"  style="overflow:visible;"/>
                      </clipPath>
                      <polygon style="clip-path:url(#SVGID_17_);fill:#D6D6D5;" points="289.2,386.6 227.5,386.6 233.5,372.2 289.2,372.2          "/>
                      <linearGradient id="SVGID_18_" gradientUnits="userSpaceOnUse" x1="234.2567" y1="376.5387" x2="241.6523" y2="376.5387">
                        <stop  offset="0" style="stop-color:#D6D6D5"/>
                        <stop  offset="1" style="stop-color:#D6D6D5;stop-opacity:0"/>
                      </linearGradient>
                      <path style="opacity:0.5;clip-path:url(#SVGID_17_);fill:url(#SVGID_18_);" d="M234.3,376.5c0,3.1,3.3,5.6,7.4,5.6v-11.3
                        C237.6,370.9,234.3,373.4,234.3,376.5z"/>
                      <linearGradient id="SVGID_19_" gradientUnits="userSpaceOnUse" x1="249.8582" y1="376.5387" x2="257.2538" y2="376.5387">
                        <stop  offset="0" style="stop-color:#D6D6D5"/>
                        <stop  offset="1" style="stop-color:#D6D6D5;stop-opacity:0"/>
                      </linearGradient>
                      <path style="opacity:0.5;clip-path:url(#SVGID_17_);fill:url(#SVGID_19_);" d="M249.9,376.5c0,3.1,3.3,5.6,7.4,5.6v-11.3
                        C253.2,370.9,249.9,373.4,249.9,376.5z"/>
                      <linearGradient id="SVGID_20_" gradientUnits="userSpaceOnUse" x1="266.2923" y1="376.5387" x2="273.3423" y2="376.5387">
                        <stop  offset="0" style="stop-color:#D6D6D5"/>
                        <stop  offset="1" style="stop-color:#D6D6D5;stop-opacity:0"/>
                      </linearGradient>
                      <path style="opacity:0.5;clip-path:url(#SVGID_17_);fill:url(#SVGID_20_);" d="M266.3,376.5c0,3.1,3.2,5.6,7,5.6v-11.3
                        C269.4,370.9,266.3,373.4,266.3,376.5z"/>
                    </g>
                  </g>
                  <linearGradient id="SVGID_21_" gradientUnits="userSpaceOnUse" x1="178.8514" y1="396.8858" x2="198.8638" y2="396.8858">
                    <stop  offset="0" style="stop-color:#424242;stop-opacity:0"/>
                    <stop  offset="1" style="stop-color:#747474"/>
                  </linearGradient>
                  <path style="opacity:0.35;fill:url(#SVGID_21_);" d="M198.9,401.9h-20c0-5.5,4.5-10,10-10C194.4,391.9,198.9,396.4,198.9,401.9z"
                    />
                  <linearGradient id="SVGID_22_" gradientUnits="userSpaceOnUse" x1="245.8577" y1="396.8858" x2="265.8701" y2="396.8858">
                    <stop  offset="0" style="stop-color:#424242;stop-opacity:0"/>
                    <stop  offset="1" style="stop-color:#747474"/>
                  </linearGradient>
                  <path style="opacity:0.35;fill:url(#SVGID_22_);" d="M265.9,401.9h-20c0-5.5,4.5-10,10-10C261.4,391.9,265.9,396.4,265.9,401.9z"
                    />
                  <g>
                    <g>
                      <defs>
                        <path id="SVGID_23_" d="M196.1,400.3c1,5.2-3.5,9.7-8.7,8.7c-2.9-0.6-5.2-2.9-5.8-5.8c-1-5.2,3.5-9.7,8.7-8.7
                          C193.2,395.1,195.5,397.4,196.1,400.3z"/>
                      </defs>
                      <clipPath id="SVGID_24_">
                        <use xlink:href="#SVGID_23_"  style="overflow:visible;"/>
                      </clipPath>
                      <linearGradient id="SVGID_25_" gradientUnits="userSpaceOnUse" x1="181.4878" y1="401.7508" x2="196.2274" y2="401.7508">
                        <stop  offset="0" style="stop-color:#151B26"/>
                        <stop  offset="1" style="stop-color:#333E57"/>
                      </linearGradient>
                      <rect x="181.5" y="394.4" style="clip-path:url(#SVGID_24_);fill:url(#SVGID_25_);" width="14.7" height="14.7"/>
                      <linearGradient id="SVGID_26_" gradientUnits="userSpaceOnUse" x1="177.446" y1="404.8303" x2="194.1102" y2="404.8303">
                        <stop  offset="0" style="stop-color:#424242;stop-opacity:0"/>
                        <stop  offset="1" style="stop-color:#747474"/>
                      </linearGradient>
                      <path style="opacity:0.5;clip-path:url(#SVGID_24_);fill:url(#SVGID_26_);" d="M194,406.5c1.1-5.9-3.9-10.9-9.8-9.8
                        c-3.3,0.6-5.9,3.3-6.5,6.5c-1.1,5.9,3.9,10.9,9.8,9.8C190.7,412.4,193.3,409.7,194,406.5z"/>
                    </g>
                    <path style="fill:#D6D6D5;" d="M193.4,401c0.5,3.1-2.2,5.8-5.3,5.3c-2-0.3-3.6-1.9-3.9-3.9c-0.5-3.1,2.2-5.8,5.3-5.3
                      C191.5,397.5,193.1,399.1,193.4,401z"/>
                  </g>
                  <g>
                    <g>
                      <defs>
                        <path id="SVGID_27_" d="M263.1,400.3c1,5.2-3.5,9.7-8.7,8.7c-2.9-0.5-5.2-2.9-5.8-5.8c-1-5.2,3.5-9.7,8.7-8.7
                          C260.2,395.1,262.5,397.4,263.1,400.3z"/>
                      </defs>
                      <clipPath id="SVGID_28_">
                        <use xlink:href="#SVGID_27_"  style="overflow:visible;"/>
                      </clipPath>
                      <linearGradient id="SVGID_29_" gradientUnits="userSpaceOnUse" x1="248.4941" y1="401.7508" x2="263.2336" y2="401.7508">
                        <stop  offset="0" style="stop-color:#151B26"/>
                        <stop  offset="1" style="stop-color:#333E57"/>
                      </linearGradient>
                      <rect x="248.5" y="394.4" style="clip-path:url(#SVGID_28_);fill:url(#SVGID_29_);" width="14.7" height="14.7"/>
                      <linearGradient id="SVGID_30_" gradientUnits="userSpaceOnUse" x1="244.4524" y1="404.8303" x2="261.1165" y2="404.8303">
                        <stop  offset="0" style="stop-color:#424242;stop-opacity:0"/>
                        <stop  offset="1" style="stop-color:#747474"/>
                      </linearGradient>
                      <path style="opacity:0.5;clip-path:url(#SVGID_28_);fill:url(#SVGID_30_);" d="M261,406.5c1.1-5.9-3.9-10.9-9.8-9.8
                        c-3.3,0.6-5.9,3.3-6.5,6.5c-1.1,5.9,3.9,10.9,9.8,9.8C257.7,412.4,260.3,409.7,261,406.5z"/>
                    </g>
                    <path style="fill:#D6D6D5;" d="M260.5,401c0.5,3.1-2.2,5.8-5.3,5.3c-2-0.3-3.6-1.9-3.9-3.9c-0.5-3.1,2.2-5.8,5.3-5.3
                      C258.6,397.5,260.2,399.1,260.5,401z"/>
                  </g>
                </g>
              </g>
              <g>
                <g>
                  <g>
                    <defs>
                      <path id="SVGID_31_" d="M241.4,641.9c0,0-4.3-6.2-5.5-7.6c-1.2-1.4-2.6-1.4-2.6-1.4h-7.8h-7.8c-1.2,0-2.3,0.6-3,1.5l-5.4,7.5
                        H205c-1.5,0-2.7,1.2-2.7,2.7v5.7h42.6v-6.4C244.8,642.8,242.5,641.9,241.4,641.9z"/>
                    </defs>
                    <clipPath id="SVGID_32_">
                      <use xlink:href="#SVGID_31_"  style="overflow:visible;"/>
                    </clipPath>
                    <rect x="222.8" y="632.8" style="clip-path:url(#SVGID_32_);fill:#D6D6D5;" width="11.5" height="17.5"/>
                    <linearGradient id="SVGID_33_" gradientUnits="userSpaceOnUse" x1="202.2768" y1="641.4" x2="244.8268" y2="641.4">
                      <stop  offset="0" style="stop-color:#794C9C"/>
                      <stop  offset="1" style="stop-color:#673E84"/>
                    </linearGradient>
                    <rect x="202.3" y="632.5" style="clip-path:url(#SVGID_32_);fill:url(#SVGID_33_);" width="42.6" height="17.7"/>
                    <linearGradient id="SVGID_34_" gradientUnits="userSpaceOnUse" x1="202.2768" y1="648.3606" x2="244.8268" y2="648.3606">
                      <stop  offset="0" style="stop-color:#424242;stop-opacity:0"/>
                      <stop  offset="1" style="stop-color:#747474"/>
                    </linearGradient>
                    <rect x="202.3" y="646.5" style="opacity:0.25;clip-path:url(#SVGID_32_);fill:url(#SVGID_34_);" width="42.6" height="3.8"/>
                    <linearGradient id="SVGID_35_" gradientUnits="userSpaceOnUse" x1="201.0928" y1="643.4242" x2="228.268" y2="643.4242">
                      <stop  offset="0" style="stop-color:#424242;stop-opacity:0"/>
                      <stop  offset="1" style="stop-color:#747474"/>
                    </linearGradient>
                    <path style="opacity:0.25;clip-path:url(#SVGID_32_);fill:url(#SVGID_35_);" d="M228.3,650.3c0-7.4-6.3-13.7-17.9-13.7
                      c-10.6,0-9.2,13.7-9.2,13.7H228.3z"/>
                    <g style="clip-path:url(#SVGID_32_);">
                      <defs>
                        <path id="SVGID_36_" d="M223.3,635.5v4.9c0,0.7-0.6,1.4-1.4,1.4h-8.5c-0.9,0-1.5-1.1-0.9-1.8l3.1-4.4c0.6-0.9,1.7-1.4,2.8-1.4
                          h3.5C222.7,634.1,223.3,634.7,223.3,635.5z"/>
                      </defs>
                      <clipPath id="SVGID_37_">
                        <use xlink:href="#SVGID_36_"  style="overflow:visible;"/>
                      </clipPath>
                      <rect x="210.1" y="633.2" style="clip-path:url(#SVGID_37_);fill:#D6D6D5;" width="13.2" height="9.4"/>

                        <linearGradient id="SVGID_38_" gradientUnits="userSpaceOnUse" x1="2976.2107" y1="2408.3232" x2="2957.4065" y2="2389.519" gradientTransform="matrix(-0.7071 0.7071 -0.7071 -0.7071 4023.3052 233.6676)">
                        <stop  offset="0" style="stop-color:#D6D6D5"/>
                        <stop  offset="1" style="stop-color:#D6D6D5;stop-opacity:0"/>
                      </linearGradient>
                      <path style="opacity:0.5;clip-path:url(#SVGID_37_);fill:url(#SVGID_38_);" d="M220.5,640.6c6.1,3.7,15.9,3.7,22,0l-22-13.5
                        C214.4,630.8,214.4,636.8,220.5,640.6z"/>
                    </g>
                    <g style="clip-path:url(#SVGID_32_);">
                      <defs>
                        <path id="SVGID_39_" d="M227,635.5v4.9c0,0.7,0.6,1.4,1.4,1.4h8.5c0.9,0,1.5-1.1,0.9-1.8l-3.1-4.4c-0.6-0.9-1.7-1.4-2.8-1.4
                          h-3.5C227.6,634.1,227,634.7,227,635.5z"/>
                      </defs>
                      <clipPath id="SVGID_40_">
                        <use xlink:href="#SVGID_39_"  style="overflow:visible;"/>
                      </clipPath>

                        <rect x="227" y="633.2" transform="matrix(-1 -1.224647e-16 1.224647e-16 -1 467.2202 1275.8903)" style="clip-path:url(#SVGID_40_);fill:#D6D6D5;" width="13.2" height="9.4"/>

                        <linearGradient id="SVGID_41_" gradientUnits="userSpaceOnUse" x1="-365.7517" y1="-933.6392" x2="-384.556" y2="-952.4435" gradientTransform="matrix(0.7071 0.7071 0.7071 -0.7071 1153.2128 233.6676)">
                        <stop  offset="0" style="stop-color:#D6D6D5"/>
                        <stop  offset="1" style="stop-color:#D6D6D5;stop-opacity:0"/>
                      </linearGradient>
                      <path style="opacity:0.5;clip-path:url(#SVGID_40_);fill:url(#SVGID_41_);" d="M229.9,640.6c-6.1,3.7-15.9,3.7-22,0l22-13.5
                        C235.9,630.8,235.9,636.8,229.9,640.6z"/>
                    </g>
                    <linearGradient id="SVGID_42_" gradientUnits="userSpaceOnUse" x1="242.7629" y1="644.3608" x2="244.8268" y2="644.3608">
                      <stop  offset="0" style="stop-color:#FFC55D"/>
                      <stop  offset="1" style="stop-color:#FAB11F"/>
                    </linearGradient>
                    <rect x="242.8" y="643.3" style="clip-path:url(#SVGID_32_);fill:url(#SVGID_42_);" width="2.1" height="2.2"/>
                    <linearGradient id="SVGID_43_" gradientUnits="userSpaceOnUse" x1="204.2122" y1="647.3287" x2="216.02" y2="647.3287">
                      <stop  offset="0" style="stop-color:#424242;stop-opacity:0"/>
                      <stop  offset="1" style="stop-color:#747474"/>
                    </linearGradient>
                    <path style="opacity:0.25;clip-path:url(#SVGID_32_);fill:url(#SVGID_43_);" d="M216,650.3h-11.8c0-3.2,2.6-5.9,5.9-5.9
                      S216,647,216,650.3z"/>
                    <linearGradient id="SVGID_44_" gradientUnits="userSpaceOnUse" x1="229.6732" y1="647.3287" x2="241.481" y2="647.3287">
                      <stop  offset="0" style="stop-color:#424242;stop-opacity:0"/>
                      <stop  offset="1" style="stop-color:#747474"/>
                    </linearGradient>
                    <path style="opacity:0.25;clip-path:url(#SVGID_32_);fill:url(#SVGID_44_);" d="M241.5,650.3h-11.8c0-3.2,2.6-5.9,5.9-5.9
                      C238.8,644.4,241.5,647,241.5,650.3z"/>
                  </g>
                  <g>
                    <g>
                      <defs>
                        <ellipse id="SVGID_45_" cx="210.1" cy="650.3" rx="4.9" ry="4.8"/>
                      </defs>
                      <clipPath id="SVGID_46_">
                        <use xlink:href="#SVGID_45_"  style="overflow:visible;"/>
                      </clipPath>
                      <linearGradient id="SVGID_47_" gradientUnits="userSpaceOnUse" x1="205.2637" y1="650.2704" x2="214.9686" y2="650.2704">
                        <stop  offset="0" style="stop-color:#151B26"/>
                        <stop  offset="1" style="stop-color:#333E57"/>
                      </linearGradient>
                      <rect x="205.3" y="645.4" style="clip-path:url(#SVGID_46_);fill:url(#SVGID_47_);" width="9.7" height="9.7"/>
                      <linearGradient id="SVGID_48_" gradientUnits="userSpaceOnUse" x1="202.6025" y1="652.291" x2="213.5746" y2="652.291">
                        <stop  offset="0" style="stop-color:#424242;stop-opacity:0"/>
                        <stop  offset="1" style="stop-color:#747474"/>
                      </linearGradient>
                      <ellipse style="opacity:0.5;clip-path:url(#SVGID_46_);fill:url(#SVGID_48_);" cx="208.1" cy="652.3" rx="5.5" ry="5.5"/>
                    </g>
                    <path style="fill:#D6D6D5;" d="M213.2,650.3c0,1.7-1.4,3-3.1,3c-1.7,0-3.1-1.4-3.1-3s1.4-3,3.1-3
                      C211.8,647.2,213.2,648.6,213.2,650.3z"/>
                  </g>
                  <g>
                    <g>
                      <defs>
                        <ellipse id="SVGID_49_" cx="235.6" cy="650.3" rx="4.9" ry="4.8"/>
                      </defs>
                      <clipPath id="SVGID_50_">
                        <use xlink:href="#SVGID_49_"  style="overflow:visible;"/>
                      </clipPath>
                      <linearGradient id="SVGID_51_" gradientUnits="userSpaceOnUse" x1="230.0637" y1="650.2704" x2="241.0905" y2="650.2704">
                        <stop  offset="0" style="stop-color:#151B26"/>
                        <stop  offset="1" style="stop-color:#333E57"/>
                      </linearGradient>
                      <rect x="230.1" y="644.8" style="clip-path:url(#SVGID_50_);fill:url(#SVGID_51_);" width="11" height="11"/>
                      <linearGradient id="SVGID_52_" gradientUnits="userSpaceOnUse" x1="228.0635" y1="652.291" x2="239.0356" y2="652.291">
                        <stop  offset="0" style="stop-color:#424242;stop-opacity:0"/>
                        <stop  offset="1" style="stop-color:#747474"/>
                      </linearGradient>
                      <ellipse style="opacity:0.5;clip-path:url(#SVGID_50_);fill:url(#SVGID_52_);" cx="233.5" cy="652.3" rx="5.5" ry="5.5"/>
                    </g>
                    <ellipse style="fill:#D6D6D5;" cx="235.6" cy="650.3" rx="3.1" ry="3"/>
                  </g>
                  <linearGradient id="SVGID_53_" gradientUnits="userSpaceOnUse" x1="203.6864" y1="644.3608" x2="206.8409" y2="644.3608">
                    <stop  offset="0" style="stop-color:#FFC55D"/>
                    <stop  offset="1" style="stop-color:#FAB11F"/>
                  </linearGradient>
                  <path style="fill:url(#SVGID_53_);" d="M206.8,645.5h-2.1c-0.6,0-1.1-0.5-1.1-1.1l0,0c0-0.6,0.5-1.1,1.1-1.1h2.1V645.5z"/>
                </g>
              </g>
              <g>
                <g>
                  <g>

                      <linearGradient id="SVGID_54_" gradientUnits="userSpaceOnUse" x1="5058.4238" y1="169.8365" x2="5071.144" y2="169.8365" gradientTransform="matrix(-1 0 0 1 5296.5049 0)">
                      <stop  offset="0" style="stop-color:#784A9C"/>
                      <stop  offset="1" style="stop-color:#5D2E8D"/>
                    </linearGradient>
                    <path style="fill:url(#SVGID_54_);" d="M236.3,168.5c-0.5,0-1.1,0.1-1.6,0.2c-0.3,0.1,2,1.4,3.4,2.9c-2,0-4.7-2.5-4.8-2.5
                      c-3.1,1-5.7,3.1-6.7,3.1l-1.2-0.8c3.6,0,4.8-3.7,12.3-3.7L236.3,168.5z"/>
                    <g>
                      <g>
                        <g>
                          <defs>
                            <path id="SVGID_55_" d="M252.4,152.7c1.3,1.5,3.2,4.3,4,6.1c1.8,3.9-1.2,11.6-1.4,11.9c-0.2,0.3-2.1,0.2-2.5,0
                              c-0.3-0.2,2.4-5.7-1.2-10.6c-1.8-2.5-4.4-4.4-5.1-6.5c-0.5-1.4-0.8-3.7,1.2-4C249.2,149.5,251.3,151.4,252.4,152.7z"/>
                          </defs>
                          <clipPath id="SVGID_56_">
                            <use xlink:href="#SVGID_55_"  style="overflow:visible;"/>
                          </clipPath>
                          <g style="clip-path:url(#SVGID_56_);">

                              <linearGradient id="SVGID_57_" gradientUnits="userSpaceOnUse" x1="5039.4458" y1="159.9313" x2="5044.7446" y2="159.9313" gradientTransform="matrix(-1 0 0 1 5296.5049 0)">
                              <stop  offset="0" style="stop-color:#2A5F59"/>
                              <stop  offset="1" style="stop-color:#52706C"/>
                            </linearGradient>
                            <rect x="251.8" y="149.6" style="fill:url(#SVGID_57_);" width="5.3" height="20.6"/>
                          </g>

                            <linearGradient id="SVGID_58_" gradientUnits="userSpaceOnUse" x1="5038.9414" y1="161.1069" x2="5042.4619" y2="161.1069" gradientTransform="matrix(-1 0 0 1 5296.5049 0)">
                            <stop  offset="0" style="stop-color:#424242"/>
                            <stop  offset="1" style="stop-color:#747474;stop-opacity:0"/>
                          </linearGradient>
                          <path style="opacity:0.3;clip-path:url(#SVGID_56_);fill:url(#SVGID_58_);" d="M254.1,153.3l0,15.5l3.5-0.2l-0.3-8.3
                            C257.3,160.4,254.8,153.3,254.1,153.3z"/>
                        </g>
                      </g>
                      <g>
                        <defs>
                          <path id="SVGID_59_" d="M239.4,187c0,0-4.7,9.5-4.9,9.6c-0.2,0.1-6-3.7-6-3.7s0.6-1.2,1.9-0.8c0.8,0.3,1.7,1.5,2.4,1.6
                            c0.7,0.1,4.2-6.6,4.8-7.8c0.6-1.2,1.7-6.1,2.8-8.7c1.2-2.9,5-10.5,5-10.5h7.4c0,0-5.4,5.5-8,15.4
                            C243.9,185.2,242,187,239.4,187z"/>
                        </defs>
                        <clipPath id="SVGID_60_">
                          <use xlink:href="#SVGID_59_"  style="overflow:visible;"/>
                        </clipPath>
                        <g style="clip-path:url(#SVGID_60_);">

                            <linearGradient id="SVGID_61_" gradientUnits="userSpaceOnUse" x1="5043.0635" y1="181.1398" x2="5070.8535" y2="181.1398" gradientTransform="matrix(-1 0 0 1 5296.5049 0)">
                            <stop  offset="0" style="stop-color:#151B26"/>
                            <stop  offset="1" style="stop-color:#333E57"/>
                          </linearGradient>
                          <rect x="225.7" y="165.3" style="fill:url(#SVGID_61_);" width="27.8" height="31.7"/>
                        </g>

                          <linearGradient id="SVGID_62_" gradientUnits="userSpaceOnUse" x1="4953.4038" y1="1332.1957" x2="4961.2803" y2="1332.1957" gradientTransform="matrix(-1.0379 -0.7604 -0.591 0.8067 6167.9004 2886.1499)">
                          <stop  offset="0" style="stop-color:#8D2D37"/>
                          <stop  offset="1" style="stop-color:#781A26"/>
                        </linearGradient>
                        <path style="clip-path:url(#SVGID_60_);fill:url(#SVGID_62_);" d="M233.4,191.4c-0.4-0.2-0.7-0.5-1.1-0.6
                          c-0.5-0.2-1-0.1-1.4,0c-0.4,0.2-0.8,0.4-1.1,0.6c-0.6,0.4-1.1,0.8-1.7,1.2c-0.1,0.1-0.2,0.2-0.2,0.3c0,0.3,0.3,0.5,0.5,0.7
                          c1.8,1.3,3.7,2.7,5.6,3.9c0.6,0.4,1.3,0.8,1.9,0.7c0.4-0.1,0.7-0.5,0.9-0.8c0.2-0.4,0.4-0.8,0.7-1c0.2-0.1,0.6-0.2,0.7-0.5
                          c0-0.1,0-0.3-0.1-0.5c-0.1-0.5-0.3-1-0.4-1.5c-0.1-0.4,1.8-7.3,1.8-7.3l-1.9-0.8C237.5,186,233.9,191.7,233.4,191.4z"/>

                          <linearGradient id="SVGID_63_" gradientUnits="userSpaceOnUse" x1="5056.2305" y1="194.5645" x2="5056.2305" y2="166.6268" gradientTransform="matrix(-1 0 0 1 5296.5049 0)">
                          <stop  offset="0" style="stop-color:#424242"/>
                          <stop  offset="1" style="stop-color:#747474;stop-opacity:0"/>
                        </linearGradient>
                        <path style="opacity:0.3;clip-path:url(#SVGID_60_);fill:url(#SVGID_63_);" d="M232.1,192c0,2.2,2.3,3.9,5.3,0.9
                          c3-3,8-3.4,10-11.3c2-7.9,0.7-15.1,0.7-15.1c-5.6,7.1-2.2,12.8-6.9,18C236.5,189.8,232.1,189.9,232.1,192z"/>
                      </g>
                      <g>
                        <defs>
                          <path id="SVGID_64_" d="M262.8,188c0,0,4.4,6.1,4.4,6.4c0,0.3-1.6,2.7-1.6,2.7c-0.1,0.2-0.2,0.3-0.4,0.3h-4.2
                            c0,0,0.2-1.5,0.8-1.5c0.6,0,1.8-0.1,2-0.4c0.7-0.7-2.2-5.6-3.2-6.7c-1-1.2-5.6-5-7.9-7.2c-3.2-3.2-7.3-14.9-7.3-14.9h7.4
                            c0,0,3.9,9.4,5.7,12.3c1,1.6,1.5,2.1,3.4,3.9C263.6,184.8,263.5,185.6,262.8,188z"/>
                        </defs>
                        <clipPath id="SVGID_65_">
                          <use xlink:href="#SVGID_64_"  style="overflow:visible;"/>
                        </clipPath>
                        <g style="clip-path:url(#SVGID_65_);">

                            <linearGradient id="SVGID_66_" gradientUnits="userSpaceOnUse" x1="5026.9673" y1="181.7002" x2="5051.7368" y2="181.7002" gradientTransform="matrix(-1 0 0 1 5296.5049 0)">
                            <stop  offset="0" style="stop-color:#151B26"/>
                            <stop  offset="1" style="stop-color:#333E57"/>
                          </linearGradient>
                          <rect x="244.8" y="166" style="fill:url(#SVGID_66_);" width="24.8" height="31.4"/>
                        </g>

                          <linearGradient id="SVGID_67_" gradientUnits="userSpaceOnUse" x1="5028.4487" y1="192.8454" x2="5036.3252" y2="192.8454" gradientTransform="matrix(-1 0 0 1 5296.5049 0)">
                          <stop  offset="0" style="stop-color:#8D2D37"/>
                          <stop  offset="1" style="stop-color:#781A26"/>
                        </linearGradient>
                        <path style="clip-path:url(#SVGID_65_);fill:url(#SVGID_67_);" d="M260.5,188.9c0,0,1.8,4,1.5,4.2c-0.4,0.2-0.7,0.5-0.9,0.9
                          c-0.2,0.4-0.3,0.8-0.4,1.2c-0.2,0.6-0.3,1.3-0.5,1.9c0,0.1-0.1,0.3,0,0.4c0.1,0.2,0.4,0.3,0.6,0.3c1.8,0,3.5,0,5.3-0.1
                          c0.5,0,1.2-0.1,1.5-0.6c0.2-0.3,0.2-0.8,0.2-1.2c0-0.4-0.1-0.8,0-1.2c0.1-0.3,0.3-0.5,0.2-0.8c0-0.1-0.1-0.2-0.2-0.3
                          c-0.3-0.3-0.6-0.6-1-0.9c-0.3-0.3-0.6-0.7-0.9-0.8c-0.3-0.1-3.2-3.6-3.2-3.6L260.5,188.9z"/>

                          <linearGradient id="SVGID_68_" gradientUnits="userSpaceOnUse" x1="5041.5566" y1="169.7733" x2="5051.9976" y2="169.7733" gradientTransform="matrix(-1 0 0 1 5296.5049 0)">
                          <stop  offset="0" style="stop-color:#424242"/>
                          <stop  offset="1" style="stop-color:#747474;stop-opacity:0"/>
                        </linearGradient>
                        <path style="opacity:0.3;clip-path:url(#SVGID_65_);fill:url(#SVGID_68_);" d="M250.5,171.6c-1.5,0.6-3.3,1-4.8,0.3
                          c-0.7-0.4-1.4-1.1-1.2-1.9c0.2-0.8,0.9-1.2,1.6-1.5c1.5-0.7,3.2-1.2,4.9-1.1c0.8,0.1,1.5,0.3,2.2,0.6c0.5,0.3,1.6,0.9,1.7,1.6
                          c0.2,0.8-1.3,0.8-1.9,1C252.2,170.8,251.4,171.2,250.5,171.6z"/>

                          <linearGradient id="SVGID_69_" gradientUnits="userSpaceOnUse" x1="5030.2456" y1="184.7592" x2="5049.5923" y2="184.7592" gradientTransform="matrix(-1 0 0 1 5296.5049 0)">
                          <stop  offset="0" style="stop-color:#424242"/>
                          <stop  offset="1" style="stop-color:#747474;stop-opacity:0"/>
                        </linearGradient>
                        <path style="opacity:0.3;clip-path:url(#SVGID_65_);fill:url(#SVGID_69_);" d="M264.7,195.8c2.1-2.1,3.2-11.9-3.8-13.7
                          c-7.1-1.9-9.4-8.8-13-8.8s3,8.4,8.8,12.8C262.6,190.6,262.5,198,264.7,195.8z"/>
                      </g>
                      <g>
                        <defs>
                          <path id="SVGID_70_" d="M249.4,150c-1.7-1.5-1.2-3-1.2-4.5c0-1.5-1.3-3.1-3.2-4c-1.1-0.5-3,0.1-3.8,1.7
                            c-0.7,1.6,0.2,5.8,0.6,6.2c0.4,0.4,2.2-0.6,2.2-0.6l1.4,2.5L249.4,150z"/>
                        </defs>
                        <clipPath id="SVGID_71_">
                          <use xlink:href="#SVGID_70_"  style="overflow:visible;"/>
                        </clipPath>

                          <linearGradient id="SVGID_72_" gradientUnits="userSpaceOnUse" x1="5046.8936" y1="146.2265" x2="5057.1934" y2="146.2265" gradientTransform="matrix(-1 0 0 1 5296.5049 0)">
                          <stop  offset="0" style="stop-color:#FFC55D"/>
                          <stop  offset="1" style="stop-color:#FAB11F"/>
                        </linearGradient>
                        <polygon style="clip-path:url(#SVGID_71_);fill:url(#SVGID_72_);" points="239.3,152.2 249.6,151.3 249.6,140.2 239.3,140.2
                                      "/>

                          <linearGradient id="SVGID_73_" gradientUnits="userSpaceOnUse" x1="5049.2827" y1="147.3452" x2="5053.9688" y2="147.3452" gradientTransform="matrix(-1 0 0 1 5296.5049 0)">
                          <stop  offset="0" style="stop-color:#747474;stop-opacity:0"/>
                          <stop  offset="1" style="stop-color:#424242"/>
                        </linearGradient>
                        <path style="opacity:0.5;clip-path:url(#SVGID_71_);fill:url(#SVGID_73_);" d="M244.5,145.5c0-0.7-1.2-1.6-0.5-2.3
                          c0.8-0.8,2,0.2,2.4,0.8c0.4,0.6,0.6,1.2,0.8,1.9c0.1,0.6,0.1,1.2-0.1,1.7c-0.2,0.5,0,3.9,0,3.9l-1.5,0.4c0,0-3-1.4-3-2.4
                          C242.5,148.5,244.5,146.2,244.5,145.5z"/>

                          <linearGradient id="SVGID_74_" gradientUnits="userSpaceOnUse" x1="5040.9814" y1="1790.0103" x2="5040.9814" y2="1785.7219" gradientTransform="matrix(-0.9098 -0.4151 -0.4151 0.9098 5570.251 611.2798)">
                          <stop  offset="0" style="stop-color:#424242"/>
                          <stop  offset="1" style="stop-color:#747474;stop-opacity:0"/>
                        </linearGradient>
                        <path style="opacity:0.5;clip-path:url(#SVGID_71_);fill:url(#SVGID_74_);" d="M241.1,147.4c0,0,1-0.2,0.8-0.7
                          c-0.2-0.5-0.3-0.8-0.1-1.2c0.2-0.4,1.7-0.2,1.7-0.2s-0.4-0.9-1.2-0.9c-1,0-0.9-1.7-0.9-1.7
                          C240.3,144.5,241.1,147.4,241.1,147.4z"/>
                      </g>
                      <g>
                        <defs>
                          <path id="SVGID_75_" d="M258.6,169.3c0,0-2.9,8.6-6.1,8.6c-1.7,0-9.9-4.1-8-10.1c1.9-6,0.3-6.4-1.8-10.5
                            c0-1.7,3.8-5.4,3.8-5.4l3.4-2.4c0,0,3.4,2.1,3.1,5.1C251.9,167.2,258.6,169.3,258.6,169.3z"/>
                        </defs>
                        <clipPath id="SVGID_76_">
                          <use xlink:href="#SVGID_75_"  style="overflow:visible;"/>
                        </clipPath>
                        <g style="clip-path:url(#SVGID_76_);">

                            <linearGradient id="SVGID_77_" gradientUnits="userSpaceOnUse" x1="5037.6611" y1="162.6859" x2="5055.4961" y2="162.6859" gradientTransform="matrix(-1 0 0 1 5296.5049 0)">
                            <stop  offset="0" style="stop-color:#306F67"/>
                            <stop  offset="1" style="stop-color:#5F7F7B"/>
                          </linearGradient>
                          <rect x="241" y="147.2" style="fill:url(#SVGID_77_);" width="17.8" height="31.1"/>
                        </g>

                          <linearGradient id="SVGID_78_" gradientUnits="userSpaceOnUse" x1="5040.29" y1="165.0638" x2="5053.5249" y2="165.0638" gradientTransform="matrix(-1 0 0 1 5296.5049 0)">
                          <stop  offset="0" style="stop-color:#747474;stop-opacity:0"/>
                          <stop  offset="1" style="stop-color:#424242"/>
                        </linearGradient>
                        <path style="opacity:0.3;clip-path:url(#SVGID_76_);fill:url(#SVGID_78_);" d="M247.7,160.8c0,0-1.6,3.7-1.6,7.7
                          c0,3.9,8.4,13.4,9.5,11.9c0.7-1,0.9-24.3,0.1-25.8c-0.3-0.5-4.4-5-5.8-5c-1.2,1.2-3.2,1.8-3.2,1.8s5.1,1.7,1,5.8
                          c-1.4,1.4-4.8,2.7-4.8,2.7l0.5,1.8L247.7,160.8z"/>
                      </g>
                      <g>
                        <defs>
                          <path id="SVGID_79_" d="M250,151.6c-1,0.4-2.4,0.2-3.3,0.9c-0.5,0.4-0.7,1.1-1,1.8c-0.2,0.6-0.6,1.3-1.3,1.5
                            c-0.5,0.1-1.1-0.1-1.5-0.4c-1-0.7-1.5-2.1-1.2-3.3c0.3-1.1,1.3-2,2.3-2.5c0.9-0.4,1.9-0.6,2.9-0.8c0.5-0.1,0.6-1.1,1.1-1.4
                            c0.7-0.3,2,0.2,2.5,0.7c0.6,0.6,0.9,1.6,0.6,2.4C250.9,151.1,250.5,151.4,250,151.6z"/>
                        </defs>
                        <clipPath id="SVGID_80_">
                          <use xlink:href="#SVGID_79_"  style="overflow:visible;"/>
                        </clipPath>

                          <linearGradient id="SVGID_81_" gradientUnits="userSpaceOnUse" x1="5045.0859" y1="151.6483" x2="5054.8857" y2="151.6483" gradientTransform="matrix(-1 0 0 1 5296.5049 0)">
                          <stop  offset="0" style="stop-color:#F5A151"/>
                          <stop  offset="1" style="stop-color:#F7BD80"/>
                        </linearGradient>
                        <polygon style="clip-path:url(#SVGID_80_);fill:url(#SVGID_81_);" points="241.6,156.2 251.4,156.2 251.4,147.1 241.6,147.1
                                      "/>

                          <linearGradient id="SVGID_82_" gradientUnits="userSpaceOnUse" x1="5045.4419" y1="152.9353" x2="5052.1528" y2="152.9353" gradientTransform="matrix(-1 0 0 1 5296.5049 0)">
                          <stop  offset="0" style="stop-color:#747474;stop-opacity:0"/>
                          <stop  offset="1" style="stop-color:#424242"/>
                        </linearGradient>
                        <path style="opacity:0.5;clip-path:url(#SVGID_80_);fill:url(#SVGID_82_);" d="M246.1,151.1c-0.7,0.3-1.3,0.9-1.6,1.6
                          c-0.3,0.7-0.2,1.5,0.4,2c0.4,0.3,0.9,0.5,1.4,0.5c0.5,0,1,0,1.5-0.1c0.6-0.1,1.3-0.2,1.9-0.4c0.6-0.3,1.1-0.7,1.3-1.3
                          c0.2-0.5,0-1.1-0.2-1.7c-0.1-0.4-0.3-0.6-0.7-0.8C248.8,150.5,247.3,150.6,246.1,151.1z"/>

                          <linearGradient id="SVGID_83_" gradientUnits="userSpaceOnUse" x1="5049.0088" y1="151.4387" x2="5056.5513" y2="151.4387" gradientTransform="matrix(-1 0 0 1 5296.5049 0)">
                          <stop  offset="0" style="stop-color:#D6D6D5;stop-opacity:0"/>
                          <stop  offset="1" style="stop-color:#D6D6D5"/>
                        </linearGradient>
                        <path style="opacity:0.5;clip-path:url(#SVGID_80_);fill:url(#SVGID_83_);" d="M247.4,149.1c0.1,0.2,0.1,0.4,0.1,0.6
                          c-0.1,0.4-0.6,0.7-1,0.8c-0.5,0.1-1,0.2-1.4,0.3c-0.4,0.2-0.8,0.6-1.1,1c-0.3,0.5-0.5,1-0.8,1.5c-0.3,0.5-0.7,1-1.3,1.1
                          c-0.8,0.2-1.6-0.4-1.9-1.2c-0.2-0.8,0-1.6,0.5-2.3c0.5-0.6,1.2-1.1,1.9-1.5c1-0.6,1.9-1,3.1-1.1c0.5,0,0.9,0,1.3,0.2
                          C247.1,148.7,247.3,148.9,247.4,149.1z"/>
                      </g>
                      <g>
                        <defs>
                          <path id="SVGID_84_" d="M238.2,167.5c0,0-0.3-0.2-0.7-0.1c-0.5,0.2-1.8,1-2,1.4c-0.2,0.5,1.8,3,2.9,2.7c1.1-0.3,1-1.9,1-1.9
                            l1.1-0.7l-1.3-2.3L238.2,167.5z"/>
                        </defs>
                        <clipPath id="SVGID_85_">
                          <use xlink:href="#SVGID_84_"  style="overflow:visible;"/>
                        </clipPath>

                          <linearGradient id="SVGID_86_" gradientUnits="userSpaceOnUse" x1="4708.9937" y1="-815.6927" x2="4715.1309" y2="-817.8467" gradientTransform="matrix(-0.9639 0.2664 0.2664 0.9639 4997.8682 -298.695)">
                          <stop  offset="0" style="stop-color:#FFC55D"/>
                          <stop  offset="1" style="stop-color:#FAB11F"/>
                        </linearGradient>
                        <polygon style="clip-path:url(#SVGID_85_);fill:url(#SVGID_86_);" points="241.5,170.8 236.4,172.2 235.2,167.8 240.3,166.4
                                      "/>

                          <linearGradient id="SVGID_87_" gradientUnits="userSpaceOnUse" x1="4862.5967" y1="-174.8685" x2="4866.8237" y2="-174.8685" gradientTransform="matrix(-1.0945 -7.440000e-02 -6.780000e-02 0.9977 5551.3965 706.2947)">
                          <stop  offset="0" style="stop-color:#747474;stop-opacity:0"/>
                          <stop  offset="1" style="stop-color:#424242"/>
                        </linearGradient>
                        <path style="opacity:0.3;clip-path:url(#SVGID_85_);fill:url(#SVGID_87_);" d="M239.5,168.4c-0.1,0.2-0.1,0.4-0.2,0.6
                          c-0.2,0.7-0.9,1.1-1.6,1.1c-0.2,0-0.5-0.1-0.7,0c-0.1,0-0.3,0.1-0.4,0.3c-0.1,0.2,0,0.2,0.1,0.4c0.2,0.3,0.4,0.5,0.7,0.7
                          c0.5,0.4,1.3,0.4,1.9,0.2c0.6-0.2,1.1-0.7,1.6-1.2c0.2-0.2,0.4-0.4,0.4-0.7c0-0.2-0.2-0.6-0.3-0.8c-0.1-0.3-0.2-0.5-0.5-0.7
                          c-0.2-0.2-0.5-0.2-0.8,0C239.6,168.2,239.5,168.3,239.5,168.4z"/>
                      </g>
                      <g>
                        <defs>
                          <path id="SVGID_88_" d="M247.2,163.5c-2.6,2.7-6.3,6.4-6.7,6.2c-0.4-0.2-1.8-3.3-1.8-3.8c-0.1-1,5-6,5.6-6.7
                            c0.6-0.7,0.1-7.5,4.6-7.6C253.4,151.6,249.8,160.8,247.2,163.5z"/>
                        </defs>
                        <clipPath id="SVGID_89_">
                          <use xlink:href="#SVGID_88_"  style="overflow:visible;"/>
                        </clipPath>
                        <g style="clip-path:url(#SVGID_89_);">

                            <linearGradient id="SVGID_90_" gradientUnits="userSpaceOnUse" x1="3330.2131" y1="-2319.5781" x2="3343.9299" y2="-2327.6001" gradientTransform="matrix(-0.6975 0.7165 0.7165 0.6975 4237.457 -609.712)">
                            <stop  offset="0" style="stop-color:#306F67"/>
                            <stop  offset="1" style="stop-color:#5F7F7B"/>
                          </linearGradient>
                          <polygon style="fill:url(#SVGID_90_);" points="252.9,159.2 240.1,172.7 237.6,161.6 249.8,148.5              "/>
                        </g>

                          <linearGradient id="SVGID_91_" gradientUnits="userSpaceOnUse" x1="3336.0715" y1="-2325.8555" x2="3339.7083" y2="-2325.8555" gradientTransform="matrix(-0.6975 0.7165 0.7165 0.6975 4237.457 -609.712)">
                          <stop  offset="0" style="stop-color:#424242"/>
                          <stop  offset="1" style="stop-color:#747474;stop-opacity:0"/>
                        </linearGradient>
                        <path style="opacity:0.3;clip-path:url(#SVGID_89_);fill:url(#SVGID_91_);" d="M243.7,161.5c-1.7-1.7-3.1-0.3-3.2-2.3
                          c0-1.1,3.9-0.6,3.9-0.6S243.9,161.1,243.7,161.5z"/>

                          <linearGradient id="SVGID_92_" gradientUnits="userSpaceOnUse" x1="3325.6038" y1="-2322.4004" x2="3342.24" y2="-2322.4004" gradientTransform="matrix(-0.6975 0.7165 0.7165 0.6975 4237.457 -609.712)">
                          <stop  offset="0" style="stop-color:#424242"/>
                          <stop  offset="1" style="stop-color:#747474;stop-opacity:0"/>
                        </linearGradient>
                        <path style="opacity:0.3;clip-path:url(#SVGID_89_);fill:url(#SVGID_92_);" d="M247.6,152.8c-0.6,1.2-0.7,2.6-0.8,4
                          c-0.1,1.4-0.2,2.7-0.7,4c-0.7,1.9-2.4,3.4-4.3,3.9c1.4,0.9,3.1,1.4,4.8,1.2c1.7-0.2,3.3-1,4.3-2.4c1.1-1.3,1.6-3,2-4.7
                          c0.4-1.5,0.8-3.2,0.5-4.7c-0.2-1.5-1.1-2.9-2.6-3.5C249.5,150,248,151.7,247.6,152.8z"/>
                      </g>
                      <g>
                        <defs>
                          <path id="SVGID_93_" d="M247.1,140.2c5.3,3,1.4,8.6,1.4,8.6l-1.6-0.1c0.9-1.9,0.3-2.5-0.6-2.5c0,0-0.9,1.7-1.6,1.7
                            c-0.4,0,0.3-3.4-0.2-4c-2.1,0-3.4-0.5-3.4-0.5C241.3,141.3,244.2,138.5,247.1,140.2z"/>
                        </defs>
                        <clipPath id="SVGID_94_">
                          <use xlink:href="#SVGID_93_"  style="overflow:visible;"/>
                        </clipPath>
                        <g style="clip-path:url(#SVGID_94_);">

                            <linearGradient id="SVGID_95_" gradientUnits="userSpaceOnUse" x1="5072.4443" y1="1382.7921" x2="5084.605" y2="1382.7921" gradientTransform="matrix(-0.9309 -0.3653 -0.4576 1.1659 5605.8589 387.7342)">
                            <stop  offset="0" style="stop-color:#151B26"/>
                            <stop  offset="1" style="stop-color:#333E57"/>
                          </linearGradient>
                          <polygon style="fill:url(#SVGID_95_);" points="238,147.2 249.3,151.6 253,142.3 241.7,137.9              "/>
                        </g>

                          <linearGradient id="SVGID_96_" gradientUnits="userSpaceOnUse" x1="5072.9097" y1="1508.5795" x2="5083.707" y2="1508.5795" gradientTransform="matrix(-0.9309 -0.3653 -0.3653 0.9309 5524.5073 596.4783)">
                          <stop  offset="0" style="stop-color:#424242"/>
                          <stop  offset="1" style="stop-color:#747474;stop-opacity:0"/>
                        </linearGradient>
                        <path style="opacity:0.3;clip-path:url(#SVGID_94_);fill:url(#SVGID_96_);" d="M243.7,142.1c0.6,0.2,1.2,0.6,1.6,1.2
                          c0.2,0.3,1.3,1.8,2.3,1.1c1-0.7,0.9-2.2,0.9-2.2c1.6,0.6,1.9,7,1.9,7s-5.1,0.7-5.8,0.5c-0.7-0.2-1.5-3.4-1.6-4.1
                          c-0.1-0.4,0.1-1-0.3-1.3c-0.2-0.2-0.5-0.3-0.7-0.4c-0.4-0.2-0.6-0.6-0.6-1.1c0-0.3,0.4-0.8,0.7-0.8c0.2-0.1,0.5-0.1,0.8-0.1
                          C243.2,141.9,243.5,142,243.7,142.1z"/>
                      </g>
                    </g>
                  </g>
                  <g>
                    <g>
                      <defs>
                        <path id="SVGID_97_" d="M233.6,197.4h-2.7c0,0-8.2-13.4-8.8-16.7c1.7-0.3,3.7-1.1,5.4-1.1
                          C229.1,179.6,233.6,197.4,233.6,197.4z"/>
                      </defs>
                      <clipPath id="SVGID_98_">
                        <use xlink:href="#SVGID_97_"  style="overflow:visible;"/>
                      </clipPath>

                        <linearGradient id="SVGID_99_" gradientUnits="userSpaceOnUse" x1="5062.0156" y1="189.8845" x2="5074.2998" y2="189.8845" gradientTransform="matrix(-1 0 0 1 5296.5049 0)">
                        <stop  offset="0" style="stop-color:#FAB758"/>
                        <stop  offset="1" style="stop-color:#F8A025"/>
                      </linearGradient>
                      <polygon style="clip-path:url(#SVGID_98_);fill:url(#SVGID_99_);" points="234.5,197.6 222.2,197.6 222.2,182.2 234.5,182.2
                                  "/>

                        <linearGradient id="SVGID_100_" gradientUnits="userSpaceOnUse" x1="5063.5254" y1="188.6021" x2="5072.5312" y2="188.6021" gradientTransform="matrix(-1 0 0 1 5296.5049 0)">
                        <stop  offset="0" style="stop-color:#424242"/>
                        <stop  offset="1" style="stop-color:#747474;stop-opacity:0"/>
                      </linearGradient>
                      <path style="opacity:0.3;clip-path:url(#SVGID_98_);fill:url(#SVGID_100_);" d="M232.9,185.5c-0.2,0.8-0.8,1.5-1.3,2.2
                        c-0.6,0.9-0.9,2.1-0.8,3.2c0,0.8,0.2,1.6,0,2.3c-0.4,1.3-2.1,1.8-3.4,1.4c-1.3-0.5-2.2-1.6-2.7-2.9c-0.8-1.8-1.1-4-0.2-5.7
                        c0.9-1.8,3.1-2.6,4.8-3.3C231.2,181.9,233.4,183.5,232.9,185.5z"/>
                    </g>
                    <g>
                      <defs>
                        <path id="SVGID_101_" d="M251.4,180.8c-0.1,1.4-0.1,2.8,0.1,3.8c0.2,1,3.2,3.3,5,4.7c1.8,1.4,2.2,2.7,2.2,2.7l-3.5,2.5
                          c0,0-1.1-2.5-2-3.4c-2-1.9-6.9-3.2-8.6-5.4c-1.3-1.5-2.5-3.1-3.3-4.8c-0.7-1.7-0.8-3.7,0.3-5.2c1.2-1.6,4.5-2.8,6.6-1.4
                          C250.4,175.9,251.6,178.6,251.4,180.8z"/>
                      </defs>
                      <clipPath id="SVGID_102_">
                        <use xlink:href="#SVGID_101_"  style="overflow:visible;"/>
                      </clipPath>

                        <linearGradient id="SVGID_103_" gradientUnits="userSpaceOnUse" x1="5036.0684" y1="181.5621" x2="5057.9263" y2="185.5265" gradientTransform="matrix(-1 0 0 1 5296.5049 0)">
                        <stop  offset="0" style="stop-color:#FAB758"/>
                        <stop  offset="1" style="stop-color:#F8A025"/>
                      </linearGradient>
                      <polygon style="clip-path:url(#SVGID_102_);fill:url(#SVGID_103_);" points="258.7,194.9 240.3,194.9 240.3,172.2 258.7,172.2
                                  "/>

                        <linearGradient id="SVGID_104_" gradientUnits="userSpaceOnUse" x1="5042.0713" y1="183.6069" x2="5051.6611" y2="183.6069" gradientTransform="matrix(-1 0 0 1 5296.5049 0)">
                        <stop  offset="0" style="stop-color:#747474;stop-opacity:0"/>
                        <stop  offset="1" style="stop-color:#424242"/>
                      </linearGradient>
                      <path style="opacity:0.3;clip-path:url(#SVGID_102_);fill:url(#SVGID_104_);" d="M253.3,178.6c0.4,0.4,0.6,0.8,0.8,1.2
                        c0.6,1.7,0.3,3.8,0.1,5.5c-0.2,1.4-0.4,2.8-1,4.1c-0.6,1.3-1.8,2.4-3.2,2.6c-2.6,0.4-3.8-3-4.5-5c-1-3.1-0.8-6.8,0.4-9.8
                        c0.3-0.8,0.7-1.6,1.5-1.8c0.9-0.3,1.8,0.2,2.5,0.7C250.9,176.6,252.3,177.5,253.3,178.6z"/>
                    </g>
                    <g>
                      <defs>
                        <path id="SVGID_105_" d="M247.3,173.2c-3.3-2.2-4.7-1.7-9.7-0.8c-4.4,0.8-9.3,0.8-11.3-0.7c-3.1-2.3-6.1-5.3-11.1-3.9
                          c-4.3,1.2-2.3,6.1-5.7,9.8c-1.2,1.3,2.5,2.6,4.1,2.6c1.6,0,3.8-3.4,4.8-0.7c1.1,2.8,2,4.6,2,4.6c-1.9,1.8-8,9.3-8,9.3l1.4,2
                          c0,0,9-7.2,11.1-9.5c3.3,0.6,13.2-0.6,13.2-0.6s1.4,1,1.4,3.4c0,2.4-0.2,3.4-1.5,4.7c-1.6,1.5-2.8,4.2-2.8,4.2h5.4
                          c0,0,0.9-1.3,0.9-3.8s1-4.2,2.3-5.6c1.4-1.4,6-3.1,6.7-6.1c0.8-3.5-1.4-6.8-1.4-6.8s4.5,1.5,7-1c2.4-2.4,2.3-5.9,2.3-5.9
                          s-5.2-0.2-6.3,2.9C251,174.3,247.3,173.2,247.3,173.2z"/>
                      </defs>
                      <clipPath id="SVGID_106_">
                        <use xlink:href="#SVGID_105_"  style="overflow:visible;"/>
                      </clipPath>

                        <linearGradient id="SVGID_107_" gradientUnits="userSpaceOnUse" x1="5037.6538" y1="182.2711" x2="5087.7729" y2="182.2711" gradientTransform="matrix(-1 0 0 1 5296.5049 0)">
                        <stop  offset="0" style="stop-color:#FAB758"/>
                        <stop  offset="1" style="stop-color:#F8A025"/>
                      </linearGradient>
                      <polygon style="clip-path:url(#SVGID_106_);fill:url(#SVGID_107_);" points="258.9,197.5 208.7,197.5 208.7,167 258.9,167
                                  "/>

                        <linearGradient id="SVGID_108_" gradientUnits="userSpaceOnUse" x1="5053.7319" y1="185.7509" x2="5083.7422" y2="185.7509" gradientTransform="matrix(-1 0 0 1 5296.5049 0)">
                        <stop  offset="0" style="stop-color:#747474;stop-opacity:0"/>
                        <stop  offset="1" style="stop-color:#424242"/>
                      </linearGradient>
                      <path style="opacity:0.3;clip-path:url(#SVGID_106_);fill:url(#SVGID_108_);" d="M238.7,176.2c0.1,0,0.1,0,0.2,0.1
                        c1.2,0.5,2.4,1.2,3.1,2.3c1.3,2,0.9,4.9-0.7,6.7c-1.6,1.8-4,2.7-6.4,2.8c-1.6,0.1-3.3-0.2-4.9-0.5c-0.7-0.1-1.5-0.6-2.2-0.6
                        c-0.7,0-1.3,0.5-1.9,0.8c-1.9,0.9-3.5,2.8-5.1,4.2c-1.7,1.5-3.9,2.5-5.9,3.7c-0.4,0.2-0.8,0.4-1.2,0.5c-0.4,0-0.9-0.3-1-0.7
                        c-0.1-1,1.7-2.1,2.3-2.6c1-0.9,2-1.8,3-2.7c1.9-1.8,3.7-3.7,5.4-5.7c2.5-2.9,3.5-6.3,7.3-8
                        C233.2,175.3,236.2,175.2,238.7,176.2z"/>

                        <linearGradient id="SVGID_109_" gradientUnits="userSpaceOnUse" x1="5038.6997" y1="185.0382" x2="5058.6758" y2="185.0382" gradientTransform="matrix(-1 0 0 1 5296.5049 0)">
                        <stop  offset="0" style="stop-color:#747474;stop-opacity:0"/>
                        <stop  offset="1" style="stop-color:#424242"/>
                      </linearGradient>
                      <path style="opacity:0.3;clip-path:url(#SVGID_106_);fill:url(#SVGID_109_);" d="M239.6,194.3c0.2-0.9,0.2-1.9,0.4-2.9
                        c0.5-2,1.3-3.9,2.3-5.6c0.7-1.3,1.7-2.5,2.3-3.9c0.9-2.1-0.6-4.8,1-6.7c0.8-0.9,2-1.4,3.2-1.4c1.2,0.1,2.5,0.6,3.6,0.1
                        c1.3-0.5,1.9-2.2,3.3-2.4c1.1-0.1,2,0.9,2.1,2c0.1,3.5-5.1,2.7-5.3,5.6c-0.1,1.6,0.4,2.8,0,4.4c-0.4,1.4-1.2,2.7-2.4,3.5
                        c-1.1,0.7-2.5,0.7-3.7,1.4c-1.2,0.7-2,2-2.5,3.3c-0.5,1.3-0.7,2.8-1.3,4.1c-0.4,0.7-0.8,1.9-1.5,2.4c-0.6,0.4-1.4,0.2-2,0.1
                        c-0.5-0.1-1.1-0.2-1.2-0.7c-0.1-0.5,0.4-0.9,0.7-1.2C239.2,195.8,239.5,195.1,239.6,194.3z"/>

                        <linearGradient id="SVGID_110_" gradientUnits="userSpaceOnUse" x1="5080.481" y1="175.1757" x2="5087.688" y2="175.1757" gradientTransform="matrix(-1 0 0 1 5296.5049 0)">
                        <stop  offset="0" style="stop-color:#747474;stop-opacity:0"/>
                        <stop  offset="1" style="stop-color:#424242"/>
                      </linearGradient>
                      <path style="opacity:0.3;clip-path:url(#SVGID_106_);fill:url(#SVGID_110_);" d="M214.9,171.9c0.5,0.2,1,0.5,1.1,1
                        c0.1,0.6-0.4,1.1-1,1.5c-0.6,0.3-1.3,0.5-1.7,1c-1.1,0.9-1.1,2.6-2.4,3.2c-0.6,0.3-2.1-0.2-2.1-0.2l2.4-6.3
                        C211.2,172.1,213.7,171.5,214.9,171.9z"/>

                        <linearGradient id="SVGID_111_" gradientUnits="userSpaceOnUse" x1="5069.332" y1="175.7647" x2="5079.041" y2="175.7647" gradientTransform="matrix(-1 0 0 1 5296.5049 0)">
                        <stop  offset="0" style="stop-color:#784A9C"/>
                        <stop  offset="1" style="stop-color:#5D2E8D"/>
                      </linearGradient>
                      <path style="clip-path:url(#SVGID_106_);fill:url(#SVGID_111_);" d="M227.2,171.6c0,2.8-5.8,9.7-8.3,9.7l-1.4-2
                        c2.4,0,8-6.9,8-9.1L227.2,171.6z"/>

                        <linearGradient id="SVGID_112_" gradientUnits="userSpaceOnUse" x1="5070.6133" y1="177.4756" x2="5079.5474" y2="177.4756" gradientTransform="matrix(-1 0 0 1 5296.5049 0)">
                        <stop  offset="0" style="stop-color:#747474;stop-opacity:0"/>
                        <stop  offset="1" style="stop-color:#424242"/>
                      </linearGradient>
                      <path style="opacity:0.3;clip-path:url(#SVGID_106_);fill:url(#SVGID_112_);" d="M217.1,179.4c0-0.3,0-0.6-0.1-0.8
                        c-0.3-1.5-0.1-3.1,0.9-4.4c1.1-1.5,3.2-2.2,5-1.6c1.8,0.6,3.1,2.5,2.9,4.3c-0.2,1.5-1.2,2.7-2.2,3.9c-1.4,1.6-3.7,2.4-5.7,1.3
                        C217.2,181.5,217.2,180.4,217.1,179.4z"/>
                    </g>
                    <g>
                      <defs>
                        <path id="SVGID_113_" d="M222.7,169.9c0.6,0.8,0.8,1.8,0.9,2.8c0.1,1,0.2,2,0.6,2.9c0.4,0.9,1,1.9,0.6,2.8
                          c-0.3,0.6-1,0.9-1.7,0.9c-0.7,0-1.3-0.4-1.9-0.7c-1.8-1.2-3.1-3.1-3.7-5.2c-0.2-0.9-0.3-2,0-2.9
                          C218.4,168,221.3,167.9,222.7,169.9z"/>
                      </defs>
                      <clipPath id="SVGID_114_">
                        <use xlink:href="#SVGID_113_"  style="overflow:visible;"/>
                      </clipPath>

                        <linearGradient id="SVGID_115_" gradientUnits="userSpaceOnUse" x1="5071.2642" y1="173.5741" x2="5079.7334" y2="173.5741" gradientTransform="matrix(-1 0 0 1 5296.5049 0)">
                        <stop  offset="0" style="stop-color:#FAB758"/>
                        <stop  offset="1" style="stop-color:#F8A025"/>
                      </linearGradient>
                      <polygon style="clip-path:url(#SVGID_114_);fill:url(#SVGID_115_);" points="225.2,179.4 216.8,179.4 216.8,167.7 225.2,167.7
                                  "/>
                    </g>
                  </g>
                </g>
                <g>
                  <g>
                    <defs>
                      <path id="SVGID_116_" d="M184.9,183c-2.2,2.2,2,4.5,2,4.5s-4.9-2.8-7.5-2.8c0,0,4.8,7.5,12.2,5.5c7.4-2,15.2,0.4,15.2-0.9
                        C205,187.5,187.1,180.8,184.9,183z"/>
                    </defs>
                    <clipPath id="SVGID_117_">
                      <use xlink:href="#SVGID_116_"  style="overflow:visible;"/>
                    </clipPath>
                    <g style="clip-path:url(#SVGID_117_);">

                        <linearGradient id="SVGID_118_" gradientUnits="userSpaceOnUse" x1="5103.7451" y1="187.3544" x2="5133.4263" y2="188.9805" gradientTransform="matrix(-1 0 0 1 5312.1245 0)">
                        <stop  offset="0" style="stop-color:#10AD9B"/>
                        <stop  offset="1" style="stop-color:#50BFB3"/>
                      </linearGradient>
                      <polygon style="fill:url(#SVGID_118_);" points="208.1,195 179,195 179,181.3 208.1,181.4           "/>
                    </g>

                      <linearGradient id="SVGID_119_" gradientUnits="userSpaceOnUse" x1="5104.8306" y1="187.165" x2="5134.1377" y2="188.7706" gradientTransform="matrix(-1 0 0 1 5312.1245 0)">
                      <stop  offset="0.1083" style="stop-color:#2B2B2B;stop-opacity:0"/>
                      <stop  offset="1" style="stop-color:#747474"/>
                    </linearGradient>
                    <polygon style="opacity:0.75;clip-path:url(#SVGID_117_);fill:url(#SVGID_119_);" points="178.3,194.7 207,194.7 207,181.2
                      178.3,181.2         "/>
                  </g>
                  <g>
                    <defs>
                      <path id="SVGID_120_" d="M187.2,147.2c0.6,2.3,3.3,1.8,3.5,2.6c0.2,0.8-2.2,0.9-1.7,2.8c0.5,1.9,6,0.7,7.3,0.2
                        c1.3-0.5,2.5-1.4,2.9-2.6c0.3-0.9,0.2-2-0.3-2.8c-0.4-0.9-1.2-1.6-1.9-2.3c-0.5-0.4-0.7-0.3-2.3-1.1
                        C193.2,143.1,186.7,144.9,187.2,147.2z"/>
                    </defs>
                    <clipPath id="SVGID_121_">
                      <use xlink:href="#SVGID_120_"  style="overflow:visible;"/>
                    </clipPath>

                      <linearGradient id="SVGID_122_" gradientUnits="userSpaceOnUse" x1="4883.293" y1="-911.179" x2="4896.8188" y2="-911.179" gradientTransform="matrix(-0.9721 0.2345 0.2345 0.9721 5160.5532 -112.1913)">
                      <stop  offset="0" style="stop-color:#36415D"/>
                      <stop  offset="1" style="stop-color:#4F668B"/>
                    </linearGradient>
                    <polygon style="clip-path:url(#SVGID_121_);fill:url(#SVGID_122_);" points="201.1,152.4 187.9,155.6 185.4,145.1 198.6,141.9
                              "/>

                      <linearGradient id="SVGID_123_" gradientUnits="userSpaceOnUse" x1="4883.6611" y1="-911.0598" x2="4895.3936" y2="-911.0598" gradientTransform="matrix(-0.9721 0.2345 0.2345 0.9721 5160.5532 -112.1913)">
                      <stop  offset="0" style="stop-color:#2B2B2B;stop-opacity:0"/>
                      <stop  offset="1" style="stop-color:#747474"/>
                    </linearGradient>
                    <path style="opacity:0.75;clip-path:url(#SVGID_121_);fill:url(#SVGID_123_);" d="M188.3,145.3c-0.4,0.9,0,1.8,1.1,2.1
                      c0.6,0.2,1.4,0.2,2.1,0.4c0.6,0.2,1.1,0.7,0.7,1.2c-0.3,0.4-0.9,0.5-1.4,0.7c-1.3,0.6-2.2,1.7-2.1,2.6c0,1,0.9,1.8,2.1,2.1
                      c2.1,0.6,5.1-0.1,6.9-1.6c1.8-1.4,2.4-3.4,1.9-5c-0.5-1.7-2.2-3.1-4.5-3.7C193.2,143.5,189.4,143.1,188.3,145.3z"/>
                  </g>
                  <g>
                    <defs>
                      <path id="SVGID_124_" d="M192.1,141.4c-1,3.7,3.2,6,5.8,3.2c0.2-0.3,0.4-0.6,0.5-0.9c1-3.7-3.2-6-5.8-3.2
                        C192.4,140.7,192.2,141,192.1,141.4z"/>
                    </defs>
                    <clipPath id="SVGID_125_">
                      <use xlink:href="#SVGID_124_"  style="overflow:visible;"/>
                    </clipPath>

                      <rect x="193.8" y="138.8" transform="matrix(-0.9611 0.2764 -0.2764 -0.9611 425.0228 224.3481)" style="clip-path:url(#SVGID_125_);fill:#FAB11F;" width="5.8" height="6.6"/>

                      <linearGradient id="SVGID_126_" gradientUnits="userSpaceOnUse" x1="4812.9297" y1="-1103.9622" x2="4817.25" y2="-1103.9622" gradientTransform="matrix(-0.9611 0.2763 0.2763 0.9611 5129.7983 -128.2975)">
                      <stop  offset="0" style="stop-color:#747474"/>
                      <stop  offset="1" style="stop-color:#2B2B2B;stop-opacity:0"/>
                    </linearGradient>
                    <path style="opacity:0.75;clip-path:url(#SVGID_125_);fill:url(#SVGID_126_);" d="M196.7,140.3c0.1,0.3,0.2,0.6,0.1,0.9
                      c-0.1,0.3-0.5,0.5-0.8,0.6c-0.3,0.2-0.7,0.4-0.7,0.7c0,0.3,0.1,0.5,0.4,0.7c0.2,0.2,0.5,0.2,0.8,0.2c0.6,0.1,1.2,0,1.8-0.2
                      c0.6-0.2,1.1-0.5,1.3-1.1c0.1-0.5-0.1-1-0.3-1.4c-0.6-0.9-1.6-1.6-2.6-1.8c-0.2,0-0.4-0.1-0.6,0c-0.3,0.1-0.1,0.2,0.1,0.3
                      C196.2,139.6,196.5,139.9,196.7,140.3z"/>
                  </g>
                  <g>
                    <defs>
                      <path id="SVGID_127_" d="M203.5,144.4c0-0.1,0-0.1,0-0.2c0-0.4-0.3-0.8-0.6-1c-0.4-0.2-0.8-0.3-1.2-0.3c-1.3-0.2-2.8-0.2-4-0.6
                        c-1.1-0.4-2.2-0.9-3.2-1.6c-1-0.7-1.8-1.7-2.9-2.3c-1.5-0.9-3.5-1-5.1-0.3c-0.9,0.4-1.9,1.2-2,2.3c-0.1,1.2,0.7,2.5,1.6,3.2
                        c1,0.8,2.2,1.3,3.5,1.7c4,1.2,8.4,1.3,12.5,0.2c0.3-0.1,0.6-0.2,0.9-0.4C203.2,144.9,203.4,144.7,203.5,144.4z"/>
                    </defs>
                    <clipPath id="SVGID_128_">
                      <use xlink:href="#SVGID_127_"  style="overflow:visible;"/>
                    </clipPath>

                      <linearGradient id="SVGID_129_" gradientUnits="userSpaceOnUse" x1="4809.5552" y1="-1104.0773" x2="4827.481" y2="-1104.0773" gradientTransform="matrix(-0.9611 0.2763 0.2763 0.9611 5129.7983 -128.2975)">
                      <stop  offset="0" style="stop-color:#BE9336"/>
                      <stop  offset="1" style="stop-color:#BC852C"/>
                    </linearGradient>
                    <polygon style="clip-path:url(#SVGID_128_);fill:url(#SVGID_129_);" points="203.9,145.2 186.7,150.2 183.4,138.6 200.6,133.7
                              "/>

                      <linearGradient id="SVGID_130_" gradientUnits="userSpaceOnUse" x1="4809.0981" y1="-1101.3048" x2="4825.3032" y2="-1101.3048" gradientTransform="matrix(-0.9611 0.2763 0.2763 0.9611 5129.7983 -128.2975)">
                      <stop  offset="0" style="stop-color:#747474"/>
                      <stop  offset="1" style="stop-color:#2B2B2B;stop-opacity:0"/>
                    </linearGradient>
                    <path style="opacity:0.75;clip-path:url(#SVGID_128_);fill:url(#SVGID_130_);" d="M202.3,142.5c0.5,0.2,1,0.5,1.4,0.9
                      c0.4,0.4,0.6,1,0.5,1.5c-0.1,0.6-0.7,1-1.2,1.3c-3.2,2-7.1,2.7-10.8,2c-0.9-0.2-1.8-0.4-2.6-0.9c-0.8-0.5-1.5-1.1-1.9-2
                      c-0.3-0.7-0.7-3.2,2.9-4.2C194.1,140.1,198.8,140.8,202.3,142.5z"/>
                  </g>
                  <g>
                    <defs>
                      <path id="SVGID_131_" d="M188.6,154.6c1.2-2,3.4-5,4.9-3.5c1.6,1.6-3.3,3.7-3.7,6.2l-0.2,4.8c-0.8-0.4-2.3-1.6-2.5-2.5
                        C186.9,159.1,187.5,156.6,188.6,154.6z"/>
                    </defs>
                    <clipPath id="SVGID_132_">
                      <use xlink:href="#SVGID_131_"  style="overflow:visible;"/>
                    </clipPath>

                      <linearGradient id="SVGID_133_" gradientUnits="userSpaceOnUse" x1="5116.0962" y1="157.83" x2="5125.2803" y2="157.83" gradientTransform="matrix(-1 0 0 1 5312.1245 0)">
                      <stop  offset="0" style="stop-color:#FAB758"/>
                      <stop  offset="1" style="stop-color:#F8A025"/>
                    </linearGradient>
                    <polygon style="clip-path:url(#SVGID_132_);fill:url(#SVGID_133_);" points="186.8,165.2 196,165.2 196,150.5 186.8,150.5
                      "/>
                  </g>

                    <linearGradient id="SVGID_134_" gradientUnits="userSpaceOnUse" x1="5114.561" y1="155.7575" x2="5121.9297" y2="155.7575" gradientTransform="matrix(-1 0 0 1 5312.1245 0)">
                    <stop  offset="0" style="stop-color:#472463"/>
                    <stop  offset="1" style="stop-color:#602A78"/>
                  </linearGradient>
                  <path style="fill:url(#SVGID_134_);" d="M194.2,149c1.6,0,4.3,7,3.1,9.6c-0.7,1.5-0.8,3.5-3.4,3.8c-1.6,0.2-2.4,0.6-1.7-2.9
                    c0.8-3.5-1.6-4.1-2-5.7C189.9,152.2,192.6,149,194.2,149z"/>
                  <g>
                    <defs>
                      <path id="SVGID_135_" d="M193.8,148.3c-1.2-0.1-2.1-6.4,0-6.3c2.1,0.1,3.7,1.5,3.6,2.9c0,0.3,0.3,3,0.1,3.4
                        c-0.2,0.3-2.7,0.8-2.7,0.8l0.7-1.5C195.5,147.6,194.5,148.3,193.8,148.3z"/>
                    </defs>
                    <clipPath id="SVGID_136_">
                      <use xlink:href="#SVGID_135_"  style="overflow:visible;"/>
                    </clipPath>

                      <linearGradient id="SVGID_137_" gradientUnits="userSpaceOnUse" x1="5124.8711" y1="357.3068" x2="5130.895" y2="357.3068" gradientTransform="matrix(-0.999 -4.570000e-02 -4.570000e-02 0.999 5333.8633 22.5577)">
                      <stop  offset="0" style="stop-color:#F8A025"/>
                      <stop  offset="1" style="stop-color:#FAB758"/>
                    </linearGradient>
                    <polygon style="clip-path:url(#SVGID_136_);fill:url(#SVGID_137_);" points="197.6,149.3 191.6,149 192,141.1 198,141.3        "/>

                      <linearGradient id="SVGID_138_" gradientUnits="userSpaceOnUse" x1="5125.2095" y1="357.4115" x2="5130.436" y2="357.4115" gradientTransform="matrix(-0.999 -4.570000e-02 -4.570000e-02 0.999 5333.8633 22.5577)">
                      <stop  offset="0" style="stop-color:#747474;stop-opacity:0"/>
                      <stop  offset="1" style="stop-color:#424242"/>
                    </linearGradient>
                    <path style="opacity:0.5;clip-path:url(#SVGID_136_);fill:url(#SVGID_138_);" d="M192.4,144.8c0.1-2.7,1.3-1.7,1.3-0.9
                      c0,1.4-0.5,1.9-0.5,1.9l1.4,0.2c0,0-0.3-0.5-0.2-1.8c0-0.8,1.8-1.8,1.7,0.4c-0.1,2.9-1.7,3.5-2.1,3.5c-1.1,0.2-0.3,1.3,0.6,1
                      c0.9-0.3,3-2.7,2.9-4.1c0-1.3-0.5-3.8-3.4-4C191.7,141.1,192.3,147.4,192.4,144.8z"/>
                  </g>
                  <g>
                    <defs>
                      <path id="SVGID_139_" d="M187.7,189.8c-1.3,3.1-6.6,4.1-6.6,4.1s3.2-8.7,4.9-13.3c1.7-4.6,1.7-14.2,7.8-13.7
                        c6.2,0.5-3.3,13.8-3.8,15C189.5,183.2,189,186.7,187.7,189.8z M197.7,179.9c-0.3-1.3,2-4.5,1.3-8.4c-0.8-3.9-2.7-5.4-4.1-6.3
                        c-0.6-0.4-1.5-0.7-2-0.2c-0.4,0.3-0.3,0.9-0.3,1.4c0.5,4.8-1.1,10.5,0.6,15.1c1.7,4.6,10.6,12.2,10.6,12.2s-0.4-6.9-2.4-8.6
                        C199.6,183.4,198,181.2,197.7,179.9z"/>
                    </defs>
                    <clipPath id="SVGID_140_">
                      <use xlink:href="#SVGID_139_"  style="overflow:visible;"/>
                    </clipPath>

                      <linearGradient id="SVGID_141_" gradientUnits="userSpaceOnUse" x1="4972.7158" y1="-577.5982" x2="4996.1406" y2="-577.5982" gradientTransform="matrix(-0.9862 0.1658 0.1658 0.9862 5201.3745 -79.0103)">
                      <stop  offset="0" style="stop-color:#F8A025"/>
                      <stop  offset="1" style="stop-color:#FAB758"/>
                    </linearGradient>
                    <polygon style="clip-path:url(#SVGID_140_);fill:url(#SVGID_141_);" points="204.1,191.5 181,195.4 175.8,164.1 198.9,160.2
                              "/>

                      <linearGradient id="SVGID_142_" gradientUnits="userSpaceOnUse" x1="4183.7451" y1="-569.3719" x2="4204.0679" y2="-569.3719" gradientTransform="matrix(-1.1991 0.2016 0.1658 0.9862 5316.6899 -98.2939)">
                      <stop  offset="0" style="stop-color:#747474;stop-opacity:0"/>
                      <stop  offset="1" style="stop-color:#424242"/>
                    </linearGradient>
                    <path style="opacity:0.5;clip-path:url(#SVGID_140_);fill:url(#SVGID_142_);" d="M186,182.4c0,0,5.7,3.4,11.2,2.4
                      c5.5-0.9,8.6,0.7,8.6,0.7s-2.7,5.3-6,2.4c-3.3-2.9-9.1,5.2-13,1.7c-3.9-3.5-5.6-1-5.6-1L186,182.4z"/>
                  </g>
                  <g>

                      <linearGradient id="SVGID_143_" gradientUnits="userSpaceOnUse" x1="5121.4673" y1="183.7124" x2="5128.0298" y2="183.7124" gradientTransform="matrix(-1 0 0 1 5312.1245 0)">
                      <stop  offset="0" style="stop-color:#3B9087"/>
                      <stop  offset="1" style="stop-color:#0A8174"/>
                    </linearGradient>
                    <path style="fill:url(#SVGID_143_);" d="M187.8,187.8c0,0,2.8-2.1,2.8-6.4c0-4.3-6,0.6-6,0.6l-0.6,3.2L187.8,187.8z"/>
                  </g>
                  <g>
                    <defs>
                      <path id="SVGID_144_" d="M185.4,183.6c-2,2,3.5,2.6,2.4,4.2c-1.1,1.6-5.9-3.1-8.4-3.1c0,0,3.1-3.6,5.4-10.6
                        c1.4-4.3,1.1-11.1,8.2-14.5c10.4,3.3,10,24.7,13.8,29.7c-0.7-0.6-5.2-2.4-10.8-3.1C190.4,185.4,187.5,181.6,185.4,183.6z"/>
                    </defs>
                    <clipPath id="SVGID_145_">
                      <use xlink:href="#SVGID_144_"  style="overflow:visible;"/>
                    </clipPath>
                    <g style="clip-path:url(#SVGID_145_);">

                        <linearGradient id="SVGID_146_" gradientUnits="userSpaceOnUse" x1="5104.8838" y1="177.2332" x2="5134.3125" y2="177.2332" gradientTransform="matrix(-1 0 0 1 5312.1245 0)">
                        <stop  offset="0" style="stop-color:#10AD9B"/>
                        <stop  offset="1" style="stop-color:#50BFB3"/>
                      </linearGradient>
                      <rect x="177.8" y="160" style="fill:url(#SVGID_146_);" width="29.4" height="34.5"/>
                    </g>

                      <linearGradient id="SVGID_147_" gradientUnits="userSpaceOnUse" x1="5118.2046" y1="195.2419" x2="5118.2046" y2="161.3703" gradientTransform="matrix(-1 0 0 1 5312.1245 0)">
                      <stop  offset="0.1083" style="stop-color:#2B2B2B;stop-opacity:0"/>
                      <stop  offset="1" style="stop-color:#747474"/>
                    </linearGradient>
                    <path style="opacity:0.75;clip-path:url(#SVGID_145_);fill:url(#SVGID_147_);" d="M189.4,170.8c2.6,3-3.9,12.8-3.9,12.8
                      s3.4,2.8,3.2,4c-0.2,1.1-1.4,1.5-2.4,1.3c-1-0.2-2-0.7-2.9-0.3c-0.2,0.3-0.1,0.8,0.2,1c0.3,0.2,0.6,0.3,0.9,0.3
                      c1.6,0.2,3.2,0.3,4.8,0.5c1.3,0.1,2.3,0.1,2.8-1.4c0.6-1.5,1-3.1,1.3-4.7c1.2-5.8,1.2-11.9-0.1-17.7c-0.2-0.7-0.4-1.5-0.6-2.2
                      c-0.1-0.5-0.7-1.5-0.6-2c0.1-0.7,1.2-0.7,1.7-0.7c1-0.1,2.5-0.7,3.4-0.2c1.1,0.5,1.7,1.2,2,2.3c1,3.8,2.8,7.7,3.8,11.5
                      c0.9,3.4,4.3,14.5,4.3,14.5s-8.2,4.6-9.8,5.1c-1.8,0.6-4.1-0.2-5.9-0.7c-1.9-0.5-3.9-1-5.8-1.5c-1.7-0.4-3.5-0.9-4.7-2.5
                      c-1-1.4-0.5-2.5,0.1-3.9C183,182.7,189.4,176.8,189.4,170.8z"/>
                  </g>

                    <linearGradient id="SVGID_148_" gradientUnits="userSpaceOnUse" x1="5117.2451" y1="159.6091" x2="5123.3525" y2="159.6091" gradientTransform="matrix(-1 0 0 1 5312.1245 0)">
                    <stop  offset="0" style="stop-color:#D7D7D7"/>
                    <stop  offset="1" style="stop-color:#E3E3E2"/>
                  </linearGradient>
                  <polygon style="fill:url(#SVGID_148_);" points="194.9,163.4 193.6,164.6 193.6,156.9 188.8,155.8 190,154.6 194.8,155.7       "/>
                  <g>
                    <defs>
                      <polygon id="SVGID_149_" points="193.6,156.9 194.8,155.7 194.9,163.4 193.6,164.6 189.4,163.3 188.8,155.8          "/>
                    </defs>
                    <clipPath id="SVGID_150_">
                      <use xlink:href="#SVGID_149_"  style="overflow:visible;"/>
                    </clipPath>

                      <linearGradient id="SVGID_151_" gradientUnits="userSpaceOnUse" x1="5116.355" y1="159.2633" x2="5123.9731" y2="159.2633" gradientTransform="matrix(-1 0 0 1 5312.1245 0)">
                      <stop  offset="0" style="stop-color:#ED3849"/>
                      <stop  offset="1" style="stop-color:#FAB11F"/>
                    </linearGradient>
                    <polygon style="clip-path:url(#SVGID_150_);fill:url(#SVGID_151_);" points="188.2,164.2 195.8,164.2 195.8,154.4 188.2,154.4
                              "/>

                      <linearGradient id="SVGID_152_" gradientUnits="userSpaceOnUse" x1="5124.1558" y1="160.1026" x2="5116.856" y2="160.1026" gradientTransform="matrix(-1 0 0 1 5312.1245 0)">
                      <stop  offset="0.1083" style="stop-color:#2B2B2B;stop-opacity:0"/>
                      <stop  offset="1" style="stop-color:#747474"/>
                    </linearGradient>
                    <path style="opacity:0.75;clip-path:url(#SVGID_150_);fill:url(#SVGID_152_);" d="M193.6,159.8c0,0-5.7-2-4.8,0.4
                      c1,2.4-0.8,3.7-0.8,3.7l5.4,1l1.9-1.2c0,0-0.1-8-0.1-8.1c0-0.4-1.7-0.5-1.7,0.8C193.5,157.7,193.6,159.8,193.6,159.8z"/>
                  </g>
                  <g>
                    <defs>
                      <path id="SVGID_153_" d="M189.6,162.2c0.4,0.2,1.8,0.7,2.2,1c0.3,0.3,1.3,1.5,1.7,1.6c0.4,0.1,1.3-0.8,1.3-1.1
                        c0-0.3-0.4-1.3-0.6-1.6c-0.1-0.2-1.7,0.1-1.7,0.1s-1.8-1-2.8-2c-0.5-0.5-0.3-1.3-0.2-2l-2.5,1.4
                        C187.7,161.1,189.6,162.2,189.6,162.2z"/>
                    </defs>
                    <clipPath id="SVGID_154_">
                      <use xlink:href="#SVGID_153_"  style="overflow:visible;"/>
                    </clipPath>

                      <linearGradient id="SVGID_155_" gradientUnits="userSpaceOnUse" x1="5116.0962" y1="157.83" x2="5125.2803" y2="157.83" gradientTransform="matrix(-1 0 0 1 5312.1245 0)">
                      <stop  offset="0" style="stop-color:#FAB758"/>
                      <stop  offset="1" style="stop-color:#F8A025"/>
                    </linearGradient>
                    <polygon style="clip-path:url(#SVGID_154_);fill:url(#SVGID_155_);" points="186.8,165.2 196,165.2 196,150.5 186.8,150.5
                      "/>

                      <linearGradient id="SVGID_156_" gradientUnits="userSpaceOnUse" x1="5003.0215" y1="412.3259" x2="5010.4512" y2="414.0674" gradientTransform="matrix(-1.1607 -0.2299 -0.1943 0.9809 6083.2339 908.8104)">
                      <stop  offset="0" style="stop-color:#424242"/>
                      <stop  offset="1" style="stop-color:#747474;stop-opacity:0"/>
                    </linearGradient>
                    <path style="opacity:0.5;clip-path:url(#SVGID_154_);fill:url(#SVGID_156_);" d="M188.1,160.5c-0.3-0.1-0.7-0.1-0.9,0
                      c-0.2,0.1-0.3,0.4-0.2,0.7c0.1,0.2,0.3,0.4,0.5,0.6c1.4,1.3,2.9,2.4,4.7,3.2c0.6,0.3,1.3,0.6,2,0.7c0.7,0.1,1.4-0.1,1.8-0.6
                      c0.5-0.6,0.2-1.5-0.4-2.2c-0.7-0.9-1.8-1.4-3-1.5c-0.7,0-1.4-0.3-2.1-0.4C189.7,160.8,188.9,160.7,188.1,160.5z"/>
                  </g>
                  <g>
                    <defs>
                      <path id="SVGID_157_" d="M197,162.4c-1.2,0.4-4.6-1.5-6.9-2.5c-2.3-1-1.7-0.1-2.5-0.9c-0.8-0.8-0.4-3.5,0.3-3.5
                        c0.7,0,0.9,0.4,0.9,0.4s0.3,1.4,0.4,1.6c2.7,2.2,5,1.9,6.1,1.9c1.1,0-0.7-9.3,2.2-9.3c1.8,0,2.5,1.1,2.5,2.2
                        C200,156.3,198.1,162.1,197,162.4z"/>
                    </defs>
                    <clipPath id="SVGID_158_">
                      <use xlink:href="#SVGID_157_"  style="overflow:visible;"/>
                    </clipPath>

                      <linearGradient id="SVGID_159_" gradientUnits="userSpaceOnUse" x1="5111.5356" y1="156.4027" x2="5125.0308" y2="156.4027" gradientTransform="matrix(-1 0 0 1 5312.1245 0)">
                      <stop  offset="0" style="stop-color:#F8A025"/>
                      <stop  offset="1" style="stop-color:#FAB758"/>
                    </linearGradient>
                    <polygon style="clip-path:url(#SVGID_158_);fill:url(#SVGID_159_);" points="200.6,163.4 187.1,163.4 187.1,149.4 200.6,149.4
                              "/>

                      <linearGradient id="SVGID_160_" gradientUnits="userSpaceOnUse" x1="5111.8042" y1="156.8869" x2="5125.6431" y2="156.8869" gradientTransform="matrix(-1 0 0 1 5312.1245 0)">
                      <stop  offset="0" style="stop-color:#747474;stop-opacity:0"/>
                      <stop  offset="1" style="stop-color:#424242"/>
                    </linearGradient>
                    <path style="opacity:0.5;clip-path:url(#SVGID_158_);fill:url(#SVGID_160_);" d="M196.9,158.3c0.1,1-0.8,1.9-1.7,2.2
                      c-1,0.2-2,0-3-0.4c-0.9-0.4-1.8-0.9-2.8-1.1c-1-0.2-2.1-0.1-2.8,0.6c2.8,1.2,8.1,3,8.1,3l5.4,0.1l0.4-10.5c-0.9-2-2.8-1-3.4,0.4
                      C196.3,154,196.9,157.6,196.9,158.3z"/>
                  </g>
                  <g>
                    <defs>
                      <path id="SVGID_161_" d="M196.7,145.5c0.6-1.1-0.6-2.9-0.6-2.9s6.5,0.9,7.9,5.6c1.3,4.6-2.6,2.7-3.2,3.8
                        c-0.4,0.8,1.2,1.7,1.1,2.7c-0.1,2.2-6.5,1.1-7.5-2.4C193.3,148.9,196.1,146.6,196.7,145.5z"/>
                    </defs>
                    <clipPath id="SVGID_162_">
                      <use xlink:href="#SVGID_161_"  style="overflow:visible;"/>
                    </clipPath>
                    <g style="clip-path:url(#SVGID_162_);">

                        <linearGradient id="SVGID_163_" gradientUnits="userSpaceOnUse" x1="4810.2485" y1="-1094.5901" x2="4824.5679" y2="-1094.5901" gradientTransform="matrix(-0.9611 0.2763 0.2763 0.9611 5129.7983 -128.2975)">
                        <stop  offset="0" style="stop-color:#36415D"/>
                        <stop  offset="1" style="stop-color:#4F668B"/>
                      </linearGradient>
                      <polygon style="fill:url(#SVGID_163_);" points="192.8,160.7 206.5,156.8 201.9,140.7 188.2,144.7           "/>
                    </g>

                      <linearGradient id="SVGID_164_" gradientUnits="userSpaceOnUse" x1="4809.7173" y1="-1095.024" x2="4822.1914" y2="-1095.024" gradientTransform="matrix(-0.9611 0.2763 0.2763 0.9611 5129.7983 -128.2975)">
                      <stop  offset="0" style="stop-color:#2B2B2B;stop-opacity:0"/>
                      <stop  offset="1" style="stop-color:#747474"/>
                    </linearGradient>
                    <path style="opacity:0.75;clip-path:url(#SVGID_162_);fill:url(#SVGID_164_);" d="M200.7,143.5c-1.2-0.6-3-1.4-4.3-1.1
                      c-0.6,0.2-1.2,0.7-1.2,1.4c0,0.5,0.4,1,0.9,1.2c0.5,0.2,1,0.3,1.6,0.3c0.5,0,1.1,0,1.6,0.2c0.5,0.2,1,0.5,1.1,1.1
                      c0.2,0.9-0.8,1.4-1.5,1.7c-0.4,0.2-0.9,0.4-1.2,0.7c-0.3,0.3-0.5,0.9-0.4,1.3c0.1,0.3,0.5,0.6,0.6,0.9c0.1,0.4-0.1,0.8-0.5,1
                      c-0.3,0.2-0.8,0.3-1.2,0.3c-0.4,0-0.8,0-1.2,0.2c-0.9,0.3-1.5,1.2-1.4,2.2c0,0.9,0.6,1.8,1.3,2.3c0.8,0.5,1.7,0.8,2.6,0.8
                      c0.9,0,1.9-0.2,2.7-0.5c1.2-0.3,2.4-0.8,3.2-1.7c0.4-0.4,0.6-1.1,0.8-1.7c0.7-1.9,0.7-4.1,0.2-6.1c-0.1-0.5-0.3-1-0.5-1.5
                      c-0.2-0.5-0.4-0.7-0.8-1c-0.8-0.8-1.6-1.5-2.6-2C200.7,143.5,200.7,143.5,200.7,143.5z"/>
                  </g>
                  <path style="fill:none;" d="M186.4,143.1c1.7-1.1,3.8-1.7,5.8-2.3c0.8-0.2,1.6-0.5,2.4-0.7"/>
                  <g>
                    <defs>
                      <path id="SVGID_166_" d="M201.7,196.4c1.1-0.1,2.5-2.9-0.4-5c1.1,0.1,2-0.4,2.2-1.4c1,1.3,2.5,2,2.6,3c0.1,1-1.8,4.3-2.6,4.3
                        c-0.8,0-1.6,0-2.1,0.1C201.1,197.4,200.8,196.5,201.7,196.4z M176,192.8c0.5,0.4,4.8,3.7,5.9,3.8c1.1,0.1,0.8-2.1,2.3-3.8
                        c-1.1,0.1-1.7-0.5-2.2-1.5c-1.2,3.4-4.6,0.7-5.2,0.6C176.2,191.9,175.8,192.7,176,192.8z"/>
                    </defs>
                    <clipPath id="SVGID_165_">
                      <use xlink:href="#SVGID_166_"  style="overflow:visible;"/>
                    </clipPath>

                      <linearGradient id="SVGID_167_" gradientUnits="userSpaceOnUse" x1="4221.4502" y1="236.8885" x2="4246.6177" y2="236.8885" gradientTransform="matrix(-1.2409 2.900000e-03 2.600000e-03 1.1097 5444.6235 -81.5622)">
                      <stop  offset="0" style="stop-color:#ED4051"/>
                      <stop  offset="1" style="stop-color:#D62538"/>
                    </linearGradient>
                    <polygon style="clip-path:url(#SVGID_165_);fill:url(#SVGID_167_);" points="206.9,197.5 175.6,197.5 175.6,189.7 206.8,189.7
                              "/>

                      <linearGradient id="SVGID_168_" gradientUnits="userSpaceOnUse" x1="4994.125" y1="-564.361" x2="4998.7407" y2="-564.8794" gradientTransform="matrix(-0.9862 0.1658 0.1658 0.9862 5201.3745 -79.0103)">
                      <stop  offset="0" style="stop-color:#747474"/>
                      <stop  offset="0.8917" style="stop-color:#2B2B2B;stop-opacity:0"/>
                    </linearGradient>
                    <path style="opacity:0.75;clip-path:url(#SVGID_165_);fill:url(#SVGID_168_);" d="M180.7,194.3c-0.9,0-2.7-0.7-2.7-1.9
                      c-0.1-1.2,3.7-2.1,4.4-1.5C183,191.5,181.5,194.3,180.7,194.3z"/>

                      <linearGradient id="SVGID_169_" gradientUnits="userSpaceOnUse" x1="5519.4697" y1="1009.5815" x2="5519.4697" y2="1006.2181" gradientTransform="matrix(-0.9027 -0.1854 -0.2821 1.3739 5468.9629 -167.8136)">
                      <stop  offset="0.1083" style="stop-color:#2B2B2B;stop-opacity:0"/>
                      <stop  offset="1" style="stop-color:#747474"/>
                    </linearGradient>
                    <path style="opacity:0.75;clip-path:url(#SVGID_165_);fill:url(#SVGID_169_);" d="M202.7,196.1c-1.1,0.1-2.4-4.7-1.9-5
                      c0.7-0.5,3.1,0.9,3.2,1.9C204.1,194,203.8,196.1,202.7,196.1z"/>
                  </g>
                </g>
              </g>
              <g>
                <g>

                    <linearGradient id="SVGID_170_" gradientUnits="userSpaceOnUse" x1="1813.0901" y1="46.2734" x2="1818.271" y2="46.2734" gradientTransform="matrix(-1 0 0 1 2063.905 0)">
                    <stop  offset="0" style="stop-color:#D7D7D7"/>
                    <stop  offset="1" style="stop-color:#E3E3E2"/>
                  </linearGradient>
                  <path style="fill:url(#SVGID_170_);" d="M246.1,28.4c0.2,0,0.5,0,0.7,0h0.2c0.1,0,0.1,0,0.2,0c2.2,0.2,3.7,2,3.7,4.3c0,0,0,0,0,0
                    c0,0,0,0,0,0v30.6c0,0.5-0.4,0.8-0.8,0.8c-0.5,0-0.8-0.4-0.8-0.8V33.1v0c0-2.4-1.1-3-3.5-3L246.1,28.4z"/>
                  <linearGradient id="SVGID_171_" gradientUnits="userSpaceOnUse" x1="249.1516" y1="62.9367" x2="250.8151" y2="62.9367">
                    <stop  offset="0" style="stop-color:#646565"/>
                    <stop  offset="1" style="stop-color:#424242"/>
                  </linearGradient>
                  <path style="fill:url(#SVGID_171_);" d="M250.8,61.7v1.6c0,0.5-0.4,0.8-0.8,0.8c-0.5,0-0.8-0.4-0.8-0.8v-1.6H250.8z"/>
                  <g style="opacity:0.4;">
                    <linearGradient id="SVGID_172_" gradientUnits="userSpaceOnUse" x1="245.8954" y1="46.7274" x2="250.2059" y2="46.7274">
                      <stop  offset="0" style="stop-color:#747474"/>
                      <stop  offset="1" style="stop-color:#747474"/>
                    </linearGradient>
                    <path style="fill:url(#SVGID_172_);" d="M245.9,29.3c0.6,0,2.4,0.5,2.9,0.8c1.3,0.7,1.5,3.4,1.4,6.1c0,3.9-0.5,8-0.5,12.5
                      c-0.1,4.9,0.2,10.2,0.5,14.4c0,0.3,0.1,0.6,0,0.8c-0.1,0.3-0.3,0.2-0.6,0c-0.3-0.1-0.4-0.4-0.4-1.3l0-18.5V37c0-0.8,0-3.3,0-4.1
                      c0-0.5,0-2.5-2.5-2.8L245.9,29.3z"/>
                  </g>
                  <linearGradient id="SVGID_173_" gradientUnits="userSpaceOnUse" x1="234.0382" y1="47.5771" x2="243.0747" y2="47.5771">
                    <stop  offset="0" style="stop-color:#D7D7D7"/>
                    <stop  offset="1" style="stop-color:#E3E3E2"/>
                  </linearGradient>
                  <path style="fill:url(#SVGID_173_);" d="M242.2,31.1h-3.5c-0.2,0-0.5,0-0.7,0h-0.2c-0.1,0-0.1,0-0.2,0c-2.2,0.2-3.7,2-3.7,4.3
                    c0,0,0,0,0,0l0,0v27.8c0,0.5,0.4,0.8,0.8,0.8c0.5,0,0.8-0.4,0.8-0.8V35.8v0c0-2.4,1.1-3,3.5-3h3c0.5,0,0.8-0.4,0.8-0.8
                    C243.1,31.4,242.7,31.1,242.2,31.1z"/>
                  <linearGradient id="SVGID_174_" gradientUnits="userSpaceOnUse" x1="234.0382" y1="62.8702" x2="235.7016" y2="62.8702">
                    <stop  offset="0" style="stop-color:#646565"/>
                    <stop  offset="1" style="stop-color:#424242"/>
                  </linearGradient>
                  <path style="fill:url(#SVGID_174_);" d="M235.7,61.7v1.6c0,0.5-0.4,0.8-0.8,0.8c-0.5,0-0.8-0.4-0.8-0.8v-1.6H235.7z"/>
                  <g style="opacity:0.4;">
                    <linearGradient id="SVGID_175_" gradientUnits="userSpaceOnUse" x1="234.3653" y1="49.4089" x2="248.8518" y2="49.4089">
                      <stop  offset="0" style="stop-color:#747474"/>
                      <stop  offset="1" style="stop-color:#424242;stop-opacity:0"/>
                    </linearGradient>
                    <path style="fill:url(#SVGID_175_);" d="M234.9,64.1c-1.2,0,0.2-1.5,0.1-2.2c-0.3-3,0.1-6,0.1-9.1c0-2.5-0.6-5.3-0.5-7.8
                      c0.1-2.6,0.6-7.2,0.7-9.7c0-1,0.3-1.9,1-2.6c0.6-0.6,1.7-0.3,2.6-0.5c1.9-0.2,3.9-0.3,5.9-0.2c0.6,0,2.4,0.5,2.9,0.8
                      c1.3,0.7,1.5,3.4,1.4,6.1c0,3.9-0.5,8-0.5,12.5c-0.1,4.9,0.2,10.2,0.5,14.4c0,0.3,0.1,0.6,0,0.8c-0.1,0.3-0.3,0.2-0.6,0
                      c-0.3-0.1-0.4-0.4-0.4-1.3l0-18.5v-7.2c0-0.8,0-3.3,0-4.1c0-0.5,0-2.5-2.5-2.8c-1-0.1-5.1-0.1-5.8-0.1c-1.3,0-3.7-0.1-3.8,2.6
                      c0,0,0,2.8,0,3.6c0.1,9.3,0,12.3,0,22.3l0,2.1C235.7,63.3,235.6,64.1,234.9,64.1z"/>
                  </g>

                    <linearGradient id="SVGID_176_" gradientUnits="userSpaceOnUse" x1="894.4169" y1="202.3023" x2="901.0005" y2="202.3023" gradientTransform="matrix(0.939 0.3438 -0.3438 0.939 -535.9875 -455.4679)">
                    <stop  offset="0" style="stop-color:#D7D7D7"/>
                    <stop  offset="1" style="stop-color:#E3E3E2"/>
                  </linearGradient>
                  <path style="fill:url(#SVGID_176_);" d="M239.4,44.8l-4.6-1.7c-0.4-0.2-0.7-0.6-0.5-1.1l0,0c0.2-0.4,0.6-0.7,1.1-0.5l4.6,1.7
                    c0.4,0.2,0.7,0.6,0.5,1.1l0,0C240.4,44.8,239.9,45,239.4,44.8z"/>

                    <linearGradient id="SVGID_177_" gradientUnits="userSpaceOnUse" x1="1027.5291" y1="215.2233" x2="1033.7897" y2="215.2233" gradientTransform="matrix(0.914 0.4058 -0.4058 0.914 -617.4689 -561.8051)">
                    <stop  offset="0" style="stop-color:#D7D7D7"/>
                    <stop  offset="1" style="stop-color:#E3E3E2"/>
                  </linearGradient>
                  <path style="fill:url(#SVGID_177_);" d="M239,54.8l-4.2-1.8c-0.4-0.2-0.6-0.7-0.4-1.1l0,0c0.2-0.4,0.7-0.6,1.1-0.4l4.2,1.8
                    c0.4,0.2,0.6,0.7,0.4,1.1l0,0C239.9,54.8,239.4,55,239,54.8z"/>
                  <g>
                    <defs>
                      <path id="SVGID_179_" d="M257.4,10.7c-4.8-1.7-5.6,12.2-6.4,13.2c-0.5,0.7-2.7,3.1-6.3,5.6c-1.9,1.3-3.9-0.4-3.5,3.2
                        c0.1,0.7,0.6,2.2,0.9,2.3c0.3,0,0.8-0.2,0.8-0.2s0.1,0.3,0.3,0.3c0.3,0,0.8-0.7,0.8-0.7s7-3.9,9.2-6.9
                        C256.1,23.8,262.2,12.4,257.4,10.7z"/>
                    </defs>
                    <clipPath id="SVGID_178_">
                      <use xlink:href="#SVGID_179_"  style="overflow:visible;"/>
                    </clipPath>

                      <linearGradient id="SVGID_180_" gradientUnits="userSpaceOnUse" x1="-2852.0886" y1="698.7063" x2="-2882.321" y2="711.0897" gradientTransform="matrix(0.9999 -1.480000e-02 1.480000e-02 0.9999 3105.3743 -724.8849)">
                      <stop  offset="0" style="stop-color:#FFC55D"/>
                      <stop  offset="1" style="stop-color:#FAB11F"/>
                    </linearGradient>
                    <polygon style="clip-path:url(#SVGID_178_);fill:url(#SVGID_180_);" points="236.9,35.9 257.7,35.9 261.3,9.8 237,10.2         "/>

                      <linearGradient id="SVGID_181_" gradientUnits="userSpaceOnUse" x1="-2867.8474" y1="709.3751" x2="-2867.6926" y2="699.9824" gradientTransform="matrix(0.9999 -1.480000e-02 1.480000e-02 0.9999 3105.3743 -724.8849)">
                      <stop  offset="0" style="stop-color:#747474;stop-opacity:0"/>
                      <stop  offset="1" style="stop-color:#424242"/>
                    </linearGradient>
                    <path style="opacity:0.49;clip-path:url(#SVGID_178_);fill:url(#SVGID_181_);" d="M254,19c0-0.4-0.2-0.7-0.5-1
                      c-0.5-0.5-1.3-0.6-1.9-0.4c-0.6,0.2-1.2,0.8-1.2,1.5c0,0.8-0.4,1.5-0.7,2.2c-0.4,0.8-7,4.1-7,5.4c0,1.3,10.1-2.9,10.5-4.4
                      C253.4,21.2,254.1,20,254,19z"/>
                    <g style="clip-path:url(#SVGID_178_);">
                      <defs>
                        <path id="SVGID_183_" d="M252.5,24c-1.8-0.7-3.4-4.9-3.4-4.9l4.8-10.3l7,2.6C260.9,11.4,260.5,27.1,252.5,24z"/>
                      </defs>
                      <clipPath id="SVGID_182_">
                        <use xlink:href="#SVGID_183_"  style="overflow:visible;"/>
                      </clipPath>

                        <linearGradient id="SVGID_184_" gradientUnits="userSpaceOnUse" x1="-2878.6548" y1="799.282" x2="-2865.9912" y2="799.282" gradientTransform="matrix(1 1.700000e-03 -1.700000e-03 1 3128.7971 -777.3974)">
                        <stop  offset="0" style="stop-color:#D62538"/>
                        <stop  offset="1" style="stop-color:#ED4051"/>
                      </linearGradient>
                      <polygon style="clip-path:url(#SVGID_182_);fill:url(#SVGID_184_);" points="248.8,25.1 261.4,25.1 261.5,8.9 248.8,8.9
                        "/>
                    </g>
                  </g>
                  <g style="opacity:0.5;">
                    <linearGradient id="SVGID_185_" gradientUnits="userSpaceOnUse" x1="241.4707" y1="29.7281" x2="255.3657" y2="29.7281">
                      <stop  offset="0" style="stop-color:#424242"/>
                      <stop  offset="1" style="stop-color:#747474;stop-opacity:0"/>
                    </linearGradient>
                    <path style="fill:url(#SVGID_185_);" d="M241.5,33.9c1-1.1,3.2,0,4.3-1.1c0.3-0.3,0.4-0.7,0.7-1c0.6-0.8,1.6-2,2.5-2.3
                      c1.2-0.4,2.7-2.2,3.7-3.1c1.2-1.1,1.7-0.5,2.1-2.2c0.3,0,0.6-0.1,0.6-0.1s-2.1,3.7-3.8,5.1c-0.7,0.5-2,1.5-3.4,2.6
                      c-1.5,1.1-4.1,2.5-4.1,2.5c-0.2,0.2-0.4,0.6-0.7,0.7c-0.3,0.1-0.4-0.3-0.5-0.3c-0.2,0-0.7,0.3-0.8,0.2
                      C241.6,34.6,241.5,33.9,241.5,33.9z"/>
                  </g>

                    <linearGradient id="SVGID_186_" gradientUnits="userSpaceOnUse" x1="-4755.3384" y1="260.1947" x2="-4749.9248" y2="260.1947" gradientTransform="matrix(0.9876 0.1569 -0.1569 0.9876 5000.4575 556.1414)">
                    <stop  offset="0" style="stop-color:#8D2D37"/>
                    <stop  offset="1" style="stop-color:#781A26"/>
                  </linearGradient>
                  <path style="fill:url(#SVGID_186_);" d="M263,68.4L263,68.4c0,0.2,0.1,0.4,0.3,0.4c0.6,0.1,1.2,0.2,2.4,0.4
                    c1.2,0.2,3.4-1.2,2.9-2.7c-0.5-1.5-2.1,0.6-2.1,0.6l-3.3,0.9C263.2,68,263,68.2,263,68.4z"/>
                  <g>
                    <defs>
                      <path id="SVGID_188_" d="M267,24.7c-0.7-3.2-4.3-14.3-8.7-14.3c-1,0-3.4,1-4,2.5c-0.6,1.4-1.4,4.1-0.6,6.1
                        c1.1,2.7-1.4,6.5-1.7,8.7c-0.2,1.9,0,4.5,2.2,9.5c1,2.3,2.5,4.8,2.5,7c0.1,8.1,7.5,22.4,7.9,23c0.4,0.6,4.8,0.6,4.9-2.6
                        c0.2-6-5.3-14.1-5.4-15.3c-0.2-6.4-0.4-6.7,0.9-9C267.4,36,268.2,30.5,267,24.7z"/>
                    </defs>
                    <clipPath id="SVGID_187_">
                      <use xlink:href="#SVGID_188_"  style="overflow:visible;"/>
                    </clipPath>

                      <linearGradient id="SVGID_189_" gradientUnits="userSpaceOnUse" x1="-2878.2803" y1="805.7526" x2="-2855.7852" y2="805.7526" gradientTransform="matrix(1 1.700000e-03 -1.700000e-03 1 3128.7971 -777.3974)">
                      <stop  offset="0" style="stop-color:#ED4051"/>
                      <stop  offset="1" style="stop-color:#D62538"/>
                    </linearGradient>
                    <path style="clip-path:url(#SVGID_187_);fill:url(#SVGID_189_);" d="M249.1,30.1c0,0,2.6,7.7,10,9.9c7.4,2.2,8.4-2.2,8.4-2.2
                      l4.1-29.6l-20-1.8L249.1,30.1z"/>

                      <linearGradient id="SVGID_190_" gradientUnits="userSpaceOnUse" x1="-2878.5564" y1="838.2468" x2="-2855.0806" y2="838.2468" gradientTransform="matrix(1 1.700000e-03 -1.700000e-03 1 3128.7971 -777.3974)">
                      <stop  offset="0" style="stop-color:#FFC55D"/>
                      <stop  offset="1" style="stop-color:#FAB11F"/>
                    </linearGradient>
                    <polygon style="clip-path:url(#SVGID_187_);fill:url(#SVGID_190_);" points="248.8,43.9 250.7,70.4 272.3,66.3 268.8,41.5
                      "/>

                      <linearGradient id="SVGID_191_" gradientUnits="userSpaceOnUse" x1="-2875.7876" y1="833.4968" x2="-2854.9644" y2="833.4968" gradientTransform="matrix(1 1.700000e-03 -1.700000e-03 1 3128.7971 -777.3974)">
                      <stop  offset="0" style="stop-color:#25334D"/>
                      <stop  offset="1" style="stop-color:#3E537D"/>
                    </linearGradient>
                    <path style="clip-path:url(#SVGID_187_);fill:url(#SVGID_191_);" d="M251.6,39.8l5.7,29.7l15.1-2.2L267.5,33
                      c-0.5,1.2-4.8,1.8-6.6,1.9C253.8,35,251.6,39.8,251.6,39.8z"/>

                      <linearGradient id="SVGID_192_" gradientUnits="userSpaceOnUse" x1="-2874.5063" y1="803.0151" x2="-2864.5007" y2="803.0151" gradientTransform="matrix(1 1.700000e-03 -1.700000e-03 1 3128.7971 -777.3974)">
                      <stop  offset="0" style="stop-color:#424242"/>
                      <stop  offset="1" style="stop-color:#747474;stop-opacity:0"/>
                    </linearGradient>
                    <path style="opacity:0.4;clip-path:url(#SVGID_187_);fill:url(#SVGID_192_);" d="M261,19.8c0.6,0.5,1.3,0.9,1.6,1.7
                      c0.6,1.4,0.3,3.1-0.5,4.4c-1.1,1.6-3,2.5-4.9,2.6c-0.8,0-1.6-0.1-2.3-0.4c-0.7-0.3,0-1.5-0.2-2.3c-0.2-0.6,0-1.3,0.1-1.9
                      c0.3-1.9-1-3.4-1.4-5.3c-0.2-1-0.5-2-0.4-3c0.2-3.1,3.8-3.1,6.1-2.3c0.4,0.2,0.8,0.4,1.1,0.7c0.5,0.6,0.5,1.3,0.4,2.1
                      c-0.1,0.7-0.4,1.4-0.3,2.1C260.2,19,260.5,19.4,261,19.8z"/>

                      <linearGradient id="SVGID_193_" gradientUnits="userSpaceOnUse" x1="-2874.9409" y1="795.8526" x2="-2868.6013" y2="795.8526" gradientTransform="matrix(1 1.700000e-03 -1.700000e-03 1 3128.7971 -777.3974)">
                      <stop  offset="0" style="stop-color:#424242"/>
                      <stop  offset="1" style="stop-color:#747474;stop-opacity:0"/>
                    </linearGradient>
                    <polygon style="opacity:0.2;clip-path:url(#SVGID_187_);fill:url(#SVGID_193_);" points="253.9,16.9 252.5,15.6 255,11.1
                      258.8,10.2        "/>
                  </g>
                  <g>
                    <defs>
                      <path id="SVGID_195_" d="M255,12.2c0-0.4-0.5-2.5-0.5-2.5s-1.9,1.1-2.6,0.3c-0.8-0.8-1.9-6.5,0.4-8.8c2.5-2.5,6.7-0.9,6.8,2.1
                        c0.1,3-1.5,3.7-1.5,4.5c0,0.8,1.3,2.8,1.2,3.2c-0.1,0.4-2.5,2.8-4.1,2.8C253.9,13.9,255,12.6,255,12.2z"/>
                    </defs>
                    <clipPath id="SVGID_194_">
                      <use xlink:href="#SVGID_195_"  style="overflow:visible;"/>
                    </clipPath>

                      <linearGradient id="SVGID_196_" gradientUnits="userSpaceOnUse" x1="-2866.3503" y1="786.4713" x2="-2878.605" y2="791.7283" gradientTransform="matrix(1 1.700000e-03 -1.700000e-03 1 3128.7971 -777.3974)">
                      <stop  offset="0" style="stop-color:#FFC55D"/>
                      <stop  offset="1" style="stop-color:#FAB11F"/>
                    </linearGradient>
                    <polygon style="clip-path:url(#SVGID_194_);fill:url(#SVGID_196_);" points="250.8,14 259.1,14 259.2,-0.4 250.8,-0.4        "/>

                      <linearGradient id="SVGID_197_" gradientUnits="userSpaceOnUse" x1="-2876.7473" y1="791.5432" x2="-2868.1091" y2="791.5432" gradientTransform="matrix(1 1.700000e-03 -1.700000e-03 1 3128.7971 -777.3974)">
                      <stop  offset="0" style="stop-color:#424242"/>
                      <stop  offset="1" style="stop-color:#747474;stop-opacity:0"/>
                    </linearGradient>
                    <path style="opacity:0.5;clip-path:url(#SVGID_194_);fill:url(#SVGID_197_);" d="M250.8,7.9c0,0,1.4,0,1.4-0.4
                      c0-0.4-0.7-1.5-0.4-1.9c0.4-0.4,1.6-0.5,2.2-0.2c0.6,0.2,1,1.1,1,2.1c0,1-0.4,1.9-1.6,3c-1.1,1.1,1,4.6,1.7,4.6
                      c0.7,0,1.4-0.3,2-0.7c0.7-0.4,1.4-1,1.9-1.7c0.5-0.7,0.2-4.4,0.2-6c0-1.6-1-2.7-3.3-2.7s-3.5-1.4-5.3,0.4L250.8,7.9z"/>

                      <linearGradient id="SVGID_198_" gradientUnits="userSpaceOnUse" x1="-2873.4338" y1="793.5151" x2="-2869.5249" y2="793.5151" gradientTransform="matrix(1 1.700000e-03 -1.700000e-03 1 3128.7971 -777.3974)">
                      <stop  offset="0" style="stop-color:#424242"/>
                      <stop  offset="1" style="stop-color:#747474;stop-opacity:0"/>
                    </linearGradient>
                    <path style="opacity:0.5;clip-path:url(#SVGID_194_);fill:url(#SVGID_198_);" d="M255.8,8.8c0.1-0.1,0.2-0.2,0.4-0.3
                      c0.1-0.1,0.3-0.1,0.4-0.1c0.2,0.1,0.3,0.2,0.4,0.4c0.3,0.6,0.6,1.2,0.9,1.8c0,0.1,0.1,0.2,0.1,0.3c0,0.1-0.1,0.2-0.2,0.3
                      c-0.7,0.9-2.9,2.7-2.9,2.7l-0.8-0.1c0,0,0.3-4.1,0.6-4.2C255,9.4,255.4,9.1,255.8,8.8z"/>
                  </g>
                  <g>
                    <defs>
                      <path id="SVGID_200_" d="M255.5,2.6c-0.9,0-1.7,0-1.7,0.9c0,0.9,1.1,0.7,1.7,0.7c0.6,0,0.6,1.7,0,1.7c1.5,1.5,1-1.4,1.7-1.3
                        c0.8,0.1,0.6,1.7,0.2,2.1c-0.4,0.4,0.2,0.9,0.8,0.9s1.6-1.3,1.6-3c0-1.8-0.8-2.9-1.6-2.9C257.4,1.6,256.3,2.6,255.5,2.6z"/>
                    </defs>
                    <clipPath id="SVGID_199_">
                      <use xlink:href="#SVGID_200_"  style="overflow:visible;"/>
                    </clipPath>

                      <linearGradient id="SVGID_201_" gradientUnits="userSpaceOnUse" x1="-2873.7876" y1="786.8375" x2="-2867.0696" y2="786.8375" gradientTransform="matrix(1 1.700000e-03 -1.700000e-03 1 3128.7971 -777.3974)">
                      <stop  offset="0" style="stop-color:#D7D7D7"/>
                      <stop  offset="1" style="stop-color:#E3E3E2"/>
                    </linearGradient>
                    <polygon style="clip-path:url(#SVGID_199_);fill:url(#SVGID_201_);" points="253.7,7.8 260.4,7.8 260.4,1.4 253.7,1.3        "/>

                      <linearGradient id="SVGID_202_" gradientUnits="userSpaceOnUse" x1="-2627.853" y1="2572.5181" x2="-2622.3516" y2="2570.5146" gradientTransform="matrix(0.9391 0.3438 -0.3438 0.9391 3605.77 -1506.9318)">
                      <stop  offset="0" style="stop-color:#424242"/>
                      <stop  offset="1" style="stop-color:#747474;stop-opacity:0"/>
                    </linearGradient>
                    <path style="opacity:0.2;clip-path:url(#SVGID_199_);fill:url(#SVGID_202_);" d="M253.5,3.4c0,0,2.8-0.6,4.2,0.2
                      c1.5,0.8,2.2,2.7,1.1,3.8c-1.1,1.1-4.9-0.1-4.9-0.1L253.5,3.4z"/>
                  </g>

                    <linearGradient id="SVGID_203_" gradientUnits="userSpaceOnUse" x1="-5228.2422" y1="549.0279" x2="-5223.3643" y2="549.0279" gradientTransform="matrix(0.9654 0.2606 -0.2606 0.9654 5439.7085 898.8631)">
                    <stop  offset="0" style="stop-color:#8D2D37"/>
                    <stop  offset="1" style="stop-color:#781A26"/>
                  </linearGradient>
                  <path style="fill:url(#SVGID_203_);" d="M248.9,68.1L248.9,68.1c0,0.2,0.1,0.4,0.3,0.4c0.6,0.2,1.2,0.3,2.4,0.6
                    c1.1,0.3,3.5-2.1,2.5-3.3c-1-1.2-1.8,1.1-1.8,1.1l-3.1,0.8C249,67.7,248.9,67.9,248.9,68.1z"/>
                  <g>
                    <defs>
                      <path id="SVGID_205_" d="M264.5,34.4c0,0-5.4,0.7-7.7,1.2c-2.5,0.5-3,0.1-3,0.1s-0.1,1.2-1.8,7.3c-1.4,4.9,1.1,11.4-0.2,16.6
                        c-0.7,2.7-2.8,4.5-2.4,5.9c0.3,1.4,2.7,2.1,5.2,1.5c2.8-0.7,3.6-6.2,2.9-8.3c-1.5-4,2.7-15.7,3.4-16.6c0.5-0.7,4.6-2.4,6.7-9.2
                        C267.4,32.8,267.4,34.1,264.5,34.4z"/>
                    </defs>
                    <clipPath id="SVGID_204_">
                      <use xlink:href="#SVGID_205_"  style="overflow:visible;"/>
                    </clipPath>

                      <linearGradient id="SVGID_206_" gradientUnits="userSpaceOnUse" x1="-2891.0737" y1="835.7275" x2="-2866.7742" y2="835.7275" gradientTransform="matrix(1 1.700000e-03 -1.700000e-03 1 3128.7971 -777.3974)">
                      <stop  offset="0" style="stop-color:#FFC55D"/>
                      <stop  offset="1" style="stop-color:#FAB11F"/>
                    </linearGradient>
                    <polygon style="display:none;clip-path:url(#SVGID_204_);fill:url(#SVGID_206_);" points="255.1,73.4 260.6,33.5 242,33.5
                      236.3,72.5        "/>

                      <linearGradient id="SVGID_207_" gradientUnits="userSpaceOnUse" x1="-2892.9688" y1="838.8335" x2="-2859.9609" y2="838.8335" gradientTransform="matrix(1 1.700000e-03 -1.700000e-03 1 3128.7971 -777.3974)">
                      <stop  offset="0" style="stop-color:#25334D"/>
                      <stop  offset="1" style="stop-color:#3E537D"/>
                    </linearGradient>
                    <path style="clip-path:url(#SVGID_204_);fill:url(#SVGID_207_);" d="M266.8,59.3l0.6-26.3c0,0-3.9,1.5-10.7,1.7
                      c-6.8,0.2-22.4-1.2-22.4-1.2l3,46.6L266.8,59.3z"/>

                      <linearGradient id="SVGID_208_" gradientUnits="userSpaceOnUse" x1="-2884.2842" y1="833.3492" x2="-2854.1248" y2="833.3492" gradientTransform="matrix(1 1.700000e-03 -1.700000e-03 1 3128.7971 -777.3974)">
                      <stop  offset="0" style="stop-color:#424242"/>
                      <stop  offset="1" style="stop-color:#747474;stop-opacity:0"/>
                    </linearGradient>
                    <path style="opacity:0.5;clip-path:url(#SVGID_204_);fill:url(#SVGID_208_);" d="M269.2,32.7c-3.1,0.7-7.7,2-10.9,2
                      c-2.9,0-3.8-0.2-5.4-0.5c-2.5-0.6-4.9-0.9-5.3,2c-0.6,4.5-6.5,27.5-3.9,31.2c0.5,0.8,0.4,1.6,1.2,2c0.8,0.4,3.4,0.4,4.1-0.1
                      c0.8-0.6,5.5-2.3,6.1-6.1c0.3-1.8,0.1-0.1,0-6.3c0-2.8,0.2-6.5,0.5-7.2c1.8-3.7,5.4-7.6,6.1-7.3c2,1,2.7-1.2,4.9-1.7
                      c1.7-0.3,3.3-1.1,4.6-2.1c1.3-1,1.4-2.9,1.8-4.5c0-0.1,0.4-1.5,0.1-1.5C272.3,32.5,270.1,32.4,269.2,32.7z"/>
                  </g>
                  <linearGradient id="SVGID_209_" gradientUnits="userSpaceOnUse" x1="252.2169" y1="33.9223" x2="267.4307" y2="33.9223">
                    <stop  offset="0" style="stop-color:#ED4051"/>
                    <stop  offset="1" style="stop-color:#D62538"/>
                  </linearGradient>
                  <path style="fill:url(#SVGID_209_);" d="M254,36c2.2,0.8,6.3-0.9,7.5-0.9s2.5,0,3.7-0.4c1.2-0.3,2.1-0.5,2.3-2
                    c-0.8-0.1-1.2-0.2-2,0c-3.8,0.8-7.8,0.1-11.8,0.2c-0.2,0-0.3,0-0.4,0.1c-0.2,0.1-0.8-1.4-0.8-1.4s-0.5,0.4,0.6,3
                    C253.2,35.1,253.8,36,254,36z"/>

                    <linearGradient id="SVGID_210_" gradientUnits="userSpaceOnUse" x1="-2869.5056" y1="821.2722" x2="-2858.5955" y2="821.2722" gradientTransform="matrix(1 1.700000e-03 -1.700000e-03 1 3128.7971 -777.3974)">
                    <stop  offset="0" style="stop-color:#424242"/>
                    <stop  offset="1" style="stop-color:#747474;stop-opacity:0"/>
                  </linearGradient>
                  <path style="opacity:0.5;fill:url(#SVGID_210_);" d="M258.7,10.4c0,0,1.9,0.8,4.2,5.1c0.7,1.2,0.5,3.6,1,5.3
                    c1.2,3.8,2.7,7.4,3.2,9.7c0.9,4-1.5,6.2-1.8,7c-1.1,2.6-4.8,4.9-4.8,4.9c-0.4,1.1-0.8,1.9-1.2,3.3c-0.2,0.9-1.4,4.8-1.4,4.8
                    s0.5,2.2,1.2,3.8c1,2.7,2.4,6.1,4,9.6c0.9,2.1,1.7,3.3,2.1,3.6c1.1,0.6,2.2,0.1,3.1-0.5c0.7-0.5,0.5-2,0.2-3.9
                    c-0.3-1.9-1.1-3.6-2.2-5.2c-1.1-1.7-4.1-3.5-4.1-9.4c0-5.9,1.5-4.6,3.5-9.3c1.6-3.9,2.5-9,1.2-14.6c-0.6-2.7-2.6-8.1-4.4-10.8
                    C260.2,10.1,258.7,10.4,258.7,10.4z"/>

                    <linearGradient id="SVGID_211_" gradientUnits="userSpaceOnUse" x1="249.5344" y1="46.5689" x2="264.2679" y2="46.5689" gradientTransform="matrix(1 5.815357e-03 -5.815357e-03 1 -10.3292 -4.0175)">
                    <stop  offset="0" style="stop-color:#D7D7D7"/>
                    <stop  offset="1" style="stop-color:#E3E3E2"/>
                  </linearGradient>
                  <path style="fill:url(#SVGID_211_);" d="M252.8,44.9l-13.1,0c-0.5,0-0.8-0.4-0.8-0.8l0,0c0-0.5,0.4-0.8,0.8-0.8l13.1,0
                    c0.5,0,0.8,0.4,0.8,0.8l0,0C253.7,44.5,253.3,44.9,252.8,44.9z"/>
                  <linearGradient id="SVGID_212_" gradientUnits="userSpaceOnUse" x1="240.5028" y1="44.497" x2="252.6099" y2="44.497">
                    <stop  offset="0" style="stop-color:#424242;stop-opacity:0"/>
                    <stop  offset="1" style="stop-color:#747474"/>
                  </linearGradient>
                  <path style="opacity:0.4;fill:url(#SVGID_212_);" d="M240.5,44.3c0,0,2.9,0.2,3.6,0.1c0.6,0,2.8-0.4,3.4-0.4
                    c1.9,0.1,2.7,0.1,4.6,0.2c0.2,0,0.6,0.1,0.6,0.1v0.5l-12.1,0L240.5,44.3z"/>

                    <linearGradient id="SVGID_213_" gradientUnits="userSpaceOnUse" x1="249.5923" y1="56.5373" x2="264.3259" y2="56.5373" gradientTransform="matrix(1 5.815357e-03 -5.815357e-03 1 -10.3292 -4.0175)">
                    <stop  offset="0" style="stop-color:#D7D7D7"/>
                    <stop  offset="1" style="stop-color:#E3E3E2"/>
                  </linearGradient>
                  <path style="fill:url(#SVGID_213_);" d="M252.8,54.9l-13.1,0c-0.5,0-0.8-0.4-0.8-0.8l0,0c0-0.5,0.4-0.8,0.8-0.8l13.1,0
                    c0.5,0,0.8,0.4,0.8,0.8l0,0C253.7,54.5,253.3,54.9,252.8,54.9z"/>
                  <linearGradient id="SVGID_214_" gradientUnits="userSpaceOnUse" x1="234.2627" y1="43.3607" x2="238.8229" y2="43.3607">
                    <stop  offset="0" style="stop-color:#424242;stop-opacity:0"/>
                    <stop  offset="1" style="stop-color:#747474"/>
                  </linearGradient>
                  <path style="opacity:0.4;fill:url(#SVGID_214_);" d="M234.3,42.4c0,0,0,0.5,0.5,0.7c0.9,0.3,4,1.5,4,1.5V44c0,0-3-0.5-3.5-1.1
                    C234.1,41.5,234.3,42.4,234.3,42.4z"/>
                  <linearGradient id="SVGID_215_" gradientUnits="userSpaceOnUse" x1="234.2627" y1="53.3643" x2="238.8229" y2="53.3643">
                    <stop  offset="0" style="stop-color:#424242;stop-opacity:0"/>
                    <stop  offset="1" style="stop-color:#747474"/>
                  </linearGradient>
                  <path style="opacity:0.4;fill:url(#SVGID_215_);" d="M234.3,52.3c0,0,0,0.5,0.5,0.7c1.1,0.5,4,1.8,4,1.8v-0.6c0,0-3-0.8-3.5-1.4
                    C234.1,51.3,234.3,52.3,234.3,52.3z"/>
                  <linearGradient id="SVGID_216_" gradientUnits="userSpaceOnUse" x1="240.5028" y1="54.4655" x2="252.6099" y2="54.4655">
                    <stop  offset="0" style="stop-color:#424242;stop-opacity:0"/>
                    <stop  offset="1" style="stop-color:#747474"/>
                  </linearGradient>
                  <path style="opacity:0.4;fill:url(#SVGID_216_);" d="M240.5,54.3c0,0,2.9,0.2,3.6,0.1c0.6,0,2.8-0.4,3.4-0.4
                    c1.9,0.1,2.7,0.1,4.6,0.2c0.2,0,0.6,0.1,0.6,0.1v0.5l-12.1,0L240.5,54.3z"/>
                  <linearGradient id="SVGID_217_" gradientUnits="userSpaceOnUse" x1="238.8229" y1="52.0512" x2="247.8594" y2="52.0512">
                    <stop  offset="0" style="stop-color:#D7D7D7"/>
                    <stop  offset="1" style="stop-color:#E3E3E2"/>
                  </linearGradient>
                  <path style="fill:url(#SVGID_217_);" d="M247,34.2h-3.5c-0.2,0-0.5,0-0.7,0h-0.2c-0.1,0-0.1,0-0.2,0c-2.2,0.2-3.7,2-3.7,4.3
                    c0,0,0,0,0,0l0,0v30.6c0,0.5,0.4,0.8,0.8,0.8c0.5,0,0.8-0.4,0.8-0.8V38.9v0c0-2.4,1.1-3,3.5-3h3c0.5,0,0.8-0.4,0.8-0.8
                    S247.5,34.2,247,34.2z"/>
                  <linearGradient id="SVGID_218_" gradientUnits="userSpaceOnUse" x1="238.8229" y1="68.7145" x2="240.4864" y2="68.7145">
                    <stop  offset="0" style="stop-color:#646565"/>
                    <stop  offset="1" style="stop-color:#424242"/>
                  </linearGradient>
                  <path style="fill:url(#SVGID_218_);" d="M240.5,67.5v1.6c0,0.5-0.4,0.8-0.8,0.8c-0.5,0-0.8-0.4-0.8-0.8v-1.6H240.5z"/>

                    <linearGradient id="SVGID_219_" gradientUnits="userSpaceOnUse" x1="1809.6317" y1="52.0512" x2="1818.6682" y2="52.0512" gradientTransform="matrix(-1 0 0 1 2063.905 0)">
                    <stop  offset="0" style="stop-color:#D7D7D7"/>
                    <stop  offset="1" style="stop-color:#E3E3E2"/>
                  </linearGradient>
                  <path style="fill:url(#SVGID_219_);" d="M246.1,34.2h3.5c0.2,0,0.5,0,0.7,0h0.2c0.1,0,0.1,0,0.2,0c2.2,0.2,3.7,2,3.7,4.3
                    c0,0,0,0,0,0l0,0v30.6c0,0.5-0.4,0.8-0.8,0.8c-0.5,0-0.8-0.4-0.8-0.8V38.9v0c0-2.4-1.1-3-3.5-3h-3c-0.5,0-0.8-0.4-0.8-0.8
                    S245.6,34.2,246.1,34.2z"/>
                  <g style="opacity:0.5;">
                    <linearGradient id="SVGID_220_" gradientUnits="userSpaceOnUse" x1="243.4583" y1="32.2931" x2="257.3533" y2="32.2931">
                      <stop  offset="0" style="stop-color:#424242"/>
                      <stop  offset="1" style="stop-color:#747474;stop-opacity:0"/>
                    </linearGradient>
                    <path style="fill:url(#SVGID_220_);" d="M243.5,36.5c1-1.1,3.2,0,4.3-1.1c0.3-0.3,0.4-0.7,0.7-1c0.6-0.8,1.6-2,2.5-2.3
                      c1.2-0.4,2.7-2.2,3.7-3.1c1.2-1.1,1.7-0.5,2.1-2.2c0.3,0,0.6-0.1,0.6-0.1s-2.1,3.7-3.8,5.1c-0.7,0.5-2,1.5-3.4,2.6
                      c-1.5,1.1-4.1,2.5-4.1,2.5c-0.2,0.2-0.4,0.6-0.7,0.7c-0.3,0.1-0.4-0.3-0.5-0.3c-0.2,0-0.7,0.3-0.8,0.2
                      C243.5,37.2,243.5,36.5,243.5,36.5z"/>
                  </g>
                  <linearGradient id="SVGID_221_" gradientUnits="userSpaceOnUse" x1="252.6099" y1="68.7145" x2="254.2734" y2="68.7145">
                    <stop  offset="0" style="stop-color:#646565"/>
                    <stop  offset="1" style="stop-color:#424242"/>
                  </linearGradient>
                  <path style="fill:url(#SVGID_221_);" d="M254.3,67.5v1.6c0,0.5-0.4,0.8-0.8,0.8c-0.5,0-0.8-0.4-0.8-0.8v-1.6H254.3z"/>
                  <g style="opacity:0.4;">
                    <linearGradient id="SVGID_222_" gradientUnits="userSpaceOnUse" x1="238.9019" y1="52.4759" x2="253.6642" y2="52.4759">
                      <stop  offset="0" style="stop-color:#747474"/>
                      <stop  offset="1" style="stop-color:#747474"/>
                    </linearGradient>
                    <path style="fill:url(#SVGID_222_);" d="M239.7,69.9c-1.7,0,0-3.3,0.1-5c0.3-3,0.1-6,0.1-9.1c0-2.5-0.6-5.3-0.5-7.8
                      c0.1-2.6,0.6-7.2,0.7-9.7c0-1,0.3-1.9,1-2.6c0.6-0.6,1.7-0.3,2.6-0.5c1.9-0.2,3.9-0.3,5.9-0.2c0.6,0,2.4,0.5,2.9,0.8
                      c1.3,0.7,1.5,3.4,1.4,6.1c0,3.9-0.5,8-0.5,12.5c-0.1,4.9,0.2,10.2,0.5,14.4c0,0.3,0.1,0.6,0,0.8c-0.1,0.3-0.3,0.2-0.6,0
                      c-0.3-0.1-0.4-0.4-0.4-1.3l0-18.5v-7.2c0-0.8,0-3.3,0-4.1c0-0.5,0-2.5-2.5-2.8c-1-0.1-5.1,0-5.8,0c-1.3,0-3.6,0-3.8,2.5
                      c0,0,0,2.8,0,3.6c0.1,9.3,0,15.1,0,25l0,2.1C240.5,69.2,240.4,69.9,239.7,69.9z"/>
                  </g>
                  <g>
                    <defs>
                      <path id="SVGID_224_" d="M259.4,13.3c-4.8-1.7-5.6,12.2-6.4,13.2c-0.5,0.7-2.7,3.1-6.3,5.6c-1.9,1.3-3.9-0.4-3.5,3.2
                        c0.1,0.7,0.6,2.2,0.9,2.3c0.3,0,0.8-0.2,0.8-0.2s0.1,0.3,0.3,0.3c0.3,0,0.8-0.7,0.8-0.7s7-3.9,9.2-6.9
                        C258.1,26.4,264.2,15,259.4,13.3z"/>
                    </defs>
                    <clipPath id="SVGID_223_">
                      <use xlink:href="#SVGID_224_"  style="overflow:visible;"/>
                    </clipPath>

                      <linearGradient id="SVGID_225_" gradientUnits="userSpaceOnUse" x1="-2850.1392" y1="701.3004" x2="-2880.3716" y2="713.6837" gradientTransform="matrix(0.9999 -1.480000e-02 1.480000e-02 0.9999 3105.3743 -724.8849)">
                      <stop  offset="0" style="stop-color:#FFC55D"/>
                      <stop  offset="1" style="stop-color:#FAB11F"/>
                    </linearGradient>
                    <polygon style="clip-path:url(#SVGID_223_);fill:url(#SVGID_225_);" points="238.9,38.4 259.7,38.4 263.3,12.4 239,12.8        "/>

                      <linearGradient id="SVGID_226_" gradientUnits="userSpaceOnUse" x1="-2865.8979" y1="711.9692" x2="-2865.7434" y2="702.5765" gradientTransform="matrix(0.9999 -1.480000e-02 1.480000e-02 0.9999 3105.3743 -724.8849)">
                      <stop  offset="0" style="stop-color:#747474;stop-opacity:0"/>
                      <stop  offset="1" style="stop-color:#424242"/>
                    </linearGradient>
                    <path style="opacity:0.49;clip-path:url(#SVGID_223_);fill:url(#SVGID_226_);" d="M256,21.6c0-0.4-0.2-0.7-0.5-1
                      c-0.5-0.5-1.3-0.6-1.9-0.4c-0.6,0.2-1.2,0.8-1.2,1.5c0,0.8-0.4,1.5-0.7,2.2c-0.4,0.8-7,4.1-7,5.4c0,1.3,10.1-2.9,10.5-4.4
                      C255.4,23.8,256.1,22.6,256,21.6z"/>
                    <g style="clip-path:url(#SVGID_223_);">
                      <defs>
                        <path id="SVGID_228_" d="M254.5,26.5c-1.8-0.7-3.4-4.9-3.4-4.9l4.8-10.3l7,2.6C262.9,14,262.5,29.7,254.5,26.5z"/>
                      </defs>
                      <clipPath id="SVGID_227_">
                        <use xlink:href="#SVGID_228_"  style="overflow:visible;"/>
                      </clipPath>

                        <linearGradient id="SVGID_229_" gradientUnits="userSpaceOnUse" x1="-2876.6628" y1="801.8436" x2="-2863.9993" y2="801.8436" gradientTransform="matrix(1 1.700000e-03 -1.700000e-03 1 3128.7971 -777.3974)">
                        <stop  offset="0" style="stop-color:#D62538"/>
                        <stop  offset="1" style="stop-color:#ED4051"/>
                      </linearGradient>
                      <polygon style="clip-path:url(#SVGID_227_);fill:url(#SVGID_229_);" points="250.8,27.6 263.4,27.7 263.4,11.5 250.8,11.5
                                  "/>
                    </g>
                  </g>
                </g>
                <g>
                  <g>
                    <g>
                      <defs>
                        <path id="SVGID_231_" d="M204.6,45.3c2.8-0.3,4.6,3.2,5.7,0.6c1.1-2.6,3.7-5,0.2-12.4c-1.4-2.9,1-16.3-3.1-19.7
                          c-3.6-3-10,2.9-10.3,4.8c-2.5,15,4.2,14.1,4.2,14.1s-11.4,4.8-12.9,12.1c-1.6,7.9,8,0.5,8,0.5
                          C200.9,45.5,199.8,45.9,204.6,45.3z"/>
                      </defs>
                      <clipPath id="SVGID_230_">
                        <use xlink:href="#SVGID_231_"  style="overflow:visible;"/>
                      </clipPath>

                        <linearGradient id="SVGID_232_" gradientUnits="userSpaceOnUse" x1="212.7127" y1="537.8149" x2="236.1251" y2="537.8149" gradientTransform="matrix(0.9751 0.2219 -0.2219 0.9751 106.1772 -550.0469)">
                        <stop  offset="0" style="stop-color:#D6D6D5"/>
                        <stop  offset="1" style="stop-color:#E3E3E2"/>
                      </linearGradient>
                      <polygon style="clip-path:url(#SVGID_230_);fill:url(#SVGID_232_);" points="191.9,31.8 211.5,38.1 219.4,16.7 198.9,10
                        "/>

                        <linearGradient id="SVGID_233_" gradientUnits="userSpaceOnUse" x1="213.0068" y1="577.1639" x2="236.5052" y2="577.1639" gradientTransform="matrix(0.9751 0.2219 -0.2219 0.9751 106.1772 -550.0469)">
                        <stop  offset="0" style="stop-color:#FFC55D"/>
                        <stop  offset="1" style="stop-color:#FAB11F"/>
                      </linearGradient>
                      <polygon style="clip-path:url(#SVGID_230_);fill:url(#SVGID_233_);" points="188.5,48.3 184.5,74.6 206.4,75.3 208.5,50.3
                                  "/>

                        <linearGradient id="SVGID_234_" gradientUnits="userSpaceOnUse" x1="211.208" y1="557.1146" x2="235.2224" y2="557.1146" gradientTransform="matrix(0.9751 0.2219 -0.2219 0.9751 106.1772 -550.0469)">
                        <stop  offset="0" style="stop-color:#25334D"/>
                        <stop  offset="1" style="stop-color:#3E537D"/>
                      </linearGradient>
                      <polygon style="clip-path:url(#SVGID_230_);fill:url(#SVGID_234_);" points="190.5,31.5 187.4,48.9 206.4,50.9 213.6,38.1
                                  "/>

                        <linearGradient id="SVGID_235_" gradientUnits="userSpaceOnUse" x1="213.6568" y1="533.9125" x2="220.7722" y2="533.9125" gradientTransform="matrix(0.9751 0.2219 -0.2219 0.9751 106.1772 -550.0469)">
                        <stop  offset="0" style="stop-color:#747474;stop-opacity:0"/>
                        <stop  offset="1" style="stop-color:#424242"/>
                      </linearGradient>
                      <path style="opacity:0.3;clip-path:url(#SVGID_230_);fill:url(#SVGID_235_);" d="M197.3,24.3c-1.5-0.5-2.2-2-2-2.3
                        c1.1-1.8-0.7-5.1,4.4-8.3c2.4-1.5,4.4,1,4.4,1S198.7,24.8,197.3,24.3z"/>

                        <linearGradient id="SVGID_236_" gradientUnits="userSpaceOnUse" x1="214.0418" y1="543.3923" x2="230.6741" y2="543.3923" gradientTransform="matrix(0.9751 0.2219 -0.2219 0.9751 106.1772 -550.0469)">
                        <stop  offset="0" style="stop-color:#747474;stop-opacity:0"/>
                        <stop  offset="1" style="stop-color:#424242"/>
                      </linearGradient>
                      <path style="opacity:0.3;clip-path:url(#SVGID_230_);fill:url(#SVGID_236_);" d="M205.6,27.4c0.3,0.4,0.6,0.8,0.9,1.1
                        c0.8,1,1.5,2.1,2.1,3.2c0.4,0.7,0.7,1.4,0.9,2.2c0.4,1.4-0.6,2.3-1.6,3.1c-1.3,1-3,1.3-4.6,1.4c-1.4,0.1-3.1-0.1-4-1.2
                        c0,0-0.1-0.1-0.1-0.1c-0.6-0.7-0.8-1.5-1.1-2.4c-0.7-2.6-1.4-5.1-2.1-7.7c-0.1-0.5-0.2-1-0.4-1.4c-0.1-0.3-0.3-0.6-0.4-0.9
                        c-0.2-0.7-0.2-1.4,0.1-2.1c0.4-0.9,1.1-1.6,1.9-2.2c2.3-1.5,5.5-1.5,7.8,0c0.4,0.2,0.7,0.5,1,0.9c0.3,0.6,0.2,1.4-0.1,2.1
                        c-0.3,0.7-0.7,1.3-0.8,2C205.1,26.4,205.3,26.9,205.6,27.4z"/>

                        <linearGradient id="SVGID_237_" gradientUnits="userSpaceOnUse" x1="220.7394" y1="571.3018" x2="234.9606" y2="571.3018" gradientTransform="matrix(0.9751 0.2219 -0.2219 0.9751 106.1772 -550.0469)">
                        <stop  offset="0" style="stop-color:#424242"/>
                        <stop  offset="1" style="stop-color:#747474;stop-opacity:0"/>
                      </linearGradient>
                      <path style="opacity:0.3;clip-path:url(#SVGID_230_);fill:url(#SVGID_237_);" d="M210.1,38.3c-3.9-0.9-6.4-0.7-9.3,3.5
                        c-3,4.2-0.4,9.8-3.9,13.3c-3.5,3.5-5.2,11.1-4,17c0.5,2.2,1.5,4.6,3.6,5.5c1.7,0.8,3.9,0.2,5.3-1c1.4-1.3,2.2-3.2,2.3-5.1
                        c0.1-1.9-0.3-3.8-1-5.6c-0.7-1.9-3.2-4.3-1.9-10.1c1.3-5.8,5.5-3.4,8.3-7.6C212.5,44,214,39.2,210.1,38.3z"/>
                    </g>
                    <g>

                        <linearGradient id="SVGID_238_" gradientUnits="userSpaceOnUse" x1="-2169.2957" y1="1212.7411" x2="-2164.4133" y2="1212.7411" gradientTransform="matrix(0.9875 0.1578 -0.1578 0.9875 2512.5229 -794.6566)">
                        <stop  offset="0" style="stop-color:#343433"/>
                        <stop  offset="1" style="stop-color:#656767"/>
                      </linearGradient>
                      <path style="fill:url(#SVGID_238_);" d="M178.7,62.3L178.7,62.3c0,0.2,0.2,0.4,0.4,0.4c0.6,0.1,1.2,0.2,2.4,0.3
                        c1.2,0.2,3.3-2.4,2.2-3.5c-1.1-1.1-1.7,1.3-1.7,1.3l-3,1.1C178.8,61.9,178.7,62.1,178.7,62.3z"/>
                    </g>
                    <g>
                      <defs>
                        <path id="SVGID_240_" d="M210.4,35.2l-8.8,0c0,0-16.3-2.9-19,4.7c-2.2,6.4-0.3,20.7-0.3,20.7c4.4-1.8,7.1-6.4,6.4-11.2
                          c-0.6-4.2-0.9-5.6,0-6.4C189.5,42.3,216,50.6,210.4,35.2z"/>
                      </defs>
                      <clipPath id="SVGID_239_">
                        <use xlink:href="#SVGID_240_"  style="overflow:visible;"/>
                      </clipPath>

                        <linearGradient id="SVGID_241_" gradientUnits="userSpaceOnUse" x1="203.0416" y1="566.6763" x2="225.3743" y2="566.6763" gradientTransform="matrix(0.9751 0.2219 -0.2219 0.9751 106.1772 -550.0469)">
                        <stop  offset="0" style="stop-color:#FFC55D"/>
                        <stop  offset="1" style="stop-color:#FAB11F"/>
                      </linearGradient>
                      <polygon style="clip-path:url(#SVGID_239_);fill:url(#SVGID_241_);" points="194.7,63.1 203.7,37.1 181.9,32.1 175.9,63.3
                                  "/>

                        <linearGradient id="SVGID_242_" gradientUnits="userSpaceOnUse" x1="190.99" y1="562.4632" x2="234.138" y2="562.4632" gradientTransform="matrix(0.9751 0.2219 -0.2219 0.9751 106.1772 -550.0469)">
                        <stop  offset="0" style="stop-color:#25334D"/>
                        <stop  offset="1" style="stop-color:#3E537D"/>
                      </linearGradient>
                      <polygon style="clip-path:url(#SVGID_239_);fill:url(#SVGID_242_);" points="204.6,54.6 213.6,33.3 170.2,29.2 179.3,61.4
                                  "/>

                        <linearGradient id="SVGID_243_" gradientUnits="userSpaceOnUse" x1="207.9883" y1="561.8684" x2="233.8076" y2="561.8684" gradientTransform="matrix(0.9751 0.2219 -0.2219 0.9751 106.1772 -550.0469)">
                        <stop  offset="0" style="stop-color:#424242"/>
                        <stop  offset="1" style="stop-color:#747474;stop-opacity:0"/>
                      </linearGradient>
                      <path style="opacity:0.3;clip-path:url(#SVGID_239_);fill:url(#SVGID_243_);" d="M207.1,40.9c-3.2,0-6.2-1-9.1-2.4
                        c-1.8-0.9-3.6-2-5.6-2.5c-2.5-0.6-5.7,0-6.7,2.7c-1.6,4.2-1.5,9.1,0.2,13.2c0.3,0.9,0.8,1.7,1.5,2.3c0.7,0.6,1.7,0.9,2.6,0.6
                        c0.9-0.4,1.4-1.4,1.7-2.3c0.6-1.8,0.8-3.6,0.6-5.5c-0.1-0.6-0.2-1.3-0.1-1.9c0.1-0.6,0.3-1.3,0.9-1.6c0.6-0.4,1.5-0.3,2.2,0
                        c0.7,0.4,1.2,0.9,1.8,1.4c1.8,1.5,4,2.3,6.3,2.4c1.7,0.1,3.4-0.3,5-1.1c1.5-0.7,2-2.5,2.7-4c0.1-0.1,0.7-1.4,0.4-1.5
                        C210.6,40.5,208,40.9,207.1,40.9z"/>
                    </g>
                    <g>
                      <defs>
                        <path id="SVGID_245_" d="M204.6,13.6c0,0-4.1,3.5-5.4,3.1c0,0,0-5.2-0.4-5.2c-1,0.1-3.1-0.5-3.3-1c-0.2-0.5,0.5-4.8,2-6
                          c1.5-1.1,5.1-0.6,5.9,1.2C204.2,7.6,204.6,13.6,204.6,13.6z"/>
                      </defs>
                      <clipPath id="SVGID_244_">
                        <use xlink:href="#SVGID_245_"  style="overflow:visible;"/>
                      </clipPath>
                      <path style="clip-path:url(#SVGID_244_);fill:#6D6F71;" d="M203.6,18.6L203.6,18.6l-9.5-3.3l4.6-12.8l0.1,0l7.4,4.2L203.6,18.6
                        z M194.3,15.2l9.3,3.2l2.5-11.6l-7.3-4.1L194.3,15.2z"/>

                        <linearGradient id="SVGID_246_" gradientUnits="userSpaceOnUse" x1="209.8525" y1="525.3096" x2="221.1358" y2="525.3096" gradientTransform="matrix(0.9751 0.2219 -0.2219 0.9751 106.1772 -550.0469)">
                        <stop  offset="0" style="stop-color:#FFC55D"/>
                        <stop  offset="1" style="stop-color:#FAB11F"/>
                      </linearGradient>
                      <polygon style="clip-path:url(#SVGID_244_);fill:url(#SVGID_246_);" points="203.6,18.5 192.9,14.5 197.6,1.9 206.2,6.8
                        "/>

                        <linearGradient id="SVGID_247_" gradientUnits="userSpaceOnUse" x1="211.0671" y1="526.2757" x2="220.4812" y2="526.2757" gradientTransform="matrix(0.9751 0.2219 -0.2219 0.9751 106.1772 -550.0469)">
                        <stop  offset="0" style="stop-color:#424242"/>
                        <stop  offset="1" style="stop-color:#747474;stop-opacity:0"/>
                      </linearGradient>
                      <path style="opacity:0.3;clip-path:url(#SVGID_244_);fill:url(#SVGID_247_);" d="M195.6,8.5l1.2,0.1l0.7-2c0,0,1.6-0.4,2.1,0.3
                        c0.5,0.7,0,3-1.1,3.6c-1.1,0.5-2.5,0.6-2.5,0.6l3.5,6.3l4.3-2.8c-4.2-3,0.3-8.8-3.5-10.1C198.4,3.9,196.2,4,195.6,8.5z"/>

                        <linearGradient id="SVGID_248_" gradientUnits="userSpaceOnUse" x1="211.9178" y1="528.8145" x2="219.1893" y2="528.8145" gradientTransform="matrix(0.9751 0.2219 -0.2219 0.9751 106.1772 -550.0469)">
                        <stop  offset="0" style="stop-color:#747474;stop-opacity:0"/>
                        <stop  offset="1" style="stop-color:#424242"/>
                      </linearGradient>
                      <path style="opacity:0.3;clip-path:url(#SVGID_244_);fill:url(#SVGID_248_);" d="M200,10c-0.2,3.2,0.5,4.9,2.2,5.9
                        c-1.5,1.5-2.9,1.2-2.9,1.2l-3.5-5.8C195.8,11.3,197.8,11.7,200,10z"/>
                    </g>
                    <path style="fill:#414141;" d="M201.1,5.8c0,0,1.5,4.2,2.2,4.4c0.7,0.3,1.3,0.4,1.4-0.1c0.2-0.5,0.8-2.9,0.8-2.9L201.1,5.8z"/>
                    <g>
                      <defs>
                        <path id="SVGID_250_" d="M205.7,8c0,0,1.3-4.6-2.7-6c-3.8-1.3-5.6,0-6.4,1.5l-2.9-0.8l-0.3,0.9c0,0,3.1,1.5,3.9,1.6
                          c0.9,0.1,2.3,0.2,2.9,1.6C201.3,9.2,205.7,8,205.7,8z"/>
                      </defs>
                      <clipPath id="SVGID_249_">
                        <use xlink:href="#SVGID_250_"  style="overflow:visible;"/>
                      </clipPath>

                        <linearGradient id="SVGID_251_" gradientUnits="userSpaceOnUse" x1="207.2409" y1="519.7273" x2="221.6578" y2="519.7273" gradientTransform="matrix(0.9751 0.2219 -0.2219 0.9751 106.1772 -550.0469)">
                        <stop  offset="0" style="stop-color:#ED4051"/>
                        <stop  offset="1" style="stop-color:#D62538"/>
                      </linearGradient>
                      <polygon style="clip-path:url(#SVGID_249_);fill:url(#SVGID_251_);" points="192,6.7 206.1,9.9 207.9,1.9 193.8,-1.3           "/>

                        <linearGradient id="SVGID_252_" gradientUnits="userSpaceOnUse" x1="309.0725" y1="296.4313" x2="323.2857" y2="296.4313" gradientTransform="matrix(0.9977 6.810000e-02 -6.810000e-02 0.9977 -97.2174 -312.2539)">
                        <stop  offset="8.571830e-02" style="stop-color:#747474;stop-opacity:0"/>
                        <stop  offset="1" style="stop-color:#434444"/>
                      </linearGradient>
                      <path style="opacity:0.5;clip-path:url(#SVGID_249_);fill:url(#SVGID_252_);" d="M200.1,1.7c0.3,0.6,0.2,1.4,0.2,2.1
                        c0,0.7,0.1,1.5,0.6,2c1,0.9,2.8,0.1,3.7,1.1c0.5,0.6,0.4,1.5,0,2.1s-1.3,0.9-2,0.9c-1.5,0.1-2.9-0.5-4.3-1.1
                        c-1.6-0.7-3.3-1.4-4.9-2.1c-0.5-0.2-1.1-0.5-1.5-0.8c-0.4-0.4-0.8-0.9-0.9-1.4c-0.1-0.8,0.4-1.6,1.1-2c1.1-0.7,2.7-1,3.9-1.5
                        C197.3,0.4,199.3,0.1,200.1,1.7z"/>
                    </g>
                  </g>
                  <g>
                    <linearGradient id="SVGID_253_" gradientUnits="userSpaceOnUse" x1="179.6722" y1="64.4288" x2="179.6722" y2="63.0222">
                      <stop  offset="0" style="stop-color:#202020"/>
                      <stop  offset="1" style="stop-color:#747474"/>
                    </linearGradient>
                    <path style="fill:url(#SVGID_253_);" d="M183.1,64.4h-6.9c-0.2,0-0.4-0.2-0.4-0.4v-0.5c0-0.2,0.2-0.4,0.4-0.4h6.9
                      c0.2,0,0.4,0.2,0.4,0.4V64C183.6,64.2,183.4,64.4,183.1,64.4z"/>
                    <linearGradient id="SVGID_254_" gradientUnits="userSpaceOnUse" x1="188.2668" y1="31.4543" x2="211.5066" y2="31.4543">
                      <stop  offset="0" style="stop-color:#424242"/>
                      <stop  offset="1" style="stop-color:#747474"/>
                    </linearGradient>
                    <path style="fill:url(#SVGID_254_);" d="M211.5,45.3V15.8c0,0,0.1-1-0.8-1c-0.9,0-0.9,1-0.9,1v29.5h-20.6c0,0-1,0.3-1,1.4
                      c0,1.1,0.4,1.3,0.4,1.3h19.9l3-1.8L211.5,45.3z"/>
                    <linearGradient id="SVGID_255_" gradientUnits="userSpaceOnUse" x1="213.4355" y1="15.3586" x2="219.6806" y2="15.3586">
                      <stop  offset="0" style="stop-color:#424242"/>
                      <stop  offset="1" style="stop-color:#747474"/>
                    </linearGradient>
                    <path style="fill:url(#SVGID_255_);" d="M213.4,14.5h5.3c0,0,1-0.1,1,0.9c0,0.9-1,0.8-1,0.8h-5.3V14.5z"/>
                    <linearGradient id="SVGID_256_" gradientUnits="userSpaceOnUse" x1="188.0785" y1="58.2868" x2="203.4563" y2="58.2868">
                      <stop  offset="0" style="stop-color:#D7D7D7"/>
                      <stop  offset="1" style="stop-color:#E3E3E2"/>
                    </linearGradient>
                    <polygon style="fill:url(#SVGID_256_);" points="188.7,59.3 188.1,57.3 203.5,57.3 203.5,59.3         "/>
                    <linearGradient id="SVGID_257_" gradientUnits="userSpaceOnUse" x1="188.0785" y1="47.2096" x2="188.9352" y2="47.2096">
                      <stop  offset="0" style="stop-color:#D7D7D7"/>
                      <stop  offset="1" style="stop-color:#E3E3E2"/>
                    </linearGradient>
                    <polygon style="fill:url(#SVGID_257_);" points="188.9,35.2 188.9,59.3 188.1,59.1 188.1,35.2         "/>
                    <linearGradient id="SVGID_258_" gradientUnits="userSpaceOnUse" x1="186.0463" y1="30.0628" x2="213.4355" y2="30.0628">
                      <stop  offset="0" style="stop-color:#D7D7D7"/>
                      <stop  offset="1" style="stop-color:#E3E3E2"/>
                    </linearGradient>
                    <path style="fill:url(#SVGID_258_);" d="M212.5,9.9c-0.9,0-1,1-1,1v24.3H187c0,0-1,0.1-1,1.2c0,1.1,1,1.2,1,1.2h24.5v8.1
                      l-9.3,2.4l-13.3,0v2.2h12.4l12.1-4.4v-35v-1C213.4,9.9,212.6,9.9,212.5,9.9z"/>
                    <g>
                      <defs>
                        <path id="SVGID_260_" d="M188.2,57.3c-3.3,0-6,2.6-6,5.9c0,3.3,2.6,6,5.9,6c3.3,0,6-2.6,6-5.9
                          C194.2,60.1,191.5,57.4,188.2,57.3z M188.2,59.2c2.3,0,4.1,1.9,4,4.1c0,2.3-1.9,4.1-4.1,4c-2.3,0-4.1-1.9-4-4.1
                          C184.1,61,185.9,59.2,188.2,59.2z"/>
                      </defs>
                      <clipPath id="SVGID_259_">
                        <use xlink:href="#SVGID_260_"  style="overflow:visible;"/>
                      </clipPath>

                        <linearGradient id="SVGID_261_" gradientUnits="userSpaceOnUse" x1="5500.2939" y1="1974.5281" x2="5500.2939" y2="1962.535" gradientTransform="matrix(-1 -8.400000e-03 -8.400000e-03 1 5705.1221 -1859.0342)">
                        <stop  offset="0" style="stop-color:#424242"/>
                        <stop  offset="1" style="stop-color:#646565"/>
                      </linearGradient>
                      <polygon style="clip-path:url(#SVGID_259_);fill:url(#SVGID_261_);" points="182.1,69.2 194.4,69.3 194.5,57.3 182.2,57.2
                                  "/>

                        <linearGradient id="SVGID_262_" gradientUnits="userSpaceOnUse" x1="5496.1289" y1="1980.6792" x2="5496.1289" y2="1964.5692" gradientTransform="matrix(-1 -8.400000e-03 -8.400000e-03 1 5705.1221 -1859.0342)">
                        <stop  offset="0" style="stop-color:#747474"/>
                        <stop  offset="1" style="stop-color:#424242;stop-opacity:0"/>
                      </linearGradient>
                      <path style="opacity:0.75;clip-path:url(#SVGID_259_);fill:url(#SVGID_262_);" d="M185.8,62.6c-4.8,7.9,3.4,16.2,11.4,11.5
                        c0.8-0.4,1.4-1.1,1.9-1.8c4.8-7.9-3.4-16.2-11.4-11.5C186.9,61.2,186.3,61.8,185.8,62.6z"/>
                    </g>
                    <linearGradient id="SVGID_263_" gradientUnits="userSpaceOnUse" x1="188.9352" y1="49.6801" x2="203.3242" y2="49.6801">
                      <stop  offset="0" style="stop-color:#747474"/>
                      <stop  offset="1" style="stop-color:#424242;stop-opacity:0"/>
                    </linearGradient>
                    <rect x="188.9" y="49.1" style="opacity:0.4;fill:url(#SVGID_263_);" width="14.4" height="1.2"/>
                    <linearGradient id="SVGID_264_" gradientUnits="userSpaceOnUse" x1="188.9352" y1="41.3382" x2="211.5066" y2="41.3382">
                      <stop  offset="0" style="stop-color:#D7D7D7"/>
                      <stop  offset="1" style="stop-color:#E3E3E2"/>
                    </linearGradient>
                    <rect x="188.9" y="38.5" style="fill:url(#SVGID_264_);" width="22.6" height="5.7"/>
                    <linearGradient id="SVGID_265_" gradientUnits="userSpaceOnUse" x1="186.0897" y1="30.6075" x2="213.4354" y2="30.6075">
                      <stop  offset="0" style="stop-color:#424242;stop-opacity:0"/>
                      <stop  offset="1" style="stop-color:#747474"/>
                    </linearGradient>
                    <path style="opacity:0.4;fill:url(#SVGID_265_);" d="M213.4,40.2L213.4,40.2V14.5c0,0-0.3,0.8-0.6,4.5
                      c-0.1,1.8-0.2,15.9-0.8,17.2c-0.3,0.7-8.1-0.1-14.9-0.3c-5.4-0.2-10.2,0.3-10.2,0.3s-1.2,0-0.8,0.7c0.3,0.7,1.1,0.6,1.1,0.6H212
                      c0,0.9,0.7,2.1-1.6,3.8c-2.3,1.7-19-1.6-21.5-1.1l0,3.9c1.6,0,22.6,0,22.6,0c-0.1,3.6,0,2.3,0,2.3l1.9-0.6v-1.7l0,0V40.2z"/>
                    <g>
                      <defs>
                        <path id="SVGID_267_" d="M212.6,69.3c7.3,0.1,13.3-5.8,13.3-13.1c0.1-7.3-5.8-13.3-13.1-13.3c-7.3-0.1-13.3,5.8-13.3,13.1
                          C199.4,63.3,205.3,69.2,212.6,69.3z M212.7,65.1c-5,0-9-4.1-9-9.1c0-5,4.1-9,9.1-9c5,0,9,4.1,9,9.1
                          C221.7,61.1,217.7,65.1,212.7,65.1z"/>
                      </defs>
                      <clipPath id="SVGID_266_">
                        <use xlink:href="#SVGID_267_"  style="overflow:visible;"/>
                      </clipPath>

                        <linearGradient id="SVGID_268_" gradientUnits="userSpaceOnUse" x1="-5816.4141" y1="5948.3579" x2="-5816.4141" y2="5918.6709" gradientTransform="matrix(1 8.400000e-03 8.400000e-03 -1 5979.3169 6038.3955)">
                        <stop  offset="0" style="stop-color:#646565"/>
                        <stop  offset="1" style="stop-color:#424242"/>
                      </linearGradient>
                      <polygon style="clip-path:url(#SVGID_266_);fill:url(#SVGID_268_);" points="226.4,41.3 199.3,41.1 199.1,70.8 226.2,71
                        "/>

                        <linearGradient id="SVGID_269_" gradientUnits="userSpaceOnUse" x1="5482.3794" y1="1969.1991" x2="5482.3794" y2="1933.5574" gradientTransform="matrix(-1 -8.400000e-03 -8.400000e-03 1 5705.1221 -1859.0342)">
                        <stop  offset="0" style="stop-color:#747474"/>
                        <stop  offset="1" style="stop-color:#424242;stop-opacity:0"/>
                      </linearGradient>
                      <path style="opacity:0.75;clip-path:url(#SVGID_266_);fill:url(#SVGID_269_);" d="M192,35.1c-11.4,17.8,7.3,36.8,25.3,25.7
                        c1.4-0.8,2.6-2,3.4-3.4c11.4-17.8-7.3-36.8-25.3-25.7C194,32.6,192.9,33.8,192,35.1z"/>
                    </g>
                  </g>
                  <g>
                    <defs>
                      <path id="SVGID_271_" d="M204.6,19c-5.2-2.5-4.1,10.4-6.5,11.9c-1.9,1.2-6.9,2.8-10.3,3.6c-1.7,0.4-2.6,0.4-3.4,0.6
                        c-0.8,0.2,0.4,2.8,0.7,2.8c0.3,0.1,0.9-0.1,0.9-0.1s0.1,0.4,0.3,0.4c0.4,0.1,1-0.7,1-0.7s9.8-1.1,13.1-2.3
                        C203.6,34,209.8,21.5,204.6,19z"/>
                    </defs>
                    <clipPath id="SVGID_270_">
                      <use xlink:href="#SVGID_271_"  style="overflow:visible;"/>
                    </clipPath>

                      <linearGradient id="SVGID_272_" gradientUnits="userSpaceOnUse" x1="269.3874" y1="224.4681" x2="295.5729" y2="224.4681" gradientTransform="matrix(0.9937 0.1118 -0.1118 0.9937 -58.4853 -225.2302)">
                      <stop  offset="0" style="stop-color:#FFC55D"/>
                      <stop  offset="1" style="stop-color:#FAB11F"/>
                    </linearGradient>
                    <polygon style="clip-path:url(#SVGID_270_);fill:url(#SVGID_272_);" points="183,38.2 205.6,43.3 211.5,18.9 186.4,15.3        "/>

                      <linearGradient id="SVGID_273_" gradientUnits="userSpaceOnUse" x1="284.4086" y1="217.8026" x2="296.2027" y2="217.8026" gradientTransform="matrix(0.9937 0.1118 -0.1118 0.9937 -58.4853 -225.2302)">
                      <stop  offset="0" style="stop-color:#D6D6D5"/>
                      <stop  offset="1" style="stop-color:#E3E3E2"/>
                    </linearGradient>
                    <polygon style="clip-path:url(#SVGID_270_);fill:url(#SVGID_273_);" points="207.8,30.3 199.5,25.5 201.1,16.7 211.8,21.4
                      "/>

                      <linearGradient id="SVGID_274_" gradientUnits="userSpaceOnUse" x1="276.8577" y1="223.2396" x2="292.206" y2="223.2396" gradientTransform="matrix(0.9937 0.1118 -0.1118 0.9937 -58.4853 -225.2302)">
                      <stop  offset="0" style="stop-color:#747474;stop-opacity:0"/>
                      <stop  offset="1" style="stop-color:#424242"/>
                    </linearGradient>
                    <path style="opacity:0.3;clip-path:url(#SVGID_270_);fill:url(#SVGID_274_);" d="M205.5,29.1c0.1-0.2,0.3-0.4,0.4-0.6
                      c0.9-1.3,1.8-2.9,1.5-4.6c-0.3-1.6-1.1-4.9-2.8-4.9c-3.4-0.1-4.5,5.6-4.8,8.2c-0.2,1.8-0.5,3.7-1.7,5c-1.5,1.5-3.6,1.4-5.3,2.5
                      c-0.8,0.5-1.6,1.1-2,2c0,0.1-0.3,1-0.3,1c0,0,8.3-1.4,10.2-2.1c1.3-0.4,2.6-1.4,2.8-2.8C203.9,31.3,204.7,30.2,205.5,29.1z"/>
                  </g>
                </g>
              </g>
              <g>
                <g>
                  <g>
                    <defs>
                      <path id="SVGID_276_" d="M225.3,268.4c-4-0.7-3.2,8-4.5,9.5c-1,1.2-4.1,3.2-6.2,4.4c-1.1,0.6-1.7,0.8-2.2,1.1
                        c-0.5,0.3,0.8,1.8,1.1,1.8c0.2,0,0.6-0.3,0.6-0.3s0.2,0.2,0.3,0.2c0.3,0,0.5-0.7,0.5-0.7s6.4-2.7,8.3-4.1
                        C225.1,278.9,229.3,269.1,225.3,268.4z"/>
                    </defs>
                    <clipPath id="SVGID_275_">
                      <use xlink:href="#SVGID_276_"  style="overflow:visible;"/>
                    </clipPath>

                      <linearGradient id="SVGID_277_" gradientUnits="userSpaceOnUse" x1="-3683.5835" y1="7.13" x2="-3666.2271" y2="7.13" gradientTransform="matrix(0.9979 -6.470000e-02 6.470000e-02 0.9979 3885.7505 32.3612)">
                      <stop  offset="0" style="stop-color:#F8A025"/>
                      <stop  offset="1" style="stop-color:#FAB758"/>
                    </linearGradient>
                    <polygon style="clip-path:url(#SVGID_275_);fill:url(#SVGID_277_);" points="212,285.8 228.2,284.7 226,268.7 209.8,269.8
                      "/>

                      <linearGradient id="SVGID_278_" gradientUnits="userSpaceOnUse" x1="5074.0205" y1="76.1275" x2="5083.5361" y2="76.1275" gradientTransform="matrix(-0.999 4.380000e-02 4.380000e-02 0.999 5294.9951 -25.3773)">
                      <stop  offset="0" style="stop-color:#D6D6D5"/>
                      <stop  offset="1" style="stop-color:#E3E3E2"/>
                    </linearGradient>
                    <polygon style="clip-path:url(#SVGID_275_);fill:url(#SVGID_278_);" points="225,279.3 229.2,268.2 222.1,267.1 220,276.1
                      "/>

                      <linearGradient id="SVGID_279_" gradientUnits="userSpaceOnUse" x1="-4664.1279" y1="491.4691" x2="-4673.77" y2="492.1353" gradientTransform="matrix(0.8136 6.350000e-02 -0.1093 0.9196 4073.835 122.1687)">
                      <stop  offset="0" style="stop-color:#747474;stop-opacity:0"/>
                      <stop  offset="1" style="stop-color:#424242"/>
                    </linearGradient>
                    <path style="opacity:0.3;clip-path:url(#SVGID_275_);fill:url(#SVGID_279_);" d="M225.2,276.2c0-0.2,0.1-0.3,0.1-0.5
                      c0.4-1.2,0.5-3.7-1.5-3.3c-0.8,0.1-1.4,0.8-1.6,1.5c-0.3,0.7-0.3,1.5-0.4,2.3c0,0.8-0.1,1.6-0.4,2.3c-0.5,1.3-1.5,1.6-2.6,2.2
                      c-1,0.5-1.6,1.7-1.7,2.7c0,0.1,2.1-0.6,2.3-0.7c0.6-0.3,1.2-0.6,1.9-0.8c1.2-0.4,3.2-1.4,3.6-2.7
                      C225.1,278.4,225,277,225.2,276.2z"/>
                  </g>
                  <g>

                      <linearGradient id="SVGID_280_" gradientUnits="userSpaceOnUse" x1="563.8449" y1="-1829.4606" x2="567.0269" y2="-1829.8718" gradientTransform="matrix(-0.5414 0.2667 0.2749 0.558 1038.0592 1182.6697)">
                      <stop  offset="0" style="stop-color:#424242"/>
                      <stop  offset="1" style="stop-color:#646565"/>
                    </linearGradient>
                    <path style="fill:url(#SVGID_280_);" d="M230.1,315.2l0.7-0.4l-2.9-4.8c-0.1-0.2-0.3-0.2-0.4-0.1l-0.2,0.1
                      c-0.2,0.1-0.2,0.3-0.1,0.4L230.1,315.2z"/>

                      <linearGradient id="SVGID_281_" gradientUnits="userSpaceOnUse" x1="4379.5713" y1="4433.064" x2="4383.6167" y2="4431.3555" gradientTransform="matrix(-5.000000e-04 -0.6035 -0.3404 3.000000e-04 1741.2302 2958.0518)">
                      <stop  offset="0" style="stop-color:#424242"/>
                      <stop  offset="1" style="stop-color:#646565"/>
                    </linearGradient>
                    <path style="fill:url(#SVGID_281_);" d="M228.7,315.1L228.7,315.1c0,0.2,0.2,0.4,0.4,0.4l2.5,0c0.2,0,0.4-0.2,0.4-0.4l0,0
                      c0-0.2-0.2-0.4-0.4-0.4l-2.5,0C228.9,314.7,228.7,314.9,228.7,315.1z"/>
                  </g>

                    <linearGradient id="SVGID_282_" gradientUnits="userSpaceOnUse" x1="-3696.054" y1="239.9204" x2="-3691.864" y2="239.9204" gradientTransform="matrix(0.9998 -2.090000e-02 2.090000e-02 0.9998 3918.9551 -4.4631)">
                    <stop  offset="0" style="stop-color:#8D2D37"/>
                    <stop  offset="1" style="stop-color:#781A26"/>
                  </linearGradient>
                  <path style="fill:url(#SVGID_282_);" d="M228.7,314.4L228.7,314.4c0,0.2,0.2,0.3,0.3,0.3c0.5,0,1.1,0,2.1,0c1,0,2.4-3.3,1.3-4
                    c-1.1-0.8-1.2,1.3-1.2,1.3l-2.4,2C228.8,314.1,228.7,314.3,228.7,314.4z"/>
                  <g>
                    <defs>
                      <path id="SVGID_284_" d="M235.7,278.1l-6.2,1.8c0,0-0.7,5-3.2,11.7c-2,5.6,5,20.9,5,20.9c3.4-2.5,3.8-8,2.2-12
                        c-1.4-3.5-1.4-4.3-1.8-5.9C231.3,293.1,244.3,287.4,235.7,278.1z"/>
                    </defs>
                    <clipPath id="SVGID_283_">
                      <use xlink:href="#SVGID_284_"  style="overflow:visible;"/>
                    </clipPath>

                      <linearGradient id="SVGID_285_" gradientUnits="userSpaceOnUse" x1="-3387.4705" y1="-957.545" x2="-3363.301" y2="-957.545" gradientTransform="matrix(0.9529 -0.1497 0.2959 0.6488 3733.7195 417.6974)">
                      <stop  offset="0" style="stop-color:#F8A025"/>
                      <stop  offset="1" style="stop-color:#FAB758"/>
                    </linearGradient>
                    <polygon style="clip-path:url(#SVGID_283_);fill:url(#SVGID_285_);" points="227.7,315.1 244.1,312.5 240.2,288.4 221.9,292
                              "/>
                    <g style="clip-path:url(#SVGID_283_);">

                        <linearGradient id="SVGID_286_" gradientUnits="userSpaceOnUse" x1="5088.752" y1="289.0376" x2="5106.6431" y2="289.0376" gradientTransform="matrix(-1 0 0 1 5329.0942 0)">
                        <stop  offset="0" style="stop-color:#36415D"/>
                        <stop  offset="1" style="stop-color:#4F668B"/>
                      </linearGradient>
                      <path style="fill:url(#SVGID_286_);" d="M240.3,284.1c-0.2,0.3-4,9.6-4,9.6l-12.7,0.8l-1.1-11.1L240.3,284.1z"/>
                    </g>

                      <linearGradient id="SVGID_287_" gradientUnits="userSpaceOnUse" x1="5074.2051" y1="1445.7864" x2="5089.3916" y2="1445.7864" gradientTransform="matrix(-0.9676 -0.2526 -0.2526 0.9676 5513.6685 174.2999)">
                      <stop  offset="0" style="stop-color:#747474"/>
                      <stop  offset="0.8917" style="stop-color:#2B2B2B;stop-opacity:0"/>
                    </linearGradient>
                    <path style="opacity:0.75;clip-path:url(#SVGID_283_);fill:url(#SVGID_287_);" d="M236.7,287.2c0.7,0.2,1.3,0.6,1.8,1.1
                      c0.8,0.9,0.7,2.8-0.4,3.4c-0.9,0.4-2.1,0.5-3.1,0.6c-2.7,0.2-5.5,0.2-8.1-0.1c-2.2-0.3-3.4-2.8-2.8-4.8c0.4-1.2,4-1.1,5.1-1.1
                      c2.1,0,4.2,0.2,6.2,0.7c0.1,0,0.2,0.1,0.4,0.1C236.1,287.1,236.4,287.1,236.7,287.2z"/>

                      <linearGradient id="SVGID_288_" gradientUnits="userSpaceOnUse" x1="-2381.209" y1="-1798.2999" x2="-2366.9031" y2="-1798.2999" gradientTransform="matrix(0.9488 -0.5513 0.5689 0.8398 3511.2092 497.31)">
                      <stop  offset="0" style="stop-color:#424242"/>
                      <stop  offset="1" style="stop-color:#747474;stop-opacity:0"/>
                    </linearGradient>
                    <path style="opacity:0.3;clip-path:url(#SVGID_283_);fill:url(#SVGID_288_);" d="M236.5,284.8c-7.3-2.6-7.5,9.2-7.2,12.5
                      c0.3,3.3,5.8,11.7,5.8,11.7s2.7-2.7,1.5-6.8c-1.3-4.1-3.8-4-4-5.7C232.3,294.8,243.7,287.4,236.5,284.8z"/>
                  </g>
                  <g>
                    <defs>
                      <path id="SVGID_290_" d="M205.7,277.4l0.9,1l-0.6-2.2l0.7,0.1l0.5,1.8l0.4-1.1l0.8,0.5l-0.9,1.7c2.4,0,4.9,2.6,4.7,7.1
                        c-0.2,4.5-0.2,5.1-1.3,5.6c-1.1,0.5-3.5,0.5-4.1-0.6c-1.2-2,0.5-6.3-0.1-7.3c-0.6-0.9-1-1.1-1-2.5c0-1.4,1.2-2.2,1.2-2.2
                        l-1.9-1L205.7,277.4z"/>
                    </defs>
                    <clipPath id="SVGID_289_">
                      <use xlink:href="#SVGID_290_"  style="overflow:visible;"/>
                    </clipPath>

                      <linearGradient id="SVGID_291_" gradientUnits="userSpaceOnUse" x1="5115.894" y1="283.7248" x2="5124.3896" y2="283.7248" gradientTransform="matrix(-1 0 0 1 5329.0942 0)">
                      <stop  offset="0" style="stop-color:#FAB11F"/>
                      <stop  offset="1" style="stop-color:#FFC55D"/>
                    </linearGradient>
                    <polygon style="clip-path:url(#SVGID_289_);fill:url(#SVGID_291_);" points="204.7,291.7 213.2,291.7 213.2,275.8 204.7,275.8
                              "/>

                      <linearGradient id="SVGID_292_" gradientUnits="userSpaceOnUse" x1="5114.2666" y1="285.6049" x2="5123.2427" y2="285.6049" gradientTransform="matrix(-1 0 0 1 5329.0942 0)">
                      <stop  offset="0" style="stop-color:#747474;stop-opacity:0"/>
                      <stop  offset="1" style="stop-color:#424242"/>
                    </linearGradient>
                    <path style="opacity:0.3;clip-path:url(#SVGID_289_);fill:url(#SVGID_292_);" d="M209.6,278.2c-0.5,0.2-1.9,0.4-2.1,1.1
                      c-0.2,0.7,1.8,2.4,2.3,2.9c0.3,0.2,0.5,0.5,0.6,0.9c0.1,0.4,0,0.8-0.2,1.1c-0.3,0.2-0.6,0.2-0.9,0.2c-0.3,0-0.7,0.1-0.8,0.5
                      c-0.1,0.3,0,0.7,0.2,1s0.4,0.6,0.4,0.9c0,0.5-0.3,0.9-0.6,1.2c-0.4,0.4-0.9,0.9-1.4,1.1c-0.3,0.1-0.6,0.2-0.8,0.4
                      c-0.4,0.4-0.5,1.1-0.3,1.7c0.2,0.9,0.8,1.7,1.6,2.2c0.7,0.4,1.6,0.5,2.4,0.4c1.8-0.3,3.4-1.6,4.3-3.5c0.9-1.9,0.9-4.3,0.1-6.2
                      c-0.3-0.7-0.7-1.5-0.6-2.3c0.1-0.7,0.5-1.3,0.4-2.1c-0.1-1.3-1.7-1.7-2.6-1.9C210.7,277.5,210.4,277.9,209.6,278.2z"/>
                  </g>
                  <g>
                    <g>
                      <g>
                        <defs>
                          <path id="SVGID_294_" d="M207,284.7l0,5.8c0,0.6,0.5,1.1,1.1,1.1l3.8,0l0,1.2l-4.1,0c-1,0-1.9-0.8-1.9-1.9l0-7.4l0,0
                            C206.5,283.5,207,284,207,284.7z"/>
                        </defs>
                        <clipPath id="SVGID_293_">
                          <use xlink:href="#SVGID_294_"  style="overflow:visible;"/>
                        </clipPath>
                        <g style="clip-path:url(#SVGID_293_);">

                            <linearGradient id="SVGID_295_" gradientUnits="userSpaceOnUse" x1="6739.6714" y1="1156.906" x2="6746.5776" y2="1156.906" gradientTransform="matrix(-1 -1.500000e-03 -1.500000e-03 1 6953.5259 -858.3728)">
                            <stop  offset="0" style="stop-color:#424242"/>
                            <stop  offset="1" style="stop-color:#747474"/>
                          </linearGradient>
                          <polygon style="fill:url(#SVGID_295_);" points="205.2,293.5 212.1,293.5 212.1,283.4 205.2,283.4               "/>
                        </g>

                          <linearGradient id="SVGID_296_" gradientUnits="userSpaceOnUse" x1="6742.9595" y1="1162.6165" x2="6742.9595" y2="1154.8694" gradientTransform="matrix(-1 -1.500000e-03 -1.500000e-03 1 6953.5259 -858.3728)">
                          <stop  offset="0" style="stop-color:#747474"/>
                          <stop  offset="1" style="stop-color:#424242;stop-opacity:0"/>
                        </linearGradient>
                        <path style="opacity:0.75;clip-path:url(#SVGID_293_);fill:url(#SVGID_296_);" d="M205.7,287.9c-2.4,3.9,1.7,8,5.5,5.5
                          c0.3-0.2,0.6-0.4,0.8-0.8c2.4-3.9-1.6-8-5.5-5.5C206.1,287.3,205.9,287.6,205.7,287.9z"/>
                      </g>
                      <g>
                        <defs>
                          <path id="SVGID_298_" d="M242.4,320.4c6.1,0,11.1-5,11.1-11.1c0-6.1-5-11.1-11.1-11.1c-6.1,0-11.1,5-11.1,11.1
                            C231.3,315.4,236.2,320.4,242.4,320.4z M242.4,316.8c-4.2,0-7.6-3.4-7.6-7.6c0-4.2,3.4-7.6,7.6-7.6c4.2,0,7.6,3.4,7.6,7.6
                            C249.9,313.5,246.5,316.8,242.4,316.8z"/>
                        </defs>
                        <clipPath id="SVGID_297_">
                          <use xlink:href="#SVGID_298_"  style="overflow:visible;"/>
                        </clipPath>

                          <linearGradient id="SVGID_299_" gradientUnits="userSpaceOnUse" x1="-7050.127" y1="6730.6636" x2="-7050.127" y2="6705.75" gradientTransform="matrix(1 1.500000e-03 1.500000e-03 -1 7282.4268 7038.0156)">
                          <stop  offset="0" style="stop-color:#646565"/>
                          <stop  offset="1" style="stop-color:#424242"/>
                        </linearGradient>
                        <polygon style="clip-path:url(#SVGID_297_);fill:url(#SVGID_299_);" points="253.8,296.8 231,296.8 231,321.7 253.7,321.7
                                      "/>

                          <linearGradient id="SVGID_300_" gradientUnits="userSpaceOnUse" x1="6714.8164" y1="1184.5052" x2="6714.8164" y2="1154.5948" gradientTransform="matrix(-1 -1.500000e-03 -1.500000e-03 1 6953.5259 -858.3728)">
                          <stop  offset="0" style="stop-color:#747474"/>
                          <stop  offset="1" style="stop-color:#424242;stop-opacity:0"/>
                        </linearGradient>
                        <path style="opacity:0.75;clip-path:url(#SVGID_297_);fill:url(#SVGID_300_);" d="M224.7,292.1c-9,14.8,6.4,30.3,21.3,21.3
                          c1.4-0.8,2.5-2,3.3-3.3c9-14.8-6.4-30.3-21.3-21.3C226.6,289.6,225.5,290.8,224.7,292.1z"/>
                      </g>
                      <g>
                        <defs>
                          <path id="SVGID_302_" d="M205.2,298.1c-6.1,0-11.1,5-11.1,11.1c0,6.1,5,11.1,11.1,11.1c6.1,0,11.1-5,11.1-11.1
                            C216.3,303.1,211.3,298.1,205.2,298.1z M205.2,301.6c4.2,0,7.6,3.4,7.6,7.6c0,4.2-3.4,7.6-7.6,7.6c-4.2,0-7.6-3.4-7.6-7.6
                            C197.6,305,201,301.6,205.2,301.6z"/>
                        </defs>
                        <clipPath id="SVGID_301_">
                          <use xlink:href="#SVGID_302_"  style="overflow:visible;"/>
                        </clipPath>

                          <linearGradient id="SVGID_303_" gradientUnits="userSpaceOnUse" x1="6746.3232" y1="1188.8055" x2="6746.3232" y2="1166.5381" gradientTransform="matrix(-1 -1.500000e-03 -1.500000e-03 1 6953.5259 -858.3728)">
                          <stop  offset="0" style="stop-color:#424242"/>
                          <stop  offset="1" style="stop-color:#646565"/>
                        </linearGradient>
                        <polygon style="clip-path:url(#SVGID_301_);fill:url(#SVGID_303_);" points="194.1,320.3 216.8,320.3 216.8,298.1 194.1,298
                                      "/>

                          <linearGradient id="SVGID_304_" gradientUnits="userSpaceOnUse" x1="6738.5903" y1="1200.2252" x2="6738.5903" y2="1170.3149" gradientTransform="matrix(-1 -1.500000e-03 -1.500000e-03 1 6953.5259 -858.3728)">
                          <stop  offset="0" style="stop-color:#747474"/>
                          <stop  offset="1" style="stop-color:#424242;stop-opacity:0"/>
                        </linearGradient>
                        <path style="opacity:0.75;clip-path:url(#SVGID_301_);fill:url(#SVGID_304_);" d="M200.9,307.8c-9,14.8,6.4,30.2,21.3,21.3
                          c1.4-0.8,2.5-2,3.3-3.3c9-14.8-6.4-30.3-21.3-21.3C202.8,305.3,201.7,306.4,200.9,307.8z"/>
                      </g>
                      <g>
                        <defs>
                          <path id="SVGID_306_" d="M251.9,301.1l-2.9,2.2l-7.6,0c-1.8,0-3.4,0.9-4.3,2.4l0,0l-6.4,0c0,0,1.7-9.2,10.6-9.1
                            C248.4,296.5,251.9,301.1,251.9,301.1z"/>
                        </defs>
                        <clipPath id="SVGID_305_">
                          <use xlink:href="#SVGID_306_"  style="overflow:visible;"/>
                        </clipPath>

                          <linearGradient id="SVGID_307_" gradientUnits="userSpaceOnUse" x1="6699.4326" y1="1169.856" x2="6721.1138" y2="1169.856" gradientTransform="matrix(-1 -1.500000e-03 -1.500000e-03 1 6953.5259 -858.3728)">
                          <stop  offset="0" style="stop-color:#ED4051"/>
                          <stop  offset="1" style="stop-color:#D62538"/>
                        </linearGradient>
                        <polygon style="clip-path:url(#SVGID_305_);fill:url(#SVGID_307_);" points="230.7,306.3 252.3,306.3 252.3,296.5
                          230.7,296.5             "/>

                          <linearGradient id="SVGID_308_" gradientUnits="userSpaceOnUse" x1="6696.7563" y1="1173.3077" x2="6716.1519" y2="1173.3077" gradientTransform="matrix(-1 -1.500000e-03 -1.500000e-03 1 6953.5259 -858.3728)">
                          <stop  offset="0" style="stop-color:#747474"/>
                          <stop  offset="1" style="stop-color:#424242;stop-opacity:0"/>
                        </linearGradient>
                        <path style="opacity:0.75;clip-path:url(#SVGID_305_);fill:url(#SVGID_308_);" d="M237.3,299.2c-5.7,9.5,4.2,19.4,13.7,13.8
                          c1-0.6,1.8-1.4,2.3-2.3c5.7-9.5-4.2-19.4-13.7-13.8C238.7,297.4,237.8,298.2,237.3,299.2z"/>
                      </g>
                      <g>
                        <defs>
                          <path id="SVGID_310_" d="M211.9,289.9l1.2,0.3c0-3.5,3.8-3.4,3.8-5.9c0,0-1.9,0-3.7,0C211.4,284.3,211.9,289.9,211.9,289.9z"
                            />
                        </defs>
                        <clipPath id="SVGID_309_">
                          <use xlink:href="#SVGID_310_"  style="overflow:visible;"/>
                        </clipPath>

                          <linearGradient id="SVGID_311_" gradientUnits="userSpaceOnUse" x1="6734.2363" y1="1158.0004" x2="6740.4448" y2="1151.792" gradientTransform="matrix(-1 -1.500000e-03 -1.500000e-03 1 6953.5259 -858.3728)">
                          <stop  offset="0" style="stop-color:#424242"/>
                          <stop  offset="1" style="stop-color:#747474"/>
                        </linearGradient>
                        <polygon style="clip-path:url(#SVGID_309_);fill:url(#SVGID_311_);" points="211.5,289.7 217.4,289.7 217.4,283.2
                          211.5,283.2             "/>

                          <linearGradient id="SVGID_312_" gradientUnits="userSpaceOnUse" x1="6732.1987" y1="1156.7244" x2="6739.3726" y2="1156.7244" gradientTransform="matrix(-1 -1.500000e-03 -1.500000e-03 1 6953.5259 -858.3728)">
                          <stop  offset="8.571830e-02" style="stop-color:#747474;stop-opacity:0"/>
                          <stop  offset="1" style="stop-color:#434444"/>
                        </linearGradient>
                        <path style="clip-path:url(#SVGID_309_);fill:url(#SVGID_312_);" d="M213.1,286.1c-2.2,3.6,1.5,7.3,5.1,5.1
                          c0.3-0.2,0.6-0.4,0.7-0.7c2.2-3.6-1.5-7.3-5.1-5.1C213.5,285.5,213.3,285.8,213.1,286.1z"/>
                      </g>
                      <g>
                        <defs>
                          <path id="SVGID_314_" d="M214.5,290.1L214.5,290.1c-0.1,0.3-0.4,0.4-0.6,0.4l-0.7-0.2l-1.7,4.9l0.9,0.3l0,0.1
                            c-0.2,0.5-0.6,0.8-1.1,0.8l0,0l-5.1,13c-0.3,0.7-1,1-1.7,0.7l0,0l4.8-14.8c0.1-0.5,0.6-0.7,1.1-0.5l0,0l1.7-4.9l-0.6-0.2
                            c-0.3-0.1-0.4-0.4-0.3-0.6l0-0.1c0.1-0.3,0.4-0.4,0.6-0.3l2.4,0.8C214.4,289.6,214.5,289.9,214.5,290.1z"/>
                        </defs>
                        <clipPath id="SVGID_313_">
                          <use xlink:href="#SVGID_314_"  style="overflow:visible;"/>
                        </clipPath>

                          <linearGradient id="SVGID_315_" gradientUnits="userSpaceOnUse" x1="6736.8076" y1="1167.8367" x2="6747.4385" y2="1167.8367" gradientTransform="matrix(-1 -1.500000e-03 -1.500000e-03 1 6953.5259 -858.3728)">
                          <stop  offset="0" style="stop-color:#ED4051"/>
                          <stop  offset="1" style="stop-color:#D62538"/>
                        </linearGradient>
                        <polygon style="clip-path:url(#SVGID_313_);fill:url(#SVGID_315_);" points="204.3,310.6 214.9,310.6 215,288.1 204.4,288.1
                                      "/>

                          <linearGradient id="SVGID_316_" gradientUnits="userSpaceOnUse" x1="27776.2305" y1="3204.6243" x2="27788.8613" y2="3204.6243" gradientTransform="matrix(-0.2365 -7.640000e-02 -0.3075 0.9515 7766.1929 -627.2038)">
                          <stop  offset="0" style="stop-color:#747474"/>
                          <stop  offset="1" style="stop-color:#424242;stop-opacity:0"/>
                        </linearGradient>
                        <polygon style="opacity:0.75;clip-path:url(#SVGID_313_);fill:url(#SVGID_316_);" points="205.2,309.8 208.2,310.8 215.2,289
                          212.2,288             "/>
                      </g>
                      <g>
                        <defs>

                            <rect id="SVGID_318_" x="221.6" y="297.7" transform="matrix(0.3431 -0.9393 0.9393 0.3431 -128.5244 412.6392)" width="18.4" height="1.1"/>
                        </defs>
                        <clipPath id="SVGID_317_">
                          <use xlink:href="#SVGID_318_"  style="overflow:visible;"/>
                        </clipPath>
                        <line style="clip-path:url(#SVGID_317_);fill:#E23045;" x1="233.9" y1="289.6" x2="227.6" y2="306.8"/>

                          <rect x="230.8" y="289.4" transform="matrix(-1 -1.464234e-03 1.464234e-03 -1 465.164 586.5189)" style="clip-path:url(#SVGID_317_);fill:#E2E3E1;" width="4.1" height="7.4"/>

                          <linearGradient id="SVGID_319_" gradientUnits="userSpaceOnUse" x1="40647.5742" y1="-11954.3418" x2="40662.2305" y2="-11954.3418" gradientTransform="matrix(-0.2709 0.3017 -0.2758 0.945 7949.6045 -674.6541)">
                          <stop  offset="8.571830e-02" style="stop-color:#747474;stop-opacity:0"/>
                          <stop  offset="1" style="stop-color:#434444"/>
                        </linearGradient>
                        <polygon style="opacity:0.4;clip-path:url(#SVGID_317_);fill:url(#SVGID_319_);" points="232,300.2 230.2,299.6 234.4,287.9
                          236.1,288.6             "/>
                      </g>
                      <g>
                        <defs>
                          <polygon id="SVGID_321_" points="241.8,307.5 243,305.7 235,297 231.1,295.6 226.8,307 228.1,307 231.6,297.5 233.5,297.6
                                          "/>
                        </defs>
                        <clipPath id="SVGID_320_">
                          <use xlink:href="#SVGID_321_"  style="overflow:visible;"/>
                        </clipPath>

                          <rect x="227.1" y="294.7" transform="matrix(-1 -1.462223e-03 1.462223e-03 -1 469.6991 602.5409)" style="clip-path:url(#SVGID_320_);fill:#E23045;" width="15.9" height="12.8"/>

                          <linearGradient id="SVGID_322_" gradientUnits="userSpaceOnUse" x1="6652.252" y1="1036.9736" x2="6666.9082" y2="1036.9736" gradientTransform="matrix(-1.006 3.880000e-02 5.000000e-03 1.0454 6929.3901 -1039.5095)">
                          <stop  offset="8.571830e-02" style="stop-color:#747474;stop-opacity:0"/>
                          <stop  offset="1" style="stop-color:#434444"/>
                        </linearGradient>
                        <polygon style="opacity:0.4;clip-path:url(#SVGID_320_);fill:url(#SVGID_322_);" points="238.2,310.6 227.7,306.9
                          231.9,295.2 242.4,299             "/>
                      </g>
                      <g>
                        <defs>
                          <path id="SVGID_324_" d="M237.9,287.6c1.2,1.3-1.8,2.9-1.8,2.9s-7,0.3-6.6-1.7c0.4-2,2.7-1,4.2-1.1
                            C235.2,287.7,236.6,286.1,237.9,287.6z"/>
                        </defs>
                        <clipPath id="SVGID_323_">
                          <use xlink:href="#SVGID_324_"  style="overflow:visible;"/>
                        </clipPath>

                          <linearGradient id="SVGID_325_" gradientUnits="userSpaceOnUse" x1="6711.7515" y1="1157.2136" x2="6722.729" y2="1157.2136" gradientTransform="matrix(-1 -1.500000e-03 -1.500000e-03 1 6953.5259 -858.3728)">
                          <stop  offset="0" style="stop-color:#424242"/>
                          <stop  offset="1" style="stop-color:#747474"/>
                        </linearGradient>
                        <polygon style="clip-path:url(#SVGID_323_);fill:url(#SVGID_325_);" points="229.1,290.7 240,290.7 240,286.8 229.1,286.8
                                      "/>

                          <linearGradient id="SVGID_326_" gradientUnits="userSpaceOnUse" x1="6714.5527" y1="1162.9265" x2="6714.5527" y2="1156.2152" gradientTransform="matrix(-1 -1.500000e-03 -1.500000e-03 1 6953.5259 -858.3728)">
                          <stop  offset="0" style="stop-color:#747474"/>
                          <stop  offset="1" style="stop-color:#424242;stop-opacity:0"/>
                        </linearGradient>
                        <path style="opacity:0.75;clip-path:url(#SVGID_323_);fill:url(#SVGID_326_);" d="M234.5,289.1c-2.1,3.3,1.4,6.8,4.8,4.8
                          c0.3-0.2,0.5-0.4,0.7-0.7c2.1-3.3-1.4-6.8-4.8-4.8C234.9,288.6,234.7,288.8,234.5,289.1z"/>
                      </g>
                      <g>
                        <defs>
                          <path id="SVGID_328_" d="M212.3,295.5l5.8,11c1.1,2.1,3.3,3.4,5.6,3.4l0,0c0,1.4,1,3.5,3.5,3.5c2.3,0,4-1.3,4-4.2l9.4,0
                            l2.3-3.6l-1,0l-0.9,1.2c0,0-10.5,0-14.1,0c-3.7,0-5.3-1.1-6.7-3.3c-1.4-2.3-6.6-11.4-6.6-11.4l0-2l-0.7-0.2l-1.9,5.5
                            L212.3,295.5z"/>
                        </defs>
                        <clipPath id="SVGID_327_">
                          <use xlink:href="#SVGID_328_"  style="overflow:visible;"/>
                        </clipPath>

                          <linearGradient id="SVGID_329_" gradientUnits="userSpaceOnUse" x1="6708.687" y1="1169.8658" x2="6741.7554" y2="1169.8658" gradientTransform="matrix(-1 -1.500000e-03 -1.500000e-03 1 6953.5259 -858.3728)">
                          <stop  offset="0" style="stop-color:#D7D7D7"/>
                          <stop  offset="1" style="stop-color:#E3E3E2"/>
                        </linearGradient>
                        <polygon style="clip-path:url(#SVGID_327_);fill:url(#SVGID_329_);" points="210,314 243.1,314.1 243.1,288.8 210,288.7
                                      "/>
                        <g style="clip-path:url(#SVGID_327_);">

                            <linearGradient id="SVGID_330_" gradientUnits="userSpaceOnUse" x1="6722.7812" y1="1178.629" x2="6725.8472" y2="1178.629" gradientTransform="matrix(-1 -1.500000e-03 -1.500000e-03 1 6953.5259 -858.3728)">
                            <stop  offset="0" style="stop-color:#424242"/>
                            <stop  offset="1" style="stop-color:#646565"/>
                          </linearGradient>
                          <path style="fill:url(#SVGID_330_);" d="M226.2,309.3c-0.9,1.5,0.7,3.1,2.2,2.2c0.2-0.1,0.3-0.2,0.4-0.4
                            c0.9-1.5-0.7-3.1-2.2-2.2C226.4,309,226.3,309.1,226.2,309.3z"/>
                        </g>

                          <linearGradient id="SVGID_331_" gradientUnits="userSpaceOnUse" x1="6708.2085" y1="1170.9657" x2="6741.5513" y2="1170.9657" gradientTransform="matrix(-1 -1.500000e-03 -1.500000e-03 1 6953.5259 -858.3728)">
                          <stop  offset="0" style="stop-color:#747474"/>
                          <stop  offset="1" style="stop-color:#424242;stop-opacity:0"/>
                        </linearGradient>
                        <path style="opacity:0.4;clip-path:url(#SVGID_327_);fill:url(#SVGID_331_);" d="M210.2,294.2l1.6-3.8l7.8,14.1
                          c1.3,2,3.4,3.1,5.7,3.1l18.2,0.2l0,6.6l-21.5-0.2L210.2,294.2z"/>
                      </g>
                      <g>

                          <linearGradient id="SVGID_332_" gradientUnits="userSpaceOnUse" x1="-12075.8975" y1="6205.9722" x2="-12073.0176" y2="6205.6001" gradientTransform="matrix(0.5414 -0.2667 -0.2749 -0.558 8469.5527 550.9684)">
                          <stop  offset="0" style="stop-color:#424242"/>
                          <stop  offset="1" style="stop-color:#646565"/>
                        </linearGradient>
                        <path style="fill:url(#SVGID_332_);" d="M225.6,306.1l-0.7,0.4l2.4,4c0.1,0.2,0.3,0.2,0.4,0.1l0.2-0.1
                          c0.2-0.1,0.2-0.3,0.1-0.4L225.6,306.1z"/>

                          <linearGradient id="SVGID_333_" gradientUnits="userSpaceOnUse" x1="2523.4253" y1="-22156.6875" x2="2527.4707" y2="-22158.3965" gradientTransform="matrix(5.000000e-04 0.6035 0.3404 -3.000000e-04 7766.3813 -1224.4137)">
                          <stop  offset="0" style="stop-color:#424242"/>
                          <stop  offset="1" style="stop-color:#646565"/>
                        </linearGradient>
                        <path style="fill:url(#SVGID_333_);" d="M226.9,306.3L226.9,306.3c0-0.2-0.2-0.4-0.4-0.4l-2.5,0c-0.2,0-0.4,0.2-0.4,0.4l0,0
                          c0,0.2,0.2,0.4,0.4,0.4l2.5,0C226.7,306.8,226.9,306.6,226.9,306.3z"/>
                      </g>
                    </g>
                  </g>

                    <linearGradient id="SVGID_334_" gradientUnits="userSpaceOnUse" x1="-3700.8953" y1="231.1338" x2="-3696.4885" y2="231.1338" gradientTransform="matrix(0.9998 -2.090000e-02 2.090000e-02 0.9998 3918.9551 -4.4631)">
                    <stop  offset="0" style="stop-color:#8D2D37"/>
                    <stop  offset="1" style="stop-color:#781A26"/>
                  </linearGradient>
                  <path style="fill:url(#SVGID_334_);" d="M223.7,305.6L223.7,305.6c0,0.2,0.2,0.3,0.3,0.3c0.5,0,1.3,0,2.3,0c1,0,2.4-2.9,1.4-3.8
                    c-1-0.9-1.2,1.3-1.2,1.3l-2.6,1.8C223.7,305.3,223.6,305.4,223.7,305.6z"/>
                  <g>
                    <defs>
                      <path id="SVGID_336_" d="M229.4,279.9c0,0-10.8,4.7-10.8,8.7c0,4,7.7,14.9,7.7,14.9c4.6-8.6-0.1-11.4-0.1-11.4s0.9-1.4,4.3-1.7
                        c3.4-0.3,14.1-3.5,5.2-12.4L229.4,279.9"/>
                    </defs>
                    <clipPath id="SVGID_335_">
                      <use xlink:href="#SVGID_336_"  style="overflow:visible;"/>
                    </clipPath>

                      <linearGradient id="SVGID_337_" gradientUnits="userSpaceOnUse" x1="-3680.9268" y1="254.0313" x2="-3656.1345" y2="254.0313" gradientTransform="matrix(1.0045 -1.470000e-02 2.730000e-02 1.0082 3908.3496 -16.7099)">
                      <stop  offset="0" style="stop-color:#F8A025"/>
                      <stop  offset="1" style="stop-color:#FAB758"/>
                    </linearGradient>
                    <polygon style="clip-path:url(#SVGID_335_);fill:url(#SVGID_337_);" points="217.4,280.1 219.3,309.2 243.1,308.9 241.7,277.4
                              "/>
                    <path style="clip-path:url(#SVGID_335_);fill:#CFD0D1;" d="M223.6,274.2c-1.4,0-2.4-1-2.4-1.3c0.3-1.8,0.9-6.3,1.6-6
                      c0.3,0.1,4.4-1,4.4-1S225,274.1,223.6,274.2z"/>
                    <g style="clip-path:url(#SVGID_335_);">

                        <linearGradient id="SVGID_338_" gradientUnits="userSpaceOnUse" x1="5088.0483" y1="286.1964" x2="5109.479" y2="286.1964" gradientTransform="matrix(-1 0 0 1 5329.0942 0)">
                        <stop  offset="0" style="stop-color:#36415D"/>
                        <stop  offset="1" style="stop-color:#4F668B"/>
                      </linearGradient>
                      <path style="fill:url(#SVGID_338_);" d="M241,284.5l-6.3,11.7l-8.5-4.1c0,0-6.6-4.5-6.6-7.3c0-2.8,17-8.7,17-8.7L241,284.5z"/>
                    </g>

                      <linearGradient id="SVGID_339_" gradientUnits="userSpaceOnUse" x1="5086.4785" y1="286.1676" x2="5100.0371" y2="286.1676" gradientTransform="matrix(-1 0 0 1 5329.0942 0)">
                      <stop  offset="0" style="stop-color:#747474"/>
                      <stop  offset="0.8917" style="stop-color:#2B2B2B;stop-opacity:0"/>
                    </linearGradient>
                    <path style="opacity:0.75;clip-path:url(#SVGID_335_);fill:url(#SVGID_339_);" d="M234.3,277.2c-0.5,0.4-0.9,0.9-1.1,1.5
                      c-0.4,1.4,0.1,2.8,0.6,4.2c0.4,1.4,0.8,3,0,4.2c-0.5,0.8-1.3,1.2-2.1,1.7c-0.9,0.6-1.7,1.3-2.2,2.2c-0.5,0.9-0.6,2.1,0,3
                      c0.5,0.7,1.2,1.1,2,1.4c2.9,1,6.4,0.2,8.6-1.9c1.7-1.7,2.7-4.1,2.6-6.5c0-0.6-0.2-1.2-0.2-1.7c0-0.6,0.1-1.1,0-1.6
                      c-0.3-1.4-0.8-2.8-1.5-4c-0.6-1.1-1.6-2.2-2.8-2.7c-1.2-0.5-2.7-0.5-3.7,0.2C234.4,277.1,234.3,277.1,234.3,277.2z"/>

                      <linearGradient id="SVGID_340_" gradientUnits="userSpaceOnUse" x1="-3701.1829" y1="220.8435" x2="-3681.489" y2="220.8435" gradientTransform="matrix(0.9998 -2.090000e-02 2.090000e-02 0.9998 3918.9551 -4.4631)">
                      <stop  offset="0" style="stop-color:#424242"/>
                      <stop  offset="1" style="stop-color:#747474;stop-opacity:0"/>
                    </linearGradient>
                    <path style="opacity:0.3;clip-path:url(#SVGID_335_);fill:url(#SVGID_340_);" d="M230.8,293.8c0.2,0,0.3-0.1,0.5-0.1
                      c4.3-0.6,12.7-2.9,11.1-8.9c-0.3-1.2-1.1-2.3-2.3-2.6c-1.2-0.3-2.4,0.1-3.4,0.8c-1.8,1.1-3.2,2.7-4.8,4
                      c-1.6,1.3-3.6,2.4-5.7,2.2c-0.5-0.1-1-0.2-1.5-0.2c-0.5,0-1,0.1-1.4,0.5c-0.8,0.9,0.5,1.8,0.8,2.6c0.4,0.9,0.6,1.9,0.7,2.8
                      c0.3,2.1,0.1,4.3-0.2,6.4c-0.2,1.2-0.3,2.4-0.6,3.5c0,0,5.9-2.3,5.9-5.1c0-1.4,0.3-3-0.3-4.2
                      C229.1,294.6,229.9,294.1,230.8,293.8z"/>
                  </g>
                  <g>
                    <defs>
                      <path id="SVGID_342_" d="M235.7,278.1c-2.9-7.7-3.7-10.8-7-11.3c-5.3-0.9-5.8,4.2-5.5,10.3c5.2,0.3,6.2,2.9,6.2,2.9
                        L235.7,278.1z"/>
                    </defs>
                    <clipPath id="SVGID_341_">
                      <use xlink:href="#SVGID_342_"  style="overflow:visible;"/>
                    </clipPath>

                      <linearGradient id="SVGID_343_" gradientUnits="userSpaceOnUse" x1="5073.6582" y1="276.3251" x2="5087.9331" y2="276.3251" gradientTransform="matrix(-1.0041 -9.000000e-04 9.000000e-04 1.0002 5330.4155 0.591)">
                      <stop  offset="0" style="stop-color:#D6D6D5"/>
                      <stop  offset="1" style="stop-color:#E3E3E2"/>
                    </linearGradient>
                    <polygon style="clip-path:url(#SVGID_341_);fill:url(#SVGID_343_);" points="222,280.6 236.2,280 235.9,264.2 221.9,264.6
                      "/>

                      <linearGradient id="SVGID_344_" gradientUnits="userSpaceOnUse" x1="-3700.4783" y1="200.8662" x2="-3683.7786" y2="200.8662" gradientTransform="matrix(0.9998 -2.090000e-02 2.090000e-02 0.9998 3918.9551 -4.4631)">
                      <stop  offset="0" style="stop-color:#424242;stop-opacity:0"/>
                      <stop  offset="1" style="stop-color:#747474"/>
                    </linearGradient>
                    <path style="opacity:0.3;clip-path:url(#SVGID_341_);fill:url(#SVGID_344_);" d="M232.2,266.6c2.2,2.1,2.5,4.9,4.9,6.7
                      c1,0.8,1.9,1,2.7,2.1c0.7,1,0.2,2.1-0.4,3.1c-0.7,1.3-2.1,2-3.4,2.6c-1.4,0.6-2.6,0.7-3.9,0.2c-1.4-0.6-2.9-1.1-4.3-1.7
                      c-1.1-0.4-2.3-0.9-2.8-2c-0.5-1-0.2-2.1,0-3.2c0.2-1.1,0.3-2.2-0.4-3.1c-0.7-0.8-1.3-1.8-1.3-2.9
                      C223.3,265.5,229.6,264.2,232.2,266.6z"/>
                  </g>
                  <g>
                    <defs>
                      <path id="SVGID_346_" d="M229.7,267.5c-4.4-1-4,8.7-5.5,10.3c-1.2,1.3-4.7,3.4-7.1,4.7c-1.2,0.6-1.9,0.8-2.5,1.1
                        c-0.6,0.3,0.8,2,1.1,2c0.2,0,0.7-0.3,0.7-0.3s0.2,0.3,0.3,0.2c0.3,0,0.6-0.7,0.6-0.7s7.2-2.7,9.5-4.2
                        C228.9,279.2,234.1,268.4,229.7,267.5z"/>
                    </defs>
                    <clipPath id="SVGID_345_">
                      <use xlink:href="#SVGID_346_"  style="overflow:visible;"/>
                    </clipPath>

                      <linearGradient id="SVGID_347_" gradientUnits="userSpaceOnUse" x1="-3711.416" y1="203.3525" x2="-3691.7004" y2="203.3525" gradientTransform="matrix(0.9998 -2.090000e-02 2.090000e-02 0.9998 3918.9551 -4.4631)">
                      <stop  offset="0" style="stop-color:#F8A025"/>
                      <stop  offset="1" style="stop-color:#FAB758"/>
                    </linearGradient>
                    <polygon style="clip-path:url(#SVGID_345_);fill:url(#SVGID_347_);" points="214,286.2 232.1,285.8 232,266.2 212.4,268.2
                      "/>

                      <linearGradient id="SVGID_348_" gradientUnits="userSpaceOnUse" x1="5095.4028" y1="273.0044" x2="5104.7886" y2="273.0044" gradientTransform="matrix(-1 0 0 1 5329.0942 0)">
                      <stop  offset="0" style="stop-color:#D6D6D5"/>
                      <stop  offset="1" style="stop-color:#E3E3E2"/>
                    </linearGradient>
                    <polygon style="clip-path:url(#SVGID_345_);fill:url(#SVGID_348_);" points="229,279.8 233.7,267.8 226.3,266.2 224.3,276.4
                              "/>

                      <linearGradient id="SVGID_349_" gradientUnits="userSpaceOnUse" x1="-3693.906" y1="204.1744" x2="-3704.8862" y2="203.9451" gradientTransform="matrix(0.9998 -2.090000e-02 2.090000e-02 0.9998 3918.9551 -4.4631)">
                      <stop  offset="0" style="stop-color:#747474;stop-opacity:0"/>
                      <stop  offset="1" style="stop-color:#424242"/>
                    </linearGradient>
                    <path style="opacity:0.3;clip-path:url(#SVGID_345_);fill:url(#SVGID_349_);" d="M229.3,275c0.1-0.2,0.2-0.4,0.2-0.6
                      c0.5-1.4,0.8-3,0.3-4.3c-0.5-1.3-2-2.2-3.3-1.8c-2.7,0.6-2.4,4-2.1,6.3c0.2,1.6,0.4,3.3-0.3,4.7c-0.9,1.7-2.6,2-3.7,3.3
                      c-0.5,0.6-1,1.3-1.2,2.2c0,0.1-0.1,0.9,0,0.9c0,0,6.3-3,7.7-4c0.9-0.6,1.8-1.8,1.7-3C228.5,277.3,228.9,276.2,229.3,275z"/>
                  </g>
                  <g>
                    <defs>
                      <path id="SVGID_351_" d="M227.5,267.1c0,0-2.1,3.7-3.3,3.7c0,0-1.5-5-2-4.6c-0.5,0.3-2.3,1-2.7,0.7c-0.4-0.3-1.4-3.7-1.5-6.2
                        c-0.1-1.6,5.5-2.7,6,0.4C224.4,264.4,227.5,267.1,227.5,267.1z"/>
                    </defs>
                    <clipPath id="SVGID_350_">
                      <use xlink:href="#SVGID_351_"  style="overflow:visible;"/>
                    </clipPath>
                    <path style="clip-path:url(#SVGID_350_);fill:#6D6F71;" d="M218.4,258.7l7.3,1.2l1.4,10.2l0,0.1l-8.6,0.2L218.4,258.7z
                       M225.6,260l-7.1-1.2l0.1,11.4l8.4-0.2L225.6,260z"/>

                      <linearGradient id="SVGID_352_" gradientUnits="userSpaceOnUse" x1="-3277.2798" y1="247.7517" x2="-3267.5288" y2="247.7517" gradientTransform="matrix(1.1051 -2.220000e-02 2.390000e-02 1.1018 3832.98 -80.6429)">
                      <stop  offset="0" style="stop-color:#F8A025"/>
                      <stop  offset="1" style="stop-color:#FAB758"/>
                    </linearGradient>
                    <polygon style="clip-path:url(#SVGID_350_);fill:url(#SVGID_352_);" points="228.1,271.3 217.3,271.3 217.4,258.6 226.5,260.1
                              "/>

                      <linearGradient id="SVGID_353_" gradientUnits="userSpaceOnUse" x1="-3706.1348" y1="192.6893" x2="-3695.9807" y2="192.6893" gradientTransform="matrix(0.9998 -2.090000e-02 2.090000e-02 0.9998 3918.9551 -4.4631)">
                      <stop  offset="0" style="stop-color:#424242"/>
                      <stop  offset="1" style="stop-color:#747474;stop-opacity:0"/>
                    </linearGradient>
                    <path style="opacity:0.3;clip-path:url(#SVGID_350_);fill:url(#SVGID_353_);" d="M219.4,264.6l0.8-0.2c0,0-0.3-1.3-0.2-2.1
                      c0.1-0.8,1.2-0.7,1.8-0.3c0.6,0.4,1,2.7,0.3,3.5c-0.7,0.8-2.6,1.3-2.6,1.3l4.9,4.9l3.4-3c-2-2.4-3.2-8.3-6.5-9.2
                      c-3.1-0.8-4.7,2.8-3.2,2.8c0.4-0.5,1-0.4,1.1,0.1C219.3,262.9,219.3,264,219.4,264.6z"/>

                      <linearGradient id="SVGID_354_" gradientUnits="userSpaceOnUse" x1="-3704.4329" y1="195.3762" x2="-3697.0496" y2="195.3762" gradientTransform="matrix(0.9998 -2.090000e-02 2.090000e-02 0.9998 3918.9551 -4.4631)">
                      <stop  offset="0" style="stop-color:#424242"/>
                      <stop  offset="1" style="stop-color:#747474;stop-opacity:0"/>
                    </linearGradient>
                    <path style="opacity:0.3;clip-path:url(#SVGID_350_);fill:url(#SVGID_354_);" d="M223.3,265.2c0.3,2.7,2,4.7,3.4,4.7
                      c-0.8,1.7-2.8,1.3-2.8,1.3l-4.6-4C219.3,267.2,221.7,267.2,223.3,265.2z"/>
                  </g>

                    <linearGradient id="SVGID_355_" gradientUnits="userSpaceOnUse" x1="-3708.9561" y1="213.0714" x2="-3708.9561" y2="211.3776" gradientTransform="matrix(0.9998 -2.090000e-02 2.090000e-02 0.9998 3918.9551 -4.4631)">
                    <stop  offset="0" style="stop-color:#424242"/>
                    <stop  offset="1" style="stop-color:#747474"/>
                  </linearGradient>
                  <path style="fill:url(#SVGID_355_);" d="M215.9,284.8c0.5,0.8-0.3,1.6-1.2,1.2c-0.1-0.1-0.2-0.1-0.3-0.3
                    c-0.5-0.8,0.3-1.6,1.2-1.2C215.7,284.6,215.8,284.7,215.9,284.8z"/>
                  <g>
                    <defs>
                      <path id="SVGID_357_" d="M226.9,253.6c4.2,0,3.8,4.6,3.6,5.9c-0.1,1.2-1.1,2.8-2.1,3.6c-0.8,0.6-2.8,1.9-3.8,1.4
                        c-0.6-0.3-0.5-1.5-0.6-2.1c-0.2-0.9-0.6-1.9-1.4-2.3c-2.4-1.2-2.7,2-5.1,0.9c-0.5-0.2,0.1-2.7,0.2-3c0.3-0.8,0.9-1.4,1.7-1.7
                        c1.2-0.5,4.2,0.5,4.2,0.5S222.7,253.6,226.9,253.6z"/>
                    </defs>
                    <clipPath id="SVGID_356_">
                      <use xlink:href="#SVGID_357_"  style="overflow:visible;"/>
                    </clipPath>

                      <linearGradient id="SVGID_358_" gradientUnits="userSpaceOnUse" x1="5098.0991" y1="258.515" x2="5112.3799" y2="258.515" gradientTransform="matrix(-1 0 0 1 5329.0942 0)">
                      <stop  offset="0" style="stop-color:#472463"/>
                      <stop  offset="1" style="stop-color:#602A78"/>
                    </linearGradient>
                    <polygon style="clip-path:url(#SVGID_356_);fill:url(#SVGID_358_);" points="231,266 216.7,266 216.7,251 231,251        "/>

                      <linearGradient id="SVGID_359_" gradientUnits="userSpaceOnUse" x1="5056.5059" y1="1514.333" x2="5070.0918" y2="1514.333" gradientTransform="matrix(-0.9616 -0.2745 -0.2745 0.9616 5508.8652 192.9688)">
                      <stop  offset="0" style="stop-color:#747474;stop-opacity:0"/>
                      <stop  offset="1" style="stop-color:#424242"/>
                    </linearGradient>
                    <path style="opacity:0.5;clip-path:url(#SVGID_356_);fill:url(#SVGID_359_);" d="M226.7,253.1c-0.6,0-1.3,0-1.8,0.4
                      c-0.5,0.4-0.7,1.1-0.7,1.8c0,0.7,0.3,1.3,0.6,1.9c0.3,0.6,0.6,1.2,0.7,1.9c0.1,0.4,0,0.8-0.3,1c-0.8,0.5-1.4-0.7-1.9-1.1
                      c-0.5-0.5-1.4-0.7-2.1-0.4c-0.5,0.3-1,0.8-1.5,0.7c-0.3,0-0.6-0.3-1-0.3c-0.7-0.2-1.4,0.4-1.6,1.1c-0.6,1.7,0.4,3.6,1.8,4.5
                      c0.5,0.3,1.1,0.6,1.7,0.8c0.5,0.1,0.9,0.1,1.4,0.2c1.4,0.3,2.7,0.4,4,0.1c1.4-0.3,2.8-1,3.7-2.1c0.9-1.1,1.4-2.7,0.8-4
                      c-0.1-0.4-0.4-0.7-0.5-1.1c-0.2-0.6-0.2-1.3-0.3-2c0-0.5-0.2-1.3,0-1.7c0.1-0.3,0.5-0.3,0.3-0.6c-0.3-0.4-1.2-0.6-1.6-0.7
                      C227.9,253.2,227.3,253.1,226.7,253.1z"/>
                  </g>
                </g>
              </g>
              <g>
                <g>
                  <defs>
                    <path id="SVGID_361_" d="M237.1,574.7c-3.8,0-6.8,3-6.8,6.8c0,3.8,3,6.8,6.8,6.8c3.8,0,6.8-3,6.8-6.8
                      C243.9,577.7,240.9,574.7,237.1,574.7z M237.1,576.9c2.6,0,4.6,2.1,4.6,4.7s-2.1,4.6-4.7,4.6c-2.6,0-4.6-2.1-4.6-4.7
                      C232.4,578.9,234.5,576.8,237.1,576.9z"/>
                  </defs>
                  <clipPath id="SVGID_360_">
                    <use xlink:href="#SVGID_361_"  style="overflow:visible;"/>
                  </clipPath>

                    <linearGradient id="SVGID_362_" gradientUnits="userSpaceOnUse" x1="6714.1143" y1="1456.7611" x2="6714.1143" y2="1443.098" gradientTransform="matrix(-1 -1.500000e-03 -1.500000e-03 1 6953.5259 -858.3728)">
                    <stop  offset="0" style="stop-color:#424242"/>
                    <stop  offset="1" style="stop-color:#646565"/>
                  </linearGradient>
                  <polygon style="clip-path:url(#SVGID_360_);fill:url(#SVGID_362_);" points="230.3,588.3 244.2,588.3 244.2,574.7 230.3,574.6
                          "/>

                    <linearGradient id="SVGID_363_" gradientUnits="userSpaceOnUse" x1="6709.3696" y1="1463.7682" x2="6709.3696" y2="1445.4154" gradientTransform="matrix(-1 -1.500000e-03 -1.500000e-03 1 6953.5259 -858.3728)">
                    <stop  offset="0" style="stop-color:#747474"/>
                    <stop  offset="1" style="stop-color:#424242;stop-opacity:0"/>
                  </linearGradient>
                  <path style="opacity:0.75;clip-path:url(#SVGID_360_);fill:url(#SVGID_363_);" d="M232.9,584.6c-1,6.3,4.3,11.6,10.6,10.6
                    c3.8-0.6,6.9-3.7,7.5-7.5c1-6.3-4.3-11.6-10.6-10.6C236.6,577.7,233.6,580.8,232.9,584.6z"/>
                </g>
                <linearGradient id="SVGID_364_" gradientUnits="userSpaceOnUse" x1="215.0752" y1="574.3671" x2="223.7056" y2="574.3671">
                  <stop  offset="0" style="stop-color:#D7D7D7"/>
                  <stop  offset="1" style="stop-color:#E3E3E2"/>
                </linearGradient>
                <path style="fill:url(#SVGID_364_);" d="M223.7,576.9c0,0-0.5,0.8-1.8,0.5c-0.5-0.1-3.8-1.9-4.4-2.4c-1.5-1.2-2.4-3.7-2.4-3.7
                  L223.7,576.9z"/>
                <path style="fill:#C0BEBC;" d="M219.6,583.4h10.3v-1.3H226l-3.4-5.5l-2.4,1.3c0,0-2.2,0.9-2.1,3.6
                  C218.1,583.4,219.6,583.4,219.6,583.4z"/>
                <linearGradient id="SVGID_365_" gradientUnits="userSpaceOnUse" x1="206.719" y1="581.5579" x2="210.6909" y2="581.5579">
                  <stop  offset="0" style="stop-color:#D7D7D7"/>
                  <stop  offset="1" style="stop-color:#E3E3E2"/>
                </linearGradient>
                <path style="fill:url(#SVGID_365_);" d="M206.7,581.6c0,1.1,0.9,2,2,2c1.1,0,2-0.9,2-2c0-1.1-0.9-2-2-2
                  C207.6,579.6,206.7,580.5,206.7,581.6z"/>
                <path style="fill:#E8E6E8;" d="M235.1,581.5c0,1.2,0.9,2.1,2.1,2.1c1.2,0,2.1-0.9,2.1-2.1c0-1.2-0.9-2.1-2.1-2.1
                  C236,579.4,235.1,580.3,235.1,581.5z"/>
                <linearGradient id="SVGID_366_" gradientUnits="userSpaceOnUse" x1="208.1312" y1="566.8347" x2="212.225" y2="566.8347">
                  <stop  offset="0" style="stop-color:#D7D7D7"/>
                  <stop  offset="1" style="stop-color:#E3E3E2"/>
                </linearGradient>
                <path style="fill:url(#SVGID_366_);" d="M208.1,564.2h1.6c0,0,2.4,0.2,2.5,2.2c0,0,0.4,3.1-2.9,3.1h-1.2V564.2z"/>
                <linearGradient id="SVGID_367_" gradientUnits="userSpaceOnUse" x1="210.7069" y1="569.4851" x2="210.7069" y2="564.1884">
                  <stop  offset="0" style="stop-color:#424242;stop-opacity:0"/>
                  <stop  offset="1" style="stop-color:#747474"/>
                </linearGradient>
                <path style="opacity:0.4;fill:url(#SVGID_367_);" d="M209.8,564.2c0,0,2.4,0.2,2.4,2.2c0,0,0.3,3.3-3,3.1c0,0-0.1-1.6,0.3-2.3
                  c0.4-0.7,2.1-0.5,2.1-1.1C211.5,564.9,209.8,564.2,209.8,564.2z"/>
                <linearGradient id="SVGID_368_" gradientUnits="userSpaceOnUse" x1="209.2146" y1="566.8347" x2="208.1312" y2="566.8347">
                  <stop  offset="0" style="stop-color:#020000"/>
                  <stop  offset="1" style="stop-color:#513D3E"/>
                </linearGradient>
                <rect x="208.1" y="564.2" style="fill:url(#SVGID_368_);" width="1.1" height="5.3"/>
                <path style="fill:#FCCF70;" d="M207.9,564.4c-0.3,0.8-0.8,3.2,0.1,5.1c0,0.1,0.1,0.1,0.1-0.1c0-0.7,0-2.4,0-2.7c0-0.2,0-1.8,0-2.4
                  C208.1,564.1,208,564.2,207.9,564.4z"/>
                <polygon style="fill:#513D3E;" points="222.8,563.3 222.5,564.6 222.2,564.3 220.1,563.8 220.2,562.9 222.3,563.5    "/>
                <path style="fill:#C0BEBC;" d="M234.1,575.2l3.8,5.6c0,0,0.7,1,0,1.2c-0.2,0.1-0.5,0-0.5-0.4l-9.6,0.1l-0.1-0.9l8.9-0.2l-3.2-5.1
                  L234.1,575.2z"/>
                <linearGradient id="SVGID_369_" gradientUnits="userSpaceOnUse" x1="238.1413" y1="578.6833" x2="227.7118" y2="578.6833">
                  <stop  offset="0" style="stop-color:#424242;stop-opacity:0"/>
                  <stop  offset="1" style="stop-color:#747474"/>
                </linearGradient>
                <path style="opacity:0.4;fill:url(#SVGID_369_);" d="M234.1,575.2l3.8,5.6c0,0,0.7,1,0,1.2c-0.2,0.1-0.5,0-0.5-0.4l-9.6,0.1l0-0.2
                  l9.6-0.1c0,0,0.2,0.5,0.4,0.3c0.2-0.1,0.2-0.2,0-0.6c-0.2-0.4-4-6-4-6L234.1,575.2z"/>
                <linearGradient id="SVGID_370_" gradientUnits="userSpaceOnUse" x1="244.1626" y1="571.9484" x2="245.6837" y2="571.9484">
                  <stop  offset="0" style="stop-color:#D7D7D7"/>
                  <stop  offset="1" style="stop-color:#E3E3E2"/>
                </linearGradient>
                <path style="fill:url(#SVGID_370_);" d="M245.7,570v3.8c0,0-1.5-0.5-1.5-1c0-0.5,0-1.5,0-1.8C244.2,570.6,245.7,570,245.7,570z"/>
                <rect x="243.5" y="570.9" style="fill:#C0BEBC;" width="0.7" height="2"/>
                <linearGradient id="SVGID_371_" gradientUnits="userSpaceOnUse" x1="244.0258" y1="571.9266" x2="244.2044" y2="571.9266">
                  <stop  offset="0" style="stop-color:#747474"/>
                  <stop  offset="1" style="stop-color:#424242;stop-opacity:0"/>
                </linearGradient>
                <rect x="244" y="570.9" style="opacity:0.4;fill:url(#SVGID_371_);" width="0.2" height="2"/>
                <path style="fill:none;stroke:#000000;stroke-width:0.1123;stroke-miterlimit:10;" d="M222.8,577.3c0,0.1,0.1,0.2,0.2,0.2
                  c0.1,0,0.2-0.1,0.2-0.2c0-0.1-0.1-0.2-0.2-0.2C222.9,577.2,222.8,577.2,222.8,577.3z"/>
                <path style="fill:none;stroke:#000000;stroke-width:0.1123;stroke-miterlimit:10;" d="M227.5,579.7c0,0.1,0.1,0.2,0.2,0.2
                  s0.2-0.1,0.2-0.2c0-0.1-0.1-0.2-0.2-0.2S227.5,579.6,227.5,579.7z"/>
                <linearGradient id="SVGID_372_" gradientUnits="userSpaceOnUse" x1="229.226" y1="582.8552" x2="237.3395" y2="582.8552">
                  <stop  offset="0" style="stop-color:#D7D7D7"/>
                  <stop  offset="1" style="stop-color:#E3E3E2"/>
                </linearGradient>
                <path style="fill:url(#SVGID_372_);" d="M236.9,583.9l-7.2,0c0,0-0.4,0-0.4-0.4c0-0.3,0-1.4,0-1.4s0-0.3,0.5-0.3
                  c0.5,0,7.3,0,7.3,0S237.8,583,236.9,583.9z"/>
                <path style="fill:#C0BEBC;" d="M237.3,583.3h1.3c0,0,0.2-0.2,0.2-0.5c0-0.4-0.2-0.5-0.2-0.5h-1.3c0,0,0.1,0.3,0.1,0.6
                  C237.3,583.1,237.3,583.3,237.3,583.3z"/>
                <linearGradient id="SVGID_373_" gradientUnits="userSpaceOnUse" x1="219.5538" y1="580.5686" x2="225.5383" y2="580.5686">
                  <stop  offset="0" style="stop-color:#D7D7D7"/>
                  <stop  offset="1" style="stop-color:#E3E3E2"/>
                </linearGradient>
                <path style="fill:url(#SVGID_373_);" d="M223.5,579.1l-2.6,1.4l-0.3-0.6c0,0-1,0.4-1,1c0,0.6-0.1,1,0.1,1.1c0.2,0,5.8-0.1,5.8-0.1
                  l-0.7-1.4L223.5,579.1z"/>
                <linearGradient id="SVGID_374_" gradientUnits="userSpaceOnUse" x1="221.3768" y1="582.1729" x2="223.5715" y2="582.1729">
                  <stop  offset="0" style="stop-color:#D7D7D7"/>
                  <stop  offset="1" style="stop-color:#E3E3E2"/>
                </linearGradient>
                <path style="fill:url(#SVGID_374_);" d="M221.4,582.2c0,0.6,0.5,1.1,1.1,1.1s1.1-0.5,1.1-1.1c0-0.6-0.5-1.1-1.1-1.1
                  S221.4,581.6,221.4,582.2z"/>
                <g>
                  <defs>
                    <path id="SVGID_376_" d="M208.6,574.7c-3.8,0-6.8,3-6.8,6.8c0,3.8,3,6.8,6.8,6.8c3.8,0,6.8-3,6.8-6.8
                      C215.4,577.7,212.3,574.7,208.6,574.7z M208.6,576.9c2.6,0,4.6,2.1,4.6,4.7s-2.1,4.6-4.7,4.6c-2.6,0-4.6-2.1-4.6-4.7
                      C203.9,578.9,206,576.8,208.6,576.9z"/>
                  </defs>
                  <clipPath id="SVGID_375_">
                    <use xlink:href="#SVGID_376_"  style="overflow:visible;"/>
                  </clipPath>

                    <linearGradient id="SVGID_377_" gradientUnits="userSpaceOnUse" x1="6742.6357" y1="1456.804" x2="6742.6357" y2="1443.1407" gradientTransform="matrix(-1 -1.500000e-03 -1.500000e-03 1 6953.5259 -858.3728)">
                    <stop  offset="0" style="stop-color:#424242"/>
                    <stop  offset="1" style="stop-color:#646565"/>
                  </linearGradient>
                  <polygon style="clip-path:url(#SVGID_375_);fill:url(#SVGID_377_);" points="201.7,588.3 215.7,588.3 215.7,574.7 201.8,574.6
                          "/>

                    <linearGradient id="SVGID_378_" gradientUnits="userSpaceOnUse" x1="6737.8911" y1="1463.811" x2="6737.8911" y2="1445.4583" gradientTransform="matrix(-1 -1.500000e-03 -1.500000e-03 1 6953.5259 -858.3728)">
                    <stop  offset="0" style="stop-color:#747474"/>
                    <stop  offset="1" style="stop-color:#424242;stop-opacity:0"/>
                  </linearGradient>
                  <path style="opacity:0.75;clip-path:url(#SVGID_375_);fill:url(#SVGID_378_);" d="M204.4,584.6c-1,6.3,4.3,11.6,10.6,10.6
                    c3.8-0.6,6.9-3.7,7.5-7.5c1-6.3-4.3-11.6-10.6-10.6C208.1,577.7,205,580.8,204.4,584.6z"/>
                </g>
                <path style="fill:#C0BEBC;" d="M220.2,563c0,0-0.6-0.4-2.2-0.5c-3.2-0.2-4.4,1.7-4.4,1.7l0.5,0.6c0,0,1.6-1.6,3.8-1.5
                  c1.1,0,2.2,0.5,2.2,0.5L220.2,563z"/>
                <linearGradient id="SVGID_379_" gradientUnits="userSpaceOnUse" x1="213.8636" y1="563.8414" x2="220.1334" y2="563.8414">
                  <stop  offset="0" style="stop-color:#424242;stop-opacity:0"/>
                  <stop  offset="1" style="stop-color:#747474"/>
                </linearGradient>
                <path style="opacity:0.4;fill:url(#SVGID_379_);" d="M220.1,563.5c0,0-0.6-0.4-2.2-0.5c-2.8-0.2-4.1,1.8-4.1,1.8l0.2,0
                  c0,0,1.6-1.6,3.8-1.5c1.1,0,2.2,0.5,2.2,0.5L220.1,563.5z"/>
                <linearGradient id="SVGID_380_" gradientUnits="userSpaceOnUse" x1="212.9036" y1="564.5693" x2="215.4259" y2="564.5693">
                  <stop  offset="0" style="stop-color:#4E4E4D"/>
                  <stop  offset="1" style="stop-color:#272626"/>
                </linearGradient>
                <path style="fill:url(#SVGID_380_);" d="M215.4,564.3l-0.4,1.1c0,0-0.1,0.5-0.8,0.2c-0.7-0.3-1-0.4-1.1-0.5
                  c-0.1-0.1-0.2-0.2-0.2-0.5c0-0.1,0.3-0.6,0.4-0.7c0.1-0.2,0.2-0.5,0.6-0.3c0.4,0.2,1.2,0.4,1.2,0.4S215.5,564,215.4,564.3z"/>
                <linearGradient id="SVGID_381_" gradientUnits="userSpaceOnUse" x1="214.1931" y1="564.7948" x2="215.4259" y2="564.7948">
                  <stop  offset="0" style="stop-color:#747474"/>
                  <stop  offset="1" style="stop-color:#424242;stop-opacity:0"/>
                </linearGradient>
                <path style="opacity:0.4;fill:url(#SVGID_381_);" d="M215.4,564.3l-0.4,1.1c0,0-0.2,0.4-0.6,0.2c-0.4-0.2-0.2-0.4-0.2-0.7
                  c0-0.1,0.3-0.6,0.4-0.7c0.1-0.2,0.5-0.4,0.5-0.4S215.5,564,215.4,564.3z"/>
                <path style="fill:#C0BEBC;" d="M214.5,565.7v0.6c0,0-0.3,0-0.9,0.2c-0.6,0.1-1,0.2-1.1,0.1c-0.1-0.2,0.3-1.6,0.3-1.6L214.5,565.7z
                  "/>
                <linearGradient id="SVGID_382_" gradientUnits="userSpaceOnUse" x1="214.5432" y1="566.0639" x2="213.9779" y2="566.0639">
                  <stop  offset="0" style="stop-color:#747474"/>
                  <stop  offset="1" style="stop-color:#424242;stop-opacity:0"/>
                </linearGradient>
                <path style="opacity:0.4;fill:url(#SVGID_382_);" d="M214.5,565.7v0.6c0,0,0.1,0.3-0.3,0.3c-0.6,0.1-0.1-1.1-0.1-1.1L214.5,565.7z
                  "/>
                <linearGradient id="SVGID_383_" gradientUnits="userSpaceOnUse" x1="209.6895" y1="568.1055" x2="216.0931" y2="568.1055">
                  <stop  offset="0" style="stop-color:#4E4E4D"/>
                  <stop  offset="1" style="stop-color:#272626"/>
                </linearGradient>
                <path style="fill:url(#SVGID_383_);" d="M210.1,567.2c0.2-0.1,2.3-1,3.1-1.2c0.9-0.2,1.8-0.3,1.8-0.3s0.4-0.1,0.6,0.2
                  c0.2,0.6,0.4,1.2,0.4,1.5c0.1,0.3,0.2,0.8-0.3,1.6c-0.6,0.9-0.9,1.3-1,1.5c-0.1,0.1-0.5,0.1-1.4-0.4c-1.1-0.6-2.8-1.5-3.1-1.7
                  C209.8,568.3,209.3,567.7,210.1,567.2z"/>
                <linearGradient id="SVGID_384_" gradientUnits="userSpaceOnUse" x1="204.4185" y1="578.7852" x2="216.3856" y2="578.7852">
                  <stop  offset="0" style="stop-color:#4E4E4D"/>
                  <stop  offset="1" style="stop-color:#272626"/>
                </linearGradient>
                <path style="fill:url(#SVGID_384_);" d="M205.6,575.7c0,0-0.5,0.3-0.8,0c-0.3-0.3-0.5-0.6-0.2-0.9c0.3-0.2,2.7-1.7,6.1-0.9
                  c3.4,0.8,5.4,4.1,5.6,6.1c0.2,1.5,0,2.5-0.3,3.3c-0.2,0.6-0.6,0.4-0.9,0.3c-0.1-0.1-0.2-0.4-0.2-0.7c0.1-0.5,0.3-1.4,0.2-2.2
                  c-0.1-1.2-1-3.5-2.9-4.8C210.1,574.6,207.1,574.7,205.6,575.7z"/>
                <linearGradient id="SVGID_385_" gradientUnits="userSpaceOnUse" x1="215.8089" y1="579.0475" x2="204.6685" y2="579.0475">
                  <stop  offset="0" style="stop-color:#747474"/>
                  <stop  offset="1" style="stop-color:#424242;stop-opacity:0"/>
                </linearGradient>
                <path style="opacity:0.4;fill:url(#SVGID_385_);" d="M205.6,575.7c0,0-0.5,0.3-0.8,0c-0.3-0.3,0.2-0.4,0.5-0.7
                  c0.3-0.2,2.8-1.2,5.3-0.4c3.1,1,4.3,3.2,4.9,5.1c0.5,1.8,0.3,2.5,0,3.3c-0.2,0.6-0.1,0.7-0.4,0.6c-0.1-0.1-0.2-0.4-0.2-0.7
                  c0.1-0.5,0.3-1.4,0.2-2.2c-0.1-1.2-1-3.5-2.9-4.8C210.1,574.6,207.1,574.7,205.6,575.7z"/>
                <path style="fill:#C0BEBC;" d="M209.5,580.8l3.6-10.8l-0.9-0.5l-3.7,11.1c-0.4,0.1-0.7,0.5-0.7,0.9c0,0.5,0.4,1,1,1
                  c0.5,0,1-0.4,1-1C209.9,581.2,209.7,581,209.5,580.8z"/>
                <linearGradient id="SVGID_386_" gradientUnits="userSpaceOnUse" x1="232.8679" y1="576.4741" x2="232.8679" y2="569.8494">
                  <stop  offset="0" style="stop-color:#020000"/>
                  <stop  offset="1" style="stop-color:#513D3E"/>
                </linearGradient>
                <path style="fill:url(#SVGID_386_);" d="M226.6,574.5c0,0,0.2-0.2,0.3-0.9c0.1-0.7,0-2.4,0-2.4s5.5-0.1,7-0.3
                  c1.4-0.1,1.1-1.1,2.2-1.1c2.2,0,5.8,0,6.1,0c1.8,0,1.6,1.8,1.6,2.6c0,0.8-0.3,1.7-1.5,1.8c-0.6,0.1-3.4-0.1-6.3,0.4
                  c-3.2,0.6-6.5,1.8-6.5,1.8h-6.8l-0.9-0.9L226.6,574.5z"/>
                <linearGradient id="SVGID_387_" gradientUnits="userSpaceOnUse" x1="232.6913" y1="576.4741" x2="232.6913" y2="571.4218">
                  <stop  offset="0" style="stop-color:#424242;stop-opacity:0"/>
                  <stop  offset="1" style="stop-color:#747474"/>
                </linearGradient>
                <path style="opacity:0.4;fill:url(#SVGID_387_);" d="M226.6,574.5c0,0,0.2-0.2,0.3-0.9c0.1-0.7,2,2.1,2,2.1s2.1-2.9,4.7-3.7
                  c5.5-1.7,10,1.5,9.8,1.8c-0.1,0.1-0.3,0.4-0.7,0.5c-0.1,0-3.5-3.1-8.1-1.9c-3.7,1-5.2,4.2-5.2,4.2h-6.7l-0.9-0.9L226.6,574.5z"/>
                <linearGradient id="SVGID_388_" gradientUnits="userSpaceOnUse" x1="238.2964" y1="582.7685" x2="238.7518" y2="582.7685">
                  <stop  offset="0" style="stop-color:#747474"/>
                  <stop  offset="1" style="stop-color:#424242;stop-opacity:0"/>
                </linearGradient>
                <path style="opacity:0.4;fill:url(#SVGID_388_);" d="M238.5,582.3c0,0-0.6,0.4,0,1C238.5,583.3,239,582.9,238.5,582.3z"/>
                <linearGradient id="SVGID_389_" gradientUnits="userSpaceOnUse" x1="208.8786" y1="576.1713" x2="213.1508" y2="576.1713">
                  <stop  offset="0" style="stop-color:#747474"/>
                  <stop  offset="1" style="stop-color:#424242;stop-opacity:0"/>
                </linearGradient>
                <path style="opacity:0.4;fill:url(#SVGID_389_);" d="M213.2,570l-0.3-0.2l-3.8,10.9c0,0,0.6,0.3,0.6,0.8c0,0.6-0.7,0.9-0.7,0.9
                  c0.4,0,0.9-0.3,1-1c0-0.2-0.1-0.6-0.3-0.7L213.2,570z"/>
                <linearGradient id="SVGID_390_" gradientUnits="userSpaceOnUse" x1="222.113" y1="576.275" x2="244.1985" y2="576.275">
                  <stop  offset="0" style="stop-color:#4E4E4D"/>
                  <stop  offset="1" style="stop-color:#272626"/>
                </linearGradient>
                <path style="fill:url(#SVGID_390_);" d="M242.9,574.4c0.4,0.4,1.2,1.5,1.2,1.5s0.3,0.4-0.2,0.6c-0.5,0.2-1.3,0.6-1.3,0.6
                  s-0.4,0.2-0.8-0.2c-0.8-1.1-2.9-2.1-4.3-2.2c-1.5,0-2.5,0.1-4.1,1.1l0.6,0.9c0,0,0.3,0.5,0.7,1.2c0.2,0.3-1.3,0.4-1.6,0.4
                  c-0.3,0-3.3,0.4-3.3,0.4l-1.6,1.7c0,0-0.4,0.5-0.7-0.1c-0.5-0.9-0.8-0.8-1.6-0.8c-0.9,0-0.6-0.2-1.1,1.1l-2.3-2.4
                  c0,0-1.2-0.8,0.4-1.8l6.5,0.1c0,0,2-4.5,7.4-4.5C240.1,572,242.5,574,242.9,574.4z"/>
                <path style="fill:#6E5C5C;" d="M236.4,566.2c0.4,0.3,0.6,1.1,0.4,1.5c-0.4,1-1.7,4-4.9,4.3c-4.4,0.4-8,0.2-8.5-0.4
                  c-0.1-0.1-0.2-0.2-0.4-0.7c-0.2-0.5-0.3-1.1-0.2-1.3c0.2-0.3,0.3-0.4,0.7-0.5c2-0.2,7.4,0.5,9.2-0.3c0.5-0.2,2.3-2.6,2.6-2.7
                  C235.7,566,236,565.9,236.4,566.2z"/>
                <linearGradient id="SVGID_391_" gradientUnits="userSpaceOnUse" x1="214.8754" y1="571.9821" x2="228.2644" y2="571.9821">
                  <stop  offset="0" style="stop-color:#4E4E4D"/>
                  <stop  offset="1" style="stop-color:#272626"/>
                </linearGradient>
                <path style="fill:url(#SVGID_391_);" d="M216,567c0,0,1.3-0.4,4.2,1.1c2.5,1.4,2.9,1.4,2.9,2.2c0.1,2.4,3.7,1.4,4.5,1.6
                  c0.8,0.2-0.1,2.5-0.1,2.5l0.8,2.4l-5.5,0c0,0-0.8-1.3-1.6-1.7c-3.8-1.7-6.1-3.9-6.1-3.9s-0.5-0.3-0.2-1.3L216,567z"/>
                <path style="fill:#C0BEBC;" d="M220.7,582.2c0,1,0.8,1.8,1.8,1.8c1,0,1.8-0.8,1.8-1.8c0-1-0.8-1.8-1.8-1.8
                  C221.5,580.4,220.7,581.2,220.7,582.2z M221.4,582.2c0-0.6,0.5-1.1,1.1-1.1s1.1,0.5,1.1,1.1c0,0.6-0.5,1.1-1.1,1.1
                  S221.4,582.8,221.4,582.2z"/>
                <path style="fill:#C0BEBC;" d="M222.7,581.3c0,1.4,1.1,2.5,2.5,2.5c1.4,0,2.5-1.1,2.5-2.5c0-1.4-1.1-2.5-2.5-2.5
                  C223.8,578.8,222.7,579.9,222.7,581.3z M223.7,581.3c0-0.9,0.7-1.6,1.6-1.6c0.9,0,1.6,0.7,1.6,1.6c0,0.9-0.7,1.6-1.6,1.6
                  C224.4,582.9,223.7,582.2,223.7,581.3z"/>
                <linearGradient id="SVGID_392_" gradientUnits="userSpaceOnUse" x1="223.6568" y1="581.3516" x2="226.814" y2="581.3516">
                  <stop  offset="0" style="stop-color:#D7D7D7"/>
                  <stop  offset="1" style="stop-color:#E3E3E2"/>
                </linearGradient>
                <path style="fill:url(#SVGID_392_);" d="M223.7,581.4c0,0.9,0.7,1.6,1.6,1.6c0.9,0,1.6-0.7,1.6-1.6c0-0.9-0.7-1.6-1.6-1.6
                  C224.4,579.8,223.7,580.5,223.7,581.4z"/>
                <linearGradient id="SVGID_393_" gradientUnits="userSpaceOnUse" x1="209.2146" y1="566.8347" x2="208.6012" y2="566.8347">
                  <stop  offset="0" style="stop-color:#747474"/>
                  <stop  offset="1" style="stop-color:#424242;stop-opacity:0"/>
                </linearGradient>
                <rect x="208.6" y="564.2" style="opacity:0.4;fill:url(#SVGID_393_);" width="0.6" height="5.3"/>
                <linearGradient id="SVGID_394_" gradientUnits="userSpaceOnUse" x1="232.2529" y1="570.8925" x2="239.7578" y2="570.8925">
                  <stop  offset="0" style="stop-color:#424242;stop-opacity:0"/>
                  <stop  offset="1" style="stop-color:#747474"/>
                </linearGradient>
                <path style="opacity:0.4;fill:url(#SVGID_394_);" d="M239.4,570.3c0.6-0.2,0.4-0.4-0.1-0.4c-1.2,0-2.9,0-2.9,0s-0.7-0.1-1,0.3
                  c-0.4,0.5-1.6,1.7-3.2,1.8C232.3,571.9,237,571,239.4,570.3z"/>
                <linearGradient id="SVGID_395_" gradientUnits="userSpaceOnUse" x1="220.2062" y1="572.5892" x2="225.2411" y2="572.5892">
                  <stop  offset="0" style="stop-color:#747474"/>
                  <stop  offset="1" style="stop-color:#424242;stop-opacity:0"/>
                </linearGradient>
                <path style="opacity:0.4;fill:url(#SVGID_395_);" d="M225.2,576.9l-1.3-5.1c0,0-0.3-0.2-0.7-0.6c-0.2-0.3-0.3-1.1-0.3-1.3
                  c-0.2-0.4-1.3-1-1.3-1l-1.4-0.8c0,0,0.1,0,0.7,1.1c0.7,1.1,0.2,3.1,1.5,4.6c0.7,0.8,1,1.8,1.4,2.4c-0.3-0.3-1.4,0.1-1.4,0.1
                  l0.3,0.5l1.5,0L225.2,576.9z"/>
                <linearGradient id="SVGID_396_" gradientUnits="userSpaceOnUse" x1="217.3945" y1="575.0357" x2="219.0825" y2="573.6193">
                  <stop  offset="0" style="stop-color:#747474"/>
                  <stop  offset="1" style="stop-color:#424242;stop-opacity:0"/>
                </linearGradient>
                <path style="opacity:0.4;fill:url(#SVGID_396_);" d="M215.1,571.3c0,0,2.1,2.9,3.7,3.5s3.1,2.2,3.1,2.2l-0.5,0.3
                  c0,0-3.5-1.8-4.3-2.5C215.6,573.2,215.1,571.3,215.1,571.3z"/>
                <linearGradient id="SVGID_397_" gradientUnits="userSpaceOnUse" x1="212.2244" y1="568.1135" x2="215.9608" y2="568.1135">
                  <stop  offset="0" style="stop-color:#747474"/>
                  <stop  offset="1" style="stop-color:#424242;stop-opacity:0"/>
                </linearGradient>
                <path style="opacity:0.4;fill:url(#SVGID_397_);" d="M214.9,565.7c0,0,0.6-0.2,0,1.6c-0.6,1.8-2.7,2.2-2.7,2.2s1.5,0.8,1.8,0.9
                  c0.2,0.1,0.6,0.3,0.9-0.2s1.1-3.2,1.1-3.2l-0.3-1.1C215.6,566,215.7,565.6,214.9,565.7z"/>
                <linearGradient id="SVGID_398_" gradientUnits="userSpaceOnUse" x1="223.0901" y1="576.9698" x2="243.3606" y2="576.9698">
                  <stop  offset="0" style="stop-color:#424242;stop-opacity:0"/>
                  <stop  offset="1" style="stop-color:#747474"/>
                </linearGradient>
                <path style="opacity:0.4;fill:url(#SVGID_398_);" d="M223.1,578.7c0,0-0.1-1.4,2.1-1c2.3,0.4,1.6,1,3.5,0.6
                  c1.9-0.4,2.4-3.8,5.9-4.5c3.6-0.8,6.3-0.1,8.7,3l-0.8,0.4c0,0-0.4,0.2-0.8-0.2c-0.7-0.9-2.7-2.2-4.7-2.2c-1.6,0.1-2.7,0.5-3.7,1.1
                  l1.1,1.7c0,0,0.6,0.5-0.3,0.6c-0.9,0.1-4.4,0.5-4.4,0.5l-1.6,1.7c0,0-0.4,0.4-0.7-0.1c-0.9-1.7-2.8-1.7-3.8-0.9L223.1,578.7z"/>
                <linearGradient id="SVGID_399_" gradientUnits="userSpaceOnUse" x1="227.7775" y1="580.2687" x2="218.7217" y2="580.2687">
                  <stop  offset="0" style="stop-color:#747474"/>
                  <stop  offset="1" style="stop-color:#424242;stop-opacity:0"/>
                </linearGradient>
                <path style="opacity:0.4;fill:url(#SVGID_399_);" d="M221.9,577c0,0-0.4,0.4,0.1,1c0.4,0.6,1.2,1.1,1.2,1.1l-1,0.5
                  c0,0-0.9,0.2-1.4,0c-0.6-0.2-1.1-0.3-1.8,0.7c-0.6,1,0,2,0,2s0.2,0.3,0.5,0.3c0.5,0,1.5,0,1.5,0s-0.4-1.9,2-1.8
                  c0,0,0.5-1.7,2.4-1.6c1.4,0.1,2.1,1.3,2.1,2c0,0.7-0.4,1.6-0.9,1.9s-1.4,1.5-3.2-0.3c-0.4-0.4-0.6-1.4-0.6-1.6
                  c0,0-0.2,1.6,1.3,2.4c1.8,1.1,3.4-0.7,3.4-0.7s0.5-1.1,0.3-1.9c-0.2-0.9-0.8-2-2.4-2.1c-1.4-0.1-2.3,1-2.4,1.6
                  c0,0-0.8-0.2-1.5,0.3c-0.7,0.5-0.7,1.3-0.7,1.3l-1,0c0,0-0.2-0.1-0.2-0.3c0-0.1,0-0.3,0-0.5c0-0.8,0.5-0.9,1-1.2l0.3,0.6l2.6-1.4
                  l-0.9-1c0,0-1-0.7,0-1.5L221.9,577"/>
                <g>

                    <linearGradient id="SVGID_400_" gradientUnits="userSpaceOnUse" x1="61.8681" y1="34200.3516" x2="66.4923" y2="34198.3984" gradientTransform="matrix(0.1021 -0.6133 -0.4431 -4.600000e-03 15373.3057 780.0923)">
                    <stop  offset="0" style="stop-color:#4E4E4D"/>
                    <stop  offset="1" style="stop-color:#272626"/>
                  </linearGradient>
                  <path style="fill:url(#SVGID_400_);" d="M223.5,583.4L223.5,583.4c0,0.1,0.1,0.3,0.3,0.3l4.5,0c0.2,0,0.4-0.1,0.4-0.3l0,0
                    c0-0.1-0.1-0.3-0.3-0.3l-4.5,0C223.7,583.1,223.5,583.2,223.5,583.4z"/>
                  <g>
                    <defs>
                      <path id="SVGID_403_" d="M221.5,563.5c-0.8,0.2-0.7,1.5-0.4,1.7c0.3,0.2,2.2,0,2-0.9c-0.2-0.9,4.6-3.9,5.1-4.6
                        c0.4-0.7,2.3-5.3,2.4-6.1c0.2-1.6-1.7-2.3-2.6-1.5c-0.7,0.7-1.7,5.7-2.3,6.7C225,559.8,222.3,563.3,221.5,563.5z"/>
                    </defs>
                    <clipPath id="SVGID_401_">
                      <use xlink:href="#SVGID_403_"  style="overflow:visible;"/>
                    </clipPath>

                      <linearGradient id="SVGID_402_" gradientUnits="userSpaceOnUse" x1="-8137.5063" y1="170.8799" x2="-8126.6313" y2="170.8799" gradientTransform="matrix(0.9804 -0.1971 0.1971 0.9804 8163.2622 -1211.8181)">
                      <stop  offset="0" style="stop-color:#FAB11F"/>
                      <stop  offset="1" style="stop-color:#FFC55D"/>
                    </linearGradient>
                    <polygon style="clip-path:url(#SVGID_401_);fill:url(#SVGID_402_);" points="230.8,563.6 220.2,565.7 217.7,553.5 228.4,551.4
                              "/>

                      <linearGradient id="SVGID_404_" gradientUnits="userSpaceOnUse" x1="-8117.8115" y1="-37.0918" x2="-8110.2617" y2="-35.4275" gradientTransform="matrix(0.9766 -0.2153 0.2153 0.9766 8157.1211 -1151.3354)">
                      <stop  offset="0" style="stop-color:#747474;stop-opacity:0"/>
                      <stop  offset="1" style="stop-color:#424242"/>
                    </linearGradient>
                    <path style="opacity:0.3;clip-path:url(#SVGID_401_);fill:url(#SVGID_404_);" d="M221.3,564.9c0.2,0.3,1.1,0.8,1.4,0.8
                      c0.3,0,6.3-9.8,6.3-9.8l-1.1-1.1c0,0-1.5,4.4-2.7,5.6C224,561.7,221,564.4,221.3,564.9z"/>
                  </g>

                    <linearGradient id="SVGID_405_" gradientUnits="userSpaceOnUse" x1="-7789.0674" y1="2714.7078" x2="-7785.6519" y2="2714.7078" gradientTransform="matrix(0.9978 6.600000e-02 -6.600000e-02 0.9978 8175.3579 -1613.6)">
                    <stop  offset="0" style="stop-color:#8D2D37"/>
                    <stop  offset="1" style="stop-color:#781A26"/>
                  </linearGradient>
                  <path style="fill:url(#SVGID_405_);" d="M226.3,579.2l-0.1,2.7l-1.8,0.4c-0.2,0-0.3,0.2-0.4,0.4l0,0c0,0.2,0.1,0.3,0.3,0.3l2.6,0
                    c0.3,0,0.5-0.3,0.5-0.6l-0.6-3.4L226.3,579.2z"/>
                  <g>
                    <defs>
                      <path id="SVGID_408_" d="M223.4,568c0.3-1.2,4.4-3.1,7.4-4.6l5.1,0.3c-0.6,7.4-8.7,6.3-8.7,7.1c-0.1,0.8,1.7,2.6,1.5,5.5
                        s-2.3,4.6-2.3,4.6S223,569.5,223.4,568z"/>
                    </defs>
                    <clipPath id="SVGID_406_">
                      <use xlink:href="#SVGID_408_"  style="overflow:visible;"/>
                    </clipPath>

                      <linearGradient id="SVGID_407_" gradientUnits="userSpaceOnUse" x1="-7191.2334" y1="2534.6414" x2="-7171.4346" y2="2538.0349" gradientTransform="matrix(1.0982 0.1061 -9.620000e-02 0.9954 8361.5039 -1191.8052)">
                      <stop  offset="0" style="stop-color:#25334D"/>
                      <stop  offset="1" style="stop-color:#3E537D"/>
                    </linearGradient>
                    <polygon style="clip-path:url(#SVGID_406_);fill:url(#SVGID_407_);" points="220,581.2 239.9,579.7 241.1,560.4 221.2,564.8
                              "/>

                      <linearGradient id="SVGID_409_" gradientUnits="userSpaceOnUse" x1="-2307.1736" y1="561.305" x2="-2299.1616" y2="561.305" gradientTransform="matrix(1 0 0 1 2541.5298 0)">
                      <stop  offset="0" style="stop-color:#747474"/>
                      <stop  offset="1" style="stop-color:#424242;stop-opacity:0"/>
                    </linearGradient>
                    <path style="opacity:0.75;clip-path:url(#SVGID_406_);fill:url(#SVGID_409_);" d="M234.4,559.8c-0.1,0.4,0,0.9,0.2,1.2
                      c0.2,0.4,0.6,0.6,0.9,0.9c1.3,0.9,2.8,1.5,4.3,1.6c0.6,0.1,1.2,0.1,1.7-0.2c0.5-0.3,0.9-0.8,0.8-1.4c-0.1-0.5-0.5-0.9-1-1.2
                      c-1.2-0.8-2.5-1.3-3.9-1.6C236.6,559.1,234.8,558.6,234.4,559.8z"/>

                      <linearGradient id="SVGID_410_" gradientUnits="userSpaceOnUse" x1="-7821.1123" y1="2535.4595" x2="-7805.5063" y2="2535.4595" gradientTransform="matrix(0.9954 9.620000e-02 -9.620000e-02 0.9954 8253.6104 -1201.9521)">
                      <stop  offset="0" style="stop-color:#747474"/>
                      <stop  offset="1" style="stop-color:#424242;stop-opacity:0"/>
                    </linearGradient>
                    <path style="opacity:0.75;clip-path:url(#SVGID_406_);fill:url(#SVGID_410_);" d="M239.3,566.6c0.7-0.8,1.2-1.8,1.4-2.9
                      c0.3-1.1,0.3-2.3-0.3-3.2c-0.5-0.9-1.5-1.3-2.4-1.1c-0.9,0.2-1.7,0.8-2.2,1.7c-0.4,0.7-0.6,1.5-1.1,2.1
                      c-0.9,1.3-4.2,3.8-5.4,3.8c-1.1,0-2.3,0.3-3.2,1.2c-0.8,0.8-1.4,2-1.7,3.2c-0.6,2.6-0.9,5.7,0.8,7.6c0.4,0.4,0.3,2,0.8,2.1
                      c0.5,0.2,2.4-1,2.8-1.4c0.6-0.6,0.7-1.7,0.6-2.7c-0.1-1.3-0.4-2.6-0.8-3.7c-0.2-0.5-0.4-1-0.5-1.6c-0.1-0.6,0.2-0.7,0.5-1.1
                      c0.4-0.4,1-0.7,1.4-0.3c1,0.7,3.9-1.5,5.2-1.6c1-0.1,2-0.5,2.9-1.2C238.7,567.3,239,566.9,239.3,566.6z"/>
                  </g>
                  <g>
                    <defs>
                      <path id="SVGID_413_" d="M227.1,553.6c0.2-1,1.5-2.9,3-2.8c7.7,0.9,8.1,11,5.8,13.5c-3.3-0.7-5.1-0.9-5.1-0.9
                        C232.4,559.9,227,554.5,227.1,553.6z"/>
                    </defs>
                    <clipPath id="SVGID_411_">
                      <use xlink:href="#SVGID_413_"  style="overflow:visible;"/>
                    </clipPath>
                    <g style="clip-path:url(#SVGID_411_);">

                        <linearGradient id="SVGID_412_" gradientUnits="userSpaceOnUse" x1="9877.1797" y1="2380.6489" x2="9895.252" y2="2380.6489" gradientTransform="matrix(-1.0155 -0.4271 -0.4368 0.9076 11312.209 2617.9226)">
                        <stop  offset="0" style="stop-color:#50BFB3"/>
                        <stop  offset="1" style="stop-color:#10AD9B"/>
                      </linearGradient>
                      <polygon style="fill:url(#SVGID_412_);" points="223.8,561.7 238.3,567.8 238.6,549.3 226.2,547.2           "/>
                    </g>

                      <linearGradient id="SVGID_414_" gradientUnits="userSpaceOnUse" x1="-8116.0327" y1="858.248" x2="-8125.4126" y2="858.248" gradientTransform="matrix(0.9863 0.165 -0.165 0.9863 8380.6357 1048.8436)">
                      <stop  offset="0" style="stop-color:#424242;stop-opacity:0"/>
                      <stop  offset="1" style="stop-color:#747474"/>
                    </linearGradient>
                    <path style="opacity:0.5;clip-path:url(#SVGID_411_);fill:url(#SVGID_414_);" d="M226.9,550.6c0.6-0.4,1.3-0.7,1.9-0.8
                      c1.1-0.1,2.1,0.4,2.9,1.2c0.8,0.7,1.3,1.7,1.9,2.6c0.3,0.6,0.7,1.2,0.6,1.9c-0.1,0.7-0.6,1.2-0.7,1.9c-0.2,1.1,0.4,2.3-0.1,3.2
                      c-0.4,0.7-1.5,0.9-2.2,0.6c-1.4-0.5-2.9-2.1-3.1-3.5c-0.1-0.7,0-1.3-0.6-1.6c-0.6-0.3-1.1-0.6-1.5-1.1
                      C224.4,553.6,225.4,551.7,226.9,550.6z"/>
                  </g>
                  <g style="display:none;">
                    <defs>
                      <path id="SVGID_417_" d="M228.4,553.8c-0.2,0.4-0.3,0.9-0.3,1.3c0,0.5,0.4,1,0.7,1.4c0.5,0.5,1,0.9,1.7,1.3
                        c1.2,0.6,2.5,1,3.8,1c0.7,0,1.4-0.5,1.8-0.6c0.6-0.2,0.9,0.9,1,1.3c0.8,0,2.8-0.6,3.3-1.3c0.5-0.6,0.3-1.5,0.1-2.3
                        c-0.5-2-1.1-4.2-3.2-5.6c-3.1-2-5.5-0.3-4.7,0.8c0,0.1-2.1,0.1-2.3,0.1c-1,0.4-1.5,1.5-1.9,2.4
                        C228.5,553.7,228.4,553.7,228.4,553.8z M229.8,555.7c-0.4-0.4-0.5-0.5-0.4-1.1c0-0.5,0.2-1,0.5-1.5c0.6-0.9,1.8-1.4,2.9-1.3
                        c1.3-0.2,3.9,4.6,3.5,5.1c0,0-1,0.6-1.6,0.6c-0.7,0.1-1.5,0.1-2.1-0.1c-0.7-0.2-1.7-0.2-2.3-0.7
                        C230,556.6,230,555.9,229.8,555.7z"/>
                    </defs>
                    <clipPath id="SVGID_415_" style="display:inline;">
                      <use xlink:href="#SVGID_417_"  style="overflow:visible;"/>
                    </clipPath>

                      <linearGradient id="SVGID_416_" gradientUnits="userSpaceOnUse" x1="11063.0723" y1="140.8715" x2="11079.3125" y2="140.8715" gradientTransform="matrix(-0.929 -5.160000e-02 -4.510000e-02 0.8121 10526.1982 1010.8541)">
                      <stop  offset="0" style="stop-color:#D6D6D5"/>
                      <stop  offset="1" style="stop-color:#E3E3E2"/>
                    </linearGradient>
                    <polygon style="display:inline;clip-path:url(#SVGID_415_);fill:url(#SVGID_416_);" points="226.8,559.4 241.9,560.2
                      242.6,548.6 227.5,547.8         "/>

                      <linearGradient id="SVGID_418_" gradientUnits="userSpaceOnUse" x1="10711.5859" y1="2432.3855" x2="10696.252" y2="2431.7793" gradientTransform="matrix(-0.9375 -0.3479 -0.3479 0.9375 11115.4307 1999.8242)">
                      <stop  offset="0" style="stop-color:#434444"/>
                      <stop  offset="0.9143" style="stop-color:#747474;stop-opacity:0"/>
                    </linearGradient>
                    <path style="display:inline;opacity:0.4;clip-path:url(#SVGID_415_);fill:url(#SVGID_418_);" d="M233.3,554.1
                      c0.4,0.4,1.3,0.9,1.1,1.5c-0.2,0.5-0.8,1-1.2,1.2c-0.8,0.3-1.9,0.5-2.6-0.1c-1-0.9,0.3-2.1,0.3-3.2c0-0.8-0.7-1.7-1.5-1.7
                      c-0.5,0-0.9,0.3-1.2,0.6c-0.9,0.8-1.4,2-1.4,3.2c0,2.5,1.7,3.3,3.6,4.3c2.7,1.4,5.9,1.8,8.8,1c0.8-0.2,1.6-0.5,2.1-1.2
                      c0.5-0.8,0.4-1.8,0.3-2.7c-0.1-0.6-0.2-1.2-0.3-1.8c-0.1-0.4-0.2-0.8-0.4-1.2c-0.2-0.5-0.6-1.2-1.1-1.4c-0.6-0.4-1,0.2-1.1,0.8
                      c-0.1,0.5,0.6,4.2,0.1,4.5c-0.4,0.2-1.1-1.9-1.7-2.8c-0.5-0.7-1.2-1.5-1.7-2.1c-0.6-0.7-2.5-1.9-2.5-1.9s-1.2-0.1-2,0.1
                      c-0.2,0-0.5,0.2-0.6,0.3c-0.1,0.1-0.6,0.3-0.5,0.5c0.1,0.2,0.8,0.3,1,0.3c0.3,0.1,0.6,0.1,0.8,0.1c0.2,0,0.5-0.1,0.7-0.1
                      c0.5,0.1,0.4,0.7,0.6,1.1C232.8,553.6,233,553.9,233.3,554.1z"/>
                  </g>
                  <g>
                    <g>
                      <defs>
                        <path id="SVGID_421_" d="M229.2,551.6c-0.6,0-1.3-0.8-1.2-1.2c0.1-0.7,0.1-2.6-1.4-2.9c-1.1-0.2-3.1,0.2-3.2,2.4
                          c0,1.5,1,2.4,1.5,2.6c0.5,0.3,1.6-0.5,1.6-0.5s1.1,1.3,2.3,1.3C228.7,553.3,229.8,551.7,229.2,551.6z"/>
                      </defs>
                      <clipPath id="SVGID_419_">
                        <use xlink:href="#SVGID_421_"  style="overflow:visible;"/>
                      </clipPath>

                        <linearGradient id="SVGID_420_" gradientUnits="userSpaceOnUse" x1="-7050.4062" y1="-770.3785" x2="-7043.7729" y2="-771.1982" gradientTransform="matrix(1.1172 -0.2099 0.1846 0.9828 8241.6299 -171.1686)">
                        <stop  offset="0" style="stop-color:#FAB11F"/>
                        <stop  offset="1" style="stop-color:#FFC55D"/>
                      </linearGradient>
                      <polygon style="clip-path:url(#SVGID_419_);fill:url(#SVGID_420_);" points="230.3,553.5 223.7,554.7 222.4,547.5 228.9,546.3
                                  "/>

                        <linearGradient id="SVGID_422_" gradientUnits="userSpaceOnUse" x1="-7780.8726" y1="-770.9089" x2="-7785.7124" y2="-770.3326" gradientTransform="matrix(0.9828 -0.1846 0.1846 0.9828 8017.7085 -128.6933)">
                        <stop  offset="0" style="stop-color:#424242"/>
                        <stop  offset="1" style="stop-color:#747474;stop-opacity:0"/>
                      </linearGradient>
                      <path style="opacity:0.5;clip-path:url(#SVGID_419_);fill:url(#SVGID_422_);" d="M227.8,550.5c0,0.1-0.1,0.3-0.1,0.4
                        c-0.1,0.4,0,0.7,0.1,1.1c0.2,0.7,0.8,1.3,1.5,1.5c-0.5,0.5-1.3,0.6-1.9,0.4c-0.5-0.2-1.1-0.6-1.2-1.2c-0.1-0.5,0.5-0.9,0.8-1.3
                        c0.2-0.2,0.3-0.5,0.3-0.8c0-0.5-0.4-1-0.8-1.2c-0.9-0.5-1.9-0.4-2.8,0.1c-0.2,0.1-0.4,0.2-0.5,0.1c-0.1-0.1-0.1-1.2-0.1-1.3
                        c0.2-0.1,0.5-0.2,0.7-0.3c0.4-0.2,0.9-0.3,1.3-0.6c0.4-0.3,1-0.4,1.5-0.3c0.5,0.1,0.9,0.5,1.2,0.9c0.2,0.3,0.3,0.7,0.3,1
                        c0.1,0.3,0.2,0.7,0.2,1c0,0.1-0.2,0.3-0.2,0.4C227.9,550.4,227.9,550.4,227.8,550.5z"/>

                        <linearGradient id="SVGID_423_" gradientUnits="userSpaceOnUse" x1="-5985.0161" y1="2021.4934" x2="-5982.1621" y2="2021.4934" gradientTransform="matrix(1.242 0.3127 -0.3363 1.3357 8336.4707 -279.0666)">
                        <stop  offset="0" style="stop-color:#424242"/>
                        <stop  offset="1" style="stop-color:#747474;stop-opacity:0"/>
                      </linearGradient>
                      <path style="opacity:0.5;clip-path:url(#SVGID_419_);fill:url(#SVGID_423_);" d="M227.1,548.2l-0.3,2.1c0-0.2-0.7-0.4-0.9-0.4
                        c-0.4-0.1-0.8-0.3-1.2,0c-0.3,0.2-0.5,0.5-0.5,0.9c-0.1,0.4,0,0.7,0.1,1.1c-0.3,0.1-0.6,0.1-0.9,0.2c-0.5-0.8-0.4-1.6-0.1-2.4
                        c0.2-0.5,0.3-1.1,0.4-1.6L227.1,548.2z"/>
                    </g>
                    <g>
                      <defs>
                        <path id="SVGID_426_" d="M227.2,546.8c0.9,0.5,1.5,1.2,1.5,2.2c0,0.4,0.4,1.4,0.1,1.7c-0.2,0.2-0.6,0.2-0.9,0.2
                          c-0.3,0-0.3-0.8-0.6-1c0,0.2,0.1,0.5,0.1,0.7c-0.1,0.9-0.8,1.5-0.8,1.5s-0.5,0.4-0.7,0.2c0.4-0.3,1-0.9,1-1.7
                          c0-0.5,0-0.5,0-0.7c-0.1-0.3-0.6-0.4-1-0.5c-1.6-0.6-2.4-0.3-2.4-0.3c-0.4,0-0.6-0.7-0.5-1.3c0.2-0.5,1-1.2,2.2-1.4
                          C225.7,546.5,226.4,546.4,227.2,546.8z"/>
                      </defs>
                      <clipPath id="SVGID_424_">
                        <use xlink:href="#SVGID_426_"  style="overflow:visible;"/>
                      </clipPath>

                        <linearGradient id="SVGID_425_" gradientUnits="userSpaceOnUse" x1="10128.5039" y1="896.3268" x2="10135.2988" y2="896.3268" gradientTransform="matrix(-1.098 -7.790000e-02 -6.920000e-02 0.9751 11412.4893 464.3304)">
                        <stop  offset="0" style="stop-color:#29344A"/>
                        <stop  offset="1" style="stop-color:#334D80"/>
                      </linearGradient>
                      <polygon style="clip-path:url(#SVGID_424_);fill:url(#SVGID_425_);" points="229.1,552.7 221.7,552.2 222.1,545.4 229.6,545.9
                                  "/>

                        <linearGradient id="SVGID_427_" gradientUnits="userSpaceOnUse" x1="10730.5195" y1="918.1937" x2="10734.9297" y2="918.1937" gradientTransform="matrix(-0.9975 -7.080000e-02 -7.080000e-02 0.9975 10998.5127 394.3021)">
                        <stop  offset="0" style="stop-color:#434444"/>
                        <stop  offset="0.9143" style="stop-color:#747474;stop-opacity:0"/>
                      </linearGradient>
                      <path style="opacity:0.4;clip-path:url(#SVGID_424_);fill:url(#SVGID_427_);" d="M229,547.8c0.1,0,0.1-0.1,0.2-0.1
                        c0.1,0,0.2,0.1,0.2,0.2c0.3,0.4,0.5,1,0.5,1.5c0,0.5-0.1,1.1-0.5,1.4c-0.1,0.1-0.3,0.2-0.4,0.3c-0.2,0.2-0.4,0.5-0.5,0.7
                        c-0.3,0.4-0.7,0.8-1.2,0.9c-0.5,0.2-1.1,0.2-1.5-0.2c-0.2-0.2-0.4-0.5-0.3-0.7c0.1-0.3,0.4-0.5,0.5-0.8c0.1-0.2,0-0.5,0-0.7
                        c-0.1-0.2-0.2-0.5-0.3-0.7c-0.1-0.2-0.1-0.5,0-0.7c0.1-0.2,0.3-0.4,0.6-0.4c0.2,0,0.3,0.1,0.5,0.2c0.2,0.1,0.4,0.1,0.4-0.1
                        c0.1-0.2,0-0.4,0-0.6c0-0.2,0.2-0.2,0.4-0.2c0.2,0,0.3,0.1,0.4,0.2c0.1,0.1,0.3,0.2,0.4,0.2c0.2,0,0.4,0,0.5-0.1
                        C228.9,548,228.9,547.9,229,547.8z"/>
                    </g>
                  </g>
                  <g>
                    <defs>
                      <path id="SVGID_430_" d="M222.7,563.3c-0.9,0.2-0.8,1.5-0.5,1.7c0.3,0.2,2.4,0,2.2-0.9c-0.2-0.9,5-4,5.5-4.7
                        c0.5-0.7,2.6-5.4,2.7-6.2c0.2-1.6-1.8-2.3-2.8-1.5c-0.8,0.7-1.9,5.8-2.6,6.8C226.5,559.5,223.6,563.1,222.7,563.3z"/>
                    </defs>
                    <clipPath id="SVGID_428_">
                      <use xlink:href="#SVGID_430_"  style="overflow:visible;"/>
                    </clipPath>

                      <linearGradient id="SVGID_429_" gradientUnits="userSpaceOnUse" x1="-6564.2168" y1="170.8658" x2="-6552.5181" y2="170.8658" gradientTransform="matrix(1.2196 -0.2452 0.1971 0.9804 8192.0537 -1217.6183)">
                      <stop  offset="0" style="stop-color:#FAB11F"/>
                      <stop  offset="1" style="stop-color:#FFC55D"/>
                    </linearGradient>
                    <polygon style="clip-path:url(#SVGID_428_);fill:url(#SVGID_429_);" points="235.5,562.7 221.2,565.6 218.8,553.3 233,550.4
                              "/>

                      <linearGradient id="SVGID_431_" gradientUnits="userSpaceOnUse" x1="-8116.2173" y1="-36.563" x2="-8106.7266" y2="-34.4707" gradientTransform="matrix(0.9766 -0.2153 0.2153 0.9766 8157.1211 -1151.3354)">
                      <stop  offset="0" style="stop-color:#747474;stop-opacity:0"/>
                      <stop  offset="1" style="stop-color:#424242"/>
                    </linearGradient>
                    <path style="opacity:0.3;clip-path:url(#SVGID_428_);fill:url(#SVGID_431_);" d="M223.4,563.6c-0.4,0.5-0.6,1.1-0.3,1.5
                      c0.2,0.3,0.5,0.4,0.9,0.4c0.3,0,0.7-0.2,1-0.3c1.7-0.8,3.3-1.8,4.8-3.1c0.7-0.6,1.2-1.1,1.4-2c0.2-1,1.6-4.7,1.6-4.7l0,0
                      c-1-0.3-2,0.2-2.5,1.1c-0.8,1.4-2,3.4-2.8,4c-1,0.7-2.1,1.3-3,2.1C224,562.8,223.7,563.1,223.4,563.6z"/>

                      <linearGradient id="SVGID_432_" gradientUnits="userSpaceOnUse" x1="-6158.5181" y1="-4692.8672" x2="-6161.9478" y2="-4697.1348" gradientTransform="matrix(0.6567 -0.7541 0.7541 0.6567 7816.5581 -1007.9683)">
                      <stop  offset="0" style="stop-color:#424242"/>
                      <stop  offset="1" style="stop-color:#747474;stop-opacity:0"/>
                    </linearGradient>
                    <path style="opacity:0.3;clip-path:url(#SVGID_428_);fill:url(#SVGID_432_);" d="M230.1,550.2c0.3-0.3,0.7-0.4,1.2-0.1
                      c0.3,0.2,0.6,0.6,0.8,1c0.9,1.7,2,4.3,0.8,6.2c-0.5,0.7-1.3,1.3-2.1,1.3c-1.1,0.1-2.2-0.7-2.6-1.7c-0.4-1-0.3-2.2,0.1-3.3
                      c0.4-1,1-1.8,1.5-2.7C229.8,550.6,229.9,550.4,230.1,550.2z"/>
                  </g>
                </g>
                <linearGradient id="SVGID_433_" gradientUnits="userSpaceOnUse" x1="227.1771" y1="569.0684" x2="236.1713" y2="569.0684">
                  <stop  offset="0" style="stop-color:#747474"/>
                  <stop  offset="1" style="stop-color:#424242;stop-opacity:0"/>
                </linearGradient>
                <path style="opacity:0.4;fill:url(#SVGID_433_);" d="M229.2,572.1l-1.4,0c0,0-0.8-1.4-0.5-1.6c0.3-0.1,1.2-0.3,2.3-0.5
                  c1.2-0.2,4.1-0.9,5.6-3.7c0,0,0.2-0.7,0.8-0.4s-0.6,3.7-1.9,4.5C231,572.2,229.2,572.1,229.2,572.1z"/>
              </g>
              <g>
                <g>
                  <g>
                    <polygon style="fill:#B2B2B2;" points="260.4,484.1 222.2,484.1 222.2,464.8 216.7,462.5 209.3,459.4 224.9,459.4 224.9,465.4
                      260.4,465.5         "/>
                    <g>
                      <defs>
                        <path id="SVGID_436_" d="M260.4,484.1h-38.2v-19.3h-11.8c-1.8,0-3.5,0.9-4.6,2.3l-8.3,11.5h-6.4c-2.3,0-4.1,1.9-4.1,4.1v8.7
                          h73.5V484.1z"/>
                      </defs>
                      <clipPath id="SVGID_434_">
                        <use xlink:href="#SVGID_436_"  style="overflow:visible;"/>
                      </clipPath>
                      <rect x="218.2" y="464.7" style="clip-path:url(#SVGID_434_);fill:#D7D7D6;" width="17.5" height="27.3"/>
                      <linearGradient id="SVGID_435_" gradientUnits="userSpaceOnUse" x1="186.9229" y1="477.9066" x2="264.3645" y2="477.9066">
                        <stop  offset="0" style="stop-color:#ED3F50"/>
                        <stop  offset="1" style="stop-color:#D72538"/>
                      </linearGradient>
                      <rect x="186.9" y="464.3" style="clip-path:url(#SVGID_434_);fill:url(#SVGID_435_);" width="77.4" height="27.1"/>
                      <g style="clip-path:url(#SVGID_434_);">
                        <defs>
                          <path id="SVGID_439_" d="M219,468.8v7.6c0,1.1-0.9,2.1-2.1,2.1H204c-1.4,0-2.3-1.6-1.4-2.8l4.8-6.7c1-1.4,2.5-2.2,4.2-2.2
                            h5.3C218,466.8,219,467.7,219,468.8z"/>
                        </defs>
                        <clipPath id="SVGID_437_">
                          <use xlink:href="#SVGID_439_"  style="overflow:visible;"/>
                        </clipPath>
                        <rect x="198.9" y="465.4" style="clip-path:url(#SVGID_437_);fill:#D7D7D6;" width="20.1" height="14.4"/>

                          <linearGradient id="SVGID_438_" gradientUnits="userSpaceOnUse" x1="2864.0867" y1="2532.0488" x2="2835.4136" y2="2503.3757" gradientTransform="matrix(-0.7071 0.7071 -0.7071 -0.7071 4023.3052 233.6676)">
                          <stop  offset="0" style="stop-color:#D7D7D6"/>
                          <stop  offset="1" style="stop-color:#D7D7D6;stop-opacity:0"/>
                        </linearGradient>
                        <path style="opacity:0.5;clip-path:url(#SVGID_437_);fill:url(#SVGID_438_);" d="M214.7,476.6c9.3,5.7,24.3,5.7,33.6,0
                          L214.7,456C205.4,461.7,205.4,470.9,214.7,476.6z"/>
                      </g>
                      <linearGradient id="SVGID_440_" gradientUnits="userSpaceOnUse" x1="186.9229" y1="488.7098" x2="260.4101" y2="488.7098">
                        <stop  offset="0" style="stop-color:#414141;stop-opacity:0"/>
                        <stop  offset="1" style="stop-color:#737373"/>
                      </linearGradient>
                      <rect x="186.9" y="485.9" style="opacity:0.5;clip-path:url(#SVGID_434_);fill:url(#SVGID_440_);" width="73.5" height="5.5"/>
                      <linearGradient id="SVGID_441_" gradientUnits="userSpaceOnUse" x1="189.8741" y1="486.9785" x2="207.879" y2="486.9785">
                        <stop  offset="0" style="stop-color:#414141;stop-opacity:0"/>
                        <stop  offset="1" style="stop-color:#737373"/>
                      </linearGradient>
                      <path style="opacity:0.5;clip-path:url(#SVGID_434_);fill:url(#SVGID_441_);" d="M207.9,491.5h-18c0-5,4-9,9-9
                        C203.8,482.5,207.9,486.5,207.9,491.5z"/>
                    </g>
                    <linearGradient id="SVGID_442_" gradientUnits="userSpaceOnUse" x1="186.9229" y1="481.0236" x2="226.555" y2="481.0236">
                      <stop  offset="0" style="stop-color:#414141;stop-opacity:0"/>
                      <stop  offset="1" style="stop-color:#737373"/>
                    </linearGradient>
                    <path style="opacity:0.5;fill:url(#SVGID_442_);" d="M226.6,491.5c0-10.5-8.2-19.5-23.3-21l-5.8,8.1c0,0-5.7,0-6.7,0
                      c-1,0-3.9,1-3.9,4.1c0,3.5,0,8.8,0,8.8H226.6z"/>
                    <g>
                      <g>
                        <defs>

                            <ellipse id="SVGID_445_" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -289.279 284.578)" cx="198.9" cy="491.5" rx="7.4" ry="7.4"/>
                        </defs>
                        <clipPath id="SVGID_443_">
                          <use xlink:href="#SVGID_445_"  style="overflow:visible;"/>
                        </clipPath>
                        <linearGradient id="SVGID_444_" gradientUnits="userSpaceOnUse" x1="191.4774" y1="491.4797" x2="206.2757" y2="491.4797">
                          <stop  offset="0" style="stop-color:#151B26"/>
                          <stop  offset="1" style="stop-color:#323E57"/>
                        </linearGradient>
                        <rect x="191.5" y="484.1" style="clip-path:url(#SVGID_443_);fill:url(#SVGID_444_);" width="14.8" height="14.8"/>
                        <linearGradient id="SVGID_446_" gradientUnits="userSpaceOnUse" x1="187.4196" y1="494.5714" x2="204.1501" y2="494.5714">
                          <stop  offset="0" style="stop-color:#414141;stop-opacity:0"/>
                          <stop  offset="1" style="stop-color:#737373"/>
                        </linearGradient>
                        <path style="opacity:0.5;clip-path:url(#SVGID_443_);fill:url(#SVGID_446_);" d="M204,496.2c1.1-5.9-4-11-9.8-9.8
                          c-3.3,0.6-5.9,3.3-6.6,6.6c-1.1,5.9,4,11,9.8,9.8C200.7,502.2,203.4,499.5,204,496.2z"/>
                      </g>

                        <ellipse transform="matrix(0.7071 -0.7071 0.7071 0.7071 -289.279 284.578)" style="fill:#D7D7D6;" cx="198.9" cy="491.5" rx="4.7" ry="4.6"/>
                    </g>
                    <g>
                      <g>
                        <defs>

                            <ellipse id="SVGID_449_" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -276.092 316.4144)" cx="243.9" cy="491.5" rx="7.4" ry="7.4"/>
                        </defs>
                        <clipPath id="SVGID_447_">
                          <use xlink:href="#SVGID_449_"  style="overflow:visible;"/>
                        </clipPath>
                        <linearGradient id="SVGID_448_" gradientUnits="userSpaceOnUse" x1="235.493" y1="491.4797" x2="252.307" y2="491.4797">
                          <stop  offset="0" style="stop-color:#151B26"/>
                          <stop  offset="1" style="stop-color:#323E57"/>
                        </linearGradient>
                        <rect x="235.5" y="483.1" style="clip-path:url(#SVGID_447_);fill:url(#SVGID_448_);" width="16.8" height="16.8"/>
                        <linearGradient id="SVGID_450_" gradientUnits="userSpaceOnUse" x1="232.443" y1="494.5714" x2="249.1736" y2="494.5714">
                          <stop  offset="0" style="stop-color:#414141;stop-opacity:0"/>
                          <stop  offset="1" style="stop-color:#737373"/>
                        </linearGradient>
                        <path style="opacity:0.5;clip-path:url(#SVGID_447_);fill:url(#SVGID_450_);" d="M249,496.2c1.1-5.9-4-11-9.8-9.8
                          c-3.3,0.6-5.9,3.3-6.6,6.6c-1.1,5.9,4,11,9.8,9.8C245.7,502.2,248.4,499.5,249,496.2z"/>
                      </g>

                        <ellipse transform="matrix(0.7071 -0.7071 0.7071 0.7071 -276.092 316.4144)" style="fill:#D7D7D6;" cx="243.9" cy="491.5" rx="4.7" ry="4.6"/>
                    </g>
                    <linearGradient id="SVGID_451_" gradientUnits="userSpaceOnUse" x1="189.0723" y1="481.5884" x2="193.8825" y2="481.5884">
                      <stop  offset="0" style="stop-color:#FFC65B"/>
                      <stop  offset="1" style="stop-color:#FAB224"/>
                    </linearGradient>
                    <path style="fill:url(#SVGID_451_);" d="M193.9,483.3h-3.1c-0.9,0-1.7-0.8-1.7-1.7l0,0c0-0.9,0.8-1.7,1.7-1.7h3.1V483.3z"/>
                    <linearGradient id="SVGID_452_" gradientUnits="userSpaceOnUse" x1="223.6948" y1="470.5376" x2="234.1909" y2="470.5376">
                      <stop  offset="0" style="stop-color:#414141;stop-opacity:0"/>
                      <stop  offset="1" style="stop-color:#737373"/>
                    </linearGradient>
                    <rect x="223.7" y="466.7" style="opacity:0.5;fill:url(#SVGID_452_);" width="10.5" height="7.7"/>
                    <linearGradient id="SVGID_453_" gradientUnits="userSpaceOnUse" x1="236.1696" y1="470.5376" x2="246.6657" y2="470.5376">
                      <stop  offset="0" style="stop-color:#414141;stop-opacity:0"/>
                      <stop  offset="1" style="stop-color:#737373"/>
                    </linearGradient>
                    <rect x="236.2" y="466.7" style="opacity:0.5;fill:url(#SVGID_453_);" width="10.5" height="7.7"/>
                    <linearGradient id="SVGID_454_" gradientUnits="userSpaceOnUse" x1="248.4277" y1="470.5376" x2="258.9239" y2="470.5376">
                      <stop  offset="0" style="stop-color:#414141;stop-opacity:0"/>
                      <stop  offset="1" style="stop-color:#737373"/>
                    </linearGradient>
                    <rect x="248.4" y="466.7" style="opacity:0.5;fill:url(#SVGID_454_);" width="10.5" height="7.7"/>
                    <linearGradient id="SVGID_455_" gradientUnits="userSpaceOnUse" x1="223.6948" y1="479.1123" x2="234.1909" y2="479.1123">
                      <stop  offset="0" style="stop-color:#414141;stop-opacity:0"/>
                      <stop  offset="1" style="stop-color:#737373"/>
                    </linearGradient>
                    <rect x="223.7" y="475.2" style="opacity:0.5;fill:url(#SVGID_455_);" width="10.5" height="7.7"/>
                    <linearGradient id="SVGID_456_" gradientUnits="userSpaceOnUse" x1="236.1696" y1="479.1123" x2="246.6657" y2="479.1123">
                      <stop  offset="0" style="stop-color:#414141;stop-opacity:0"/>
                      <stop  offset="1" style="stop-color:#737373"/>
                    </linearGradient>
                    <rect x="236.2" y="475.2" style="opacity:0.5;fill:url(#SVGID_456_);" width="10.5" height="7.7"/>
                    <linearGradient id="SVGID_457_" gradientUnits="userSpaceOnUse" x1="248.4277" y1="479.1123" x2="258.9239" y2="479.1123">
                      <stop  offset="0" style="stop-color:#414141;stop-opacity:0"/>
                      <stop  offset="1" style="stop-color:#737373"/>
                    </linearGradient>
                    <rect x="248.4" y="475.2" style="opacity:0.5;fill:url(#SVGID_457_);" width="10.5" height="7.7"/>
                    <linearGradient id="SVGID_458_" gradientUnits="userSpaceOnUse" x1="257.263" y1="485.5309" x2="260.4101" y2="485.5309">
                      <stop  offset="0" style="stop-color:#FFC65B"/>
                      <stop  offset="1" style="stop-color:#FAB224"/>
                    </linearGradient>
                    <rect x="257.3" y="484.1" style="fill:url(#SVGID_458_);" width="3.1" height="2.8"/>
                  </g>
                  <linearGradient id="SVGID_459_" gradientUnits="userSpaceOnUse" x1="234.8975" y1="486.9785" x2="252.9025" y2="486.9785">
                    <stop  offset="0" style="stop-color:#414141;stop-opacity:0"/>
                    <stop  offset="1" style="stop-color:#737373"/>
                  </linearGradient>
                  <path style="opacity:0.5;fill:url(#SVGID_459_);" d="M252.9,491.5h-18c0-5,4-9,9-9C248.9,482.5,252.9,486.5,252.9,491.5z"/>
                </g>
                <path style="fill:#B2B2B2;" d="M186,491.5L186,491.5c-0.5,0-0.9-0.4-0.9-0.9V485c0-0.5,0.4-0.9,0.9-0.9l0,0c0.5,0,0.9,0.4,0.9,0.9
                  v5.6C186.9,491.1,186.5,491.5,186,491.5z"/>
                <path style="fill:#B2B2B2;" d="M190.5,491.5L190.5,491.5c-0.5,0-0.9-0.4-0.9-0.9v-2.9c0-0.5,0.4-0.9,0.9-0.9h0
                  c0.5,0,0.9,0.4,0.9,0.9v2.9C191.4,491.1,191,491.5,190.5,491.5z"/>
                <rect x="185.9" y="486.8" style="fill:#B2B2B2;" width="4.6" height="4.7"/>
                <rect x="255" y="486.8" style="fill:#B2B2B2;" width="6.2" height="4.6"/>
                <path style="fill:#B2B2B2;" d="M261.2,491.5L261.2,491.5c-0.4,0-0.8-0.3-0.8-0.8v-3.1c0-0.4,0.3-0.8,0.8-0.8l0,0
                  c0.4,0,0.8,0.3,0.8,0.8v3.1C261.9,491.1,261.6,491.5,261.2,491.5z"/>
                <path style="fill:#B2B2B2;" d="M255.1,491.5L255.1,491.5c-0.4,0-0.8-0.3-0.8-0.8v-3.1c0-0.4,0.3-0.8,0.8-0.8h0
                  c0.4,0,0.8,0.3,0.8,0.8v3.1C255.9,491.1,255.6,491.5,255.1,491.5z"/>
              </g>
              <polygon style="opacity:0.3;fill:#006EA0;" points="542.2,97.9 436.7,97.9 450.7,63.6 542.2,63.6  "/>
              <g>
                <path style="fill:#231F20;" d="M454.1,70.8c1.5,0,2.3,0.9,2.3,2.3c0,1.4-0.9,2.3-2.3,2.3h-1.4v2.7h-1.4v-7.3H454.1z M452.7,71.9
                  v2.2h1.2c0.7,0,1.1-0.3,1.1-1.1c0-0.8-0.4-1.1-1.1-1.1H452.7z"/>
                <path style="fill:#231F20;" d="M458.5,75.8c0,0.8,0.3,1.3,1.1,1.3h1.9v0.9c-0.7,0.2-1.3,0.2-1.9,0.2c-1.8,0-2.5-1.1-2.5-2.8
                  s0.8-2.8,2.6-2.8c1.5,0,2.1,0.8,2.1,1.7c0,0.8-0.3,1.5-1.6,1.5H458.5z M458.5,74.9h1.3c0.5,0,0.7-0.3,0.7-0.6
                  c0-0.3-0.3-0.7-0.9-0.7C459,73.7,458.6,74.2,458.5,74.9z"/>
                <path style="fill:#231F20;" d="M462.8,78.1v-5.4h1.2l0.1,0.9h0c0.4-0.7,1-1,1.7-1v1.3h-0.3c-1,0-1.4,0.5-1.4,1.1v3.1H462.8z"/>
                <path style="fill:#231F20;" d="M468.9,72.6c0.6,0,1,0.1,1.8,0.2v0.8H469c-0.7,0-0.9,0.3-0.9,0.5c0,0.3,0.1,0.5,0.8,0.6
                  c1,0.2,2,0.5,2,1.7c0,1.2-0.9,1.7-2.2,1.7c-0.6,0-1.3-0.1-2.1-0.2v-0.9h2c0.7,0,0.9-0.3,0.9-0.6c0-0.3-0.1-0.5-0.8-0.6
                  c-1-0.2-2-0.4-2-1.7C466.7,73,467.7,72.6,468.9,72.6z"/>
                <path style="fill:#231F20;" d="M471.7,75.4c0-1.7,0.7-2.8,2.5-2.8c1.8,0,2.5,1.1,2.5,2.8s-0.7,2.8-2.5,2.8
                  C472.4,78.2,471.7,77.1,471.7,75.4z M473,75.4c0,1.1,0.2,1.7,1.1,1.7c0.9,0,1.1-0.7,1.1-1.7c0-1-0.2-1.7-1.1-1.7
                  C473.3,73.6,473,74.3,473,75.4z"/>
                <path style="fill:#231F20;" d="M477.6,78.1v-5.4h1.2l0.1,0.6h0c0.4-0.5,0.9-0.7,1.6-0.7c1.1,0,1.6,0.7,1.6,1.7v3.8h-1.3v-3.7
                  c0-0.5-0.4-0.8-0.9-0.8c-0.5,0-1,0.3-1,1v3.5H477.6z"/>
                <path style="fill:#231F20;" d="M483.4,73.7v-0.8c0.7-0.1,1.5-0.2,2.1-0.2c1.3,0,2,0.4,2,1.8v3.7h-1.2l-0.1-0.6h0
                  c-0.4,0.6-0.9,0.7-1.5,0.7c-1,0-1.6-0.7-1.6-1.6c0-1.3,0.9-1.6,1.8-1.6h1.4v-0.5c0-0.5-0.2-0.8-0.9-0.8H483.4z M486.2,75.7h-1
                  c-0.6,0-0.9,0.2-0.9,0.7c0,0.5,0.4,0.7,0.9,0.7c0.4,0,1-0.3,1-1V75.7z"/>
                <path style="fill:#231F20;" d="M492.9,72.6c0.5,0,0.9,0.1,1.7,0.2v0.8h-1.7c-0.9,0-1.1,0.7-1.1,1.7c0,1.1,0.2,1.7,1.1,1.7h1.7v0.9
                  c-0.7,0.2-1.1,0.2-1.7,0.2c-1.8,0-2.5-1.1-2.5-2.8S491.1,72.6,492.9,72.6z"/>
                <path style="fill:#231F20;" d="M495.2,75.4c0-1.7,0.7-2.8,2.5-2.8c1.8,0,2.5,1.1,2.5,2.8s-0.7,2.8-2.5,2.8
                  C495.8,78.2,495.2,77.1,495.2,75.4z M496.5,75.4c0,1.1,0.2,1.7,1.1,1.7c0.9,0,1.1-0.7,1.1-1.7c0-1-0.2-1.7-1.1-1.7
                  C496.8,73.6,496.5,74.3,496.5,75.4z"/>
                <path style="fill:#231F20;" d="M501.1,78.1v-5.4h1.2l0.1,0.6h0c0.4-0.5,0.9-0.7,1.6-0.7c1.1,0,1.6,0.7,1.6,1.7v3.8h-1.3v-3.7
                  c0-0.5-0.4-0.8-0.9-0.8c-0.5,0-1,0.3-1,1v3.5H501.1z"/>
                <path style="fill:#231F20;" d="M451.3,91v-7.3h2.6c2.4,0,3,1.8,3,3.7c0,1.8-0.5,3.7-3,3.7H451.3z M453.8,89.8
                  c1.5,0,1.7-1.3,1.7-2.5c0-1.2-0.2-2.5-1.7-2.5h-1.1v4.9H453.8z"/>
                <path style="fill:#231F20;" d="M459.2,83.4v1.5h-1.3v-1.5H459.2z M459.2,85.6V91h-1.3v-5.4H459.2z"/>
                <path style="fill:#231F20;" d="M462.4,85.5c0.6,0,1,0.1,1.8,0.2v0.8h-1.7c-0.7,0-0.9,0.3-0.9,0.5c0,0.3,0.1,0.5,0.8,0.6
                  c1,0.2,2,0.5,2,1.7c0,1.2-0.9,1.7-2.2,1.7c-0.6,0-1.3-0.1-2.1-0.2V90h2c0.7,0,0.9-0.3,0.9-0.6c0-0.3-0.1-0.5-0.8-0.6
                  c-1-0.2-2-0.4-2-1.7C460.2,86,461.2,85.5,462.4,85.5z"/>
                <path style="fill:#231F20;" d="M467.7,85.5c0.5,0,0.9,0.1,1.7,0.2v0.8h-1.7c-0.9,0-1.1,0.7-1.1,1.7c0,1.1,0.2,1.7,1.1,1.7h1.7v0.9
                  c-0.7,0.2-1.1,0.2-1.7,0.2c-1.8,0-2.5-1.1-2.5-2.8S465.8,85.5,467.7,85.5z"/>
                <path style="fill:#231F20;" d="M470.2,86.6v-0.8c0.7-0.1,1.5-0.2,2.1-0.2c1.3,0,2,0.4,2,1.8V91h-1.2l-0.1-0.6h0
                  c-0.4,0.6-0.9,0.7-1.5,0.7c-1,0-1.6-0.7-1.6-1.6c0-1.3,0.9-1.6,1.8-1.6h1.4v-0.5c0-0.5-0.2-0.8-0.9-0.8H470.2z M473.1,88.6h-1
                  c-0.6,0-0.9,0.2-0.9,0.7c0,0.5,0.4,0.7,0.9,0.7c0.4,0,1-0.3,1-1V88.6z"/>
                <path style="fill:#231F20;" d="M476.7,93.1h-1.3v-7.5h1.2l0.1,0.6h0c0.4-0.5,0.8-0.7,1.4-0.7c1.4,0,2,1.1,2,2.8s-0.7,2.8-2.4,2.8
                  c-0.4,0-0.6,0-1-0.1V93.1z M476.7,90h0.9c0.9,0,1.2-0.7,1.2-1.7s-0.2-1.8-1.1-1.8c-0.5,0-1,0.3-1,1V90z"/>
                <path style="fill:#231F20;" d="M481.3,86.6v-0.8c0.7-0.1,1.5-0.2,2.1-0.2c1.3,0,2,0.4,2,1.8V91h-1.2l-0.1-0.6h0
                  c-0.4,0.6-0.9,0.7-1.5,0.7c-1,0-1.6-0.7-1.6-1.6c0-1.3,0.9-1.6,1.8-1.6h1.4v-0.5c0-0.5-0.2-0.8-0.9-0.8H481.3z M484.1,88.6h-1
                  c-0.6,0-0.9,0.2-0.9,0.7c0,0.5,0.4,0.7,0.9,0.7c0.4,0,1-0.3,1-1V88.6z"/>
                <path style="fill:#231F20;" d="M488.8,85.5c0.5,0,0.9,0.1,1.7,0.2v0.8h-1.7c-0.9,0-1.1,0.7-1.1,1.7c0,1.1,0.2,1.7,1.1,1.7h1.7v0.9
                  c-0.7,0.2-1.1,0.2-1.7,0.2c-1.8,0-2.5-1.1-2.5-2.8S487,85.5,488.8,85.5z"/>
                <path style="fill:#231F20;" d="M492.5,83.4v1.5h-1.3v-1.5H492.5z M492.5,85.6V91h-1.3v-5.4H492.5z"/>
                <path style="fill:#231F20;" d="M497,83.4h1.3V91h-1.2l-0.1-0.6h0c-0.4,0.5-0.8,0.7-1.4,0.7c-1.4,0-2-1.1-2-2.8s0.7-2.8,2.4-2.8
                  c0.4,0,0.6,0,1.1,0.1V83.4z M497,86.6H496c-0.9,0-1.2,0.7-1.2,1.7s0.2,1.8,1.1,1.8c0.5,0,1-0.3,1-1V86.6z"/>
                <path style="fill:#231F20;" d="M499.5,86.6v-0.8c0.7-0.1,1.5-0.2,2.1-0.2c1.3,0,2,0.4,2,1.8V91h-1.2l-0.1-0.6h0
                  c-0.4,0.6-0.9,0.7-1.5,0.7c-1,0-1.6-0.7-1.6-1.6c0-1.3,0.9-1.6,1.8-1.6h1.4v-0.5c0-0.5-0.2-0.8-0.9-0.8H499.5z M502.4,88.6h-1
                  c-0.6,0-0.9,0.2-0.9,0.7c0,0.5,0.4,0.7,0.9,0.7c0.4,0,1-0.3,1-1V88.6z"/>
                <path style="fill:#231F20;" d="M508.1,83.4h1.3V91h-1.2l-0.1-0.6h0c-0.4,0.5-0.8,0.7-1.4,0.7c-1.4,0-2-1.1-2-2.8s0.7-2.8,2.4-2.8
                  c0.4,0,0.6,0,1.1,0.1V83.4z M508.1,86.6h-0.9c-0.9,0-1.2,0.7-1.2,1.7s0.2,1.8,1.1,1.8c0.5,0,1-0.3,1-1V86.6z"/>
                <path style="fill:#231F20;" d="M513.9,82h1.1c-1,1.8-1.4,3.5-1.4,5.3c0,1.7,0.4,3.4,1.4,5.3h-1.1c-1.1-1.5-1.6-3.5-1.6-5.3
                  C512.3,85.5,512.8,83.6,513.9,82z"/>
                <path style="fill:#231F20;" d="M518.6,83.7c1.5,0,2.3,0.9,2.3,2.3c0,1.4-0.9,2.3-2.3,2.3h-1.4V91h-1.4v-7.3H518.6z M517.2,84.8
                  v2.2h1.2c0.7,0,1.1-0.3,1.1-1.1c0-0.8-0.4-1.1-1.1-1.1H517.2z"/>
                <path style="fill:#231F20;" d="M524.8,83.6c0.5,0,1.3,0.1,2,0.2v1H525c-1.5,0-1.8,1.4-1.8,2.5c0,1.2,0.2,2.6,1.8,2.6h1.8v1
                  c-0.7,0.2-1.5,0.2-2,0.2c-2.4,0-3-1.9-3-3.8C521.9,85.5,522.4,83.6,524.8,83.6z"/>
                <path style="fill:#231F20;" d="M527.9,91v-7.3h2.6c2.4,0,3,1.8,3,3.7c0,1.8-0.5,3.7-3,3.7H527.9z M530.4,89.8
                  c1.5,0,1.7-1.3,1.7-2.5c0-1.2-0.2-2.5-1.7-2.5h-1.1v4.9H530.4z"/>
                <path style="fill:#231F20;" d="M535.3,92.6h-1.1c1-1.8,1.4-3.6,1.4-5.3c0-1.7-0.4-3.5-1.4-5.3h1.1c1.1,1.5,1.6,3.5,1.6,5.3
                  C536.9,89.1,536.4,91.1,535.3,92.6z"/>
              </g>
              <polygon style="opacity:0.5;fill:#A3D6B1;" points="457.1,221.3 390.9,221.3 405,186.6 457.1,186.6  "/>
              <polygon style="opacity:0.5;fill:#A3D6B1;" points="457.1,221.3 390.9,221.3 405,186.6 457.1,186.6  "/>
              <polygon style="opacity:0.5;fill:#7DAC41;" points="431,343 351.7,343 365.8,308.4 431,308.4  "/>
              <polygon style="opacity:0.5;fill:#7DAC41;" points="431,343 351.7,343 365.8,308.4 431,308.4  "/>
              <polygon style="opacity:0.5;fill:#F2AF2D;" points="421.9,438.7 316.5,438.8 330.9,403.5 421.9,403.5  "/>
              <polygon style="opacity:0.5;fill:#F2AF2D;" points="421.9,438.7 316.5,438.8 330.9,403.5 421.9,403.5  "/>
              <polygon style="opacity:0.5;fill:#E15B31;" points="388.7,530.8 286.4,530.8 300.9,495.2 388.7,495.3  "/>
              <polygon style="opacity:0.5;fill:#E15B31;" points="388.7,530.8 286.4,530.8 300.9,495.2 388.7,495.3  "/>
              <polygon style="opacity:0.5;fill:#EE283B;" points="362.9,621.2 260.3,621.8 275.1,585.7 362.9,585.7  "/>
              <polygon style="opacity:0.5;fill:#EE283B;" points="362.9,621.2 260.3,621.8 275.1,585.7 362.9,585.7  "/>
              <polygon style="opacity:0.5;fill:#EE2346;" points="351.2,691.3 235.5,691.3 250.4,654.9 351.2,654.9  "/>
              <polygon style="opacity:0.5;fill:#EE2346;" points="351.2,691.3 235.5,691.3 250.4,654.9 351.2,654.9  "/>
              <g>
                <path style="fill:#231F20;" d="M408.2,200.3c1.5,0,2.3,0.9,2.3,2.3c0,1.4-0.9,2.3-2.3,2.3h-1.4v2.7h-1.4v-7.3H408.2z M406.8,201.5
                  v2.2h1.2c0.7,0,1.1-0.3,1.1-1.1c0-0.8-0.4-1.1-1.1-1.1H406.8z"/>
                <path style="fill:#231F20;" d="M412.6,205.3c0,0.8,0.3,1.3,1.1,1.3h1.9v0.9c-0.7,0.2-1.3,0.2-1.9,0.2c-1.8,0-2.5-1.1-2.5-2.8
                  s0.8-2.8,2.6-2.8c1.5,0,2.1,0.8,2.1,1.7c0,0.8-0.3,1.5-1.6,1.5H412.6z M412.6,204.5h1.3c0.5,0,0.7-0.3,0.7-0.6
                  c0-0.3-0.3-0.7-0.9-0.7C413.1,203.2,412.7,203.8,412.6,204.5z"/>
                <path style="fill:#231F20;" d="M417,203.2v-0.8c0.7-0.1,1.5-0.2,2.1-0.2c1.3,0,2,0.4,2,1.8v3.7h-1.2l-0.1-0.6h0
                  c-0.4,0.6-0.9,0.7-1.5,0.7c-1,0-1.6-0.7-1.6-1.6c0-1.3,0.9-1.6,1.8-1.6h1.4V204c0-0.5-0.2-0.8-0.9-0.8H417z M419.8,205.3h-1
                  c-0.6,0-0.9,0.2-0.9,0.7c0,0.5,0.4,0.7,0.9,0.7c0.4,0,1-0.3,1-1V205.3z"/>
                <path style="fill:#231F20;" d="M422.5,206.3v-3h-0.8v-0.8l0.8-0.2l0.6-1.5h0.7v1.5h1.3v1h-1.3v2.9c0,0.4,0.2,0.5,0.5,0.5h0.8v0.9
                  c-0.4,0.2-0.7,0.2-1.1,0.2C422.9,207.8,422.5,207.1,422.5,206.3z"/>
                <path style="fill:#231F20;" d="M425.7,205c0-1.7,0.7-2.8,2.5-2.8c1.8,0,2.5,1.1,2.5,2.8s-0.7,2.8-2.5,2.8
                  C426.4,207.8,425.7,206.6,425.7,205z M427,205c0,1.1,0.2,1.7,1.1,1.7c0.9,0,1.1-0.7,1.1-1.7c0-1-0.2-1.7-1.1-1.7
                  C427.3,203.2,427,203.9,427,205z"/>
                <path style="fill:#231F20;" d="M431.6,207.6v-5.4h1.2l0.1,0.6h0c0.4-0.5,0.9-0.7,1.6-0.7c1.1,0,1.6,0.7,1.6,1.7v3.8h-1.3v-3.7
                  c0-0.5-0.4-0.8-0.9-0.8c-0.5,0-1,0.3-1,1v3.5H431.6z"/>
                <path style="fill:#231F20;" d="M438.5,205.3c0,0.8,0.3,1.3,1.1,1.3h1.9v0.9c-0.7,0.2-1.3,0.2-1.9,0.2c-1.8,0-2.5-1.1-2.5-2.8
                  s0.8-2.8,2.6-2.8c1.5,0,2.1,0.8,2.1,1.7c0,0.8-0.3,1.5-1.6,1.5H438.5z M438.5,204.5h1.3c0.5,0,0.7-0.3,0.7-0.6
                  c0-0.3-0.3-0.7-0.9-0.7C438.9,203.2,438.5,203.8,438.5,204.5z"/>
                <path style="fill:#231F20;" d="M444.9,202.2c0.6,0,1,0.1,1.8,0.2v0.8H445c-0.7,0-0.9,0.3-0.9,0.5c0,0.3,0.1,0.5,0.8,0.6
                  c1,0.2,2,0.5,2,1.7c0,1.2-0.9,1.7-2.2,1.7c-0.6,0-1.3-0.1-2.1-0.2v-0.9h2c0.7,0,0.9-0.3,0.9-0.6c0-0.3-0.1-0.5-0.8-0.6
                  c-1-0.2-2-0.4-2-1.7C442.7,202.6,443.7,202.2,444.9,202.2z"/>
              </g>
              <g>
                <g>
                  <path style="fill:#231F20;" d="M265.4,676.9h-1.9l-2.2-7.4h1.5l1.6,5.8h0l1.6-5.8h1.5L265.4,676.9z"/>
                  <path style="fill:#231F20;" d="M269.1,674.5c0,0.8,0.3,1.3,1.1,1.3h1.9v0.8c-0.7,0.2-1.3,0.2-1.9,0.2c-1.8,0-2.5-1.1-2.5-2.8
                    c0-1.7,0.8-2.8,2.6-2.8c1.5,0,2.1,0.8,2.1,1.7c0,0.8-0.3,1.5-1.6,1.5H269.1z M269.1,673.7h1.3c0.5,0,0.7-0.3,0.7-0.6
                    c0-0.3-0.3-0.7-0.9-0.7C269.5,672.4,269.2,672.9,269.1,673.7z"/>
                  <path style="fill:#231F20;" d="M273.4,676.8v-7.5h1.3v2.8h0c0.4-0.5,0.9-0.7,1.6-0.7c1.1,0,1.6,0.7,1.6,1.7v3.8h-1.3v-3.7
                    c0-0.5-0.4-0.8-0.9-0.8c-0.5,0-1,0.3-1,1v3.5H273.4z"/>
                  <path style="fill:#231F20;" d="M280.2,671.4v5.4h-1.3v-5.4H280.2z M281,669.3l-0.9,1.5h-0.9l0.6-1.5H281z"/>
                  <path style="fill:#231F20;" d="M283.7,671.3c0.5,0,0.9,0.1,1.7,0.2v0.9h-1.7c-0.9,0-1.1,0.7-1.1,1.7c0,1.1,0.2,1.7,1.1,1.7h1.7
                    v0.8c-0.7,0.2-1.1,0.2-1.7,0.2c-1.8,0-2.5-1.1-2.5-2.8C281.2,672.4,281.9,671.3,283.7,671.3z"/>
                  <path style="fill:#231F20;" d="M290.6,671.4v5.4h-1.2l-0.1-0.6h0c-0.4,0.5-0.9,0.7-1.6,0.7c-1.1,0-1.6-0.7-1.6-1.7v-3.8h1.3v3.7
                    c0,0.5,0.4,0.8,0.9,0.8s1.1-0.3,1.1-1v-3.5H290.6z"/>
                  <path style="fill:#231F20;" d="M291.7,669.3h1.3v6.1c0,0.4,0.1,0.5,0.8,0.5v1c-1.8,0.1-2-0.3-2-1.5V669.3z"/>
                  <path style="fill:#231F20;" d="M294.2,674.1c0-1.7,0.7-2.8,2.5-2.8c1.8,0,2.5,1.1,2.5,2.8c0,1.7-0.7,2.8-2.5,2.8
                    C294.8,676.9,294.2,675.8,294.2,674.1z M295.5,674.1c0,1.1,0.2,1.7,1.1,1.7c0.9,0,1.1-0.7,1.1-1.7c0-1-0.2-1.7-1.1-1.7
                    C295.8,672.4,295.5,673.1,295.5,674.1z"/>
                  <path style="fill:#231F20;" d="M304.9,669.5c1.5,0,2.3,0.9,2.3,2.3c0,1.4-0.9,2.3-2.3,2.3h-1.4v2.7h-1.4v-7.3H304.9z
                     M303.5,670.7v2.2h1.2c0.7,0,1.1-0.3,1.1-1.1c0-0.8-0.4-1.1-1.1-1.1H303.5z"/>
                  <path style="fill:#231F20;" d="M308.2,672.4v-0.9c0.7-0.1,1.5-0.2,2.1-0.2c1.3,0,2,0.4,2,1.8v3.7h-1.2l-0.1-0.6h0
                    c-0.4,0.6-0.9,0.7-1.5,0.7c-1,0-1.6-0.7-1.6-1.6c0-1.3,0.9-1.6,1.8-1.6h1.4v-0.5c0-0.5-0.2-0.8-0.9-0.8H308.2z M311,674.4h-1
                    c-0.6,0-0.9,0.2-0.9,0.7c0,0.5,0.4,0.7,0.9,0.7c0.4,0,1-0.3,1-1V674.4z"/>
                  <path style="fill:#231F20;" d="M313.3,676.8v-5.4h1.2l0.1,0.9h0c0.4-0.7,1-1,1.7-1v1.3H316c-1,0-1.4,0.5-1.4,1.1v3.1H313.3z"/>
                  <path style="fill:#231F20;" d="M317.5,675.5v-3h-0.8v-0.8l0.8-0.2l0.6-1.5h0.7v1.5h1.3v1h-1.3v2.9c0,0.4,0.2,0.5,0.5,0.5h0.8v0.8
                    c-0.4,0.2-0.7,0.2-1.1,0.2C317.8,676.9,317.5,676.3,317.5,675.5z"/>
                  <path style="fill:#231F20;" d="M322.1,669.3v1.5h-1.3v-1.5H322.1z M322.1,671.4v5.4h-1.3v-5.4H322.1z"/>
                  <path style="fill:#231F20;" d="M325.5,671.3c0.5,0,0.9,0.1,1.7,0.2v0.9h-1.7c-0.9,0-1.1,0.7-1.1,1.7c0,1.1,0.2,1.7,1.1,1.7h1.7
                    v0.8c-0.7,0.2-1.1,0.2-1.7,0.2c-1.8,0-2.5-1.1-2.5-2.8C323.1,672.4,323.7,671.3,325.5,671.3z"/>
                  <path style="fill:#231F20;" d="M332.5,671.4v5.4h-1.2l-0.1-0.6h0c-0.4,0.5-0.9,0.7-1.6,0.7c-1.1,0-1.6-0.7-1.6-1.7v-3.8h1.3v3.7
                    c0,0.5,0.4,0.8,0.9,0.8s1.1-0.3,1.1-1v-3.5H332.5z"/>
                  <path style="fill:#231F20;" d="M333.6,669.3h1.3v6.1c0,0.4,0.1,0.5,0.8,0.5v1c-1.8,0.1-2-0.3-2-1.5V669.3z"/>
                  <path style="fill:#231F20;" d="M336.4,672.4v-0.9c0.7-0.1,1.5-0.2,2.1-0.2c1.3,0,2,0.4,2,1.8v3.7h-1.2l-0.1-0.6h0
                    c-0.4,0.6-0.9,0.7-1.5,0.7c-1,0-1.6-0.7-1.6-1.6c0-1.3,0.9-1.6,1.8-1.6h1.4v-0.5c0-0.5-0.2-0.8-0.9-0.8H336.4z M339.2,674.4h-1
                    c-0.6,0-0.9,0.2-0.9,0.7c0,0.5,0.4,0.7,0.9,0.7c0.4,0,1-0.3,1-1V674.4z"/>
                  <path style="fill:#231F20;" d="M341.6,676.8v-5.4h1.2l0.1,0.9h0c0.4-0.7,1-1,1.7-1v1.3h-0.3c-1,0-1.4,0.5-1.4,1.1v3.1H341.6z"/>
                </g>
              </g>
              <g>
                <g>
                  <path style="fill:#231F20;" d="M373.5,322.9h-1.9l-2.2-7.4h1.5l1.6,5.8h0l1.6-5.8h1.5L373.5,322.9z"/>
                  <path style="fill:#231F20;" d="M377.2,320.6c0,0.8,0.3,1.3,1.1,1.3h1.9v0.9c-0.7,0.2-1.3,0.2-1.9,0.2c-1.8,0-2.5-1.1-2.5-2.8
                    c0-1.7,0.8-2.8,2.6-2.8c1.5,0,2.1,0.8,2.1,1.7c0,0.8-0.3,1.5-1.6,1.5H377.2z M377.2,319.8h1.3c0.5,0,0.7-0.3,0.7-0.6
                    c0-0.3-0.3-0.7-0.9-0.7C377.6,318.5,377.3,319,377.2,319.8z"/>
                  <path style="fill:#231F20;" d="M381.4,322.9v-7.5h1.3v2.8h0c0.4-0.5,0.9-0.7,1.6-0.7c1.1,0,1.6,0.7,1.6,1.7v3.8h-1.3v-3.7
                    c0-0.5-0.4-0.8-0.9-0.8c-0.5,0-1,0.3-1,1v3.5H381.4z"/>
                  <path style="fill:#231F20;" d="M388.3,317.5v5.4H387v-5.4H388.3z M389.1,315.4l-0.9,1.5h-0.9l0.6-1.5H389.1z"/>
                  <path style="fill:#231F20;" d="M391.8,317.4c0.5,0,0.9,0.1,1.7,0.2v0.8h-1.7c-0.9,0-1.1,0.7-1.1,1.7c0,1.1,0.2,1.7,1.1,1.7h1.7
                    v0.9c-0.7,0.2-1.1,0.2-1.7,0.2c-1.8,0-2.5-1.1-2.5-2.8C389.3,318.5,390,317.4,391.8,317.4z"/>
                  <path style="fill:#231F20;" d="M398.7,317.5v5.4h-1.2l-0.1-0.6h0c-0.4,0.5-0.9,0.7-1.6,0.7c-1.1,0-1.6-0.7-1.6-1.7v-3.8h1.3v3.7
                    c0,0.5,0.4,0.8,0.9,0.8s1.1-0.3,1.1-1v-3.5H398.7z"/>
                  <path style="fill:#231F20;" d="M399.8,315.4h1.3v6.1c0,0.4,0.1,0.5,0.8,0.5v1c-1.8,0.1-2-0.3-2-1.5V315.4z"/>
                  <path style="fill:#231F20;" d="M402.3,320.2c0-1.7,0.7-2.8,2.5-2.8c1.8,0,2.5,1.1,2.5,2.8c0,1.7-0.7,2.8-2.5,2.8
                    C402.9,323,402.3,321.9,402.3,320.2z M403.6,320.2c0,1.1,0.2,1.7,1.1,1.7c0.9,0,1.1-0.7,1.1-1.7c0-1-0.2-1.7-1.1-1.7
                    C403.9,318.5,403.6,319.2,403.6,320.2z"/>
                  <path style="fill:#231F20;" d="M410.2,322.9v-7.3h1.4l2.6,4.9h0v-4.9h1.3v7.3h-1.4l-2.6-4.7h0v4.7H410.2z"/>
                  <path style="fill:#231F20;" d="M416.6,320.2c0-1.7,0.7-2.8,2.5-2.8c1.8,0,2.5,1.1,2.5,2.8c0,1.7-0.7,2.8-2.5,2.8
                    C417.3,323,416.6,321.9,416.6,320.2z M418,320.2c0,1.1,0.2,1.7,1.1,1.7c0.9,0,1.1-0.7,1.1-1.7c0-1-0.2-1.7-1.1-1.7
                    C418.2,318.5,418,319.2,418,320.2z"/>
                  <path style="fill:#231F20;" d="M371.3,330.9L371.3,330.9l-0.3,4.9h-1.3l0.4-7.3h1.7l1.4,5h0l1.3-5h1.7l0.5,7.3h-1.3l-0.4-4.9h0
                    l-1.2,4.9h-1.3L371.3,330.9z"/>
                  <path style="fill:#231F20;" d="M377.6,333.1c0-1.7,0.7-2.8,2.5-2.8c1.8,0,2.5,1.1,2.5,2.8c0,1.7-0.7,2.8-2.5,2.8
                    C378.2,335.9,377.6,334.8,377.6,333.1z M378.9,333.1c0,1.1,0.2,1.7,1.1,1.7c0.9,0,1.1-0.7,1.1-1.7c0-1-0.2-1.7-1.1-1.7
                    C379.2,331.4,378.9,332.1,378.9,333.1z"/>
                  <path style="fill:#231F20;" d="M383.8,334.5v-3H383v-0.8l0.8-0.2l0.6-1.5h0.7v1.5h1.3v1h-1.3v2.9c0,0.4,0.2,0.5,0.5,0.5h0.8v0.9
                    c-0.4,0.2-0.7,0.2-1.1,0.2C384.2,335.9,383.8,335.3,383.8,334.5z"/>
                  <path style="fill:#231F20;" d="M387,333.1c0-1.7,0.7-2.8,2.5-2.8c1.8,0,2.5,1.1,2.5,2.8c0,1.7-0.7,2.8-2.5,2.8
                    C387.7,335.9,387,334.8,387,333.1z M388.3,333.1c0,1.1,0.2,1.7,1.1,1.7c0.9,0,1.1-0.7,1.1-1.7c0-1-0.2-1.7-1.1-1.7
                    C388.6,331.4,388.3,332.1,388.3,333.1z"/>
                  <path style="fill:#231F20;" d="M392.9,335.8v-5.4h1.2l0.1,0.9h0c0.4-0.7,1-1,1.7-1v1.3h-0.3c-1,0-1.4,0.5-1.4,1.1v3.1H392.9z"/>
                  <path style="fill:#231F20;" d="M398,328.3v1.5h-1.3v-1.5H398z M398,330.4v5.4h-1.3v-5.4H398z"/>
                  <path style="fill:#231F20;" d="M403.1,331.4l-2.7,3.4h2.8v1h-4.4v-0.9l2.7-3.4h-2.6v-1h4.2V331.4z"/>
                  <path style="fill:#231F20;" d="M404.3,331.4v-0.8c0.7-0.1,1.5-0.2,2.1-0.2c1.3,0,2,0.4,2,1.8v3.7h-1.2l-0.1-0.6h0
                    c-0.4,0.6-0.9,0.7-1.5,0.7c-1,0-1.6-0.7-1.6-1.6c0-1.3,0.9-1.6,1.8-1.6h1.4v-0.5c0-0.5-0.2-0.8-0.9-0.8H404.3z M407.1,333.4h-1
                    c-0.6,0-0.9,0.2-0.9,0.7c0,0.5,0.4,0.7,0.9,0.7c0.4,0,1-0.3,1-1V333.4z"/>
                  <path style="fill:#231F20;" d="M412.8,328.3h1.3v7.5h-1.2l-0.1-0.6h0c-0.4,0.5-0.8,0.7-1.4,0.7c-1.4,0-2-1.1-2-2.8
                    c0-1.7,0.7-2.8,2.4-2.8c0.4,0,0.6,0,1.1,0.1V328.3z M412.8,331.4h-0.9c-0.9,0-1.2,0.7-1.2,1.7c0,1,0.2,1.8,1.1,1.8
                    c0.5,0,1-0.3,1-1V331.4z"/>
                  <path style="fill:#231F20;" d="M415.1,333.1c0-1.7,0.7-2.8,2.5-2.8c1.8,0,2.5,1.1,2.5,2.8c0,1.7-0.7,2.8-2.5,2.8
                    C415.7,335.9,415.1,334.8,415.1,333.1z M416.4,333.1c0,1.1,0.2,1.7,1.1,1.7c0.9,0,1.1-0.7,1.1-1.7c0-1-0.2-1.7-1.1-1.7
                    C416.6,331.4,416.4,332.1,416.4,333.1z"/>
                </g>
              </g>
              <g>
                <g>
                  <path style="fill:#231F20;" d="M336,418.7v6.1h-1.4v-6.1h-1.9v-1.2h5.1v1.2H336z"/>
                  <path style="fill:#231F20;" d="M338.4,424.8v-5.4h1.2l0.1,0.9h0c0.4-0.7,1-1,1.7-1v1.3h-0.3c-1,0-1.4,0.5-1.4,1.1v3.1H338.4z"/>
                  <path style="fill:#231F20;" d="M342.1,420.4v-0.8c0.7-0.1,1.5-0.2,2.1-0.2c1.3,0,2,0.4,2,1.8v3.7H345l-0.1-0.6h0
                    c-0.4,0.6-0.9,0.7-1.5,0.7c-1,0-1.6-0.7-1.6-1.6c0-1.3,0.9-1.6,1.8-1.6h1.4v-0.5c0-0.5-0.2-0.8-0.9-0.8H342.1z M344.9,422.4h-1
                    c-0.6,0-0.9,0.2-0.9,0.7c0,0.5,0.4,0.7,0.9,0.7c0.4,0,1-0.3,1-1V422.4z"/>
                  <path style="fill:#231F20;" d="M347.2,424.8v-5.4h1.2l0.1,0.6h0c0.4-0.5,0.9-0.7,1.6-0.7c1.1,0,1.6,0.7,1.6,1.7v3.8h-1.3v-3.7
                    c0-0.5-0.4-0.8-0.9-0.8c-0.5,0-1,0.3-1,1v3.5H347.2z"/>
                  <path style="fill:#231F20;" d="M355,419.3c0.6,0,1,0.1,1.8,0.2v0.8H355c-0.7,0-0.9,0.3-0.9,0.5c0,0.3,0.1,0.5,0.8,0.6
                    c1,0.2,2,0.5,2,1.7c0,1.2-0.9,1.7-2.2,1.7c-0.6,0-1.3-0.1-2.1-0.2v-0.8h2c0.7,0,0.9-0.3,0.9-0.6c0-0.3-0.1-0.5-0.8-0.6
                    c-1-0.2-2-0.4-2-1.7C352.8,419.8,353.7,419.3,355,419.3z"/>
                  <path style="fill:#231F20;" d="M359.2,426.9h-1.3v-7.5h1.2l0.1,0.6h0c0.4-0.5,0.8-0.7,1.4-0.7c1.4,0,2,1.1,2,2.8
                    c0,1.7-0.7,2.8-2.4,2.8c-0.4,0-0.6,0-1-0.1V426.9z M359.2,423.8h0.9c0.9,0,1.2-0.7,1.2-1.7c0-1-0.2-1.8-1.1-1.8c-0.5,0-1,0.3-1,1
                    V423.8z"/>
                  <path style="fill:#231F20;" d="M363.5,422.1c0-1.7,0.7-2.8,2.5-2.8c1.8,0,2.5,1.1,2.5,2.8c0,1.7-0.7,2.8-2.5,2.8
                    C364.2,424.9,363.5,423.8,363.5,422.1z M364.9,422.1c0,1.1,0.2,1.7,1.1,1.7c0.9,0,1.1-0.7,1.1-1.7c0-1-0.2-1.7-1.1-1.7
                    C365.1,420.4,364.9,421.1,364.9,422.1z"/>
                  <path style="fill:#231F20;" d="M369.4,424.8v-5.4h1.2l0.1,0.9h0c0.4-0.7,1-1,1.7-1v1.3h-0.3c-1,0-1.4,0.5-1.4,1.1v3.1H369.4z"/>
                  <path style="fill:#231F20;" d="M373.6,423.4v-3h-0.8v-0.8l0.8-0.2l0.6-1.5h0.7v1.5h1.3v1h-1.3v2.9c0,0.4,0.2,0.5,0.5,0.5h0.8v0.8
                    c-0.4,0.2-0.7,0.2-1.1,0.2C373.9,424.9,373.6,424.3,373.6,423.4z"/>
                  <path style="fill:#231F20;" d="M378.1,422.5c0,0.8,0.3,1.3,1.1,1.3h1.9v0.8c-0.7,0.2-1.3,0.2-1.9,0.2c-1.8,0-2.5-1.1-2.5-2.8
                    c0-1.7,0.8-2.8,2.6-2.8c1.5,0,2.1,0.8,2.1,1.7c0,0.8-0.3,1.5-1.6,1.5H378.1z M378.1,421.7h1.3c0.5,0,0.7-0.3,0.7-0.6
                    c0-0.3-0.3-0.7-0.9-0.7C378.6,420.4,378.2,420.9,378.1,421.7z"/>
                  <path style="fill:#231F20;" d="M387.2,417.5c1.5,0,2.3,0.9,2.3,2.3c0,1.4-0.9,2.3-2.3,2.3h-1.4v2.7h-1.4v-7.3H387.2z
                     M385.9,418.7v2.2h1.2c0.7,0,1.1-0.3,1.1-1.1c0-0.8-0.4-1.1-1.1-1.1H385.9z"/>
                  <path style="fill:#231F20;" d="M395,419.4v5.4h-1.2l-0.1-0.6h0c-0.4,0.5-0.9,0.7-1.6,0.7c-1.1,0-1.6-0.7-1.6-1.7v-3.8h1.3v3.7
                    c0,0.5,0.4,0.8,0.9,0.8s1.1-0.3,1.1-1v-3.5H395z M394.1,417.3l-0.9,1.5h-0.9l0.6-1.5H394.1z"/>
                  <path style="fill:#231F20;" d="M396.1,424.8v-7.5h1.3v2.8h0c0.4-0.5,0.8-0.7,1.4-0.7c1.4,0,2,1.1,2,2.8c0,1.7-0.8,2.7-2.5,2.7
                    H396.1z M397.4,423.8h0.9c0.9,0,1.2-0.7,1.2-1.7c0-1-0.2-1.7-1.1-1.7c-0.5,0-1,0.3-1,1V423.8z"/>
                  <path style="fill:#231F20;" d="M401.8,417.3h1.3v6.1c0,0.4,0.1,0.5,0.8,0.5v1c-1.8,0.1-2-0.3-2-1.5V417.3z"/>
                  <path style="fill:#231F20;" d="M405.7,417.3v1.5h-1.3v-1.5H405.7z M405.7,419.4v5.4h-1.3v-5.4H405.7z"/>
                  <path style="fill:#231F20;" d="M409.2,419.3c0.5,0,0.9,0.1,1.7,0.2v0.8h-1.7c-0.9,0-1.1,0.7-1.1,1.7c0,1.1,0.2,1.7,1.1,1.7h1.7
                    v0.8c-0.7,0.2-1.1,0.2-1.7,0.2c-1.8,0-2.5-1.1-2.5-2.8C406.7,420.4,407.4,419.3,409.2,419.3z"/>
                  <path style="fill:#231F20;" d="M411.4,422.1c0-1.7,0.7-2.8,2.5-2.8c1.8,0,2.5,1.1,2.5,2.8c0,1.7-0.7,2.8-2.5,2.8
                    C412.1,424.9,411.4,423.8,411.4,422.1z M412.8,422.1c0,1.1,0.2,1.7,1.1,1.7c0.9,0,1.1-0.7,1.1-1.7c0-1-0.2-1.7-1.1-1.7
                    C413,420.4,412.8,421.1,412.8,422.1z"/>
                </g>
              </g>
              <g>
                <g>
                  <path style="fill:#231F20;" d="M306,516.8h-1.9l-2.2-7.4h1.5l1.6,5.8h0l1.6-5.8h1.5L306,516.8z"/>
                  <path style="fill:#231F20;" d="M309.7,514.4c0,0.8,0.3,1.3,1.1,1.3h1.9v0.9c-0.7,0.2-1.3,0.2-1.9,0.2c-1.8,0-2.5-1.1-2.5-2.8
                    c0-1.7,0.8-2.8,2.6-2.8c1.5,0,2.1,0.8,2.1,1.7c0,0.8-0.3,1.5-1.6,1.5H309.7z M309.7,513.6h1.3c0.5,0,0.7-0.3,0.7-0.6
                    c0-0.3-0.3-0.7-0.9-0.7C310.1,512.3,309.8,512.9,309.7,513.6z"/>
                  <path style="fill:#231F20;" d="M314,516.8v-7.5h1.3v2.8h0c0.4-0.5,0.9-0.7,1.6-0.7c1.1,0,1.6,0.7,1.6,1.7v3.8h-1.3V513
                    c0-0.5-0.4-0.8-0.9-0.8c-0.5,0-1,0.3-1,1v3.5H314z"/>
                  <path style="fill:#231F20;" d="M320.8,511.4v5.4h-1.3v-5.4H320.8z M321.6,509.2l-0.9,1.5h-0.9l0.6-1.5H321.6z"/>
                  <path style="fill:#231F20;" d="M324.3,511.3c0.5,0,0.9,0.1,1.7,0.2v0.8h-1.7c-0.9,0-1.1,0.7-1.1,1.7c0,1.1,0.2,1.7,1.1,1.7h1.7
                    v0.9c-0.7,0.2-1.1,0.2-1.7,0.2c-1.8,0-2.5-1.1-2.5-2.8C321.8,512.4,322.5,511.3,324.3,511.3z"/>
                  <path style="fill:#231F20;" d="M331.2,511.4v5.4H330l-0.1-0.6h0c-0.4,0.5-0.9,0.7-1.6,0.7c-1.1,0-1.6-0.7-1.6-1.7v-3.8h1.3v3.7
                    c0,0.5,0.4,0.8,0.9,0.8s1.1-0.3,1.1-1v-3.5H331.2z"/>
                  <path style="fill:#231F20;" d="M332.3,509.2h1.3v6.1c0,0.4,0.1,0.5,0.8,0.5v1c-1.8,0.1-2-0.3-2-1.5V509.2z"/>
                  <path style="fill:#231F20;" d="M334.8,514.1c0-1.7,0.7-2.8,2.5-2.8c1.8,0,2.5,1.1,2.5,2.8c0,1.7-0.7,2.8-2.5,2.8
                    C335.4,516.9,334.8,515.8,334.8,514.1z M336.1,514.1c0,1.1,0.2,1.7,1.1,1.7c0.9,0,1.1-0.7,1.1-1.7c0-1-0.2-1.7-1.1-1.7
                    C336.4,512.3,336.1,513,336.1,514.1z"/>
                  <path style="fill:#231F20;" d="M346,509.2h1.3v7.5h-1.2l-0.1-0.6h0c-0.4,0.5-0.8,0.7-1.4,0.7c-1.4,0-2-1.1-2-2.8
                    c0-1.7,0.7-2.8,2.4-2.8c0.4,0,0.6,0,1.1,0.1V509.2z M346,512.3H345c-0.9,0-1.2,0.7-1.2,1.7c0,1,0.2,1.8,1.1,1.8c0.5,0,1-0.3,1-1
                    V512.3z"/>
                  <path style="fill:#231F20;" d="M349.6,514.4c0,0.8,0.3,1.3,1.1,1.3h1.9v0.9c-0.7,0.2-1.3,0.2-1.9,0.2c-1.8,0-2.5-1.1-2.5-2.8
                    c0-1.7,0.8-2.8,2.6-2.8c1.5,0,2.1,0.8,2.1,1.7c0,0.8-0.3,1.5-1.6,1.5H349.6z M349.6,513.6h1.3c0.5,0,0.7-0.3,0.7-0.6
                    c0-0.3-0.3-0.7-0.9-0.7C350,512.3,349.7,512.9,349.6,513.6z"/>
                  <path style="fill:#231F20;" d="M358.8,509.3c0.5,0,1.3,0.1,2,0.2v1H359c-1.5,0-1.8,1.4-1.8,2.5c0,1.2,0.2,2.6,1.8,2.6h1.8v1
                    c-0.7,0.2-1.5,0.2-2,0.2c-2.4,0-3-1.9-3-3.8C355.9,511.3,356.4,509.3,358.8,509.3z"/>
                  <path style="fill:#231F20;" d="M362,512.3v-0.8c0.7-0.1,1.5-0.2,2.1-0.2c1.3,0,2,0.4,2,1.8v3.7h-1.2l-0.1-0.6h0
                    c-0.4,0.6-0.9,0.7-1.5,0.7c-1,0-1.6-0.7-1.6-1.6c0-1.3,0.9-1.6,1.8-1.6h1.4v-0.5c0-0.5-0.2-0.8-0.9-0.8H362z M364.8,514.4h-1
                    c-0.6,0-0.9,0.2-0.9,0.7c0,0.5,0.4,0.7,0.9,0.7c0.4,0,1-0.3,1-1V514.4z"/>
                  <path style="fill:#231F20;" d="M367.2,516.8v-5.4h1.2l0.1,0.9h0c0.4-0.7,1-1,1.7-1v1.3h-0.3c-1,0-1.4,0.5-1.4,1.1v3.1H367.2z"/>
                  <path style="fill:#231F20;" d="M374.2,516.1L374.2,516.1c-0.4,0.5-0.8,0.7-1.4,0.7c-1.4,0-2-1.1-2-2.8c0-1.7,0.8-2.7,2.4-2.7h2.3
                    v4.8c0,1.7-0.7,2.8-2.5,2.8c-0.5,0-1.1-0.1-1.8-0.2v-0.9h1.9c0.9,0,1.1-0.7,1.1-1.6V516.1z M374.2,512.4h-0.9
                    c-0.9,0-1.2,0.7-1.2,1.7c0,1,0.2,1.7,1.1,1.7c0.5,0,1-0.3,1-1V512.4z"/>
                  <path style="fill:#231F20;" d="M376.8,512.3v-0.8c0.7-0.1,1.5-0.2,2.1-0.2c1.3,0,2,0.4,2,1.8v3.7h-1.2l-0.1-0.6h0
                    c-0.4,0.6-0.9,0.7-1.5,0.7c-1,0-1.6-0.7-1.6-1.6c0-1.3,0.9-1.6,1.8-1.6h1.4v-0.5c0-0.5-0.2-0.8-0.9-0.8H376.8z M379.6,514.4h-1
                    c-0.6,0-0.9,0.2-0.9,0.7c0,0.5,0.4,0.7,0.9,0.7c0.4,0,1-0.3,1-1V514.4z"/>
                </g>
              </g>
              <g>
                <g>
                  <path style="fill:#231F20;" d="M279.4,607.6h-1.9l-2.2-7.4h1.5l1.6,5.8h0l1.6-5.8h1.5L279.4,607.6z"/>
                  <path style="fill:#231F20;" d="M283.1,605.2c0,0.8,0.3,1.3,1.1,1.3h1.9v0.8c-0.7,0.2-1.3,0.2-1.9,0.2c-1.8,0-2.5-1.1-2.5-2.8
                    s0.8-2.8,2.6-2.8c1.5,0,2.1,0.8,2.1,1.7c0,0.8-0.3,1.5-1.6,1.5H283.1z M283.1,604.4h1.3c0.5,0,0.7-0.3,0.7-0.6
                    c0-0.3-0.3-0.7-0.9-0.7C283.5,603.1,283.2,603.6,283.1,604.4z"/>
                  <path style="fill:#231F20;" d="M287.4,607.5V600h1.3v2.8h0c0.4-0.5,0.9-0.7,1.6-0.7c1.1,0,1.6,0.7,1.6,1.7v3.8h-1.3v-3.7
                    c0-0.5-0.4-0.8-0.9-0.8c-0.5,0-1,0.3-1,1v3.5H287.4z"/>
                  <path style="fill:#231F20;" d="M294.3,602.1v5.4H293v-5.4H294.3z M295,600l-0.9,1.5h-0.9l0.6-1.5H295z"/>
                  <path style="fill:#231F20;" d="M297.7,602c0.5,0,0.9,0.1,1.7,0.2v0.8h-1.7c-0.9,0-1.1,0.7-1.1,1.7c0,1.1,0.2,1.7,1.1,1.7h1.7v0.8
                    c-0.7,0.2-1.1,0.2-1.7,0.2c-1.8,0-2.5-1.1-2.5-2.8S295.9,602,297.7,602z"/>
                  <path style="fill:#231F20;" d="M304.6,602.1v5.4h-1.2l-0.1-0.6h0c-0.4,0.5-0.9,0.7-1.6,0.7c-1.1,0-1.6-0.7-1.6-1.7v-3.8h1.3v3.7
                    c0,0.5,0.4,0.8,0.9,0.8s1.1-0.3,1.1-1v-3.5H304.6z"/>
                  <path style="fill:#231F20;" d="M305.7,600h1.3v6.1c0,0.4,0.1,0.5,0.8,0.5v1c-1.8,0.1-2-0.3-2-1.5V600z"/>
                  <path style="fill:#231F20;" d="M308.2,604.8c0-1.7,0.7-2.8,2.5-2.8c1.8,0,2.5,1.1,2.5,2.8s-0.7,2.8-2.5,2.8
                    C308.9,607.6,308.2,606.5,308.2,604.8z M309.5,604.8c0,1.1,0.2,1.7,1.1,1.7c0.9,0,1.1-0.7,1.1-1.7c0-1-0.2-1.7-1.1-1.7
                    C309.8,603.1,309.5,603.8,309.5,604.8z"/>
                  <path style="fill:#231F20;" d="M318.9,600.2c1.5,0,2.3,0.9,2.3,2.3c0,1.4-0.9,2.3-2.3,2.3h-1.4v2.7h-1.4v-7.3H318.9z
                     M317.5,601.4v2.2h1.2c0.7,0,1.1-0.3,1.1-1.1c0-0.8-0.4-1.1-1.1-1.1H317.5z"/>
                  <path style="fill:#231F20;" d="M322.2,603.1v-0.8c0.7-0.1,1.5-0.2,2.1-0.2c1.3,0,2,0.4,2,1.8v3.7h-1.2l-0.1-0.6h0
                    c-0.4,0.6-0.9,0.7-1.5,0.7c-1,0-1.6-0.7-1.6-1.6c0-1.3,0.9-1.6,1.8-1.6h1.4v-0.5c0-0.5-0.2-0.8-0.9-0.8H322.2z M325,605.1h-1
                    c-0.6,0-0.9,0.2-0.9,0.7c0,0.5,0.4,0.7,0.9,0.7c0.4,0,1-0.3,1-1V605.1z"/>
                  <path style="fill:#231F20;" d="M327.4,607.5v-5.4h1.2l0.1,0.9h0c0.4-0.7,1-1,1.7-1v1.3h-0.3c-1,0-1.4,0.5-1.4,1.1v3.1H327.4z"/>
                  <path style="fill:#231F20;" d="M331.5,606.2v-3h-0.8v-0.8l0.8-0.2l0.6-1.5h0.7v1.5h1.3v1h-1.3v2.9c0,0.4,0.2,0.5,0.5,0.5h0.8v0.8
                    c-0.4,0.2-0.7,0.2-1.1,0.2C331.9,607.6,331.5,607,331.5,606.2z"/>
                  <path style="fill:#231F20;" d="M336.1,600v1.5h-1.3V600H336.1z M336.1,602.1v5.4h-1.3v-5.4H336.1z"/>
                  <path style="fill:#231F20;" d="M339.6,602c0.5,0,0.9,0.1,1.7,0.2v0.8h-1.7c-0.9,0-1.1,0.7-1.1,1.7c0,1.1,0.2,1.7,1.1,1.7h1.7v0.8
                    c-0.7,0.2-1.1,0.2-1.7,0.2c-1.8,0-2.5-1.1-2.5-2.8S337.8,602,339.6,602z"/>
                  <path style="fill:#231F20;" d="M346.5,602.1v5.4h-1.2l-0.1-0.6h0c-0.4,0.5-0.9,0.7-1.6,0.7c-1.1,0-1.6-0.7-1.6-1.7v-3.8h1.3v3.7
                    c0,0.5,0.4,0.8,0.9,0.8s1.1-0.3,1.1-1v-3.5H346.5z"/>
                  <path style="fill:#231F20;" d="M347.6,600h1.3v6.1c0,0.4,0.1,0.5,0.8,0.5v1c-1.8,0.1-2-0.3-2-1.5V600z"/>
                  <path style="fill:#231F20;" d="M350.4,603.1v-0.8c0.7-0.1,1.5-0.2,2.1-0.2c1.3,0,2,0.4,2,1.8v3.7h-1.2l-0.1-0.6h0
                    c-0.4,0.6-0.9,0.7-1.5,0.7c-1,0-1.6-0.7-1.6-1.6c0-1.3,0.9-1.6,1.8-1.6h1.4v-0.5c0-0.5-0.2-0.8-0.9-0.8H350.4z M353.3,605.1h-1
                    c-0.6,0-0.9,0.2-0.9,0.7c0,0.5,0.4,0.7,0.9,0.7c0.4,0,1-0.3,1-1V605.1z"/>
                  <path style="fill:#231F20;" d="M355.6,607.5v-5.4h1.2l0.1,0.9h0c0.4-0.7,1-1,1.7-1v1.3h-0.3c-1,0-1.4,0.5-1.4,1.1v3.1H355.6z"/>
                </g>
              </g>
              <g>
                <g>
                  <path style="fill:#D91D5E;" d="M446.9,81.5c0-7.2-5.8-13-13-13v0l0,0c0,0,0,0,0,0l0,0c-7.2,0-13,5.8-13,13c0,7.2,5.8,13,13,13v0
                    c0,0,0,0,0,0l0,0v0C441.1,94.5,446.9,88.7,446.9,81.5z"/>
                  <path style="fill:#D91D5E;" d="M433.9,68.4h-0.1c-7.2,0.1-12.9,5.9-12.9,13h12.9h13.1C446.9,74.4,441.2,68.5,433.9,68.4z"/>
                </g>
                <g>
                  <g>
                    <path style="fill:#FFFFFF;" d="M427.9,81.5c0-2.6,0.3-5.4,3.5-5.4c3.2,0,3.5,2.8,3.5,5.4c0,2.6-0.4,5.4-3.5,5.4
                      C428.3,86.9,427.9,84.1,427.9,81.5z M433.6,81.5c0-1.8-0.1-4.2-2.2-4.2c-2.1,0-2.2,2.3-2.2,4.2c0,1.8,0.1,4.2,2.2,4.2
                      C433.5,85.7,433.6,83.3,433.6,81.5z"/>
                    <path style="fill:#FFFFFF;" d="M439.8,76.2v10.5h-1.3v-9.1l-2,1.1l-0.5-1l2.5-1.5H439.8z"/>
                  </g>
                </g>
              </g>
              <g>
                <g>
                  <path style="fill:#D91D5E;" d="M402.8,205.1c0-7.2-5.8-13-13-13v0c0,0,0,0,0,0s0,0,0,0v0c-7.2,0-13,5.8-13,13c0,7.2,5.8,13,13,13
                    v0c0,0,0,0,0,0s0,0,0,0v0C397,218.1,402.8,212.2,402.8,205.1z"/>
                  <path style="fill:#D91D5E;" d="M389.8,192l-0.1,0c-7.2,0.1-12.9,5.9-12.9,13h12.9h13.1C402.8,198,397.1,192.1,389.8,192z"/>
                </g>
                <g>
                  <g>
                    <path style="fill:#FFFFFF;" d="M382.3,205.1c0-2.6,0.3-5.4,3.5-5.4c3.2,0,3.5,2.8,3.5,5.4c0,2.6-0.3,5.4-3.5,5.4
                      C382.6,210.5,382.3,207.7,382.3,205.1z M388,205.1c0-1.8-0.1-4.2-2.2-4.2c-2.1,0-2.2,2.3-2.2,4.2c0,1.8,0.1,4.2,2.2,4.2
                      C387.9,209.3,388,206.9,388,205.1z"/>
                    <path style="fill:#FFFFFF;" d="M392.4,209.2h4.8v1.2h-6.4v-1.2c4.4-4.6,4.9-5.2,4.9-6.6c0-0.9-0.6-1.5-2.1-1.5H391V200
                      c1-0.2,1.9-0.3,2.7-0.3c1.9,0,3.4,0.8,3.4,2.7C397.1,203.9,396.5,204.9,392.4,209.2L392.4,209.2z"/>
                  </g>
                </g>
              </g>
              <g>
                <g>
                  <path style="fill:#D91D5E;" d="M367.7,325.7c0-7.2-5.8-13-13-13v0l0,0l0,0v0c-7.2,0-13,5.8-13,13s5.8,13,13,13v0l0,0l0,0v0
                    C361.9,338.7,367.7,332.9,367.7,325.7z"/>
                  <path style="fill:#D91D5E;" d="M354.8,312.7l-0.1,0c-7.2,0.1-12.9,5.9-12.9,13h12.9h13.1C367.7,318.6,362,312.8,354.8,312.7z"/>
                </g>
                <g>
                  <g>
                    <path style="fill:#FFFFFF;" d="M347.4,325.7c0-2.6,0.3-5.4,3.5-5.4c3.2,0,3.5,2.8,3.5,5.4c0,2.6-0.4,5.4-3.5,5.4
                      C347.7,331.1,347.4,328.3,347.4,325.7z M353.1,325.7c0-1.8-0.1-4.2-2.2-4.2c-2.1,0-2.2,2.3-2.2,4.2s0.1,4.2,2.2,4.2
                      C353,329.9,353.1,327.6,353.1,325.7z"/>
                    <path style="fill:#FFFFFF;" d="M361.8,321.6l-3.4,3.2c2.7,0.7,3.7,1.8,3.7,3.4c0,1.9-1.4,2.9-3.4,2.9c-0.8,0-1.7-0.1-2.7-0.3
                      v-0.9h2.7c1.5,0,2.1-0.7,2.1-1.6c0-1.5-1.2-2-3.9-2.7v-0.7l3.2-3.1h-4v-1.1h5.8V321.6z"/>
                  </g>
                </g>
              </g>
              <g>
                <g>
                  <path style="fill:#D91D5E;" d="M329.5,422.2c0-7.2-5.8-13-13-13v0c0,0,0,0,0,0s0,0,0,0v0c-7.2,0-13,5.8-13,13s5.8,13,13,13v0
                    c0,0,0,0,0,0s0,0,0,0v0C323.7,435.2,329.5,429.4,329.5,422.2z"/>
                  <path style="fill:#D91D5E;" d="M316.5,409.2l-0.1,0c-7.2,0.1-12.9,5.9-12.9,13h12.9h13.1C329.5,415.1,323.8,409.2,316.5,409.2z"
                    />
                </g>
                <g>
                  <g>
                    <path style="fill:#FFFFFF;" d="M308.7,422.2c0-2.6,0.3-5.4,3.5-5.4c3.2,0,3.5,2.8,3.5,5.4c0,2.6-0.4,5.4-3.5,5.4
                      C309,427.6,308.7,424.8,308.7,422.2z M314.4,422.2c0-1.8-0.1-4.2-2.2-4.2c-2.1,0-2.2,2.3-2.2,4.2c0,1.8,0.1,4.2,2.2,4.2
                      C314.3,426.4,314.4,424,314.4,422.2z"/>
                    <path style="fill:#FFFFFF;" d="M323,421.4v2.5h1.2v1.2H323v2.4h-1.3v-2.4h-4.5v-1.1l3.9-7h1.4l-3.9,7h3.2l0.3-2.5H323z"/>
                  </g>
                </g>
              </g>
              <g>
                <g>
                  <path style="fill:#D91D5E;" d="M298.2,514c0-7.2-5.8-13-13-13v0c0,0,0,0,0,0l0,0v0c-7.2,0-13,5.8-13,13c0,7.2,5.8,13,13,13v0l0,0
                    c0,0,0,0,0,0l0,0C292.4,527.1,298.2,521.2,298.2,514z"/>
                  <path style="fill:#D91D5E;" d="M285.3,501l-0.1,0c-7.2,0.1-12.9,5.9-12.9,13h12.9h13.1C298.2,506.9,292.5,501.1,285.3,501z"/>
                </g>
                <g>
                  <g>
                    <path style="fill:#FFFFFF;" d="M277.8,514.1c0-2.6,0.3-5.4,3.5-5.4c3.2,0,3.5,2.8,3.5,5.4c0,2.6-0.4,5.4-3.5,5.4
                      C278.2,519.4,277.8,516.7,277.8,514.1z M283.5,514.1c0-1.8-0.1-4.2-2.2-4.2c-2.1,0-2.2,2.3-2.2,4.2c0,1.8,0.1,4.2,2.2,4.2
                      C283.5,518.2,283.5,515.9,283.5,514.1z"/>
                    <path style="fill:#FFFFFF;" d="M288,512.8c3.5,1,4.5,2.2,4.5,3.8c0,1.9-1.4,2.9-3.4,2.9c-0.8,0-1.7-0.1-2.7-0.3v-0.9h2.7
                      c1.5,0,2.1-0.7,2.1-1.6c0-1.5-1.3-2.1-4.4-3l0.2-4.8h5.1v1.2h-3.9L288,512.8z"/>
                  </g>
                </g>
              </g>
              <g>
                <g>
                  <g>
                    <path style="fill:#D91D5E;" d="M271.1,605.4c0-7.2-5.8-13-13-13v0c0,0,0,0,0,0l0,0v0c-7.2,0-13,5.8-13,13c0,7.2,5.8,13,13,13v0
                      l0,0c0,0,0,0,0,0l0,0C265.3,618.5,271.1,612.6,271.1,605.4z"/>
                    <path style="fill:#D91D5E;" d="M258.1,592.4l-0.1,0c-7.2,0.1-12.9,5.9-12.9,13H258h13.1C271.1,598.3,265.4,592.5,258.1,592.4z"
                      />
                  </g>
                </g>
                <g>
                  <path style="fill:#FFFFFF;" d="M250.7,605.4c0-2.6,0.3-5.4,3.5-5.4c3.2,0,3.5,2.8,3.5,5.4c0,2.6-0.4,5.4-3.5,5.4
                    C251.1,610.8,250.7,608,250.7,605.4z M256.4,605.4c0-1.8-0.1-4.2-2.2-4.2c-2.1,0-2.2,2.3-2.2,4.2c0,1.8,0.1,4.2,2.2,4.2
                    C256.3,609.6,256.4,607.2,256.4,605.4z"/>
                  <path style="fill:#FFFFFF;" d="M259.6,605.4c0-2.6,1-5.4,4.1-5.4c0.7,0,1.2,0.1,2.2,0.3v0.9h-2.1c-2.1,0-2.7,1.7-2.8,3.3
                    c0.7-0.1,1.3-0.2,1.9-0.2c2.4,0,3.6,0.9,3.6,3.1c0,2-1.2,3.3-3.3,3.3C260.1,610.8,259.6,608.3,259.6,605.4z M265.2,607.5
                    c0-1.4-0.7-2-2.3-2H261c0,1.7-0.1,4,2.2,4C264.4,609.6,265.2,609,265.2,607.5z"/>
                </g>
              </g>
              <g>
                <g>
                  <path style="fill:#D91D5E;" d="M251.8,675.5c0-7.2-5.8-13-13-13v0l0,0l0,0v0c-7.2,0-13,5.8-13,13c0,7.2,5.8,13,13,13v0l0,0l0,0v0
                    C245.9,688.5,251.8,682.7,251.8,675.5z"/>
                  <path style="fill:#D91D5E;" d="M238.8,662.5h-0.1c-7.2,0.1-12.9,5.9-12.9,13h12.9h13.1C251.8,668.4,246.1,662.5,238.8,662.5z"/>
                </g>
                <g>
                  <path style="fill:#FFFFFF;" d="M230.8,675.5c0-2.6,0.3-5.4,3.5-5.4c3.2,0,3.5,2.8,3.5,5.4c0,2.6-0.4,5.4-3.5,5.4
                    C231.1,680.9,230.8,678.1,230.8,675.5z M236.5,675.5c0-1.8-0.1-4.2-2.2-4.2s-2.2,2.3-2.2,4.2c0,1.8,0.1,4.2,2.2,4.2
                    S236.5,677.3,236.5,675.5z"/>
                  <path style="fill:#FFFFFF;" d="M241.7,680.8h-1.4l3.9-9.3h-4.9v-1.2h6.3v1.1L241.7,680.8z"/>
                </g>
              </g>
            </g>
          </svg>
        </div>
      </div>
    </div>
  </main>
  <!--  Pantalla dos -->
  <main  id="screen-2" class="j-workspace test-structure" style="z-index:13;background-color:white;" >
    <div class="j-wrap">
      <div class="grid">
        <div class="unit half">
          <h2>Bici Ley</h2>
          <p>La reforma legal llamada ‘Biciley’ avalada por los legisladores plantea que los ciclistas tienen el derecho de circular al centro del carril en las vialidades. La ‘Biciley’ son cambios y adiciones a nuevos artículos a la Ley de Movilidad y Transporte, obligará a los ciclistas a circular en el sentido de la calle a rebasar solo por la izquierda a los vehículos automotores y a portar materiales reflejantes.</p>
          <p>Los conductores deberán mantener una distancia mínima de metro y medio para rebasar por la derecha a un ciclista y tendrán que mantener un espacio de 7 metros cuando tenga al frente a un velocípedo, cuando el flujo vehicular está en movimiento y de 5 metros cuando está detenido el tráfico.</p>
          <div class="horizontal-btn-group">
            <button class="bg-color-success">Siguiente</button>
            <button class=" btn-outline bg-color-info sm">Regresar</button>
          </div>
        </div>
        <div class="unit half">
          <img src="<?php echo $config->urls->templates; ?>assets/images/bici-ley.svg" alt="">
        </div>
      </div>
    </div>
  </main>
  <!--  Pantalla tres -->
  <main  id="screen-3" class="j-workspace test-structure" style="z-index:11;background-color:white;" >
    <div class="j-wrap">
      <div class="grid">
        <div class="unit half">
          <h2>Derechos Ciclistas</h2>
          <p>Tener una movilidad segura y preferencial antes que el transporte público y particular.</p>
          <p>Circular al centro del carril derecho y contar con áreas de espera ciclista al frente del carril en las vialidades, así como contar con vías de circulación seguras, interconectadas y de uso exclusivo.</p>
          <div class="horizontal-btn-group">
            <button class="bg-color-success">Siguiente</button>
            <button class=" btn-outline bg-color-info sm">Regresar</button>
          </div>
        </div>
        <div class="unit half">
          <img src="<?php echo $config->urls->templates; ?>assets/images/derechos-ciclistas-1.svg" height="40%;" alt="">
          <img src="<?php echo $config->urls->templates; ?>assets/images/derechos-ciclistas-2.svg" height="40%;" alt="">
        </div>
      </div>
    </div>
  </main>
  <!--  Pantalla cuatro -->
  <main  id="screen-4" class="j-workspace test-structure" style="z-index:10;background-color:white;" >
    <div class="j-wrap">
      <div class="grid">
        <div class="unit half">
          <h2>Derechos Ciclistas</h2>
          <p>Contar con áreas de espera ciclista al frente del carril en las vialidades, así como contar con vías de circulación seguras, interconectadas y de uso exclusivo</p>
          <div class="horizontal-btn-group">
            <button class="bg-color-success">Siguiente</button>
            <button class=" btn-outline bg-color-info sm">Regresar</button>
          </div>
        </div>
        <div class="unit half">
          <img src="<?php echo $config->urls->templates; ?>assets/images/derechos-ciclistas-3.svg" height="90%;" alt="">
        </div>
      </div>
    </div>
  </main>
  <!--  Pantalla cinco -->
  <main  id="screen-5" class="j-workspace test-structure" style="z-index:9;background-color:white;" >
    <div class="j-wrap">
      <div class="grid">
        <div class="unit half">
          <h2>Obligaciones de los ciclistas</h2>
          <p>Respetar los semáforos y pedalear sobre y en el sentido de la vialidad, nunca por la banqueta.</p>
          <p>Utilizar la infrestructura ciclista existente y no utilizar los carriles exclusivos del transporte público masivo.</p>
          <p>Dar preferencia de paso a los peatones y personas con discapacidad.</p>
          <div class="horizontal-btn-group">
            <button class="bg-color-success">Siguiente</button>
            <button class=" btn-outline bg-color-info sm">Regresar</button>
          </div>
        </div>
        <div class="unit half">
          <img src="<?php echo $config->urls->templates; ?>assets/images/obligaciones-ciclistas.svg" height="40%;" alt="">
          <img src="<?php echo $config->urls->templates; ?>assets/images/obligaciones-ciclistas-2.svg" height="40%;" alt="">
        </div>
      </div>
    </div>
  </main>
  <!--  Pantalla seis -->
  <main  id="screen-6" class="j-workspace test-structure" style="z-index:8;background-color:white;" >
    <div class="j-wrap">
      <div class="grid">
        <div class="unit half">
          <h2>Obligaciones de los ciclistas</h2>
          <p>Indica tus movimientos mediante señales con el brazo o la mano.</p>
          <p>Rebasar solo por el carril izquierdo</p>
          <img src="<?php echo $config->urls->templates; ?>assets/images/obligaciones-ciclistas-3.svg" height="60%" alt="">
        </div>
        <div class="unit half">
          <p>Evitar el uso de audífonos y celulares mientras circulas.</p>
          <p>No exceder la capacidad de transporte o de carga de la bicicleta </p>
          <img src="<?php echo $config->urls->templates; ?>assets/images/obligaciones-ciclistas-4.svg" height="50%;" alt="">
          <div class="horizontal-btn-group">
            <button class="bg-color-success">Siguiente</button>
            <button class=" btn-outline bg-color-info sm">Regresar</button>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!--  Pantalla siete -->
  <main  id="screen-7" class="j-workspace test-structure" style="z-index:7;background-color:white;" >
    <div class="j-wrap">
      <div class="grid">
        <div class="unit half">
          <h2>Seguridad vial</h2>
          <p>El ciclista al igual que el automovilista debe indicar sus movimientos, es importante aprender las señales (como ciclista) y entenderlas (como automovilista)</p>
          <div class="horizontal-btn-group">
            <button class="bg-color-success">Siguiente</button>
            <button class=" btn-outline bg-color-info sm">Regresar</button>
          </div>
        </div>
        <div class="unit half">
          <img src="<?php echo $config->urls->templates; ?>assets/images/seguridad-vial.svg" height="30%" width="90%" alt="">
          <img src="<?php echo $config->urls->templates; ?>assets/images/seguridad-vial-2.svg" height="30%" width="60%" alt="">
          <img src="<?php echo $config->urls->templates; ?>assets/images/seguridad-vial-3.svg" height="30%" width="90%" alt="">
        </div>
      </div>
    </div>
  </main>
  <!--  Pantalla ocho -->
  <main  id="screen-8" class="j-workspace test-structure" style="z-index:6;background-color:white;" >
    <div class="j-wrap">
      <div class="grid">
        <div class="unit half">
          <h2>Seguridad vial</h2>
          <p>Los automóviles y autobuses tienen distintos puntos ciegos y zonas de peligro, debemos conocerlos para evitar colisiones</p>
          <div class="horizontal-btn-group">
            <button class="bg-color-success">Siguiente</button>
            <button class=" btn-outline bg-color-info sm">Regresar</button>
          </div>
        </div>
        <div class="unit half">
          <img src="<?php echo $config->urls->templates; ?>assets/images/seguridad-vial-4.svg" height="90%" width="90%" alt="">
        </div>
      </div>
    </div>
  </main>
  <!--  Pantalla nueve -->
  <main  id="screen-9" class="j-workspace test-structure" style="z-index:5;background-color:white;" >
    <div class="j-wrap">
      <div class="grid">
        <div class="unit half">
          <h2>Infrestructura</h2>
          <h4>Triángulo de prioridad ciclista</h4>
          <p>Indica las vías en las que el ciclista tiene preferencia sobre automóviles, motos y transporte público.</p>
          <h4>Área de protección o buffers</h4>
          <p>Indica la zona de riesgo por donde ningún vehículo automotor o ciclista debe circular o invadir.</p>
          <h4>Cruce ciclista</h4>
          <p>Es el espacio destinado para que el ciclista espere el semáforo y tenga prioridad de paso sobre el auto.</p>
          <h4>Sólo ciclistas</h4>
          <p>Indica que es un carril exclusivo para la circulación ciclista.</p>
          <h4>Ciclovía</h4>
          <p>Señala los carriles exclusivos para la circulación ciclista.
              Ni autos, ni motos deben invadirlas.</p>
          <div class="horizontal-btn-group">
            <button class="bg-color-success" onclick="toggleQuestion(2)">Comenzar examen</button>
            <button class=" btn-outline bg-color-info sm" onclick="toggleQuestion(2)">Regresar</button>
          </div>
        </div>
        <div class="unit half">
          <img src="<?php echo $config->urls->templates; ?>assets/images/infrestructura-ciclista.svg" height="90%" width="90%" alt="">
        </div>
      </div>
    </div>
  </main>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script>
  var clases=["hide-top", "hide-bottom", "hide-left", "hide-right", "hide-right", "hide-left", "hide-bottom", "hide-top"];
  $('.bg-color-success').click(function() {
     var rand=Math.floor((Math.random() * 8));
     var id=$(this).closest('main').attr('id');
     $("#"+id).addClass(clases[rand]);
   });
  $('.btn-outline').click(function() {
     var num = parseInt($(this).closest('main').attr('id').replace("screen-", ""));
     $("#screen-"+(num-1)).removeClass("hide-top").removeClass("hide-left").removeClass("hide-right").removeClass("hide-bottom");
   });
  </script>
</body>
</html>
