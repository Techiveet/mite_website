document.addEventListener('DOMContentLoaded', () => {

    /* ------------------------------------------------------------
     * 1. Scroll reveal animations (Intersection Observer)
     * ------------------------------------------------------------ */
    const revealObserver = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;
            entry.target.classList.add('show');
            obs.unobserve(entry.target); // Only animate once
        });
    }, { threshold: 0.15 });

    const hiddenEls = document.querySelectorAll(
        '.hidden-up, .hidden-left, .hidden-right, .hidden-side'
    );
    hiddenEls.forEach(el => revealObserver.observe(el));


    /* ------------------------------------------------------------
     * 2. Hero stats counter
     * ------------------------------------------------------------ */
    const statsSection = document.querySelector('.hero-stats');
    let statsAnimated = false;

    if (statsSection) {
        const statsObserver = new IntersectionObserver((entries, obs) => {
            const entry = entries[0];
            if (!entry.isIntersecting || statsAnimated) return;

            const counters = document.querySelectorAll('.counter');
            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-target') || '0', 10);
                const duration = 2000; // ms
                const steps = duration / 16; // 60fps
                const increment = target / steps;
                let current = 0;

                const update = () => {
                    current += increment;
                    if (current < target) {
                        counter.textContent = Math.ceil(current);
                        requestAnimationFrame(update);
                    } else {
                        counter.textContent = target;
                    }
                };
                update();
            });

            statsAnimated = true;
            obs.unobserve(statsSection);
        }, { threshold: 0.3 });

        statsObserver.observe(statsSection);
    }


    /* ------------------------------------------------------------
     * 3. Mobile Navigation (Hamburger)
     * ------------------------------------------------------------ */
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');

    if (hamburger && navLinks) {
        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('nav-open');
        });

        // Close menu when a link is clicked
        navLinks.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('nav-open');
            });
        });
    }


    /* ------------------------------------------------------------
     * 4. Navbar Shrink + Back to Top Visibility
     * ------------------------------------------------------------ */
    const navbar = document.querySelector('.navbar');
    const backToTopBtn = document.getElementById('back-to-top');

    const handleScroll = () => {
        const y = window.scrollY || window.pageYOffset;

        if (navbar) {
            if (y > 10) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        }

        if (backToTopBtn) {
            if (y > 400) {
                backToTopBtn.classList.add('visible');
            } else {
                backToTopBtn.classList.remove('visible');
            }
        }
    };

    window.addEventListener('scroll', handleScroll);
    handleScroll(); // Check initial state


    /* ------------------------------------------------------------
     * 5. Back to Top Click Event
     * ------------------------------------------------------------ */
    if (backToTopBtn) {
        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }


    /* ------------------------------------------------------------
     * 6. Portfolio Slider Logic
     * ------------------------------------------------------------ */
    const portfolioSlides = document.querySelectorAll('.portfolio-slide');
    const portfolioPrev = document.querySelector('.portfolio-arrow.prev');
    const portfolioNext = document.querySelector('.portfolio-arrow.next');
    const portfolioDots = document.querySelectorAll('.portfolio-dots .dot');

    let portfolioIndex = 0;

    const showPortfolioSlide = (index) => {
        if (!portfolioSlides.length) return;

        if (index < 0) index = portfolioSlides.length - 1;
        if (index >= portfolioSlides.length) index = 0;
        portfolioIndex = index;

        portfolioSlides.forEach(slide => slide.classList.remove('active'));
        portfolioDots.forEach(dot => dot.classList.remove('active'));

        portfolioSlides[portfolioIndex].classList.add('active');
        if (portfolioDots[portfolioIndex]) {
            portfolioDots[portfolioIndex].classList.add('active');
        }
    };

    if (portfolioPrev && portfolioNext && portfolioSlides.length) {
        portfolioPrev.addEventListener('click', () => {
            showPortfolioSlide(portfolioIndex - 1);
        });

        portfolioNext.addEventListener('click', () => {
            showPortfolioSlide(portfolioIndex + 1);
        });

        portfolioDots.forEach(dot => {
            dot.addEventListener('click', () => {
                const idx = parseInt(dot.getAttribute('data-index') || '0', 10);
                showPortfolioSlide(idx);
            });
        });
    }


    /* ------------------------------------------------------------
     * 7. Language Switcher (Redirect Logic)
     * ------------------------------------------------------------ */
    const languageSelect = document.getElementById('language-switcher');

    // Get current language from HTML tag (e.g. <html lang="en">)
    const currentLang = document.documentElement.lang || 'en';

    if (languageSelect) {
        // Set dropdown to match current active language
        languageSelect.value = currentLang;

        languageSelect.addEventListener('change', function() {
            const selectedLang = this.value;
            // Redirect to Laravel route: /lang/{locale}
            window.location.href = "/lang/" + selectedLang;
        });
    }


    /* ------------------------------------------------------------
     * 8. Theme Toggle (Dark/Light Mode)
     * ------------------------------------------------------------ */
    const themeToggle = document.getElementById('theme-toggle');
    const body = document.body;

    if (themeToggle) {
        const setTheme = (theme) => {
            body.setAttribute('data-theme', theme);
            localStorage.setItem('siteTheme', theme);

            const icon = themeToggle.querySelector('i');
            if (icon) {
                icon.classList.remove('fa-sun', 'fa-moon');
                icon.classList.add(theme === 'dark' ? 'fa-sun' : 'fa-moon');
            }
        };

        // Load saved theme or default to light
        const initialTheme = localStorage.getItem('siteTheme') || 'light';
        setTheme(initialTheme);

        themeToggle.addEventListener('click', () => {
            const current = body.getAttribute('data-theme') === 'dark' ? 'dark' : 'light';
            const next = current === 'dark' ? 'light' : 'dark';
            setTheme(next);
        });
    }


    /* ------------------------------------------------------------
     * 9. Experience “Slider” (Paginate vertical list)
     * ------------------------------------------------------------ */
    const expItems = document.querySelectorAll('.experience-list .exp-item');
    const expExtraBlock = document.querySelector('.experience-list .exp-extra-block');
    const expPrev = document.querySelector('.exp-prev');
    const expNext = document.querySelector('.exp-next');
    const expCurrentPageEl = document.getElementById('exp-current-page');
    const expTotalPagesEl = document.getElementById('exp-total-pages');

    if (expItems.length && expPrev && expNext && expCurrentPageEl && expTotalPagesEl) {
        const perPage = 3;
        const totalPages = Math.ceil(expItems.length / perPage);
        let currentPage = 0;

        expTotalPagesEl.textContent = totalPages.toString();

        const renderExperiencePage = () => {
            const start = currentPage * perPage;
            const end = start + perPage;

            expItems.forEach((item, index) => {
                if (index >= start && index < end) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });

            if (expExtraBlock) {
                expExtraBlock.style.display = currentPage === totalPages - 1 ? 'block' : 'none';
            }

            expCurrentPageEl.textContent = (currentPage + 1).toString();

            // Disable buttons logic
            if (currentPage === 0) {
                expPrev.classList.add('disabled');
            } else {
                expPrev.classList.remove('disabled');
            }

            if (currentPage === totalPages - 1) {
                expNext.classList.add('disabled');
            } else {
                expNext.classList.remove('disabled');
            }
        };

        expPrev.addEventListener('click', () => {
            if (currentPage > 0) {
                currentPage--;
                renderExperiencePage();
            }
        });

        expNext.addEventListener('click', () => {
            if (currentPage < totalPages - 1) {
                currentPage++;
                renderExperiencePage();
            }
        });

        renderExperiencePage();
    }


    /* ------------------------------------------------------------
     * 10. ScrollSpy (Highlight Nav Link on Scroll)
     * ------------------------------------------------------------ */
    const sections = document.querySelectorAll('section, header');
    const navItems = document.querySelectorAll('.nav-links a');

    window.addEventListener('scroll', () => {
        let current = '';

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            // Offset to trigger highlight a bit before the section hits top
            if (window.scrollY >= (sectionTop - 150)) {
                current = section.getAttribute('id');
            }
        });

        navItems.forEach(a => {
            a.classList.remove('active');
            const href = a.getAttribute('href');
            // Check if link contains the current section ID (e.g. #about)
            if (href && href.includes('#' + current)) {
                a.classList.add('active');
            }
        });
    });

});
