<?php
  $pageId = 48; // DEV
  // $pageId = 495; PROD
  $args = array('p' => $pageId, 'post_type' => 'content-blocks'); $the_query = new WP_Query( $args );

  if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
  $offers = get_field('offers');
  $buttonLink = get_field('button_link');
  $buttonText = get_field('button_text');
?>

  <section class="offers-panel">
    <div class="container">
      <h1 class="offers-panel__title"><?php the_field('title'); ?></h1>

      <?php if( $offers ): ?>

        <div class="offers">
      
        <?php foreach( $offers as $post) : setup_postdata($post ); if( $post->post_status == 'publish' ) : ?>

          <?php $image = get_field('image'); $imageUrl = $image['sizes'][ 'offer' ]; ?>
                
          <div class="offer">
            <div class="offer__img">
              <img src="<?php echo $imageUrl; ?>" title="Special Offer" class=" img-responsive" />
            </div>
            <div class="offer__content">
              <h2 class="offer__title"><?php the_field('title'); ?></h2>
              <p class="offer__body"><?php the_field('body'); ?></p>
            </div>
          </div>

        <?php endif; endforeach; $image = null; ?>

      </div>

      <?php else : ?>

        <p class="offers-panel__body"><?php echo get_option('no_offers_text'); ?></p>

      <?php endif; ?>

      <?php if ($offers && $buttonLink) : ?>
        <a href="<?php echo $buttonLink ?>" title="<?php echo $buttonText; ?>" class="btn btn--primary"><?php echo $buttonText; ?></a>
      <?php endif; ?>
      
    </div>
  </section>

<?php endwhile; wp_reset_postdata(); endif; $buttonLink = null; $buttonText = null; ?>