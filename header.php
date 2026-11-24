<?php
/**
 * Shri Ram Hospital – Aonla, Bareilly
 * Global Header Component (header.php)
 */
$pageTitle = $pageTitle ?? 'Shri Ram Hospital – Aonla, Bareilly | Dr. Hardeep Singh | General Physician & Paediatrics';
$pageDesc = $pageDesc ?? 'Shri Ram Hospital in Aonla, Bareilly. Trusted medical care by Dr. Hardeep Singh (General Physician & Paediatrics). Specialized in Fever, Diabetes, Blood Pressure (BP), and Child Health.';
$pageKeywords = $pageKeywords ?? 'Shri Ram Hospital Aonla, Dr Hardeep Singh Aonla, Doctor in Aonla Bareilly, General Physician Aonla, Child Specialist Aonla, Fever Diabetes BP Treatment Bareilly, Hospital near me Aonla, Best hospital in Aonla';
$canonicalUrl = $canonicalUrl ?? 'https://shriramhospitalaonla.in/';
$ogImage = $ogImage ?? 'assets/images/shri_ram_hospital_aonla_bareilly_uttar_pradesh.png';
$activeNav = $activeNav ?? 'home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <meta name="description" content="<?= htmlspecialchars($pageDesc) ?>">
  <meta name="keywords" content="<?= htmlspecialchars($pageKeywords) ?>">
  <link rel="canonical" href="<?= htmlspecialchars($canonicalUrl) ?>">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= htmlspecialchars($canonicalUrl) ?>">
  <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($pageDesc) ?>">
  <meta property="og:image" content="<?= htmlspecialchars($ogImage) ?>">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="<?= htmlspecialchars($canonicalUrl) ?>">
  <meta property="twitter:title" content="<?= htmlspecialchars($pageTitle) ?>">
  <meta property="twitter:description" content="<?= htmlspecialchars($pageDesc) ?>">
  <meta property="twitter:image" content="<?= htmlspecialchars($ogImage) ?>">

  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="64x64" href="assets/images/favicon.png">
  <link rel="icon" type="image/svg+xml" href="assets/images/shri_ram_hospital_aonla_bareilly_uttar_pradesh.svg">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">

  <!-- Google Fonts: Plus Jakarta Sans & Noto Sans Devanagari for Hindi -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Main Stylesheet (Auto cache-busting on file change) -->
  <link rel="stylesheet" href="assets/css/style.css?v=<?= file_exists(__DIR__ . '/assets/css/style.css') ? filemtime(__DIR__ . '/assets/css/style.css') : '2.2' ?>">

  <?php if (!empty($extraHead)) echo $extraHead; ?>
