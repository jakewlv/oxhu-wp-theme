import '@splidejs/splide/css/core';
import Splide from '@splidejs/splide';
import {
  createIcons,
  Star,
  User,
  LogIn,
  LogOut,
  Medal,
  HeartHandshake,
  Smile,
  HeartPulse,
} from 'lucide';

createIcons({
  icons: {
    Star,
    User,
    LogIn,
    LogOut,
    Medal,
    HeartHandshake,
    Smile,
    HeartPulse,
  },
  attrs: {
    class: ['oxhu-icon', 'icon'],
  },
  nameAttr: 'icon-name', // attribute for the icon name.
});

/* global wp, jQuery */
/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

// (function ($) {
//   // Site title and description.
//   wp.customize('blogname', function (value) {
//     value.bind(function (to) {
//       $('.site-title a').text(to);
//     });
//   });
//   wp.customize('blogdescription', function (value) {
//     value.bind(function (to) {
//       $('.site-description').text(to);
//     });
//   });
//
//   // Header text color.
//   wp.customize('header_textcolor', function (value) {
//     value.bind(function (to) {
//       if ('blank' === to) {
//         $('.site-title, .site-description').css({
//           clip: 'rect(1px, 1px, 1px, 1px)',
//           position: 'absolute',
//         });
//       } else {
//         $('.site-title, .site-description').css({
//           clip: 'auto',
//           position: 'relative',
//         });
//         $('.site-title a, .site-description').css({
//           color: to,
//         });
//       }
//     });
//   });
// })(jQuery);

// When the user scrolls down 80px from the top of the document, the header hides.
// When the user scrolls up, the header shows.
const body = document.body;
const header = document.querySelector('.header');
const headerFront = document.querySelector('.header--front');
const scrollUp = 'scroll-up';
const scrollDown = 'scroll-down';
let lastScroll = 0;

window.addEventListener('scroll', () => {
  const currentScroll = window.pageYOffset;
  if (currentScroll <= 50) {
    body.classList.remove(scrollUp);
    return;
  }

  if (currentScroll > lastScroll && !body.classList.contains(scrollDown)) {
    // down
    body.classList.remove(scrollUp);
    body.classList.add(scrollDown);
  } else if (
    currentScroll < lastScroll &&
    body.classList.contains(scrollDown)
  ) {
    // up
    body.classList.remove(scrollDown);
    body.classList.add(scrollUp);
  }
  lastScroll = currentScroll;
});

// When the user scrolls down 80px from the top of the document, change the header's background
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (body.scrollTop > 120 || document.documentElement.scrollTop > 120) {
    header.style.backgroundColor = '#121416f2';
  } else {
    header.style.backgroundColor = '';
  }
}

new Splide('.splide', {
  type: 'loop',
  perPage: 3,
  rewind: true,
  autoplay: true,
  arrows: false,
}).mount();
