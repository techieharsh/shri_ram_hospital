import urllib.request

urls = [
    'http://localhost/shri_ram_hospital_website/index.html',
    'http://localhost/shri_ram_hospital_website/about.html',
    'http://localhost/shri_ram_hospital_website/doctors.html',
    'http://localhost/shri_ram_hospital_website/services.html',
    'http://localhost/shri_ram_hospital_website/facilities.html',
    'http://localhost/shri_ram_hospital_website/gallery.html',
    'http://localhost/shri_ram_hospital_website/appointment.html',
    'http://localhost/shri_ram_hospital_website/contact.html',
    'http://localhost/shri_ram_hospital_website/admin.html'
]

for url in urls:
    resp = urllib.request.urlopen(url)
    html = resp.read().decode('utf-8')
    assert resp.status == 200, f'Status {resp.status} for {url}'
    assert 'shri_ram_hospital_aonla_bareilly_uttar_pradesh' in html, f'Logo missing in {url}'
    page_name = url.split('/')[-1]
    print(f'OK ({resp.status}): {page_name}')

print('All 9 pages verified with HTTP 200 and hospital logo present!')
