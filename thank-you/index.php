<?php
$pageTitle       = "Thank You | Greenstone Home Solutions";
$pageDescription = "Thank you for contacting Greenstone Home Solutions. We will be in touch within one business day.";
$canonicalUrl    = "https://greenstonehomesolutions.com/thank-you";
$ogImage         = "https://i.imgur.com/JuesTnb.png";
$currentPage     = "";
$heroImage       = "";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;
$schemaMarkup    = '';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<meta name="robots" content="noindex, nofollow">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php'; ?>

<main id="main-content">
  <section style="padding: calc(var(--navbar-height) + var(--space-4xl)) var(--space-lg) var(--space-4xl); text-align: center; min-height: 80vh; display: flex; align-items: center; background: var(--bg-dark); color: #fff;">
    <div class="container">
      <i data-lucide="check-circle" style="width: 64px; height: 64px; color: var(--primary); margin-bottom: var(--space-xl);"></i>
      <h1 style="margin-bottom: var(--space-md);">Thank You for Contacting Greenstone Home Solutions!</h1>
      <p class="prose-centered" style="font-size: 1.1rem; margin-bottom: var(--space-md);">We've received your estimate request and will be in touch within one business day.</p>
      <p class="prose-centered" style="color: var(--text-light); margin-bottom: var(--space-2xl);">If your project is urgent, call us directly at <a href="tel:8042186459" style="color: var(--primary); font-weight: 700;">(804) 218-6459</a>.</p>
      <div style="display: flex; flex-wrap: wrap; gap: var(--space-md); justify-content: center;">
        <a href="/" class="btn-primary"><i data-lucide="home" style="width:18px;height:18px;"></i> Back to Home</a>
        <a href="/services" class="btn-secondary"><i data-lucide="hammer" style="width:18px;height:18px;"></i> View Services</a>
      </div>
    </div>
  </section>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
