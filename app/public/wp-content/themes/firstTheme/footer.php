<?php
  $footer_bg = get_theme_mod('firstexample_footer_bg', 'dark');
  $footer_class = "bg-".$footer_bg;

  $footer_text = "text-light";
  if($footer_bg == "light"){
    $footer_text = "text-dark";
  }
?>

<div class="container-fluid <?php echo $footer_class." ".$footer_text;?>">
  <div class="row">
    <div class="col-3">
      <?php get_sidebar('first-footer'); ?>
    </div>
    <div class="col-3">
      <?php get_sidebar('second-footer'); ?>
    </div>
    <div class="col-3">
      <?php get_sidebar('third-footer'); ?>
    </div>
    <div class="col-3">
      <?php get_sidebar('fourth-footer'); ?>
    </div>
  </div>
</div>

<?php wp_footer(); ?>

</body>
</html>