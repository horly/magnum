document.addEventListener('DOMContentLoaded', () => {
            const menuToggle = document.querySelector('[data-menu-toggle]');
            const primaryNavigation = document.getElementById('primary-navigation');
            const animatedLinks = document.querySelectorAll('a[href]:not([href^="#"]):not([target])');

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
        });

