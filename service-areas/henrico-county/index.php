<?php
$pageTitle       = "Home Renovation & Landscaping in Henrico County, VA | Greenstone Home Solutions";
$pageDescription = "Kitchen remodeling, bathroom renovation, patios, decks, and landscape design for Henrico County homeowners. Short Pump, Glen Allen, Tuckahoe, West End. Call (804) 218-6459.";
$canonicalUrl    = "https://greenstonehomesolutions.com/service-areas/henrico-county";
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
      {"@type": "ListItem", "position": 3, "name": "Henrico County", "item": "https://greenstonehomesolutions.com/service-areas/henrico-county"}
    ]
  },
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "What renovation projects are most common in Henrico County?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Kitchen and bathroom remodels are the most requested in Henrico County, especially in established neighborhoods like Tuckahoe and the West End where homes from the 1970s-1980s have solid bones but dated interiors. Outdoor living additions — patios, pergolas, and landscape redesigns — are increasingly popular in the Short Pump corridor."
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
        <a href="/">Home</a><span class="sep">/</span><a href="/service-areas">Service Areas</a><span class="sep">/</span><span class="current">Henrico County</span>
      </nav>
      <h1>Home Renovation & Landscaping in Henrico County, VA</h1>
      <p class="prose">Kitchen remodeling, bathroom upgrades, patio construction, deck builds, and full landscape redesigns for homeowners across Henrico County — from Short Pump to the West End.</p>
      <a href="tel:8042186459" class="btn-primary" style="margin-top: var(--space-lg);"><i data-lucide="phone" style="width:18px;height:18px;"></i> (804) 218-6459</a>
    </div>
  </section>

  <!-- Answer-First Intro (Split: text left, image right = kitchen) -->
  <section style="background: var(--bg);">
    <div class="container">
      <div class="split">
        <div>
          <p class="prose" style="margin-bottom: var(--space-lg);"><strong>Greenstone Home Solutions provides home renovation, outdoor construction, and landscape design services for homeowners in Henrico County, VA.</strong> Greenstone Home Solutions is a licensed and insured remodeling and landscaping company based in Richmond, serving Henrico County communities including Short Pump, Glen Allen, Innsbrook, Tuckahoe, and the West End.</p>
          <p class="prose" style="margin-bottom: var(--space-lg);">Henrico County surrounds Richmond to the north and west, and its housing stock reflects decades of suburban growth. The Tuckahoe and West End neighborhoods are filled with ranches and colonials built in the 1960s through 1980s — homes with good floor plans and solid construction, but kitchens, bathrooms, and outdoor spaces that have not been updated in 30 or 40 years. Homeowners in these areas are investing in renovation rather than relocation because the locations are established, the lots are generous, and the bones are worth building on.</p>
          <p class="prose">If you are searching for home renovation near me in Henrico County, we handle everything from a single kitchen remodel to a full outdoor living transformation with patios, pergolas, and landscape redesign.</p>
        </div>
        <div class="service-img">
          <img src="https://i.imgur.com/rD9LF6J.jpeg" alt="Completed kitchen remodel in Henrico County VA with modern finishes and updated cabinetry" width="800" height="600" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- All Services -->
  <section class="bg-alt">
    <div class="container" data-animate="fade-up">
      <span class="eyebrow-label">What We Do in Henrico County</span>
      <h2 style="margin-bottom: var(--space-lg);">All Services Available in Henrico County</h2>
      <p class="prose" style="margin-bottom: var(--space-2xl);">We bring our full range of interior renovation, outdoor construction, and landscape services to every neighborhood in Henrico County. One contractor, one point of contact, from design through completion.</p>
      <div class="grid-3" data-stagger>
        <a href="/services/kitchen-remodeling" class="card" style="text-decoration:none;">
          <i data-lucide="chef-hat" style="width:28px;height:28px;color:var(--accent);margin-bottom:var(--space-sm);"></i>
          <h3>Kitchen Remodeling</h3>
          <p>Backsplash, countertops, cabinetry, and full kitchen renovations.</p>
        </a>
        <a href="/services/bathroom-remodeling" class="card" style="text-decoration:none;">
          <i data-lucide="bath" style="width:28px;height:28px;color:var(--accent);margin-bottom:var(--space-sm);"></i>
          <h3>Bathroom Remodeling</h3>
          <p>Tile, vanity, shower, and complete bathroom renovations.</p>
        </a>
        <a href="/services/bedroom-remodeling" class="card" style="text-decoration:none;">
          <i data-lucide="bed" style="width:28px;height:28px;color:var(--accent);margin-bottom:var(--space-sm);"></i>
          <h3>Bedroom Remodeling</h3>
          <p>Closet systems, flooring, layout updates, and loft conversions.</p>
        </a>
        <a href="/services/laundry-room-remodeling" class="card" style="text-decoration:none;">
          <i data-lucide="washing-machine" style="width:28px;height:28px;color:var(--accent);margin-bottom:var(--space-sm);"></i>
          <h3>Laundry Room Remodeling</h3>
          <p>Custom cabinetry, utility sinks, folding stations, and storage.</p>
        </a>
        <a href="/services/common-area-remodeling" class="card" style="text-decoration:none;">
          <i data-lucide="sofa" style="width:28px;height:28px;color:var(--accent);margin-bottom:var(--space-sm);"></i>
          <h3>Common Area Remodeling</h3>
          <p>Living rooms, dining rooms, entryways, and open-concept conversions.</p>
        </a>
        <a href="/services/building-additions-new-structures" class="card" style="text-decoration:none;">
          <i data-lucide="building" style="width:28px;height:28px;color:var(--accent);margin-bottom:var(--space-sm);"></i>
          <h3>Building Additions</h3>
          <p>Room additions, sunrooms, and new structures on your property.</p>
        </a>
        <a href="/services/deck-balcony-construction" class="card" style="text-decoration:none;">
          <i data-lucide="fence" style="width:28px;height:28px;color:var(--accent);margin-bottom:var(--space-sm);"></i>
          <h3>Deck & Balcony Construction</h3>
          <p>Composite and wood decks, railings, and elevated balconies.</p>
        </a>
        <a href="/services/patio-porch-terrace-construction" class="card" style="text-decoration:none;">
          <i data-lucide="tent" style="width:28px;height:28px;color:var(--accent);margin-bottom:var(--space-sm);"></i>
          <h3>Patio, Porch & Terrace</h3>
          <p>Paver patios, covered porches, pergolas, and outdoor living areas.</p>
        </a>
        <a href="/services/detached-garage-construction" class="card" style="text-decoration:none;">
          <i data-lucide="warehouse" style="width:28px;height:28px;color:var(--accent);margin-bottom:var(--space-sm);"></i>
          <h3>Detached Garage Construction</h3>
          <p>Custom garages, workshops, and storage structures.</p>
        </a>
        <a href="/services/greenscape-landscape-design" class="card" style="text-decoration:none;">
          <i data-lucide="trees" style="width:28px;height:28px;color:var(--accent);margin-bottom:var(--space-sm);"></i>
          <h3>Greenscape & Landscape Design</h3>
          <p>Planting beds, hardscape, grading, and full landscape plans.</p>
        </a>
        <a href="/services/irrigation-design-installation" class="card" style="text-decoration:none;">
          <i data-lucide="droplets" style="width:28px;height:28px;color:var(--accent);margin-bottom:var(--space-sm);"></i>
          <h3>Irrigation Design & Installation</h3>
          <p>Sprinkler systems, drip irrigation, and smart controllers.</p>
        </a>
        <a href="/services/lawn-care-maintenance" class="card" style="text-decoration:none;">
          <i data-lucide="leaf" style="width:28px;height:28px;color:var(--accent);margin-bottom:var(--space-sm);"></i>
          <h3>Lawn Care & Maintenance</h3>
          <p>Mowing, fertilization, aeration, and seasonal cleanup.</p>
        </a>
        <a href="/services/design-services" class="card" style="text-decoration:none;">
          <i data-lucide="pencil-ruler" style="width:28px;height:28px;color:var(--accent);margin-bottom:var(--space-sm);"></i>
          <h3>Design Services</h3>
          <p>2D/3D renderings, material selection, and project planning.</p>
        </a>
      </div>
    </div>
  </section>

  <!-- Mid CTA -->
  <section class="mid-cta">
    <div class="container" data-animate="fade-up" style="text-align:center;">
      <h2>Henrico County Homeowners — Get a Free Estimate</h2>
      <p class="prose-centered">Tell us about your project and we will provide a detailed scope and quote — no obligation, no pressure.</p>
      <a href="/contact" class="btn-primary">Request a Free Estimate <i data-lucide="chevron-right" style="width:18px;height:18px;"></i></a>
      <a href="tel:8042186459" class="cta-phone"><i data-lucide="phone" style="width:20px;height:20px;vertical-align:middle;"></i> (804) 218-6459</a>
    </div>
  </section>

  <!-- Outdoor Living in Short Pump & the West End (Split Reverse: image left = patio, text right) -->
  <section style="background: var(--bg);">
    <div class="container">
      <div class="split-reverse">
        <div class="service-img" data-animate="wipe-right">
          <img src="https://i.imgur.com/jOXKoUD.jpeg" alt="Patio and pergola construction for Henrico County home near Short Pump VA" width="800" height="600" loading="lazy">
        </div>
        <div>
          <span class="eyebrow-label" data-animate="fade-up">Outdoor Living</span>
          <h2 data-animate="fade-up">Why Henrico County Homeowners Are Investing in Outdoor Spaces</h2>
          <p class="prose" style="margin-bottom: var(--space-lg);" data-animate="fade-up">The Short Pump corridor and West End of Henrico County have seen a surge in outdoor living projects over the past several years. Homeowners with large suburban lots along West Broad Street, Pump Road, and the Wyndham area are adding patios, pergolas, and complete landscape redesigns that extend their living space outside. The mild Virginia climate makes three-season outdoor rooms practical, and a well-built patio or deck adds genuine value to these properties.</p>
          <p class="prose" data-animate="fade-up">We design and build outdoor spaces that match the scale and style of Henrico County homes — whether that is a flagstone patio off a Glen Allen colonial, a covered pergola for a Short Pump contemporary, or a multi-level deck for a walkout basement in the Wyndham neighborhood. Every project includes grading assessment, drainage planning, and material selection suited to central Virginia's freeze-thaw cycle.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Local Context — Henrico Neighborhoods -->
  <section class="bg-alt">
    <div class="container" data-animate="fade-up">
      <h2 style="margin-bottom: var(--space-lg);">Neighborhoods We Serve Across Henrico County</h2>
      <p class="prose" style="margin-bottom: var(--space-lg);">Each part of Henrico County has its own housing character, and we tailor our approach accordingly. The Tuckahoe area along River Road features mid-century ranches and split-levels where kitchen and bathroom remodels are the most common entry point — these homes were built with quality materials but layouts and finishes that no longer match how families use their homes today.</p>
      <p class="prose" style="margin-bottom: var(--space-lg);">In Glen Allen and the Innsbrook area, we see more townhome and newer-construction projects where homeowners want to personalize builder-grade finishes. Short Pump properties, especially those in newer subdivisions along Pouncey Tract Road and Nuckols Road, tend toward outdoor living additions — the lots are large enough for meaningful patios, pergolas, and landscape features that create a true backyard destination.</p>
      <p class="prose">The West End remains one of Henrico County's most active renovation markets. Homes along Patterson Avenue and in the near-West End neighborhoods are well-located, well-built, and worth the investment. We regularly handle multi-room interior renovations combined with outdoor upgrades for West End homeowners who want to modernize their property without leaving a neighborhood they love.</p>
    </div>
  </section>

  <!-- Answer Block -->
  <section style="background: var(--bg);">
    <div class="container" data-animate="fade-up">
      <div class="answer-block">
        <h2>What Renovation Projects Are Most Common in Henrico County?</h2>
        <p class="prose">Kitchen and bathroom remodels are the most requested in Henrico County, especially in established neighborhoods like Tuckahoe and the West End where homes from the 1970s through 1980s have solid bones but dated interiors. Outdoor living additions — patios, pergolas, and landscape redesigns — are increasingly popular in the Short Pump corridor where larger lots make ambitious outdoor projects practical. Many Henrico County homeowners combine interior and exterior work into a single phased project.</p>
      </div>
    </div>
  </section>

  <!-- FAQs -->
  <section class="faq-section">
    <div class="container">
      <h2 style="text-align:center; margin-bottom: var(--space-2xl);" data-animate="fade-up">Henrico County Renovation FAQs</h2>
      <div class="faq-list" data-animate="fade-up">
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            What renovation projects are most common in Henrico County?
            <i data-lucide="chevron-down"></i>
          </button>
          <div class="faq-answer">
            <div class="faq-answer-inner">
              Kitchen and bathroom remodels are the most requested in Henrico County, especially in established neighborhoods like Tuckahoe and the West End where homes from the 1970s-1980s have solid bones but dated interiors. Outdoor living additions — patios, pergolas, and landscape redesigns — are increasingly popular in the Short Pump corridor.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Related Counties -->
  <section class="bg-alt">
    <div class="container" data-animate="fade-up">
      <h3 style="margin-bottom: var(--space-lg);">Other Counties We Serve</h3>
      <div class="related-services">
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
      <h2>Ready to Start Your Henrico County Project?</h2>
      <p class="prose-centered">Whether it is a kitchen remodel in Tuckahoe, a patio build in Short Pump, or a landscape redesign in Glen Allen — one call gets the conversation started.</p>
      <a href="/contact" class="btn-primary">Schedule a Consultation <i data-lucide="chevron-right" style="width:18px;height:18px;"></i></a>
      <a href="tel:8042186459" class="cta-phone"><i data-lucide="phone" style="width:20px;height:20px;vertical-align:middle;"></i> (804) 218-6459</a>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
