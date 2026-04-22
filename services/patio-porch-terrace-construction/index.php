<?php
$pageTitle       = "Patio, Porch & Terrace Construction in Richmond, VA | Greenstone Home Solutions";
$pageDescription = "Award-winning patio, porch, and terrace construction in Richmond, VA. Belgard Hardscape Hero Award winner. Pavers, stone, fireplaces, pergolas. Call (804) 218-6459.";
$canonicalUrl    = "https://greenstonehomesolutions.com/services/patio-porch-terrace-construction";
$ogImage         = "https://i.imgur.com/jOXKoUD.jpeg";
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
      {"@type": "ListItem", "position": 3, "name": "Patio, Porch & Terrace Construction", "item": "https://greenstonehomesolutions.com/services/patio-porch-terrace-construction"}
    ]
  },
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "serviceType": "Patio, Porch & Terrace Construction",
    "provider": {
      "@type": "LocalBusiness",
      "name": "Greenstone Home Solutions",
      "telephone": "(804) 218-6459",
      "email": "greenstonehomesolutions@gmail.com",
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
    ],
    "description": "Award-winning patio, porch, and terrace construction in Richmond, VA. Belgard Hardscape Hero Award winner specializing in paver patios, stone fireplaces, pergolas, and covered porches."
  },
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "What makes Belgard pavers a good choice for a patio?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Belgard is one of the most respected names in hardscaping. Their pavers are engineered for durability, come with color-lock technology, and offer a lifetime warranty. Lucas has been recognized by Belgard with a Hardscape Hero Award for his paver work."
        }
      },
      {
        "@type": "Question",
        "name": "Can you build an outdoor fireplace as part of a patio project?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, outdoor fireplaces are one of our specialties. We build with stone and fire brick, ensuring proper draft, code compliance, and integration with the overall patio design."
        }
      },
      {
        "@type": "Question",
        "name": "How long does a paver patio installation take?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Most patio projects take 1-3 weeks. A simple paver patio can be completed in a week; complex designs with fireplaces, pergolas, and multi-level terraces take 2-3 weeks."
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
        <a href="/">Home</a><span class="sep">/</span><a href="/services">Services</a><span class="sep">/</span><span class="current">Patio, Porch & Terrace Construction</span>
      </nav>
      <h1>Patio, Porch & <span class="text-accent">Terrace Construction</span> in Richmond, VA</h1>
      <p class="prose">A custom patio in Richmond typically costs $5,000–$25,000+ depending on materials and features like outdoor fireplaces or pergolas. Greenstone Home Solutions provides award-winning patio and hardscape construction for homeowners across the greater Richmond metro area.</p>
    </div>
    <div class="section-divider section-divider--bottom" aria-hidden="true">
      <svg viewBox="0 0 1440 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0,40 C360,0 1080,80 1440,40 L1440,80 L0,80 Z" fill="#ffffff"/>
      </svg>
    </div>
  </section>

  <!-- Split — Image + Belgard Callout -->
  <section style="background: var(--bg);">
    <div class="container">
      <div class="split">
        <div class="service-img reveal-left" data-animate="wipe-right">
          <img src="https://i.imgur.com/jOXKoUD.jpeg" alt="Belgard Hardscape Hero Award-winning patio with wood pergola, stone fireplace, and paver patio in Richmond, Virginia" width="800" height="600" loading="lazy">
        </div>
        <div class="reveal-right">
          <span class="eyebrow-label">Belgard Hardscape Hero Award Winner</span>
          <span class="section-subtitle--accent">Award-winning craftsmanship</span>
          <h2>Recognized for Excellence in Hardscape Construction</h2>
          <div class="prose">
            <p>Greenstone Home Solutions is a licensed and insured outdoor construction company based in Richmond, VA. Owner Lucas Walton won a <strong>Belgard Hardscape Hero Award</strong> for a patio project using Belgard materials, and his work is featured in the <strong>Belgard Mid-Atlantic image portfolio</strong> — a distinction earned by a select group of contractors across the region.</p>
            <p>That recognition isn't accidental. It reflects the precision and craftsmanship Lucas brings to every patio, porch, and terrace project in Richmond, Henrico County, Hanover County, King William County, New Kent County, and Charles City County. When you hire Greenstone for a hardscape project, you're working with a builder whose results have been validated by one of the most respected names in the industry.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Belgard Highlight Box -->
  <section class="bg-alt">
    <div class="container" data-animate="fade-up">
      <div class="highlight-box card-tint-1" style="border-left: 4px solid var(--accent); max-width: 800px; margin-inline: auto;">
        <h3><i data-lucide="award" style="width:22px;height:22px;color:var(--accent);vertical-align:middle;"></i> About the Belgard Hardscape Hero Award</h3>
        <p>Belgard's Hardscape Hero program recognizes exceptional outdoor living projects from contractors across North America. Winners are selected based on craftsmanship, design creativity, and effective use of Belgard products. Lucas's winning project featured a complete outdoor living space with Belgard pavers, a custom stone fireplace, and integrated seating — the kind of project that transforms a backyard into a genuine extension of the home.</p>
      </div>
    </div>
  </section>

  <!-- Process Steps -->
  <section style="background: var(--bg);">
    <div class="container" data-animate="fade-up">
      <span class="eyebrow-label">Our Process</span>
      <h2>How We Build Your Patio</h2>
      <div class="process-steps" data-stagger>
        <div class="process-step">
          <h3>Consultation & Design</h3>
          <p>We visit your property to assess the space, discuss your vision, and review material options. You'll receive a detailed design concept with layout, material selections, and an itemized cost estimate before any work begins.</p>
        </div>
        <div class="process-step">
          <h3>Site Prep & Base Work</h3>
          <p>Proper base preparation is what separates a patio that lasts decades from one that shifts and settles within a few years. We excavate to depth, install geotextile fabric, compact gravel base in lifts, and verify grade for drainage — typically 1/8" to 1/4" per foot slope away from the house.</p>
        </div>
        <div class="process-step">
          <h3>Paver & Stone Installation</h3>
          <p>Pavers or natural stone are set on a screeded sand bed with precise joint spacing. Patterns are laid out with string lines and reference points. Cuts are made with wet saws for clean edges. Border pavers are secured with concrete edging.</p>
        </div>
        <div class="process-step">
          <h3>Features & Finishing</h3>
          <p>Outdoor fireplaces, fire pits, seat walls, pergolas, and lighting are built and integrated. Polymeric sand is swept into joints and activated to lock pavers in place. Final grading ensures clean transitions to lawn areas.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Mid CTA -->
  <section class="mid-cta">
    <div class="container" data-animate="fade-up">
      <h2>Build the Outdoor Living Space You've Been Planning</h2>
      <p class="prose-centered">From simple paver patios to full outdoor rooms with fireplaces and pergolas — get a free estimate on your project.</p>
      <a href="/contact" class="btn-primary">Get a Free Estimate <i data-lucide="chevron-right" style="width:18px;height:18px;"></i></a>
      <a href="tel:8042186459" class="cta-phone"><i data-lucide="phone" style="width:20px;height:20px;vertical-align:middle;"></i> (804) 218-6459</a>
    </div>
  </section>

  <!-- What We Build — Icon List -->
  <section style="background: var(--bg);">
    <div class="container" data-animate="fade-up">
      <h2>Patio, Porch & Terrace Services</h2>
      <div class="prose" style="margin-bottom: var(--space-xl);">
        <p>We design and build outdoor hardscape structures that work with your home's architecture and your property's natural features. Every project is custom — we don't install pre-packaged kits or cookie-cutter layouts.</p>
      </div>
      <ul class="icon-list">
        <li>
          <i data-lucide="grid-3x3" style="width:18px;height:18px;"></i>
          <div>
            <strong>Paver Patios</strong>
            <p>Belgard, Tremron, and natural stone pavers installed over properly compacted aggregate base. Running bond, herringbone, and custom patterns available. Belgard pavers include color-lock technology and a lifetime structural warranty — and we're one of the few Richmond-area contractors with Belgard award recognition.</p>
          </div>
        </li>
        <li>
          <i data-lucide="flame" style="width:18px;height:18px;"></i>
          <div>
            <strong>Outdoor Fireplaces & Fire Pits</strong>
            <p>Custom-built stone fireplaces with proper firebrick lining, steel lintels, and chimney draft. Fire pits in natural gas or wood-burning configurations. We handle gas line coordination with licensed plumbers when needed.</p>
          </div>
        </li>
        <li>
          <i data-lucide="pillar" style="width:18px;height:18px;"></i>
          <div>
            <strong>Pergolas & Covered Structures</strong>
            <p>Cedar, pressure-treated, and aluminum pergolas that provide shade and define outdoor rooms. Covered porches with roofing that ties into existing home architecture. We build structures rated for Virginia's wind and snow load requirements.</p>
          </div>
        </li>
        <li>
          <i data-lucide="mountain" style="width:18px;height:18px;"></i>
          <div>
            <strong>Retaining Walls & Terraces</strong>
            <p>Multi-level terraces built with segmental retaining wall blocks or natural stone. Walls over 4 feet require engineering in Virginia — we coordinate with licensed engineers when needed and ensure proper drainage behind all walls.</p>
          </div>
        </li>
        <li>
          <i data-lucide="armchair" style="width:18px;height:18px;"></i>
          <div>
            <strong>Seat Walls & Built-In Features</strong>
            <p>Integrated seat walls, outdoor kitchen bases, planter walls, and columns that match your patio's material palette. These features create structure and function without requiring separate furniture.</p>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <!-- Material Deep Dive -->
  <section class="bg-alt">
    <div class="container" data-animate="fade-up">
      <h2>Choosing the Right Patio Material</h2>
      <div class="grid-3" data-stagger>
        <div class="highlight-box card-tint-2">
          <h3>Belgard Pavers</h3>
          <p>Engineered concrete pavers with color-lock technology that resists fading. Available in dozens of styles from traditional brick to modern large-format slabs. Lifetime structural warranty. Our recommended choice for most Richmond-area patios — and the material behind our Hardscape Hero Award project.</p>
        </div>
        <div class="highlight-box card-tint-3">
          <h3>Natural Stone</h3>
          <p>Flagstone, bluestone, and travertine deliver a one-of-a-kind look with natural variation in color and texture. Ideal for organic, flowing patio designs. Slightly higher material cost but exceptional durability — natural stone patios can last 50+ years with minimal maintenance.</p>
        </div>
        <div class="highlight-box card-tint-neutral">
          <h3>Stamped & Poured Concrete</h3>
          <p>A budget-friendly option that can mimic the look of stone or brick. Best for simple, flat patio areas. We recommend pavers over stamped concrete for Virginia's climate — freeze-thaw cycles can crack poured surfaces, while individual pavers flex without damage.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Split Reverse — Drainage & Technical -->
  <section style="background: var(--bg);">
    <div class="container" data-animate="fade-up">
      <div class="split-reverse">
        <div class="reveal-up">
          <h2>Why Drainage Planning Matters for Every Patio</h2>
          <div class="prose">
            <p>Richmond averages 44 inches of rainfall per year. Without proper drainage planning, water pools on patio surfaces, undermines base material, and can direct moisture toward your home's foundation. Every patio we build includes deliberate grading — typically a 1–2% slope away from the house — and, where needed, integrated channel drains or French drains at the patio perimeter.</p>
            <p>For properties with challenging drainage — low spots, clay-heavy soil common throughout Henrico and Hanover counties, or downhill slopes toward the home — we design more aggressive drainage solutions. This might include permeable paver sections that allow water to infiltrate, catch basins tied to underground pipe, or raised patio areas with retaining walls that redirect water flow entirely.</p>
            <p>Proper drainage isn't an optional add-on. It's built into the base price of every project because it's built into the base of every patio — literally. Skipping this step is why so many patios fail within 5–10 years. Ours don't.</p>
          </div>
        </div>
        <div class="service-img reveal-right">
          <img src="https://i.imgur.com/jOXKoUD.jpeg" alt="Paver patio with integrated drainage and outdoor living features in Richmond, VA" width="800" height="600" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- Answer Blocks -->
  <section class="bg-alt">
    <div class="container" data-animate="fade-up">
      <h2>What Richmond Homeowners Ask About Patios</h2>

      <div class="answer-block">
        <h3>How much does a paver patio cost in Richmond, VA?</h3>
        <p>A basic Belgard paver patio runs $18–$28 per square foot installed, including base preparation. A 300-square-foot patio typically costs $5,400–$8,400. Add an outdoor fireplace ($5,000–$15,000), pergola ($4,000–$12,000), or seat walls ($60–$100 per linear foot) for a complete outdoor living space. Natural stone is 10–30% more than manufactured pavers.</p>
      </div>

      <div class="answer-block">
        <h3>Do pavers hold up in Virginia winters?</h3>
        <p>Yes — individual pavers flex independently, so freeze-thaw cycles don't cause the cracking you see with poured concrete. Belgard pavers are rated for 50+ freeze-thaw cycles per year. Proper base compaction and polymeric sand joint filling prevent shifting and weed growth between pavers.</p>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="faq-section">
    <div class="container" data-animate="fade-up">
      <h2>Patio Construction FAQs</h2>
      <div class="faq-list">
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            What makes Belgard pavers a good choice for a patio?
            <i data-lucide="chevron-down" style="width:20px;height:20px;"></i>
          </button>
          <div class="faq-answer">
            <div class="faq-answer-inner">
              <p>Belgard is one of the most respected names in hardscaping. Their pavers are engineered for durability, come with color-lock technology, and offer a lifetime warranty. Lucas has been recognized by Belgard with a Hardscape Hero Award for his paver work.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            Can you build an outdoor fireplace as part of a patio project?
            <i data-lucide="chevron-down" style="width:20px;height:20px;"></i>
          </button>
          <div class="faq-answer">
            <div class="faq-answer-inner">
              <p>Yes, outdoor fireplaces are one of our specialties. We build with stone and fire brick, ensuring proper draft, code compliance, and integration with the overall patio design. Wood-burning and gas options are both available.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            How long does a paver patio installation take?
            <i data-lucide="chevron-down" style="width:20px;height:20px;"></i>
          </button>
          <div class="faq-answer">
            <div class="faq-answer-inner">
              <p>Most patio projects take 1–3 weeks. A simple paver patio can be completed in a week; complex designs with fireplaces, pergolas, and multi-level terraces take 2–3 weeks. Weather and permit timelines can affect scheduling.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Related Services + Last Updated -->
  <section class="bg-alt">
    <div class="container" data-animate="fade-up">
      <div class="related-services">
        <h3>Related Services</h3>
        <div>
          <a href="/services/greenscape-landscape-design" class="related-chip">Greenscape & Landscape Design</a>
          <a href="/services/lawn-care-maintenance" class="related-chip">Lawn Care & Maintenance</a>
          <a href="/services/irrigation-design-installation" class="related-chip">Irrigation Design & Installation</a>
        </div>
      </div>
      <p class="last-updated">Last Updated: <?php echo date('F Y'); ?></p>
    </div>
  </section>

  <!-- Closing CTA -->
  <section class="closing-cta">
    <div class="container" data-animate="fade-up">
      <h2>Get an Estimate on Your Patio Project</h2>
      <p class="prose-centered">From Belgard paver patios to full outdoor living rooms with fireplaces and pergolas — we'll design and build it right.</p>
      <a href="/contact" class="btn-primary">Get a Free Estimate <i data-lucide="chevron-right" style="width:18px;height:18px;"></i></a>
      <a href="tel:8042186459" class="cta-phone"><i data-lucide="phone" style="width:20px;height:20px;vertical-align:middle;"></i> (804) 218-6459</a>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
