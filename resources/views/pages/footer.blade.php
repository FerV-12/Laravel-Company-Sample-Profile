{{-- Footer Section - Blade Template --}}

<style>
    @keyframes float {
        0%, 100% { transform: translateY(0) translateX(0) scale(1); }
        33% { transform: translateY(-20px) translateX(15px) scale(1.05); }
        66% { transform: translateY(-10px) translateX(-15px) scale(0.95); }
    }

    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .footer-blade {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
    }

    .footer-link-blade {
        color: #b8c5e0;
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-block;
        position: relative;
        cursor: pointer;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.8;
    }

    .footer-link-blade::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 0;
        height: 2px;
        background: linear-gradient(90deg, #4facfe, #00f2fe);
        transition: width 0.3s ease;
    }

    .footer-link-blade:hover {
        color: #4facfe;
        transform: translateX(5px);
    }

    .footer-link-blade:hover::after {
        width: 100%;
    }

    .footer-col-blade {
        animation: fadeInUp 0.8s ease backwards;
    }

    .footer-col-blade:nth-child(1) { animation-delay: 0.1s; }
    .footer-col-blade:nth-child(2) { animation-delay: 0.2s; }
    .footer-col-blade:nth-child(3) { animation-delay: 0.3s; }
    .footer-col-blade:nth-child(4) { animation-delay: 0.4s; }

    .footer-col-blade h4 {
        font-size: 16px;
        font-weight: 700;
        margin-bottom: 18px;
        color: #fff;
        letter-spacing: 0.3px;
    }

    .footer-col-blade ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .footer-col-blade li {
        line-height: 1.6;
    }

    @media (max-width: 768px) {
        .footer-container-blade {
            grid-template-columns: 1fr !important;
            gap: 30px !important;
        }
    }
</style>

<footer class="footer-blade" style="position: relative; background: linear-gradient(135deg, #0a1128 0%, #1a1f3a 50%, #0f1937 100%); color: #fff; overflow: hidden;">
    
    {{-- ANIMATED BACKGROUND ELEMENTS --}}
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; overflow: hidden; opacity: 0.1; pointer-events: none;">
        @for ($i = 0; $i < 3; $i++)
            <div style="position: absolute; border-radius: 50%; background: radial-gradient(circle, rgba(79, 172, 254, 0.4), transparent); animation: float {{ 10 + $i * 3 }}s ease-in-out infinite; animation-delay: {{ $i * 2 }}s; width: {{ 200 + $i * 60 }}px; height: {{ 200 + $i * 60 }}px; left: {{ $i * 30 }}%; top: {{ $i * 20 }}%;"></div>
        @endfor
    </div>

    {{-- GRID PATTERN OVERLAY --}}
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-image: linear-gradient(rgba(79, 172, 254, 0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(79, 172, 254, 0.03) 1px, transparent 1px); background-size: 50px 50px; pointer-events: none;"></div>

    <div style="max-width: 1200px; margin: 0 auto; padding: 60px 20px 30px; position: relative; z-index: 1;">
        
        <div class="footer-container-blade" style="display: grid; grid-template-columns: 1.5fr 1fr 1.2fr 1.3fr; gap: 30px; margin-bottom: 40px;">
            
            {{-- BRAND COLUMN WITH LOGO --}}
            <div class="footer-col-blade" style="display: flex; flex-direction: column; gap: 12px;">
                <div style="display: flex; align-items: center; gap: 10px;">
                    <img 
                        src="{{ asset('assets/images/GTLOGO.webp') }}" 
                        alt="GTSAI Logo" 
                        style="width: 80px; height: 80px; object-fit: contain;" 
                    />
                    <h3 style="font-size: 28px; font-weight: 800; margin: 0; background: linear-gradient(135deg, #ffffff 0%, #4facfe 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; letter-spacing: 1px;">
                        GTSAI
                    </h3>
                </div>
                <p style="font-size: 14px; color: #b8c5e0; margin: 0; line-height: 1.5; max-width: 240px; font-weight: 400;">
                    Golden Tiger Shipping Agencies, Inc.
                </p>
                <p style="font-size: 12px; color: #6b7a99; margin: 6px 0 0 0; font-weight: 400;">
                    © {{ date('Y') }} GTSAI. All rights reserved.
                </p>
            </div>

            {{-- QUICK LINKS --}}
            <div class="footer-col-blade">
                <h4>Quick Links</h4>
                <ul>
                    <li>
                        <a href="#home" class="footer-link-blade">Home</a>
                    </li>
                    <li>
                        <a href="#about" class="footer-link-blade">About Us</a>
                    </li>
                    <li>
                        <a href="#services" class="footer-link-blade">Services</a>
                    </li>
                    <li>
                        <a href="#fleet" class="footer-link-blade">Fleet</a>
                    </li>
                    <li>
                        <a href="#contact" class="footer-link-blade">Contact Us</a>
                    </li>
                </ul>
            </div>

            {{-- OUR SERVICES --}}
            <div class="footer-col-blade">
                <h4>Our Services</h4>
                <ul>
                    @php
                        $services = [
                            'Liner Container Agency',
                            'Port Agency Services',
                            'Chartering Services',
                            'Dredging Services',
                            'Project Logistics'
                        ];
                    @endphp

                    @foreach ($services as $service)
                        <li style="font-size: 13px; line-height: 1.6; padding-left: 12px; position: relative;">
                            <span style="position: absolute; left: 0; color: #4facfe;">›</span>
                            <a href="#services" class="footer-link-blade" style="font-size: 13px;">
                                {{ $service }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- CONTACT INFORMATION --}}
            <div class="footer-col-blade">
                <h4>Contact Us</h4>
                <div style="display: flex; flex-direction: column; gap: 12px;">
                    <address style="font-size: 13px; color: #b8c5e0; line-height: 1.6; font-style: normal; font-weight: 400;">
                        Unit 408 5th Floor Nipa Building 9, Parqal, Pres. D. Macapagal Blvd. cor. Luz Drive, Brgy. Tambo, Aseana City, 1701 Parañaque City, Philippines
                    </address>
                    <a href="tel:+639102933079" class="footer-link-blade" style="font-size: 13px; font-weight: 600;">
                        Phone: +63 910 293 3079
                    </a>
                    <a href="mailto:goldentigershipping@gmail.com" class="footer-link-blade" style="font-size: 13px; font-weight: 600;">
                        Email: goldentigershipping@gmail.com
                    </a>
                </div>
            </div>
        </div>

        {{-- BOTTOM BAR --}}
        <div style="border-top: 1px solid rgba(79, 172, 254, 0.15); padding-top: 20px; text-align: center;">
            <p style="font-size: 12px; color: #6b7a99; margin: 0; font-weight: 400; line-height: 1.5;">
                Delivering reliable maritime and logistics solutions with excellence
            </p>
        </div>
    </div>
</footer>