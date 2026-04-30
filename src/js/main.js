import '../scss/main.scss';

/**
 * Theme interactions
 *
 * Client-side behaviour is intentionally modular and
 * lightweight. Each interaction is isolated so future
 * additions can be introduced without tightly coupling
 * unrelated concerns.
 */

/**
 * Mobile navigation toggle.
 *
 * Keeps navigation state predictable while updating
 * ARIA attributes for assistive technology support.
 */
const initMobileNavigation = () => {
  const toggle = document.querySelector('.js-nav-toggle');
  const nav = document.querySelector('.js-site-nav');

  if (!toggle || !nav) {
    return;
  }

  toggle.addEventListener('click', () => {
    const isExpanded =
      toggle.getAttribute('aria-expanded') === 'true';

    toggle.setAttribute(
      'aria-expanded',
      String(!isExpanded)
    );

    nav.classList.toggle('is-open');
    document.body.classList.toggle('nav-open');
  });
};

/**
 * Sticky header state.
 *
 * Adds a subtle visual elevation once the user
 * scrolls beyond the initial viewport threshold.
 */
const initStickyHeader = () => {
  const header = document.querySelector('.js-site-header');

  if (!header) {
    return;
  }

  const updateHeaderState = () => {
    header.classList.toggle(
      'is-scrolled',
      window.scrollY > 24
    );
  };

  updateHeaderState();
  window.addEventListener('scroll', updateHeaderState);
};

/**
 * Smooth anchor navigation.
 *
 * Uses measured header height so anchored sections
 * remain visible beneath sticky navigation.
 */
const initAnchorScroll = () => {
  const links = document.querySelectorAll('a[href^="#"]');
  const header = document.querySelector('.js-site-header');

  if (!links.length) {
    return;
  }

  links.forEach((link) => {
    link.addEventListener('click', (event) => {
      const targetId = link.getAttribute('href');
      const target = document.querySelector(targetId);

      if (!target) {
        return;
      }

      event.preventDefault();

      const headerOffset = header ? header.offsetHeight : 0;

      const targetPosition =
        target.getBoundingClientRect().top +
        window.pageYOffset -
        headerOffset;

      window.scrollTo({
        top: targetPosition,
        behavior: 'smooth',
      });
    });
  });
};

/**
 * Initialise theme scripts.
 */
const initTheme = () => {
  initMobileNavigation();
  initStickyHeader();
  initAnchorScroll();
};

document.addEventListener('DOMContentLoaded', initTheme);