@extends('layouts.app')

@section('title', 'S.SMART — Smart Living Architect | ผู้ออกแบบประสบการณ์การอยู่อาศัยด้วยเทคโนโลยี')

@section('content')

{{-- ===================================================
     1. HERO — Designing Intelligent Living
     Background: Lifestyle คือพระเอก (ไม่ใช้ภาพสินค้า)
     TODO: เมื่อได้ภาพ Luxury Modern House ช่วงเย็น เปิดไฟ Warm White
           ให้เปลี่ยน src ด้านล่างเป็น images/hero/luxury-house-dusk.jpg
     =================================================== --}}
<section class="section-full" id="hero" style="background:#050505;">
    <div class="absolute inset-0 overflow-hidden">
        <img src="{{ asset('images/proof/curtain-sheer-city.jpg') }}" alt="S.SMART Smart Living"
             class="w-full h-full object-cover object-center" style="opacity:0.45;">
        {{-- Warm-white color grade ให้ภาพอบอุ่นแบบช่วงเย็น --}}
        <div class="absolute inset-0" style="background:linear-gradient(135deg, rgba(60,35,5,0.55) 0%, rgba(10,8,5,0.75) 60%, #050505 100%);"></div>
        <div class="absolute inset-0" style="background:radial-gradient(ellipse 70% 60% at 75% 45%, rgba(201,169,110,0.14) 0%, transparent 65%);"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-black/40"></div>
    </div>

    <div class="section-content w-full">
        <div class="max-w-7xl mx-auto">
            <p class="section-label hero-item" style="--delay:0.1s; color:rgba(201,169,110,0.85);">Designing Intelligent Living</p>
            <h1 class="hero-item" style="--delay:0.25s; font-size:clamp(3.2rem,8vw,6.5rem); font-weight:700; letter-spacing:-0.03em; line-height:1; color:#fff; margin-bottom:0.75rem;">
                S.SMART
            </h1>
            <p class="hero-item" style="--delay:0.35s; font-size:clamp(1.3rem,3vw,2.2rem); font-weight:600; letter-spacing:-0.01em; color:#c9a96e; margin-bottom:1.5rem;">
                Smart Living Architect
            </p>
            <p class="hero-item" style="--delay:0.5s; font-size:1.05rem; color:rgba(255,255,255,0.6); max-width:30rem; line-height:1.8; margin-bottom:2.5rem;">
                เราออกแบบประสบการณ์การอยู่อาศัย<br>
                ด้วยเทคโนโลยีที่เรียบง่าย สวยงาม และเชื่อถือได้
            </p>
            <div class="flex flex-wrap gap-4 hero-item" style="--delay:0.65s;">
                <a href="#about" class="btn-gold">เกี่ยวกับเรา</a>
                <a href="#categories" class="btn-outline">หมวดหมู่สินค้า</a>
            </div>
        </div>
    </div>

    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2" style="opacity:0.35;">
        <span class="text-xs tracking-widest uppercase text-white">Scroll</span>
        <div class="w-px h-12 bg-gradient-to-b from-white to-transparent animate-pulse"></div>
    </div>
</section>

{{-- ===================================================
     2. PHILOSOPHY WORDING
     =================================================== --}}
<section class="reveal" style="background:#000; padding:7rem 2rem; text-align:center;">
    <div class="max-w-4xl mx-auto">
        <blockquote style="font-size:clamp(1.6rem,3.5vw,2.6rem); font-weight:600; color:#fff; line-height:1.4; letter-spacing:-0.02em; margin-bottom:2rem;">
            Technology should blend naturally<br>
            <span class="gradient-gold">into everyday living.</span>
        </blockquote>
        <p style="color:rgba(255,255,255,0.5); font-size:1rem; line-height:2; max-width:32rem; margin:0 auto;">
            เราเชื่อว่าเทคโนโลยีที่ดีที่สุด<br>
            คือเทคโนโลยีที่กลมกลืนกับการใช้ชีวิต<br>
            <span style="color:rgba(255,255,255,0.35);">ไม่ซับซ้อน ไม่รบกวน แต่พร้อมดูแลทุกช่วงเวลาของชีวิต</span>
        </p>
    </div>
</section>

{{-- ===================================================
     3. ABOUT — เราเป็นใคร (Story)
     =================================================== --}}
