<?php
/*
Template Name: Offers
*/
?>
<?php get_header(); ?>
<div class="page">
  <?php include get_theme_file_path("templates/partials/masthead.php"); ?>  
  <section class="offers-panel">
    <div class="container">
      <div class="offers">
      <?php $args = array('post_type' => 'offers'); $the_query = new WP_Query( $args );        
      if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); if( $post->post_status == 'publish' ) :
        $image = get_field('image'); $imageUrl = $image['sizes'][ 'offer' ]; ?>
        <div class="offer">
          <div class="offer__img">
            <img src="<?php echo $imageUrl; ?>" title="Special Offer" class=" img-responsive" />
          </div>
          <div class="offer__content">
            <h2 class="offer__title"><?php the_field('title'); ?></h2>
            <p class="offer__body"><?php the_field('body'); ?></p>
          </div>
        </div>        
      <?php endif; endwhile; wp_reset_postdata(); endif; $image = null; ?>      
      </div>
    </div>
  </section>
  <?php include get_theme_file_path("templates/partials/reservations-panel.php"); ?>    
</div>
<?php get_footer(); ?>