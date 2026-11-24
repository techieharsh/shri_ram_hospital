<?php
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
          <a href="about.php#doctor">Dr. Hardeep Singh (Consultant)</a>
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

  <!-- ===================================================================
       APPOINTMENT TOKEN SLIP MODAL (PRINTABLE & WHATSAPP)
       =================================================================== -->
  <div id="appointmentSlipModal" class="modal-backdrop" role="dialog" aria-modal="true" aria-label="Appointment Confirmation Slip">
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
            Consultant: <strong>Dr. Hardeep Singh</strong> (General Physician &amp; Paediatrics)
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
            <span id="slipDepartment">Fever &amp; Viral Care</span>
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

  <!-- JavaScript (Auto cache-busting on file change) -->
  <script src="assets/js/main.js?v=<?= file_exists(__DIR__ . '/assets/js/main.js') ? filemtime(__DIR__ . '/assets/js/main.js') : '2.2' ?>"></script>
</body>
</html>
