<header id="site-header"
    style="
    position: fixed; top: 0; left: 0; right: 0; z-index: 1000;
    padding: 20px 0;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    background: transparent;
">
    <style>
        #site-header.scrolled {
            background: var(--color-forest) !important;
            padding: 12px 0 !important;
            box-shadow: 0 4px 32px rgba(0, 0, 0, 0.2);
        }

        #site-header.scrolled .nav-link {
            color: rgba(255, 255, 255, 0.85) !important;
        }

        #site-header.scrolled .nav-link:hover {
            color: var(--color-sage) !important;
        }

        #site-header.scrolled .logo-text {
            color: white !important;
        }

        .nav-link {
            font-family: var(--font-heading);
            font-size: 0.875rem;
            font-weight: 500;
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            letter-spacing: 0.03em;
            transition: var(--transition);
            padding: 4px 0;
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--color-gold);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .nav-link:hover {
            color: var(--color-sage);
        }

        .hamburger {
            display: none;
            flex-direction: column;
            gap: 5px;
            cursor: pointer;
            padding: 4px;
            background: none;
            border: none;
        }

        .hamburger span {
            display: block;
            width: 24px;
            height: 2px;
            background: white;
            transition: var(--transition);
            border-radius: 2px;
        }

        .hamburger.open span:nth-child(1) {
            transform: translateY(7px) rotate(45deg);
        }

        .hamburger.open span:nth-child(2) {
            opacity: 0;
        }

        .hamburger.open span:nth-child(3) {
            transform: translateY(-7px) rotate(-45deg);
        }

        @media (max-width: 768px) {
            .desktop-nav {
                display: none !important;
            }

            .hamburger {
                display: flex !important;
            }

            .desktop-cta {
                display: none !important;
            }
        }
    </style>

    <div
        style="max-width: 1280px; margin: 0 auto; padding: 0 24px; display: flex; align-items: center; justify-content: space-between;">

        {{-- Logo --}}
        <a href="/" style="text-decoration: none; display: flex; align-items: center; gap: 10px;">
            <div
                style="width: 38px; height: 38px; background: var(--color-gold); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22c4.97-2.5 8-6.5 8-10a8 8 0 0 0-16 0c0 3.5 3.03 7.5 8 10z" />
                    <path d="M12 12c0-2 1-4 3-5" />
                    <path d="M12 12c0-2-1-4-3-5" />
                </svg>
            </div>
            <span class="logo-text"
                style="font-family: var(--font-heading); font-weight: 800; font-size: 1.2rem; color: white; letter-spacing: -0.02em;">
                Ben<span style="color: var(--color-gold);">Chaste</span>
            </span>
        </a>

        {{-- Desktop Nav --}}
        <nav class="desktop-nav" style="display: flex; align-items: center; gap: 36px;">
            <a href="{{ route('home') }}#services" class="nav-link">Services</a>
            <a href="{{ route('home') }}#about" class="nav-link">About</a>
            <a href="{{ route('home') }}#portfolio" class="nav-link">Portfolio</a>
            <a href="{{ route('home') }}#testimonials" class="nav-link">Reviews</a>
            <a href="{{ route('blog.index') }}" class="nav-link">Blog</a>
            <a href="{{ route('home') }}#contact" class="nav-link">Contact Us</a>
        </nav>

        {{-- CTA + Hamburger --}}
        <div style="display: flex; align-items: center; gap: 16px;">
            <a href="#contact" class="btn-gold desktop-cta" style="padding: 10px 22px; font-size: 0.85rem;">
                Book Consultation
            </a>
            <button id="menu-toggle" class="hamburger" aria-label="Toggle menu">
                <span></span><span></span><span></span>
            </button>
        </div>

    </div>

    {{-- Mobile Menu --}}
    <div id="mobile-menu" class="hidden"
        style="
    background: var(--color-forest);
    padding: 20px 24px 28px;
    display: none;
    flex-direction: column;
    gap: 4px;
    border-top: 1px solid rgba(255,255,255,0.1);
    margin-top: 12px;
">
        <a href="{{ route('home') }}#services" class="nav-link"
            style="padding: 12px 0; border-bottom: 1px solid rgba(255,255,255,0.08);">Services</a>
        <a href="{{ route('home') }}#about" class="nav-link"
            style="padding: 12px 0; border-bottom: 1px solid rgba(255,255,255,0.08);">About</a>
        <a href="{{ route('home') }}#portfolio" class="nav-link"
            style="padding: 12px 0; border-bottom: 1px solid rgba(255,255,255,0.08);">Portfolio</a>
        <a href="{{ route('home') }}#testimonials" class="nav-link"
            style="padding: 12px 0; border-bottom: 1px solid rgba(255,255,255,0.08);">Reviews</a>
        <a href="{{ route('blog.index') }}" class="nav-link">Blog</a>
        <a href="{{ route('home') }}#contact" class="nav-link" style="padding: 12px 0;">Contact Us</a>

        <a href="{{ route('home') }}#contact" class="btn-gold"
            style="margin-top: 16px; text-align: center; justify-content: center;">
            Book Consultation
        </a>
    </div>
</header>
