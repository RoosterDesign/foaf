<?php
/*
Template Name: Reservations
*/
?>
<?php get_header(); ?>
<div class="page">
  <?php include get_theme_file_path("templates/partials/masthead.php"); ?>  
  <section class="resdiary-wrap">
    <div class="container">
      <div class="resdiary">
        <?php echo get_option('resdiary_embed'); ?>
      </div>
    </div>
  </section>
  <?php include get_theme_file_path("templates/partials/offers-panel.php"); ?>    
  <?php include get_theme_file_path("templates/partials/full-width-image.php"); ?>    
</div>
<?php get_footer(); ?>