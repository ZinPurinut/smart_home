@extends('layouts.app')

@section('title', 'S.Smart | Smart Living Architect — ออกแบบประสบการณ์การใช้ชีวิตในบ้านอัจฉริยะ')

@section('content')

{{-- ===================================================
     1. HERO
     =================================================== --}}
<section class="section-full" id="hero" style="background:#050505;">
    {{-- Background: real project photo --}}
    <div class="absolute inset-0 overflow-hidden">
        <img src="{{ asset('images/projects/hero-panel.jpg') }}" alt="S.SMART Smart Living System"
             class="w-full h-full object-cover object-center opacity-40">
        <div class="absolute inset-0 bg-gradient-to-r from-black via-black/70 to-transparent"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-black/30"></div>
    </div>

    <div class="section-content w-full">
        <div class="max-w-7xl mx-auto">
            <p class="section-label hero-item" style="--delay:0.1s;">Dealer Welcome Center</p>
            <h1 class="hero-item" style="--delay:0.25s; font-size:clamp(2.8rem,7vw,5.5rem); font-weight:700; letter-spacing:-0.03em; line-height:1.05; color:#fff; margin-bottom:1rem;">
                Smart Living<br>
                <span style="color:#f5a014;">Architect</span>
            </h1>
            <p class="hero-item" style="--delay:0.4s; font-size:1.05rem; color:rgba(255,255,255,0.55); max-width:32rem; line-height:1.75; margin-bottom:2rem;">
                ออกแบบประสบการณ์การใช้ชีวิตในบ้านอัจฉริยะ<br>
                ระบบครบวงจร พร้อมทีมสนับสนุนตัวแทนจำหน่าย
            </p>
            <div class="flex flex-wrap gap-4 hero-item" style="--delay:0.55s;">
                <a href="{{ route('dealer') }}" class="btn-gold">เริ่มต้นเป็นตัวแทน</a>
                <a href="#ecosystem" class="btn-outline">ดูระบบทั้งหมด</a>
            </div>

            {{-- Visitor types --}}
            <div class="hero-item mt-12 flex flex-wrap gap-3" style="--delay:0.7s;">
                @foreach(['ผู้รับเหมา','ช่างไฟฟ้า','Interior Designer','System Integrator','บริษัทรับสร้างบ้าน'] as $type)
                <span style="font-size:0.65rem; letter-spacing:0.12em; text-transform:uppercase; color:rgba(255,255,255,0.3); border:1px solid rgba(255,255,255,0.1); padding:4px 12px;">
                    {{ $type }}
                </span>
                @endforeach
            </div>
        </div>
    </div>

    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2" style="opacity:0.35;">
        <span class="text-xs tracking-widest uppercase text-white">Scroll</span>
        <div class="w-px h-12 bg-gradient-to-b from-white to-transparent animate-pulse"></div>
    </div>
</section>

{{-- ===================================================
     2. WHO WE ARE
     =================================================== --}}
