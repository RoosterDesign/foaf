<?php
  // $pageId = 831; // DEV
  $pageId = 888; // PROD
  $args = array('p' => $pageId, 'post_type' => 'content-blocks'); $the_query = new WP_Query( $args );
  if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
  
  $leftImage = get_field('left_image')['sizes'][ 'fw-img-desktop-lg' ];
  $rightImage = get_field('right_image')['sizes'][ 'fw-img-desktop-lg' ];

?>

  <section class="about-panel">
    <div class="container">

      <div class="about-panel__content">
        <p class="about-panel__subHead"><?php the_field('content_intro'); ?></p>
        <?php the_field('content'); ?>
      </div>

    </div>

    <div class="about-panel__leftImg" style="background-image: url(<?php echo $leftImage; ?>)"></div>
    <div class="about-panel__rightImg" style="background-image: url(<?php echo $rightImage; ?>)"></div>

  </section>

<?php endwhile; wp_reset_postdata(); endif; ?>