<section class="reveal" id="about" style="background:#0a0a0a; padding:6rem 2rem;">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <span class="section-label">เกี่ยวกับเรา</span>
                <h2 style="font-size:clamp(2rem,4vw,3rem); font-weight:700; letter-spacing:-0.02em; color:#fff; line-height:1.15; margin-bottom:1.5rem;">
                    เราไม่ใช่ผู้ขาย Smart Home<br>
                    <span style="color:#c9a96e;">เราคือผู้ออกแบบ Smart Living</span>
                </h2>
                <div class="space-y-5">
                    <p style="color:rgba(255,255,255,0.5); font-size:0.98rem; line-height:1.9;">
                        S.SMART เริ่มต้นจากการพัฒนาสวิตช์ไฟระดับพรีเมียม
                        ก่อนต่อยอดสู่การออกแบบระบบ Smart Living
                        ที่เชื่อมโยงทุกอุปกรณ์ภายในบ้านเข้าด้วยกัน
                    </p>
                    <p style="color:rgba(255,255,255,0.5); font-size:0.98rem; line-height:1.9;">
                        เราให้ความสำคัญกับการคัดเลือกวัสดุ คุณภาพการผลิต
                        และประสบการณ์การใช้งาน
                        เพื่อให้ทุกผลิตภัณฑ์สามารถทำงานร่วมกันได้อย่างลงตัว
                    </p>
                    <p style="color:rgba(255,255,255,0.65); font-size:0.98rem; line-height:1.9;">
                        เพราะเราเชื่อว่า Smart Living ที่ดี
                        ไม่ได้เริ่มจากการมีอุปกรณ์จำนวนมาก
                        แต่เริ่มจาก<strong style="color:#c9a96e;">การออกแบบระบบที่เหมาะสมกับการใช้ชีวิตของแต่ละคน</strong>
                    </p>
                </div>
            </div>

            <div class="relative reveal">
                <img src="{{ asset('images/proof/panel-hall-wide.jpg') }}"
                     alt="ระบบ Smart Living ที่ออกแบบและติดตั้งโดย S.SMART ในบ้านจริง"
                     class="w-full object-cover"
                     style="height:520px; filter:brightness(0.9);">
                <div class="absolute inset-0" style="background:linear-gradient(to bottom, transparent 60%, #0a0a0a 100%);"></div>
                <div class="absolute bottom-6 left-6" style="background:rgba(0,0,0,0.75); backdrop-filter:blur(12px); padding:12px 20px; border:1px solid rgba(201,169,110,0.3);">
                    <div style="font-size:0.6rem; letter-spacing:0.25em; text-transform:uppercase; color:#c9a96e; margin-bottom:2px;">Real Project</div>
                    <div style="font-size:0.85rem; color:#fff;">ระบบจริง ในบ้านจริง โดยทีม S.SMART</div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===================================================
     4. 8 PRODUCT CATEGORIES — ลิงก์ไปหมวดสินค้าในเว็บ
     =================================================== --}}
<section class="reveal" id="categories" style="background:#050505; padding:6rem 2rem;">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12">
            <span class="section-label">หมวดหมู่สินค้า</span>
            <h2 style="font-size:clamp(2rem,4vw,3rem); font-weight:700; letter-spacing:-0.02em; color:#fff; margin-top:0.75rem;">
                8 หมวดผลิตภัณฑ์ — ครบทั้งระบบ
            </h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-px" style="background:rgba(255,255,255,0.06);">
            @foreach($categories as $slug => $cat)
            <a href="{{ route('category', $slug) }}"
               class="group reveal" style="background:#0a0a0a; display:block; position:relative; overflow:hidden; transition-delay:{{ $loop->index * 50 }}ms;">
                <div style="aspect-ratio:16/10; overflow:hidden;">
                    <img src="{{ asset($cat['image']) }}" alt="{{ $cat['name'] }}"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                         style="opacity:0.55;">
                </div>
                <div style="padding:1.5rem;">
                    <div style="font-size:0.6rem; letter-spacing:0.3em; color:#c9a96e; margin-bottom:0.6rem;">{{ $cat['no'] }} — {{ $cat['en'] }}</div>
                    <h3 style="font-size:0.95rem; font-weight:600; color:#fff; margin-bottom:0.4rem; line-height:1.4;">{{ $cat['name'] }}</h3>
                    <p style="font-size:0.75rem; color:rgba(255,255,255,0.35); line-height:1.6;">{{ $cat['desc'] }}</p>
                    <div class="mt-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                         style="font-size:0.65rem; letter-spacing:0.15em; text-transform:uppercase; color:#c9a96e;">ดูหมวดนี้ →</div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

