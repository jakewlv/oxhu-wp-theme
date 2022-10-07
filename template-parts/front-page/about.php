<?php
/**
 * Template part for displaying about section of the front page
 *
 * @package oxhu
 */

?>

<section class='about grid-centered'>
  <div class='about__inner'>
    <img
      src='https://res.cloudinary.com/cdn-oxhu/images/v1664959787/about-image/about-image.webp?_i=AA'
      alt='man with ropes' class='about__image'>
    <div class='about__text-container'>
      <h2 class='about__title'>At a tellus, non tincidunt vitae in enim felis dolor</h2>
      <p class='about__description'>Interdum neque, adipiscing volutpat in sem in. Porttitor sed
        viverra suspendisse consectetur rhoncus suscipit duis consequat. In scelerisque placerat et
        adipiscing nibh pharetra felis, eu. </p>
      <a href='https://oxhu.co.uk/contact' class='btn about__btn'>Get in touch</a>
    </div>
  </div>
</section>

<section class='photo-reel grid-full-width'>
  <div class='photo-reel__inner'>
	  <?php
	  $args = [
		  'post_type' => 'image-reel',
		  'tax_query' => [
			  [
				  'taxonomy' => 'category',
				  'field'    => 'slug',
				  'terms'    => 'frontpage-top'
			  ]
		  ]
	  ];

	  $query = new WP_Query( $args );
	  ?>

	  <?php
	  if ( $query->have_posts() ) : ?>

		  <?php
		  while ( $query->have_posts() ) : $query->the_post(); ?>

			  <?php
			  get_template_part( 'template-parts/content-photoreel', 'photo-reel' );
			  ?>

		  <?php
		  endwhile; ?>

	  <?php
	  endif; ?>
  </div>

</section>