<section class="reveal" id="about" style="background:#0a0a0a; padding:6rem 2rem;">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <span class="section-label">รู้จักเรา</span>
                <h2 style="font-size:clamp(2rem,4vw,3rem); font-weight:700; letter-spacing:-0.02em; color:#fff; line-height:1.1; margin-bottom:1.5rem;">
                    S.SMART<br>
                    ไม่ใช่ผู้จำหน่าย<br>
                    <span style="color:#f5a014;">สวิตช์ไฟ</span>
                </h2>
                <p style="color:rgba(255,255,255,0.5); font-size:1rem; line-height:1.85; margin-bottom:1.5rem;">
                    เราคือ <strong style="color:rgba(255,255,255,0.8);">Smart Living Architect</strong> — ผู้ออกแบบระบบบ้านอัจฉริยะครบวงจร
                    ที่ใส่ใจทั้งฟังก์ชันการทำงาน งานออกแบบ และประสบการณ์การใช้ชีวิตของเจ้าของบ้าน
                </p>
                <p style="color:rgba(255,255,255,0.5); font-size:1rem; line-height:1.85; margin-bottom:2rem;">
                    เราไม่ได้นำสินค้าจากโรงงานมาติดโลโก้แล้วขาย
                    แต่ใช้เวลาคัดเลือกโรงงานและพันธมิตรที่มีมาตรฐานสูง
                    และพัฒนาสินค้าให้เหมาะกับการใช้งานในประเทศไทย
                </p>

                <div class="grid grid-cols-3 gap-6">
                    @foreach([['10+','ปีประสบการณ์'],['8','หมวดระบบ'],['100%','Tuya Certified']] as $stat)
                    <div>
                        <div style="font-size:1.75rem; font-weight:700; color:#f5a014; font-family:'Nunito',sans-serif;">{{ $stat[0] }}</div>
                        <div style="font-size:0.65rem; letter-spacing:0.2em; text-transform:uppercase; color:rgba(255,255,255,0.3); margin-top:2px;">{{ $stat[1] }}</div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="relative reveal">
                <img src="{{ asset('images/projects/team-install.jpg') }}"
                     alt="S.SMART technician installing smart lock"
                     class="w-full object-cover"
                     style="height:520px; filter:brightness(0.88);">
                <div class="absolute inset-0" style="background:linear-gradient(to bottom, transparent 60%, #0a0a0a 100%);"></div>
                {{-- Badge --}}
                <div class="absolute bottom-6 left-6" style="background:rgba(0,0,0,0.75); backdrop-filter:blur(12px); padding:12px 20px; border:1px solid rgba(245,160,20,0.3);">
                    <div style="font-size:0.6rem; letter-spacing:0.25em; text-transform:uppercase; color:#f5a014; margin-bottom:2px;">S.SMART Team</div>
                    <div style="font-size:0.85rem; color:#fff;">ติดตั้งโดยทีมมืออาชีพ</div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===================================================
     3. BRAND PHILOSOPHY
     =================================================== --}}
<section class="reveal" style="background:#050505; padding:6rem 2rem; overflow:hidden; position:relative;">
    {{-- Background number --}}
    <div class="absolute right-0 top-0 select-none pointer-events-none" aria-hidden="true"
         style="font-size:22rem; font-weight:900; color:rgba(255,255,255,0.02); line-height:1; font-family:'Nunito',sans-serif; letter-spacing:-0.05em;">
        DNA
    </div>

    <div class="max-w-4xl mx-auto text-center relative z-10">
        <span class="section-label" style="color:rgba(245,160,20,0.6);">Brand DNA</span>
        <blockquote style="font-size:clamp(1.4rem,3vw,2.2rem); font-weight:600; color:#fff; line-height:1.5; letter-spacing:-0.02em; margin:1.5rem 0 2.5rem;">
            "เราไม่ได้เลือกสินค้าที่ขายง่ายที่สุด<br>
            <span style="color:#f5a014;">แต่เราเลือกสินค้าที่ลูกค้าใช้งานได้ดีที่สุด"</span>
        </blockquote>
        <p style="color:rgba(255,255,255,0.45); font-size:0.95rem; line-height:1.85; max-width:36rem; margin:0 auto 3rem;">
            เพราะเราเชื่อว่าบ้านอัจฉริยะที่ดี ไม่ได้เริ่มจากเทคโนโลยีที่ซับซ้อน
            แต่เริ่มจากการเลือกอุปกรณ์ที่เชื่อถือได้
            และออกแบบระบบให้เหมาะกับการใช้งานจริง
        </p>

        {{-- 5 DNA pillars --}}
        <div class="grid grid-cols-2 md:grid-cols-5 gap-6 text-left mt-4">
            @foreach([
                ['01','คัดเลือก','จากโรงงานที่มีมาตรฐาน ไม่ใช่ราคาถูกที่สุด'],
                ['02','ใส่ใจ','ทุกรายละเอียดตั้งแต่วัสดุจนถึงงาน Design'],
                ['03','ยืดหยุ่น','เริ่มจากจุดเล็กแล้วขยายระบบได้ในอนาคต'],
                ['04','รับผิดชอบ','หากเกิดปัญหา เราพร้อมแก้ไขให้ลูกค้า'],
                ['05','เติบโต','ไปพร้อมกับตัวแทนจำหน่ายของเรา'],
            ] as $pillar)
            <div style="padding:1.25rem; border:1px solid rgba(255,255,255,0.06); background:rgba(255,255,255,0.02);">
                <div style="font-size:0.6rem; letter-spacing:0.3em; color:#f5a014; margin-bottom:0.5rem;">{{ $pillar[0] }}</div>
                <div style="font-size:0.9rem; font-weight:600; color:#fff; margin-bottom:0.4rem;">{{ $pillar[1] }}</div>
                <div style="font-size:0.75rem; color:rgba(255,255,255,0.35); line-height:1.5;">{{ $pillar[2] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===================================================
     4. ECOSYSTEM — ระบบที่ทำงานร่วมกัน
     =================================================== --}}
