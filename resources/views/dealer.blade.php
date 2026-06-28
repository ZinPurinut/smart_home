@extends('layouts.app')

@section('title', 'S.SMART — ร่วมเป็นตัวแทนจำหน่าย | Dealer Program')

@section('content')

{{-- ========== HERO ========== --}}
<section class="section-full" style="background:#030303;">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-[#0a0d00] via-black to-black"></div>
        <div class="absolute inset-0" style="background:radial-gradient(ellipse 70% 60% at 70% 40%, rgba(201,169,110,0.06) 0%, transparent 70%);"></div>
        <div class="absolute inset-0" style="background-image:linear-gradient(rgba(201,169,110,0.03) 1px,transparent 1px),linear-gradient(90deg,rgba(201,169,110,0.03) 1px,transparent 1px);background-size:100px 100px;"></div>
    </div>
    <div class="section-overlay" style="background:linear-gradient(to top,#000 0%,rgba(0,0,0,.45) 55%,transparent 100%);"></div>

    <div class="section-content">
        <p class="section-label reveal">Dealer Program</p>
        <h1 class="section-title reveal" style="font-size:clamp(3rem,8vw,6.5rem);">
            ร่วมเป็น<br>
            <span class="gradient-gold">ตัวแทน</span><br>
            S.SMART
        </h1>
        <p class="section-subtitle reveal">
            สร้างธุรกิจ Smart Home ไปพร้อมกับเรา<br>
            สินค้าครบ ทีม Support พร้อม เริ่มได้ทันที
        </p>
        <div class="flex flex-wrap gap-4 reveal">
            <a href="#apply" class="btn-gold">สมัครเป็นตัวแทน</a>
            <a href="#benefits" class="btn-outline">ดูสิทธิประโยชน์</a>
        </div>
    </div>

    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2" style="opacity:.35;">
        <div style="width:1px;height:48px;background:linear-gradient(to bottom,#fff,transparent);animation:pulse 2s infinite;"></div>
    </div>
</section>

{{-- ========== WHY S.SMART ========== --}}
<section class="py-28 px-8 md:px-16 lg:px-24 bg-[#0a0a0a]" id="why">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <p class="section-label reveal">เหตุผลที่ควรเลือก</p>
                <h2 class="reveal" style="font-size:clamp(2rem,5vw,3.5rem);font-weight:700;color:#fff;margin-bottom:1.5rem;line-height:1.15;">
                    ทำไมต้องเลือก<br>
                    <span class="gradient-gold">S.SMART?</span>
                </h2>
                <div class="line-gold mb-8 reveal"></div>
                <p class="reveal" style="color:rgba(255,255,255,.5);line-height:1.8;margin-bottom:2rem;">
                    เราไม่ได้มอบแค่สินค้า แต่มอบ <strong style="color:#c9a96e;">ระบบธุรกิจ</strong> ที่ช่วยให้ตัวแทนทุกคนขายได้จริง มีรายได้จริง และเติบโตไปพร้อมกัน
                </p>
                <a href="#apply" class="btn-gold reveal">เริ่มต้นวันนี้ →</a>
            </div>
            <div class="space-y-3 reveal">
                @php
                $reasons = [
                    'สินค้าครบทั้งระบบ ไม่ต้องหาจากหลายที่',
                    'คุณภาพระดับพรีเมียม AG Glass + Genuine Tuya',
                    'ใช้งานง่าย ลูกค้าซื้อแล้วไม่โทรมาถาม',
                    'แอปฟรี ไม่มีค่าสมัครรายเดือนให้ลูกค้ากังวล',
                    'ทีม Support คนไทย ตอบเร็ว ตอบจริง',
                ];
                @endphp
                @foreach($reasons as $i => $r)
                <div class="flex gap-4 p-4 border border-white/5 hover:border-[#c9a96e]/30 transition-all duration-300" style="transition-delay:{{ $i * 80 }}ms;">
                    <span style="color:#c9a96e;font-size:.8rem;font-weight:700;flex-shrink:0;margin-top:.1rem;">{{ str_pad($i+1,2,'0',STR_PAD_LEFT) }}</span>
                    <span style="color:rgba(255,255,255,.75);font-size:.9rem;line-height:1.5;">{{ $r }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ========== WHO IS IT FOR ========== --}}
