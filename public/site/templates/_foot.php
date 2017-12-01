<footer>
        <div class="footer-container">
            <div class="grid">
            <div class="footer-logos unit one-quarter">
                <a href="<?php echo $config->urls->root; ?>"><img src="<?php echo $config->urls->templates; ?>static/455375-1495356493/images/mi-bici-logo-footer.svg" alt="<?php echo __("MIBICI"); ?>" /></a>
                <a href="http://www.jalisco.gob.mx/" target="_blank"><img src="<?php echo $config->urls->templates; ?>static/455375-1495356493/images/mi-bici-jalisco-logo.svg" alt="<?php echo __("Gobierno del estado de Jalisco"); ?>" /></a>
                <a href="http://www.jalisco.gob.mx/es/gobierno/organismos/IMTJ" target="_blank">
                <img src="<?php echo $config->urls->templates; ?>static/455375-1495356493/images/mi-bici-imtj-logo.svg" alt="<?php echo __("IMTJ"); ?>" /></a>
                <select id="lang" onchange="changeLan('<?php echo substr($page->path, 3) ?>'); return false">
                  <option value="es" <?php if($_COOKIE["language"]=='1087') echo 'selected'; ?>>Español</option>
                  <option value="en" <?php if($_COOKIE["language"]=='1089') echo 'selected'; ?>>English</option>
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
                    <img src="<?php echo $config->urls->templates; ?>static/455375-1495356493/images/mi-bici-mac-app.svg" alt="<?php echo __("Descargar en la App Store"); ?>" /></a>
                    <a href="https://play.google.com/store/apps/details?id=itds.lo.Mibici&hl=es_419" target="_blank" rel="noreferrer">
                    <img src="<?php echo $config->urls->templates; ?>static/455375-1495356493/images/mi-bici-android-app.svg" alt="<?php echo __("Descargar desde Google Play"); ?>" /></a>
                </div>
            </div>
            <div class="footer-column unit one-quarter">
                <ul class="footer-links-list">
                    <li><a href="https://bktbp.zendesk.com/hc/es" target="_blank" alt="Ayuda"><?php echo __("Centro de ayuda"); ?></a></li>
                    <li><a href="<?php echo $pages->get(1014)->url; ?>" alt="<?php echo $pages->get(1014)->title; ?>"><?php echo $pages->get(1014)->title; ?></a></li>
                    <li><a href="<?php echo $pages->get(1092)->url; ?>" alt="<?php echo $pages->get(1092)->title; ?>"><?php echo $pages->get(1092)->title; ?></a></li>
                </ul>
                <ul class="footer-social">
                    <li><a href="https://www.facebook.com/MiBiciPublica/?fref=ts" alt="<?php echo __("Facebook MIBICI"); ?>" target="_blank" rel="noreferrer">
                    <img src="<?php echo $config->urls->templates; ?>static/455375-1495356493/images/facebook-alt-icon.svg" alt="<?php echo __("Facebook MIBICI"); ?>">
                    <span class="sr-only"><?php echo __("Sigue a MiBici en Facebook"); ?></span></a></li>
                    <li><a href="https://twitter.com/MiBiciPublica" target="_blank" rel="noreferrer"><img src="<?php echo $config->urls->templates; ?>static/455375-1495356493/images/twitter-alt-icon.svg" alt="<?php echo __("Twitter MIBICI"); ?>">
                    <span class="sr-only"><?php echo __("Sigue a MiBici en Twitter"); ?></span></a></li>
                    <li><a href="https://www.instagram.com/mibicipublica/" target="_blank" rel="noreferrer"><img src="<?php echo $config->urls->templates; ?>static/455375-1495356493/images/instagram-icon.svg" alt="<?php echo __("Instagram MIBICI"); ?>">
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
                <img class="bkt-icon" src="<?php echo $config->urls->templates; ?>static/455375-1495356493/images/bkt-icon.svg" alt="<?php echo __("BKT bici publica"); ?>" style="max-width: 100px;">
              </a>
              </div>
            </div>
        </div>
    </footer>
          <!-- schema card -->
    <div itemscope itemtype="https://schema.org/Organization" class="sr-only">
        <div itemprop="legalName"><?php echo __("MIBICI"); ?></div>
            <div itemprop="description"><?php echo __("Excelente auto-servicio de renta de bicicletas en el área metropolitana"); ?></div>
            <div itemprop="areaServed"><?php echo __("Jalisco, México"); ?></div>
        </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
<script src="<?php echo $config->urls->templates; ?>static/455375-1495356493/scripts/main.min.js"></script>
<?php if (stripos($_SERVER['HTTP_USER_AGENT'],"Insights") === false) { ?> 
<script>
$(document).ready(function() {
/*<![CDATA[*/window.zEmbed||function(e,t){var n,o,d,i,s,a=[],r=document.createElement("iframe");window.zEmbed=function(){a.push(arguments)},window.zE=window.zE||window.zEmbed,r.src="javascript:false",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="display: none",d=document.getElementsByTagName("script"),d=d[d.length-1],d.parentNode.insertBefore(r,d),i=r.contentWindow,s=i.document;try{o=s}catch(e){n=document.domain,r.src='javascript:var d=document.open();d.domain="'+n+'";void(0);',o=s}o.open()._l=function(){var o=this.createElement("script");n&&(this.domain=n),o.id="js-iframe-async",o.src=e,this.t=+new Date,this.zendeskHost=t,this.zEQueue=a,this.body.appendChild(o)},o.write('<body onload="document._l();">'),o.close()}("https://assets.zendesk.com/embeddable_framework/main.js","bktbp.zendesk.com");/*]]>*/
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-70250129-14', 'auto');
  ga('send', 'pageview');
});
</script>
<?php } ?>