@extends('layouts.app')

@section('title', "S.SMART — {$category['name']} | {$category['en']}")

@section('content')

{{-- ========== CATEGORY HERO ========== --}}
<section style="position:relative; background:#050505; padding:11rem 2rem 6rem; overflow:hidden;">
    <div class="absolute inset-0 overflow-hidden">
        <img src="{{ asset($category['image']) }}" alt="{{ $category['name'] }}"
             class="w-full h-full object-cover" style="opacity:0.25;">
        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/70 to-black/40"></div>
    </div>

    <div class="max-w-7xl mx-auto relative z-10">
        <p class="section-label reveal">หมวดผลิตภัณฑ์ {{ $category['no'] }} / 08 — {{ $category['en'] }}</p>
        <h1 class="reveal" style="font-size:clamp(2.5rem,6vw,4.5rem); font-weight:700; letter-spacing:-0.03em; color:#fff; line-height:1.1; margin-bottom:1.25rem;">
            {{ $category['name'] }}
        </h1>
        <p class="reveal" style="color:rgba(255,255,255,0.5); font-size:1rem; line-height:1.8; max-width:36rem; margin-bottom:2rem;">
            {{ $category['desc'] }}
        </p>
        <div class="flex flex-wrap gap-4 reveal">
            <a href="{{ config('site.store_url') }}" target="_blank" rel="noopener noreferrer" class="btn-gold">ดูสินค้าในร้านค้าออนไลน์</a>
            <a href="https://line.me/ti/p/~{{ config('site.line_id') }}" target="_blank" rel="noopener noreferrer" class="btn-outline">สอบถามผ่าน LINE</a>
        </div>
    </div>
</section>

@if($slug === 'smart-switch')
{{-- ========== AG GLASS FLAGSHIP (เฉพาะหมวดสวิตช์) ========== --}}
<section class="reveal" style="background:#000; padding:6rem 2rem; text-align:center;">
    <div class="max-w-4xl mx-auto">
        <p style="font-size:0.7rem; letter-spacing:0.35em; text-transform:uppercase; color:rgba(255,255,255,0.35); margin-bottom:1.5rem;">
            S.SMART Flagship Series
        </p>
        <h2 style="font-size:clamp(2.2rem,5.5vw,4rem); font-weight:700; letter-spacing:-0.03em; color:#fff; line-height:1.1; margin-bottom:1rem;">
            วัสดุเดียวกับ
            <span style="background:linear-gradient(135deg,#e8e8e8 0%,#a0a0a0 40%,#ffffff 60%,#888 100%); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text;">iPhone.</span>
        </h2>
        <p style="font-size:1.05rem; color:rgba(255,255,255,0.45); margin:1.25rem 0 2.5rem; line-height:1.75;">
            สวิตช์ไฟ AG Glass ระดับ Premium — <strong style="color:rgba(255,255,255,0.75);">มีเราเจ้าเดียวในไทย</strong>
            ที่นำวัสดุ AG Glass จากอุตสาหกรรมเดียวกับที่ Apple ใช้ผลิต iPhone
            มาออกแบบเป็นสวิตช์ไฟสำหรับโครงการระดับไฮเอนด์
        </p>
        <img src="{{ asset('images/iphone-series/img561LUXURY_3.png') }}"
             alt="S.SMART AG Glass 4 สี ขาวมุก ทองแชมเปญ ดำโอปซิเดียน ดำกราไฟต์"
             class="w-full max-w-lg mx-auto block" style="border-radius:4px;">
        <div class="mt-8">
            <a href="https://www.ssmartluxuryswitch.com/salepage/iphone_series-salepage.aspx"
               target="_blank" rel="noopener noreferrer" class="btn-gold">ดู iPhone Series ทั้งหมด</a>
        </div>
    </div>
</section>
@endif

