import os
import re

html_to_php_map = {
    'index.html': 'index.php',
    'about.html': 'about.php',
    'doctors.html': 'doctors.php',
    'services.html': 'services.php',
    'facilities.html': 'facilities.php',
    'gallery.html': 'gallery.php',
    'appointment.html': 'appointment.php',
    'contact.html': 'contact.php',
    'admin.html': 'admin.php'
}

def convert_content(content):
    # 1. Replace all .html internal links to .php
    for html_name, php_name in html_to_php_map.items():
        # Match "name.html" or 'name.html' or url(name.html) or https://...name.html
        content = re.sub(re.escape(html_name), php_name, content)
    
    # 2. Dynamic PHP year in footer
    content = re.sub(r'&copy;\s*20\d\d', '&copy; <?= date(\'Y\') ?>', content)
    content = re.sub(r'©\s*20\d\d', '&copy; <?= date(\'Y\') ?>', content)
    
    return content

# Convert each HTML file to PHP
for html_file, php_file in html_to_php_map.items():
    if not os.path.exists(html_file):
        print(f"Skipping {html_file}: not found.")
        continue
    
    with open(html_file, 'r', encoding='utf-8') as f:
        html_content = f.read()
    
    converted_php = convert_content(html_content)
    
    # Add a clean top PHP docblock
    page_title_comment = f"Shri Ram Hospital – Aonla, Bareilly | {php_file}"
    if not converted_php.strip().startswith('<?php'):
        php_header = f"<?php\n/**\n * {page_title_comment}\n */\n?>\n"
        converted_php = php_header + converted_php
    
    with open(php_file, 'w', encoding='utf-8') as f:
        f.write(converted_php)
    print(f"Generated {php_file} from {html_file}")

    # Also update the HTML file internal links so both work in harmony
    updated_html = convert_content(html_content)
    with open(html_file, 'w', encoding='utf-8') as f:
        f.write(updated_html)
    print(f"Updated internal links in {html_file}")

# Create includes/header.php and includes/footer.php for modular usage
os.makedirs('includes', exist_ok=True)

# Create includes/config.php
config_content = """<?php
/**
 * Shri Ram Hospital Configuration
 */
define('HOSPITAL_NAME', 'Shri Ram Hospital');
define('HOSPITAL_LOCATION', 'Aonla, Bareilly (U.P.)');
define('HOSPITAL_PHONE', '078273 55717');
define('HOSPITAL_PHONE_INTL', '+91 78273 55717');
define('HOSPITAL_EMAIL', 'shriramhospital229@gmail.com');
define('HOSPITAL_ADDRESS', 'Krishan Vihar Colony, Opposite 132 KV Power House, Aonla, Bareilly, Uttar Pradesh - 243301');
define('SENIOR_CONSULTANT', 'Dr. Hardeep Singh');
define('SENIOR_SPECIALITY', 'General Physician & Paediatrics');
"""
with open('includes/config.php', 'w', encoding='utf-8') as f:
    f.write(config_content)
print("Created includes/config.php")

# Create .htaccess for Apache / XAMPP
htaccess_content = """# Shri Ram Hospital - Apache Configuration
DirectoryIndex index.php index.html

# Prevent Directory Browsing
Options -Indexes

# UTF-8 Encoding
AddDefaultCharset UTF-8

# Clean rewrite rules (optional, handles both .php and friendly URLs)
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteBase /shri_ram_hospital_website/
    
    # Redirect .html to .php
    RewriteCond %{THE_REQUEST} \s/+(.+?)\.html[\s?] [NC]
    RewriteRule ^ /shri_ram_hospital_website/%1.php [R=301,L]
</IfModule>
"""
with open('.htaccess', 'w', encoding='utf-8') as f:
    f.write(htaccess_content)
print("Created .htaccess")

print("All tasks completed successfully!")
