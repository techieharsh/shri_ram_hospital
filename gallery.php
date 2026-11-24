<?php
/**
 * Shri Ram Hospital – Aonla, Bareilly | gallery.php
 */
$pageTitle = 'Hospital Photo Gallery | Real Campus Visuals | Shri Ram Hospital Aonla Bareilly';
$pageDesc = 'Explore real authentic DSLR photos of Shri Ram Hospital in Aonla, Bareilly. Building exterior, reception lobby, Dr. Hardeep Singh consultation chamber, daycare ward, and in-house pharmacy.';
$canonicalUrl = 'https://shriramhospitalaonla.in/gallery.php';
$activeNav = 'gallery';
$extraHead = <<<'EOD'
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "ImageGallery",
    "name": "Shri Ram Hospital Aonla Real Photo Gallery",
    "description": "Authentic DSLR photos of Shri Ram Hospital campus, reception, doctor chamber, observation ward, and pharmacy in Aonla, Bareilly.",
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
          "name": "Photo Gallery",
          "item": "https://shriramhospitalaonla.in/gallery.php"
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
          <span class="current">Photo Gallery</span>
        </nav>
        <span class="subpage-badge">Authentic Visual Tour</span>
        <h1 class="subpage-title">Shri Ram Hospital – Real DSLR Photo Gallery</h1>
        <p class="subpage-desc">
          Browse through all 19 real hospital photographs capturing the campus facade, patient registration lobby, Dr. Hardeep Singh's consultation chamber, daycare observation beds, clinical equipment, and in-house pharmacy.
        </p>
        <div class="subpage-cta-row">
          <a href="appointment.php" class="btn btn-primary">Book Consultation Slip</a>
          <a href="tel:+917827355717" class="btn btn-outline" >📞 Call 078273 55717</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================================================================
       4. FILTERABLE 19-PHOTO GALLERY
       =================================================================== -->
  <section class="content-section">
    <div class="container">

      <!-- Category Filter Tabs -->
      <div class="gallery-filter-wrap">
        <button class="gallery-filter-btn active" data-filter="all">All Photos (19)</button>
        <button class="gallery-filter-btn" data-filter="building">Campus &amp; Building</button>
        <button class="gallery-filter-btn" data-filter="chamber">Doctor Chamber</button>
        <button class="gallery-filter-btn" data-filter="ward">Daycare Ward</button>
        <button class="gallery-filter-btn" data-filter="emergency">Emergency &amp; OT</button>
        <button class="gallery-filter-btn" data-filter="reception">Reception &amp; Waiting</button>
        <button class="gallery-filter-btn" data-filter="pharmacy">Pharmacy &amp; Store</button>
      </div>

      <!-- Gallery Grid -->
      <div class="gallery-grid" id="mainGalleryGrid">
        <!-- 1. DSC_3484 -->
        <div class="gallery-card" data-category="chamber" data-full="assets/images/real/dsc_3484.jpg" data-title="Dr. Hardeep Singh Consultation Chamber" data-sub="डॉ. हरदीप सिंह परामर्श कक्ष (OPD 1)">
          <div class="gallery-card-thumb-wrap">
            <img src="assets/images/real/dsc_3484_thumb.jpg" alt="Dr. Hardeep Singh Consultation Chamber Shri Ram Hospital" class="gallery-card-thumb" loading="lazy">
            <span class="gallery-card-category">Doctor Chamber</span>
            <div class="gallery-card-overlay-btn"><span class="gallery-zoom-icon">🔍</span></div>
          </div>
          <div class="gallery-card-body">
            <h3 class="gallery-card-title">Dr. Hardeep Singh Consultation Chamber</h3>
            <div class="gallery-card-caption-hi">डॉ. हरदीप सिंह परामर्श कक्ष (OPD 1)</div>
            <p class="gallery-card-desc">Senior doctor conducting physical patient consultation and empathetic diagnosis in OPD 1.</p>
          </div>
        </div>

        <!-- 2. DSC_3486 -->
        <div class="gallery-card" data-category="chamber" data-full="assets/images/real/dsc_3486.jpg" data-title="Clinical Patient Consultation in Progress" data-sub="मरीज परामर्श एवं चिकित्सीय चर्चा">
          <div class="gallery-card-thumb-wrap">
            <img src="assets/images/real/dsc_3486_thumb.jpg" alt="Clinical Patient Consultation in Progress Shri Ram Hospital" class="gallery-card-thumb" loading="lazy">
            <span class="gallery-card-category">Doctor Chamber</span>
            <div class="gallery-card-overlay-btn"><span class="gallery-zoom-icon">🔍</span></div>
          </div>
          <div class="gallery-card-body">
            <h3 class="gallery-card-title">Clinical Patient Consultation in Progress</h3>
            <div class="gallery-card-caption-hi">मरीज परामर्श एवं चिकित्सीय चर्चा</div>
            <p class="gallery-card-desc">Dr. Hardeep Singh discussing patient medical history and tailored clinical treatment plan.</p>
          </div>
        </div>

        <!-- 3. DSC_3488 -->
        <div class="gallery-card" data-category="building" data-full="assets/images/real/dsc_3488.jpg" data-title="Main Hospital Entrance & Illuminated Signage" data-sub="अस्पताल मुख्य प्रवेश द्वार एवं बोर्ड">
          <div class="gallery-card-thumb-wrap">
            <img src="assets/images/real/dsc_3488_thumb.jpg" alt="Main Hospital Entrance & Illuminated Signage Shri Ram Hospital" class="gallery-card-thumb" loading="lazy">
            <span class="gallery-card-category">Main Entrance</span>
            <div class="gallery-card-overlay-btn"><span class="gallery-zoom-icon">🔍</span></div>
          </div>
          <div class="gallery-card-body">
            <h3 class="gallery-card-title">Main Hospital Entrance & Illuminated Signage</h3>
            <div class="gallery-card-caption-hi">अस्पताल मुख्य प्रवेश द्वार एवं बोर्ड</div>
            <p class="gallery-card-desc">Front roadside facade with bright LED signboards, ramp entry, and dispensary access.</p>
          </div>
        </div>

        <!-- 4. DSC_3496 -->
        <div class="gallery-card" data-category="reception" data-full="assets/images/real/dsc_3496.jpg" data-title="Patient Waiting Lounge & Reception" data-sub="मरीज प्रतीक्षालय एवं रिसेप्शन हॉल">
          <div class="gallery-card-thumb-wrap">
            <img src="assets/images/real/dsc_3496_thumb.jpg" alt="Patient Waiting Lounge & Reception Shri Ram Hospital" class="gallery-card-thumb" loading="lazy">
            <span class="gallery-card-category">Reception Lobby</span>
            <div class="gallery-card-overlay-btn"><span class="gallery-zoom-icon">🔍</span></div>
          </div>
          <div class="gallery-card-body">
            <h3 class="gallery-card-title">Patient Waiting Lounge & Reception</h3>
            <div class="gallery-card-caption-hi">मरीज प्रतीक्षालय एवं रिसेप्शन हॉल</div>
            <p class="gallery-card-desc">Comfortable steel chairs with inspirational Sanskrit shloka mural on the wall (सर्वे भवन्तु सुखिनः).</p>
          </div>
        </div>

        <!-- 5. DSC_3498 -->
        <div class="gallery-card" data-category="building" data-full="assets/images/real/dsc_3498.jpg" data-title="Hospital Ground-Floor Corridor" data-sub="अस्पताल भूतल मुख्य गलियारा">
          <div class="gallery-card-thumb-wrap">
            <img src="assets/images/real/dsc_3498_thumb.jpg" alt="Hospital Ground-Floor Corridor Shri Ram Hospital" class="gallery-card-thumb" loading="lazy">
            <span class="gallery-card-category">Ground Corridor</span>
            <div class="gallery-card-overlay-btn"><span class="gallery-zoom-icon">🔍</span></div>
          </div>
          <div class="gallery-card-body">
            <h3 class="gallery-card-title">Hospital Ground-Floor Corridor</h3>
            <div class="gallery-card-caption-hi">अस्पताल भूतल मुख्य गलियारा</div>
            <p class="gallery-card-desc">Clean, well-lit hallway connecting consultation chambers, waiting lounge, and Emergency.</p>
          </div>
        </div>

        <!-- 6. DSC_3499 -->
        <div class="gallery-card" data-category="building" data-full="assets/images/real/dsc_3499.jpg" data-title="OPD Transit Corridor & Wall Seating" data-sub="प्रतीक्षा गलियारा एवं बैठक व्यवस्था">
          <div class="gallery-card-thumb-wrap">
            <img src="assets/images/real/dsc_3499_thumb.jpg" alt="OPD Transit Corridor & Wall Seating Shri Ram Hospital" class="gallery-card-thumb" loading="lazy">
            <span class="gallery-card-category">Corridor & Seating</span>
            <div class="gallery-card-overlay-btn"><span class="gallery-zoom-icon">🔍</span></div>
          </div>
          <div class="gallery-card-body">
            <h3 class="gallery-card-title">OPD Transit Corridor & Wall Seating</h3>
            <div class="gallery-card-caption-hi">प्रतीक्षा गलियारा एवं बैठक व्यवस्था</div>
            <p class="gallery-card-desc">Cushioned wall benches, fire safety systems, and direct consultation room connectivity.</p>
          </div>
        </div>

        <!-- 7. DSC_3502 -->
        <div class="gallery-card" data-category="ward" data-full="assets/images/real/dsc_3502.jpg" data-title="Daycare Observation Ward (5 Beds)" data-sub="डे-केयर ऑब्जर्वेशन वार्ड (5 बेड्स)">
          <div class="gallery-card-thumb-wrap">
            <img src="assets/images/real/dsc_3502_thumb.jpg" alt="Daycare Observation Ward (5 Beds) Shri Ram Hospital" class="gallery-card-thumb" loading="lazy">
            <span class="gallery-card-category">Daycare Ward</span>
            <div class="gallery-card-overlay-btn"><span class="gallery-zoom-icon">🔍</span></div>
          </div>
          <div class="gallery-card-body">
            <h3 class="gallery-card-title">Daycare Observation Ward (5 Beds)</h3>
            <div class="gallery-card-caption-hi">डे-केयर ऑब्जर्वेशन वार्ड (5 बेड्स)</div>
            <p class="gallery-card-desc">Sanitized blue-mattress recovery beds equipped with IV drip infusion stands and ceiling fans.</p>
          </div>
        </div>

        <!-- 8. DSC_3503 -->
        <div class="gallery-card" data-category="ward" data-full="assets/images/real/dsc_3503.jpg" data-title="Patient Recovery Ward Beds" data-sub="मरीज स्वास्थ्य सुधार एवं ऑब्जर्वेशन वार्ड">
          <div class="gallery-card-thumb-wrap">
            <img src="assets/images/real/dsc_3503_thumb.jpg" alt="Patient Recovery Ward Beds Shri Ram Hospital" class="gallery-card-thumb" loading="lazy">
            <span class="gallery-card-category">Daycare Ward</span>
            <div class="gallery-card-overlay-btn"><span class="gallery-zoom-icon">🔍</span></div>
          </div>
          <div class="gallery-card-body">
            <h3 class="gallery-card-title">Patient Recovery Ward Beds</h3>
            <div class="gallery-card-caption-hi">मरीज स्वास्थ्य सुधार एवं ऑब्जर्वेशन वार्ड</div>
            <p class="gallery-card-desc">Hygienic short-stay beds for fluid hydration, antipyretic therapy, and rapid clinical recovery.</p>
          </div>
        </div>

        <!-- 9. DSC_3504 -->
        <div class="gallery-card" data-category="ward" data-full="assets/images/real/dsc_3504.jpg" data-title="Ward Care Station & Recovery Beds" data-sub="वार्ड नर्सिंग स्टेशन एवं रिकवरी यूनिट">
          <div class="gallery-card-thumb-wrap">
            <img src="assets/images/real/dsc_3504_thumb.jpg" alt="Ward Care Station & Recovery Beds Shri Ram Hospital" class="gallery-card-thumb" loading="lazy">
            <span class="gallery-card-category">Daycare Ward</span>
            <div class="gallery-card-overlay-btn"><span class="gallery-zoom-icon">🔍</span></div>
          </div>
          <div class="gallery-card-body">
            <h3 class="gallery-card-title">Ward Care Station & Recovery Beds</h3>
            <div class="gallery-card-caption-hi">वार्ड नर्सिंग स्टेशन एवं रिकवरी यूनिट</div>
            <p class="gallery-card-desc">Equipped nurse monitoring station, bedside storage tables, and comfortable recovery beds.</p>
          </div>
        </div>

        <!-- 10. DSC_3508 -->
        <div class="gallery-card" data-category="ward" data-full="assets/images/real/dsc_3508.jpg" data-title="Air-Cooled Patient Observation Room" data-sub="वातानुकूलित मरीज ऑब्जर्वेशन वार्ड">
          <div class="gallery-card-thumb-wrap">
            <img src="assets/images/real/dsc_3508_thumb.jpg" alt="Air-Cooled Patient Observation Room Shri Ram Hospital" class="gallery-card-thumb" loading="lazy">
            <span class="gallery-card-category">Daycare Ward</span>
            <div class="gallery-card-overlay-btn"><span class="gallery-zoom-icon">🔍</span></div>
          </div>
          <div class="gallery-card-body">
            <h3 class="gallery-card-title">Air-Cooled Patient Observation Room</h3>
            <div class="gallery-card-caption-hi">वातानुकूलित मरीज ऑब्जर्वेशन वार्ड</div>
            <p class="gallery-card-desc">Equipped with dual split air conditioning for comfortable patient recovery in any weather.</p>
          </div>
        </div>

        <!-- 11. DSC_3510 -->
        <div class="gallery-card" data-category="emergency" data-full="assets/images/real/dsc_3510.jpg" data-title="24/7 Emergency Department Entry" data-sub="24x7 आपातकालीन विभाग (Emergency)">
          <div class="gallery-card-thumb-wrap">
            <img src="assets/images/real/dsc_3510_thumb.jpg" alt="24/7 Emergency Department Entry Shri Ram Hospital" class="gallery-card-thumb" loading="lazy">
            <span class="gallery-card-category">24/7 Emergency</span>
            <div class="gallery-card-overlay-btn"><span class="gallery-zoom-icon">🔍</span></div>
          </div>
          <div class="gallery-card-body">
            <h3 class="gallery-card-title">24/7 Emergency Department Entry</h3>
            <div class="gallery-card-caption-hi">24x7 आपातकालीन विभाग (Emergency)</div>
            <p class="gallery-card-desc">Dedicated double doors for rapid acute patient intake and round-the-clock emergency care.</p>
          </div>
        </div>

        <!-- 12. DSC_3511 -->
        <div class="gallery-card" data-category="emergency" data-full="assets/images/real/dsc_3511.jpg" data-title="Emergency & Minor O.T. Department" data-sub="आपातकालीन विभाग एवं माइनर ओ.टी.">
          <div class="gallery-card-thumb-wrap">
            <img src="assets/images/real/dsc_3511_thumb.jpg" alt="Emergency & Minor O.T. Department Shri Ram Hospital" class="gallery-card-thumb" loading="lazy">
            <span class="gallery-card-category">Emergency & OT</span>
            <div class="gallery-card-overlay-btn"><span class="gallery-zoom-icon">🔍</span></div>
          </div>
          <div class="gallery-card-body">
            <h3 class="gallery-card-title">Emergency & Minor O.T. Department</h3>
            <div class="gallery-card-caption-hi">आपातकालीन विभाग एवं माइनर ओ.टी.</div>
            <p class="gallery-card-desc">Designated wing for immediate clinical trauma management, wound care, and minor procedures.</p>
          </div>
        </div>

        <!-- 13. DSC_3513 -->
        <div class="gallery-card" data-category="emergency" data-full="assets/images/real/dsc_3513.jpg" data-title="Emergency Department Direct Access" data-sub="इमरजेंसी यूनिट प्रवेश द्वार">
          <div class="gallery-card-thumb-wrap">
            <img src="assets/images/real/dsc_3513_thumb.jpg" alt="Emergency Department Direct Access Shri Ram Hospital" class="gallery-card-thumb" loading="lazy">
            <span class="gallery-card-category">Emergency Unit</span>
            <div class="gallery-card-overlay-btn"><span class="gallery-zoom-icon">🔍</span></div>
          </div>
          <div class="gallery-card-body">
            <h3 class="gallery-card-title">Emergency Department Direct Access</h3>
            <div class="gallery-card-caption-hi">इमरजेंसी यूनिट प्रवेश द्वार</div>
            <p class="gallery-card-desc">Wide-access corridor designed for swift stretcher movement and urgent patient care.</p>
          </div>
        </div>

        <!-- 14. DSC_3517 -->
        <div class="gallery-card" data-category="chamber" data-full="assets/images/real/dsc_3517.jpg" data-title="Doctor Examination Room & Couch" data-sub="शारीरिक परीक्षण कक्ष एवं जांच बेंच">
          <div class="gallery-card-thumb-wrap">
            <img src="assets/images/real/dsc_3517_thumb.jpg" alt="Doctor Examination Room & Couch Shri Ram Hospital" class="gallery-card-thumb" loading="lazy">
            <span class="gallery-card-category">Examination Room</span>
            <div class="gallery-card-overlay-btn"><span class="gallery-zoom-icon">🔍</span></div>
          </div>
          <div class="gallery-card-body">
            <h3 class="gallery-card-title">Doctor Examination Room & Couch</h3>
            <div class="gallery-card-caption-hi">शारीरिक परीक्षण कक्ष एवं जांच बेंच</div>
            <p class="gallery-card-desc">Private examination room with cushioned examination couch, doctor desk, and patient chairs.</p>
          </div>
        </div>

        <!-- 15. DSC_3522 -->
        <div class="gallery-card" data-category="chamber" data-full="assets/images/real/dsc_3522.jpg" data-title="Dr. Hardeep Singh (Senior Specialist)" data-sub="डॉ. हरदीप सिंह (वरिष्ठ चिकित्सक)">
          <div class="gallery-card-thumb-wrap">
            <img src="assets/images/real/dsc_3522_thumb.jpg" alt="Dr. Hardeep Singh (Senior Specialist) Shri Ram Hospital" class="gallery-card-thumb" loading="lazy">
            <span class="gallery-card-category">Doctor Chamber</span>
            <div class="gallery-card-overlay-btn"><span class="gallery-zoom-icon">🔍</span></div>
          </div>
          <div class="gallery-card-body">
            <h3 class="gallery-card-title">Dr. Hardeep Singh (Senior Specialist)</h3>
            <div class="gallery-card-caption-hi">डॉ. हरदीप सिंह (वरिष्ठ चिकित्सक)</div>
            <p class="gallery-card-desc">Chief consultant at his consultation desk with clinical stethoscope and diagnostic equipment.</p>
          </div>
        </div>

        <!-- 16. DSC_3528 -->
        <div class="gallery-card" data-category="pharmacy" data-full="assets/images/real/dsc_3528.jpg" data-title="24/7 In-House Medical Pharmacy" data-sub="24x7 अस्पताल मेडिकल स्टोर एवं फार्मेसी">
          <div class="gallery-card-thumb-wrap">
            <img src="assets/images/real/dsc_3528_thumb.jpg" alt="24/7 In-House Medical Pharmacy Shri Ram Hospital" class="gallery-card-thumb" loading="lazy">
            <span class="gallery-card-category">In-House Pharmacy</span>
            <div class="gallery-card-overlay-btn"><span class="gallery-zoom-icon">🔍</span></div>
          </div>
          <div class="gallery-card-body">
            <h3 class="gallery-card-title">24/7 In-House Medical Pharmacy</h3>
            <div class="gallery-card-caption-hi">24x7 अस्पताल मेडिकल स्टोर एवं फार्मेसी</div>
            <p class="gallery-card-desc">Fully stocked white shelves with genuine branded antibiotics, pediatric drops, and syrups.</p>
          </div>
        </div>

        <!-- 17. DSC_3529 -->
        <div class="gallery-card" data-category="pharmacy" data-full="assets/images/real/dsc_3529.jpg" data-title="Pharmacy Storage & Dispensary Stock" data-sub="फार्मेसी मेडिसिन स्टोरेज एवं दवा काउंटर">
          <div class="gallery-card-thumb-wrap">
            <img src="assets/images/real/dsc_3529_thumb.jpg" alt="Pharmacy Storage & Dispensary Stock Shri Ram Hospital" class="gallery-card-thumb" loading="lazy">
            <span class="gallery-card-category">Pharmacy Counter</span>
            <div class="gallery-card-overlay-btn"><span class="gallery-zoom-icon">🔍</span></div>
          </div>
          <div class="gallery-card-body">
            <h3 class="gallery-card-title">Pharmacy Storage & Dispensary Stock</h3>
            <div class="gallery-card-caption-hi">फार्मेसी मेडिसिन स्टोरेज एवं दवा काउंटर</div>
            <p class="gallery-card-desc">Organized pharmaceutical inventory ensuring patient convenience without leaving premises.</p>
          </div>
        </div>

        <!-- 18. DSC_3530 -->
        <div class="gallery-card" data-category="building" data-full="assets/images/real/dsc_3530.jpg" data-title="Shri Ram Hospital Main Campus Exterior" data-sub="श्री राम हॉस्पिटल मुख्य परिसर एवं भवन">
          <div class="gallery-card-thumb-wrap">
            <img src="assets/images/real/dsc_3530_thumb.jpg" alt="Shri Ram Hospital Main Campus Exterior Shri Ram Hospital" class="gallery-card-thumb" loading="lazy">
            <span class="gallery-card-category">Hospital Campus</span>
            <div class="gallery-card-overlay-btn"><span class="gallery-zoom-icon">🔍</span></div>
          </div>
          <div class="gallery-card-body">
            <h3 class="gallery-card-title">Shri Ram Hospital Main Campus Exterior</h3>
            <div class="gallery-card-caption-hi">श्री राम हॉस्पिटल मुख्य परिसर एवं भवन</div>
            <p class="gallery-card-desc">Complete building facade with 24x7 Emergency rooftop sign, roadside ramp, and parking.</p>
          </div>
        </div>

        <!-- 19. DSC_3533 -->
        <div class="gallery-card" data-category="reception" data-full="assets/images/real/dsc_3533.jpg" data-title="Patient Waiting Lounge & Dispensing Window" data-sub="मरीज प्रतीक्षालय एवं दवा वितरण काउंटर">
          <div class="gallery-card-thumb-wrap">
            <img src="assets/images/real/dsc_3533_thumb.jpg" alt="Patient Waiting Lounge & Dispensing Window Shri Ram Hospital" class="gallery-card-thumb" loading="lazy">
            <span class="gallery-card-category">Reception & Pharmacy</span>
            <div class="gallery-card-overlay-btn"><span class="gallery-zoom-icon">🔍</span></div>
          </div>
          <div class="gallery-card-body">
            <h3 class="gallery-card-title">Patient Waiting Lounge & Dispensing Window</h3>
            <div class="gallery-card-caption-hi">मरीज प्रतीक्षालय एवं दवा वितरण काउंटर</div>
            <p class="gallery-card-desc">Integrated waiting area with stainless steel chairs and direct medicine dispensing window.</p>
          </div>
        </div>
      </div>

      <!-- Action Footer -->
      <div style="background: var(--primary-light); padding: 30px; border-radius: var(--radius-lg); text-align: center; margin-top: 50px;">
        <h3 style="font-size: 1.4rem; font-weight: 800; color: var(--primary-darker); margin-bottom: 8px;">
          Plan Your Visit to Shri Ram Hospital
        </h3>
        <p style="color: var(--primary-dark); font-size: 0.95rem; margin-bottom: 20px;">
          Krishan Vihar Colony, Opposite 132 KV Power House, Aonla, Bareilly (U.P. 243301)
        </p>
        <div style="display: flex; gap: 14px; justify-content: center; flex-wrap: wrap;">
          <a href="appointment.php" class="btn btn-primary">Book Consultation Slip</a>
          <a href="contact.php" class="btn btn-outline" style="background: #ffffff;">Get Directions on Google Maps</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================================================================
       5. FULLSCREEN LIGHTBOX MODAL
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
          <div id="lightboxTitle" class="lightbox-title">Hospital Building Entrance</div>
          <div id="lightboxSub" class="lightbox-sub">श्री राम हॉस्पिटल – आँवला (बरेली)</div>
        </div>
        <div id="lightboxCounter" class="lightbox-counter">1 / 19</div>
      </div>
    </div>
  </div>

<?php
include 'footer.php';
?>
