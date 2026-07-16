@extends('layouts.app')

@section('title', 'S.SMART — Company Profile | ระบบบ้านอัจฉริยะระดับพรีเมียม')

@section('content')

{{-- ========== HERO ========== --}}
<section class="section-full" style="background:#030303;">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-[#0d0900] via-black to-black"></div>
        <div class="absolute inset-0" style="background:radial-gradient(ellipse 80% 60% at 60% 40%, rgba(201,169,110,0.07) 0%, transparent 70%);"></div>
        {{-- Decorative grid --}}
        <div class="absolute inset-0" style="background-image:linear-gradient(rgba(201,169,110,0.04) 1px,transparent 1px),linear-gradient(90deg,rgba(201,169,110,0.04) 1px,transparent 1px);background-size:80px 80px;"></div>
    </div>
    <div class="section-overlay" style="background:linear-gradient(to top,#000 0%,rgba(0,0,0,0.4) 50%,transparent 100%);"></div>

    <div class="section-content">
        <p class="section-label reveal">S.Smart Automation Systems Co., Ltd.</p>
        <h1 class="section-title reveal" style="font-size:clamp(3.5rem,9vw,7rem);">
            S.SMART<br>
            <span class="gradient-gold">LUXURY</span><br>
            SMART HOME
        </h1>
        <p class="section-subtitle reveal">
            ระบบบ้านอัจฉริยะระดับพรีเมียม ที่ออกแบบเพื่อการใช้งานจริง<br>
            รองรับการขยายระบบในอนาคต ด้วยเทคโนโลยี Tuya แท้ และวัสดุ AG Glass
        </p>
        <div class="flex flex-wrap gap-4 reveal">
            <a href="#products" class="btn-gold">ดูผลิตภัณฑ์</a>
            <a href="{{ route('dealer') }}" class="btn-outline">ร่วมเป็นตัวแทนจำหน่าย</a>
        </div>
    </div>

    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2" style="opacity:.35;">
        <span style="font-size:.65rem;letter-spacing:.3em;text-transform:uppercase;color:#fff;">Scroll</span>
        <div style="width:1px;height:48px;background:linear-gradient(to bottom,#fff,transparent);animation:pulse 2s infinite;"></div>
    </div>
</section>

{{-- ========== ABOUT S.SMART ========== --}}
<section class="py-28 px-8 md:px-16 lg:px-24 bg-[#0a0a0a]" id="about">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <p class="section-label reveal">Home</p>
                <h2 class="reveal" style="font-size:clamp(2rem,5vw,3.5rem);font-weight:700;line-height:1.1;color:#fff;margin-bottom:1.5rem;">
                    ผู้ให้บริการระบบ<br>
                    <span class="gradient-gold">Smart Home ครบวงจร</span>
                </h2>
                <div class="line-gold mb-8 reveal"></div>
                <div class="space-y-5 reveal">
                    <p style="color:rgba(255,255,255,.5);line-height:1.8;font-size:.95rem;">
                        S.SMART ก่อตั้งขึ้นด้วยวิสัยทัศน์ในการนำเทคโนโลยีบ้านอัจฉริยะที่เคยเป็นของผู้มั่งคั่งเท่านั้น มาสู่ทุกบ้านในราคาที่เข้าถึงได้ ด้วยคุณภาพระดับพรีเมียม
                    </p>
                    <p style="color:rgba(255,255,255,.5);line-height:1.8;font-size:.95rem;">
                        เราไม่ได้เป็นเพียงผู้จำหน่ายสวิตช์ไฟ แต่เป็น <strong style="color:#c9a96e;">ผู้ออกแบบและติดตั้งระบบ Ecosystem</strong> ที่เชื่อมทุกอุปกรณ์ในบ้านเข้าด้วยกันอย่างลงตัว
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-4 reveal">
                @php
                $features = [
                    ['icon'=>'◈','title'=>'AG Glass วัสดุระดับพรีเมียม','desc'=>'กระจก Anti-Glare ป้องกันรอยนิ้วมือ ทนทาน สวยงามตลอดการใช้งาน'],
                    ['icon'=>'◉','title'=>'Genuine Tuya Chip','desc'=>'ชิปแท้ 100% รองรับ OTA Update เสถียร ไม่ตก ควบคุมได้จากทั่วโลก'],
                    ['icon'=>'◎','title'=>'แอปใช้งานฟรี','desc'=>'Tuya Smart / Smart Life ดาวน์โหลดฟรี ไม่มีค่าสมัครสมาชิกรายเดือน'],
                    ['icon'=>'◇','title'=>'พัฒนาโซลูชันที่ใช้งานง่าย','desc'=>'ออกแบบ UX เพื่อผู้สูงอายุและทุกคนในครอบครัว ไม่ต้องเชี่ยวชาญด้าน IT'],
                ];
                @endphp
                @foreach($features as $f)
                <div class="flex gap-4 p-5 border border-white/5 hover:border-[#c9a96e]/30 transition-all duration-300">
                    <span style="color:#c9a96e;font-size:1.5rem;flex-shrink:0;line-height:1.3;">{{ $f['icon'] }}</span>
                    <div>
                        <div style="color:#fff;font-weight:600;font-size:.9rem;margin-bottom:.25rem;">{{ $f['title'] }}</div>
                        <div style="color:rgba(255,255,255,.4);font-size:.8rem;line-height:1.6;">{{ $f['desc'] }}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ========== PRODUCT ECOSYSTEM ========== --}}
