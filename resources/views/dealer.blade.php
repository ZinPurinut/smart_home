@extends('layouts.app')

@section('title', 'S.SMART — ร่วมเป็นตัวแทนจำหน่าย | สร้างธุรกิจ Smart Living ไปพร้อมกับเรา')

@section('content')

{{-- ===================================================
     SECTION 1 : HERO — Business Partnership
     ภาพจริง: ทีมงาน S.SMART แนะนำระบบให้ลูกค้าหน้างาน
     =================================================== --}}
<section class="section-full" style="background:#030303;">
    <div class="absolute inset-0 overflow-hidden">
        <img src="{{ asset('images/proof/team-client-tablet.jpg') }}" alt="ทีมงาน S.SMART แนะนำระบบให้ลูกค้าหน้างานจริง"
             class="w-full h-full object-cover" style="opacity:0.35; object-position:center 22%;">
        <div class="absolute inset-0 bg-gradient-to-r from-black via-black/75 to-transparent"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-black/40"></div>
    </div>

    <div class="section-content w-full">
        <div class="max-w-7xl mx-auto">
            <p class="section-label reveal" style="color:rgba(201,169,110,0.85);">Business Partnership</p>
            <h1 class="reveal" style="font-size:clamp(2.6rem,6.5vw,5rem); font-weight:700; letter-spacing:-0.03em; line-height:1.1; color:#fff; margin-bottom:1.25rem;">
                ร่วมเป็นตัวแทนจำหน่าย<br>
                <span class="gradient-gold">S.SMART</span>
            </h1>
            <p class="reveal" style="font-size:1.05rem; color:rgba(255,255,255,0.6); max-width:32rem; line-height:1.8; margin-bottom:2.5rem;">
                สร้างธุรกิจ Smart Living ไปพร้อมกับเรา<br>
                สินค้าครบวงจร ระบบสนับสนุนพร้อม เริ่มต้นได้ทันที
            </p>
            <div class="flex flex-wrap gap-4 reveal">
                <a href="#apply" class="btn-gold">สมัครเป็นตัวแทน</a>
                <a href="#benefits" class="btn-outline">ดูสิทธิประโยชน์</a>
            </div>
        </div>
    </div>

    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2" style="opacity:0.35;">
        <span class="text-xs tracking-widest uppercase text-white">Scroll</span>
        <div class="w-px h-12 bg-gradient-to-b from-white to-transparent animate-pulse"></div>
    </div>
</section>

{{-- ===================================================
     SECTION 2 : ทำไมต้องเลือก S.SMART — 5 Cards พร้อมภาพจริง
     =================================================== --}}
