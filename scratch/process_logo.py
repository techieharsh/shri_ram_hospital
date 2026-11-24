from PIL import Image

# Open original jpeg
img = Image.open('assets/images/shri_ram_hospital_aonla_bareilly_uttar_pradesh.jpeg').convert('RGBA')
w, h = img.size

# Flood fill from all 4 borders to only remove outer background
# We can do BFS from outer perimeter pixels that are near-white
pixels = img.load()
visited = set()
queue = []

def is_near_white(x, y):
    r, g, b, _ = pixels[x, y]
    # Check if pixel is background white / off-white
    return r > 240 and g > 240 and b > 240

# Add perimeter pixels to queue if near white
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

# BFS
while queue:
    cx, cy = queue.pop(0)
    for dx, dy in [(-1, 0), (1, 0), (0, -1), (0, 1)]:
        nx, ny = cx + dx, cy + dy
        if 0 <= nx < w and 0 <= ny < h:
            if (nx, ny) not in visited:
                if is_near_white(nx, ny):
                    visited.add((nx, ny))
                    queue.append((nx, ny))

print(f"Total background pixels visited: {len(visited)} out of {w*h} ({len(visited)/(w*h)*100:.1f}%)")

# Create output image with transparency
out = Image.new('RGBA', (w, h), (0, 0, 0, 0))
out_pixels = out.load()

for y in range(h):
    for x in range(w):
        r, g, b, _ = pixels[x, y]
        if (x, y) in visited:
            # It is exterior background
            # If near the boundary of non-visited, we can soften slightly
            out_pixels[x, y] = (255, 255, 255, 0)
        else:
            out_pixels[x, y] = (r, g, b, 255)

# Save high-quality PNG
out.save('assets/images/shri_ram_hospital_aonla_bareilly_uttar_pradesh.png', 'PNG')

# Crop to tight bounding box of non-zero alpha
bbox = out.getbbox()
print("Tight non-zero bbox:", bbox)
cropped = out.crop(bbox)
# Add small 4px margin so anti-aliasing doesn't clip
margin = 6
tight = Image.new('RGBA', (cropped.width + margin*2, cropped.height + margin*2), (0,0,0,0))
tight.paste(cropped, (margin, margin))
tight.save('assets/images/shri_ram_hospital_aonla_bareilly_uttar_pradesh_tight.png', 'PNG')

# Also save high-res WebP
tight.save('assets/images/shri_ram_hospital_aonla_bareilly_uttar_pradesh.webp', 'WEBP', quality=95)

# Favicons
tight.resize((64, 64), Image.Resampling.LANCZOS).save('assets/images/favicon.png', 'PNG')
tight.resize((32, 32), Image.Resampling.LANCZOS).save('assets/images/favicon-32x32.png', 'PNG')
tight.resize((192, 192), Image.Resampling.LANCZOS).save('assets/images/favicon-192x192.png', 'PNG')
tight.resize((180, 180), Image.Resampling.LANCZOS).save('assets/images/apple-touch-icon.png', 'PNG')

print("All image assets generated successfully!")
