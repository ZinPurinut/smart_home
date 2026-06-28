@extends('layouts.app')

@section('title', 'S.SMART — Luxury Switch & Smart Home Automation')

@section('content')

{{-- ========== HERO SECTION ========== --}}
<section class="section-full bg-black" id="hero">
    {{-- Background gradient as placeholder for product imagery --}}
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a1200] via-[#0a0a0a] to-black"></div>
        {{-- Decorative grid overlay --}}
        <div class="absolute inset-0 opacity-5"
             style="background-image: linear-gradient(#c9a96e 1px, transparent 1px), linear-gradient(90deg, #c9a96e 1px, transparent 1px); background-size: 60px 60px;">
        </div>
        {{-- Glow effect --}}
        <div class="absolute top-1/3 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-[#c9a96e]/5 rounded-full blur-[100px]"></div>
    </div>

    <div class="section-overlay" style="background: linear-gradient(to top, #000 0%, transparent 60%)"></div>

    <div class="section-content w-full">
        <div class="max-w-7xl mx-auto">
            <p class="section-label hero-item" style="--delay:0.1s;">S.Smart Automation Systems</p>
            <h1 class="section-title hero-item" style="--delay:0.25s;">
                LUXURY<br>
                <span class="gradient-gold">SWITCH</span>
            </h1>
            <p class="section-subtitle hero-item" style="--delay:0.45s;">
                ศูนย์รวมสวิตช์หรูครบวงจร สไตล์คลาสสิก หรูหรา ทันสมัย<br>
                ในราคาส่ง พร้อมระบบสมาร์ทโฮมระดับพรีเมียม
            </p>
            <div class="flex flex-wrap gap-4 hero-item" style="--delay:0.6s;">
                <a href="#products" class="btn-gold">Explore Products</a>
                <a href="#smart-home" class="btn-outline">Smart Home</a>
            </div>
        </div>
    </div>

    {{-- Scroll indicator --}}
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 opacity-40">
        <span class="text-xs tracking-widest uppercase text-white">Scroll</span>
        <div class="w-px h-12 bg-gradient-to-b from-white to-transparent animate-pulse"></div>
    </div>
</section>

{{-- ========== PRODUCT HIGHLIGHT SECTIONS ========== --}}

{{-- Gold Series --}}
<section class="section-full" id="products" style="background: #080500;">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-[#2a1800] via-[#0f0800] to-black"></div>
        <div class="absolute right-0 top-0 w-1/2 h-full opacity-20"
             style="background: radial-gradient(ellipse at right center, #c9a96e 0%, transparent 70%);">
        </div>
        {{-- Decorative switch pattern --}}
        <div class="absolute right-12 top-1/2 -translate-y-1/2 hidden lg:block opacity-10">
            <div class="w-64 h-96 border border-[#c9a96e] rounded-sm"></div>
            <div class="absolute inset-4 border border-[#c9a96e]/50 rounded-sm"></div>
            <div class="absolute top-1/4 left-1/2 -translate-x-1/2 w-16 h-24 border border-[#c9a96e]/70 rounded-sm"></div>
        </div>
    </div>
    <div class="section-overlay" style="background: linear-gradient(to right, #000 40%, transparent 80%), linear-gradient(to top, #000 0%, transparent 50%)"></div>

    <div class="section-content">
        <p class="section-label reveal">BRONZ SERIES</p>
        <h2 class="section-title reveal">
            GOLD<br>SERIES
        </h2>
        <div class="line-gold mb-6 reveal"></div>
        <p class="section-subtitle reveal">
            สวิตช์สีทอง ดีไซน์คลาสสิก หรูหรา เพิ่มมูลค่าให้พื้นที่<br>
            สวยงามขึ้นตามกาลเวลา เหมาะกับทุก Interior Style
        </p>
        <div class="flex flex-wrap gap-4 reveal">
            <a href="{{ config('site.store_url') }}" target="_blank" rel="noopener noreferrer" class="btn-primary">View Collection</a>
        </div>
    </div>
</section>

{{-- Black Bronze Series --}}
<section class="section-full" style="background: #050505;">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-bl from-[#1a0a00] via-black to-black"></div>
        <div class="absolute left-0 top-0 w-1/2 h-full opacity-15"
             style="background: radial-gradient(ellipse at left center, #8b6914 0%, transparent 70%);">
        </div>
        {{-- Decorative elements --}}
        <div class="absolute left-12 top-1/2 -translate-y-1/2 hidden lg:block" style="opacity:0.08">
            <div class="w-48 h-80 border border-[#8b6914] rounded-sm"></div>
            <div class="absolute inset-3 border border-[#8b6914]/40"></div>
        </div>
    </div>
    <div class="section-overlay" style="background: linear-gradient(to left, #000 40%, transparent 80%), linear-gradient(to top, #000 0%, transparent 50%)"></div>

    <div class="section-content text-right ml-auto">
        <p class="section-label reveal" style="text-align: right;">BLACK BRONZE SERIES</p>
        <h2 class="section-title reveal" style="text-align: right;">
            BLACK<br>BRONZE
        </h2>
        <div class="line-gold mb-6 reveal ml-auto"></div>
        <p class="section-subtitle reveal" style="text-align: right; margin-left: auto;">
            สีดำตัดขอบบรอนซ์ สไตล์ไม่เหมือนใคร<br>
            Understated Sophistication ที่เข้ากับทุก Lifestyle
        </p>
        <div class="flex flex-wrap gap-4 justify-end reveal">
            <a href="{{ config('site.store_url') }}" target="_blank" rel="noopener noreferrer" class="btn-primary">View Collection</a>
        </div>
    </div>
</section>

{{-- Touch Screen Switches --}}
<section class="section-full" style="background: #030508;">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-[#000a1a] via-black to-black"></div>
        <div class="absolute right-0 top-0 w-2/3 h-full" style="background:radial-gradient(ellipse at right center,rgba(26,64,128,0.18) 0%,transparent 70%);"></div>

        {{-- Product images — floating grid on the right --}}
        <div class="absolute right-0 top-0 bottom-0 w-1/2 hidden lg:flex items-center justify-end pr-16 gap-4" style="pointer-events:none;">
            <div class="flex flex-col gap-4">
                <div class="w-36 h-36 bg-white/5 border border-white/10 overflow-hidden">
                    <img src="/images/products/touch-1gang-a.jpg" alt="Touch Switch 1-Gang" class="w-full h-full object-contain p-3 mix-blend-luminosity opacity-80 hover:opacity-100 transition-opacity duration-500" style="pointer-events:auto;">
                </div>
                <div class="w-36 h-36 bg-white/5 border border-white/10 overflow-hidden">
                    <img src="/images/products/touch-2gang-a.jpg" alt="Touch Switch 2-Gang" class="w-full h-full object-contain p-3 mix-blend-luminosity opacity-80 hover:opacity-100 transition-opacity duration-500" style="pointer-events:auto;">
                </div>
            </div>
            <div class="flex flex-col gap-4 mt-12">
                <div class="w-44 h-44 bg-white/5 border border-white/10 overflow-hidden">
                    <img src="/images/products/touch-3gang-a.jpg" alt="Touch Switch 3-Gang" class="w-full h-full object-contain p-4 mix-blend-luminosity opacity-90 hover:opacity-100 transition-opacity duration-500" style="pointer-events:auto;">
                </div>
                <div class="w-44 h-44 bg-white/5 border border-white/10 overflow-hidden">
                    <img src="/images/products/touch-x39uag.jpg" alt="S.Smart Switch X39UAG" class="w-full h-full object-contain p-4 opacity-90 hover:opacity-100 transition-opacity duration-500" style="pointer-events:auto;">
                </div>
            </div>
        </div>
    </div>
    <div class="section-overlay" style="background: linear-gradient(to right, #000 35%, transparent 65%), linear-gradient(to top, #000 0%, transparent 55%)"></div>

    <div class="section-content">
        <p class="section-label reveal">TOUCH TECHNOLOGY</p>
        <h2 class="section-title reveal">
            TOUCH<br>
            <span style="color: #4a90d9;">SCREEN</span>
        </h2>
        <div class="line-gold mb-6 reveal"></div>
        <p class="section-subtitle reveal">
            Touch Screen Switch ขนาด 3×3" และ 2×4"<br>
            รองรับ WiFi และ Zigbee ควบคุมได้จากทุกที่ในโลก
        </p>
        {{-- Product type pills --}}
        <div class="flex flex-wrap gap-3 mb-8 reveal">
            <span style="border:1px solid rgba(74,144,217,.4);color:rgba(74,144,217,.9);font-size:.7rem;letter-spacing:.15em;padding:.3rem .8rem;">1 Gang</span>
            <span style="border:1px solid rgba(74,144,217,.4);color:rgba(74,144,217,.9);font-size:.7rem;letter-spacing:.15em;padding:.3rem .8rem;">2 Gang</span>
            <span style="border:1px solid rgba(74,144,217,.4);color:rgba(74,144,217,.9);font-size:.7rem;letter-spacing:.15em;padding:.3rem .8rem;">3 Gang</span>
            <span style="border:1px solid rgba(74,144,217,.2);color:rgba(255,255,255,.4);font-size:.7rem;letter-spacing:.15em;padding:.3rem .8rem;">WiFi</span>
            <span style="border:1px solid rgba(74,144,217,.2);color:rgba(255,255,255,.4);font-size:.7rem;letter-spacing:.15em;padding:.3rem .8rem;">Zigbee</span>
        </div>
        <div class="flex flex-wrap gap-4 reveal">
            <a href="{{ config('site.store_url') }}/touch_screen_switch-list.aspx" target="_blank" rel="noopener noreferrer" class="btn-primary">View Collection</a>
            <a href="#smart-home" class="btn-outline">Learn More</a>
        </div>
    </div>
</section>

{{-- ========== CATEGORIES GRID ========== --}}
<section class="py-24 px-8 md:px-16 lg:px-24 bg-[#050505]" id="categories">
    <div class="max-w-7xl mx-auto">
        <div class="mb-16 reveal">
            <p class="section-label">Product Categories</p>
            <h2 class="text-4xl md:text-6xl font-bold tracking-tight text-white mb-4">ALL PRODUCTS</h2>
            <div class="line-gold"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-px bg-white/5">
            {{-- Category 1 --}}
            <div class="product-card bg-[#0a0a0a] p-8 reveal group">
                <div class="mb-6">
                    <div class="w-12 h-12 border border-[#c9a96e]/40 flex items-center justify-center mb-4 group-hover:border-[#c9a96e] transition-colors duration-300">
                        <svg class="w-6 h-6 text-[#c9a96e]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <rect x="3" y="3" width="18" height="18" rx="2" stroke-width="1.5"/>
                            <line x1="9" y1="12" x2="15" y2="12" stroke-width="1.5"/>
                        </svg>
                    </div>
                    <span class="text-xs text-white/30 tracking-widest uppercase">01</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-3 tracking-wide">Mechanic Switches</h3>
                <p class="text-white/40 text-sm leading-relaxed mb-6">
                    Bronz Series, EU Series, Black Bronze Series — คุณภาพสูง ดีไซน์หรู
                </p>
                <a href="{{ config('site.store_url') }}" target="_blank"
                   class="text-xs text-[#c9a96e] tracking-widest uppercase flex items-center gap-2 group-hover:gap-4 transition-all duration-300">
                    Shop Now <span>→</span>
                </a>
            </div>

            {{-- Category 2 — Touch Screen (with real product images) --}}
            <div class="product-card bg-[#0a0a0a] reveal group overflow-hidden">
                {{-- Product image strip --}}
                <div class="flex border-b border-white/5 bg-[#06080f]">
                    <div class="flex-1 p-3 border-r border-white/5">
                        <img src="/images/products/touch-1gang-a.jpg" alt="1 Gang" class="w-full h-20 object-contain opacity-70 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                    <div class="flex-1 p-3 border-r border-white/5">
                        <img src="/images/products/touch-2gang-a.jpg" alt="2 Gang" class="w-full h-20 object-contain opacity-70 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                    <div class="flex-1 p-3">
                        <img src="/images/products/touch-3gang-a.jpg" alt="3 Gang" class="w-full h-20 object-contain opacity-70 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                </div>
                <div class="p-8">
                    <div class="flex items-center justify-between mb-5">
                        <span class="text-xs text-white/30 tracking-widest uppercase">02</span>
                        <div class="flex gap-1.5">
                            <span style="font-size:.6rem;letter-spacing:.1em;color:rgba(74,144,217,.8);border:1px solid rgba(74,144,217,.3);padding:.15rem .5rem;">WiFi</span>
                            <span style="font-size:.6rem;letter-spacing:.1em;color:rgba(74,144,217,.8);border:1px solid rgba(74,144,217,.3);padding:.15rem .5rem;">Zigbee</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3 tracking-wide">Touch Screen Switches</h3>
                    <p class="text-white/40 text-sm leading-relaxed mb-6">
                        3×3" และ 2×4" — 1/2/3 Gang รองรับ Normal / WiFi / Zigbee สั่งงานได้จากทั่วโลก
                    </p>
                    <a href="{{ config('site.store_url') }}/touch_screen_switch-list.aspx" target="_blank" rel="noopener noreferrer"
                       class="text-xs text-[#c9a96e] tracking-widest uppercase flex items-center gap-2 group-hover:gap-4 transition-all duration-300">
                        Shop Now <span>→</span>
                    </a>
                </div>
            </div>

            {{-- Category 3 --}}
            <div class="product-card bg-[#0a0a0a] p-8 reveal group">
                <div class="mb-6">
                    <div class="w-12 h-12 border border-[#c9a96e]/40 flex items-center justify-center mb-4 group-hover:border-[#c9a96e] transition-colors duration-300">
                        <svg class="w-6 h-6 text-[#c9a96e]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z" stroke-width="1.5"/>
                            <polyline points="9,22 9,12 15,12 15,22" stroke-width="1.5"/>
                        </svg>
                    </div>
                    <span class="text-xs text-white/30 tracking-widest uppercase">03</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-3 tracking-wide">Home Automation</h3>
                <p class="text-white/40 text-sm leading-relaxed mb-6">
                    Smart Lock, Video Door Phone, Smart Gate, Lighting Control ครบวงจร
                </p>
                <a href="{{ config('site.store_url') }}" target="_blank"
                   class="text-xs text-[#c9a96e] tracking-widest uppercase flex items-center gap-2 group-hover:gap-4 transition-all duration-300">
                    Shop Now <span>→</span>
                </a>
            </div>

            {{-- Category 4 --}}
            <div class="product-card bg-[#0a0a0a] p-8 reveal group">
                <div class="mb-6">
                    <div class="w-12 h-12 border border-[#c9a96e]/40 flex items-center justify-center mb-4 group-hover:border-[#c9a96e] transition-colors duration-300">
                        <svg class="w-6 h-6 text-[#c9a96e]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" stroke-width="1.5"/>
                            <path d="M12 8v4l3 3" stroke-width="1.5"/>
                        </svg>
                    </div>
                    <span class="text-xs text-white/30 tracking-widest uppercase">04</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-3 tracking-wide">Access Control</h3>
                <p class="text-white/40 text-sm leading-relaxed mb-6">
                    Smart Auto Gate, Video Door Phone, Smart Bell ระบบรักษาความปลอดภัยสมัยใหม่
                </p>
                <a href="{{ config('site.store_url') }}" target="_blank"
                   class="text-xs text-[#c9a96e] tracking-widest uppercase flex items-center gap-2 group-hover:gap-4 transition-all duration-300">
                    Shop Now <span>→</span>
                </a>
            </div>

            {{-- Category 5 --}}
            <div class="product-card bg-[#0a0a0a] p-8 reveal group">
                <div class="mb-6">
                    <div class="w-12 h-12 border border-[#c9a96e]/40 flex items-center justify-center mb-4 group-hover:border-[#c9a96e] transition-colors duration-300">
                        <svg class="w-6 h-6 text-[#c9a96e]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" stroke-width="1.5"/>
                        </svg>
                    </div>
                    <span class="text-xs text-white/30 tracking-widest uppercase">05</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-3 tracking-wide">Smart Lighting</h3>
                <p class="text-white/40 text-sm leading-relaxed mb-6">
                    Lighting Control ระดับพรีเมียม ปรับแสงได้ตามอารมณ์ ประหยัดพลังงาน
                </p>
                <a href="{{ config('site.store_url') }}" target="_blank"
                   class="text-xs text-[#c9a96e] tracking-widest uppercase flex items-center gap-2 group-hover:gap-4 transition-all duration-300">
                    Shop Now <span>→</span>
                </a>
            </div>

            {{-- Category 6 --}}
            <div class="product-card bg-[#0a0a0a] p-8 reveal group">
                <div class="mb-6">
                    <div class="w-12 h-12 border border-[#c9a96e]/40 flex items-center justify-center mb-4 group-hover:border-[#c9a96e] transition-colors duration-300">
                        <svg class="w-6 h-6 text-[#c9a96e]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="3" stroke-width="1.5"/>
                            <path d="M19.07 4.93a10 10 0 010 14.14M4.93 4.93a10 10 0 000 14.14" stroke-width="1.5"/>
                        </svg>
                    </div>
                    <span class="text-xs text-white/30 tracking-widest uppercase">06</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-3 tracking-wide">Accessories & More</h3>
                <p class="text-white/40 text-sm leading-relaxed mb-6">
                    อุปกรณ์เสริมครบครัน Stainless Steel Switches, Sockets และอื่นๆ
                </p>
                <a href="{{ config('site.store_url') }}" target="_blank"
                   class="text-xs text-[#c9a96e] tracking-widest uppercase flex items-center gap-2 group-hover:gap-4 transition-all duration-300">
                    Shop Now <span>→</span>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ========== SMART HOME SECTION ========== --}}
<section class="section-full" id="smart-home" style="background: #030305;">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-[#020210] via-black to-black"></div>
        <div class="absolute inset-0 opacity-10"
             style="background-image: radial-gradient(circle at 20% 50%, #1a1a6e 0%, transparent 50%), radial-gradient(circle at 80% 50%, #0a0a3e 0%, transparent 50%);">
        </div>
        {{-- Tech grid --}}
        <div class="absolute inset-0" style="opacity:0.03;background-image: linear-gradient(rgba(74,144,217,0.3) 1px, transparent 1px), linear-gradient(90deg, rgba(74,144,217,0.3) 1px, transparent 1px); background-size: 80px 80px;">
        </div>
    </div>
    <div class="section-overlay" style="background: linear-gradient(to right, #000 35%, transparent 70%), linear-gradient(to top, #000 0%, transparent 60%)"></div>

    <div class="section-content">
        <p class="section-label reveal" style="color: rgba(74,144,217,0.7);">SMART HOME ECOSYSTEM</p>
        <h2 class="section-title reveal">
            SMART<br>HOME
        </h2>
        <div class="line-gold mb-6 reveal"></div>
        <p class="section-subtitle reveal">
            เชื่อมต่อทุกอุปกรณ์ในบ้านเข้าด้วยกัน ควบคุมได้ทุกที่ทั่วโลก<br>
            ผ่าน WiFi และ Zigbee Technology ระดับพรีเมียม
        </p>
        <div class="grid grid-cols-2 gap-6 max-w-md mb-8 reveal">
            <div class="border border-white/10 p-4">
                <div class="text-2xl font-bold text-white mb-1">WiFi</div>
                <div class="text-xs text-white/40 tracking-wider">Direct Control</div>
            </div>
            <div class="border border-white/10 p-4">
                <div class="text-2xl font-bold text-white mb-1">Zigbee</div>
                <div class="text-xs text-white/40 tracking-wider">Mesh Network</div>
            </div>
        </div>
        <div class="flex flex-wrap gap-4 reveal">
            <a href="{{ config('site.store_url') }}" target="_blank" rel="noopener noreferrer" class="btn-primary">Explore Smart Home</a>
        </div>
    </div>
</section>

{{-- ========== ABOUT / MISSION SECTION ========== --}}
<section class="py-24 px-8 md:px-16 lg:px-24 bg-[#0a0a0a]" id="about">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="reveal">
                <p class="section-label">About S.Smart</p>
                <h2 class="text-4xl md:text-5xl font-bold tracking-tight text-white mb-6 leading-tight">
                    PREMIUM QUALITY<br>
                    <span class="gradient-gold">AT WHOLESALE PRICE</span>
                </h2>
                <div class="line-gold mb-8"></div>
                <p class="text-white/50 text-base leading-relaxed mb-6">
                    บริษัท เอส.สมาร์ท ออโต้เมชั่น ซิสเท็มส์ จำกัด — ศูนย์รวมสวิตช์หรูครบวงจร
                    ทั้งสไตล์คลาสสิก หรูหรา และทันสมัย ในราคาส่ง
                </p>
                <p class="text-white/50 text-base leading-relaxed mb-8">
                    ไม่ว่าจะอยู่ที่บ้าน ออฟฟิศ หรือทั่วโลก เลือกซื้อสินค้าได้ง่ายๆ
                    พร้อมบริการให้คำปรึกษาจากทีมผู้เชี่ยวชาญ
                </p>
                <a href="{{ config('site.store_url') }}" target="_blank" class="btn-gold">Visit Our Store</a>
            </div>

            <div class="grid grid-cols-2 gap-4 reveal">
                <div class="bg-[#0f0a00] border border-white/5 p-6">
                    <div class="text-4xl font-bold gradient-gold mb-2">100+</div>
                    <div class="text-white/40 text-sm tracking-wider">SKU Products</div>
                </div>
                <div class="bg-[#0f0a00] border border-white/5 p-6">
                    <div class="text-4xl font-bold text-white mb-2">3</div>
                    <div class="text-white/40 text-sm tracking-wider">Main Series</div>
                </div>
                <div class="bg-[#0f0a00] border border-white/5 p-6">
                    <div class="text-4xl font-bold text-white mb-2">24/7</div>
                    <div class="text-white/40 text-sm tracking-wider">Online Shopping</div>
                </div>
                <div class="bg-[#0f0a00] border border-white/5 p-6">
                    <div class="text-4xl font-bold gradient-gold mb-2">WiFi<br>+Zigbee</div>
                    <div class="text-white/40 text-sm tracking-wider">Smart Protocols</div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ========== CONTACT SECTION ========== --}}
<section class="py-24 px-8 md:px-16 lg:px-24 bg-[#050505] border-t border-white/5" id="contact">
    <div class="max-w-7xl mx-auto text-center">
        <p class="section-label reveal mx-auto text-center">Get In Touch</p>
        <h2 class="text-4xl md:text-6xl font-bold tracking-tight text-white mb-6 reveal">CONTACT US</h2>
        <div class="line-gold mx-auto mb-12 reveal"></div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-3xl mx-auto mb-12">
            <div class="reveal">
                <a href="tel:0982955259" class="group block p-6 border border-white/10 hover:border-[#c9a96e]/50 transition-all duration-300">
                    <div class="text-[#c9a96e] text-xs tracking-widest uppercase mb-3">Phone</div>
                    <div class="text-white font-medium">09 8295 5259</div>
                    <div class="text-white/40 text-sm">09 2955 9455</div>
                </a>
            </div>
            <div class="reveal">
                <a href="https://line.me/ti/p/~0982955259" target="_blank"
                   class="group block p-6 border border-white/10 hover:border-[#c9a96e]/50 transition-all duration-300">
                    <div class="text-[#c9a96e] text-xs tracking-widest uppercase mb-3">LINE</div>
                    <div class="text-white font-medium">0982955259</div>
                    <div class="text-white/40 text-sm">Add LINE Official</div>
                </a>
            </div>
            <div class="reveal">
                <a href="https://facebook.com/ssmartautomation" target="_blank"
                   class="group block p-6 border border-white/10 hover:border-[#c9a96e]/50 transition-all duration-300">
                    <div class="text-[#c9a96e] text-xs tracking-widest uppercase mb-3">Facebook</div>
                    <div class="text-white font-medium">ssmartautomation</div>
                    <div class="text-white/40 text-sm">Follow Us</div>
                </a>
            </div>
        </div>

        <div class="reveal">
            <a href="{{ config('site.store_url') }}" target="_blank"
               class="btn-gold text-lg px-16 py-4 inline-block">
                Shop Online Now
            </a>
        </div>
    </div>
</section>

@endsection

{{-- JS moved to resources/js/app.js --}}
