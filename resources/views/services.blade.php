@extends('layouts.app')

@section('title', 'Expertise & Services | Mitiku Asmare')

@section('content')

    <header class="page-hero">
        <div class="bg-pattern-overlay"></div>
        <div class="container center">
            <span class="pill-badge" style="background: rgba(16, 185, 129, 0.1); color: #065F46;">Expertise</span>
            <h1 style="margin-top: 15px; margin-bottom: 15px;">Executive <span class="txt-gold">Competencies</span></h1>
            <p class="subtitle" style="max-width: 650px; margin: 0 auto;">
                My approach combines the discipline of government procedure with the agility of private sector management to deliver measurable results.
            </p>
        </div>
    </header>

    <section class="section">
        <div class="container">

            <div class="services-wrapper">
                @foreach($services as $index => $service)
                    <div class="service-row {{ $index % 2 == 1 ? 'reverse' : '' }} hidden-up delay-{{ $index }}">

                        <div class="service-text">
                            <div class="service-icon-lg icon-{{ $service['color'] }}">
                                <i class="{{ $service['icon'] }}"></i>
                            </div>
                            <h3>{{ $service['title'] }}</h3>
                            <p>{{ $service['description'] }}</p>

                            <ul class="service-list">
                                @foreach($service['offerings'] as $item)
                                    <li><i class="fas fa-check-circle txt-{{ $service['color'] }}"></i> {{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="service-visual">
                            <div class="glass-card-lg">
                                <div class="visual-header">
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                </div>
                                <div class="visual-body">
                                    <h5>Key Approach</h5>
                                    <div class="process-step">
                                        <span class="step-num">01</span>
                                        <p>Diagnosis & Assessment</p>
                                    </div>
                                    <div class="process-line"></div>
                                    <div class="process-step">
                                        <span class="step-num">02</span>
                                        <p>Strategy Formulation</p>
                                    </div>
                                    <div class="process-line"></div>
                                    <div class="process-step">
                                        <span class="step-num">03</span>
                                        <p>Execution & Monitoring</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    @if(!$loop->last)
                        <div class="section-divider"></div>
                    @endif
                @endforeach
            </div>

            <div class="cta-box center hidden-up" style="margin-top: 80px;">
                <h3>Ready to optimize your organization?</h3>
                <p>Let's discuss how these competencies can apply to your specific challenges.</p>
                <a href="{{ route('home') }}#contact" class="btn btn-primary" style="margin-top: 20px;">Schedule Consultation</a>
            </div>

        </div>
    </section>

@endsection
