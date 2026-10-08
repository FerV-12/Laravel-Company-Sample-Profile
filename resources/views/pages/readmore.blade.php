@extends('layouts.app')

@section('content')

<style>
    @keyframes float {
        0%, 100% { transform: translateY(0) translateX(0) scale(1); }
        33% { transform: translateY(-30px) translateX(20px) scale(1.1); }
        66% { transform: translateY(-15px) translateX(-20px) scale(0.9); }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(40px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .readmore-section {
        position: relative;
        width: 100%;
        min-height: 100vh;
        padding: 140px 20px 80px;
        display: flex;
        justify-content: flex-start;
        align-items: center;
        flex-direction: column;
        background: linear-gradient(135deg, #0a1128 0%, #1a1f3a 50%, #0f1937 100%);
        overflow: hidden;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
    }

    .content-section {
        animation: fadeInUp 0.8s ease backwards;
    }

    .content-section:nth-child(2) { animation-delay: 0.1s; }
    .content-section:nth-child(3) { animation-delay: 0.2s; }
    .content-section:nth-child(4) { animation-delay: 0.3s; }
    .content-section:nth-child(5) { animation-delay: 0.4s; }

    .value-card {
        background: rgba(79, 172, 254, 0.08);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(79, 172, 254, 0.2);
        border-radius: 16px;
        padding: 24px;
        margin-bottom: 16px;
        transition: all 0.3s ease;
    }

    .value-card:hover {
        background: rgba(79, 172, 254, 0.15);
        transform: translateX(8px);
        border-color: rgba(79, 172, 254, 0.4);
    }

    .milestone-card {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(79, 172, 254, 0.15);
        border-radius: 20px;
        padding: 32px;
    }

    .stat-box {
        display: inline-block;
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        padding: 8px 20px;
        border-radius: 20px;
        font-weight: 700;
        margin: 0 8px 8px 0;
        box-shadow: 0 4px 15px rgba(79, 172, 254, 0.3);
        color: #fff;
        font-size: 14px;
    }

    .back-btn {
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
        display: inline-block;
        padding: 16px 40px;
        border-radius: 30px;
        font-weight: 700;
        font-size: 15px;
        font-family: inherit;
        color: #fff;
        text-decoration: none;
        background: linear-gradient(135deg, #4facfe, #00f2fe);
        box-shadow: 0 8px 25px rgba(79, 172, 254, 0.4);
    }

    .back-btn::before {
        content: '';
        position: absolute;
        inset: 0;
        left: -100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: 0.5s;
    }

    .back-btn:hover::before {
        left: 100%;
    }

    .back-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(79, 172, 254, 0.5);
    }

    .arrow {
        display: inline-block;
        margin-left: 8px;
        transition: transform 0.3s ease;
    }

    .back-btn:hover .arrow {
        transform: translateX(-5px);
    }
</style>

<section class="readmore-section">

    {{-- ANIMATED BACKGROUND --}}
    <div style="position: absolute; inset: 0; opacity: 0.15; pointer-events: none;">
        @for ($i = 0; $i < 6; $i++)
            <div style="
                position: absolute;
                border-radius: 50%;
                background: radial-gradient(circle, rgba(79,172,254,0.4), transparent);
                animation: float {{ 8 + $i * 2 }}s ease-in-out infinite;
                animation-delay: {{ $i * 1.5 }}s;
                width: {{ 150 + $i * 50 }}px;
                height: {{ 150 + $i * 50 }}px;
                left: {{ $i * 15 }}%;
                top: {{ $i * 12 }}%;
            "></div>
        @endfor
    </div>

    {{-- GRID OVERLAY --}}
    <div style="
        position: absolute;
        inset: 0;
        background-image:
            linear-gradient(rgba(79,172,254,0.03) 1px, transparent 1px),
            linear-gradient(90deg, rgba(79,172,254,0.03) 1px, transparent 1px);
        background-size: 50px 50px;
        pointer-events: none;
    "></div>

    <div style="max-width: 900px; color: #fff; z-index: 2;">

        {{-- HEADER --}}
        <div class="content-section" style="margin-bottom: 48px;">
            <h2 style="
                font-size: 56px;
                font-weight: 700;
                margin-bottom: 20px;
                letter-spacing: -0.5px;
                background: linear-gradient(135deg, #ffffff, #4facfe);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
            ">
                Our Story & Growth
            </h2>

            <p style="font-size: 17px; line-height: 1.7; color: #cbd5e1; font-weight: 400;">
                Since our establishment in 2022, Golden Tiger Shipping Agencies, Inc. has grown from a small startup to a trusted partner in maritime logistics.
            </p>
        </div>

        {{-- CORE VALUES --}}
        <div class="content-section" style="margin-bottom: 48px;">
            <h3 style="font-size: 32px; font-weight: 700; margin-bottom: 28px; letter-spacing: -0.5px;">💎 Our Core Values</h3>

            <div class="value-card">
                <h4 style="color: #4facfe; font-size: 18px; font-weight: 700; margin-bottom: 8px;">Integrity</h4>
                <p style="font-size: 15px; line-height: 1.7; color: #cbd5e1; margin: 0; font-weight: 400;">We uphold honesty and transparency in every operation.</p>
            </div>

            <div class="value-card">
                <h4 style="color: #4facfe; font-size: 18px; font-weight: 700; margin-bottom: 8px;">Excellence</h4>
                <p style="font-size: 15px; line-height: 1.7; color: #cbd5e1; margin: 0; font-weight: 400;">We continuously improve our services to deliver superior results.</p>
            </div>

            <div class="value-card">
                <h4 style="color: #4facfe; font-size: 18px; font-weight: 700; margin-bottom: 8px;">Teamwork</h4>
                <p style="font-size: 15px; line-height: 1.7; color: #cbd5e1; margin: 0; font-weight: 400;">Collaboration drives efficiency and success.</p>
            </div>

            <div class="value-card">
                <h4 style="color: #4facfe; font-size: 18px; font-weight: 700; margin-bottom: 8px;">Innovation</h4>
                <p style="font-size: 15px; line-height: 1.7; color: #cbd5e1; margin: 0; font-weight: 400;">We embrace technology to stay ahead.</p>
            </div>
        </div>

        {{-- MILESTONES --}}
        <div class="content-section" style="margin-bottom: 48px;">
            <h3 style="font-size: 32px; font-weight: 700; margin-bottom: 28px; letter-spacing: -0.5px;">🏆 Milestones & Achievements</h3>

            <div class="milestone-card">
                <div style="margin-bottom: 20px;">
                    <span class="stat-box">100+ Shipments</span>
                    <span class="stat-box">3+ Clients</span>
                    <span class="stat-box">99% On-Time</span>
                </div>

                <p style="font-size: 15px; line-height: 1.7; color: #cbd5e1; margin: 0; font-weight: 400;">
                    Recognized for excellence in safety and customer satisfaction.
                </p>
            </div>
        </div>

        {{-- LEADERSHIP --}}
        <div class="content-section" style="margin-bottom: 48px;">
            <h3 style="font-size: 32px; font-weight: 700; margin-bottom: 28px; letter-spacing: -0.5px;">👥 Leadership Team</h3>

            <div class="milestone-card">
                <p style="font-size: 15px; line-height: 1.7; color: #cbd5e1; margin: 0; font-weight: 400;">
                    Our leadership brings over <strong style="color: #4facfe; font-weight: 700;">3 years of combined experience</strong> in logistics and corporate management.
                </p>
            </div>
        </div>

        {{-- BACK BUTTON --}}
        <div class="content-section" style="text-align: center;">
            <a href="{{ url()->previous() }}" class="back-btn">
                Go Back <span class="arrow">←</span>
            </a>
        </div>

    </div>
</section>

@endsection