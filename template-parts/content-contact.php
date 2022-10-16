<?php
/**
 * Template part for displaying page content in contact.php
 *
 * @package oxhu
 */

?>

<article id="post-<?php
the_ID(); ?>" <?php
post_class(); ?>>
  <header class="entry-header">

  </header><!-- .entry-header -->

	<?php
	oxhu_post_thumbnail(); ?>

  <div class="entry-content">
	  <?php
	  the_content();


	  wp_link_pages( array(
		  'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'oxhu' ),
		  'after'  => '</div>',
	  ) );
	  ?>

    <p class='contact__description'>
      In enim nibh fermentum pellentesque. Turpis enim neque magnis venenatis pretium mauris morbi.
      Molestie vitae a viverra et, eu sed aliquam magna.
    </p>

    <ul class='contact__details-list' role='list'>
      <li class='contact__details-item'>
        <p class='contact__address'><span class='uppercase bold'>Address</span>171A North Street,
          Aberdeen, AB11 1JQ</p></li>
      <li class='contact__details-item'><span class='uppercase bold'>Email</span><a href=''>hello@oxhu.co.uk</a>
      </li>
      <li class='contact__details-item'>
        <p class='contact__phone'><span class='uppercase bold'>Phone</span>374-430-0510</p></li>
    </ul>
    <ul class='contact__details-list' role='list'>
      <p class='uppercase bold'>Social</p>
      <li class='contact__details-item'><p class='uppercase bold'>Facebook</p>
      <li class='contact__details-item'><p class='uppercase bold'>Twitter</p>
      <li class='contact__details-item'><p class='uppercase bold'>Youtube</p>
      </li>
    </ul>

  </div><!-- .entry-content -->

  <section class='faq'>
    <div class='faq__inner'>
      <div class='faq__item'>
        <h4 class='faq__question'>
          Do I have to pay to keep my projects published?
        </h4>
        <p class='faq__answer'>
          Massa eget tortor id venenatis dictum morbi ornare. Tempus nisl scelerisque auctor nulla.
          Tristique a mattis malesuada scelerisque enim. At vitae dolor dignissim et massa, faucibus
          in fusce ipsum. Nullam bibendum mattis mattis elementum, sed donec malesuada nam.
        </p>
      </div>
      <div class='faq__item'>
        <h4 class='faq__question'>
          Are there any discounts?
        </h4>
        <p class='faq__answer'>
          Risus aliquet porttitor purus parturient adipiscing tempor, nullam porttitor quis.
        </p>
      </div>
      <div class='faq__item'>
        <h4 class='faq__question'>
          How can I cancel my subscription?
        </h4>
        <p class='faq__answer'>
          Consectetur ridiculus venenatis pulvinar laoreet volutpat commodo facilisis. Sed eget
          ullamcorper nunc dignissim sollicitudin massa lorem sapien.
        </p>
      </div>
      <div class='faq__item'>
        <h4 class='faq__question'>
          What happens if I downgrade?
        </h4>
        <p class='faq__answer'>
          Arcu amet, arcu et urna sapien mi vivamus pretium iaculis. Varius neque, justo viverra
          integer purus aliquam nunc. Pretium mauris pharetra, arcu laoreet tortor, nulla ac. Ut.
        </p>
      </div>
      <div class='faq__item'>
        <h4 class='faq__question'>
          How can I switch between the plans?
        </h4>
        <p class='faq__answer'>
          Molestie eu ut non massa. Scelerisque in augue augue feugiat. Sociis mattis mauris dui
          laoreet morbi. Suspendisse mattis faucibus gravida at feugiat in nec parturient elit. Arcu
          egestas pellentesque in et cras tincidunt a posuere. Tellus iaculis nulla risus, a massa
          massa ultricies.
        </p>
      </div>
    </div>
  </section>

	<?php
	if ( get_edit_post_link() ) : ?>
      <footer class="entry-footer">
		  <?php
		  edit_post_link( sprintf( wp_kses( /* translators: %s: Name of current post. Only visible to screen readers */ __( 'Edit <span class="screen-reader-text">%s</span>',
			  'oxhu' ), array(
			  'span' => array(
				  'class' => array(),
			  ),
		  ) ), wp_kses_post( get_the_title() ) ), '<span class="edit-link">', '</span>' );
		  ?>
      </footer><!-- .entry-footer -->
	<?php
	endif; ?>
</article><!-- #post-<?php
the_ID(); ?> -->