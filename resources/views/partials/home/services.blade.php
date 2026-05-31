 <section id="services" style="padding: 120px 24px; background: var(--color-white);">
     <div style="max-width: 1280px; margin: 0 auto;">

         {{-- Section Header --}}
         <div style="text-align: center; margin-bottom: 72px;">
             <div class="section-label reveal" style="justify-content: center;">Our Services</div>
             <h2 class="section-heading reveal reveal-delay-1" style="text-align: center; margin: 0 auto 20px;">
                 Everything Your Outdoor<br>Space Needs
             </h2>
             <p class="section-sub reveal reveal-delay-2" style="text-align: center; margin: 0 auto;">
                 From initial design concepts to ongoing maintenance, we deliver complete
                 outdoor living solutions tailored to your vision and lifestyle.
             </p>
         </div>

         {{-- Services Grid --}}
         <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 28px;">

             {{-- Service 1: Landscape Design --}}
             <div class="service-card reveal"
                 style="
                background: var(--color-white);
                border: 1px solid rgba(0,0,0,0.07);
                border-radius: var(--radius-card);
                overflow: hidden;
                transition: var(--transition);
                cursor: pointer;
            ">
                 <div style="height: 220px; overflow: hidden; position: relative;">
                     <img src="{{ asset('images/services/landscape-design.jpg') }}" alt="Landscape Design"
                         style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;"
                         class="service-img"
                         onerror="this.parentElement.style.background='linear-gradient(135deg, #1F3B2D, #A3B18A)'; this.style.display='none'">
                     <div style="position: absolute; top: 16px; left: 16px;">
                         <span
                             style="
                            background: var(--color-gold);
                            color: white;
                            font-family: var(--font-heading);
                            font-size: 0.7rem;
                            font-weight: 700;
                            letter-spacing: 0.1em;
                            text-transform: uppercase;
                            padding: 4px 12px;
                            border-radius: 100px;
                        ">Most
                             Popular</span>
                     </div>
                 </div>
                 <div style="padding: 28px;">
                     <div
                         style="width: 48px; height: 48px; background: rgba(31,59,45,0.08); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 16px;">
                         <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="var(--color-forest)" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round">
                             <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                             <polyline points="9,22 9,12 15,12 15,22" />
                         </svg>
                     </div>
                     <h3
                         style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 700; color: var(--color-charcoal); margin-bottom: 10px;">
                         Landscape Design</h3>
                     <p
                         style="font-family: var(--font-body); font-size: 0.95rem; color: #666; line-height: 1.7; margin-bottom: 20px;">
                         Custom landscape architecture that transforms your vision into breathtaking outdoor
                         environments
                         with precision planning and artistic flair.
                     </p>
                     <a href="#contact"
                         style="display: inline-flex; align-items: center; gap: 6px; font-family: var(--font-heading); font-size: 0.85rem; font-weight: 600; color: var(--color-forest); text-decoration: none; transition: var(--transition);"
                         class="card-link">
                         Learn More
                         <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                             <line x1="5" y1="12" x2="19" y2="12" />
                             <polyline points="12,5 19,12 12,19" />
                         </svg>
                     </a>
                 </div>
             </div>

             {{-- Service 2: Lawn Care --}}
             <div class="service-card reveal reveal-delay-1"
                 style="
                background: var(--color-white);
                border: 1px solid rgba(0,0,0,0.07);
                border-radius: var(--radius-card);
                overflow: hidden;
                transition: var(--transition);
                cursor: pointer;
            ">
                 <div style="height: 220px; overflow: hidden; position: relative;">
                     <img src="{{ asset('images/services/lawn-care.jpg') }}" alt="Lawn Care"
                         style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;"
                         class="service-img"
                         onerror="this.parentElement.style.background='linear-gradient(135deg, #2d5a3d, #A3B18A)'; this.style.display='none'">
                 </div>
                 <div style="padding: 28px;">
                     <div
                         style="width: 48px; height: 48px; background: rgba(31,59,45,0.08); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 16px;">
                         <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="var(--color-forest)" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round">
                             <path
                                 d="M12 22V12M12 12C12 12 7 10 4 5c4 0 8 2 8 7zM12 12C12 12 17 10 20 5c-4 0-8 2-8 7z" />
                         </svg>
                     </div>
                     <h3
                         style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 700; color: var(--color-charcoal); margin-bottom: 10px;">
                         Lawn Care</h3>
                     <p
                         style="font-family: var(--font-body); font-size: 0.95rem; color: #666; line-height: 1.7; margin-bottom: 20px;">
                         Professional lawn maintenance including mowing, fertilization, aeration, and seasonal
                         treatments
                         to keep your lawn lush and healthy year-round.
                     </p>
                     <a href="#contact"
                         style="display: inline-flex; align-items: center; gap: 6px; font-family: var(--font-heading); font-size: 0.85rem; font-weight: 600; color: var(--color-forest); text-decoration: none; transition: var(--transition);"
                         class="card-link">
                         Learn More
                         <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                             <line x1="5" y1="12" x2="19" y2="12" />
                             <polyline points="12,5 19,12 12,19" />
                         </svg>
                     </a>
                 </div>
             </div>

             {{-- Service 3: Hardscaping --}}
             <div class="service-card reveal reveal-delay-2"
                 style="
                background: var(--color-white);
                border: 1px solid rgba(0,0,0,0.07);
                border-radius: var(--radius-card);
                overflow: hidden;
                transition: var(--transition);
                cursor: pointer;
            ">
                 <div style="height: 220px; overflow: hidden; position: relative;">
                     <img src="{{ asset('images/services/hardscaping.jpg') }}" alt="Hardscaping"
                         style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;"
                         class="service-img"
                         onerror="this.parentElement.style.background='linear-gradient(135deg, #4a4a4a, #888)'; this.style.display='none'">
                 </div>
                 <div style="padding: 28px;">
                     <div
                         style="width: 48px; height: 48px; background: rgba(31,59,45,0.08); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 16px;">
                         <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="var(--color-forest)" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round">
                             <rect x="2" y="3" width="9" height="5" rx="1" />
                             <rect x="13" y="3" width="9" height="5" rx="1" />
                             <rect x="2" y="10" width="5" height="5" rx="1" />
                             <rect x="9" y="10" width="6" height="5" rx="1" />
                             <rect x="17" y="10" width="5" height="5" rx="1" />
                             <rect x="2" y="17" width="9" height="4" rx="1" />
                             <rect x="13" y="17" width="9" height="4" rx="1" />
                         </svg>
                     </div>
                     <h3
                         style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 700; color: var(--color-charcoal); margin-bottom: 10px;">
                         Hardscaping</h3>
                     <p
                         style="font-family: var(--font-body); font-size: 0.95rem; color: #666; line-height: 1.7; margin-bottom: 20px;">
                         Stunning patios, walkways, retaining walls, and outdoor structures crafted from premium stone,
                         brick, and concrete materials.
                     </p>
                     <a href="#contact"
                         style="display: inline-flex; align-items: center; gap: 6px; font-family: var(--font-heading); font-size: 0.85rem; font-weight: 600; color: var(--color-forest); text-decoration: none; transition: var(--transition);"
                         class="card-link">
                         Learn More
                         <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                             stroke-linejoin="round">
                             <line x1="5" y1="12" x2="19" y2="12" />
                             <polyline points="12,5 19,12 12,19" />
                         </svg>
                     </a>
                 </div>
             </div>

             {{-- Service 4: plant and tree nurseries --}}
             <div class="service-card reveal"
                 style="
                background: var(--color-white);
                border: 1px solid rgba(0,0,0,0.07);
                border-radius: var(--radius-card);
                overflow: hidden;
                transition: var(--transition);
                cursor: pointer;
            ">
                 <div style="height: 220px; overflow: hidden; position: relative;">
                     <img src="{{ asset('images/services/plant-nurseries.jpg') }}" alt="Irrigation"
                         style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;"
                         class="service-img"
                         onerror="this.parentElement.style.background='linear-gradient(135deg, #1a4a6b, #4a90b8)'; this.style.display='none'">
                 </div>
                 <div style="padding: 28px;">
                     <div
                         style="width: 48px; height: 48px; background: rgba(31,59,45,0.08); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 16px;">
                         <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="var(--color-forest)" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round">
                             <path d="M12 22V12" />
                             <path d="M12 12C12 12 7 9 7 4a5 5 0 0 1 10 0c0 5-5 8-5 8z" />
                             <path d="M9 15c-2 1-3 3-3 4h12c0-1-1-3-3-4" />
                         </svg>
                     </div>
                     <h3
                         style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 700; color: var(--color-charcoal); margin-bottom: 10px;">
                         Plant and tree nurseries</h3>
                     <p
                         style="font-family: var(--font-body); font-size: 0.95rem; color: #666; line-height: 1.7; margin-bottom: 20px;">
                         We supply healthy plants and quality trees to beautify landscapes, improve environments, and
                         create refreshing outdoor spaces.
                     </p>
                     <a href="#contact"
                         style="display: inline-flex; align-items: center; gap: 6px; font-family: var(--font-heading); font-size: 0.85rem; font-weight: 600; color: var(--color-forest); text-decoration: none; transition: var(--transition);"
                         class="card-link">
                         Learn More
                         <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                             stroke-linejoin="round">
                             <line x1="5" y1="12" x2="19" y2="12" />
                             <polyline points="12,5 19,12 12,19" />
                         </svg>
                     </a>
                 </div>
             </div>

             {{-- Service 5: Sit-out design --}}
             <div class="service-card reveal reveal-delay-1"
                 style="
                background: var(--color-white);
                border: 1px solid rgba(0,0,0,0.07);
                border-radius: var(--radius-card);
                overflow: hidden;
                transition: var(--transition);
                cursor: pointer;
            ">
                 <div style="height: 220px; overflow: hidden; position: relative;">
                     <img src="{{ asset('images/services/sitout-design.jpg') }}" alt="Sitout-design"
                         style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;"
                         class="service-img"
                         onerror="this.parentElement.style.background='linear-gradient(135deg, #2a1a00, #c9a84c)'; this.style.display='none'">
                 </div>
                 <div style="padding: 28px;">
                     <div
                         style="width: 48px; height: 48px; background: rgba(31,59,45,0.08); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 16px;">
                         <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="var(--color-forest)" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round">
                             <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                             <path d="M9 22V12h6v10" />
                             <path d="M9 12h6" />
                             <line x1="3" y1="9" x2="21" y2="9" />
                         </svg>
                     </div>
                     <h3
                         style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 700; color: var(--color-charcoal); margin-bottom: 10px;">
                         Sitout design</h3>
                     <p
                         style="font-family: var(--font-body); font-size: 0.95rem; color: #666; line-height: 1.7; margin-bottom: 20px;">
                         We design stylish outdoor sit-out spaces combining comfort, beauty, greenery, lighting, and
                         functional relaxation features.
                     </p>
                     <a href="#contact"
                         style="display: inline-flex; align-items: center; gap: 6px; font-family: var(--font-heading); font-size: 0.85rem; font-weight: 600; color: var(--color-forest); text-decoration: none; transition: var(--transition);"
                         class="card-link">
                         Learn More
                         <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                             stroke-linejoin="round">
                             <line x1="5" y1="12" x2="19" y2="12" />
                             <polyline points="12,5 19,12 12,19" />
                         </svg>
                     </a>
                 </div>
             </div>

             {{-- Service 6: football pitch --}}
             <div class="service-card reveal reveal-delay-2"
                 style="
                background: var(--color-forest);
                border: 1px solid rgba(0,0,0,0.07);
                border-radius: var(--radius-card);
                overflow: hidden;
                transition: var(--transition);
                cursor: pointer;
            ">
                 <div style="height: 220px; overflow: hidden; position: relative;">
                     <img src="{{ asset('images/services/football-pitch.jpg') }}" alt="Garden Maintenance"
                         style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;"
                         class="service-img"
                         onerror="this.parentElement.style.background='linear-gradient(135deg, #1F3B2D, #6B7C4A)'; this.style.display='none'">
                     <div
                         style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(31,59,45,0.85), transparent);">
                     </div>
                 </div>
                 <div style="padding: 28px;">
                     <div
                         style="width: 48px; height: 48px; background: rgba(255,255,255,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 16px;">
                         <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="var(--color-sage)" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round">
                             <rect x="2" y="5" width="20" height="14" rx="2" />
                             <circle cx="12" cy="12" r="3" />
                             <line x1="2" y1="12" x2="5" y2="12" />
                             <line x1="19" y1="12" x2="22" y2="12" />
                             <line x1="12" y1="5" x2="12" y2="7" />
                             <line x1="12" y1="17" x2="12" y2="19" />
                         </svg>
                     </div>
                     <h3
                         style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 700; color: var(--color-white); margin-bottom: 10px;">
                         Football Pitch</h3>
                     <p
                         style="font-family: var(--font-body); font-size: 0.95rem; color: rgba(255,255,255,0.7); line-height: 1.7; margin-bottom: 20px;">
                         We design and construct durable, high-quality football pitches with proper turf, drainage,
                         markings, and professional finishing.
                     </p>
                     <a href="#contact"
                         style="display: inline-flex; align-items: center; gap: 6px; font-family: var(--font-heading); font-size: 0.85rem; font-weight: 600; color: var(--color-gold); text-decoration: none; transition: var(--transition);"
                         class="card-link">
                         Learn More
                         <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                             stroke-linejoin="round">
                             <line x1="5" y1="12" x2="19" y2="12" />
                             <polyline points="12,5 19,12 12,19" />
                         </svg>
                     </a>
                 </div>
             </div>

         </div>

         {{-- Bottom CTA --}}
         <div class="reveal" style="text-align: center; margin-top: 60px;">
             <p style="font-family: var(--font-body); color: #888; margin-bottom: 20px;">Not sure what you need? Let's
                 talk about your project.</p>
             <a href="#contact" class="btn-primary">Get a Free Consultation</a>
         </div>

     </div>
 </section>
