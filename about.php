<?php
/**
 * Shri Ram Hospital – Aonla, Bareilly | about.php
 */
$pageTitle = 'About Us | Shri Ram Hospital – Aonla, Bareilly | Dr. Hardeep Singh';
$pageDesc = 'Learn about Shri Ram Hospital in Aonla, Bareilly. Founded with a patient-first mission under Dr. Hardeep Singh (General Physician & Paediatrics). Trusted local healthcare facility with OPD, daycare, and pharmacy.';
$canonicalUrl = 'https://shriramhospitalaonla.in/about.php';
$activeNav = 'about';
$extraHead = <<<'EOD'
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "AboutPage",
    "mainEntity": {
      "@type": "Hospital",
      "name": "Shri Ram Hospital – Aonla, Bareilly",
      "telephone": "+917827355717",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Krishan Vihar Colony, Opposite 132 KV Power House",
        "addressLocality": "Aonla",
        "addressRegion": "Uttar Pradesh",
        "postalCode": "243301",
        "addressCountry": "IN"
      }
    },
    "breadcrumb": {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://shriramhospitalaonla.in/index.php"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "About Us",
          "item": "https://shriramhospitalaonla.in/about.php"
        }
      ]
    }
  }
  </script>

  <style>
    /* ===================================================================
       DOCTOR EXECUTIVE PROFILE & CONTENT REDESIGN (DR. HARDEEP SINGH)
       =================================================================== */
    .hero-doctor-card {
      position: relative;
      background: #ffffff;
      border-radius: var(--radius-lg, 20px);
      padding: 16px;
      box-shadow: 0 14px 34px rgba(2, 132, 199, 0.12), 0 4px 10px rgba(0, 0, 0, 0.04);
      border: 1px solid rgba(2, 132, 199, 0.2);
      max-width: 440px;
      margin: 0 auto;
    }
    .doctor-img-wrapper {
      position: relative;
      border-radius: var(--radius-md, 14px);
      overflow: hidden;
      background: #f1f5f9;
    }
    .doctor-img-wrapper img {
      width: 100%;
      height: auto;
      display: block;
      object-fit: cover;
    }
    .doc-live-status {
      position: absolute;
      top: 14px;
      left: 14px;
      background: rgba(15, 23, 42, 0.85);
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
      color: #ffffff;
      font-size: 0.78rem;
      font-weight: 700;
      padding: 5px 12px;
      border-radius: 9999px;
      display: inline-flex;
      align-items: center;
      gap: 7px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
      z-index: 2;
    }
    .doc-live-status .status-dot {
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: #10b981;
      box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.35);
      animation: pulse 2s infinite;
    }

    /* Upgraded doctor-info-overlay */
    .doctor-info-overlay {
      margin-top: 16px;
      background: #ffffff;
      border-radius: 14px;
      padding: 18px 20px 16px;
      border: 1px solid rgba(2, 132, 199, 0.22);
      border-top: 4px solid #0284c7;
      box-shadow: 0 6px 20px rgba(2, 132, 199, 0.08);
    }
    .doc-overlay-top {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 8px;
      margin-bottom: 8px;
    }
    .doc-badge-pill {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      background: #eff6ff;
      color: #0284c7;
      font-size: 0.74rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      padding: 5px 12px;
      border-radius: 9999px;
      border: 1px solid #bfdbfe;
    }
    .doc-verified-badge {
      display: inline-flex;
      align-items: center;
      gap: 4px;
      background: #ecfdf5;
      color: #059669;
      font-size: 0.72rem;
      font-weight: 700;
      padding: 4px 10px;
      border-radius: 9999px;
      border: 1px solid #a7f3d0;
    }
    .doc-name {
      font-size: 1.42rem;
      font-weight: 800;
      color: #0f172a;
      margin: 4px 0 6px;
      line-height: 1.25;
      letter-spacing: -0.02em;
    }
    .doc-specialty {
      font-size: 0.9rem;
      font-weight: 600;
      color: #0284c7;
      margin: 0 0 12px;
      display: flex;
      align-items: center;
      gap: 6px;
      line-height: 1.4;
    }
    .doc-timings-quick {
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      border-radius: 10px;
      padding: 10px 14px;
      display: flex;
      align-items: flex-start;
      gap: 10px;
      font-size: 0.82rem;
      color: #334155;
      line-height: 1.45;
    }
    .doc-timings-quick svg {
      color: #0284c7;
      flex-shrink: 0;
      margin-top: 2px;
    }
    .doc-timings-quick strong {
      display: block;
      font-size: 0.78rem;
      font-weight: 700;
      color: #0f172a;
      margin-bottom: 2px;
      text-transform: uppercase;
      letter-spacing: 0.03em;
    }
    .doc-overlay-trust {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-top: 12px;
      padding-top: 10px;
      border-top: 1px dashed #e2e8f0;
      font-size: 0.78rem;
    }
    .doc-rating-stars {
      color: #f59e0b;
      font-weight: 700;
    }
    .doc-rating-stars span {
      color: #0f172a;
      font-weight: 700;
      margin-left: 4px;
    }
    .doc-trust-text {
      color: #64748b;
      font-weight: 600;
    }

    /* Headings & Header Block */
    .doc-header-block {
      margin-bottom: 16px;
    }
    .doc-header-badge {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      background: rgba(2, 132, 199, 0.1);
      color: #0284c7;
      font-weight: 700;
      font-size: 0.82rem;
      padding: 6px 14px;
      border-radius: 9999px;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      margin-bottom: 8px;
      border: 1px solid rgba(2, 132, 199, 0.22);
    }
    .doc-section-title {
      font-size: 2.35rem;
      font-weight: 800;
      color: #0f172a;
      margin: 4px 0 6px;
      line-height: 1.2;
      letter-spacing: -0.025em;
    }
    .doc-lead-role {
      font-size: 1.05rem;
      font-weight: 700;
      color: #0284c7;
      margin: 0;
      letter-spacing: -0.01em;
    }

    /* Credential Badges Row */
    .doc-creds-pills {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      gap: 8px;
      margin: 0 0 18px;
    }
    .doc-cred-tag {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      padding: 7px 14px;
      border-radius: 9999px;
      font-size: 0.83rem;
      font-weight: 700;
      letter-spacing: 0.01em;
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.03);
      transition: transform 0.2s ease;
    }
    .doc-cred-tag:hover {
      transform: translateY(-1px);
    }
    .doc-cred-tag svg {
      flex-shrink: 0;
    }
    .doc-cred-tag.tag-blue {
      background: #eff6ff;
      color: #1d4ed8;
      border: 1px solid #bfdbfe;
    }
    .doc-cred-tag.tag-cyan {
      background: #ecfeff;
      color: #0e7490;
      border: 1px solid #a5f3fc;
    }
    .doc-cred-tag.tag-emerald {
      background: #ecfdf5;
      color: #047857;
      border: 1px solid #a7f3d0;
    }

    /* Paragraphs & Philosophy Quote Banner */
    .doc-philosophy-card {
      position: relative;
      background: linear-gradient(135deg, #f0fdf4 0%, #f0f9ff 100%);
      border-left: 4px solid #0284c7;
      border-radius: 0 14px 14px 0;
      padding: 18px 22px 14px 22px;
      margin-bottom: 20px;
      box-shadow: 0 4px 14px rgba(2, 132, 199, 0.05);
      border-top: 1px solid rgba(2, 132, 199, 0.12);
      border-right: 1px solid rgba(2, 132, 199, 0.12);
      border-bottom: 1px solid rgba(2, 132, 199, 0.12);
    }
    .doc-philosophy-card .quote-icon {
      font-size: 2.6rem;
      line-height: 1;
      color: #0284c7;
      opacity: 0.35;
      font-family: Georgia, serif;
      margin-bottom: -10px;
    }
    .doc-philosophy-card .quote-text {
      font-size: 1.02rem;
      line-height: 1.7;
      font-style: italic;
      color: #1e293b;
      font-weight: 500;
      margin: 0 0 10px 0;
    }
    .doc-philosophy-card .quote-author {
      font-size: 0.78rem;
      font-weight: 700;
      color: #0369a1;
      text-transform: uppercase;
      letter-spacing: 0.07em;
      display: flex;
      align-items: center;
      gap: 8px;
    }
    .doc-philosophy-card .author-line {
      display: inline-block;
      width: 20px;
      height: 2px;
      background: #0369a1;
    }
    .doc-bio-desc {
      color: #334155;
      font-size: 1.02rem;
      line-height: 1.75;
      margin-bottom: 22px;
      font-weight: 400;
    }
    .doc-bio-desc strong {
      color: #0f172a;
      font-weight: 600;
    }

    /* 2x2 Structured Clinical Cards */
    .doc-expert-grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: 12px;
      margin: 0 0 24px;
    }
    @media (min-width: 640px) {
      .doc-expert-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }
    .doc-expert-card {
      background: #ffffff;
      border: 1px solid #e2e8f0;
      border-radius: 14px;
      padding: 16px 18px;
      display: flex;
      align-items: flex-start;
      gap: 14px;
      box-shadow: 0 2px 8px rgba(15, 23, 42, 0.03);
      transition: all 0.25s ease;
    }
    .doc-expert-card:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 22px rgba(2, 132, 199, 0.09);
      border-color: rgba(2, 132, 199, 0.35);
    }
    .doc-card-icon {
      width: 44px;
      height: 44px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }
    .doc-card-icon.icon-blue {
      background: rgba(2, 132, 199, 0.1);
      color: #0284c7;
    }
    .doc-card-icon.icon-rose {
      background: rgba(244, 63, 94, 0.1);
      color: #e11d48;
    }
    .doc-card-icon.icon-amber {
      background: rgba(245, 158, 11, 0.1);
      color: #d97706;
    }
    .doc-card-icon.icon-emerald {
      background: rgba(16, 185, 129, 0.1);
      color: #059669;
    }
    .doc-card-body h4 {
      font-size: 1.02rem;
      font-weight: 700;
      color: #0f172a;
      margin: 0 0 5px 0;
      letter-spacing: -0.01em;
    }
    .doc-card-body p {
      font-size: 0.86rem;
      line-height: 1.55;
      color: #475569;
      margin: 0;
    }
    .doc-cta-group {
      display: flex;
      align-items: center;
      gap: 12px;
      flex-wrap: wrap;
    }
    .doc-emergency-pill {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 10px 16px;
      background: #fef2f2;
      border: 1px solid #fecaca;
      color: #dc2626;
      font-size: 0.84rem;
      font-weight: 700;
      border-radius: var(--radius-sm, 8px);
      text-decoration: none;
      transition: all 0.2s ease;
    }
    .doc-emergency-pill:hover {
      background: #fee2e2;
      color: #b91c1c;
    }
  </style>
