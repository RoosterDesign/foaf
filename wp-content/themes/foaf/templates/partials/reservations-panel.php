<?php
  $pageId = 44; // DEV
  // $pageId = 494; PROD
  $args = array('p' => $pageId, 'post_type' => 'content-blocks'); $the_query = new WP_Query( $args ); 
?>

<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

  <?php
    $image = get_field('image');
    if( $image ):
      $mobileImage = $image['sizes'][ 'fw-img-mobile' ];
      $tabletImage = $image['sizes'][ 'fw-img-tablet' ];
      $desktopImage = $image['sizes'][ 'fw-img-desktop' ];
      $desktopLgImage = $image['sizes'][ 'fw-img-desktop-lg' ];
  ?>

  <style>
    .reservation-panel { background-image: url("<?php echo $mobileImage; ?>"); }
    @media only screen and (min-width: 768px) {
      .reservation-panel { background-image: url("<?php echo $tabletImage; ?>"); }
    }
    @media only screen and (min-width: 1024px) {
      .reservation-panel { background-image: url("<?php echo $desktopImage; ?>"); }
    }
    @media only screen and (min-width: 2560px) {
      .reservation-panel { background-image: url("<?php echo $desktopLgImage; ?>"); }
    }
  </style>

  <section class="reservation-panel<?php if( get_field('has_mask') ) { echo ' reservation-panel--has-mask'; }; ?>">
    <div class="container">
    <div class="resdiary">
      <?php echo get_option('resdiary_embed'); ?>
    </div>
      <div class="reservation-panel__content animate">      
        <h1 class="reservation-panel__title"><?php the_field('title'); ?></h1>
        <p class="reservation-panel__body"><?php the_field('body'); ?></p>
        <p class="reservation-panel__tel"><?php the_field('contact'); ?></p>
      </div>
    </div>
  </section>

<?php endif; endwhile; wp_reset_postdata(); endif; $image = null; ?>