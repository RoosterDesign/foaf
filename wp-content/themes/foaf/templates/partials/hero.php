<section class="hero">

    <div class="container">
      <h1 class="hero__title"><?php the_field('title'); ?></h1>
      <p class="hero__intro"><?php the_field('body'); ?></p>
      <a href="#" title="Book a table online" class="btn btn--primary hero__btn js-book"><?php the_field('button_text'); ?></a>
    </div>

    <div class="owl-carousel">      

      <?php
        $args = array('post_type' => 'home-hero-slides'); $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
        
        $image = get_field('image');

        $mobileImage = $image['sizes'][ 'fw-img-mobile' ];
        $tabletImage = $image['sizes'][ 'fw-img-tablet' ];
        $desktopImage = $image['sizes'][ 'fw-img-desktop' ];
        $desktopLgImage = $image['sizes'][ 'fw-img-desktop-lg' ];

      ?>

      <picture>
        <source srcset="<?php echo $desktopLgImage; ?>" media="(min-width: 2560px)" >
        <source srcset="<?php echo $desktopImage; ?>" media="(min-width: 1024px)" >
        <source srcset="<?php echo $tabletImage; ?>" media="(min-width: 768px)" >
        <img src="<?php echo $mobileImage; ?>" alt="Harringtons on the Hill" />
      </picture>

      <?php endwhile; wp_reset_postdata(); endif; $image = null; ?>

    </div>

    <div class="mouse_scroll">
      <div class="mouse"><div class="mouse__wheel"></div></div>
      <div class="mouse__arrow mouse__arrow--first"></div>
      <div class="mouse__arrow mouse__arrow--second"></div>
      <div class="mouse__arrow mouse__arrow--third"></div>
    </div>

  </section>


