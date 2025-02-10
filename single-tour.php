<?php
// single-tour.php
$_yellow = "#C8EC1F";
$_primary = "#095763";
$_primary_two = "#074C56";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <title>Single Tour</title>
    <meta name="description"
        content="Dreaming of a getaway within Egypt ? Discover unbeatable destinations across egypt , Whether you're craving the golden beaches of the Red Sea, the serene beauty of the Nile, or the vibrant culture of Cairo, secure your spot now !">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/font-2.css">
    <style>
        html,
        body {
            scroll-behavior: smooth;
        }

        .background-container {
            background: linear-gradient(180deg, #276C76 0%, #BAD0B4 70%, #FFFFFF 100%);
            /* min-height: 100vh; */
            position: relative;
            overflow: hidden;
        }

        /* start common styles */
        .btn {
            width: auto;
            /* height: 48px; */
            padding-bottom: 10px;
            cursor: pointer;
            font-size: 16px;
            color:
                <?= $_primary ?>
            ;
        }

        .btn-primary,
        .btn-secondary:hover {
            border-bottom: 2px solid
                <?= $_primary ?>
            ;
        }

        .btn-secondary {}

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: hwb(0deg 0% 100% / 30%);
        }

        .overlay:not(.hover):hover {
            background-color: hwb(0deg 0% 100% / 0%);
            animation: fadeIn 0.8s;
        }


        .view-all::after {
            width: 100%;
            height: 2px;
            position: absolute;
            bottom: -5px;
            left: 0;
            background-color:
                <?= $_yellow ?>
            ;
            content: '';
        }

        .swiper-pagination .swiper-pagination-bullet {
            width: 19px;
            height: 8px;
            border-radius: 5px;
            opacity: 1;
            background-color: #FBFEF3 !important;

        }

        .swiper-pagination .swiper-pagination-bullet-active {
            width: 37px;
            background-color:
                <?= $_primary ?>
                !important;
        }

        .swiper-button-prev,
        .swiper-button-next {
            top: auto;
            bottom: 0px;
            width: 50px !important;
            height: 50px !important;
            border-radius: 50% !important;
            background-color: #E1F0F3;
            z-index: 11;
        }

        /* Override Swiper default styles */
        .swiper-button-prev:after,
        .swiper-button-next:after {
            font-size: 24px !important;
            font-weight: bold;
            color: #A2C0C4;
        }

        .swiper-button-prev:hover::after,
        .swiper-button-next:hover::after {
            color:
                <?= $_primary ?>
            ;
        }

        @media (max-width: 900px) {
            .btn {
                font-size: 12px;
            }

            .swiper-pagination .swiper-pagination-bullet {
                width: 12px;
                height: 5px;
            }

            .swiper-pagination .swiper-pagination-bullet-active {
                width: 25px;
            }

            .swiper-button-prev,
            .swiper-button-next {
                width: 40px !important;
                height: 40px !important;
            }

            /* Override Swiper default styles */
            .swiper-button-prev:after,
            .swiper-button-next:after {
                font-size: 18px !important;
            }
        }

        /* end common styles */
        /* start what are saying section styles */
        .blog-section .swiper-pagination-bullet,
        .reviews-section .swiper-pagination-bullet {
            background-color: #C1D5D8 !important;
        }

        .blog-section .swiper-pagination-bullet-active,
        .reviews-section .swiper-pagination-bullet-active {
            background-color:
                <?= $_primary ?>
                !important;
        }

        /* end what are saying section styles */
    </style>
</head>

<body>

    <?php include "componets/navbar.php" ?>
    <!-- Start Hero Section -->
    <div class="background-container">
        <?php include "componets/st-hero.php" ?>

    </div>
    <!-- End Hero Section -->



    <!-- Start tab-link -->
<!-- Start tab-link -->
<section class="tab-link shadow-[0_4px_8px_rgba(0,0,0,0.08)] sticky top-0 bg-white z-50">
    <div class="p-4 max-w-7xl mx-auto relative my-12 md:my-16">
        <div class="overflow-x-auto">
            <ul class="flex md:justify-start gap-8  whitespace-nowrap w-max md:w-full px-4 md:px-0">
                <li class="shrink-0"><a href="#overview" data-content="overview" class="btn btn-secondary btn-primary block text-[14px]">Overview</a></li>
                <li class="shrink-0"><a href="#itinerary" data-content="itinerary" class="btn btn-secondary block text-[14px]">Itinerary</a></li>
                <li class="shrink-0"><a href="#flights" data-content="flights" class="btn btn-secondary block text-[14px]">Flights</a></li>
                <li class="shrink-0"><a href="#prices" data-content="prices" class="btn btn-secondary block text-[14px]">Prices</a></li>
                <li class="shrink-0"><a href="#reviews" data-content="reviews" class="btn btn-secondary block text-[14px]">Reviews</a></li>
                <li class="shrink-0"><a href="#faq" data-content="faq" class="btn btn-secondary block text-[14px]">FAQ</a></li>
            </ul>
        </div>
    </div>
