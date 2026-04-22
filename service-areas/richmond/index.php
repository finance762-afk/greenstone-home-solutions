<?php
$pageTitle       = "Home Renovation & Landscape Design in Richmond, VA | Greenstone Home Solutions";
$pageDescription = "Historic home renovation, kitchen and bathroom remodeling, courtyard landscape design for Richmond, VA homeowners. Fan District, Church Hill, Museum District. Call (804) 218-6459.";
$canonicalUrl    = "https://greenstonehomesolutions.com/service-areas/richmond";
$ogImage         = "https://i.imgur.com/rD9LF6J.jpeg";
$currentPage     = "service-areas";
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
      {"@type": "ListItem", "position": 2, "name": "Service Areas", "item": "https://greenstonehomesolutions.com/service-areas"},
      {"@type": "ListItem", "position": 3, "name": "Richmond", "item": "https://greenstonehomesolutions.com/service-areas/richmond"}
    ]
  },
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "Can you renovate a historic home in a Richmond historic district?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. We regularly work on homes in the Fan District, Church Hill, Museum District, and Jackson Ward. Historic district projects require coordination with the Richmond Commission of Architectural Review (CAR) for exterior work visible from the street. We handle that process alongside the renovation itself — submitting drawings, attending hearings when needed, and ensuring all exterior materials meet district guidelines. Interior renovations generally do not require CAR review."
        }
      },
      {
        "@type": "Question",
        "name": "What is different about renovating an older Richmond rowhouse?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Richmond rowhouses and early 20th-century single-families come with plaster walls, original trim and molding, cast-iron plumbing, knob-and-tube remnants, and settled foundations. We assess all of this during the estimate so there are no surprises mid-project. The goal is always to preserve architectural character — original floors, trim, fireplaces — while modernizing kitchens, bathrooms, and mechanical systems. Older homes reward a patient contractor; they punish a rushed one."
        }
      }
    ]
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
        <a href="/">Home</a><span class="sep">/</span><a href="/service-areas">Service Areas</a><span class="sep">/</span><span class="current">Richmond</span>
      </nav>
      <h1>Remodeling &amp; Landscape Design in Richmond, Virginia</h1>
      <p class="prose">Historic-home renovation, kitchen and bathroom remodeling, courtyard landscape and hardscape design for homeowners across Richmond City — from the Fan to Church Hill to Museum District.</p>
      <a href="tel:8042186459" class="btn-primary" style="margin-top: var(--space-lg);"><i data-lucide="phone" style="width:18px;height:18px;"></i> (804) 218-6459</a>
    </div>
  </section>

  <!-- Answer-First Intro (Split: text left, image right) -->
  <section style="background: var(--bg);">
    <div class="container">
      <div class="split">
        <div>
          <p class="prose" style="margin-bottom: var(--space-lg);"><strong>Greenstone Home Solutions provides remodeling, landscaping, and hardscaping services in Richmond, Virginia.</strong> Greenstone Home Solutions is a licensed and insured remodeling and landscape design company based in Richmond, working with homeowners in the Fan District, Church Hill, Museum District, Jackson Ward, Shockoe Bottom, Carytown, Windsor Farms, Northside, and the Southside.</p>
          <p class="prose" style="margin-bottom: var(--space-lg);">Richmond is a city built in layers. Rowhouses from the 1890s sit next to Victorians, which sit next to early 20th-century single-families, which sit next to post-war bungalows. Each generation of housing brings its own renovation challenges — plaster walls in the Fan, cast-iron plumbing in Church Hill, tiny courtyards that need to earn every square foot, and historic-district review for anything visible from the street. Generic contractors struggle with this. We do not.</p>
          <p class="prose">If you are searching for home renovation near me in Richmond, we handle kitchen and bathroom remodels in historic rowhouses, interior updates that preserve original architectural character, and courtyard landscape designs that turn narrow city lots into genuine outdoor living space.</p>
        </div>
        <div class="service-img" data-animate="wipe-right">
          <img src="https://i.imgur.com/rD9LF6J.jpeg" alt="Richmond VA kitchen renovation with subway tile backsplash and granite counters by Greenstone Home Solutions" width="800" height="600" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- Historic Districts (Split-Reverse: image left, text right) -->
  <section class="bg-alt">
    <div class="container">
      <div class="split-reverse">
        <div class="service-img" data-animate="wipe-right">
          <img src="https://i.imgur.com/s6CaPFG.jpeg" alt="Hallway and landing renovation in a historic Richmond VA rowhouse by Greenstone Home Solutions" width="800" height="600" loading="lazy">
        </div>
        <div>
          <span class="eyebrow-label" data-animate="fade-up">Historic Districts</span>
          <h2 data-animate="fade-up">Renovating in the Fan, Church Hill &amp; Museum District</h2>
          <p class="prose" style="margin-bottom: var(--space-lg);" data-animate="fade-up">The Fan District runs west of downtown Richmond along Monument Avenue, Grove Avenue, and Hanover Avenue — blocks of late 19th and early 20th-century rowhouses that define the city's architectural identity. Church Hill, east of downtown near the James River, holds an even older housing stock. The Museum District, Jackson Ward, and Shockoe Bottom each carry their own protected character. Any exterior work visible from the street in these districts runs through the Richmond Commission of Architectural Review. We handle the CAR submission process as part of the project &mdash; drawings, material selections, and hearings when needed.</p>
          <p class="prose" data-animate="fade-up">Interior renovations in a Richmond historic home are a different craft than a suburban remodel. Plaster walls hide century-old framing. Cast-iron drain stacks need to be evaluated before any bathroom work. Original heart pine flooring can almost always be preserved with proper care. Our approach is to modernize kitchens, bathrooms, and mechanical systems while protecting the architectural details &mdash; trim, medallions, fireplaces, transom windows &mdash; that make the home worth renovating in the first place.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Mid CTA -->
  <section class="mid-cta">
    <div class="container" data-animate="fade-up" style="text-align:center;">
      <h2>Richmond Historic &amp; City Home Projects &mdash; Free Estimates</h2>
      <p class="prose-centered">Tell us about your Richmond property and we will come out, walk the project with you, and put together a detailed scope and quote. No pressure, no cost.</p>
      <a href="/contact" class="btn-primary">Request a Free Estimate <i data-lucide="chevron-right" style="width:18px;height:18px;"></i></a>
      <a href="tel:8042186459" class="cta-phone"><i data-lucide="phone" style="width:20px;height:20px;vertical-align:middle;"></i> (804) 218-6459</a>
    </div>
  </section>

  <!-- All Services -->
  <section style="background: var(--bg);">
    <div class="container" data-animate="fade-up">
      <span class="eyebrow-label">What We Do in Richmond</span>
      <h2 style="margin-bottom: var(--space-lg);">Services Available for Richmond Homeowners</h2>
      <p class="prose" style="margin-bottom: var(--space-2xl);">From a full kitchen remodel in a Fan District rowhouse to a courtyard redesign behind a Church Hill Victorian, one team handles the work from first measurement to final walkthrough.</p>
      <div class="grid-3" data-stagger>
        <a href="/services/kitchen-remodeling" class="card" style="text-decoration:none;">
          <i data-lucide="chef-hat" style="width:28px;height:28px;color:var(--accent);margin-bottom:var(--space-sm);"></i>
          <h3>Kitchen Remodeling</h3>
          <p>Galley-kitchen openings, custom cabinetry, backsplash, countertops &mdash; designed for historic and contemporary Richmond homes.</p>
        </a>
        <a href="/services/bathroom-remodeling" class="card" style="text-decoration:none;">
          <i data-lucide="bath" style="width:28px;height:28px;color:var(--accent);margin-bottom:var(--space-sm);"></i>
          <h3>Bathroom Remodeling</h3>
          <p>Tile showers, vanity upgrades, and full bathroom renovations in older Richmond homes where plumbing routing matters.</p>
        </a>
        <a href="/services/common-area-remodeling" class="card" style="text-decoration:none;">
          <i data-lucide="sofa" style="width:28px;height:28px;color:var(--accent);margin-bottom:var(--space-sm);"></i>
          <h3>Common Area Remodeling</h3>
          <p>Living rooms, parlors, entryways, and stair landings &mdash; preserving character while bringing layout and finish into the present.</p>
        </a>
        <a href="/services/bedroom-remodeling" class="card" style="text-decoration:none;">
          <i data-lucide="bed" style="width:28px;height:28px;color:var(--accent);margin-bottom:var(--space-sm);"></i>
          <h3>Bedroom Remodeling</h3>
          <p>Flooring, trim, built-ins, and closet redesign for Richmond bedrooms that need modernization without losing architectural detail.</p>
        </a>
        <a href="/services/patio-porch-terrace-construction" class="card" style="text-decoration:none;">
          <i data-lucide="tent" style="width:28px;height:28px;color:var(--accent);margin-bottom:var(--space-sm);"></i>
          <h3>Patios, Porches &amp; Terraces</h3>
          <p>Small-lot courtyard patios, front porch rebuilds, and terraced hardscape that fits Richmond&rsquo;s tight urban geometry.</p>
        </a>
        <a href="/services/greenscape-landscape-design" class="card" style="text-decoration:none;">
          <i data-lucide="trees" style="width:28px;height:28px;color:var(--accent);margin-bottom:var(--space-sm);"></i>
          <h3>Greenscape &amp; Landscape Design</h3>
          <p>City courtyards, rowhouse backyards, and planting plans built around partial shade and small-space constraints.</p>
        </a>
        <a href="/services/irrigation-design-installation" class="card" style="text-decoration:none;">
          <i data-lucide="droplets" style="width:28px;height:28px;color:var(--accent);margin-bottom:var(--space-sm);"></i>
          <h3>Irrigation &amp; Drainage</h3>
          <p>Targeted drip and spray zones for narrow city lots, plus downspout drainage solutions for historic foundations.</p>
        </a>
        <a href="/services/lawn-care-maintenance" class="card" style="text-decoration:none;">
          <i data-lucide="leaf" style="width:28px;height:28px;color:var(--accent);margin-bottom:var(--space-sm);"></i>
          <h3>Lawn Care &amp; Maintenance</h3>
          <p>Scheduled lawn service for Richmond properties in Windsor Farms, Northside, Southside, and the West End.</p>
        </a>
        <a href="/services/design-services" class="card" style="text-decoration:none;">
          <i data-lucide="layout-grid" style="width:28px;height:28px;color:var(--accent);margin-bottom:var(--space-sm);"></i>
          <h3>Design Services</h3>
          <p>Lighting, TV mounting with hidden wiring, and interior design consultation for Richmond renovation projects.</p>
        </a>
      </div>
    </div>
  </section>

  <!-- Neighborhoods Narrative -->
  <section class="bg-alt">
    <div class="container" data-animate="fade-up">
      <h2 style="margin-bottom: var(--space-lg);">Renovation Work Across Richmond Neighborhoods</h2>
      <p class="prose" style="margin-bottom: var(--space-lg);">Carytown and the Museum District carry many of the city&rsquo;s tidiest renovation projects &mdash; kitchens and bathrooms in homes with good bones and owners who want finish-level detail. The Fan District and Monument Avenue blocks require the patience a century-old home demands: plaster repair, trim restoration, and interior layouts opened up thoughtfully without erasing what made the home worth buying.</p>
      <p class="prose" style="margin-bottom: var(--space-lg);">Church Hill and Jackson Ward sit at the older end of Richmond&rsquo;s housing stock. Many projects here combine kitchen and bathroom renovation with systems updates &mdash; plumbing, electrical, HVAC &mdash; that have to be coordinated carefully to protect original finishes. Shockoe Bottom renovations lean contemporary as owners modernize upper-floor lofts and rowhouse conversions.</p>
      <p class="prose">The Northside, Windsor Farms, and West End edge of the city hold larger lots and more varied architecture. Here the work expands to include full outdoor living &mdash; a paver patio behind a Windsor Farms home, a landscape redesign on a Northside property with room to grow, or a courtyard hardscape that finally uses the backyard of a Carytown cottage. One contractor, one relationship, consistent craftsmanship from the James River to the city&rsquo;s western edge.</p>
    </div>
  </section>

  <!-- Answer Block -->
  <section style="background: var(--bg);">
    <div class="container" data-animate="fade-up">
      <div class="answer-block">
        <h2>How much does a historic Richmond kitchen remodel cost?</h2>
        <p class="prose">Kitchen remodels in Richmond City typically run $18,000&ndash;$45,000 for historic-district homes, depending on scope. A cabinet and countertop refresh with new backsplash and appliances lands on the lower end. A full gut renovation &mdash; moving plumbing, opening walls between a galley kitchen and an adjacent room, updating electrical, and installing custom cabinetry that respects original trim profiles &mdash; lands on the higher end. Older Richmond homes sometimes require additional plaster repair or plumbing rerouting that we identify during our first walkthrough so there are no mid-project surprises.</p>
      </div>
    </div>
  </section>

  <!-- FAQs -->
  <section class="faq-section bg-alt">
    <div class="container">
      <h2 style="text-align:center; margin-bottom: var(--space-2xl);" data-animate="fade-up">Richmond Renovation FAQs</h2>
      <div class="faq-list" data-animate="fade-up">
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            Can you renovate a historic home in a Richmond historic district?
            <i data-lucide="chevron-down"></i>
          </button>
          <div class="faq-answer">
            <div class="faq-answer-inner">
              <p class="prose">Yes. We regularly work on homes in the Fan District, Church Hill, Museum District, and Jackson Ward. Historic district projects require coordination with the Richmond Commission of Architectural Review (CAR) for exterior work visible from the street. We handle that process alongside the renovation itself &mdash; submitting drawings, attending hearings when needed, and ensuring all exterior materials meet district guidelines. Interior renovations generally do not require CAR review.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            What is different about renovating an older Richmond rowhouse?
            <i data-lucide="chevron-down"></i>
          </button>
          <div class="faq-answer">
            <div class="faq-answer-inner">
              <p class="prose">Richmond rowhouses and early 20th-century single-families come with plaster walls, original trim and molding, cast-iron plumbing, knob-and-tube remnants, and settled foundations. We assess all of this during the estimate so there are no surprises mid-project. The goal is always to preserve architectural character &mdash; original floors, trim, fireplaces &mdash; while modernizing kitchens, bathrooms, and mechanical systems. Older homes reward a patient contractor; they punish a rushed one.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Related Counties -->
  <section style="background: var(--bg);">
    <div class="container" data-animate="fade-up">
      <h3 style="margin-bottom: var(--space-lg);">Other Areas We Serve</h3>
      <div class="related-services">
        <a href="/service-areas/chesterfield-county" class="related-chip">Chesterfield County</a>
        <a href="/service-areas/henrico-county" class="related-chip">Henrico County</a>
        <a href="/service-areas/hanover-county" class="related-chip">Hanover County</a>
        <a href="/service-areas/king-william-county" class="related-chip">King William County</a>
        <a href="/service-areas/new-kent-county" class="related-chip">New Kent County</a>
        <a href="/service-areas/charles-city-county" class="related-chip">Charles City County</a>
      </div>
      <p class="last-updated">Last Updated: <?php echo date('F Y'); ?></p>
    </div>
  </section>

  <!-- Closing CTA -->
  <section class="closing-cta">
    <div class="container" data-animate="fade-up">
      <h2>Ready to Start Your Richmond Project?</h2>
      <p class="prose-centered">Whether it is a kitchen in the Fan, a bathroom in Church Hill, or a courtyard redesign in the Museum District &mdash; one call gets the conversation started.</p>
      <a href="/contact" class="btn-primary">Schedule a Consultation <i data-lucide="chevron-right" style="width:18px;height:18px;"></i></a>
      <a href="tel:8042186459" class="cta-phone"><i data-lucide="phone" style="width:20px;height:20px;vertical-align:middle;"></i> (804) 218-6459</a>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
