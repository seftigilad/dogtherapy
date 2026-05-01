# Site context — dogtherapy

## Owner & business
- **Owner:** בתאל (Bat-El). Certified therapy-dog practitioner ("כלבנית טיפולית") via My Dog.
- **Location:** Be'er Yaakov, Israel.
- **Clients:** mostly children, including children with special needs.
- **Therapy dogs:** Amy (golden retriever), Candy (poodle).
- **Contact:** phone/WhatsApp 052-6416831, email gilsefti@gmail.com, Facebook page id 61558537584241.

## Primary business goal
Generate more **local** client leads from **Be'er Yaakov and the immediate surrounding area**. Local SEO and conversion (clear CTAs, trust signals, lead capture) matter more than national reach or visual polish.

## Site structure
- Static HTML pages (`index.html`, `about.html`, `pricing.html`, `class.html`, `fear.html`, `gefen.html`, `contact.html`) plus a PHP blog (`blog.php`, `blog1.php`, `blogentry.php`).
- Language: Hebrew, `dir="rtl"` implied, `lang="he"`. **Reply to the owner in Hebrew by default.**
- Stack: Bootstrap 4-era theme (jQuery, Owl Carousel, Magnific Popup, Stellar). No build pipeline visible — edits go straight to the served HTML/CSS.
- Tracking: Google Tag Manager `GTM-M8LHLD66` is installed on at least `index.html`.
- Sitemap: `sitemap.xml` in root.
- `images/` holds photos; `scss/` and `css/` contain styles (compiled CSS is what's actually served).

## Working notes
- The owner is the business owner, not a developer. Keep explanations short and tied to business impact (more leads, better Google ranking, more trust).
- Confirm before making large changes — these files are live.
- Service-area copy on `contact.html` lists a wider region (Rishon, Ramla, Nes Tziona, Shfela, Gush Dan), but the owner's stated focus is Be'er Yaakov + close surroundings. Reconcile copy with this focus when editing.
- גפ"ן page = Israeli Ministry of Education enrichment-program track. Likely she is an approved provider; relevant for school/kindergarten leads.
