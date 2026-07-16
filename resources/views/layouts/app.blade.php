<!DOCTYPE html>
<html lang="th" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="S.Smart Luxury Switch — สวิตช์หรูคลาสสิก สมาร์ทโฮม และระบบอัตโนมัติระดับพรีเมียม">
    <title>@yield('title', 'S.SMART — Luxury Switch & Smart Home')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&family=Nunito:wght@700;900&display=swap" rel="stylesheet">

    {{-- noscript: make .reveal elements visible when JS is disabled --}}
    <noscript><style>.reveal { opacity: 1 !important; transform: none !important; }</style></noscript>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#0a0a0a] text-white antialiased">

    {{-- Navigation --}}
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 px-6 md:px-12 py-4 flex items-center justify-between">
        {{-- Logo --}}
        <a href="{{ route('home') }}" class="ssmart-logo text-[1.6rem] hover:opacity-80 transition-opacity duration-300" aria-label="SSMART Home">
            <span class="s-char">S</span><span class="smart-txt">SMART</span>
        </a>

        {{-- Desktop Nav --}}
        <div class="hidden lg:flex items-center gap-8">
            <a href="{{ route('home') }}#about" class="nav-link">Home</a>
            <a href="{{ route('home') }}#categories" class="nav-link">Product</a>
            <a href="{{ route('home') }}#portfolio" class="nav-link">ผลงาน</a>
            <a href="{{ route('dealer') }}" class="nav-link">Dealer</a>
            <a href="{{ route('training') }}" class="nav-link">Knowledge center</a>
            <a href="{{ route('home') }}#Contact Us" class="nav-link">Contact Us</a>
        </div>

        {{-- CTA --}}
        <div class="hidden lg:flex items-center gap-4">
            <a href="{{ config('site.store_url') }}" target="_blank" rel="noopener noreferrer"
               class="text-xs tracking-widest uppercase text-[#c9a96e] border border-[#c9a96e] px-5 py-2 hover:bg-[#c9a96e] hover:text-black transition-all duration-300">
                Shop Now
            </a>
        </div>

        {{-- Mobile Menu Button --}}
        <button id="mobile-menu-btn" class="lg:hidden flex flex-col gap-1.5 p-2"
                aria-label="เปิดเมนู" aria-expanded="false">
            <span class="w-6 h-px bg-white transition-all duration-300"></span>
            <span class="w-6 h-px bg-white transition-all duration-300"></span>
            <span class="w-4 h-px bg-white transition-all duration-300"></span>
        </button>
    </nav>

    {{-- Mobile Menu --}}
    <div id="mobile-menu" class="fixed inset-0 z-40 bg-black/95 backdrop-blur-sm hidden flex-col justify-center items-center gap-8">
        <a href="{{ route('home') }}#about" class="text-2xl tracking-widest uppercase text-white/70 hover:text-white mobile-nav-link">Home</a>
        <a href="{{ route('home') }}#categories" class="text-2xl tracking-widest uppercase text-white/70 hover:text-white mobile-nav-link">Product</a>
        <a href="{{ route('dealer') }}"   class="text-2xl tracking-widest uppercase text-white/70 hover:text-white mobile-nav-link">Dealer</a>
        <a href="{{ route('training') }}" class="text-2xl tracking-widest uppercase text-white/70 hover:text-white mobile-nav-link">Knowledge center</a>
        <a href="{{ route('home') }}#Contact Us" class="text-2xl tracking-widest uppercase text-white/70 hover:text-white mobile-nav-link">Contact Us</a>
        <a href="{{ config('site.store_url') }}" target="_blank" rel="noopener noreferrer"
           class="mt-4 text-sm tracking-widest uppercase text-[#c9a96e] border border-[#c9a96e] px-8 py-3 mobile-nav-link">
            Shop Now
        </a>
    </div>

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-[#050505] border-t border-white/5 py-16 px-8 md:px-16 lg:px-24">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                {{-- Brand --}}
                <div class="lg:col-span-2">
                    <div class="ssmart-logo-full mb-6">
                        <span class="ssmart-logo text-[2rem]" aria-label="SSMART">
                            <span class="s-char">S</span><span class="smart-txt">SMART</span>
                        </span>
                        <span class="ssmart-tagbar">HOME AUTOMATION</span>
                    </div>
                    <p class="text-white/40 text-sm leading-relaxed max-w-sm">
                        Smart Living Architect — เราออกแบบประสบการณ์การอยู่อาศัย
                        ด้วยเทคโนโลยีที่เรียบง่าย สวยงาม และเชื่อถือได้
                    </p>
                    <div class="flex gap-4 mt-6">
                        <a href="https://facebook.com/{{ config('site.facebook') }}"
                           target="_blank" rel="noopener noreferrer"
                           aria-label="Facebook: {{ config('site.facebook') }}"
                           class="w-9 h-9 border border-white/20 flex items-center justify-center text-white/40 hover:text-white hover:border-white/60 transition-all duration-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
                        </a>
                        <a href="https://instagram.com/{{ config('site.instagram') }}"
                           target="_blank" rel="noopener noreferrer"
                           aria-label="Instagram: {{ config('site.instagram') }}"
                           class="w-9 h-9 border border-white/20 flex items-center justify-center text-white/40 hover:text-white hover:border-white/60 transition-all duration-300">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg>
                        </a>
                        <a href="https://line.me/ti/p/~{{ config('site.line_id') }}"
                           target="_blank" rel="noopener noreferrer"
                           aria-label="LINE: {{ config('site.line_id') }}"
                           class="w-9 h-9 border border-white/20 flex items-center justify-center text-white/40 hover:text-white hover:border-white/60 transition-all duration-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M19.365 9.863c.349 0 .63.285.63.631 0 .345-.281.63-.63.63H17.61v1.125h1.755c.349 0 .63.283.63.63 0 .344-.281.629-.63.629h-2.386c-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.627-.63h2.386c.349 0 .63.285.63.63 0 .349-.281.63-.63.63H17.61v1.125h1.755zm-3.855 3.016c0 .27-.174.51-.432.596-.064.021-.133.031-.199.031-.211 0-.391-.09-.51-.25l-2.443-3.317v2.94c0 .344-.279.629-.631.629-.346 0-.626-.285-.626-.629V8.108c0-.27.173-.51.43-.595.06-.023.136-.033.194-.033.195 0 .375.104.495.254l2.462 3.33V8.108c0-.345.282-.63.63-.63.345 0 .63.285.63.63v4.771zm-5.741 0c0 .344-.282.629-.631.629-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.627-.63.349 0 .631.285.631.63v4.771zm-2.466.629H4.917c-.345 0-.63-.285-.63-.629V8.108c0-.345.285-.63.63-.63.348 0 .63.285.63.63v4.141h1.756c.348 0 .629.283.629.63 0 .344-.281.629-.629.629M24 10.314C24 4.943 18.615.572 12 .572S0 4.943 0 10.314c0 4.811 4.27 8.842 10.035 9.608.391.082.923.258 1.058.59.12.301.079.766.038 1.08l-.164 1.02c-.045.301-.24 1.186 1.049.645 1.291-.539 6.916-4.078 9.436-6.975C23.176 14.393 24 12.458 24 10.314"/></svg>
                        </a>
                    </div>
                </div>

                {{-- Pages --}}
                <div>
                    <h4 class="text-xs tracking-widest uppercase text-white/30 mb-6">Pages</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ route('home') }}#about"  class="text-sm text-white/50 hover:text-white transition-colors">Home</a></li>
                        <li><a href="{{ route('home') }}#categories" class="text-sm text-white/50 hover:text-white transition-colors">Product</a></li>
                        <li><a href="{{ route('dealer') }}"   class="text-sm text-white/50 hover:text-white transition-colors">Dealer Program</a></li>
                        <li><a href="{{ route('training') }}" class="text-sm text-white/50 hover:text-white transition-colors">Knowledge center</a></li>
                        <li><a href="{{ config('site.store_url') }}" target="_blank" rel="noopener noreferrer" class="text-sm text-white/50 hover:text-white transition-colors">Shop Online</a></li>
                    </ul>
                </div>

                {{-- Contact Us --}}
                <div>
                    <h4 class="text-xs tracking-widest uppercase text-white/30 mb-6">Contact Us</h4>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-2">
                            <span class="text-[#c9a96e] text-xs mt-0.5">TEL</span>
                            <div>
                                <a href="tel:{{ config('site.phone_1') }}" class="text-sm text-white/50 hover:text-white transition-colors block">09 8295 5259</a>
                                <a href="tel:{{ config('site.phone_2') }}" class="text-sm text-white/50 hover:text-white transition-colors block">09 2955 9455</a>
                            </div>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-[#c9a96e] text-xs">LINE</span>
                            <a href="https://line.me/ti/p/~{{ config('site.line_id') }}" target="_blank" rel="noopener noreferrer" class="text-sm text-white/50 hover:text-white transition-colors">{{ config('site.line_id') }}</a>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-[#c9a96e] text-xs">IG</span>
                            <a href="https://instagram.com/{{ config('site.instagram') }}" target="_blank" rel="noopener noreferrer" class="text-sm text-white/50 hover:text-white transition-colors">{{ config('site.instagram') }}</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-white/5 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-white/20 text-xs tracking-wider">
                    © {{ date('Y') }} S.Smart Automation Systems Co., Ltd. All rights reserved.
                </p>
                <div class="flex gap-6">
                    <a href="#" class="text-white/20 text-xs hover:text-white/40 transition-colors">Privacy Policy</a>
                    <a href="#" class="text-white/20 text-xs hover:text-white/40 transition-colors">Shop Policies</a>
                </div>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
