<?php
/**
 * Template part for displaying visions & values section
 *
 * @package oxhu
 */

?>

<section class='values content-grid'>
  <div class='values__inner grid-centered'>
    <div class='section-intro'>
      <h1 class='section-intro__title section-intro__title--dark'><?php
		  echo get_field( 'values_title' ) ?></h1>
      <p class='section-intro__description'><?php
		  echo get_field( 'values_description' ) ?></p>
    </div>
    <div class='values__values'>


		<?php
	$args = [
		'post_type'      => 'values',
		'posts_per_page' => 4,
		'order'          => 'ASC'
	];

		$query = new WP_Query( $args );
		?>

		<?php
		if ( $query->have_posts() ) : ?>

			<?php
			while ( $query->have_posts() ) : $query->the_post(); ?>

				<?php
				get_template_part( 'template-parts/content', 'value' );
				?>
			<?php
			endwhile; ?>
			<?php
			wp_reset_postdata() ?>
		<?php
		endif; ?>
    </div>
  </div>
</section>

