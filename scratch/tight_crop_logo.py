from PIL import Image
import base64

# Open original jpeg
orig_jpeg = Image.open('assets/images/shri_ram_hospital_aonla_bareilly_uttar_pradesh.jpeg').convert('RGB')
w, h = orig_jpeg.size

# Precise BFS flood fill from all four edges to remove only exterior white background
pixels = orig_jpeg.load()
visited = set()
queue = []

def is_near_white(x, y):
    r, g, b = pixels[x, y]
    return r > 240 and g > 240 and b > 240

for x in range(w):
    if is_near_white(x, 0):
        queue.append((x, 0))
        visited.add((x, 0))
    if is_near_white(x, h - 1):
        queue.append((x, h - 1))
        visited.add((x, h - 1))

for y in range(h):
    if is_near_white(0, y):
        queue.append((0, y))
        visited.add((0, y))
    if is_near_white(w - 1, y):
        queue.append((w - 1, y))
        visited.add((w - 1, y))

while queue:
    cx, cy = queue.pop(0)
    for dx, dy in [(-1, 0), (1, 0), (0, -1), (0, 1)]:
        nx, ny = cx + dx, cy + dy
        if 0 <= nx < w and 0 <= ny < h:
            if (nx, ny) not in visited and is_near_white(nx, ny):
                visited.add((nx, ny))
                queue.append((nx, ny))

# Build RGBA
rgba = Image.new('RGBA', (w, h), (0, 0, 0, 0))
rgba_pix = rgba.load()

for y in range(h):
    for x in range(w):
        r, g, b = pixels[x, y]
        if (x, y) in visited:
            rgba_pix[x, y] = (255, 255, 255, 0)
        else:
            rgba_pix[x, y] = (r, g, b, 255)

# Tight crop
bbox = rgba.getbbox()
print("Tight bounding box:", bbox)
cropped_rgba = rgba.crop(bbox)

# Add minimal 2px padding for crisp edge
pad = 2
final_png = Image.new('RGBA', (cropped_rgba.width + pad*2, cropped_rgba.height + pad*2), (0,0,0,0))
final_png.paste(cropped_rgba, (pad, pad))

# Save over assets/images/shri_ram_hospital_aonla_bareilly_uttar_pradesh.png
final_png.save('assets/images/shri_ram_hospital_aonla_bareilly_uttar_pradesh.png', 'PNG')
final_png.save('assets/images/shri_ram_hospital_aonla_bareilly_uttar_pradesh.webp', 'WEBP', quality=95)

# Also create tightly cropped JPEG version with pure white background
final_jpeg = Image.new('RGB', final_png.size, (255, 255, 255))
final_jpeg.paste(final_png, (0, 0), final_png)
final_jpeg.save('assets/images/shri_ram_hospital_aonla_bareilly_uttar_pradesh_cropped.jpeg', 'JPEG', quality=98)

# Update SVG
fw, fh = final_png.size
with open('assets/images/shri_ram_hospital_aonla_bareilly_uttar_pradesh.png', 'rb') as f:
    b64_png = base64.b64encode(f.read()).decode('utf-8')

svg_content = f'''<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 {fw} {fh}" width="100%" height="100%">
  <title>Shri Ram Hospital Aonla Bareilly Uttar Pradesh Logo</title>
  <image href="data:image/png;base64,{b64_png}" width="{fw}" height="{fh}"/>
</svg>'''

with open('assets/images/shri_ram_hospital_aonla_bareilly_uttar_pradesh.svg', 'w', encoding='utf-8') as f:
    f.write(svg_content)
with open('assets/images/logo.svg', 'w', encoding='utf-8') as f:
    f.write(svg_content)

print(f"Success! Tight logo size: {final_png.size} (was {w}x{h})")
