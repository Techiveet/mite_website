@extends('layouts.app')

@section('title', 'Professional Certifications | Mitiku Asmare')

@section('content')

    <header class="page-hero">
        <div class="bg-pattern-overlay"></div>
        <div class="container center">
            <span class="pill-badge" style="background: rgba(229, 182, 47, 0.15); color: #B45309;">Continuous Learning</span>
            <h1 style="margin-top: 15px; margin-bottom: 15px;">Professional Development <br> <span class="txt-gold">& Certifications</span></h1>
            <p class="subtitle" style="max-width: 600px; margin: 0 auto;">
                A comprehensive record of specialized training, workshops, and executive education.
            </p>
        </div>
    </header>

    <section class="section">
        <div class="container">

            <div class="filter-container center hidden-up" style="margin-bottom: 60px;">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="leadership">Leadership</button>
                <button class="filter-btn" data-filter="technical">Technical</button>
                <button class="filter-btn" data-filter="policy">Policy & Law</button>
            </div>

            <div class="cert-grid">
                @foreach($certifications as $index => $cert)
                    <div class="cert-card hidden-up delay-{{ $index % 3 }}" data-category="{{ $cert['category'] }}">
                        <div class="cert-header">
                            <div class="cert-icon {{ $cert['color_class'] }}">
                                <i class="{{ $cert['icon'] }}"></i>
                            </div>
                            <div class="cert-badge">Verified</div>
                        </div>

                        <div class="cert-body">
                            <h4>{{ $cert['title'] }}</h4>
                            <span class="cert-org">{{ $cert['org'] }}</span>
                            <p>{{ $cert['description'] }}</p>

                            <div class="cert-tags">
                                @foreach($cert['tags'] as $tag)
                                    <span>{{ $tag }}</span>
                                @endforeach
                            </div>
                        </div>

                        <div class="cert-footer">
                            <span><i class="far fa-calendar-alt"></i> {{ $cert['year'] }}</span>

                            @if(isset($cert['image']) && $cert['image'])
                                <button class="btn-text btn-view-cert"
                                        data-image="{{ $cert['image'] }}"
                                        data-title="{{ $cert['title'] }}"
                                        style="background:none; border:none; color:var(--gold); font-weight:700; cursor:pointer; font-size:0.8rem; text-transform:uppercase;">
                                    View Credential <i class="fas fa-eye"></i>
                                </button>
                            @else
                                <span style="font-size:0.8rem; color:#ccc;">No Image</span>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <div id="certModal" class="modal">
        <span class="close-modal">&times;</span>
        <div class="modal-content">
            <h4 id="modalCaption">Certificate</h4>
            <img class="modal-image" id="modalImage" src="" alt="Certificate">
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {

            // --- 1. FILTER LOGIC ---
            const filterBtns = document.querySelectorAll('.filter-btn');
            const cards = document.querySelectorAll('.cert-card');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    filterBtns.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');
                    const filterValue = btn.getAttribute('data-filter');

                    cards.forEach(card => {
                        if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
                            card.style.display = 'flex';
                            setTimeout(() => {
                                card.style.opacity = '1';
                                card.style.transform = 'translateY(0)';
                            }, 50);
                        } else {
                            card.style.opacity = '0';
                            card.style.transform = 'translateY(20px)';
                            setTimeout(() => {
                                card.style.display = 'none';
                            }, 300);
                        }
                    });
                });
            });

            // --- 2. MODAL LOGIC ---
            const modal = document.getElementById('certModal');
            const modalImg = document.getElementById('modalImage');
            const modalCaption = document.getElementById('modalCaption');
            const closeBtn = document.querySelector('.close-modal');

            // Use event delegation for buttons (since they might be hidden/shown)
            const openBtns = document.querySelectorAll('.btn-view-cert');

            openBtns.forEach(btn => {
                btn.addEventListener('click', (e) => {
                    e.preventDefault(); // Prevent default if it's an anchor
                    modal.style.display = "flex";
                    setTimeout(() => modal.classList.add('show'), 10);

                    modalImg.src = btn.getAttribute('data-image');
                    modalCaption.innerText = btn.getAttribute('data-title');
                });
            });

            const closeModal = () => {
                modal.classList.remove('show');
                setTimeout(() => modal.style.display = "none", 300);
            };

            closeBtn.addEventListener('click', closeModal);

            modal.addEventListener('click', (e) => {
                if (e.target === modal) closeModal();
            });

            document.addEventListener('keydown', (e) => {
                if (e.key === "Escape" && modal.classList.contains('show')) closeModal();
            });
        });
    </script>

@endsection
