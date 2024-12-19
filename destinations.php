<?php
// destinations.php
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
    <title>Destinations</title>
    <meta name="description"
        content="Dreaming of a getaway within Egypt ? Discover unbeatable destinations across egypt , Whether you're craving the golden beaches of the Red Sea, the serene beauty of the Nile, or the vibrant culture of Cairo, secure your spot now !">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/font-2.css">
    <style>
        .background-container {
            background: linear-gradient(180deg, #276C76 0%, #BAD0B4 100%);
            min-height: 100vh;
            position: relative;
            overflow: hidden;
        }

        /* start common styles */
        .view-all::after {
            width: 100%;
            height: 2px;
            position: absolute;
            bottom: -5px;
            left: 0;
            background-color: #C1EA00;
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
            background-color: #095763 !important;
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
            color: #095763;
        }

        @media (max-width: 900px) {

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
        /* start top destination styles */
        .top-destinations-section .swiper-slide {
            height: 487px;
        }

        @media (max-width: 900px) {
            .top-destinations-section .swiper-slide {
                height: 400px;
            }
        }

        /* end top destination styles */
    </style>
</head>

<body>
    <?php include "componets/navbar.php" ?>
    <div class="background-container">
        <!-- Start Hero Section -->
        <section class="max-w-7xl px-4 sm:px-6 lg:px-8 mx-auto pt-24">
            <div class="mb-12">
                <h1 style="font-family: 'Berkshire Swash', cursive;"
                    class="text-[32px] md:text-[64px] font-semibold mb-4 text-[#C8E677]">
                    Destinations
                </h1>
                <p class="w-full  text-white leading-8 text-[14px] md:text-[24px]">
                    Dreaming of a getaway within Egypt ? Discover unbeatable destinations across egypt , Whether
                    you're
                    craving the golden beaches of the Red Sea, the serene beauty of the Nile, or the vibrant culture
                    of
                    Cairo, secure your spot now !
                </p>
            </div>
            <?php include "componets/search.php" ?>
        </section>
        <!-- End Hero Section -->

        <!-- Start Top Destinations Section -->
        <section class="top-destinations-section max-w-7xl px-4 sm:px-6 lg:px-8 mx-auto relative my-16">
            <div class="hidden md:flex justify-between items-center pb-6">
                <h3 class="text-[#05363D] text-[36px]">Our Top Destinations</h3>
                <a href="destinations.php" class=" text-[16px] text-[#C1EA00] relative view-all">View All</a>
            </div>
            <div class="swiper top-destinations-swiper pb-12 md:pb-20">
                <div class="swiper-wrapper">
                    <!-- Cairo -->
                    <div class="swiper-slide">
                        <div class="rounded-[16px] overflow-hidden h-full relative">
                            <img src="images/swipe1.jpg" alt="Cairo" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-b from-black/0 via-black/20 to-black/60"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                                <div class="flex gap-4">
                                    <h3 class="text-3xl font-semibold mb-2">Cairo</h3>
                                    <p class="text-sm bg-white text-[#0B5864] rounded-lg inline-block px-3 py-1 mb-3">8
                                        Trips</p>
                                </div>
                                <p class="text-sm md:text-base mb-4 w-[80%]">
                                    Egypt's bustling capital offers an unparalleled blend of ancient wonders and vibrant
                                    modern life.
                                    From the awe-inspiring Pyramids of Giza to the lively bazaars and rich cultural
                                    heritage of Islamic
                                    Cairo, the city immerses travelers in history and unforgettable experiences.
                                </p>
                                <a href="#" class="text-yellow-400 font-semibold hover:underline">Discover Trips →</a>
                            </div>
                            <div class="absolute bottom-[45px] right-4 flex gap-8 flex-col">
                                <img src="images/swipe1.jpg" alt="swipe1.jpg"
                                    class="w-[45px] md:w-[109px] h-[45px] md:h-[109px] rounded-lg border-2 border-white">
                                <img src="images/swipe2.jpg" alt="swipe2.jpg"
                                    class="w-[45px] md:w-[109px] h-[45px] md:h-[109px] rounded-lg">
                                <img src="images/swipe3.jpg" alt="swipe3.jpg"
                                    class="w-[45px] md:w-[109px] h-[45px] md:h-[109px] rounded-lg">
                            </div>
                        </div>
                    </div>

                    <!-- Alexandria -->
                    <div class="swiper-slide">
                        <div class="rounded-[16px] overflow-hidden h-full relative">
                            <img loading="lazy" src="images/swipe2.jpg" alt="Alexandria"
                                class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-b from-black/0 via-black/20 to-black/60"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                                <div class="flex gap-4">
                                    <h3 class="text-3xl font-semibold mb-2">Alexandria</h3>
                                    <p class="text-sm bg-white text-[#0B5864] rounded-lg inline-block px-3 py-1 mb-3">5
                                        Trips</p>
                                </div>
                                <p class="text-sm md:text-base mb-4 w-[80%]">
                                    A stunning coastal city known for its Mediterranean charm, historic landmarks, and
                                    vibrant culture.
                                </p>
                                <a href="#" class="text-yellow-400 font-semibold hover:underline">Discover Trips →</a>
                            </div>
                            <div class="absolute bottom-[45px] right-4 flex gap-8 flex-col">
                                <img loading="lazy" src="images/swipe2.jpg" alt="swipe2.jpg"
                                    class="w-[45px] md:w-[109px] h-[45px] md:h-[109px] rounded-lg border-2 border-white">
                                <img loading="lazy" src="images/swipe3.jpg" alt="swipe3.jpg"
                                    class="w-[45px] md:w-[109px] h-[45px] md:h-[109px] rounded-lg">
                                <img loading="lazy" src="images/swipe1.jpg" alt="swipe1.jpg"
                                    class="w-[45px] md:w-[109px] h-[45px] md:h-[109px] rounded-lg">
                            </div>
                        </div>
                    </div>

                    <!-- Luxor -->
                    <div class="swiper-slide">
                        <div class="rounded-[16px] overflow-hidden h-full relative">
                            <img loading="lazy" src="images/swipe3.jpg" alt="Luxor" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-b from-black/0 via-black/20 to-black/60"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                                <div class="flex gap-4">
                                    <h3 class="text-3xl font-semibold mb-2">Luxor</h3>
                                    <p class="text-sm bg-white text-[#0B5864] rounded-lg inline-block px-3 py-1 mb-3">12
                                        Trips</p>
                                </div>
                                <p class="text-sm md:text-base mb-4 w-[80%]">
                                    A treasure trove of ancient Egyptian monuments, including the Valley of the Kings
                                    and Karnak Temple.
                                </p>
                                <a href="#" class="text-yellow-400 font-semibold hover:underline">Discover Trips →</a>
                            </div>
                            <div class="absolute bottom-[45px] right-4 flex gap-8 flex-col">
                                <img loading="lazy" src="images/swipe3.jpg" alt="swipe3.jpg"
                                    class="w-[45px] md:w-[109px] h-[45px] md:h-[109px] rounded-lg border-2 border-white">
                                <img loading="lazy" src="images/swipe1.jpg" alt="swipe1.jpg"
                                    class="w-[45px] md:w-[109px] h-[45px] md:h-[109px] rounded-lg">
                                <img loading="lazy" src="images/swipe2.jpg" alt="swipe2.jpg"
                                    class="w-[45px] md:w-[109px] h-[45px] md:h-[109px] rounded-lg">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <!-- End Top Destinations Section -->

        <!-- Start Witch Side... Section -->
        <section class="witch-side max-w-7xl px-4 sm:px-6 lg:px-8 mx-auto relative my-16">
            <h2 class="text-[#05363D] text-[36px]">Which side of Egypt are you most excited to explore ?</h2>

            <div class="grid grid-cols-2 gap-4 md:grid-cols-3 mt-4">
                <div class="card rounded-[20px] overflow-hidden relative ">
                    <div class=" absolute top-0 left-0 right-0 bottom-0 bg-black opacity-25"></div>
                    <img loading="lazy" src="images/destinations/historical-heart.jpg" alt="historical-heart"
                        class="w-full h-[150px] md:h-[300px] object-cover">
                    <div class="absolute top-4 left-4">
                        <p class="text-white text-xs md:text-base">Historical Heart</p>
                        <p class="text-white text-xs md:text-base">(Cairo and Giza)</p>
                    </div>
                    <!-- Image counter -->
                    <div class="absolute bottom-4 right-4">
                        <div class=" w-20 py-1 rounded-xl bg-gray-100 opacity-75 flex items-center justify-around">
                            <button class="prev hover:-translate-x-1 duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class=" w-[14px] md:w-[18px]"
                                    viewBox="0 0 14 14" fill="none">
                                    <path d="M3.4834 6.5L7.84726 10.3184" stroke="#074C56" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M3.4834 6.5L7.84726 2.68162" stroke="#074C56" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                            <span class="text-[#074C56] text-sm md:text-base">1/4</span>
                            <button class="next hover:translate-x-1 duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class=" w-[14px] md:w-[18px]"
                                    viewBox="0 0 14 14" fill="none">
                                    <path d="M10.5166 6.5L6.15274 10.3184" stroke="#074C56" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M10.5166 6.5L6.15274 2.68162" stroke="#074C56" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card rounded-[20px] overflow-hidden relative ">
                    <div class=" absolute top-0 left-0 right-0 bottom-0 bg-black opacity-25"></div>
                    <img loading="lazy" src="images/destinations/mediterranean-coast.jpg" alt="mediterranean-coast"
                        class="w-full h-[150px] md:h-[300px] object-cover">
                    <div class="absolute top-4 left-4">
                        <p class="text-white text-xs md:text-base">Mediterranean Coast</p>
                        <p class="text-white text-xs md:text-base">(Alexandria and Marsa Matruh)</p>
                    </div>
                    <!-- Image counter -->
                    <div class="absolute bottom-4 right-4">
                        <div class=" w-20 py-1 rounded-xl bg-gray-100 opacity-75 flex items-center justify-around">
                            <button class="prev hover:-translate-x-1 duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class=" w-[14px] md:w-[18px]"
                                    viewBox="0 0 14 14" fill="none">
                                    <path d="M3.4834 6.5L7.84726 10.3184" stroke="#074C56" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M3.4834 6.5L7.84726 2.68162" stroke="#074C56" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                            <span class="text-[#074C56] text-sm md:text-base">1/4</span>
                            <button class="next hover:translate-x-1 duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class=" w-[14px] md:w-[18px]"
                                    viewBox="0 0 14 14" fill="none">
                                    <path d="M10.5166 6.5L6.15274 10.3184" stroke="#074C56" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M10.5166 6.5L6.15274 2.68162" stroke="#074C56" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card rounded-[20px] overflow-hidden relative ">
                    <div class=" absolute top-0 left-0 right-0 bottom-0 bg-black opacity-25"></div>
                    <img loading="lazy" src="images/destinations/nile-valley.jpg" alt="nile-valley"
                        class="w-full h-[150px] md:h-[300px] object-cover">
                    <div class="absolute top-4 left-4">
                        <p class="text-white text-xs md:text-base">Nile Valley</p>
                        <p class="text-white text-xs md:text-base">(Luxor and Aswan)</p>
                    </div>
                    <!-- Image counter -->
                    <div class="absolute bottom-4 right-4">
                        <div class=" w-20 py-1 rounded-xl bg-gray-100 opacity-75 flex items-center justify-around">
                            <button class="prev hover:-translate-x-1 duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class=" w-[14px] md:w-[18px]"
                                    viewBox="0 0 14 14" fill="none">
                                    <path d="M3.4834 6.5L7.84726 10.3184" stroke="#074C56" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M3.4834 6.5L7.84726 2.68162" stroke="#074C56" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                            <span class="text-[#074C56] text-sm md:text-base">1/4</span>
                            <button class="next hover:translate-x-1 duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class=" w-[14px] md:w-[18px]"
                                    viewBox="0 0 14 14" fill="none">
                                    <path d="M10.5166 6.5L6.15274 10.3184" stroke="#074C56" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M10.5166 6.5L6.15274 2.68162" stroke="#074C56" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card rounded-[20px] overflow-hidden relative ">
                    <div class=" absolute top-0 left-0 right-0 bottom-0 bg-black opacity-25"></div>
                    <img loading="lazy" src="images/destinations/red-sea-coast.jpg" alt="red-sea-coast"
                        class="w-full h-[150px] md:h-[300px] object-cover">
                    <div class="absolute top-4 left-4">
                        <p class="text-white text-xs md:text-base">Red Sea Coast</p>
                        <p class="text-white text-xs md:text-base">(Hurghada , Taba and Sharm El-Sheikh)</p>
                    </div>
                    <!-- Image counter -->
                    <div class="absolute bottom-4 right-4">
                        <div class=" w-20 py-1 rounded-xl bg-gray-100 opacity-75 flex items-center justify-around">
                            <button class="prev hover:-translate-x-1 duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class=" w-[14px] md:w-[18px]"
                                    viewBox="0 0 14 14" fill="none">
                                    <path d="M3.4834 6.5L7.84726 10.3184" stroke="#074C56" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M3.4834 6.5L7.84726 2.68162" stroke="#074C56" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                            <span class="text-[#074C56] text-sm md:text-base">1/4</span>
                            <button class="next hover:translate-x-1 duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class=" w-[14px] md:w-[18px]"
                                    viewBox="0 0 14 14" fill="none">
                                    <path d="M10.5166 6.5L6.15274 10.3184" stroke="#074C56" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M10.5166 6.5L6.15274 2.68162" stroke="#074C56" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card rounded-[20px] overflow-hidden relative ">
                    <div class=" absolute top-0 left-0 right-0 bottom-0 bg-black opacity-25"></div>
                    <img loading="lazy" src="images/destinations/western-desert.jpg" alt="western-desert"
                        class="w-full h-[150px] md:h-[300px] object-cover">
                    <div class="absolute top-4 left-4">
                        <p class="text-white text-xs md:text-base">Western Desert</p>
                        <p class="text-white text-xs md:text-base">(Siwa Oasis, Bahariya, and White Desert)</p>
                    </div>
                    <!-- Image counter -->
                    <div class="absolute bottom-4 right-4">
                        <div class=" w-20 py-1 rounded-xl bg-gray-100 opacity-75 flex items-center justify-around">
                            <button class="prev hover:-translate-x-1 duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class=" w-[14px] md:w-[18px]"
                                    viewBox="0 0 14 14" fill="none">
                                    <path d="M3.4834 6.5L7.84726 10.3184" stroke="#074C56" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M3.4834 6.5L7.84726 2.68162" stroke="#074C56" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                            <span class="text-[#074C56] text-sm md:text-base">1/4</span>
                            <button class="next hover:translate-x-1 duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class=" w-[14px] md:w-[18px]"
                                    viewBox="0 0 14 14" fill="none">
                                    <path d="M10.5166 6.5L6.15274 10.3184" stroke="#074C56" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M10.5166 6.5L6.15274 2.68162" stroke="#074C56" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>


                <div class="overflow-hidden bg-[#095763] rounded-[20px] p-2 md:p-8 text-center h-[150px] md:h-[300px]">
                    <h3 class="font-['Berkshire_Swash'] text-[#C8EC1F] text-[16px] md:text-[30px] my-2 md:mt-6 md:mb-8">
                        Black
                        friday offer</h3>
                    <p class="text-white text-[14px] md:text-[20px] font-medium mb-4 md:mb-8">100$ off on all trips
                        during November !</p>
                    <a href="#" class="text-[#C8E677] flex items-center justify-center gap-2 md:gap-4 group">
                        <span class="text-[14px] md:text-[16px]">Discover Now</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="group-hover:translate-x-1 duration-300"
                            width="30" height="30" viewBox="0 0 33 32" fill="none">
                            <path d="M26.7861 16H6.2147" stroke="#C8E677" stroke-width="3" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M26.7861 16L19.513 22.7882" stroke="#C8E677" stroke-width="3"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M26.7861 16L19.513 9.21177" stroke="#C8E677" stroke-width="3"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>

            </div>
        </section>
        <!-- End Witch Side... Section -->

        <!-- Start Single tours Section -->
        <section class="single-tours-section max-w-7xl px-4 sm:px-6 lg:px-8 mx-auto relative my-16">
            <div class="hidden md:flex justify-between items-center pb-6">
                <h3 class="text-[#05363D] text-[36px]">Single tours</h3>
                <a href="destinations.php" class=" text-[16px] text-[#C1EA00] relative view-all">View All</a>
            </div>
            <div class="swiper single-tours-swiper pb-12 md:pb-20">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="bg-[#095763] rounded-[20px] p-10 flex flex-col items-center">
                            <h3 class="font-['Berkshire_Swash'] text-[#C8EC1F] text-[30px] mt-6 mb-8">
                                Black friday offer</h3>
                            <p class="text-white text-[20px] font-medium mb-8">100$ off on all trips during November !
                            </p>
                            <p class="text-white/80 text-base mb-8 leading-7">A private visit to Queen Nefertari’s Tomb,
                                known as
                                the with an expert Egyptologist as the guideA private visit to Queen Nefertari’s Tomb,
                                known as the with an expert Egyptologist as the guide.</p>
                            <div class="flex-grow flex items-center justify-center">
                                <button
                                    class="bg-[#C8E677] text-[#06414A] py-3 px-6 md:px-20 w-full md:w-fit rounded-full hover:bg-opacity-90 transition-colors">
                                    Book Trip
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white rounded-[20px] shadow-[0_2px_8px_rgba(0,0,0,0.08)] overflow-hidden ">
                            <div class="relative">
                                <img loading="lazy" src="images/swipe1.jpg" alt="Luxor Temple"
                                    class="w-full h-[250px] object-cover">
                                <!-- Card badges -->
                                <div class="absolute top-4 left-4">
                                    <span
                                        class="bg-[#C8EC1F] text-[#006778] px-3 py-1 rounded-full text-xs font-medium ">Best
                                        seller</span>

                                </div>
                                <div class="absolute top-4 right-4">
                                    <span
                                        class="bg-white/80 backdrop-blur-[2px] px-2 py-0.5 rounded-full flex items-center gap-1">
                                        <svg width="14" height="14" viewBox="0 0 20 20" fill="#FFD700">
                                            <path
                                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                        </svg>
                                        <span class="text-xs">4.8</span>
                                    </span>
                                </div>
                                <!-- Image counter -->
                                <div class="absolute bottom-4 right-4">
                                    <div
                                        class=" w-20 py-1 rounded-xl bg-gray-100 opacity-75 flex items-center justify-around">
                                        <button class="prev hover:-translate-x-1 duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" class=" w-[14px] md:w-[18px]"
                                                viewBox="0 0 14 14" fill="none">
                                                <path d="M3.4834 6.5L7.84726 10.3184" stroke="#074C56"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M3.4834 6.5L7.84726 2.68162" stroke="#074C56"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                        <span class="text-[#074C56] text-sm md:text-base">1/4</span>
                                        <button class="next hover:translate-x-1 duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" class=" w-[14px] md:w-[18px]"
                                                viewBox="0 0 14 14" fill="none">
                                                <path d="M10.5166 6.5L6.15274 10.3184" stroke="#074C56"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M10.5166 6.5L6.15274 2.68162" stroke="#074C56"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="p-6">
                                <h3 class="text-xl font-semibold mb-2">Luxor Trips</h3>
                                <p class="text-gray-600 text-sm mb-6">A private visit to Queen Nefertari's Tomb, known
                                    as the with an expert Egyptologist as the guide.</p>

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
                                <a href="#" class="text-[#006778] font-medium flex justify-end items-center group">
                                    <span>Book now</span>
                                    <svg class="w-6 h-6 group-hover:translate-x-1 duration-300" viewBox="0 0 24 24"
                                        fill="none">
                                        <path d="M5 12h14m-7-7l7 7-7 7" stroke="currentColor" stroke-width="2" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white rounded-[20px] shadow-[0_2px_8px_rgba(0,0,0,0.08)] overflow-hidden ">
                            <div class="relative">
                                <img loading="lazy" src="images/swipe1.jpg" alt="Luxor Temple"
                                    class="w-full h-[250px] object-cover">
                                <!-- Card badges -->
                                <div class="absolute top-4 left-4">
                                    <span
                                        class="bg-[#C8EC1F] text-[#006778] px-3 py-1 rounded-full text-xs font-medium">NEW</span>

                                </div>
                                <div class="absolute top-4 right-4">
                                    <span
                                        class="bg-white/80 backdrop-blur-[2px] px-2 py-0.5 rounded-full flex items-center gap-1">
                                        <svg width="14" height="14" viewBox="0 0 20 20" fill="#FFD700">
                                            <path
                                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                        </svg>
                                        <span class="text-xs">4.8</span>
                                    </span>
                                </div>
                                <!-- Image counter -->
                                <div class="absolute bottom-4 right-4">
                                    <div
                                        class=" w-20 py-1 rounded-xl bg-gray-100 opacity-75 flex items-center justify-around">
                                        <button class="prev hover:-translate-x-1 duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" class=" w-[14px] md:w-[18px]"
                                                viewBox="0 0 14 14" fill="none">
                                                <path d="M3.4834 6.5L7.84726 10.3184" stroke="#074C56"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M3.4834 6.5L7.84726 2.68162" stroke="#074C56"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                        <span class="text-[#074C56] text-sm md:text-base">1/4</span>
                                        <button class="next hover:translate-x-1 duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" class=" w-[14px] md:w-[18px]"
                                                viewBox="0 0 14 14" fill="none">
                                                <path d="M10.5166 6.5L6.15274 10.3184" stroke="#074C56"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M10.5166 6.5L6.15274 2.68162" stroke="#074C56"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="p-6">
                                <h3 class="text-xl font-semibold mb-2">Luxor Trips</h3>
                                <p class="text-gray-600 text-sm mb-6">A private visit to Queen Nefertari's Tomb, known
                                    as the with an expert Egyptologist as the guide.</p>

                                <div class="flex items-center gap-2 mb-6">
                                    <img loading="lazy" src="images/icons/time.svg" alt="time icon" width="20"
                                        height="20">
                                    <span class="text-gray-600">1 Day</span>
                                </div>

                                <div class="flex justify-between items-center">
                                    <div class="flex items-center gap-2">
                                        <img loading="lazy" src="images/icons/dollar.svg" alt="dollar icon" width="20"
                                            height="20">
                                        <span class="text-gray-600">Start from : <span
                                                class="font-medium">100$</span></span>
                                    </div>
                                </div>
                                <a href="#" class="text-[#006778] font-medium flex justify-end items-center group">
                                    <span>Book now</span>
                                    <svg class="w-6 h-6 group-hover:translate-x-1 duration-300" viewBox="0 0 24 24"
                                        fill="none">
                                        <path d="M5 12h14m-7-7l7 7-7 7" stroke="currentColor" stroke-width="2" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white rounded-[20px] shadow-[0_2px_8px_rgba(0,0,0,0.08)] overflow-hidden ">
                            <div class="relative">
                                <img loading="lazy" src="images/swipe1.jpg" alt="Luxor Temple"
                                    class="w-full h-[250px] object-cover">
                                <!-- Card badges -->
                                <div class="absolute top-4 left-4">
                                    <span
                                        class="bg-[#C8EC1F] text-[#006778] px-3 py-1 rounded-full text-xs font-medium ">Best
                                        seller</span>

                                </div>
                                <div class="absolute top-4 right-4">
                                    <span
                                        class="bg-white/80 backdrop-blur-[2px] px-2 py-0.5 rounded-full flex items-center gap-1">
                                        <svg width="14" height="14" viewBox="0 0 20 20" fill="#FFD700">
                                            <path
                                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                        </svg>
                                        <span class="text-xs">4.8</span>
                                    </span>
                                </div>
                                <!-- Image counter -->
                                <div class="absolute bottom-4 right-4">
                                    <div
                                        class=" w-20 py-1 rounded-xl bg-gray-100 opacity-75 flex items-center justify-around">
                                        <button class="prev hover:-translate-x-1 duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" class=" w-[14px] md:w-[18px]"
                                                viewBox="0 0 14 14" fill="none">
                                                <path d="M3.4834 6.5L7.84726 10.3184" stroke="#074C56"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M3.4834 6.5L7.84726 2.68162" stroke="#074C56"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                        <span class="text-[#074C56] text-sm md:text-base">1/4</span>
                                        <button class="next hover:translate-x-1 duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" class=" w-[14px] md:w-[18px]"
                                                viewBox="0 0 14 14" fill="none">
                                                <path d="M10.5166 6.5L6.15274 10.3184" stroke="#074C56"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M10.5166 6.5L6.15274 2.68162" stroke="#074C56"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="p-6">
                                <h3 class="text-xl font-semibold mb-2">Luxor Trips</h3>
                                <p class="text-gray-600 text-sm mb-6">A private visit to Queen Nefertari's Tomb, known
                                    as the with an expert Egyptologist as the guide.</p>

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
                                <a href="#" class="text-[#006778] font-medium flex justify-end items-center group">
                                    <span>Book now</span>
                                    <svg class="w-6 h-6 group-hover:translate-x-1 duration-300" viewBox="0 0 24 24"
                                        fill="none">
                                        <path d="M5 12h14m-7-7l7 7-7 7" stroke="currentColor" stroke-width="2" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white rounded-[20px] shadow-[0_2px_8px_rgba(0,0,0,0.08)] overflow-hidden ">
                            <div class="relative">
                                <img loading="lazy" src="images/swipe1.jpg" alt="Luxor Temple"
                                    class="w-full h-[250px] object-cover">
                                <!-- Card badges -->
                                <div class="absolute top-4 left-4">
                                    <span
                                        class="bg-[#C8EC1F] text-[#006778] px-3 py-1 rounded-full text-xs font-medium ">Best
                                        seller</span>

                                </div>
                                <div class="absolute top-4 right-4">
                                    <span
                                        class="bg-white/80 backdrop-blur-[2px] px-2 py-0.5 rounded-full flex items-center gap-1">
                                        <svg width="14" height="14" viewBox="0 0 20 20" fill="#FFD700">
                                            <path
                                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                        </svg>
                                        <span class="text-xs">4.8</span>
                                    </span>
                                </div>
                                <!-- Image counter -->
                                <div class="absolute bottom-4 right-4">
                                    <div
                                        class=" w-20 py-1 rounded-xl bg-gray-100 opacity-75 flex items-center justify-around">
                                        <button class="prev hover:-translate-x-1 duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" class=" w-[14px] md:w-[18px]"
                                                viewBox="0 0 14 14" fill="none">
                                                <path d="M3.4834 6.5L7.84726 10.3184" stroke="#074C56"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M3.4834 6.5L7.84726 2.68162" stroke="#074C56"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                        <span class="text-[#074C56] text-sm md:text-base">1/4</span>
                                        <button class="next hover:translate-x-1 duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" class=" w-[14px] md:w-[18px]"
                                                viewBox="0 0 14 14" fill="none">
                                                <path d="M10.5166 6.5L6.15274 10.3184" stroke="#074C56"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M10.5166 6.5L6.15274 2.68162" stroke="#074C56"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="p-6">
                                <h3 class="text-xl font-semibold mb-2">Luxor Trips</h3>
                                <p class="text-gray-600 text-sm mb-6">A private visit to Queen Nefertari's Tomb, known
                                    as the with an expert Egyptologist as the guide.</p>

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
                                <a href="#" class="text-[#006778] font-medium flex justify-end items-center group">
                                    <span>Book now</span>
                                    <svg class="w-6 h-6 group-hover:translate-x-1 duration-300" viewBox="0 0 24 24"
                                        fill="none">
                                        <path d="M5 12h14m-7-7l7 7-7 7" stroke="currentColor" stroke-width="2" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>



                </div>
                <!-- Navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <!-- End Single tours Section -->
    </div>
    <?php include "componets/footer.php" ?>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Reusable function to initialize Swiper instances
            const initializeSwiper = (selector, config) => {
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
            };
            // Initialize Swiper instances
            initializeSwiper('.top-destinations-swiper', {
                breakpoints: {
                    768: {
                        slidesPerView: 1,
                    },
                    1024: {
                        slidesPerView: 1.4,
                    },
                }
            });
            initializeSwiper('.single-tours-swiper');
        });
    </script>
</body>

</html>