{{-- ===================================================
     5. WHY S.SMART — ทำไมต้องเรา (เติมภาพ + สถิติให้บาลานซ์)
     =================================================== --}}
<section class="reveal" id="why" style="background:#0a0a0a; padding:6rem 2rem;">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-16">

            {{-- Photo mosaic: หน้างานจริง --}}
            <div class="grid grid-cols-2 gap-2 reveal">
                <img src="{{ asset('images/proof/team-install-doorbell.jpg') }}" alt="ทีมช่าง S.SMART กำลังติดตั้งหน้างานจริง"
                     class="w-full object-cover col-span-2" style="height:300px; object-position:center 25%;">
                <img src="{{ asset('images/proof/panel-thermostat-scene.jpg') }}" alt="Smart Panel และ Scene Switch ติดตั้งจริง"
                     class="w-full object-cover" style="height:200px; filter:brightness(0.9);">
                <img src="{{ asset('images/proof/switch-black-marble.jpg') }}" alt="สวิตช์ S.SMART ในบ้านจริง"
                     class="w-full object-cover" style="height:200px; filter:brightness(0.9);">
            </div>

            <div>
                <span class="section-label">ทำไมต้อง S.SMART</span>
                <h2 style="font-size:clamp(1.8rem,3.5vw,2.8rem); font-weight:700; letter-spacing:-0.02em; color:#fff; line-height:1.2; margin-bottom:2rem;">
                    มาตรฐานที่<br>
                    <span style="color:#c9a96e;">คัดสรรแล้ว</span>
                </h2>

                @foreach([
                    ['ประสบการณ์จากโครงการจริง','เราออกแบบและติดตั้งระบบในบ้านทุกประเภท ตั้งแต่คอนโดจนถึงวิลล่า'],
                    ['สินค้าคัดสรรคุณภาพสูง','เลือกผู้ผลิตที่มีมาตรฐาน และพัฒนาสินค้าหลายรายการภายใต้แบรนด์ S.SMART'],
                    ['ระบบครบวงจร','เริ่มจากจุดเล็ก ๆ แล้วต่อยอดได้ทั้งระบบ โดยทุกอุปกรณ์ทำงานร่วมกัน'],
                    ['Tuya Certified ทุกชิ้น','รองรับแอป Tuya Smart เชื่อมต่อข้ามแบรนด์ ควบคุมได้จากทุกที่'],
                    ['ทีมสนับสนุนคนไทย','ให้คำปรึกษาการออกแบบระบบ ก่อนและหลังการขาย'],
                ] as $i => $item)
                <div class="flex gap-4 {{ $i < 4 ? 'mb-5' : '' }}">
                    <div style="width:24px; height:24px; flex-shrink:0; margin-top:2px; color:#c9a96e;">
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

        {{-- Stat band เติมพื้นที่ให้บาลานซ์ --}}
        <div class="grid grid-cols-2 md:grid-cols-4 gap-px" style="background:rgba(255,255,255,0.06);">
            @foreach([
                ['10+','ปีประสบการณ์','ในธุรกิจ Smart Living'],
                ['8','หมวดผลิตภัณฑ์','ครบทั้ง Ecosystem'],
                ['100%','Tuya Certified','ชิปแท้ อัปเดต OTA ได้'],
                ['1','แอปเดียว','ควบคุมได้ทั้งบ้าน'],
            ] as $stat)
            <div style="background:#0a0a0a; padding:2rem; text-align:center;">
                <div style="font-size:2.2rem; font-weight:700; color:#c9a96e; font-family:'Nunito',sans-serif;">{{ $stat[0] }}</div>
                <div style="font-size:0.85rem; font-weight:600; color:#fff; margin:4px 0 2px;">{{ $stat[1] }}</div>
                <div style="font-size:0.7rem; color:rgba(255,255,255,0.3);">{{ $stat[2] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===================================================
     6. CONNECTION DIAGRAM — การเชื่อมต่อของระบบ
     TODO: หากได้ภาพ Diagram จริงจากพี่ ให้เปลี่ยนเป็น <img> แทน SVG นี้ได้
     =================================================== --}}
