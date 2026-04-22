<?php
$pageTitle       = "About Greenstone Home Solutions | Richmond Indoor & Outdoor Renovation";
$pageDescription = "Meet Lucas Walton, founder of Greenstone Home Solutions — Virginia Tech graduate, Belgard award winner, and Richmond's specialist in home renovation and landscape design.";
$canonicalUrl    = "https://greenstonehomesolutions.com/about";
$ogImage         = "https://i.imgur.com/CN2OKqv.jpeg";
$currentPage     = "about";
$heroImage       = "";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;

$schemaMarkup = '[
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Greenstone Home Solutions LLC",
    "url": "https://greenstonehomesolutions.com",
    "telephone": "(804) 218-6459",
    "email": "greenstonehomesolutions@gmail.com",
    "founder": {
      "@type": "Person",
      "name": "Lucas Walton"
    },
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Richmond",
      "addressRegion": "VA"
    },
    "sameAs": [
      "https://www.yelp.com/biz/greenstone-home-solutions-richmond",
      "https://www.facebook.com/p/Greenstone-Home-Solutions-LLC-61569409110761/",
      "https://www.instagram.com/greenstonehomesolutions/",
      "https://share.google/uT7LhrEfLlZm43ZhZ"
    ]
  },
  {
    "@context": "https://schema.org",
    "@type": "Person",
    "name": "Lucas Walton",
    "jobTitle": "Founder & Co-Owner",
    "worksFor": {
      "@type": "Organization",
      "name": "Greenstone Home Solutions LLC"
    },
    "alumniOf": {
      "@type": "CollegeOrUniversity",
      "name": "Virginia Tech"
    },
    "knowsAbout": ["Environmental Horticulture", "Home Renovation", "Landscape Design", "Hardscaping"]
  },
  {
    "@context": "https://schema.org",
    "@type": "AggregateRating",
    "itemReviewed": {
      "@type": "LocalBusiness",
      "name": "Greenstone Home Solutions LLC",
      "telephone": "(804) 218-6459"
    },
    "ratingValue": "4.9",
    "reviewCount": "47",
    "bestRating": "5"
  },
  {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
      {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://greenstonehomesolutions.com"},
      {"@type": "ListItem", "position": 2, "name": "About", "item": "https://greenstonehomesolutions.com/about"}
    ]
  }
]';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<main id="main-content">

  <!-- Page Header + Breadcrumb -->
  <section class="page-header has-divider">
    <div class="container">
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span class="sep">/</span>
        <span class="current">About</span>
      </nav>
      <h1>About Greenstone Home Solutions — Richmond's <span class="text-accent">Indoor & Outdoor</span> Renovation Experts</h1>
    </div>
    <div class="section-divider section-divider--bottom" aria-hidden="true">
      <svg viewBox="0 0 1440 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0,40 C360,0 1080,80 1440,40 L1440,80 L0,80 Z" fill="#ffffff"/>
      </svg>
    </div>
  </section>


  <!-- Owner Spotlight -->
  <section class="section">
    <div class="container">
      <div class="split">
        <div class="split-content reveal-up">
          <p class="prose"><strong>Greenstone Home Solutions is a licensed and insured home renovation and landscape design company based in Richmond, Virginia.</strong> Founded by Lucas Walton, the company delivers a rare combination of interior remodeling craftsmanship and science-driven outdoor living design to homeowners across the greater Richmond metro area.</p>

          <p class="prose">Lucas's path into the trades began during his Virginia Tech years, when he worked on home renovation projects in Virginia while completing his degree &mdash; framing, tile work, and finish carpentry learned from seasoned tradespeople on real job sites. That hands-on foundation became the start of a career that would eventually bridge two industries most contractors treat as entirely separate: indoor renovation and outdoor design.</p>

          <p class="prose">In 2017, Lucas graduated from Virginia Tech with a Bachelor of Science in Environmental Horticulture and a minor in Crop and Soil Sciences. His coursework covered plant physiology, pest and disease diagnostics, soil chemistry, irrigation engineering, and sustainable landscape management. These are not theoretical subjects for Lucas — they directly inform how he selects hardy plant varieties for Virginia's clay-heavy soils, how he engineers drainage solutions for <a href="/services/patio-porch-terrace-construction">patios and terraces</a>, and how he designs <a href="/services/greenscape-landscape-design">landscape installations</a> that thrive through Richmond's humid summers and unpredictable freeze-thaw cycles.</p>

          <p class="prose">While attending Virginia Tech, Lucas worked simultaneously as a home contractor. He spent semesters and summers installing hardwood and luxury vinyl flooring, building custom tile showers, gutting and rebuilding kitchens, and framing structural additions. By the time he finished his degree, he had accumulated years of hands-on construction experience alongside his academic training — a combination that sets Greenstone apart from competitors who specialize in only one discipline.</p>

          <p class="prose">That dual expertise is the core of what Greenstone Home Solutions offers. Need a <a href="/services/bathroom-remodeling">full bathroom renovation</a> with custom tile and modern fixtures? Lucas and his crew handle it from demolition through final walkthrough. Want a backyard transformation with a Belgard paver patio, native plantings, and a drip irrigation system? The same team designs and builds it. Most homeowners in <a href="/service-areas/henrico-county">Henrico County</a>, <a href="/service-areas/hanover-county">Hanover County</a>, and the surrounding areas have to hire separate contractors for indoor and outdoor work. With Greenstone, one company manages both — with consistent quality, communication, and accountability.</p>

          <p class="prose">Lucas is also accomplished in outdoor decking and structural rebuilds. Whether it is replacing a deteriorated deck frame, constructing a new elevated balcony, or rebuilding a porch with composite decking and aluminum railings, his structural knowledge ensures every project meets code and lasts. Greenstone approaches every job — large or small — with the same commitment: work within the client's budget, deliver the highest craftsmanship possible, and leave the property better than they found it.</p>
        </div>
        <div class="service-img reveal-left" data-animate="wipe-right">
          <picture>
            <source srcset="https://i.imgur.com/CN2OKqv.jpeg" type="image/jpeg">
            <img src="https://i.imgur.com/CN2OKqv.jpeg" alt="Greenstone Home Solutions farmhouse renovation before and after in Richmond, Virginia" width="800" height="600" loading="lazy">
          </picture>
        </div>
      </div>
    </div>
  </section>


  <!-- Credentials & Awards -->
  <section class="section bg-alt" data-animate="fade-up">
    <div class="container">
      <span class="eyebrow-label">Credentials & Recognition</span>
      <span class="section-subtitle--accent">earned, not claimed</span>
      <h2 class="section-title">Built on Education, Proven by Results</h2>

      <div class="grid-3">
        <div class="highlight-box card-tint-1" data-animate="fade-up">
          <i data-lucide="award"></i>
          <h3>Belgard Hardscape Hero Award</h3>
          <p>National recognition from Belgard for an outstanding patio project — awarded to contractors who demonstrate exceptional design and installation quality.</p>
        </div>

        <div class="highlight-box card-tint-2" data-animate="fade-up">
          <i data-lucide="graduation-cap"></i>
          <h3>Virginia Tech Graduate</h3>
          <p>B.S. in Environmental Horticulture with a minor in Crop & Soil Sciences. Applied plant science training that directly shapes every landscape project.</p>
        </div>

        <div class="highlight-box card-tint-3" data-animate="fade-up">
          <i data-lucide="star"></i>
          <h3>Belgard Mid-Atlantic Portfolio</h3>
          <p>Greenstone's landscape and hardscape work has been featured in Belgard's regional portfolio, showcasing projects built across the Richmond metro area.</p>
        </div>

        <div class="highlight-box card-tint-neutral" data-animate="fade-up">
          <i data-lucide="clock"></i>
          <h3>10+ Years Experience</h3>
          <p>Over a decade of combined experience in residential construction, landscaping, and hardscaping — from framing walls to laying pavers.</p>
        </div>

        <div class="highlight-box card-tint-1" data-animate="fade-up">
          <i data-lucide="shield-check"></i>
          <h3>Licensed & Insured</h3>
          <p>Fully licensed and insured for residential renovation and outdoor construction throughout the Commonwealth of Virginia.</p>
        </div>

        <div class="highlight-box card-tint-2" data-animate="fade-up">
          <i data-lucide="users"></i>
          <h3>Family-Owned Business</h3>
          <p>Greenstone is a family-owned operation. Every project gets direct involvement from ownership — no layers of subcontractors or project managers between you and the work.</p>
        </div>
      </div>
    </div>
  </section>


  <!-- What Sets Us Apart -->
  <section class="section" data-animate="fade-up">
    <div class="container">
      <div class="split-reverse">
        <div class="service-img reveal-left" data-animate="wipe-right">
          <picture>
            <source srcset="https://i.imgur.com/nqzt0xW.jpeg" type="image/jpeg">
            <img src="https://i.imgur.com/nqzt0xW.jpeg" alt="Greenstone Home Solutions curved landscape bed design in Richmond, Virginia" width="800" height="600" loading="lazy">
          </picture>
        </div>
        <div class="split-content reveal-right">
          <h2 class="section-title">What Sets Greenstone Apart</h2>

          <div class="icon-list">
            <div class="icon-list-item">
              <i data-lucide="home"></i>
              <div>
                <strong>Indoor + Outdoor Under One Roof</strong>
                <p>Most contractors specialize in either interior remodeling or outdoor work. Greenstone handles both — from <a href="/services/kitchen-remodeling">kitchen renovations</a> and <a href="/services/bedroom-remodeling">bedroom remodels</a> to deck construction and full landscape installations. One company, one point of contact, consistent quality.</p>
              </div>
            </div>

            <div class="icon-list-item">
              <i data-lucide="leaf"></i>
              <div>
                <strong>Science-Based Landscape Design</strong>
                <p>Lucas's Virginia Tech training in environmental horticulture and soil science means your landscape plan is built on real plant science — not guesswork. He diagnoses soil conditions, selects disease-resistant varieties for Virginia's climate, and designs irrigation systems that conserve water while keeping plantings healthy.</p>
              </div>
            </div>

            <div class="icon-list-item">
              <i data-lucide="heart"></i>
              <div>
                <strong>Family-Owned Values</strong>
                <p>When you hire Greenstone, you work directly with the owner. Lucas is on-site for every project, managing quality from start to finish. There is no disconnect between the person who gives you the estimate and the person who does the work.</p>
              </div>
            </div>

            <div class="icon-list-item">
              <i data-lucide="wallet"></i>
              <div>
                <strong>Budget-Conscious Approach</strong>
                <p>Greenstone works within your budget without cutting corners. Lucas provides transparent pricing, identifies where to invest and where to save, and delivers finished results that maximize value for every dollar spent.</p>
              </div>
            </div>

            <div class="icon-list-item">
              <i data-lucide="trophy"></i>
              <div>
                <strong>Belgard-Recognized Craftsmanship</strong>
                <p>Winning the Belgard Hardscape Hero Award and being featured in the Mid-Atlantic portfolio is not participation recognition — it is earned through project quality that meets national standards for design and installation.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Our Service Area -->
  <section class="section bg-alt" data-animate="fade-up">
    <div class="container">
      <h2 class="section-title">Our Service Area</h2>
      <p class="prose-centered">Greenstone Home Solutions serves homeowners across five counties in the greater Richmond, Virginia metro area. Whether you need interior renovation, outdoor construction, or a full-property transformation, we bring the same level of craftsmanship to every community we work in.</p>

      <div class="related-services" style="margin-top: var(--space-xl);">
        <a href="/service-areas/richmond" class="county-chip">Richmond</a>
        <a href="/service-areas/chesterfield-county" class="county-chip">Chesterfield County</a>
        <a href="/service-areas/henrico-county" class="county-chip">Henrico County</a>
        <a href="/service-areas/hanover-county" class="county-chip">Hanover County</a>
        <a href="/service-areas/king-william-county" class="county-chip">King William County</a>
        <a href="/service-areas/new-kent-county" class="county-chip">New Kent County</a>
        <a href="/service-areas/charles-city-county" class="county-chip">Charles City County</a>
      </div>

      <p class="prose-centered" style="margin-top: var(--space-lg);">View all <a href="/services">services we offer</a> or <a href="/contact">request a free estimate</a> for your project.</p>
    </div>
  </section>


  <!-- Closing CTA -->
  <section class="closing-cta">
    <div class="container">
      <h2>Ready to Start Your Project?</h2>
      <p>Talk directly with Lucas about your renovation or landscape design goals. Free estimates for homeowners across the Richmond metro area.</p>
      <div class="cta-phone">
        <a href="tel:8042186459"><i data-lucide="phone"></i> (804) 218-6459</a>
      </div>
      <a href="/contact" class="btn-primary">Get a Free Estimate</a>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
