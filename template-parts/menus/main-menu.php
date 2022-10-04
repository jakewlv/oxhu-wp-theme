<?php

$locationDetails = get_nav_menu_locations();
$menuID          = $locationDetails['main-menu'];
$mainMenuItems   = wp_get_nav_menu_items($menuID);
?>

<nav class='main-menu'>
  <ul class='main-menu__list' role='list'>
      <?php
      // Loop over menu items
      foreach ($mainMenuItems as $menuItem) {
          // Compare menu item url with server request uri path
          $current = ($_SERVER['REQUEST_URI'] == parse_url($menuItem->url,
                  PHP_URL_PATH)) ? 'current-menu-item' : '';
          $has_icon = ! empty( $menuItem->description )
          ?>
        <li class="<?php
        echo $current ?> main-menu__list-item">
          <a class='main-menu__link' href="
          <?php
          echo esc_html($menuItem->url) ?>">
              <?php
              echo $menuItem->title ?>
              <?php
              if ($has_icon) {
                echo '<i icon-name="' . $menuItem->description . '"></i>';
              }
              ?>
          </a>
        </li>
          <?php
      }
      ?>
  </ul>
</nav>


<!--//echo '-->
<!--<pre>';-->
<!--//print_r($mainMenuItems);-->
<!--//wp_die();-->