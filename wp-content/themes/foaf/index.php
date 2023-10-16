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
      

      <?php if ( have_posts() ) : ?>

        <!-- Start of the main loop. -->
        <div class="card-list">
          <?php while ( have_posts() ) : the_post();  ?>

          <!-- the rest of your theme's main loop -->
          <?php include get_theme_file_path("templates/partials/card.php"); ?>

          <?php endwhile; ?>
        </div>      
        <!-- End of the main loop -->

        <!-- Start the pagination functions after the loop. -->
        <div class="pagination">
          <div class="pagination__link --next"><?php previous_posts_link( 'Previous Page' ); ?></div>
          <div class="pagination__link pagination__link--previous"><?php next_posts_link( 'Next Page' ); ?></div>
        </div>
        <!-- End the pagination functions after the loop. -->

        <?php else : ?>

        <?php _e( 'Sorry, no posts matched your criteria.' ); ?>

        <?php endif; ?>

      
    </div>
  </section>
  
</div>
<?php get_footer(); ?>