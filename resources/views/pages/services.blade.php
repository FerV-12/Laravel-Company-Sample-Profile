{{-- Services Section - Blade Template (Improved) --}}

<style>
    @keyframes float {
        0%, 100% { transform: translateY(0) translateX(0) scale(1); }
        33% { transform: translateY(-30px) translateX(20px) scale(1.1); }
        66% { transform: translateY(-15px) translateX(-20px) scale(0.9); }
    }

    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes scaleIn {
        from { opacity: 0; transform: scale(0.9); }
        to { opacity: 1; transform: scale(1); }
    }

    @keyframes blink {
        0%, 50% { opacity: 1; }
        51%, 100% { opacity: 0; }
    }

    .services-section-blade {
        position: relative;
        background: linear-gradient(135deg, #0a1128 0%, #1a1f3a 50%, #0f1937 100%);
        padding: 100px 20px;
        overflow: hidden;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
    }

    .service-card-blade {
        transition: all 0.4s ease;
        animation: scaleIn 0.6s ease backwards;
        position: relative;
        height: 380px;
        
        border-radius: 24px;
        overflow: hidden;
        cursor: pointer;
        box-shadow: 0 20px 45px rgba(0, 0, 0, 0.3);
        border: 1px solid rgba(79, 172, 254, 0.2);
    }

    .service-card-blade:hover {
        transform: translateY(-15px);
        box-shadow: 0 25px 60px rgba(79, 172, 254, 0.4);
    }

    .service-card-blade:hover .service-img-blade {
        transform: scale(1.1);
    }

    .service-img-blade {
        transition: transform 0.5s ease;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .overlay-blade {
        transition: all 0.4s ease;
        position: absolute;
        bottom: 0;
        width: 100%;
        background: rgba(10, 17, 40, 0.85);
        backdrop-filter: blur(8px);
        color: #fff;
        padding: 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .service-card-blade:hover .overlay-blade {
        background: linear-gradient(135deg, rgba(79, 172, 254, 0.95), rgba(0, 242, 254, 0.95));
        padding: 24px 20px;
    }

    .arrow-blade {
        font-size: 24px;
        transition: transform 0.3s ease;
        flex-shrink: 0;
    }

    .service-card-blade:hover .arrow-blade {
        transform: translateX(8px);
    }

    .cursor-blade {
        display: inline-block;
        margin-left: 3px;
        animation: blink 1s infinite;
        color: #4facfe;
    }

    .all-services-btn-blade {
        padding: 16px 40px;
        border-radius: 30px;
        border: none;
        background: linear-gradient(135deg, #4facfe, #00f2fe);
        color: #fff;
        font-weight: 700;
        font-size: 15px;
        font-family: inherit;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 8px 25px rgba(79, 172, 254, 0.4);
        position: relative;
        overflow: hidden;
        text-decoration: none;
        display: inline-block;
    }

    .all-services-btn-blade::before {
        content: '';
        position: absolute;
        inset: 0;
        left: -100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: 0.5s;
    }

    .all-services-btn-blade:hover::before {
        left: 100%;
    }

    .all-services-btn-blade:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(79, 172, 254, 0.5);
    }

    @media (max-width: 768px) {
        .services-header-blade {
            flex-direction: column !important;
            align-items: flex-start !important;
        }

        .services-grid-blade {
            grid-template-columns: 1fr !important;
        }
        
        .services-section-blade h2 {
            font-size: 36px !important;
        }
    }
</style>

<section 
    id="services"
    data-section="services"
    class="services services-section-blade"
>
    {{-- Animated Background Elements --}}
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; overflow: hidden; opacity: 0.15; pointer-events: none;">
        @for ($i = 0; $i < 5; $i++)
            <div style="position: absolute; border-radius: 50%; background: radial-gradient(circle, rgba(79,172,254,0.4), transparent); animation: float {{ 8 + $i*2 }}s ease-in-out infinite; animation-delay: {{ $i*1.5 }}s; width: {{ 150 + $i*50 }}px; height: {{ 150 + $i*50 }}px; left: {{ $i*20 }}%; top: {{ $i*15 }}%;"></div>
        @endfor
    </div>

    {{-- Grid Pattern Overlay --}}
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-image: linear-gradient(rgba(79,172,254,0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(79,172,254,0.03) 1px, transparent 1px); background-size: 50px 50px; pointer-events: none;"></div>

    <div style="max-width: 1200px; margin: 0 auto; position: relative; z-index: 1;">
        {{-- Header Section --}}
        <div class="services-header-blade" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; margin-bottom: 60px; animation: fadeInUp 0.8s ease;">
            <div>
                <h2 style="font-size: 48px; font-weight: 700; margin-bottom: 16px; background: linear-gradient(135deg, #ffffff 0%, #4facfe 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; letter-spacing: -0.5px;">
                    Check Our Most Popular Logistic Services
                </h2>
                <p style="font-size: 17px; color: #cbd5e1; min-height: 24px; font-weight: 400; line-height: 1.7;">
                    Get expert and professional logistic services
                    <span class="cursor-blade">|</span>
                </p>
            </div>

            <a href="{{ route('services') }}" class="all-services-btn-blade">
                All Services
            </a>
        </div>

        {{-- Services Cards --}}
        <div class="services-grid-blade" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 32px;">
            @php
                $services = [
                    ['title'=>'LINER CONTAINER AGENCY SERVICES','image'=>'services2.webp'],
                    ['title'=>'PORT AGENCY SERVICES','image'=>'port serv.webp'],
                    ['title'=>'CHARTERING','image'=>'port1.webp'],
                    ['title'=>'DREDGING SERVICES','image'=>'dredging.webp']
                ];
            @endphp

            @foreach ($services as $service)
                <a href="{{ route('services.all') }}" class="service-card-blade" style="text-decoration: none;">
                    <img src="{{ asset('assets/images/' . $service['image']) }}" alt="{{ $service['title'] }}" class="service-img-blade"/>
                    <div class="overlay-blade">
                        <span style="font-weight: 700; font-size: 15px; max-width: 80%; line-height: 1.4; color: #fff;">{{ $service['title'] }}</span>
                        <span class="arrow-blade">→</span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const fullText = "Get expert and professional logistic services";
        const textElement = document.querySelector('.services-header-blade p');
        const cursorElement = document.querySelector('.cursor-blade');
        
        if(textElement && cursorElement){
            let displayedText = "";
            let index = 0;
            function typeText(){
                if(index < fullText.length){
                    displayedText += fullText[index];
                    textElement.innerHTML = displayedText + '<span class="cursor-blade">|</span>';
                    index++;
                    setTimeout(typeText, 45);
                }
            }
            textElement.innerHTML = '<span class="cursor-blade">|</span>';
            setTimeout(typeText, 500);
        }
    });
</script>