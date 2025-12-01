@extends('layouts.app')

@section('content')
    <header class="hero" id="home">
        <div class="bg-pattern-overlay"></div>
        <div class="container hero-content">
            <div class="hero-text hidden-left">
                <div class="accent-badge">Executive Leadership</div>
                <h1>Bridging <span class="txt-green">Policy</span> & <span class="txt-red">Profitability</span></h1>
                <p>A General Manager with 15+ years of experience transforming government bureaus and private enterprises in Ethiopia.</p>

                <div class="hero-stats">
                    <div class="stat-item"><span class="counter" data-target="20">0</span><span>+</span><p>Years Exp.</p></div>
                    <div class="stat-item"><span class="counter" data-target="300">0</span><span>+</span><p>Staff Managed</p></div>
                    <div class="stat-item"><span class="counter" data-target="193">0</span><span>M</span><p>Program Size (USD)</p></div>
                </div>

                <div class="hero-btns">
                    <a href="#portfolio" class="btn btn-primary">View Case Studies</a>
                    <a href="#contact" class="btn btn-outline">Consultation</a>
                </div>
            </div>
            <div class="hero-img-box hidden-right">
                <div class="tibeb-frame">
                    <img src="https://images.unsplash.com/photo-1556157382-97eda2d62296?q=80&w=1000&auto=format&fit=crop" alt="Executive Portrait">
                </div>
                <div class="floating-card">
                    <i class="fas fa-check-circle"></i><span>Certified Leader</span>
                </div>
            </div>
        </div>
    </header>

    @endsection
