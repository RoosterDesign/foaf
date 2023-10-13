<?php

  $post_id = false;

  if( is_home() )
  {
    $post_id = 2121; // specif ID of news page
  }

  if (get_field('masthead_image', $post_id)):

    $image = get_field('masthead_image', $post_id);
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
  elseif(is_home()) :
    $title = "News";
  else :
    $title = get_the_title();
  endif;
?>

<section class="masthead">
  <div class="container">    
    <h1 class="masthead__title"><?php echo $title; ?></h1>
    <?php if(get_field('sub_heading', $post_id)) : ?>
      <p class="masthead__body"><?php the_field('sub_heading', $post_id); ?></p>
    <?php endif; ?>    
  </div>
</section>