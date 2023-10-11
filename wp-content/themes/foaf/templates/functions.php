<?php
/*
Template Name: Functions
*/
?>
<?php get_header(); ?>

<div class="page">
  
  <?php include get_theme_file_path("templates/partials/masthead.php"); ?>  

  <?php
    $block = get_field('function_block_1');
    $image = $block['image'];
    $textPosition = $block['text_position'];
    $mobileImage = $image['sizes'][ 'fw-img-mobile' ];
    $tabletImage = $image['sizes'][ 'fw-img-tablet' ];
    $desktopImage = $image['sizes'][ 'fw-img-desktop' ];
    include get_theme_file_path("templates/partials/square-row.php");
    $image = null;
  ?>    

  <?php
    $block = get_field('function_block_2');
    $image = $block['image'];
    $textPosition = $block['text_position'];
    $mobileImage = $image['sizes'][ 'fw-img-mobile' ];
    $tabletImage = $image['sizes'][ 'fw-img-tablet' ];
    $desktopImage = $image['sizes'][ 'fw-img-desktop' ];
    include get_theme_file_path("templates/partials/square-row.php");
    $image = null;
  ?>

  <?php
    $block = get_field('function_block_3');
    $image = $block['image'];
    $textPosition = $block['text_position'];
    $mobileImage = $image['sizes'][ 'fw-img-mobile' ];
    $tabletImage = $image['sizes'][ 'fw-img-tablet' ];
    $desktopImage = $image['sizes'][ 'fw-img-desktop' ];
    include get_theme_file_path("templates/partials/square-row.php");
    $image = null;
  ?> 
  

  <?php include get_theme_file_path("templates/partials/full-width-image.php"); ?>    

  <?php $functionMenus = get_field('function_menus'); $menuType = 'function-menus'; ?>
  <section class="function-menus" id="menus">
    <div class="container">
      <h1 class="function-menus__title"><?php echo $functionMenus['title']; ?></h1>
      <p class="function-menus__body"><?php echo $functionMenus['body']; ?></p>
      <?php include get_theme_file_path("templates/partials/menus-list.php"); ?>
    </div>
  </section>

  <?php include get_theme_file_path("templates/partials/reservations-panel.php"); ?>    


</div>

<?php get_footer(); ?>