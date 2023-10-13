<?php
/*
Template Name: News
*/
?>
<?php get_header(); ?>
<div class="page">
  <?php include get_theme_file_path("templates/partials/masthead.php"); ?>  

  <section class="card-panel">
    <div class="container">
      <div class="card-list">

      <?php if ( have_posts() ) : ?>

        <!-- Start of the main loop. -->
        <?php while ( have_posts() ) : the_post();  ?>

        <!-- the rest of your theme's main loop -->
        <?php include get_theme_file_path("templates/partials/card.php"); ?>

        <?php endwhile; ?>
        <!-- End of the main loop -->

        <!-- Start the pagination functions after the loop. -->
        <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
        <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
        <!-- End the pagination functions after the loop. -->

        <?php else : ?>

        <?php _e( 'Sorry, no posts matched your criteria.' ); ?>

        <?php endif; ?>

      </div>      
    </div>
  </section>
  
</div>
<?php get_footer(); ?>