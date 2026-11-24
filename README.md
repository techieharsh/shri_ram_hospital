# Shri Ram Hospital – Aonla, Bareilly (श्री राम हॉस्पिटल – आँवला)

A modern, fast, and fully responsive website designed and developed for **Shri Ram Hospital**, located in Aonla, Bareilly (Uttar Pradesh), under the clinical leadership of **Dr. Hardeep Singh (General Physician & Paediatrics)**.

---

## 🌟 Key Highlights & Hospital Details

- **Hospital Name:** Shri Ram Hospital – Aonla (Bareilly)
- **Consultant Doctor:** Dr. Hardeep Singh
- **Specialization:** General Physician | Paediatrics (जनरल फिजिशियन एवं बाल रोग विशेषज्ञ)
- **Hospital Motto / Tagline:** *Trusted Care • Accurate Diagnosis • Compassionate Treatment* (विश्वसनीय देखभाल • सटीक निदान • संवेदनशील उपचार)
- **Core Clinical Focus Areas:**
  - 🌡️ **Fever / वायरल एवं पुराना बुखार** (Dengue, Typhoid, Malaria, Viral Flu)
  - 🩸 **Diabetes / मधुमेह** (Blood glucose management, HbA1c tracking, diet care)
  - 💓 **BP / ब्लड प्रेशर** (Hypertension monitoring, cardiovascular health)
  - 👶 **Paediatrics / शिशु एवं बाल रोग** (Newborn care, growth monitoring, nebulization)
  - 🩺 **General Health Checkup / संपूर्ण स्वास्थ्य जांच** (Fatigue, anemia, routine screening)

---

## 🚀 Website Features

1. **Fully Responsive Across All Devices:**
   - Optimized for mobile smartphones (iPhone, Android), tablets, iPads, laptops, and ultra-wide desktops.
   - Fluid typography and touch-friendly tap targets (minimum 48px).

2. **Emergency Top Bar:**
   - 24/7 Casualty & Emergency line, hospital location, and live OPD shift indicators.

3. **High-Converting Hero Section with Clinical Background Slider:**
   - Features a smooth **multi-image background slider** tailored directly to the hospital's core clinical specialities:
     1. 🌡️ **Fever & Viral Care:** Clinical temperature checkup with digital thermometer & bedside diagnosis.
     2. 🩸 **Diabetes & Sugar Management:** Blood glucose testing with digital glucometer & chart consultation.
     3. 💓 **Blood Pressure (BP) & Heart Health:** Sphygmomanometer BP cuff examination & cardiovascular check.
     4. 👶 **Paediatrics & Child Health:** Compassionate child examination with stethoscope & mother support.
     5. 🩺 **General Health Checkup:** Comprehensive physical examination, vitals, and family health review.
   - Cinematic crossfade and subtle Ken Burns zoom animation.
   - Interactive navigation controls (Previous/Next buttons, 5 active animated indicator dots, and dynamic clinical caption badge).
   - Instant synchronization: Clicking any of the 5 specialty pills (*Fever*, *Diabetes*, *BP*, *Paediatrics*, *General Checkup*) immediately transitions the slider to that corresponding medical background.
   - Smart pause-on-hover so visitors can read the content comfortably.
   - Features **Dr. Hardeep Singh's professional portrait** with verified practitioner badge.
   - Live "OPD Open Today" status pill.
   - Floating experience and patient satisfaction badges.

4. **Interactive Symptom & Care Guide (Triage Tool):**
   - Patients can tap on specific symptoms (Fever, Sugar, High BP, Child Illness, Weakness) to view tailored guidance and instantly jump to the booking form with pre-selected options.

5. **Daily OPD Consultation Timings:**
   - Structured schedule for Morning and Evening sessions:
     - **Monday to Saturday:** 09:00 AM – 02:00 PM & 05:00 PM – 08:30 PM
     - **Sunday:** 10:00 AM – 02:00 PM (Emergency 24x7)

6. **Dual Action Appointment Booking System:**
   - **Option A - Instant WhatsApp Booking:** Automatically crafts a structured, polite booking message and opens WhatsApp with the hospital's number.
   - **Option B - Instant Printable Token Slip:** Generates an official hospital token ID (e.g. `SRH-2611-4892`) and opens a printable digital OPD slip with patient details, reporting time, and clinic instructions.

7. **Hospital Reception / OPD Admin Panel (`admin.html` / `admin.php`):**
   - Live dashboard for hospital receptionists.
   - Real-time patient queue table with search, "Mark Attended" status toggle, and one-click **CSV/Excel Export**.

8. **Google Maps & Directions:**
   - Embedded interactive map focused on Aonla, Bareilly (U.P. - 243301).
   - Direct button to launch live GPS turn-by-turn navigation.

9. **Sticky Mobile Action Bar:**
   - Appears on mobile screens: **Call Hospital**, **WhatsApp Chat**, **Book OPD**, and **Location**.

10. **Dual Mode Architecture (Static & XAMPP PHP):**
    - Works 100% offline and standalone just by opening `index.html`.
    - Also includes full PHP backend integration (`index.php`, `api/book.php`, `data/appointments.json`) for running under Apache in XAMPP.

---

## 📂 Project Structure

```
shri_ram_hospital_website/
│
├── index.html                 # Main Hospital Website (Standalone & Responsive)
├── index.php                  # PHP entry point for XAMPP Apache
├── admin.html                 # Receptionist OPD Queue & Management Dashboard
├── admin.php                  # PHP wrapper for Admin Panel
├── README.md                  # Project documentation
│
├── api/
│   └── book.php               # REST API to store & retrieve appointments
│
├── data/
│   └── appointments.json      # JSON persistence store for bookings
│
└── assets/
    ├── css/
    │   └── style.css          # Modern CSS styling, animations & print stylesheet
    ├── js/
    │   └── main.js            # Interactive logic, booking & WhatsApp generator
    └── images/
        ├── dr-hardeep-singh.jpg          # Doctor portrait photo
        ├── hospital-banner-details.png   # Original details reference
        └── logo.svg                      # Custom vector medical logo
```

---

## 💻 How to Run the Website

### Method 1: Direct File Opening (Static Mode)
Double-click `index.html` in Windows Explorer or open it in Google Chrome, Microsoft Edge, or Mozilla Firefox.

### Method 2: Running via XAMPP (Apache + PHP)
1. Open the **XAMPP Control Panel**.
2. Click **Start** next to **Apache**.
3. Open your browser and navigate to:
   - Hospital Website: `http://localhost/shri_ram_hospital_website/`
   - Reception Dashboard: `http://localhost/shri_ram_hospital_website/admin.html`

---

## ⚙️ Customization (Phone Numbers & Timings)

To update phone numbers, WhatsApp, or address:
1. Open `assets/js/main.js` and edit the `HOSPITAL_CONFIG` object at the top:
   ```javascript
   const HOSPITAL_CONFIG = {
     name: 'Shri Ram Hospital – Aonla, Bareilly',
     doctor: 'Dr. Hardeep Singh',
     phone: '+917827355717',          // Reception Phone (078273 55717)
     whatsappNumber: '917827355717',  // WhatsApp number (with country code 91)
     address: 'Krishan Vihar Colony, Opposite 132 KV Power House, Aonla, India, 243301',
     email: 'shriramhospital229@gmail.com',
     emergencyPhone: '+917827355717' // Emergency line
   };
   ```
2. In `index.html`, search for `+91 94120 00000` and replace it with your exact SIM or landline number.