</section>



<style>
/* Update btn styles */
.btn {
    width: auto;
    padding-bottom: 10px;
    cursor: pointer;
    font-size: 16px;
    color: #095763;
    position: relative;
}

.btn-primary::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background-color: #095763;
}
/* Reduce scrollbar width and height */
.tab-link div::-webkit-scrollbar {
  height: 1px; 
  width: 1px; 
}
.tab-link div::-webkit-scrollbar-track {
  background: #f1f1f1; 
  border-radius: 10px;
}

/* Customize the scrollbar thumb */
.tab-link div::-webkit-scrollbar-thumb {
  background:rgb(255, 255, 255); 
  border-radius: 10px;
}

</style>
    <!-- End tab-link -->

    <div id="content" class="max-w-7xl mx-auto">
        <!-- start tab link content -->
        <div class="grid grid-cols-3 gap-8">
            <div class="col-span-3 md:col-span-2">
                <!-- overview -->
                <div class="tab-content" id="overview" data-tab="overview">
                    <section class="max-w-7xl px-4 sm:px-6 lg:px-8 mx-auto relative mb-16">
                        <h3 class="text-[<?= $_primary ?>] text-[26px] md:text-[36px] font-semibold mb-6">Overview</h3>
                        <h5 class="text-xl font-semibold mb-2">
                            Immerse yourself in Egypt’s rich history and vibrant culture .
                        </h5>
                        <p class="text-gray-500 leading-8 mt-0 mb-6 text-sm md:text-base">
                            Immerse yourself in Egypt’s rich history and vibrant culture on a grand journey through
                            Cairo,
                            from
                            the ancient pyramids of Giza to the bustling bazaars of Khan El Khalili Immerse yourself in
                            Egypt’s
                            rich history and vibrant culture on a grand journey through Cairo, from the ancient pyramids
                            of
                            Giza
                            to the bustling bazaars of Khan El Khalili.
                        </p>
                        <div class="flex justify-between items-start flex-wrap">
                            <div>
                                <h3 class="text-xl text-[<?= $_primary ?>] font-semibold">Your Trip include :</h3>
                                <ul class="mt-4">
                                    <li class="flex items-center gap-2 mb-3">
                                        <img loading="lazy" src="images/icons/mark.svg" alt="Mark icon" />
                                        <span>All flights</span>
                                    </li>
                                    <li class="flex items-center gap-2 mb-3">
                                        <img loading="lazy" src="images/icons/mark.svg" alt="Mark icon" />
                                        <span>Accommodation</span>
                                    </li>
                                    <li class="flex items-center gap-2 mb-3">
                                        <img loading="lazy" src="images/icons/mark.svg" alt="Mark icon" />
                                        <span>All transfers</span>
                                    </li>
                                    <li class="flex items-center gap-2 mb-3">
                                        <img loading="lazy" src="images/icons/mark.svg" alt="Mark icon" />
                                        <span>Activities</span>
                                    </li>
                                    <li class="flex items-center gap-2 mb-3">
                                        <img loading="lazy" src="images/icons/mark.svg" alt="Mark icon" />
                                        <span>Some meals</span>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h3 class="text-xl text-[<?= $_primary ?>] font-semibold">Trip Highlights :</h3>
                                <ul class="mt-4">
                                    <li class="flex items-center gap-2 mb-3">
                                        <img loading="lazy" src="images/icons/location.svg" alt="Location icon" />
                                        <span>The Pyramids of Giza</span>
                                    </li>
                                    <li class="flex items-center gap-2 mb-3">
                                        <img loading="lazy" src="images/icons/location.svg" alt="Location icon" />
                                        <span>Sphinx</span>
                                    </li>
                                    <li class="flex items-center gap-2 mb-3">
                                        <img loading="lazy" src="images/icons/location.svg" alt="Location icon" />
                                        <span>Egyptian Museum</span>
                                    </li>
                                    <li class="flex items-center gap-2 mb-3">
                                        <img loading="lazy" src="images/icons/location.svg" alt="Location icon" />
                                        <span>Khan El Khalili Bazaar</span>
                                    </li>
                                    <li class="flex items-center gap-2 mb-3">
                                        <img loading="lazy" src="images/icons/location.svg" alt="Location icon" />
                                        <span>Nile River Cruise</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- itinerary -->
                <div class="tab-content" id="itinerary" data-tab="itinerary">
                    <?php include "componets/st-itinerary.php" ?>
                </div>
                
                <!-- flights -->
                <div class="tab-content" id="flights" data-tab="flights">
                    <section class="max-w-7xl px-4 sm:px-6 lg:px-8 mx-auto relative mb-16">
                        <h3 class="text-[<?= $_primary ?>] text-[26px] md:text-[36px] font-semibold mb-6">Flights</h3>
                        <p class="text-gray-500 leading-8 mt-0 mb-4">
                            Round-trip flights are one more thing we handle to make your journey as smooth as possible.
                            Our
                            team
                            of travel experts will find the best flight itinerary for you at a competitive rate, thanks
                            to
                            our
                            partnerships with top airlines.
                        </p>
                        <div class="bg-[#F9FBF9] p-6 rounded-lg mb-4">
                            <h3 class="text-xl md:text-2xl font-bold mb-4">Add our airfare and you’ll get:</h3>

                            <ul class="list-disc list-inside">
                                <li class="mb-2 text-sm md:text-base">
                                    Round-trip flight for your tour
                                </li>
                                <li class="mb-2 text-sm md:text-base">
                                    Airport transfers at your destination
                                </li>
                                <li class="mb-2 text-sm md:text-base">
                                    A great price locked in today
                                </li>
                                <li class="mb-2 text-sm md:text-base">
                                    24/7 support from our dedicated service team
                                </li>
                                <li class="mb-2 text-sm md:text-base">
                                    Options for arriving early, staying longer, or requesting an
                                    upgrade
                                </li>
                                <li class="mb-2 text-sm md:text-base">
                                    Flexible rebooking options if your tour itinerary changes
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
            <div class="hidden md:block col-span-1">
                <?php include "componets/inquery-form.php" ?>

                <!-- start More trips to discover -->
                <div class="mt-8 ">
                    <h3 class="text-[<?= $_primary ?>] text-3xl text-center">More trips to discover</h3>
                    <div class="grid grid-cols-1 gap-4 my-6">
                        <div class="bg-white rounded-[20px] shadow-[0_2px_8px_rgba(0,0,0,0.08)]  ">
                            <div class="relative">
                                <div class="overlay"></div>
                                <img loading="lazy" src="images/swipe1.jpg" alt="Luxor Temple"
                                    class="w-full h-[250px] object-cover">
                                <!-- Card badges -->
                                <div class="absolute top-4 left-4">
                                    <span
                                        class="bg-[<?= $_yellow ?>] text-[<?= $_primary ?>] px-3 py-1 rounded-full text-xs font-medium ">Best
                                        seller</span>

                                </div>
                                <div class="absolute top-4 right-4">
                                    <span
                                        class="bg-white/80 backdrop-blur-[2px] px-2 py-0.5 rounded-full flex items-center gap-1">
                                        <img loading="lazy" src="images/icons/star.svg" alt="Star icon"
                                            class="w-[14px] md:w-[18px]" />

                                        <span class="text-xs">4.8</span>
                                    </span>
                                </div>
                                <!-- Image counter -->
                                <div class="absolute bottom-4 right-4">
                                    <div
                                        class="w-16 md:w-20 py-1 rounded-xl bg-gray-100 opacity-75 flex items-center justify-around">
                                        <button class="prev hover:-translate-x-1 duration-300">
                                            <img loading="lazy" src="images/icons/arrow-left-w.svg"
                                                alt="Arrow left icon"
                                                class="group-hover:translate-x-1 duration-300 w-[14px] md:w-[18px]" />
                                        </button>
                                        <span class="text-[<?= $_primary_two ?>] text-xs md:text-base">1/4</span>
                                        <button class="next hover:translate-x-1 duration-300">
                                            <img loading="lazy" src="images/icons/arrow-right-w.svg"
                                                alt="Arrow right icon"
                                                class="group-hover:translate-x-1 duration-300 w-[14px] md:w-[18px]" />

                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="p-6">
                                <h3 class="text-xl font-semibold mb-2">Cairo Trips</h3>
                                <p class="text-gray-600 text-sm mb-6">A private visit to Queen Nefertari’s Tomb,
                                    known as
                                    the
                                    with an expert Egyptologist as the guide.</p>

                                <div class="flex items-center gap-2 mb-6">
                                    <img loading="lazy" src="images/icons/time.svg" alt="time icon" width="20"
                                        height="20">
                                    <span class="text-gray-600">3 Days , 2 Nights</span>
                                </div>

                                <div class="flex justify-between items-center">
                                    <div class="flex items-center gap-2">
                                        <img loading="lazy" src="images/icons/dollar.svg" alt="dollar icon" width="20"
                                            height="20">
                                        <span class="text-gray-600">Start from : <span
                                                class="font-medium">100$</span></span>
                                    </div>
                                </div>
                                <a href="single-tour.php"
                                    class="text-[<?= $_primary ?>] font-medium flex justify-end items-center group gap-2">
                                    <span class="text-sm md:text-base">Book now</span>
                                    <img loading="lazy" src="images/icons/arrow-right.svg" alt="Arrow right icon"
                                        class="group-hover:translate-x-1 duration-300" width="30" height="30" />
                                </a>
                            </div>
                        </div>
                        <div class="bg-white rounded-[20px] shadow-[0_2px_8px_rgba(0,0,0,0.08)] overflow-hidden ">
                            <div class="relative">
                                <div class="overlay"></div>
                                <img loading="lazy" src="images/swipe1.jpg" alt="Luxor Temple"
                                    class="w-full h-[250px] object-cover">
                                <!-- Card badges -->
                                <div class="absolute top-4 left-4">
                                    <span
                                        class="bg-[<?= $_yellow ?>] text-[<?= $_primary ?>] px-3 py-1 rounded-full text-xs font-medium ">Best
                                        seller</span>

                                </div>
                                <div class="absolute top-4 right-4">
                                    <span
                                        class="bg-white/80 backdrop-blur-[2px] px-2 py-0.5 rounded-full flex items-center gap-1">
                                        <img loading="lazy" src="images/icons/star.svg" alt="Star icon"
                                            class="w-[14px] md:w-[18px]" />

                                        <span class="text-xs">4.8</span>
                                    </span>
                                </div>
                                <!-- Image counter -->
                                <div class="absolute bottom-4 right-4">
                                    <div
                                        class="w-16 md:w-20 py-1 rounded-xl bg-gray-100 opacity-75 flex items-center justify-around">
                                        <button class="prev hover:-translate-x-1 duration-300">
                                            <img loading="lazy" src="images/icons/arrow-left-w.svg"
                                                alt="Arrow left icon"
                                                class="group-hover:translate-x-1 duration-300 w-[14px] md:w-[18px]" />
                                        </button>
                                        <span class="text-[<?= $_primary_two ?>] text-xs md:text-base">1/4</span>
                                        <button class="next hover:translate-x-1 duration-300">
                                            <img loading="lazy" src="images/icons/arrow-right-w.svg"
                                                alt="Arrow right icon"
                                                class="group-hover:translate-x-1 duration-300 w-[14px] md:w-[18px]" />

                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="p-6">
                                <h3 class="text-xl font-semibold mb-2">Cairo Trips</h3>
                                <p class="text-gray-600 text-sm mb-6">A private visit to Queen Nefertari’s Tomb,
                                    known as
                                    the
                                    with an expert Egyptologist as the guide.</p>

                                <div class="flex items-center gap-2 mb-6">
                                    <img loading="lazy" src="images/icons/time.svg" alt="time icon" width="20"
                                        height="20">
                                    <span class="text-gray-600">3 Days , 2 Nights</span>
                                </div>

                                <div class="flex justify-between items-center">
                                    <div class="flex items-center gap-2">
                                        <img loading="lazy" src="images/icons/dollar.svg" alt="dollar icon" width="20"
                                            height="20">
                                        <span class="text-gray-600">Start from : <span
                                                class="font-medium">100$</span></span>
                                    </div>
                                </div>
                                <a href="single-tour.php"
                                    class="text-[<?= $_primary ?>] font-medium flex justify-end items-center group gap-2">
                                    <span class="text-sm md:text-base">Book now</span>
                                    <img loading="lazy" src="images/icons/arrow-right.svg" alt="Arrow right icon"
                                        class="group-hover:translate-x-1 duration-300" width="30" height="30" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end More trips to discover -->
            </div>

            <div class="col-span-3">

                <?php include "componets/sale.php" ?>

                <!-- prices -->
                <div class="tab-content" id="prices" data-tab="prices">
                    <?php include "componets/st-prices.php" ?>
                </div>
                <!-- reviews -->
                <div class="tab-content" id="reviews" data-tab="reviews">
                    <section class="reviews-section max-w-7xl px-4 sm:px-6 lg:px-8 mx-auto relative mb-16">
                        <h3 class="text-[<?= $_primary ?>] text-[26px] md:text-[36px] font-semibold mb-6">Reviews</h3>
                        <?php include "componets/reviews.php" ?>
                    </section>
                </div>

                <!-- faq -->
                <div class="tab-content" id="faq" data-tab="faq">
                    <section class="max-w-7xl px-4 sm:px-6 lg:px-8 mx-auto relative mb-16">
                        <h3 class="text-[<?= $_primary ?>] text-[26px] md:text-[36px] font-semibold">FAQ</h3>
                        <?php include "componets/faq.php" ?>
                    </section>
                </div>
            </div>

        </div>
        <!-- end tab link content -->
         <div class="md:hidden mb-16">
         <?php include "componets/inquery-form.php" ?>
         </div>
    </div>
    <!-- start subscribe -->
        <?php include "componets/subscribe.php" ?>

        <!-- end subscribe -->
    <?php include "componets/footer.php" ?>

    <script>
