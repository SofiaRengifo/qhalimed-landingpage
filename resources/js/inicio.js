import Splide from '@splidejs/splide';
import { AutoScroll } from '@splidejs/splide-extension-auto-scroll';

document.addEventListener('DOMContentLoaded', () => {

    const splide1 = new Splide('#splide', {
        type: 'loop',
        perPage: 1,
        autoplay: false,
        pauseOnHover: true,
        pauseOnFocus: true,
        pagination: false,
    });

    splide1.on('moved', function(newIndex) {
        const activeSlide = splide1.Components.Elements.slides[newIndex];
        if (window.innerWidth >= 768) {
            const activeSlide = splide1.Components.Elements.slides[newIndex];if (activeSlide) {
            const animatedContent = activeSlide.querySelector('.text-content');
            if (animatedContent) {
                const animationClasses = [...animatedContent.classList].filter(cls =>
                    cls.startsWith('fade')
                );
                animationClasses.forEach(cls => animatedContent.classList.remove(cls));
                void animatedContent.offsetWidth;
                animationClasses.forEach(cls => animatedContent.classList.add(cls));
                }
            }
        }
    });

    splide1.mount();
    let autoplayInterval = 10300;
    let splide1Timer = setInterval(() => {
        splide1.go('>');
    }, autoplayInterval);

    const splide1Arrows = document.querySelectorAll('#splide .splide__arrow');
    splide1Arrows.forEach(arrow => {
        arrow.addEventListener('click', () => {
            clearInterval(splide1Timer);
        });
    });

    const splide2 = new Splide('#serviceSlide', {
        type: 'loop',
        drag: 'free',
        focus: 2,
        pagination: false,
        perPage: 4,
        autoScroll: {
            speed: 1,
        },
        breakpoints: {
            1200: { perPage: 4 },
            940: { perPage: 3, focus: 'center' },
            675: { perPage: 2, focus: 'center' },
            359: { perPage: 1, focus: 'center' },
        },
    });

    splide2.mount({ AutoScroll });

    const splide3 = new Splide('#blogSlide', {
        type: 'loop',
        perPage: 3,
        perMove: 1,
        arrows: false,
        pagination: true, 
        speed: 1500,
        easing: 'ease-in-out',
        drag: true,
        breakpoints: {
            992: {
                perPage: 2
            },
            768: {
                perPage: 1
            }
        }
    });

    splide3.on('mounted updated', function () {
        const paginationList = splide3.root.querySelector('.splide__pagination');
        if (paginationList) {
            paginationList.style.display = paginationList.children.length <= 1 ? 'none' : '';
        }
    });

    splide3.mount();

    const intervalTime = 3600;
    let splide3Timer = setInterval(() => {
        splide3.go('+1');
    }, intervalTime);

    const blogSliderElement = document.getElementById('blogSlide');
    if (blogSliderElement) {
        blogSliderElement.addEventListener('mouseenter', () => clearInterval(splide3Timer));
        blogSliderElement.addEventListener('mouseleave', () => {
            splide3Timer = setInterval(() => splide3.go('+1'), intervalTime);
        });
    }
    });
