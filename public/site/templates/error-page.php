<?php include("./_head.php"); ?>
  <!-- Jumbotron: Page header -->
  <div class="k-jumbotron">
    <div class="k-page-header-80">
      <h1 class="k-heading"><?php echo $page->get('headline|title'); ?></h1>
      <p><?php echo $page->summary; ?></p>
    </div>
  </div>
  <!-- Section: More info <(^_^<) 4 -->
  <section class="k-section-80 wrap wider">
    <div class="grid">
      <div class="unit">
        <article class="k-article">
          <?php echo $page->body; ?>
        </article>
      </div>
    </div>
  </section>


<?php include("./_foot.php"); ?>
