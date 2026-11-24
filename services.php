<?php
/**
 * Shri Ram Hospital – Aonla, Bareilly | services.php
 */
$pageTitle = 'Treatments & Medical Services | Shri Ram Hospital – Aonla, Bareilly';
$pageDesc = 'Comprehensive clinical treatments at Shri Ram Hospital Aonla Bareilly by Dr. Hardeep Singh. Expert care for Fever & Infections, Diabetes, High Blood Pressure (BP), Paediatrics & Child Health, and General Checkups.';
$canonicalUrl = 'https://shriramhospitalaonla.in/services.php';
$activeNav = 'services';
$extraHead = <<<'EOD'
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "MedicalWebPage",
    "name": "Treatments & Clinical Specialities - Shri Ram Hospital Aonla",
    "description": "Medical treatments for fevers, diabetes, hypertension, and child diseases by Dr. Hardeep Singh in Aonla Bareilly.",
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
          "name": "Treatments & Services",
          "item": "https://shriramhospitalaonla.in/services.php"
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
          <span class="current">Treatments &amp; Medical Specialities</span>
        </nav>
        <span class="subpage-badge">Comprehensive Clinical Care</span>
        <h1 class="subpage-title">Specialized Treatments &amp; Medical Services</h1>
        <p class="subpage-desc">
          Dr. Hardeep Singh provides focused clinical consultations and treatment protocols for acute infections, chronic metabolic illnesses, paediatric disorders, and emergency stabilization in Aonla.
        </p>
        <div class="subpage-cta-row">
          <a href="appointment.php" class="btn btn-primary">Book Consultation Slip</a>
          <a href="#fever" class="btn btn-outline" >Browse Treatments &darr;</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================================================================
       4. SERVICES DEEP DIVE SECTION
       =================================================================== -->
  <section class="content-section">
    <div class="container">
      <div style="display: flex; flex-direction: column; gap: 40px;">

        <!-- 1. FEVER & INFECTION CARE -->
        <article id="fever" class="service-full-card">
          <div class="service-full-header">
            <div class="service-full-icon">🌡️</div>
            <div>
              <span class="section-badge" style="margin-bottom: 4px;">Primary Specialty</span>
              <h2 class="service-full-title">Fever &amp; Viral Infection Care</h2>
              <div class="service-full-hindi">वायरल, टाइफाइड, डेंगू एवं पुराना बुखार</div>
            </div>
          </div>

          <p style="color: var(--text-muted); font-size: 1rem; line-height: 1.7; margin-bottom: 16px;">
            Fever is an acute response to viral, bacterial, or parasitic infections. In Aonla and Bareilly district, changing weather brings rapid surges in Dengue, Typhoid (Enteric Fever), Malaria, and seasonal influenza. Dr. Hardeep Singh conducts methodical clinical evaluations and temperature charting rather than immediately dosing strong antibiotics.
          </p>

          <div class="symptom-chips">
            <span class="symptom-chip">High Temperature (&gt;100°F)</span>
            <span class="symptom-chip">Severe Chills &amp; Shivering</span>
            <span class="symptom-chip">Bodyache &amp; Headache</span>
            <span class="symptom-chip">Low Platelet Warning</span>
            <span class="symptom-chip">Abdominal Pain in Typhoid</span>
            <span class="symptom-chip">Extreme Fatigue</span>
          </div>

          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; margin: 20px 0;">
            <div style="background: #f8fafc; padding: 18px; border-radius: var(--radius-md); border-left: 3px solid var(--primary);">
              <h4 style="font-size: 0.95rem; font-weight: 700; color: var(--dark); margin-bottom: 6px;">🩺 Diagnostic Approach</h4>
              <p style="font-size: 0.88rem; color: var(--text-muted); margin: 0;">Rapid CBC, Platelet monitoring, Typhoid Widal/TyphiDot, Dengue NS1 &amp; IgM/IgG, and Malaria parasite detection.</p>
            </div>
            <div style="background: #f8fafc; padding: 18px; border-radius: var(--radius-md); border-left: 3px solid var(--secondary);">
              <h4 style="font-size: 0.95rem; font-weight: 700; color: var(--dark); margin-bottom: 6px;">💉 Clinical Management</h4>
              <p style="font-size: 0.88rem; color: var(--text-muted); margin: 0;">Evidence-based antipyretic dosing, oral hydration solutions, day care IV electrolyte support if vomiting/dehydration persists.</p>
            </div>
          </div>

          <div style="display: flex; gap: 12px; align-items: center; flex-wrap: wrap; margin-top: auto; padding-top: 14px; border-top: 1px solid var(--border-color);">
            <button onclick="selectServiceAndBook('Fever & Viral Care')" class="btn btn-primary btn-sm">
              Book Fever Consultation &rarr;
            </button>
            <span style="font-size: 0.85rem; color: var(--text-muted);">Consulting Hours: 9 AM - 2 PM &amp; 5 PM - 8:30 PM</span>
          </div>
        </article>

        <!-- 2. DIABETES CARE -->
        <article id="diabetes" class="service-full-card">
          <div class="service-full-header">
            <div class="service-full-icon">🩸</div>
            <div>
              <span class="section-badge" style="margin-bottom: 4px;">Metabolic Medicine</span>
              <h2 class="service-full-title">Diabetes Mellitus &amp; Blood Sugar Management</h2>
              <div class="service-full-hindi">मधुमेह एवं ब्लड शुगर नियंत्रण परामर्श</div>
            </div>
          </div>

          <p style="color: var(--text-muted); font-size: 1rem; line-height: 1.7; margin-bottom: 16px;">
            Diabetes is a progressive metabolic condition that requires structured medical guidance to keep blood glucose within strict targets and prevent microvascular complications affecting the retina, kidneys (diabetic nephropathy), and nerves (neuropathy).
          </p>

          <div class="symptom-chips">
            <span class="symptom-chip">Frequent Urination (Polyuria)</span>
            <span class="symptom-chip">Excessive Thirst &amp; Hunger</span>
            <span class="symptom-chip">Unexplained Weight Loss</span>
            <span class="symptom-chip">Slow Healing Wounds</span>
            <span class="symptom-chip">Tingling in Feet &amp; Hands</span>
            <span class="symptom-chip">Chronic Lethargy</span>
          </div>

          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; margin: 20px 0;">
            <div style="background: #f8fafc; padding: 18px; border-radius: var(--radius-md); border-left: 3px solid var(--primary);">
              <h4 style="font-size: 0.95rem; font-weight: 700; color: var(--dark); margin-bottom: 6px;">🩺 Diagnostic Approach</h4>
              <p style="font-size: 0.88rem; color: var(--text-muted); margin: 0;">Instant fingerprick glucometer screening, Fasting &amp; Post-Prandial (PP) blood glucose, HbA1c 3-month average, and Kidney profile.</p>
            </div>
            <div style="background: #f8fafc; padding: 18px; border-radius: var(--radius-md); border-left: 3px solid var(--secondary);">
              <h4 style="font-size: 0.95rem; font-weight: 700; color: var(--dark); margin-bottom: 6px;">🥗 Treatment &amp; Diet Plan</h4>
              <p style="font-size: 0.88rem; color: var(--text-muted); margin: 0;">Personalized oral hypoglycemic medications, insulin titration if necessary, and customized regional diet guidance for Indian households.</p>
            </div>
          </div>

          <div style="display: flex; gap: 12px; align-items: center; flex-wrap: wrap; margin-top: auto; padding-top: 14px; border-top: 1px solid var(--border-color);">
            <button onclick="selectServiceAndBook('Diabetes Management')" class="btn btn-primary btn-sm">
              Book Diabetes Consultation &rarr;
            </button>
            <span style="font-size: 0.85rem; color: var(--text-muted);">Morning Fasting OPD Preferred</span>
          </div>
        </article>

        <!-- 3. BLOOD PRESSURE / BP -->
        <article id="bp" class="service-full-card">
          <div class="service-full-header">
            <div class="service-full-icon">💓</div>
            <div>
              <span class="section-badge" style="margin-bottom: 4px;">Cardiovascular Care</span>
              <h2 class="service-full-title">Blood Pressure (BP) &amp; Hypertension Care</h2>
              <div class="service-full-hindi">उच्च रक्तचाप (High BP) एवं हृदय स्वास्थ्य</div>
            </div>
          </div>

          <p style="color: var(--text-muted); font-size: 1rem; line-height: 1.7; margin-bottom: 16px;">
            Hypertension affects millions of adults quietly without noticeable symptoms until high readings cause occipital morning headaches, dizziness, palpitations, or cardiac strain. Dr. Hardeep Singh provides consistent BP charting, stage categorization, and modern antihypertensive regimens.
          </p>

          <div class="symptom-chips">
            <span class="symptom-chip">Throbbing Morning Headache</span>
            <span class="symptom-chip">Dizziness or Vertigo (चक्कर आना)</span>
            <span class="symptom-chip">Chest Heaviness or Fluttering</span>
            <span class="symptom-chip">Shortness of Breath on Exertion</span>
            <span class="symptom-chip">Nosebleed (Epistaxis)</span>
          </div>

          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; margin: 20px 0;">
            <div style="background: #f8fafc; padding: 18px; border-radius: var(--radius-md); border-left: 3px solid var(--primary);">
              <h4 style="font-size: 0.95rem; font-weight: 700; color: var(--dark); margin-bottom: 6px;">🩺 BP Evaluation</h4>
              <p style="font-size: 0.88rem; color: var(--text-muted); margin: 0;">Multi-positional BP check (sitting and standing), pulse pressure assessment, and cardiac auscultation for murmurs or rhythm irregularities.</p>
            </div>
            <div style="background: #f8fafc; padding: 18px; border-radius: var(--radius-md); border-left: 3px solid var(--secondary);">
              <h4 style="font-size: 0.95rem; font-weight: 700; color: var(--dark); margin-bottom: 6px;">🛡️ Organ Protection</h4>
              <p style="font-size: 0.88rem; color: var(--text-muted); margin: 0;">Tailored medical therapy combined with low-sodium guidance, weight control advice, and regular cardiovascular follow-ups.</p>
            </div>
          </div>

          <div style="display: flex; gap: 12px; align-items: center; flex-wrap: wrap; margin-top: auto; padding-top: 14px; border-top: 1px solid var(--border-color);">
            <button onclick="selectServiceAndBook('Blood Pressure & Hypertension')" class="btn btn-primary btn-sm">
              Check Blood Pressure &rarr;
            </button>
            <span style="font-size: 0.85rem; color: var(--text-muted);">Free BP Check with OPD Token</span>
          </div>
        </article>

        <!-- 4. PAEDIATRICS & CHILD HEALTH -->
        <article id="paediatrics" class="service-full-card">
          <div class="service-full-header">
            <div class="service-full-icon">👶</div>
            <div>
              <span class="section-badge" style="margin-bottom: 4px;">Pediatric Excellence</span>
              <h2 class="service-full-title">Paediatrics &amp; Child Health Care</h2>
              <div class="service-full-hindi">शिशु एवं बाल रोग विशेषज्ञ परामर्श</div>
            </div>
          </div>

          <p style="color: var(--text-muted); font-size: 1rem; line-height: 1.7; margin-bottom: 16px;">
            Children are not merely small adults; their physiology requires gentle examination, precise weight-calculated syrups/drops, and an experienced paediatrician who can accurately decipher subtle signs of illness in non-verbal infants and toddlers.
          </p>

          <div class="symptom-chips">
            <span class="symptom-chip">Pediatric High Fever</span>
            <span class="symptom-chip">Chest Wheezing &amp; Asthma</span>
            <span class="symptom-chip">Persistent Night Cough</span>
            <span class="symptom-chip">Infant Diarrhoea &amp; Vomiting</span>
            <span class="symptom-chip">Poor Appetite &amp; Weight Loss</span>
            <span class="symptom-chip">Skin Allergies &amp; Rashes</span>
          </div>

          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; margin: 20px 0;">
            <div style="background: #f8fafc; padding: 18px; border-radius: var(--radius-md); border-left: 3px solid var(--primary);">
              <h4 style="font-size: 0.95rem; font-weight: 700; color: var(--dark); margin-bottom: 6px;">💨 Ultrasonic Nebulizer</h4>
              <p style="font-size: 0.88rem; color: var(--text-muted); margin: 0;">Immediate relief for acute bronchial congestion, spasmodic cough, and respiratory wheezing in small children without discomfort.</p>
            </div>
            <div style="background: #f8fafc; padding: 18px; border-radius: var(--radius-md); border-left: 3px solid var(--secondary);">
              <h4 style="font-size: 0.95rem; font-weight: 700; color: var(--dark); margin-bottom: 6px;">📈 Growth &amp; Milestones</h4>
              <p style="font-size: 0.88rem; color: var(--text-muted); margin: 0;">Regular tracking of child height, weight, head circumference, dietary weaning advice, and immunization consultation.</p>
            </div>
          </div>

          <div style="display: flex; gap: 12px; align-items: center; flex-wrap: wrap; margin-top: auto; padding-top: 14px; border-top: 1px solid var(--border-color);">
            <button onclick="selectServiceAndBook('Paediatrics & Child Care')" class="btn btn-primary btn-sm">
              Consult Child Specialist &rarr;
            </button>
            <span style="font-size: 0.85rem; color: var(--text-muted);">Child-Friendly Clinic Rooms</span>
          </div>
        </article>

        <!-- 5. GENERAL HEALTH CHECKUP -->
        <article id="checkup" class="service-full-card">
          <div class="service-full-header">
            <div class="service-full-icon">🩺</div>
            <div>
              <span class="section-badge" style="margin-bottom: 4px;">Preventive Health</span>
              <h2 class="service-full-title">General Health Checkups &amp; Adult Medicine</h2>
              <div class="service-full-hindi">संपूर्ण स्वास्थ्य परीक्षण एवं प्रिवेंटिव केयर</div>
            </div>
          </div>

          <p style="color: var(--text-muted); font-size: 1rem; line-height: 1.7; margin-bottom: 16px;">
            Regular medical checkups catch silent deficiencies and early illness before severe symptoms occur. We assess unexplained generalized body aches, morning fatigue, low hemoglobin (anemia), Vitamin D &amp; B12 deficiencies, and seasonal respiratory ailments.
          </p>

          <div class="symptom-chips">
            <span class="symptom-chip">Chronic Fatigue &amp; Weakness</span>
            <span class="symptom-chip">Joint &amp; Back Pain</span>
            <span class="symptom-chip">Pale Complexion (Anemia)</span>
            <span class="symptom-chip">Loss of Appetite</span>
            <span class="symptom-chip">Digestive &amp; Gas Troubles</span>
            <span class="symptom-chip">Thyroid Imbalance</span>
          </div>

          <div style="display: flex; gap: 12px; align-items: center; flex-wrap: wrap; margin-top: auto; padding-top: 14px; border-top: 1px solid var(--border-color);">
            <button onclick="selectServiceAndBook('General Health Checkup')" class="btn btn-primary btn-sm">
              Schedule Health Checkup &rarr;
            </button>
            <span style="font-size: 0.85rem; color: var(--text-muted);">Ideal for Senior Citizens &amp; Working Adults</span>
          </div>
        </article>

      </div>
    </div>
  </section>

<?php
include 'footer.php';
?>
