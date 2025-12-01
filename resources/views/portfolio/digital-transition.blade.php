<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Digital Transition | Case Study</title>
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

        <h1 class="portfolio-detail-title">Digital Transition of Licensing Bureau</h1>
        <p class="portfolio-detail-subtitle">
            Moving a government bureau from paper-based archives to a cloud-backed system.
        </p>

        <div class="portfolio-detail-meta">
            <span><strong>Role:</strong> Director of Operations</span>
            <span><strong>Sector:</strong> Government / Transport</span>
        </div>

        <div class="portfolio-detail-image">
            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=1200&auto=format&fit=crop"
                 alt="Digital Transition">
        </div>

        <div class="portfolio-detail-body">
            <h3>Challenges</h3>
            <p>
                The licensing department relied heavily on manual records, resulting in long queues,
                lost files, and weak audit trails.
            </p>

            <h3>Key Actions</h3>
            <ul>
                <li>Mapped existing processes and removed redundant approval loops.</li>
                <li>Introduced electronic records, barcode-based tracking, and role-based access.</li>
                <li>Trained staff on the new system and set up a support desk for transition.</li>
            </ul>

            <h3>Impact</h3>
            <ul>
                <li>Cut average licensing processing time by more than 40%.</li>
                <li>Enabled clean audits with full traceability of transactions.</li>
                <li>Improved citizen satisfaction and reduced frontline complaints.</li>
            </ul>
        </div>
    </div>
</section>

@include('partials.footer')

<script src="{{ asset('script.js') }}"></script>
</body>
</html>
