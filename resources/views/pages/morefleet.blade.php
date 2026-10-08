    {{-- More Fleets Page - Blade Template --}}
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Our Fleets - Golden Tiger Shipping</title>
        
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            }

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

            .fleet-card-blade {
                transition: all 0.4s ease;
                animation: scaleIn 0.6s ease backwards;
            }

            .fleet-card-blade:nth-child(1) { animation-delay: 0.05s; }
            .fleet-card-blade:nth-child(2) { animation-delay: 0.1s; }
            .fleet-card-blade:nth-child(3) { animation-delay: 0.15s; }
            .fleet-card-blade:nth-child(4) { animation-delay: 0.2s; }
            .fleet-card-blade:nth-child(5) { animation-delay: 0.25s; }
            .fleet-card-blade:nth-child(6) { animation-delay: 0.3s; }
            .fleet-card-blade:nth-child(7) { animation-delay: 0.35s; }
            .fleet-card-blade:nth-child(8) { animation-delay: 0.4s; }
            .fleet-card-blade:nth-child(9) { animation-delay: 0.45s; }

            .fleet-card-blade:hover {
                transform: translateY(-12px);
                box-shadow: 0 25px 60px rgba(79, 172, 254, 0.4) !important;
            }

            .fleet-card-blade:hover .fleet-img-blade {
                transform: scale(1.1);
            }

            .fleet-img-blade {
                transition: transform 0.5s ease;
            }

            .fleet-card-blade:hover .fleet-title-blade {
                background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%) !important;
            }

            .fleet-title-blade {
                transition: all 0.4s ease;
            }

            .cursor-blade {
                display: inline-block;
                margin-left: 3px;
                animation: blink 1s infinite;
                color: #4facfe;
            }

            .back-home-btn-blade {
                position: relative;
                overflow: hidden;
                transition: all 0.4s ease;
            }

            .back-home-btn-blade::before {
                content: '';
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
                transition: left 0.5s;
            }

            .back-home-btn-blade:hover::before {
                left: 100%;
            }

            .back-home-btn-blade:hover {
                transform: translateY(-2px);
                box-shadow: 0 10px 30px rgba(79, 172, 254, 0.6);
            }

            @media (max-width: 900px) {
                .fleet-grid-blade {
                    grid-template-columns: repeat(2, 1fr) !important;
                }
            }

            @media (max-width: 600px) {
                .fleet-grid-blade {
                    grid-template-columns: 1fr !important;
                }
            }
        </style>
    </head>
    <body>
        {{-- Include Header --}}
        @include('partials.header')

        <section
            id="fleet"
            data-section="fleet"
            style="position: relative; min-height: 100vh; background: linear-gradient(135deg, #0a1128 0%, #1a1f3a 50%, #0f1937 100%); padding: 140px 20px 80px; overflow: hidden;"
        >
            {{-- ANIMATED BACKGROUND ELEMENTS --}}
            <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; overflow: hidden; opacity: 0.15; pointer-events: none;">
                @for ($i = 0; $i < 5; $i++)
                    <div style="position: absolute; border-radius: 50%; background: radial-gradient(circle, rgba(79, 172, 254, 0.4), transparent); animation: float {{ 8 + $i * 2 }}s ease-in-out infinite; animation-delay: {{ $i * 1.5 }}s; width: {{ 150 + $i * 50 }}px; height: {{ 150 + $i * 50 }}px; left: {{ $i * 20 }}%; top: {{ $i * 15 }}%;"></div>
                @endfor
            </div>

            {{-- GRID PATTERN OVERLAY --}}
            <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-image: linear-gradient(rgba(79, 172, 254, 0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(79, 172, 254, 0.03) 1px, transparent 1px); background-size: 50px 50px; pointer-events: none;"></div>

            <div style="max-width: 1200px; margin: 0 auto; position: relative; z-index: 1;">
                {{-- Header Text --}}
                <div style="margin-bottom: 60px; animation: fadeInUp 0.8s ease;">
                    <h2 style="color: #fff; font-size: 48px; font-weight: 700; margin-bottom: 16px; background: linear-gradient(135deg, #ffffff 0%, #4facfe 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                        Our Fleets
                    </h2>

                    <p style="color: #b8c5e0; font-size: 18px; margin-bottom: 0; min-height: 24px;">
                        <span id="typed-text"></span><span class="cursor-blade">|</span>
                    </p>
                </div>

                {{-- Fleet Grid --}}
                <div class="fleet-grid-blade" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 32px; margin-bottom: 60px;">
                    @php
                        $fleets = [
                            ['title' => 'SOUTHWARD FLYING 279', 'image' => 'dredging.webp'],
                            ['title' => 'GTS 777', 'image' => 'gts777.webp'],
                            ['title' => 'SOUTHWARD FLYING 278', 'image' => 'southward 278.webp'],
                            ['title' => 'SOUTHWARD FLYING 288', 'image' => 'southward 288.webp'],
                            ['title' => 'SOUTHWARD FLYING 289', 'image' => 'southward 289.webp'],
                            ['title' => 'YONG SHENG 699', 'image' => 'yong sheng 699.webp'],
                            ['title' => 'AN DA KANG 3689', 'image' => 'an da kang 3689.webp'],
                            ['title' => 'KANG LING 539', 'image' => 'kan ling 539.webp'],
                            ['title' => 'HONG XIANG 668', 'image' => 'hong xiang 668.webp']
                        ];
                    @endphp

                    @foreach ($fleets as $fleet)
                        <div class="fleet-card-blade" style="border-radius: 24px; overflow: hidden; cursor: pointer; box-shadow: 0 20px 45px rgba(0, 0, 0, 0.3); border: 1px solid rgba(79, 172, 254, 0.2); background: rgba(10, 17, 40, 0.5); backdrop-filter: blur(10px);">
                            <div style="overflow: hidden; height: 280px; position: relative;">
                                <img 
                                    src="{{ asset('assets/images/' . $fleet['image']) }}" 
                                    alt="{{ $fleet['title'] }}" 
                                    class="fleet-img-blade" 
                                    style="width: 100%; height: 100%; object-fit: cover; display: block;"
                                />
                                <div style="position: absolute; bottom: 0; left: 0; right: 0; height: 80px; background: linear-gradient(to top, rgba(10, 17, 40, 0.9), transparent);"></div>
                            </div>
                            <div class="fleet-title-blade" style="background: rgba(10, 17, 40, 0.95); backdrop-filter: blur(8px); color: #fff; padding: 20px; font-weight: 700; font-size: 16px; letter-spacing: 0.5px; text-align: center;">
                                {{ $fleet['title'] }}
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Back Button --}}
                <div style="animation: fadeInUp 0.8s ease 0.5s backwards; display: flex; justify-content: center;">
                    <a 
                        href="{{ route('home') }}#fleet" 
                        class="back-home-btn-blade" 
                        style="padding: 16px 40px; border-radius: 30px; border: none; background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); color: #fff; font-weight: 700; font-size: 15px; cursor: pointer; letter-spacing: 0.5px; text-decoration: none; display: inline-block;"
                    >
                        ← Back to Home
                    </a>
                </div>
            </div>
        </section>

        

        {{-- Typing Animation Script --}}
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const fullText = "Explore our complete fleet lineup a modern fleet of vessels designed for efficiency, reliability, and professional shipping solutions.";
                const typedTextElement = document.getElementById('typed-text');
                let index = 0;

                function typeText() {
                    if (index < fullText.length) {
                        typedTextElement.textContent += fullText[index];
                        index++;
                        setTimeout(typeText, 45);
                    }
                }

                // Start typing after a short delay
                setTimeout(typeText, 500);
            });
        </script>
    </body>
    </html>