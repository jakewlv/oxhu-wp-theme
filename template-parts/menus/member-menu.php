<?php

$locationDetails = get_nav_menu_locations();
$menuID          = $locationDetails['member-menu'];
$menuItems       = wp_get_nav_menu_items( $menuID );
?>

<nav class='member-menu'>
  <ul class='member-menu__list' role='list'>
	  <?php
	  // Loop over menu items
	  foreach ( $menuItems as $menuItem ) {
		  // Compare menu item url with server request uri path
		  $current  = ( $_SERVER['REQUEST_URI'] == parse_url( $menuItem->url,
				  PHP_URL_PATH ) ) ? 'current-menu-item' : '';
		  $has_icon = ! empty( $menuItem->description )
		  ?>
        <li class="<?php
		echo $current ?> member-menu__list-item">
			<?php
			echo '<a class="member-menu__link" href="' . $menuItem->url . '">';
			if ( $has_icon ) {
				echo '<i icon-name="' . $menuItem->description . '"></i>';
			}
			echo $menuItem->title;
			echo '</a>';
			?>
        </li>
		  <?php
	  }
	  ?>
  </ul>
</nav>