<?php
/*
Template Name: Menus
*/
?>
<?php get_header(); ?>
<div class="page">
  <?php include get_theme_file_path("templates/partials/masthead.php"); ?>  
  <div class="container">
    <?php $menuType = 'menus'; include get_theme_file_path("templates/partials/menus-list.php"); ?>
  </div>
  <?php include get_theme_file_path("templates/partials/reservations-panel.php"); ?>    
  <?php include get_theme_file_path("templates/partials/offers-panel.php"); ?>    
  <?php include get_theme_file_path("templates/partials/full-width-image.php"); ?>    
</div>
<?php get_footer(); ?>