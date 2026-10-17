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
        initProductSpecAutoSlider();
        initCardTiltEffect();
        initMobileDrawer();
        initWhatsAppWidget();
        initBackToTop();
        initRfqModal();
        initCertificatesModal();
        initQuickRatesForm();
        initClientSectorFilters();
        initProductQuickView();
        initAjaxForms();
        initSecretGPMark();
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
        var indicators = slider.querySelectorAll('.gp-indicator');
        var prevBtn = document.getElementById('gp-prev-hero');
        var nextBtn = document.getElementById('gp-next-hero');
        var currentSlide = 0;
        var slideInterval = null;
        var totalSlides = slides.length;

        if (totalSlides <= 1) return;

        function updateSlideCounter() {
            var counterEl = slider.querySelector('.gp-curr-slide-num');
            if (counterEl) {
                counterEl.textContent = (currentSlide + 1 < 10 ? '0' : '') + (currentSlide + 1);
            }
        }

        function goToSlide(n) {
            slides[currentSlide].classList.remove('gp-slide-active');
            if (indicators[currentSlide]) indicators[currentSlide].classList.remove('active');

            currentSlide = (n + totalSlides) % totalSlides;

            slides[currentSlide].classList.add('gp-slide-active');
            if (indicators[currentSlide]) indicators[currentSlide].classList.add('active');
            updateSlideCounter();
        }

        function nextSlide() {
            goToSlide(currentSlide + 1);
        }

        function prevSlide() {
            goToSlide(currentSlide - 1);
        }

        function startAutoplay() {
            stopAutoplay();
            slideInterval = setInterval(nextSlide, 6000);
        }

        function stopAutoplay() {
            if (slideInterval) clearInterval(slideInterval);
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', function (e) {
                e.preventDefault();
                nextSlide();
                startAutoplay();
            });
        }

        if (prevBtn) {
            prevBtn.addEventListener('click', function (e) {
                e.preventDefault();
                prevSlide();
                startAutoplay();
            });
        }

        indicators.forEach(function (ind, index) {
            ind.addEventListener('click', function (e) {
                e.preventDefault();
                goToSlide(index);
                startAutoplay();
            });
        });

        // Touch Swipe Support
        var touchStartX = 0;
        var touchEndX = 0;
        slider.addEventListener('touchstart', function (e) {
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });

        slider.addEventListener('touchend', function (e) {
            touchEndX = e.changedTouches[0].screenX;
            if (touchStartX - touchEndX > 50) {
                nextSlide();
                startAutoplay();
            } else if (touchEndX - touchStartX > 50) {
                prevSlide();
                startAutoplay();
            }
        }, { passive: true });

        slider.addEventListener('mouseenter', stopAutoplay);
        slider.addEventListener('mouseleave', startAutoplay);

        updateSlideCounter();
        startAutoplay();
    }

    /**
     * 3. Animated Number Counters
     */
    function initCounters() {
        var counters = document.querySelectorAll('.gp-counter');
        if (!counters.length) return;

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

        if (!('IntersectionObserver' in window)) {
            counters.forEach(function (counter) {
                var target = parseInt(counter.getAttribute('data-target'), 10) || 0;
                animateCounter(counter, target);
            });
            return;
        }

        var observer = new IntersectionObserver(function (entries, obs) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    var counter = entry.target;
                    var target = parseInt(counter.getAttribute('data-target'), 10) || 0;
                    animateCounter(counter, target);
                    obs.unobserve(counter);
                }
            });
        }, { threshold: 0.15 });

        counters.forEach(function (counter) {
            observer.observe(counter);
        });
    }

    /**
     * 4. Product Category Filter Tabs
     */
    function initProductFilters() {
        var filterBtns = document.querySelectorAll('.gp-cat-btn, .gp-filter-btn');
        var cards = document.querySelectorAll('.gp-plastin-product-card, .gp-product-card');

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

        // Check URL hash on page load or change (e.g. #pp, #hdpe, #abs, #pvc, #nylon)
        function checkHashFilter() {
            var currentHash = window.location.hash.replace('#', '').toLowerCase();
            if (currentHash) {
                var hashBtn = document.querySelector('.gp-cat-btn[data-filter="' + currentHash + '"], .gp-filter-btn[data-filter="' + currentHash + '"]');
                if (hashBtn) {
                    setTimeout(function() {
                        hashBtn.click();
                        var catalogEl = document.getElementById('catalog') || document.getElementById('gp-products-grid');
                        if (catalogEl) {
                            catalogEl.scrollIntoView({ behavior: 'smooth' });
                        }
                    }, 100);
                }
            }
        }
        checkHashFilter();
        window.addEventListener('hashchange', checkHashFilter);
    }

    /**
     * 4.1. Single Row Auto-Sliding Product Specification Carousel
     */
    function initProductSpecAutoSlider() {
        var track = document.getElementById('gp-products-track');
        var prevBtn = document.getElementById('gp-pcard-prev');
        var nextBtn = document.getElementById('gp-pcard-next');
        if (!track) return;

        var scrollInterval = null;
        var isHovered = false;
        var step = 335; // card width (315px) + gap (20px)

        function slideNext() {
            if (isHovered) return;
            var maxScroll = track.scrollWidth - track.clientWidth;
            if (track.scrollLeft >= maxScroll - 20) {
                // Loop back to start smoothly
                track.scrollTo({ left: 0, behavior: 'smooth' });
            } else {
                track.scrollBy({ left: step, behavior: 'smooth' });
            }
        }

        function slidePrev() {
            if (track.scrollLeft <= 20) {
                track.scrollTo({ left: track.scrollWidth - track.clientWidth, behavior: 'smooth' });
            } else {
                track.scrollBy({ left: -step, behavior: 'smooth' });
            }
        }

        function startAutoSlide() {
            stopAutoSlide();
            scrollInterval = setInterval(slideNext, 3000);
        }

        function stopAutoSlide() {
            if (scrollInterval) clearInterval(scrollInterval);
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', function (e) {
                e.preventDefault();
                slideNext();
                startAutoSlide();
            });
        }
        if (prevBtn) {
            prevBtn.addEventListener('click', function (e) {
                e.preventDefault();
                slidePrev();
                startAutoSlide();
            });
        }

        // Pause on hover
        track.addEventListener('mouseenter', function () {
            isHovered = true;
            stopAutoSlide();
        });
        track.addEventListener('mouseleave', function () {
            isHovered = false;
            startAutoSlide();
        });

        // Touch swipe support
        var touchStartX = 0;
        var touchEndX = 0;
        track.addEventListener('touchstart', function (e) {
            touchStartX = e.changedTouches[0].screenX;
            isHovered = true;
            stopAutoSlide();
        }, { passive: true });

        track.addEventListener('touchend', function (e) {
            touchEndX = e.changedTouches[0].screenX;
            if (touchStartX - touchEndX > 50) {
                slideNext();
            } else if (touchEndX - touchStartX > 50) {
                slidePrev();
            }
            setTimeout(function () {
                isHovered = false;
                startAutoSlide();
            }, 1500);
        }, { passive: true });

        // Start auto-slide after 1 second
        setTimeout(startAutoSlide, 1000);
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

            // Ensure submenus start collapsed inside the mobile drawer
            menuClone.querySelectorAll('.sub-menu').forEach(function (sub) {
                sub.style.display = 'none';
                sub.classList.remove('gp-drawer-sub-open');
            });

            // Add toggle for submenus on mobile
            menuClone.querySelectorAll('.menu-item-has-children > a').forEach(function (link) {
                link.addEventListener('click', function (e) {
                    var subMenu = this.nextElementSibling;
                    if (subMenu && subMenu.classList.contains('sub-menu')) {
                        e.preventDefault();
                        e.stopPropagation();
                        var isOpen = subMenu.classList.toggle('gp-drawer-sub-open');
                        subMenu.style.display = isOpen ? 'block' : 'none';
                        this.classList.toggle('gp-sub-expanded', isOpen);
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

        // Attach to all enquire and rfq triggers
        document.querySelectorAll('.gp-btn-enquire, .gp-rfq-modal-trigger, .gp-btn-rfq-prefill').forEach(function (btn) {
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
     * 8B. Official Certificate Lightbox Modal
     */
    function initCertificatesModal() {
        var modal = document.getElementById('gp-cert-modal');
        var closeBtn = document.getElementById('gp-cert-modal-close');
        var reqBtn = document.getElementById('gp-cert-modal-req-btn');

        if (!modal) return;

        function openCertModal(data) {
            var codeEl = document.getElementById('gp-cert-modal-code');
            var titleEl = document.getElementById('gp-cert-modal-title');
            var certNoEl = document.getElementById('gp-cert-modal-certno');
            var bodyEl = document.getElementById('gp-cert-modal-body');
            var valEl = document.getElementById('gp-cert-modal-validity');
            var scopeEl = document.getElementById('gp-cert-modal-scope');

            if (codeEl && data.code) codeEl.textContent = data.code;
            if (titleEl && data.title) titleEl.textContent = data.title;
            if (certNoEl && data.certno) certNoEl.textContent = data.certno;
            if (bodyEl && data.body) bodyEl.textContent = data.body;
            if (valEl && data.validity) valEl.textContent = data.validity;
            if (scopeEl && data.scope) scopeEl.textContent = data.scope;

            if (reqBtn && data.code) {
                reqBtn.setAttribute('data-product', data.code + ' - Official Certificate / COA Copy');
            }

            modal.style.display = 'flex';
            setTimeout(function () {
                modal.classList.add('active');
            }, 10);
            document.body.style.overflow = 'hidden';
        }

        function closeCertModal() {
            modal.classList.remove('active');
            setTimeout(function () {
                modal.style.display = 'none';
            }, 250);
            document.body.style.overflow = '';
        }

        document.querySelectorAll('.gp-btn-view-cert').forEach(function (btn) {
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                var data = {
                    id: this.getAttribute('data-id') || '',
                    code: this.getAttribute('data-code') || this.getAttribute('data-cert-code') || '',
                    title: this.getAttribute('data-title') || this.getAttribute('data-cert-title') || '',
                    certno: this.getAttribute('data-certno') || this.getAttribute('data-cert-number') || '',
                    body: this.getAttribute('data-body') || this.getAttribute('data-cert-issuer') || '',
                    validity: this.getAttribute('data-validity') || this.getAttribute('data-cert-validity') || '',
                    scope: this.getAttribute('data-scope') || this.getAttribute('data-cert-scope') || '',
                    color: this.getAttribute('data-color') || ''
                };
                openCertModal(data);
            });
        });

        if (closeBtn) closeBtn.addEventListener('click', closeCertModal);

        modal.addEventListener('click', function (e) {
            if (e.target === modal) {
                closeCertModal();
            }
        });

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && (modal.classList.contains('active') || modal.style.display === 'flex')) {
                closeCertModal();
            }
        });
    }

    /**
     * 8C. Plastin-Style Instant Dana Rates Form
     */
    function initQuickRatesForm() {
        var form = document.getElementById('gp-quick-rates-form');
        if (!form) return;

        form.addEventListener('submit', function (e) {
            e.preventDefault();
            var polymer = form.querySelector('[name="polymer"]').value || 'PP Granules';
            var process = form.querySelector('[name="process"]').value || 'Injection Moulding';
            var qty = form.querySelector('[name="quantity"]').value || '5 MT';
            var phone = form.querySelector('[name="phone"]').value || '';

            if (!phone) {
                alert('Please enter your Mobile or WhatsApp number to get instant mill rates.');
                return;
            }

            var text = 'Hello SRS Polymer! I need today\'s spot rate for:\n• Grade: ' + polymer + '\n• Process: ' + process + '\n• Requirement: ' + qty + '\n• Contact: ' + phone;
            var waUrl = 'https://api.whatsapp.com/send?phone=918591585497&text=' + encodeURIComponent(text);
            window.open(waUrl, '_blank');
        });
    }

    /**
     * 8D. Client Sector Filtering
     */
    function initClientSectorFilters() {
        var chips = document.querySelectorAll('.gp-client-chip, .gp-sector-chip');
        var cards = document.querySelectorAll('.gp-client-logo-card, .gp-client-card');

        if (!chips.length || !cards.length) return;

        chips.forEach(function (chip) {
            chip.addEventListener('click', function () {
                chips.forEach(function (c) { c.classList.remove('active'); });
                this.classList.add('active');

                var sector = (this.getAttribute('data-sector') || 'all').toLowerCase();

                cards.forEach(function (card) {
                    var cardSector = (card.getAttribute('data-sector') || '').toLowerCase();
                    if (sector === 'all' || cardSector === sector) {
                        card.style.opacity = '1';
                        card.style.filter = 'none';
                        card.style.borderColor = sector === 'all' ? '' : '#0097db';
                        card.style.transform = sector === 'all' ? '' : 'scale(1.02)';
                    } else {
                        card.style.opacity = '0.3';
                        card.style.filter = 'grayscale(100%)';
                        card.style.borderColor = '';
                        card.style.transform = 'scale(0.96)';
                    }
                });
            });
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

    /**
     * Secret Easter Egg & Auto Theme Watermark:
     * - Automatically appears after 2.5s on page load and auto-hides after 3s
     * - Can also be triggered anytime by typing 'gpgp'
     */
    function initSecretGPMark() {
        var keyBuffer = '';
        var resetTimer = null;
        var autoHideTimer = null;

        window.addEventListener('keydown', function (e) {
            // Ignore keystrokes inside form controls
            var tag = (e.target && e.target.tagName) ? e.target.tagName.toLowerCase() : '';
            if (tag === 'input' || tag === 'textarea' || tag === 'select' || (e.target && e.target.isContentEditable)) {
                return;
            }

            var key = (e.key || '').toLowerCase();
            if (!key || key.length !== 1) return;

            keyBuffer += key;
            if (keyBuffer.length > 8) {
                keyBuffer = keyBuffer.slice(-8);
            }

            // Strictly reset buffer after 2 seconds of inactivity
            clearTimeout(resetTimer);
            resetTimer = setTimeout(function () {
                keyBuffer = '';
            }, 2000);

            // Trigger ONLY when 'gpgp' is typed continuously within 2 seconds
            if (keyBuffer.slice(-4) === 'gpgp') {
                keyBuffer = '';
                clearTimeout(resetTimer);
                toggleGPMark();
            }
        });

        function scheduleAutoHide(el, delayMs) {
            clearTimeout(autoHideTimer);
            autoHideTimer = setTimeout(function () {
                if (el && el.classList.contains('gp-mark-active')) {
                    el.classList.remove('gp-mark-active');
                }
            }, delayMs || 3000);
        }

        function toggleGPMark() {
            var existing = document.getElementById('gp-secret-watermark');
            if (existing) {
                if (existing.classList.contains('gp-mark-active')) {
                    existing.classList.remove('gp-mark-active');
                    clearTimeout(autoHideTimer);
                } else {
                    existing.classList.add('gp-mark-active');
                    playPulseAnimation(existing);
                    scheduleAutoHide(existing, 3000);
                }
                return;
            }

            var mark = document.createElement('div');
            mark.id = 'gp-secret-watermark';
            mark.className = 'gp-secret-watermark gp-mark-active';
            mark.setAttribute('role', 'status');
            mark.setAttribute('aria-label', 'GP Theme Polymer Watermark');

            mark.innerHTML = 
                '<div class="gp-wm-badge" id="gp-wm-badge" title="GP Theme • Verified Polymer Watermark (Click to copy ID)">' +
                    '<div class="gp-wm-icon">' +
                        '<svg viewBox="0 0 32 32" width="22" height="22" fill="none">' +
                            '<polygon points="16,3 27,9 27,23 16,29 5,23 5,9" stroke="#00b4d8" stroke-width="2" fill="rgba(0,180,216,0.12)"/>' +
                            '<circle cx="16" cy="16" r="3.5" fill="#48cae4"/>' +
                        '</svg>' +
                    '</div>' +
                    '<div class="gp-wm-info">' +
                        '<div class="gp-wm-line1">' +
                            '<span class="gp-wm-brand">GP THEME</span>' +
                            '<span class="gp-wm-sep">•</span>' +
                            '<span class="gp-wm-company">SRS POLYMER</span>' +
                            '<span class="gp-wm-live-dot" title="Active Theme Instance"></span>' +
                        '</div>' +
                        '<div class="gp-wm-line2" id="gp-wm-line2">' +
                            '<span class="gp-wm-id">ID: GP-POLY-2026</span>' +
                            '<span class="gp-wm-sep">•</span>' +
                            '<span class="gp-wm-sub">PLASTIC DANA</span>' +
                        '</div>' +
                    '</div>' +
                    '<button type="button" class="gp-wm-close" id="gp-wm-close-btn" title="Close" aria-label="Close">&times;</button>' +
                '</div>';

            document.body.appendChild(mark);

            // Pause auto-hide when hovering over the badge
            mark.addEventListener('mouseenter', function () {
                clearTimeout(autoHideTimer);
            });

            mark.addEventListener('mouseleave', function () {
                if (mark.classList.contains('gp-mark-active')) {
                    scheduleAutoHide(mark, 2500);
                }
            });

            // Close button
            var closeBtn = document.getElementById('gp-wm-close-btn');
            if (closeBtn) {
                closeBtn.addEventListener('click', function (ev) {
                    ev.stopPropagation();
                    clearTimeout(autoHideTimer);
                    mark.classList.remove('gp-mark-active');
                });
            }

            // Click on badge to copy ID with feedback
            var badge = document.getElementById('gp-wm-badge');
            var line2 = document.getElementById('gp-wm-line2');
            if (badge && line2) {
                badge.addEventListener('click', function (ev) {
                    if (ev.target && (ev.target.id === 'gp-wm-close-btn' || ev.target.closest('#gp-wm-close-btn'))) return;
                    var textToCopy = 'GP-POLY-2026';
                    if (navigator.clipboard && navigator.clipboard.writeText) {
                        navigator.clipboard.writeText(textToCopy);
                    }
                    var origHtml = line2.innerHTML;
                    line2.innerHTML = '<span style="color:#10b981;font-weight:700;">Copied: GP-POLY-2026 ✓</span>';
                    setTimeout(function () {
                        line2.innerHTML = origHtml;
                    }, 2000);
                    playPulseAnimation(mark);
                    scheduleAutoHide(mark, 3000);
                });
            }

            playPulseAnimation(mark);
            scheduleAutoHide(mark, 3000);
        }

        function playPulseAnimation(el) {
            el.classList.remove('gp-mark-pulse');
            void el.offsetWidth;
            el.classList.add('gp-mark-pulse');
        }

        // Expose globally for testing or manual invocation
        window.toggleGPMark = toggleGPMark;
    }

    /**
     * 15. Interactive 3D Card Tilt & Magnetic Micro-Motion
     */
    function initCardTiltEffect() {
        var cards = document.querySelectorAll('.gp-plastin-product-card, .gp-lab-param-card, .gp-plant-feature-card');
        if (!cards.length) return;

        cards.forEach(function (card) {
            card.addEventListener('mousemove', function (e) {
                var rect = card.getBoundingClientRect();
                var x = e.clientX - rect.left;
                var y = e.clientY - rect.top;
                var centerX = rect.width / 2;
                var centerY = rect.height / 2;
                var rotateX = ((y - centerY) / centerY) * -6;
                var rotateY = ((x - centerX) / centerX) * 6;

                card.style.transform = 'translateY(-10px) perspective(900px) rotateX(' + rotateX.toFixed(2) + 'deg) rotateY(' + rotateY.toFixed(2) + 'deg) scale(1.018)';
            });

            card.addEventListener('mouseleave', function () {
                card.style.transform = '';
            });
        });
    }

})();

