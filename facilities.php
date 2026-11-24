<?php
/**
 * Shri Ram Hospital – Aonla, Bareilly | facilities.php
 */
$pageTitle = 'Hospital Facilities & Infrastructure | Shri Ram Hospital – Aonla, Bareilly';
$pageDesc = 'Explore clinical facilities at Shri Ram Hospital Aonla, Bareilly. Air-cooled OPD chambers, daycare observation beds, ultrasonic nebulizer, emergency oxygen support, and 24/7 in-house medical pharmacy.';
$canonicalUrl = 'https://shriramhospitalaonla.in/facilities.php';
$activeNav = 'facilities';
$extraHead = <<<'EOD'
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Hospital Facilities & Infrastructure - Shri Ram Hospital Aonla",
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
          "name": "Facilities & Infrastructure",
          "item": "https://shriramhospitalaonla.in/facilities.php"
        }
      ]
    }
  }
  </script>
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
          <span class="current">Facilities &amp; Infrastructure</span>
        </nav>
        <span class="subpage-badge">Modern &amp; Hygienic Campus</span>
        <h1 class="subpage-title">Hospital Facilities &amp; Patient Infrastructure</h1>
        <p class="subpage-desc">
          Explore the authentic medical facilities at Shri Ram Hospital, Aonla. Purposefully designed for patient hygiene, immediate clinical response, and dignified family comfort.
        </p>
        <div class="subpage-cta-row">
          <a href="gallery.php" class="btn btn-primary">View Photo Gallery (19 DSLR Photos)</a>
          <a href="appointment.php" class="btn btn-outline" >Book OPD Token</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================================================================
       4. FACILITIES IN-DEPTH PHOTO SHOWCASES
       =================================================================== -->
  <section class="content-section">
    <div class="container">

      <!-- Facility 1: Hospital Building & Road Access -->
      <div class="facility-feature-row">
        <div class="facility-img-pane">
          <img src="assets/images/real/dsc_3530.jpg" alt="Shri Ram Hospital Campus & Building Exterior, Aonla" loading="lazy">
        </div>
        <div class="facility-text-pane">
          <span class="section-badge" style="margin-bottom: 6px;">Campus Facade</span>
          <h2 style="font-size: 1.6rem; font-weight: 800; color: var(--dark); margin-bottom: 10px;">
            Hospital Building &amp; Accessible Location
          </h2>
          <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.65; margin-bottom: 16px;">
            Situated prominently in Krishan Vihar Colony opposite the 132 KV Power House in Aonla, the facility features wide roadside accessibility, dedicated ramp entry, and ample parking space for patient vehicles and emergency arrivals.
          </p>
          <div class="feature-check-list">
            <div class="feature-check-item">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
              <span>Prominent landmark opposite 132 KV Power House</span>
            </div>
            <div class="feature-check-item">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
              <span>Quick direct transit from Bareilly Road &amp; Budaun Road</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Facility 2: Reception & Lobby -->
      <div class="facility-feature-row">
        <div class="facility-img-pane">
          <img src="assets/images/real/dsc_3496.jpg" alt="Patient Reception & Waiting Lounge Shri Ram Hospital Aonla" loading="lazy">
        </div>
        <div class="facility-text-pane">
          <span class="section-badge" style="margin-bottom: 6px;">Patient Front Desk</span>
          <h2 style="font-size: 1.6rem; font-weight: 800; color: var(--dark); margin-bottom: 10px;">
            Patient Registration &amp; Waiting Lobby
          </h2>
          <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.65; margin-bottom: 16px;">
            A spacious, air-cooled reception area designed to minimize waiting fatigue. Our reception team assists patients with digital OPD tokens, emergency triage, and prescription coordination.
          </p>
          <div class="feature-check-list">
            <div class="feature-check-item">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
              <span>Computerized OPD Token Generation</span>
            </div>
            <div class="feature-check-item">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
              <span>Priority assistance for elderly, pediatric, and fever cases</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Facility 3: Doctor Chamber -->
      <div class="facility-feature-row">
        <div class="facility-img-pane">
          <img src="assets/images/real/dsc_3522.jpg" alt="Dr Hardeep Singh Consultation Chamber (OPD 1)" loading="lazy">
        </div>
        <div class="facility-text-pane">
          <span class="section-badge" style="margin-bottom: 6px;">Clinical Chambers</span>
          <h2 style="font-size: 1.6rem; font-weight: 800; color: var(--dark); margin-bottom: 10px;">
            Private Doctor Consultation Chamber
          </h2>
          <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.65; margin-bottom: 16px;">
            Dr. Hardeep Singh's chamber ensures complete privacy and comfort for physical examination. Equipped with modern diagnostic instruments, digital bp monitors, and clinical assessment tools.
          </p>
          <div class="feature-check-list">
            <div class="feature-check-item">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
              <span>Sanitized examination table &amp; diagnostic lighting</span>
            </div>
            <div class="feature-check-item">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
              <span>Quiet environment for detailed history taking</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Facility 4: Day Care Ward -->
      <div class="facility-feature-row">
        <div class="facility-img-pane">
          <img src="assets/images/real/dsc_3502.jpg" alt="Day Care Observation Ward Beds" loading="lazy">
        </div>
        <div class="facility-text-pane">
          <span class="section-badge" style="margin-bottom: 6px;">Recovery &amp; Hydration</span>
          <h2 style="font-size: 1.6rem; font-weight: 800; color: var(--dark); margin-bottom: 10px;">
            Day Care Observation Ward Beds
          </h2>
          <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.65; margin-bottom: 16px;">
            For patients who require short-stay medical observation, IV fluid hydration (Normal Saline, Ringer Lactate), injectable antipyretics for stubborn fevers, or stabilization following acute pain or diarrhoea.
          </p>
          <div class="feature-check-list">
            <div class="feature-check-item">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
              <span>Clean linen, sanitized bed frames, and IV drip stands</span>
            </div>
            <div class="feature-check-item">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
              <span>Continuous temperature and vitals surveillance</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Facility 5: Pharmacy -->
      <div class="facility-feature-row">
        <div class="facility-img-pane">
          <img src="assets/images/real/dsc_3528.jpg" alt="24/7 In-House Medical Pharmacy Shri Ram Hospital" loading="lazy">
        </div>
        <div class="facility-text-pane">
          <span class="section-badge" style="margin-bottom: 6px;">24/7 Dispensary</span>
          <h2 style="font-size: 1.6rem; font-weight: 800; color: var(--dark); margin-bottom: 10px;">
            In-House Medical Pharmacy &amp; Store
          </h2>
          <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.65; margin-bottom: 16px;">
            Patients do not need to wander outside in search of prescribed medications. Our in-house pharmacy stocks genuine branded medicines, pediatric oral solutions, emergency ampoules, sterile dressing materials, and essential IV fluids.
          </p>
          <div class="feature-check-list">
            <div class="feature-check-item">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
              <span>100% Genuine batch-verified medications</span>
            </div>
            <div class="feature-check-item">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
              <span>Full range of pediatric syrups, drops, and inhaler spacers</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

<?php
include 'footer.php';
?>