<section class="reveal" id="ecosystem" style="background:#050505; padding:6rem 2rem; text-align:center;">
    <div class="max-w-5xl mx-auto">
        <span class="section-label">Smart Living Ecosystem</span>
        <h2 style="font-size:clamp(2rem,4vw,3rem); font-weight:700; letter-spacing:-0.02em; color:#fff; margin:0.75rem 0 1rem;">
            ทุกอุปกรณ์ เชื่อมต่อเป็นระบบเดียว
        </h2>
        <p style="color:rgba(255,255,255,0.45); font-size:0.95rem; margin-bottom:3rem;">
            สั่งงานทุกระบบผ่านแอปเดียว — WiFi, Zigbee และ Matter Ready
        </p>

        <div class="reveal">
            <svg viewBox="0 0 800 480" class="w-full" style="max-width:800px; margin:0 auto;" role="img"
                 aria-label="แผนภาพการเชื่อมต่อ: อุปกรณ์ทั้ง 8 ระบบเชื่อมต่อกับศูนย์กลาง S.SMART ควบคุมผ่านแอปเดียว">
                @php
                $nodes = [
                    ['x'=>700,'y'=>240,'label'=>'สวิตช์ไฟ'],
                    ['x'=>612,'y'=>368,'label'=>'แอร์'],
                    ['x'=>400,'y'=>420,'label'=>'ม่านไฟฟ้า'],
                    ['x'=>188,'y'=>368,'label'=>'Smart Lock'],
                    ['x'=>100,'y'=>240,'label'=>'เซ็นเซอร์'],
                    ['x'=>188,'y'=>112,'label'=>'พลังงาน'],
                    ['x'=>400,'y'=>62,'label'=>'Smart Panel'],
                    ['x'=>612,'y'=>112,'label'=>'ไฟ LED'],
                ];
                @endphp

                {{-- Connection lines --}}
                @foreach($nodes as $n)
                <line x1="400" y1="240" x2="{{ $n['x'] }}" y2="{{ $n['y'] }}"
                      stroke="rgba(201,169,110,0.25)" stroke-width="1" stroke-dasharray="4 4"/>
                @endforeach

                {{-- Outer nodes --}}
                @foreach($nodes as $i => $n)
                <g>
                    <circle cx="{{ $n['x'] }}" cy="{{ $n['y'] }}" r="30" fill="#111"
                            stroke="rgba(201,169,110,0.45)" stroke-width="1"/>
                    <text x="{{ $n['x'] }}" y="{{ $n['y'] + 5 }}" text-anchor="middle"
                          fill="#c9a96e" font-size="13" font-weight="700" font-family="Nunito, sans-serif">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</text>
                    <text x="{{ $n['x'] }}" y="{{ $n['y'] + 52 }}" text-anchor="middle"
                          fill="rgba(255,255,255,0.65)" font-size="14" font-family="Inter, sans-serif">{{ $n['label'] }}</text>
                </g>
                @endforeach

                {{-- Center hub --}}
                <circle cx="400" cy="240" r="66" fill="#0a0a0a" stroke="#c9a96e" stroke-width="1.5"/>
                <circle cx="400" cy="240" r="80" fill="none" stroke="rgba(201,169,110,0.2)" stroke-width="1"/>
                <text x="400" y="232" text-anchor="middle" fill="#fff" font-size="17" font-weight="700" font-family="Inter, sans-serif">S.SMART</text>
                <text x="400" y="254" text-anchor="middle" fill="rgba(255,255,255,0.5)" font-size="12" font-family="Inter, sans-serif">ควบคุมผ่านแอปเดียว</text>
            </svg>

            <div class="flex flex-wrap justify-center gap-3 mt-8">
                @foreach(['WiFi 2.4GHz','Zigbee 3.0','Matter Ready','Tuya Certified'] as $proto)
                <span style="font-size:0.7rem; letter-spacing:0.2em; text-transform:uppercase; color:rgba(255,255,255,0.5); border:1px solid rgba(255,255,255,0.12); padding:6px 18px; border-radius:100px;">
                    {{ $proto }}
                </span>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ===================================================
     7. CUSTOMER SEGMENTS — กลุ่มลูกค้า
     =================================================== --}}