<section class="section-full reveal" id="ecosystem" style="background:#080508;">
    <div class="absolute inset-0 overflow-hidden">
        <img src="{{ asset('images/projects/system-panel.jpg') }}" alt="S.SMART Smart Home Control Panel"
             class="w-full h-full object-cover" style="opacity:0.22; object-position:center top;">
        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/60 to-black/40"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-black/80 to-transparent"></div>
    </div>

    <div class="section-content w-full">
        <div class="max-w-7xl mx-auto">
            <div class="max-w-xl">
                <span class="section-label">Smart Living Ecosystem</span>
                <h2 class="section-title" style="font-size:clamp(2.5rem,6vw,4.5rem);">
                    ระบบที่<br>
                    <span style="color:#f5a014;">ทำงานร่วมกัน</span>
                </h2>
                <p class="section-subtitle">
                    เราไม่ได้ขายสินค้าเป็นชิ้น — เราสร้าง Smart Living Ecosystem
                    ที่ทุกอุปกรณ์เชื่อมต่อและทำงานร่วมกันเป็นระบบเดียว
                </p>

                <div class="grid grid-cols-2 gap-x-8 gap-y-3 mt-6">
                    @foreach([
                        ['💡','ระบบแสงสว่าง'],
                        ['❄️','ระบบปรับอากาศ'],
                        ['🪟','ระบบม่านอัจฉริยะ'],
                        ['🔐','ระบบรักษาความปลอดภัย'],
                        ['📡','ระบบเซ็นเซอร์'],
                        ['⚡','ระบบจัดการพลังงาน'],
                        ['🏠','ระบบควบคุมบ้าน'],
                        ['🔌','อุปกรณ์เสริม'],
                    ] as $sys)
                    <div class="flex items-center gap-3" style="color:rgba(255,255,255,0.6); font-size:0.85rem;">
                        <span>{{ $sys[0] }}</span>
                        <span>{{ $sys[1] }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===================================================
     5. 8 PRODUCT CATEGORIES
     =================================================== --}}
