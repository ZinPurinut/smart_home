# SmartHome — S.Smart Luxury Switch Website

## Project Overview
SpaceX-style landing page สำหรับ **S.Smart Automation Systems Co., Ltd.**
สร้างด้วย Laravel + Tailwind CSS v4 เลียนแบบ design style ของ spacex.com

**Live Store:** https://www.ssmartluxuryswitch.com

## Tech Stack
- **Framework:** Laravel 11
- **CSS:** Tailwind CSS v4 (via `@tailwindcss/vite`)
- **Build Tool:** Vite
- **PHP:** 8.2+ce
- **Node:** 20+

## Quick Start

```bash
# Install PHP dependencies
composer install

# Install JS dependencies
npm install

# Copy env file
cp .env.example .env
php artisan key:generate

# Start dev servers (in two terminals)
php artisan serve          # http://localhost:8000
npm run dev                # Vite HMR
```

## File Structure

```
resources/
├── views/
│   ├── layouts/
│   │   └── app.blade.php      # Main layout (navbar + footer)
│   ├── partials/              # Reusable blade partials
│   └── home.blade.php         # Homepage (all sections)
├── css/
│   └── app.css                # Tailwind + custom CSS
└── js/
    └── app.js                 # JS (navbar scroll, reveal animations)

routes/
└── web.php                    # Single route: GET / → home view
```

## Design System

### Colors
| Token | Hex | Usage |
|-------|-----|-------|
| Gold | `#c9a96e` | Accents, CTAs, section labels |
| Gold Light | `#e8c98a` | Hover states |
| Bronze | `#8b6914` | Black Bronze series accent |
| Dark BG | `#0a0a0a` | Main background |
| Darker | `#050505` | Section alternation |

### Typography
- Font: **Inter** (Google Fonts)
- Hero: `text-5xl` → `text-8xl` bold, `tracking-tight`
- Labels: `text-xs tracking-widest uppercase`

### Key CSS Classes
```css
.section-full      /* 100vh full-screen section */
.section-title     /* Large cinematic heading */
.btn-primary       /* White filled button */
.btn-outline       /* Border-only button */
.btn-gold          /* Gold CTA button */
.reveal            /* IntersectionObserver animation trigger */
.gradient-gold     /* Gold gradient text */
```

## Page Sections (in order)
1. **Hero** — Full viewport, gradient background, company tagline
2. **Gold Series** — Bronz product line, cinematic layout
3. **Black Bronze** — Right-aligned layout with dark bronze tones
4. **Touch Screen** — Blue accent, WiFi/Zigbee tech section
5. **Categories Grid** — 6-card grid (all product categories)
6. **Smart Home** — Ecosystem section with WiFi+Zigbee callouts
7. **About** — Stats grid + company description
8. **Contact Us** — Phone, LINE, Facebook + shop CTA

## Company Content (from ssmartluxuryswitch.com)
- **Company:** บริษัท เอส.สมาร์ท ออโต้เมชั่น ซิสเท็มส์ จำกัด
- **Phone:** 09 8295 5259 / 09 2955 9455
- **LINE:** 0982955259
- **Facebook:** ssmartautomation
- **Instagram:** s.smart_automation

## Common Tasks

### Add a new section
1. Add blade block in `resources/views/home.blade.php`
2. Add anchor link in `resources/views/layouts/app.blade.php` navbar
3. Use `.reveal` class for scroll animation

### Change color theme
Edit CSS custom properties in `resources/css/app.css` under `@theme {}` and `@layer utilities`.

### Production build
```bash
npm run build
php artisan optimize
```
