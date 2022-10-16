<?php
/* Template Name: OXHU-contact-page */

/**
 * The template for displaying the contact page
 *
 * @package oxhu
 */

get_header();
?>

<main id="primary" class="site-main content-grid">

	<div class='site-main__inner grid-centered'>

		<?php
		while (have_posts()) :
			the_post();

			get_template_part('template-parts/content', 'contact');

			// If comments are open or we have at least one comment, load up the comment template.
			if (comments_open() || get_comments_number()) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
	</div>



</main><!-- #main -->

<?php
//get_sidebar();
get_footer();