import re

# Read index.php to extract the canonical header and footer blocks
with open('index.php', 'r', encoding='utf-8') as f:
    index_content = f.read()

# Let's inspect where the header ends in index.php
# Header ends after: </aside> and before <!-- === 3. FULL-WIDTH CLEAN HOSPITAL IMAGE SLIDER
split_header_pos = index_content.find('</aside>') + len('</aside>')
header_block = index_content[:split_header_pos]

# Let's inspect where the footer begins in index.php
# Footer begins at: <footer class="site-footer">
split_footer_pos = index_content.find('<footer class="site-footer">')
# Find the comment preceding it if any
comment_idx = index_content.rfind('<!-- ===', 0, split_footer_pos)
if comment_idx != -1 and 'FOOTER' in index_content[comment_idx:split_footer_pos]:
    split_footer_pos = comment_idx

footer_block = index_content[split_footer_pos:]

print(f"Header block length: {len(header_block)} chars")
print(f"Footer block length: {len(footer_block)} chars")
