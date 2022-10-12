<?php

?>

<div class='values__value value'>
	<i icon-name='<?php
	echo get_field( 'value_icon' ) ?>' class='value__icon'></i>
	<div class='value__text-container'>
		<h2 class='value__title'><?php
			echo get_the_title() ?></h2>
		<p class='value__description'><?php
			echo get_field( 'value_text' ) ?></p>
	</div>
</div>
