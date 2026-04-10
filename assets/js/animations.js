/* ============================================
   GREENSTONE HOME SOLUTIONS — animations.js
   Scroll reveals, stat counters, stagger grids
   ============================================ */

(function() {
  'use strict';

  // === SCROLL REVEAL (fade-up + wipe-right) ===
  const animatedElements = document.querySelectorAll('[data-animate]');

  if (animatedElements.length > 0) {
    const revealObserver = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('in-view');
          revealObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15 });

    animatedElements.forEach(function(el) {
      revealObserver.observe(el);
    });
  }

  // === STAGGER GRID CHILDREN ===
  const staggerGrids = document.querySelectorAll('[data-stagger]');

  staggerGrids.forEach(function(grid) {
    var children = grid.children;
    for (var i = 0; i < children.length; i++) {
      var delay = Math.min(i * 100, 400);
      children[i].style.transitionDelay = delay + 'ms';
    }
  });

  // === STAT COUNTER ANIMATION ===
  const statNumbers = document.querySelectorAll('[data-count]');

  if (statNumbers.length > 0) {
    const countObserver = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
          countObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.3 });

    statNumbers.forEach(function(el) {
      countObserver.observe(el);
    });
  }

  function animateCounter(el) {
    var target = parseInt(el.getAttribute('data-count'), 10);
    var suffix = el.getAttribute('data-suffix') || '';
    var duration = 2000;
    var startTime = null;

    function step(timestamp) {
      if (!startTime) startTime = timestamp;
      var progress = Math.min((timestamp - startTime) / duration, 1);
      var eased = 1 - Math.pow(1 - progress, 3); // ease-out cubic
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

})();
