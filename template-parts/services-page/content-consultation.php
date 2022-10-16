<?php
/**
 * Consultation Content
 *
 * @package OXHU
 */


$consultationImage       = get_field( 'consultation_image' );
$consultationButton      = get_field( 'consultation_button' );
$consultationDownloadApp = get_field( 'consultation_download_app' );
?>

<img class='consultation__image' src='<?= $consultationImage['url']; ?>'
     alt='<?= $consultationImage['alt'] ?>'>
<div class='consultation__text'>
  <h1 class='consultation__title'><?= get_field( 'consultation_title' ) ?></h1>
  <p class='consultation__description'><?= get_field( 'consultation_description' ) ?></p>

  <h6 class='consultation__feature-title'>Features</h6>

  <div class='consultation__feature-lists'>
	  <?php
	  if ( have_rows( 'consultation_features' ) ): ?>
		  <?php
		  while ( have_rows( 'consultation_features' ) ):
			  the_row();

			  // Get sub field values.
			  $feature1 = get_sub_field( 'feature_1' );
			  $feature2 = get_sub_field( 'feature_2' );
			  $feature3 = get_sub_field( 'feature_3' );
			  $feature4 = get_sub_field( 'feature_4' );
			  $feature5 = get_sub_field( 'feature_5' );
			  $feature6 = get_sub_field( 'feature_6' );
			  ?>

            <ul class='consultation__feature-list' role='list'>
              <li class='consultation__feature-item'>
                <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M13 2C7.48 2 3 6.48 3 12C3 17.52 7.48 22 13 22C18.52 22 23 17.52 23 12C23 6.48 18.52 2 13 2ZM11 16L7.5 12.5L8.91 11.09L11 13.17L16.18 8L17.59 9.41L11 16Z"
                        fill="#616161" />
                </svg><?= $feature1 ?></li>
              <li class='consultation__feature-item'>
                <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M13 2C7.48 2 3 6.48 3 12C3 17.52 7.48 22 13 22C18.52 22 23 17.52 23 12C23 6.48 18.52 2 13 2ZM11 16L7.5 12.5L8.91 11.09L11 13.17L16.18 8L17.59 9.41L11 16Z"
                        fill="#616161" />
                </svg><?= $feature2 ?></li>
              <li class='consultation__feature-item'>
                <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M13 2C7.48 2 3 6.48 3 12C3 17.52 7.48 22 13 22C18.52 22 23 17.52 23 12C23 6.48 18.52 2 13 2ZM11 16L7.5 12.5L8.91 11.09L11 13.17L16.18 8L17.59 9.41L11 16Z"
                        fill="#616161" />
                </svg><?= $feature3 ?></li>
            </ul>

            <ul class='consultation__feature-list' role='list'>
              <li class='consultation__feature-item'>
                <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M13 2C7.48 2 3 6.48 3 12C3 17.52 7.48 22 13 22C18.52 22 23 17.52 23 12C23 6.48 18.52 2 13 2ZM11 16L7.5 12.5L8.91 11.09L11 13.17L16.18 8L17.59 9.41L11 16Z"
                        fill="#616161" />
                </svg><?= $feature4 ?></li>
              <li class='consultation__feature-item'>
                <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M13 2C7.48 2 3 6.48 3 12C3 17.52 7.48 22 13 22C18.52 22 23 17.52 23 12C23 6.48 18.52 2 13 2ZM11 16L7.5 12.5L8.91 11.09L11 13.17L16.18 8L17.59 9.41L11 16Z"
                        fill="#616161" />
                </svg><?= $feature5 ?></li>
              <li class='consultation__feature-item'>
                <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M13 2C7.48 2 3 6.48 3 12C3 17.52 7.48 22 13 22C18.52 22 23 17.52 23 12C23 6.48 18.52 2 13 2ZM11 16L7.5 12.5L8.91 11.09L11 13.17L16.18 8L17.59 9.41L11 16Z"
                        fill="#616161" />
                </svg><?= $feature6 ?></li>
            </ul>

		  <?php
		  endwhile; ?>
		  <?php
		  wp_reset_postdata() ?>
	  <?php
	  endif; ?>
  </div>


  <div class='consultation__button-group'>
    <a href='<?= $consultationButton['url'] ?>'
       class='consultation__button btn'><?= $consultationButton['title'] ?></a>
    <a href='<?= $consultationDownloadApp['url'] ?>'
       class='consultation__dl-app'><svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M10.8333 1.66675C6.24167 1.66675 2.5 5.40841 2.5 10.0001C2.5 14.5917 6.24167 18.3334 10.8333 18.3334C15.425 18.3334 19.1667 14.5917 19.1667 10.0001C19.1667 5.40841 15.425 1.66675 10.8333 1.66675ZM10 8.33341V5.00008H11.6667V8.33341H14.1667L10.8333 11.6667L7.5 8.33341H10ZM15 14.1667H6.66667V12.5001H15V14.1667Z" fill="#393939"/>
      </svg> <?= $consultationDownloadApp['title'] ?></a>
  </div>


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
