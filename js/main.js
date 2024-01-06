const navbar = document.querySelector('.navbar');
const logoLight = document.querySelector('.logo-light');
const logo = document.querySelector('.logo');
const mMenuToggle = document.querySelector('.mobile-menu-toggle');
const menu = document.querySelector('.mobile-menu');


const lightModeOn = (event) => {
    navbar.classList.add('navbar-light');
    logo.style.display = "block";
    logoLight.style.display = "none";
};

const lightModeOff = (event) => {
    navbar.classList.remove('navbar-light');
    logo.style.display = "none";
    logoLight.style.display = "block";
};

const openMenu = (event) => {
    menu.classList.add('is-open');
    mMenuToggle.classList.add('close-menu')
    document.body.style.overflow="hidden";
    lightModeOn();
};
const closeMenu = (event) => {
    menu.classList.remove('is-open');
    mMenuToggle.classList.remove('close-menu')
    document.body.style.overflow="";
    lightModeOff();
};

window.addEventListener('scroll', () => {
    this.scrollY > 1 ? lightModeOn() : lightModeOff();
});
mMenuToggle.addEventListener("click", (event) => {
    event.preventDefault();
    menu.classList.contains('is-open') ? closeMenu() : openMenu();
});

const swiper = new Swiper('.swiper-slider', {
    speed: 400,
    autoHeight: true,
    slidesPerView: 1,
    navigation: {
        nextEl: '.slider-button-next',
        prevEl: '.slider-button-prev',
    },
    breakpoints: {
        // when window width is >= 320px
        576: {
            slidesPerView: 2,
            centeredSlides: true,
            slidesOffsetBefore: -120,
        },
        // when window width is >= 480px
        768: {
            slidesPerView: 3,
        },
        // when window width is >= 640px
        1024: {
            slidesPerView: 4,
        },
        1200: {
            slidesPerView: 5,
        },
    },
});

const swiperSteps = new Swiper('.steps-slider', {
    speed: 400,
    slidesPerView: 1,
    navigation: {
        nextEl: '.steps-button-next',
        prevEl: '.steps-button-prev',
    },
    breakpoints: {
        // when window width is >= 320px
        576: {
            slidesPerView: 2,
            centeredSlides: true,
            slidesOffsetBefore: -120,
        },
        // when window width is >= 480px
        768: {
            slidesPerView: 3,
        },
        // when window width is >= 640px
        1024: {
            slidesPerView: 4,
        },
    }
});