<?php
$pageTitle       = "Page Not Found | Greenstone Home Solutions";
$pageDescription = "The page you're looking for may have been moved or no longer exists. Visit our homepage or browse our services.";
$canonicalUrl    = "https://greenstonehomesolutions.com/404";
$ogImage         = "https://i.imgur.com/JuesTnb.png";
$currentPage     = "";
$heroImage       = "";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;
$schemaMarkup    = '';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<main id="main-content">
  <section style="padding: calc(var(--navbar-height) + var(--space-4xl)) var(--space-lg) var(--space-4xl); text-align: center; min-height: 80vh; display: flex; align-items: center; background: var(--bg-dark); color: #fff;">
    <div class="container">
      <i data-lucide="search" style="width: 64px; height: 64px; color: var(--primary); margin-bottom: var(--space-xl); opacity: 0.5;"></i>
      <h1 style="margin-bottom: var(--space-md);">Page Not Found</h1>
      <p class="prose-centered" style="color: var(--text-light); font-size: 1.1rem; margin-bottom: var(--space-2xl);">The page you're looking for may have been moved or no longer exists.</p>
      <p class="prose-centered" style="margin-bottom: var(--space-2xl);">Looking for a specific service? Browse our full list or contact us directly.</p>
      <div style="display: flex; flex-wrap: wrap; gap: var(--space-md); justify-content: center;">
        <a href="/" class="btn-primary"><i data-lucide="home" style="width:18px;height:18px;"></i> Back to Home</a>
        <a href="/services" class="btn-secondary"><i data-lucide="hammer" style="width:18px;height:18px;"></i> View Services</a>
        <a href="/contact" class="btn-secondary"><i data-lucide="phone" style="width:18px;height:18px;"></i> Contact Us</a>
      </div>
    </div>
  </section>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
