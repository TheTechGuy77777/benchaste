{{-- ============ SHOP SECTION ============ --}}
<section id="shop" style="padding: 120px 24px; background: var(--color-white);">
    <div style="max-width: 1280px; margin: 0 auto;">

        {{-- Section Header --}}
        <div
            style="display: flex; align-items: flex-end; justify-content: space-between; flex-wrap: wrap; gap: 24px; margin-bottom: 56px;">
            <div>
                <div class="section-label reveal">Our Shop</div>
                <h2 class="section-heading reveal reveal-delay-1" style="margin-bottom: 0;">
                    Premium Garden<br>Products & Supplies
                </h2>
            </div>
            <a href="https://wa.me/2348000000000" target="_blank" class="btn-primary reveal reveal-delay-2">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                </svg>
                Order via WhatsApp
            </a>
        </div>

        {{-- Category Filter --}}
        <div class="reveal" style="display: flex; gap: 10px; flex-wrap: wrap; margin-bottom: 40px;">
            <button class="filter-btn active" onclick="filterShop('all', this)">All Products</button>
            <button class="filter-btn" onclick="filterShop('pots', this)">Flower Pots</button>
            <button class="filter-btn" onclick="filterShop('seeds', this)">Seeds & Seedlings</button>
            <button class="filter-btn" onclick="filterShop('fertilizer', this)">Fertilizers & Soil</button>
            <button class="filter-btn" onclick="filterShop('tools', this)">Garden Tools</button>
            <button class="filter-btn" onclick="filterShop('grass', this)">Artificial Grass</button>
            <button class="filter-btn" onclick="filterShop('furniture', this)">Outdoor Furniture</button>
        </div>

        {{-- Products Grid --}}
        <div id="shop-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px;">

            {{-- Product 1 --}}
            <div class="shop-item reveal" data-category="pots"
                style="background: white; border-radius: var(--radius-card); border: 1px solid rgba(0,0,0,0.07); overflow: hidden; transition: var(--transition);">
                <div
                    style="height: 200px; overflow: hidden; position: relative; background: linear-gradient(135deg, #e8f5e9, #c8e6c9);">
                    <img src="{{ asset('images/shop/flower-pot-1.jpg') }}" alt="Ceramic Flower Pot"
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;"
                        class="shop-img" onerror="this.style.display='none'">
                    <div
                        style="position: absolute; top: 12px; left: 12px; background: var(--color-gold); color: white; font-family: var(--font-heading); font-size: 0.7rem; font-weight: 700; padding: 4px 10px; border-radius: 100px;">
                        Best Seller</div>
                </div>
                <div style="padding: 20px;">
                    <div
                        style="font-family: var(--font-heading); font-size: 0.72rem; font-weight: 600; color: var(--color-sage); text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 6px;">
                        Flower Pots</div>
                    <h3
                        style="font-family: var(--font-heading); font-size: 1rem; font-weight: 700; color: var(--color-charcoal); margin-bottom: 8px;">
                        Premium Ceramic Pot</h3>
                    <p
                        style="font-family: var(--font-body); font-size: 0.85rem; color: #888; line-height: 1.6; margin-bottom: 16px;">
                        Elegant hand-crafted ceramic pots in various sizes. Perfect for indoor and outdoor plants.</p>
                    <div style="display: flex; align-items: center; justify-content: space-between;">
                        <div
                            style="font-family: var(--font-heading); font-size: 1.1rem; font-weight: 800; color: var(--color-forest);">
                            ₦4,500</div>
                        <a href="https://wa.me/2348000000000?text=Hi, I'm interested in the Premium Ceramic Pot"
                            target="_blank"
                            style="display: inline-flex; align-items: center; gap: 6px; background: #25D366; color: white; font-family: var(--font-heading); font-size: 0.78rem; font-weight: 600; padding: 8px 14px; border-radius: 6px; text-decoration: none; transition: var(--transition);"
                            onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 20px rgba(37,211,102,0.4)'"
                            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                            </svg>
                            Order
                        </a>
                    </div>
                </div>
            </div>

            {{-- Product 2 --}}
            <div class="shop-item reveal reveal-delay-1" data-category="pots"
                style="background: white; border-radius: var(--radius-card); border: 1px solid rgba(0,0,0,0.07); overflow: hidden; transition: var(--transition);">
                <div
                    style="height: 200px; overflow: hidden; position: relative; background: linear-gradient(135deg, #f3e5d0, #e8d5b7);">
                    <img src="{{ asset('images/shop/flower-pot-2.jpg') }}" alt="Terracotta Pot"
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;"
                        class="shop-img" onerror="this.style.display='none'">
                </div>
                <div style="padding: 20px;">
                    <div
                        style="font-family: var(--font-heading); font-size: 0.72rem; font-weight: 600; color: var(--color-sage); text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 6px;">
                        Flower Pots</div>
                    <h3
                        style="font-family: var(--font-heading); font-size: 1rem; font-weight: 700; color: var(--color-charcoal); margin-bottom: 8px;">
                        Terracotta Garden Pot</h3>
                    <p
                        style="font-family: var(--font-body); font-size: 0.85rem; color: #888; line-height: 1.6; margin-bottom: 16px;">
                        Classic terracotta pots ideal for succulents, herbs, and flowering plants.</p>
                    <div style="display: flex; align-items: center; justify-content: space-between;">
                        <div
                            style="font-family: var(--font-heading); font-size: 1.1rem; font-weight: 800; color: var(--color-forest);">
                            ₦2,800</div>
                        <a href="https://wa.me/2348000000000?text=Hi, I'm interested in the Terracotta Garden Pot"
                            target="_blank"
                            style="display: inline-flex; align-items: center; gap: 6px; background: #25D366; color: white; font-family: var(--font-heading); font-size: 0.78rem; font-weight: 600; padding: 8px 14px; border-radius: 6px; text-decoration: none; transition: var(--transition);"
                            onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 20px rgba(37,211,102,0.4)'"
                            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                            </svg>
                            Order
                        </a>
                    </div>
                </div>
            </div>

            {{-- Product 3 --}}
            <div class="shop-item reveal reveal-delay-2" data-category="seeds"
                style="background: white; border-radius: var(--radius-card); border: 1px solid rgba(0,0,0,0.07); overflow: hidden; transition: var(--transition);">
                <div
                    style="height: 200px; overflow: hidden; position: relative; background: linear-gradient(135deg, #e8f5e9, #a5d6a7);">
                    <img src="{{ asset('images/shop/seedlings.jpg') }}" alt="Seedlings"
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;"
                        class="shop-img" onerror="this.style.display='none'">
                    <div
                        style="position: absolute; top: 12px; left: 12px; background: var(--color-forest); color: white; font-family: var(--font-heading); font-size: 0.7rem; font-weight: 700; padding: 4px 10px; border-radius: 100px;">
                        New Arrival</div>
                </div>
                <div style="padding: 20px;">
                    <div
                        style="font-family: var(--font-heading); font-size: 0.72rem; font-weight: 600; color: var(--color-sage); text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 6px;">
                        Seeds & Seedlings</div>
                    <h3
                        style="font-family: var(--font-heading); font-size: 1rem; font-weight: 700; color: var(--color-charcoal); margin-bottom: 8px;">
                        Tropical Flower Seedlings</h3>
                    <p
                        style="font-family: var(--font-body); font-size: 0.85rem; color: #888; line-height: 1.6; margin-bottom: 16px;">
                        Healthy seedlings of exotic tropical flowers, ready for transplanting into your garden.</p>
                    <div style="display: flex; align-items: center; justify-content: space-between;">
                        <div
                            style="font-family: var(--font-heading); font-size: 1.1rem; font-weight: 800; color: var(--color-forest);">
                            ₦1,500</div>
                        <a href="https://wa.me/2348000000000?text=Hi, I'm interested in the Tropical Flower Seedlings"
                            target="_blank"
                            style="display: inline-flex; align-items: center; gap: 6px; background: #25D366; color: white; font-family: var(--font-heading); font-size: 0.78rem; font-weight: 600; padding: 8px 14px; border-radius: 6px; text-decoration: none; transition: var(--transition);"
                            onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 20px rgba(37,211,102,0.4)'"
                            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                            </svg>
                            Order
                        </a>
                    </div>
                </div>
            </div>

            {{-- Product 4 --}}
            <div class="shop-item reveal reveal-delay-3" data-category="fertilizer"
                style="background: white; border-radius: var(--radius-card); border: 1px solid rgba(0,0,0,0.07); overflow: hidden; transition: var(--transition);">
                <div
                    style="height: 200px; overflow: hidden; position: relative; background: linear-gradient(135deg, #efebe9, #d7ccc8);">
                    <img src="{{ asset('images/shop/fertilizer.jpg') }}" alt="Fertilizer"
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;"
                        class="shop-img" onerror="this.style.display='none'">
                </div>
                <div style="padding: 20px;">
                    <div
                        style="font-family: var(--font-heading); font-size: 0.72rem; font-weight: 600; color: var(--color-sage); text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 6px;">
                        Fertilizers & Soil</div>
                    <h3
                        style="font-family: var(--font-heading); font-size: 1rem; font-weight: 700; color: var(--color-charcoal); margin-bottom: 8px;">
                        Organic Garden Fertilizer</h3>
                    <p
                        style="font-family: var(--font-body); font-size: 0.85rem; color: #888; line-height: 1.6; margin-bottom: 16px;">
                        100% organic slow-release fertilizer. Safe for all plants, children and pets.</p>
                    <div style="display: flex; align-items: center; justify-content: space-between;">
                        <div
                            style="font-family: var(--font-heading); font-size: 1.1rem; font-weight: 800; color: var(--color-forest);">
                            ₦3,200</div>
                        <a href="https://wa.me/2348000000000?text=Hi, I'm interested in the Organic Garden Fertilizer"
                            target="_blank"
                            style="display: inline-flex; align-items: center; gap: 6px; background: #25D366; color: white; font-family: var(--font-heading); font-size: 0.78rem; font-weight: 600; padding: 8px 14px; border-radius: 6px; text-decoration: none; transition: var(--transition);"
                            onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 20px rgba(37,211,102,0.4)'"
                            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                            </svg>
                            Order
                        </a>
                    </div>
                </div>
            </div>

            {{-- Product 5 --}}
            <div class="shop-item reveal" data-category="tools"
                style="background: white; border-radius: var(--radius-card); border: 1px solid rgba(0,0,0,0.07); overflow: hidden; transition: var(--transition);">
                <div
                    style="height: 200px; overflow: hidden; position: relative; background: linear-gradient(135deg, #e3f2fd, #bbdefb);">
                    <img src="{{ asset('images/shop/garden-tools.jpg') }}" alt="Garden Tools"
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;"
                        class="shop-img" onerror="this.style.display='none'">
                </div>
                <div style="padding: 20px;">
                    <div
                        style="font-family: var(--font-heading); font-size: 0.72rem; font-weight: 600; color: var(--color-sage); text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 6px;">
                        Garden Tools</div>
                    <h3
                        style="font-family: var(--font-heading); font-size: 1rem; font-weight: 700; color: var(--color-charcoal); margin-bottom: 8px;">
                        Professional Tool Set</h3>
                    <p
                        style="font-family: var(--font-body); font-size: 0.85rem; color: #888; line-height: 1.6; margin-bottom: 16px;">
                        Complete 5-piece stainless steel garden tool set including trowel, rake, and pruner.</p>
                    <div style="display: flex; align-items: center; justify-content: space-between;">
                        <div
                            style="font-family: var(--font-heading); font-size: 1.1rem; font-weight: 800; color: var(--color-forest);">
                            ₦12,000</div>
                        <a href="https://wa.me/2348000000000?text=Hi, I'm interested in the Professional Tool Set"
                            target="_blank"
                            style="display: inline-flex; align-items: center; gap: 6px; background: #25D366; color: white; font-family: var(--font-heading); font-size: 0.78rem; font-weight: 600; padding: 8px 14px; border-radius: 6px; text-decoration: none; transition: var(--transition);"
                            onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 20px rgba(37,211,102,0.4)'"
                            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                            </svg>
                            Order
                        </a>
                    </div>
                </div>
            </div>

            {{-- Product 6 --}}
            <div class="shop-item reveal reveal-delay-1" data-category="grass"
                style="background: white; border-radius: var(--radius-card); border: 1px solid rgba(0,0,0,0.07); overflow: hidden; transition: var(--transition);">
                <div
                    style="height: 200px; overflow: hidden; position: relative; background: linear-gradient(135deg, #1F3B2D, #A3B18A);">
                    <img src="{{ asset('images/shop/artificial-grass.jpg') }}" alt="Artificial Grass"
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;"
                        class="shop-img" onerror="this.style.display='none'">
                    <div
                        style="position: absolute; top: 12px; left: 12px; background: var(--color-gold); color: white; font-family: var(--font-heading); font-size: 0.7rem; font-weight: 700; padding: 4px 10px; border-radius: 100px;">
                        Top Rated</div>
                </div>
                <div style="padding: 20px;">
                    <div
                        style="font-family: var(--font-heading); font-size: 0.72rem; font-weight: 600; color: var(--color-sage); text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 6px;">
                        Artificial Grass</div>
                    <h3
                        style="font-family: var(--font-heading); font-size: 1rem; font-weight: 700; color: var(--color-charcoal); margin-bottom: 8px;">
                        Premium Artificial Turf</h3>
                    <p
                        style="font-family: var(--font-body); font-size: 0.85rem; color: #888; line-height: 1.6; margin-bottom: 16px;">
                        Ultra-realistic artificial grass per square meter. UV resistant, durable and low maintenance.
                    </p>
                    <div style="display: flex; align-items: center; justify-content: space-between;">
                        <div>
                            <div
                                style="font-family: var(--font-heading); font-size: 1.1rem; font-weight: 800; color: var(--color-forest);">
                                ₦8,500</div>
                            <div style="font-family: var(--font-body); font-size: 0.72rem; color: #aaa;">per sqm</div>
                        </div>
                        <a href="https://wa.me/2348000000000?text=Hi, I'm interested in the Premium Artificial Turf"
                            target="_blank"
                            style="display: inline-flex; align-items: center; gap: 6px; background: #25D366; color: white; font-family: var(--font-heading); font-size: 0.78rem; font-weight: 600; padding: 8px 14px; border-radius: 6px; text-decoration: none; transition: var(--transition);"
                            onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 20px rgba(37,211,102,0.4)'"
                            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                            </svg>
                            Order
                        </a>
                    </div>
                </div>
            </div>

            {{-- Product 7 --}}
            <div class="shop-item reveal reveal-delay-2" data-category="furniture"
                style="background: white; border-radius: var(--radius-card); border: 1px solid rgba(0,0,0,0.07); overflow: hidden; transition: var(--transition);">
                <div
                    style="height: 200px; overflow: hidden; position: relative; background: linear-gradient(135deg, #fff8e1, #ffecb3);">
                    <img src="{{ asset('images/shop/outdoor-furniture.jpg') }}" alt="Outdoor Furniture"
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;"
                        class="shop-img" onerror="this.style.display='none'">
                </div>
                <div style="padding: 20px;">
                    <div
                        style="font-family: var(--font-heading); font-size: 0.72rem; font-weight: 600; color: var(--color-sage); text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 6px;">
                        Outdoor Furniture</div>
                    <h3
                        style="font-family: var(--font-heading); font-size: 1rem; font-weight: 700; color: var(--color-charcoal); margin-bottom: 8px;">
                        Rattan Garden Set</h3>
                    <p
                        style="font-family: var(--font-body); font-size: 0.85rem; color: #888; line-height: 1.6; margin-bottom: 16px;">
                        Premium 4-seater rattan outdoor furniture set with weather-resistant cushions included.</p>
                    <div style="display: flex; align-items: center; justify-content: space-between;">
                        <div
                            style="font-family: var(--font-heading); font-size: 1.1rem; font-weight: 800; color: var(--color-forest);">
                            ₦85,000</div>
                        <a href="https://wa.me/2348000000000?text=Hi, I'm interested in the Rattan Garden Set"
                            target="_blank"
                            style="display: inline-flex; align-items: center; gap: 6px; background: #25D366; color: white; font-family: var(--font-heading); font-size: 0.78rem; font-weight: 600; padding: 8px 14px; border-radius: 6px; text-decoration: none; transition: var(--transition);"
                            onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 20px rgba(37,211,102,0.4)'"
                            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                            </svg>
                            Order
                        </a>
                    </div>
                </div>
            </div>

            {{-- Product 8 --}}
            <div class="shop-item reveal reveal-delay-3" data-category="fertilizer"
                style="background: white; border-radius: var(--radius-card); border: 1px solid rgba(0,0,0,0.07); overflow: hidden; transition: var(--transition);">
                <div
                    style="height: 200px; overflow: hidden; position: relative; background: linear-gradient(135deg, #f1f8e9, #dcedc8);">
                    <img src="{{ asset('images/shop/potting-soil.jpg') }}" alt="Potting Soil"
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;"
                        class="shop-img" onerror="this.style.display='none'">
                </div>
                <div style="padding: 20px;">
                    <div
                        style="font-family: var(--font-heading); font-size: 0.72rem; font-weight: 600; color: var(--color-sage); text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 6px;">
                        Fertilizers & Soil</div>
                    <h3
                        style="font-family: var(--font-heading); font-size: 1rem; font-weight: 700; color: var(--color-charcoal); margin-bottom: 8px;">
                        Premium Potting Mix</h3>
                    <p
                        style="font-family: var(--font-body); font-size: 0.85rem; color: #888; line-height: 1.6; margin-bottom: 16px;">
                        Nutrient-rich potting mix with perlite and compost for healthy root development.</p>
                    <div style="display: flex; align-items: center; justify-content: space-between;">
                        <div>
                            <div
                                style="font-family: var(--font-heading); font-size: 1.1rem; font-weight: 800; color: var(--color-forest);">
                                ₦2,500</div>
                            <div style="font-family: var(--font-body); font-size: 0.72rem; color: #aaa;">per 10kg bag
                            </div>
                        </div>
                        <a href="https://wa.me/2348000000000?text=Hi, I'm interested in the Premium Potting Mix"
                            target="_blank"
                            style="display: inline-flex; align-items: center; gap: 6px; background: #25D366; color: white; font-family: var(--font-heading); font-size: 0.78rem; font-weight: 600; padding: 8px 14px; border-radius: 6px; text-decoration: none; transition: var(--transition);"
                            onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 20px rgba(37,211,102,0.4)'"
                            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                            </svg>
                            Order
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
