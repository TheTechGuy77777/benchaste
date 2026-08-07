 <section id="about" style="padding: 120px 24px; background: var(--color-beige); overflow: hidden;">
     <div style="max-width: 1280px; margin: 0 auto;">

         <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center;">

             {{-- Left: Images --}}
             <div class="reveal" style="position: relative;">

                 {{-- Main image --}}
                 <div
                     style="
                    border-radius: 16px; overflow: hidden;
                    box-shadow: 0 24px 64px rgba(0,0,0,0.15);
                    aspect-ratio: 4/5; max-width: 480px;
                ">
                     <img src="{{ asset('images/about/about_main.jpg') }}" alt="Our Team at Work"
                         style="width: 100%; height: 100%; object-fit: cover;"
                         onerror="this.parentElement.style.background='linear-gradient(135deg, #1F3B2D 0%, #A3B18A 100%)'; this.style.display='none'">
                 </div>

                 {{-- Floating secondary image --}}
                 <div
                     style="
                    position: absolute; bottom: -32px; right: -32px;
                    width: 220px; height: 220px;
                    border-radius: 16px; overflow: hidden;
                    border: 6px solid var(--color-beige);
                    box-shadow: 0 16px 40px rgba(0,0,0,0.18);
                ">
                     <img src="{{ asset('images/about/about_secondary.jpg') }}" alt="Landscaping Detail"
                         style="width: 100%; height: 100%; object-fit: cover;"
                         onerror="this.parentElement.style.background='linear-gradient(135deg, #A3B18A, #6B7C4A)'; this.style.display='none'">
                 </div>

                 {{-- Experience badge --}}
                 <div
                     style="
                    position: absolute; top: 32px; right: -24px;
                    background: var(--color-forest);
                    color: white;
                    border-radius: 14px;
                    padding: 20px 24px;
                    text-align: center;
                    box-shadow: 0 12px 32px rgba(31,59,45,0.3);
                ">
                     <div
                         style="font-family: var(--font-heading); font-size: 2.2rem; font-weight: 900; color: var(--color-gold); line-height: 1;">
                         18+</div>
                     <div
                         style="font-family: var(--font-body); font-size: 0.75rem; color: rgba(255,255,255,0.7); text-transform: uppercase; letter-spacing: 0.08em; margin-top: 4px;">
                         Years of<br>Excellence</div>
                 </div>

                 {{-- Award badge --}}
                 <div
                     style="
                    position: absolute; bottom: 80px; left: -20px;
                    background: var(--color-gold);
                    color: white;
                    border-radius: 14px;
                    padding: 16px 20px;
                    display: flex; align-items: center; gap: 10px;
                    box-shadow: 0 12px 32px rgba(201,168,76,0.35);
                ">
                     <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                         <circle cx="12" cy="8" r="6" />
                         <path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11" />
                     </svg>
                     <div>
                         <div style="font-family: var(--font-heading); font-size: 0.85rem; font-weight: 700;">Award
                             Winning</div>
                         <div style="font-family: var(--font-body); font-size: 0.72rem; opacity: 0.85;">Best Landscaper
                             2024</div>
                     </div>
                 </div>

             </div>

             {{-- Right: Content --}}
             <div>
                 <div class="section-label reveal">About GreenScape</div>

                 <h2 class="section-heading reveal reveal-delay-1">
                     We Don't Just Design<br>Landscapes — We Craft<br>
                     <em style="color: var(--color-forest); font-style: italic;">Experiences</em>
                 </h2>

                 <p class="section-sub reveal reveal-delay-2" style="margin-bottom: 24px;">
                     Founded in 2008, BenChaste has grown from a small local team into one of the region's most trusted
                     names in premium outdoor design. We combine horticultural expertise with architectural precision to
                     deliver landscapes that are as functional as they are beautiful.
                 </p>

                 <p style="font-family: var(--font-body); font-size: 0.95rem; color: #777; line-height: 1.7; margin-bottom: 40px;"
                     class="reveal reveal-delay-2">
                     Every project we undertake is guided by a deep respect for nature, a passion for craftsmanship, and
                     an unwavering commitment to exceeding client expectations.
                 </p>

                 {{-- Values list --}}
                 <div class="reveal reveal-delay-3"
                     style="display: flex; flex-direction: column; gap: 16px; margin-bottom: 40px;">

                     <div style="display: flex; align-items: flex-start; gap: 14px;">
                         <div
                             style="width: 36px; height: 36px; min-width: 36px; background: rgba(31,59,45,0.08); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                             <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                 stroke="var(--color-forest)" stroke-width="2.5" stroke-linecap="round"
                                 stroke-linejoin="round">
                                 <polyline points="20,6 9,17 4,12" />
                             </svg>
                         </div>
                         <div>
                             <div
                                 style="font-family: var(--font-heading); font-size: 0.95rem; font-weight: 700; color: var(--color-charcoal); margin-bottom: 2px;">
                                 Bespoke Design Process</div>
                             <div style="font-family: var(--font-body); font-size: 0.875rem; color: #888;">Every
                                 landscape is custom-designed to reflect your personality and lifestyle.</div>
                         </div>
                     </div>

                     <div style="display: flex; align-items: flex-start; gap: 14px;">
                         <div
                             style="width: 36px; height: 36px; min-width: 36px; background: rgba(31,59,45,0.08); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                             <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                 stroke="var(--color-forest)" stroke-width="2.5" stroke-linecap="round"
                                 stroke-linejoin="round">
                                 <polyline points="20,6 9,17 4,12" />
                             </svg>
                         </div>
                         <div>
                             <div
                                 style="font-family: var(--font-heading); font-size: 0.95rem; font-weight: 700; color: var(--color-charcoal); margin-bottom: 2px;">
                                 Sustainable Practices</div>
                             <div style="font-family: var(--font-body); font-size: 0.875rem; color: #888;">Eco-friendly
                                 materials and water-wise solutions for a greener future.</div>
                         </div>
                     </div>

                     <div style="display: flex; align-items: flex-start; gap: 14px;">
                         <div
                             style="width: 36px; height: 36px; min-width: 36px; background: rgba(31,59,45,0.08); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                             <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                 stroke="var(--color-forest)" stroke-width="2.5" stroke-linecap="round"
                                 stroke-linejoin="round">
                                 <polyline points="20,6 9,17 4,12" />
                             </svg>
                         </div>
                         <div>
                             <div
                                 style="font-family: var(--font-heading); font-size: 0.95rem; font-weight: 700; color: var(--color-charcoal); margin-bottom: 2px;">
                                 End-to-End Service</div>
                             <div style="font-family: var(--font-body); font-size: 0.875rem; color: #888;">From concept
                                 and design to installation and ongoing maintenance.</div>
                         </div>
                     </div>

                 </div>

                 {{-- CTAs --}}
                 <div class="reveal reveal-delay-4"
                     style="display: flex; align-items: center; gap: 16px; flex-wrap: wrap;">
                     <a href="#contact" class="btn-primary">Start Your Project</a>
                     <a href="#portfolio"
                         style="display: inline-flex; align-items: center; gap: 6px; font-family: var(--font-heading); font-size: 0.9rem; font-weight: 600; color: var(--color-forest); text-decoration: none; transition: var(--transition);">
                         View Our Work
                         <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                             <line x1="5" y1="12" x2="19" y2="12" />
                             <polyline points="12,5 19,12 12,19" />
                         </svg>
                     </a>
                 </div>

             </div>
         </div>

         {{-- Stats Row --}}
         <div class="reveal"
             style="
            margin-top: 100px;
            background: var(--color-forest);
            border-radius: 20px;
            padding: 48px 40px;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 40px;
            text-align: center;
        ">
             <div>
                 <div
                     style="font-family: var(--font-heading); font-size: 2.8rem; font-weight: 900; color: var(--color-gold);">
                     <span data-counter="350" data-suffix="+">0+</span>
                 </div>
                 <div
                     style="font-family: var(--font-heading); font-size: 0.95rem; font-weight: 600; color: white; margin-top: 6px;">
                     Projects Completed</div>
                 <div
                     style="font-family: var(--font-body); font-size: 0.8rem; color: rgba(255,255,255,0.5); margin-top: 4px;">
                     Across residential & commercial</div>
             </div>
             <div>
                 <div
                     style="font-family: var(--font-heading); font-size: 2.8rem; font-weight: 900; color: var(--color-gold);">
                     <span data-counter="98" data-suffix="%">0%</span>
                 </div>
                 <div
                     style="font-family: var(--font-heading); font-size: 0.95rem; font-weight: 600; color: white; margin-top: 6px;">
                     Client Satisfaction</div>
                 <div
                     style="font-family: var(--font-body); font-size: 0.8rem; color: rgba(255,255,255,0.5); margin-top: 4px;">
                     Based on post-project reviews</div>
             </div>
             <div>
                 <div
                     style="font-family: var(--font-heading); font-size: 2.8rem; font-weight: 900; color: var(--color-gold);">
                     <span data-counter="50" data-suffix="+">0+</span>
                 </div>
                 <div
                     style="font-family: var(--font-heading); font-size: 0.95rem; font-weight: 600; color: white; margin-top: 6px;">
                     Expert Team Members</div>
                 <div
                     style="font-family: var(--font-body); font-size: 0.8rem; color: rgba(255,255,255,0.5); margin-top: 4px;">
                     Certified landscape professionals</div>
             </div>
             <div>
                 <div
                     style="font-family: var(--font-heading); font-size: 2.8rem; font-weight: 900; color: var(--color-gold);">
                     <span data-counter="12" data-suffix=" Yrs">0 Yrs</span>
                 </div>
                 <div
                     style="font-family: var(--font-heading); font-size: 0.95rem; font-weight: 600; color: white; margin-top: 6px;">
                     Industry Experience</div>
                 <div
                     style="font-family: var(--font-body); font-size: 0.8rem; color: rgba(255,255,255,0.5); margin-top: 4px;">
                     Trusted since 2008</div>
             </div>
         </div>

     </div>
 </section>
