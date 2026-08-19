# Benchaste Construction

**Benchaste Construction** is a premium landscaping company website built from scratch with Laravel. It showcases the company's portfolio, services, and blog content with a nature-inspired design system, and gives visitors a simple, low-friction way to reach out via WhatsApp.

🔗 **Live site:** [benchasteconstruction.com](https://benchasteconstruction.com)

---

## Features

- **Portfolio gallery** with category filtering to browse past landscaping projects
- **Blog system** with slug-based routing for SEO-friendly article URLs
- **Shop section** for browsing landscaping-related products/services
- **WhatsApp-based contact and ordering flow** — visitors can reach out or place inquiries directly via WhatsApp instead of a traditional contact form
- **Automatic sitemap generation** via Spatie's Laravel Sitemap package, for SEO
- **Filament-powered admin panel** for managing blog posts, portfolio items, and shop content
- **Nature-inspired design system** built with Tailwind CSS, reflecting the brand's landscaping identity
- Fully **responsive, mobile-optimized** layout

---

## Tech Stack

| Layer | Technology |
|---|---|
| Backend | Laravel |
| Admin Panel | Filament |
| Frontend | Blade, Tailwind CSS |
| Sitemap | Spatie Laravel Sitemap |
| Database | MySQL |
| Asset Bundling | Vite |
| Hosting | Hostinger (shared hosting) |

---

## Local Development Setup

```bash
# Clone the repository
git clone <repository-url>
cd benchaste-construction

# Install PHP dependencies
composer install

# Install JS dependencies and build assets
npm install
npm run build

# Copy environment file and configure
cp .env.example .env
php artisan key:generate

# Configure your database in .env, then run:
php artisan migrate --seed

# Create the storage symlink
php artisan storage:link

# Serve the app
php artisan serve
```

---

## Deployment

Benchaste Construction is deployed on Hostinger shared hosting via SSH, with the Laravel application living inside `public_html/laravel` and served from within that path. Deploys are done via SSH: pulling the latest code with `git pull`, then clearing and rebuilding caches with `php artisan optimize:clear`.

```bash
ssh benchaste
cd ~/domains/benchasteconstruction.com/public_html/laravel
git pull
php artisan optimize:clear
```

### Notable fixes during deployment

- Resolved several **Vite and Tailwind CSS v4** build issues that surfaced specifically in the Hostinger production environment but not locally
- Fixed **mobile responsiveness** issues found only after deploying to production, refined across breakpoints for the portfolio gallery and blog layout

---

## Author

**Chibuzo Ogbogu** (Ikenga)
Full-stack Laravel developer
- GitHub: [@TheTechGuy77777](https://github.com/TheTechGuy77777)
- LinkedIn: [chibuzo-ogbogu](https://linkedin.com/in/chibuzo-ogbogu)

---

## License

This project is proprietary software. All rights reserved.