<section class="reveal" id="why" style="background:#0a0a0a; padding:6rem 2rem;">
    <div class="max-w-7xl mx-auto">
        <div class="mb-14 text-center">
            <span class="section-label">เหตุผลที่ควรร่วมงานกับเรา</span>
            <h2 style="font-size:clamp(2rem,4.5vw,3.2rem); font-weight:700; letter-spacing:-0.02em; color:#fff; margin-top:0.75rem;">
                ทำไมต้องเลือก <span class="gradient-gold">S.SMART</span>
            </h2>
        </div>

        @php
        $whyCards = [
            ['ประสบการณ์ในธุรกิจ Smart Living','เรามีประสบการณ์จากโครงการจริง และเข้าใจการใช้งานในบ้านทุกประเภท','images/proof/team-ladder-install.jpg','ทีมงานหน้างานจริง'],
            ['สินค้าคัดสรรคุณภาพสูง','เราเลือกผู้ผลิตที่มีมาตรฐาน และพัฒนาสินค้าหลายรายการภายใต้แบรนด์ S.SMART','images/proof/dimmer-white-glass.jpg','สินค้าแบรนด์ S.SMART'],
            ['ระบบครบวงจร','ลูกค้าสามารถเริ่มจากจุดเล็ก ๆ และต่อยอดได้ทั้งระบบ','images/proof/panel-thermostat-scene.jpg','ระบบที่ทำงานร่วมกัน'],
            ['ทีมสนับสนุน','ช่วยเลือกสินค้า ออกแบบระบบ และให้คำปรึกษาก่อนและหลังการขาย','images/proof/team-consult-homeowner.jpg','ดูแลลูกค้าถึงหน้างาน'],
            ['เติบโตไปด้วยกัน','เราไม่ได้มองหาผู้ซื้อสินค้า แต่มองหาพันธมิตรระยะยาว','images/proof/team-explain-client.jpg','ส่งมอบงานร่วมกับลูกค้า'],
        ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-px" style="background:rgba(255,255,255,0.06);">
            @foreach($whyCards as $i => $card)
            <div class="reveal group" style="background:#0a0a0a; transition-delay:{{ $i * 70 }}ms;">
                <div style="aspect-ratio:4/3; overflow:hidden; position:relative;">
                    <img src="{{ asset($card[2]) }}" alt="{{ $card[3] }}"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                         style="opacity:0.6;">
                    <div class="absolute bottom-2 left-3" style="font-size:0.55rem; letter-spacing:0.2em; text-transform:uppercase; color:rgba(255,255,255,0.5);">{{ $card[3] }}</div>
                </div>
                <div style="padding:1.5rem 1.25rem;">
                    <div style="font-size:0.6rem; letter-spacing:0.3em; color:#c9a96e; margin-bottom:0.6rem;">{{ str_pad($i+1,2,'0',STR_PAD_LEFT) }}</div>
                    <h3 style="font-size:0.92rem; font-weight:600; color:#fff; margin-bottom:0.5rem; line-height:1.4;">{{ $card[0] }}</h3>
                    <p style="font-size:0.78rem; color:rgba(255,255,255,0.4); line-height:1.65;">{{ $card[1] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===================================================
     PROOF STRIP — ผลงานจริง สร้างความน่าเชื่อถือ
     =================================================== --}}
<section class="reveal" style="background:#000; padding:3rem 0;">
    <p style="text-align:center; font-size:0.65rem; letter-spacing:0.35em; text-transform:uppercase; color:rgba(255,255,255,0.3); margin-bottom:1.5rem;">
        ผลงานติดตั้งจริงโดยทีมงานและตัวแทน S.SMART
    </p>
    <div class="grid grid-cols-3 md:grid-cols-6 gap-1 px-1">
        @foreach([
            ['images/proof/smartlock-teak-villa.jpg','Smart Lock งาน Pool Villa'],
            ['images/proof/switch-black-marble.jpg','สวิตช์ในห้องนั่งเล่น'],
            ['images/proof/tech-tablet-check.jpg','ทีมงานตรวจระบบหน้างาน'],
            ['images/proof/curtain-sheer-city.jpg','ม่านไฟฟ้าในคอนโด'],
            ['images/proof/panel-scene-6key.jpg','Scene Panel งาน Interior'],
            ['images/proof/lighting-led-wardrobe.jpg','ไฟ LED บิวท์อิน'],
        ] as $p)
        <div style="aspect-ratio:1/1; overflow:hidden;">
            <img src="{{ asset($p[0]) }}" alt="{{ $p[1] }}" class="w-full h-full object-cover hover:scale-105 transition-transform duration-700" style="filter:brightness(0.8);">
        </div>
        @endforeach
    </div>
</section>

{{-- ===================================================
     SECTION 3 : โปรแกรมนี้เหมาะกับใคร — 6 การ์ดพร้อมภาพจริง
     TODO: รอข้อความ Final จากพี่ (ตอนนี้เป็น Draft)
     =================================================== --}}
<section class="reveal" id="who" style="background:#050505; padding:6rem 2rem;">
    <div class="max-w-7xl mx-auto">
        <div class="mb-14">
            <span class="section-label">เหมาะกับใคร</span>
            <h2 style="font-size:clamp(2rem,4.5vw,3.2rem); font-weight:700; letter-spacing:-0.02em; color:#fff; margin-top:0.75rem;">
                โปรแกรมนี้เหมาะกับใคร
            </h2>
        </div>

        @php
        $audiences = [
            ['เจ้าของกิจการรับเหมา','เพิ่มมูลค่างานรับเหมาด้วยแพ็กเกจ Smart Living ที่มีทีมช่วยออกแบบและสนับสนุนการติดตั้ง','images/proof/site-consult.jpg'],
            ['สถาปนิก','มีทีมช่วยวางระบบตั้งแต่ขั้นตอนออกแบบ พร้อม Spec และ Wiring Diagram สำหรับงานเขียนแบบ','images/proof/house-modern-exterior.jpg'],
            ['Interior Designer','สวิตช์และอุปกรณ์ดีไซน์พรีเมียม 4 เฉดสี เข้ากับงานตกแต่งได้ทุกสไตล์','images/proof/wood-mosaic-interior.jpg'],
            ['บริษัทระบบไฟฟ้า','ต่อยอดงานระบบไฟฟ้าเดิมสู่งาน Smart Home ด้วยสินค้าครบทั้ง 8 หมวด','images/proof/wiring-hand.jpg'],
            ['ผู้รับเหมาตกแต่ง','เพิ่มบริการใหม่ให้ลูกค้าเดิม โดยมีทีมเทคนิคของ S.SMART สนับสนุนทุกขั้นตอน','images/proof/team-wiring.jpg'],
            ['ร้านวัสดุก่อสร้าง','เพิ่มไลน์สินค้า Smart Home ที่ Margin ดี พร้อมสื่อการขายและการอบรมจากบริษัท','images/proof/panel-installed-wall.jpg'],
        ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($audiences as $i => $a)
            <div class="reveal border border-white/5 hover:border-[#c9a96e]/30 transition-all duration-300 overflow-hidden" style="background:#0a0a0a; transition-delay:{{ $i * 60 }}ms;">
                <div style="aspect-ratio:16/8; overflow:hidden; border-bottom:1px solid rgba(255,255,255,0.04);">
                    <img src="{{ asset($a[2]) }}" alt="{{ $a[0] }} — ตัวแทนจำหน่าย S.SMART"
                         class="w-full h-full object-cover" style="opacity:0.75;">
                </div>
                <div style="padding:1.5rem;">
                    <h3 style="color:#fff; font-weight:600; font-size:0.95rem; margin-bottom:0.5rem;">{{ $a[0] }}</h3>
                    <p style="color:rgba(255,255,255,0.4); font-size:0.8rem; line-height:1.7;">{{ $a[1] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===================================================
     SECTION 4 : สิทธิประโยชน์ของตัวแทน — 8 กล่อง
     =================================================== --}}
<section class="reveal" id="benefits" style="background:#0a0a0a; padding:6rem 2rem;">
    <div class="max-w-7xl mx-auto">
        <div class="mb-14">
            <span class="section-label">สิ่งที่ได้รับ</span>
            <h2 style="font-size:clamp(2rem,4.5vw,3.2rem); font-weight:700; letter-spacing:-0.02em; color:#fff; margin-top:0.75rem;">
                สิทธิประโยชน์ของตัวแทน
            </h2>
        </div>

        @php
        $benefits = [
            ['สิทธิ์ซื้อราคาตัวแทน','Margin ดี แข่งขันได้ในตลาด'],
            ['สื่อการตลาดของบริษัท','ใช้ภาพสินค้า HD วิดีโอ และ Brochure ได้ทันที'],
            ['รับการอบรมออนไลน์','คอร์ส 101 Home Automation ฟรี พร้อม Certificate'],
            ['ปรึกษาการออกแบบระบบ','ทีมช่วยออกแบบระบบและ Wiring Diagram ให้ทุกโปรเจกต์'],
            ['สนับสนุนด้านเทคนิค','ทีม Support คนไทย ช่วยแก้ปัญหาหน้างาน'],
            ['อัปเดตสินค้าใหม่','รับข้อมูลสินค้าใหม่ก่อนใคร'],
            ['เข้าร่วม Partner Academy','พัฒนาความรู้และทักษะการขายอย่างต่อเนื่อง'],
            ['โอกาสรับงานจากบริษัท','ส่งต่องานในพื้นที่ให้ตัวแทน (ในอนาคต)'],
        ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-px" style="background:rgba(255,255,255,0.06);">
            @foreach($benefits as $i => $b)
            <div class="reveal" style="background:#0a0a0a; padding:1.75rem; transition-delay:{{ $i * 50 }}ms;">
                <div style="font-size:0.6rem; letter-spacing:0.3em; color:#c9a96e; margin-bottom:0.75rem;">{{ str_pad($i+1,2,'0',STR_PAD_LEFT) }}</div>
                <h3 style="color:#fff; font-weight:600; font-size:0.9rem; margin-bottom:0.5rem;">{{ $b[0] }}</h3>
                <p style="color:rgba(255,255,255,0.4); font-size:0.78rem; line-height:1.65;">{{ $b[1] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===================================================
     SECTION 5 : 8 หมวดผลิตภัณฑ์ — Cross Sell
     =================================================== --}}
<section class="reveal" style="background:#050505; padding:6rem 2rem;">
    <div class="max-w-7xl mx-auto">
        <div class="mb-14 text-center">
            <span class="section-label">โอกาสทางธุรกิจ</span>
            <h2 style="font-size:clamp(2rem,4.5vw,3.2rem); font-weight:700; letter-spacing:-0.02em; color:#fff; margin-top:0.75rem;">
                ขายได้ทั้งระบบ <span class="gradient-gold">ไม่จำกัดเพียงสินค้าเดียว</span>
            </h2>
            <p style="color:rgba(255,255,255,0.4); font-size:0.9rem; margin-top:0.75rem;">
                ลูกค้าเริ่มจากสวิตช์ 1 ตัว — ตัวแทนต่อยอดขายได้ครบทั้ง 8 หมวด
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
            @foreach($categories as $slug => $cat)
            <a href="{{ route('category', $slug) }}"
               class="reveal block border border-white/5 p-5 text-center hover:border-[#c9a96e]/40 transition-all duration-300"
               style="transition-delay:{{ $loop->index * 50 }}ms;">
                <div style="font-size:0.6rem; letter-spacing:0.25em; color:#c9a96e; margin-bottom:0.6rem;">{{ $cat['no'] }}</div>
                <div style="color:rgba(255,255,255,0.75); font-size:0.82rem; font-weight:600; line-height:1.4;">{{ $cat['name'] }}</div>
            </a>
            @endforeach
        </div>
    </div>
</section>

{{-- ===================================================
     SECTION 6 : ขั้นตอนการเป็นตัวแทน — Timeline แนวนอน
     =================================================== --}}
<section class="reveal" style="background:#0a0a0a; padding:6rem 2rem;">
    <div class="max-w-7xl mx-auto">
        <div class="mb-14 text-center">
            <span class="section-label">เริ่มต้นง่าย</span>
            <h2 style="font-size:clamp(2rem,4.5vw,3.2rem); font-weight:700; letter-spacing:-0.02em; color:#fff; margin-top:0.75rem;">
                ขั้นตอนการเป็นตัวแทน
            </h2>
        </div>

        @php
        $steps = ['สมัคร','พูดคุยกับทีมงาน','Welcome Kit','อบรมออนไลน์','ทดลองใช้งาน Starter Kit','เริ่มขาย','ทีมงานสนับสนุน'];
        @endphp

        {{-- Desktop: horizontal timeline --}}
        <div class="hidden lg:block relative">
            <div class="absolute top-6 left-0 right-0 h-px" style="background:linear-gradient(to right, transparent, rgba(201,169,110,0.4) 8%, rgba(201,169,110,0.4) 92%, transparent);"></div>
            <div class="grid grid-cols-7 gap-2 relative">
                @foreach($steps as $i => $step)
                <div class="reveal text-center" style="transition-delay:{{ $i * 90 }}ms;">
                    <div style="width:3rem; height:3rem; margin:0 auto 1rem; border:1px solid rgba(201,169,110,0.5); border-radius:50%; background:#0a0a0a; display:flex; align-items:center; justify-content:center; position:relative; z-index:1;">
                        <span style="color:#c9a96e; font-size:0.75rem; font-weight:700; font-family:'Nunito',sans-serif;">{{ str_pad($i+1,2,'0',STR_PAD_LEFT) }}</span>
                    </div>
                    <div style="color:#fff; font-size:0.82rem; font-weight:600; line-height:1.4;">{{ $step }}</div>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Mobile: vertical timeline --}}
        <div class="lg:hidden relative">
            <div class="absolute left-6 top-0 bottom-0 w-px" style="background:rgba(201,169,110,0.25);"></div>
            <div class="space-y-6">
                @foreach($steps as $i => $step)
                <div class="reveal flex gap-5 items-center" style="transition-delay:{{ $i * 70 }}ms;">
                    <div style="width:3rem; height:3rem; flex-shrink:0; border:1px solid rgba(201,169,110,0.5); border-radius:50%; background:#0a0a0a; display:flex; align-items:center; justify-content:center; position:relative; z-index:1;">
                        <span style="color:#c9a96e; font-size:0.75rem; font-weight:700;">{{ str_pad($i+1,2,'0',STR_PAD_LEFT) }}</span>
                    </div>
                    <div style="color:#fff; font-size:0.9rem; font-weight:600;">{{ $step }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ===================================================
     SECTION 7 : FAQ — Accordion
     =================================================== --}}