<section class="py-28 px-8 md:px-16 lg:px-24 bg-[#050505]" id="products">
    <div class="max-w-7xl mx-auto">
        <div class="mb-16 reveal">
            <p class="section-label">ระบบนิเวศผลิตภัณฑ์</p>
            <h2 style="font-size:clamp(2rem,5vw,3.5rem);font-weight:700;color:#fff;margin-bottom:.75rem;">8 หมวดผลิตภัณฑ์</h2>
            <div class="line-gold"></div>
        </div>

        @php
        $categories = [
            ['no'=>'01','icon'=>'⬡','name'=>'สวิตช์ไฟอัจฉริยะ','desc'=>'Touch Switch, WiFi Switch, Zigbee Switch รองรับ 1-6 ช่อง','color'=>'#c9a96e'],
            ['no'=>'02','icon'=>'❄','name'=>'ระบบควบคุมเครื่องปรับอากาศ','desc'=>'IR Controller, Thermostat, Smart AC Controller ควบคุมแอร์ทุกยี่ห้อ','color'=>'#4a90d9'],
            ['no'=>'03','icon'=>'▦','name'=>'ระบบม่านอัจฉริยะ','desc'=>'Curtain Motor, Roller Blind Motor รองรับ WiFi/Zigbee','color'=>'#c9a96e'],
            ['no'=>'04','icon'=>'◉','name'=>'ระบบรักษาความปลอดภัย','desc'=>'Smart Lock, Video Door Phone, Auto Gate, Smart Bell','color'=>'#e05555'],
            ['no'=>'05','icon'=>'◈','name'=>'เซ็นเซอร์อัจฉริยะ','desc'=>'PIR Motion, Door Sensor, Smoke Detector, Water Leak Sensor','color'=>'#c9a96e'],
            ['no'=>'06','icon'=>'⚡','name'=>'ระบบจัดการพลังงาน','desc'=>'Smart Plug, Energy Monitor, Smart Circuit Breaker','color'=>'#f0c040'],
            ['no'=>'07','icon'=>'⌂','name'=>'ระบบควบคุมบ้านอัจฉริยะ','desc'=>'Gateway, Scene Controller, Smart Remote, Voice Control','color'=>'#c9a96e'],
            ['no'=>'08','icon'=>'◎','name'=>'อุปกรณ์ไฟฟ้าและอุปกรณ์เสริม','desc'=>'Socket, Wall Plate, Panel Box, Wiring Accessories','color'=>'#888'],
        ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-px bg-white/5">
            @foreach($categories as $cat)
            <div class="reveal bg-[#0a0a0a] p-6 group hover:bg-[#0f0a00] transition-colors duration-300 cursor-default" style="transition-delay:{{ $loop->index * 60 }}ms;">
                <div class="flex items-start justify-between mb-5">
                    <span style="font-size:1.8rem;color:{{ $cat['color'] }};">{{ $cat['icon'] }}</span>
                    <span style="font-size:.65rem;letter-spacing:.2em;color:rgba(255,255,255,.2);">{{ $cat['no'] }}</span>
                </div>
                <h3 style="color:#fff;font-weight:600;font-size:.9rem;margin-bottom:.5rem;line-height:1.4;">{{ $cat['name'] }}</h3>
                <p style="color:rgba(255,255,255,.35);font-size:.78rem;line-height:1.6;">{{ $cat['desc'] }}</p>
                <div style="width:30px;height:1px;background:{{ $cat['color'] }};margin-top:1.25rem;opacity:.4;transition:width .3s,opacity .3s;" class="group-hover:!w-full group-hover:!opacity-70"></div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ========== KEY DIFFERENTIATORS ========== --}}
