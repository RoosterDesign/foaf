<?php
/*
Template Name: Membership
*/
?>
<?php get_header(); ?>

<div class="page">
  
  <?php include get_theme_file_path("templates/partials/masthead.php"); ?>  

  <div class="container">

    <div class="page-content">
      <?php the_content(); ?>      
      <?php echo do_shortcode('[wpforms id="2220" title="false" description="true"]'); ?>
    </div>
    
  </div>

</div>

<?php get_footer(); ?>