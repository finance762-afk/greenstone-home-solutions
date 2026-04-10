<?php
$pageTitle       = "Home Renovation & Outdoor Living Services | Greenstone Home Solutions";
$pageDescription = "Greenstone Home Solutions offers kitchen and bathroom remodeling, outdoor construction, landscape design, irrigation, and lawn care in Richmond, VA. Call (804) 218-6459 for a free estimate.";
$canonicalUrl    = "https://greenstonehomesolutions.com/services";
$ogImage         = "https://i.imgur.com/CN2OKqv.jpeg";
$currentPage     = "services";
$heroImage       = "";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;

$schemaMarkup = '{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://greenstonehomesolutions.com"},
    {"@type": "ListItem", "position": 2, "name": "Services", "item": "https://greenstonehomesolutions.com/services"}
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
        <a href="/">Home</a><span class="sep">/</span><span class="current">Services</span>
      </nav>
      <h1>Home Renovation & Outdoor Living Services in Richmond, VA</h1>
      <p class="prose">Greenstone Home Solutions provides comprehensive indoor renovation and outdoor design services across the greater Richmond area. Whether remodeling a bathroom, building a custom patio, or designing a complete landscape, Lucas Walton brings Virginia Tech horticultural expertise and over a decade of hands-on construction experience to every project.</p>
    </div>
  </section>

  <!-- Indoor Services -->
  <section style="background: var(--bg);">
    <div class="container">
      <h3 class="service-group-title">Indoor Renovation</h3>
      <div class="grid-3 services-main-grid" data-animate="fade-up" data-stagger>
        <a href="/services/bathroom-remodeling" class="service-card">
          <i data-lucide="bath" class="card-icon"></i>
          <h3>Bathroom Remodeling</h3>
          <p>Custom tile work, vanity installations, and full gut renovations that transform your bathroom into a modern retreat.</p>
          <span class="card-link">Learn More <i data-lucide="chevron-right" style="width:14px;height:14px;"></i></span>
        </a>
        <a href="/services/kitchen-remodeling" class="service-card">
          <i data-lucide="cooking-pot" class="card-icon"></i>
          <h3>Kitchen Remodeling</h3>
          <p>Countertops, cabinetry, backsplash, and layout redesigns built for how you actually cook and gather.</p>
          <span class="card-link">Learn More <i data-lucide="chevron-right" style="width:14px;height:14px;"></i></span>
        </a>
        <a href="/services/bedroom-remodeling" class="service-card">
          <i data-lucide="lamp" class="card-icon"></i>
          <h3>Bedroom Remodeling</h3>
          <p>Flooring, built-ins, lighting, and layout changes that turn your bedroom into a comfortable, functional space.</p>
          <span class="card-link">Learn More <i data-lucide="chevron-right" style="width:14px;height:14px;"></i></span>
        </a>
        <a href="/services/laundry-room-remodeling" class="service-card">
          <i data-lucide="wrench" class="card-icon"></i>
          <h3>Laundry Room Remodeling</h3>
          <p>Efficient storage solutions, updated plumbing, and smart layouts for a laundry room that works harder for you.</p>
          <span class="card-link">Learn More <i data-lucide="chevron-right" style="width:14px;height:14px;"></i></span>
        </a>
        <a href="/services/common-area-remodeling" class="service-card">
          <i data-lucide="home" class="card-icon"></i>
          <h3>Common Area Remodeling</h3>
          <p>Living rooms, hallways, and shared spaces updated with new flooring, paint, lighting, and architectural details.</p>
          <span class="card-link">Learn More <i data-lucide="chevron-right" style="width:14px;height:14px;"></i></span>
        </a>
        <a href="/services/building-additions-new-structures" class="service-card">
          <i data-lucide="warehouse" class="card-icon"></i>
          <h3>Building Additions & New Structures</h3>
          <p>Room additions, loft conversions, and new structures that expand your living space without moving.</p>
          <span class="card-link">Learn More <i data-lucide="chevron-right" style="width:14px;height:14px;"></i></span>
        </a>
        <a href="/services/design-services" class="service-card">
          <i data-lucide="layout-grid" class="card-icon"></i>
          <h3>Design Services</h3>
          <p>Light fixtures, ceiling fans, TV mounting with hidden wiring, and design consultation for renovation projects.</p>
          <span class="card-link">Learn More <i data-lucide="chevron-right" style="width:14px;height:14px;"></i></span>
        </a>
      </div>
    </div>
  </section>

  <!-- Outdoor Services -->
  <section class="bg-alt">
    <div class="container">
      <h3 class="service-group-title">Outdoor & Landscape</h3>
      <div class="grid-3 services-main-grid" data-animate="fade-up" data-stagger>
        <a href="/services/deck-balcony-construction" class="service-card">
          <i data-lucide="fence" class="card-icon"></i>
          <h3>Deck & Balcony Construction</h3>
          <p>Custom composite and wood decks, elevated balconies, and railings designed for your home's architecture.</p>
          <span class="card-link">Learn More <i data-lucide="chevron-right" style="width:14px;height:14px;"></i></span>
        </a>
        <a href="/services/patio-porch-terrace-construction" class="service-card">
          <i data-lucide="hammer" class="card-icon"></i>
          <h3>Patio, Porch & Terrace</h3>
          <p>Stone patios, covered porches, and multi-level terraces for outdoor living in Virginia's climate.</p>
          <span class="card-link">Learn More <i data-lucide="chevron-right" style="width:14px;height:14px;"></i></span>
        </a>
        <a href="/services/detached-garage-construction" class="service-card">
          <i data-lucide="warehouse" class="card-icon"></i>
          <h3>Detached Garage Construction</h3>
          <p>Custom-built garages and outbuildings with proper foundations, electrical, and finishes that match your home.</p>
          <span class="card-link">Learn More <i data-lucide="chevron-right" style="width:14px;height:14px;"></i></span>
        </a>
        <a href="/services/greenscape-landscape-design" class="service-card">
          <i data-lucide="trees" class="card-icon"></i>
          <h3>Greenscape & Landscape Design</h3>
          <p>Custom landscape plans with native plantings, hardscape integration, and year-round visual interest.</p>
          <span class="card-link">Learn More <i data-lucide="chevron-right" style="width:14px;height:14px;"></i></span>
        </a>
        <a href="/services/irrigation-design-installation" class="service-card">
          <i data-lucide="droplets" class="card-icon"></i>
          <h3>Irrigation Design & Installation</h3>
          <p>Efficient sprinkler and drip systems designed to keep your landscape healthy while conserving water.</p>
          <span class="card-link">Learn More <i data-lucide="chevron-right" style="width:14px;height:14px;"></i></span>
        </a>
        <a href="/services/lawn-care-maintenance" class="service-card">
          <i data-lucide="leaf" class="card-icon"></i>
          <h3>Lawn Care & Maintenance</h3>
          <p>Mowing, fertilization, aeration, and seasonal maintenance for a thick, green, healthy lawn year-round.</p>
          <span class="card-link">Learn More <i data-lucide="chevron-right" style="width:14px;height:14px;"></i></span>
        </a>
      </div>
    </div>
  </section>

  <!-- Closing CTA -->
  <section class="closing-cta">
    <div class="container" data-animate="fade-up">
      <h2>Let's Discuss Your Project</h2>
      <p class="prose-centered">Whether you have a clear vision or need help deciding where to start, we'll walk through your options and provide a free estimate.</p>
      <a href="/contact" class="btn-primary">Get a Free Estimate <i data-lucide="chevron-right" style="width:18px;height:18px;"></i></a>
      <a href="tel:8042186459" class="cta-phone"><i data-lucide="phone" style="width:20px;height:20px;vertical-align:middle;"></i> (804) 218-6459</a>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
