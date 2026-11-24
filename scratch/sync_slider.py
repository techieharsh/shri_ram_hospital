import re

with open('index.php', 'r', encoding='utf-8') as f:
    php_content = f.read()

start_marker = '<div class="slider-slides-track" id="sliderSlidesTrack">'
end_marker = '<!-- Scroll Down Indicator -->'

track_content = php_content.split(start_marker)[1].split(end_marker)[0]

with open('index.html', 'r', encoding='utf-8') as f:
    html_content = f.read()

prefix = html_content.split(start_marker)[0]
suffix = html_content.split(end_marker)[1]

new_html = prefix + start_marker + track_content + end_marker + suffix

with open('index.html', 'w', encoding='utf-8') as f:
    f.write(new_html)

print("Updated index.html slider track successfully.")
