<style>
    .nav-link-item {
        transition: color 0.2s ease;
    }

    .nav-link-item:hover {
        color: #ffffff !important;
    }

    .contact-btn {
        transition: background-color 0.2s ease, border-color 0.2s ease;
    }

    .contact-btn:hover {
        background-color: rgba(255, 255, 255, 0.08) !important;
        border-color: rgba(255, 255, 255, 0.5) !important;
    }
</style>

<nav style="
    position: fixed;
    top: 20px;
    left: 50%;
    transform: translateX(-50%);
    width: calc(100% - 48px);
    max-width: 900px;
    z-index: 1000;
">
    <div style="
        background-color: rgba(217, 217, 217, 0.10);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border: 1px solid rgba(255,255,255,0.1);
        border-radius: 999px;
        padding: 12px 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    ">

        {{-- Logo Section --}}
        <div class="d-flex align-items-center gap-2">
            <img src="{{ asset('assets/jd-logo.png') }}" alt="Logo" width="28" style="object-fit: contain;">
            <span class="text-white" style="font-size: 24px; font-weight: 600; letter-spacing: -0.2px;">
                Dane
            </span>
        </div>

        {{-- Navigation Links --}}
        <div class="d-flex align-items-center" style="gap: 36px;">
            <a href="{{ route('projects') }}" class="nav-link-item text-decoration-none"
                style="color: rgba(255, 255, 255, 0.75); font-size: 15px; font-weight: 500;">
                Projects
            </a>
            <a href="{{ route('skills') }}" class="nav-link-item text-decoration-none"
                style="color: rgba(255, 255, 255, 0.75); font-size: 15px; font-weight: 500;">
                Skills
            </a>
            <a href="{{ route('experience') }}" class="nav-link-item text-decoration-none"
                style="color: rgba(255, 255, 255, 0.75); font-size: 15px; font-weight: 500;">
                Experience
            </a>
        </div>

        {{-- Contact Button --}}
        <a href="{{ route('contact') }}" class="contact-btn text-white text-decoration-none"
            style="
                font-size: 15px;
                font-weight: 500;
                border: 1px solid rgba(255, 255, 255, 0.3);
                border-radius: 999px;
                padding: 8px 20px;
            ">
            Contact
        </a>

    </div>
</nav>