<section class="reveal" style="background:#050505; padding:6rem 2rem;">
    <div class="max-w-3xl mx-auto">
        <div class="mb-14">
            <span class="section-label">FAQ</span>
            <h2 style="font-size:clamp(2rem,4.5vw,3rem); font-weight:700; letter-spacing:-0.02em; color:#fff; margin-top:0.75rem;">
                คำถามที่พบบ่อย
            </h2>
        </div>

        @php
        $faqs = [
            ['ต้องสต็อกสินค้าหรือไม่?','ไม่บังคับ สามารถสั่งตามออเดอร์ลูกค้าได้ ทีมงานจะแจ้ง Lead Time ให้ทราบล่วงหน้า'],
            ['มีค่าใช้จ่ายในการสมัครหรือไม่?','ไม่มีค่าใช้จ่ายในการสมัครเป็นตัวแทนจำหน่าย พูดคุยกับทีมงานได้ฟรี'],
            ['ต้องอบรมก่อนขายหรือไม่?','แนะนำให้เรียนคอร์สออนไลน์ "101 Home Automation" ฟรีก่อนเริ่มขาย เพื่อให้แนะนำลูกค้าได้อย่างมั่นใจ'],
            ['บริษัทช่วยออกแบบระบบไหม?','ช่วยครับ ทีม Technical Support ช่วยออกแบบระบบ ทำ Wiring Diagram และแนะนำสินค้าที่เหมาะกับแต่ละโปรเจกต์'],
            ['มีบริการหลังการขายหรือไม่?','มีครับ สินค้ามีการรับประกัน พร้อมทีม Support คนไทยช่วยแก้ปัญหาทั้งตัวแทนและลูกค้าปลายทาง'],
        ];
        @endphp

        <div class="space-y-3">
            @foreach($faqs as $i => $faq)
            <div class="reveal faq-item border border-white/8 overflow-hidden" style="transition-delay:{{ $i * 70 }}ms;">
                <button class="faq-toggle w-full flex justify-between items-center p-5 text-left" onclick="toggleFaq(this)">
                    <span style="color:#fff; font-size:0.9rem; font-weight:500;">{{ $faq[0] }}</span>
                    <span class="faq-icon" style="color:#c9a96e; font-size:1.2rem; flex-shrink:0; transition:transform .3s;">+</span>
                </button>
                <div class="faq-answer" style="max-height:0; overflow:hidden; transition:max-height .3s ease;">
                    <p style="color:rgba(255,255,255,0.5); font-size:0.85rem; line-height:1.7; padding:0 1.25rem 1.25rem;">{{ $faq[1] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===================================================
     SECTION 8 : ONBOARDING — สัปดาห์แรกหลังสมัคร
     TODO: รอภาพ Welcome Kit จริงจากพี่ (ตอนนี้เป็นกล่อง Placeholder)
     =================================================== --}}
