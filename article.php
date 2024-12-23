<?php
// destinations.php
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
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/font-2.css">
    <title>Article</title>
    <meta name="description"
        content="Dreaming of a getaway within Egypt ? Discover unbeatable destinations across egypt , Whether you're craving the golden beaches of the Red Sea, the serene beauty of the Nile, or the vibrant culture of Cairo, secure your spot now !">

    <style>
        .hero {
            background-image: url('images/article-top.jpg');
            background-size: cover;
            background-position: center;
            height: 354px;
        }

        .swiper-pagination .swiper-pagination-bullet {
            width: 19px;
            height: 8px;
            border-radius: 5px;
            opacity: 1;
            background-color: #FBFEF3 !important;

        }

        .related-articles-swiper .swiper-pagination .swiper-pagination-bullet {
            background-color: #C1D5D8 !important;

        }



        .swiper-pagination .swiper-pagination-bullet-active,
        .related-articles-swiper .swiper-pagination .swiper-pagination-bullet-active {
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
    </style>
</head>

<body>
    <?php include "componets/navbar.php" ?>

    <!-- article Hero Section -->
    <section class="hidden md:block hero py-28"></section>
    <section class="max-w-7xl px-4 sm:px-6 lg:px-0 mx-auto relative my-12">
        <span class="bg-[<?= $_yellow ?>] text-[<?= $_primary ?>] px-3 py-1 rounded-full text-xs font-medium ">Travel
            tips</span>
        <h3 class="text-xl md:text-4xl font-semibold my-2 text-[<?= $_primary ?>]">The Ultimate Guide to Exploring the
            Land of Pharaohs</h3>
        <p class="text-gray-600 text-sm font-weight-300">
            <span>26 August 2024</span>
            <span>15:30 AM</span>
        </p>
        <section class="md:hidden block hero py-28 mt-4"></section>

        <p class="text-gray-600 text-sm md:text-base leading-7 mb-6 mt-4">Lorem ipsum dolor sit amet consectetur. Dolor
            at sed purus
            sit lectus rhoncus neque. Sed purus quam vel proin. Massa suspendisse massa et aliquam. Volutpat et leo sit
            blandit fringilla volutpat. Arcu molestie bibendum proin amet et egestas. Pellentesque etiam volutpat risus
            sit cras tempor tristique Lorem ipsum dolor sit amet consectetur. Dolor at sed purus sit lectus rhoncus
            neque. Sed purus quam vel proin. Massa suspendisse massa et aliquam. Volutpat et leo sit blandit fringilla
            volutpat. Arcu molestie bibendum proin amet et egestas. Pellentesque etiam volutpat risus sit cras tempor
            tristique.
        </p>
        <p class="text-gray-600 text-sm md:text-base leading-7 mb-8 mt-2">Lorem ipsum dolor sit amet consectetur. Dolor
            at sed purus
            sit lectus rhoncus neque. Sed purus quam vel proin. Massa suspendisse massa et aliquam. Volutpat et leo sit
            blandit fringilla volutpat. Arcu molestie bibendum proin amet et egestas. Pellentesque etiam volutpat risus
            sit cras tempor tristique Lorem ipsum dolor sit amet consectetur. Dolor at sed purus sit lectus rhoncus
            neque. Sed purus quam vel proin. Massa suspendisse massa et aliquam. Volutpat et leo sit blandit fringilla
            volutpat. Arcu molestie bibendum proin amet et egestas. Pellentesque etiam volutpat risus sit cras tempor
            tristique.
        </p>
        <div>
            <h3 class="text-xl md:text-2xl font-semibold my-4 text-[<?= $_primary ?>]">The Ultimate Guide to Exploring
                the Land of Pharaohs</h3>
            <img loading="lazy" src="images/article-aswan.jpg" alt="aswan"
                class="w-full h-[350px] object-cover rounded-lg mb-6">
            <p class="text-gray-600 text-sm md:text-base leading-7 mb-6 mt-2">Lorem ipsum dolor sit amet consectetur.
                Dolor at sed purus
                sit lectus rhoncus neque. Sed purus quam vel proin. Massa suspendisse massa et aliquam. Volutpat et leo
                sit
                blandit fringilla volutpat. Arcu molestie bibendum proin amet et egestas. Pellentesque etiam volutpat
                risus
                sit cras tempor tristique Lorem ipsum dolor sit amet consectetur. Dolor at sed purus sit lectus rhoncus
                neque. Sed purus quam vel proin. Massa suspendisse massa et aliquam. Volutpat et leo sit blandit
                fringilla
                volutpat. Arcu molestie bibendum proin amet et egestas. Pellentesque etiam volutpat risus sit cras
                tempor
                tristique.
            </p>
            <p class="text-gray-600 text-sm md:text-base leading-7 mb-6 mt-2">Lorem ipsum dolor sit amet consectetur.
                Dolor at sed purus
                sit lectus rhoncus neque. Sed purus quam vel proin. Massa suspendisse massa et aliquam. Volutpat et leo
                sit
                blandit fringilla volutpat. Arcu molestie bibendum proin amet et egestas. Pellentesque etiam volutpat
                risus
                sit cras tempor tristique Lorem ipsum dolor sit amet consectetur. Dolor at sed purus sit lectus rhoncus
                neque. Sed purus quam vel proin. Massa suspendisse massa et aliquam. Volutpat et leo sit blandit
                fringilla
                volutpat. Arcu molestie bibendum proin amet et egestas. Pellentesque etiam volutpat risus sit cras
                tempor
                tristique.
            </p>
        </div>
        <div>
            <h3 class="text-xl md:text-2xl font-semibold my-4 text-[<?= $_primary ?>]">The Ultimate Guide to Exploring
                the Land of Pharaohs</h3>
            <img loading="lazy" src="images/article-aswan.jpg" alt="aswan"
                class="w-full h-[350px] object-cover rounded-lg mb-6">
            <p class="text-gray-600 text-sm md:text-base leading-7 mb-6 mt-2">Lorem ipsum dolor sit amet consectetur.
                Dolor at sed purus
                sit lectus rhoncus neque. Sed purus quam vel proin. Massa suspendisse massa et aliquam. Volutpat et leo
                sit
                blandit fringilla volutpat. Arcu molestie bibendum proin amet et egestas. Pellentesque etiam volutpat
                risus
                sit cras tempor tristique Lorem ipsum dolor sit amet consectetur. Dolor at sed purus sit lectus rhoncus
                neque. Sed purus quam vel proin. Massa suspendisse massa et aliquam. Volutpat et leo sit blandit
                fringilla
                volutpat. Arcu molestie bibendum proin amet et egestas. Pellentesque etiam volutpat risus sit cras
                tempor
                tristique.
            </p>
            <p class="text-gray-600 text-sm md:text-base leading-7 mb-6 mt-2">Lorem ipsum dolor sit amet consectetur.
                Dolor at sed purus
                sit lectus rhoncus neque. Sed purus quam vel proin. Massa suspendisse massa et aliquam. Volutpat et leo
                sit
                blandit fringilla volutpat. Arcu molestie bibendum proin amet et egestas. Pellentesque etiam volutpat
                risus
                sit cras tempor tristique Lorem ipsum dolor sit amet consectetur. Dolor at sed purus sit lectus rhoncus
                neque. Sed purus quam vel proin. Massa suspendisse massa et aliquam. Volutpat et leo sit blandit
                fringilla
                volutpat. Arcu molestie bibendum proin amet et egestas. Pellentesque etiam volutpat risus sit cras
                tempor
                tristique.
            </p>
        </div>

    </section>

    <!-- Start Related Trips Section -->
    <section class="bg-[#46818A] py-12">
        <div class="max-w-7xl px-4 sm:px-6 lg:px-0 mx-auto relative">
            <div class="absolute top-0 right-10">
                <img loading="lazy" src="images/icons/airplane.svg" alt="airplane icon" width="169" height="169" />
            </div>
            <div class="pb-6">
                <h3 class="font-['Berkshire_Swash'] text-[<?= $_yellow ?>] text-[26px] md:text-[40px] pb-4">Related
                    Trips</h3>
                <p class="hiddden md:block font-light text-white text-[14px] md:text-[16px]">
                    Dreaming of a getaway within Egypt ? Discover unbeatable destinations across egypt
                </p>
            </div>
            <div class="swiper related-trips-swiper pb-12 md:pb-20">
                <div class="swiper-wrapper">
                    <div class="swiper-slide card-images">
                        <div class="bg-white rounded-[20px] shadow-[0_2px_8px_rgba(0,0,0,0.08)] overflow-hidden ">
                            <div class="relative">
                                <div class="overlay"></div>
                                <img loading="lazy" src="images/swipe1.jpg" alt="Luxor Temple"
                                    class="w-full h-[250px] object-cover"
                                    data-images='["images/swipe1.jpg", "images/swipe2.jpg", "images/swipe3.jpg"]'>
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
                                        <span
                                            class="text-[<?= $_primary_two ?>] text-xs md:text-base counter-view">1/1</span>
                                        <button class="next hover:translate-x-1 duration-300">
                                            <img loading="lazy" src="images/icons/arrow-right-w.svg"
                                                alt="Arrow right icon"
                                                class="group-hover:translate-x-1 duration-300 w-[14px] md:w-[18px]" />

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
                                <a href="single-tour.php"
                                    class="text-[<?= $_primary ?>] font-medium flex justify-end items-center group gap-2">
                                    <span class="text-sm md:text-base">Book now</span>
                                    <img loading="lazy" src="images/icons/arrow-right.svg" alt="Arrow right icon"
                                        class="group-hover:translate-x-1 duration-300" width="30" height="30" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card-images">
                        <div class="bg-white rounded-[20px] shadow-[0_2px_8px_rgba(0,0,0,0.08)] overflow-hidden ">
                            <div class="relative">
                                <div class="overlay"></div>
                                <img loading="lazy" src="images/swipe1.jpg" alt="Luxor Temple"
                                    class="w-full h-[250px] object-cover"
                                    data-images='["images/swipe1.jpg", "images/swipe2.jpg", "images/swipe3.jpg"]'>
                                <!-- Card badges -->
                                <div class="absolute top-4 left-4">
                                    <span
                                        class="bg-[<?= $_yellow ?>] text-[<?= $_primary ?>] px-3 py-1 rounded-full text-xs font-medium">NEW</span>

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
                                        <span
                                            class="text-[<?= $_primary_two ?>] text-xs md:text-base counter-view">1/1</span>
                                        <button class="next hover:translate-x-1 duration-300">
                                            <img loading="lazy" src="images/icons/arrow-right-w.svg"
                                                alt="Arrow right icon"
                                                class="group-hover:translate-x-1 duration-300 w-[14px] md:w-[18px]" />

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
                                <a href="single-tour.php"
                                    class="text-[<?= $_primary ?>] font-medium flex justify-end items-center group gap-2">
                                    <span class="text-sm md:text-base">Book now</span>
                                    <img loading="lazy" src="images/icons/arrow-right.svg" alt="Arrow right icon"
                                        class="group-hover:translate-x-1 duration-300" width="30" height="30" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card-images">
                        <div class="bg-white rounded-[20px] shadow-[0_2px_8px_rgba(0,0,0,0.08)] overflow-hidden ">
                            <div class="relative">
                                <div class="overlay"></div>
                                <img loading="lazy" src="images/swipe1.jpg" alt="Luxor Temple"
                                    class="w-full h-[250px] object-cover"
                                    data-images='["images/swipe1.jpg", "images/swipe2.jpg", "images/swipe3.jpg"]'>
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
                                        <span
                                            class="text-[<?= $_primary_two ?>] text-xs md:text-base counter-view">1/1</span>
                                        <button class="next hover:translate-x-1 duration-300">
                                            <img loading="lazy" src="images/icons/arrow-right-w.svg"
                                                alt="Arrow right icon"
                                                class="group-hover:translate-x-1 duration-300 w-[14px] md:w-[18px]" />

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
                                <a href="single-tour.php"
                                    class="text-[<?= $_primary ?>] font-medium flex justify-end items-center group gap-2">
                                    <span class="text-sm md:text-base">Book now</span>
                                    <img loading="lazy" src="images/icons/arrow-right.svg" alt="Arrow right icon"
                                        class="group-hover:translate-x-1 duration-300" width="30" height="30" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card-images">
                        <div class="bg-white rounded-[20px] shadow-[0_2px_8px_rgba(0,0,0,0.08)] overflow-hidden ">
                            <div class="relative">
                                <div class="overlay"></div>
                                <img loading="lazy" src="images/swipe1.jpg" alt="Luxor Temple"
                                    class="w-full h-[250px] object-cover"
                                    data-images='["images/swipe1.jpg", "images/swipe2.jpg", "images/swipe3.jpg"]'>
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
                                        <span
                                            class="text-[<?= $_primary_two ?>] text-xs md:text-base counter-view">1/1</span>
                                        <button class="next hover:translate-x-1 duration-300">
                                            <img loading="lazy" src="images/icons/arrow-right-w.svg"
                                                alt="Arrow right icon"
                                                class="group-hover:translate-x-1 duration-300 w-[14px] md:w-[18px]" />

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
                <!-- Navigation buttons -->
                <div class="md:hidden flex  swiper-button-prev"></div>
                <div class="md:hidden flex  swiper-button-next"></div>

                <!-- Pagination -->
                <div class="hidden md:block swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- End Related Trips Section -->


    <!-- Start Related Articles Section -->
    <section class="max-w-7xl px-4 sm:px-6 lg:px-0 mx-auto relative my-12">
        <h3 class="text-[<?= $_primary ?>] text-[26px] md:text-[40px] pb-4 font-semibold">Related
            Articles</h3>
        <div class="swiper related-articles-swiper pb-12 md:pb-20">

            <div class="swiper-wrapper">
                <div
                    class="swiper-slide bg-[#F4F8F3] rounded-[20px] shadow-[0_2px_8px_rgba(0,0,0,0.08)] overflow-hidden ">
                    <div class="relative">
                        <img loading="lazy" src="images/destinations/blog.jpg" alt="Luxor Temple"
                            class="w-full h-[250px] object-cover">
                    </div>
                    <div class="p-6">
                        <span
                            class="bg-[<?= $_yellow ?>] text-[<?= $_primary ?>] px-3 py-1 rounded-full text-xs font-medium ">Travel
                            tips</span>

                        <h3 class="text-2xl font-semibold my-2">The Ultimate Guide to Exploring the Land of Pharaohs
                        </h3>
                        <p class="text-gray-600 text-sm font-weight-300">
                            <span>26 August 2024</span>
                            <span>15:30 AM</span>
                        </p>
                    </div>
                </div>
                <div
                    class="swiper-slide bg-[#F4F8F3] rounded-[20px] shadow-[0_2px_8px_rgba(0,0,0,0.08)] overflow-hidden ">
                    <div class="relative">
                        <img loading="lazy" src="images/destinations/blog.jpg" alt="Luxor Temple"
                            class="w-full h-[250px] object-cover">
                    </div>
                    <div class="p-6">
                        <span
                            class="bg-[<?= $_yellow ?>] text-[<?= $_primary ?>] px-3 py-1 rounded-full text-xs font-medium ">Travel
                            tips</span>

                        <h3 class="text-2xl font-semibold my-2">The Ultimate Guide to Exploring the Land of Pharaohs
                        </h3>
                        <p class="text-gray-600 text-sm font-weight-300">
                            <span>26 August 2024</span>
                            <span>15:30 AM</span>
                        </p>
                    </div>
                </div>
                <div
                    class="swiper-slide bg-[#F4F8F3] rounded-[20px] shadow-[0_2px_8px_rgba(0,0,0,0.08)] overflow-hidden ">
                    <div class="relative">
                        <img loading="lazy" src="images/destinations/blog.jpg" alt="Luxor Temple"
                            class="w-full h-[250px] object-cover">
                    </div>
                    <div class="p-6">
                        <span
                            class="bg-[<?= $_yellow ?>] text-[<?= $_primary ?>] px-3 py-1 rounded-full text-xs font-medium ">Travel
                            tips</span>

                        <h3 class="text-2xl font-semibold my-2">The Ultimate Guide to Exploring the Land of Pharaohs
                        </h3>
                        <p class="text-gray-600 text-sm font-weight-300">
                            <span>26 August 2024</span>
                            <span>15:30 AM</span>
                        </p>
                    </div>
                </div>
                <div
                    class="swiper-slide bg-[#F4F8F3] rounded-[20px] shadow-[0_2px_8px_rgba(0,0,0,0.08)] overflow-hidden ">
                    <div class="relative">
                        <img loading="lazy" src="images/destinations/blog.jpg" alt="Luxor Temple"
                            class="w-full h-[250px] object-cover">
                    </div>
                    <div class="p-6">
                        <span
                            class="bg-[<?= $_yellow ?>] text-[<?= $_primary ?>] px-3 py-1 rounded-full text-xs font-medium ">Travel
                            tips</span>

                        <h3 class="text-2xl font-semibold my-2">The Ultimate Guide to Exploring the Land of Pharaohs
                        </h3>
                        <p class="text-gray-600 text-sm font-weight-300">
                            <span>26 August 2024</span>
                            <span>15:30 AM</span>
                        </p>
                    </div>
                </div>
                <div
                    class="swiper-slide bg-[#F4F8F3] rounded-[20px] shadow-[0_2px_8px_rgba(0,0,0,0.08)] overflow-hidden ">
                    <div class="relative">
                        <img loading="lazy" src="images/destinations/blog.jpg" alt="Luxor Temple"
                            class="w-full h-[250px] object-cover">
                    </div>
                    <div class="p-6">
                        <span
                            class="bg-[<?= $_yellow ?>] text-[<?= $_primary ?>] px-3 py-1 rounded-full text-xs font-medium ">Travel
                            tips</span>

                        <h3 class="text-2xl font-semibold my-2">The Ultimate Guide to Exploring the Land of Pharaohs
                        </h3>
                        <p class="text-gray-600 text-sm font-weight-300">
                            <span>26 August 2024</span>
                            <span>15:30 AM</span>
                        </p>
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
    <!-- End Related Articles Section -->

    <?php include "componets/footer.php" ?>
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            // Reusable function to initialize Swiper instances
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

            initializeSwiper('.related-trips-swiper');
            initializeSwiper('.related-articles-swiper');
        });
    </script>
    <script defer src="js/image-switcher.js"></script>

</body>

</html>