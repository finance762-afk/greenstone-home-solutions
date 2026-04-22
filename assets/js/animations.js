/* ============================================
   GREENSTONE HOME SOLUTIONS — animations.js
   Scroll reveals, stat counters, stagger grids.
   Reveal gate: .reveal-ready on <html> activates hide-then-show,
   so if this script fails to load, content stays visible.
   ============================================ */

(function() {
  'use strict';

  // Activate reveal gate immediately — CSS hides reveal-* only when this class is set.
  document.documentElement.classList.add('reveal-ready');

  var REVEAL_SELECTOR = '.reveal-up, .reveal-down, .reveal-left, .reveal-right, .reveal-scale';
  var revealElements = document.querySelectorAll(REVEAL_SELECTOR);

  function showAll() {
    document.querySelectorAll(REVEAL_SELECTOR).forEach(function(el) {
      el.classList.add('is-visible');
      el.classList.add('in-view'); // legacy alias
    });
  }

  // === MULTI-DIRECTIONAL REVEAL OBSERVER ===
  if ('IntersectionObserver' in window && revealElements.length > 0) {
    var revealObserver = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          entry.target.classList.add('in-view');
          revealObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

    revealElements.forEach(function(el) { revealObserver.observe(el); });
  } else {
    // Older browsers: show everything immediately.
    showAll();
  }

  // Safety net: 3s after load, force any remaining reveal-* visible.
  // This prevents permanent invisibility if the observer misses something
  // (off-screen elements users jump to, layout shifts, etc.).
  window.addEventListener('load', function() {
    setTimeout(showAll, 3000);
  });

  // === LEGACY SCROLL REVEAL ([data-animate]) ===
  var animatedElements = document.querySelectorAll('[data-animate]');

  if (animatedElements.length > 0 && 'IntersectionObserver' in window) {
    var legacyObserver = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('in-view');
          legacyObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15 });

    animatedElements.forEach(function(el) { legacyObserver.observe(el); });
  } else {
    animatedElements.forEach(function(el) { el.classList.add('in-view'); });
  }

  // === STAGGER GRID CHILDREN ===
  var staggerGrids = document.querySelectorAll('[data-stagger]');

  staggerGrids.forEach(function(grid) {
    var children = grid.children;
    for (var i = 0; i < children.length; i++) {
      var delay = Math.min(i * 100, 400);
      children[i].style.transitionDelay = delay + 'ms';
    }
  });

  // === STAT COUNTER ANIMATION ===
  var statNumbers = document.querySelectorAll('[data-count]');
  if (!statNumbers.length) return;

  function animateCounter(el) {
    var target = parseInt(el.getAttribute('data-count'), 10);
    if (isNaN(target)) return;
    var suffix = el.getAttribute('data-suffix') || '';
    var duration = 2000;
    var startTime = null;

    function step(timestamp) {
      if (!startTime) startTime = timestamp;
      var progress = Math.min((timestamp - startTime) / duration, 1);
      var eased = 1 - Math.pow(1 - progress, 3);
      var current = Math.floor(eased * target);
      el.textContent = current + suffix;

      if (progress < 1) {
        requestAnimationFrame(step);
      } else {
        el.textContent = target + suffix;
      }
    }

    requestAnimationFrame(step);
  }

  if ('IntersectionObserver' in window) {
    var countObserver = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
          countObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.3 });

    statNumbers.forEach(function(el) { countObserver.observe(el); });
  } else {
    statNumbers.forEach(function(el) {
      var target = parseInt(el.getAttribute('data-count'), 10);
      var suffix = el.getAttribute('data-suffix') || '';
      if (!isNaN(target)) el.textContent = target + suffix;
    });
  }

  // Safety: also force counter targets after 3.5s in case observer missed them.
  window.addEventListener('load', function() {
    setTimeout(function() {
      statNumbers.forEach(function(el) {
        if (el.textContent.trim() === '0' || el.textContent.trim() === '') {
          var target = parseInt(el.getAttribute('data-count'), 10);
          var suffix = el.getAttribute('data-suffix') || '';
          if (!isNaN(target)) el.textContent = target + suffix;
        }
      });
    }, 3500);
  });

})();