{{-- ========== PRODUCT GRID (SHELL — รอลงสินค้า) ========== --}}
<section class="reveal" style="background:#0a0a0a; padding:6rem 2rem;">
    <div class="max-w-7xl mx-auto">
        <div class="mb-12">
            <p class="section-label">สินค้าในหมวดนี้</p>
            <h2 style="font-size:clamp(1.8rem,4vw,2.8rem); font-weight:700; letter-spacing:-0.02em; color:#fff;">
                สินค้าแนะนำ — {{ $category['name'] }}
            </h2>
        </div>

        @if(!empty($category['products']))
        {{-- สินค้าจริงจากอัลบั้มภาพสินค้า — น้องใบพลูเพิ่ม/แก้รายการได้ที่ config/categories.php --}}
        <div class="grid grid-cols-2 md:grid-cols-4 gap-px" style="background:rgba(255,255,255,0.05);">
            @foreach($category['products'] as $product)
            <div style="background:#0a0a0a; display:flex; flex-direction:column;">
                <div style="aspect-ratio:1/1; overflow:hidden; background:#111;">
                    <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}"
                         class="w-full h-full object-cover" loading="lazy">
                </div>
                <div style="padding:1rem 1.25rem 1.5rem;">
                    <div style="color:rgba(255,255,255,0.85); font-size:0.85rem; font-weight:600; line-height:1.45;">{{ $product['name'] }}</div>
                    @if(!empty($product['spec']))
                    <div style="color:rgba(255,255,255,0.35); font-size:0.72rem; margin-top:0.35rem;">{{ $product['spec'] }}</div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
        @else
        {{-- TODO: ทีมงานลงสินค้าจริงแทนการ์ด placeholder ด้านล่างนี้ (เพิ่ม 'products' ใน config/categories.php) --}}
        <div class="grid grid-cols-2 md:grid-cols-4 gap-px" style="background:rgba(255,255,255,0.05);">
            @for($i = 1; $i <= 4; $i++)
            <div style="background:#0a0a0a; aspect-ratio:1/1.15; display:flex; flex-direction:column; align-items:center; justify-content:center; gap:0.75rem; padding:1.5rem; text-align:center;">
                <div style="width:52px; height:52px; border:1px dashed rgba(201,169,110,0.3); border-radius:50%; display:flex; align-items:center; justify-content:center; color:rgba(201,169,110,0.4); font-size:1.3rem;">+</div>
                <div style="font-size:0.7rem; letter-spacing:0.2em; text-transform:uppercase; color:rgba(255,255,255,0.2);">Coming Soon</div>
                <div style="font-size:0.75rem; color:rgba(255,255,255,0.3); line-height:1.5;">สินค้ากำลังทยอยอัปเดต<br>โดยทีมงาน S.SMART</div>
            </div>
            @endfor
        </div>
        @endif

        <p style="color:rgba(255,255,255,0.3); font-size:0.85rem; text-align:center; margin-top:2rem;">
            ระหว่างนี้สามารถดูสินค้าทั้งหมดได้ที่
            <a href="{{ config('site.store_url') }}" target="_blank" rel="noopener noreferrer" style="color:#c9a96e; text-decoration:underline;">ร้านค้าออนไลน์ของเรา</a>
            หรือสอบถามทีมงานผ่าน LINE: {{ config('site.line_id') }}
        </p>
    </div>
</section>

{{-- ========== OTHER CATEGORIES ========== --}}
<section class="reveal" style="background:#050505; padding:5rem 2rem;">
    <div class="max-w-7xl mx-auto">
        <div class="mb-10">
            <p class="section-label">หมวดอื่น ๆ</p>
            <h2 style="font-size:clamp(1.5rem,3vw,2.2rem); font-weight:700; color:#fff;">ดูระบบอื่นใน Smart Living Ecosystem</h2>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
            @foreach($categories as $catSlug => $cat)
                @continue($catSlug === $slug)
                <a href="{{ route('category', $catSlug) }}"
                   class="block p-5 border border-white/5 hover:border-[#c9a96e]/40 transition-all duration-300">
                    <div style="font-size:0.6rem; letter-spacing:0.25em; color:#c9a96e; margin-bottom:0.5rem;">{{ $cat['no'] }}</div>
                    <div style="color:rgba(255,255,255,0.75); font-size:0.85rem; font-weight:600; line-height:1.4;">{{ $cat['name'] }}</div>
                </a>
            @endforeach
        </div>
    </div>
</section>

@endsection
