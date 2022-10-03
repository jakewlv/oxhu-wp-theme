<?php
/**
 * The header for our theme
 *
 * This is the template that displays the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package oxhu
 */

?>
<!doctype html>
<html <?php
language_attributes(); ?>>
<head>
  <meta charset="<?php
  bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php
    wp_head(); ?>
</head>

<body <?php
body_class(); ?>>
<?php
wp_body_open(); ?>
<div id="page" class="site content-grid">
  <a class="skip-link screen-reader-text" href="#primary"><?php
      esc_html_e('Skip to content', 'oxhu'); ?></a>

  <header id="header" class="header  <?php echo apply_filters('input_class', ''); ?> grid-full-width">
    <div class="site-branding">
        <?php
        the_custom_logo();
        if (is_front_page() && is_home()) :
            ?>
          <h1 class="site-title"><a href="<?php
              echo esc_url(home_url('/')); ?>" rel="home"><?php
                  bloginfo('name'); ?></a></h1>
        <?php
        else :
            ?>
          <p class="site-title"><a href="<?php
              echo esc_url(home_url('/')); ?>" rel="home"><?php
                  bloginfo('name'); ?></a></p>
        <?php
        endif;
        $oxhu_description = get_bloginfo('description', 'display');
        if ($oxhu_description || is_customize_preview()) :
            ?>
          <p class="site-description"><?php
              echo $oxhu_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

              ?></p>
        <?php
        endif; ?>
    </div>


    <nav id='main-menu' class="main-menu">
        <?php
        wp_nav_menu(array(
            'theme_location'  => 'main-menu',
            'menu_class'      => 'main-menu__list',
            'items_wrap'      => '<ul class="%2$s" role="list" >%3$s</ul>',
            'container'       => '',
            'list_item_class' => 'main-menu__list-item',
            'link_class'      => 'main-menu__link'
        ));
        ?>
    </nav>

        <nav id='member-menu' class="member-menu">
        <?php
        wp_nav_menu(array(
            'theme_location'  => 'member-menu',
            'menu_class'      => 'member-menu__list',
            'items_wrap'      => '<ul class="%2$s" role="list" >%3$s</ul>',
            'container'       => '',
            'list_item_class' => 'member-menu__list-item',
            'link_class'      => 'member-menu__link'
        ));
        ?>
    </nav>

  </header>

