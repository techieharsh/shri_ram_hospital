import re
import os

pages_meta = {
    'index.php': {
        'activeNav': 'home',
        'defaultTitle': 'Shri Ram Hospital – Aonla, Bareilly | Dr. Hardeep Singh | General Physician & Paediatrics'
    },
    'about.php': {
        'activeNav': 'about',
        'defaultTitle': 'About Us | Shri Ram Hospital – Aonla, Bareilly'
    },
    'doctors.php': {
        'activeNav': 'doctors',
        'defaultTitle': 'Dr. Hardeep Singh – General Physician & Paediatrics | Shri Ram Hospital Aonla'
    },
    'services.php': {
        'activeNav': 'services',
        'defaultTitle': 'Treatments & Clinical Services | Shri Ram Hospital – Aonla, Bareilly'
    },
    'facilities.php': {
        'activeNav': 'facilities',
        'defaultTitle': 'Hospital Facilities & Infrastructure | Shri Ram Hospital – Aonla, Bareilly'
    },
    'gallery.php': {
        'activeNav': 'gallery',
        'defaultTitle': 'Hospital Photo Gallery | Shri Ram Hospital – Aonla, Bareilly'
    },
    'appointment.php': {
        'activeNav': 'appointment',
        'defaultTitle': 'Book OPD Token & Consultation | Shri Ram Hospital – Aonla, Bareilly'
    },
    'contact.php': {
        'activeNav': 'contact',
        'defaultTitle': 'Contact & Directions | Shri Ram Hospital Aonla Bareilly | Dr. Hardeep Singh'
    }
}

# 1. Create header.php
header_code = """<?php
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

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="assets/css/style.css">

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
        <a href="doctors.php" class="nav-link <?= ($activeNav === 'doctors') ? 'active' : '' ?>">Dr. Hardeep Singh</a>
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
      <a href="doctors.php" class="mobile-link <?= ($activeNav === 'doctors') ? 'active' : '' ?>">Dr. Hardeep Singh (Doctor Profile) <span>&rarr;</span></a>
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
"""

with open('header.php', 'w', encoding='utf-8') as f:
    f.write(header_code)
print("Saved header.php")

# Also save includes/header.php
with open('includes/header.php', 'w', encoding='utf-8') as f:
    f.write("<?php require_once __DIR__ . '/../header.php'; ?>\n")
print("Saved includes/header.php")

