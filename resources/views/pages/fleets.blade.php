{{-- Fleet Section - Blade Template (Improved) --}}

<style>
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes scaleIn {
        from { transform: scale(1.1); }
        to { transform: scale(1); }
    }

    .fleet-section-blade {
        position: relative;
        width: 100%;
        min-height: 580px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
    }

    .fleet-bg-blade {
        background-image: url('{{ asset('assets/images/fleets.webp') }}');
        position: absolute;
        inset: 0;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        z-index: 1;
        animation: scaleIn 1.2s ease-out;
    }

    .fleet-overlay-blade {
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.75) 100%);
        z-index: 2;
    }

    .fleet-glow-blade {
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 50% 50%, rgba(79,172,254,0.15) 0%, transparent 70%);
        z-index: 2;
        animation: fadeInUp 1.5s ease;
    }

    .fleet-content-blade {
        position: relative;
        z-index: 3;
        text-align: center;
        color: #fff;
        max-width: 750px;
        padding: 20px;
        animation: fadeInUp 0.8s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .fleet-btn-blade {
        padding: 16px 42px;
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

    .fleet-btn-blade::before {
        content: '';
        position: absolute;
        inset: 0;
        left: -100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: 0.5s;
    }

    .fleet-btn-blade:hover::before {
        left: 100%;
    }

    .fleet-btn-blade:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(79, 172, 254, 0.5);
    }

    .fleet-stat-blade {
        text-align: center;
        animation: fadeInUp 0.6s ease backwards;
    }

    .fleet-stat-blade:nth-child(1) { animation-delay: 0.3s; }
    .fleet-stat-blade:nth-child(2) { animation-delay: 0.4s; }
    .fleet-stat-blade:nth-child(3) { animation-delay: 0.5s; }

    @media (max-width: 768px) {
        .fleet-stats-blade {
            gap: 30px !important;
        }
    }
</style>

<section id="fleet" data-section="fleet" class="fleet fleet-section-blade">
    {{-- Background with Parallax Effect --}}
    <div class="fleet-bg-blade"></div>

    {{-- Gradient Overlay --}}
    <div class="fleet-overlay-blade"></div>

    {{-- Subtle animated glow effect --}}
    <div class="fleet-glow-blade"></div>

    {{-- Content --}}
    <div class="fleet-content-blade">
        {{-- Decorative line --}}
        <div style="width: 60px; height: 3px; background: linear-gradient(90deg, #4facfe, #00f2fe); margin: 0 auto 20px; border-radius: 2px;"></div>

        <h2 style="font-size: clamp(32px, 5vw, 52px); margin-bottom: 20px; font-weight: 700; letter-spacing: -0.5px; text-shadow: 0 4px 20px rgba(0,0,0,0.5);">
            Our Fleet
        </h2>

        <p style="font-size: clamp(16px, 2.5vw, 17px); margin-bottom: 36px; color: #cbd5e1; line-height: 1.7; max-width: 600px; margin: 0 auto 36px; text-shadow: 0 2px 10px rgba(0,0,0,0.3); font-weight: 400;">
            Discover our modern and reliable fleet designed to support efficient,
            safe, and professional maritime and logistics operations.
        </p>

        <a href="{{ route('fleets') }}" class="fleet-btn-blade">
            View Our Fleets <span style="margin-left: 8px;">→</span>
        </a>

        {{-- Stats/Features --}}
        <div class="fleet-stats-blade" style="display: flex; justify-content: center; gap: 40px; margin-top: 50px; flex-wrap: wrap;">
            @php
                $stats = [
                    ['number' => '9+', 'label' => 'Vessels'],
                    ['number' => '3+', 'label' => 'Years Experience'],
                    ['number' => '24/7', 'label' => 'Operations']
                ];
            @endphp

            @foreach ($stats as $stat)
                <div class="fleet-stat-blade">
                    <div style="font-size: 28px; font-weight: 700; color: #4facfe; margin-bottom: 5px; letter-spacing: -0.5px;">{{ $stat['number'] }}</div>
                    <div style="font-size: 13px; color: #cbd5e1; text-transform: uppercase; letter-spacing: 1px; font-weight: 400;">{{ $stat['label'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>