<?php
/* Template Name: OXHU-about-page */

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package oxhu
 */

get_header();
?>

  <main id="primary" class="site-main content-grid">

    <?php get_template_part('template-parts/content', 'page-intro') ?>

    <section class='team-members grid-centered'>

      <div class='section-intro'>

        <h2 class='section-intro__title section-intro__title--dark'>Team Members</h2>

        <p class='section-intro__description'>
          Commodo a non in nec, odio ridiculus malesuada congue sit maecenas magnis tellus
          imperdiet cras pretium
        </p>

      </div>

      <div class='team-members__inner'>

        <div class='team__members__team-member team-member'>

          <img src='#' alt='' class='team-member__image'>

          <div class='team-member__text'>

            <h3 class='team-member__name'>Mark Armstrong</h3>

            <h4 class='team-member__title'>Your Run Coach</h4>

            <p class='team-member__excerpt'>
              Mark grew up in Scotland, then spent his teenage years living overseas, lucky enough
              to live in places such as Thailand, Hong Kong, and Singapore, before, as an adult,
              settling down in London.
            </p>

            <a href='#' class='ream-more'>Read More</a>

            <ul class='team-member__social' role='list'>

              <li class='team-member__social-item'><a href='#' class='team-member__social-link'>Twitter</a>
              </li>

              <li class='team-member__social-item'><a href='#' class='team-member__social-link'>Youtube</a>
              </li>

              <li class='team-member__social-item'><a href='#' class='team-member__social-link'>Facebook</a>
              </li>

            </ul>

          </div>

        </div>

        <div class='team__members__team-member team-member'>

          <img src='#' alt='' class='team-member__image'>

          <div class='team-member__text'>

            <h3 class='team-member__name'>Jenny Armstrong</h3>

            <h4 class='team-member__title'>Looking After the Operations</h4>

            <p class='team-member__excerpt'>
              Jenny is passionate about happiness, kindness and well-being and she knows when
              runners get together all these 3 boxes are ticked. The OXHU mission is to build a
              wonderful, supportive community with lots of encouragement and absolutely no
              judgement. </p>

            <a href='#' class='ream-more'>Read More</a>

            <ul class='team-member__social' role='list'>

              <li class='team-member__social-item'><a href='#' class='team-member__social-link'>Twitter</a>
              </li>

              <li class='team-member__social-item'><a href='#' class='team-member__social-link'>Youtube</a>
              </li>

              <li class='team-member__social-item'><a href='#' class='team-member__social-link'>Facebook</a>
              </li>

            </ul>

          </div>

        </div>

      </div>

    </section>

  </main><!-- #main -->


<?php
//get_sidebar();
get_footer();