<section class="py-28 px-8 md:px-16 lg:px-24 bg-[#0a0a0a]">
    <div class="max-w-7xl mx-auto">
        <div class="mb-16 reveal">
            <p class="section-label">จุดเด่นของ S.SMART</p>
            <h2 style="font-size:clamp(2rem,5vw,3.5rem);font-weight:700;color:#fff;margin-bottom:.75rem;">ทำไมต้อง S.SMART?</h2>
            <div class="line-gold"></div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            @php
            $diffs = [
                ['val'=>'AG Glass','label'=>'วัสดุกระจกพรีเมียม','sub'=>'Anti-Glare Technology'],
                ['val'=>'Tuya','label'=>'ชิปแท้ 100%','sub'=>'Genuine Chip / OTA Update'],
                ['val'=>'Free','label'=>'แอปใช้งานฟรี','sub'=>'Tuya Smart / Smart Life'],
                ['val'=>'Zigbee','label'=>'รองรับ Mesh Network','sub'=>'เสถียรกว่า WiFi-only'],
                ['val'=>'Matter','label'=>'รองรับในอนาคต','sub'=>'Future-Proof Protocol'],
                ['val'=>'HA','label'=>'Home Assistant','sub'=>'Open-Source Ecosystem'],
                ['val'=>'TH','label'=>'ทีมคนไทย','sub'=>'Support ภาษาไทย 100%'],
                ['val'=>'∞','label'=>'ขยายระบบได้','sub'=>'Scalable Architecture'],
            ];
            @endphp
            @foreach($diffs as $d)
            <div class="reveal border border-white/5 p-5 text-center hover:border-[#c9a96e]/40 transition-all duration-300" style="transition-delay:{{ $loop->index * 50 }}ms;">
                <div class="gradient-gold" style="font-size:1.6rem;font-weight:700;margin-bottom:.25rem;">{{ $d['val'] }}</div>
                <div style="color:#fff;font-size:.8rem;font-weight:600;margin-bottom:.25rem;">{{ $d['label'] }}</div>
                <div style="color:rgba(255,255,255,.3);font-size:.72rem;">{{ $d['sub'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ========== ECOSYSTEM DIAGRAM ========== --}}
<section class="py-28 px-8 md:px-16 lg:px-24 bg-[#050505]" id="ecosystem">
    <div class="max-w-5xl mx-auto text-center">
        <p class="section-label reveal mx-auto">การทำงานร่วมกันของระบบ</p>
        <h2 class="reveal" style="font-size:clamp(2rem,5vw,3.5rem);font-weight:700;color:#fff;margin-bottom:1rem;">Smart Home Ecosystem</h2>
        <div class="line-gold mx-auto mb-16 reveal"></div>

        {{-- Flow diagram --}}
        <div class="reveal">
            <div class="flex flex-wrap items-center justify-center gap-2 md:gap-3">
                @php
                $flow = [
                    ['label'=>'สวิตช์ไฟ','icon'=>'⬡','color'=>'#c9a96e'],
                    ['arrow'=>true],
                    ['label'=>'Gateway','icon'=>'◉','color'=>'#c9a96e'],
                    ['arrow'=>true],
                    ['label'=>'เซ็นเซอร์','icon'=>'◈','color'=>'#c9a96e'],
                    ['arrow'=>true],
                    ['label'=>'ระบบแอร์','icon'=>'❄','color'=>'#4a90d9'],
                    ['arrow'=>true],
                    ['label'=>'ระบบม่าน','icon'=>'▦','color'=>'#c9a96e'],
                    ['arrow'=>true],
                    ['label'=>'Smart Lock','icon'=>'◉','color'=>'#e05555'],
                    ['arrow'=>true],
                    ['label'=>'แอป Tuya','icon'=>'◎','color'=>'#50c878'],
                ];
                @endphp
                @foreach($flow as $item)
                    @if(isset($item['arrow']))
                        <span style="color:rgba(255,255,255,.2);font-size:1.2rem;">→</span>
                    @else
                        <div style="background:#111;border:1px solid rgba(255,255,255,.08);padding:.75rem 1rem;text-align:center;min-width:80px;">
                            <div style="font-size:1.4rem;color:{{ $item['color'] }};margin-bottom:.25rem;">{{ $item['icon'] }}</div>
                            <div style="color:rgba(255,255,255,.7);font-size:.72rem;white-space:nowrap;">{{ $item['label'] }}</div>
                        </div>
                    @endif
                @endforeach
            </div>
            <p style="color:rgba(255,255,255,.3);font-size:.8rem;margin-top:2rem;letter-spacing:.1em;">ทุกอุปกรณ์เชื่อมต่อถึงกัน ควบคุมได้ผ่านแอปเดียว</p>
        </div>
    </div>
</section>

{{-- ========== CUSTOMER SEGMENTS ========== --}}
<section class="py-28 px-8 md:px-16 lg:px-24 bg-[#0a0a0a]" id="customers">
    <div class="max-w-7xl mx-auto">
        <div class="mb-16 reveal">
            <p class="section-label">เหมาะสำหรับ</p>
            <h2 style="font-size:clamp(2rem,5vw,3.5rem);font-weight:700;color:#fff;margin-bottom:.75rem;">กลุ่มลูกค้า</h2>
            <div class="line-gold"></div>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-7 gap-4">
            @php
            $segments = [
                ['icon'=>'⌂','label'=>'บ้านเดี่ยว'],
                ['icon'=>'▤','label'=>'คอนโด'],
                ['icon'=>'◈','label'=>'วิลล่า'],
                ['icon'=>'◉','label'=>'โรงแรม'],
                ['icon'=>'◎','label'=>'ร้านอาหาร'],
                ['icon'=>'▦','label'=>'สำนักงาน'],
                ['icon'=>'◇','label'=>'โครงการอสังหาฯ'],
            ];
            @endphp
            @foreach($segments as $s)
            <div class="reveal border border-white/5 p-5 text-center hover:border-[#c9a96e]/30 transition-all duration-300 group" style="transition-delay:{{ $loop->index * 60 }}ms;">
                <div style="font-size:2rem;color:#c9a96e;margin-bottom:.75rem;">{{ $s['icon'] }}</div>
                <div style="color:rgba(255,255,255,.7);font-size:.8rem;line-height:1.4;">{{ $s['label'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ========== PORTFOLIO ========== --}}
<section class="py-28 px-8 md:px-16 lg:px-24 bg-[#050505]" id="portfolio">
    <div class="max-w-7xl mx-auto">
        <div class="mb-16 reveal">
            <p class="section-label">ผลงาน</p>
            <h2 style="font-size:clamp(2rem,5vw,3.5rem);font-weight:700;color:#fff;margin-bottom:.75rem;">ผลงานติดตั้ง</h2>
            <div class="line-gold"></div>
        </div>
        {{-- Portfolio placeholder grid --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-px bg-white/5">
            @for($i = 1; $i <= 6; $i++)
            <div class="reveal bg-[#0a0a0a] aspect-video flex items-center justify-center border-0 group hover:bg-[#0f0a00] transition-colors duration-300" style="transition-delay:{{ ($i-1) * 80 }}ms;">
                <div class="text-center">
                    <div style="color:rgba(201,169,110,.2);font-size:3rem;margin-bottom:.5rem;">◈</div>
                    <div style="color:rgba(255,255,255,.1);font-size:.75rem;letter-spacing:.15em;">PROJECT {{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</div>
                </div>
            </div>
            @endfor
        </div>
        <p style="color:rgba(255,255,255,.2);font-size:.75rem;text-align:center;margin-top:2rem;letter-spacing:.1em;">* ใส่ภาพโปรเจกต์จริงได้ที่นี่</p>
    </div>
</section>

{{-- ========== Contact Us ========== --}}
<section class="py-28 px-8 md:px-16 lg:px-24 bg-[#0a0a0a] border-t border-white/5" id="Contact Us">
    <div class="max-w-3xl mx-auto text-center">
        <p class="section-label reveal mx-auto">ติดต่อบริษัท</p>
        <h2 class="reveal" style="font-size:clamp(2rem,5vw,3.5rem);font-weight:700;color:#fff;margin-bottom:1rem;">พร้อมให้คำปรึกษา</h2>
        <div class="line-gold mx-auto mb-12 reveal"></div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-10">
            <a href="tel:0982955259" class="reveal block p-6 border border-white/10 hover:border-[#c9a96e]/50 transition-all duration-300">
                <div style="color:#c9a96e;font-size:.65rem;letter-spacing:.25em;text-transform:uppercase;margin-bottom:.5rem;">Phone</div>
                <div style="color:#fff;font-weight:500;">09 8295 5259</div>
                <div style="color:rgba(255,255,255,.3);font-size:.85rem;">09 2955 9455</div>
            </a>
            <a href="https://line.me/ti/p/~0982955259" target="_blank" rel="noopener noreferrer" class="reveal block p-6 border border-white/10 hover:border-[#c9a96e]/50 transition-all duration-300">
                <div style="color:#c9a96e;font-size:.65rem;letter-spacing:.25em;text-transform:uppercase;margin-bottom:.5rem;">LINE</div>
                <div style="color:#fff;font-weight:500;">0982955259</div>
                <div style="color:rgba(255,255,255,.3);font-size:.85rem;">Line Official Account</div>
            </a>
            <a href="https://facebook.com/ssmartautomation" target="_blank" rel="noopener noreferrer" class="reveal block p-6 border border-white/10 hover:border-[#c9a96e]/50 transition-all duration-300">
                <div style="color:#c9a96e;font-size:.65rem;letter-spacing:.25em;text-transform:uppercase;margin-bottom:.5rem;">Facebook</div>
                <div style="color:#fff;font-weight:500;">ssmartautomation</div>
                <div style="color:rgba(255,255,255,.3);font-size:.85rem;">Follow Us</div>
            </a>
        </div>
        <div class="reveal">
            <a href="{{ config('site.store_url') }}" target="_blank" rel="noopener noreferrer" class="btn-gold" style="padding:.9rem 3rem;font-size:.75rem;">
                เยี่ยมชมร้านค้าออนไลน์
            </a>
        </div>
    </div>
</section>

@endsection

{{-- JS handled by resources/js/app.js --}}
