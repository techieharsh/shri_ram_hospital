from PIL import Image

img = Image.open('assets/images/shri_ram_hospital_aonla_bareilly_uttar_pradesh.jpeg')
print('Size:', img.size)
print('Mode:', img.mode)

# Sample some corners
corners = [
    img.getpixel((0, 0)),
    img.getpixel((img.size[0]-1, 0)),
    img.getpixel((0, img.size[1]-1)),
    img.getpixel((img.size[0]-1, img.size[1]-1))
]
print('Corners:', corners)

# Check bounding box of non-white pixels
# Consider non-white as any channel < 240
gray = img.convert('L')
# Invert so content is bright, background is dark
bw = gray.point(lambda p: 255 if p < 245 else 0)
bbox = bw.getbbox()
print('Non-white bounding box:', bbox)

# Create a clean transparent PNG version as well
rgba = img.convert('RGBA')
datas = rgba.getdata()

newData = []
for item in datas:
    # item is (R, G, B, A)
    # If pixel is close to pure white, make it transparent with smooth alpha roll-off
    r, g, b, a = item
    brightness = 0.299 * r + 0.587 * g + 0.114 * b
    if r > 248 and g > 248 and b > 248:
        newData.append((255, 255, 255, 0))
    elif r > 235 and g > 235 and b > 235:
        # smooth anti-aliased edge
        alpha = int((255 - max(r, g, b)) / (255 - 235) * 255)
        newData.append((r, g, b, alpha))
    else:
        newData.append((r, g, b, 255))

rgba.putdata(newData)
rgba.save('assets/images/shri_ram_hospital_aonla_bareilly_uttar_pradesh.png', 'PNG')
print('Saved transparent PNG!')

# Also create a crisp cropped version and high-res favicon
# Let's see what the bbox of the top circular emblem is:
# Let's find horizontal line between emblem and text
w, h = img.size
# Top emblem is roughly in the top half
top_half = bw.crop((0, 0, w, int(h * 0.6)))
print('Top emblem bbox:', top_half.getbbox())

# Let's save a favicon (32x32, 64x64, 192x192) from the top circular emblem and from the whole logo
circle_bbox = top_half.getbbox()
if circle_bbox:
    emblem_crop = rgba.crop(circle_bbox)
    # Add a slight 4px padding
    pad = 8
    emblem_padded = Image.new('RGBA', (emblem_crop.width + pad*2, emblem_crop.height + pad*2), (0,0,0,0))
    emblem_padded.paste(emblem_crop, (pad, pad))
    emblem_padded.save('assets/images/logo-emblem.png', 'PNG')
    # Save favicon
    fav = emblem_padded.resize((64, 64), Image.Resampling.LANCZOS)
    fav.save('assets/images/favicon.png', 'PNG')
    fav32 = emblem_padded.resize((32, 32), Image.Resampling.LANCZOS)
    fav32.save('assets/images/favicon-32x32.png', 'PNG')
    print('Saved emblem & favicons')
