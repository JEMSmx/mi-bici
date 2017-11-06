<?php include("./_head.php"); ?>
  <!-- Jumbotron: Page header -->
  <div class="k-jumbotron">
    <div class="k-page-header-80">
      <h1 class="k-heading"><?php echo $page->get('headline|title'); ?></h1>
      <p> <?php echo __("Explora, experimenta y comparte los datos de uso de MIBICI"); ?></p>
    </div>
  </div>

  <!-- Section: More info <(^_^<) 4 -->
  <section class="k-section-80 open-data">
   <div class="data-widget">
      <h2>
         <?php echo __("Gestor de datos"); ?>
      </h2>
      <p>
        <?php echo __("Conoce cómo se mueve MIBICI, qué estaciones son más ó menos utilizadas, horario con más demanda, la cantidad de viajes y muchos más datos con la siguiente herramienta."); ?>
     </p>
   </div>
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
  function showAnsw(variable){
    $("#answ-" + variable).toggle();
  }
</script>
