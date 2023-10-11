<?php get_header(); ?>
<div class="page">
  <?php include get_theme_file_path("templates/partials/masthead.php"); ?>
  <div class="page-content">
    <div class="container">
      <?php the_content(); ?>
    </div>
  </div>
  <?php include get_theme_file_path("templates/partials/reservations-panel.php"); ?>    
</div>
<?php get_footer(); ?>