<section class="py-28 px-8 md:px-16 lg:px-24 bg-[#050505]" id="who">
    <div class="max-w-7xl mx-auto">
        <div class="mb-16 reveal">
            <p class="section-label">เหมาะกับ</p>
            <h2 style="font-size:clamp(2rem,5vw,3.5rem);font-weight:700;color:#fff;margin-bottom:.75rem;">โปรแกรมนี้เหมาะกับใคร?</h2>
            <div class="line-gold"></div>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @php
            $audiences = [
                ['icon'=>'⚡','title'=>'ช่างไฟฟ้า','desc'=>'ต่อยอดรายได้จากงานไฟฟ้าสู่งาน Smart Home'],
                ['icon'=>'⌂','title'=>'ผู้รับเหมา','desc'=>'เพิ่มมูลค่าโปรเจกต์ด้วย Smart Home Package'],
                ['icon'=>'◈','title'=>'อินทีเรียร์','desc'=>'แนะนำสวิตช์หรูที่เข้ากับงานออกแบบ'],
                ['icon'=>'◎','title'=>'ร้านอุปกรณ์ไฟฟ้า','desc'=>'ขยายสินค้า Smart Home ในร้านที่มีอยู่'],
                ['icon'=>'◉','title'=>'บริษัทรักษาความปลอดภัย','desc'=>'รวมระบบ CCTV + Smart Lock + Sensor'],
                ['icon'=>'◇','title'=>'บริษัท Smart Home','desc'=>'เพิ่มแบรนด์สินค้าคุณภาพสูงในพอร์ต'],
                ['icon'=>'▦','title'=>'Freelancer','desc'=>'รายได้ค่าคอมมิสชัน + ค่าติดตั้ง'],
                ['icon'=>'⬡','title'=>'เจ้าของธุรกิจทั่วไป','desc'=>'ธุรกิจ Side-Income รายได้ดี Margin สูง'],
            ];
            @endphp
            @foreach($audiences as $a)
            <div class="reveal bg-[#0a0a0a] border border-white/5 p-6 hover:border-[#c9a96e]/30 transition-all duration-300 group" style="transition-delay:{{ $loop->index * 60 }}ms;">
                <div style="color:#c9a96e;font-size:2rem;margin-bottom:.75rem;">{{ $a['icon'] }}</div>
                <h3 style="color:#fff;font-weight:600;font-size:.9rem;margin-bottom:.4rem;">{{ $a['title'] }}</h3>
                <p style="color:rgba(255,255,255,.35);font-size:.78rem;line-height:1.6;">{{ $a['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ========== BENEFITS ========== --}}
<section class="py-28 px-8 md:px-16 lg:px-24 bg-[#0a0a0a]" id="benefits">
    <div class="max-w-7xl mx-auto">
        <div class="mb-16 reveal">
            <p class="section-label">สิ่งที่ได้รับ</p>
            <h2 style="font-size:clamp(2rem,5vw,3.5rem);font-weight:700;color:#fff;margin-bottom:.75rem;">สิทธิประโยชน์ตัวแทน</h2>
            <div class="line-gold"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-px bg-white/5">
            @php
            $benefits = [
                ['icon'=>'▶','title'=>'อบรมออนไลน์','desc'=>'คอร์ส 101 Home Automation ฟรี พร้อม Certificate'],
                ['icon'=>'◎','title'=>'เอกสารครบ','desc'=>'Catalog, Price List, Datasheet, Wiring Diagram'],
                ['icon'=>'◈','title'=>'สื่อการขาย','desc'=>'รูปสินค้า HD, วิดีโอรีวิว, Brochure พร้อมใช้'],
                ['icon'=>'◉','title'=>'ทีม Support','desc'=>'ช่วยออกแบบระบบ แก้ปัญหาเทคนิค ตอบ 7 วัน'],
                ['icon'=>'⬡','title'=>'ราคาส่ง','desc'=>'Margin ดี ราคาแข่งได้ในตลาด'],
                ['icon'=>'◇','title'=>'การรับประกัน','desc'=>'สินค้ามีรับประกัน คืนง่าย เคลมสะดวก'],
                ['icon'=>'⚡','title'=>'อัปเดตสินค้าใหม่','desc'=>'รับข้อมูลสินค้าใหม่ก่อนใคร'],
                ['icon'=>'▦','title'=>'Community','desc'=>'กลุ่มตัวแทน แชร์ความรู้ แชร์โปรเจกต์'],
            ];
            @endphp
            @foreach($benefits as $b)
            <div class="reveal bg-[#0a0a0a] p-7 hover:bg-[#0f0a00] transition-colors duration-300 group" style="transition-delay:{{ $loop->index * 60 }}ms;">
                <div style="color:#c9a96e;font-size:1.8rem;margin-bottom:1rem;">{{ $b['icon'] }}</div>
                <h3 style="color:#fff;font-weight:600;font-size:.9rem;margin-bottom:.5rem;">{{ $b['title'] }}</h3>
                <p style="color:rgba(255,255,255,.35);font-size:.8rem;line-height:1.6;">{{ $b['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ========== PRODUCT CATEGORIES (reuse) ========== --}}
<section class="py-28 px-8 md:px-16 lg:px-24 bg-[#050505]">
    <div class="max-w-7xl mx-auto">
        <div class="mb-16 reveal">
            <p class="section-label">สินค้าที่จำหน่ายได้</p>
            <h2 style="font-size:clamp(2rem,5vw,3.5rem);font-weight:700;color:#fff;margin-bottom:.75rem;">8 หมวดสินค้า ครบวงจร</h2>
            <div class="line-gold"></div>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @php
            $cats = ['สวิตช์ไฟอัจฉริยะ','ระบบควบคุมแอร์','ระบบม่านอัจฉริยะ','ระบบรักษาความปลอดภัย','เซ็นเซอร์อัจฉริยะ','ระบบพลังงาน','ระบบควบคุมบ้าน','อุปกรณ์เสริม'];
            $icons = ['⬡','❄','▦','◉','◈','⚡','⌂','◎'];
            @endphp
            @foreach($cats as $i => $c)
            <div class="reveal border border-white/5 p-5 text-center hover:border-[#c9a96e]/30 transition-all duration-300" style="transition-delay:{{ $i * 60 }}ms;">
                <div style="color:#c9a96e;font-size:1.8rem;margin-bottom:.5rem;">{{ $icons[$i] }}</div>
                <div style="color:rgba(255,255,255,.7);font-size:.8rem;">{{ $c }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ========== PROCESS STEPS ========== --}}
<section class="py-28 px-8 md:px-16 lg:px-24 bg-[#0a0a0a]">
    <div class="max-w-5xl mx-auto">
        <div class="mb-16 text-center reveal">
            <p class="section-label mx-auto">ขั้นตอน</p>
            <h2 style="font-size:clamp(2rem,5vw,3.5rem);font-weight:700;color:#fff;margin-bottom:.75rem;">ขั้นตอนการเป็นตัวแทน</h2>
            <div class="line-gold mx-auto"></div>
        </div>

        <div class="relative">
            {{-- Vertical line --}}
            <div class="absolute left-6 top-0 bottom-0 w-px bg-white/5 hidden md:block"></div>
            <div class="space-y-6">
                @php
                $steps = [
                    ['n'=>'01','title'=>'สมัคร','desc'=>'กรอกแบบฟอร์มสมัครตัวแทน ใช้เวลาไม่เกิน 5 นาที'],
                    ['n'=>'02','title'=>'พูดคุยกับทีมงาน','desc'=>'ทีมงานติดต่อกลับภายใน 24 ชั่วโมง เพื่อแนะนำระบบ'],
                    ['n'=>'03','title'=>'อบรมออนไลน์','desc'=>'เรียนคอร์ส 101 Home Automation ฟรี เรียนได้ทุกที่'],
                    ['n'=>'04','title'=>'รับเอกสารการขาย','desc'=>'Catalog, Price List, สื่อการขาย พร้อมใช้ทันที'],
                    ['n'=>'05','title'=>'เริ่มขาย','desc'=>'รับออเดอร์แรก ส่งสินค้าถึงลูกค้า มีทีม Support ช่วย'],
                    ['n'=>'06','title'=>'ทีมสนับสนุนตลอด','desc'=>'มีปัญหา มีคำถาม ทีมงานพร้อมช่วยเสมอ 7 วัน/สัปดาห์'],
                ];
                @endphp
                @foreach($steps as $s)
                <div class="reveal flex gap-6 items-start" style="transition-delay:{{ $loop->index * 100 }}ms;">
                    <div style="width:3rem;height:3rem;border:1px solid rgba(201,169,110,.3);display:flex;align-items:center;justify-content:center;flex-shrink:0;position:relative;z-index:1;background:#0a0a0a;">
                        <span style="color:#c9a96e;font-size:.75rem;font-weight:700;">{{ $s['n'] }}</span>
                    </div>
                    <div class="pb-6 border-b border-white/5 flex-1" @if($loop->last) style="border:none;" @endif>
                        <h3 style="color:#fff;font-weight:600;font-size:1rem;margin-bottom:.35rem;">{{ $s['title'] }}</h3>
                        <p style="color:rgba(255,255,255,.4);font-size:.85rem;line-height:1.6;">{{ $s['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ========== FAQ ========== --}}
<section class="py-28 px-8 md:px-16 lg:px-24 bg-[#050505]">
    <div class="max-w-3xl mx-auto">
        <div class="mb-16 reveal">
            <p class="section-label">FAQ</p>
            <h2 style="font-size:clamp(2rem,5vw,3rem);font-weight:700;color:#fff;margin-bottom:.75rem;">คำถามที่พบบ่อย</h2>
            <div class="line-gold"></div>
        </div>
        @php
        $faqs = [
            ['q'=>'ต้องมีหน้าร้านหรือไม่?','a'=>'ไม่จำเป็น สามารถขายออนไลน์ผ่าน LINE, Facebook, หรือแนะนำลูกค้าได้เลย ไม่ต้องลงทุนหน้าร้าน'],
            ['q'=>'ต้องสต็อกสินค้าหรือไม่?','a'=>'ไม่บังคับ สามารถสั่งตามออเดอร์ลูกค้าได้ ทีมงานจะแจ้ง Lead Time ให้ทราบล่วงหน้า'],
            ['q'=>'มีขั้นต่ำการสั่งซื้อหรือไม่?','a'=>'ไม่มีขั้นต่ำ เริ่มต้นจากชิ้นเดียวก็ได้ ยิ่งสั่งมากยิ่งได้ราคาดี'],
            ['q'=>'บริษัทช่วยออกแบบระบบให้หรือไม่?','a'=>'ช่วยได้ครับ ทีม Technical Support พร้อมช่วยออกแบบ Wiring Diagram และแนะนำสินค้าที่เหมาะสมกับโปรเจกต์'],
            ['q'=>'บริษัทช่วยอบรมหรือไม่?','a'=>'มีคอร์สออนไลน์ฟรี "101 Home Automation" ครอบคลุมตั้งแต่พื้นฐานถึงการติดตั้งและการขาย'],
        ];
        @endphp
        <div class="space-y-3">
            @foreach($faqs as $i => $faq)
            <div class="reveal faq-item border border-white/8 overflow-hidden" style="transition-delay:{{ $i * 80 }}ms;">
                <button class="faq-toggle w-full flex justify-between items-center p-5 text-left" onclick="toggleFaq(this)">
                    <span style="color:#fff;font-size:.9rem;font-weight:500;">{{ $faq['q'] }}</span>
                    <span class="faq-icon" style="color:#c9a96e;font-size:1.2rem;flex-shrink:0;transition:transform .3s;">+</span>
                </button>
                <div class="faq-answer" style="max-height:0;overflow:hidden;transition:max-height .3s ease;">
                    <p style="color:rgba(255,255,255,.5);font-size:.85rem;line-height:1.7;padding:0 1.25rem 1.25rem;">{{ $faq['a'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ========== APPLY CTA ========== --}}
<section class="py-28 px-8 md:px-16 lg:px-24 bg-[#0a0a0a] border-t border-white/5" id="apply">
    <div class="max-w-3xl mx-auto text-center">
        <p class="section-label reveal mx-auto">เริ่มต้นได้เลย</p>
        <h2 class="reveal" style="font-size:clamp(2rem,5vw,3.5rem);font-weight:700;color:#fff;margin-bottom:1rem;">
            พร้อมร่วมทีม<br><span class="gradient-gold">S.SMART</span> แล้วหรือยัง?
        </h2>
        <p class="reveal" style="color:rgba(255,255,255,.4);margin-bottom:2.5rem;line-height:1.7;">
            สมัครวันนี้ พูดคุยกับทีมงานฟรี ไม่มีค่าใช้จ่ายในการเป็นตัวแทน
        </p>
        <div class="flex flex-wrap gap-4 justify-center reveal">
            <a href="https://line.me/ti/p/~0982955259" target="_blank" rel="noopener noreferrer" class="btn-gold" style="padding:.9rem 3rem;font-size:.75rem;">
                สมัครผ่าน LINE
            </a>
            <a href="tel:0982955259" class="btn-outline" style="padding:.9rem 2.5rem;font-size:.75rem;">
                โทรสอบถาม
            </a>
        </div>
    </div>
</section>

@endsection

{{-- navbar scroll + reveal handled by resources/js/app.js --}}
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
