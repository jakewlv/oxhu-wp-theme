<?php
/**
 * Consultation Content
 *
 * @package OXHU
 */


$consultationImage = get_field( 'consultation_image' );
$consultationButton = get_field('consultation_button');
$consultationDownloadApp = get_field('consultation_download_app');
?>


<img class='consultation__image' src='<?= $consultationImage['url']; ?>'
     alt='<?= $consultationImage['alt'] ?>'>
<div class='consultation__text'>
  <h1 class='consultation__title'><?= get_field( 'consultation_title' ) ?></h1>
  <p class='consultation__description'><?= get_field( 'consultation_description' ) ?></p>

	<?php
	if ( have_rows( 'consultation_features' ) ): ?>
		<?php
		while ( have_rows( 'consultation_features' ) ):
			the_row();

			// Get sub field values.
			$feature1 = get_sub_field( 'feature_1' );
			$feature2 = get_sub_field( 'feature_2' );
			$feature3 = get_sub_field( 'feature_3' );
			$feature4 = get_sub_field( 'feature_4' );
			$feature5 = get_sub_field( 'feature_5' );
			$feature6 = get_sub_field( 'feature_6' );
			?>

          <ul class='consultation__feature-list' role='list'>
            <li class='consultation__feature-item'><?= $feature1 ?></li>
            <li class='consultation__feature-item'><?= $feature2 ?></li>
            <li class='consultation__feature-item'><?= $feature3 ?></li>
          </ul>

          <ul class='consultation__feature-list' role='list'>
            <li class='consultation__feature-item'><?= $feature4 ?></li>
            <li class='consultation__feature-item'><?= $feature5 ?></li>
            <li class='consultation__feature-item'><?= $feature6 ?></li>
          </ul>

		<?php
		endwhile; ?>
		<?php
		wp_reset_postdata() ?>
	<?php
	endif; ?>

  <?php

  ?>
  <a href='<?= $consultationButton['url'] ?>' class='consultation__button btn'><?= $consultationButton['title'] ?></a>
  <a href='<?= $consultationDownloadApp['url'] ?>' class='consultation__dl-app'><?= $consultationDownloadApp['title'] ?></a>

