require('./bootstrap');

import Swiper, {Autoplay, Navigation} from 'swiper';
import 'swiper/css';
import 'swiper/css/autoplay';
import 'swiper/css/navigation';

Swiper.use([Autoplay, Navigation]);

const swiper = new Swiper('.mySwiper', {
    slidesPerView: 1,
    loop: true,
    speed: 1000,

    watchSlidesProgress: true,

    autoplay: {
        delay: 5000,
    },

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    breakpoints: {
        // Tailwind CSS breakpoints
        // https://tailwindcss.com/docs/responsive-design/

        // lg
        1024: {
            slidesPerView: 3,
        },

        // xl
        1280: {
            slidesPerView: 5,
        },
    }
});