</head>
<body>

  <!-- ===================================================================
       1. TOP EMERGENCY & TIMINGS BAR
       =================================================================== -->
  <div class="topbar">
    <div class="container topbar-wrapper">
      <div class="topbar-left">
        <div class="topbar-item">
          <span class="emergency-tag">24x7 Emergency</span>
          <span>Helpline: <a href="tel:+917827355717" style="color: #ffffff; font-weight: 700;">078273 55717</a></span>
        </div>
        <div class="topbar-item">
          <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
          <span>Krishan Vihar Colony, Opp. 132 KV Power House, Aonla (243301)</span>
        </div>
      </div>
      <div class="topbar-right">
        <div class="topbar-item">
          <svg viewBox="0 0 24 24"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
          <span>OPD: 9:00 AM - 2:00 PM &bull; 5:00 PM - 8:30 PM</span>
        </div>
        <div class="topbar-item">
          <a href="appointment.php" style="color: #bae6fd; font-weight: 600;">Token Booking Open</a>
        </div>
      </div>
    </div>
  </div>

  <!-- ===================================================================
       2. HEADER & NAVIGATION
       =================================================================== -->
  <header class="site-header">
    <div class="container header-wrapper">
      <!-- Brand Logo -->
      <a href="index.php" class="brand-logo" aria-label="Shri Ram Hospital Home">
        <img src="assets/images/shri_ram_hospital_aonla_bareilly_uttar_pradesh.png" alt="Shri Ram Hospital Aonla Bareilly Uttar Pradesh Logo" class="brand-logo-img" width="78" height="74">
        <div class="brand-text-col">
          <span class="brand-hindi">श्री राम हॉस्पिटल • आँवला (बरेली)</span>
          <span class="brand-title">SHRI RAM <span>HOSPITAL</span></span>
          <span class="brand-subtitle">Dr. Hardeep Singh | Physician & Paediatrics</span>
        </div>
      </a>

      <!-- Desktop Nav -->
      <nav class="nav-desktop">
        <a href="index.php" class="nav-link <?= ($activeNav === 'home') ? 'active' : '' ?>">Home</a>
        <a href="about.php" class="nav-link <?= ($activeNav === 'about') ? 'active' : '' ?>">About</a>
        <a href="services.php" class="nav-link <?= ($activeNav === 'services') ? 'active' : '' ?>">Treatments</a>
        <a href="facilities.php" class="nav-link <?= ($activeNav === 'facilities') ? 'active' : '' ?>">Facilities</a>
        <a href="gallery.php" class="nav-link <?= ($activeNav === 'gallery') ? 'active' : '' ?>">Photo Gallery</a>
        <a href="contact.php" class="nav-link <?= ($activeNav === 'contact') ? 'active' : '' ?>">Contact</a>
      </nav>

      <!-- Action CTA Buttons -->
      <div class="header-cta-group">
        <a href="tel:+917827355717" class="btn btn-outline btn-sm">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
          <span>078273 55717</span>
        </a>
        <a href="appointment.php" class="btn btn-primary btn-sm">
          <span>Book Appointment</span>
        </a>
      </div>

      <!-- Mobile Hamburger Toggle -->
      <button class="mobile-nav-toggle" aria-label="Toggle navigation menu">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </header>

  <!-- Mobile Drawer Backdrop & Drawer -->
  <div class="mobile-drawer-backdrop"></div>
  <aside class="mobile-nav-drawer">
    <div style="margin-bottom: 20px;">
      <span style="font-size: 0.8rem; font-weight: 700; color: var(--secondary-dark); text-transform: uppercase;">Shri Ram Hospital</span>
      <h3 style="font-size: 1.3rem; font-weight: 800; color: var(--dark);">Aonla, Bareilly</h3>
      <p style="font-size: 0.85rem; color: var(--text-muted);">Dr. Hardeep Singh (General Physician & Paediatrics)</p>
    </div>
    <div class="mobile-links">
      <a href="index.php" class="mobile-link <?= ($activeNav === 'home') ? 'active' : '' ?>">Home <span>&rarr;</span></a>
      <a href="about.php" class="mobile-link <?= ($activeNav === 'about') ? 'active' : '' ?>">About Shri Ram Hospital <span>&rarr;</span></a>
      <a href="services.php" class="mobile-link <?= ($activeNav === 'services') ? 'active' : '' ?>">Treatments &amp; Specialities <span>&rarr;</span></a>
      <a href="facilities.php" class="mobile-link <?= ($activeNav === 'facilities') ? 'active' : '' ?>">Hospital Facilities &amp; Infrastructure <span>&rarr;</span></a>
      <a href="gallery.php" class="mobile-link <?= ($activeNav === 'gallery') ? 'active' : '' ?>">Real Photo Gallery (19 Photos) <span>&rarr;</span></a>
      <a href="appointment.php" class="mobile-link <?= ($activeNav === 'appointment') ? 'active' : '' ?>">Book OPD Token <span>&rarr;</span></a>
      <a href="contact.php" class="mobile-link <?= ($activeNav === 'contact') ? 'active' : '' ?>">Contact &amp; Directions <span>&rarr;</span></a>
    </div>
    <div style="display: flex; flex-direction: column; gap: 10px; margin-top: auto;">
      <a href="tel:+917827355717" class="btn btn-outline" style="width: 100%;">
        📞 Call Hospital: 078273 55717
      </a>
      <a href="appointment.php" class="btn btn-primary" style="width: 100%;">
        📅 Book OPD Appointment
      </a>
    </div>
  </aside>