<section class="reveal" style="background:#0a0a0a; padding:6rem 2rem;">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <span class="section-label">Onboarding System</span>
                <h2 style="font-size:clamp(1.8rem,4vw,2.8rem); font-weight:700; letter-spacing:-0.02em; color:#fff; line-height:1.2; margin:0.75rem 0 1rem;">
                    สิ่งที่คุณจะได้รับ<br>
                    <span style="color:#c9a96e;">ในสัปดาห์แรกหลังสมัคร</span>
                </h2>
                <p style="color:rgba(255,255,255,0.45); font-size:0.9rem; line-height:1.8; margin-bottom:2rem;">
                    สมัครแล้วไม่ได้ถูกปล่อยให้ขายเอง — เรามีระบบ Onboarding
                    รองรับตัวแทนใหม่ทุกคนตั้งแต่วันแรก
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    @foreach([
                        'Welcome Kit',
                        'Quick Start Guide',
                        'สิทธิ์เข้า Dealer Welcome Center',
                        'สิทธิ์เข้า Partner Academy',
                        'คำแนะนำการเลือก Starter Kit',
                        'นัดพูดคุยกับทีมงาน',
                    ] as $i => $item)
                    <div class="flex items-center gap-3 p-4 border border-white/5" style="background:rgba(255,255,255,0.02);">
                        <span style="color:#c9a96e; font-size:0.7rem; font-weight:700; font-family:'Nunito',sans-serif; flex-shrink:0;">{{ str_pad($i+1,2,'0',STR_PAD_LEFT) }}</span>
                        <span style="color:rgba(255,255,255,0.75); font-size:0.85rem;">{{ $item }}</span>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Welcome Kit image placeholder --}}
            <div class="reveal">
                <div style="aspect-ratio:4/3; border:1px dashed rgba(201,169,110,0.3); background:linear-gradient(135deg, rgba(201,169,110,0.05), rgba(0,0,0,0)); display:flex; flex-direction:column; align-items:center; justify-content:center; gap:1rem; text-align:center; padding:2rem;">
                    <div style="width:64px; height:64px; border:1px solid rgba(201,169,110,0.4); border-radius:50%; display:flex; align-items:center; justify-content:center; color:#c9a96e; font-size:1.5rem;">📦</div>
                    <div>
                        <div style="font-size:0.7rem; letter-spacing:0.3em; text-transform:uppercase; color:#c9a96e; margin-bottom:0.5rem;">S.SMART Welcome Kit</div>
                        <div style="font-size:0.8rem; color:rgba(255,255,255,0.35); line-height:1.7;">ภาพ Welcome Kit จริง<br>กำลังจัดเตรียม</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===================================================
     SECTION 9 : ปิดการขาย — CTA
     =================================================== --}}
