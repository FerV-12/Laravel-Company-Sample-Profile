{{-- Header Component - Blade Template (Improved) --}}

<style>
    @keyframes slideDown {
        from { transform: translateY(-100%); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }

    @keyframes shimmer {
        0% { background-position: -200% 0; }
        100% { background-position: 200% 0; }
    }

    .header-blade {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1000;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        padding: 0;
        animation: slideDown 0.6s ease-out;
        border-bottom: 1px solid transparent;
        background: transparent;
        backdrop-filter: none;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
    }

    .header-blade::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(90deg, transparent, rgba(79, 172, 254, 0.03), transparent);
        background-size: 200% 100%;
        animation: shimmer 4s infinite;
        pointer-events: none;
    }

    .header-blade::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(90deg, transparent, rgba(79, 172, 254, 0.4), transparent);
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .header-blade.scrolled::after {
        opacity: 1;
    }

    .header-blade.scrolled {
    background: rgba(10, 17, 40, 0.98);
    backdrop-filter: blur(20px);
}


    .header-inner-blade {
        max-width: 1400px;
        margin: 0 auto;
        padding: 20px 40px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: relative;
        z-index: 1;
    }

    .logo-section-blade {
        display: flex;
        align-items: center;
        gap: 16px;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
    }

    .logo-section-blade:hover {
        transform: translateY(-2px);
    }

    .logo-blade {
        height: 50px;
        width: auto;
        object-fit: contain;
        filter: drop-shadow(0 0 20px rgba(79, 172, 254, 0.4));
        transition: all 0.4s ease;
    }

    .logo-blade:hover {
        filter: drop-shadow(0 0 30px rgba(79, 172, 254, 0.7));
        transform: scale(1.05) rotate(5deg);
    }

    .brand-name-blade {
        font-size: 20px;
        font-weight: 700;
        letter-spacing: -0.5px;
        background: linear-gradient(135deg, #ffffff 0%, #4facfe 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin: 0;
        white-space: nowrap;
        transition: all 0.3s ease;
    }

    .brand-name-blade:hover {
        letter-spacing: 0px;
    }

    .nav-menu-blade {
        display: flex;
        gap: 4px;
        align-items: center;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .nav-menu-blade a {
        position: relative;
        color: #fff;
        text-decoration: none;
        font-weight: 600;
        font-size: 15px;
        font-family: inherit;
        padding: 12px 20px;
        border-radius: 25px;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        display: block;
    }

    .nav-menu-blade a::after {
        content: '';
        position: absolute;
        bottom: 8px;
        left: 50%;
        transform: translateX(-50%) scaleX(0);
        width: 60%;
        height: 2px;
        background: linear-gradient(90deg, #4facfe, #00f2fe);
        transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        border-radius: 2px;
    }

    .nav-menu-blade a:hover {
        color: #4facfe;
        background: rgba(79, 172, 254, 0.08);
    }

    .nav-menu-blade a:hover::after {
        transform: translateX(-50%) scaleX(1);
    }

    .nav-menu-blade a.active {
        color: #4facfe;
    }

    .nav-menu-blade a.active::after {
        transform: translateX(-50%) scaleX(1);
    }

    /* Mobile Menu Button */
    .mobile-menu-btn-blade {
        display: none;
        flex-direction: column;
        gap: 6px;
        background: transparent;
        border: none;
        cursor: pointer;
        padding: 8px;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .mobile-menu-btn-blade:hover {
        background: rgba(79, 172, 254, 0.1);
    }

    .mobile-menu-btn-blade span {
        width: 28px;
        height: 3px;
        background: linear-gradient(90deg, #4facfe, #00f2fe);
        border-radius: 3px;
        transition: all 0.3s ease;
    }

    .mobile-menu-btn-blade.open span:nth-child(1) {
        transform: rotate(45deg) translate(8px, 8px);
    }

    .mobile-menu-btn-blade.open span:nth-child(2) {
        opacity: 0;
    }

    .mobile-menu-btn-blade.open span:nth-child(3) {
        transform: rotate(-45deg) translate(7px, -7px);
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
        .header-inner-blade {
            padding: 18px 30px;
        }

        .brand-name-blade {
            font-size: 18px;
        }

        .nav-menu-blade a {
            padding: 10px 16px;
            font-size: 14px;
        }
    }

    @media (max-width: 768px) {
        .header-inner-blade {
            padding: 16px 20px;
        }

        .brand-name-blade {
            font-size: 16px;
        }

        .logo-blade {
            height: 40px;
        }

        .mobile-menu-btn-blade {
            display: flex;
        }

        .nav-menu-blade {
            position: fixed;
            top: 78px;
            left: 0;
            right: 0;
            flex-direction: column;
            gap: 0;
            background: rgba(10, 17, 40, 0.98);
            padding: 20px;
            border-bottom: 1px solid rgba(79, 172, 254, 0.2);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.5);
            transform: translateY(-100%);
            opacity: 0;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            pointer-events: none;
            max-height: calc(100vh - 78px);
            overflow-y: auto;
        }

        .nav-menu-blade.open {
            transform: translateY(0);
            opacity: 1;
            pointer-events: all;
        }

        .nav-menu-blade a {
            width: 100%;
            text-align: center;
            padding: 16px 24px;
        }
    }

    @media (max-width: 480px) {
        .brand-name-blade {
            font-size: 14px;
        }
    }
</style>

<header class="header-blade site-header" id="site-header">
    <div class="header-inner-blade container">
        <a href="{{ url('/') }}" class="logo-section-blade logo-title">
            <img src="{{ asset('assets/images/GTLOGO.webp') }}" alt="Golden Tiger Logo" class="logo-blade logo">
            <h2 class="brand-name-blade">Golden Tiger Shipping Agencies</h2>
        </a>

        <button 
            class="mobile-menu-btn-blade"
            id="mobile-menu-toggle"
            aria-label="Toggle menu"
        >
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav class="site-nav">
            <ul class="nav-menu-blade" id="nav-menu">
                <li><a href="{{ route('home') }}" class="nav-link" data-target="home">Home</a></li>
                <li><a href="{{ route('home') }}#about" class="nav-link" data-target="about">About Us</a></li>
                <li><a href="{{ route('home') }}#services" class="nav-link" data-target="services">Services</a></li>
                <li><a href="{{ route('home') }}#fleet" class="nav-link" data-target="fleet">Fleets</a></li>
                <li><a href="{{ route('home') }}#contact" class="nav-link" data-target="contact">Contact Us</a></li>
            </ul>
        </nav>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const header = document.getElementById('site-header');
        const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
        const navMenu = document.getElementById('nav-menu');
        const navLinks = document.querySelectorAll('.nav-link');

        // Scroll effect
        let lastScroll = 0;
        window.addEventListener('scroll', function() {
            const currentScroll = window.scrollY;

            if (currentScroll > 20) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }

            lastScroll = currentScroll;
        }, { passive: true });

        // Mobile menu toggle
        if (mobileMenuToggle) {
            mobileMenuToggle.addEventListener('click', function() {
                this.classList.toggle('open');
                navMenu.classList.toggle('open');
            });
        }

        // Smooth scroll to sections
        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                let href = this.getAttribute('href');

                // Only prevent default for hash links
                if (href.startsWith('#')) {
                    e.preventDefault();

                    const targetId = href.substring(1);
                    const targetSection = document.getElementById(targetId) ||
                                         document.querySelector(`[data-section="${targetId}"]`);

                    if (targetSection) {
                        // Close mobile menu
                        navMenu.classList.remove('open');
                        mobileMenuToggle.classList.remove('open');

                        // Smooth scroll
                        targetSection.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });

                        // Update active state
                        navLinks.forEach(l => l.classList.remove('active'));
                        this.classList.add('active');
                    }
                }
            });
        });

        // Intersection Observer for active state
        const sections = document.querySelectorAll('section[data-section]');
        
        if (sections.length > 0) {
            const observerOptions = {
                root: null,
                rootMargin: '-40% 0px -40% 0px',
                threshold: 0
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const sectionName = entry.target.getAttribute('data-section');

                        navLinks.forEach(link => {
                            link.classList.remove('active');
                            if (link.getAttribute('data-target') === sectionName) {
                                link.classList.add('active');
                            }
                        });
                    }
                });
            }, observerOptions);

            sections.forEach(section => observer.observe(section));
        }

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!e.target.closest('.header-blade') && navMenu.classList.contains('open')) {
                navMenu.classList.remove('open');
                mobileMenuToggle.classList.remove('open');
            }
        });
    });

</script>