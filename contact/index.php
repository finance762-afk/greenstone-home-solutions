<?php
$pageTitle       = "Contact Greenstone Home Solutions — Free Estimates in Richmond, VA";
$pageDescription = "Request a free estimate from Greenstone Home Solutions in Richmond, VA. Call (804) 218-6459 or fill out our form for remodeling, outdoor construction, and landscape services.";
$canonicalUrl    = "https://greenstonehomesolutions.com/contact";
$ogImage         = "https://i.imgur.com/JuesTnb.png";
$currentPage     = "contact";
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
      {"@type": "ListItem", "position": 2, "name": "Contact", "item": "https://greenstonehomesolutions.com/contact"}
    ]
  },
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "Greenstone Home Solutions",
    "image": "https://i.imgur.com/JuesTnb.png",
    "telephone": "+1-804-218-6459",
    "email": "greenstonehomesolutions@gmail.com",
    "url": "https://greenstonehomesolutions.com",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Richmond",
      "addressRegion": "VA",
      "addressCountry": "US"
    },
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+1-804-218-6459",
      "email": "greenstonehomesolutions@gmail.com",
      "contactType": "customer service",
      "areaServed": [
        {"@type": "City", "name": "Richmond"},
        {"@type": "AdministrativeArea", "name": "Henrico County"},
        {"@type": "AdministrativeArea", "name": "Hanover County"},
        {"@type": "AdministrativeArea", "name": "King William County"},
        {"@type": "AdministrativeArea", "name": "New Kent County"},
        {"@type": "AdministrativeArea", "name": "Charles City County"}
      ],
      "availableLanguage": "English"
    },
    "openingHoursSpecification": [
      {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
        "opens": "08:00",
        "closes": "17:00"
      },
      {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": "Saturday",
        "opens": "10:00",
        "closes": "14:00"
      }
    ]
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
        <a href="/">Home</a>
        <span class="sep">/</span>
        <span class="current">Contact</span>
      </nav>
      <h1>Contact Greenstone Home Solutions — <span class="text-accent">Free Estimates</span> in Richmond, VA</h1>
      <p class="prose">Ready to start your project? Give us a call or fill out the form below for a free estimate.</p>
    </div>
    <div class="section-divider section-divider--bottom" aria-hidden="true">
      <svg viewBox="0 0 1440 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0,40 C360,0 1080,80 1440,40 L1440,80 L0,80 Z" fill="#ffffff"/>
      </svg>
    </div>
  </section>

  <!-- Contact Split: Form + Info -->
  <section style="padding: var(--section-pad); position: relative;">
    <svg class="floating-accent float-animate" style="top:15%; right:5%; width:120px; height:120px;" viewBox="0 0 120 120" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
      <circle cx="60" cy="60" r="55" fill="none" stroke="var(--primary)" stroke-width="3"/>
    </svg>
    <div class="container">
      <p class="prose" style="margin-bottom: var(--space-2xl);">Greenstone Home Solutions is a licensed and insured home remodeling and outdoor living company based in Richmond, Virginia. Whether you need a <a href="/services/kitchen-remodeling">kitchen remodel</a>, a <a href="/services/patio-porch-terrace-construction">new patio</a>, or <a href="/services/greenscape-landscape-design">landscape design</a>, our team is here to help. Reach out today for a no-obligation estimate — most consultations are scheduled within 48 hours.</p>

      <div class="split" style="align-items: start; gap: var(--space-3xl);">

        <!-- LEFT: Form -->
        <div class="reveal-up">
          <h2 class="section-title" style="text-align: left; margin-bottom: var(--space-xl);">Request a Free Estimate</h2>
          <form action="https://formsubmit.co/greenstonehomesolutions@gmail.com" method="POST">
            <input type="hidden" name="_next" value="https://greenstonehomesolutions.com/thank-you">
            <input type="hidden" name="_captcha" value="false">
            <input type="hidden" name="_honey" value="">
            <input type="hidden" name="_template" value="table">
            <input type="hidden" name="_subject" value="New Estimate Request — Greenstone Home Solutions">
            <input type="hidden" name="_cc" value="CustomerService@pageoneinsights.com">

            <div class="form-group">
              <input type="text" name="name" id="name" required placeholder=" ">
              <label for="name">Full Name</label>
            </div>

            <div class="form-group">
              <input type="tel" name="phone" id="phone" required placeholder=" ">
              <label for="phone">Phone Number</label>
            </div>

            <div class="form-group">
              <input type="email" name="email" id="email" required placeholder=" ">
              <label for="email">Email Address</label>
            </div>

            <div class="form-group">
              <select name="service" id="service" required>
                <option value="" disabled selected>Select a Service</option>
                <option value="Bathroom Remodeling">Bathroom Remodeling</option>
                <option value="Kitchen Remodeling">Kitchen Remodeling</option>
                <option value="Bedroom Remodeling">Bedroom Remodeling</option>
                <option value="Laundry Room Remodeling">Laundry Room Remodeling</option>
                <option value="Common Area Remodeling">Common Area Remodeling</option>
                <option value="Patio, Porch & Terrace Construction">Patio, Porch & Terrace Construction</option>
                <option value="Greenscape & Landscape Design">Greenscape & Landscape Design</option>
                <option value="Irrigation Design & Installation">Irrigation Design & Installation</option>
                <option value="Lawn Care & Maintenance">Lawn Care & Maintenance</option>
                <option value="Design Services">Design Services</option>
                <option value="Other">Other</option>
              </select>
              <label for="service">Service Needed</label>
            </div>

            <div class="form-group">
              <textarea name="message" id="message" rows="5" placeholder=" "></textarea>
              <label for="message">Project Description</label>
            </div>

            <button type="submit" class="btn-primary" style="width: 100%; margin-top: var(--space-md);">Request Your Free Estimate</button>
          </form>
        </div>

        <!-- RIGHT: Contact Info -->
        <div class="reveal-left" data-animate="fade-up">
          <div class="highlight-box">
            <h3>Get in Touch</h3>
            <ul class="icon-list">
              <li>
                <i data-lucide="phone" style="width: 20px; height: 20px;"></i>
                <div>
                  <strong>Phone</strong>
                  <p><a href="tel:8042186459">(804) 218-6459</a></p>
                </div>
              </li>
              <li>
                <i data-lucide="mail" style="width: 20px; height: 20px;"></i>
                <div>
                  <strong>Email</strong>
                  <p><a href="mailto:greenstonehomesolutions@gmail.com">greenstonehomesolutions@gmail.com</a></p>
                </div>
              </li>
              <li>
                <i data-lucide="clock" style="width: 20px; height: 20px;"></i>
                <div>
                  <strong>Hours</strong>
                  <p>Monday&ndash;Friday: 8 AM &ndash; 5 PM<br>Saturday: 10 AM &ndash; 2 PM<br>Sunday: Closed</p>
                </div>
              </li>
              <li>
                <i data-lucide="map-pin" style="width: 20px; height: 20px;"></i>
                <div>
                  <strong>Service Area</strong>
                  <p>Richmond, <a href="/service-areas/henrico-county">Henrico County</a>, <a href="/service-areas/hanover-county">Hanover County</a>, <a href="/service-areas/king-william-county">King William County</a>, <a href="/service-areas/new-kent-county">New Kent County</a>, <a href="/service-areas/charles-city-county">Charles City County</a></p>
                </div>
              </li>
            </ul>

            <div style="display: flex; gap: var(--space-md); margin-top: var(--space-xl);">
              <a href="https://www.facebook.com/p/Greenstone-Home-Solutions-LLC-61569409110761/" target="_blank" rel="noopener noreferrer" aria-label="Facebook" style="color: var(--primary);"><i data-lucide="facebook" style="width: 22px; height: 22px;"></i></a>
              <a href="https://www.instagram.com/greenstonehomesolutions/" target="_blank" rel="noopener noreferrer" aria-label="Instagram" style="color: var(--primary);"><i data-lucide="instagram" style="width: 22px; height: 22px;"></i></a>
              <a href="https://www.yelp.com/biz/greenstone-home-solutions-richmond" target="_blank" rel="noopener noreferrer" aria-label="Yelp" style="color: var(--primary);"><i data-lucide="star" style="width: 22px; height: 22px;"></i></a>
              <a href="https://share.google/uT7LhrEfLlZm43ZhZ" target="_blank" rel="noopener noreferrer" aria-label="Google Business Profile" style="color: var(--primary);"><i data-lucide="map-pin" style="width: 22px; height: 22px;"></i></a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Google Map -->
  <section class="bg-alt" style="padding: var(--section-pad);" data-animate="fade-up">
    <div class="container">
      <span class="eyebrow-label">Our Service Area</span>
      <span class="section-subtitle--accent">where we work</span>
      <h2 class="section-title" style="margin-bottom: var(--space-xl);">Serving Greater Richmond, Virginia</h2>
      <div style="border-radius: var(--radius); overflow: hidden; box-shadow: var(--elevation-2); aspect-ratio: 16/9;">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d203167.3!2d-77.6!3d37.54!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b111095799c9ed%3A0xbfd83e6de2423cc5!2sRichmond%2C%20VA!5e0!3m2!1sen!2sus!4v1700000000000!5m2!1sen!2sus"
          width="100%"
          height="100%"
          style="border: 0; display: block;"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          title="Greenstone Home Solutions service area — Richmond, Virginia">
        </iframe>
      </div>
    </div>
  </section>

  <!-- Closing CTA -->
  <section class="closing-cta" data-animate="fade-up">
    <div class="container" style="text-align: center;">
      <h2>Start Your Home Improvement Project Today</h2>
      <p class="prose-centered">From the initial consultation to the final walkthrough, Greenstone Home Solutions handles every detail. Call now or <a href="/services" style="color: var(--accent); text-decoration: underline;">explore our services</a> to see how we can transform your home.</p>
      <a href="tel:8042186459" class="cta-phone">
        <i data-lucide="phone" style="width: 24px; height: 24px;"></i>
        (804) 218-6459
      </a>
      <br>
      <a href="/about" class="btn-primary" style="margin-top: var(--space-lg); display: inline-block;">Learn About Our Team</a>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
