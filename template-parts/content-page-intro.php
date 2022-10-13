<?php

/**
 * The template for displaying the page intro content.
 *
 * @package oxhu
 */
?>

<div class='site-main__page-intro page-intro grid-centered'>

  <?php
  $pageIntroTitle = strip_tags( get_field( 'page_intro_title' ), '<span><br>' );
  ?>
	<h1 class='page-intro__title'><?= $pageIntroTitle ?></h1>

	<div class='page-intro__text'><?= get_field( 'page_intro_text' ) ?></div>

</div>

<div class='page-intro__photo-reel photo-reel grid-full-width'>
	<div class='photo-reel__inner'>

		<?php
		if ( have_rows( 'page_intro_photo_reel' ) ): ?>
			<?php
			while ( have_rows( 'page_intro_photo_reel' ) ): the_row();

				// Get sub field values.
				$introImage1 = get_sub_field( 'image_1' );
				$introImage2 = get_sub_field( 'image_2' );
				$introImage3 = get_sub_field( 'image_3' );
				?>

				<img src="<?php
				echo esc_url( $introImage1['url'] ); ?>" alt="<?php
				echo esc_attr( $introImage1['alt'] ); ?>" class='photo-reel__image' />
				<img src="<?php
				echo esc_url( $introImage2['url'] ); ?>" alt="<?php
				echo esc_attr( $introImage2['alt'] ); ?>" class='photo-reel__image' />
				<img src="<?php
				echo esc_url( $introImage3['url'] ); ?>" alt="<?php
				echo esc_attr( $introImage3['alt'] ); ?>" class='photo-reel__image' />


			<?php
			endwhile; ?>
		<?php
		endif; ?>

	</div>
</div>