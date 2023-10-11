<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>
<div class="page">
  <?php include get_theme_file_path("templates/partials/hero.php"); ?>
  <?php include get_theme_file_path("templates/partials/reviews-panel.php"); ?>
  <?php include get_theme_file_path("templates/partials/reservations-panel.php"); ?>
  <?php include get_theme_file_path("templates/partials/offers-panel.php"); ?>
  <?php include get_theme_file_path("templates/partials/about-panel.php"); ?>
  <?php include get_theme_file_path("templates/partials/menu-panel.php"); ?>
  <?php include get_theme_file_path("templates/partials/gallery.php"); ?>
  <?php include get_theme_file_path("templates/partials/functions-panel.php"); ?>
  <?php include get_theme_file_path("templates/partials/full-width-image.php"); ?>
  <?php include get_theme_file_path("templates/partials/instagram-panel.php"); ?>
</div>
<?php get_footer(); ?>