<?php
/**
 * Shri Ram Hospital – Aonla, Bareilly | index.php
 */
$pageTitle = 'Shri Ram Hospital – Aonla, Bareilly | Dr. Hardeep Singh | General Physician & Paediatrics';
$pageDesc = 'Shri Ram Hospital in Aonla, Bareilly. Trusted medical care by Dr. Hardeep Singh (General Physician & Paediatrics). Specialized in Fever, Diabetes, Blood Pressure (BP), and Child Health. Real hospital campus, OPD, Daycare ward, and In-House Pharmacy.';
$canonicalUrl = 'https://shriramhospitalaonla.in/';
$activeNav = 'home';
$extraHead = <<<'EOD'
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Hospital",
    "name": "Shri Ram Hospital – Aonla, Bareilly",
    "alternateName": "श्री राम हॉस्पिटल आँवला",
    "image": "assets/images/shri_ram_hospital_aonla_bareilly_uttar_pradesh.jpeg",
    "logo": "assets/images/shri_ram_hospital_aonla_bareilly_uttar_pradesh.png",
    "telephone": "+917827355717",
    "email": "shriramhospital229@gmail.com",
    "url": "https://shriramhospitalaonla.in/",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Krishan Vihar Colony, Opposite 132 KV Power House",
      "addressLocality": "Aonla",
      "addressRegion": "Uttar Pradesh",
      "postalCode": "243301",
      "addressCountry": "IN"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": 28.283838,
      "longitude": 79.141706
    },
    "openingHoursSpecification": [
      {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
        "opens": "09:00",
        "closes": "20:30"
      },
      {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": "Sunday",
        "opens": "10:00",
        "closes": "14:00"
      }
    ],
    "medicalSpecialty": [
      "GeneralPractice",
      "Pediatric",
      "Cardiovascular",
      "Endocrine"
    ],
    "availableService": [
      {
        "@type": "MedicalTherapy",
        "name": "Fever & Viral Infection Care"
      },
      {
        "@type": "MedicalTherapy",
        "name": "Diabetes Mellitus & Blood Sugar Management"
      },
      {
        "@type": "MedicalTherapy",
        "name": "Blood Pressure & Hypertension Care"
      },
      {
        "@type": "MedicalTherapy",
        "name": "Paediatrics & Child Health Treatment"
      },
      {
        "@type": "MedicalTherapy",
        "name": "General Health Checkup & Preventive Medicine"
      }
    ],
    "priceRange": "₹₹",
    "founder": {
      "@type": "Person",
      "name": "Dr. Hardeep Singh",
      "jobTitle": "Senior General Physician & Paediatrician",
      "worksFor": {
        "@type": "Hospital",
        "name": "Shri Ram Hospital"
      }
    }
  }
  </script>

  <style>
    /* ===================================================================
       SEQUENTIAL CINEMATIC ENTRANCE ANIMATIONS (TITLE & DESCRIPTION)
       =================================================================== */
    .pure-slide:not(.active) .slide-caption-container {
      opacity: 0;
      pointer-events: none;
      transform: translateY(-50%) translateX(-25px);
      transition: opacity 0.4s cubic-bezier(0.4, 0, 0.2, 1), transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .pure-slide:not(.active) .slide-badge,
    .pure-slide:not(.active) .slide-title,
    .pure-slide:not(.active) .slide-desc {
      opacity: 0;
      animation: none !important;
    }
    .pure-slide.active .slide-caption-container {
      opacity: 1;
      transform: translateY(-50%) translateX(0);
      transition: opacity 0.5s ease-out, transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
    }

    /* STEP 1: Category Badge - Soft Drop-in */
    .pure-slide.active .slide-badge {
      animation: badgeSoftReveal 0.5s cubic-bezier(0.16, 1, 0.3, 1) 0.12s both;
    }
    @keyframes badgeSoftReveal {
      0% {
        opacity: 0;
        transform: translateY(-16px) scale(0.92);
      }
      100% {
        opacity: 1;
        transform: translateY(0) scale(1);
      }
    }

    /* STEP 2: Title - 3D Perspective Lift & Unblur (Different Style) */
    .pure-slide.active .slide-title {
      animation: cinemaTitleLift 0.85s cubic-bezier(0.16, 1, 0.3, 1) 0.28s both;
      transform-origin: 0% 100%;
    }
    @keyframes cinemaTitleLift {
      0% {
        opacity: 0;
        transform: translateY(42px) rotateX(24deg) scale(0.95);
        filter: blur(10px);
        letter-spacing: -1.2px;
      }
      65% {
        opacity: 0.95;
        transform: translateY(-2px) rotateX(-2deg) scale(1.005);
        filter: blur(0);
      }
      100% {
        opacity: 1;
        transform: translateY(0) rotateX(0deg) scale(1);
        filter: blur(0);
        letter-spacing: -0.6px;
      }
    }

    /* STEP 3: Description - Sequential Lateral Drift with Cyan Accent Line */
    .pure-slide.active .slide-desc {
      animation: cinemaDescDrift 0.85s cubic-bezier(0.16, 1, 0.3, 1) 0.72s both;
    }
    @keyframes cinemaDescDrift {
      0% {
        opacity: 0;
        transform: translateX(-40px) translateY(4px);
        filter: blur(6px);
      }
      100% {
        opacity: 1;
        transform: translateX(0) translateY(0);
        filter: blur(0);
      }
    }

    /* Typography & Clean Framing */
    .slide-title {
      font-size: clamp(1.9rem, 3.3vw, 2.85rem);
      font-weight: 800;
      line-height: 1.2;
      color: #ffffff;
      margin-bottom: 16px;
      letter-spacing: -0.6px;
      text-shadow: 0 3px 20px rgba(0, 0, 0, 0.85), 0 1px 4px rgba(0, 0, 0, 0.95);
      max-width: 650px;
    }
    .slide-desc {
      font-size: clamp(0.98rem, 1.3vw, 1.12rem);
      color: #f8fafc;
      line-height: 1.7;
      margin-bottom: 0;
      max-width: 600px;
      font-weight: 400;
      text-shadow: 0 2px 14px rgba(0, 0, 0, 0.8);
      border-left: 3px solid #38bdf8;
      padding: 8px 0 8px 18px;
      background: linear-gradient(90deg, rgba(2, 132, 199, 0.16) 0%, rgba(2, 132, 199, 0.03) 60%, transparent 100%);
      border-radius: 0 10px 10px 0;
    }

    @media (max-width: 768px) {
      .slide-title {
        font-size: 1.45rem;
        line-height: 1.25;
        margin-bottom: 10px;
      }
      .slide-desc {
        font-size: 0.88rem;
        line-height: 1.5;
        padding: 6px 0 6px 14px;
        -webkit-line-clamp: 3;
      }
    }
  </style>
EOD;
include 'header.php';
?>

<!-- ===================================================================
       3. FULL-WIDTH CLEAN HOSPITAL IMAGE SLIDER (FULL SCREEN DISPLAY)
       =================================================================== -->
  <section id="home" class="clean-hospital-hero">
    <div class="pure-image-slider" id="pureHospitalSlider">
      <!-- Top Progress Countdown Bar -->
      <div class="slider-progress-track">
        <div class="slider-progress-fill" id="sliderProgressFill"></div>
      </div>

      <!-- Fullscreen Toggle Button -->
      <button class="slider-fullscreen-btn" id="sliderFullscreenBtn" title="Toggle Fullscreen" aria-label="Toggle Fullscreen View">
        <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
          <path d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z"/>
        </svg>
      </button>

      <!-- Navigation Arrows -->
      <button class="slider-arrow prev" id="sliderPrevBtn" aria-label="Previous Hospital Photo">
        <svg viewBox="0 0 24 24" width="22" height="22" fill="currentColor"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/></svg>
      </button>
      <button class="slider-arrow next" id="sliderNextBtn" aria-label="Next Hospital Photo">
        <svg viewBox="0 0 24 24" width="22" height="22" fill="currentColor"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>
      </button>

      <!-- Slide Track: Authentic Real DSLR Hospital Photos with ZERO Text/Content Blocking the View -->
      <div class="slider-slides-track" id="sliderSlidesTrack">
        <!-- Slide 0: Main Hospital Campus & Exterior View -->
        <div class="pure-slide active" style="background-image: url('assets/images/real/dsc_3530.jpg');">
          <div class="slide-caption-container">
            <div class="slide-content-wrap">
              <div class="slide-badge">
                <span class="slide-badge-dot"></span>
                <span class="slide-badge-text">🏥 Hospital Campus &bull; Aonla, Bareilly</span>
              </div>
              <h2 class="slide-title">Advanced Healthcare Campus for Your Entire Family</h2>
              <p class="slide-desc">State-of-the-art multi-specialty facility opposite 132 KV Power House on Bareilly Highway with 24x7 emergency reception and dedicated roadside ambulance ramp.</p>
            </div>
          </div>
        </div>

        <!-- Slide 1: Dr. Hardeep Singh Consultation Chamber (OPD 1) -->
        <div class="pure-slide slide-chamber" style="background-image: url('assets/images/real/dsc_3522.jpg');">
          <div class="slide-caption-container">
            <div class="slide-content-wrap">
              <div class="slide-badge">
                <span class="slide-badge-dot"></span>
                <span class="slide-badge-text">🩺 Senior Medical Specialist &bull; Dr. Hardeep Singh</span>
              </div>
              <h2 class="slide-title">Attentive Consultations &amp; Accurate Clinical Diagnosis</h2>
              <p class="slide-desc">Specialized physical evaluations with stethoscope auscultation, empathetic history taking, and focused paediatric &amp; metabolic disease care.</p>
            </div>
          </div>
        </div>

        <!-- Slide 2: Day Care Observation Ward (Sanitized Blue Beds) -->
        <div class="pure-slide" style="background-image: url('assets/images/real/dsc_3502.jpg');">
          <div class="slide-caption-container">
            <div class="slide-content-wrap">
              <div class="slide-badge">
                <span class="slide-badge-dot"></span>
                <span class="slide-badge-text">🛏️ Daycare Ward &bull; 5 Sanitized Recovery Beds</span>
              </div>
              <h2 class="slide-title">Hygienic Observation Ward &amp; IV Fluid Therapy</h2>
              <p class="slide-desc">Equipped with sterile blue-mattress hospital beds, IV drip infusion stands, ceiling fans, and continuous nurse surveillance for rapid medical stabilization.</p>
            </div>
          </div>
        </div>

        <!-- Slide 3: 24/7 In-House Medical Pharmacy & Medicine Stock -->
        <div class="pure-slide" style="background-image: url('assets/images/real/dsc_3528.jpg');">
          <div class="slide-caption-container">
            <div class="slide-content-wrap">
              <div class="slide-badge">
                <span class="slide-badge-dot"></span>
                <span class="slide-badge-text">💊 24/7 In-House Pharmacy &bull; Genuine Medicines</span>
              </div>
              <h2 class="slide-title">Fully Stocked Hospital Dispensary &amp; Child Drops</h2>
              <p class="slide-desc">Complete inventory of 100% genuine batch-verified branded antibiotics, pediatric drops, cough syrups, insulin, and emergency injectables directly on premises.</p>
            </div>
          </div>
        </div>

        <!-- Slide 4: Patient Reception & Waiting Lounge -->
        <div class="pure-slide" style="background-image: url('assets/images/real/dsc_3496.jpg');">
          <div class="slide-caption-container">
            <div class="slide-content-wrap">
              <div class="slide-badge">
                <span class="slide-badge-dot"></span>
                <span class="slide-badge-text">📋 Patient Reception &bull; Waiting Lounge</span>
              </div>
              <h2 class="slide-title">Comfortable Waiting Lounge &amp; Quick OPD Token Desk</h2>
              <p class="slide-desc">Spacious stainless steel seating beneath our wall shloka — "सर्वे भवन्तु सुखिनः सर्वे सन्तु निरामयाः" — providing a tranquil, stress-free reception environment.</p>
            </div>
          </div>
        </div>

        <!-- Slide 5: 24/7 Emergency Department (आपातकालीन विभाग) -->
        <div class="pure-slide" style="background-image: url('assets/images/real/dsc_3510.jpg');">
          <div class="slide-caption-container">
            <div class="slide-content-wrap">
              <div class="slide-badge slide-badge-emergency">
                <span class="slide-badge-dot dot-emergency"></span>
                <span class="slide-badge-text">🚨 24x7 Emergency &bull; Minor O.T. Department</span>
              </div>
              <h2 class="slide-title">Round-the-Clock Emergency Trauma &amp; Acute Care</h2>
              <p class="slide-desc">Dedicated double-door emergency department ready 24 hours for acute high-fever spikes, wound care, dehydration resuscitation, and urgent doctor attention.</p>
            </div>
          </div>
        </div>

        <!-- Slide 6: Hospital Main Front Entrance & Illuminated Facade -->
        <div class="pure-slide" style="background-image: url('assets/images/real/dsc_3488.jpg');">
          <div class="slide-caption-container">
            <div class="slide-content-wrap">
              <div class="slide-badge">
                <span class="slide-badge-dot"></span>
                <span class="slide-badge-text">🚪 Main Entrance &bull; Krishan Vihar Colony, Aonla</span>
              </div>
              <h2 class="slide-title">Accessible Main Entrance on Bareilly Highway</h2>
              <p class="slide-desc">Prominently illuminated with 3D LED signage opposite 132 KV Power House. Smooth ramp and wide stairs designed for effortless patient and wheelchair access.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Scroll Down Indicator -->
      <a href="#welcome" class="slider-scroll-indicator" aria-label="Scroll to Hospital Introduction">
        <span>Scroll Down</span>
        <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/></svg>
      </a>

      <!-- Minimal Bottom Navigation Pills -->
      <div class="slider-nav-tabs" id="sliderNavTabs">
        <button class="slider-tab-pill active" data-slide="0"><span>🏥 Campus</span></button>
        <button class="slider-tab-pill" data-slide="1"><span>🩺 Chamber</span></button>
        <button class="slider-tab-pill" data-slide="2"><span>🛏️ Daycare Ward</span></button>
        <button class="slider-tab-pill" data-slide="3"><span>💊 Pharmacy</span></button>
        <button class="slider-tab-pill" data-slide="4"><span>📋 Reception</span></button>
        <button class="slider-tab-pill" data-slide="5"><span>🚨 Emergency</span></button>
        <button class="slider-tab-pill" data-slide="6"><span>🚪 Entrance</span></button>
      </div>
    </div>

    <!-- ===================================================================
         HERO WELCOME & OPD CONSULTATION HUB (HIGH-CONTRAST, CLEAN WHITE BG)
         =================================================================== -->
    <div class="hero-welcome-hub" id="welcome">
      <div class="container hero-grid">
        <!-- Left Column: Copy, Specialty Tags & CTAs -->
        <div>
          <div class="hero-pill-badge">
            <span class="pulse-dot"></span>
            <span>श्री राम हॉस्पिटल – आँवला (बरेली) &bull; Trusted Healthcare</span>
          </div>

          <h1 class="hero-title">
            Compassionate Care &amp; <span class="highlight-blue">Accurate Diagnosis</span> for Your Entire Family
          </h1>

          <!-- Tagline Motto -->
          <div class="hero-subtitle-motto">
            <span>💙 Trusted Care &bull; Accurate Diagnosis &bull; Compassionate Treatment</span>
          </div>

          <p class="hero-desc">
            Welcome to <strong>Shri Ram Hospital, Aonla</strong> under the expert clinical guidance of <strong>Dr. Hardeep Singh</strong>. Dedicated consultations for acute fevers, metabolic care (diabetes &amp; BP), paediatric illnesses, and holistic health checkups.
          </p>

          <!-- Specialty Quick Filters: Fever, Diabetes, BP, Paediatrics, General Health -->
          <div class="hero-specialty-tags">
            <a href="#appointment" class="spec-tag" onclick="selectServiceAndBook('Fever &amp; Viral Care')">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2c-5.33 4.55-8 8.48-8 11.8 0 4.98 3.8 8.2 8 8.2s8-3.22 8-8.2c0-3.32-2.67-7.25-8-11.8zM12 20c-3.35 0-6-2.57-6-6.2 0-2.34 1.95-5.44 6-9.14 4.05 3.7 6 6.79 6 9.14 0 3.63-2.65 6.2-6 6.2z"/></svg>
              <span>Fever / बुखार</span>
            </a>
            <a href="#appointment" class="spec-tag" onclick="selectServiceAndBook('Diabetes Management')">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm1 14.5h-2v-2h2zm0-4h-2V7h2z"/></svg>
              <span>Diabetes / मधुमेह</span>
            </a>
            <a href="#appointment" class="spec-tag" onclick="selectServiceAndBook('Blood Pressure &amp; Hypertension')">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
              <span>BP / ब्लड प्रेशर</span>
            </a>
            <a href="#appointment" class="spec-tag" onclick="selectServiceAndBook('Paediatrics &amp; Child Care')">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 12c-4.42 0-8 2.24-8 5v3h16v-3c0-2.76-3.58-5-8-5z"/></svg>
              <span>Paediatrics / शिशु एवं बाल रोग</span>
            </a>
            <a href="#appointment" class="spec-tag" onclick="selectServiceAndBook('General Health Checkup')">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-2 10h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"/></svg>
              <span>General Checkup / संपूर्ण जांच</span>
            </a>
          </div>

          <!-- Action CTA Buttons -->
          <div class="hero-cta-buttons">
            <a href="#appointment" class="btn btn-primary btn-lg">
              <span>Book OPD Appointment</span>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m9 18 6-6-6-6"/></svg>
            </a>
            <a href="https://wa.me/917827355717?text=Namaste%20Dr.%20Hardeep%20Singh%20Ji%2C%20I%20want%20to%20consult%20at%20Shri%20Ram%20Hospital%2C%20Aonla." target="_blank" class="btn btn-whatsapp btn-lg">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
              <span>WhatsApp Consult</span>
            </a>
            <a href="tel:+917827355717" class="btn btn-outline btn-lg" style="color: var(--primary-dark); border-color: #bae6fd;">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
              <span>078273 55717</span>
            </a>
          </div>

          <!-- Guarantees Strip -->
          <div class="doctor-guarantee-strip">
            <div class="guarantee-item">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
              <span>Daily Morning &amp; Evening OPD</span>
            </div>
            <div class="guarantee-item">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
              <span>Affordable Treatment</span>
            </div>
            <div class="guarantee-item">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
              <span>Child-Friendly Care</span>
            </div>
          </div>
        </div>

        <!-- Right Column: Doctor Spotlight Card -->
        <div>
          <div class="hero-doctor-card">
            <div class="doctor-img-wrapper">
              <img src="assets/images/dr-hardeep-singh.jpg" alt="Dr. Hardeep Singh - Senior Physician &amp; Paediatrician at Shri Ram Hospital Aonla">
              <div class="floating-badge-top-left">
                <span class="pulse-dot"></span>
                <span>OPD Open Today &bull; Aonla</span>
              </div>
              <div class="floating-badge-top-right">
                <span>★ 4.9 (500+ Local Reviews)</span>
              </div>
              <div class="floating-card-exp">
                <div class="exp-icon">
                  <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6l2-1.09V17h2V9L12 3zm6.82 6L12 12.72 5.18 9 12 5.28 18.82 9zM17 15.99l-5 2.73-5-2.73v-3.72L12 15l5-2.73v3.72z"/></svg>
                </div>
                <div>
                  <div class="exp-num">10+ Years</div>
                  <div class="exp-text">Dedicated Practice</div>
                </div>
              </div>
            </div>

            <div class="doctor-info-overlay">
              <div style="font-size: 0.78rem; font-weight: 700; color: var(--secondary-dark); text-transform: uppercase; letter-spacing: 0.5px;">Senior Medical Specialist</div>
              <h3 style="font-size: 1.35rem; font-weight: 800; color: var(--dark); margin: 3px 0 2px;">Dr. Hardeep Singh</h3>
              <div style="font-size: 0.88rem; font-weight: 600; color: var(--primary); margin-bottom: 8px;">General Physician | Paediatrics (शिशु रोग)</div>

              <div style="display: flex; align-items: center; gap: 8px; font-size: 0.82rem; color: var(--text-muted); margin-bottom: 6px;">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor" style="color: var(--primary); flex-shrink: 0;"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
                <span>Mon - Sat: 9:00 AM – 2:00 PM &amp; 5:00 PM – 8:30 PM</span>
              </div>

              <div style="display: flex; align-items: center; gap: 8px; font-size: 0.82rem; color: var(--text-muted);">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor" style="color: var(--secondary); flex-shrink: 0;"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                <span>Krishan Vihar Colony, Opp. 132 KV Power House, Aonla</span>
              </div>

              <a href="#appointment" class="btn btn-outline" style="width: 100%; margin-top: 12px; justify-content: center; font-size: 0.85rem; padding: 8px 14px;">
                Book Appointment with Dr. Hardeep Singh &rarr;
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================================================================
       4. STATS STRIP
       =================================================================== -->
  <section class="stats-strip">
    <div class="container stats-grid">
      <div class="stat-item">
        <div class="stat-icon">
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
        </div>
        <div>
          <div class="stat-number">15,000+</div>
          <div class="stat-label">Patients Treated with Care</div>
        </div>
      </div>

      <div class="stat-item">
        <div class="stat-icon">
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
        </div>
        <div>
          <div class="stat-number">10+ Years</div>
          <div class="stat-label">Dedicated Clinical Experience</div>
        </div>
      </div>

      <div class="stat-item">
        <div class="stat-icon">
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 3H5c-1.1 0-1.99.9-1.99 2L3 19c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-1 11h-4v4h-4v-4H6v-4h4V6h4v4h4v4z"/></svg>
        </div>
        <div>
          <div class="stat-number">24/7 Support</div>
          <div class="stat-label">Emergency & First Aid Response</div>
        </div>
      </div>

      <div class="stat-item">
        <div class="stat-icon">
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
        </div>
        <div>
          <div class="stat-number">4.9 / 5.0</div>
          <div class="stat-label">High Patient Satisfaction Rate</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================================================================
       5. CLINICAL SERVICES & SPECIALIZATIONS
       =================================================================== -->
  <section id="services" class="section section-alt">
    <div class="container">
      <div class="section-header">
        <span class="section-badge">Comprehensive Clinical Care</span>
        <h2 class="section-title">Specialized Treatments & Medical Services</h2>
        <p class="section-subtitle">
          At Shri Ram Hospital Aonla, we combine medical precision, modern diagnostic guidance, and gentle care to deliver lasting relief and optimal family health.
        </p>
      </div>

      <div class="services-grid">
        <!-- 1. Fever & Viral Infections (User highlight) -->
        <div class="service-card">
          <div class="service-icon-box">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2c-5.33 4.55-8 8.48-8 11.8 0 4.98 3.8 8.2 8 8.2s8-3.22 8-8.2c0-3.32-2.67-7.25-8-11.8zM12 20c-3.35 0-6-2.57-6-6.2 0-2.34 1.95-5.44 6-9.14 4.05 3.7 6 6.79 6 9.14 0 3.63-2.65 6.2-6 6.2z"/></svg>
          </div>
          <h3 class="service-title">Fever & Infection Care</h3>
          <div class="service-hindi">वायरल, टाइफाइड, डेंगू एवं पुराना बुखार</div>
          <p class="service-desc">
            Accurate diagnosis and targeted treatment for acute high fever, seasonal viral influenza, Dengue, Malaria, Typhoid, and persistent low-grade fevers with rapid platelet & CBC monitoring.
          </p>
          <div class="service-features">
            <div class="service-feature-item">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
              <span>Rapid Fever Diagnostics & Lab Guidance</span>
            </div>
            <div class="service-feature-item">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
              <span>IV Fluid & Electrolyte Restoration</span>
            </div>
          </div>
          <a href="#appointment" onclick="selectServiceAndBook('Fever & Viral Care')" class="service-action-link">
            Consult for Fever &rarr;
          </a>
        </div>

        <!-- 2. Diabetes Management (User highlight) -->
        <div class="service-card">
          <div class="service-icon-box">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm1 14.5h-2v-2h2zm0-4h-2V7h2z"/></svg>
          </div>
          <h3 class="service-title">Diabetes Mellitus Care</h3>
          <div class="service-hindi">मधुमेह एवं ब्लड शुगर नियंत्रण परामर्श</div>
          <p class="service-desc">
            Holistic management of Type 1 and Type 2 diabetes. Periodic fasting/PP sugar evaluation, HbA1c tracking, insulin guidance, customized diet planning, and protection against kidney & nerve damage.
          </p>
          <div class="service-features">
            <div class="service-feature-item">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
              <span>Instant Glucometer Blood Sugar Test</span>
            </div>
            <div class="service-feature-item">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
              <span>Prevent Diabetic Complications</span>
            </div>
          </div>
          <a href="#appointment" onclick="selectServiceAndBook('Diabetes Management')" class="service-action-link">
            Consult for Diabetes &rarr;
          </a>
        </div>

        <!-- 3. Blood Pressure / BP (User highlight) -->
        <div class="service-card">
          <div class="service-icon-box">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
          </div>
          <h3 class="service-title">Blood Pressure & Heart Care</h3>
          <div class="service-hindi">उच्च रक्तचाप (High BP) एवं हृदय स्वास्थ्य</div>
          <p class="service-desc">
            Continuous blood pressure monitoring, hypertension stage assessment, prevention of cardiac stress and strokes, combined with medication adjustment and personalized sodium-restricted lifestyle counselling.
          </p>
          <div class="service-features">
            <div class="service-feature-item">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
              <span>Digital & Mercury BP Screening</span>
            </div>
            <div class="service-feature-item">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
              <span>Headache & Dizziness Evaluation</span>
            </div>
          </div>
          <a href="#appointment" onclick="selectServiceAndBook('Blood Pressure & Hypertension')" class="service-action-link">
            Check Your BP &rarr;
          </a>
        </div>

        <!-- 4. Paediatrics & Child Health (User highlight) -->
        <div class="service-card">
          <div class="service-icon-box">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 12c-4.42 0-8 2.24-8 5v3h16v-3c0-2.76-3.58-5-8-5z"/></svg>
          </div>
          <h3 class="service-title">Paediatrics & Child Health</h3>
          <div class="service-hindi">शिशु एवं बाल रोग विशेषज्ञ परामर्श</div>
          <p class="service-desc">
            Compassionate child specialist care for newborns, infants, and growing children. Expertise in child chest infections, cough, cold, diarrhoea, vomiting, poor appetite, vaccination advice, and growth tracking.
          </p>
          <div class="service-features">
            <div class="service-feature-item">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
              <span>Pediatric Nebulization for Child Cough</span>
            </div>
            <div class="service-feature-item">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
              <span>Child Nutrition & Growth Monitoring</span>
            </div>
          </div>
          <a href="#appointment" onclick="selectServiceAndBook('Paediatrics & Child Care')" class="service-action-link">
            Consult Paediatrician &rarr;
          </a>
        </div>

        <!-- 5. General Health Checkup (User highlight) -->
        <div class="service-card">
          <div class="service-icon-box">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-2 10h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"/></svg>
          </div>
          <h3 class="service-title">General Health Checkup</h3>
          <div class="service-hindi">संपूर्ण स्वास्थ्य परीक्षण एवं प्रिवेंटिव केयर</div>
          <p class="service-desc">
            Complete routine health evaluations for adults and senior citizens. Diagnosing unexplained weakness, fatigue, severe joint or body pain, anemia (low hemoglobin), vitamin deficiencies, and thyroid issues.
          </p>
          <div class="service-features">
            <div class="service-feature-item">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
              <span>Full Vitals & Physical Assessment</span>
            </div>
            <div class="service-feature-item">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
              <span>Anemia & Vitamin Deficiencies Screen</span>
            </div>
          </div>
          <a href="#appointment" onclick="selectServiceAndBook('General Health Checkup')" class="service-action-link">
            Book Health Checkup &rarr;
          </a>
        </div>

        <!-- 6. Gastro, Respiratory & Emergency Care -->
        <div class="service-card">
          <div class="service-icon-box">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 10.5V8.8C19 6.7 17.3 5 15.2 5H8.8C6.7 5 5 6.7 5 8.8v6.4C5 17.3 6.7 19 8.8 19h6.4c2.1 0 3.8-1.7 3.8-3.8v-1.7l4 4V6.5l-4 4z"/></svg>
          </div>
          <h3 class="service-title">Emergency & Acute Care</h3>
          <div class="service-hindi">प्राथमिक उपचार, गैस, एसिडिटी व सांस की समस्या</div>
          <p class="service-desc">
            Immediate medical attention for severe abdominal pain, acute gastritis, asthma exacerbations, breathing discomfort, severe dehydration requiring saline drip, and minor wound dressing.
          </p>
          <div class="service-features">
            <div class="service-feature-item">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
              <span>Immediate Oxygen & Nebulizer Support</span>
            </div>
            <div class="service-feature-item">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
              <span>Day Care Observation Beds</span>
            </div>
          </div>
          <a href="tel:+917827355717" class="service-action-link" style="color: var(--danger);">
            Emergency Helpline: +91 78273 55717 &rarr;
          </a>
        </div>
      </div>
      <div style="text-align: center; margin-top: 36px;">
        <a href="services.php" class="btn btn-primary">
          View All Treatments &amp; Specialist Care &rarr;
        </a>
      </div>
    </div>
  </section>

  <!-- ===================================================================
       6. HOSPITAL FACILITIES & INFRASTRUCTURE HIGHLIGHTS
       =================================================================== -->
<section id="facilities" class="section">
    <div class="container">
      <div class="section-header">
        <span class="section-badge">Comfort & Safety</span>
        <h2 class="section-title">Hospital Facilities & Patient Care</h2>
        <p class="section-subtitle">
          Designed to ensure clean, hygienic, and immediate medical support for all patients and their families.
        </p>
      </div>

      <div class="facilities-grid">
        <div class="facility-card">
          <div class="facility-icon">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="currentColor"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-1 11h-4v4h-4v-4H6v-4h4V6h4v4h4v4z"/></svg>
          </div>
          <h4 class="facility-name">Clean OPD Consultation</h4>
          <p class="facility-desc">Air-cooled, sanitized private doctor consultation rooms for attentive and confidential diagnosis.</p>
        </div>

        <div class="facility-card">
          <div class="facility-icon">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="currentColor"><path d="M19 7h-8v6h8V7zm2-4H3c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H3V5h18v14z"/></svg>
          </div>
          <h4 class="facility-name">Daycare Observation Beds</h4>
          <p class="facility-desc">Comfortable beds for patient hydration, IV glucose/saline administration, and monitoring under medical observation.</p>
        </div>

        <div class="facility-card">
          <div class="facility-icon">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
          </div>
          <h4 class="facility-name">Nebulizer & Oxygen Support</h4>
          <p class="facility-desc">Immediate ultrasonic nebulization for children and asthmatic patients, with continuous oxygen therapy.</p>
        </div>

        <div class="facility-card">
          <div class="facility-icon">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="currentColor"><path d="M6 3h12v2H6zm11 3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm-1 9h-3v3h-2v-3H8v-2h3v-3h2v3h3v2z"/></svg>
          </div>
          <h4 class="facility-name">In-House Pharmacy Support</h4>
          <p class="facility-desc">Availability of genuine branded medications, paediatric syrups, drops, IV fluids, and surgical first aid items.</p>
        </div>
      </div>

      <div style="text-align: center; margin-top: 36px;">
        <a href="facilities.php" class="btn btn-outline">
          Explore All Hospital Facilities &amp; Equipment &rarr;
        </a>
      </div>
    </div>
  </section>

  <!-- ===================================================================
       7. INTERACTIVE APPOINTMENT BOOKING FORM
       =================================================================== -->
<section id="appointment" class="booking-section">
    <div class="container">
      <div class="booking-wrapper">
        <div class="booking-grid">
          <!-- Left Info Panel -->
          <div class="booking-info-panel">
            <div>
              <span style="color: #7dd3fc; font-weight: 700; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px;">Fast OPD Token</span>
              <h2 class="booking-info-title">Book Doctor Consultation</h2>
              <p class="booking-info-text">
                Book your OPD token with Dr. Hardeep Singh in just 30 seconds. Choose between instant WhatsApp confirmation or generating your digital appointment slip online.
              </p>

              <div class="booking-benefit-list">
                <div class="booking-benefit-item">
                  <span class="check-circle">&check;</span>
                  <span>Zero Advance Booking Fee</span>
                </div>
                <div class="booking-benefit-item">
                  <span class="check-circle">&check;</span>
                  <span>Avoid Long Waiting in Hospital Queue</span>
                </div>
                <div class="booking-benefit-item">
                  <span class="check-circle">&check;</span>
                  <span>Instant WhatsApp Confirmation Slip</span>
                </div>
                <div class="booking-benefit-item">
                  <span class="check-circle">&check;</span>
                  <span>Priority for Pediatric & Senior Patients</span>
                </div>
              </div>
            </div>

            <div class="booking-helpline-box">
              <strong>Need Immediate Assistance? Call Reception:</strong>
              <a href="tel:+917827355717" class="phone-big">078273 55717</a>
              <div style="font-size: 0.78rem; color: #bae6fd; margin-top: 4px;">Krishan Vihar Colony, Opp. 132 KV Power House, Aonla (243301)</div>
            </div>
          </div>

          <!-- Right Booking Form Panel -->
          <div class="booking-form-panel">
            <form id="hospitalBookingForm">
              <div class="form-group-row">
                <div class="form-group">
                  <label for="patientName" class="form-label">
                    <span>Patient Name (मरीज का नाम)</span>
                    <span class="req">*</span>
                  </label>
                  <input type="text" id="patientName" class="form-control" placeholder="e.g. Ramesh Kumar" required>
                </div>

                <div class="form-group">
                  <label for="patientPhone" class="form-label">
                    <span>Mobile Number (मोबाइल नंबर)</span>
                    <span class="req">*</span>
                  </label>
                  <input type="tel" id="patientPhone" class="form-control" placeholder="e.g. 9876543210" pattern="(\+91|0)?[0-9]{10}" maxlength="14" required>
                </div>
              </div>

              <div class="form-group-row">
                <div class="form-group">
                  <label for="patientAge" class="form-label">
                    <span>Age in Years (उम्र)</span>
                    <span class="req">*</span>
                  </label>
                  <input type="number" id="patientAge" class="form-control" placeholder="e.g. 28 or 4 (Child)" min="0" max="110" required>
                </div>

                <div class="form-group">
                  <label for="patientGender" class="form-label">
                    <span>Gender (लिंग)</span>
                  </label>
                  <select id="patientGender" class="form-control">
                    <option value="Male">Male (पुरुष)</option>
                    <option value="Female">Female (महिला)</option>
                    <option value="Child (Boy)">Child Boy (बालक)</option>
                    <option value="Child (Girl)">Child Girl (बालिका)</option>
                    <option value="Other">Other</option>
                  </select>
                </div>
              </div>

              <div class="form-group-row">
                <div class="form-group">
                  <label for="appointmentService" class="form-label">
                    <span>Select Health Concern / Department</span>
                    <span class="req">*</span>
                  </label>
                  <select id="appointmentService" class="form-control" required>
                    <option value="Fever & Viral Care">Fever & Viral Infection (बुखार)</option>
                    <option value="Diabetes Management">Diabetes & Sugar Management (मधुमेह)</option>
                    <option value="Blood Pressure & Hypertension">Blood Pressure (BP / बीपी जांच)</option>
                    <option value="Paediatrics & Child Care">Paediatrics / Child Care (शिशु व बाल रोग)</option>
                    <option value="General Health Checkup">General Health Checkup (संपूर्ण जांच)</option>
                    <option value="Stomach & Acidity Care">Gastric, Gas & Abdominal Pain (पेट रोग)</option>
                    <option value="Emergency Consultation">Emergency / Urgent Visit</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="appointmentDate" class="form-label">
                    <span>Preferred Consultation Date</span>
                    <span class="req">*</span>
                  </label>
                  <input type="date" id="appointmentDate" class="form-control" required>
                </div>
              </div>

              <!-- Time Slot Radio Grid -->
              <div class="form-group">
                <label class="form-label">
                  <span>Preferred Time Window (पसंदीदा समय)</span>
                  <span class="req">*</span>
                </label>
                <div class="time-slots-container">
                  <div class="time-slot-option">
                    <input type="radio" name="timeSlot" id="slot1" value="Morning: 09:30 AM - 11:30 AM" checked>
                    <label for="slot1" class="time-slot-label">09:30 AM – 11:30 AM</label>
                  </div>
                  <div class="time-slot-option">
                    <input type="radio" name="timeSlot" id="slot2" value="Morning: 11:30 AM - 01:30 PM">
                    <label for="slot2" class="time-slot-label">11:30 AM – 01:30 PM</label>
                  </div>
                  <div class="time-slot-option">
                    <input type="radio" name="timeSlot" id="slot3" value="Evening: 05:00 PM - 06:30 PM">
                    <label for="slot3" class="time-slot-label">05:00 PM – 06:30 PM</label>
                  </div>
                  <div class="time-slot-option">
                    <input type="radio" name="timeSlot" id="slot4" value="Evening: 06:30 PM - 08:30 PM">
                    <label for="slot4" class="time-slot-label">06:30 PM – 08:30 PM</label>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="patientNotes" class="form-label">
                  <span>Brief Symptoms or Previous History (Optional)</span>
                </label>
                <textarea id="patientNotes" class="form-control" rows="2" placeholder="e.g. Fever since 3 days, cough, blood sugar test report, etc."></textarea>
              </div>

              <!-- Two Action Buttons: WhatsApp & Online Slip -->
              <div class="booking-actions">
                <button type="button" id="bookWhatsAppBtn" class="btn btn-whatsapp">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
                  <span>Book via WhatsApp</span>
                </button>

                <button type="submit" class="btn btn-primary">
                  <span>Confirm & Get Token Slip &rarr;</span>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================================================================
       8. LOCATION, CONTACT & GOOGLE MAPS
       =================================================================== -->
<section id="contact" class="section section-alt">
    <div class="container">
      <div class="section-header">
        <span class="section-badge">Easy Reach</span>
        <h2 class="section-title">Hospital Address & Directions</h2>
        <p class="section-subtitle">
          Centrally located in Aonla (Bareilly district) with hassle-free transport and parking accessibility.
        </p>
      </div>

      <div class="contact-grid">
        <!-- Contact Information Card -->
        <div class="contact-card">
          <h3 style="font-size: 1.45rem; font-weight: 800; color: var(--dark); margin-bottom: 20px;">
            Shri Ram Hospital – Aonla
          </h3>

          <div class="contact-item">
            <div class="contact-icon">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
            </div>
            <div>
              <strong>Hospital Address (पता)</strong>
              <p>Krishan Vihar Colony, Opposite 132 KV Power House, Aonla, India, 243301</p>
            </div>
          </div>

          <div class="contact-item">
            <div class="contact-icon">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
            </div>
            <div>
              <strong>Phone Numbers (फोन)</strong>
              <p>
                <!-- <a href="tel:+917827355717">078273 55717</a> /  -->
                <a href="tel:+917827355717">+91 78273 55717</a> (Helpline & Reception)
              </p>
            </div>
          </div>

          <div class="contact-item">
            <div class="contact-icon" style="background: #dcfce7; color: #16a34a;">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
            </div>
            <div>
              <strong>WhatsApp Consultation</strong>
              <p><a href="https://wa.me/917827355717" target="_blank">+91 78273 55717</a></p>
            </div>
          </div>

          <div class="contact-item">
            <div class="contact-icon">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
            </div>
            <div>
              <strong>Email Address (ईमेल)</strong>
              <p><a href="mailto:shriramhospital229@gmail.com">shriramhospital229@gmail.com</a></p>
            </div>
          </div>

          <div style="margin-top: 24px;">
            <a href="https://maps.google.com/?q=Krishan+Vihar+Colony,+Opposite+132+KV+Power+House,+Aonla,+Uttar+Pradesh+243301" target="_blank" class="btn btn-primary" style="width: 100%;">
              📍 Open Live Navigation on Google Maps &rarr;
            </a>
          </div>
        </div>

        <!-- Google Maps Embed for Aonla Bareilly -->
        <div class="map-wrapper">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28131.7891823933!2d79.14170668048689!3d28.283838423647413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39a009fb70f2043f%3A0xc48ca13ea018cbb!2sAonla%2C%20Uttar%20Pradesh%20243301!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"
            title="Shri Ram Hospital Aonla Bareilly Location Map">
          </iframe>
        </div>
      </div>
    </div>
  </section>



<?php
include 'footer.php';
?>
