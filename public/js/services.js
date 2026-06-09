document.addEventListener('DOMContentLoaded', () => {
            const menuToggle = document.querySelector('[data-menu-toggle]');
            const primaryNavigation = document.getElementById('primary-navigation');
            const animatedLinks = document.querySelectorAll('a[href]:not([href^="#"]):not([target])');
            const heroCarousel = document.querySelector('[data-hero-carousel]');
            const industriesCarousel = document.querySelector('[data-industries-carousel]');
            const cookieConsent = document.querySelector('[data-cookie-consent]');
            const cookieAcceptButton = document.querySelector('[data-cookie-accept]');
            const cookieRejectButton = document.querySelector('[data-cookie-reject]');
            const contactForm = document.querySelector('[data-contact-form]');
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

            if (contactForm && window.fetch) {
                const alertBox = contactForm.querySelector('[data-contact-alert]');
                const errorSummary = contactForm.querySelector('[data-contact-error-summary]');
                const submitButton = contactForm.querySelector('[data-contact-submit]');
                const csrfToken = contactForm.querySelector('input[name="_token"]')?.value || '';
                const submitLabel = contactForm.dataset.submitLabel || submitButton?.textContent || '';
                const sendingLabel = contactForm.dataset.sendingLabel || submitLabel;

                const clearFieldErrors = () => {
                    contactForm.querySelectorAll('.is-invalid').forEach((field) => {
                        field.classList.remove('is-invalid');
                        field.setAttribute('aria-invalid', 'false');
                        field.removeAttribute('aria-describedby');
                    });

                    contactForm.querySelectorAll('[data-dynamic-error]').forEach((error) => error.remove());

                    if (errorSummary) {
                        errorSummary.hidden = true;
                    }
                };

                const showAlert = (message, type) => {
                    if (! alertBox) {
                        return;
                    }

                    alertBox.textContent = message;
                    alertBox.hidden = false;
                    alertBox.classList.toggle('home-form-alert-success', type === 'success');
                    alertBox.classList.toggle('home-form-alert-error', type === 'error');
                    alertBox.setAttribute('role', type === 'success' ? 'status' : 'alert');
                };

                const showFieldErrors = (errors) => {
                    Object.entries(errors || {}).forEach(([name, messages]) => {
                        const field = contactForm.querySelector(`[name="${CSS.escape(name)}"]`);

                        if (! field) {
                            return;
                        }

                        const errorId = `${name.replace(/_/g, '-')}-ajax-error`;
                        const error = document.createElement('small');

                        error.id = errorId;
                        error.dataset.dynamicError = 'true';
                        error.textContent = Array.isArray(messages) ? messages[0] : messages;

                        field.classList.add('is-invalid');
                        field.setAttribute('aria-invalid', 'true');
                        field.setAttribute('aria-describedby', errorId);
                        field.insertAdjacentElement('afterend', error);
                    });

                    if (errorSummary) {
                        errorSummary.hidden = false;
                    }
                };

                contactForm.addEventListener('submit', async (event) => {
                    event.preventDefault();

                    clearFieldErrors();

                    if (alertBox) {
                        alertBox.hidden = true;
                    }

                    if (submitButton) {
                        submitButton.disabled = true;
                        submitButton.textContent = sendingLabel;
                    }

                    try {
                        const response = await fetch(contactForm.action, {
                            method: 'POST',
                            body: new FormData(contactForm),
                            headers: {
                                'Accept': 'application/json',
                                'X-Requested-With': 'XMLHttpRequest',
                                ...(csrfToken ? { 'X-CSRF-TOKEN': csrfToken } : {}),
                            },
                        });

                        const payload = await response.json().catch(() => ({}));

                        if (response.ok) {
                            contactForm.reset();
                            showAlert(payload.message || '', 'success');
                            return;
                        }

                        if (response.status === 422) {
                            showFieldErrors(payload.errors || {});
                            return;
                        }

                        showAlert(payload.message || 'Une erreur est survenue. Veuillez reessayer.', 'error');
                    } catch (error) {
                        showAlert('Une erreur est survenue. Veuillez reessayer.', 'error');
                    } finally {
                        if (submitButton) {
                            submitButton.disabled = false;
                            submitButton.textContent = submitLabel;
                        }
                    }
                });
            }
        });

