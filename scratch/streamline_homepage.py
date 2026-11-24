import re

with open('index.php', 'r', encoding='utf-8') as f:
    content = f.read()

# 1. Add CTA button to the end of #services if not present
services_end_marker = """      </div>
    </div>
  </section>"""

# Find where #services ends
services_pos = content.find('<section id="services"')
services_end = content.find('</section>', services_pos) + len('</section>')

# Find where #facilities starts
facilities_pos = content.find('<section id="facilities"')
# Find where #facilities ends
facilities_end = content.find('</section>', facilities_pos) + len('</section>')

# Find where #appointment starts
appointment_pos = content.find('<section id="appointment"')
# Find where #appointment ends
appointment_end = content.find('</section>', appointment_pos) + len('</section>')

# Find where #contact starts
contact_pos = content.find('<section id="contact"')
# Find where #contact ends
contact_end = content.find('</section>', contact_pos) + len('</section>')

# Part 1: Top of file up to end of #services
part1 = content[:services_pos]

# Services section content:
services_section = content[services_pos:services_end]
# Add a "View All Treatments" CTA at the end of services if not present
if 'View All Treatments' not in services_section:
    services_section = services_section.replace(
        '      </div>\n    </div>\n  </section>',
        """      </div>
      <div style="text-align: center; margin-top: 36px;">
        <a href="services.php" class="btn btn-primary">
          View All Treatments &amp; Specialist Care &rarr;
        </a>
      </div>
    </div>
  </section>"""
    )

# Facilities section:
facilities_section = content[facilities_pos:facilities_end]
# Change facilities from section-alt to section for clean white background
facilities_section = facilities_section.replace('class="section section-alt"', 'class="section"')

# Appointment section:
appointment_section = content[appointment_pos:appointment_end]

# Contact section:
contact_section = content[contact_pos:contact_end]
# Ensure contact has section section-alt
if 'class="section"' in contact_section and 'class="section section-alt"' not in contact_section:
    contact_section = contact_section.replace('<section id="contact" class="section">', '<section id="contact" class="section section-alt">')

# Part 5: End of file (footer include)
footer_pos = content.find("include 'footer.php';", contact_end)
part_footer = content[contact_end:]

# Assemble streamlined homepage
streamlined = (
    part1 +
    services_section + "\n\n" +
    "  <!-- ===================================================================\n" +
    "       6. HOSPITAL FACILITIES & INFRASTRUCTURE HIGHLIGHTS\n" +
    "       =================================================================== -->\n" +
    facilities_section + "\n\n" +
    "  <!-- ===================================================================\n" +
    "       7. INTERACTIVE APPOINTMENT BOOKING FORM\n" +
    "       =================================================================== -->\n" +
    appointment_section + "\n\n" +
    "  <!-- ===================================================================\n" +
    "       8. LOCATION, CONTACT & GOOGLE MAPS\n" +
    "       =================================================================== -->\n" +
    contact_section + "\n\n" +
    part_footer
)

with open('index.php', 'w', encoding='utf-8') as f:
    f.write(streamlined)

print(f"Successfully streamlined index.php! Original length: {len(content)}, New length: {len(streamlined)}")
