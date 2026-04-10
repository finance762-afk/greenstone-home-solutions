<?php
$pageTitle       = "Bathroom Remodeling in Richmond, VA | Greenstone Home Solutions";
$pageDescription = "Full bathroom remodeling in Richmond, VA — demo to finish. Custom tile, dual showerheads, accessibility upgrades. $8K–$25K. Call (804) 218-6459 for a free estimate.";
$canonicalUrl    = "https://greenstonehomesolutions.com/services/bathroom-remodeling";
$ogImage         = "https://i.imgur.com/qfmHYwo.jpeg";
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
      {"@type": "ListItem", "position": 3, "name": "Bathroom Remodeling", "item": "https://greenstonehomesolutions.com/services/bathroom-remodeling"}
    ]
  },
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Bathroom Remodeling",
    "description": "Full bathroom renovation including demolition, subfloor repair, plumbing rough-in, custom tile installation, fixture upgrades, and accessibility features for homeowners in Richmond, VA.",
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
        "name": "What is included in a full bathroom gut renovation?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "A full gut renovation includes demolition to studs, subfloor repair, plumbing rough-in, waterproofing, custom tile installation, fixture upgrades, vanity, and paint. Most full bathroom renovations take 2 to 4 weeks to complete."
        }
      },
      {
        "@type": "Question",
        "name": "Can you add accessibility features during a bathroom remodel?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. We install grab bars, curbless shower entries, bench seating, and handheld showerheads. These features are best added during a remodel when the walls are open and structural backing can be properly installed."
        }
      },
      {
        "@type": "Question",
        "name": "Do you handle the plumbing and electrical for bathroom remodeling?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We coordinate all plumbing and electrical work with licensed specialists as part of our project management, ensuring everything meets Virginia building code requirements."
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
  <section class="page-header">
    <div class="container">
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a><span class="sep">/</span><a href="/services">Services</a><span class="sep">/</span><span class="current">Bathroom Remodeling</span>
      </nav>
      <h1>Bathroom Remodeling in Richmond, VA</h1>
      <p class="prose">Full demo-to-finish bathroom renovation — custom tile, modern fixtures, and accessibility upgrades for homeowners across the greater Richmond area.</p>
      <a href="tel:8042186459" class="btn-primary" style="margin-top: var(--space-lg);">Call for a Free Estimate <i data-lucide="phone" style="width:18px;height:18px;"></i></a>
    </div>
  </section>

  <!-- Answer-First Intro + Image (Split: text left, image right) -->
  <section style="background: var(--bg);">
    <div class="container">
      <div class="split">
        <div>
          <p class="prose" style="margin-bottom: var(--space-lg);"><strong>Greenstone Home Solutions is a licensed and insured bathroom remodeling company based in Richmond, VA.</strong> A bathroom remodel in Richmond typically costs $8,000 to $25,000 and takes 2 to 6 weeks depending on scope. We provide full bathroom renovation for homeowners in Richmond and surrounding counties including Henrico, Hanover, King William, New Kent, and Charles City.</p>
          <p class="prose" style="margin-bottom: var(--space-lg);">Whether you need a simple vanity swap or a complete gut renovation down to the studs, our team handles every phase of the project. From initial demolition and subfloor repair through plumbing rough-in, waterproofing, tile installation, and final fixture placement, we manage the entire process so you have a single point of contact from start to finish.</p>
          <p class="prose">Richmond homes built between the 1950s and 1990s often have outdated plumbing, deteriorating subfloors, and inefficient layouts. A full renovation addresses these hidden issues while transforming the space into something that works for how you live now, not how the original builder designed it decades ago.</p>
        </div>
        <div class="service-img" data-animate="wipe-right">
          <img src="https://i.imgur.com/qfmHYwo.jpeg" alt="Completed bathroom remodel in Richmond VA with dual showerhead, subway tile, grab bar, and recessed niche" width="800" height="600" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- Answer Block -->
  <section class="bg-alt">
    <div class="container" data-animate="fade-up">
      <div class="answer-block">
        <h2>How Much Does a Bathroom Remodel Cost in Richmond?</h2>
        <p class="prose">A cosmetic refresh — new vanity, faucet, mirror, and paint — typically runs $3,000 to $7,000. A mid-range renovation with new tile, fixtures, and updated plumbing costs $8,000 to $15,000. A full gut renovation with custom tile work, dual showerheads, accessibility features, and layout changes ranges from $15,000 to $25,000 or more depending on materials and complexity.</p>
      </div>
    </div>
  </section>

  <!-- Demolition & Rough-In Gallery -->
  <section style="background: var(--bg);">
    <div class="container">
      <span class="eyebrow-label" data-animate="fade-up">From Demo to Finish</span>
      <h2 data-animate="fade-up">Behind the Walls: What a Full Renovation Looks Like</h2>
      <p class="prose" style="margin-bottom: var(--space-2xl);" data-animate="fade-up">Most of the critical work in a bathroom remodel happens before any tile goes up. Subfloor inspection, plumbing relocation, waterproofing, and proper backer board installation determine whether your new bathroom will last five years or twenty-five. Here is what that process actually looks like.</p>
      <div class="service-gallery" data-animate="fade-up" data-stagger>
        <div class="service-gallery-item">
          <img src="https://i.imgur.com/C5eOiQX.jpeg" alt="Full bathroom demolition to subfloor in Richmond VA home" width="800" height="600" loading="lazy">
          <div class="gallery-caption">Full demo to subfloor</div>
        </div>
        <div class="service-gallery-item">
          <img src="https://i.imgur.com/dGXy7pY.jpeg" alt="Bathroom gutted to studs with plumbing rough-in visible" width="800" height="600" loading="lazy">
          <div class="gallery-caption">Gutted to studs with rough-in</div>
        </div>
        <div class="service-gallery-item">
          <img src="https://i.imgur.com/8WQKJy9.jpeg" alt="Rough-in framing and subfloor with shower drain placement" width="800" height="600" loading="lazy">
          <div class="gallery-caption">Framing &amp; drain placement</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Custom Tile Section (Split Reverse: image left, text right) -->
  <section class="bg-alt">
    <div class="container">
      <div class="split-reverse">
        <div class="service-img" data-animate="wipe-right">
          <img src="https://i.imgur.com/GgFoDNb.jpeg" alt="Shower wall tile setting in progress during Richmond bathroom remodel" width="800" height="600" loading="lazy">
        </div>
        <div>
          <h2 data-animate="fade-up">Custom Tile Installation</h2>
          <p class="prose" style="margin-bottom: var(--space-lg);" data-animate="fade-up">Tile is where a bathroom remodel becomes personal. We specialize in subway tile, hexagon mosaic, large-format porcelain, and natural stone installations. Every tile job starts with proper waterproofing — we use Kerdi membrane or equivalent on all wet-area walls and floors before a single tile is set.</p>
          <p class="prose" data-animate="fade-up">Our work includes recessed niches for shampoo and soap, accent bands, mosaic feature walls, and custom patterns. The hexagonal mosaic niche accents shown here are a popular choice among Richmond homeowners looking for a modern but timeless look. We also handle all grouting, sealing, and trim work to ensure clean lines and a watertight finish that holds up in Virginia's humid climate.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Tile Detail + Completed Shot -->
  <section style="background: var(--bg);">
    <div class="container">
      <div class="split">
        <div>
          <h2 data-animate="fade-up">Fixtures &amp; Finishing Details</h2>
          <p class="prose" style="margin-bottom: var(--space-lg);" data-animate="fade-up">The finishing phase brings everything together — dual showerheads with both rainfall and handheld options, modern vanities with soft-close drawers, and properly installed grab bars that blend into the design rather than looking like afterthoughts.</p>
          <ul class="icon-list" data-animate="fade-up">
            <li><i data-lucide="check-circle" style="width:18px;height:18px;"></i><p>Rainfall and handheld dual showerhead systems</p></li>
            <li><i data-lucide="check-circle" style="width:18px;height:18px;"></i><p>ADA-compliant grab bars with structural backing</p></li>
            <li><i data-lucide="check-circle" style="width:18px;height:18px;"></i><p>Recessed niches with decorative tile accents</p></li>
            <li><i data-lucide="check-circle" style="width:18px;height:18px;"></i><p>Curved shower rods for additional elbow room</p></li>
            <li><i data-lucide="check-circle" style="width:18px;height:18px;"></i><p>Ventilation upgrades to prevent mold in Virginia humidity</p></li>
          </ul>
        </div>
        <div class="service-img" data-animate="wipe-right">
          <img src="https://i.imgur.com/xTwOMrc.jpeg" alt="Tile installation with hexagon mosaic niche accents in Richmond VA bathroom" width="800" height="600" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- Mid CTA -->
  <section class="mid-cta">
    <div class="container" data-animate="fade-up" style="text-align:center;">
      <h2>Planning a Bathroom Renovation?</h2>
      <p class="prose-centered">Tell us about your project and we will provide a detailed estimate — no pressure, no obligation.</p>
      <a href="/contact" class="btn-primary">Request a Free Estimate <i data-lucide="chevron-right" style="width:18px;height:18px;"></i></a>
      <a href="tel:8042186459" class="cta-phone"><i data-lucide="phone" style="width:20px;height:20px;vertical-align:middle;"></i> (804) 218-6459</a>
    </div>
  </section>

  <!-- Completed Project Showcase -->
  <section style="background: var(--bg);">
    <div class="container">
      <div class="split-reverse">
        <div class="service-img" data-animate="wipe-right">
          <img src="https://i.imgur.com/64BxPuI.jpeg" alt="Completed bathroom remodel with curved rod, hex niches, grab bar, and natural light in Richmond VA" width="800" height="600" loading="lazy">
        </div>
        <div>
          <h2 data-animate="fade-up">The Finished Product</h2>
          <p class="prose" style="margin-bottom: var(--space-lg);" data-animate="fade-up">This Richmond bathroom went from a dated, poorly ventilated space to a bright, accessible retreat with custom tile work, dual showerheads, recessed niches with hexagonal mosaic accents, and a grab bar integrated into the design. The curved shower rod provides extra room, and natural light floods in through a repositioned window.</p>
          <p class="prose" data-animate="fade-up">Every material was selected to handle Richmond's seasonal humidity swings. Porcelain tile on the walls, proper waterproofing behind it, and adequate ventilation prevent the mold and mildew issues that plague many older bathrooms in Henrico and Hanover County homes.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Accessibility Highlight -->
  <section class="bg-alt">
    <div class="container" data-animate="fade-up">
      <div class="highlight-box">
        <h3>Accessibility &amp; Aging-in-Place Upgrades</h3>
        <p>A bathroom remodel is the ideal time to add accessibility features. When walls are open during a gut renovation, we can install structural backing for grab bars, lower thresholds for curbless shower entries, add bench seating, and install handheld showerheads on adjustable slide bars. These modifications cost significantly less when done during a renovation versus retrofitting later, and they make the space safer for everyone — not just those with mobility concerns.</p>
      </div>
    </div>
  </section>

  <!-- Process Steps -->
  <section style="background: var(--bg);">
    <div class="container">
      <h2 style="text-align:center; margin-bottom: var(--space-2xl);" data-animate="fade-up">Our Bathroom Remodeling Process</h2>
      <div class="process-steps" data-animate="fade-up" data-stagger>
        <div class="process-step">
          <h3>Consultation &amp; Design</h3>
          <p>We assess your current bathroom, discuss your goals and budget, and develop a detailed plan including material selections, layout options, and a clear timeline.</p>
        </div>
        <div class="process-step">
          <h3>Demo &amp; Rough-In</h3>
          <p>Existing fixtures and finishes are removed. We inspect and repair the subfloor, update plumbing and electrical as needed, and install waterproofing membranes.</p>
        </div>
        <div class="process-step">
          <h3>Tile &amp; Finishing</h3>
          <p>Backer board goes up, followed by tile installation including niches and accent details. Vanity, fixtures, and hardware are installed with precision.</p>
        </div>
        <div class="process-step">
          <h3>Final Inspection &amp; Walkthrough</h3>
          <p>We verify every detail — grout lines, caulk joints, fixture operation, drainage — and walk through the completed project with you before considering it done.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Answer Block: Timeline -->
  <section class="bg-alt">
    <div class="container" data-animate="fade-up">
      <div class="answer-block">
        <h3>How Long Does a Bathroom Remodel Take in Richmond?</h3>
        <p class="prose">A cosmetic refresh — new vanity, faucet, paint, and mirror — takes about 1 week. A mid-range renovation with new tile, fixtures, and minor plumbing updates runs 2–3 weeks. A full gut renovation involving subfloor repair, plumbing relocation, and custom tile work takes 4–6 weeks. Weather rarely affects bathroom timelines since the work is interior, but material lead times (especially for custom tile and vanities) should be factored into planning.</p>
      </div>
    </div>
  </section>

  <!-- Permits & Virginia Requirements -->
  <section style="background: var(--bg);">
    <div class="container" data-animate="fade-up">
      <h2>Permits &amp; Virginia Building Requirements</h2>
      <p class="prose" style="margin-bottom: var(--space-lg);">In Henrico County and the City of Richmond, bathroom remodels that involve plumbing relocation, electrical work, or structural changes require permits. We handle the permit application process and schedule all required inspections. Plumbing and electrical work is performed by licensed specialists who understand Virginia's building code, including requirements for GFCI outlets near water sources, proper venting, and minimum clearances.</p>
      <p class="prose">Skipping permits may seem like a way to save money, but unpermitted work creates liability issues, complicates home insurance claims, and becomes a problem when you sell. We pull permits on every job that requires them — no exceptions.</p>
    </div>
  </section>

  <!-- FAQs -->
  <section class="faq-section">
    <div class="container">
      <h2 style="text-align:center; margin-bottom: var(--space-2xl);" data-animate="fade-up">Bathroom Remodeling FAQs</h2>
      <div class="faq-list" data-animate="fade-up">
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            What's included in a full bathroom gut renovation?
            <i data-lucide="chevron-down"></i>
          </button>
          <div class="faq-answer">
            <div class="faq-answer-inner">
              A full gut renovation includes demolition to studs, subfloor repair or replacement, plumbing rough-in, waterproofing, backer board installation, custom tile work, fixture upgrades, vanity installation, and paint. Most full bathroom renovations in the Richmond area take 2 to 4 weeks depending on the complexity of plumbing changes and material lead times.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            Can you add accessibility features during a remodel?
            <i data-lucide="chevron-down"></i>
          </button>
          <div class="faq-answer">
            <div class="faq-answer-inner">
              Yes. We install grab bars with proper structural backing, curbless shower entries, built-in bench seating, and handheld showerheads on adjustable slide bars. These features are most cost-effective when added during a remodel while walls are open and structural modifications are straightforward.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            Do you handle the plumbing and electrical?
            <i data-lucide="chevron-down"></i>
          </button>
          <div class="faq-answer">
            <div class="faq-answer-inner">
              We coordinate all plumbing and electrical work with licensed specialists as part of our project management. This includes drain relocation, supply line updates, GFCI outlet installation, exhaust fan upgrades, and any other work required to meet Virginia building code.
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
        <a href="/services/kitchen-remodeling" class="related-chip">Kitchen Remodeling</a>
        <a href="/services/laundry-room-remodeling" class="related-chip">Laundry Room Remodeling</a>
        <a href="/services/design-services" class="related-chip">Design Services</a>
        <a href="/services/common-area-remodeling" class="related-chip">Common Area Remodeling</a>
      </div>
      <p class="last-updated">Last Updated: <?php echo date('F Y'); ?></p>
    </div>
  </section>

  <!-- Closing CTA -->
  <section class="closing-cta">
    <div class="container" data-animate="fade-up">
      <h2>Ready to Transform Your Bathroom?</h2>
      <p class="prose-centered">From a simple refresh to a complete gut renovation, we will walk you through every option and provide a clear, detailed estimate.</p>
      <a href="/contact" class="btn-primary">Get Your Free Estimate <i data-lucide="chevron-right" style="width:18px;height:18px;"></i></a>
      <a href="tel:8042186459" class="cta-phone"><i data-lucide="phone" style="width:20px;height:20px;vertical-align:middle;"></i> (804) 218-6459</a>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
