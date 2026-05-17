document.addEventListener('DOMContentLoaded', () => {
            const menuToggle = document.querySelector('[data-menu-toggle]');
            const primaryNavigation = document.getElementById('primary-navigation');
            const animatedLinks = document.querySelectorAll('a[href]:not([href^="#"]):not([target])');
            const heroCarousel = document.querySelector('[data-hero-carousel]');
            const industriesCarousel = document.querySelector('[data-industries-carousel]');
            const cookieConsent = document.querySelector('[data-cookie-consent]');
            const cookieAcceptButton = document.querySelector('[data-cookie-accept]');
            const cookieRejectButton = document.querySelector('[data-cookie-reject]');
            const cookieStorageKey = 'magnum_cookie_consent';

            if (cookieConsent && cookieAcceptButton && cookieRejectButton) {
                const readCookieChoice = () => {
                    try {
                        return window.localStorage.getItem(cookieStorageKey);
                    } catch (error) {
                        return null;
                    }
                };

                const writeCookieChoice = (choice) => {
                    try {
                        window.localStorage.setItem(cookieStorageKey, choice);
                    } catch (error) {
                        return;
                    }
                };

                const currentChoice = readCookieChoice();

                const saveCookieChoice = (choice) => {
                    writeCookieChoice(choice);
                    cookieConsent.hidden = true;

                    if (choice === 'accepted') {
                        window.dispatchEvent(new CustomEvent('magnum:cookies-accepted'));
                    }
                };

                if (! currentChoice) {
                    cookieConsent.hidden = false;
                }

                cookieAcceptButton.addEventListener('click', () => saveCookieChoice('accepted'));
                cookieRejectButton.addEventListener('click', () => saveCookieChoice('rejected'));

                if (currentChoice === 'accepted') {
                    window.dispatchEvent(new CustomEvent('magnum:cookies-accepted'));
                }
            }

            if (menuToggle && primaryNavigation) {
                menuToggle.addEventListener('click', () => {
                    const isOpen = menuToggle.getAttribute('aria-expanded') === 'true';
                    const nextState = ! isOpen;

                    primaryNavigation.classList.toggle('is-open', nextState);
                    menuToggle.setAttribute('aria-expanded', nextState ? 'true' : 'false');
                    menuToggle.setAttribute('aria-label', nextState ? menuToggle.dataset.closeLabel : menuToggle.dataset.openLabel);
                });

                primaryNavigation.querySelectorAll('a').forEach((link) => {
                    link.addEventListener('click', () => {
                        if (window.matchMedia('(max-width: 767px)').matches) {
                            primaryNavigation.classList.remove('is-open');
                            menuToggle.setAttribute('aria-expanded', 'false');
                            menuToggle.setAttribute('aria-label', menuToggle.dataset.openLabel);
                        }
                    });
                });
            }

            animatedLinks.forEach((link) => {
                link.addEventListener('click', (event) => {
                    const url = new URL(link.href, window.location.href);

                    if (url.origin !== window.location.origin || url.href === window.location.href) {
                        return;
                    }

                    event.preventDefault();
                    document.body.classList.add('is-leaving');
                    window.setTimeout(() => {
                        window.location.href = url.href;
                    }, 180);
                });
            });

            if (heroCarousel) {
                const slides = Array.from(heroCarousel.querySelectorAll('[data-hero-slide]'));
                const dots = Array.from(heroCarousel.querySelectorAll('[data-hero-dot]'));
                const previousButton = heroCarousel.querySelector('[data-hero-prev]');
                const nextButton = heroCarousel.querySelector('[data-hero-next]');
                const interval = Number(heroCarousel.dataset.interval || 6500);
                let activeIndex = 0;
                let timer = null;

                const showSlide = (nextIndex) => {
                    if (! slides.length) {
                        return;
                    }

                    activeIndex = (nextIndex + slides.length) % slides.length;

                    slides.forEach((slide, index) => {
                        const isActive = index === activeIndex;
                        slide.classList.toggle('is-active', isActive);
                        slide.setAttribute('aria-hidden', isActive ? 'false' : 'true');
                    });

                    dots.forEach((dot, index) => {
                        const isActive = index === activeIndex;
                        dot.classList.toggle('is-active', isActive);
                        dot.setAttribute('aria-selected', isActive ? 'true' : 'false');
                    });
                };

                const stopAutoplay = () => {
                    if (timer) {
                        window.clearInterval(timer);
                        timer = null;
                    }
                };

                const startAutoplay = () => {
                    stopAutoplay();

                    if (slides.length > 1 && ! window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                        timer = window.setInterval(() => showSlide(activeIndex + 1), interval);
                    }
                };

                previousButton?.addEventListener('click', () => {
                    showSlide(activeIndex - 1);
                    startAutoplay();
                });

                nextButton?.addEventListener('click', () => {
                    showSlide(activeIndex + 1);
                    startAutoplay();
                });

                dots.forEach((dot) => {
                    dot.addEventListener('click', () => {
                        showSlide(Number(dot.dataset.heroDot || 0));
                        startAutoplay();
                    });
                });

                heroCarousel.addEventListener('mouseenter', stopAutoplay);
                heroCarousel.addEventListener('mouseleave', startAutoplay);
                heroCarousel.addEventListener('focusin', stopAutoplay);
                heroCarousel.addEventListener('focusout', startAutoplay);

                showSlide(0);
                startAutoplay();
            }

            if (industriesCarousel) {
                const slides = Array.from(industriesCarousel.querySelectorAll('[data-industries-slide]'));
                const dots = Array.from(industriesCarousel.querySelectorAll('[data-industries-dot]'));
                const previousButton = industriesCarousel.querySelector('[data-industries-prev]');
                const nextButton = industriesCarousel.querySelector('[data-industries-next]');
                const interval = Number(industriesCarousel.dataset.interval || 5000);
                let activeIndex = 0;
                let timer = null;

                const showSlide = (nextIndex) => {
                    if (! slides.length) {
                        return;
                    }

                    activeIndex = (nextIndex + slides.length) % slides.length;

                    slides.forEach((slide, index) => {
                        const isActive = index === activeIndex;
                        slide.classList.toggle('is-active', isActive);
                        slide.setAttribute('aria-hidden', isActive ? 'false' : 'true');
                    });

                    dots.forEach((dot, index) => {
                        const isActive = index === activeIndex;
                        dot.classList.toggle('is-active', isActive);
                        dot.setAttribute('aria-selected', isActive ? 'true' : 'false');
                    });
                };

                const stopAutoplay = () => {
                    if (timer) {
                        window.clearInterval(timer);
                        timer = null;
                    }
                };

                const startAutoplay = () => {
                    stopAutoplay();

                    if (slides.length > 1 && ! window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                        timer = window.setInterval(() => showSlide(activeIndex + 1), interval);
                    }
                };

                previousButton?.addEventListener('click', () => {
                    showSlide(activeIndex - 1);
                    startAutoplay();
                });

                nextButton?.addEventListener('click', () => {
                    showSlide(activeIndex + 1);
                    startAutoplay();
                });

                dots.forEach((dot) => {
                    dot.addEventListener('click', () => {
                        showSlide(Number(dot.dataset.industriesDot || 0));
                        startAutoplay();
                    });
                });

                industriesCarousel.addEventListener('mouseenter', stopAutoplay);
                industriesCarousel.addEventListener('mouseleave', startAutoplay);
                industriesCarousel.addEventListener('focusin', stopAutoplay);
                industriesCarousel.addEventListener('focusout', startAutoplay);

                showSlide(0);
                startAutoplay();
            }
        });

