<?php
$pageTitle       = "Service Areas | Greenstone Home Solutions — Richmond, VA & Surrounding Counties";
$pageDescription = "Greenstone Home Solutions serves homeowners in Richmond, VA, Henrico County, Hanover County, King William County, New Kent County, and Charles City County. Call (804) 218-6459.";
$canonicalUrl    = "https://greenstonehomesolutions.com/service-areas";
$ogImage         = "https://i.imgur.com/jOXKoUD.jpeg";
$currentPage     = "service-areas";
$heroImage       = "";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;

$schemaMarkup = '{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://greenstonehomesolutions.com"},
    {"@type": "ListItem", "position": 2, "name": "Service Areas", "item": "https://greenstonehomesolutions.com/service-areas"}
  ]
}';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<main id="main-content">

  <!-- Page Header -->
  <section class="page-header">
    <div class="container">
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a><span class="sep">/</span><span class="current">Service Areas</span>
      </nav>
      <h1>Serving Richmond, VA & Surrounding Counties</h1>
      <p class="prose">Greenstone Home Solutions provides home renovation, landscaping, hardscaping, and design services across the greater Richmond metro area. From Henrico County suburbs to rural King William, Lucas Walton brings the same Virginia Tech-trained expertise and award-winning craftsmanship to every project.</p>
    </div>
  </section>

  <!-- County Cards -->
  <section style="background: var(--bg);">
    <div class="container">
      <div class="text-center" style="margin-bottom: var(--space-2xl);">
        <span class="eyebrow-label">Where We Work</span>
        <h2>Our Service Area</h2>
        <p class="section-subtitle prose-centered">We serve homeowners across five counties in the greater Richmond metropolitan area, bringing the same level of craftsmanship to every community.</p>
      </div>

      <div class="grid-3" data-animate="fade-up" data-stagger>
        <a href="/service-areas/henrico-county" class="service-card">
          <i data-lucide="map-pin" class="card-icon"></i>
          <h3>Henrico County</h3>
          <p>Short Pump, Glen Allen, Tuckahoe, West End — established neighborhoods and growing suburbs surrounding Richmond.</p>
          <span class="card-link">View Services in Henrico <i data-lucide="chevron-right" style="width:14px;height:14px;"></i></span>
        </a>
        <a href="/service-areas/hanover-county" class="service-card">
          <i data-lucide="map-pin" class="card-icon"></i>
          <h3>Hanover County</h3>
          <p>Mechanicsville, Ashland, Atlee — family-oriented communities with suburban subdivisions and rural acreage.</p>
          <span class="card-link">View Services in Hanover <i data-lucide="chevron-right" style="width:14px;height:14px;"></i></span>
        </a>
        <a href="/service-areas/king-william-county" class="service-card">
          <i data-lucide="map-pin" class="card-icon"></i>
          <h3>King William County</h3>
          <p>Rural properties between the Mattaponi and Pamunkey rivers — larger lots, older homes, and full-service renovation needs.</p>
          <span class="card-link">View Services in King William <i data-lucide="chevron-right" style="width:14px;height:14px;"></i></span>
        </a>
        <a href="/service-areas/new-kent-county" class="service-card">
          <i data-lucide="map-pin" class="card-icon"></i>
          <h3>New Kent County</h3>
          <p>Providence Forge, Quinton — growing communities along I-64 between Richmond and Williamsburg.</p>
          <span class="card-link">View Services in New Kent <i data-lucide="chevron-right" style="width:14px;height:14px;"></i></span>
        </a>
        <a href="/service-areas/charles-city-county" class="service-card">
          <i data-lucide="map-pin" class="card-icon"></i>
          <h3>Charles City County</h3>
          <p>Historic Route 5 corridor along the James River — scenic properties, older homes, and large rural lots.</p>
          <span class="card-link">View Services in Charles City <i data-lucide="chevron-right" style="width:14px;height:14px;"></i></span>
        </a>
      </div>
    </div>
  </section>

  <!-- Map Section -->
  <section class="bg-alt">
    <div class="container">
      <div class="split" data-animate="fade-up">
        <div>
          <span class="eyebrow-label">Coverage Area</span>
          <h2>Greater Richmond Metro</h2>
          <div class="prose" style="margin-top: var(--space-lg);">
            <p>Greenstone Home Solutions is based in Richmond, Virginia and serves homeowners throughout the surrounding counties. Whether your project is a <a href="/services/bathroom-remodeling" style="color: var(--primary); font-weight: 600;">bathroom remodel</a> in Short Pump, a <a href="/services/greenscape-landscape-design" style="color: var(--primary); font-weight: 600;">landscape redesign</a> in Mechanicsville, or a <a href="/services/building-additions-new-structures" style="color: var(--primary); font-weight: 600;">room addition</a> in New Kent — we bring the same craftsmanship and attention to detail to every job.</p>
            <p style="margin-top: var(--space-md);">Our service radius covers the entire Richmond metro area. If you're unsure whether your property falls within our coverage, call us at <a href="tel:8042186459" style="color: var(--primary); font-weight: 700;">(804) 218-6459</a> — we're happy to discuss your project.</p>
          </div>
        </div>
        <div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d401731.2560450792!2d-77.7173504!3d37.5407246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b111095799c9ed%3A0xbfd83e6de2423cc5!2sRichmond%2C%20VA!5e0!3m2!1sen!2sus!4v1700000000000" width="100%" height="350" style="border:0; border-radius: var(--radius);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Greenstone Home Solutions service area map centered on Richmond, VA"></iframe>
        </div>
      </div>
    </div>
  </section>

  <!-- Full Services List -->
  <section style="background: var(--bg);">
    <div class="container">
      <div class="text-center" style="margin-bottom: var(--space-2xl);" data-animate="fade-up">
        <span class="eyebrow-label">What We Do</span>
        <h2>Services Available in Every County</h2>
        <p class="section-subtitle prose-centered">Every service we offer is available across our full coverage area. No matter where you are in the Richmond metro, you get the same expertise and quality.</p>
      </div>

      <div class="grid-2" data-animate="fade-up" data-stagger>
        <div>
          <h3 style="margin-bottom: var(--space-lg); font-size: 1.1rem;">Indoor Renovation</h3>
          <ul class="icon-list">
            <li><i data-lucide="bath" style="width:20px;height:20px;"></i> <p><a href="/services/bathroom-remodeling" style="color: var(--primary); font-weight: 600;">Bathroom Remodeling</a></p></li>
            <li><i data-lucide="cooking-pot" style="width:20px;height:20px;"></i> <p><a href="/services/kitchen-remodeling" style="color: var(--primary); font-weight: 600;">Kitchen Remodeling</a></p></li>
            <li><i data-lucide="lamp" style="width:20px;height:20px;"></i> <p><a href="/services/bedroom-remodeling" style="color: var(--primary); font-weight: 600;">Bedroom Remodeling</a></p></li>
            <li><i data-lucide="wrench" style="width:20px;height:20px;"></i> <p><a href="/services/laundry-room-remodeling" style="color: var(--primary); font-weight: 600;">Laundry Room Remodeling</a></p></li>
            <li><i data-lucide="home" style="width:20px;height:20px;"></i> <p><a href="/services/common-area-remodeling" style="color: var(--primary); font-weight: 600;">Common Area Remodeling</a></p></li>
            <li><i data-lucide="warehouse" style="width:20px;height:20px;"></i> <p><a href="/services/building-additions-new-structures" style="color: var(--primary); font-weight: 600;">Building Additions & New Structures</a></p></li>
            <li><i data-lucide="layout-grid" style="width:20px;height:20px;"></i> <p><a href="/services/design-services" style="color: var(--primary); font-weight: 600;">Design Services</a></p></li>
          </ul>
        </div>
        <div>
          <h3 style="margin-bottom: var(--space-lg); font-size: 1.1rem;">Outdoor & Landscape</h3>
          <ul class="icon-list">
            <li><i data-lucide="fence" style="width:20px;height:20px;"></i> <p><a href="/services/deck-balcony-construction" style="color: var(--primary); font-weight: 600;">Deck & Balcony Construction</a></p></li>
            <li><i data-lucide="hammer" style="width:20px;height:20px;"></i> <p><a href="/services/patio-porch-terrace-construction" style="color: var(--primary); font-weight: 600;">Patio, Porch & Terrace Construction</a></p></li>
            <li><i data-lucide="warehouse" style="width:20px;height:20px;"></i> <p><a href="/services/detached-garage-construction" style="color: var(--primary); font-weight: 600;">Detached Garage Construction</a></p></li>
            <li><i data-lucide="trees" style="width:20px;height:20px;"></i> <p><a href="/services/greenscape-landscape-design" style="color: var(--primary); font-weight: 600;">Greenscape & Landscape Design</a></p></li>
            <li><i data-lucide="droplets" style="width:20px;height:20px;"></i> <p><a href="/services/irrigation-design-installation" style="color: var(--primary); font-weight: 600;">Irrigation Design & Installation</a></p></li>
            <li><i data-lucide="leaf" style="width:20px;height:20px;"></i> <p><a href="/services/lawn-care-maintenance" style="color: var(--primary); font-weight: 600;">Lawn Care & Maintenance</a></p></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Closing CTA -->
  <section class="closing-cta">
    <div class="container" data-animate="fade-up">
      <h2>Serving Your Neighborhood</h2>
      <p class="prose-centered">No matter where you are in the Richmond metro area, Greenstone Home Solutions brings the same craftsmanship and personal attention to every project. Let's discuss yours.</p>
      <a href="/contact" class="btn-primary">Get a Free Estimate <i data-lucide="chevron-right" style="width:18px;height:18px;"></i></a>
      <a href="tel:8042186459" class="cta-phone"><i data-lucide="phone" style="width:20px;height:20px;vertical-align:middle;"></i> (804) 218-6459</a>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