<section class="reveal" id="systems" style="background:#0a0a0a; padding:6rem 2rem;">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12">
            <span class="section-label">หมวดสินค้าตามการใช้งาน</span>
            <h2 style="font-size:clamp(2rem,4vw,3rem); font-weight:700; letter-spacing:-0.02em; color:#fff; margin-top:0.75rem;">
                ระบบครบ — เลือกได้ตามโปรเจกต์
            </h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-px" style="background:rgba(255,255,255,0.06);">

            {{-- 01 ระบบแสงสว่าง --}}
            <a href="{{ config('site.store_url') }}/collections/lighting" target="_blank" rel="noopener noreferrer"
               class="group reveal" style="background:#0a0a0a; padding:2rem; display:block; transition:background 0.3s; position:relative; overflow:hidden;">
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    <img src="{{ asset('images/projects/lighting-led.jpg') }}" alt="ระบบแสงสว่าง"
                         class="w-full h-full object-cover" style="opacity:0.15;">
                </div>
                <div class="relative z-10">
                    <div style="font-size:0.6rem; letter-spacing:0.3em; color:#f5a014; margin-bottom:1rem;">01</div>
                    <div style="width:36px; height:36px; margin-bottom:1rem; color:rgba(255,255,255,0.4);">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2a7 7 0 017 7c0 3.5-2.5 6.5-5.5 7.4V18a1 1 0 01-1 1h-1a1 1 0 01-1-1v-1.6C7.5 15.5 5 12.5 5 9a7 7 0 017-7zM9 21h6M10 18h4"/></svg>
                    </div>
                    <h3 style="font-size:1rem; font-weight:600; color:#fff; margin-bottom:0.5rem;">ระบบแสงสว่าง</h3>
                    <p style="font-size:0.78rem; color:rgba(255,255,255,0.35); line-height:1.6;">สวิตช์ไฟ Dimmer และ LED Controller ที่ควบคุมได้ผ่านแอปและเสียง</p>
                    <div class="mt-4" style="font-size:0.65rem; letter-spacing:0.15em; text-transform:uppercase; color:#f5a014; opacity:0; group-hover:opacity-100 transition-opacity duration-300;">ดูสินค้า →</div>
                </div>
            </a>

            {{-- 02 ระบบปรับอากาศ --}}
            <a href="{{ config('site.store_url') }}/collections/ac-control" target="_blank" rel="noopener noreferrer"
               class="group reveal" style="background:#0a0a0a; padding:2rem; display:block; transition:background 0.3s; position:relative; overflow:hidden;">
                <div class="relative z-10">
                    <div style="font-size:0.6rem; letter-spacing:0.3em; color:#f5a014; margin-bottom:1rem;">02</div>
                    <div style="width:36px; height:36px; margin-bottom:1rem; color:rgba(255,255,255,0.4);">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2v20M2 12h20M4.93 4.93l14.14 14.14M19.07 4.93L4.93 19.07"/><circle cx="12" cy="12" r="3"/></svg>
                    </div>
                    <h3 style="font-size:1rem; font-weight:600; color:#fff; margin-bottom:0.5rem;">ระบบควบคุมเครื่องปรับอากาศ</h3>
                    <p style="font-size:0.78rem; color:rgba(255,255,255,0.35); line-height:1.6;">ควบคุมแอร์ทุกยี่ห้อผ่านสมาร์ทโฮม ตั้งเวลาและ Scene อัตโนมัติ</p>
                </div>
            </a>

            {{-- 03 ระบบม่าน --}}
            <a href="{{ config('site.store_url') }}/collections/curtain" target="_blank" rel="noopener noreferrer"
               class="group reveal" style="background:#0a0a0a; padding:2rem; display:block; transition:background 0.3s; position:relative; overflow:hidden;">
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    <img src="{{ asset('images/projects/curtain.jpg') }}" alt="ระบบม่านอัจฉริยะ"
                         class="w-full h-full object-cover" style="opacity:0.15;">
                </div>
                <div class="relative z-10">
                    <div style="font-size:0.6rem; letter-spacing:0.3em; color:#f5a014; margin-bottom:1rem;">03</div>
                    <div style="width:36px; height:36px; margin-bottom:1rem; color:rgba(255,255,255,0.4);">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 3h18v2H3zM3 5v16M21 5v16M8 5v16M16 5v16"/></svg>
                    </div>
                    <h3 style="font-size:1rem; font-weight:600; color:#fff; margin-bottom:0.5rem;">ระบบม่านอัจฉริยะ</h3>
                    <p style="font-size:0.78rem; color:rgba(255,255,255,0.35); line-height:1.6;">มอเตอร์ม่านและรางม่านไฟฟ้า รองรับ WiFi และ Zigbee</p>
                </div>
            </a>

            {{-- 04 ระบบรักษาความปลอดภัย --}}
            <a href="{{ config('site.store_url') }}/collections/security" target="_blank" rel="noopener noreferrer"
               class="group reveal" style="background:#0a0a0a; padding:2rem; display:block; transition:background 0.3s; position:relative; overflow:hidden;">
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    <img src="{{ asset('images/projects/smart-lock.jpg') }}" alt="ระบบรักษาความปลอดภัย"
                         class="w-full h-full object-cover" style="opacity:0.15;">
                </div>
                <div class="relative z-10">
                    <div style="font-size:0.6rem; letter-spacing:0.3em; color:#f5a014; margin-bottom:1rem;">04</div>
                    <div style="width:36px; height:36px; margin-bottom:1rem; color:rgba(255,255,255,0.4);">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/><circle cx="12" cy="16" r="1" fill="currentColor"/></svg>
                    </div>
                    <h3 style="font-size:1rem; font-weight:600; color:#fff; margin-bottom:0.5rem;">ระบบรักษาความปลอดภัย</h3>
                    <p style="font-size:0.78rem; color:rgba(255,255,255,0.35); line-height:1.6;">Digital Door Lock, Video Doorbell, กล้อง CCTV เชื่อมต่อสมาร์ทโฮม</p>
                </div>
            </a>

            {{-- 05 ระบบเซ็นเซอร์ --}}
            <a href="{{ config('site.store_url') }}/collections/sensor" target="_blank" rel="noopener noreferrer"
               class="group reveal" style="background:#0a0a0a; padding:2rem; display:block; transition:background 0.3s; position:relative; overflow:hidden;">
                <div class="relative z-10">
                    <div style="font-size:0.6rem; letter-spacing:0.3em; color:#f5a014; margin-bottom:1rem;">05</div>
                    <div style="width:36px; height:36px; margin-bottom:1rem; color:rgba(255,255,255,0.4);">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="3"/><path d="M6.3 6.3a8 8 0 000 11.4M17.7 6.3a8 8 0 010 11.4M3.5 3.5a13 13 0 000 17M20.5 3.5a13 13 0 010 17"/></svg>
                    </div>
                    <h3 style="font-size:1rem; font-weight:600; color:#fff; margin-bottom:0.5rem;">ระบบเซ็นเซอร์</h3>
                    <p style="font-size:0.78rem; color:rgba(255,255,255,0.35); line-height:1.6;">PIR Motion, Door/Window, Temperature, Smoke Sensor เชื่อมระบบ Automation</p>
                </div>
            </a>

            {{-- 06 ระบบพลังงาน --}}
            <a href="{{ config('site.store_url') }}/collections/energy" target="_blank" rel="noopener noreferrer"
               class="group reveal" style="background:#0a0a0a; padding:2rem; display:block; transition:background 0.3s; position:relative; overflow:hidden;">
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    <img src="{{ asset('images/projects/switch-minimal.jpg') }}" alt="ระบบจัดการพลังงาน"
                         class="w-full h-full object-cover" style="opacity:0.15;">
                </div>
                <div class="relative z-10">
                    <div style="font-size:0.6rem; letter-spacing:0.3em; color:#f5a014; margin-bottom:1rem;">06</div>
                    <div style="width:36px; height:36px; margin-bottom:1rem; color:rgba(255,255,255,0.4);">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                    </div>
                    <h3 style="font-size:1rem; font-weight:600; color:#fff; margin-bottom:0.5rem;">ระบบจัดการพลังงาน</h3>
                    <p style="font-size:0.78rem; color:rgba(255,255,255,0.35); line-height:1.6;">Smart Plug, Power Monitor ติดตามและควบคุมการใช้ไฟในแต่ละจุด</p>
                </div>
            </a>

            {{-- 07 ระบบควบคุมบ้าน --}}
            <a href="{{ config('site.store_url') }}/collections/smart-panel" target="_blank" rel="noopener noreferrer"
               class="group reveal" style="background:#0a0a0a; padding:2rem; display:block; transition:background 0.3s; position:relative; overflow:hidden;">
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    <img src="{{ asset('images/projects/cabinet-panel.jpg') }}" alt="ระบบควบคุมบ้านอัจฉริยะ"
                         class="w-full h-full object-cover" style="opacity:0.15;">
                </div>
                <div class="relative z-10">
                    <div style="font-size:0.6rem; letter-spacing:0.3em; color:#f5a014; margin-bottom:1rem;">07</div>
                    <div style="width:36px; height:36px; margin-bottom:1rem; color:rgba(255,255,255,0.4);">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
                    </div>
                    <h3 style="font-size:1rem; font-weight:600; color:#fff; margin-bottom:0.5rem;">ระบบควบคุมบ้านอัจฉริยะ</h3>
                    <p style="font-size:0.78rem; color:rgba(255,255,255,0.35); line-height:1.6;">Smart Panel, Wall Tablet, Scene Controller ศูนย์กลางควบคุมทุกระบบ</p>
                </div>
            </a>

            {{-- 08 อุปกรณ์เสริม --}}
            <a href="{{ config('site.store_url') }}/collections/accessories" target="_blank" rel="noopener noreferrer"
               class="group reveal" style="background:#0a0a0a; padding:2rem; display:block; transition:background 0.3s; position:relative; overflow:hidden;">
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    <img src="{{ asset('images/projects/switch-bedroom.jpg') }}" alt="อุปกรณ์เสริม"
                         class="w-full h-full object-cover" style="opacity:0.15;">
                </div>
                <div class="relative z-10">
                    <div style="font-size:0.6rem; letter-spacing:0.3em; color:#f5a014; margin-bottom:1rem;">08</div>
                    <div style="width:36px; height:36px; margin-bottom:1rem; color:rgba(255,255,255,0.4);">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="3"/><path d="M12 1v4M12 19v4M4.22 4.22l2.83 2.83M16.95 16.95l2.83 2.83M1 12h4M19 12h4M4.22 19.78l2.83-2.83M16.95 7.05l2.83-2.83"/></svg>
                    </div>
                    <h3 style="font-size:1rem; font-weight:600; color:#fff; margin-bottom:0.5rem;">อุปกรณ์ไฟฟ้าและอุปกรณ์เสริม</h3>
                    <p style="font-size:0.78rem; color:rgba(255,255,255,0.35); line-height:1.6;">Gateway, Hub, สายไฟ และอุปกรณ์ประกอบระบบ Smart Home</p>
                </div>
            </a>

        </div>

        <div class="text-center mt-10">
            <a href="{{ config('site.store_url') }}" target="_blank" rel="noopener noreferrer" class="btn-outline">
                ดูสินค้าทั้งหมดในร้าน
            </a>
        </div>
    </div>
