<?php
/**
 * Shri Ram Hospital – Aonla, Bareilly | admin.php
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reception OPD Dashboard | Shri Ram Hospital – Aonla, Bareilly</title>
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="64x64" href="assets/images/favicon.png">
  <link rel="icon" type="image/svg+xml" href="assets/images/shri_ram_hospital_aonla_bareilly_uttar_pradesh.svg">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
    body { background-color: #f1f5f9; padding-bottom: 30px; }
    .admin-header { background: #ffffff; border-bottom: 1px solid var(--border-color); padding: 16px 0; }
    .admin-bar { display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px; }
    .dashboard-title { font-size: 1.4rem; font-weight: 800; color: var(--dark); display: flex; align-items: center; gap: 10px; }
    .stats-dashboard { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 16px; margin: 24px 0; }
    .dash-stat-card { background: #ffffff; border: 1px solid var(--border-color); border-radius: var(--radius-md); padding: 20px; box-shadow: var(--shadow-sm); }
    .dash-stat-num { font-size: 1.8rem; font-weight: 800; color: var(--primary); }
    .dash-stat-label { font-size: 0.82rem; color: var(--text-muted); font-weight: 600; text-transform: uppercase; }
    .table-container { background: #ffffff; border: 1px solid var(--border-color); border-radius: var(--radius-md); box-shadow: var(--shadow-sm); overflow: hidden; }
    .table-toolbar { padding: 16px 20px; border-bottom: 1px solid var(--border-color); display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 12px; }
    .opd-table { width: 100%; border-collapse: collapse; text-align: left; }
    .opd-table th, .opd-table td { padding: 14px 18px; border-bottom: 1px solid var(--border-color); font-size: 0.88rem; }
    .opd-table th { background: #f8fafc; font-weight: 700; color: var(--text-main); font-size: 0.78rem; text-transform: uppercase; }
    .status-badge { display: inline-block; padding: 4px 10px; border-radius: 999px; font-size: 0.75rem; font-weight: 700; }
    .status-confirmed { background: #dcfce7; color: #166534; }
    .status-attended { background: #e0f2fe; color: #075985; }
    .empty-state { text-align: center; padding: 50px 20px; color: var(--text-muted); }
  </style>
</head>
<body>

  <!-- Admin Header -->
  <header class="admin-header">
    <div class="container admin-bar">
      <div>
        <div class="dashboard-title">
          <img src="assets/images/shri_ram_hospital_aonla_bareilly_uttar_pradesh.png" alt="Shri Ram Hospital Logo" style="width: 36px; height: 36px; object-fit: contain;">
          <span>Shri Ram Hospital – OPD Reception Desk</span>
        </div>
        <div style="font-size: 0.82rem; color: var(--text-muted); margin-top: 2px;">
          Dr. Hardeep Singh (General Physician & Paediatrics) &bull; Aonla, Bareilly
        </div>
      </div>
      <div style="display: flex; gap: 10px; align-items: center;">
        <a href="index.php" class="btn btn-outline btn-sm">&larr; Back to Hospital Website</a>
        <button id="refreshBtn" class="btn btn-primary btn-sm">🔄 Refresh List</button>
      </div>
    </div>
  </header>

  <main class="container">
    <!-- Stat Counters -->
    <div class="stats-dashboard">
      <div class="dash-stat-card">
        <div id="statTotal" class="dash-stat-num">0</div>
        <div class="dash-stat-label">Total Appointments</div>
      </div>
      <div class="dash-stat-card">
        <div id="statToday" class="dash-stat-num">0</div>
        <div class="dash-stat-label">Today's OPD Queue</div>
      </div>
      <div class="dash-stat-card">
        <div id="statFever" class="dash-stat-num">0</div>
        <div class="dash-stat-label">Fever & Viral Cases</div>
      </div>
      <div class="dash-stat-card">
        <div id="statChild" class="dash-stat-num">0</div>
        <div class="dash-stat-label">Paediatric Cases</div>
      </div>
    </div>

    <!-- Table Container -->
    <div class="table-container">
      <div class="table-toolbar">
        <div style="display: flex; gap: 12px; align-items: center; flex: 1; max-width: 450px;">
          <input type="text" id="searchPatient" class="form-control" placeholder="Search patient name, phone, or token...">
        </div>
        <div style="display: flex; gap: 10px;">
          <button id="exportCsvBtn" class="btn btn-outline btn-sm">📥 Export CSV / Excel</button>
          <button onclick="window.print()" class="btn btn-outline btn-sm">🖨️ Print OPD List</button>
        </div>
      </div>

      <div style="overflow-x: auto;">
        <table class="opd-table">
          <thead>
            <tr>
              <th>Token ID</th>
              <th>Patient Name</th>
              <th>Phone</th>
              <th>Age / Gender</th>
              <th>Department / Concern</th>
              <th>Consultation Date</th>
              <th>Time Slot</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="opdTableBody">
            <!-- Dynamically populated via JS -->
          </tbody>
        </table>
      </div>
    </div>
  </main>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const tbody = document.getElementById('opdTableBody');
      const searchInput = document.getElementById('searchPatient');
      const refreshBtn = document.getElementById('refreshBtn');
      const exportCsvBtn = document.getElementById('exportCsvBtn');

      let appointments = [];

      // Initial dummy seed if storage is empty, to demonstrate rich functionality
      function getStoredAppointments() {
        let stored = localStorage.getItem('shri_ram_appointments');
        if (!stored || stored === '[]') {
          const sample = [
            {
              tokenId: 'SRH-2611-1021',
              name: 'Mohit Sharma',
              phone: '9412087654',
              age: '32',
              gender: 'Male',
              service: 'Fever & Viral Care',
              date: new Date().toISOString().split('T')[0],
              formattedDate: 'Today',
              slot: '09:30 AM – 11:30 AM',
              status: 'Confirmed'
            },
            {
              tokenId: 'SRH-2611-1022',
              name: 'Aarav Gupta (Child)',
              phone: '8979012345',
              age: '5',
              gender: 'Child (Boy)',
              service: 'Paediatrics & Child Care',
              date: new Date().toISOString().split('T')[0],
              formattedDate: 'Today',
              slot: '11:30 AM – 01:30 PM',
              status: 'Confirmed'
            },
            {
              tokenId: 'SRH-2611-1023',
              name: 'Shanti Devi',
              phone: '9837098765',
              age: '58',
              gender: 'Female',
              service: 'Diabetes Management',
              date: new Date().toISOString().split('T')[0],
              formattedDate: 'Today',
              slot: '05:00 PM – 06:30 PM',
              status: 'Confirmed'
            }
          ];
          localStorage.setItem('shri_ram_appointments', JSON.stringify(sample));
          return sample;
        }
        try {
          return JSON.parse(stored);
        } catch {
          return [];
        }
      }

      function loadData() {
        appointments = getStoredAppointments();

        // Also fetch from PHP backend if available
        fetch('api/book.php')
          .then(res => res.json())
          .then(data => {
            if (Array.isArray(data) && data.length > 0) {
              // merge unique by tokenId
              const ids = new Set(appointments.map(a => a.tokenId));
              data.forEach(item => {
                if (!ids.has(item.tokenId)) {
                  appointments.unshift(item);
                }
              });
            }
            renderTable();
          })
          .catch(() => {
            renderTable();
          });
      }

      function updateStats() {
        const todayStr = new Date().toISOString().split('T')[0];
        document.getElementById('statTotal').textContent = appointments.length;
        document.getElementById('statToday').textContent = appointments.filter(a => a.date === todayStr).length;
        document.getElementById('statFever').textContent = appointments.filter(a => (a.service || '').includes('Fever')).length;
        document.getElementById('statChild').textContent = appointments.filter(a => (a.service || '').includes('Paediatric')).length;
      }

      function renderTable(filter = '') {
        updateStats();
        tbody.innerHTML = '';
        const search = filter.toLowerCase().trim();

        const filtered = appointments.filter(a => {
          if (!search) return true;
          return (
            (a.name && a.name.toLowerCase().includes(search)) ||
            (a.phone && a.phone.includes(search)) ||
            (a.tokenId && a.tokenId.toLowerCase().includes(search)) ||
            (a.service && a.service.toLowerCase().includes(search))
          );
        });

        if (filtered.length === 0) {
          tbody.innerHTML = `<tr><td colspan="9" class="empty-state">No appointments found.</td></tr>`;
          return;
        }

        filtered.forEach((apt, idx) => {
          const tr = document.createElement('tr');
          tr.innerHTML = `
            <td><strong>${apt.tokenId || 'SRH-' + idx}</strong></td>
            <td><strong>${apt.name}</strong></td>
            <td><a href="tel:${apt.phone}" style="color: var(--primary); font-weight: 600;">${apt.phone}</a></td>
            <td>${apt.age} Yrs / ${apt.gender || '-'}</td>
            <td><span style="font-weight: 600;">${apt.service || 'General'}</span></td>
            <td>${apt.formattedDate || apt.date}</td>
            <td>${apt.slot || '-'}</td>
            <td><span class="status-badge ${apt.status === 'Attended' ? 'status-attended' : 'status-confirmed'}">${apt.status || 'Confirmed'}</span></td>
            <td>
              <button onclick="toggleAttended('${apt.tokenId}')" class="btn btn-outline btn-sm" style="padding: 4px 8px; font-size: 0.75rem;">
                ${apt.status === 'Attended' ? 'Mark Pending' : 'Mark Attended'}
              </button>
            </td>
          `;
          tbody.appendChild(tr);
        });
      }

      window.toggleAttended = function(tokenId) {
        appointments = appointments.map(a => {
          if (a.tokenId === tokenId) {
            a.status = a.status === 'Attended' ? 'Confirmed' : 'Attended';
          }
          return a;
        });
        localStorage.setItem('shri_ram_appointments', JSON.stringify(appointments));
        renderTable(searchInput.value);
      };

      searchInput.addEventListener('input', (e) => {
        renderTable(e.target.value);
      });

      refreshBtn.addEventListener('click', loadData);

      exportCsvBtn.addEventListener('click', () => {
        if (appointments.length === 0) return alert('No records to export');
        let csv = 'Token,Patient Name,Phone,Age,Gender,Department,Date,Slot,Status\n';
        appointments.forEach(a => {
          csv += `"${a.tokenId}","${a.name}","${a.phone}","${a.age}","${a.gender}","${a.service}","${a.date}","${a.slot}","${a.status}"\n`;
        });
        const blob = new Blob([csv], { type: 'text/csv;charset=utf-8;' });
        const url = URL.createObjectURL(blob);
        const link = document.createElement('a');
        link.setAttribute('href', url);
        link.setAttribute('download', `Shri_Ram_Hospital_OPD_List_${new Date().toISOString().split('T')[0]}.csv`);
        link.click();
      });

      loadData();
    });
  </script>
</body>
</html>
