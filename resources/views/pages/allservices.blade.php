@extends('layouts.app')

@section('content')

<style>
/* ==================== BASE STYLES ==================== */
.services-all-section {
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    position: relative;
    color: #fff;
    padding: 140px 20px 60px;
    background: #0a1128;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
    overflow: hidden;
}

/* ==================== BACKGROUND ==================== */
.bg-image {
    position: absolute;
    inset: 0;
    background-size: cover;
    background-position: center;
    opacity: 0.3;
    z-index: 0;
    transition: opacity 0.5s ease-in-out;
}

.bg-image.hide {
    opacity: 0;
}

/* ==================== CONTENT BOX ==================== */
.content-box {
    position: relative;
    z-index: 1;
    max-width: 800px;
    width: 100%;
    background: rgba(10, 17, 40, 0.9);
    padding: 45px 55px;
    border-radius: 20px;
    text-align: left;
    margin-bottom: 30px;
    backdrop-filter: blur(12px);
    border: 1px solid rgba(79, 172, 254, 0.25);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
    transition: opacity 0.5s ease-in-out;
}

.content-box.hide {
    opacity: 0;
}

.service-icon {
    font-size: 42px;
    margin-bottom: 18px;
    display: inline-block;
    animation: float 3s ease-in-out infinite;
}

@keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}

.service-title {
    font-size: 38px;
    font-weight: 700;
    margin-bottom: 20px;
    letter-spacing: -0.8px;
    color: #fff;
    background: linear-gradient(135deg, #fff, #4facfe);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    line-height: 1.2;
}

.description-container {
    max-height: 350px;
    overflow-y: auto;
    padding-right: 15px;
}

/* Custom scrollbar */
.description-container::-webkit-scrollbar {
    width: 8px;
}

.description-container::-webkit-scrollbar-track {
    background: rgba(255, 255, 255, 0.08);
    border-radius: 10px;
}

.description-container::-webkit-scrollbar-thumb {
    background: rgba(79, 172, 254, 0.5);
    border-radius: 10px;
}

.description-container::-webkit-scrollbar-thumb:hover {
    background: rgba(79, 172, 254, 0.7);
}

.service-description {
    font-size: 16px;
    line-height: 1.8;
    color: #cbd5e1;
    font-weight: 400;
    white-space: pre-line;
    text-align: justify;
    text-justify: inter-word;
}

/* ==================== NAVIGATION ARROWS ==================== */
.nav-arrow-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    font-size: 26px;
    background: rgba(26, 31, 58, 0.85);
    border: 1px solid rgba(79, 172, 254, 0.3);
    color: #fff;
    padding: 14px 18px;
    border-radius: 50%;
    cursor: pointer;
    z-index: 2;
    transition: all 0.3s ease;
    backdrop-filter: blur(8px);
}

.nav-arrow-btn:hover {
    background: rgba(79, 172, 254, 0.4);
    transform: translateY(-50%) scale(1.1);
    box-shadow: 0 5px 15px rgba(79, 172, 254, 0.5);
}

.nav-arrow-btn:active {
    transform: translateY(-50%) scale(0.95);
}

.nav-arrow-btn:disabled {
    opacity: 0.3;
    cursor: not-allowed;
}

.nav-arrow-btn.left {
    left: 20px;
}

.nav-arrow-btn.right {
    right: 20px;
}

/* ==================== DOTS NAVIGATION ==================== */
.dots-container {
    display: flex;
    gap: 12px;
}

