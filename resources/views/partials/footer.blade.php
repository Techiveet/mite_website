<footer>
    <div class="container footer-content">
      <div class="footer-logo">
    <a href="{{ route('home') }}" class="logo">
        {{-- Light Mode Logo --}}
        <img src="{{ asset('images/logo-dark.png') }}"
             alt="Mitiku Asmare"
             class="logo-img logo-light">

        {{-- Dark Mode Logo --}}
        <img src="{{ asset('images/logo-dark.png') }}"
             alt="Mitiku Asmare"
             class="logo-img logo-dark">

        <div class="logo-text">
            Mitiku Asmare
            <span class="amharic-sub">ምትኩ አስማረ</span>
        </div>
    </a>
    <p class="footer-tagline">
        Executive General Manager bridging policy, governance, and private-sector growth in Ethiopia.
    </p>
</div>
        <div class="footer-links">
            <h5>Quick Links</h5>
            <ul>
                <li><a href="{{ route('home') }}#about">About</a></li>
                <li><a href="{{ route('home') }}#services">What I Do</a></li>
                <li><a href="{{ route('home') }}#portfolio">Portfolio</a></li>
                <li><a href="{{ route('home') }}#contact">Contact Us</a></li>
            </ul>
        </div>

        <div class="footer-contact">
            <h5>Contact</h5>
            <ul>
                <li><i class="fas fa-phone"></i> +251 911 00 00 00</li>
                <li><i class="fas fa-envelope"></i> email@example.com</li>
                <li><i class="fas fa-map-marker-alt"></i> Bole, Addis Ababa</li>
            </ul>
            <div class="footer-socials">
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-x-twitter"></i></a>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container footer-bottom-inner">
            <p>&copy; 2025 Mitiku Asmare. All Rights Reserved.</p>
            <p class="amharic-footer">Powered by TechHive Technology Solutions</p>
        </div>
    </div>
</footer>
