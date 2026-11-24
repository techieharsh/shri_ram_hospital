<?php
/**
 * Shri Ram Hospital – Aonla, Bareilly | contact.php
 */
$pageTitle = 'Contact & Directions | Shri Ram Hospital Aonla Bareilly | Dr. Hardeep Singh';
$pageDesc = 'Contact Shri Ram Hospital in Aonla, Bareilly. Phone: 078273 55717. Address: Krishan Vihar Colony, Opposite 132 KV Power House, Aonla 243301. View Google Maps location and OPD timings.';
$canonicalUrl = 'https://shriramhospitalaonla.in/contact.php';
$activeNav = 'contact';
$extraHead = <<<'EOD'
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "ContactPage",
    "mainEntity": {
      "@type": "Hospital",
      "name": "Shri Ram Hospital – Aonla, Bareilly",
      "telephone": "+917827355717",
      "email": "shriramhospital229@gmail.com",
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
          "name": "Contact & Directions",
          "item": "https://shriramhospitalaonla.in/contact.php"
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
          <span class="current">Contact &amp; Location</span>
        </nav>
        <span class="subpage-badge">Reach Us Easily</span>
        <h1 class="subpage-title">Hospital Address &amp; Directions</h1>
        <p class="subpage-desc">
          Shri Ram Hospital is centrally located in Krishan Vihar Colony, opposite the 132 KV Power House in Aonla (Bareilly district). Reach us via phone, WhatsApp, or navigate directly on Google Maps.
        </p>
      </div>
    </div>
  </section>

  <!-- ===================================================================
       4. CONTACT DETAILS & GOOGLE MAPS
       =================================================================== -->
  <section class="content-section">
    <div class="container">
      <div class="contact-hero-grid">

        <!-- Contact Information Panel -->
        <div class="contact-card-box">
          <span class="section-badge" style="margin-bottom: 6px;">Hospital Helplines</span>
          <h2 style="font-size: 1.6rem; font-weight: 800; color: var(--dark); margin-bottom: 14px;">
            Get in Touch with Our Team
          </h2>
          <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.6; margin-bottom: 24px;">
            Our reception desk is open daily to assist patients with doctor appointments, OPD token generation, emergency inquiries, and directions.
          </p>

          <div class="contact-channels-list">
            <!-- Address -->
            <div class="contact-chan-item">
              <div class="contact-chan-icon">
                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
              </div>
              <div class="contact-chan-details">
                <h4>Hospital Physical Address</h4>
                <p>Krishan Vihar Colony, Opposite 132 KV Power House, Aonla, Bareilly, Uttar Pradesh, 243301</p>
              </div>
            </div>

            <!-- Phone -->
            <div class="contact-chan-item">
              <div class="contact-chan-icon">
                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
              </div>
              <div class="contact-chan-details">
                <h4>Reception Helpline (24x7)</h4>
                <p><a href="tel:+917827355717" style="font-weight: 700; color: var(--primary);">078273 55717</a> / <a href="tel:+917827355717">+91 78273 55717</a></p>
              </div>
            </div>

            <!-- WhatsApp -->
            <div class="contact-chan-item">
              <div class="contact-chan-icon" style="background: #dcfce7; color: #16a34a;">
                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
              </div>
              <div class="contact-chan-details">
                <h4>WhatsApp Consultation &amp; Inquiry</h4>
                <p><a href="https://wa.me/917827355717" target="_blank" style="font-weight: 700; color: #16a34a;">+91 78273 55717 (Click to Chat)</a></p>
              </div>
            </div>

            <!-- Email -->
            <div class="contact-chan-item">
              <div class="contact-chan-icon">
                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
              </div>
              <div class="contact-chan-details">
                <h4>Official Email Address</h4>
                <p><a href="mailto:shriramhospital229@gmail.com">shriramhospital229@gmail.com</a></p>
              </div>
            </div>
          </div>

          <div style="margin-top: 24px;">
            <a href="https://maps.google.com/?q=Krishan+Vihar+Colony,+Opposite+132+KV+Power+House,+Aonla,+Uttar+Pradesh+243301" target="_blank" class="btn btn-primary" style="width: 100%;">
              📍 Open Live Navigation on Google Maps &rarr;
            </a>
          </div>
        </div>

        <!-- Google Maps Embed & Travel Guide -->
        <div>
          <div class="map-wrapper" style="box-shadow: var(--shadow-md); border-radius: var(--radius-lg); overflow: hidden; height: 380px;">
            <iframe 
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28131.7891823933!2d79.14170668048689!3d28.283838423647413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39a009fb70f2043f%3A0xc48ca13ea018cbb!2sAonla%2C%20Uttar%20Pradesh%20243301!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
              allowfullscreen="" 
              loading="lazy" 
              referrerpolicy="no-referrer-when-downgrade"
              title="Shri Ram Hospital Aonla Bareilly Location Map"
              style="width: 100%; height: 100%; border: 0;">
            </iframe>
          </div>

          <!-- Travel Directions Assistance Box -->
          <div style="background: #ffffff; border: 1px solid var(--border-color); border-radius: var(--radius-md); padding: 20px; margin-top: 20px;">
            <h4 style="font-size: 1.05rem; font-weight: 800; color: var(--dark); margin-bottom: 8px;">
              Directions &amp; Landmarks
            </h4>
            <p style="font-size: 0.88rem; color: var(--text-muted); line-height: 1.55; margin-bottom: 8px;">
              <strong>Landmark:</strong> Directly opposite the prominent 132 KV Electricity Substation (Power House) in Krishan Vihar Colony, Aonla.
            </p>
            <p style="font-size: 0.88rem; color: var(--text-muted); line-height: 1.55; margin: 0;">
              <strong>From Bareilly City:</strong> Take the Bareilly-Aonla State Highway (~35 km). Hospital is easily accessible at the entry corridor of Aonla town.
            </p>
          </div>
        </div>

      </div>
    </div>
  </section>

<?php
include 'footer.php';
?>
