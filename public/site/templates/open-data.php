<?php include("./_head.php"); ?>
  <!-- Jumbotron: Page header -->
  <div class="k-jumbotron">
    <div class="k-page-header-80">
      <h1 class="k-heading"><?php echo $page->get('headline|title'); ?></h1>
      <p> <?php echo __("Explora, experimenta y comparte los datos de uso de MIBICI"); ?></p>
    </div>
  </div>
  <section class="k-section-80 open-data">
    <div class="grid">
      <div class="unit half" align="center">
        <div class="head-data">
          <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/icon-viajes.png" alt="<?php echo __("Total de viajes realizados"); ?>">
          <h2> <?php echo __("Total de viajes realizados"); ?></h2>
        </div>
        <div class="body-data">
          <p id="trips" class="k-xl">
            <?php echo number_format($page->txt1); ?>
          </p>
        </div>
      </div>
      <div class="unit half" align="center">
        <div class="head-data">
          <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/user-icon.png" alt="<?php echo __("Usuarios registrados"); ?>">
          <h2> <?php echo __("Registros totales"); ?></h2>
        </div>
        <div class="body-data">
          <p id="users" class="k-xl">
            <?php echo number_format($page->txt2); ?>
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: More info <(^_^<) 4 -->
  <section class="k-section-80 open-data">
   <div class="data-widget">
      <h2>
         <?php echo __("Gestor de datos"); ?>
      </h2>
      <p>
        <?php echo __("Conoce cómo se mueve MIBICI, qué estaciones son más ó menos utilizadas, horario con más demanda, la cantidad de viajes y muchos más datos con la siguiente herramienta."); ?>
     </p>
      <div class="grid">
       <p>
          <?php echo __("Indicaciones:"); ?>
       </p>
        <div class="unit half">
          <ul>
            <li>
              <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/open-contraer.svg" alt="<?php echo __("Contrae información de manera general."); ?>">
               <?php echo __("Contrae información de manera general."); ?>
            </li>
            <li>
              <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/open-desdoblar.svg" alt="<?php echo __("Desdobla información de manera agrupada."); ?>">
               <?php echo __("Desdobla información de manera agrupada."); ?>
            </li>
            <li>
              <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/open-desdoblar-desagrupado.svg" alt="<?php echo __("Desdobla información de manera desagrupada."); ?>">
               <?php echo __("Desdobla información de manera desagrupada."); ?>
            </li>
          </ul>
        </div>
        <div class="unit half">
          <ul>
            <li>
              <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/open-desdoblar-particular.svg" alt="<?php echo __("Desdobla información de manera particular."); ?>">
               <?php echo __("Desdobla información de manera particular."); ?>
            </li>
            <li>
              <img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/open-boton-activado.svg" alt="<?php echo __("Botón activado."); ?>">
               <?php echo __("Botón activado."); ?>
            </li>
          </ul>
        </div>
      </div>
      <p><a href="<?php echo $page->file1->url ?>"> <?php echo __("Manual para uso de datos abiertos."); ?> </a></p>
   </div>
   <iframe class="power-bi-desktop" width="100%" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiODdhNDViMWUtMmM1ZC00ZTE4LWI5ZDMtZTY0MTA3ZWQ4NTZjIiwidCI6ImUzY2NhZGY3LWEwYzYtNDI0MC05OGE5LTg4MTY0ODEyZTNmMCIsImMiOjR9" frameborder="0" allowFullScreen="true"></iframe>
   <iframe class="power-bi-mobile" width="100%" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiNTg5M2IyMWItZDUxZS00ZjAxLTg2ZGYtYTAwNWNiZTQyNDk2IiwidCI6ImUzY2NhZGY3LWEwYzYtNDI0MC05OGE5LTg4MTY0ODEyZTNmMCIsImMiOjR9" frameborder="0" allowFullScreen="true"></iframe>
  </section>
  <section class="k-section-80 data-download">
    <h2><?php echo __("Descargas"); ?></h2>
    <p> <?php echo __("Accede a la información en formato .CSV clasificada por mes y por año."); ?></p>
    <section class="data-year-container">
      <!-- Question 1-->
       <?php $years=$pages->find("template=year, sort=title");
      foreach($years as $value=>$year){ ?>
       <dl class="open-dl" onclick="showAnsw('<?php echo $value; ?>');">
        <dt>
          <?php echo $year->title; ?>
         </dt>
        <div id="answ-<?php echo $value; ?>" class="grid open-badge-container">
          <?php $key=0;
            $months=$year->children('include=all');
      foreach($months as $month){
         ?>
       <?php if($key==0) echo '<div class="unit one-quarter"><ul>'; ?>
              <a href="<?php echo ($month->file1) ? $month->file1->url:''; ?>"><li><?php echo $month->title ?></li></a>
               <?php if($key==2) echo '</ul></div>';
              if($key==2)
                $key=0;
              else
                $key++;
                ?>
      <?php } ?>
        </div>
      </dl>
      <?php } ?>
    </section>
  </section>


<style>
  tr {
    padding:10px;
    margin-bottom: 10px;
  }
</style>
  <!-- Section: More info <(^_^<) 4 -->
<?php include("./_foot.php"); ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8&appId=1242879259163026";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>
$(document).ready(function(){
setInterval(loadApi,1000);
});

function loadApi(){
  $.ajax({
       url:"<?php echo $config->urls->root; ?>data",
       type:"get",
       dataType:"json",
       success:function(data) {
          $("#trips").text(data['viajes']);
          $("#users").text(data['clientes']);
       },
       error:function(){
          console.log('ERROR');
       }
  });
}
  function showAnsw(variable){
    $("#answ-" + variable).toggle();
  }
</script>
