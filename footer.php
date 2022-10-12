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

<footer id="colophon" class="footer content-grid">

  <div class='footer__inner grid-full-width'>
    <div class='subscribe'>
      <form action='' class='subscribe__form'>
        <label for="subscribe">Subscribe for updates</label>
        <input type="email" id="subscribe" name="subscribe" placeholder='Email address'>
        <input type="submit" value="Submit">
      </form>
      <p class='subscribe__description'>
        Viverra mauris lacinia vestibulum, lacus aliquet sapien, pulvinar pulvinar pellentesque.
      </p>
    </div>


    <div class='footer__cols'>
      <!-- Col 1 -->
      <div class='footer__logo'>
		  <?php
		  the_custom_logo(); ?>
      </div>

      <!-- Col 2 -->
      <div class='footer__links'>
        <div class='footer__links-category links-category'>
          <h4 class='links-category__title'>Legal</h4>
          <a href='' class='links-category__link'>First Link</a>
          <a href='' class='links-category__link'>Second Link</a>
          <a href='' class='links-category__link'>Third Link</a>
          <a href='' class='links-category__link'>Fourth Link</a>
        </div>
        <div class='footer__links-category  links-category'>
          <h4 class='links-category__title'>Company</h4>
          <a href='' class='links-category__link'>First Link</a>
          <a href='' class='links-category__link'>Second Link</a>
          <a href='' class='links-category__link'>Third Link</a>
          <a href='' class='links-category__link'>Fourth Link</a>
          <a href='' class='links-category__link'>Fifth Link</a>
        </div>
        <div class='footer__links-category  links-category'>
          <h4 class='links-category__title'>Networking</h4>
          <a href='' class='links-category__link'>First Link</a>
          <a href='' class='links-category__link'>Second Link</a>
        </div>
      </div>

      <!-- Col 3 -->
      <div class='footer__social-links social-links'>
        <a href='' class='social-links__link'> <i icon-name="star"></i></a>
        <a href='' class='social-links__link'> <i icon-name="star"></i></a>
        <a href='' class='social-links__link'> <i icon-name="star"></i></a>
      </div>
    </div>


  </div>

</footer><!-- #colophon -->

<div class="site-info">
    <span class='copy'>&copy;  Copyright <?php
	    echo date( "Y" ); ?></span>
  <span class="sep"> | </span>
	<?php
	/* translators: 1: Theme name, 2: Theme author. */
	printf( esc_html__( 'Web design by %2$s.', 'oxhu' ), 'oxhu',
		'<a href="https://github.com/jakewlv">Weblavida</a>' );
	?>
</div><!-- .site-info -->



<?php
wp_footer(); ?>

</body>
</html>
