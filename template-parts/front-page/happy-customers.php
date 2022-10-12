<?php
/**
 * Template part for displaying happy customers section of the front page
 *
 * @package oxhu
 */

?>

<?php
$argsTests = [
	'post_type' => 'testimonials',
];

$testimonials = new WP_Query( $argsTests );
?>

<section id='happy-customers' class='happy-customers content-grid splide'>
  <div class='happy-customer__inner grid-centered'>
    <div class='section-intro section-intro--light'>

	    <?php
	    if ( have_rows( 'happy_customers' ) ): ?>
		    <?php
		    while ( have_rows( 'happy_customers' ) ): the_row();

			    // Get sub field values.
			    $happyCustomersTitle = get_sub_field( 'happy_customers_title' );
			    $happyCustomersDescription = get_sub_field( 'happy_customers_description' );
			    ?>

          <h1 class='section-intro__title'><?php echo $happyCustomersTitle ?></h1>
          <p class='section-intro__description'><?php echo $happyCustomersDescription ?></p>

		    <?php
		    endwhile; ?>
	      <?php
	      wp_reset_postdata() ?>
	    <?php
	    endif; ?>
    </div>
  </div>

	<?php
	if ( $testimonials->have_posts() ) : ?>
      <div class="splide__track grid-full-width">
        <ul class="splide__list">
			<?php
			while ( $testimonials->have_posts() ) : $testimonials->the_post(); ?>

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
		wp_reset_postdata() ?>
	<?php
	endif; ?>
</section>


