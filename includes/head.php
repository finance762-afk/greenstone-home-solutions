<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $pageTitle; ?></title>
  <meta name="description" content="<?php echo $pageDescription; ?>">
  <link rel="canonical" href="<?php echo $canonicalUrl; ?>">

  <!-- Open Graph -->
  <meta property="og:title" content="<?php echo $pageTitle; ?>">
  <meta property="og:description" content="<?php echo $pageDescription; ?>">
  <meta property="og:image" content="<?php echo $ogImage; ?>">
  <meta property="og:url" content="<?php echo $canonicalUrl; ?>">
  <meta property="og:type" content="website">

  <!-- Google Fonts — DM Serif Display + Inter + Cormorant Garamond (accent) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Inter:wght@400;500;600;700&family=Cormorant+Garamond:ital,wght@0,400;0,500;1,400;1,500&display=swap" rel="stylesheet">

  <!-- Preload heading font -->
  <link rel="preload" as="font" type="font/woff2" href="https://fonts.gstatic.com/s/dmserifdisplay/v15/-nFnOHM81r4j6k0gjAW3mujVU2B2G_5x0g.woff2" crossorigin>

  <!-- Lucide Icons -->
  <!-- Loaded in footer.php for render order -->

  <?php if (!empty($useSwiper)): ?>
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <?php endif; ?>

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="https://i.imgur.com/Tq3YbDp.png">

  <!-- Stylesheet -->
  <link rel="stylesheet" href="/assets/css/styles.css?v=7">

  <!-- Preconnect / DNS Prefetch -->
  <link rel="preconnect" href="https://unpkg.com">
  <link rel="dns-prefetch" href="https://unpkg.com">
  <link rel="preconnect" href="https://cdnjs.cloudflare.com">
  <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
  <link rel="dns-prefetch" href="https://www.googletagmanager.com">

  <!-- GA4 Placeholder -->
  <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-XXXXXXXXXX');
  </script> -->

  <?php if ($currentPage === 'home'): ?>
  <!-- Google Search Console Verification -->
  <!-- <meta name="google-site-verification" content="XXXXXXXXXX"> -->
  <?php endif; ?>

  <?php if (!empty($heroImage)): ?>
  <!-- Hero Image Preload -->
  <link rel="preload" as="image" href="<?php echo $heroImage; ?>">
  <?php endif; ?>

  <?php if (!empty($schemaMarkup)): ?>
  <!-- Schema JSON-LD -->
  <script type="application/ld+json">
    <?php echo $schemaMarkup; ?>
  </script>
  <?php endif; ?>
</head>
<body>
