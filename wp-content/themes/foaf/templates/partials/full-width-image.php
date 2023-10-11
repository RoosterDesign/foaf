<?php
  $image = get_field('image');
  if( $image ):
    $mobileImage = $image['sizes'][ 'fw-img-mobile' ];
    $tabletImage = $image['sizes'][ 'fw-img-tablet' ];
    $desktopImage = $image['sizes'][ 'fw-img-desktop' ];
    $desktopLgImage = $image['sizes'][ 'fw-img-desktop-lg' ];
?>

<style>
  .full-width-image { background-image: url("<?php echo $mobileImage; ?>"); }
  @media only screen and (min-width: 768px) {
    .full-width-image { background-image: url("<?php echo $tabletImage; ?>"); }
  }
  @media only screen and (min-width: 1024px) {
    .full-width-image { background-image: url("<?php echo $desktopImage; ?>"); }
  }
  @media only screen and (min-width: 2560px) {
    .full-width-image { background-image: url("<?php echo $desktopLgImage; ?>"); }
  }
</style>

<div class="full-width-image"></div>

<?php endif; $image = null; ?>