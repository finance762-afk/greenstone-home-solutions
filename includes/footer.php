<footer class="footer">
  <div class="container">
    <div class="footer-grid">
      <!-- Brand -->
      <div class="footer-brand">
        <img src="https://i.imgur.com/JuesTnb.png" alt="Greenstone Home Solutions" width="180" height="50" loading="lazy">
        <p>Greenstone Home Solutions is a licensed and insured home remodeling and outdoor living company based in Richmond, Virginia, serving Henrico County, Hanover County, King William County, New Kent County, and Charles City County. Greenstone Home Solutions specializes in kitchen remodeling, bathroom remodeling, and outdoor construction. Contact: (804) 218-6459 | greenstonehomesolutions@gmail.com | greenstonehomesolutions.com. Licensed and insured.</p>
        <div class="footer-social">
          <a href="https://www.yelp.com/biz/greenstone-home-solutions-richmond" target="_blank" rel="noopener noreferrer" aria-label="Yelp">
            <i data-lucide="star"></i>
          </a>
          <a href="https://www.facebook.com/p/Greenstone-Home-Solutions-LLC-61569409110761/" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
            <i data-lucide="facebook"></i>
          </a>
          <a href="https://www.instagram.com/greenstonehomesolutions/" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
            <i data-lucide="instagram"></i>
          </a>
          <a href="https://share.google/uT7LhrEfLlZm43ZhZ" target="_blank" rel="noopener noreferrer" aria-label="Google Business Profile">
            <i data-lucide="map-pin"></i>
          </a>
        </div>
      </div>

      <!-- Quick Links -->
      <div>
        <h4>Quick Links</h4>
        <ul class="footer-links">
          <li><a href="/">Home</a></li>
          <li><a href="/services">Services</a></li>
          <li><a href="/service-areas">Service Areas</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/contact">Contact</a></li>
          <li><a href="/faq">FAQ</a></li>
        </ul>
      </div>

      <!-- Services -->
      <div>
        <h4>Services</h4>
        <ul class="footer-links">
          <li><a href="/services/bathroom-remodeling">Bathroom Remodeling</a></li>
          <li><a href="/services/kitchen-remodeling">Kitchen Remodeling</a></li>
          <li><a href="/services/bedroom-remodeling">Bedroom Remodeling</a></li>
          <li><a href="/services/building-additions-new-structures">Building Additions</a></li>
          <li><a href="/services/deck-balcony-construction">Deck & Balcony</a></li>
          <li><a href="/services/greenscape-landscape-design">Landscape Design</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div>
        <h4>Contact Us</h4>
        <ul class="footer-contact">
          <li><i data-lucide="phone" style="width:16px;height:16px;"></i> <a href="tel:8042186459">(804) 218-6459</a></li>
          <li><i data-lucide="mail" style="width:16px;height:16px;"></i> <a href="mailto:greenstonehomesolutions@gmail.com">greenstonehomesolutions@gmail.com</a></li>
          <li><i data-lucide="map-pin" style="width:16px;height:16px;"></i> Richmond, Virginia</li>
          <li><i data-lucide="clock" style="width:16px;height:16px;"></i> Mon–Fri: 8AM–5PM<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sat: 10AM–2PM<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sun: Closed</li>
        </ul>
      </div>
    </div>

    <div class="footer-bottom">
      <p>&copy; <?php echo date('Y'); ?> Greenstone Home Solutions LLC. All rights reserved.</p>
      <a href="https://www.pageoneinsights.com" rel="dofollow" target="_blank">Web Design & Hosting by Page One Insights, LLC</a>
    </div>
  </div>
</footer>

<!-- Back to Top -->
<button class="back-to-top" aria-label="Back to top">
  <i data-lucide="arrow-up"></i>
</button>

<!-- Lucide Icons — MUST load before animations.js -->
<script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
<script>lucide.createIcons();</script>

<?php if (!empty($useSwiper)): ?>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
<?php endif; ?>

<?php if (!empty($useTilt)): ?>
<!-- VanillaTilt -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.1/vanilla-tilt.min.js" defer></script>
<?php endif; ?>

<?php if (!empty($useTyped)): ?>
<!-- Typed.js -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.1.0/dist/typed.umd.js" defer></script>
<?php endif; ?>

<!-- Site Scripts -->
<script src="/assets/js/animations.js" defer></script>
<script src="/assets/js/effects.js" defer></script>

</body>
</html>