</section>

{{-- ===================================================
     6. WHY CHOOSE US — Real project showcase
     =================================================== --}}
<section class="reveal" style="background:#050505; padding:6rem 2rem;">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            {{-- Photo collage --}}
            <div class="grid grid-cols-2 gap-2 reveal">
                <img src="{{ asset('images/projects/hero-panel.jpg') }}" alt="Smart Living Project"
                     class="w-full object-cover col-span-2" style="height:280px;">
                <img src="{{ asset('images/projects/switch-minimal.jpg') }}" alt="Minimal Switch"
                     class="w-full object-cover" style="height:180px; filter:brightness(0.85);">
                <img src="{{ asset('images/projects/curtain.jpg') }}" alt="Smart Curtain"
                     class="w-full object-cover" style="height:180px; filter:brightness(0.85);">
            </div>

            <div>
                <span class="section-label">ทำไมต้อง S.SMART</span>
                <h2 style="font-size:clamp(1.8rem,3.5vw,2.8rem); font-weight:700; letter-spacing:-0.02em; color:#fff; line-height:1.2; margin-bottom:2rem;">
                    มาตรฐานที่<br>
                    <span style="color:#f5a014;">คัดสรรแล้ว</span>
                </h2>

                @foreach([
                    ['โรงงานที่ได้รับการคัดเลือก','เราตรวจสอบโรงงานด้วยตนเอง คัดเฉพาะที่มีมาตรฐานการผลิตสม่ำเสมอ'],
                    ['สินค้าตาม Spec ของ S.SMART','สินค้าหลายรายการ OEM ตาม Spec เพื่อให้เหมาะกับตลาดไทย'],
                    ['Tuya Certified ทุกชิ้น','รองรับ Tuya Smart App เชื่อมต่อข้ามแบรนด์ได้ทันที'],
                    ['รองรับการขยายระบบ','เริ่มจากสวิตช์ 1 ตัว ขยายเป็น Full Smart Home ในอนาคต'],
                    ['ทีมสนับสนุนตัวแทน','มีเครื่องมือ ความรู้ และทีมพร้อมช่วยคุณปิดงาน'],
                ] as $i => $item)
                <div class="flex gap-4 {{ $i < 4 ? 'mb-5' : '' }}">
                    <div style="width:24px; height:24px; flex-shrink:0; margin-top:2px; color:#f5a014;">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                    </div>
                    <div>
                        <div style="font-size:0.9rem; font-weight:600; color:#fff; margin-bottom:3px;">{{ $item[0] }}</div>
                        <div style="font-size:0.8rem; color:rgba(255,255,255,0.4); line-height:1.6;">{{ $item[1] }}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ===================================================
     7. DEALER WELCOME CTA
     =================================================== --}}
