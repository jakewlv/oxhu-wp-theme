<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package oxhu
 */

?>

<footer id="colophon" class="footer grid-full-width">
  <div class="site-info">
    <span class='copy'>&copy; <?php
        echo date("Y"); ?></span>
    <span class="sep"> | </span>
      <?php
      /* translators: 1: Theme name, 2: Theme author. */
      printf(esc_html__('Theme: %1$s by %2$s.', 'oxhu'), 'oxhu',
          '<a href="https://github.com/jakewlv">Weblavida</a>');
      ?>
  </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->


<?php wp_footer(); ?>

</body>
</html>