<section class="reveal" id="customers" style="background:#0a0a0a; padding:6rem 2rem;">
    <div class="max-w-7xl mx-auto">
        <div class="mb-12">
            <span class="section-label">เหมาะสำหรับ</span>
            <h2 style="font-size:clamp(2rem,4vw,3rem); font-weight:700; letter-spacing:-0.02em; color:#fff; margin-top:0.75rem;">กลุ่มลูกค้า</h2>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-7 gap-4">
            @foreach([
                ['⌂','บ้านเดี่ยว'],
                ['▤','คอนโด'],
                ['◈','วิลล่า'],
                ['◉','โรงแรม'],
                ['◎','ร้านอาหาร'],
                ['▦','สำนักงาน'],
                ['◇','โครงการอสังหาฯ'],
            ] as $s)
            <div class="reveal border border-white/5 p-5 text-center hover:border-[#c9a96e]/30 transition-all duration-300" style="transition-delay:{{ $loop->index * 60 }}ms;">
                <div style="font-size:2rem; color:#c9a96e; margin-bottom:0.75rem;">{{ $s[0] }}</div>
                <div style="color:rgba(255,255,255,0.7); font-size:0.8rem; line-height:1.4;">{{ $s[1] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===================================================
     8. PORTFOLIO — ผลงานติดตั้งจริง
     =================================================== --}}
<section class="reveal" id="portfolio" style="background:#050505; padding:6rem 2rem;">
    <div class="max-w-7xl mx-auto">
        <div class="mb-12">
            <span class="section-label">ผลงานของเรา</span>
            <h2 style="font-size:clamp(2rem,4vw,3rem); font-weight:700; letter-spacing:-0.02em; color:#fff; margin-top:0.75rem;">
                ผลงานติดตั้งจริง
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
            @foreach([
                ['images/proof/panel-hall-wide.jpg','Smart Panel + Scene Control','บ้านเดี่ยว'],
                ['images/proof/doorbell-teak-door.jpg','Video Doorbell + Smart Lock','บ้านเดี่ยว'],
                ['images/proof/curtain-sheer-city.jpg','ม่านไฟฟ้า 2 ชั้น','คอนโดมิเนียม'],
                ['images/proof/panel-thermostat-scene.jpg','ศูนย์ควบคุมรวม + Thermostat','วิลล่า'],
                ['images/proof/switch-wallpaper.jpg','สวิตช์อัจฉริยะทั้งหลัง','โรงแรม'],
                ['images/proof/lighting-led-wardrobe.jpg','ระบบไฟ LED บิวท์อิน','งาน Interior'],
            ] as $work)
            <div class="group reveal relative overflow-hidden" style="aspect-ratio:4/3; transition-delay:{{ $loop->index * 60 }}ms;">
                <img src="{{ asset($work[0]) }}" alt="{{ $work[1] }} — {{ $work[2] }}"
                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                     style="filter:brightness(0.8);">
                <div class="absolute inset-0" style="background:linear-gradient(to top, rgba(0,0,0,0.85) 0%, transparent 45%);"></div>
                <div class="absolute bottom-0 left-0 right-0 p-5">
                    <div style="font-size:0.6rem; letter-spacing:0.25em; text-transform:uppercase; color:#c9a96e; margin-bottom:3px;">{{ $work[2] }}</div>
                    <div style="font-size:0.9rem; font-weight:600; color:#fff;">{{ $work[1] }}</div>
                </div>
            </div>
            @endforeach
        </div>

        <p style="color:rgba(255,255,255,0.25); font-size:0.8rem; text-align:center; margin-top:2rem; letter-spacing:0.05em;">
            ผลงานทั้งหมดติดตั้งจริงโดยทีมงาน S.SMART — วิดีโอผลงานกำลังจะตามมาเร็ว ๆ นี้
        </p>
    </div>
</section>

{{-- ===================================================
     9. DEALER CTA
     =================================================== --}}
<section class="reveal" style="background:#0a0500; padding:6rem 2rem; position:relative; overflow:hidden;">
    <div class="absolute inset-0" style="background:radial-gradient(ellipse at 20% 50%, rgba(201,169,110,0.07) 0%, transparent 60%);"></div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="section-label" style="color:rgba(201,169,110,0.7);">Dealer Program</span>
                <h2 style="font-size:clamp(2rem,4vw,3rem); font-weight:700; letter-spacing:-0.02em; color:#fff; line-height:1.15; margin:0.75rem 0 1rem;">
                    สร้างธุรกิจ Smart Living<br>
                    <span style="color:#c9a96e;">ไปพร้อมกับเรา</span>
                </h2>
                <p style="color:rgba(255,255,255,0.5); font-size:0.95rem; line-height:1.8; margin-bottom:2rem;">
                    สินค้าครบวงจร ระบบสนับสนุนพร้อม เริ่มต้นได้ทันที —
                    เราไม่ได้มองหาผู้ซื้อสินค้า แต่มองหาพันธมิตรระยะยาว
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('dealer') }}" class="btn-gold">ดูโปรแกรมตัวแทนจำหน่าย</a>
                    <a href="https://line.me/ti/p/~{{ config('site.line_id') }}" target="_blank" rel="noopener noreferrer" class="btn-outline">
                        LINE: {{ config('site.line_id') }}
                    </a>
                </div>
            </div>
            <div class="reveal hidden lg:block">
                <img src="{{ asset('images/proof/panel-hall-cabinet.jpg') }}" alt="ระบบ Smart Living ติดตั้งจริงโดยตัวแทน S.SMART"
                     class="w-full object-cover" style="height:380px; filter:brightness(0.85);">
            </div>
        </div>
    </div>