<section class="section-full reveal" style="background:#0a0500;">
    <div class="absolute inset-0 overflow-hidden">
        <img src="{{ asset('images/projects/system-panel.jpg') }}" alt=""
             class="w-full h-full object-cover" style="opacity:0.12; object-position:right center;" aria-hidden="true">
        <div class="absolute inset-0 bg-gradient-to-r from-black to-black/60"></div>
        <div class="absolute inset-0" style="background:radial-gradient(ellipse at 20% 50%, rgba(245,160,20,0.06) 0%, transparent 60%);"></div>
    </div>

    <div class="section-content w-full">
        <div class="max-w-7xl mx-auto">
            <span class="section-label" style="color:rgba(245,160,20,0.7);">Dealer Welcome</span>
            <h2 class="section-title" style="font-size:clamp(2.5rem,5.5vw,4rem);">
                พร้อมเริ่มต้น<br>
                <span style="color:#f5a014;">ขายกับเราแล้วหรือยัง?</span>
            </h2>
            <p class="section-subtitle">
                สมัครตัวแทนจำหน่ายวันนี้ — รับสิทธิ์เข้าถึงสินค้าราคาส่ง
                เอกสารการขาย และทีมสนับสนุนพร้อมรับทุกโปรเจกต์
            </p>

            {{-- 3 steps --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8 mb-10">
                @foreach([
                    ['01','ติดต่อเรา','โทรหรือ LINE เพื่อสมัครเป็นตัวแทน'],
                    ['02','รับ Catalog','รับสินค้า Catalog + ราคาส่งทันที'],
                    ['03','เริ่มขาย','เราพร้อมสนับสนุนทุกโปรเจกต์'],
                ] as $step)
                <div style="border-left:2px solid rgba(245,160,20,0.4); padding-left:1.5rem;">
                    <div style="font-size:0.6rem; letter-spacing:0.3em; color:#f5a014; margin-bottom:0.5rem;">STEP {{ $step[0] }}</div>
                    <div style="font-size:1.05rem; font-weight:600; color:#fff; margin-bottom:0.3rem;">{{ $step[1] }}</div>
                    <div style="font-size:0.8rem; color:rgba(255,255,255,0.4);">{{ $step[2] }}</div>
                </div>
                @endforeach
            </div>

            <div class="flex flex-wrap gap-4">
                <a href="{{ route('dealer') }}" class="btn-gold">ดูรายละเอียดโปรแกรมตัวแทน</a>
                <a href="https://line.me/ti/p/~{{ config('site.line_id') }}" target="_blank" rel="noopener noreferrer" class="btn-outline">
                    LINE: {{ config('site.line_id') }}
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ===================================================
     8. CONTACT
     =================================================== --}}
