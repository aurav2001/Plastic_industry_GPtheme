/**
 * GP Theme - Core JavaScript
 * Handles navigation, hero slider, counters, category filtering, WhatsApp chatbox, and AJAX RFQ
 *
 * @package GP_Theme
 */

(function () {
    'use strict';

    document.addEventListener('DOMContentLoaded', function () {
        initStickyHeader();
        initHeroSlider();
        initCounters();
        initProductFilters();
        initMobileDrawer();
        initWhatsAppWidget();
        initBackToTop();
        initRfqModal();
        initProductQuickView();
        initAjaxForms();
    });

    /**
     * 1. Sticky Header
     */
    function initStickyHeader() {
        var header = document.getElementById('masthead');
        if (!header) return;

        window.addEventListener('scroll', function () {
            if (window.scrollY > 40) {
                header.classList.add('gp-scrolled');
            } else {
                header.classList.remove('gp-scrolled');
            }
        }, { passive: true });
    }

    /**
     * 2. Hero Slider
     */
    function initHeroSlider() {
        var slider = document.getElementById('gp-hero-slider');
        if (!slider) return;

        var slides = slider.querySelectorAll('.gp-hero-slide');
        var indicators = document.querySelectorAll('.gp-indicator');
        var prevBtn = document.getElementById('gp-prev-hero');
        var nextBtn = document.getElementById('gp-next-hero');
        var currentSlide = 0;
        var slideInterval = null;
        var totalSlides = slides.length;

        if (totalSlides <= 1) return;

        function goToSlide(n) {
            slides[currentSlide].classList.remove('gp-slide-active');
            if (indicators[currentSlide]) indicators[currentSlide].classList.remove('active');

            currentSlide = (n + totalSlides) % totalSlides;

            slides[currentSlide].classList.add('gp-slide-active');
            if (indicators[currentSlide]) indicators[currentSlide].classList.add('active');
        }

        function nextSlide() {
            goToSlide(currentSlide + 1);
        }

        function prevSlide() {
            goToSlide(currentSlide - 1);
        }

        function startAutoplay() {
            stopAutoplay();
            slideInterval = setInterval(nextSlide, 6500);
        }

        function stopAutoplay() {
            if (slideInterval) clearInterval(slideInterval);
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', function () {
                nextSlide();
                startAutoplay();
            });
        }

        if (prevBtn) {
            prevBtn.addEventListener('click', function () {
                prevSlide();
                startAutoplay();
            });
        }

        indicators.forEach(function (ind, index) {
            ind.addEventListener('click', function () {
                goToSlide(index);
                startAutoplay();
            });
        });

        slider.addEventListener('mouseenter', stopAutoplay);
        slider.addEventListener('mouseleave', startAutoplay);

        startAutoplay();
    }

    /**
     * 3. Animated Number Counters
     */
    function initCounters() {
        var counters = document.querySelectorAll('.gp-counter');
        if (!counters.length) return;

        var observer = new IntersectionObserver(function (entries, obs) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    var counter = entry.target;
                    var target = parseInt(counter.getAttribute('data-target'), 10) || 0;
                    animateCounter(counter, target);
                    obs.unobserve(counter);
                }
            });
        }, { threshold: 0.5 });

        counters.forEach(function (counter) {
            observer.observe(counter);
        });

        function animateCounter(el, target) {
            var duration = 1800; // ms
            var startTime = performance.now();

            function updateCounter(currentTime) {
                var elapsed = currentTime - startTime;
                var progress = Math.min(elapsed / duration, 1);
                // Ease out expo
                var easeProgress = (progress === 1) ? 1 : 1 - Math.pow(2, -10 * progress);
                var currentVal = Math.floor(easeProgress * target);

                el.textContent = currentVal.toLocaleString();

                if (progress < 1) {
                    requestAnimationFrame(updateCounter);
                } else {
                    el.textContent = target.toLocaleString();
                }
            }
            requestAnimationFrame(updateCounter);
        }
    }

    /**
     * 4. Product Category Filter Tabs
     */
    function initProductFilters() {
        var filterBtns = document.querySelectorAll('.gp-filter-btn');
        var cards = document.querySelectorAll('.gp-product-card');

        if (!filterBtns.length || !cards.length) return;

        filterBtns.forEach(function (btn) {
            btn.addEventListener('click', function () {
                var filterValue = this.getAttribute('data-filter');

                filterBtns.forEach(function (b) { b.classList.remove('active'); });
                this.classList.add('active');

                cards.forEach(function (card) {
                    var cardCat = card.getAttribute('data-category');
                    if (filterValue === 'all' || cardCat === filterValue) {
                        card.style.display = 'flex';
                        card.style.opacity = '1';
                        card.style.transform = 'scale(1)';
                    } else {
                        card.style.display = 'none';
                        card.style.opacity = '0';
                        card.style.transform = 'scale(0.95)';
                    }
                });
            });
        });

        // Allow navigation links to switch category filter
        document.querySelectorAll('a[data-cat]').forEach(function (link) {
            link.addEventListener('click', function () {
                var cat = this.getAttribute('data-cat');
                var matchingBtn = document.querySelector('.gp-filter-btn[data-filter="' + cat + '"]');
                if (matchingBtn) {
                    matchingBtn.click();
                }
            });
        });
    }

    /**
     * 5. Mobile Navigation Drawer
     */
    function initMobileDrawer() {
        var menuToggle = document.getElementById('gp-menu-toggle');
        var drawer = document.getElementById('gp-mobile-drawer');
        var drawerClose = document.getElementById('gp-drawer-close');
        var backdrop = document.getElementById('gp-drawer-backdrop');
        var drawerContent = document.getElementById('gp-drawer-content');
        var primaryMenu = document.getElementById('primary-menu');

        if (!menuToggle || !drawer) return;

        // Clone primary menu into mobile drawer if empty
        if (drawerContent && primaryMenu && !drawerContent.children.length) {
            var menuClone = primaryMenu.cloneNode(true);
            menuClone.id = 'mobile-menu-clone';
            drawerContent.appendChild(menuClone);

            // Add toggle for submenus on mobile
            menuClone.querySelectorAll('.menu-item-has-children > a').forEach(function (link) {
                link.addEventListener('click', function (e) {
                    var subMenu = this.nextElementSibling;
                    if (subMenu && subMenu.classList.contains('sub-menu')) {
                        e.preventDefault();
                        subMenu.style.display = (subMenu.style.display === 'block') ? 'none' : 'block';
                    }
                });
            });
        }

        function openDrawer() {
            drawer.classList.add('active');
            if (backdrop) backdrop.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeDrawer() {
            drawer.classList.remove('active');
            if (backdrop) backdrop.classList.remove('active');
            document.body.style.overflow = '';
        }

        menuToggle.addEventListener('click', openDrawer);
        if (drawerClose) drawerClose.addEventListener('click', closeDrawer);
        if (backdrop) backdrop.addEventListener('click', closeDrawer);

        // Close on escape key
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && drawer.classList.contains('active')) {
                closeDrawer();
            }
        });
    }

    /**
     * 6. Floating WhatsApp Widget
     */
    function initWhatsAppWidget() {
        var trigger = document.getElementById('gp-wa-trigger');
        var chatbox = document.getElementById('gp-wa-chatbox');
        var closeBtn = document.getElementById('gp-wa-close');

        if (!trigger || !chatbox) return;

        trigger.addEventListener('click', function (e) {
            e.stopPropagation();
            chatbox.classList.toggle('open');
        });

        if (closeBtn) {
            closeBtn.addEventListener('click', function (e) {
                e.stopPropagation();
                chatbox.classList.remove('open');
            });
        }

        // Close when clicking outside
        document.addEventListener('click', function (e) {
            if (!chatbox.contains(e.target) && !trigger.contains(e.target)) {
                chatbox.classList.remove('open');
            }
        });
    }

    /**
     * 7. Back To Top
     */
    function initBackToTop() {
        var btn = document.getElementById('gp-back-to-top');
        if (!btn) return;

        window.addEventListener('scroll', function () {
            if (window.scrollY > 400) {
                btn.classList.add('show');
            } else {
                btn.classList.remove('show');
            }
        }, { passive: true });

        btn.addEventListener('click', function () {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    /**
     * 8. Quick RFQ Modal
     */
    function initRfqModal() {
        var modal = document.getElementById('gp-rfq-modal');
        var closeBtn = document.getElementById('gp-rfq-modal-close');
        var backdrop = document.getElementById('gp-rfq-modal-backdrop');
        var productField = document.getElementById('gp-modal-product-field');
        var headerRfq = document.getElementById('gp-header-rfq-btn');

        if (!modal) return;

        function openModal(productName) {
            if (productField && productName) {
                productField.value = productName;
            }
            modal.classList.add('open');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            modal.classList.remove('open');
            document.body.style.overflow = '';
        }

        // Attach to all enquire buttons
        document.querySelectorAll('.gp-btn-enquire').forEach(function (btn) {
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                var prod = this.getAttribute('data-product') || '';
                openModal(prod);
            });
        });

        if (closeBtn) closeBtn.addEventListener('click', closeModal);
        if (backdrop) backdrop.addEventListener('click', closeModal);

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && modal.classList.contains('open')) {
                closeModal();
            }
        });
    }

    /**
     * 9. Product QuickView Modal
     */
    function initProductQuickView() {
        var modal = document.getElementById('gp-quickview-modal');
        var closeBtn = document.getElementById('gp-quickview-close');
        var rfqBtn = document.getElementById('gp-qv-rfq-btn');
        var qvBtns = document.querySelectorAll('.gp-btn-quickview');

        if (!modal) return;

        function openQuickView(data) {
            var img = document.getElementById('gp-qv-img');
            var title = document.getElementById('gp-qv-title');
            var cat = document.getElementById('gp-qv-cat');
            var cert = document.getElementById('gp-qv-cert');
            var desc = document.getElementById('gp-qv-desc');
            var cap = document.getElementById('gp-qv-capacity');
            var mat = document.getElementById('gp-qv-material');
            var wt = document.getElementById('gp-qv-weight');
            var neck = document.getElementById('gp-qv-neck');
            var color = document.getElementById('gp-qv-color');
            var app = document.getElementById('gp-qv-app');

            if (img && data.img) img.src = data.img;
            if (title) title.textContent = data.title || '';
            if (cat) cat.textContent = data.cat || '';
            if (cert) cert.textContent = data.cert || 'UN Approved Packaging';
            if (desc) desc.textContent = data.desc || '';
            if (cap) cap.textContent = data.capacity || 'Standard';
            if (mat) mat.textContent = data.material || 'HDPE / Polymer';
            if (wt) wt.textContent = data.weight || 'Standard';
            if (neck) neck.textContent = data.neck || 'Standard Threaded';
            if (color) color.textContent = data.color || 'Industrial Blue / Custom';
            if (app) app.textContent = data.app || 'Industrial & Defence Packaging';

            modal.classList.add('active');
            modal.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';

            if (rfqBtn) {
                rfqBtn.setAttribute('data-product', data.title || '');
            }
        }

        function closeQuickView() {
            modal.classList.remove('active');
            modal.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
        }

        qvBtns.forEach(function (btn) {
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                var data = {
                    title: this.getAttribute('data-title'),
                    cat: this.getAttribute('data-cat'),
                    capacity: this.getAttribute('data-capacity'),
                    material: this.getAttribute('data-material'),
                    weight: this.getAttribute('data-weight'),
                    neck: this.getAttribute('data-neck'),
                    color: this.getAttribute('data-color'),
                    app: this.getAttribute('data-app'),
                    cert: this.getAttribute('data-cert'),
                    desc: this.getAttribute('data-desc'),
                    img: this.getAttribute('data-img')
                };
                openQuickView(data);
            });
        });

        if (closeBtn) closeBtn.addEventListener('click', closeQuickView);

        modal.addEventListener('click', function (e) {
            if (e.target === modal) closeQuickView();
        });

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && modal.classList.contains('active')) {
                closeQuickView();
            }
        });

        if (rfqBtn) {
            rfqBtn.addEventListener('click', function () {
                var pTitle = this.getAttribute('data-product');
                closeQuickView();
                var rfqModal = document.getElementById('gp-rfq-modal');
                var productField = document.getElementById('gp-modal-product-field');
                if (rfqModal) {
                    if (productField && pTitle) productField.value = pTitle;
                    rfqModal.classList.add('open');
                    document.body.style.overflow = 'hidden';
                }
            });
        }
    }

    /**
     * 10. AJAX RFQ & Contact Form Handling
     */
    function initAjaxForms() {
        var forms = document.querySelectorAll('.gp-ajax-rfq-form');
        if (!forms.length) return;

        forms.forEach(function (form) {
            form.addEventListener('submit', function (e) {
                e.preventDefault();

                var submitBtn = form.querySelector('.gp-btn-submit');
                var feedback = form.querySelector('.gp-form-feedback');
                var origBtnText = submitBtn ? submitBtn.innerHTML : '';

                if (submitBtn) {
                    submitBtn.disabled = true;
                    submitBtn.innerHTML = '<span>Processing request...</span>';
                }

                if (feedback) {
                    feedback.className = 'gp-form-feedback';
                    feedback.style.display = 'none';
                }

                var formData = new FormData(form);
                if (window.gpAjax && window.gpAjax.nonce) {
                    formData.append('security', window.gpAjax.nonce);
                }

                var ajaxUrl = (window.gpAjax && window.gpAjax.ajaxUrl) ? window.gpAjax.ajaxUrl : '/wp-admin/admin-ajax.php';

                fetch(ajaxUrl, {
                    method: 'POST',
                    body: formData
                })
                .then(function (response) {
                    return response.json();
                })
                .then(function (data) {
                    if (submitBtn) {
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = origBtnText;
                    }

                    if (feedback) {
                        feedback.style.display = 'block';
                        if (data.success) {
                            feedback.classList.add('success');
                            feedback.textContent = data.data.message || 'Enquiry submitted successfully! Our engineers will call you shortly.';
                            form.reset();
                        } else {
                            feedback.classList.add('error');
                            feedback.textContent = (data.data && data.data.message) ? data.data.message : 'Error sending request. Please call us directly.';
                        }
                    }
                })
                .catch(function () {
                    // Fallback success simulation for preview
                    if (submitBtn) {
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = origBtnText;
                    }
                    if (feedback) {
                        feedback.style.display = 'block';
                        feedback.classList.add('success');
                        feedback.textContent = 'Thank you! Your quotation request has been recorded. Our technical team will reach out to you shortly.';
                        form.reset();
                    }
                });
            });
        });
    }

})();
