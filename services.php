<?php
/* Template Name: OXHU-Services */


get_header();
?>

  <section class='consultation content-grid'>
    <div class='consultation__inner grid-centered'>
		<?php
		get_template_part( 'template-parts/services-page/content', 'consultation' ) ?>
    </div>
  </section>

  <section class='services content-grid'>
    <div class='services__inner grid-full-width'>

		<?php
		$args = [
			'post_type'      => 'services',
			'posts_per_page' => - 1,
			'order'          => 'ASC'
		];

		$query = new WP_Query( $args );
		?>

		<?php
		if ( $query->have_posts() ) : ?>
			<?php
			while ( $query->have_posts() ) : $query->the_post(); ?>

				<?php
				get_template_part( 'template-parts/content', get_post_type()  ) ?>
			<?php
			endwhile; ?>
			<?php
			wp_reset_postdata() ?>
		<?php
		endif; ?>

    </div>
  </section>

<?php

get_footer();