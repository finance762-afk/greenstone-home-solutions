<?php
$pageTitle       = "Building Additions & New Structures in Richmond, VA | Greenstone Home Solutions";
$pageDescription = "Custom home additions and new structures in Richmond, VA from $20,000. Loft conversions, bonus rooms, and built-in shelving. Call Greenstone Home Solutions at (804) 218-6459.";
$canonicalUrl    = "https://greenstonehomesolutions.com/services/building-additions-new-structures";
$ogImage         = "https://i.imgur.com/OCoqun0.jpeg";
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
      {"@type": "ListItem", "position": 3, "name": "Building Additions & New Structures", "item": "https://greenstonehomesolutions.com/services/building-additions-new-structures"}
    ]
  },
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Building Additions & New Structures",
    "description": "Custom home additions including loft conversions, bonus rooms, vaulted ceilings, and built-in shelving for homes in Richmond, VA and surrounding counties. Full permit coordination and structural engineering.",
    "provider": {
      "@type": "LocalBusiness",
      "name": "Greenstone Home Solutions LLC",
      "telephone": "(804) 218-6459",
      "url": "https://greenstonehomesolutions.com"
    },
    "areaServed": [
      {"@type": "City", "name": "Richmond, Virginia"},
      {"@type": "AdministrativeArea", "name": "Henrico County, Virginia"},
      {"@type": "AdministrativeArea", "name": "Hanover County, Virginia"},
      {"@type": "AdministrativeArea", "name": "King William County, Virginia"},
      {"@type": "AdministrativeArea", "name": "New Kent County, Virginia"},
      {"@type": "AdministrativeArea", "name": "Charles City County, Virginia"}
    ]
  },
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "Do I need a permit for a room addition in Virginia?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, virtually all structural additions require building permits. Greenstone handles the full permit application and coordinates county inspections throughout the build."
        }
      },
      {
        "@type": "Question",
        "name": "How long does a typical room addition take?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Most additions take 6-12 weeks from breaking ground to completion. Loft conversions are often faster (4-8 weeks) since the existing roof structure provides a starting point."
        }
      },
      {
        "@type": "Question",
        "name": "Can you add custom built-in shelving to an existing room?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Absolutely. Our floor-to-ceiling built-in units include integrated LED lighting, adjustable shelves, and custom sizing to fit any wall configuration."
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
        <a href="/">Home</a><span class="sep">/</span><a href="/services">Services</a><span class="sep">/</span><span class="current">Building Additions & New Structures</span>
      </nav>
      <h1>Building Additions & New Structures in Richmond, VA</h1>
      <p class="prose">A home addition in the Richmond area typically costs $20,000 to $80,000+ depending on size, complexity, and finishes. Greenstone Home Solutions is a licensed and insured general contractor based in Richmond, VA.</p>
      <a href="tel:8042186459" class="btn-primary" style="margin-top: var(--space-lg);">Call (804) 218-6459 <i data-lucide="phone" style="width:18px;height:18px;"></i></a>
    </div>
  </section>

  <!-- Loft Split -->
  <section style="background: var(--bg);">
    <div class="container">
      <div class="split">
        <div>
          <span class="eyebrow-label">Expand Your Living Space</span>
          <h2>Custom Additions That Integrate Seamlessly With Your Home</h2>
          <div class="prose" style="margin-top: var(--space-lg);">
            <p>Greenstone Home Solutions provides custom additions and structural builds for homeowners in Richmond, VA and surrounding counties including Henrico, Hanover, King William, New Kent, and Charles City. When your family outgrows your home, an addition is often more practical and cost-effective than moving — especially in Richmond's competitive real estate market where established neighborhoods in the West End, Short Pump, and Mechanicsville hold strong resale value.</p>
            <p style="margin-top: var(--space-md);">We handle every phase of the addition process: architectural planning, permit applications with your county building department, foundation work, framing, electrical, plumbing, HVAC extension, and interior finishing. The goal is a new space that looks and feels like it was always part of the original house — not a bolted-on afterthought.</p>
          </div>
        </div>
        <div class="service-img">
          <img src="https://i.imgur.com/OCoqun0.jpeg" alt="Finished loft addition with vaulted ceiling and open railing built by Greenstone Home Solutions in Richmond VA" width="800" height="600" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery -->
  <section class="bg-alt">
    <div class="container">
      <div style="text-align: center; margin-bottom: var(--space-2xl);">
        <h2>Recent Addition & Custom Build Projects</h2>
        <p class="prose-centered" style="margin-top: var(--space-md);">From loft conversions to floor-to-ceiling built-ins, each project is designed and built to fit the homeowner's specific needs.</p>
      </div>
      <div class="service-gallery" data-animate="fade-up" data-stagger>
        <div class="service-gallery-item">
          <img src="https://i.imgur.com/OCoqun0.jpeg" alt="Loft addition with vaulted ceiling, open railing, and new carpet in Richmond VA home" width="600" height="450" loading="lazy">
          <span class="gallery-caption">Loft Addition — Vaulted Ceiling</span>
        </div>
        <div class="service-gallery-item">
          <img src="https://i.imgur.com/bpxdldj.jpeg" alt="Bonus room addition with recessed lighting and finished walls in Henrico County VA" width="600" height="450" loading="lazy">
          <span class="gallery-caption">Bonus Room — Recessed Lighting</span>
        </div>
        <div class="service-gallery-item">
          <img src="https://i.imgur.com/RpfvKM4.jpeg" alt="Custom illuminated floor-to-ceiling built-in shelving installed by Greenstone Home Solutions" width="600" height="450" loading="lazy">
          <span class="gallery-caption">Custom Built-In Shelving</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Types of Additions -->
  <section style="background: var(--bg);">
    <div class="container">
      <div style="text-align: center; margin-bottom: var(--space-2xl);">
        <h2>What Kind of Addition Do You Need?</h2>
      </div>
      <div class="grid-2" data-animate="fade-up" data-stagger>
        <div class="highlight-box">
          <h3><i data-lucide="triangle" style="width:22px;height:22px;color:var(--accent);vertical-align:middle;margin-right:var(--space-sm);"></i> Loft Conversions</h3>
          <p>Transforming unused attic space into a finished loft with vaulted ceilings, open railings, and proper insulation. Loft conversions in Richmond typically cost $20,000 to $40,000 and take 4 to 8 weeks. They add significant square footage without changing your home's footprint — ideal for homeowners in established neighborhoods with limited lot space.</p>
        </div>
        <div class="highlight-box">
          <h3><i data-lucide="layout-grid" style="width:22px;height:22px;color:var(--accent);vertical-align:middle;margin-right:var(--space-sm);"></i> Bonus Rooms</h3>
          <p>Dedicated spaces for home offices, playrooms, media rooms, or guest suites. We frame, insulate, wire, and finish the room with recessed lighting, drywall, and your choice of flooring. Bonus rooms above garages are a popular option in Henrico County where two-story homes often have unused space above attached garages.</p>
        </div>
        <div class="highlight-box">
          <h3><i data-lucide="expand" style="width:22px;height:22px;color:var(--accent);vertical-align:middle;margin-right:var(--space-sm);"></i> Ground-Level Additions</h3>
          <p>Extending your home's footprint with a new room built from the foundation up. This is the most involved type of addition and includes excavation, foundation pouring, framing, roofline integration, and matching exterior siding and trim to the existing structure. Costs range from $30,000 to $80,000+ depending on square footage and finish level.</p>
        </div>
        <div class="highlight-box">
          <h3><i data-lucide="book-open" style="width:22px;height:22px;color:var(--accent);vertical-align:middle;margin-right:var(--space-sm);"></i> Custom Built-In Projects</h3>
          <p>Floor-to-ceiling shelving units, entertainment centers, and storage walls built directly into existing rooms. Our custom built-ins include integrated LED lighting, adjustable shelving, and trim that matches your home's existing millwork. These projects typically cost $3,000 to $12,000 per wall depending on complexity and lighting.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Answer Blocks -->
  <section class="bg-alt">
    <div class="container">
      <div class="answer-block" data-animate="fade-up">
        <h2>How Much Does a Home Addition Cost in Richmond, VA?</h2>
        <p>Costs vary significantly based on the type of addition. A loft conversion that uses existing roof structure runs $20,000 to $40,000. A bonus room over a garage typically costs $25,000 to $45,000. A ground-level addition with new foundation, framing, and full mechanical systems ranges from $30,000 to $80,000 or more. Custom built-in shelving and cabinetry projects within existing rooms cost $3,000 to $12,000 per wall. All estimates include materials, labor, permits, and county inspections.</p>
      </div>
      <div class="answer-block" data-animate="fade-up" style="margin-top: var(--space-lg);">
        <h2>What Is Involved in the Permit Process for Additions in Virginia?</h2>
        <p>Building permits are required for virtually all structural additions in Henrico, Hanover, King William, New Kent, and Charles City counties. The process involves submitting construction drawings, a site plan showing setback compliance, and structural engineering calculations when required. Greenstone handles the full permit application, responds to plan review comments, and schedules all required inspections — foundation, framing, electrical, plumbing, mechanical, insulation, and final.</p>
      </div>
    </div>
  </section>

  <!-- Built-in Split Reverse -->
  <section style="background: var(--bg);">
    <div class="container">
      <div class="split-reverse">
        <div class="service-img" data-animate="wipe-right">
          <img src="https://i.imgur.com/BcuSZoU.jpeg" alt="Custom built-in shelving unit before LED lighting installation in Richmond VA home" width="800" height="600" loading="lazy">
        </div>
        <div>
          <h2>Custom Built-In Shelving That Transforms a Room</h2>
          <div class="prose" style="margin-top: var(--space-lg);">
            <p>Not every addition involves new walls and foundations. Some of the most impactful projects we complete are custom built-in shelving units that turn a plain wall into a functional showpiece. These floor-to-ceiling units are built on-site to fit exact wall dimensions — no gaps, no shimming, no compromise.</p>
            <p style="margin-top: var(--space-md);">Our built-ins include adjustable shelves on concealed standards, integrated LED strip lighting with dimmer controls, and trim details that match your home's existing millwork. We build them from cabinet-grade plywood with hardwood face frames and paint or stain to your specification. The result is a piece of furniture that looks like it was designed with the house.</p>
            <p style="margin-top: var(--space-md);">Homeowners in Richmond use these for home libraries, entertainment centers, home office storage, and display walls. A single wall of built-in shelving eliminates the need for freestanding bookcases, media consoles, and storage cabinets — cleaning up the room's visual clutter while adding significantly more storage capacity.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Process Steps -->
  <section class="bg-alt">
    <div class="container">
      <div style="text-align: center; margin-bottom: var(--space-2xl);">
        <span class="eyebrow-label">Our Process</span>
        <h2>How We Build Your Addition</h2>
      </div>
      <div class="process-steps" data-animate="fade-up" data-stagger>
        <div class="process-step">
          <h3>Design & Permits</h3>
          <p>We work with you on layout, finishes, and structural requirements. We produce construction drawings, submit permit applications to your county building department, and handle all plan review correspondence. Nothing gets built without approved permits in hand.</p>
        </div>
        <div class="process-step">
          <h3>Foundation & Framing</h3>
          <p>For ground-level additions, we excavate and pour footings and foundation walls. Framing goes up with engineered lumber where spans require it. Loft conversions involve reinforcing existing floor joists and opening up the ceiling structure. County framing inspections are scheduled before any work gets covered.</p>
        </div>
        <div class="process-step">
          <h3>Systems & Finishing</h3>
          <p>Electrical, plumbing, and HVAC are roughed in and inspected. Insulation goes in after mechanical inspections pass. Then drywall, mudding, sanding, paint, flooring, trim, and fixtures. We coordinate all subcontractors so trades do not step on each other.</p>
        </div>
        <div class="process-step">
          <h3>Inspection & Handoff</h3>
          <p>Final county inspection confirms code compliance. We do a detailed walkthrough with you, address any punch list items on the spot, and hand over the space. You receive copies of all inspection approvals and permit documentation for your records.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Mid CTA -->
  <section class="mid-cta">
    <div class="container" style="text-align: center;">
      <h2>Need More Space? Let Us Build It.</h2>
      <p class="prose-centered">From loft conversions to ground-level additions, Greenstone Home Solutions designs and builds custom spaces for Richmond-area homeowners. Call for a free consultation.</p>
      <a href="/contact" class="btn-primary" style="margin-top: var(--space-lg);">Request a Free Estimate <i data-lucide="chevron-right" style="width:18px;height:18px;"></i></a>
      <a href="tel:8042186459" class="cta-phone"><i data-lucide="phone" style="width:18px;height:18px;"></i> (804) 218-6459</a>
    </div>
  </section>

  <!-- Integration Section -->
  <section style="background: var(--bg);">
    <div class="container">
      <div class="split">
        <div>
          <h2>Making an Addition Look Like It Was Always There</h2>
          <div class="prose" style="margin-top: var(--space-lg);">
            <p>The biggest risk with any home addition is ending up with a space that feels disconnected from the rest of the house. Rooflines that do not match, siding that is a slightly different shade, interior trim that shifts style at the doorway — these are the signs of a poorly planned addition, and they hurt resale value.</p>
            <p style="margin-top: var(--space-md);">Greenstone avoids this by sourcing matching materials before construction begins. We pull siding samples, photograph existing trim profiles, and match paint colors with the original manufacturer when possible. Inside, we carry the same baseboard, casing, and crown molding into the new space. The transition from old to new should be invisible to anyone who did not watch the construction happen.</p>
            <p style="margin-top: var(--space-md);">For loft additions, this means matching the existing stair railing style, using consistent flooring transitions, and ensuring the vaulted ceiling feels intentional rather than improvised. Every detail matters when the goal is seamless integration.</p>
          </div>
        </div>
        <div class="service-img" data-animate="wipe-right">
          <img src="https://i.imgur.com/RpfvKM4.jpeg" alt="Completed illuminated wall-to-wall built-in shelving unit by Greenstone Home Solutions in Richmond VA" width="800" height="600" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- Considerations -->
  <section class="bg-alt">
    <div class="container">
      <div class="prose-centered" data-animate="fade-up">
        <h2 style="text-align: center;">Important Considerations for Home Additions in Richmond</h2>
        <p style="margin-top: var(--space-lg);">Setback requirements vary by county and zoning district. In Henrico County, most residential zones require a minimum side yard setback of 10 feet and a rear yard setback of 25 feet. Hanover County has similar requirements but may differ by district. We verify setback compliance during the design phase so there are no surprises during permit review.</p>
        <p style="margin-top: var(--space-md);">HOA approval is another factor for homeowners in planned communities across the Richmond area. Many HOAs require architectural review board approval before any exterior modification. We provide the drawings and specifications your HOA needs and can attend review meetings if required.</p>
        <p style="margin-top: var(--space-md);">HVAC capacity is frequently overlooked in addition planning. Your existing system may not have enough capacity to heat and cool the new space. We evaluate your current system early in the process and recommend either extending existing ductwork (when capacity allows) or adding a supplemental mini-split system for the new room.</p>
      </div>
    </div>
  </section>

  <!-- FAQs -->
  <section style="background: var(--bg);">
    <div class="container">
      <div style="text-align: center; margin-bottom: var(--space-2xl);">
        <h2>Building Additions FAQs</h2>
      </div>
      <div class="faq-section">
        <div class="faq-list">
          <div class="faq-item" data-animate="fade-up">
            <button class="faq-question" aria-expanded="false">
              Do I need a permit for a room addition in Virginia?
              <i data-lucide="chevron-down"></i>
            </button>
            <div class="faq-answer">
              <div class="faq-answer-inner">
                <p>Yes, virtually all structural additions require building permits in Virginia. This includes loft conversions, ground-level additions, and any project that modifies your home's structural framing. Greenstone handles the full permit application and coordinates county inspections throughout the build — foundation, framing, electrical, plumbing, mechanical, insulation, and final. We have worked with building departments across Henrico, Hanover, King William, New Kent, and Charles City counties.</p>
              </div>
            </div>
          </div>
          <div class="faq-item" data-animate="fade-up">
            <button class="faq-question" aria-expanded="false">
              How long does a typical room addition take?
              <i data-lucide="chevron-down"></i>
            </button>
            <div class="faq-answer">
              <div class="faq-answer-inner">
                <p>Most additions take 6 to 12 weeks from breaking ground to completion. Loft conversions are often faster — 4 to 8 weeks — since the existing roof structure provides a starting point. Ground-level additions with new foundations take the longest due to excavation, concrete curing, and the additional inspection stages. Weather can affect timelines during foundation and framing phases, so we build buffer time into our schedules for Richmond's variable spring and fall conditions.</p>
              </div>
            </div>
          </div>
          <div class="faq-item" data-animate="fade-up">
            <button class="faq-question" aria-expanded="false">
              Can you add custom built-in shelving to an existing room?
              <i data-lucide="chevron-down"></i>
            </button>
            <div class="faq-answer">
              <div class="faq-answer-inner">
                <p>Absolutely. Our floor-to-ceiling built-in units include integrated LED lighting, adjustable shelves, and custom sizing to fit any wall configuration. We build these on-site from cabinet-grade plywood with hardwood face frames, and trim them to match your home's existing millwork. Most built-in projects take 1 to 2 weeks from start to finish and do not require permits since they are not structural modifications.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Closing CTA -->
  <section class="closing-cta">
    <div class="container" style="text-align: center;">
      <h2>Add the Space Your Family Needs</h2>
      <p class="prose-centered">Whether it is a loft conversion, a bonus room, or custom built-in shelving, Greenstone Home Solutions builds it right the first time. Serving Richmond, Henrico, Hanover, King William, New Kent, and Charles City counties.</p>
      <a href="/contact" class="btn-primary" style="margin-top: var(--space-lg);">Get Your Free Estimate <i data-lucide="chevron-right" style="width:18px;height:18px;"></i></a>
      <a href="tel:8042186459" class="cta-phone"><i data-lucide="phone" style="width:18px;height:18px;"></i> (804) 218-6459</a>
    </div>
  </section>

  <!-- Last Updated & Related -->
  <section style="background: var(--bg); padding: var(--space-xl) 0;">
    <div class="container">
      <p class="last-updated">Last Updated: <?php echo date('F Y'); ?></p>
      <div class="related-services">
        <span>Related Services:</span>
        <a href="/services/deck-balcony-construction" class="related-chip">Deck & Balcony Construction</a>
        <a href="/services/detached-garage-construction" class="related-chip">Detached Garage Construction</a>
        <a href="/services/design-services" class="related-chip">Design Services</a>
      </div>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
