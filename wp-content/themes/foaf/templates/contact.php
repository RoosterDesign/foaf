<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>

<div class="page">
  
  <?php include get_theme_file_path("templates/partials/masthead.php"); ?>  

  <?php
    $block = get_field('contact_form');
    $image = $block['image'];
    $textPosition = $block['text_position'];
    $mobileImage = $image['sizes'][ 'fw-img-mobile' ];
    $tabletImage = $image['sizes'][ 'fw-img-tablet' ];
    $desktopImage = $image['sizes'][ 'fw-img-desktop' ];
    include get_theme_file_path("templates/partials/contact-square-row.php");
  ?>

  <?php
    $block = get_field('contact_details');
    $image = $block['image'];
    $textPosition = $block['text_position'];
    $mobileImage = $image['sizes'][ 'fw-img-mobile' ];
    $tabletImage = $image['sizes'][ 'fw-img-tablet' ];
    $desktopImage = $image['sizes'][ 'fw-img-desktop' ];
    include get_theme_file_path("templates/partials/square-row.php");
  ?>

  <!-- Google Map -->
  <div class="map">
    <?php the_field('google_map_embed') ?>
  </div>
  <!-- end: Google Map -->

  <?php
    $block = get_field('opening_hours');
    $image = $block['image'];
    $textPosition = $block['text_position'];
    $mobileImage = $image['sizes'][ 'fw-img-mobile' ];
    $tabletImage = $image['sizes'][ 'fw-img-tablet' ];
    $desktopImage = $image['sizes'][ 'fw-img-desktop' ];
    include get_theme_file_path("templates/partials/square-row.php");
  ?>

  <?php include get_theme_file_path("templates/partials/reservations-panel.php"); ?>    

</div>

<?php get_footer(); ?>