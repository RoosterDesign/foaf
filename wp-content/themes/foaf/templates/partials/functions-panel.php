<?php
  $pageId = 113; // DEV
  // $pageId = 496; // PROD
  $args = array('p' => $pageId, 'post_type' => 'content-blocks'); $the_query = new WP_Query( $args );
  
  if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

  <section class="functions-panel">
    <div class="container">
      <h1 class="functions-panel__title"><?php the_field('title'); ?></h1>
      <p class="functions-panel__body"><?php the_field('body'); ?></p>

      <div class="functions-panel-gallery">

        <?php $image = get_field('image_1');
          if( $image ):
            $mobileImage = $image['sizes'][ 'fw-img-mobile' ];
            $tabletImage = $image['sizes'][ 'fw-img-tablet' ];
        ?>

        <picture class="functions-panel-gallery__img">
          <source srcset="<?php echo $tabletImage; ?>" media="(min-width: 1800px)">
          <img src="<?php echo $mobileImage; ?>" alt="Harringtons on the Hill" />
        </picture> 

        <?php endif; $image = null; ?>
      
        <?php $image = get_field('image_2');
          if( $image ):
            $mobileImage = $image['sizes'][ 'fw-img-mobile' ];
            $tabletImage = $image['sizes'][ 'fw-img-tablet' ];
        ?>

        <picture class="functions-panel-gallery__img">
          <source srcset="<?php echo $tabletImage; ?>" media="(min-width: 1800px)">
          <img src="<?php echo $mobileImage; ?>" alt="Harringtons on the Hill" />
        </picture>
          
        <?php endif; $image = null; ?>

        <?php $image = get_field('image_3');
          if( $image ):
            $mobileImage = $image['sizes'][ 'fw-img-mobile' ];
            $tabletImage = $image['sizes'][ 'fw-img-tablet' ];
        ?>

        <picture class="functions-panel-gallery__img">
          <source srcset="<?php echo $tabletImage; ?>" media="(min-width: 1800px)">
          <img src="<?php echo $mobileImage; ?>" alt="Harringtons on the Hill" />
        </picture>

        <?php endif; $image = null; ?>

      </div>
      <a href="<?php the_field('button_link') ?>" title="<?php the_field('button_text') ?>" class="btn btn--primary"><?php the_field('button_text') ?></a>
    </div>
  </section>

<?php endwhile; wp_reset_postdata(); endif; ?>