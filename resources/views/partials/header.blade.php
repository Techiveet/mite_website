<nav class="navbar">
    <div class="container nav-container">
       <a href="{{ route('home') }}" class="logo">
    {{-- Light Mode Logo (Visible by default) --}}
    <img src="{{ asset('images/logo-light.png') }}"
         alt="Mitiku Asmare"
         class="logo-img logo-light">

    {{-- Dark Mode Logo (Hidden by default) --}}
    <img src="{{ asset('images/logo-dark.png') }}"
         alt="Mitiku Asmare"
         class="logo-img logo-dark">

    {{-- Text (Optional, remove if you only want the image) --}}
    <div class="logo-text">
        Mitiku Asmare
        <span class="amharic-sub">ምትኩ አስማረ</span>
    </div>
</a>

        <ul class="nav-links">
            <li><a href="{{ route('home') }}#about">{{ __('About') }}</a></li>
    <li><a href="{{ route('home') }}#services">{{ __('What I Do') }}</a></li>
    <li><a href="{{ route('home') }}#experience">{{ __('Experience') }}</a></li>
    <li><a href="{{ route('home') }}#education">{{ __('Education') }}</a></li>
    <li><a href="{{ route('home') }}#portfolio">{{ __('Portfolio') }}</a></li>
    <li><a href="{{ route('home') }}#awards">{{ __('Awards') }}</a></li>
    <li><a href="{{ route('home') }}#testimonials">{{ __('Endorsements') }}</a></li>
    <li><a href="{{ route('home') }}#training">{{ __('Training') }}</a></li>

            <li class="nav-lang-item">
                <div class="language-switcher">
                    <i class="fas fa-globe"></i>
                    <select id="language-switcher" aria-label="Language">
                        <option value="en">EN</option>
                        <option value="am">አማ</option>
                    </select>
                </div>
            </li>
<li class="nav-contact-item">
        <a href="{{ route('home') }}#contact" class="btn-nav">{{ __('Contact Us') }}</a>
    </li>

            <li class="nav-theme-item">
                <button id="theme-toggle" class="theme-toggle" aria-label="Toggle theme">
                    <i class="fas fa-moon"></i>
                </button>
            </li>
        </ul>

        <button class="hamburger" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
    </div>
</nav>