<section class="reveal" id="contact" style="background:#080808; padding:6rem 2rem;">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            <div>
                <span class="section-label">ติดต่อเรา</span>
                <h2 style="font-size:clamp(2rem,4vw,3rem); font-weight:700; letter-spacing:-0.02em; color:#fff; line-height:1.1; margin-bottom:2rem;">
                    พูดคุยกับทีมงาน<br>
                    <span style="color:#f5a014;">ได้เลยตอนนี้</span>
                </h2>
                <p style="color:rgba(255,255,255,0.45); font-size:0.95rem; line-height:1.85; margin-bottom:2.5rem;">
                    ทีมงาน S.SMART พร้อมให้คำปรึกษาเรื่องสินค้า ราคาตัวแทน และโซลูชันที่เหมาะกับโปรเจกต์ของคุณ
                </p>

                <div class="space-y-5">
                    <div class="flex gap-4">
                        <div style="width:40px; height:40px; border:1px solid rgba(245,160,20,0.3); display:flex; align-items:center; justify-content:center; flex-shrink:0; color:#f5a014; font-size:0.65rem; letter-spacing:0.1em;">TEL</div>
                        <div>
                            <a href="tel:{{ config('site.phone_1') }}" class="block" style="color:#fff; font-size:0.95rem; text-decoration:none; margin-bottom:2px;">09 8295 5259</a>
                            <a href="tel:{{ config('site.phone_2') }}" class="block" style="color:rgba(255,255,255,0.5); font-size:0.95rem; text-decoration:none;">09 2955 5455</a>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div style="width:40px; height:40px; border:1px solid rgba(245,160,20,0.3); display:flex; align-items:center; justify-content:center; flex-shrink:0; color:#f5a014; font-size:0.65rem; letter-spacing:0.1em;">LINE</div>
                        <a href="https://line.me/ti/p/~{{ config('site.line_id') }}" target="_blank" rel="noopener noreferrer" style="color:rgba(255,255,255,0.7); font-size:0.95rem; text-decoration:none; align-self:center;">{{ config('site.line_id') }}</a>
                    </div>
                    <div class="flex gap-4">
                        <div style="width:40px; height:40px; border:1px solid rgba(245,160,20,0.3); display:flex; align-items:center; justify-content:center; flex-shrink:0; color:#f5a014; font-size:0.65rem; letter-spacing:0.1em;">FB</div>
                        <a href="https://facebook.com/{{ config('site.facebook') }}" target="_blank" rel="noopener noreferrer" style="color:rgba(255,255,255,0.7); font-size:0.95rem; text-decoration:none; align-self:center;">ssmartautomation</a>
                    </div>
                    <div class="flex gap-4">
                        <div style="width:40px; height:40px; border:1px solid rgba(245,160,20,0.3); display:flex; align-items:center; justify-content:center; flex-shrink:0; color:#f5a014; font-size:0.65rem; letter-spacing:0.1em;">EMAIL</div>
                        <a href="mailto:ssmartautomationsystems@gmail.com" style="color:rgba(255,255,255,0.7); font-size:0.9rem; text-decoration:none; align-self:center; word-break:break-all;">ssmartautomationsystems@gmail.com</a>
                    </div>
                </div>
            </div>

            <div>
                <div style="background:rgba(255,255,255,0.03); border:1px solid rgba(255,255,255,0.06); padding:2rem;">
                    <h3 style="font-size:0.75rem; letter-spacing:0.2em; text-transform:uppercase; color:rgba(255,255,255,0.3); margin-bottom:1.5rem;">ที่อยู่บริษัท</h3>
                    <p style="color:rgba(255,255,255,0.6); font-size:0.9rem; line-height:2;">
                        บริษัท เอส.สมาร์ท ออโต้เมชั่น ซิสเท็มส์ จำกัด (สำนักงานใหญ่)<br>
                        44/227 หมู่ 8 ถ.ลำลูกกา<br>
                        ต.ลาดสวาย อ.ลำลูกกา จ.ปทุมธานี 12150<br>
                        <span style="color:rgba(255,255,255,0.3); font-size:0.8rem;">เลขที่ผู้เสียภาษี 0135561018875</span>
                    </p>

                    <div style="margin-top:1.5rem; padding-top:1.5rem; border-top:1px solid rgba(255,255,255,0.06);">
                        <h3 style="font-size:0.75rem; letter-spacing:0.2em; text-transform:uppercase; color:rgba(255,255,255,0.3); margin-bottom:1rem;">ช่องทางออนไลน์</h3>
                        <div class="flex flex-col gap-2">
                            <a href="{{ config('site.store_url') }}" target="_blank" rel="noopener noreferrer" style="color:rgba(255,255,255,0.5); font-size:0.85rem; text-decoration:none;">🌐 www.ssmartluxuryswitch.com</a>
                            <a href="https://youtube.com/channel/UCNZGpnqsaLQeGbzUVyn7Yrg?sub_confirmation=1" target="_blank" rel="noopener noreferrer" style="color:rgba(255,255,255,0.5); font-size:0.85rem; text-decoration:none;">▶ YouTube Channel</a>
                            <a href="https://instagram.com/{{ config('site.instagram') }}" target="_blank" rel="noopener noreferrer" style="color:rgba(255,255,255,0.5); font-size:0.85rem; text-decoration:none;">📷 @{{ config('site.instagram') }}</a>
                        </div>
                    </div>

                    <div style="margin-top:1.5rem; padding-top:1.5rem; border-top:1px solid rgba(255,255,255,0.06);">
                        <a href="{{ config('site.store_url') }}" target="_blank" rel="noopener noreferrer" class="btn-gold" style="display:block; text-align:center;">
                            เข้าสู่ร้านค้าออนไลน์
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
