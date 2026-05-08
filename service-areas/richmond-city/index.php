<?php
$pageTitle       = "Home Renovation & Landscaping in Richmond City, VA | Greenstone Home Solutions";
$pageDescription = "Greenstone Home Solutions serves Richmond City, VA — kitchen remodeling, bathroom renovation, landscape design, patio construction, and more. Call (804) 218-6459 for a free estimate.";
$canonicalUrl    = "https://greenstonehomesolutions.com/service-areas/richmond-city";
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
      {"@type": "ListItem", "position": 3, "name": "Richmond City", "item": "https://greenstonehomesolutions.com/service-areas/richmond-city"}
    ]
  },
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "What renovation services does Greenstone offer in Richmond City?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Greenstone Home Solutions provides kitchen remodeling, bathroom renovation, bedroom updates, common area remodeling, patio construction, landscape design, irrigation installation, and lawn care for homeowners throughout Richmond City — including the Fan District, Church Hill, Scott\'s Addition, Manchester, and Museum District neighborhoods."
        }
      },
      {
        "@type": "Question",
        "name": "Do you work on historic homes in Richmond City?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. Many Richmond City neighborhoods feature homes from the early to mid-20th century with original hardwood floors, plaster walls, and character that newer construction cannot replicate. We approach historic Richmond properties with care — preserving what makes them special while modernizing kitchens, bathrooms, and outdoor spaces to meet contemporary expectations."
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
        <a href="/">Home</a><span class="sep">/</span><a href="/service-areas">Service Areas</a><span class="sep">/</span><span class="current">Richmond City</span>
      </nav>
      <h1>Home Renovation & Landscaping in Richmond City, VA</h1>
      <p class="prose">Kitchen remodeling, bathroom upgrades, patio construction, and full landscape design for homeowners across Richmond City — from the Fan District and Church Hill to Scott's Addition and Manchester.</p>
      <a href="tel:8042186459" class="btn-primary" style="margin-top: var(--space-lg);"><i data-lucide="phone" style="width:18px;height:18px;"></i> (804) 218-6459</a>
    </div>
  </section>

  <!-- Answer-First Intro -->
  <section style="background: var(--bg);">
    <div class="container">
      <div class="split">
        <div>
          <p class="prose" style="margin-bottom: var(--space-lg);"><strong>Greenstone Home Solutions provides home renovation, outdoor construction, and landscape design services for homeowners in Richmond City, VA.</strong> We are a licensed and insured remodeling and landscaping company based in Richmond, serving neighborhoods across the city — from established historic areas to revitalized urban corridors.</p>
          <p class="prose" style="margin-bottom: var(--space-lg);">Richmond City is one of the most architecturally diverse urban markets in Virginia. The Fan District and Museum District are lined with rowhouses and detached homes from the 1890s through the 1930s — properties with original hardwood floors, cast iron radiators, and character that newer suburbs cannot replicate. Church Hill and Union Hill feature a similar stock of historic homes undergoing significant renovation activity. Manchester and Scott's Addition attract homeowners drawn to industrial-chic spaces and urban infill construction.</p>
          <p class="prose">If you are searching for home renovation near me in Richmond City, Greenstone brings the same craftsmanship we deliver across the metro area to every project within city limits.</p>
        </div>
        <div class="service-img">
          <img src="https://i.imgur.com/rD9LF6J.jpeg" alt="Kitchen renovation with modern finishes for a Richmond City homeowner by Greenstone Home Solutions" width="800" height="600" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- All Services -->
  <section class="bg-alt">
    <div class="container" data-animate="fade-up">
      <span class="eyebrow-label">What We Do in Richmond City</span>
      <h2 style="margin-bottom: var(--space-lg);">All Services Available in Richmond City</h2>
      <p class="prose" style="margin-bottom: var(--space-2xl);">We bring our full range of interior renovation, outdoor construction, and landscape services to every neighborhood in Richmond City. One contractor, one point of contact, from design through completion.</p>
      <div class="grid-3" data-stagger>
        <a href="/services/kitchen-remodeling" class="card" style="text-decoration:none;">
          <i data-lucide="cooking-pot" style="width:28px;height:28px;color:var(--accent);margin-bottom:var(--space-sm);"></i>
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
          <p>Flooring, built-ins, lighting updates, and layout improvements.</p>
        </a>
        <a href="/services/laundry-room-remodeling" class="card" style="text-decoration:none;">
          <i data-lucide="washing-machine" style="width:28px;height:28px;color:var(--accent);margin-bottom:var(--space-sm);"></i>
          <h3>Laundry Room Remodeling</h3>
          <p>Custom cabinetry, utility sinks, folding stations, and storage.</p>
        </a>
        <a href="/services/common-area-remodeling" class="card" style="text-decoration:none;">
          <i data-lucide="sofa" style="width:28px;height:28px;color:var(--accent);margin-bottom:var(--space-sm);"></i>
          <h3>Common Area Remodeling</h3>
          <p>Living rooms, dining rooms, entryways, and shared spaces.</p>
        </a>
        <a href="/services/patio-porch-terrace-construction" class="card" style="text-decoration:none;">
          <i data-lucide="tent" style="width:28px;height:28px;color:var(--accent);margin-bottom:var(--space-sm);"></i>
          <h3>Patio, Porch & Terrace</h3>
          <p>Paver patios, covered porches, pergolas, and outdoor living areas.</p>
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
          <p>Light fixtures, ceiling fans, TV mounting, and design consultation.</p>
        </a>
      </div>
    </div>
  </section>

  <!-- Mid CTA -->
  <section class="mid-cta">
    <div class="container" data-animate="fade-up" style="text-align:center;">
      <h2>Richmond City Homeowners — Get a Free Estimate</h2>
      <p class="prose-centered">Tell us about your project and we will provide a detailed scope and quote — no obligation, no pressure.</p>
      <a href="/contact" class="btn-primary">Request a Free Estimate <i data-lucide="chevron-right" style="width:18px;height:18px;"></i></a>
      <a href="tel:8042186459" class="cta-phone"><i data-lucide="phone" style="width:20px;height:20px;vertical-align:middle;"></i> (804) 218-6459</a>
    </div>
  </section>

  <!-- Neighborhoods -->
  <section style="background: var(--bg);">
    <div class="container">
      <div class="split-reverse">
        <div class="service-img" data-animate="wipe-right">
          <img src="https://i.imgur.com/qfmHYwo.jpeg" alt="Completed shower remodel in Richmond City VA by Greenstone Home Solutions" width="600" height="800" loading="lazy">
        </div>
        <div>
          <span class="eyebrow-label" data-animate="fade-up">Local Knowledge</span>
          <h2 data-animate="fade-up">Neighborhoods We Serve Across Richmond City</h2>
          <p class="prose" style="margin-bottom: var(--space-lg);" data-animate="fade-up">Richmond City's housing stock varies dramatically by neighborhood, and renovation approach should follow. In the <strong>Fan District</strong> and <strong>Museum District</strong>, we frequently work with row homes and detached Victorians where the goal is modernizing kitchens and baths while respecting original architectural detail — preserving original molding, refinishing hardwood floors, and selecting fixtures that feel at home in a 100-year-old house.</p>
          <p class="prose" style="margin-bottom: var(--space-lg);" data-animate="fade-up"><strong>Church Hill</strong> and <strong>Union Hill</strong> have seen significant renovation activity, and we work with homeowners at various stages — some tackling full gut renovations, others updating individual rooms. <strong>Manchester</strong> attracts a different profile of homeowner: buyers drawn to converted industrial spaces and newer construction who want to personalize their environment with upgraded finishes, outdoor living spaces, and landscape design.</p>
          <p class="prose" data-animate="fade-up"><strong>Scott's Addition</strong>, <strong>Carver</strong>, and <strong>Northside</strong> have smaller yard footprints than suburban properties, but that does not diminish the opportunity for meaningful outdoor work. A well-designed city patio, perennial planting bed, or backyard privacy screen can transform an urban outdoor space completely.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Answer Block -->
  <section class="bg-alt">
    <div class="container" data-animate="fade-up">
      <div class="answer-block">
        <h2>What Renovation Projects Are Most Common in Richmond City?</h2>
        <p class="prose">Kitchen and bathroom remodels are the most requested in Richmond City, particularly in the Fan, Museum District, and Church Hill where homes have original bones worth investing in but outdated interiors. Outdoor living additions — patios, porches, and landscape redesigns — are increasingly common as urban homeowners maximize their yard space. Many Richmond City homeowners combine interior and exterior work into a single phased project to minimize disruption.</p>
      </div>
    </div>
  </section>

  <!-- FAQs -->
  <section class="faq-section" style="background: var(--bg);">
    <div class="container">
      <h2 style="text-align:center; margin-bottom: var(--space-2xl);" data-animate="fade-up">Richmond City Renovation FAQs</h2>
      <div class="faq-list" data-animate="fade-up">
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            What renovation services does Greenstone offer in Richmond City?
            <i data-lucide="chevron-down"></i>
          </button>
          <div class="faq-answer">
            <div class="faq-answer-inner">
              <p>Greenstone provides kitchen remodeling, bathroom renovation, bedroom updates, common area remodeling, patio construction, landscape design, irrigation installation, and lawn care for homeowners across Richmond City — including the Fan District, Church Hill, Scott's Addition, Manchester, and Museum District.</p>
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            Do you work on historic homes in Richmond City?
            <i data-lucide="chevron-down"></i>
          </button>
          <div class="faq-answer">
            <div class="faq-answer-inner">
              <p>Yes. We approach historic Richmond properties with care — preserving what makes them special while modernizing kitchens, bathrooms, and outdoor spaces to meet contemporary expectations. Our experience with wood paneling removal, subfloor repair, and finish carpentry makes us well-suited for the challenges older city homes present.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Related Areas -->
  <section class="bg-alt">
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
      <h2>Ready to Start Your Richmond City Project?</h2>
      <p class="prose-centered">Whether it's a kitchen remodel in the Fan, a bathroom renovation in Church Hill, or a patio build in Manchester — one call gets the conversation started.</p>
      <a href="/contact" class="btn-primary">Schedule a Consultation <i data-lucide="chevron-right" style="width:18px;height:18px;"></i></a>
      <a href="tel:8042186459" class="cta-phone"><i data-lucide="phone" style="width:20px;height:20px;vertical-align:middle;"></i> (804) 218-6459</a>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
