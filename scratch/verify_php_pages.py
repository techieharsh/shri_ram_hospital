import urllib.request

php_pages = [
    'index.php',
    'about.php',
    'doctors.php',
    'services.php',
    'facilities.php',
    'gallery.php',
    'appointment.php',
    'contact.php',
    'admin.php'
]

base_url = 'http://localhost/shri_ram_hospital_website/'

for page in php_pages:
    url = base_url + page
    req = urllib.request.Request(url, headers={'User-Agent': 'Mozilla/5.0'})
    with urllib.request.urlopen(req) as resp:
        status = resp.status
        body = resp.read().decode('utf-8')
        assert status == 200, f"Page {page} returned status {status}"
        assert 'Shri Ram Hospital' in body, f"Page {page} missing hospital name"
        assert 'shri_ram_hospital_aonla_bareilly_uttar_pradesh' in body, f"Page {page} missing logo"
        # Check that copyright year is rendered (e.g. 2026, not raw PHP tag)
        if page != 'admin.php':
            assert '<?= date' not in body, f"Raw PHP tag found in {page}!"
            assert '2026' in body, f"Year not rendered in {page}!"
        print(f"PASSED: {page} (Status {status}, Length {len(body)} bytes)")

print("\nAll 9 PHP pages successfully verified over Apache localhost!")
