<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Export Logistics | Case Study</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

@include('partials.header')

<section class="section">
    <div class="container portfolio-detail">
        <a href="{{ url('/#portfolio') }}" class="btn-text">
            <i class="fas fa-arrow-left"></i> Back to Portfolio
        </a>

        <h1 class="portfolio-detail-title">Coffee Export Logistics Optimization</h1>
        <p class="portfolio-detail-subtitle">
            Optimizing coffee supply chains from Jimma to Djibouti port.
        </p>

        <div class="portfolio-detail-meta">
            <span><strong>Role:</strong> General Manager / Supply Chain Lead</span>
            <span><strong>Sector:</strong> Agro-export / Logistics</span>
        </div>

        <div class="portfolio-detail-image">
            <img src="https://images.unsplash.com/photo-1664575602554-208c7a2643b9?q=80&w=1200&auto=format&fit=crop"
                 alt="Export Logistics">
        </div>

        <div class="portfolio-detail-body">
            <h3>Issues Identified</h3>
            <ul>
                <li>Unreliable lead times from farms to consolidation hubs.</li>
                <li>High demurrage costs at port due to documentation delays.</li>
            </ul>

            <h3>Strategy</h3>
            <ul>
                <li>Standardized shipment windows and collection routes from Jimma.</li>
                <li>Introduced shared tracking templates across exporters and logistics partners.</li>
                <li>Aligned warehouse, transport, and customs documentation workflows.</li>
            </ul>

            <h3>Results</h3>
            <ul>
                <li>Reduced average lead time to port by 5–7 days.</li>
                <li>Lowered logistics and demurrage costs per ton.</li>
                <li>Improved reliability of export commitments to buyers.</li>
            </ul>
        </div>
    </div>
</section>

@include('partials.footer')

<script src="{{ asset('script.js') }}"></script>
</body>
</html>
