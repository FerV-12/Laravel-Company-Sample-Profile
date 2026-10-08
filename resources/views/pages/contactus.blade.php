{{-- Contact Section - Blade Template --}}

<style>
    @keyframes float {
        0%, 100% { transform: translate(0, 0); }
        50% { transform: translate(-20px, -30px); }
    }

    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .contact-section-blade {
        position: relative;
        background: linear-gradient(135deg, #0a1128 0%, #1a1f3a 50%, #0f1937 100%);
        padding: 100px 20px;
        color: #fff;
        overflow: hidden;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
    }

    .input-field-blade {
        width: 100%;
        padding: 14px 16px;
        border-radius: 10px;
        border: 2px solid #e2e8f0;
        background-color: #f8fafc;
        transition: all 0.3s ease;
        font-size: 15px;
        outline: none;
        font-family: inherit;
        box-sizing: border-box;
    }

    .input-field-blade:focus {
        border-color: #4facfe !important;
        box-shadow: 0 0 0 3px rgba(79, 172, 254, 0.15);
        transform: translateY(-2px);
    }

    .info-card-wrapper-blade {
        background: rgba(226, 232, 240, 0.95);
        border-radius: 16px;
        padding: 24px;
        display: flex;
        gap: 18px;
        align-items: center;
        color: #333;
        transition: all 0.3s ease;
        text-decoration: none;
        height: 100%;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .info-card-wrapper-blade:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(79, 172, 254, 0.3) !important;
        background: rgba(226, 232, 240, 1);
    }

    .info-card-icon {
        width: 56px;
        height: 56px;
        border-radius: 12px;
        background: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .info-card-content h4 {
        margin: 0;
        font-size: 16px;
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 6px;
        letter-spacing: -0.2px;
    }

    .info-card-content p {
        margin: 0;
        font-size: 14px;
        color: #6b7280;
        line-height: 1.5;
        font-weight: 400;
    }

    .submit-btn-blade {
        position: relative;
        overflow: hidden;
        align-self: center;
        padding: 16px 40px;
        border-radius: 30px;
        border: none;
        font-weight: 700;
        color: #fff;
        background: linear-gradient(135deg, #4facfe, #00f2fe);
        cursor: pointer;
        transition: all 0.3s ease;
        font-size: 15px;
        font-family: inherit;
    }

    .submit-btn-blade::before {
        content: '';
        position: absolute;
        inset: 0;
        left: -100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: 0.5s;
    }

    .submit-btn-blade:hover::before {
        left: 100%;
    }

    .submit-btn-blade:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(79, 172, 254, 0.5);
    }

    .social-icon-blade {
        transition: transform 0.2s;
        text-decoration: none;
        display: inline-block;
    }

    .social-icon-blade:hover {
        transform: scale(1.2);
    }

    .social-icon-blade svg {
        width: 28px;
        height: 28px;
        fill: currentColor;
    }

    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 16px;
    }

    .form-field {
        display: flex;
        flex-direction: column;
    }

    @media (max-width: 768px) {
        .main-grid-blade {
            grid-template-columns: 1fr !important;
        }

        .info-grid-blade {
            grid-template-columns: 1fr !important;
        }
        
        .contact-section-blade h2 {
            font-size: 36px !important;
        }
        
        .info-heading {
            font-size: 28px !important;
        }

        .form-row {
            grid-template-columns: 1fr !important;
        }
    }
</style>

<section id="contact" data-section="contact" class="contact-us contact-section-blade">
    {{-- FLOATING BACKGROUND --}}
    <div style="position: absolute; inset: 0; opacity: 0.15; pointer-events: none;">
        @for ($i = 0; $i < 5; $i++)
            <div style="position: absolute; border-radius: 50%; background: radial-gradient(circle, rgba(79,172,254,.4), transparent); animation: float {{ 8 + $i * 2 }}s ease-in-out infinite; animation-delay: {{ $i * 1.5 }}s; width: {{ 150 + $i * 50 }}px; height: {{ 150 + $i * 50 }}px; left: {{ $i * 20 }}%; top: {{ $i * 15 }}%;"></div>
        @endfor
    </div>

    {{-- GRID OVERLAY --}}
    <div style="position: absolute; inset: 0; background-image: linear-gradient(rgba(79,172,254,.03) 1px, transparent 1px), linear-gradient(90deg, rgba(79,172,254,.03) 1px, transparent 1px); background-size: 50px 50px; pointer-events: none;"></div>

    <div style="max-width: 1200px; margin: 0 auto; position: relative; z-index: 1;">
        {{-- HEADER --}}
        <div style="text-align: center; margin-bottom: 60px; animation: fadeInUp 0.8s ease;">
            <h2 style="font-size: 48px; font-weight: 700; background: linear-gradient(135deg, #fff, #4facfe); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; margin-bottom: 16px; letter-spacing: -0.5px;">
                Feel Free To Get In Touch
            </h2>
            <p style="color: #b8c5e0; max-width: 600px; margin: 0 auto; font-size: 17px; line-height: 1.7; font-weight: 400;">
                Established in 2022, we are a modern shipping agency committed to efficiency,
                service excellence, and building lasting partnerships.
            </p>
        </div>

        {{-- MAIN GRID --}}
        <div class="main-grid-blade" style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: start;">
            {{-- LEFT FORM --}}
            <div style="background: rgba(255,255,255,.98); border-radius: 24px; padding: 45px; color: #333; box-shadow: 0 30px 70px rgba(0,0,0,.3); animation: fadeInUp 0.8s ease 0.2s backwards;">
                <h3 style="font-size: 28px; color: #1a1f3a; font-weight: 700; margin-bottom: 8px; letter-spacing: -0.5px;">
                    Leave Your Message
                </h3>
                <p style="font-size: 15px; color: #6b7280; margin-bottom: 28px; font-weight: 400; line-height: 1.6;">
                    We'll get back to you within 24 hours.
                </p>

                {{-- Flash messages --}}
                @if(session('success'))
                    <div style="background:#DCFCE7;color:#065f46;padding:12px;border-radius:10px;margin-bottom:16px;font-weight:600;">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div style="background:#FEE2E2;color:#991B1B;padding:12px;border-radius:10px;margin-bottom:16px;font-weight:600;">
                        {{ session('error') }}
                    </div>
                @endif

                @if($errors->any())
                    <div style="background:#FEF3C7;color:#92400E;padding:12px;border-radius:10px;margin-bottom:16px;">
                        <ul style="margin:0;padding-left:18px;">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{route('contact.send') }}" method="POST" style="display: flex; flex-direction: column; gap: 22px;">
                    @csrf
                    
                    {{-- Name and Email Row --}}
                    <div class="form-row">
                        <div class="form-field">
                            <label style="display: block; font-weight: 600; color: #374151; margin-bottom: 8px; font-size: 14px;">Name *</label>
                            <input class="input-field-blade" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-field">
                            <label style="display: block; font-weight: 600; color: #374151; margin-bottom: 8px; font-size: 14px;">Email *</label>
                            <input class="input-field-blade" type="email" name="email" placeholder="your.email@example.com" required>
                        </div>
                    </div>

                    {{-- Subject Field --}}
                    <div class="form-field">
                        <label style="display: block; font-weight: 600; color: #374151; margin-bottom: 8px; font-size: 14px;">Subject *</label>
                        <input class="input-field-blade" name="subject" placeholder="How can we help you?" required>
                    </div>

                    {{-- Message Field --}}
                    <div class="form-field">
                        <label style="display: block; font-weight: 600; color: #374151; margin-bottom: 8px; font-size: 14px;">Message *</label>
                        <textarea class="input-field-blade" style="resize: none; font-family: inherit;" rows="5" name="message" placeholder="Tell us more about your inquiry..." required></textarea>
                    </div>

                    {{-- Submit Button --}}
                    <button class="submit-btn-blade" type="submit" >
                        Send Message →
                    </button>
                </form>
            </div>

            {{-- RIGHT INFO --}}
            <div style="animation: fadeInUp 0.8s ease 0.3s backwards;">
                {{-- Info heading --}}
                <div style="margin-bottom: 32px; text-align: center;">
                    <p class="info-heading" style="margin: 0; font-size: 38px; font-weight: 700; color: #ffffff; letter-spacing: -0.5px; line-height: 1.2;">
                        Don't Hesitate to Contact Us
                    </p>
                    <p style="margin-top: 12px; font-size: 15px; font-weight: 400; color: #cbd5e1; line-height: 1.6;">
                        Our team will try our best to respond to you as soon as possible. Thank you for reaching out!
                    </p>
                </div>

                {{-- Cards Grid --}}
                <div class="info-grid-blade" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 100px;">
                    {{-- Office Card --}}
                    <div class="info-card-wrapper-blade" style="animation: fadeInUp 0.8s ease 0.4s backwards;">
                        <div class="info-card-icon" style="color: #3182ce;">
                            <svg style="width: 28px; height: 28px; fill: currentColor;" viewBox="0 0 384 512"><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"/></svg>
                        </div>
                        <div class="info-card-content">
                            <h4>Office</h4>
                            <p>Parañaque City, Philippines</p>
                        </div>
                    </div>

                    {{-- Phone Card --}}
                    <div class="info-card-wrapper-blade" style="animation: fadeInUp 0.8s ease 0.5s backwards;">
                        <div class="info-card-icon" style="color: #d69e2e;">
                            <svg style="width: 28px; height: 28px; fill: currentColor;" viewBox="0 0 512 512"><path d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"/></svg>
                        </div>
                        <div class="info-card-content">
                            <h4>Phone</h4>
                            <p>+63 910 293 3079</p>
                        </div>
                    </div>

                    {{-- Work Hours Card --}}
                    <div class="info-card-wrapper-blade" style="animation: fadeInUp 0.8s ease 0.6s backwards; margin-top: 40px;">
                        <div class="info-card-icon" style="color: #805ad5;">
                            <svg style="width: 28px; height: 28px; fill: currentColor;" viewBox="0 0 512 512"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"/></svg>
                        </div>
                        <div class="info-card-content">
                            <h4>Work Hours</h4>
                            <p>Everyday 9am – 6pm</p>
                        </div>
                    </div>

                    {{-- Email Card --}}
                    <div class="info-card-wrapper-blade" style="animation: fadeInUp 0.8s ease 0.7s backwards; margin-top: 40px;">
                        <div class="info-card-icon" style="color: #38a169;">
                            <svg style="width: 28px; height: 28px; fill: currentColor;" viewBox="0 0 512 512"><path d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"/></svg>
                        </div>
                        <div class="info-card-content">
                            <h4>Email</h4>
                            <p>goldentigershipping@gmail.com</p>
                        </div>
                    </div>
                </div>

                {{-- Social Media --}}
                <div style="display: flex; flex-direction: column; gap: 20px; background: rgba(255, 255, 255, 0.05); border-radius: 16px; padding: 24px; backdrop-filter: blur(10px); border: 1px solid rgba(79, 172, 254, 0.2); animation: fadeInUp 0.8s ease 0.8s backwards;">
                    <span style="font-size: 18px; font-weight: 600; color: #fff; text-align: center;">Connect With Us</span>
                    <div style="display: flex; gap: 24px; justify-content: center;">
                        <a href="https://www.viber.com/en/" target="_blank" rel="noopener noreferrer" class="social-icon-blade" style="color: #665cac;" title="Viber">
                            <svg style="width: 32px; height: 32px; fill: currentColor;" viewBox="0 0 512 512"><path d="M444 49.9C431.3 38.2 379.9.9 265.3.4c0 0-135.1-8.1-200.9 52.3C27.8 89.3 14.9 143 13.5 209.5c-1.4 66.5-3.1 191.1 117 224.9h.1l-.1 51.6s-.8 20.9 13 25.1c16.6 5.2 26.4-10.7 42.3-27.8 8.7-9.4 20.7-23.2 29.8-33.7 82.2 6.9 145.3-8.9 152.5-11.2 16.6-5.4 110.5-17.4 125.7-142 15.8-128.6-7.6-209.8-49.8-246.5z"/></svg>
                        </a>
                        <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" class="social-icon-blade" style="color: #1877f2;" title="Facebook">
                            <svg style="width: 32px; height: 32px; fill: currentColor;" viewBox="0 0 320 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
                        </a>
                        <a href="https://www.messenger.com/" target="_blank" rel="noopener noreferrer" class="social-icon-blade" style="color: #00c6ff;" title="Messenger">
                            <svg style="width: 32px; height: 32px; fill: currentColor;" viewBox="0 0 512 512"><path d="M256.55 8C116.52 8 8 110.34 8 248.57c0 72.3 29.71 134.78 78.07 177.94 8.35 7.51 6.63 11.86 8.05 58.23A19.92 19.92 0 0 0 122 502.31c52.91-23.3 58.74-28.33 70.79-25.52 9.59 2.25 19.96 3.59 30.72 3.59 140.03 0 248.49-101.6 248.49-239.85S396.58 8 256.55 8zm14.52 325.88l-67.6-71.92-131.89 71.92 145-153.88 67.6 71.92 131.89-71.92z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>