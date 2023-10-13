<?php
/*
Template Name: News
*/
?>
<?php get_header(); ?>
<div class="page">
  <?php while ( have_posts() ) : the_post();  
  
    if(has_post_thumbnail()) :

      $mobileImage = get_the_post_thumbnail_url(get_the_ID(),'fw-img-mobile');
      $tabletImage = get_the_post_thumbnail_url(get_the_ID(),'fw-img-tablet');
      $desktopImage = get_the_post_thumbnail_url(get_the_ID(),'fw-img-desktop');
      $desktopLgImage = get_the_post_thumbnail_url(get_the_ID(),'fw-img-desktop-lg'); ?>

      <style>
        .masthead { background-image: url("<?php echo $mobileImage; ?>"); }
        @media only screen and (min-width: 768px) {
          .masthead { background-image: url("<?php echo $tabletImage; ?>"); }
        }
        @media only screen and (min-width: 1024px) {
          .masthead { background-image: url("<?php echo $desktopImage; ?>"); }
        }
        @media only screen and (min-width: 2560px) {
          .masthead { background-image: url("<?php echo $desktopLgImage; ?>"); }
        }
      </style>

    <?php else: ?>
      <style>
        .masthead { background-image: url("<?php echo get_option('masthead_fallback_image'); ?>"); }
      </style>
    <?php endif;  ?>
    

  <section class="masthead">
    <div class="container">    
      <h1 class="masthead__title"><?php echo the_title(); ?></h1>
    </div>
  </section>




  <div class="page-content">
    <div class="container">
    <?php the_content(); ?>
    </div>
  </div>

  <?php endwhile;  ?> 
</div>
<?php get_footer(); ?>