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
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css" integrity="sha256-K3Njjl2oe0gjRteXwX01fQD5fkk9JFFBdUHy/h38ggY=" crossorigin="anonymous" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css" />
  <link href="https://cdn.rawgit.com/cobyism/gridism/0.2.2/gridism.css" rel="stylesheet">
  <link href="<?php echo $config->urls->templates; ?>static/455375-1485995688/styles/main.css" rel="stylesheet">
  <link rel="apple-touch-icon" href="<?php echo $config->urls->templates; ?>static/455375-1485995688/images/favicon-180x180.png">
  <link rel="shortcut icon" href="<?php echo $config->urls->templates; ?>static/455375-1485995688/images/favicon-64x64.png">
</head>
<body class="<?php echo ($page->template=='home') ? 'home':k::page_name(); ?> >">
<svg style="display: none;">
  <symbol id="k-svg-icon-drawer" viewBox="0 0 50 72">
    <path d="M44 23H6c-1.657 0-3-1.343-3-3s1.343-3 3-3h38c1.657 0 3 1.343 3 3s-1.343 3-3 3zM44 39.007H6c-1.657 0-3-1.343-3-3s1.343-3 3-3h38c1.657 0 3 1.343 3 3s-1.343 3-3 3zM44 55H6c-1.657 0-3-1.343-3-3s1.343-3 3-3h38c1.657 0 3 1.343 3 3s-1.343 3-3 3z" />
  </symbol>
  <symbol id="k-svg-icon-close" viewBox="0 0 46 72">
    <path d="M27.243 36l14.88-14.88c1.17-1.17 1.17-3.07 0-4.24-1.172-1.173-3.072-1.173-4.243 0L23 31.757 8.122 16.878c-1.17-1.17-3.07-1.17-4.242 0-1.172 1.172-1.172 3.072 0 4.243L18.758 36 3.878 50.88c-1.17 1.17-1.17 3.07 0 4.24.587.587 1.355.88 2.123.88s1.536-.293 2.122-.88L23 40.243l14.88 14.88c.585.585 1.353.878 2.12.878.768 0 1.535-.293 2.12-.88 1.173-1.17 1.173-3.07 0-4.24L27.244 36z" />
  </symbol>
</svg>
  <!-- Header -->
  <header class="k-header">
    <div class="wrap wider grid">
      <div class="k-container">
        <a href="<?php echo $config->urls->root ?>" class="k-logo"><img src="<?php echo $config->urls->templates; ?>static/455375-1485995688/images/mibici-logo.svg" alt="<?php echo __("MiBici"); ?>"></a>
        <nav class="k-navbar">
          <ul>
            <li><a href="<?php echo $pages->get(1090)->url; ?>" alt="<?php echo $pages->get(1090)->title; ?>"><?php echo $pages->get(1090)->title; ?></a></li>
            <li><a href="<?php echo $pages->get(1091)->url; ?>" alt="<?php echo $pages->get(1090)->title; ?>"><?php echo $pages->get(1091)->title; ?></a></li>
            <li><a href="<?php echo $pages->get(1094)->url; ?>" alt="<?php echo $pages->get(1090)->title; ?>"><?php echo $pages->get(1094)->title; ?></a></li>
            <li class="k-nav-responsive-elements"><a href="<?php echo $pages->get(1096)->url; ?>" alt="<?php echo $pages->get(1096)->title; ?>"><?php echo $pages->get(1096)->title; ?></a></li>
            <li class="k-nav-responsive-elements"><a href="<?php echo $pages->get(1095)->url; ?>" alt="<?php echo $pages->get(1095)->title; ?>">
            <?php echo __("Regístrate"); ?></a></li>
            <li><a href="https://bktbp.zendesk.com/hc/es" target="_blank" alt="<?php echo __("Ayuda"); ?>"><?php echo __("Ayuda"); ?></a></li>
          </ul>
          <div class="k-navbar-controls">
            <svg class="k-navbar-close"><use fill="currentcolor" xlink:href="#k-svg-icon-close"></use></svg>
            <svg class="k-navbar-hamburger"><use fill="currentcolor" xlink:href="#k-svg-icon-drawer"></use></svg>
          </div>
        </nav>
        <div class="k-session">
          <ul>
            <li class="k-login-link">
              <a href="<?php echo $pages->get(1096)->url; ?>" alt="<?php echo $pages->get(1096)->title; ?>">
               <img src="<?php echo $config->urls->templates; ?>static/455375-1485995688/images/user-icon.png" alt="<?php echo __("Iniciar sesión"); ?>"> 
               <?php echo __("Iniciar sesión"); ?>
              </a>
            </li>
            <li class="k-session-signup-button">
             <a href="<?php echo $pages->get(1095)->url; ?>" alt="<?php echo $pages->get(1095)->title; ?>">
               <?php echo __("Regístrate"); ?>
               <span>
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="15px" height="15px"><path d="M23.9 13.8L13.1 3C12 1.8 10 1.8 8.9 3c-1.2 1.2-1.2 3.1 0 4.2l8.8 8.8-8.8 8.8c-1.2 1.2-1.2 3.1 0 4.2 1.2 1.2 3.1 1.2 4.2 0l10.8-10.8c.6-.6.9-1.4.9-2.2 0-.8-.3-1.6-.9-2.2z" fill="#de223d"/></svg>
               </span>
             </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>