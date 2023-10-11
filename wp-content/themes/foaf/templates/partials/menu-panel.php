<?php
  $pageId = 65;
  $args = array('p' => $pageId, 'post_type' => 'content-blocks'); $the_query = new WP_Query( $args );

  if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();

  $image = get_field('image');
  if( $image ):
    $mobileImage = $image['sizes'][ 'fw-img-mobile' ];
    $tabletImage = $image['sizes'][ 'fw-img-tablet' ];
    $desktopImage = $image['sizes'][ 'fw-img-desktop' ];
    $desktopLgImage = $image['sizes'][ 'fw-img-desktop-lg' ];
?>

  <style>
    .menu-panel { background-image: url("<?php echo $mobileImage; ?>"); }
    @media only screen and (min-width: 768px) {
      .menu-panel { background-image: url("<?php echo $tabletImage; ?>"); }
    }
    @media only screen and (min-width: 1024px) {
      .menu-panel { background-image: url("<?php echo $desktopImage; ?>"); }
    }
    @media only screen and (min-width: 2560px) {
      .menu-panel { background-image: url("<?php echo $desktopLgImage; ?>"); }
    }
  </style>

  <section class="menu-panel<?php if( get_field('has_mask') ) { echo ' menu-panel--has-mask'; }; ?>">
    <div class="container">
      <div class="menu-panel__content animate">
        <h1 class="menu-panel__title"><?php the_field('title'); ?></h1>
        <p class="menu-panel__body"><?php the_field('body'); ?></p>
        <a href="<?php the_field('button_link'); ?>" title="<?php the_field('button_text'); ?>" class="btn btn--secondary"><?php the_field('button_text'); ?></a>
      </div>
    </div>
  </section>

<?php endif; endwhile; wp_reset_postdata(); endif; $image = null; ?>