<?php
$pageTitle       = "Greenscape & Landscape Design in Richmond, VA | Greenstone Home Solutions";
$pageDescription = "Custom landscape design in Richmond, VA backed by Virginia Tech horticultural science. Curved beds, native plants, soil analysis. $3K–$15K+. Call (804) 218-6459.";
$canonicalUrl    = "https://greenstonehomesolutions.com/services/greenscape-landscape-design";
$ogImage         = "https://i.imgur.com/nqzt0xW.jpeg";
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
      {"@type": "ListItem", "position": 3, "name": "Greenscape & Landscape Design", "item": "https://greenstonehomesolutions.com/services/greenscape-landscape-design"}
    ]
  },
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Greenscape & Landscape Design",
    "description": "Custom landscape design backed by Virginia Tech horticultural science including curved garden beds, native plant selection, soil analysis, hardscape integration, and seasonal interest planning for homeowners in Richmond, VA.",
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
        "name": "How is your landscape design different from other contractors?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Our founder holds a B.S. in Environmental Horticulture with a minor in Crop & Soil Sciences from Virginia Tech. That means we select plants based on actual soil conditions, sun exposure, and hardiness data — not just what looks good at the nursery. Plants installed correctly the first time save you money long-term."
        }
      },
      {
        "@type": "Question",
        "name": "Do you use native Virginia plants in your designs?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we prioritize native and climate-adapted species whenever possible. Native plants require less water, attract pollinators, and are naturally resistant to local pests and diseases."
        }
      },
      {
        "@type": "Question",
        "name": "Can you diagnose why my existing plants are dying?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Absolutely. The Virginia Tech plant pathology training means we can identify diseases, pest damage, nutrient deficiencies, and environmental stress. We diagnose the issue and recommend treatment or hardy replacement varieties suited to your specific conditions."
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
        <a href="/">Home</a><span class="sep">/</span><a href="/services">Services</a><span class="sep">/</span><span class="current">Greenscape &amp; Landscape Design</span>
      </nav>
      <h1>Greenscape &amp; <span class="text-accent">Landscape Design</span> in Richmond, VA</h1>
      <p class="prose">Science-based landscape design rooted in Virginia Tech horticultural training — custom garden beds, native plantings, and outdoor spaces built to thrive in Richmond's climate.</p>
      <a href="tel:8042186459" class="btn-primary" style="margin-top: var(--space-lg);">Call for a Free Consultation <i data-lucide="phone" style="width:18px;height:18px;"></i></a>
    </div>
    <div class="section-divider section-divider--bottom" aria-hidden="true">
      <svg viewBox="0 0 1440 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0,40 C360,0 1080,80 1440,40 L1440,80 L0,80 Z" fill="#ffffff"/>
      </svg>
    </div>
  </section>

  <!-- Answer-First Intro (Split Reverse: image left, text right) -->
  <section style="background: var(--bg);">
    <div class="container">
      <div class="split-reverse">
        <div class="service-img reveal-left">
          <img src="https://i.imgur.com/nqzt0xW.jpeg" alt="Curved river-rock garden bed with colorful perennials installed by Greenstone Home Solutions in Richmond VA" width="800" height="600" loading="lazy">
        </div>
        <div class="reveal-right">
          <p class="prose" style="margin-bottom: var(--space-lg);"><strong>Greenstone Home Solutions is a licensed and insured landscape design company based in Richmond, VA.</strong> Professional landscape design in Richmond typically costs $3,000 to $15,000 or more depending on property size and complexity. We provide custom landscape design backed by Virginia Tech horticultural science for homeowners in Richmond, VA and surrounding counties including Henrico, Hanover, King William, New Kent, and Charles City.</p>
          <p class="prose" style="margin-bottom: var(--space-lg);">What separates our work from typical landscaping contractors is education. Our founder, Lucas Walton, holds a B.S. in Environmental Horticulture with a minor in Crop and Soil Sciences from Virginia Tech. That means every plant selection, bed layout, and soil amendment recommendation is grounded in actual plant science — not guesswork or nursery availability.</p>
          <p class="prose">When we design a landscape, we start with the soil and microclimate conditions on your specific property. Different areas of a single yard can have dramatically different drainage, sun exposure, and pH levels. Understanding those conditions before selecting a single plant is the difference between a landscape that thrives for decades and one that needs replacing in three years.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Answer Block -->
  <section class="bg-alt">
    <div class="container" data-animate="fade-up">
      <div class="answer-block">
        <h2>How Much Does Landscape Design Cost in Richmond?</h2>
        <p class="prose">A focused front yard redesign with new beds, shrubs, and mulch typically costs $3,000 to $6,000. A comprehensive landscape plan covering front and back yards with perennial plantings, tree installation, and river rock borders ranges from $8,000 to $15,000. Large-scale projects that include hardscape integration, grading, and mature tree installation can exceed $15,000. Every project starts with a free on-site assessment so we can provide an accurate estimate based on your property's actual conditions.</p>
      </div>
    </div>
  </section>

  <!-- Virginia Tech Credentials Highlight -->
  <section style="background: var(--bg);">
    <div class="container" data-animate="fade-up">
      <span class="eyebrow-label">The Greenstone Difference</span>
      <span class="section-subtitle--accent">Rooted in Virginia Tech horticulture</span>
      <h2>Landscape Design Backed by Plant Science</h2>
      <p class="prose" style="margin-bottom: var(--space-lg);">Most landscaping companies design by aesthetics alone. They pick plants that look good at the garden center, install them, and hope for the best. At Greenstone, we approach landscape design the way it is taught in a university horticulture program — because that is exactly where Lucas learned it.</p>
      <p class="prose" style="margin-bottom: var(--space-2xl);">Virginia Tech's Environmental Horticulture program covers plant physiology, soil chemistry, pest and disease identification, and climate-adapted design. His minor in Crop and Soil Sciences adds training in soil testing, nutrient management, and the relationship between soil health and plant performance. This background means we can do things most landscapers simply cannot.</p>
      <div class="grid-2" data-animate="fade-up" data-stagger>
        <div class="highlight-box card-tint-1">
          <h3><i data-lucide="microscope" style="width:20px;height:20px;"></i> Diagnose Plant Problems</h3>
          <p>Yellowing leaves, wilting, spots, and dieback all have specific causes. Lucas can identify fungal diseases, bacterial infections, pest damage, and nutrient deficiencies on sight — and recommend targeted treatment plans rather than blanket chemical applications.</p>
        </div>
        <div class="highlight-box card-tint-2">
          <h3><i data-lucide="flask-conical" style="width:20px;height:20px;"></i> Soil Analysis &amp; Amendment</h3>
          <p>Richmond soils vary widely — from heavy clay in Henrico to sandy loam in New Kent. We test soil pH, organic matter content, and drainage characteristics before recommending amendments. Getting the soil right is the single most important factor in long-term plant health.</p>
        </div>
        <div class="highlight-box card-tint-3">
          <h3><i data-lucide="leaf" style="width:20px;height:20px;"></i> Climate-Smart Plant Selection</h3>
          <p>Richmond sits at the border of USDA hardiness zones 7a and 7b. We select varieties proven to handle both our summer heat and occasional hard freezes, prioritizing native species that require less supplemental water and resist local pests naturally.</p>
        </div>
        <div class="highlight-box card-tint-neutral">
          <h3><i data-lucide="sun" style="width:20px;height:20px;"></i> Microclimate Mapping</h3>
          <p>A north-facing bed under mature oaks has completely different conditions than a south-facing slope along a driveway. We map sun exposure, wind patterns, and drainage on your property to match the right plant to the right location every time.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Breakdown (Split: text left, image right) -->
  <section class="bg-alt">
    <div class="container">
      <div class="split">
        <div class="reveal-up">
          <h2 data-animate="fade-up">What We Design &amp; Install</h2>
          <p class="prose" style="margin-bottom: var(--space-lg);" data-animate="fade-up">Our greenscape and landscape design services cover everything from a single garden bed refresh to a complete property transformation. Every project is custom — we do not work from templates or pre-made plans because no two properties in the Richmond area have the same conditions.</p>
          <ul class="icon-list" data-animate="fade-up">
            <li><i data-lucide="check-circle" style="width:18px;height:18px;"></i><p>Custom curved garden beds with river rock and natural stone borders</p></li>
            <li><i data-lucide="check-circle" style="width:18px;height:18px;"></i><p>Perennial and annual planting plans for year-round color</p></li>
            <li><i data-lucide="check-circle" style="width:18px;height:18px;"></i><p>Shrub and ornamental tree installation with proper root preparation</p></li>
            <li><i data-lucide="check-circle" style="width:18px;height:18px;"></i><p>Privacy screening with arborvitae, holly, and native evergreens</p></li>
            <li><i data-lucide="check-circle" style="width:18px;height:18px;"></i><p>Native Virginia plant gardens that support pollinators</p></li>
            <li><i data-lucide="check-circle" style="width:18px;height:18px;"></i><p>Foundation plantings and front entry design</p></li>
            <li><i data-lucide="check-circle" style="width:18px;height:18px;"></i><p>Hardscape integration — beds designed around existing or planned patios and walkways</p></li>
            <li><i data-lucide="check-circle" style="width:18px;height:18px;"></i><p>Seasonal interest planning so your landscape looks good in every month</p></li>
          </ul>
        </div>
        <div class="service-img reveal-right" data-animate="wipe-right">
          <img src="https://i.imgur.com/pGk5QcC.jpeg" alt="Greenstone crew installing shrubs and arborvitae along a fence line in Richmond VA" width="800" height="600" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- Mid CTA -->
  <section class="mid-cta">
    <div class="container" data-animate="fade-up" style="text-align:center;">
      <h2>Ready to Redesign Your Outdoor Space?</h2>
      <p class="prose-centered">Schedule a free property assessment and get a custom landscape plan built around your soil, your sunlight, and your vision.</p>
      <a href="/contact" class="btn-primary">Request a Free Assessment <i data-lucide="chevron-right" style="width:18px;height:18px;"></i></a>
      <a href="tel:8042186459" class="cta-phone"><i data-lucide="phone" style="width:20px;height:20px;vertical-align:middle;"></i> (804) 218-6459</a>
    </div>
  </section>

  <!-- Native Plants & Regional Knowledge -->
  <section style="background: var(--bg);">
    <div class="container" data-animate="fade-up">
      <h2>Native &amp; Climate-Adapted Plants for Virginia</h2>
      <p class="prose" style="margin-bottom: var(--space-lg);">We prioritize native Virginia species whenever the design allows. Native plants evolved alongside local insects, birds, and soil organisms, which means they establish faster, need less water once rooted, and resist local diseases and pests without heavy chemical intervention.</p>
      <p class="prose" style="margin-bottom: var(--space-lg);">Some of our most-used native and adapted species for Richmond landscapes include Virginia sweetspire, Eastern redbud, inkberry holly, black-eyed Susan, blue-star amsonia, and switchgrass. For privacy hedges, we use native hollies and recommend arborvitae varieties proven to perform in zone 7a/7b — not the big-box varieties that brown out after two Virginia summers.</p>
      <p class="prose">We also design for seasonal interest. A well-planned landscape should look good in January, not just June. That means incorporating evergreen structure, winter-blooming species like witch hazel, ornamental bark, and seed heads that hold through the cold months. Richmond homeowners in neighborhoods across Henrico, the Fan District, and Hanover County consistently tell us they are surprised by how much their landscape improves during the off-season once proper variety selection is in place.</p>
    </div>
  </section>

  <!-- Existing Plant Diagnosis -->
  <section class="bg-alt">
    <div class="container" data-animate="fade-up">
      <div class="answer-block">
        <h2>Can You Diagnose Why My Plants Are Dying?</h2>
        <p class="prose">Yes. This is one of the most common requests we receive. Homeowners across Richmond invest in landscaping only to watch plants decline within a year or two — and most landscaping companies cannot tell them why. Lucas's training in plant pathology and entomology allows us to identify the specific cause: fungal diseases like powdery mildew or leaf spot, pest damage from Japanese beetles or scale insects, nutrient deficiencies from improper soil pH, or environmental stress from poor drainage and compacted clay. We diagnose the problem, recommend treatment when the plant is salvageable, and suggest hardy replacement varieties when it is not.</p>
      </div>
    </div>
  </section>

  <!-- Process Steps -->
  <section style="background: var(--bg);">
    <div class="container">
      <h2 style="text-align:center; margin-bottom: var(--space-2xl);" data-animate="fade-up">Our Landscape Design Process</h2>
      <div class="process-steps" data-animate="fade-up" data-stagger>
        <div class="process-step">
          <h3>Property Assessment &amp; Soil Analysis</h3>
          <p>We walk your property to evaluate sun exposure, drainage patterns, existing plantings, and soil conditions. We take soil samples when needed to test pH and nutrient levels before recommending any plants or amendments.</p>
        </div>
        <div class="process-step">
          <h3>Custom Design Plan</h3>
          <p>Based on the assessment, we create a detailed planting plan showing bed layouts, plant placement, variety selections, and material specifications. You review and approve the design before any work begins.</p>
        </div>
        <div class="process-step">
          <h3>Installation</h3>
          <p>Our crew prepares beds, amends soil as needed, installs plants at the correct depth and spacing, places borders and mulch, and sets up any integrated irrigation zones. Proper installation technique prevents transplant shock and promotes strong root establishment.</p>
        </div>
        <div class="process-step">
          <h3>Follow-Up &amp; Plant Care Guide</h3>
          <p>After installation, you receive a custom care guide covering watering schedules, fertilization timing, and seasonal maintenance for every plant in your new landscape. We follow up to ensure everything is establishing well.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQs -->
  <section class="faq-section">
    <div class="container">
      <h2 style="text-align:center; margin-bottom: var(--space-2xl);" data-animate="fade-up">Landscape Design FAQs</h2>
      <div class="faq-list" data-animate="fade-up">
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            How is your landscape design different from other contractors?
            <i data-lucide="chevron-down"></i>
          </button>
          <div class="faq-answer">
            <div class="faq-answer-inner">
              Our founder holds a B.S. in Environmental Horticulture with a minor in Crop and Soil Sciences from Virginia Tech. That means we select plants based on actual soil conditions, sun exposure, and hardiness data — not just what looks good at the nursery. We test soil, map microclimates, and choose varieties proven to thrive in your specific conditions. Plants installed correctly the first time save you money long-term.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            Do you use native Virginia plants in your designs?
            <i data-lucide="chevron-down"></i>
          </button>
          <div class="faq-answer">
            <div class="faq-answer-inner">
              Yes, we prioritize native and climate-adapted species whenever possible. Native plants require less supplemental water once established, attract pollinators, and are naturally resistant to local pests and diseases. Species like Virginia sweetspire, inkberry holly, Eastern redbud, and black-eyed Susan are staples in our designs for Richmond-area properties.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            Can you diagnose why my existing plants are dying?
            <i data-lucide="chevron-down"></i>
          </button>
          <div class="faq-answer">
            <div class="faq-answer-inner">
              Absolutely. Lucas's training in plant pathology means we can identify diseases, pest damage, nutrient deficiencies, and environmental stress. We diagnose the specific issue — whether it is a fungal infection, insect damage, improper soil pH, or poor drainage — and recommend treatment or hardy replacement varieties suited to your property's conditions.
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
        <a href="/services/irrigation-design-installation" class="related-chip">Irrigation Design &amp; Installation</a>
        <a href="/services/lawn-care-maintenance" class="related-chip">Lawn Care &amp; Maintenance</a>
        <a href="/services/patio-porch-terrace-construction" class="related-chip">Patio, Porch &amp; Terrace Construction</a>
      </div>
      <p class="last-updated">Last Updated: <?php echo date('F Y'); ?></p>
    </div>
  </section>

  <!-- Closing CTA -->
  <section class="closing-cta">
    <div class="container" data-animate="fade-up">
      <h2>Your Landscape Should Work as Hard as You Do</h2>
      <p class="prose-centered">Get a landscape plan designed by someone who actually studied how plants grow — not just how they look. Free on-site assessment for properties in Richmond and surrounding counties.</p>
      <a href="/contact" class="btn-primary">Schedule Your Free Assessment <i data-lucide="chevron-right" style="width:18px;height:18px;"></i></a>
      <a href="tel:8042186459" class="cta-phone"><i data-lucide="phone" style="width:20px;height:20px;vertical-align:middle;"></i> (804) 218-6459</a>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
