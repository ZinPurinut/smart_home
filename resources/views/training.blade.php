@extends('layouts.app')

@section('title', 'S.SMART — 101 Home Automation | คอร์สอบรมระบบบ้านอัจฉริยะ')

@section('content')

{{-- ========== HERO ========== --}}
<section class="section-full" style="background:#030305;">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-[#00050d] via-black to-black"></div>
        <div class="absolute inset-0" style="background:radial-gradient(ellipse 80% 60% at 50% 40%, rgba(74,144,217,0.06) 0%, transparent 70%);"></div>
        <div class="absolute inset-0" style="background-image:linear-gradient(rgba(74,144,217,0.04) 1px,transparent 1px),linear-gradient(90deg,rgba(74,144,217,0.04) 1px,transparent 1px);background-size:80px 80px;"></div>
    </div>
    <div class="section-overlay" style="background:linear-gradient(to top,#000 0%,rgba(0,0,0,.4) 55%,transparent 100%);"></div>

    <div class="section-content">
        <p class="section-label reveal" style="color:rgba(74,144,217,.7);">S.Smart Academy</p>
        <h1 class="section-title reveal" style="font-size:clamp(3rem,9vw,7rem);">
            101<br>
            <span style="color:#4a90d9;">HOME</span><br>
            AUTOMATION
        </h1>
        <p class="section-subtitle reveal">
            จากพื้นฐานสู่มืออาชีพ<br>
            เรียนฟรี เรียนได้ทุกที่ ทุกเวลา
        </p>
        <div class="flex flex-wrap gap-4 reveal">
            <a href="#start" class="btn-gold">เริ่มเรียนฟรี</a>
            <a href="#curriculum" class="btn-outline">ดูหลักสูตร</a>
        </div>
    </div>

    {{-- Stats bar --}}
    <div class="absolute bottom-0 left-0 right-0 border-t border-white/5" style="background:rgba(0,0,0,.6);backdrop-filter:blur(10px);">
        <div class="max-w-7xl mx-auto px-8 py-4 grid grid-cols-3 gap-4">
            @foreach([['10','บทเรียน'],['ฟรี','ค่าเรียน'],['Online','เรียนได้ทุกที่']] as $s)
            <div class="text-center">
                <div class="gradient-gold" style="font-size:1.3rem;font-weight:700;">{{ $s[0] }}</div>
                <div style="color:rgba(255,255,255,.3);font-size:.7rem;letter-spacing:.1em;">{{ $s[1] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ========== WHO IS IT FOR ========== --}}
<section class="py-28 px-8 md:px-16 lg:px-24 bg-[#0a0a0a]" id="who">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <p class="section-label reveal">เหมาะกับ</p>
                <h2 class="reveal" style="font-size:clamp(2rem,5vw,3.5rem);font-weight:700;color:#fff;margin-bottom:1.5rem;line-height:1.15;">
                    คอร์สนี้<br>
                    <span class="gradient-gold">เหมาะกับใคร?</span>
                </h2>
                <div class="line-gold mb-8 reveal"></div>
                <p class="reveal" style="color:rgba(255,255,255,.5);line-height:1.8;margin-bottom:1.5rem;">
                    ออกแบบมาสำหรับผู้ที่ต้องการก้าวเข้าสู่วงการ Smart Home ไม่ว่าจะเป็นมืออาชีพที่ต้องการต่อยอดความรู้ หรือผู้เริ่มต้นที่อยากเข้าใจระบบตั้งแต่พื้นฐาน
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4 reveal">
                @php
                $targets = [
                    ['icon'=>'⬡','title'=>'ผู้รับเหมา','desc'=>'ต่อยอดงานก่อสร้างสู่งาน Smart Home'],
                    ['icon'=>'⚡','title'=>'ช่างไฟฟ้า','desc'=>'เพิ่ม Skill ด้าน IoT และระบบอัตโนมัติ'],
                    ['icon'=>'◉','title'=>'ช่างกล้องวงจรปิด','desc'=>'รวม CCTV กับ Smart Security System'],
                    ['icon'=>'◎','title'=>'ร้านอุปกรณ์ไฟฟ้า','desc'=>'เข้าใจสินค้า Smart Home ขายได้ถูกต้อง'],
                    ['icon'=>'◈','title'=>'ตัวแทนจำหน่าย','desc'=>'ความรู้พื้นฐานสำหรับการขาย'],
                    ['icon'=>'⌂','title'=>'เจ้าของบ้าน','desc'=>'ติดตั้งและใช้งานระบบด้วยตัวเอง'],
                ];
                @endphp
                @foreach($targets as $t)
                <div class="border border-white/5 p-5 hover:border-[#4a90d9]/30 transition-all duration-300" style="transition-delay:{{ $loop->index * 60 }}ms;">
                    <div style="color:#4a90d9;font-size:1.5rem;margin-bottom:.5rem;">{{ $t['icon'] }}</div>
                    <h3 style="color:#fff;font-weight:600;font-size:.85rem;margin-bottom:.25rem;">{{ $t['title'] }}</h3>
                    <p style="color:rgba(255,255,255,.3);font-size:.75rem;line-height:1.5;">{{ $t['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ========== LEARNING OUTCOMES ========== --}}
<section class="py-28 px-8 md:px-16 lg:px-24 bg-[#050505]" id="outcomes">
    <div class="max-w-5xl mx-auto">
        <div class="mb-16 text-center reveal">
            <p class="section-label mx-auto">หลังเรียนจบ</p>
            <h2 style="font-size:clamp(2rem,5vw,3.5rem);font-weight:700;color:#fff;margin-bottom:.75rem;">คุณจะสามารถ...</h2>
            <div class="line-gold mx-auto"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @php
            $outcomes = [
                ['icon'=>'◈','text'=>'ออกแบบระบบ Smart Home เบื้องต้นได้ด้วยตัวเอง'],
                ['icon'=>'◎','text'=>'เลือกสินค้าได้ถูกต้องตามความต้องการลูกค้า'],
                ['icon'=>'⬡','text'=>'ติดตั้งและ Config ระบบ WiFi/Zigbee ได้'],
                ['icon'=>'⚡','text'=>'ขายสินค้าและอธิบายระบบให้ลูกค้าเข้าใจได้'],
                ['icon'=>'◉','text'=>'ให้คำปรึกษาด้าน Smart Home ในระดับพื้นฐานถึงกลางได้'],
                ['icon'=>'◇','text'=>'ต่อยอดเป็น Smart Home Installer มืออาชีพ'],
            ];
            @endphp
            @foreach($outcomes as $o)
            <div class="reveal flex gap-4 items-start p-5 border border-white/5 hover:border-[#4a90d9]/30 transition-all duration-300" style="transition-delay:{{ $loop->index * 80 }}ms;">
                <span style="color:#4a90d9;font-size:1.3rem;flex-shrink:0;line-height:1.3;">{{ $o['icon'] }}</span>
                <span style="color:rgba(255,255,255,.75);font-size:.9rem;line-height:1.6;">{{ $o['text'] }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ========== CURRICULUM ========== --}}
<section class="py-28 px-8 md:px-16 lg:px-24 bg-[#0a0a0a]" id="curriculum">
    <div class="max-w-4xl mx-auto">
        <div class="mb-16 reveal">
            <p class="section-label">หลักสูตร</p>
            <h2 style="font-size:clamp(2rem,5vw,3.5rem);font-weight:700;color:#fff;margin-bottom:.75rem;">เนื้อหาคอร์ส 10 บท</h2>
            <div class="line-gold"></div>
        </div>
        @php
        $chapters = [
            ['n'=>1,'title'=>'บ้านอัจฉริยะคืออะไร','desc'=>'ความหมาย ประโยชน์ ตัวอย่างการใช้งานจริง และเทรนด์ตลาด Smart Home ในไทย','tag'=>'Foundation'],
            ['n'=>2,'title'=>'ระบบสื่อสาร','desc'=>'WiFi, Zigbee, Z-Wave, Bluetooth, Matter — ความแตกต่าง ข้อดีข้อเสีย และการเลือกใช้','tag'=>'Protocol'],
            ['n'=>3,'title'=>'สวิตช์ไฟอัจฉริยะ','desc'=>'ประเภท การติดตั้ง การ Config บน Tuya App การตั้ง Scene และ Automation','tag'=>'Core'],
            ['n'=>4,'title'=>'ระบบแอร์','desc'=>'IR Controller, Smart Thermostat, การเชื่อมต่อ, การตั้ง Schedule ประหยัดพลังงาน','tag'=>'Core'],
            ['n'=>5,'title'=>'ระบบม่าน','desc'=>'Curtain Motor ประเภทต่างๆ การ Calibration, Zigbee vs WiFi Motor, การตั้ง Automation','tag'=>'Core'],
            ['n'=>6,'title'=>'ระบบรักษาความปลอดภัย','desc'=>'Smart Lock, Video Door Phone, Auto Gate, Motion Sensor, การตั้ง Notification Alert','tag'=>'Security'],
            ['n'=>7,'title'=>'เซ็นเซอร์','desc'=>'PIR, Door/Window, Smoke, Water Leak, Temperature — การติดตั้งและการตั้ง Automation','tag'=>'Sensor'],
            ['n'=>8,'title'=>'Gateway และ Home Assistant','desc'=>'Zigbee Hub, Home Assistant OS, การ Integrate Tuya กับ HA, การใช้ Dashboard','tag'=>'Advanced'],
            ['n'=>9,'title'=>'การออกแบบระบบ','desc'=>'การสำรวจบ้าน, การเขียน Proposal, การทำ Wiring Diagram, การประเมินราคา','tag'=>'Design'],
            ['n'=>10,'title'=>'Workshop','desc'=>'ฝึกปฏิบัติจริง Config ระบบตัวอย่าง ทดสอบ Scene, ทดสอบ Automation, แก้ปัญหาเบื้องต้น','tag'=>'Practice'],
        ];
        @endphp
        <div class="space-y-3">
            @foreach($chapters as $ch)
            <div class="reveal flex gap-5 items-start p-5 border border-white/5 hover:border-[#4a90d9]/20 hover:bg-[#050810] transition-all duration-300" style="transition-delay:{{ $loop->index * 60 }}ms;">
                <div style="width:2.5rem;height:2.5rem;border:1px solid rgba(74,144,217,.3);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                    <span style="color:#4a90d9;font-size:.75rem;font-weight:700;">{{ str_pad($ch['n'],2,'0',STR_PAD_LEFT) }}</span>
                </div>
                <div style="flex:1;">
                    <div class="flex items-start justify-between gap-3 mb-1">
                        <h3 style="color:#fff;font-weight:600;font-size:.9rem;">{{ $ch['title'] }}</h3>
                        <span style="background:rgba(74,144,217,.1);color:#4a90d9;font-size:.65rem;letter-spacing:.1em;padding:.2rem .6rem;white-space:nowrap;flex-shrink:0;">{{ $ch['tag'] }}</span>
                    </div>
                    <p style="color:rgba(255,255,255,.35);font-size:.8rem;line-height:1.6;">{{ $ch['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ========== WHAT YOU GET ========== --}}
<section class="py-28 px-8 md:px-16 lg:px-24 bg-[#050505]">
    <div class="max-w-7xl mx-auto">
        <div class="mb-16 reveal">
            <p class="section-label">สิ่งที่จะได้รับ</p>
            <h2 style="font-size:clamp(2rem,5vw,3.5rem);font-weight:700;color:#fff;margin-bottom:.75rem;">รวมมูลค่ามหาศาล — ฟรีทั้งหมด</h2>
            <div class="line-gold"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-px bg-white/5">
            @php
            $gets = [
                ['icon'=>'◎','title'=>'คู่มือการเรียน','desc'=>'PDF Summary แต่ละบท พร้อม Key Points'],
                ['icon'=>'◈','title'=>'Catalog สินค้า','desc'=>'สินค้าครบทุก SKU พร้อม Spec ละเอียด'],
                ['icon'=>'⬡','title'=>'Wiring Diagram','desc'=>'แบบการเดินสายไฟสำหรับระบบต่างๆ'],
                ['icon'=>'◉','title'=>'ตัวอย่างโครงการ','desc'=>'Case Study บ้านเดี่ยว คอนโด โรงแรม'],
                ['icon'=>'◇','title'=>'ใบประกาศนียบัตร','desc'=>'Certificate หลังผ่านการทดสอบ (เร็วๆ นี้)'],
            ];
            @endphp
            @foreach($gets as $g)
            <div class="reveal bg-[#0a0a0a] p-7 text-center hover:bg-[#050810] transition-colors duration-300" style="transition-delay:{{ $loop->index * 80 }}ms;">
                <div style="color:#4a90d9;font-size:2.5rem;margin-bottom:1rem;">{{ $g['icon'] }}</div>
                <h3 style="color:#fff;font-weight:600;font-size:.9rem;margin-bottom:.5rem;">{{ $g['title'] }}</h3>
                <p style="color:rgba(255,255,255,.35);font-size:.78rem;line-height:1.6;">{{ $g['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ========== LEARNING PROCESS ========== --}}
<section class="py-28 px-8 md:px-16 lg:px-24 bg-[#0a0a0a]">
    <div class="max-w-5xl mx-auto">
        <div class="mb-16 text-center reveal">
            <p class="section-label mx-auto">ขั้นตอนการเรียน</p>
            <h2 style="font-size:clamp(2rem,5vw,3.5rem);font-weight:700;color:#fff;margin-bottom:.75rem;">เริ่มเรียนง่ายมาก</h2>
            <div class="line-gold mx-auto"></div>
        </div>

        <div class="relative flex flex-col md:flex-row gap-0">
            @php
            $process = [
                ['n'=>'01','title'=>'สมัคร','desc'=>'กรอกชื่อ เบอร์โทร และ LINE ID'],
                ['n'=>'02','title'=>'เข้าสู่ระบบ','desc'=>'รับ Access ผ่าน LINE Official'],
                ['n'=>'03','title'=>'เรียนออนไลน์','desc'=>'วิดีโอ 10 บท เรียนได้ทุกที่ ทุกเวลา'],
                ['n'=>'04','title'=>'ทำแบบทดสอบ','desc'=>'Quiz ท้ายบท ตรวจสอบความเข้าใจ'],
                ['n'=>'05','title'=>'รับเอกสาร','desc'=>'Download คู่มือ Catalog Wiring Diagram'],
            ];
            @endphp
            @foreach($process as $p)
            <div class="reveal flex-1 flex flex-col md:items-center md:text-center" style="transition-delay:{{ $loop->index * 100 }}ms;">
                <div class="flex md:flex-col items-start md:items-center gap-4 md:gap-3 p-4">
                    <div style="width:3rem;height:3rem;border:1px solid rgba(74,144,217,.4);display:flex;align-items:center;justify-content:center;flex-shrink:0;background:#050810;">
                        <span style="color:#4a90d9;font-size:.75rem;font-weight:700;">{{ $p['n'] }}</span>
                    </div>
                    <div>
                        <div style="color:#fff;font-weight:600;font-size:.9rem;margin-bottom:.25rem;">{{ $p['title'] }}</div>
                        <div style="color:rgba(255,255,255,.35);font-size:.8rem;line-height:1.5;">{{ $p['desc'] }}</div>
                    </div>
                </div>
                @if(!$loop->last)
                <div class="hidden md:block text-center" style="color:rgba(74,144,217,.3);font-size:1rem;position:absolute;margin-top:1.4rem;" aria-hidden="true"></div>
                @endif
            </div>
            @if(!$loop->last)
            <div class="hidden md:flex items-start pt-8" style="color:rgba(74,144,217,.25);font-size:1.5rem;">→</div>
            @endif
            @endforeach
        </div>
    </div>
</section>

{{-- ========== START CTA ========== --}}
<section class="py-28 px-8 md:px-16 lg:px-24 bg-[#050505] border-t border-white/5" id="start">
    <div class="max-w-3xl mx-auto text-center">
        <p class="section-label reveal mx-auto" style="color:rgba(74,144,217,.7);">เริ่มต้นได้เลยวันนี้</p>
        <h2 class="reveal" style="font-size:clamp(2rem,5vw,3.5rem);font-weight:700;color:#fff;margin-bottom:1rem;">
            พร้อมก้าวเป็น<br>
            <span style="color:#4a90d9;">Smart Home Pro</span>?
        </h2>
        <p class="reveal" style="color:rgba(255,255,255,.4);margin-bottom:2.5rem;line-height:1.7;">
            คอร์สฟรี ไม่มีเงื่อนไข เริ่มเรียนได้ทันทีหลังสมัคร<br>
            เรียนจบแล้วสมัครเป็นตัวแทน S.SMART ได้เลย
        </p>
        <div class="flex flex-wrap gap-4 justify-center reveal">
            <a href="https://line.me/ti/p/~0982955259" target="_blank" rel="noopener noreferrer"
               class="btn-gold" style="padding:.9rem 3rem;font-size:.75rem;background:#4a90d9;color:#fff;">
                สมัครเรียนฟรีผ่าน LINE
            </a>
            <a href="{{ route('dealer') }}" class="btn-outline" style="padding:.9rem 2.5rem;font-size:.75rem;">
                สมัครเป็นตัวแทนด้วย
            </a>
        </div>
        <p class="reveal" style="color:rgba(255,255,255,.2);font-size:.75rem;margin-top:1.5rem;">
            ไม่มีค่าใช้จ่าย · ไม่มีข้อผูกมัด · เรียนได้ทุกที่ทุกเวลา
        </p>
    </div>
</section>

@endsection

{{-- JS handled by resources/js/app.js --}}
