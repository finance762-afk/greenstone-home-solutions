<?php
$pageTitle       = "Irrigation Design & Installation in Richmond, VA | Greenstone Home Solutions";
$pageDescription = "Irrigation systems and drainage solutions in Richmond, VA — sprinklers, drip irrigation, channel drains, French drains. $1,500–$8,000. Call (804) 218-6459.";
$canonicalUrl    = "https://greenstonehomesolutions.com/services/irrigation-design-installation";
$ogImage         = "https://i.imgur.com/PY64Pn5.jpeg";
$currentPage     = "services";
$heroImage       = "";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;

$schemaMarkup = '[
  {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
      {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://greenstonehomesolutions.com"},
      {"@type": "ListItem", "position": 2, "name": "Services", "item": "https://greenstonehomesolutions.com/services"},
      {"@type": "ListItem", "position": 3, "name": "Irrigation Design & Installation", "item": "https://greenstonehomesolutions.com/services/irrigation-design-installation"}
    ]
  },
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Irrigation Design & Installation",
    "description": "Residential irrigation system design, sprinkler installation, drip irrigation, channel drains, and drainage solutions for homeowners in Richmond, VA and surrounding counties.",
    "provider": {
      "@type": "LocalBusiness",
      "name": "Greenstone Home Solutions",
      "telephone": "(804) 218-6459",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Richmond",
        "addressRegion": "VA"
      }
    },
    "areaServed": [
      {"@type": "City", "name": "Richmond, VA"},
      {"@type": "AdministrativeArea", "name": "Henrico County, VA"},
      {"@type": "AdministrativeArea", "name": "Hanover County, VA"},
      {"@type": "AdministrativeArea", "name": "King William County, VA"},
      {"@type": "AdministrativeArea", "name": "New Kent County, VA"},
      {"@type": "AdministrativeArea", "name": "Charles City County, VA"}
    ]
  },
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "Can you renovate my old irrigation system instead of replacing it?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Often yes. We assess existing infrastructure and replace corroded valves, damaged heads, and failed lines while keeping functional components. A renovation typically costs 40-60% less than a full replacement."
        }
      },
      {
        "@type": "Question",
        "name": "Do you install drainage solutions for foundation protection?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, channel drains along foundations and patios are one of our most requested services. Proper drainage prevents water pooling that can damage foundations, flood basements, and erode landscaping."
        }
      },
      {
        "@type": "Question",
        "name": "How do you design irrigation zones?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We zone based on plant type, sun exposure, and soil drainage — not just coverage area. Turf, shrub beds, and perennial gardens each have different water requirements, and our system delivers the right amount to each zone."
        }
      }
    ]
  },
  {
    "@context": "https://schema.org",
    "@type": "AggregateRating",
    "itemReviewed": {
      "@type": "LocalBusiness",
      "name": "Greenstone Home Solutions LLC"
    },
    "ratingValue": "4.9",
    "reviewCount": "47",
    "bestRating": "5"
  }
]';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<main id="main-content">

  <!-- Page Header -->
  <section class="page-header has-divider">
    <div class="container">
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a><span class="sep">/</span><a href="/services">Services</a><span class="sep">/</span><span class="current">Irrigation Design &amp; Installation</span>
      </nav>
      <h1>Irrigation Design &amp; <span class="text-accent">Installation</span> in Richmond, VA</h1>
      <p class="prose">Sprinkler systems, drip irrigation, and drainage solutions designed around your landscape's actual water needs — not just coverage patterns.</p>
      <a href="tel:8042186459" class="btn-primary" style="margin-top: var(--space-lg);">Call for a Free Estimate <i data-lucide="phone" style="width:18px;height:18px;"></i></a>
    </div>
    <div class="section-divider section-divider--bottom" aria-hidden="true">
      <svg viewBox="0 0 1440 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0,40 C360,0 1080,80 1440,40 L1440,80 L0,80 Z" fill="#ffffff"/>
      </svg>
    </div>
  </section>

  <!-- Answer-First Intro (Split: text left, image right) -->
  <section style="background: var(--bg);">
    <div class="container">
      <div class="split">
        <div class="reveal-up">
          <p class="prose" style="margin-bottom: var(--space-lg);"><strong>Greenstone Home Solutions is a licensed and insured irrigation and drainage company based in Richmond, VA.</strong> A residential irrigation system in the Richmond area typically costs $3,000 to $8,000 for a standard lawn, with drainage solutions starting around $1,500. We provide irrigation design and installation for homeowners in Richmond, VA and surrounding counties including Henrico, Hanover, King William, New Kent, and Charles City.</p>
          <p class="prose" style="margin-bottom: var(--space-lg);">Our founder Lucas Walton holds a B.S. in Environmental Horticulture from Virginia Tech with a minor in Crop and Soil Sciences. That background directly shapes how we design irrigation systems. Where most installers lay out heads in a uniform grid and call it done, we zone based on actual plant water requirements, soil drainage rates, and sun exposure. Your turf areas, perennial beds, and shade gardens each get exactly the water they need — no more, no less.</p>
          <p class="prose">This approach saves water, reduces runoff, and keeps your landscape healthier. Overwatering is the number one cause of root rot and fungal disease in residential landscapes across the Richmond area. A properly zoned system prevents that.</p>
        </div>
        <div class="service-img reveal-right">
          <img src="https://i.imgur.com/PY64Pn5.jpeg" alt="Pop-up sprinkler head installed flush in ground cover by Greenstone Home Solutions in Richmond VA" width="800" height="600" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- Answer Block -->
  <section class="bg-alt">
    <div class="container" data-animate="fade-up">
      <div class="answer-block">
        <h2>How Much Does an Irrigation System Cost in Richmond?</h2>
        <p class="prose">A basic pop-up sprinkler system for a standard residential lawn typically costs $3,000 to $5,000 including trenching, pipe, heads, valves, and controller. Larger properties or systems with drip irrigation zones, rain sensors, and smart controllers range from $5,000 to $8,000. Channel drain installation for foundation or patio protection starts at $1,500 and varies based on run length and tie-in complexity. We provide detailed estimates after an on-site water assessment.</p>
      </div>
    </div>
  </section>

  <!-- Installation Gallery -->
  <section style="background: var(--bg);">
    <div class="container">
      <span class="eyebrow-label" data-animate="fade-up">Installation Process</span>
      <span class="section-subtitle--accent">Every step done right</span>
      <h2 data-animate="fade-up">From Trenching to Testing</h2>
      <p class="prose" style="margin-bottom: var(--space-2xl);" data-animate="fade-up">A properly installed irrigation system is invisible when it is working and easy to maintain when it needs service. Here is what the installation process looks like — from the initial trench work through final head adjustment and zone programming.</p>
      <div class="service-gallery" data-animate="fade-up" data-stagger>
        <div class="service-gallery-item">
          <img src="https://i.imgur.com/UfjHreO.jpeg" alt="Irrigation trench with pipe and sprinkler head being set during installation in Richmond VA" width="800" height="600" loading="lazy">
          <div class="gallery-caption">Trenching &amp; head placement</div>
        </div>
        <div class="service-gallery-item">
          <img src="https://i.imgur.com/PY64Pn5.jpeg" alt="Pop-up sprinkler head installed flush with ground cover in Richmond VA lawn" width="800" height="600" loading="lazy">
          <div class="gallery-caption">Pop-up head flush install</div>
        </div>
        <div class="service-gallery-item">
          <img src="https://i.imgur.com/Z7J5rzU.jpeg" alt="Old corroded irrigation valves being replaced during system renovation in Richmond VA" width="800" height="600" loading="lazy">
          <div class="gallery-caption">Corroded valve replacement</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Irrigation Services Detail (Split Reverse: image left, text right) -->
  <section class="bg-alt">
    <div class="container">
      <div class="split-reverse">
        <div class="service-img reveal-left" data-animate="wipe-right">
          <img src="https://i.imgur.com/UfjHreO.jpeg" alt="Irrigation pipe and sprinkler head installation in progress in a Richmond VA residential yard" width="800" height="600" loading="lazy">
        </div>
        <div class="reveal-right">
          <h2 data-animate="fade-up">Sprinkler &amp; Drip Irrigation Systems</h2>
          <p class="prose" style="margin-bottom: var(--space-lg);" data-animate="fade-up">We install complete pop-up sprinkler systems for turf areas and drip irrigation for garden beds, shrub borders, and container plantings. Every system is designed with Lucas's horticultural knowledge applied directly to zone planning — because different plant types have fundamentally different water needs.</p>
          <ul class="icon-list" data-animate="fade-up">
            <li><i data-lucide="check-circle" style="width:18px;height:18px;"></i><p>Pop-up spray and rotor heads for lawn areas</p></li>
            <li><i data-lucide="check-circle" style="width:18px;height:18px;"></i><p>Drip irrigation for garden beds and shrub borders</p></li>
            <li><i data-lucide="check-circle" style="width:18px;height:18px;"></i><p>Smart controllers with rain sensor integration</p></li>
            <li><i data-lucide="check-circle" style="width:18px;height:18px;"></i><p>Zone design based on plant water requirements, not just square footage</p></li>
            <li><i data-lucide="check-circle" style="width:18px;height:18px;"></i><p>Seasonal programming adjustments for Virginia's variable climate</p></li>
            <li><i data-lucide="check-circle" style="width:18px;height:18px;"></i><p>System renovation and corroded valve replacement</p></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Irrigation Renovation Highlight -->
  <section style="background: var(--bg);">
    <div class="container" data-animate="fade-up">
      <div class="highlight-box card-tint-1">
        <h3><i data-lucide="wrench" style="width:20px;height:20px;"></i> Irrigation System Renovation</h3>
        <p>Many Richmond homes — especially in established Henrico and Hanover neighborhoods — have irrigation systems that are 15 to 25 years old. Corroded valves, cracked PVC, and obsolete controllers waste water and leave dead zones across your lawn. We assess existing infrastructure and replace only what has failed while keeping functional components. A targeted renovation typically costs 40 to 60 percent less than a full system replacement and can bring your coverage and efficiency back to like-new performance.</p>
      </div>
    </div>
  </section>

  <!-- Mid CTA -->
  <section class="mid-cta">
    <div class="container" data-animate="fade-up" style="text-align:center;">
      <h2>Stop Watering by Guesswork</h2>
      <p class="prose-centered">Get an irrigation system designed by someone who understands plant science — not just pipe fittings. Free on-site water assessment for Richmond-area properties.</p>
      <a href="/contact" class="btn-primary">Request a Free Assessment <i data-lucide="chevron-right" style="width:18px;height:18px;"></i></a>
      <a href="tel:8042186459" class="cta-phone"><i data-lucide="phone" style="width:20px;height:20px;vertical-align:middle;"></i> (804) 218-6459</a>
    </div>
  </section>

  <!-- Drainage Solutions Section -->
  <section style="background: var(--bg);">
    <div class="container">
      <span class="eyebrow-label" data-animate="fade-up">Drainage Solutions</span>
      <h2 data-animate="fade-up">Channel Drains &amp; Foundation Protection</h2>
      <p class="prose" style="margin-bottom: var(--space-2xl);" data-animate="fade-up">Water pooling against your foundation is not just a landscaping problem — it is a structural threat. Richmond's clay-heavy soils in many neighborhoods drain slowly, especially during the heavy spring rains that are common in Virginia. Channel drains, French drains, and downspout redirections move water away from your foundation before damage occurs.</p>
      <div class="service-gallery" data-animate="fade-up" data-stagger>
        <div class="service-gallery-item">
          <img src="https://i.imgur.com/9DHmrI4.jpeg" alt="Downspout area prepped for channel drain installation at Richmond VA home" width="800" height="600" loading="lazy">
          <div class="gallery-caption">Downspout area prep</div>
        </div>
        <div class="service-gallery-item">
          <img src="https://i.imgur.com/Dehigaz.jpeg" alt="Channel drain installed along foundation of Richmond VA residence" width="800" height="600" loading="lazy">
          <div class="gallery-caption">Foundation channel drain</div>
        </div>
        <div class="service-gallery-item">
          <img src="https://i.imgur.com/F7VlHNd.jpeg" alt="L-shape channel drains installed along patio corner for water management in Richmond VA" width="800" height="600" loading="lazy">
          <div class="gallery-caption">Patio corner L-drain</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Answer Block: Drainage -->
  <section class="bg-alt">
    <div class="container" data-animate="fade-up">
      <div class="answer-block">
        <h3>Do I Need Foundation Drainage for My Richmond Home?</h3>
        <p class="prose">If you notice water pooling near your foundation, dampness in your basement or crawlspace, or erosion along your home's perimeter after rain, you likely need drainage improvements. Channel drains along foundations, French drains, and downspout redirections prevent long-term structural damage. Richmond's clay-heavy soils in many neighborhoods make drainage particularly important — water doesn't percolate quickly and tends to pool against foundations.</p>
      </div>
    </div>
  </section>

  <!-- Drainage Detail (Split: text left, image right) -->
  <section style="background: var(--bg);">
    <div class="container">
      <div class="split">
        <div class="reveal-up">
          <h2 data-animate="fade-up">Drainage Services We Provide</h2>
          <p class="prose" style="margin-bottom: var(--space-lg);" data-animate="fade-up">We design and install drainage solutions that address the specific water management problems on your property. Richmond's topography and soil composition vary significantly from neighborhood to neighborhood — a drainage plan that works in the Fan District may not be appropriate for a property in Mechanicsville or New Kent. We assess your site conditions and design accordingly.</p>
          <ul class="icon-list" data-animate="fade-up">
            <li><i data-lucide="check-circle" style="width:18px;height:18px;"></i><p>Channel drains along foundations, patios, and driveways</p></li>
            <li><i data-lucide="check-circle" style="width:18px;height:18px;"></i><p>French drain systems for yard-wide water management</p></li>
            <li><i data-lucide="check-circle" style="width:18px;height:18px;"></i><p>Downspout extension and underground redirections</p></li>
            <li><i data-lucide="check-circle" style="width:18px;height:18px;"></i><p>Dry creek beds for natural water channeling</p></li>
            <li><i data-lucide="check-circle" style="width:18px;height:18px;"></i><p>Grading corrections to redirect surface water flow</p></li>
            <li><i data-lucide="check-circle" style="width:18px;height:18px;"></i><p>Sump pump discharge line routing</p></li>
          </ul>
        </div>
        <div class="service-img reveal-right" data-animate="wipe-right">
          <img src="https://i.imgur.com/Dehigaz.jpeg" alt="Completed channel drain along home foundation protecting against water damage in Richmond VA" width="800" height="600" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- Water Conservation -->
  <section style="background: var(--bg);">
    <div class="container" data-animate="fade-up">
      <h2>Water Conservation Through Smart Design</h2>
      <p class="prose" style="margin-bottom: var(--space-lg);">An irrigation system designed purely for coverage will overwater some areas and underwater others. Our approach factors in soil type, slope, plant species, and sun exposure to deliver the right amount of water to each zone. The result is a healthier landscape that uses 20 to 40 percent less water than a conventionally designed system.</p>
      <p class="prose" style="margin-bottom: var(--space-lg);">We install rain sensors and smart controllers that adjust watering schedules based on recent rainfall and seasonal conditions. During Richmond's wetter months, the system reduces output automatically. During the dry stretches common in July and August, it increases frequency without manual intervention. This is where Lucas's understanding of plant water requirements — learned through Virginia Tech's horticulture curriculum — makes a measurable difference in both your water bill and your landscape health.</p>
      <p class="prose">For homeowners in Henrico, Hanover, and Charles City counties with well water, efficient irrigation design is especially important. We size systems to work within your well's recovery rate so you never run dry during peak summer demand.</p>
    </div>
  </section>

  <!-- Process Steps -->
  <section class="bg-alt">
    <div class="container">
      <h2 style="text-align:center; margin-bottom: var(--space-2xl);" data-animate="fade-up">Our Irrigation &amp; Drainage Process</h2>
      <div class="process-steps" data-animate="fade-up" data-stagger>
        <div class="process-step">
          <h3>Site Survey &amp; Water Assessment</h3>
          <p>We evaluate your property's water pressure, soil drainage rates, existing landscape zones, and any problem areas where water pools or erodes. For renovation projects, we test existing infrastructure to determine what can be reused.</p>
        </div>
        <div class="process-step">
          <h3>System Design &amp; Zone Planning</h3>
          <p>We create a zone map based on plant water needs, sun exposure, and soil type. Each zone gets the right head type, spacing, and run time. Drainage solutions are designed with proper slope and capacity for your property's water volume.</p>
        </div>
        <div class="process-step">
          <h3>Trenching &amp; Installation</h3>
          <p>Trenches are cut, pipe is laid, heads and valves are set, and drains are positioned with proper grade. We mark and avoid existing utilities and restore turf after backfill.</p>
        </div>
        <div class="process-step">
          <h3>Testing &amp; Programming</h3>
          <p>Every zone is tested for coverage, pressure, and overlap. We program the controller with seasonal schedules and walk you through operation, including how to adjust for Richmond's variable weather patterns.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQs -->
  <section class="faq-section">
    <div class="container">
      <h2 style="text-align:center; margin-bottom: var(--space-2xl);" data-animate="fade-up">Irrigation &amp; Drainage FAQs</h2>
      <div class="faq-list" data-animate="fade-up">
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            Can you renovate my old irrigation system instead of replacing it?
            <i data-lucide="chevron-down"></i>
          </button>
          <div class="faq-answer">
            <div class="faq-answer-inner">
              Often yes. We assess existing infrastructure and replace corroded valves, damaged heads, and failed lines while keeping functional components. A targeted renovation typically costs 40 to 60 percent less than a full system replacement. If the main lines are intact and the layout is still appropriate for your landscape, renovation is usually the smarter investment.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            Do you install drainage solutions for foundation protection?
            <i data-lucide="chevron-down"></i>
          </button>
          <div class="faq-answer">
            <div class="faq-answer-inner">
              Yes, channel drains along foundations and patios are one of our most requested services. Proper drainage prevents water pooling that can damage foundations, flood basements, and erode landscaping. We install channel drains, French drains, and downspout redirections based on your property's specific water flow patterns and soil conditions.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            How do you design irrigation zones?
            <i data-lucide="chevron-down"></i>
          </button>
          <div class="faq-answer">
            <div class="faq-answer-inner">
              We zone based on plant type, sun exposure, and soil drainage — not just coverage area. Turf, shrub beds, and perennial gardens each have different water requirements, and our system delivers the right amount to each zone. This approach, informed by Lucas's Virginia Tech training in plant water needs, results in a healthier landscape that uses significantly less water than a conventionally zoned system.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Related Services -->
  <section class="bg-alt">
    <div class="container" data-animate="fade-up">
      <h3 style="margin-bottom: var(--space-lg);">Related Services</h3>
      <div class="related-services">
        <a href="/services/greenscape-landscape-design" class="related-chip">Greenscape &amp; Landscape Design</a>
        <a href="/services/lawn-care-maintenance" class="related-chip">Lawn Care &amp; Maintenance</a>
        <a href="/services/patio-porch-terrace-construction" class="related-chip">Patio, Porch &amp; Terrace Construction</a>
      </div>
      <p class="last-updated">Last Updated: <?php echo date('F Y'); ?></p>
    </div>
  </section>

  <!-- Closing CTA -->
  <section class="closing-cta">
    <div class="container" data-animate="fade-up">
      <h2>Protect Your Landscape and Your Foundation</h2>
      <p class="prose-centered">Whether you need a new irrigation system, a renovation of an aging one, or drainage solutions to protect your home, we will design it right the first time.</p>
      <a href="/contact" class="btn-primary">Get Your Free Estimate <i data-lucide="chevron-right" style="width:18px;height:18px;"></i></a>
      <a href="tel:8042186459" class="cta-phone"><i data-lucide="phone" style="width:20px;height:20px;vertical-align:middle;"></i> (804) 218-6459</a>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
