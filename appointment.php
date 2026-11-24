<?php
/**
 * Shri Ram Hospital – Aonla, Bareilly | appointment.php
 */
$pageTitle = 'Book OPD Appointment Online | Shri Ram Hospital Aonla Bareilly | Dr. Hardeep Singh';
$pageDesc = 'Book doctor consultation token online at Shri Ram Hospital, Aonla Bareilly. Consult Dr. Hardeep Singh for Fever, Diabetes, High Blood Pressure, and Child Health. Instant digital token slip or WhatsApp booking.';
$canonicalUrl = 'https://shriramhospitalaonla.in/appointment.php';
$activeNav = 'appointment';
$extraHead = <<<'EOD'
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Book OPD Appointment - Shri Ram Hospital Aonla",
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
          "name": "Book Appointment",
          "item": "https://shriramhospitalaonla.in/appointment.php"
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
          <span class="current">Book Appointment</span>
        </nav>
        <span class="subpage-badge">Instant Token Portal</span>
        <h1 class="subpage-title">Book Doctor Consultation Token Online</h1>
        <p class="subpage-desc">
          Schedule your OPD consultation with <strong>Dr. Hardeep Singh</strong> (General Physician &amp; Paediatrics) at Shri Ram Hospital, Aonla. Save time, skip reception queues, and receive an instant digital confirmation slip.
        </p>
      </div>
    </div>
  </section>

  <!-- ===================================================================
       4. INTERACTIVE BOOKING FORM (SECTION)
       =================================================================== -->
  <section id="appointment" class="booking-section content-section">
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
                  <span>Priority for Pediatric &amp; Senior Patients</span>
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
                    <option value="Fever &amp; Viral Care">Fever &amp; Viral Infection (बुखार)</option>
                    <option value="Diabetes Management">Diabetes &amp; Sugar Management (मधुमेह)</option>
                    <option value="Blood Pressure &amp; Hypertension">Blood Pressure (BP / बीपी जांच)</option>
                    <option value="Paediatrics &amp; Child Care">Paediatrics / Child Care (शिशु व बाल रोग)</option>
                    <option value="General Health Checkup">General Health Checkup (संपूर्ण जांच)</option>
                    <option value="Stomach &amp; Acidity Care">Gastric, Gas &amp; Abdominal Pain (पेट रोग)</option>
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
                  <span>Confirm &amp; Get Token Slip &rarr;</span>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================================================================
       5. PATIENT VISIT CHECKLIST & TIMINGS
       =================================================================== -->
  <section class="section section-alt">
    <div class="container">
      <div class="grid-2col">
        <div>
          <span class="section-badge">Visit Preparation</span>
          <h2 style="font-size: 1.8rem; font-weight: 800; color: var(--dark); margin: 8px 0 16px;">
            Checklist for Your Consultation
          </h2>
          <div class="feature-check-list">
            <div class="feature-check-item">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
              <span><strong>Bring Previous Prescriptions:</strong> Old medical slips and active medications list.</span>
            </div>
            <div class="feature-check-item">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
              <span><strong>Diagnostic Lab Reports:</strong> CBC, sugar levels, lipid profile, or ultrasound scans.</span>
            </div>
            <div class="feature-check-item">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
              <span><strong>Fasting for Blood Tests:</strong> If testing fasting sugar or lipids, come empty stomach for 8-10 hours.</span>
            </div>
            <div class="feature-check-item">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
              <span><strong>Report 15 Minutes Early:</strong> Present your token slip at reception for vitals recording.</span>
            </div>
          </div>
        </div>

        <div style="background: #ffffff; padding: 28px; border-radius: var(--radius-lg); border: 1px solid var(--border-color); box-shadow: var(--shadow-sm);">
          <h3 style="font-size: 1.3rem; font-weight: 800; color: var(--dark); margin-bottom: 12px;">OPD Schedule</h3>
          <p style="color: var(--text-muted); font-size: 0.92rem; margin-bottom: 16px;">Consultant: <strong>Dr. Hardeep Singh</strong></p>
          <ul style="display: flex; flex-direction: column; gap: 10px; font-size: 0.92rem; color: var(--text-main); margin-bottom: 20px;">
            <li style="display: flex; justify-content: space-between;">
              <span>Monday to Saturday (Morning):</span>
              <strong>09:00 AM – 02:00 PM</strong>
            </li>
            <li style="display: flex; justify-content: space-between;">
              <span>Monday to Saturday (Evening):</span>
              <strong>05:00 PM – 08:30 PM</strong>
            </li>
            <li style="display: flex; justify-content: space-between;">
              <span>Sunday (Special OPD):</span>
              <strong>10:00 AM – 02:00 PM</strong>
            </li>
            <li style="display: flex; justify-content: space-between; color: var(--danger);">
              <span>24/7 Emergency &amp; Casualty:</span>
              <strong>Round-the-clock</strong>
            </li>
          </ul>
          <a href="tel:+917827355717" class="btn btn-outline" style="width: 100%;">
            📞 Need Immediate Advice? Call 078273 55717
          </a>
        </div>
      </div>
    </div>
  </section>

<?php
include 'footer.php';
?>
