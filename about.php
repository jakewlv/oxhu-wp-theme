<?php
/* Template Name: OXHU-about-page */

get_header();
?>

  <main id="primary" class="site-main content-grid">

	  <?php
	  get_template_part( 'template-parts/content', 'page-intro' ) ?>

    <section class='team-members grid-centered page-section'>

      <div class='section-intro'>

        <h1
          class='section-intro__title section-intro__title--dark'><?= get_field( 'team_members_title' ) ?></h1>

        <p class='section-intro__description'>
			<?= get_field( 'team_members_description' ) ?>
        </p>

      </div>

      <div class='team-members__inner'>

        <div class='team-members__team-member team-member'>

          <img
            src='https://res.cloudinary.com/cdn-oxhu/images/v1665776570/team-member-1-grad/team-member-1-grad.webp?_i=AA'
            alt='' class='team-member__image'>

          <div class='team-member__text'>

            <h3 class='team-member__name'>Mark Armstrong</h3>

            <h4 class='team-member__title'>Your Run Coach</h4>

            <p class='team-member__excerpt'>
              Mark grew up in Scotland, then spent his teenage years living overseas, lucky enough
              to live in places such as Thailand, Hong Kong, and Singapore, before, as an adult,
              settling down in London.
            </p>

            <a href='#' class='read-more'>Read More</a>

            <ul class='team-member__social' role='list'>

              <li class='team-member__social-item'><a href='#' class='team-member__social-link'>
                  <svg width="23" height="19" viewBox="0 0 23 19" fill="none"
                       xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M22.3642 2.75125C21.5325 3.11607 20.6463 3.35788 19.7224 3.47529C20.6729 2.9078 21.3983 2.01603 21.7394 0.941151C20.8532 1.4695 19.8747 1.84271 18.832 2.05097C17.9906 1.15501 16.7913 0.600098 15.483 0.600098C12.9447 0.600098 10.9011 2.6604 10.9011 5.18615C10.9011 5.54957 10.9319 5.89901 11.0074 6.23167C7.19567 6.04577 3.82287 4.2189 1.5571 1.43596C1.16154 2.12226 0.92951 2.9078 0.92951 3.75344C0.92951 5.3413 1.7472 6.74884 2.96605 7.56374C2.22943 7.54976 1.50679 7.3359 0.894566 6.99904C0.894566 7.01302 0.894566 7.03119 0.894566 7.04936C0.894566 9.27739 2.48382 11.128 4.56788 11.5543C4.19468 11.6564 3.78793 11.7053 3.36581 11.7053C3.07228 11.7053 2.77595 11.6885 2.4978 11.627C3.09185 13.4427 4.77754 14.7776 6.78193 14.8209C5.22203 16.0412 3.24141 16.7764 1.09724 16.7764C0.721244 16.7764 0.360622 16.7596 0 16.7135C2.03095 18.0232 4.43789 18.771 7.03353 18.771C15.4704 18.771 20.083 11.7822 20.083 5.72429C20.083 5.52161 20.076 5.32592 20.0662 5.13164C20.9762 4.48587 21.7408 3.67936 22.3642 2.75125Z"
                      fill="#141414" />
                  </svg>
                </a>
              </li>

              <li class='team-member__social-item'><a href='#' class='team-member__social-link'>
                  <svg width="24" height="17" viewBox="0 0 24 17" fill="none"
                       xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M20.6437 1.46793C21.6166 1.72701 22.3838 2.48546 22.6455 3.44762C23.1321 5.20496 23.1134 8.86797 23.1134 8.86797C23.1134 8.86797 23.1134 12.5123 22.6458 14.2698C22.3838 15.2318 21.6167 15.9903 20.6437 16.2492C18.8663 16.7119 11.7568 16.7119 11.7568 16.7119C11.7568 16.7119 4.66572 16.7119 2.86974 16.2309C1.89668 15.9718 1.12976 15.2133 0.867748 14.2513C0.400002 12.5123 0.400002 8.84946 0.400002 8.84946C0.400002 8.84946 0.400002 5.20496 0.867748 3.44762C1.12949 2.4856 1.91539 1.7085 2.8696 1.4497C4.64701 0.987061 11.7565 0.987061 11.7565 0.987061C11.7565 0.987061 18.8663 0.987061 20.6437 1.46793ZM15.405 8.84946L9.49291 5.48254V12.2164L15.405 8.84946Z"
                          fill="#141414" />
                  </svg>
                </a>
              </li>

              <li class='team-member__social-item'><a href='#' class='team-member__social-link'>

                  <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                       xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M23.5079 22.7136V22.7126H23.5136V14.2864C23.5136 10.1642 22.626 6.98877 17.8062 6.98877C15.4891 6.98877 13.9342 8.26008 13.2994 9.46533H13.2324V7.37361H8.6624V22.7126H13.421V15.1173C13.421 13.1175 13.8001 11.1837 16.2771 11.1837C18.7177 11.1837 18.7541 13.4659 18.7541 15.2456V22.7136H23.5079Z"
                      fill="#141414" />
                    <path d="M1.6736 7.86243H6.0416V22.7136H1.6736V7.86243Z" fill="#141414" />
                    <path
                      d="M3.4208 0C1.974 0 0.800003 1.16852 0.800003 2.60858C0.800003 4.04864 1.974 5.2416 3.4208 5.2416C4.86761 5.2416 6.0416 4.04864 6.0416 2.60858C6.04069 1.16852 4.8667 0 3.4208 0Z"
                      fill="#141414" />
                  </svg>
                </a>
              </li>

            </ul>

          </div>

        </div>

        <div class='team-members__team-member team-member'>

          <div class='team-member__image-container'>
            <img
              src='https://res.cloudinary.com/cdn-oxhu/images/v1665776573/team-member-2-grad/team-member-2-grad.webp?_i=AA'
              alt='' class='team-member__image'>
          </div>


          <div class='team-member__text'>

            <h3 class='team-member__name'>Jenny Armstrong</h3>

            <h4 class='team-member__title'>Looking After the Operations</h4>

            <p class='team-member__excerpt'>
              Jenny is passionate about happiness, kindness and well-being, and she knows when
              runners get together all these 3 boxes are ticked. The OXHU mission is to build a
              wonderful, supportive community with lots of encouragement and absolutely no
              judgement. </p>

            <a href='' class='read-more'>Read More</a>

            <ul class='team-member__social' role='list'>

              <li class='team-member__social-item'><a href='#' class='team-member__social-link'>
                  <svg width="23" height="19" viewBox="0 0 23 19" fill="none"
                       xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M22.3642 2.75125C21.5325 3.11607 20.6463 3.35788 19.7224 3.47529C20.6729 2.9078 21.3983 2.01603 21.7394 0.941151C20.8532 1.4695 19.8747 1.84271 18.832 2.05097C17.9906 1.15501 16.7913 0.600098 15.483 0.600098C12.9447 0.600098 10.9011 2.6604 10.9011 5.18615C10.9011 5.54957 10.9319 5.89901 11.0074 6.23167C7.19567 6.04577 3.82287 4.2189 1.5571 1.43596C1.16154 2.12226 0.92951 2.9078 0.92951 3.75344C0.92951 5.3413 1.7472 6.74884 2.96605 7.56374C2.22943 7.54976 1.50679 7.3359 0.894566 6.99904C0.894566 7.01302 0.894566 7.03119 0.894566 7.04936C0.894566 9.27739 2.48382 11.128 4.56788 11.5543C4.19468 11.6564 3.78793 11.7053 3.36581 11.7053C3.07228 11.7053 2.77595 11.6885 2.4978 11.627C3.09185 13.4427 4.77754 14.7776 6.78193 14.8209C5.22203 16.0412 3.24141 16.7764 1.09724 16.7764C0.721244 16.7764 0.360622 16.7596 0 16.7135C2.03095 18.0232 4.43789 18.771 7.03353 18.771C15.4704 18.771 20.083 11.7822 20.083 5.72429C20.083 5.52161 20.076 5.32592 20.0662 5.13164C20.9762 4.48587 21.7408 3.67936 22.3642 2.75125Z"
                      fill="#141414" />
                  </svg>
                </a>
              </li>

              <li class='team-member__social-item'><a href='#' class='team-member__social-link'>
                  <svg width="24" height="17" viewBox="0 0 24 17" fill="none"
                       xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M20.6437 1.46793C21.6166 1.72701 22.3838 2.48546 22.6455 3.44762C23.1321 5.20496 23.1134 8.86797 23.1134 8.86797C23.1134 8.86797 23.1134 12.5123 22.6458 14.2698C22.3838 15.2318 21.6167 15.9903 20.6437 16.2492C18.8663 16.7119 11.7568 16.7119 11.7568 16.7119C11.7568 16.7119 4.66572 16.7119 2.86974 16.2309C1.89668 15.9718 1.12976 15.2133 0.867748 14.2513C0.400002 12.5123 0.400002 8.84946 0.400002 8.84946C0.400002 8.84946 0.400002 5.20496 0.867748 3.44762C1.12949 2.4856 1.91539 1.7085 2.8696 1.4497C4.64701 0.987061 11.7565 0.987061 11.7565 0.987061C11.7565 0.987061 18.8663 0.987061 20.6437 1.46793ZM15.405 8.84946L9.49291 5.48254V12.2164L15.405 8.84946Z"
                          fill="#141414" />
                  </svg>
                </a>
              </li>

              <li class='team-member__social-item'><a href='#' class='team-member__social-link'>

                  <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                       xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M23.5079 22.7136V22.7126H23.5136V14.2864C23.5136 10.1642 22.626 6.98877 17.8062 6.98877C15.4891 6.98877 13.9342 8.26008 13.2994 9.46533H13.2324V7.37361H8.6624V22.7126H13.421V15.1173C13.421 13.1175 13.8001 11.1837 16.2771 11.1837C18.7177 11.1837 18.7541 13.4659 18.7541 15.2456V22.7136H23.5079Z"
                      fill="#141414" />
                    <path d="M1.6736 7.86243H6.0416V22.7136H1.6736V7.86243Z" fill="#141414" />
                    <path
                      d="M3.4208 0C1.974 0 0.800003 1.16852 0.800003 2.60858C0.800003 4.04864 1.974 5.2416 3.4208 5.2416C4.86761 5.2416 6.0416 4.04864 6.0416 2.60858C6.04069 1.16852 4.8667 0 3.4208 0Z"
                      fill="#141414" />
                  </svg>
                </a>
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
