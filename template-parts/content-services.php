<?php

/**
 * Service Content
 *
 * @package OXHU
 */

$serviceImage  = get_field( 'service_image' );
$serviceButton = get_field( 'service_button' );
?>

<img src='<?= $serviceImage['url'] ?>' alt='<?= $serviceImage['alt'] ?>' class='service__image'>
<h1 class='service__title'><?= get_the_title() ?></h1>
<h2 class='service__price'><?= get_field( 'service_price' ) ?></h2>
<p class='service__excerpt'><?= get_field( 'service_excerpt' ) ?></p>


<?php
if ( have_rows( 'service_benefits' ) ): ?>
	<?php
	while ( have_rows( 'service_benefits' ) ):
		the_row();

		// Get sub field values.
		$benefit1 = get_sub_field( 'benefit_1' );
		$benefit2 = get_sub_field( 'benefit_2' );
		$benefit3 = get_sub_field( 'benefit_3' );
		?>

      <ul class='service__benefit-list' role='list'>
        <li class='service__benefit-item'><?= $benefit1 ?></li>
        <li class='service__benefit-item'><?= $benefit2 ?></li>
        <li class='service__benefit-item'><?= $benefit3 ?></li>
      </ul>


	<?php
	endwhile; ?>

<?php
endif; ?>


<a href='<?= esc_url( get_permalink() ) ?>' class='service__button btn'><?= get_field('service_button_text') ?></a>

