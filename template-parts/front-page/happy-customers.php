<?php
/**
 * Template part for displaying happy customers section of the front page
 *
 * @package oxhu
 */

?>

<?php
$args = [
	'post_type' => 'testimonials',
//	's'         => 'frontpage-bottom',
	//		  'tax_query' => [
	//			  [
	//				  'taxonomy' => 'category',
	//				  'field'    => 'slug',
	//				  'terms'    => 'frontpage-bottom'
	//			  ]
	//		  ]
];

$query = new WP_Query( $args );
?>

<section id='happy-customers' class='happy-customers content-grid splide'>
  <div class='happy-customer__inner grid-centered'>
    <div class='section-intro section-intro--light'>
      <h1 class='section-intro__title'>Happy Customers</h1>
      <p class='section-intro__description'>Commodo a non in nec, odio ridiculus malesuada congue
        sit
        maecenas magnis tellus imperdiet cras pretium</p>
    </div>
  </div>


	<?php
	if ( $query->have_posts() ) : ?>
      <div class="splide__track grid-full-width">
        <ul class="splide__list">
			<?php
			while ( $query->have_posts() ) : $query->the_post(); ?>

              <li class="splide__slide happy-customers__testimonial">

                <img src=' <?php
				echo get_field( 'avatar' ) ?>' class='happy-customers__avatar' alt='user avatar'>
                <div class='happy-customers__testimonial-text'>
                  <span class='happy-customers__quote'>”</span>
                  <p class='happy-customers__comment'><?php
					  echo get_field( 'comment' ) ?></p>
                  <h3 class='happy-customers__name'><?php
					  echo the_title(); ?></h3>
                </div>
              </li>
			<?php
			endwhile; ?>
        </ul>
      </div>
	<?php
	endif; ?>





</section>

<!--<section class='photo-reel grid-full-width'>-->
<!--  <div class='photo-reel__inner'>-->
<!---->
<!---->
<!--	  --><?php
//	  if ( $query->have_posts() ) : ?>
<!---->
<!--		  --><?php
//		  while ( $query->have_posts() ) : $query->the_post(); ?>
<!--            <img src='--><?php
//			echo get_field( 'first_image' ) ?><!--' alt='' class='photo-reel__image'>-->
<!--            <img src='--><?php
//			echo get_field( 'second_image' ) ?><!--' alt='' class='photo-reel__image'>-->
<!--            <img src='--><?php
//			echo get_field( 'third_image' ) ?><!--' alt='' class='photo-reel__image'>-->
<!--		  --><?php
//		  endwhile; ?>
<!---->
<!--	  --><?php
//	  endif; ?>
<!--  </div>-->
<!---->
<!--</section>-->