# 2. Create footer.php
footer_code = """<?php
/**
 * Shri Ram Hospital – Aonla, Bareilly
 * Global Footer Component (footer.php)
 */
$activeNav = $activeNav ?? '';
?>
  <!-- ===================================================================
       FOOTER
       =================================================================== -->
  <footer class="site-footer">
    <div class="container footer-grid">
      <div>
        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 14px;">
          <img src="assets/images/shri_ram_hospital_aonla_bareilly_uttar_pradesh.png" alt="Shri Ram Hospital Logo" class="footer-logo-img" width="58" height="58">
          <div>
            <h4 style="color: #ffffff; font-size: 1.15rem; font-weight: 800; line-height: 1.1;">SHRI RAM HOSPITAL</h4>
            <span style="font-size: 0.72rem; color: #38bdf8;">Aonla, Bareilly (U.P.)</span>
          </div>
        </div>
        <p class="footer-desc">
          Under the expert care of <strong>Dr. Hardeep Singh</strong> (General Physician &amp; Paediatrics), Shri Ram Hospital is committed to compassionate, affordable, and accurate clinical healing for all families.
        </p>
        <div style="font-size: 0.82rem; color: #38bdf8; font-weight: 600;">
          💙 Trusted Care &bull; Accurate Diagnosis &bull; Compassionate Treatment
        </div>
      </div>

      <div>
        <h4 class="footer-col-title">Clinical Specialities</h4>
        <div class="footer-links">
          <a href="services.php#fever">Fever &amp; Viral Care (बुखार)</a>
          <a href="services.php#diabetes">Diabetes Care &amp; Monitoring</a>
          <a href="services.php#bp">Blood Pressure &amp; Hypertension</a>
          <a href="services.php#paediatrics">Paediatrics &amp; Child Health</a>
          <a href="services.php#checkup">General Health Checkups</a>
          <a href="facilities.php">Nebulization &amp; Oxygen Care</a>
        </div>
      </div>

      <div>
        <h4 class="footer-col-title">Quick Links</h4>
        <div class="footer-links">
          <a href="index.php">Home</a>
          <a href="about.php">About Hospital</a>
          <a href="doctors.php">Dr. Hardeep Singh (Profile)</a>
          <a href="services.php">Treatments &amp; OPD</a>
          <a href="facilities.php">Hospital Facilities</a>
          <a href="gallery.php">Photo Gallery (Real Photos)</a>
          <a href="appointment.php">Book OPD Token</a>
          <a href="contact.php">Contact &amp; Location</a>
          <a href="admin.php">Staff OPD Dashboard</a>
        </div>
      </div>

      <div>
        <h4 class="footer-col-title">Emergency Contact</h4>
        <div class="footer-emergency-alert">
          <strong>24/7 Helpline &amp; Reception</strong>
          Contact: <a href="tel:+917827355717" style="color: #ffffff; font-weight: 700;">078273 55717</a><br>
          Email: <a href="mailto:shriramhospital229@gmail.com" style="color: #ffffff; text-decoration: underline;">shriramhospital229@gmail.com</a>
        </div>
        <p style="font-size: 0.8rem; margin-top: 12px; color: #64748b;">
          Krishan Vihar Colony, Opposite 132 KV Power House, Aonla, India, 243301
        </p>
      </div>
    </div>

    <div class="container footer-bottom">
      <div>
        &copy; <?= date('Y') ?> <strong>Shri Ram Hospital – Aonla, Bareilly</strong>. All Rights Reserved.
      </div>
      <div>
        Senior Consultant: <strong>Dr. Hardeep Singh</strong> &bull; General Physician &amp; Paediatrics
      </div>
    </div>
  </footer>

  <!-- ===================================================================
       FLOATING WHATSAPP BUTTON (DESKTOP / TABLET)
       =================================================================== -->
  <a href="https://wa.me/917827355717?text=Namaste%20Dr.%20Hardeep%20Singh%20Ji%2C%20I%20want%20to%20consult%20at%20Shri%20Ram%20Hospital%20Aonla." 
     target="_blank" 
     class="floating-whatsapp" 
     aria-label="Chat on WhatsApp with Shri Ram Hospital">
    <svg viewBox="0 0 24 24"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
  </a>

  <!-- ===================================================================
       STICKY BOTTOM BAR FOR MOBILE PHONES
       =================================================================== -->
  <div class="mobile-bottom-bar">
    <a href="tel:+917827355717" class="mobile-bar-btn call-btn">
      <svg viewBox="0 0 24 24" fill="currentColor"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
      <span>Call</span>
    </a>
    <a href="https://wa.me/917827355717?text=Namaste%20Dr.%20Hardeep%20Singh%20Ji%2C%20I%20want%20to%20consult%20at%20Shri%20Ram%20Hospital%20Aonla." target="_blank" class="mobile-bar-btn wa-btn">
      <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
      <span>WhatsApp</span>
    </a>
    <a href="appointment.php" class="mobile-bar-btn book-btn <?= ($activeNav === 'appointment') ? 'active' : '' ?>">
      <svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11z"/></svg>
      <span>Book OPD</span>
    </a>
    <a href="gallery.php" class="mobile-bar-btn <?= ($activeNav === 'gallery') ? 'active' : '' ?>">
      <svg viewBox="0 0 24 24" fill="currentColor"><path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/></svg>
      <span>Photos</span>
    </a>
    <a href="contact.php" class="mobile-bar-btn <?= ($activeNav === 'contact') ? 'active' : '' ?>">
      <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
      <span>Location</span>
    </a>
  </div>

  <!-- ===================================================================
       APPOINTMENT SLIP MODAL (POPUP & PRINTABLE)
       =================================================================== -->
  <div id="appointmentSlipModal" class="modal-backdrop">
    <div class="appointment-slip-modal">
      <button id="modalCloseBtn" class="modal-close-btn" aria-label="Close dialog">&times;</button>
      
      <div class="printable-slip-wrapper">
        <div class="slip-header">
          <div style="font-size: 0.8rem; font-weight: 700; color: var(--secondary-dark); text-transform: uppercase;">
            श्री राम हॉस्पिटल • आँवला (बरेली)
          </div>
          <h2 class="slip-hospital-title">SHRI RAM HOSPITAL</h2>
          <div class="slip-hospital-tagline">
            Trusted Care &bull; Accurate Diagnosis &bull; Compassionate Treatment
          </div>
          <div style="font-size: 0.78rem; color: var(--text-muted); margin-top: 4px;">
            Consultant: <strong>Dr. Hardeep Singh</strong> (General Physician & Paediatrics)
          </div>
        </div>

        <div class="slip-token-banner">
          <div class="slip-token-label">OPD Consultation Token No.</div>
          <div id="slipTokenId" class="slip-token-number">SRH-2611-4892</div>
        </div>

        <div class="slip-details-grid">
          <div class="slip-detail-col">
            <strong>Patient Name:</strong>
            <span id="slipPatientName">Ramesh Kumar</span>
          </div>
          <div class="slip-detail-col">
            <strong>Mobile:</strong>
            <span id="slipPatientPhone">94120XXXXX</span>
          </div>
          <div class="slip-detail-col">
            <strong>Age / Gender:</strong>
            <span id="slipPatientAgeGender">28 Yrs / Male</span>
          </div>
          <div class="slip-detail-col">
            <strong>Concern / Dept:</strong>
            <span id="slipDepartment">Fever & Viral Care</span>
          </div>
          <div class="slip-detail-col">
            <strong>Appointment Date:</strong>
            <span id="slipDate">Wednesday, 18 Nov 2026</span>
          </div>
          <div class="slip-detail-col">
            <strong>Time Slot:</strong>
            <span id="slipSlot">09:30 AM – 11:30 AM</span>
          </div>
        </div>

        <div class="slip-instructions">
          <strong>📌 Instructions for Patient:</strong><br>
          1. Please report at Shri Ram Hospital reception 15 minutes before your time slot.<br>
          2. Show this digital slip on your mobile or bring a printed copy.<br>
          3. Address: Krishan Vihar Colony, Opp. 132 KV Power House, Aonla. Helpline: 078273 55717.
        </div>

        <div class="slip-modal-actions">
          <button type="button" id="printSlipBtn" class="btn btn-outline">
            🖨️ Print Slip / Save PDF
          </button>
          <a href="https://wa.me/917827355717" id="slipWhatsAppShare" target="_blank" class="btn btn-whatsapp">
            💬 Send to Reception on WhatsApp
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- ===================================================================
       FULLSCREEN REAL HOSPITAL GALLERY LIGHTBOX MODAL
       =================================================================== -->
  <div id="galleryLightbox" class="gallery-lightbox" role="dialog" aria-modal="true" aria-label="Hospital Photo Preview">
    <div class="gallery-lightbox-overlay"></div>
    <div class="lightbox-content-box">
      <button id="lightboxCloseBtn" class="lightbox-close-btn" aria-label="Close Lightbox">&times;</button>
      
      <button id="lightboxPrevBtn" class="lightbox-nav-btn lightbox-prev-btn" aria-label="Previous Photo">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/></svg>
      </button>

      <div class="lightbox-img-wrap">
        <img id="lightboxImg" class="lightbox-img" src="assets/images/real/dsc_3484.jpg" alt="Shri Ram Hospital Aonla Photo">
      </div>

      <button id="lightboxNextBtn" class="lightbox-nav-btn lightbox-next-btn" aria-label="Next Photo">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>
      </button>

      <div class="lightbox-meta-bar">
        <div class="lightbox-text-col">
          <div id="lightboxTitle" class="lightbox-title">Shri Ram Hospital Campus</div>
          <div id="lightboxSub" class="lightbox-sub">श्री राम हॉस्पिटल – आँवला (बरेली)</div>
        </div>
        <div id="lightboxCounter" class="lightbox-counter">1 / 6</div>
      </div>
    </div>
  </div>

  <!-- JavaScript -->
  <script src="assets/js/main.js"></script>
</body>
</html>
"""