<section class="reveal" id="apply" style="background:#0a0500; padding:7rem 2rem; position:relative; overflow:hidden;">
    <div class="absolute inset-0" style="background:radial-gradient(ellipse at 50% 100%, rgba(201,169,110,0.1) 0%, transparent 60%);"></div>
    <div class="max-w-3xl mx-auto text-center relative z-10">
        <p class="section-label mx-auto reveal" style="color:rgba(201,169,110,0.7);">เริ่มต้นวันนี้</p>
        <h2 class="reveal" style="font-size:clamp(2rem,5vw,3.5rem); font-weight:700; letter-spacing:-0.02em; color:#fff; margin:0.75rem 0 1rem; line-height:1.15;">
            พร้อมร่วมเป็นพันธมิตรกับ<br>
            <span class="gradient-gold">S.SMART</span> แล้วหรือยัง
        </h2>
        <p class="reveal" style="color:rgba(255,255,255,0.45); margin-bottom:2.5rem; line-height:1.8; font-size:0.95rem;">
            สมัครวันนี้ พูดคุยกับทีมงานได้ฟรี<br>
            ไม่มีค่าใช้จ่ายในการสมัครเป็นตัวแทนจำหน่าย
        </p>
        <div class="flex flex-wrap gap-4 justify-center reveal">
            <a href="https://line.me/ti/p/~{{ config('site.line_id') }}" target="_blank" rel="noopener noreferrer" class="btn-gold" style="padding:0.9rem 3rem;">
                สมัครผ่าน LINE
            </a>
            <a href="tel:{{ config('site.phone_1') }}" class="btn-outline" style="padding:0.9rem 2.5rem;">
                โทรสอบถาม 09 8295 5259
            </a>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
function toggleFaq(btn) {
    var answer = btn.nextElementSibling;
    var icon = btn.querySelector('.faq-icon');
    var isOpen = answer.style.maxHeight && answer.style.maxHeight !== '0px';
    answer.style.maxHeight = isOpen ? '0' : answer.scrollHeight + 'px';
    icon.textContent = isOpen ? '+' : '−';
    icon.style.transform = isOpen ? '' : 'rotate(45deg)';
}
</script>
@endpush
