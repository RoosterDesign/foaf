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
    <h2 class="card-panel__title">Latest News</h2>		
      <div class="card-list">


      <?php

      /*
    $paged = ( get_query_var('paged') ) ? get_query_var( 'paged' ) : 1;
    query_posts( 
        array ( 
            'post_type' => 'post', 
            'posts_per_page' => 1,
            'paged' => $paged ) 
        );      
        // The Loop
        while ( have_posts() ) : the_post();
            include get_theme_file_path("templates/partials/card.php");
        endwhile; 

        the_post_navigation();
        // Reset Query
        wp_reset_query();
        */


        $paged = (get_query_var('paged')) ? get_query_var('paged') : ((get_query_var('page')) ? get_query_var('page') : 1);

$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 1,
    'order' => 'DESC',
    'orderby' => 'date',
    'paged' => $paged
);

$loop = new WP_Query($args);
if ($loop->have_posts()) :
    while ($loop->have_posts()) :
        $loop->the_post();
        include get_theme_file_path("templates/partials/card.php");
    endwhile;

    post_pagination($paged, $loop->max_num_pages);
endif;

wp_reset_postdata();


    ?>




      <?php 
/*
      $the_query = new WP_Query( array(
        'post_type'      => 'post',
        'posts_per_page' => 1,
        // other args here
      ) );

      if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            include get_theme_file_path("templates/partials/card.php");
        } // end while
    } // end if*/
    ?>



      <?php



/*
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args=array('post_type' => 'post','posts_per_page'=>1,'paged'=>$paged);
query_posts($args);
if (have_posts()) : while (have_posts()) : the_post();
include get_theme_file_path("templates/partials/card.php");
endwhile;
posts_nav_link();
wp_reset_query();
endif;
*/
      
      
/*
      
      $args = array( 'post_type' => 'post', 'posts_per_page'	=> 1 );
        $post_query = new WP_Query($args);
        if($post_query->have_posts() ) {
            while($post_query->have_posts() ) :
              $post_query->the_post();
              include get_theme_file_path("templates/partials/card.php");
            endwhile;
          } else { ?>
            <p>NO POSTS</p>
        <?php } 
        */
     
        ?>




         <?php 
/*

            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; 
            $args = array(
                'post_type' => 'post',
                'paged'          => $paged, 
                'orderby'        => 'meta_value_num', 
                'meta_key'       => 'post_views_count', 
                'posts_per_page' => 1 
            );
            $loop = new WP_Query( $args );

            if ( $loop->have_posts() ) :
                while ( $loop->have_posts() ) : 
                    $loop->the_post();
                    get_template_part( 'content', get_post_format() );
                endwhile;

                pagination( $paged, $loop->max_num_pages); // Pagination Function
            endif;

            wp_reset_postdata();

         
         if ( ! function_exists( 'pagination' ) ) :

          function pagination( $paged = '', $max_page = '' ) {
              $big = 999999999; // need an unlikely integer
              if( ! $paged ) {
                  $paged = get_query_var('paged');
              }
      
              if( ! $max_page ) {
                  global $wp_query;
                  $max_page = isset( $wp_query->max_num_pages ) ? $wp_query->max_num_pages : 1;
              }
      
              echo paginate_links( array(
                  'base'       => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                  'format'     => '?paged=%#%',
                  'current'    => max( 1, $paged ),
                  'total'      => $max_page,
                  'mid_size'   => 1,
                  'prev_text'  => __( '«' ),
                  'next_text'  => __( '»' ),
                  'type'       => 'list'
              ) );
          }
      endif;
      */
      ?>


      </div>      
    </div>
  </section>

  <?php /* 
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
  */?>

</div>
<?php get_footer(); ?>