with open('footer.php', 'w', encoding='utf-8') as f:
    f.write(footer_code)
print("Saved footer.php")

# Also save includes/footer.php
with open('includes/footer.php', 'w', encoding='utf-8') as f:
    f.write("<?php require_once __DIR__ . '/../footer.php'; ?>\n")
print("Saved includes/footer.php")

# 3. Refactor all 8 pages
for page, info in pages_meta.items():
    if not os.path.exists(page):
        continue
    with open(page, 'r', encoding='utf-8') as f:
        content = f.read()
    
    # Extract Title
    title_m = re.search(r'<title>(.*?)</title>', content, re.DOTALL)
    page_title = title_m.group(1).strip() if title_m else info['defaultTitle']
    
    # Extract Description
    desc_m = re.search(r'<meta\s+name=["\']description["\']\s+content=["\'](.*?)["\']', content, re.DOTALL | re.IGNORECASE)
    page_desc = desc_m.group(1).strip() if desc_m else ''
    
    # Extract Canonical
    canon_m = re.search(r'<link\s+rel=["\']canonical["\']\s+href=["\'](.*?)["\']', content, re.DOTALL | re.IGNORECASE)
    canonical_url = canon_m.group(1).strip() if canon_m else 'https://shriramhospitalaonla.in/'
    
    # Extract Schema.org JSON-LD (if any)
    schema_m = re.search(r'(<script\s+type=["\']application/ld\+json["\']>.*?</script>)', content, re.DOTALL | re.IGNORECASE)
    extra_head = schema_m.group(1).strip() if schema_m else ''
    
    # Find page body: start after </aside>
    aside_end = content.find('</aside>')
    if aside_end != -1:
        body_start = aside_end + len('</aside>')
    else:
        # Fallback to after </header>
        header_end = content.find('</header>')
        body_start = header_end + len('</header>') if header_end != -1 else 0
        
    # Find page body end: before <footer class="site-footer">
    footer_start = content.find('<footer class="site-footer">')
    if footer_start != -1:
        # Look backwards for preceding section comment
        prev_comment = content.rfind('<!-- ===', 0, footer_start)
        if prev_comment != -1 and 'FOOTER' in content[prev_comment:footer_start]:
            body_end = prev_comment
        else:
            body_end = footer_start
    else:
        body_end = len(content)
        
    page_body = content[body_start:body_end].strip()
    
    # Escape quotes in PHP variables
    esc_title = page_title.replace("'", "\\'")
    esc_desc = page_desc.replace("'", "\\'")
    esc_canon = canonical_url.replace("'", "\\'")
    
    # Build clean refactored page
    new_page_content = f"""<?php
/**
 * Shri Ram Hospital – Aonla, Bareilly | {page}
 */
$pageTitle = '{esc_title}';
$pageDesc = '{esc_desc}';
$canonicalUrl = '{esc_canon}';
$activeNav = '{info['activeNav']}';
"""
    if extra_head:
        new_page_content += f"""$extraHead = <<<'EOD'
{extra_head}
EOD;
"""
    new_page_content += """include 'header.php';
?>

"""
    new_page_content += page_body + "\n\n"
    new_page_content += """<?php
include 'footer.php';
?>
"""

    with open(page, 'w', encoding='utf-8') as f:
        f.write(new_page_content)
    print(f"Refactored {page} with separate header.php and footer.php")

print("All 8 public pages refactored successfully!")
