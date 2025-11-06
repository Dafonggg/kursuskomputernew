<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/logokrk.png') }}" alt="Ryan Computer" style="height: 40px; margin-right: 10px;">
            <span>Kursus Ryan</span>
        </a>

        <div class="d-lg-none ms-auto me-4">
            <div class="dropdown position-relative">
                <a href="#" class="navbar-icon bi-person" id="mobileUserDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"></a>
                <ul class="dropdown-menu dropdown-menu-end user-dropdown-menu" style="right: 0; left: auto; margin-top: 0.5rem;" aria-labelledby="mobileUserDropdown">
                    <li>
                        <a class="dropdown-item user-dropdown-item {{ request()->routeIs('login') ? 'active' : '' }}" href="{{ route('login') }}">
                            <i class="bi bi-box-arrow-in-right me-2"></i>
                            <span>Login</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item user-dropdown-item {{ request()->routeIs('register') ? 'active' : '' }}" href="{{ route('register') }}">
                            <i class="bi bi-person-plus me-2"></i>
                            <span>Register</span>
                        </a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <a class="dropdown-item user-dropdown-item {{ request()->routeIs('dashboard.*') ? 'active' : '' }}" href="{{ route('dashboard.admin-dashboard') }}">
                            <i class="bi bi-speedometer2 me-2"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-lg-5 me-lg-auto">
                <li class="nav-item">
                    <a class="nav-link click-scroll {{ request()->routeIs('index') ? 'active' : '' }}" href="{{ url('/') }}#section_1">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="{{ url('/') }}#section_2">Kursus</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="{{ url('/') }}#section_3">How it works</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="{{ url('/') }}#section_4">FAQs</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="{{ url('/') }}#section_5">Contact</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#section_5" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>

                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                        <li><a class="dropdown-item {{ request()->routeIs('daftar-kursus') ? 'active' : '' }}" href="{{ url('/daftar-kursus') }}">Daftar Kursus</a></li>

                        <li><a class="dropdown-item {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ url('/contact') }}">Contact Form</a></li>
                    </ul>
                </li>
            </ul>

            <!-- Login & Sign Up Buttons -->
            <div class="d-none d-lg-flex gap-3 align-items-center ms-lg-4">
                <a href="{{ route('login') }}" 
                   class="bg-[#81d0c7] hover:bg-[#4f98a4] text-white font-semibold px-6 py-2.5 rounded-full transition-all duration-300 transform hover:scale-105 no-underline">
                    Login
                </a>
                <span class="text-white">|</span>
                <a href="{{ route('register') }}" 
                   class="bg-[#13547a] hover:bg-[#4f98a4] text-white font-semibold px-6 py-2.5 rounded-full transition-all duration-300 transform hover:scale-105 no-underline">
                    Sign Up
                </a>
            </div>
            </div>
        </div>
    </div>
</nav>