.dot {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: #888;
    cursor: pointer;
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.dot:hover {
    background: #4facfe;
    transform: scale(1.2);
}

.dot.active {
    transform: scale(1.5);
    background: #4facfe;
    border-color: rgba(79, 172, 254, 0.4);
    box-shadow: 0 0 12px rgba(79, 172, 254, 0.6);
}

/* ==================== BACK BUTTON ==================== */
.controls-wrapper {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 18px;
    margin-top: 24px;
    z-index: 2;
}

.back-home-btn {
    padding: 13px 32px;
    border-radius: 28px;
    border: none;
    background: linear-gradient(135deg, #4facfe, #00f2fe);
    color: #fff;
    cursor: pointer;
    font-weight: 700;
    font-size: 15px;
    font-family: inherit;
    transition: all 0.3s ease;
    box-shadow: 0 8px 25px rgba(79, 172, 254, 0.4);
    position: relative;
    overflow: hidden;
    letter-spacing: 0.3px;
}

.back-home-btn::before {
    content: '';
    position: absolute;
    inset: 0;
    left: -100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: 0.5s;
}

.back-home-btn:hover::before {
    left: 100%;
}

.back-home-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 30px rgba(79, 172, 254, 0.6);
}

.back-home-btn:active {
    transform: translateY(0);
}

/* ==================== PROGRESS BAR ==================== */
.progress-bar {
    position: absolute;
    bottom: 0;
    left: 0;
    height: 4px;
    background: linear-gradient(90deg, #4facfe, #00f2fe);
    transition: width 0.3s ease;
    z-index: 3;
    box-shadow: 0 0 10px rgba(79, 172, 254, 0.5);
}

/* ==================== RESPONSIVE ==================== */
@media (max-width: 768px) {
    .services-all-section {
        padding: 100px 15px 40px;
    }

    .content-box {
        padding: 32px 28px;
        max-width: 95%;
    }

    .service-title {
        font-size: 30px;
    }

    .service-icon {
        font-size: 36px;
    }

    .service-description {
        font-size: 15px;
        line-height: 1.7;
    }

    .nav-arrow-btn {
        padding: 11px 15px;
        font-size: 22px;
    }

    .nav-arrow-btn.left {
        left: 10px;
    }

    .nav-arrow-btn.right {
        right: 10px;
    }

    .description-container {
        max-height: 280px;
    }
}

@media (max-width: 480px) {
    .service-title {
        font-size: 26px;
    }

    .service-description {
        font-size: 14px;
        text-align: left;
    }

    .back-home-btn {
        padding: 11px 28px;
        font-size: 14px;
    }

    .content-box {
        padding: 28px 24px;
    }
}
</style>

<section id="services" class="services-all-section">

    {{-- BACKGROUND IMAGE --}}
    <div id="bgImage" class="bg-image"></div>

    {{-- PROGRESS BAR --}}
    <div id="progressBar" class="progress-bar"></div>

    {{-- CONTENT BOX --}}
    <div id="contentBox" class="content-box">
        <div id="icon" class="service-icon"></div>
        <h1 id="title" class="service-title"></h1>
        <div class="description-container">
            <p id="description" class="service-description"></p>
        </div>
    </div>

    {{-- NAVIGATION ARROWS --}}
    <button onclick="prevSlide()" class="nav-arrow-btn left" aria-label="Previous service">
        ←
    </button>
    <button onclick="nextSlide()" class="nav-arrow-btn right" aria-label="Next service">
        →
    </button>

    {{-- DOTS + BACK BUTTON --}}
    <div class="controls-wrapper">
        <div id="dots" class="dots-container" role="tablist" aria-label="Service navigation"></div>

        <a href="{{ route('home') }}#services">
            <button class="back-home-btn">
                ← Back to Home
            </button>
        </a>
    </div>

</section>

<script>
// ==================== DATA ====================
const services = [
    {
        title: "Liner Container Agency Services",
        description: `Our company specializes in providing comprehensive logistical support for port operations, ensuring seamless customs clearance procedures, efficiently managing the loading and discharging of containers, and offering a wide range of services along the major shipping routes of the world.
                      
                      We pride ourselves on delivering top-quality solutions that enhance the efficiency and reliability of global trade, all while maintaining a commitment to offering our services at the most competitive prices in the industry.
                      
                      Our dedicated team of experts works tirelessly to optimize the movement of goods, from the moment they arrive at the port to their final destination, making us the preferred choice for businesses looking to streamline their international shipping operations.`,
        image: "{{ asset('assets/images/services2.webp') }}",
        icon: "🚢"
    },
    {
        title: "Port Agency Services",
        description: `We represent principals at the local level with dedicated monitoring at port calls to ensure the utmost dispatch of vessels. Acting as agents on behalf of ship operators and charterers, we take full responsibility for processing essential documents and managing port cargo operations, as well as providing comprehensive reporting and accounting services.
                      
        Our team delivers personalized service and support tailored to meet the unique needs of each client. We pride ourselves on our commitment to efficiency, reliability, and excellence in all aspects of port agency operations.
                      With our extensive experience and professional approach, we guarantee seamless coordination and management of all port-related activities, ensuring your vessels receive the highest standard of care and attention.`,
        image: "{{ asset('assets/images/port serv.webp') }}",
        icon: "⚓"
    },
    {
        title: "Chartering Services",
        description: `At GTSAI, our chartering solutions are meticulously crafted to cater primarily to the transportation needs of the corporate sector. Our fleet of ships stands ready to handle substantial cargo volumes with unwavering confidence. We recognize that not every business wants to make a long-term investment in vessel ownership. Therefore, we've devised a strategy to optimize our maritime investments by leasing out our ships, granting third parties seamless access to reliable and efficient maritime transport solutions.
                      
        Our extensive network includes direct relationships with a multitude of customers, predominantly hailing from the corporate sector. These customers often seek to transport goods regularly and on a significant scale. To accommodate their needs, we offer long-term ship chartering arrangements, ensuring a steady flow of income from transport operations while securing the rental income for our ships. This symbiotic approach allows us to maintain a robust and sustainable fleet, enhancing our commitment to meeting the diverse and evolving demands of the corporate shipping landscape.
                      
        In the dynamic world of maritime commerce, GTSAI's dedicated team stands as a beacon of trust and reliability. We leverage our expertise to keenly analyze market trends and identify emerging business opportunities for chartering vessels. By partnering with us, you gain access to a wealth of experience that will guide you toward unparalleled success. Seize the abundant opportunities offered by GTSAI's chartering services, and let us navigate you towards a future filled with prosperity and growth.`,
        image: "{{ asset('assets/images/port1.webp') }}",
        icon: "📋"
    },
    {
        title: "Dredging Services",
        description: `GTSAI boasts a fleet of state-of-the-art domestic dredging vessels that adhere to rigorous international standards. These highly capable vessels are strategically deployed across various projects throughout the country, offering versatile solutions for a wide range of dredging assignments. Whether your project demands the deepening of drafts to facilitate larger vessels, the efficient loading and unloading of sand and valuable minerals, or the intricate management of siltation challenges, our vessels are equipped and ready to excel.
                     
        Our commitment to excellence extends beyond vessel ownership. We take pride in our ability to cater to the diverse needs of our clients, tailoring our services to provide the most effective and efficient dredging solutions available. With a proven track record of success, we offer more than just vessels; we offer expertise, reliability, and a deep understanding of the intricacies involved in dredging projects.
                     
        At GTSAI, we are dedicated to optimizing the performance of our dredging vessels and ensuring their seamless integration into your projects. Our vessels are not just tools; they are the embodiment of our commitment to meeting and exceeding the demands of modern dredging assignments. Partner with us to access a fleet that guarantees precision and efficiency, and let us transform your dredging challenges into opportunities for success.`,
        image: "{{ asset('assets/images/dredging.webp') }}",
        icon: "🏗️"
    },
    {
        title: "Project Logistics Services",
        description: `At Golden Tiger Shipping Agencies Inc., we pride ourselves on our unwavering commitment to handling even the heaviest of cargo with unparalleled expertise and unwavering safety standards. Our foremost priority is to ensure that our clients' valuable cargo reaches its destination in pristine condition, no matter the size or complexity of the load.
                      
        We excel in meticulous project planning and execution, meticulously aligning our operations to meet and exceed the unique demands of our esteemed customers. Our comprehensive approach extends beyond cargo handling; we take charge of the entire project lifecycle, from the initial groundwork and precise coordination to the execution by our skilled personnel. Furthermore, we offer invaluable commercial support services, facilitating materials sourcing and providing access to a wide array of industrial equipment.
                      
        At Golden Tiger Shipping Agencies Inc., we do more than just transport goods; we deliver peace of mind, efficiency, and reliability. Our integrated solutions are designed to cater to every facet of your project, ensuring success at every stage of the journey.`,
        image: "{{ asset('assets/images/logistic2.webp') }}",
        icon: "📦"
    }
];

// ==================== STATE ====================
let currentSlide = 0;
let isTransitioning = false;

// ==================== DOM ELEMENTS ====================
const elements = {
    bg: document.getElementById('bgImage'),
    title: document.getElementById('title'),
    description: document.getElementById('description'),
    icon: document.getElementById('icon'),
    contentBox: document.getElementById('contentBox'),
    dotsContainer: document.getElementById('dots'),
    progressBar: document.getElementById('progressBar')
};

// ==================== RENDER FUNCTIONS ====================
function updateContent() {
    const service = services[currentSlide];
    
    elements.bg.style.backgroundImage = `url(${service.image})`;
    elements.title.textContent = service.title;
    elements.description.textContent = service.description;
    elements.icon.textContent = service.icon;
    
    updateDots();
    updateProgressBar();
}

function updateDots() {
    const dots = elements.dotsContainer.querySelectorAll('.dot');
    dots.forEach((dot, index) => {
        dot.classList.toggle('active', index === currentSlide);
        dot.setAttribute('aria-selected', index === currentSlide);
    });
}

function updateProgressBar() {
    const progress = ((currentSlide + 1) / services.length) * 100;
    elements.progressBar.style.width = `${progress}%`;
}

// ==================== TRANSITION ====================
function performTransition(callback) {
    if (isTransitioning) return;
    
    isTransitioning = true;
    
    // Fade out
    elements.bg.classList.add('hide');
    elements.contentBox.classList.add('hide');
    
    setTimeout(() => {
        callback();
        updateContent();
        
        // Fade in
        elements.bg.classList.remove('hide');
        elements.contentBox.classList.remove('hide');
        
        setTimeout(() => {
            isTransitioning = false;
        }, 500);
    }, 300);
}

// ==================== NAVIGATION ====================
function nextSlide() {
    performTransition(() => {
        currentSlide = (currentSlide + 1) % services.length;
    });
}

function prevSlide() {
    performTransition(() => {
        currentSlide = (currentSlide - 1 + services.length) % services.length;
    });
}

function goToSlide(index) {
    if (index === currentSlide) return;
    
    performTransition(() => {
        currentSlide = index;
    });
}

// ==================== INITIALIZATION ====================
function initializeDots() {
    services.forEach((_, index) => {
        const dot = document.createElement('button');
        dot.className = 'dot';
        dot.setAttribute('role', 'tab');
        dot.setAttribute('aria-label', `Go to service ${index + 1}`);
        dot.onclick = () => goToSlide(index);
        elements.dotsContainer.appendChild(dot);
    });
}

function init() {
    initializeDots();
    updateContent();
}

// ==================== KEYBOARD NAVIGATION ====================
document.addEventListener('keydown', (e) => {
    if (isTransitioning) return;
    
    switch(e.key) {
        case 'ArrowRight':
            nextSlide();
            break;
        case 'ArrowLeft':
            prevSlide();
            break;
        case 'Home':
            goToSlide(0);
            break;
        case 'End':
            goToSlide(services.length - 1);
            break;
    }
});

// ==================== TOUCH SUPPORT ====================
let touchStartX = 0;
let touchEndX = 0;

elements.contentBox.addEventListener('touchstart', (e) => {
    touchStartX = e.changedTouches[0].screenX;
}, { passive: true });

elements.contentBox.addEventListener('touchend', (e) => {
    touchEndX = e.changedTouches[0].screenX;
    handleSwipe();
}, { passive: true });

function handleSwipe() {
    const swipeThreshold = 50;
    const diff = touchStartX - touchEndX;
    
    if (Math.abs(diff) > swipeThreshold) {
        if (diff > 0) {
            nextSlide(); // Swipe left
        } else {
            prevSlide(); // Swipe right
        }
    }
}

// ==================== START ====================
init();
</script>

@endsection