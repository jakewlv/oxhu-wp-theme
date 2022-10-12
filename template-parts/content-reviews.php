<?php
/**
 * Template part for displaying review thumbs
 *
 * @package oxhu
 */

$args = [
	'post_type' => 'testimonials',
	'posts_per_page' => 4,
];

$reviews = new WP_Query( $args );
$numberOfPosts=$reviews->found_posts;
 ?>




  <div class='reviews__images'>
	  <?php
	  while ( $reviews->have_posts() ) : $reviews->the_post(); ?>
        <div class='reviews__review'>
          <img src='<?php
		  echo get_field( 'avatar' ); ?>' alt='user avatar'
               class='review__avatar'>
        </div>

	  <?php
	  endwhile ?>

    <div class='reviews__review'>
      <span><?php echo $numberOfPosts; ?>+</span>
    </div>
  </div>
<div class='reviews__text'>
  <div class='reviews__stars'>
    <i icon-name="star"></i>
    <i icon-name="star"></i>
    <i icon-name="star"></i>
    <i icon-name="star"></i>
    <i icon-name="star"></i>
  </div>
  <a href='http://localhost:3000/reviews/' class='reviews__reviews-number'><?php echo $numberOfPosts; ?>+ Reviews</a>


	<?php wp_reset_postdata(); ?>

