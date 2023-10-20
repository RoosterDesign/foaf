<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>
<div class="page">

  <?php include get_theme_file_path("templates/partials/hero.php"); ?>

  <section class="card-panel">
    <div class="container">
      <h2 class="card-panel__title">Upcoming Activities</h2>
      

      <?php $posts = get_posts(array( 'post_type' => 'activities', 'numberposts'	=> 3 ));
      if ($posts) { ?>
        <div class="card-list">        
          <?php foreach($posts as $post): setup_postdata($post); include get_theme_file_path("templates/partials/card.php"); endforeach;	?>
        </div>
      <?php } else { ?>
        <p class="no-results">We currently have no activities, please check back again soon.</p>
      <?php }; wp_reset_postdata(); ?>

        
    </div>
  </section>

  <?php include get_theme_file_path("templates/partials/about-panel.php"); ?>

  <?php include get_theme_file_path("templates/partials/gallery.php"); ?>



  <section class="card-panel">
    <div class="container">
    <h2 class="card-panel__title">Latest News</h2>		
      
      <?php
        $args = array( 'post_type' => 'post', 'posts_per_page'	=> 3 );
        $post_query = new WP_Query($args);
        if($post_query->have_posts() ) { ?>

          <div class="card-list">
            <?php while($post_query->have_posts() ) : $post_query->the_post(); include get_theme_file_path("templates/partials/card.php"); endwhile; ?>
          </div>
          
      <?php } else { ?>
          <p class="no-results">We currently have no news items, please check back again soon.</p>
      <?php }; wp_reset_postdata(); ?>
        
    </div>
  </section>


 


 
  
</div>
<?php get_footer(); ?>