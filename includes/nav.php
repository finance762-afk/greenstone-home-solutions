<!-- Skip to Content -->
<a href="#main-content" class="skip-link">Skip to main content</a>

<nav class="navbar" aria-label="Main navigation">
  <div class="container">
    <a href="/" class="navbar-logo">
      <img src="https://i.imgur.com/JuesTnb.png" alt="Greenstone Home Solutions" width="180" height="50">
    </a>

    <ul class="nav-links">
      <li><a href="/" <?php if ($currentPage === 'home') echo 'aria-current="page"'; ?>>Home</a></li>
      <li class="has-dropdown">
        <a href="/services" <?php if ($currentPage === 'services') echo 'aria-current="page"'; ?>>Services</a>
        <ul class="dropdown" role="menu" style="display:none">
          <li><a href="/services/bathroom-remodeling" role="menuitem">Bathroom Remodeling</a></li>
          <li><a href="/services/kitchen-remodeling" role="menuitem">Kitchen Remodeling</a></li>
          <li><a href="/services/bedroom-remodeling" role="menuitem">Bedroom Remodeling</a></li>
          <li><a href="/services/laundry-room-remodeling" role="menuitem">Laundry Room Remodeling</a></li>
          <li><a href="/services/common-area-remodeling" role="menuitem">Common Area Remodeling</a></li>
          <li><a href="/services/patio-porch-terrace-construction" role="menuitem">Patio, Porch & Terrace Construction</a></li>
          <li><a href="/services/greenscape-landscape-design" role="menuitem">Greenscape & Landscape Design</a></li>
          <li><a href="/services/irrigation-design-installation" role="menuitem">Irrigation Design & Installation</a></li>
          <li><a href="/services/lawn-care-maintenance" role="menuitem">Lawn Care & Maintenance</a></li>
          <li><a href="/services/design-services" role="menuitem">Design Services</a></li>
        </ul>
      </li>
      <li class="has-dropdown">
        <a href="/service-areas" <?php if ($currentPage === 'service-areas') echo 'aria-current="page"'; ?>>Service Areas</a>
        <ul class="dropdown" role="menu" style="display:none">
          <li><a href="/service-areas/richmond" role="menuitem">Richmond</a></li>
          <li><a href="/service-areas/chesterfield-county" role="menuitem">Chesterfield County</a></li>
          <li><a href="/service-areas/henrico-county" role="menuitem">Henrico County</a></li>
          <li><a href="/service-areas/hanover-county" role="menuitem">Hanover County</a></li>
          <li><a href="/service-areas/king-william-county" role="menuitem">King William County</a></li>
          <li><a href="/service-areas/new-kent-county" role="menuitem">New Kent County</a></li>
          <li><a href="/service-areas/charles-city-county" role="menuitem">Charles City County</a></li>
        </ul>
      </li>
      <li><a href="/about" <?php if ($currentPage === 'about') echo 'aria-current="page"'; ?>>About</a></li>
      <li><a href="/contact" <?php if ($currentPage === 'contact') echo 'aria-current="page"'; ?>>Contact</a></li>
    </ul>

    <a href="tel:8042186459" class="nav-phone">
      <i data-lucide="phone"></i>
      (804) 218-6459
    </a>

    <button class="hamburger" aria-label="Toggle menu" aria-expanded="false">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </div>
</nav>

<!-- Mobile Menu -->
<div class="mobile-menu">
  <a href="/" <?php if ($currentPage === 'home') echo 'aria-current="page"'; ?>>Home</a>

  <div class="mobile-dropdown-label">Services <i data-lucide="chevron-down" style="width:18px;height:18px;transition:transform 0.3s ease;"></i></div>
  <div class="mobile-dropdown-items">
    <a href="/services">All Services</a>
    <a href="/services/bathroom-remodeling">Bathroom Remodeling</a>
    <a href="/services/kitchen-remodeling">Kitchen Remodeling</a>
    <a href="/services/bedroom-remodeling">Bedroom Remodeling</a>
    <a href="/services/laundry-room-remodeling">Laundry Room Remodeling</a>
    <a href="/services/common-area-remodeling">Common Area Remodeling</a>
    <a href="/services/patio-porch-terrace-construction">Patio, Porch & Terrace Construction</a>
    <a href="/services/greenscape-landscape-design">Greenscape & Landscape Design</a>
    <a href="/services/irrigation-design-installation">Irrigation Design & Installation</a>
    <a href="/services/lawn-care-maintenance">Lawn Care & Maintenance</a>
    <a href="/services/design-services">Design Services</a>
  </div>

  <div class="mobile-dropdown-label">Service Areas <i data-lucide="chevron-down" style="width:18px;height:18px;transition:transform 0.3s ease;"></i></div>
  <div class="mobile-dropdown-items">
    <a href="/service-areas">All Service Areas</a>
    <a href="/service-areas/richmond">Richmond</a>
    <a href="/service-areas/chesterfield-county">Chesterfield County</a>
    <a href="/service-areas/henrico-county">Henrico County</a>
    <a href="/service-areas/hanover-county">Hanover County</a>
    <a href="/service-areas/king-william-county">King William County</a>
    <a href="/service-areas/new-kent-county">New Kent County</a>
    <a href="/service-areas/charles-city-county">Charles City County</a>
  </div>

  <a href="/about" <?php if ($currentPage === 'about') echo 'aria-current="page"'; ?>>About</a>
  <a href="/contact" <?php if ($currentPage === 'contact') echo 'aria-current="page"'; ?>>Contact</a>

  <div class="mobile-phone">
    <a href="tel:8042186459"><i data-lucide="phone" style="width:18px;height:18px;"></i> (804) 218-6459</a>
  </div>
</div>
