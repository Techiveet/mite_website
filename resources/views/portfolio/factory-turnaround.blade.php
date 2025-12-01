<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Factory Turnaround | Case Study</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

@include('partials.header') {{-- if you extracted header, otherwise paste header html --}}

<section class="section">
    <div class="container portfolio-detail">
        <a href="{{ url('/#portfolio') }}" class="btn-text">
            <i class="fas fa-arrow-left"></i> Back to Portfolio
        </a>

        <h1 class="portfolio-detail-title">Factory Turnaround</h1>
        <p class="portfolio-detail-subtitle">
            Restructuring a loss-making textile plant into profitability within 18 months.
        </p>

        <div class="portfolio-detail-meta">
            <span><strong>Role:</strong> General Manager / Turnaround Lead</span>
            <span><strong>Sector:</strong> Manufacturing (Textile)</span>
            <span><strong>Location:</strong> Ethiopia</span>
        </div>

        <div class="portfolio-detail-image">
            <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=1200&auto=format&fit=crop"
                 alt="Factory Turnaround">
        </div>

        <div class="portfolio-detail-body">
            <h3>Context & Challenges</h3>
            <p>
                The textile plant had been operating at a loss for multiple years, with outdated
                processes, low staff morale, and weak cost controls. Inventory write-offs and
                inconsistent production schedules were eroding profitability.
            </p>

            <h3>Approach</h3>
            <ul>
                <li>Introduced weekly performance dashboards and KPI tracking for production lines.</li>
                <li>Implemented Kaizen-based process improvements and restructured shifts.</li>
                <li>Renegotiated supplier contracts and rationalized SKUs to focus on profitable lines.</li>
            </ul>

            <h3>Results</h3>
            <ul>
                <li>Returned the plant to profitability within 18 months.</li>
                <li>Increased capacity utilization by over 30%.</li>
                <li>Reduced scrap and rework by more than 20%.</li>
            </ul>
        </div>
    </div>
</section>

@include('partials.footer')

<script src="{{ asset('script.js') }}"></script>
</body>
</html>
