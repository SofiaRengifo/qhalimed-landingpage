import Splide from '@splidejs/splide';
import { AutoScroll } from '@splidejs/splide-extension-auto-scroll';

document.addEventListener('DOMContentLoaded', () => {

    const splide1 = new Splide('#splide', {
        type: 'loop',
        perPage: 1,
        autoplay: true,
        interval: 3000,
        pauseOnHover: false,
        pauseOnFocus: false,
        pagination: false,
    });

    splide1.on('moved', function(newIndex) {
        const activeSlide = splide1.Components.Elements.slides[newIndex];
        if (activeSlide) {
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
    });

    splide1.mount();
    let autoplayInterval = 6000;
    let splide1Timer = setInterval(() => {
        splide1.go('>');
    }, autoplayInterval);

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
        },
    });

    splide2.mount({ AutoScroll });

     const splide3 = new Splide('#blogSlide', {

            perPage: 3
            , arrows: false
            , pagination: false
            , breakpoints: {
                992: {
                    perPage: 2
                }
                , 768: {
                    perPage: 1
                }
            , }
        });
        splide3.mount();

        const track = document.querySelector('#blogSlide .splide__list');
        const originalSlides = Array.from(document.querySelectorAll('#blogSlide .splide__slide'));
        const slides = [...originalSlides];
        const dotsContainer = document.getElementById('blogSlideDots');


        originalSlides.forEach(slide => {
            const clone = slide.cloneNode(true);
            clone.removeAttribute('style');
            clone.classList.add('slide-clone');
            track.appendChild(clone);
        });

        let currentIndex = 0;


        originalSlides.forEach((_, index) => {
            const dot = document.createElement('span');
            dot.classList.add('dot');
            if (index === 0) dot.classList.add('active');

            dot.addEventListener('click', () => {
                currentIndex = index;
                goToSlide(currentIndex);
            });

            dotsContainer.appendChild(dot);
        });

        function updateDots() {
            const dots = dotsContainer.querySelectorAll('.dot');
            dots.forEach((dot, i) => dot.classList.toggle('active', i === currentIndex % originalSlides.length));
        }

        function goToSlide(index) {
            const offset = slides[0].offsetWidth * index;
            track.style.transition = 'transform 0.6s ease';
            track.style.transform = `translateX(-${offset}px)`;
            updateDots();
        }

        const intervalTime = 3000;
        let sliderInterval = setInterval(() => {
            currentIndex = (currentIndex + 1) % slides.length;
            goToSlide(currentIndex);
        }, intervalTime);
    });
