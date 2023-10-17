<?php
/*
Template Name: Activities
*/
?>
<?php get_header(); ?>
<div class="page">
  <?php while ( have_posts() ) : the_post();  
  
    if(has_post_thumbnail()) :

      $mobileImage = get_the_post_thumbnail_url(get_the_ID(),'fw-img-mobile');
      $tabletImage = get_the_post_thumbnail_url(get_the_ID(),'fw-img-tablet');
      $desktopImage = get_the_post_thumbnail_url(get_the_ID(),'fw-img-desktop');
      $desktopLgImage = get_the_post_thumbnail_url(get_the_ID(),'fw-img-desktop-lg'); ?>

      <style>
        .masthead { background-image: url("<?php echo $mobileImage; ?>"); }
        @media only screen and (min-width: 768px) {
          .masthead { background-image: url("<?php echo $tabletImage; ?>"); }
        }
        @media only screen and (min-width: 1024px) {
          .masthead { background-image: url("<?php echo $desktopImage; ?>"); }
        }
        @media only screen and (min-width: 2560px) {
          .masthead { background-image: url("<?php echo $desktopLgImage; ?>"); }
        }
      </style>

    <?php else: ?>
      <style>
        .masthead { background-image: url("<?php echo get_option('masthead_fallback_image'); ?>"); }
      </style>
    <?php endif;  ?>
    

  <section class="masthead">
    <div class="container">    
      <h1 class="masthead__title"><?php echo the_title(); ?></h1>
    </div>
  </section>

    <div class="container">
      
      
        

        
      
          <?php
            $args = array( 'hide_empty' => false );
            $categories = get_terms( 'activities_category', $args );				
            foreach( $categories as $category ): ?>		
            
            <div class="card-panel card-panel--category">
            
            <h2 class="card-panel__title" id="<?php echo $category->slug; ?>"><?php echo $category->name; ?></h2>		

              <?php $posts = get_posts(array(
                'post_type' => 'activities',
                'taxonomy' => $category->taxonomy,
                'term' => $category->slug,
                'nopaging' => true
              ));
              if ($posts) { ?>
             
                  <div class="card-list">			
                    <?php foreach($posts as $post): setup_postdata($post);
                      include get_theme_file_path("templates/partials/card.php");
                    endforeach; ?>
                </div>  
              <?php } else { ?>
                <p class="no-resources">We currently have no activities for this category, please check back again soon.</p>
              <?php };						
              ?>			
              </div>
          <?php endforeach; ?>

      
     



      

    </div>
  </div>

  <?php endwhile;  ?> 
</div>
<?php get_footer(); ?>



