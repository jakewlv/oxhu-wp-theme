<?php
/**
 * Template part for displaying happy customers section of the front page
 *
 * @package oxhu
 */

?>

<section class='happy-customers grid-full-width'>
  <div class='happy-customer__inner grid-centered'>
    <div class='section-intro section-intro--light'>
      <h1 class='section-intro__title'>Happy Customers</h1>
      <p class='section-intro__description'>Commodo a non in nec, odio ridiculus malesuada congue
        sit
        maecenas magnis tellus imperdiet cras pretium</p>
    </div>
    Hello world

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
				  'terms'    => 'frontpage-bottom'
			  ]
		  ]
	  ];

	  $query = new WP_Query( $args );
	  ?>

	  <?php
	  if ( $query->have_posts() ) : ?>

		  <?php
		  while ( $query->have_posts() ) : $query->the_post(); ?>
            <img src='<?php
			echo get_field( 'first_image' ) ?>' alt='' class='photo-reel__image'>
            <img src='<?php
			echo get_field( 'second_image' ) ?>' alt='' class='photo-reel__image'>
            <img src='<?php
			echo get_field( 'third_image' ) ?>' alt='' class='photo-reel__image'>
		  <?php
		  endwhile; ?>

	  <?php
	  endif; ?>
  </div>

</section>