import os

files = [
    'index.html',
    'about.html',
    'doctors.html',
    'services.html',
    'facilities.html',
    'gallery.html',
    'appointment.html',
    'contact.html'
]

header_old = 'class="brand-logo-img" width="48" height="48"'
header_new = 'class="brand-logo-img" width="78" height="74"'

footer_old = 'class="footer-logo-img" width="44" height="44"'
footer_new = 'class="footer-logo-img" width="58" height="58"'

for fn in files:
    if not os.path.exists(fn):
        continue
    with open(fn, 'r', encoding='utf-8') as f:
        content = f.read()

    changed = False
    if header_old in content:
        content = content.replace(header_old, header_new)
        changed = True
    else:
        print(f"Header pattern not found in {fn}")

    if footer_old in content:
        content = content.replace(footer_old, footer_new)
        changed = True
    else:
        print(f"Footer pattern not found in {fn}")

    if changed:
        with open(fn, 'w', encoding='utf-8') as f:
            f.write(content)
        print(f"Updated {fn}")

print("All files updated successfully!")
