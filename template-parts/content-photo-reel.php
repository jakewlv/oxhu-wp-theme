<?php
/**
 * Template part for displaying the photo reel
 *
 * @package oxhu
 */

?>



<section class='photo-reel grid-full-width'>
  <div class='photo-reel__inner'>

	  <?php
	  if ( have_rows( 'image_reel' ) ): ?>
		  <?php
		  while ( have_rows( 'image_reel' ) ): the_row();

			  // Get sub field values.
			  $image1 = get_sub_field( 'image_1' );
			  $image2 = get_sub_field( 'image_2' );
			  $image3 = get_sub_field( 'image_3' );

			  ?>

            <img src="<?php
			echo esc_url( $image1['url'] ); ?>" alt="<?php
			echo esc_attr( $image1['alt'] ); ?>" class='photo-reel__image' />
            <img src="<?php
			echo esc_url( $image2['url'] ); ?>" alt="<?php
			echo esc_attr( $image2['alt'] ); ?>" class='photo-reel__image' />
            <img src="<?php
			echo esc_url( $image3['url'] ); ?>" alt="<?php
			echo esc_attr( $image3['alt'] ); ?>" class='photo-reel__image' />


		  <?php
		  endwhile; ?>
	  <?php
	  endif; ?>
  </div>
</section>