</section>

{{-- ===================================================
     10. CONTACT
     =================================================== --}}
<section class="reveal" id="contact" style="background:#080808; padding:6rem 2rem;">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            <div>
                <span class="section-label">ติดต่อเรา</span>
                <h2 style="font-size:clamp(2rem,4vw,3rem); font-weight:700; letter-spacing:-0.02em; color:#fff; line-height:1.1; margin-bottom:2rem;">
                    พูดคุยกับทีมงาน<br>
                    <span style="color:#c9a96e;">ได้เลยตอนนี้</span>
                </h2>
                <p style="color:rgba(255,255,255,0.45); font-size:0.95rem; line-height:1.85; margin-bottom:2.5rem;">
                    ทีมงาน S.SMART พร้อมให้คำปรึกษาเรื่องการออกแบบระบบ สินค้า
                    และโซลูชันที่เหมาะกับบ้านหรือโปรเจกต์ของคุณ
                </p>

                <div class="space-y-5">
                    <div class="flex gap-4">
                        <div style="width:40px; height:40px; border:1px solid rgba(201,169,110,0.3); display:flex; align-items:center; justify-content:center; flex-shrink:0; color:#c9a96e; font-size:0.65rem; letter-spacing:0.1em;">TEL</div>
                        <div>
                            <a href="tel:{{ config('site.phone_1') }}" class="block" style="color:#fff; font-size:0.95rem; text-decoration:none; margin-bottom:2px;">09 8295 5259</a>
                            <a href="tel:{{ config('site.phone_2') }}" class="block" style="color:rgba(255,255,255,0.5); font-size:0.95rem; text-decoration:none;">09 2955 5455</a>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div style="width:40px; height:40px; border:1px solid rgba(201,169,110,0.3); display:flex; align-items:center; justify-content:center; flex-shrink:0; color:#c9a96e; font-size:0.65rem; letter-spacing:0.1em;">LINE</div>
                        <a href="https://line.me/ti/p/~{{ config('site.line_id') }}" target="_blank" rel="noopener noreferrer" style="color:rgba(255,255,255,0.7); font-size:0.95rem; text-decoration:none; align-self:center;">{{ config('site.line_id') }}</a>
                    </div>
                    <div class="flex gap-4">
                        <div style="width:40px; height:40px; border:1px solid rgba(201,169,110,0.3); display:flex; align-items:center; justify-content:center; flex-shrink:0; color:#c9a96e; font-size:0.65rem; letter-spacing:0.1em;">FB</div>
                        <a href="https://facebook.com/{{ config('site.facebook') }}" target="_blank" rel="noopener noreferrer" style="color:rgba(255,255,255,0.7); font-size:0.95rem; text-decoration:none; align-self:center;">ssmartautomation</a>
                    </div>
                    <div class="flex gap-4">
                        <div style="width:40px; height:40px; border:1px solid rgba(201,169,110,0.3); display:flex; align-items:center; justify-content:center; flex-shrink:0; color:#c9a96e; font-size:0.65rem; letter-spacing:0.1em;">EMAIL</div>
                        <a href="mailto:{{ config('site.email') }}" style="color:rgba(255,255,255,0.7); font-size:0.9rem; text-decoration:none; align-self:center; word-break:break-all;">{{ config('site.email') }}</a>
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
                            <a href="https://youtube.com/channel/{{ config('site.youtube') }}?sub_confirmation=1" target="_blank" rel="noopener noreferrer" style="color:rgba(255,255,255,0.5); font-size:0.85rem; text-decoration:none;">▶ YouTube Channel</a>
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
