<footer>
        <div class="footer-container">
            <div class="grid">
            <div class="footer-logos unit one-quarter">
                <a href="<?php echo $config->urls->root; ?>"><img src="<?php echo $config->urls->templates; ?>static/455375-1485995688/images/mi-bici-logo-footer.svg" alt="<?php echo __("MiBici"); ?>" /></a>
                <a href="http://www.jalisco.gob.mx/" target="_blank"><img src="<?php echo $config->urls->templates; ?>static/455375-1485995688/images/mi-bici-jalisco-logo.svg" alt="<?php echo __("Gobierno del estado de Jalisco"); ?>" /></a>
                <a href="http://www.jalisco.gob.mx/es/gobierno/organismos/IMTJ" target="_blank">
                <img src="<?php echo $config->urls->templates; ?>static/455375-1485995688/images/mi-bici-imtj-logo.svg" alt="<?php echo __("IMTJ"); ?>" /></a>
                <select id="lang" onchange="changeLan('<?php echo substr($page->path, 3) ?>'); return false">
                  <option value="es" <?php if($savedLanguage=='1087') echo 'selected'; ?>>Español</option>
                  <option value="en" <?php if($savedLanguage=='1089') echo 'selected'; ?>>English</option>
                </select>
            </div>
            <div class="footer-column unit one-quarter">
                <ul class="footer-links-list">
                    <li> <a href="<?php echo $pages->get(1095)->url; ?>" alt="<?php echo $pages->get(1095)->title; ?>"><?php echo __("Regístrate"); ?></a></li>
                    <li> <a href="<?php echo $pages->get(1090)->url; ?>" alt="<?php echo $pages->get(1090)->title; ?>"><?php echo $pages->get(1090)->title; ?></a></li>
                    <li> <a href="<?php echo $pages->get(1091)->url; ?>" alt="<?php echo $pages->get(1091)->title; ?>"><?php echo $pages->get(1091)->title; ?></a></li>
                    <li> <a href="<?php echo $pages->get(1094)->url; ?>" alt="<?php echo $pages->get(1094)->title; ?>"><?php echo __("Mapa de estaciones"); ?></a></li>
                    <li> <a href="<?php echo $pages->get(1093)->url; ?>" alt="<?php echo $pages->get(1093)->title; ?>"><?php echo __("Conoce la bici"); ?></a></li>
                </ul>
            </div>
            <div class="footer-column unit one-quarter">
                 <ul class="footer-links-list">
                    <li><a href="https://medium.com/mibicipublica"><?php echo __("Blog"); ?></a></li>
                    <li><a href="<?php echo $pages->get(1017)->url; ?>" alt="<?php echo $pages->get(1017)->title; ?>"><?php echo $pages->get(1017)->title; ?></a></li>
                    <li><a href="<?php echo $pages->get(1024)->url; ?>" alt="<?php echo $pages->get(1024)->title; ?>"><?php echo $pages->get(1024)->title; ?></a></li>
                    <li><a href="<?php echo $pages->get(1030)->url; ?>" alt="<?php echo $pages->get(1030)->title; ?>"><?php echo $pages->get(1030)->title; ?></a></li>
                </ul>
                <div class="app-links">
                    <a href="https://itunes.apple.com/mx/app/mibici/id901265862?mt=8" target="_blank" rel="noreferrer">
                    <img src="<?php echo $config->urls->templates; ?>static/455375-1485995688/images/mi-bici-mac-app.svg" alt="<?php echo __("Descargar en la App Store"); ?>" /></a>
                    <a href="https://play.google.com/store/apps/details?id=itds.lo.Mibici&hl=es_419" target="_blank" rel="noreferrer">
                    <img src="<?php echo $config->urls->templates; ?>static/455375-1485995688/images/mi-bici-android-app.svg" alt="<?php echo __("Descargar desde Google Play"); ?>" /></a>
                </div>
            </div>
            <div class="footer-column unit one-quarter">
                <ul class="footer-links-list">
                    <li><a href="https://bktbp.zendesk.com/hc/es" target="_blank" alt="Ayuda"><?php echo __("Centro de ayuda"); ?></a></li>
                    <li><a href="<?php echo $pages->get(1014)->url; ?>" alt="<?php echo $pages->get(1014)->title; ?>"><?php echo $pages->get(1014)->title; ?></a></li>
                    <li><a href="<?php echo $pages->get(1092)->url; ?>" alt="<?php echo $pages->get(1092)->title; ?>"><?php echo $pages->get(1092)->title; ?></a></li>
                </ul>
                <ul class="footer-social">
                    <li><a href="https://www.facebook.com/MiBiciPublica/?fref=ts" target="_blank" rel="noreferrer">
                    <img src="<?php echo $config->urls->templates; ?>static/455375-1485995688/images/facebook-alt-icon.svg" alt="<?php echo __("Facebook MIBICI"); ?>">
                    <span class="sr-only"><?php echo __("Sigue a MiBici en Facebook"); ?></span></a></li>
                    <li><a href="https://twitter.com/MiBiciPublica" target="_blank" rel="noreferrer"><img src="<?php echo $config->urls->templates; ?>static/455375-1485995688/images/twitter-alt-icon.svg" alt="<?php echo __("Twitter MIBICI"); ?>">
                    <span class="sr-only"><?php echo __("Sigue a MiBici en Twitter"); ?></span></a></li>
                    <li><a href="https://www.instagram.com/mibicipublica/" target="_blank" rel="noreferrer"><img src="<?php echo $config->urls->templates; ?>static/455375-1485995688/images/instagram-icon.svg" alt="<?php echo __("Instagram MIBICI"); ?>">
                    <span class="sr-only"><?php echo __("Mira las fotografías de MiBici en Instagram"); ?></span></a></li>
                </ul>
            </div>
                </div>
        </div>
        <div class="footer-bottom">
            <div class="grid legal">
               <div>
                <a href="<?php echo $pages->get(1027)->url; ?>" alt="<?php echo $pages->get(1027)->title; ?>"><?php echo $pages->get(1027)->title; ?></a> <span> | </span> <a href="<?php echo $pages->get(1028)->url; ?>" alt="<?php echo $pages->get(1028)->title; ?>"><?php echo $pages->get(1028)->title; ?></a>
               </div>
            </div>
            <div class="grid">
              <div>
                mibici.net &copy; <?php echo date('Y'); ?>
              </div>
            </div>
            <div class="grid">
              <div>
              <a href="http://bktbicipublica.com/" target="_blank">
               <?php echo __("Operado por: BKT bici publica S.A. de C.V."); ?>
                <img class="bkt-icon" src="<?php echo $config->urls->templates; ?>static/455375-1485995688/images/bkt-icon.svg" alt="<?php echo __("BKT bici publica"); ?>" style="max-width: 100px;">
              </a>
              </div>
            </div>
        </div>
    </footer>
          <!-- schema card -->
    <div itemscope itemtype="https://schema.org/Organization" class="sr-only">
        <div itemprop="legalName"><?php echo __("MiBici"); ?></div>
            <div itemprop="description"><?php echo __("Excelente auto-servicio de renta de bicicletas en el área metropolitana"); ?></div>
            <div itemprop="areaServed"><?php echo __("Jalisco, México"); ?></div>
        </div>
<script src="<?php echo $config->urls->templates; ?>static/455375-1485995688/scripts/main.min.js"></script>
