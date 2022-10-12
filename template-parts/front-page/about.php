<?php
/**
 * Template part for displaying about section of the front page
 *
 * @package oxhu
 */

$aboutImage = get_field('about_image');
$aboutButton = get_field('about_button');

?>

<section class='about content-grid'>
  <div class='about__inner grid-centered'>
    <img src='<?php
	echo $aboutImage['url'] ?>' alt='<?php
	echo $aboutImage['alt'] ?>' class='about__image'>
    <div class='about__text-container'>
      <h2 class='about__title'><?php
		  echo get_field( 'about_title' ) ?></h2>
      <p class='about__description'><?php
		  echo get_field( 'about_text' ) ?></p>
      <a href='<?php
	  echo $aboutButton['url'] ?>' class='btn about__btn'><?php echo $aboutButton['title'] ?></a>
    </div>
  </div>
</section>




