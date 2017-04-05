<?php include("./_head.php"); ?>
  <!-- Jumbotron: Page header -->
  <div class="k-jumbotron">
    <div class="k-page-header-80">
      <h1 class="k-heading"><?php echo $page->get('headline|title'); ?></h1>
      <p><?php echo $page->summary; ?></p>
    </div>
  </div>


  <section class="k-section-80">
    <!-- Question 1-->

    <?php $questions=$pages->find("template=questions");
      foreach($questions as $number=>$question){ ?>
    <dl onclick="showAnsw(<?php echo $number ?>);">
      <dt>
        <?php echo $question->title; ?>
<!--         <img id="chev-down-<?php echo $number ?>" src="<?php echo $config->urls->templates; ?>static/455375-1485995688/images/plus-icon.svg" alt=""><img id="chev-up-<?php echo $number ?>" src="<?php echo $config->urls->templates; ?>static/455375-1485995688/images/minus-icon.svg" alt="" style="display:none;">-->
      </dt>
      <dd id="answ-<?php echo $number ?>">
        <?php echo $question->answer; ?>
      </dd>
    </dl>
    <?php } ?>

  </section>
<?php include("./_foot.php"); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
 function showAnsw(variable){
    $("#answ-" + variable).toggle();
    $("#chev-up-" + variable).toggle ();
    $("#chev-down-" + variable).toggle ();
  }
</script>
