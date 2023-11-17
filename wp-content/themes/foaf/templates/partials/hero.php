<section class="hero" style="background-image: url(<?php the_field('background_image'); ?>)">
  <div class="container">
    <h1 class="hero__title"><?php the_field('title'); ?></h1>
    <p class="hero__intro"><?php the_field('body'); ?></p>
    <a href="<?php the_field('button_link'); ?>" title="<?php the_field('button_text'); ?>" class="btn btn--primary hero__btn"><?php the_field('button_text'); ?></a>
  </div>
</section>