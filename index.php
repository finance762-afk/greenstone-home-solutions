<?php
$pageTitle       = "Greenstone Home Solutions | Home Remodeling & Landscape Design in Richmond, VA";
$pageDescription = "Greenstone Home Solutions provides expert home remodeling, kitchen and bathroom renovations, outdoor construction, and landscape design in Richmond, Virginia and surrounding counties. Call (804) 218-6459.";
$canonicalUrl    = "https://greenstonehomesolutions.com";
$ogImage         = "https://i.imgur.com/CN2OKqv.jpeg";
$currentPage     = "home";
$heroImage       = "https://i.imgur.com/jOXKoUD.jpeg";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;

$schemaMarkup = '[
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "@id": "https://greenstonehomesolutions.com/#business",
    "name": "Greenstone Home Solutions LLC",
    "description": "Family-owned general contracting company specializing in home remodeling, landscaping, hardscaping, and design services in Richmond, VA and surrounding counties.",
    "url": "https://greenstonehomesolutions.com",
    "telephone": "(804) 218-6459",
    "email": "greenstonehomesolutions@gmail.com",
    "image": "https://i.imgur.com/JuesTnb.png",
    "priceRange": "$$",
    "founder": {
      "@type": "Person",
      "name": "Lucas Walton"
    },
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Richmond",
      "addressRegion": "VA",
      "addressCountry": "US"
    },
    "areaServed": [
      {"@type": "City", "name": "Richmond, Virginia"},
      {"@type": "AdministrativeArea", "name": "Richmond, Virginia"},
      {"@type": "AdministrativeArea", "name": "Chesterfield County, Virginia"},
      {"@type": "AdministrativeArea", "name": "Henrico County, Virginia"},
      {"@type": "AdministrativeArea", "name": "Hanover County, Virginia"},
      {"@type": "AdministrativeArea", "name": "King William County, Virginia"},
      {"@type": "AdministrativeArea", "name": "New Kent County, Virginia"},
      {"@type": "AdministrativeArea", "name": "Charles City County, Virginia"}
    ],
    "openingHoursSpecification": [
      {"@type": "OpeningHoursSpecification", "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"], "opens": "08:00", "closes": "17:00"},
      {"@type": "OpeningHoursSpecification", "dayOfWeek": "Saturday", "opens": "10:00", "closes": "14:00"}
    ],
    "sameAs": [
      "https://www.yelp.com/biz/greenstone-home-solutions-richmond",
      "https://www.facebook.com/p/Greenstone-Home-Solutions-LLC-61569409110761/",
      "https://www.instagram.com/greenstonehomesolutions/",
      "https://share.google/uT7LhrEfLlZm43ZhZ"
    ]
  },
  {
    "@context": "https://schema.org",
    "@type": "WebSite",
    "name": "Greenstone Home Solutions",
    "url": "https://greenstonehomesolutions.com",
    "potentialAction": {
      "@type": "SearchAction",
      "target": "https://greenstonehomesolutions.com/?s={search_term_string}",
      "query-input": "required name=search_term_string"
    }
  },
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "How much does a bathroom remodel cost in Richmond, VA?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "A bathroom remodel in the Richmond area typically ranges from $8,000 to $25,000 depending on scope. A basic refresh with new tile, vanity, and fixtures runs $8,000–$12,000, while a full gut renovation with custom tile work and layout changes can reach $18,000–$25,000. Greenstone Home Solutions provides free estimates tailored to your specific project and budget."
        }
      },
      {
        "@type": "Question",
        "name": "Do you handle both indoor renovations and outdoor landscaping?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. Greenstone Home Solutions is a full-service general contractor covering both interior remodeling (kitchens, bathrooms, bedrooms, common areas) and exterior work (patios, landscape design, irrigation, lawn care). Having one contractor for your entire property means consistent quality and simplified project coordination."
        }
      },
      {
        "@type": "Question",
        "name": "What areas do you serve around Richmond?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Greenstone Home Solutions serves homeowners throughout the greater Richmond metro area including Richmond City, Chesterfield County, Henrico County, Hanover County, King William County, New Kent County, and Charles City County. We bring the same quality craftsmanship to every project regardless of location within our service area."
        }
      },
      {
        "@type": "Question",
        "name": "How long does a typical kitchen remodel take?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Most kitchen remodels in Richmond take 4 to 8 weeks from demolition to completion. A cosmetic update with new countertops, backsplash, and paint can be done in 2–3 weeks. A full kitchen renovation involving layout changes, new cabinetry, and electrical work typically runs 6–8 weeks. We provide a detailed timeline during your free consultation."
        }
      },
      {
        "@type": "Question",
        "name": "Do I need a permit for a patio or porch in Virginia?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "In most Virginia counties, patios at grade level generally do not require permits, but covered porches, structures with electrical, and elevated builds typically do. Greenstone handles all permit applications and county inspections as part of our project management."
        }
      },
      {
        "@type": "Question",
        "name": "Can you help design my landscape if I am not sure what I want?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Absolutely. Our founder Lucas Walton holds a degree in Environmental Horticulture from Virginia Tech, which means we approach landscape design with both aesthetic vision and deep plant science knowledge. We start with a consultation to understand your property, preferences, and budget, then create a custom design plan before any work begins."
        }
      }
    ]
  }
]';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<main id="main-content">

  <!-- ============================================
       1. HERO — Static with left-weighted gradient + SVG divider
       ============================================ -->
  <section class="hero hero-home has-divider">
    <div class="container">
      <div class="hero-content">
        <h1>Richmond's Premier Home Renovation &amp; <span class="text-accent">Landscape Design</span> Experts</h1>
        <p class="prose">From kitchen remodels to custom patios and landscape design — over a decade of craftsmanship for indoor and outdoor living spaces.</p>
        <a href="tel:8042186459" class="hero-phone"><i data-lucide="phone" style="width:22px;height:22px;"></i> (804) 218-6459</a>
        <div class="hero-ctas">
          <a href="/contact" class="btn-primary">Get a Free Estimate <i data-lucide="chevron-right" style="width:18px;height:18px;"></i></a>
          <a href="/services" class="btn-secondary">View Our Services <i data-lucide="chevron-right" style="width:18px;height:18px;"></i></a>
        </div>
      </div>
    </div>
    <!-- SVG divider into trust strip -->
    <div class="section-divider section-divider--bottom" aria-hidden="true">
      <svg viewBox="0 0 1440 100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0,64 C240,96 480,96 720,64 C960,32 1200,32 1440,64 L1440,100 L0,100 Z" fill="#ffffff"/>
      </svg>
    </div>
  </section>

  <!-- ============================================
       2. TRUST BADGE STRIP — No data-animate
       ============================================ -->
  <div class="trust-badges">
    <div class="container">
      <div class="trust-badge"><i data-lucide="graduation-cap"></i> Virginia Tech Graduate</div>
      <div class="trust-badge"><i data-lucide="award"></i> Belgard Hardscape Hero Award</div>
      <div class="trust-badge"><i data-lucide="clock"></i> 10+ Years Experience</div>
      <div class="trust-badge"><i data-lucide="users"></i> Family-Owned & Operated</div>
      <div class="trust-badge"><i data-lucide="shield-check"></i> Licensed & Insured</div>
    </div>
  </div>

  <!-- ============================================
       3. INTRO SPLIT — No data-animate (near fold)
       ============================================ -->
  <section class="intro-section" style="background: var(--bg);">
    <div class="container">
      <div class="split">
        <div>
          <span class="eyebrow-label">About Greenstone</span>
          <h2>Timeless Solutions & Innovative Designs Indoor and Out</h2>
          <div class="prose" style="margin-top: var(--space-lg);">
            <p>Greenstone Home Solutions LLC is a family-owned general contracting company founded by Lucas Walton, a Virginia Tech graduate with a degree in Environmental Horticulture. That academic foundation — combined with over a decade of hands-on construction experience — gives our team a rare ability to handle both your interior renovations and your outdoor landscape with equal expertise.</p>
            <p style="margin-top: var(--space-md);">Our landscape designs have been featured in the Belgard Mid-Atlantic portfolio, and Lucas earned a Hardscape Hero Award for his patio work. Whether you need a kitchen remodel in Henrico County or a complete landscape redesign in Hanover, we bring the same level of craftsmanship and attention to detail to every project.</p>
          </div>
          <a href="/about" class="btn-primary" style="margin-top: var(--space-xl);">Meet Our Team <i data-lucide="chevron-right" style="width:18px;height:18px;"></i></a>
        </div>
        <div class="img-framed">
          <img src="https://i.imgur.com/jOXKoUD.jpeg" alt="Custom stone patio with pergola and outdoor fireplace built by Greenstone Home Solutions in Richmond, VA" width="800" height="600" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================
       4. SERVICES GRID — Icon cards, two clusters
       ============================================ -->
  <section class="services-section bg-alt has-divider" style="position:relative;">
    <!-- Floating architectural accent -->
    <svg class="floating-accent float-animate-slow" style="top:8%; right:5%; width:160px; height:160px;" viewBox="0 0 160 160" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
      <rect x="10" y="10" width="140" height="140" fill="none" stroke="var(--primary)" stroke-width="3"/>
      <rect x="40" y="40" width="80" height="80" fill="none" stroke="var(--primary)" stroke-width="3"/>
    </svg>
    <div class="container">
      <div class="text-center reveal-up" style="margin-bottom: var(--space-2xl);">
        <span class="section-subtitle--accent">What we do</span>
        <h2>Our Services</h2>
        <p class="section-subtitle prose-centered">From interior renovations to outdoor living spaces and landscape design — Greenstone handles every aspect of your home improvement project.</p>
      </div>

      <!-- Indoor Services -->
      <div style="margin-bottom: var(--space-2xl);">
        <h3 class="service-group-title">Indoor Renovation</h3>
        <div class="grid-3" data-animate="fade-up" data-stagger>
          <a href="/services/bathroom-remodeling" class="service-card card-tint-1">
            <i data-lucide="bath" class="card-icon"></i>
            <h3>Bathroom Remodeling</h3>
            <p>Custom tile work, vanity installations, and full gut renovations that transform your bathroom into a modern retreat.</p>
            <span class="card-link">Learn More <i data-lucide="chevron-right" style="width:14px;height:14px;"></i></span>
          </a>
          <a href="/services/kitchen-remodeling" class="service-card card-tint-2">
            <i data-lucide="cooking-pot" class="card-icon"></i>
            <h3>Kitchen Remodeling</h3>
            <p>Countertops, cabinetry, backsplash, and layout redesigns — kitchens built for how you actually cook and gather.</p>
            <span class="card-link">Learn More <i data-lucide="chevron-right" style="width:14px;height:14px;"></i></span>
          </a>
          <a href="/services/bedroom-remodeling" class="service-card card-tint-3">
            <i data-lucide="lamp" class="card-icon"></i>
            <h3>Bedroom Remodeling</h3>
            <p>Flooring, built-ins, lighting, and layout changes that turn your bedroom into a comfortable, functional space.</p>
            <span class="card-link">Learn More <i data-lucide="chevron-right" style="width:14px;height:14px;"></i></span>
          </a>
          <a href="/services/laundry-room-remodeling" class="service-card card-tint-neutral">
            <i data-lucide="wrench" class="card-icon"></i>
            <h3>Laundry Room Remodeling</h3>
            <p>Efficient storage solutions, updated plumbing, and smart layouts for a laundry room that works harder for you.</p>
            <span class="card-link">Learn More <i data-lucide="chevron-right" style="width:14px;height:14px;"></i></span>
          </a>
          <a href="/services/common-area-remodeling" class="service-card card-tint-1">
            <i data-lucide="home" class="card-icon"></i>
            <h3>Common Area Remodeling</h3>
            <p>Living rooms, hallways, and shared spaces updated with new flooring, paint, lighting, and architectural details.</p>
            <span class="card-link">Learn More <i data-lucide="chevron-right" style="width:14px;height:14px;"></i></span>
          </a>
          <a href="/services/design-services" class="service-card card-tint-2">
            <i data-lucide="layout-grid" class="card-icon"></i>
            <h3>Design Services</h3>
            <p>Professional design consultation for interior and exterior projects — from concept sketches to material selection.</p>
            <span class="card-link">Learn More <i data-lucide="chevron-right" style="width:14px;height:14px;"></i></span>
          </a>
        </div>
      </div>

      <!-- Outdoor Services -->
      <div>
        <h3 class="service-group-title">Outdoor & Landscape</h3>
        <div class="grid-3" data-animate="fade-up" data-stagger>
          <a href="/services/patio-porch-terrace-construction" class="service-card card-tint-3">
            <i data-lucide="hammer" class="card-icon"></i>
            <h3>Patio, Porch & Terrace</h3>
            <p>Stone patios, covered porches, and multi-level terraces — outdoor living spaces built for Virginia's climate.</p>
            <span class="card-link">Learn More <i data-lucide="chevron-right" style="width:14px;height:14px;"></i></span>
          </a>
          <a href="/services/greenscape-landscape-design" class="service-card card-tint-1">
            <i data-lucide="trees" class="card-icon"></i>
            <h3>Greenscape & Landscape Design</h3>
            <p>Custom landscape plans with native plantings, hardscape integration, and year-round visual interest.</p>
            <span class="card-link">Learn More <i data-lucide="chevron-right" style="width:14px;height:14px;"></i></span>
          </a>
          <a href="/services/irrigation-design-installation" class="service-card card-tint-neutral">
            <i data-lucide="droplets" class="card-icon"></i>
            <h3>Irrigation Design & Installation</h3>
            <p>Efficient sprinkler and drip systems designed to keep your landscape healthy while conserving water.</p>
            <span class="card-link">Learn More <i data-lucide="chevron-right" style="width:14px;height:14px;"></i></span>
          </a>
          <a href="/services/lawn-care-maintenance" class="service-card card-tint-2">
            <i data-lucide="leaf" class="card-icon"></i>
            <h3>Lawn Care & Maintenance</h3>
            <p>Mowing, fertilization, aeration, and seasonal maintenance to keep your lawn thick, green, and healthy year-round.</p>
            <span class="card-link">Learn More <i data-lucide="chevron-right" style="width:14px;height:14px;"></i></span>
          </a>
        </div>
      </div>
    </div>
    <!-- SVG divider into next section -->
    <div class="section-divider section-divider--bottom" aria-hidden="true">
      <svg viewBox="0 0 1440 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0,0 L1440,80 L1440,80 L0,80 Z" fill="#ffffff"/>
      </svg>
    </div>
  </section>

  <!-- ============================================
       5. BEFORE/AFTER SHOWCASE — Signature Section
       ============================================ -->
  <section class="showcase-section">
    <div class="container">
      <div class="text-center" style="margin-bottom: var(--space-2xl);" data-animate="fade-up">
        <span class="eyebrow-label">Real Results</span>
        <h2>See the Transformation</h2>
        <p class="section-subtitle prose-centered">Every project starts with a vision. Here's what that vision looks like when it's complete.</p>
      </div>

      <div class="showcase-grid" data-animate="fade-up">
        <div class="showcase-item">
          <span class="showcase-label">Before & After</span>
          <img src="https://i.imgur.com/TmwpMiR.jpeg" alt="Before and after bedroom remodel by Greenstone Home Solutions — new flooring, paint, and trim work in Richmond, VA" width="800" height="1000" loading="lazy">
          <div class="showcase-caption">
            <h3>Bedroom Renovation</h3>
            <p>New flooring, fresh paint, updated trim — a complete room transformation.</p>
          </div>
        </div>

        <div class="showcase-item">
          <span class="showcase-label">Before & After</span>
          <img src="https://i.imgur.com/QyW3uBL.jpeg" alt="Before and after bedroom remodel with teal accent wall by Greenstone Home Solutions in Richmond, VA" width="800" height="1000" loading="lazy">
          <div class="showcase-caption">
            <h3>Bedroom Redesign</h3>
            <p>Bold accent wall, new flooring, and modern fixtures create a completely new feel.</p>
          </div>
        </div>

        <div class="showcase-item">
          <span class="showcase-label">Before & After</span>
          <img src="https://i.imgur.com/s6CaPFG.jpeg" alt="Before and after hallway and landing remodel by Greenstone Home Solutions in Richmond, VA" width="800" height="1000" loading="lazy">
          <div class="showcase-caption">
            <h3>Hallway & Landing Remodel</h3>
            <p>Updated railing, new flooring, and fresh paint transform an overlooked space.</p>
          </div>
        </div>

        <div class="showcase-item">
          <span class="showcase-label">Before & After</span>
          <img src="https://i.imgur.com/GUyKwFV.jpeg" alt="Before and after TV mount with hidden wiring by Greenstone Home Solutions in Richmond, VA" width="800" height="600" loading="lazy">
          <div class="showcase-caption">
            <h3>Clean TV Installation</h3>
            <p>Professional wall mount with completely hidden wiring for a seamless look.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================
       6. STAT COUNTERS — Dark background with watermark
       ============================================ -->
  <section class="stats-section" style="position:relative; overflow:hidden;">
    <div class="stat-watermark" style="right:-40px; bottom:-80px;">500+</div>
    <div class="container" style="position:relative; z-index:1;">
      <div class="stats-grid reveal-up" data-animate="fade-up">
        <div class="stat-counter">
          <div class="stat-number" data-count="10" data-suffix="+">10+</div>
          <div class="stat-label">Years of Experience</div>
        </div>
        <div class="stat-counter">
          <div class="stat-number" data-count="500" data-suffix="+">500+</div>
          <div class="stat-label">Projects Completed</div>
        </div>
        <div class="stat-counter">
          <div class="stat-number" data-count="7">7</div>
          <div class="stat-label">Service Areas</div>
        </div>
        <div class="stat-counter">
          <div class="stat-number" data-count="100" data-suffix="%">100%</div>
          <div class="stat-label">Satisfaction Guarantee</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================
       7. WHY GREENSTONE — Split-reverse with multi-directional reveals
       ============================================ -->
  <section class="why-section" style="background: var(--bg);">
    <div class="container">
      <div class="split-reverse">
        <div class="reveal-right">
          <span class="section-subtitle--accent">Why choose us</span>
          <h2>What Sets Greenstone Apart</h2>

          <div style="margin-top: var(--space-xl);">
            <div class="differentiator" data-animate="fade-up">
              <i data-lucide="graduation-cap" class="diff-icon"></i>
              <div class="diff-content">
                <h3>Virginia Tech Education</h3>
                <p>Lucas holds a degree in Environmental Horticulture with a minor in Crop & Soil Sciences — giving our team deep knowledge of plant health, soil conditions, and sustainable landscape practices.</p>
              </div>
            </div>

            <div class="differentiator" data-animate="fade-up">
              <i data-lucide="award" class="diff-icon"></i>
              <div class="diff-content">
                <h3>Belgard Award-Winning Design</h3>
                <p>Our hardscape work has been featured in the Belgard Mid-Atlantic image portfolio. Lucas earned a Hardscape Hero Award for an exceptional patio project using Belgard materials.</p>
              </div>
            </div>

            <div class="differentiator" data-animate="fade-up">
              <i data-lucide="home" class="diff-icon"></i>
              <div class="diff-content">
                <h3>Indoor & Outdoor Expertise</h3>
                <p>Most contractors specialize in one or the other. Greenstone handles your kitchen remodel and your landscape redesign — one contractor for your entire property.</p>
              </div>
            </div>

            <div class="differentiator" data-animate="fade-up">
              <i data-lucide="ruler" class="diff-icon"></i>
              <div class="diff-content">
                <h3>Budget-Conscious Craftsmanship</h3>
                <p>We work within your budget without cutting corners. Every project gets the same quality materials and attention to detail, scaled to what works financially for you.</p>
              </div>
            </div>

            <div class="differentiator" data-animate="fade-up">
              <i data-lucide="users" class="diff-icon"></i>
              <div class="diff-content">
                <h3>Family-Owned Values</h3>
                <p>As a family-owned company, we treat every client's home like our own. You work directly with our team — not a rotating crew of subcontractors.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="img-framed reveal-left" data-animate="wipe-right">
          <img src="https://i.imgur.com/RpfvKM4.jpeg" alt="Custom built-in shelving with integrated lighting by Greenstone Home Solutions in Richmond, VA" width="600" height="800" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================
       8. WORK GALLERY — Masonry / Stagger
       ============================================ -->
  <section class="gallery-section bg-alt">
    <div class="container">
      <div class="text-center" style="margin-bottom: var(--space-2xl);" data-animate="fade-up">
        <span class="eyebrow-label">Portfolio</span>
        <h2>Our Recent Work</h2>
        <p class="section-subtitle prose-centered">A curated selection of completed projects across Richmond and surrounding counties.</p>
      </div>

      <div class="masonry-grid" data-animate="fade-up">
        <div class="masonry-item">
          <img src="https://i.imgur.com/qfmHYwo.jpeg" alt="Completed shower remodel with dual showerheads and gray subway tile in Richmond, VA" width="600" height="800" loading="lazy">
          <div class="masonry-overlay"><span>Shower Remodel</span></div>
        </div>
        <div class="masonry-item">
          <img src="https://i.imgur.com/rD9LF6J.jpeg" alt="Kitchen renovation with subway tile backsplash and granite countertops in Richmond, VA" width="800" height="600" loading="lazy">
          <div class="masonry-overlay"><span>Kitchen Renovation</span></div>
        </div>
        <div class="masonry-item">
          <img src="https://i.imgur.com/OCoqun0.jpeg" alt="Vaulted ceiling interior renovation with open railing by Greenstone Home Solutions" width="800" height="600" loading="lazy">
          <div class="masonry-overlay"><span>Interior Renovation</span></div>
        </div>
        <div class="masonry-item">
          <img src="https://i.imgur.com/jOXKoUD.jpeg" alt="Custom patio with pergola and stone fireplace by Greenstone Home Solutions in Richmond, VA" width="800" height="600" loading="lazy">
          <div class="masonry-overlay"><span>Patio & Pergola</span></div>
        </div>
        <div class="masonry-item">
          <img src="https://i.imgur.com/nqzt0xW.jpeg" alt="Curved river-rock landscape bed with perennials by Greenstone Home Solutions" width="800" height="600" loading="lazy">
          <div class="masonry-overlay"><span>Landscape Design</span></div>
        </div>
        <div class="masonry-item">
          <img src="https://i.imgur.com/L9cHp6H.jpeg" alt="New industrial dining chandelier installation by Greenstone Home Solutions" width="600" height="800" loading="lazy">
          <div class="masonry-overlay"><span>Light Fixture Install</span></div>
        </div>
        <div class="masonry-item">
          <img src="https://i.imgur.com/64BxPuI.jpeg" alt="Completed shower with curved rod and hex tile niches by Greenstone Home Solutions" width="600" height="800" loading="lazy">
          <div class="masonry-overlay"><span>Shower Renovation</span></div>
        </div>
        <div class="masonry-item">
          <img src="https://i.imgur.com/OG56JL6.jpeg" alt="Dense green lawn maintained by Greenstone Home Solutions lawn care team" width="800" height="600" loading="lazy">
          <div class="masonry-overlay"><span>Lawn Maintenance</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================
       9. SERVICE AREA CALLOUT
       ============================================ -->
  <section class="area-section">
    <div class="container">
      <div class="split" data-animate="fade-up">
        <div>
          <span class="eyebrow-label">Service Area</span>
          <h2>Serving Richmond & Surrounding Counties</h2>
          <div class="prose" style="margin-top: var(--space-lg);">
            <p>Greenstone Home Solutions serves homeowners across the greater Richmond metro area including Richmond City, Chesterfield County, Henrico County, Hanover County, King William County, New Kent County, and Charles City County. Whether you need a <a href="/services/bathroom-remodeling" style="color: var(--primary); font-weight: 600;">bathroom remodel</a> in Henrico or a <a href="/services/greenscape-landscape-design" style="color: var(--primary); font-weight: 600;">landscape redesign</a> in Chesterfield, we bring the same craftsmanship to every project.</p>
          </div>
          <div class="county-list">
            <a href="/service-areas/richmond" class="county-chip"><i data-lucide="map-pin"></i> Richmond</a>
            <a href="/service-areas/chesterfield-county" class="county-chip"><i data-lucide="map-pin"></i> Chesterfield County</a>
            <a href="/service-areas/henrico-county" class="county-chip"><i data-lucide="map-pin"></i> Henrico County</a>
            <a href="/service-areas/hanover-county" class="county-chip"><i data-lucide="map-pin"></i> Hanover County</a>
            <a href="/service-areas/king-william-county" class="county-chip"><i data-lucide="map-pin"></i> King William County</a>
            <a href="/service-areas/new-kent-county" class="county-chip"><i data-lucide="map-pin"></i> New Kent County</a>
            <a href="/service-areas/charles-city-county" class="county-chip"><i data-lucide="map-pin"></i> Charles City County</a>
          </div>
        </div>
        <div style="text-align: center;">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d401731.2560450792!2d-77.7173504!3d37.5407246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b111095799c9ed%3A0xbfd83e6de2423cc5!2sRichmond%2C%20VA!5e0!3m2!1sen!2sus!4v1700000000000" width="100%" height="400" style="border:0; border-radius: var(--radius);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Greenstone Home Solutions service area map centered on Richmond, VA"></iframe>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================
       10. FAQ SECTION
       ============================================ -->
  <section class="faq-section bg-alt">
    <div class="container">
      <div class="text-center" style="margin-bottom: var(--space-2xl);" data-animate="fade-up">
        <h2>Frequently Asked Questions</h2>
        <p class="section-subtitle prose-centered">Answers to the questions Richmond homeowners ask most about our remodeling and landscaping services.</p>
      </div>

      <div class="faq-list" data-animate="fade-up">
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            How much does a bathroom remodel cost in Richmond, VA?
            <i data-lucide="chevron-down"></i>
          </button>
          <div class="faq-answer">
            <div class="faq-answer-inner">
              <p>A bathroom remodel in the Richmond area typically ranges from $8,000 to $25,000 depending on scope. A basic refresh with new tile, vanity, and fixtures runs $8,000–$12,000, while a full gut renovation with custom tile work and layout changes can reach $18,000–$25,000. We provide free estimates tailored to your specific project and budget.</p>
            </div>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            Do you handle both indoor renovations and outdoor landscaping?
            <i data-lucide="chevron-down"></i>
          </button>
          <div class="faq-answer">
            <div class="faq-answer-inner">
              <p>Yes. Greenstone Home Solutions is a full-service general contractor covering both interior remodeling — kitchens, bathrooms, bedrooms, and common areas — and exterior work including patios, landscape design, irrigation, and lawn care. Having one contractor for your entire property means consistent quality and simplified project coordination.</p>
            </div>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            What areas do you serve around Richmond?
            <i data-lucide="chevron-down"></i>
          </button>
          <div class="faq-answer">
            <div class="faq-answer-inner">
              <p>We serve homeowners throughout the greater Richmond metro area including Richmond City, Chesterfield County, Henrico County, Hanover County, King William County, New Kent County, and Charles City County. We bring the same quality craftsmanship to every project regardless of location within our service area.</p>
            </div>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            How long does a typical kitchen remodel take?
            <i data-lucide="chevron-down"></i>
          </button>
          <div class="faq-answer">
            <div class="faq-answer-inner">
              <p>Most kitchen remodels take 4 to 8 weeks from demolition to completion. A cosmetic update with new countertops, backsplash, and paint can be done in 2–3 weeks. A full renovation involving layout changes, new cabinetry, and electrical work typically runs 6–8 weeks. We provide a detailed timeline during your free consultation.</p>
            </div>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            Do I need a permit for a patio or porch in Virginia?
            <i data-lucide="chevron-down"></i>
          </button>
          <div class="faq-answer">
            <div class="faq-answer-inner">
              <p>In most Virginia counties, patios at grade level generally do not require permits, but covered porches, structures with electrical, and elevated builds typically do. Greenstone handles all permit applications and county inspections as part of our project management.</p>
            </div>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            Can you help design my landscape if I'm not sure what I want?
            <i data-lucide="chevron-down"></i>
          </button>
          <div class="faq-answer">
            <div class="faq-answer-inner">
              <p>Absolutely. Our founder Lucas Walton holds a degree in Environmental Horticulture from Virginia Tech, which means we approach landscape design with both aesthetic vision and deep plant science knowledge. We start with a consultation to understand your property, preferences, and budget, then create a custom design plan before any work begins.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================
       11. CLOSING CTA
       ============================================ -->
  <section class="closing-cta">
    <div class="container" data-animate="fade-up">
      <h2>Ready to Transform Your Home?</h2>
      <p class="prose-centered">Whether it's a kitchen remodel, new patio, or complete landscape redesign — let's talk about your project.</p>
      <a href="/contact" class="btn-primary">Schedule Your Free Consultation <i data-lucide="chevron-right" style="width:18px;height:18px;"></i></a>
      <a href="tel:8042186459" class="cta-phone"><i data-lucide="phone" style="width:20px;height:20px;vertical-align:middle;"></i> (804) 218-6459</a>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
