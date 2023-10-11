<section class="reviews-panel">
  <div class="container">      

  <?php 
    $args = array( 'post_type' => 'reviews', 'posts_per_page' => 3, 'orderby'=>'rand' );
    $the_query = new WP_Query( $args ); 
  ?>

  <?php if ( $the_query->have_posts() ) : ?>
    <?php
      while ( $the_query->have_posts() ) : $the_query->the_post();
        $ratingClass =  str_replace('.', '-', get_field('rating')); ?>

    <article class="review">
      <span class="review-rating review-rating--rating<?php echo($ratingClass); ?>">      
        <span class="review-rating__dot"></span>
        <span class="review-rating__dot"></span>
        <span class="review-rating__dot"></span>
        <span class="review-rating__dot"></span>
        <span class="review-rating__dot"></span>
      </span>        
      <h1 class="review__title"><?php the_title(); ?></h1>
      <p class="review__excerpt">
        <?php remove_filter ('the_content', 'wpautop'); ?>
        <?php the_content(); ?>
      </p>
      <p class="review__author"><?php the_field('review_author'); ?></p>
    </article>
    <?php endwhile; wp_reset_postdata(); ?>
  <?php else:  ?>
    <p><?php _e( 'Sorry, no reviews yet.' ); ?></p>
  <?php endif; ?>
  </div>
  <p>View more reviews on <a href="<?php echo get_option('trip_advisor_link'); ?>" target="_blank" title="View more reviews on TripAdvisor">TripAdvisor</a></p>
</section>