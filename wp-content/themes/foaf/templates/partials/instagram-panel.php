<?php
  $pageId = 483;
  $args = array('p' => $pageId, 'post_type' => 'content-blocks'); $the_query = new WP_Query( $args ); 
?>

<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<section class="instagram-panel">
  <div class="container">
    <h1 class="instagram-panel__title"><?php the_field('title'); ?></h1>
    <p class="instagram-panel__content"><?php the_field('body'); ?></p>
    <div class="instagram-feed">
      <?php echo do_shortcode(get_field("feed_id")); ?>
    <div>
  </div>
</section>
<?php endwhile; wp_reset_postdata(); endif; ?>