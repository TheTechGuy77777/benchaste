<section id="hero"
    style="position: relative; height: 100vh; min-height: 650px; display: flex; align-items: center; justify-content: center; overflow: hidden;">

    {{-- Video Background --}}
    <video autoplay muted loop playsinline
        style="position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0;">
        <source src="{{ asset('videos/hero/hero_bg.mp4') }}" type="video/mp4">
    </video>

    {{-- Dark Overlay --}}
    <div
        style="position: absolute; inset: 0; z-index: 1;
        background: linear-gradient(
            135deg,
            rgba(15, 30, 20, 0.82) 0%,
            rgba(31, 59, 45, 0.70) 50%,
            rgba(15, 30, 20, 0.75) 100%
        );
    ">
    </div>

    {{-- Gold line top --}}
    <div
        style="position: absolute; top: 0; left: 0; right: 0; height: 3px; z-index: 3;
        background: linear-gradient(90deg, transparent, var(--color-gold), transparent);
    ">
    </div>

    {{-- Content --}}
    <div style="position: relative; z-index: 2; text-align: center; padding: 0 24px; max-width: 900px; margin: 0 auto;">

        {{-- Badge --}}
        <div style="
            display: inline-flex; align-items: center; gap: 8px;
            background: rgba(201,168,76,0.15);
            border: 1px solid rgba(201,168,76,0.4);
            border-radius: 100px;
            padding: 6px 18px;
            margin-bottom: 28px;
            backdrop-filter: blur(8px);
        "
            class="reveal">
            <span
                style="width: 6px; height: 6px; border-radius: 50%; background: var(--color-gold); display: inline-block;"></span>
            <span
                style="font-family: var(--font-heading); font-size: 0.75rem; font-weight: 600; letter-spacing: 0.12em; text-transform: uppercase; color: var(--color-gold);">
                Premium Landscaping & Outdoor Living
            </span>
        </div>

        {{-- Main Headline --}}
        <h1 class="reveal reveal-delay-1"
            style="
            font-family: var(--font-heading);
            font-size: clamp(2.6rem, 6.5vw, 5.2rem);
            font-weight: 900;
            color: var(--color-white);
            line-height: 1.08;
            letter-spacing: -0.03em;
            margin-bottom: 24px;
        ">
            Transforming Outdoor<br>
            Spaces Into <em style="color: var(--color-gold); font-style: italic;">Living</em><br>
            Masterpieces
        </h1>

        {{-- Subheadline --}}
        <p class="reveal reveal-delay-2"
            style="
            font-family: var(--font-body);
            font-size: clamp(1rem, 2vw, 1.2rem);
            color: rgba(255,255,255,0.75);
            line-height: 1.7;
            max-width: 580px;
            margin: 0 auto 40px;
        ">
            We design, build, and maintain extraordinary outdoor environments —
            from lush garden retreats to luxury hardscaped living spaces.
        </p>

        {{-- CTA Buttons --}}
        <div class="reveal reveal-delay-3"
            style="display: flex; align-items: center; justify-content: center; gap: 16px; flex-wrap: wrap;">
            <a href="#contact" class="btn-gold" style="padding: 16px 36px; font-size: 1rem;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                    <polyline points="14,2 14,8 20,8" />
                </svg>
                Get Free Quote
            </a>
            <a href="#portfolio" class="btn-outline" style="padding: 16px 36px; font-size: 1rem;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polygon points="5,3 19,12 5,21" />
                </svg>
                View Projects
            </a>
        </div>

        {{-- Scroll indicator --}}
        <div class="reveal reveal-delay-4"
            style="margin-top: 64px; display: flex; flex-direction: column; align-items: center; gap: 8px;">
            <span
                style="font-family: var(--font-heading); font-size: 0.7rem; letter-spacing: 0.15em; text-transform: uppercase; color: rgba(255,255,255,0.4);">Scroll
                to explore</span>
            <div
                style="width: 1px; height: 48px; background: linear-gradient(to bottom, rgba(255,255,255,0.4), transparent); animation: scrollPulse 2s ease-in-out infinite;">
            </div>
        </div>

    </div>

    {{-- Stats bar at bottom --}}
    <div
        style="
        position: absolute; bottom: 0; left: 0; right: 0; z-index: 3;
        background: rgba(15, 30, 20, 0.85);
        backdrop-filter: blur(12px);
        border-top: 1px solid rgba(255,255,255,0.08);
        padding: 24px 40px;
    ">
        <div
            style="max-width: 900px; margin: 0 auto; display: flex; align-items: center; justify-content: space-around; flex-wrap: wrap; gap: 20px;">

            <div style="text-align: center;">
                <div
                    style="font-family: var(--font-heading); font-size: 2rem; font-weight: 800; color: var(--color-gold);">
                    <span data-counter="350" data-suffix="+">0+</span>
                </div>
                <div
                    style="font-family: var(--font-body); font-size: 0.8rem; color: rgba(255,255,255,0.55); letter-spacing: 0.05em; text-transform: uppercase; margin-top: 4px;">
                    Projects Completed</div>
            </div>

            <div style="width: 1px; height: 40px; background: rgba(255,255,255,0.12);"></div>

            <div style="text-align: center;">
                <div
                    style="font-family: var(--font-heading); font-size: 2rem; font-weight: 800; color: var(--color-gold);">
                    <span data-counter="18" data-suffix=" Yrs">0 Yrs</span>
                </div>
                <div
                    style="font-family: var(--font-body); font-size: 0.8rem; color: rgba(255,255,255,0.55); letter-spacing: 0.05em; text-transform: uppercase; margin-top: 4px;">
                    Experience</div>
            </div>

            <div style="width: 1px; height: 40px; background: rgba(255,255,255,0.12);"></div>

            <div style="text-align: center;">
                <div
                    style="font-family: var(--font-heading); font-size: 2rem; font-weight: 800; color: var(--color-gold);">
                    <span data-counter="98" data-suffix="%">0%</span>
                </div>
                <div
                    style="font-family: var(--font-body); font-size: 0.8rem; color: rgba(255,255,255,0.55); letter-spacing: 0.05em; text-transform: uppercase; margin-top: 4px;">
                    Client Satisfaction</div>
            </div>

            <div style="width: 1px; height: 40px; background: rgba(255,255,255,0.12);"></div>

            <div style="text-align: center;">
                <div
                    style="font-family: var(--font-heading); font-size: 2rem; font-weight: 800; color: var(--color-gold);">
                    <span data-counter="50" data-suffix="+">0+</span>
                </div>
                <div
                    style="font-family: var(--font-body); font-size: 0.8rem; color: rgba(255,255,255,0.55); letter-spacing: 0.05em; text-transform: uppercase; margin-top: 4px;">
                    Expert Team</div>
            </div>

        </div>
    </div>

</section>
