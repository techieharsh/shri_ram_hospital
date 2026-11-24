import os
import glob

html_files = [
    'about.html',
    'doctors.html',
    'services.html',
    'facilities.html',
    'gallery.html',
    'appointment.html',
    'contact.html'
]

favicon_old = '<link rel="icon" type="image/svg+xml" href="assets/images/logo.svg">'
favicon_new = '''  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="64x64" href="assets/images/favicon.png">
  <link rel="icon" type="image/svg+xml" href="assets/images/shri_ram_hospital_aonla_bareilly_uttar_pradesh.svg">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">'''

header_icon_old = '''        <div class="brand-icon-box">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/>
            <path d="M12 5v14"/>
            <path d="M5 12h14"/>
          </svg>
        </div>'''
header_icon_new = '''        <img src="assets/images/shri_ram_hospital_aonla_bareilly_uttar_pradesh.png" alt="Shri Ram Hospital Aonla Bareilly Uttar Pradesh Logo" class="brand-logo-img" width="48" height="48">'''

footer_icon_old = '''        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 14px;">
          <div style="width: 38px; height: 38px; border-radius: 10px; background: var(--primary); display: flex; align-items: center; justify-content: center; color: white;">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 5v14M5 12h14"/></svg>
          </div>'''
footer_icon_new = '''        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 14px;">
          <img src="assets/images/shri_ram_hospital_aonla_bareilly_uttar_pradesh.png" alt="Shri Ram Hospital Logo" class="footer-logo-img" width="44" height="44">'''

for filename in html_files:
    if not os.path.exists(filename):
        continue
    with open(filename, 'r', encoding='utf-8') as f:
        content = f.read()

    modified = False
    if favicon_old in content:
        content = content.replace(favicon_old, favicon_new)
        modified = True
    else:
        print(f"Warning: Favicon pattern not found in {filename}")

    if header_icon_old in content:
        content = content.replace(header_icon_old, header_icon_new)
        modified = True
    else:
        print(f"Warning: Header icon pattern not found in {filename}")

    if footer_icon_old in content:
        content = content.replace(footer_icon_old, footer_icon_new)
        modified = True
    else:
        print(f"Warning: Footer icon pattern not found in {filename}")

    if modified:
        with open(filename, 'w', encoding='utf-8') as f:
            f.write(content)
        print(f"Updated {filename} successfully.")

# Update admin.html
if os.path.exists('admin.html'):
    with open('admin.html', 'r', encoding='utf-8') as f:
        admin_content = f.read()
    if favicon_old in admin_content:
        admin_content = admin_content.replace(favicon_old, favicon_new)
    admin_header_old = '<span style="font-size: 1.6rem;">🏥</span>'
    admin_header_new = '<img src="assets/images/shri_ram_hospital_aonla_bareilly_uttar_pradesh.png" alt="Shri Ram Hospital Logo" style="width: 36px; height: 36px; object-fit: contain;">'
    if admin_header_old in admin_content:
        admin_content = admin_content.replace(admin_header_old, admin_header_new)
    with open('admin.html', 'w', encoding='utf-8') as f:
        f.write(admin_content)
    print("Updated admin.html successfully.")
