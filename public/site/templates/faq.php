<?php include("./_head.php"); ?>
  <!-- Jumbotron: Page header -->
  <div class="k-jumbotron">
    <div class="k-page-header-80">
      <h1 class="k-heading"><?php echo $page->get('headline|title'); ?></h1>
      <p><?php echo $page->summary; ?></p>
    </div>
  </div>
  <section class="k-section-80">
    <?php $questions=$pages->find("template=questions");
      foreach($questions as $number=>$question){ ?>
    <dl onclick="showAnsw(<?php echo $number ?>);">
      <dt>
        <?php echo $question->title; ?>
      </dt>
      <dd id="answ-<?php echo $number ?>">
        <?php echo $question->answer; ?>
      </dd>
    </dl>
    <?php } ?>
  </section>
<?php include("./_foot.php"); ?>
<script>
 function showAnsw(variable){
    $("#answ-" + variable).toggle();
    $("#chev-up-" + variable).toggle ();
    $("#chev-down-" + variable).toggle ();
  }
</script>
