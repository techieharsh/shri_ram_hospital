import base64
from PIL import Image

# Read PNG and encode as base64
with open('assets/images/shri_ram_hospital_aonla_bareilly_uttar_pradesh.png', 'rb') as f:
    b64_png = base64.b64encode(f.read()).decode('utf-8')

img = Image.open('assets/images/shri_ram_hospital_aonla_bareilly_uttar_pradesh.png')
w, h = img.size

svg_content = f'''<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 {w} {h}" width="100%" height="100%">
  <title>Shri Ram Hospital Aonla Bareilly Uttar Pradesh Logo</title>
  <image href="data:image/png;base64,{b64_png}" width="{w}" height="{h}"/>
</svg>'''

with open('assets/images/shri_ram_hospital_aonla_bareilly_uttar_pradesh.svg', 'w', encoding='utf-8') as f:
    f.write(svg_content)

with open('assets/images/logo.svg', 'w', encoding='utf-8') as f:
    f.write(svg_content)

print("SVG files generated successfully!")
