/**
 * SHRI RAM HOSPITAL - AONLA, BAREILLY
 * Interactive JavaScript Engine
 */

document.addEventListener('DOMContentLoaded', () => {
  // Config
  const HOSPITAL_CONFIG = {
    name: 'Shri Ram Hospital – Aonla, Bareilly',
    doctor: 'Dr. Hardeep Singh',
    phone: '+917827355717', // Hospital Primary Phone (078273 55717)
    displayPhone: '078273 55717',
    whatsappNumber: '917827355717', // WhatsApp format without '+'
    address: 'Krishan Vihar Colony, Opposite 132 KV Power House, Aonla, India, 243301',
    email: 'shriramhospital229@gmail.com',
    emergencyPhone: '+917827355717'
  };

  // --- 1. Mobile Navigation Drawer ---
  const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
  const mobileDrawer = document.querySelector('.mobile-nav-drawer');
  const mobileBackdrop = document.querySelector('.mobile-drawer-backdrop');
  const mobileLinks = document.querySelectorAll('.mobile-link');

  function toggleMobileMenu(open) {
    const shouldOpen = open !== undefined ? open : !mobileDrawer.classList.contains('open');
    if (shouldOpen) {
      mobileDrawer.classList.add('open');
      mobileBackdrop.classList.add('open');
      mobileNavToggle.classList.add('open');
      document.body.style.overflow = 'hidden';
    } else {
      mobileDrawer.classList.remove('open');
      mobileBackdrop.classList.remove('open');
      mobileNavToggle.classList.remove('open');
      document.body.style.overflow = '';
    }
  }

  if (mobileNavToggle) {
    mobileNavToggle.addEventListener('click', () => toggleMobileMenu());
  }
  if (mobileBackdrop) {
    mobileBackdrop.addEventListener('click', () => toggleMobileMenu(false));
  }
  mobileLinks.forEach(link => {
    link.addEventListener('click', () => toggleMobileMenu(false));
  });

  // --- 2. Scroll Spy & Active Nav Highlighting ---
  const sections = document.querySelectorAll('section[id]');
  const desktopNavLinks = document.querySelectorAll('.nav-desktop .nav-link');

  function updateActiveNavOnScroll() {
    const scrollY = window.pageYOffset + 120;
    sections.forEach(section => {
      const sectionHeight = section.offsetHeight;
      const sectionTop = section.offsetTop;
      const sectionId = section.getAttribute('id');

      if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
        desktopNavLinks.forEach(link => {
          link.classList.remove('active');
          if (link.getAttribute('href') === `#${sectionId}`) {
            link.classList.add('active');
          }
        });
      }
    });
  }

  window.addEventListener('scroll', updateActiveNavOnScroll, { passive: true });

  // --- 2B. Clean Hospital Image Slider Controller (ZERO CONTENT OVERLAY) ---
  const pureSlides = document.querySelectorAll('.pure-slide');
  const sliderTabPills = document.querySelectorAll('.slider-tab-pill');
  const sliderPrevBtn = document.getElementById('sliderPrevBtn');
  const sliderNextBtn = document.getElementById('sliderNextBtn');
  const sliderProgressFill = document.getElementById('sliderProgressFill');
  const pureSliderWrapper = document.getElementById('pureHospitalSlider');

  let currentPureSlide = 0;
  let pureSliderTimer = null;
  const PURE_SLIDE_DURATION = 5000; // 5 seconds autoplay

  function resetSliderProgressBar() {
    if (!sliderProgressFill) return;
    sliderProgressFill.style.transition = 'none';
    sliderProgressFill.style.width = '0%';
    void sliderProgressFill.offsetWidth; // force reflow
    sliderProgressFill.style.transition = `width ${PURE_SLIDE_DURATION}ms linear`;
    sliderProgressFill.style.width = '100%';
  }

  function showPureSlide(index) {
    const total = pureSlides.length;
    if (!total) return;

    if (index >= total) currentPureSlide = 0;
    else if (index < 0) currentPureSlide = total - 1;
    else currentPureSlide = index;

    pureSlides.forEach((slide, i) => {
      const isActive = (i === currentPureSlide);
      slide.classList.toggle('active', isActive);
      if (isActive) {
        const badge = slide.querySelector('.slide-badge');
        const title = slide.querySelector('.slide-title');
        const desc = slide.querySelector('.slide-desc');
        [badge, title, desc].forEach(el => {
          if (el) {
            el.style.animation = 'none';
            void el.offsetWidth; // force reflow for smooth re-animation
            el.style.animation = '';
          }
        });
      }
    });

    sliderTabPills.forEach((pill, i) => {
      const isActive = (i === currentPureSlide);
      pill.classList.toggle('active', isActive);
      if (isActive) {
        pill.scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' });
      }
    });

    resetSliderProgressBar();
  }

  function startPureSliderTimer() {
    stopPureSliderTimer();
    resetSliderProgressBar();
    pureSliderTimer = setInterval(() => {
      showPureSlide(currentPureSlide + 1);
    }, PURE_SLIDE_DURATION);
  }

  function stopPureSliderTimer() {
    if (pureSliderTimer) {
      clearInterval(pureSliderTimer);
      pureSliderTimer = null;
    }
    if (sliderProgressFill) {
      sliderProgressFill.style.transition = 'none';
    }
  }

  if (sliderNextBtn) {
    sliderNextBtn.addEventListener('click', (e) => {
      e.preventDefault();
      showPureSlide(currentPureSlide + 1);
      startPureSliderTimer();
    });
  }

  if (sliderPrevBtn) {
    sliderPrevBtn.addEventListener('click', (e) => {
      e.preventDefault();
      showPureSlide(currentPureSlide - 1);
      startPureSliderTimer();
    });
  }

  sliderTabPills.forEach((pill) => {
    pill.addEventListener('click', () => {
      const idx = parseInt(pill.getAttribute('data-slide'), 10);
      if (!isNaN(idx)) {
        showPureSlide(idx);
        startPureSliderTimer();
      }
    });
  });

  if (pureSliderWrapper) {
    pureSliderWrapper.addEventListener('mouseenter', stopPureSliderTimer);
    pureSliderWrapper.addEventListener('mouseleave', startPureSliderTimer);

    let touchStartX = 0;
    let touchEndX = 0;
    pureSliderWrapper.addEventListener('touchstart', (e) => {
      touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });

    pureSliderWrapper.addEventListener('touchend', (e) => {
      touchEndX = e.changedTouches[0].screenX;
      const swipeDistance = touchEndX - touchStartX;
      if (Math.abs(swipeDistance) > 40) {
        if (swipeDistance < 0) {
          showPureSlide(currentPureSlide + 1);
        } else {
          showPureSlide(currentPureSlide - 1);
        }
        startPureSliderTimer();
      }
    }, { passive: true });
  }

  const sliderFullscreenBtn = document.getElementById('sliderFullscreenBtn');
  if (sliderFullscreenBtn && pureSliderWrapper) {
    sliderFullscreenBtn.addEventListener('click', () => {
      if (!document.fullscreenElement && !document.webkitFullscreenElement) {
        if (pureSliderWrapper.requestFullscreen) {
          pureSliderWrapper.requestFullscreen();
        } else if (pureSliderWrapper.webkitRequestFullscreen) {
          pureSliderWrapper.webkitRequestFullscreen();
        }
      } else {
        if (document.exitFullscreen) {
          document.exitFullscreen();
        } else if (document.webkitExitFullscreen) {
          document.webkitExitFullscreen();
        }
      }
    });

    document.addEventListener('fullscreenchange', () => {
      const isFs = !!document.fullscreenElement;
      sliderFullscreenBtn.setAttribute('title', isFs ? 'Exit Fullscreen' : 'Toggle Fullscreen');
    });
  }

  // Keyboard navigation
  document.addEventListener('keydown', (e) => {
    if (document.activeElement && (document.activeElement.tagName === 'INPUT' || document.activeElement.tagName === 'TEXTAREA' || document.activeElement.tagName === 'SELECT')) {
      return;
    }
    if (e.key === 'ArrowRight') {
      showPureSlide(currentPureSlide + 1);
      startPureSliderTimer();
    } else if (e.key === 'ArrowLeft') {
      showPureSlide(currentPureSlide - 1);
      startPureSliderTimer();
    }
  });

  // Initialize Pure Slider
  showPureSlide(0);
  startPureSliderTimer();

  // Helper for specialty tags to select service and scroll to appointment
  window.switchHeroSlideAndBook = function(slideIndex, serviceVal) {
    showPureSlide(slideIndex || 0);
    if (typeof window.selectServiceAndBook === 'function') {
      window.selectServiceAndBook(serviceVal);
    }
  };

  // --- 3. Date Picker: Restrict to Today & Future ---
  const appointmentDateInput = document.getElementById('appointmentDate');
  if (appointmentDateInput) {
    const today = new Date().toISOString().split('T')[0];
    appointmentDateInput.setAttribute('min', today);
    appointmentDateInput.value = today; // default today
  }

  // --- 4. Interactive Symptom Checker Tabs ---
  const symptomTabBtns = document.querySelectorAll('.symptom-tab-btn');
  const symptomContents = document.querySelectorAll('.symptom-content');

  symptomTabBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const targetId = btn.getAttribute('data-target');

      symptomTabBtns.forEach(b => b.classList.remove('active'));
      symptomContents.forEach(c => c.classList.remove('active'));

      btn.classList.add('active');
      const targetContent = document.getElementById(targetId);
      if (targetContent) {
        targetContent.classList.add('active');
      }
    });
  });

  // Shortcut from Symptom card directly to Booking with selected issue
  window.selectServiceAndBook = function(serviceVal) {
    const serviceSelect = document.getElementById('appointmentService');
    const bookingSection = document.getElementById('appointment');
    if (serviceSelect && serviceVal) {
      serviceSelect.value = serviceVal;
    }
    if (bookingSection) {
      bookingSection.scrollIntoView({ behavior: 'smooth' });
    } else {
      // If on another page, redirect to appointment.php with parameter
      window.location.href = 'appointment.php' + (serviceVal ? '?service=' + encodeURIComponent(serviceVal) : '');
    }
  };

  // URL query parameter check for auto-selecting department on appointment page
  try {
    const urlParams = new URLSearchParams(window.location.search);
    const serviceParam = urlParams.get('service');
    if (serviceParam) {
      const serviceSelect = document.getElementById('appointmentService');
      if (serviceSelect) {
        for (let i = 0; i < serviceSelect.options.length; i++) {
          if (serviceSelect.options[i].value.toLowerCase().includes(serviceParam.toLowerCase()) || 
              serviceParam.toLowerCase().includes(serviceSelect.options[i].value.toLowerCase())) {
            serviceSelect.selectedIndex = i;
            break;
          }
        }
      }
    }
  } catch(e) {}

  // --- Active Nav Link Detection across Pages (supports both .php and .html) ---
  const currentPath = window.location.pathname.split('/').pop() || 'index.php';
  const currentBase = currentPath.replace(/\.(php|html)$/i, '') || 'index';
  document.querySelectorAll('.nav-desktop .nav-link, .mobile-links .mobile-link').forEach(link => {
    const href = link.getAttribute('href');
    if (href) {
      const linkFile = href.split('#')[0].split('/').pop();
      const linkBase = linkFile.replace(/\.(php|html)$/i, '');
      if (linkBase && linkBase === currentBase) {
        link.classList.add('active');
      } else if (linkBase && linkBase !== currentBase) {
        link.classList.remove('active');
      }
    }
  });

  // --- 5. FAQ Accordion ---
  const faqItems = document.querySelectorAll('.faq-item');
  faqItems.forEach(item => {
    const questionBtn = item.querySelector('.faq-question');
    if (questionBtn) {
      questionBtn.addEventListener('click', () => {
        const isActive = item.classList.contains('active');
        // Close other items
        faqItems.forEach(i => i.classList.remove('active'));
        if (!isActive) {
          item.classList.add('active');
        }
      });
    }
  });

  // --- 6. Appointment Form Validation & Processing ---
  const bookingForm = document.getElementById('hospitalBookingForm');
  const bookWhatsAppBtn = document.getElementById('bookWhatsAppBtn');
  const bookSlipModal = document.getElementById('appointmentSlipModal');
  const modalCloseBtn = document.getElementById('modalCloseBtn');
  const printSlipBtn = document.getElementById('printSlipBtn');

  function getFormData() {
    const name = document.getElementById('patientName')?.value.trim();
    const phone = document.getElementById('patientPhone')?.value.trim();
    const age = document.getElementById('patientAge')?.value.trim();
    const gender = document.getElementById('patientGender')?.value;
    const service = document.getElementById('appointmentService')?.value;
    const date = document.getElementById('appointmentDate')?.value;
    const notes = document.getElementById('patientNotes')?.value.trim();

    const selectedSlotRadio = document.querySelector('input[name="timeSlot"]:checked');
    const slot = selectedSlotRadio ? selectedSlotRadio.value : 'Morning Session (09:30 AM - 01:30 PM)';

    return { name, phone, age, gender, service, date, slot, notes };
  }

  function validateFormData(data) {
    if (!data.name || data.name.length < 2) {
      alert('कृपया मरीज का सही नाम दर्ज करें (Please enter a valid Patient Name).');
      document.getElementById('patientName')?.focus();
      return false;
    }
    const phoneClean = data.phone.replace(/[^0-9]/g, '');
    if (!phoneClean || phoneClean.length < 10) {
      alert('कृपया 10 अंकों का सही मोबाइल नंबर दर्ज करें (Please enter a valid 10-digit Mobile Number).');
      document.getElementById('patientPhone')?.focus();
      return false;
    }
    if (!data.age || parseInt(data.age) <= 0 || parseInt(data.age) > 120) {
      alert('कृपया मरीज की सही उम्र दर्ज करें (Please enter a valid Age).');
      document.getElementById('patientAge')?.focus();
      return false;
    }
    if (!data.date) {
      alert('कृपया अपॉइंटमेंट की तारीख चुनें (Please select Appointment Date).');
      document.getElementById('appointmentDate')?.focus();
      return false;
    }
    return true;
  }

  // A. WhatsApp Direct Booking
  if (bookWhatsAppBtn) {
    bookWhatsAppBtn.addEventListener('click', (e) => {
      e.preventDefault();
      const data = getFormData();
      if (!validateFormData(data)) return;

      const dateObj = new Date(data.date);
      const formattedDate = dateObj.toLocaleDateString('en-IN', {
        weekday: 'short',
        year: 'numeric',
        month: 'short',
        day: 'numeric'
      });

      const message = `🏥 *NEW APPOINTMENT REQUEST*\n*Shri Ram Hospital – Aonla, Bareilly*\n---------------------------\n` +
        `👤 *Patient:* ${data.name}\n` +
        `📞 *Mobile:* ${data.phone}\n` +
        `🎂 *Age / Gender:* ${data.age} Yrs (${data.gender || 'Not specified'})\n` +
        `🩺 *Department / Issue:* ${data.service}\n` +
        `🧑‍⚕️ *Consultant:* ${HOSPITAL_CONFIG.doctor} (General Physician & Paediatrics)\n` +
        `📅 *Preferred Date:* ${formattedDate}\n` +
        `⏰ *Preferred Slot:* ${data.slot}\n` +
        (data.notes ? `📝 *Symptoms / Note:* ${data.notes}\n` : '') +
        `---------------------------\n` +
        `📍 *Hospital Location:* Aonla, Bareilly\n` +
        `_Please confirm my OPD consultation token. Thank you!_`;

      const encodedMsg = encodeURIComponent(message);
      const waUrl = `https://wa.me/${HOSPITAL_CONFIG.whatsappNumber}?text=${encodedMsg}`;
      window.open(waUrl, '_blank');
    });
  }

  // B. Online Booking & Instant Printable Slip
  if (bookingForm) {
    bookingForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const data = getFormData();
      if (!validateFormData(data)) return;

      // Generate Unique Token
      const randomTokenNumber = Math.floor(1000 + Math.random() * 9000);
      const tokenID = `SRH-${new Date().getFullYear().toString().substr(-2)}${String(new Date().getMonth() + 1).padStart(2, '0')}-${randomTokenNumber}`;

      const dateObj = new Date(data.date);
      const formattedDate = dateObj.toLocaleDateString('en-IN', {
        weekday: 'long',
        year: 'numeric',
        month: 'long',
        day: 'numeric'
      });

      // Save to localStorage
      const appointmentRecord = {
        tokenId: tokenID,
        ...data,
        formattedDate,
        createdAt: new Date().toISOString(),
        doctor: HOSPITAL_CONFIG.doctor,
        status: 'Confirmed'
      };

      try {
        const existingList = JSON.parse(localStorage.getItem('shri_ram_appointments') || '[]');
        existingList.unshift(appointmentRecord);
        localStorage.setItem('shri_ram_appointments', JSON.stringify(existingList));

        // Attempt silent sync to PHP backend if hosted on server
        fetch('api/book.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify(appointmentRecord)
        }).catch(() => {
          // Graceful fallback for static HTML viewing
        });
      } catch (err) {
        console.warn('Storage warning:', err);
      }

      // Populate Slip Modal Fields
      document.getElementById('slipTokenId').textContent = tokenID;
      document.getElementById('slipPatientName').textContent = data.name;
      document.getElementById('slipPatientPhone').textContent = data.phone;
      document.getElementById('slipPatientAgeGender').textContent = `${data.age} Yrs / ${data.gender}`;
      document.getElementById('slipDepartment').textContent = data.service;
      document.getElementById('slipDate').textContent = formattedDate;
      document.getElementById('slipSlot').textContent = data.slot;

      // Open Modal
      openModal();
    });
  }

  function openModal() {
    if (bookSlipModal) {
      bookSlipModal.classList.add('open');
      document.body.style.overflow = 'hidden';
    }
  }

  function closeModal() {
    if (bookSlipModal) {
      bookSlipModal.classList.remove('open');
      document.body.style.overflow = '';
    }
  }

  if (modalCloseBtn) {
    modalCloseBtn.addEventListener('click', closeModal);
  }
  if (bookSlipModal) {
    bookSlipModal.addEventListener('click', (e) => {
      if (e.target === bookSlipModal) closeModal();
    });
  }

  if (printSlipBtn) {
    printSlipBtn.addEventListener('click', () => {
      window.print();
    });
  }

  // ESC key to close modal
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && bookSlipModal && bookSlipModal.classList.contains('open')) {
      closeModal();
    }
  });

  // ===================================================================
  // 7. REAL HOSPITAL GALLERY FILTER & LIGHTBOX MODAL
  // ===================================================================
  const galleryFilterBtns = document.querySelectorAll('.gallery-filter-btn');
  const galleryCards = document.querySelectorAll('.gallery-card');
  const lightbox = document.getElementById('galleryLightbox');
  const lightboxImg = document.getElementById('lightboxImg');
  const lightboxTitle = document.getElementById('lightboxTitle');
  const lightboxSub = document.getElementById('lightboxSub');
  const lightboxCounter = document.getElementById('lightboxCounter');
  const lightboxCloseBtn = document.getElementById('lightboxCloseBtn');
  const lightboxPrevBtn = document.getElementById('lightboxPrevBtn');
  const lightboxNextBtn = document.getElementById('lightboxNextBtn');

  let currentGalleryList = [];
  let currentLightboxIndex = 0;

  // Build active list
  function updateGalleryList() {
    currentGalleryList = Array.from(galleryCards).filter(card => {
      return card.style.display !== 'none';
    });
  }
  updateGalleryList();

  // Filter Buttons
  if (galleryFilterBtns.length > 0) {
    galleryFilterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        const filter = btn.getAttribute('data-filter');
        galleryFilterBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        galleryCards.forEach(card => {
          const category = card.getAttribute('data-category');
          if (filter === 'all' || category === filter) {
            card.style.display = 'flex';
          } else {
            card.style.display = 'none';
          }
        });
        updateGalleryList();
      });
    });
  }

  // Lightbox Open
  function openLightbox(index) {
    if (!lightbox || !currentGalleryList.length) return;
    if (index < 0) index = currentGalleryList.length - 1;
    if (index >= currentGalleryList.length) index = 0;
    currentLightboxIndex = index;

    const targetCard = currentGalleryList[currentLightboxIndex];
    const fullSrc = targetCard.getAttribute('data-full') || targetCard.querySelector('img').getAttribute('src');
    const title = targetCard.getAttribute('data-title') || targetCard.querySelector('.gallery-card-title')?.textContent || '';
    const subtitle = targetCard.getAttribute('data-sub') || targetCard.querySelector('.gallery-card-caption-hi')?.textContent || '';

    if (lightboxImg) lightboxImg.src = fullSrc;
    if (lightboxTitle) lightboxTitle.textContent = title;
    if (lightboxSub) lightboxSub.textContent = subtitle;
    if (lightboxCounter) lightboxCounter.textContent = `${currentLightboxIndex + 1} / ${currentGalleryList.length}`;

    lightbox.classList.add('open');
    document.body.style.overflow = 'hidden';
  }

  function closeLightbox() {
    if (!lightbox) return;
    lightbox.classList.remove('open');
    document.body.style.overflow = '';
  }

  // Attach click to all gallery cards
  galleryCards.forEach(card => {
    card.addEventListener('click', () => {
      updateGalleryList();
      const idx = currentGalleryList.indexOf(card);
      if (idx !== -1) {
        openLightbox(idx);
      }
    });
  });

  if (lightboxCloseBtn) {
    lightboxCloseBtn.addEventListener('click', closeLightbox);
  }

  if (lightboxPrevBtn) {
    lightboxPrevBtn.addEventListener('click', (e) => {
      e.stopPropagation();
      openLightbox(currentLightboxIndex - 1);
    });
  }

  if (lightboxNextBtn) {
    lightboxNextBtn.addEventListener('click', (e) => {
      e.stopPropagation();
      openLightbox(currentLightboxIndex + 1);
    });
  }

  if (lightbox) {
    lightbox.addEventListener('click', (e) => {
      if (e.target === lightbox || e.target.classList.contains('gallery-lightbox-overlay')) {
        closeLightbox();
      }
    });
  }

  // Keyboard navigation for Lightbox
  document.addEventListener('keydown', (e) => {
    if (lightbox && lightbox.classList.contains('open')) {
      if (e.key === 'Escape') closeLightbox();
      if (e.key === 'ArrowLeft') openLightbox(currentLightboxIndex - 1);
      if (e.key === 'ArrowRight') openLightbox(currentLightboxIndex + 1);
    }
  });
});
