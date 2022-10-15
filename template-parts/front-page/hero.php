<?php
/**
 * Template part for displaying hero section
 *
 * @package oxhu
 */

$heroImage = get_field('hero_image');
$heroButton = get_field('hero_button');
?>


<section class='hero content-grid'>

  <div class='hero__inner grid-centered'>
    <div class='hero__caption caption'>
      <div class='caption__text'>
        <p class='caption__eyebrow'>
			<?php
			echo get_field( 'hero_eyebrow' ) ?>
        </p>

        <h1 class='caption__title'>
	        <?php
	        $heroTitle = strip_tags( get_field( 'hero_title' ), '<span><br>' );
	        echo $heroTitle ?>
        </h1>
        <p class='caption__subtitle'>
			<?php
			echo get_field( 'hero_text' ) ?>
        </p>
      </div>
      <a href='<?php
      echo $heroButton['url'] ?>' class='btn caption__btn'><?php
	      echo $heroButton['title'] ?></a>

      <div class='hero__reviews reviews'>
	      <?php
	      get_template_part( 'template-parts/content', 'reviews' ); ?>

      </div>

    </div>


    </div>
  </div>

  <img src='<?php
  echo $heroImage['url']; ?>' alt='<?php
  echo $heroImage['alt'] ?>'
       class='hero__image grid-full-width'>
  <?php wp_reset_postdata(); ?>
</section>



