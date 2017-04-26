<?php include('./_head.php'); ?>
<!-- Jumbotron: Page header -->
  <div class="k-jumbotron">
    <div class="k-page-header-80">
      <h1 class="k-heading"><?php echo __("Prensa"); ?></h1>
      <p><?php echo __("Información oficial y recursos gráficos para prensa del sistema de bicicleta pública MIBICI"); ?></p>
    </div>
  </div>
  <section class="k-section-80 media-press">
    <h2><?php echo __("Comunicados de prensa"); ?></h2>
    <?php $posts=$pages->find("template=posts, type.id=1");
      foreach($posts as $post){  ?>
    <div class="media-press-data">
      <div class="date">
        <?php setlocale(LC_TIME, 'es_MX.UTF-8');
           $str_time=strtotime($post->date);
            echo strftime("%e de %B del %G", $str_time); ?>
      </div>
      <div class="name">
        <?php echo $post->title; ?>
      </div>
      <div class="download">
      <?php if($post->file1){ ?>
        <a href="<?php echo $post->file1->url ?>">
          <?php echo __("Descargar comunicado"); ?>
        </a>
      <?php } ?>
      </div>
    </div>
    <?php } ?>
  </section>
  <section class="k-section-80 media-press">
    <h2><?php echo __("Fotografías para uso en prensa"); ?></h2>
    <?php $posts=$pages->find("template=posts, type.id=2");
      foreach($posts as $post){ ?>
    <div class="media-press-data">
      <div class="date">
         <?php setlocale(LC_TIME, 'es_MX.UTF-8');
           $str_time=strtotime($post->date);
            echo strftime("%e de %B del %G", $str_time); ?>
      </div>
      <div class="name">
       <?php echo $post->title; ?>
      </div>
      <div class="download">
      <?php if($post->file1){ ?>
        <a href="<?php echo $post->file1->url ?>">
          <?php echo __("Descarga el paquete de fotos"); ?>
        </a>
      <?php } ?>
      </div>
    </div>
    <?php }?>
  </section>
<?php include('./_foot.php'); ?>