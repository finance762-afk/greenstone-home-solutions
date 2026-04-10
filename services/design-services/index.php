<?php
$pageTitle       = "Design Services in Richmond, VA | Light Fixtures, Ceiling Fans & TV Mounting";
$pageDescription = "Light fixture replacement, ceiling fan installation, and TV wall mounting in Richmond, VA. Clean finishes, concealed wiring, $150-$500 per fixture. Call (804) 218-6459.";
$canonicalUrl    = "https://greenstonehomesolutions.com/services/design-services";
$ogImage         = "https://i.imgur.com/zhnFTMI.jpeg";
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
      {"@type": "ListItem", "position": 3, "name": "Design Services", "item": "https://greenstonehomesolutions.com/services/design-services"}
    ]
  },
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Design Services",
    "description": "Light fixture replacement, ceiling fan installation, and TV wall mounting with concealed wiring for homeowners in Richmond, VA and surrounding counties.",
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
        "name": "Can you install a heavy chandelier where a basic light was?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, but it may require reinforcing the ceiling junction box. Standard boxes support up to 50 lbs; heavier fixtures need a fan-rated or chandelier-rated box anchored to a joist. We assess and upgrade the support as needed."
        }
      },
      {
        "@type": "Question",
        "name": "How do you hide TV wires inside the wall?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We cut access holes behind the TV and near the floor, run a low-voltage wire channel through the wall cavity, and install a recessed outlet behind the TV. The result is a completely clean wall with zero visible cables."
        }
      },
      {
        "@type": "Question",
        "name": "Do you handle the electrical work for fixture installations?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, all fixture installations include proper electrical connections. For new circuits or complex wiring changes, we coordinate with licensed electricians to ensure code compliance."
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
        <a href="/">Home</a><span class="sep">/</span><a href="/services">Services</a><span class="sep">/</span><span class="current">Design Services</span>
      </nav>
      <h1>Design Services in Richmond, VA</h1>
      <p class="prose">Light fixture replacement, ceiling fan installation, and TV wall mounting -- the finishing touches that transform how your home looks and feels.</p>
      <a href="tel:8042186459" class="btn-primary" style="margin-top: var(--space-lg);">Call for a Free Estimate <i data-lucide="phone" style="width:18px;height:18px;"></i></a>
    </div>
  </section>

  <!-- Answer-First Intro + Before/After Image -->
  <section style="background: var(--bg);">
    <div class="container">
      <div class="split">
        <div>
          <p class="prose" style="margin-bottom: var(--space-lg);"><strong>Greenstone Home Solutions is a licensed and insured design services company based in Richmond, VA.</strong> Light fixture replacement, ceiling fan installation, and TV wall mounting in Richmond typically cost $150 to $500 per fixture depending on complexity and wiring needs. We provide finishing-touch design services for homeowners in Richmond, VA and surrounding counties including Henrico, Hanover, King William, New Kent, and Charles City.</p>
          <p class="prose" style="margin-bottom: var(--space-lg);">These are the upgrades that make the biggest visual impact for the least disruption. A dated plastic dome light becomes a modern flush mount in under an hour. A wobbly ceiling fan gets replaced with a quiet, balanced unit that actually moves air. A TV goes from sitting on a stand with tangled cords to a clean, wall-mounted display with zero visible wiring.</p>
          <p class="prose">We handle the electrical connections, junction box upgrades, stud-finding, bracket installation, and in-wall wire routing so every finished result looks intentional -- not improvised.</p>
        </div>
        <div class="service-img">
          <div class="before-after-large">
            <div class="ba-label">Before &amp; After</div>
            <img src="https://i.imgur.com/zhnFTMI.jpeg" alt="Before and after: plastic dome light replaced with modern flush-mount fixture in Richmond VA home" width="800" height="600" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Light Fixtures Section -->
  <section class="bg-alt">
    <div class="container">
      <span class="eyebrow-label" data-animate="fade-up">Light Fixture Replacement</span>
      <h2 data-animate="fade-up">From Builder-Grade to Beautiful</h2>
      <p class="prose" style="margin-bottom: var(--space-2xl);" data-animate="fade-up">Most Richmond homes come with the same builder-grade light fixtures installed in the 1980s and 1990s -- brass-finished dome lights, dated flush mounts, and ornate chandeliers that collect dust. Replacing them is one of the fastest ways to modernize a room. We install flush mounts, semi-flush fixtures, pendant lights, chandeliers, and dining room statement pieces. Every installation includes proper junction box assessment, secure mounting, and wiring connections.</p>

      <div class="service-gallery" data-animate="fade-up" data-stagger>
        <div class="service-gallery-item">
          <img src="https://i.imgur.com/zhnFTMI.jpeg" alt="Before and after: plastic dome light replaced with modern flush-mount ceiling fixture" width="800" height="600" loading="lazy">
          <div class="gallery-caption">Dome to flush mount</div>
        </div>
        <div class="service-gallery-item">
          <img src="https://i.imgur.com/L9cHp6H.jpeg" alt="New 3-bulb industrial dining chandelier installed over table in Richmond home" width="800" height="600" loading="lazy">
          <div class="gallery-caption">Industrial dining chandelier</div>
        </div>
        <div class="service-gallery-item">
          <img src="https://i.imgur.com/kPAteGr.jpeg" alt="Old ornate bronze chandelier before replacement in Henrico County home" width="800" height="600" loading="lazy">
          <div class="gallery-caption">Before: dated bronze chandelier</div>
        </div>
      </div>

      <div class="answer-block" style="margin-top: var(--space-2xl);" data-animate="fade-up">
        <h3>What About Heavy Fixtures?</h3>
        <p class="prose">Standard electrical boxes are rated for 50 lbs. If you want a chandelier or large pendant that exceeds that weight, the junction box needs to be upgraded to a fan-rated or chandelier-rated box that anchors directly to a ceiling joist. We assess every installation point before starting and upgrade the support structure when needed -- you never have to worry about a fixture pulling loose from the ceiling.</p>
      </div>
    </div>
  </section>

  <!-- Mid CTA -->
  <section class="mid-cta">
    <div class="container" data-animate="fade-up" style="text-align:center;">
      <h2>Upgrade Your Fixtures This Week</h2>
      <p class="prose-centered">Most fixture replacements take less than a day. Tell us what you want to change and we will give you a clear price before any work begins.</p>
      <a href="/contact" class="btn-primary">Request a Free Estimate <i data-lucide="chevron-right" style="width:18px;height:18px;"></i></a>
      <a href="tel:8042186459" class="cta-phone"><i data-lucide="phone" style="width:20px;height:20px;vertical-align:middle;"></i> (804) 218-6459</a>
    </div>
  </section>

  <!-- Ceiling Fans Section -->
  <section style="background: var(--bg);">
    <div class="container">
      <span class="eyebrow-label" data-animate="fade-up">Ceiling Fan Installation</span>
      <h2 data-animate="fade-up">Better Airflow, Better Lighting, One Fixture</h2>
      <p class="prose" style="margin-bottom: var(--space-2xl);" data-animate="fade-up">Ceiling fans with integrated light kits serve double duty -- circulating air to reduce HVAC costs while providing overhead lighting. We replace outdated fans, install new fans where only a light existed before, and upgrade wobbly units with modern, balanced models. Fan-rated junction boxes, proper blade clearance, and secure downrod mounting are included with every installation.</p>

      <div class="split-reverse" data-animate="fade-up">
        <div class="service-img">
          <div class="before-after-large">
            <div class="ba-label">Before &amp; After</div>
            <img src="https://i.imgur.com/E7TKmsh.jpeg" alt="Before and after: recessed light replaced with modern industrial ceiling fan with light kit" width="800" height="600" loading="lazy">
          </div>
        </div>
        <div>
          <h3>Recessed Light to Full Ceiling Fan</h3>
          <p class="prose" style="margin-bottom: var(--space-lg);">Converting a recessed light to a ceiling fan requires replacing the housing with a fan-rated box and running a dedicated switch leg if you want independent fan and light controls. The result is a room that stays comfortable year-round -- fans push warm air down in winter and create a cooling breeze in summer, reducing energy bills by up to 30% on HVAC costs for Richmond homeowners dealing with Virginia's humid summers.</p>

          <ul class="icon-list">
            <li><i data-lucide="check-circle" style="width:18px;height:18px;"></i><p>Fan-rated junction box installation</p></li>
            <li><i data-lucide="check-circle" style="width:18px;height:18px;"></i><p>Proper blade clearance verification</p></li>
            <li><i data-lucide="check-circle" style="width:18px;height:18px;"></i><p>Remote control or wall switch options</p></li>
            <li><i data-lucide="check-circle" style="width:18px;height:18px;"></i><p>Integrated LED light kit installation</p></li>
          </ul>
        </div>
      </div>

      <div class="split" style="margin-top: var(--space-3xl);" data-animate="fade-up">
        <div>
          <h3>Fan Upgrades &amp; Replacements</h3>
          <p class="prose">Old ceiling fans with pull chains, noisy motors, and wobbling blades are more than an annoyance -- they are an energy waste. Modern fans with DC motors run quieter, use less electricity, and come with remote controls and dimmable LED light kits. We remove the old unit, inspect the mounting hardware, and install the replacement with proper balancing. If the existing box is not fan-rated, we upgrade it before mounting the new fan. In older Henrico County and Hanover homes, we frequently find lightweight boxes that were never designed to support a fan -- catching that before installation prevents dangerous failures down the road.</p>
        </div>
        <div class="service-img">
          <div class="before-after-large">
            <div class="ba-label">Before &amp; After</div>
            <img src="https://i.imgur.com/1W5jbgW.jpeg" alt="Before and after: old brown ceiling fan replaced with modern fan with crystal light kit" width="800" height="600" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- TV Mounting Section -->
  <section class="bg-alt">
    <div class="container">
      <span class="eyebrow-label" data-animate="fade-up">TV Wall Mounting</span>
      <h2 data-animate="fade-up">Clean Walls, Hidden Wires, Perfect Placement</h2>
      <p class="prose" style="margin-bottom: var(--space-2xl);" data-animate="fade-up">A wall-mounted TV looks sleek -- until you see the power cord and HDMI cable dangling down the wall. We mount TVs with full in-wall wire concealment: a recessed outlet installed behind the TV, low-voltage wire channels routed through the wall cavity, and a clean finish with no visible cables. The result is a floating-screen look that actually stays clean, not a temporary setup held together with cord covers and tape.</p>

      <div class="service-gallery" data-animate="fade-up" data-stagger>
        <div class="service-gallery-item">
          <img src="https://i.imgur.com/10tWIKJ.jpeg" alt="TV mounting bracket with 4-panel arm and in-wall wiring detail" width="800" height="600" loading="lazy">
          <div class="gallery-caption">Bracket &amp; in-wall wiring</div>
        </div>
        <div class="service-gallery-item">
          <img src="https://i.imgur.com/DSzLdu6.jpeg" alt="TV bracket arm positioning detail during wall mount installation" width="800" height="600" loading="lazy">
          <div class="gallery-caption">Articulating arm positioning</div>
        </div>
        <div class="service-gallery-item">
          <img src="https://i.imgur.com/GUyKwFV.jpeg" alt="Before and after: dangling TV cords replaced with clean hidden-wire wall mount" width="800" height="600" loading="lazy">
          <div class="gallery-caption">Before &amp; after: hidden wires</div>
        </div>
      </div>

      <div class="split" style="margin-top: var(--space-2xl);" data-animate="fade-up">
        <div>
          <h3>The Concealed-Wiring Process</h3>
          <p class="prose" style="margin-bottom: var(--space-lg);">Hiding TV wires properly requires more than fishing a cable through drywall. We cut precise access points behind the TV and near the floor, install a UL-listed low-voltage wire channel inside the wall cavity, and add a recessed power outlet directly behind the TV so nothing protrudes from the wall surface. HDMI, coaxial, and speaker wires all route through the same channel for a single clean path.</p>
          <p class="prose">For homes in King William, New Kent, and Charles City counties with older wall construction, we adapt the approach to work with plaster, lathe, or unconventional stud spacing -- ensuring a secure mount regardless of what the walls are made of.</p>
        </div>
        <div class="service-img">
          <div class="before-after-large">
            <div class="ba-label">Before &amp; After</div>
            <img src="https://i.imgur.com/aGK6VEK.jpeg" alt="Before and after: bare TV bracket replaced with finished concealed-outlet wall mount" width="800" height="600" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Answer Block -->
  <section class="bg-alt">
    <div class="container" data-animate="fade-up">
      <div class="answer-block">
        <h3>How Much Does a Light Fixture or Ceiling Fan Installation Cost?</h3>
        <p class="prose">Basic fixture swaps (replacing one light with another of similar weight and wiring) typically cost $150–$250 including labor. Heavier fixtures like chandeliers that require junction box upgrades run $250–$400. Ceiling fan installation ranges from $200–$350 depending on whether existing wiring supports a fan. TV wall mounting with full in-wall wire concealment runs $300–$500 including outlet installation behind the TV.</p>
      </div>
    </div>
  </section>

  <!-- Process Steps -->
  <section style="background: var(--bg);">
    <div class="container">
      <h2 style="text-align:center; margin-bottom: var(--space-2xl);" data-animate="fade-up">How Every Design Service Project Works</h2>
      <div class="process-steps" data-animate="fade-up" data-stagger>
        <div class="process-step">
          <h3>Fixture Selection Consultation</h3>
          <p>We discuss your style preferences, review the existing electrical setup, and help you choose fixtures that fit the room's scale and your budget. If you have already purchased fixtures, we review the specs and mounting requirements.</p>
        </div>
        <div class="process-step">
          <h3>Electrical Assessment</h3>
          <p>Before any installation, we check the junction box rating, wiring condition, switch configuration, and load capacity. Junction boxes are upgraded to fan-rated or chandelier-rated as needed.</p>
        </div>
        <div class="process-step">
          <h3>Professional Installation</h3>
          <p>Fixtures are mounted securely with proper electrical connections. TV mounts are anchored to studs with in-wall wire routing. Ceiling fans are balanced and tested at all speeds.</p>
        </div>
        <div class="process-step">
          <h3>Clean Finish &amp; Testing</h3>
          <p>Every installation is tested for operation, stability, and safety. Wall patches are finished, switch plates are installed, and the workspace is left clean. We walk through the controls and operation with you before leaving.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQs -->
  <section class="faq-section">
    <div class="container">
      <h2 style="text-align:center; margin-bottom: var(--space-2xl);" data-animate="fade-up">Design Services FAQs</h2>
      <div class="faq-list" data-animate="fade-up">
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            Can you install a heavy chandelier where a basic light was?
            <i data-lucide="chevron-down"></i>
          </button>
          <div class="faq-answer">
            <div class="faq-answer-inner">
              Yes, but it may require reinforcing the ceiling junction box. Standard electrical boxes support up to 50 lbs; heavier fixtures need a fan-rated or chandelier-rated box anchored directly to a ceiling joist. We assess every installation point and upgrade the support structure as needed before mounting the fixture.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            How do you hide TV wires inside the wall?
            <i data-lucide="chevron-down"></i>
          </button>
          <div class="faq-answer">
            <div class="faq-answer-inner">
              We cut access holes behind the TV and near the floor, run a UL-listed low-voltage wire channel through the wall cavity, and install a recessed outlet behind the TV. HDMI, coaxial, and speaker wires all route through the same channel. The result is a completely clean wall with zero visible cables.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            Do you handle the electrical work for fixture installations?
            <i data-lucide="chevron-down"></i>
          </button>
          <div class="faq-answer">
            <div class="faq-answer-inner">
              Yes, all fixture installations include proper electrical connections -- wiring, grounding, and switch configuration. For new circuits, panel upgrades, or complex wiring changes that go beyond fixture swaps, we coordinate with licensed electricians to ensure full code compliance.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Related Services + Last Updated -->
  <section class="bg-alt">
    <div class="container" data-animate="fade-up">
      <h3 style="margin-bottom: var(--space-lg);">Related Services</h3>
      <div class="related-services">
        <a href="/services/bathroom-remodeling" class="related-chip">Bathroom Remodeling</a>
        <a href="/services/kitchen-remodeling" class="related-chip">Kitchen Remodeling</a>
        <a href="/services/building-additions-new-structures" class="related-chip">Building Additions &amp; New Structures</a>
        <a href="/services/common-area-remodeling" class="related-chip">Common Area Remodeling</a>
      </div>
      <p class="last-updated">Last Updated: <?php echo date('F Y'); ?></p>
    </div>
  </section>

  <!-- Closing CTA -->
  <section class="closing-cta">
    <div class="container" data-animate="fade-up">
      <h2>Ready to Upgrade Your Fixtures?</h2>
      <p class="prose-centered">Light fixtures, ceiling fans, or TV mounting -- most installations are completed in a single visit. Call or send us a message for a free estimate.</p>
      <a href="/contact" class="btn-primary">Get Your Free Estimate <i data-lucide="chevron-right" style="width:18px;height:18px;"></i></a>
      <a href="tel:8042186459" class="cta-phone"><i data-lucide="phone" style="width:20px;height:20px;vertical-align:middle;"></i> (804) 218-6459</a>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
