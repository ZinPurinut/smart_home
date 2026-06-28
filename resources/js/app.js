import './bootstrap';

// ── Navbar scroll effect (throttled with RAF + passive listener) ──────────────
const navbar = document.getElementById('navbar');
if (navbar) {
    let ticking = false;
    window.addEventListener('scroll', function () {
        if (!ticking) {
            requestAnimationFrame(function () {
                if (window.scrollY > 80) {
                    navbar.style.backgroundColor = 'rgba(0,0,0,0.92)';
                    navbar.style.backdropFilter = 'blur(12px)';
                    navbar.style.borderBottom = '1px solid rgba(255,255,255,0.05)';
                } else {
                    navbar.style.backgroundColor = '';
                    navbar.style.backdropFilter = '';
                    navbar.style.borderBottom = '';
                }
                ticking = false;
            });
            ticking = true;
        }
    }, { passive: true });
}

// ── Mobile menu with hamburger → X transformation ────────────────────────────
const mobileMenuBtn = document.getElementById('mobile-menu-btn');
const mobileMenu    = document.getElementById('mobile-menu');

if (mobileMenuBtn && mobileMenu) {
    const bars = mobileMenuBtn.querySelectorAll('span');

    function openMenu() {
        mobileMenu.classList.remove('hidden');
        mobileMenu.classList.add('flex');
        bars[0].style.cssText = 'transform:translateY(6px) rotate(45deg)';
        bars[1].style.cssText = 'opacity:0';
        bars[2].style.cssText = 'transform:translateY(-6px) rotate(-45deg);width:1.5rem';
        mobileMenuBtn.setAttribute('aria-expanded', 'true');
        mobileMenuBtn.setAttribute('aria-label', 'ปิดเมนู');
    }

    function closeMenu() {
        mobileMenu.classList.add('hidden');
        mobileMenu.classList.remove('flex');
        bars[0].style.cssText = '';
        bars[1].style.cssText = '';
        bars[2].style.cssText = '';
        mobileMenuBtn.setAttribute('aria-expanded', 'false');
        mobileMenuBtn.setAttribute('aria-label', 'เปิดเมนู');
    }

    mobileMenuBtn.addEventListener('click', function () {
        mobileMenu.classList.contains('hidden') ? openMenu() : closeMenu();
    });

    document.querySelectorAll('.mobile-nav-link').forEach(function (link) {
        link.addEventListener('click', closeMenu);
    });
}

// ── Scroll reveal (IntersectionObserver) ─────────────────────────────────────
const revealObserver = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
        if (entry.isIntersecting) entry.target.classList.add('visible');
    });
}, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

document.querySelectorAll('.reveal').forEach(function (el) {
    revealObserver.observe(el);
});
