<?php
  
  if (get_field('masthead_image')):

    $image = get_field('masthead_image');
    $mobileImage = $image['sizes'][ 'fw-img-mobile' ];
    $tabletImage = $image['sizes'][ 'fw-img-tablet' ];
    $desktopImage = $image['sizes'][ 'fw-img-desktop' ];
    $desktopLgImage = $image['sizes'][ 'fw-img-desktop-lg' ]; ?>

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

  <?php endif; $image = null; ?>

  <?php if(is_404()) :
    $title = "Error 404 - Page Not Found";
  else:
    $title = get_the_title();
  endif;
?>

<section class="masthead<?php if( get_field('has_mask') ) { echo ' masthead--has-mask'; }; ?>">
  <div class="container">    
    <h1 class="masthead__title"><?php echo $title; ?></h1>
    <?php if(get_field('sub_heading')) : ?>
      <p class="masthead__body"><?php the_field('sub_heading'); ?></p>
    <?php endif; ?>    
  </div>
</section>