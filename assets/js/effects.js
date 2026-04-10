/* ============================================
   GREENSTONE HOME SOLUTIONS — effects.js
   Ripple, ticker, mobile menu, navbar scroll,
   back-to-top, GA4 tracking stubs
   ============================================ */

(function() {
  'use strict';

  // === RIPPLE EFFECT (on .btn-primary clicks) ===
  document.addEventListener('click', function(e) {
    var btn = e.target.closest('.btn-primary');
    if (!btn) return;

    var existing = btn.querySelector('.ripple');
    if (existing) existing.remove();

    var ripple = document.createElement('span');
    ripple.classList.add('ripple');
    var rect = btn.getBoundingClientRect();
    var size = Math.max(rect.width, rect.height);
    ripple.style.width = ripple.style.height = size + 'px';
    ripple.style.left = (e.clientX - rect.left - size / 2) + 'px';
    ripple.style.top = (e.clientY - rect.top - size / 2) + 'px';
    btn.appendChild(ripple);

    ripple.addEventListener('animationend', function() {
      ripple.remove();
    });
  });

  // === TICKER PAUSE ON HOVER ===
  // Handled purely by CSS (.ticker-strip:hover .ticker-track { animation-play-state: paused; })

  // === MOBILE MENU TOGGLE + SCROLL LOCK ===
  var hamburger = document.querySelector('.hamburger');
  var mobileMenu = document.querySelector('.mobile-menu');

  if (hamburger && mobileMenu) {
    hamburger.addEventListener('click', function() {
      var isOpen = mobileMenu.classList.contains('open');
      mobileMenu.classList.toggle('open');
      hamburger.classList.toggle('active');
      hamburger.setAttribute('aria-expanded', !isOpen);
      document.body.style.overflow = isOpen ? '' : 'hidden';
    });

    // Close on link tap
    mobileMenu.querySelectorAll('a').forEach(function(link) {
      link.addEventListener('click', function() {
        mobileMenu.classList.remove('open');
        hamburger.classList.remove('active');
        hamburger.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
      });
    });

    // Mobile dropdown toggles
    mobileMenu.querySelectorAll('.mobile-dropdown-label').forEach(function(label) {
      label.addEventListener('click', function() {
        var items = this.nextElementSibling;
        if (items && items.classList.contains('mobile-dropdown-items')) {
          items.classList.toggle('open');
          var chevron = this.querySelector('i');
          if (chevron) {
            chevron.style.transform = items.classList.contains('open') ? 'rotate(180deg)' : '';
          }
        }
      });
    });
  }

  // === NAVBAR SCROLL CLASS ===
  var navbar = document.querySelector('.navbar');
  if (navbar) {
    window.addEventListener('scroll', function() {
      if (window.scrollY > 80) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    }, { passive: true });
  }

  // === BACK TO TOP ===
  var backToTop = document.querySelector('.back-to-top');
  if (backToTop) {
    window.addEventListener('scroll', function() {
      if (window.scrollY > 300) {
        backToTop.classList.add('visible');
      } else {
        backToTop.classList.remove('visible');
      }
    }, { passive: true });

    backToTop.addEventListener('click', function() {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  // === FAQ ACCORDION ===
  document.querySelectorAll('.faq-question').forEach(function(btn) {
    btn.addEventListener('click', function() {
      var item = this.parentElement;
      var answer = item.querySelector('.faq-answer');
      var isOpen = item.classList.contains('open');

      // Close all others
      document.querySelectorAll('.faq-item.open').forEach(function(openItem) {
        if (openItem !== item) {
          openItem.classList.remove('open');
          openItem.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
          openItem.querySelector('.faq-answer').style.maxHeight = null;
        }
      });

      // Toggle current
      if (isOpen) {
        item.classList.remove('open');
        this.setAttribute('aria-expanded', 'false');
        answer.style.maxHeight = null;
      } else {
        item.classList.add('open');
        this.setAttribute('aria-expanded', 'true');
        answer.style.maxHeight = answer.scrollHeight + 'px';
      }
    });
  });

  // === GA4 EVENT STUBS ===

  // Click-to-call tracking
  document.querySelectorAll('a[href^="tel:"]').forEach(function(el) {
    el.addEventListener('click', function() {
      if (typeof gtag !== 'undefined') {
        gtag('event', 'phone_call', { event_category: 'contact', event_label: el.href });
      }
    });
  });

  // Form submission tracking
  document.querySelectorAll('form').forEach(function(form) {
    form.addEventListener('submit', function() {
      if (typeof gtag !== 'undefined') {
        gtag('event', 'form_submit', { event_category: 'contact', event_label: window.location.pathname });
      }
    });
  });

})();
