document.addEventListener("DOMContentLoaded", () => {
    // handle Our Top Destinations slides
    const swiperSlides = document.querySelectorAll(
        ".top-destinations-swiper .swiper-slide"
    );
    swiperSlides.forEach((slide) => {
        const thumbnails = slide.querySelectorAll(".img-option");
        const mainImage = slide.querySelector(".main-image");
        thumbnails.forEach((thumbnail) => {
            thumbnail.addEventListener("click", () => {
                mainImage.src = thumbnail.src;
                thumbnails.forEach((img) => img.classList.remove("border-2"));
                thumbnail.classList.add("border-2");
            });
        });
    });
    // Reusable function to initialize Swiper instances
    const initializeSwiper = (selector, config) => {
        return new Swiper(selector, {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 20,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                768: { slidesPerView: 1 },
                1024: { slidesPerView: 3.2 },
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            lazy: {
                loadPrevNext: true,
            },
            grabCursor: true,
            ...config,
        });
    };
    // Initialize Swiper instances
    initializeSwiper(".top-destinations-swiper", {
        breakpoints: {
            768: {
                slidesPerView: 1,
            },
            1024: {
                slidesPerView: 1.4,
            },
        },
    });
    initializeSwiper(".what-are-saying-swiper", {
        breakpoints: {
            768: {
                slidesPerView: 1,
            },
            1024: {
                slidesPerView: 1.6,
            },
        },
    });
    initializeSwiper(".single-tours-swiper");
    initializeSwiper(".blog-swiper");
});
