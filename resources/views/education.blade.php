@extends('layouts.app')

@section('title', 'Academic Background | Mitiku Asmare')

@section('content')

    <section class="section">
        <div class="container">

            <div class="edu-detail-wrapper">

                @foreach($education as $index => $edu)
                    <div class="edu-row hidden-up delay-{{ $index }}">
                        <div class="edu-date">
                            <span class="year">{{ $edu['year'] }}</span>
                            <span class="type">{{ $edu['type'] }}</span>
                        </div>

                        <div class="edu-divider">
                            <div class="edu-dot"></div>
                            <div class="edu-line"></div>
                        </div>

                        <div class="edu-content">
                            <div class="edu-detail-card">
                                <div class="edu-header">
                                    <div class="school-icon">
                                        <i class="fas fa-graduation-cap"></i>
                                    </div>
                                    <div>
                                        <h4>{{ $edu['degree'] }}</h4>
                                        <span class="school-name">{{ $edu['school'] }}</span>
                                    </div>
                                </div>
                                <p>{{ $edu['description'] }}</p>

                                <div class="edu-footer-row">
                                    <div class="edu-location">
                                        <i class="fas fa-map-marker-alt"></i> {{ $edu['location'] }}
                                    </div>

                                    @if(isset($edu['image']) && $edu['image'])
                                        <button class="btn-text btn-view-cert"
                                                data-image="{{ $edu['image'] }}"
                                                data-title="{{ $edu['degree'] }}">
                                            <i class="fas fa-eye"></i> View Certificate
                                        </button>
                                    @endif
                                </div>
                            </div>
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
            const modal = document.getElementById('certModal');
            const modalImg = document.getElementById('modalImage');
            const modalCaption = document.getElementById('modalCaption');
            const closeBtn = document.querySelector('.close-modal');
            const btns = document.querySelectorAll('.btn-view-cert');

            // Open Modal
            btns.forEach(btn => {
                btn.addEventListener('click', () => {
                    modal.style.display = "flex";
                    // Small delay to allow display:flex to apply before adding opacity class
                    setTimeout(() => modal.classList.add('show'), 10);

                    modalImg.src = btn.getAttribute('data-image');
                    modalCaption.innerText = btn.getAttribute('data-title');
                });
            });

            // Close Modal Function
            const closeModal = () => {
                modal.classList.remove('show');
                setTimeout(() => modal.style.display = "none", 300);
            };

            // Close events
            closeBtn.addEventListener('click', closeModal);

            // Close on clicking outside image
            modal.addEventListener('click', (e) => {
                if (e.target === modal) {
                    closeModal();
                }
            });

            // Close on Escape key
            document.addEventListener('keydown', (e) => {
                if (e.key === "Escape" && modal.classList.contains('show')) {
                    closeModal();
                }
            });
        });
    </script>

@endsection