document.addEventListener('DOMContentLoaded', () => {
    // Tab link functionality
    const tabLinks = document.querySelectorAll('.tab-link a');
    const sections = document.querySelectorAll('.tab-content');
    
    // Options for the Intersection Observer with adjusted values
    const options = {
    root: null,
    threshold: [0.05, 0.1, 0.2, 0.3], // Detect earlier
    rootMargin: '-30% 0px -30% 0px'  // More generous margins
};
    let manualClick = false; // Flag to track manual clicks

    function updateActiveTab(entries) {
    if (manualClick) return; // Skip updates when manually clicking

    let maxVisibleSection = null;
    let maxVisibility = 0;

    console.log("Observer triggered!");

    entries.forEach(entry => {
        console.log(`Observed ${entry.target.id}: isIntersecting = ${entry.isIntersecting}, intersectionRatio = ${entry.intersectionRatio}`);

        if (entry.isIntersecting && entry.intersectionRatio > maxVisibility) {
            maxVisibility = entry.intersectionRatio;
            maxVisibleSection = entry.target;
        }
    });

    if (maxVisibleSection) {
        console.log(`✅ Active section detected: ${maxVisibleSection.id}`);
        const activeId = maxVisibleSection.getAttribute('id');
        if (activeId) {
            tabLinks.forEach(link => link.classList.remove('btn-primary'));
            const activeLink = document.querySelector(`.tab-link a[href="#${activeId}"]`);
            if (activeLink) {
                activeLink.classList.add('btn-primary');
            }
        }
    } else {
        console.log("❌ No section is currently active.");
    }
    console.log(document.getElementById("itinerary").getBoundingClientRect());

}



    // Create observer
    const observer = new IntersectionObserver(updateActiveTab, options);
    setTimeout(() => {
    const updatedSections = document.querySelectorAll('.tab-content');
    updatedSections.forEach(section => {
        observer.observe(section);
        console.log(`Observer reattached to: ${section.id}`);
    });
}, 1500);


setTimeout(() => {
    const itinerarySection = document.getElementById("itinerary");
    console.log(itinerarySection ? "Itinerary section found!" : "Itinerary section NOT found!");
}, 1000);
    // Add click event listeners to tab links
    tabLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            manualClick = true; // Set flag to disable observer temporarily

            tabLinks.forEach(link => link.classList.remove('btn-primary'));
            this.classList.add('btn-primary');

            const contentId = this.getAttribute('data-content');
            const targetSection = document.getElementById(contentId);
            
            if (targetSection) {
                const headerOffset = document.querySelector('.tab-link').offsetHeight + 20; // Dynamic height

                const elementPosition = targetSection.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({ top: offsetPosition, behavior: "smooth" });

                setTimeout(() => { manualClick = false; }, 1000); // Reactivate observer after scroll
            }
        });
    });

    // Swiper Initialization
    const initializeSwiper = (selector, config = {}) => {
        const swiperElement = document.querySelector(selector);
        if (swiperElement) {
            return new Swiper(selector, {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 20,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
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
        }
    };

    // Initialize Swiper instances
    initializeSwiper('.what-are-saying-swiper', {
        breakpoints: {
            768: { slidesPerView: 1 },
            1024: { slidesPerView: 1.6 },
        }
    });
    initializeSwiper('.single-tours-swiper');
    initializeSwiper('.blog-swiper');
});
</script>




</body>

</html>