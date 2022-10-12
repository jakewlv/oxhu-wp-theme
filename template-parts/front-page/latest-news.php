<?php
/**
 * Template part for displaying the Latest news section
 *
 * @package oxhu
 */

?>

<section class='latest-news content-grid'>
  <div class='latest-news__inner grid-centered'>
    <div class='section-intro'>

		<?php
		if ( have_rows( 'latest_news' ) ): ?>
			<?php
			while ( have_rows( 'latest_news' ) ): the_row();

				// Get sub field values.
				$latestNewsTitle       = get_sub_field( 'latest_news_title' );
				$latestNewsDescription = get_sub_field( 'latest_news_description' );
				?>

              <h1 class='section-intro__title section-intro__title--dark'><?php
				  echo $latestNewsTitle ?></h1>
              <p class='section-intro__description'><?php
				  echo $latestNewsDescription ?></p>

			<?php
			endwhile; ?>
		<?php
		endif; ?>
    </div>

	  <?php

	  $args = [
		  'post_type'      => 'post',
		  'posts_per_page' => 3,
	  ];

	  $post_id         = get_the_ID(); // or use the post id if you already have it
	  $category_object = get_the_category( $post_id );
	  $category_name   = $category_object[0]->name;
	  $posts           = get_posts( $args );

	  ?>
    <div class='latest-news__posts'>

		<?php
		//printing post titles
		foreach ( $posts as $post ) {
			?>
          <div class='latest-news__post'>
            <div class='latest-news__post-aside'>
				<?php
				echo "<span class='latest-news__post-category'>" . wp_get_post_terms( get_the_ID(),
						'category' )[0]->name . "</span>";
				echo "<span class='latest-news__post-date'>" . get_the_date( 'j F, Y' ) . "</span>";
				?>
            </div>
            <div class='latest-news__post-main'>
				<?php


				echo "<h2 class='latest-news__post-title'> <a href='" . get_the_permalink() . "'>" . $post->post_title . "</a></h2>";
				echo $post->post_excerpt;
				?>
            </div>
          </div>
			<?php
		}
		?>

    </div>


  </div>
</section>