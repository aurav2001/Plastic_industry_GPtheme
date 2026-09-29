# GP Theme — Blow & Injection Moulding | Defence & Aerospace
**A Modern, High-Performance, Production-Ready WordPress Theme**  
*Inspired by [Jyoti Global Plast](https://jyotiglobalplast.com/)*

---

## 🌟 Theme Highlights / मुख्य विशेषताएं

- **Industry-Specific Design**: Precision engineering, industrial blow & injection moulding, hazardous chemical packaging (UN Certified), and tactical Defence & Aerospace UAV drone systems.
- **Modern High-Tech Aesthetic**: Deep precision navy (`#0b2545`), energy red (`#ef233c`), and aerospace cyan accents with glassmorphism, micro-animations, and fluid layouts.
- **Full WordPress Standards Compliant**:
  - `style.css` with valid theme header tags
  - `functions.php` with theme support (`title-tag`, `post-thumbnails`, `custom-logo`, `html5`, `nav-menus`, `widget-areas`)
  - Full template hierarchy (`header.php`, `footer.php`, `front-page.php`, `index.php`, `page.php`, `single.php`, `archive.php`, `sidebar.php`, `search.php`, `404.php`, `comments.php`)
- **Custom Post Type: Products (`gp_product`)**:
  - Taxonomy: `gp_product_cat` (Blow Moulding, Injection Moulding, Defence & Aerospace)
  - Custom Meta Boxes for Technical Specifications: Capacity, Polymer Material, Approx Weight, Neck Size/Process, Available Colors, Key Applications, Certifications.
- **Built-in Fallback Demo Data**:
  - Theme displays the complete, rich Jyoti Global Plast industrial catalog right out of the box even before any posts are added!
- **Interactive Features**:
  - 🚀 **Hero Carousel**: Multi-slide showcasing Defence Drones, Plastic Engineering, and Green Manufacturing.
  - 🔢 **Animated Live Counters**: 4 Manufacturing Units, 1,000+ Clients, 100+ Products, 40+ Years of Dedication.
  - 🔍 **Interactive Product Filter Tabs**: Instant client-side filtering between Blow Moulding, Injection Moulding, and Defence Drones.
  - 💬 **Floating WhatsApp Chat Widget**: Configurable phone number and custom message popup.
  - 📋 **Quick RFQ (Request for Quote) Modal**: Click "Enquire Now" on any product to open a pre-filled quote form.
  - ✉️ **AJAX Form Processing**: Direct AJAX endpoint with nonce validation and instant user feedback.
  - 🏢 **Infinite Client Logo Marquee**: BASF, APAR, HP Lubricants, Nalco Water, Ipca Laboratories, Chem-Trend, etc.
  - 📱 **Mobile Navigation Drawer**: Smooth slide-in drawer with multi-level dropdowns.

---

## 📁 File Structure / फ़ाइल संरचना

```
GP_THEME/
├── style.css                  # Theme metadata & core WP styles
├── functions.php              # Theme setup, scripts, custom CPTs, AJAX handlers
├── header.php                 # Topbar, branding, sticky navigation & mobile drawer
├── footer.php                 # 4-column footer, CTA strip, WhatsApp widget, RFQ modal
├── front-page.php             # Full homepage with hero, stats, story, products, news
├── index.php                  # Default blog index fallback
├── page.php                   # Standard page template with breadcrumb banner
├── single.php                 # Single post article layout with sidebar & comments
├── single-gp_product.php      # Single Product page with specs table & enquiry triggers
├── archive-gp_product.php     # Products archive catalog with filter tabs
├── archive.php                # Category and tag archive template
├── sidebar.php                # Widgetized sidebar with search & brochure CTA
├── search.php                 # Search results page
├── 404.php                    # Custom 404 error page
├── comments.php               # Threaded comment layout
├── screenshot.png             # Theme preview thumbnail for WP Admin
├── index.html                 # Standalone live preview (open in browser without WP)
├── inc/
│   ├── custom-post-types.php  # Products CPT, taxonomy & technical specs meta boxes
│   ├── customizer.php         # WP Customizer settings (Phone, Email, WhatsApp, Social)
│   ├── template-tags.php      # Breadcrumbs, date formatting, meta helpers
│   └── demo-data.php          # Built-in industrial catalog and client fallback data
├── page-templates/
│   ├── template-about.php     # Dedicated About Us & 40-year story template
│   ├── template-defence.php   # Dedicated UAV Drones & Aerospace division template
│   ├── template-contact.php   # Dedicated Contact & Plant locations template
│   └── template-investors.php # Dedicated Investor relations & SEBI disclosures
└── assets/
    ├── css/
    │   └── main.css           # Complete responsive CSS design system
    └── js/
        └── main.js            # Carousel, counters, filters, modals & AJAX logic
```

---

## 🚀 How to Install on WordPress / वर्डप्रेस पर कैसे इनस्टॉल करें

### Method 1: Direct Folder Copy (Local or FTP/CPanel)
1. Copy the entire `GP_THEME` folder into your WordPress installation directory:
   ```
   wp-content/themes/gp-theme
   ```
2. Open your WordPress Admin Dashboard (`/wp-admin`).
3. Navigate to **Appearance > Themes** (रूप-रंग > थीम्स).
4. You will see **GP Theme - Blow & Injection Moulding** with its high-res preview screenshot.
5. Click **Activate** (सक्रिय करें).

### Method 2: ZIP Upload
1. Compress the contents of this folder into a `.zip` archive named `gp-theme.zip`.
2. In WordPress Admin, go to **Appearance > Themes > Add New > Upload Theme**.
3. Select `gp-theme.zip` and click **Install Now**, then **Activate**.

---

## ⚙️ Customizer Settings / थीम कस्टमाइज़ेशन

Go to **Appearance > Customize** (कस्टमाइज़) in your WordPress admin:
1. **Company Info & Contact**:
   - Company Tagline / Certification (`ISO 9001:2015 Certified Company`)
   - Primary Phone Number (`+91-8591585497`)
   - Official Email (`info@jyotiglobalplast.com`)
   - Factory & Plant Address (Rabale MIDC Navi Mumbai)
2. **WhatsApp Floating Widget**:
   - Enable / Disable floating button
   - WhatsApp Number (e.g. `918591585497`)
   - Default pre-filled message text
3. **Social Media Links**:
   - LinkedIn URL & Facebook URL
4. **Site Identity**:
   - Upload your custom high-resolution logo (Recommended dimensions: `260x80px`).

---

## 📄 Dedicated Page Templates / पेज टेम्पलेट्स

When creating pages in WordPress (**Pages > Add New**), you can select custom templates from the **Page Attributes** box on the right:
- **About Us Page**: `page-templates/template-about.php`
- **Defence & Aerospace Division**: `page-templates/template-defence.php`
- **Contact Us & Plant Coordinates**: `page-templates/template-contact.php`
- **Investor Relations & SEBI**: `page-templates/template-investors.php`

---

## 📦 Adding Products to Catalog / नए प्रोडक्ट्स जोड़ना

1. Go to **Products Catalog > Add New** in WordPress admin.
2. Enter the Product Title (e.g., *210L L-Ring Barrel* or *Surveillance UAV*).
3. Set the Featured Image (Thumbnail).
4. Assign a category under **Product Categories** (*Blow Moulding*, *Injection Moulding*, or *Defence & Aerospace*).
5. Fill in the **Product Technical Specifications** box:
   - Capacity / Dimensions
   - Polymer Material
   - Approx Weight
   - Moulding Process / Neck Size
   - Available Colors
   - Key Applications
   - Certifications (UN Approved, FDA, etc.)
6. Click **Publish** — it automatically appears in the homepage filterable grid and product archive!

---

## 🌐 Instant Live Browser Preview (Without WordPress)
If you want to quickly preview the design, animations, counters, and responsive layout right now on your machine:
- Simply double-click **`index.html`** in this folder to open it in Chrome, Edge, or any modern browser!
- All sliders, filter tabs, stats counting, and modals work out of the box!
