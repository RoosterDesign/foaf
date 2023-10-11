<div class="menu-list">
  <?php $args = array('post_type' => $menuType); $the_query = new WP_Query( $args );        
    if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); if( $post->post_status == 'publish' ) :
      $image = get_field('image'); $imageUrl = $image['sizes'][ 'offer' ];          
      include get_theme_file_path("templates/partials/menu-item.php");          
    endif; endwhile; wp_reset_postdata(); endif; $image = null; ?>
</div>