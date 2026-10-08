{{-- About Section - Blade Template (Improved) --}}

<style>
    /* ANIMATIONS */
    @keyframes float {
        0%, 100% { transform: translateY(0px) translateX(0px) scale(1); }
        33% { transform: translateY(-30px) translateX(20px) scale(1.1); }
        66% { transform: translateY(-15px) translateX(-20px) scale(0.9); }
    }
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    @keyframes slideInLeft {
        from { opacity: 0; transform: translateX(-50px); }
        to { opacity: 1; transform: translateX(0); }
    }
    @keyframes slideInRight {
        from { opacity: 0; transform: translateX(50px); }
        to { opacity: 1; transform: translateX(0); }
    }
    @keyframes fadeLift {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    @keyframes pulse {
        0%, 100% { transform: scale(1); opacity: 0.6; }
        50% { transform: scale(1.05); opacity: 0.8; }
    }
    @keyframes rotate {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
    @keyframes gridSlide {
        0% { transform: translateX(0) translateY(0); }
        100% { transform: translateX(40px) translateY(40px); }
    }

    .about-section-blade {
        position: relative;
        background: linear-gradient(135deg, #0a1128 0%, #1a1f3a 50%, #0a1128 100%);
        padding: 100px 20px;
        overflow: hidden;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
    }

    /* CARDS */
    .about-card-blade, .vision-mission-box-blade {
        transition: all 0.4s ease;
        backdrop-filter: blur(20px);
        border-radius: 24px;
        padding: 32px;
        border: 1px solid rgba(79,172,254,0.2);
        background: rgba(15,23,42,0.7);
        color: #cbd5e1;
        box-shadow: 
            0 8px 32px rgba(0,0,0,0.3),
            0 0 60px rgba(79,172,254,0.1),
            inset 0 0 60px rgba(79,172,254,0.03);
    }
    .about-card-blade:hover, .vision-mission-box-blade:hover {
        transform: translateY(-8px);
        border-color: rgba(79,172,254,0.4);
        box-shadow: 
            0 12px 48px rgba(0,0,0,0.4),
            0 0 80px rgba(79,172,254,0.2),
            inset 0 0 80px rgba(79,172,254,0.05);
    }

    .icon-box-blade {
        position: relative;
        overflow: hidden;
        width: 56px;
        height: 56px;
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
        margin-bottom: 20px;
        z-index: 1;
    }
    
    .icon-box-blade::before {
        content: '';
        position: absolute;
        inset: -2px;
        background: linear-gradient(135deg, #4facfe, #00f2fe);
        border-radius: 14px;
        opacity: 0;
        transition: opacity 0.4s ease;
    }
    
    .about-card-blade:hover .icon-box-blade::before {
        opacity: 0.3;
        animation: pulse 2s infinite;
    }

    /* BUTTON */
    .btn-read-blade {
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
        font-weight: 700;
        box-shadow: 0 8px 25px rgba(79,172,254,0.4);
        padding: 16px 40px;
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        color: #fff;
        border: none;
        border-radius: 30px;
        font-size: 15px;
        font-family: inherit;
        cursor: pointer;
    }
    .btn-read-blade::before {
        content: '';
        position: absolute;
        inset: 0;
        left: -100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: 0.5s;
    }
    .btn-read-blade:hover::before { left: 100%; }
    .btn-read-blade:hover { 
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(79,172,254,0.5);
    }
    .btn-read-arrow-blade { 
        display: inline-block;
        transition: transform 0.3s ease;
        margin-left: 8px;
    }
    .btn-read-blade:hover .btn-read-arrow-blade { 
        transform: translateX(5px);
    }

    .gradient-text-blade {
        background: linear-gradient(135deg, #ffffff 0%, #4facfe 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    /* RESPONSIVE */
    @media (max-width: 768px) {
        .about-inner-blade { 
            grid-template-columns: 1fr !important;
            gap: 40px !important;
        }
        .vision-mission-box-blade { min-height: auto; }
        .vision-mission-grid-blade {
            grid-template-columns: 1fr !important;
            gap: 30px !important;
        }
        .about-section-blade h2 {
            font-size: 36px !important;
        }
    }
</style>

<section id="about" data-section="about" class="about-section-blade">
    
    {{-- ANIMATED GRID BACKGROUND --}}
    <div style="position: absolute; inset: 0; background-image: linear-gradient(rgba(79,172,254,0.08) 1px, transparent 1px), linear-gradient(90deg, rgba(79,172,254,0.08) 1px, transparent 1px); background-size: 50px 50px; animation: gridSlide 20s linear infinite; opacity: 0.4; z-index: 0;"></div>

    {{-- FLOATING GRADIENT ORBS --}}
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; overflow: hidden; pointer-events: none; z-index: 0;">
        @for ($i = 0; $i < 8; $i++)
            <div style="position: absolute; border-radius: 50%; background: radial-gradient(circle, {{ $i % 2 === 0 ? 'rgba(79,172,254,0.15)' : 'rgba(0,242,254,0.12)' }}, transparent); filter: blur(40px); animation: float {{ 10 + $i * 2 }}s ease-in-out infinite; animation-delay: {{ $i * 1.5 }}s; width: {{ 200 + $i * 40 }}px; height: {{ 200 + $i * 40 }}px; left: {{ ($i * 15) % 90 }}%; top: {{ ($i * 20) % 80 }}%;"></div>
        @endfor
    </div>

    {{-- ROTATING GRADIENT CIRCLES --}}
    @for ($i = 0; $i < 3; $i++)
        <div style="position: absolute; width: {{ 400 + $i * 200 }}px; height: {{ 400 + $i * 200 }}px; border: 1px solid rgba(79,172,254,0.1); border-radius: 50%; left: {{ 20 + $i * 10 }}%; top: {{ 10 + $i * 15 }}%; animation: rotate {{ 30 + $i * 10 }}s linear infinite; opacity: 0.3; z-index: 0;"></div>
    @endfor

    {{-- CONTENT OVERLAY --}}
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: radial-gradient(circle at 50% 50%, transparent 0%, rgba(10,17,40,0.5) 100%); z-index: 0;"></div>

    <div style="max-width: 1200px; margin: 0 auto; position: relative; z-index: 1;">
        <div class="about-inner-blade" style="display: grid; grid-template-columns: 1.2fr 1fr; gap: 60px; align-items: start; margin-bottom: 80px;">
            
            {{-- LEFT CONTENT --}}
            <div style="animation: slideInLeft 0.8s ease;">
                <h2 class="gradient-text-blade" style="font-size: clamp(36px, 5vw, 48px); font-weight: 700; letter-spacing: -0.5px; margin-bottom: 24px;">
                    Our Company
                </h2>
                <p style="font-size: 17px; line-height: 1.7; color: #cbd5e1; margin-bottom: 20px; text-align: justify; font-weight: 400;">
                    <strong style="color: #4facfe; font-weight: 700;">Established in 2022</strong>, we embarked on a new chapter as a
                    dynamic shipping agency, driven by a commitment to excellence and
                    customer satisfaction. Our goal is to deliver reliable, efficient,
                    and professional shipping solutions tailored to modern logistics
                    demands.
                </p>
                <p style="font-size: 15px; line-height: 1.7; color: #cbd5e1; margin-bottom: 32px; text-align: justify; font-weight: 400;">
                    We continuously refine our <em style="color: #4facfe; font-style: normal; font-weight: 600;">Quality Management System</em>,
                    strengthening internal operations, enhancing employee capabilities,
                    and proactively addressing challenges to ensure long-term success.
                </p>
                <a href="{{ url('/readmore') }}" style="text-decoration: none;">
                    <button class="btn-read-blade">
                        Read More <span class="btn-read-arrow-blade">→</span>
                    </button>
                </a>
            </div>

            {{-- RIGHT CARDS --}}
            <div style="display: flex; flex-direction: column; gap: 24px; animation: slideInRight 0.8s ease;">
                <div class="about-card-blade">
                    <div class="icon-box-blade">
                        <svg style="width: 28px; height: 28px; fill: white; position: relative; z-index: 2;" viewBox="0 0 384 512"><path d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm64 236c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-64c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-72v8c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12zm96-114.1v6.1H256V0h6.1c6.4 0 12.5 2.5 17 7l97.9 98c4.5 4.5 7 10.6 7 16.9z"/></svg>
                    </div>
                    <p style="font-size: 15px; line-height: 1.7; margin: 0; font-weight: 400;">
                        At our core is a strong culture of <strong style="color: #4facfe; font-weight: 700;">efficiency and growth</strong>.
                        We prioritize continuous learning, empowering our team to elevate
                        performance standards and deliver superior service across all
                        operations.
                    </p>
                </div>

                <div class="about-card-blade">
                    <div class="icon-box-blade">
                        <svg style="width: 28px; height: 28px; fill: white; position: relative; z-index: 2;" viewBox="0 0 512 512"><path d="M496 384H64V80c0-8.84-7.16-16-16-16H16C7.16 64 0 71.16 0 80v336c0 17.67 14.33 32 32 32h464c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16zM464 96H345.94c-21.38 0-32.09 25.85-16.97 40.97l32.4 32.4L288 242.75l-73.37-73.37c-12.5-12.5-32.76-12.5-45.25 0l-68.69 68.69c-6.25 6.25-6.25 16.38 0 22.63l22.62 22.62c6.25 6.25 16.38 6.25 22.63 0L192 237.25l73.37 73.37c12.5 12.5 32.76 12.5 45.25 0l96-96 32.4 32.4c15.12 15.12 40.97 4.41 40.97-16.97V112c.01-8.84-7.15-16-15.99-16z"/></svg>
                    </div>
                    <p style="font-size: 15px; line-height: 1.7; margin: 0; font-weight: 400;">
                        Backed by a board of industry experts with over <strong style="color: #4facfe; font-weight: 700;">3 years of combined experience</strong>, our leadership
                        brings deep insight into logistics, brokerage, and operational
                        excellence building trust and long-term partnerships.
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- VISION & MISSION BAND --}}
    <div style="position: relative; min-height: 500px; display: flex; flex-direction: column; overflow: hidden;">
        
        {{-- Background Image --}}
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-image: url('{{ asset('assets/images/GTBG.webp') }}'); background-size: cover; background-position: center; background-attachment: fixed;"></div>

        {{-- Dynamic Overlay --}}
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(135deg, rgba(10,17,40,0.92), rgba(26,31,58,0.88)); transition: opacity 0.3s ease;"></div>

        {{-- Animated Grid Pattern --}}
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-image: linear-gradient(rgba(79,172,254,0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(79,172,254,0.1) 1px, transparent 1px); background-size: 40px 40px; animation: gridSlide 15s linear infinite; opacity: 0.6;"></div>

        {{-- Floating Orbs --}}
        @for ($i = 0; $i < 6; $i++)
            <div style="position: absolute; width: {{ 80 + $i * 30 }}px; height: {{ 80 + $i * 30 }}px; border-radius: 50%; background: radial-gradient(circle, rgba(79,172,254,{{ 0.1 - $i * 0.01 }}), transparent); filter: blur(30px); animation: float {{ 8 + $i * 3 }}s ease-in-out infinite; animation-delay: {{ $i * 0.8 }}s; left: {{ $i * 18 }}%; top: {{ ($i * 15) % 70 }}%; pointer-events: none;"></div>
        @endfor

        {{-- Content --}}
        <div style="position: relative; z-index: 1; max-width: 1200px; margin: 0 auto; width: 100%; padding: 80px 20px;">
            <div class="vision-mission-grid-blade" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: stretch;">
                
                <div class="vision-mission-box-blade" style="animation: fadeLift 0.8s ease 0.2s backwards;">
                    <h4 class="gradient-text-blade" style="font-size: 28px; letter-spacing: -0.5px; margin-bottom: 20px; font-weight: 700;">
                        Our Vision
                    </h4>
                    <p style="font-size: 15px; line-height: 1.7; color: #cbd5e1; margin: 0; font-weight: 400;">
                        To be a leading competitive shipping agency and a preferred
                        logistics partner by continuously building long-term
                        relationships with customers, principals, and affiliates.
                    </p>
                </div>

                <div class="vision-mission-box-blade" style="animation: fadeLift 0.8s ease 0.4s backwards;">
                    <h4 class="gradient-text-blade" style="font-size: 28px; letter-spacing: -0.5px; margin-bottom: 20px; font-weight: 700;">
                        Our Mission
                    </h4>
                    <p style="font-size: 15px; line-height: 1.7; color: #cbd5e1; margin: 0; font-weight: 400;">
                        To deliver reliable and flexible shipping solutions while
                        fostering trusted relationships locally and globally. We aim to
                        support our clients' core businesses through proactive
                        engagement, professional excellence, employee growth, and
                        responsible corporate citizenship.
                    </p>
                </div>
            </div>
        </div>

        {{-- CENTER RIBBON --}}
        <div style="position: absolute; bottom: 10px; left: 50%; transform: translateX(-50%); background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); padding: 16px 48px; border-radius: 40px; font-weight: 700; letter-spacing: 1.5px; font-size: 14px; color: #fff; box-shadow: 0 10px 30px rgba(79,172,254,0.5); white-space: nowrap; z-index: 2;">
            Golden Tiger Shipping Agencies, Inc.
        </div>
    </div>
</section>