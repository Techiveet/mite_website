@extends('layouts.app')

@section('title', __('Home') . ' | Mitiku Asmare')

@section('content')
    <header class="hero" id="home">
        <div class="bg-pattern-overlay"></div>

        <div class="container hero-content">
            <div class="hero-text hidden-left">
                <div class="accent-badge">{{ __('Executive Leadership') }}</div>
                <h1>
                    {!! __('Bridging <span class="txt-green">Policy</span> & <span class="txt-red">Profitability</span>') !!}
                </h1>
                <p>
                    {{ __('A General Manager with 15+ years of experience transforming government bureaus and private enterprises in Ethiopia.') }}
                </p>

                <div class="hero-stats">
                    <div class="stat-item">
                        <span class="counter" data-target="20">0</span><span>+</span>
                        <p>{{ __('Years Exp.') }}</p>
                    </div>
                    <div class="stat-item">
                        <span class="counter" data-target="300">0</span><span>+</span>
                        <p>{{ __('Staff Managed') }}</p>
                    </div>
                    <div class="stat-item">
                        <span class="counter" data-target="193">0</span><span>M</span>
                        <p>{{ __('Program Size (USD)') }}</p>
                    </div>
                </div>

                <div class="hero-btns">
                    <a href="#portfolio" class="btn btn-primary">{{ __('View Case Studies') }}</a>
                    <a href="#contact" class="btn btn-outline">{{ __('Consultation') }}</a>
                </div>
            </div>

            <div class="hero-img-box hidden-right">
                <div class="tibeb-frame">
                    <img src="https://portfolio-eight-tawny-30.vercel.app/assets/mitku-photo.jpg" alt="{{ __('Executive Portrait') }}">
                </div>
                <div class="floating-card">
                    <i class="fas fa-check-circle"></i>
                    <span>{{ __('Certified Leader') }}</span>
                </div>
            </div>
        </div>
    </header>

    <section id="about" class="section bg-light">
        <div class="container about-grid">
            <div class="about-text hidden-left">
                <h3 class="section-title">{{ __('About') }}</h3>
                <div class="tibeb-divider"></div>
                <p class="about-intro">
                   {{ __('Productive') }}
                </p>
                <p>
                    {{ __('Proven record translating national logistics strategy into executable programs, orchestrating multi-agency delivery, and stewarding large donor-funded initiatives. Experienced in legislation and policy development, portfolio management, and data-informed decision making. Recognized as proactive, organized, and collaborative—delivering measurable outcomes for city and national institutions.') }}
                </p>
            </div>

            <div class="about-highlights hidden-right">
                <div class="about-card">
                    <h4>{{ __('Leadership Profile') }}</h4>
                    <ul>
                        <li>{{ __('20+ years in transport & urban systems') }}</li>
                        <li>{{ __('Cross-sector experience (Government & Private)') }}</li>
                        <li>{{ __('Clean audits, strong governance, and compliance') }}</li>
                    </ul>
                </div>
                <div class="about-card">
                    <h4>{{ __('Focus Areas') }}</h4>
                    <ul>
                        <li>{{ __('Industrial Operations & Manufacturing') }}</li>
                        <li>{{ __('Policy & Regulatory Navigation') }}</li>
                        <li>{{ __('Digital Transformation & Process Re-engineering') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="section">
        <div class="container">
            <div class="section-header center hidden-up">
                <h3 class="section-title">{{ __('What I Do') }}</h3>
                <div class="tibeb-divider"></div>
            </div>

            <div class="grid-3">
                <div class="service-card hidden-up delay-1">
                    <div class="service-icon-circle">
                        <i class="fas fa-chess-queen icon-gold"></i>
                    </div>
                    <h4>{{ __('Strategic Planning') }}</h4>
                    <p>{{ __('Developing 5-year roadmaps that align organizational vision with economic and market realities.') }}</p>
                </div>

                <div class="service-card hidden-up delay-2">
                    <div class="service-icon-circle">
                        <i class="fas fa-balance-scale icon-green"></i>
                    </div>
                    <h4>{{ __('Gov. Relations & Policy') }}</h4>
                    <p>{{ __('Expert navigation of federal regulations, tax compliance, and public–private partnerships.') }}</p>
                </div>

                <div class="service-card hidden-up delay-3">
                    <div class="service-icon-circle">
                        <i class="fas fa-cogs icon-red"></i>
                    </div>
                    <h4>{{ __('Operational Excellence') }}</h4>
                    <p>{{ __('Implementing Kaizen and Lean practices to reduce waste and increase manufacturing output.') }}</p>
                </div>
            </div>

            <div class="center hidden-up delay-3" style="margin-top: 40px;">
                <a href="{{ route('services') }}" class="btn btn-outline">
                    {{ __('View Detailed Competencies') }} <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <section id="experience" class="section experience-section">
        <div class="container">
            <div class="section-header center hidden-up">
                <h3 class="section-title">{{ __('Experience') }}</h3>
                <p class="subtitle">{{ __('Key roles, responsibilities, and outcomes across 20+ years.') }}</p>
                <div class="tibeb-divider"></div>
            </div>

            <div class="experience-layout">
                <div class="experience-intro hidden-left">
                    <h4 class="experience-subtitle">{{ __('Leadership Journey') }}</h4>
                    <p>
                        {{ __('Progressive leadership from project delivery to national policy advisory, covering public transport, urban mobility, and large-scale donor-funded programs.') }}
                    </p>

                    <div class="experience-stats">
                        <div class="exp-stat">
                            <span class="exp-stat-number">20+</span>
                            <span class="exp-stat-label">{{ __('Years in Transport & Urban Systems') }}</span>
                        </div>
                        <div class="exp-stat">
                            <span class="exp-stat-number">7+</span>
                            <span class="exp-stat-label">{{ __('Major Institutions Led') }}</span>
                        </div>
                        <div class="exp-stat">
                            <span class="exp-stat-number">$193M</span>
                            <span class="exp-stat-label">{{ __('World Bank Program (TRANSIP)') }}</span>
                        </div>
                    </div>
                </div>

                <div class="experience-wrapper hidden-right">
                    <div class="experience-list">
                        <article class="exp-item">
                            <div class="exp-header-row">
                                <div>
                                    <h4 class="exp-role">{{ __('Senior Transport Consultant') }}</h4>
                                    <span class="exp-org">{{ __('Logistics Transformation Office') }}</span>
                                </div>
                                <span class="exp-chip exp-chip-advisory">{{ __('Advisory') }}</span>
                            </div>
                            <div class="exp-meta">
                                <span>{{ __('Nov 2020 – Present') }}</span>
                                <span>{{ __('Addis Ababa, Ethiopia') }}</span>
                            </div>
                            <p class="exp-desc">
                                {{ __('Translating national logistics strategy into executable transport programs and projects, aligning implementation features with policy goals.') }}
                            </p>
                        </article>

                        <article class="exp-item">
                            <div class="exp-header-row">
                                <div>
                                    <h4 class="exp-role">{{ __('Deputy Director General') }}</h4>
                                    <span class="exp-org">{{ __('Federal Transport Authority') }}</span>
                                </div>
                                <span class="exp-chip exp-chip-gov">{{ __('Government') }}</span>
                            </div>
                            <div class="exp-meta">
                                <span>{{ __('Feb 2019 – Nov 2020') }}</span>
                                <span>{{ __('Federal Level') }}</span>
                            </div>
                            <p class="exp-desc">
                                {{ __('Led and coordinated national road traffic management departments, driving performance, inter-agency collaboration, and implementation standards.') }}
                            </p>
                        </article>

                        <article class="exp-item">
                            <div class="exp-header-row">
                                <div>
                                    <h4 class="exp-role">{{ __('Deputy Bureau Head') }}</h4>
                                    <span class="exp-org">{{ __('Addis Ababa City Road & Transport Bureau') }}</span>
                                </div>
                                <span class="exp-chip exp-chip-city">{{ __('City Leadership') }}</span>
                            </div>
                            <div class="exp-meta">
                                <span>{{ __('Aug 2018 – Feb 2019') }}</span>
                                <span>{{ __('Addis Ababa') }}</span>
                            </div>
                            <p class="exp-desc">
                                {{ __('Oversaw seven institutions to ensure coordinated delivery of bureau vision and annual performance targets for the city.') }}
                            </p>
                        </article>

                        <article class="exp-item">
                            <div class="exp-header-row">
                                <div>
                                    <h4 class="exp-role">{{ __('Deputy GM & General Manager') }}</h4>
                                    <span class="exp-org">{{ __('Addis Ababa City Transport Authority') }}</span>
                                </div>
                                <span class="exp-chip exp-chip-mobility">{{ __('Urban Mobility') }}</span>
                            </div>
                            <div class="exp-meta">
                                <span>{{ __('Jan 2016 – Aug 2018') }}</span>
                                <span>{{ __('Addis Ababa') }}</span>
                            </div>
                            <p class="exp-desc">
                                {{ __('With AAU, WRI and partners, led the digital mapping of Addis Ababa’s public transport network and coordinated key mobility projects.') }}
                            </p>
                        </article>

                        <article class="exp-item">
                            <div class="exp-header-row">
                                <div>
                                    <h4 class="exp-role">{{ __('PIU Member — TRANSIP Program') }}</h4>
                                    <span class="exp-org">{{ __('$193M World Bank Transport Systems Improvement Project') }}</span>
                                </div>
                                <span class="exp-chip exp-chip-donor">{{ __('Donor Program') }}</span>
                            </div>
                            <div class="exp-meta">
                                <span>{{ __('Sep 2015 – Jan 2016') }}</span>
                                <span>{{ __('National') }}</span>
                            </div>
                            <p class="exp-desc">
                                {{ __('Supported program design and implementation for TRANSIP with focus on governance, coordination, and technical assistance.') }}
                            </p>
                        </article>

                        <article class="exp-item">
                            <div class="exp-header-row">
                                <div>
                                    <h4 class="exp-role">{{ __('Project Manager — BRT B2 Corridor') }}</h4>
                                    <span class="exp-org">{{ __('AFD-Funded €105M Project') }}</span>
                                </div>
                                <span class="exp-chip exp-chip-project">{{ __('Project Lead') }}</span>
                            </div>
                            <div class="exp-meta">
                                <span>{{ __('Feb 2014 – Jan 2016') }}</span>
                                <span>{{ __('Addis Ababa') }}</span>
                            </div>
                            <p class="exp-desc">
                                {{ __('Managed design and delivery coordination for the Bus Rapid Transit B2 Corridor, ensuring stakeholder alignment and implementation readiness.') }}
                            </p>
                        </article>

                        <article class="exp-item">
                            <div class="exp-header-row">
                                <div>
                                    <h4 class="exp-role">{{ __('Capacity Building Team Leader / Transport Economist') }}</h4>
                                    <span class="exp-org">{{ __('Addis Ababa City Roads Authority') }}</span>
                                </div>
                                <span class="exp-chip exp-chip-econ">{{ __('Economics') }}</span>
                            </div>
                            <div class="exp-meta">
                                <span>{{ __('Jun 2011 – Sep 2014') }}</span>
                                <span>{{ __('Roads & Transport') }}</span>
                            </div>
                            <p class="exp-desc">
                                {{ __('Led capacity-building programs and economic analysis for road and transport projects, ensuring value-for-money and sustainable planning.') }}
                            </p>
                        </article>

                        <article class="exp-item">
                            <div class="exp-header-row">
                                <div>
                                    <h4 class="exp-role">{{ __('Road Traffic Management Senior Expert') }}</h4>
                                    <span class="exp-org">{{ __('Addis Ababa City Road & Transport Bureau') }}</span>
                                </div>
                                <span class="exp-chip exp-chip-ops">{{ __('Operations') }}</span>
                            </div>
                            <div class="exp-meta">
                                <span>{{ __('Jul 2011 – Jun 2011') }}</span>
                                <span>{{ __('Traffic Management') }}</span>
                            </div>
                            <p class="exp-desc">
                                {{ __('Provided expert support on traffic operations, safety measures, and road management frameworks for the city.') }}
                            </p>
                        </article>

                        <div class="exp-extra-block">
                            <h4 class="exp-extra-title">{{ __('Other Management Roles') }}</h4>
                            <ul class="exp-extra-list">
                                <li>
                                    <span class="exp-extra-role">{{ __('Vice Chair, Board of Directors') }}</span>
                                    <span class="exp-extra-org">{{ __('Anbesa City Bus Service Enterprise (2016–2019)') }}</span>
                                </li>
                                <li>
                                    <span class="exp-extra-role">{{ __('Vice Chair, Board of Directors') }}</span>
                                    <span class="exp-extra-org">{{ __('Sheger Mass Transit Service Enterprise (2016–2019)') }}</span>
                                </li>
                                <li>
                                    <span class="exp-extra-role">{{ __('Board Member') }}</span>
                                    <span class="exp-extra-org">{{ __('Addis Ababa City Transport Programs Management Office (2019)') }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="exp-pager">
                        <button class="exp-prev" type="button"><i class="fas fa-chevron-up"></i></button>
                        <span class="exp-page-indicator">
                            <span id="exp-current-page">1</span> / <span id="exp-total-pages">3</span>
                        </span>
                        <button class="exp-next" type="button"><i class="fas fa-chevron-down"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="education" class="section bg-light">
        <div class="container">
            <div class="section-header center hidden-up">
                <h3 class="section-title">{{ __('Education') }}</h3>
                <div class="tibeb-divider"></div>
            </div>

            <div class="education-grid">
                <article class="edu-card hidden-up">
                    <h4 class="edu-degree">{{ __('M.A. Urban Management (Transport Management)') }}</h4>
                    <div class="edu-meta">
                        <span class="edu-school">{{ __('Ethiopian Civil Service University') }}</span>
                        <span class="edu-year">{{ __('Jul 2011') }}</span>
                    </div>
                    <p class="edu-desc">
                        {{ __('Graduate-level training focused on urban transport systems, governance, and infrastructure planning for rapidly growing African cities.') }}
                    </p>
                </article>

                <article class="edu-card hidden-up delay-1">
                    <h4 class="edu-degree">{{ __('B.A. History (Minor: Geography)') }}</h4>
                    <div class="edu-meta">
                        <span class="edu-school">{{ __('Addis Ababa University') }}</span>
                        <span class="edu-year">{{ __('Nov 2006') }}</span>
                    </div>
                    <p class="edu-desc">
                        {{ __('Built strong analytical and research skills to understand socio-economic and political dynamics that shape transport and urban development.') }}
                    </p>
                </article>

                <article class="edu-card hidden-up delay-2">
                    <h4 class="edu-degree">{{ __('Diploma, History (Minor: Geography)') }}</h4>
                    <div class="edu-meta">
                        <span class="edu-school">{{ __('Kotebe Metropolitan University') }}</span>
                        <span class="edu-year">{{ __('Jun 1999') }}</span>
                    </div>
                    <p class="edu-desc">
                        {{ __('Foundation in social sciences and geography, supporting later specialization in transport management and policy.') }}
                    </p>
                </article>
            </div>

            <div class="center hidden-up delay-3" style="margin-top: 40px;">
                <a href="{{ route('education') }}" class="btn btn-outline">
                    {{ __('See Academic Details') }} <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <section id="portfolio" class="section">
        <div class="container">
            <div class="section-header center hidden-up">
                <h3 class="section-title">{{ __('Strategic Initiatives') }}</h3>
                <div class="tibeb-divider"></div>
            </div>

            <div class="portfolio-slider hidden-up delay-1">
                <button class="portfolio-arrow prev" aria-label="{{ __('Previous case study') }}"><i class="fas fa-chevron-left"></i></button>

                <div class="portfolio-inner">
                    <div class="portfolio-slide active" data-index="0">
                        <div class="portfolio-card">
                            <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=1000&auto=format&fit=crop" alt="{{ __('Factory Turnaround') }}">
                            <div class="portfolio-overlay">
                                <span class="portfolio-tag">{{ __('Turnaround') }}</span>
                                <h4>{{ __('Factory Turnaround') }}</h4>
                                <p>{{ __('Restructuring a loss-making textile plant into profitability within 18 months.') }}</p>
                                <a href="{{ route('portfolio.show', 'factory-turnaround') }}" class="btn-text">
                                    {{ __('View Case Study') }} <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="portfolio-card">
                            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=1000&auto=format&fit=crop" alt="{{ __('Digital Transformation') }}">
                            <div class="portfolio-overlay">
                                <span class="portfolio-tag">{{ __('Digital') }}</span>
                                <h4>{{ __('Digital Transition') }}</h4>
                                <p>{{ __('Moving a government bureau from paper-based archives to a cloud database.') }}</p>
                                <a href="{{ route('portfolio.show', 'digital-transition') }}" class="btn-text">
                                    {{ __('View Case Study') }} <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-slide" data-index="1">
                        <div class="portfolio-card">
                            <img src="https://images.unsplash.com/photo-1664575602554-208c7a2643b9?q=80&w=1000&auto=format&fit=crop" alt="{{ __('Export Logistics') }}">
                            <div class="portfolio-overlay">
                                <span class="portfolio-tag">{{ __('Logistics') }}</span>
                                <h4>{{ __('Export Logistics') }}</h4>
                                <p>{{ __('Optimizing coffee supply chains from Jimma to Djibouti port.') }}</p>
                                <a href="{{ route('portfolio.show', 'export-logistics') }}" class="btn-text">
                                    {{ __('View Case Study') }} <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="portfolio-card portfolio-card-placeholder">
                            <div class="portfolio-overlay portfolio-overlay-placeholder">
                                <span class="portfolio-tag">{{ __('Coming Soon') }}</span>
                                <h4>{{ __('Additional Initiative') }}</h4>
                                <p>{{ __('More strategic case studies and board-level engagements.') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="portfolio-arrow next" aria-label="{{ __('Next case study') }}"><i class="fas fa-chevron-right"></i></button>
            </div>

            <div class="portfolio-dots">
                <button class="dot active" data-index="0" aria-label="{{ __('Slide 1') }}"></button>
                <button class="dot" data-index="1" aria-label="{{ __('Slide 2') }}"></button>
            </div>
        </div>
    </section>

    <section id="awards" class="section bg-dark">
        <div class="container">
            <div class="section-header center hidden-up">
                <h3 class="section-title text-white">{{ __('Honors & Awards') }}</h3>
                <div class="tibeb-divider tibeb-divider-light"></div>
            </div>
            <div class="awards-flex">
                <div class="award-item hidden-up">
                    <i class="fas fa-medal"></i>
                    <h5>{{ __('Best Leadership') }}</h5>
                    <p>{{ __('Addis Chamber of Commerce (2023)') }}</p>
                </div>
                <div class="award-item hidden-up delay-1">
                    <i class="fas fa-certificate"></i>
                    <h5>{{ __('Model Public Servant') }}</h5>
                    <p>{{ __('Ministry of Public Service (2019)') }}</p>
                </div>
                <div class="award-item hidden-up delay-2">
                    <i class="fas fa-trophy"></i>
                    <h5>{{ __('Excellence in Management') }}</h5>
                    <p>{{ __('Ethiopian Management Institute (2015)') }}</p>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials" class="section">
        <div class="container">
            <div class="section-header center hidden-up">
                <h3 class="section-title">{{ __('Endorsements') }}</h3>
                <div class="tibeb-divider"></div>
            </div>
            <div class="testimonials-grid">
                <div class="testi-card hidden-up">
                    <i class="fas fa-quote-left quote-icon"></i>
                    <p>
                        "{{ __('Mitiku is a rare leader who understands the fine details of Ethiopian law while driving aggressive private-sector growth.') }}"
                    </p>
                    <div class="testi-author">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="{{ __('Board Member') }}">
                        <div>
                            <h5>{{ __('Ato. Tadesse G.') }}</h5>
                            <small>{{ __('Board Chairman, EthioSteel') }}</small>
                        </div>
                    </div>
                </div>
                <div class="testi-card hidden-up delay-1">
                    <i class="fas fa-quote-left quote-icon"></i>
                    <p>
                        "{{ __('During his tenure at the Ministry, he brought order and transparency to a chaotic department. Highly recommended.') }}"
                    </p>
                    <div class="testi-author">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="{{ __('Minister') }}">
                        <div>
                            <h5>{{ __('W/ro. Almaz B.') }}</h5>
                            <small>{{ __('Former State Minister') }}</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="training" class="section">
        <div class="container">
            <div class="section-header center hidden-up">
                <h3 class="section-title">{{ __('Professional Training') }}</h3>
                <div class="tibeb-divider"></div>
                <p class="subtitle">{{ __('Continuous learning and specialized certifications.') }}</p>
            </div>

            <div class="training-grid">
                <div class="training-card hidden-up">
                    <div class="card-badge">
                        <i class="fas fa-check-circle"></i> {{ __('Verified') }}
                    </div>
                    <div class="training-icon-box">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <div class="training-content">
                        <h4>{{ __('Project Management Professional (PMP)') }}</h4>
                        <span class="t-org">{{ __('Project Management Institute (PMI)') }}</span>
                        <p>{{ __('Advanced methodologies in agile practices, risk management, and strategic project execution.') }}</p>
                        <div class="t-meta">
                            <span><i class="far fa-calendar-alt"></i> 2023</span>
                            <span><i class="fas fa-map-marker-alt"></i> {{ __('Global') }}</span>
                        </div>
                    </div>
                </div>

                <div class="training-card hidden-up delay-1">
                    <div class="card-badge">
                        <i class="fas fa-check-circle"></i> {{ __('Verified') }}
                    </div>
                    <div class="training-icon-box">
                        <i class="fas fa-users-cog"></i>
                    </div>
                    <div class="training-content">
                        <h4>{{ __('Strategic Leadership') }}</h4>
                        <span class="t-org">{{ __('Harvard Business School Online') }}</span>
                        <p>{{ __('Executive leadership training focused on organizational alignment, decision making, and change management.') }}</p>
                        <div class="t-meta">
                            <span><i class="far fa-calendar-alt"></i> 2022</span>
                            <span><i class="fas fa-laptop"></i> {{ __('Online') }}</span>
                        </div>
                    </div>
                </div>

                <div class="training-card hidden-up delay-2">
                    <div class="card-badge">
                        <i class="fas fa-check-circle"></i> {{ __('Verified') }}
                    </div>
                    <div class="training-icon-box">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <div class="training-content">
                        <h4>{{ __('Data Analytics for Managers') }}</h4>
                        <span class="t-org">{{ __('London School of Economics') }}</span>
                        <p>{{ __('Leveraging data for strategic decisions, operational efficiency, and performance tracking.') }}</p>
                        <div class="t-meta">
                            <span><i class="far fa-calendar-alt"></i> 2021</span>
                            <span><i class="fas fa-university"></i> {{ __('UK') }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="training-footer center hidden-up delay-3">
                <a href="{{ route('trainings') }}" class="btn btn-outline-gold">
                    {{ __('See All Certifications') }} <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <section id="contact" class="section bg-pattern-light">
        <div class="container">
            <div class="contact-box hidden-up">
                <div class="contact-left">
                    <h3>{{ __('Get in Touch') }}</h3>
                    <p>{{ __('Available for consulting and executive roles.') }}</p>
                    <div class="contact-details">
                        <div class="c-item"><i class="fas fa-phone"></i> +251 911 00 00 00</div>
                        <div class="c-item"><i class="fas fa-envelope"></i> email@example.com</div>
                        <div class="c-item"><i class="fas fa-map-marker-alt"></i> {{ __('Bole, Addis Ababa') }}</div>
                    </div>
                </div>
                <form class="contact-form">
                    <div class="form-group">
                        <input type="text" placeholder="{{ __('Full Name') }}" required>
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="{{ __('Email Address') }}" required>
                    </div>
                    <div class="form-group">
                        <textarea rows="4" placeholder="{{ __('Message') }}" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary block">{{ __('Send Message') }}</button>
                </form>
            </div>
        </div>
    </section>
@endsection
