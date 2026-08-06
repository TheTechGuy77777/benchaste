 <section id="before-after" style="padding: 120px 24px; background: var(--color-charcoal); overflow: hidden;">
     <div style="max-width: 1280px; margin: 0 auto;">

         {{-- Section Header --}}
         <div style="text-align: center; margin-bottom: 72px;">
             <div class="section-label reveal" style="justify-content: center; color: var(--color-gold);">
                 Transformations
             </div>
             <h2 class="section-heading reveal reveal-delay-1 light" style="text-align: center;">
                 See The Difference<br>We Make
             </h2>
             <p class="section-sub reveal reveal-delay-2 light" style="text-align: center; margin: 0 auto;">
                 Real projects, real results. Drag the slider to reveal the transformation.
             </p>
         </div>

         {{-- Before/After Cards --}}
         <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 28px;">

             {{-- Before/After Card 1 --}}
             <div class="reveal"
                 style="border-radius: 16px; overflow: hidden; position: relative; aspect-ratio: 4/3; cursor: col-resize;"
                 id="ba-card-1">
                 {{-- Before Image --}}
                 <div style="position: absolute; inset: 0; z-index: 1;">
                     <img src="{{ asset('images/before-after/before-1.jpg') }}" alt="Before"
                         style="width: 100%; height: 100%; object-fit: cover;"
                         onerror="this.parentElement.style.background='linear-gradient(135deg, #4a4a4a, #888)'; this.style.display='none'">
                     <div
                         style="position: absolute; top: 16px; left: 16px; background: rgba(0,0,0,0.6); color: white; font-family: var(--font-heading); font-size: 0.75rem; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; padding: 6px 14px; border-radius: 100px;">
                         Before</div>
                 </div>
                 {{-- After Image --}}
                 <div class="after-layer"
                     style="position: absolute; top: 0; left: 0; bottom: 0; z-index: 2; width: 50%; overflow: hidden;">
                     <img src="{{ asset('images/before-after/after-1.jpg') }}" alt="After"
                         style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0;"
                         onerror="this.parentElement.style.background='linear-gradient(135deg, #1F3B2D, #A3B18A)'; this.style.display='none'">
                     <div
                         style="position: absolute; top: 16px; left: 16px; background: var(--color-gold); color: white; font-family: var(--font-heading); font-size: 0.75rem; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; padding: 6px 14px; border-radius: 100px;">
                         After</div>
                 </div>
                 {{-- Divider --}}
                 <div class="ba-divider"
                     style="position: absolute; top: 0; bottom: 0; left: 50%; width: 3px; background: white; z-index: 3; transform: translateX(-50%);">
                     <div
                         style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 40px; height: 40px; background: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 12px rgba(0,0,0,0.3);">
                         <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#333"
                             stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                             <polyline points="15,18 9,12 15,6" />
                             <polyline points="9,18 3,12 9,6" />
                             <line x1="21" y1="12" x2="15" y2="12" />
                         </svg>
                     </div>
                 </div>
                 {{-- Project info --}}
                 <div
                     style="position: absolute; bottom: 0; left: 0; right: 0; z-index: 4; padding: 20px; background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);">
                     <div style="font-family: var(--font-heading); font-size: 1rem; font-weight: 700; color: white;">
                         Garden Transformation</div>
                     <div style="font-family: var(--font-body); font-size: 0.8rem; color: rgba(255,255,255,0.7);">
                         Residential • 3 weeks</div>
                 </div>
             </div>

             {{-- Before/After Card 2 --}}
             <div class="reveal reveal-delay-1"
                 style="border-radius: 16px; overflow: hidden; position: relative; aspect-ratio: 4/3; cursor: col-resize;"
                 id="ba-card-2">
                 <div style="position: absolute; inset: 0; z-index: 1;">
                     <img src="{{ asset('images/before-after/before-2.jpg') }}" alt="Before"
                         style="width: 100%; height: 100%; object-fit: cover;"
                         onerror="this.parentElement.style.background='linear-gradient(135deg, #555, #999)'; this.style.display='none'">
                     <div
                         style="position: absolute; top: 16px; left: 16px; background: rgba(0,0,0,0.6); color: white; font-family: var(--font-heading); font-size: 0.75rem; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; padding: 6px 14px; border-radius: 100px;">
                         Before</div>
                 </div>
                 <div class="after-layer"
                     style="position: absolute; top: 0; left: 0; bottom: 0; z-index: 2; width: 50%; overflow: hidden;">
                     <img src="{{ asset('images/before-after/after-2.jpg') }}" alt="After"
                         style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0;"
                         onerror="this.parentElement.style.background='linear-gradient(135deg, #2d5a3d, #6B7C4A)'; this.style.display='none'">
                     <div
                         style="position: absolute; top: 16px; left: 16px; background: var(--color-gold); color: white; font-family: var(--font-heading); font-size: 0.75rem; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; padding: 6px 14px; border-radius: 100px;">
                         After</div>
                 </div>
                 <div class="ba-divider"
                     style="position: absolute; top: 0; bottom: 0; left: 50%; width: 3px; background: white; z-index: 3; transform: translateX(-50%);">
                     <div
                         style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 40px; height: 40px; background: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 12px rgba(0,0,0,0.3);">
                         <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#333"
                             stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                             <polyline points="15,18 9,12 15,6" />
                             <polyline points="9,18 3,12 9,6" />
                             <line x1="21" y1="12" x2="15" y2="12" />
                         </svg>
                     </div>
                 </div>
                 <div
                     style="position: absolute; bottom: 0; left: 0; right: 0; z-index: 4; padding: 20px; background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);">
                     <div style="font-family: var(--font-heading); font-size: 1rem; font-weight: 700; color: white;">
                         Lawn Renovation</div>
                     <div style="font-family: var(--font-body); font-size: 0.8rem; color: rgba(255,255,255,0.7);">
                         Residential • 2 weeks</div>
                 </div>
             </div>

             {{-- Before/After Card 3 --}}
             <div class="reveal reveal-delay-2"
                 style="border-radius: 16px; overflow: hidden; position: relative; aspect-ratio: 4/3; cursor: col-resize;"
                 id="ba-card-3">
                 <div style="position: absolute; inset: 0; z-index: 1;">
                     <img src="{{ asset('images/before-after/before-3.jpg') }}" alt="Before"
                         style="width: 100%; height: 100%; object-fit: cover;"
                         onerror="this.parentElement.style.background='linear-gradient(135deg, #3a3a3a, #777)'; this.style.display='none'">
                     <div
                         style="position: absolute; top: 16px; left: 16px; background: rgba(0,0,0,0.6); color: white; font-family: var(--font-heading); font-size: 0.75rem; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; padding: 6px 14px; border-radius: 100px;">
                         Before</div>
                 </div>
                 <div class="after-layer"
                     style="position: absolute; top: 0; left: 0; bottom: 0; z-index: 2; width: 50%; overflow: hidden;">
                     <img src="{{ asset('images/before-after/after-3.jpg') }}" alt="After"
                         style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0;"
                         onerror="this.parentElement.style.background='linear-gradient(135deg, #1F3B2D, #A3B18A)'; this.style.display='none'">
                     <div
                         style="position: absolute; top: 16px; left: 16px; background: var(--color-gold); color: white; font-family: var(--font-heading); font-size: 0.75rem; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; padding: 6px 14px; border-radius: 100px;">
                         After</div>
                 </div>
                 <div class="ba-divider"
                     style="position: absolute; top: 0; bottom: 0; left: 50%; width: 3px; background: white; z-index: 3; transform: translateX(-50%);">
                     <div
                         style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 40px; height: 40px; background: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 12px rgba(0,0,0,0.3);">
                         <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#333"
                             stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                             <polyline points="15,18 9,12 15,6" />
                             <polyline points="9,18 3,12 9,6" />
                             <line x1="21" y1="12" x2="15" y2="12" />
                         </svg>
                     </div>
                 </div>
                 <div
                     style="position: absolute; bottom: 0; left: 0; right: 0; z-index: 4; padding: 20px; background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);">
                     <div style="font-family: var(--font-heading); font-size: 1rem; font-weight: 700; color: white;">
                         Hardscape Installation</div>
                     <div style="font-family: var(--font-body); font-size: 0.8rem; color: rgba(255,255,255,0.7);">
                         Commercial • 4 weeks</div>
                 </div>
             </div>

         </div>
     </div>
 </section>

 {{-- ============ PORTFOLIO GALLERY ============ --}}
 <section id="portfolio" style="padding: 120px 24px; background: var(--color-beige);">
     <div style="max-width: 1280px; margin: 0 auto;">

         {{-- Section Header --}}
         <div
             style="display: flex; align-items: flex-end; justify-content: space-between; flex-wrap: wrap; gap: 24px; margin-bottom: 56px;">
             <div>
                 <div class="section-label reveal">Our Portfolio</div>
                 <h2 class="section-heading reveal reveal-delay-1" style="margin-bottom: 0;">
                     Projects That<br>Speak For Themselves
                 </h2>
             </div>
             <a href="#portfolio" class="btn-primary reveal reveal-delay-2">View All Projects</a>
         </div>

         {{-- Filter Tabs --}}
         <div class="reveal" style="display: flex; gap: 10px; flex-wrap: wrap; margin-bottom: 40px;">
             <button class="filter-btn active" data-filter="all" onclick="filterPortfolio('all', this)">All
                 Projects</button>
             <button class="filter-btn" data-filter="garden" onclick="filterPortfolio('garden', this)">Garden
                 Design</button>
             <button class="filter-btn" data-filter="lawn" onclick="filterPortfolio('lawn', this)">Lawn Care</button>
             <button class="filter-btn" data-filter="hardscape"
                 onclick="filterPortfolio('hardscape', this)">Hardscaping</button>
             <button class="filter-btn" data-filter="pitch" onclick="filterPortfolio('pitch', this)">Football
                 Pitch</button>
             <button class="filter-btn" data-filter="sitout"
                 onclick="filterPortfolio('sitout', this)">Sitout</button>
         </div>

         {{-- Portfolio Grid --}}
         <div id="portfolio-grid"
             style="display: grid; grid-template-columns: repeat(3, 1fr); grid-template-rows: auto; gap: 20px;">

             <div class="portfolio-item reveal" data-category="garden"
                 style="border-radius: 12px; overflow: hidden; position: relative; aspect-ratio: 4/3; cursor: pointer; grid-column: 1; grid-row: 1;">
                 <img src="{{ asset('images/portfolio/project-1.jpg') }}" alt="Garden Design"
                     style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;"
                     class="portfolio-img"
                     onerror="this.parentElement.style.background='linear-gradient(135deg, #1F3B2D, #A3B18A)'; this.style.display='none'">
                 <div class="portfolio-overlay"
                     style="position: absolute; inset: 0; background: rgba(31,59,45,0.85); opacity: 0; transition: opacity 0.3s ease; display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 24px; text-align: center;">
                     <div
                         style="font-family: var(--font-heading); font-size: 1.1rem; font-weight: 700; color: white; margin-bottom: 8px;">
                         Modern Garden Oasis</div>
                     <div
                         style="font-family: var(--font-body); font-size: 0.85rem; color: rgba(255,255,255,0.75); margin-bottom: 16px;">
                         Garden Design • Residential</div>
                     <div
                         style="width: 36px; height: 36px; border: 2px solid var(--color-gold); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                         <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                             stroke="var(--color-gold)" stroke-width="2.5">
                             <line x1="12" y1="5" x2="12" y2="19" />
                             <line x1="5" y1="12" x2="19" y2="12" />
                         </svg>
                     </div>
                 </div>
             </div>

             <div class="portfolio-item reveal reveal-delay-1" data-category="hardscape"
                 style="border-radius: 12px; overflow: hidden; position: relative; cursor: pointer; grid-column: 2; grid-row: 1 / span 2;">
                 <img src="{{ asset('images/portfolio/project-2.jpg') }}" alt="Hardscaping"
                     style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;"
                     class="portfolio-img"
                     onerror="this.parentElement.style.background='linear-gradient(135deg, #4a4a4a, #A3B18A)'; this.style.display='none'">
                 <div class="portfolio-overlay"
                     style="position: absolute; inset: 0; background: rgba(31,59,45,0.85); opacity: 0; transition: opacity 0.3s ease; display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 24px; text-align: center;">
                     <div
                         style="font-family: var(--font-heading); font-size: 1.1rem; font-weight: 700; color: white; margin-bottom: 8px;">
                         Stone Patio & Walkway</div>
                     <div
                         style="font-family: var(--font-body); font-size: 0.85rem; color: rgba(255,255,255,0.75); margin-bottom: 16px;">
                         Hardscaping • Commercial</div>
                     <div
                         style="width: 36px; height: 36px; border: 2px solid var(--color-gold); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                         <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                             stroke="var(--color-gold)" stroke-width="2.5">
                             <line x1="12" y1="5" x2="12" y2="19" />
                             <line x1="5" y1="12" x2="19" y2="12" />
                         </svg>
                     </div>
                 </div>
             </div>

             <div class="portfolio-item reveal reveal-delay-2" data-category="lawn"
                 style="border-radius: 12px; overflow: hidden; position: relative; aspect-ratio: 4/3; cursor: pointer; grid-column: 3; grid-row: 1;">
                 <img src="{{ asset('images/portfolio/project-3.jpg') }}" alt="Lawn Care"
                     style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;"
                     class="portfolio-img"
                     onerror="this.parentElement.style.background='linear-gradient(135deg, #2d5a3d, #6B7C4A)'; this.style.display='none'">
                 <div class="portfolio-overlay"
                     style="position: absolute; inset: 0; background: rgba(31,59,45,0.85); opacity: 0; transition: opacity 0.3s ease; display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 24px; text-align: center;">
                     <div
                         style="font-family: var(--font-heading); font-size: 1.1rem; font-weight: 700; color: white; margin-bottom: 8px;">
                         Premium Lawn Renovation</div>
                     <div
                         style="font-family: var(--font-body); font-size: 0.85rem; color: rgba(255,255,255,0.75); margin-bottom: 16px;">
                         Lawn Care • Residential</div>
                     <div
                         style="width: 36px; height: 36px; border: 2px solid var(--color-gold); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                         <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                             stroke="var(--color-gold)" stroke-width="2.5">
                             <line x1="12" y1="5" x2="12" y2="19" />
                             <line x1="5" y1="12" x2="19" y2="12" />
                         </svg>
                     </div>
                 </div>
             </div>

             <div class="portfolio-item reveal" data-category="pitch"
                 style="border-radius: 12px; overflow: hidden; position: relative; aspect-ratio: 4/3; cursor: pointer; grid-column: 1; grid-row: 2;">
                 <img src="{{ asset('images/portfolio/project-4.jpg') }}" alt="Football Pitch"
                     style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;"
                     class="portfolio-img"
                     onerror="this.parentElement.style.background='linear-gradient(135deg, #1a3a1a, #4a7a4a)'; this.style.display='none'">
                 <div class="portfolio-overlay"
                     style="position: absolute; inset: 0; background: rgba(31,59,45,0.85); opacity: 0; transition: opacity 0.3s ease; display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 24px; text-align: center;">
                     <div
                         style="font-family: var(--font-heading); font-size: 1.1rem; font-weight: 700; color: white; margin-bottom: 8px;">
                         5-A-Side Football Pitch</div>
                     <div
                         style="font-family: var(--font-body); font-size: 0.85rem; color: rgba(255,255,255,0.75); margin-bottom: 16px;">
                         Football Pitch • Commercial</div>
                     <div
                         style="width: 36px; height: 36px; border: 2px solid var(--color-gold); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                         <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                             stroke="var(--color-gold)" stroke-width="2.5">
                             <line x1="12" y1="5" x2="12" y2="19" />
                             <line x1="5" y1="12" x2="19" y2="12" />
                         </svg>
                     </div>
                 </div>
             </div>

             <div class="portfolio-item reveal reveal-delay-1" data-category="sitout"
                 style="border-radius: 12px; overflow: hidden; position: relative; aspect-ratio: 4/3; cursor: pointer; grid-column: 3; grid-row: 2;">
                 <img src="{{ asset('images/portfolio/project-5.jpg') }}" alt="Sitout Design"
                     style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;"
                     class="portfolio-img"
                     onerror="this.parentElement.style.background='linear-gradient(135deg, #3a2a1a, #8a6a4a)'; this.style.display='none'">
                 <div class="portfolio-overlay"
                     style="position: absolute; inset: 0; background: rgba(31,59,45,0.85); opacity: 0; transition: opacity 0.3s ease; display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 24px; text-align: center;">
                     <div
                         style="font-family: var(--font-heading); font-size: 1.1rem; font-weight: 700; color: white; margin-bottom: 8px;">
                         Luxury Sitout Pergola</div>
                     <div
                         style="font-family: var(--font-body); font-size: 0.85rem; color: rgba(255,255,255,0.75); margin-bottom: 16px;">
                         Sitout Design • Residential</div>
                     <div
                         style="width: 36px; height: 36px; border: 2px solid var(--color-gold); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                         <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                             stroke="var(--color-gold)" stroke-width="2.5">
                             <line x1="12" y1="5" x2="12" y2="19" />
                             <line x1="5" y1="12" x2="19" y2="12" />
                         </svg>
                     </div>
                 </div>
             </div>

             <div class="portfolio-item reveal reveal-delay-2" data-category="garden"
                 style="border-radius: 12px; overflow: hidden; position: relative; aspect-ratio: 21/9; cursor: pointer; grid-column: 1 / span 3; grid-row: 3;">
                 <img src="{{ asset('images/portfolio/project-6.jpg') }}" alt="Garden"
                     style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;"
                     class="portfolio-img"
                     onerror="this.parentElement.style.background='linear-gradient(135deg, #1F3B2D, #6B7C4A)'; this.style.display='none'">
                 <div class="portfolio-overlay"
                     style="position: absolute; inset: 0; background: rgba(31,59,45,0.85); opacity: 0; transition: opacity 0.3s ease; display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 24px; text-align: center;">
                     <div
                         style="font-family: var(--font-heading); font-size: 1.3rem; font-weight: 700; color: white; margin-bottom: 8px;">
                         Tropical Garden Retreat</div>
                     <div
                         style="font-family: var(--font-body); font-size: 0.85rem; color: rgba(255,255,255,0.75); margin-bottom: 16px;">
                         Garden Design • Residential</div>
                     <div
                         style="width: 36px; height: 36px; border: 2px solid var(--color-gold); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                         <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                             stroke="var(--color-gold)" stroke-width="2.5">
                             <line x1="12" y1="5" x2="12" y2="19" />
                             <line x1="5" y1="12" x2="19" y2="12" />
                         </svg>
                     </div>
                 </div>
             </div>

             {{-- <div class="portfolio-item reveal" data-category="garden"
                 style="border-radius: 12px; overflow: hidden; position: relative; aspect-ratio: 4/3; cursor: pointer; grid-column: auto; grid-row: auto;">
                 <img src="{{ asset('images/portfolio/project-7.jpg') }}" alt="Football Pitch"
                     style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;"
                     class="portfolio-img"
                     onerror="this.parentElement.style.background='linear-gradient(135deg, #1a3a1a, #4a7a4a)'; this.style.display='none'">
                 <div class="portfolio-overlay"
                     style="position: absolute; inset: 0; background: rgba(31,59,45,0.85); opacity: 0; transition: opacity 0.3s ease; display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 24px; text-align: center;">
                     <div
                         style="font-family: var(--font-heading); font-size: 1.1rem; font-weight: 700; color: white; margin-bottom: 8px;">
                         Modern Garden Oasis</div>
                     <div
                         style="font-family: var(--font-body); font-size: 0.85rem; color: rgba(255,255,255,0.75); margin-bottom: 16px;">
                         Garden Design • Residential</div>
                     <div
                         style="width: 36px; height: 36px; border: 2px solid var(--color-gold); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                         <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                             stroke="var(--color-gold)" stroke-width="2.5">
                             <line x1="12" y1="5" x2="12" y2="19" />
                             <line x1="5" y1="12" x2="19" y2="12" />
                         </svg>
                     </div>
                 </div>
             </div> --}}

         </div>
     </div>
 </section>