EOD;
include 'header.php';
?>

<!-- ===================================================================
       3. SUBPAGE HERO & BREADCRUMBS
       =================================================================== -->
  <section class="subpage-hero">
    <div class="container">
      <div class="subpage-hero-inner">
        <nav class="breadcrumb" aria-label="Breadcrumbs">
          <a href="index.php">Home</a>
          <span class="separator">/</span>
          <span class="current">About Us</span>
        </nav>
        <span class="subpage-badge">Dedicated to Patient Well-Being</span>
        <h1 class="subpage-title">About Shri Ram Hospital – Aonla, Bareilly</h1>
        <p class="subpage-desc">
          Founded under the expert clinical vision of <strong>Dr. Hardeep Singh</strong>, Shri Ram Hospital has been a trusted beacon of compassionate, accurate, and affordable healing for families across Aonla, Bareilly district, and surrounding rural communities.
        </p>
        <div class="subpage-cta-row">
          <a href="appointment.php" class="btn btn-primary">Book Consultation</a>
          <a href="gallery.php" class="btn btn-outline" >View Hospital Campus Photos</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================================================================
       4. HOSPITAL MISSION & STORY
       =================================================================== -->
  <section class="content-section">
    <div class="container">
      <div class="grid-2col">
        <div>
          <span class="section-badge">Our Mission & Principles</span>
          <h2 style="font-size: 2.2rem; font-weight: 800; color: var(--dark); margin: 8px 0 16px; line-height: 1.25;">
            Healthcare Rooted in <span class="highlight-blue">Trust, Accuracy</span> & Compassion
          </h2>
          <p style="color: var(--text-muted); font-size: 1rem; line-height: 1.7; margin-bottom: 16px;">
            At Shri Ram Hospital, we believe that medical care must be both scientifically sound and deeply humane. Located conveniently opposite the 132 KV Power House in Krishan Vihar Colony, Aonla, our facility was established to eliminate the need for rural and semi-urban patients to travel far to major cities for primary and acute medical needs.
          </p>
          <p style="color: var(--text-muted); font-size: 1rem; line-height: 1.7; margin-bottom: 20px;">
            Whether a child is suffering from sudden respiratory wheezing or an elderly patient is managing high blood pressure and diabetes, we provide individualized, empathetic attention without rushed consultations or unnecessary commercialized tests.
          </p>

          <div class="feature-check-list">
            <div class="feature-check-item">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
              <span><strong>Meticulous Clinical Diagnosis:</strong> Deep examination before prescribing any medical regimen.</span>
            </div>
            <div class="feature-check-item">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
              <span><strong>Ethical Medical Practices:</strong> Completely rational prescriptions, genuine medicines, zero commercial bias.</span>
            </div>
            <div class="feature-check-item">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
              <span><strong>Child-Friendly Paediatric Care:</strong> Gentle bedside manner and painless approach for infants and toddlers.</span>
            </div>
            <div class="feature-check-item">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
              <span><strong>Integrated Facilities:</strong> Doctor chamber, daycare beds, oxygen, nebulization, and in-house pharmacy under one roof.</span>
            </div>
          </div>

          <div class="info-box-highlight">
            <h4>💙 Our Mottos and Guiding Principles</h4>
            <p>Trusted Care &bull; Accurate Diagnosis &bull; Compassionate Treatment (भरोसेमंद इलाज, सटीक जांच, संवेदनशील परामर्श)</p>
          </div>
        </div>

        <div>
          <!-- Real Hospital Building Photo Frame -->
          <div class="photo-card-frame">
            <img src="assets/images/real/dsc_3530.jpg" alt="Shri Ram Hospital Building Campus, Aonla Bareilly">
            <div class="photo-caption-tag">
              <span>🏥 Hospital Campus &amp; Entrance Facade</span>
              <a href="gallery.php" style="color: #38bdf8; font-weight: 700; text-decoration: underline;">View Gallery</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================================================================
       5. LEADERSHIP & CLINICAL HEAD: DR. HARDEEP SINGH
       =================================================================== -->
  <section id="doctor" class="section section-alt">
    <div class="container">
      <div class="grid-2col">
        <div>
          <!-- Doctor Portrait Card -->
          <div class="hero-doctor-card">
            <div class="doctor-img-wrapper">
              <span class="doc-live-status">
                <span class="status-dot"></span>
                Lead Consultant &bull; Aonla
              </span>
              <img src="assets/images/dr-hardeep-singh.jpg" alt="Dr. Hardeep Singh - Shri Ram Hospital Aonla Bareilly">
            </div>
            <div class="doctor-info-overlay">
              <div class="doc-overlay-top">
                <span class="doc-badge-pill">
                  <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                  Clinical Director &amp; Consultant
                </span>
                <span class="doc-verified-badge" title="Verified Medical Practitioner">
                  <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                  Verified
                </span>
              </div>
              <h3 class="doc-name">Dr. Hardeep Singh</h3>
              <p class="doc-specialty">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-2 10h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"/></svg>
                General Physician | Paediatrics (शिशु रोग विशेषज्ञ)
              </p>
              <div class="doc-timings-quick">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
                <div>
                  <strong>OPD Consultation Hours:</strong>
                  <span>Mon &ndash; Sat: 9:00 AM &ndash; 2:00 PM &bull; 5:00 PM &ndash; 8:30 PM</span>
                </div>
              </div>
              <div class="doc-overlay-trust">
                <div class="doc-rating-stars">★★★★★ <span>4.9/5 Rating</span></div>
                <div class="doc-trust-text">10+ Years Trust in Aonla</div>
              </div>
            </div>
          </div>
        </div>

        <div>
          <div class="doc-header-block">
            <span class="doc-header-badge">
              <svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
              Senior Consultant &amp; Clinical Head
            </span>
            <h2 class="doc-section-title">
              Dr. Hardeep Singh
            </h2>
            <p class="doc-lead-role">General Physician &amp; Child Health Specialist &bull; Aonla Bareilly</p>
          </div>

          <!-- Credential Badges Row -->
          <div class="doc-creds-pills">
            <span class="doc-cred-tag tag-blue">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-2 10h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"/></svg>
              General Physician (सामान्य चिकित्सक)
            </span>
            <span class="doc-cred-tag tag-cyan">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/></svg>
              Paediatrics (शिशु एवं बाल रोग)
            </span>
            <span class="doc-cred-tag tag-emerald">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
              10+ Years Dedicated Practice
            </span>
          </div>

          <!-- Doctor Philosophy Quote -->
          <div class="doc-philosophy-card">
            <div class="quote-icon">&ldquo;</div>
            <p class="quote-text">
              Accurate diagnosis is half the battle won. Our priority is to listen patiently, examine thoroughly, and formulate a clear, ethical treatment plan that ensures quick, sustainable relief for every patient.
            </p>
            <div class="quote-author">
              <span class="author-line"></span>
              Clinical Philosophy &amp; Patient Care Commitment
            </div>
          </div>

          <p class="doc-bio-desc">
            Dr. Hardeep Singh brings <strong>extensive clinical experience</strong> in both adult internal medicine and paediatric care. Over the past decade in Aonla, he has earned immense respect and trust for his <strong>empathetic bedside manner</strong>, precise fever investigations, and proactive metabolic disease management (diabetes &amp; high BP).
          </p>

          <!-- 2x2 Structured Clinical Cards -->
          <div class="doc-expert-grid">
            <div class="doc-expert-card">
              <div class="doc-card-icon icon-blue">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-2 10h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"/></svg>
              </div>
              <div class="doc-card-body">
                <h4>Acute Fevers &amp; Infections</h4>
                <p>Precise diagnostic workup for Typhoid, Dengue, Malaria, viral spikes, chest infections &amp; seasonal ailments.</p>
              </div>
            </div>

            <div class="doc-expert-card">
              <div class="doc-card-icon icon-rose">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
              </div>
              <div class="doc-card-body">
                <h4>Diabetes &amp; Blood Pressure</h4>
                <p>Proactive blood sugar control, hypertension management, preventive cardiometabolic care &amp; dietary guidance.</p>
              </div>
            </div>

            <div class="doc-expert-card">
              <div class="doc-card-icon icon-amber">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/></svg>
              </div>
              <div class="doc-card-body">
                <h4>Paediatrics (शिशु एवं बाल रोग)</h4>
                <p>Gentle newborn &amp; child health evaluations, respiratory wheezing, childhood fevers, allergies &amp; infant nutrition.</p>
              </div>
            </div>

            <div class="doc-expert-card">
              <div class="doc-card-icon icon-emerald">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
              </div>
              <div class="doc-card-body">
                <h4>Consultation Timings</h4>
                <p><strong>Mon&ndash;Sat:</strong> 9:00 AM &ndash; 2:00 PM &bull; 5:00 PM &ndash; 8:30 PM<br><strong>Sunday:</strong> 10:00 AM &ndash; 2:00 PM</p>
              </div>
            </div>
          </div>

          <!-- Direct Actions -->
          <div class="doc-cta-group">
            <a href="appointment.php" class="btn btn-primary">
              <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor" style="margin-right: 6px;"><path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/></svg>
              Book OPD Consultation Slip
            </a>
            <a href="https://wa.me/917827355717?text=Namaste%20Dr.%20Hardeep%20Singh%20Ji%2C%20I%20want%20to%20consult%20at%20Shri%20Ram%20Hospital%20Aonla." target="_blank" class="btn btn-whatsapp">
              <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor" style="margin-right: 6px;"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
              WhatsApp Dr. Hardeep Singh
            </a>
            <a href="tel:07827355717" class="doc-emergency-pill">
              <span class="status-dot" style="background: #dc2626;"></span>
              24/7 Helpline: 078273 55717
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================================================================
       6. REAL HOSPITAL PHOTO HIGHLIGHTS
       =================================================================== -->
  <section class="section">
    <div class="container">
      <div class="section-header">
        <span class="section-badge">Verified Infrastructure</span>
        <h2 class="section-title">Authentic Hospital Environment</h2>
        <p class="section-subtitle">
          Cleanliness, medical safety, and patient comfort are evident in every corner of our hospital.
        </p>
      </div>

      <div class="gallery-grid">
        <div class="gallery-card" data-full="assets/images/real/dsc_3496.jpg">
          <div class="gallery-card-thumb-wrap">
            <img src="assets/images/real/dsc_3496_thumb.jpg" alt="Shri Ram Hospital Reception Area" class="gallery-card-thumb" loading="lazy">
            <span class="gallery-card-category">Reception Desk</span>
          </div>
          <div class="gallery-card-body">
            <h3 class="gallery-card-title">Registration &amp; Waiting Lobby</h3>
            <p class="gallery-card-desc">Comfortable seating and dedicated desk for swift OPD token issuing.</p>
          </div>
        </div>

        <div class="gallery-card" data-full="assets/images/real/dsc_3522.jpg">
          <div class="gallery-card-thumb-wrap">
            <img src="assets/images/real/dsc_3522_thumb.jpg" alt="Dr Hardeep Singh Consultation Chamber" class="gallery-card-thumb" loading="lazy">
            <span class="gallery-card-category">Consultation Room</span>
          </div>
          <div class="gallery-card-body">
            <h3 class="gallery-card-title">Doctor Consultation Chamber</h3>
            <p class="gallery-card-desc">Sanitized, private medical room for thorough physical assessment.</p>
          </div>
        </div>

        <div class="gallery-card" data-full="assets/images/real/dsc_3502.jpg">
          <div class="gallery-card-thumb-wrap">
            <img src="assets/images/real/dsc_3502_thumb.jpg" alt="Daycare Ward Beds at Shri Ram Hospital" class="gallery-card-thumb" loading="lazy">
            <span class="gallery-card-category">Observation Ward</span>
          </div>
          <div class="gallery-card-body">
            <h3 class="gallery-card-title">Day Care Patient Ward</h3>
            <p class="gallery-card-desc">Equipped for saline infusion, injectable medications, and vitals monitoring.</p>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 35px;">
        <a href="gallery.php" class="btn btn-primary">
          Explore All 19 Real Hospital DSLR Photos &rarr;
        </a>
      </div>
    </div>
  </section>

<?php
include 'footer.php';
?>
