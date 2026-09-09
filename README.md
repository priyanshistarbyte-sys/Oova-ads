# OOVA Ads

A multisource performance-advertising landing site built in PHP, with a section-by-section
layout modelled on [propellerads.com](https://propellerads.com/) and themed with the OOVA
brand colors sampled from `img/oova.png`:

- **Green** `#2E6E5E`
- **Dark** `#1B1B1B`

## Run locally

```bash
php -S 127.0.0.1:8000
```

Then open http://127.0.0.1:8000

## Structure

| File / folder | Purpose |
|---|---|
| `index.php` | Assembles the page, including each section in order |
| `includes/header.php` | Sticky nav bar (logo, dropdown menu, Log in / Start now) |
| `includes/footer.php` | Footer columns + social + legal |
| `sections/1-hero.php` … `11-cta.php` | One file per page section |
| `css/style.css` | All styles + theme variables (top of file) |
| `js/main.js` | Mobile nav, ad-format tabs, scroll reveal |

### Sections (mirrors PropellerAds order)
1. Hero + OVA AI launch card
2. Partner logo marquee
3. Reach 2B users
4. Industry verticals
5. Global partnerships (dark band)
6. OVA AI 3-step launch
7. 6 ad formats (interactive tabs)
8. Testimonials
9. Insights / blog
10. Why we're the leading platform
11. Final call-to-action

## Customizing

- **Colors:** edit the `:root` variables at the top of `css/style.css`.
- **Text / cards:** each section's content lives in a `$…` array at the top of its
  `sections/*.php` file — edit those arrays, no HTML changes needed.
- **Menu / footer links:** `$nav` in `includes/header.php`, `$footCols` in `includes/footer.php`.
