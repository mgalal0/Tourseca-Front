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
    <title>City</title>
    <meta name="description"
        content="Dreaming of a getaway within Egypt ? Discover unbeatable destinations across egypt , Whether you're craving the golden beaches of the Red Sea, the serene beauty of the Nile, or the vibrant culture of Cairo, secure your spot now !">

    <style>
        .hero {
            background-image: url('images/city-top.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 354px;
        }

        .bg-image {
            background-image: url('images/lock-sun.jpg');
            background-size: cover;
            background-position: center;
            border-radius: 20px;
            /* height: 354px; */
        }

        .bg-image .swiper-slide {
            width: 100% !important;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: hwb(0deg 0% 100% / 30%);

        }

        .background-container {
            background: linear-gradient(180deg, #276C76 0%, #BAD0B4 70%, #FFFFFF 100%);
            min-height: 100vh;
            position: relative;
            overflow: hidden;
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
                <?= $_yellow ?>
                !important;
        }

        .swiper-button-prev,
        .swiper-button-next {
            display: flex;
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
            .bg-image {
                background: transparent !important;
                height: auto;
            }

            .swiper-pagination .swiper-pagination-bullet {
                background-color: #EAF2E8 !important;
            }

            .swiper-pagination .swiper-pagination-bullet-active {
                width: 25px;
                background-color:
                    <?= $_yellow ?>
                    !important;

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
    <section class="hidden md:block hero py-28 relative">
        <div class="overlay bg-[#074C564A] flex justify-center items-center text-white text-[40px] md:text-[96px]"
            style="font-family: 'Berkshire Swash', cursive;">Cairo</div>
    </section>
    <div class="background-container">

        <section class="max-w-7xl px-4 sm:px-6 lg:px-0 mx-auto relative my-12">

            <h3 class="text-xl md:text-4xl font-semibold my-2 text-[<?= $_yellow ?>]">A Blend of Ancient and Modern</h3>

            <p class="text-[#FDFDFD] text-sm md:text-base leading-7 mb-6 mt-4">Cairo, Egypt’s sprawling capital, is a
                city where ancient history and modern life blend seamlessly. Known for its captivating energy, Cairo is
                a dynamic mix of old-world charm and contemporary vibrance. Visitors find bustling streets lined with
                historic architecture alongside modern cafes, and traditional markets amidst skyscrapers. Cairo’s unique
                character is rooted in its long history and rich cultural heritage, making it an intriguing destination
                for any traveler. </p>

            <div class="flex justify-between items-center pb-6">
                <h3 class="text-[<?= $_yellow ?>] text-[26px] md:text-[36px]">Cairo tours</h3>
                <a href="single-tour.php" class=" text-[16px] text-[<?= $_yellow ?>] relative view-all">See All</a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="card-images">
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
                                        <img loading="lazy" src="images/icons/arrow-left-w.svg" alt="Arrow left icon"
                                            class="group-hover:translate-x-1 duration-300 w-[14px] md:w-[18px]" />
                                    </button>
                                    <span
                                        class="text-[<?= $_primary_two ?>] text-xs md:text-base counter-view">1/1</span>
                                    <button class="next hover:translate-x-1 duration-300">
                                        <img loading="lazy" src="images/icons/arrow-right-w.svg" alt="Arrow right icon"
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
                                <img loading="lazy" src="images/icons/time.svg" alt="time icon" width="20" height="20">
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
                <div class="card-images">
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
                                        <img loading="lazy" src="images/icons/arrow-left-w.svg" alt="Arrow left icon"
                                            class="group-hover:translate-x-1 duration-300 w-[14px] md:w-[18px]" />
                                    </button>
                                    <span
                                        class="text-[<?= $_primary_two ?>] text-xs md:text-base counter-view">1/1</span>
                                    <button class="next hover:translate-x-1 duration-300">
                                        <img loading="lazy" src="images/icons/arrow-right-w.svg" alt="Arrow right icon"
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
                                <img loading="lazy" src="images/icons/time.svg" alt="time icon" width="20" height="20">
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
                <div class="card-images">
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
                                        <img loading="lazy" src="images/icons/arrow-left-w.svg" alt="Arrow left icon"
                                            class="group-hover:translate-x-1 duration-300 w-[14px] md:w-[18px]" />
                                    </button>
                                    <span
                                        class="text-[<?= $_primary_two ?>] text-xs md:text-base counter-view">1/1</span>
                                    <button class="next hover:translate-x-1 duration-300">
                                        <img loading="lazy" src="images/icons/arrow-right-w.svg" alt="Arrow right icon"
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
                                <img loading="lazy" src="images/icons/time.svg" alt="time icon" width="20" height="20">
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
                <div class="card-images">
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
                                        <img loading="lazy" src="images/icons/arrow-left-w.svg" alt="Arrow left icon"
                                            class="group-hover:translate-x-1 duration-300 w-[14px] md:w-[18px]" />
                                    </button>
                                    <span
                                        class="text-[<?= $_primary_two ?>] text-xs md:text-base counter-view">1/1</span>
                                    <button class="next hover:translate-x-1 duration-300">
                                        <img loading="lazy" src="images/icons/arrow-right-w.svg" alt="Arrow right icon"
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
                                <img loading="lazy" src="images/icons/time.svg" alt="time icon" width="20" height="20">
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
                <div class="card-images">
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
                                        <img loading="lazy" src="images/icons/arrow-left-w.svg" alt="Arrow left icon"
                                            class="group-hover:translate-x-1 duration-300 w-[14px] md:w-[18px]" />
                                    </button>
                                    <span
                                        class="text-[<?= $_primary_two ?>] text-xs md:text-base counter-view">1/1</span>
                                    <button class="next hover:translate-x-1 duration-300">
                                        <img loading="lazy" src="images/icons/arrow-right-w.svg" alt="Arrow right icon"
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
                                <img loading="lazy" src="images/icons/time.svg" alt="time icon" width="20" height="20">
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

        </section>
    </div>

    <!-- Start Tourist attractions in Cairo -->
    <section class="max-w-7xl px-4 sm:px-6 lg:px-0 mx-auto relative my-16">
        <h2 class="text-[#05363D] text-[26px] md:text-[36px]">Tourist attractions in Cairo</h2>
        <div class="grid grid-cols-2 gap-4 md:grid-cols-4 mt-4">
            <div class="col-span-4 md:col-span-1 col-span-1 grid grid-cols-2 md:grid-cols-1 gap-4">
                <div class="card rounded-[20px] overflow-hidden relative ">
                    <div class="overlay"></div>
                    <img loading="lazy" src="images/destinations/great-pyramids-of-giza.jpg"
                        alt="great-pyramids-of-giza" class="w-full h-[150px] md:h-[300px] object-cover">
                    <div class="absolute bottom-4 left-[50%] transform -translate-x-1/2">
                        <p class="text-white text-sm md:text-base">Great Pyramids of Giza</p>
                    </div>
                </div>
                <div class="card rounded-[20px] overflow-hidden relative ">
                    <div class="overlay"></div>
                    <img loading="lazy" src="images/destinations/egyptian-museum.jpg" alt="egyptian-museum"
                        class="w-full h-[150px] md:h-[300px] object-cover">
                    <div class="absolute bottom-4 left-0 w-full text-center">
                        <p class="text-white text-sm md:text-base">Egyptian Museum</p>
                    </div>
                </div>
            </div>
            <div class="col-span-4 md:col-span-1 card rounded-[20px] overflow-hidden relative ">
                <div class="overlay"></div>
                <img loading="lazy" src="images/single-tour/nile.jpg" alt="nile" class="w-full h-[100%]  object-cover">
                <div class="absolute bottom-4 left-0 w-full text-center">
                    <p class="text-white text-sm md:text-base">Cairo Tower</p>
                </div>
            </div>
            <div class="col-span-4 md:col-span-2 col-span-1 grid grid-cols-2 md:grid-cols-1 gap-4">
                <div class="card rounded-[20px] overflow-hidden relative ">
                    <div class="overlay"></div>
                    <img loading="lazy" src="images/destinations/great-pyramids-of-giza.jpg" alt="khan-el-khalili"
                        class="w-full h-[150px] md:h-[300px] object-cover">
                    <div class="absolute bottom-4 left-0 w-full text-center">
                        <p class="text-white text-sm md:text-base">Great Pyramids of Giza</p>
                    </div>
                </div>
                <div class="card rounded-[20px] overflow-hidden relative ">
                    <div class="overlay"></div>
                    <img loading="lazy" src="images/destinations/khan-el-khalili.jpg" alt="khan-el-khalili"
                        class="w-full h-[150px] md:h-[300px] object-cover">
                    <div class="absolute bottom-4 left-0 w-full text-center">
                        <p class="text-white text-sm md:text-base">Khan El Khalili</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Tourist attractions in Cairo -->
    <!-- Start Nearby Destinations -->
    <section class="max-w-7xl px-4 sm:px-6 lg:px-0 mx-auto relative my-16">
        <h2 class="text-[#05363D] text-[26px] md:text-[36px]">Nearby Destinations</h2>
        <div class="grid grid-cols-1 gap-4 md:grid-cols-3 mt-4">
            <div class="card rounded-[20px] overflow-hidden relative ">
                <div class="overlay"></div>
                <img loading="lazy" src="images/top/hurgada.jpg" alt="sphinx"
                    class="w-full h-[150px] md:h-[300px] object-cover">
                <div class="absolute bottom-12 left-4 w-full">
                    <span class="bg-[#DCFE83] text-[<?= $_primary ?>] px-3 py-1 rounded-full text-xs font-medium ">8
                        trips</span>
                </div>
                <div class="absolute bottom-4 left-4 w-full">
                    <p class="text-white text-xl font-semibold flex justify-start items-center gap-2">
                        <span>Hurgada</span>
                        <svg width="28" height="28" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M26.2861 16H5.7147" stroke="#FFF" stroke-width="3" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M26.2861 16L19.013 22.7882" stroke="#FFF" stroke-width="3" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M26.2861 16L19.013 9.21177" stroke="#FFF" stroke-width="3" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>

                    </p>
                </div>
            </div>
            <div class="card rounded-[20px] overflow-hidden relative ">
                <div class="overlay"></div>
                <img loading="lazy" src="images/alex.jpg" alt="sphinx"
                    class="w-full h-[150px] md:h-[300px] object-cover">
                <div class="absolute bottom-12 left-4 w-full">
                    <span class="bg-[#DCFE83] text-[<?= $_primary ?>] px-3 py-1 rounded-full text-xs font-medium ">8
                        trips</span>
                </div>
                <div class="absolute bottom-4 left-4 w-full">
                    <p class="text-white text-xl font-semibold flex justify-start items-center gap-2">
                        <span>Alexandria</span>
                        <svg width="28" height="28" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M26.2861 16H5.7147" stroke="#FFF" stroke-width="3" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M26.2861 16L19.013 22.7882" stroke="#FFF" stroke-width="3" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M26.2861 16L19.013 9.21177" stroke="#FFF" stroke-width="3" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>

                    </p>
                </div>
            </div>
            <div class="card rounded-[20px] overflow-hidden relative ">
                <div class="overlay"></div>
                <img loading="lazy" src="images/top/siwa.jpg" alt="sphinx"
                    class="w-full h-[150px] md:h-[300px] object-cover">
                <div class="absolute bottom-12 left-4 w-full">
                    <span class="bg-[#DCFE83] text-[<?= $_primary ?>] px-3 py-1 rounded-full text-xs font-medium ">8
                        trips</span>
                </div>
                <div class="absolute bottom-4 left-4 w-full">
                    <p class="text-white text-xl font-semibold flex justify-start items-center gap-2">
                        <span>Siwa Oasis</span>
                        <svg width="28" height="28" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M26.2861 16H5.7147" stroke="#FFF" stroke-width="3" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M26.2861 16L19.013 22.7882" stroke="#FFF" stroke-width="3" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M26.2861 16L19.013 9.21177" stroke="#FFF" stroke-width="3" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>

                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Nearby Destinations -->
    <!-- Start What Our Clients says About Cairo ? -->
    <section class="max-w-7xl px-4 sm:px-6 lg:px-0 mx-auto relative my-16">
        <h2 class="text-[#05363D] text-[26px] md:text-[36px]">What Our Clients says About Cairo ?</h2>
        <div class="bg-image p-0 md:p-10 mt-4 flex flex-col md:flex-row justify-start">
            <div class="swiper blog-swiper w-full md:w-5/12 ms-0 me-auto">
                <div class="swiper-wrapper pb-20 md:pb-0">
                    <div class="swiper-slide bg-[#F4F8F3] opacity-75 shadow-lg rounded-lg p-6 border border-gray-200">
                        <!-- Star Rating -->
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.452a1 1 0 00-.364 1.118l1.286 3.967c.3.921-.755 1.688-1.54 1.118l-3.375-2.452a1 1 0 00-1.175 0l-3.375 2.452c-.785.57-1.84-.197-1.54-1.118l1.286-3.967a1 1 0 00-.364-1.118L2.075 9.394c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.967z" />
                            </svg>
                            <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.452a1 1 0 00-.364 1.118l1.286 3.967c.3.921-.755 1.688-1.54 1.118l-3.375-2.452a1 1 0 00-1.175 0l-3.375 2.452c-.785.57-1.84-.197-1.54-1.118l1.286-3.967a1 1 0 00-.364-1.118L2.075 9.394c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.967z" />
                            </svg>
                            <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.452a1 1 0 00-.364 1.118l1.286 3.967c.3.921-.755 1.688-1.54 1.118l-3.375-2.452a1 1 0 00-1.175 0l-3.375 2.452c-.785.57-1.84-.197-1.54-1.118l1.286-3.967a1 1 0 00-.364-1.118L2.075 9.394c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.967z" />
                            </svg>
                            <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.452a1 1 0 00-.364 1.118l1.286 3.967c.3.921-.755 1.688-1.54 1.118l-3.375-2.452a1 1 0 00-1.175 0l-3.375 2.452c-.785.57-1.84-.197-1.54-1.118l1.286-3.967a1 1 0 00-.364-1.118L2.075 9.394c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.967z" />
                            </svg>
                            <svg class="w-6 h-6 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.452a1 1 0 00-.364 1.118l1.286 3.967c.3.921-.755 1.688-1.54 1.118l-3.375-2.452a1 1 0 00-1.175 0l-3.375 2.452c-.785.57-1.84-.197-1.54-1.118l1.286-3.967a1 1 0 00-.364-1.118L2.075 9.394c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.967z" />
                            </svg>
                        </div>
                        <!-- Travel Info -->
                        <div class="flex items-start flex-col">
                            <h2 class="text-2xl font-bold mt-4">Trip of a lifetime</h2>
                            <span
                                class="inline-block bg-green-100 text-green-800 text-xs md:text-sm font-medium px-3 py-1 rounded-full">
                                Traveled in : Oct 2024 on <span class="font-semibold">Cairo single tour</span>
                            </span>
                        </div>
                        <!-- Description -->
                        <p class="text-gray-700 mt-3 text-sm md:text-base">
                            Egypt's bustling capital, offers an unparalleled blend of ancient wonders and vibrant modern
                            life. From the awe-inspiring Pyramids of Giza and the Sphinx to the lively bazaars and rich
                            cultural heritage of Islamic Cairo, the city immerses travelers in history and unforgettable
                            experiences.
                        </p>

                        <!-- User Section -->
                        <div class="flex items-center mt-6">
                            <img src="images/user-3.png" alt="User profile"
                                class="w-12 h-12 rounded-full border border-gray-200">
                            <div class="ml-3">
                                <p class="font-bold">Theresa Conroy</p>
                                <p class="text-sm text-gray-500 flex items-center gap-1">
                                    <img loading="lazy" src="images/icons/location.svg" alt="Location icon" />
                                    <span>Milan, Italy</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide bg-[#F4F8F3] opacity-75 shadow-lg rounded-lg p-6 border border-gray-200">
                        <!-- Star Rating -->
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.452a1 1 0 00-.364 1.118l1.286 3.967c.3.921-.755 1.688-1.54 1.118l-3.375-2.452a1 1 0 00-1.175 0l-3.375 2.452c-.785.57-1.84-.197-1.54-1.118l1.286-3.967a1 1 0 00-.364-1.118L2.075 9.394c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.967z" />
                            </svg>
                            <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.452a1 1 0 00-.364 1.118l1.286 3.967c.3.921-.755 1.688-1.54 1.118l-3.375-2.452a1 1 0 00-1.175 0l-3.375 2.452c-.785.57-1.84-.197-1.54-1.118l1.286-3.967a1 1 0 00-.364-1.118L2.075 9.394c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.967z" />
                            </svg>
                            <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.452a1 1 0 00-.364 1.118l1.286 3.967c.3.921-.755 1.688-1.54 1.118l-3.375-2.452a1 1 0 00-1.175 0l-3.375 2.452c-.785.57-1.84-.197-1.54-1.118l1.286-3.967a1 1 0 00-.364-1.118L2.075 9.394c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.967z" />
                            </svg>
                            <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.452a1 1 0 00-.364 1.118l1.286 3.967c.3.921-.755 1.688-1.54 1.118l-3.375-2.452a1 1 0 00-1.175 0l-3.375 2.452c-.785.57-1.84-.197-1.54-1.118l1.286-3.967a1 1 0 00-.364-1.118L2.075 9.394c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.967z" />
                            </svg>
                            <svg class="w-6 h-6 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.452a1 1 0 00-.364 1.118l1.286 3.967c.3.921-.755 1.688-1.54 1.118l-3.375-2.452a1 1 0 00-1.175 0l-3.375 2.452c-.785.57-1.84-.197-1.54-1.118l1.286-3.967a1 1 0 00-.364-1.118L2.075 9.394c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.967z" />
                            </svg>
                        </div>
                        <!-- Travel Info -->
                        <div class="flex items-start flex-col">
                            <h2 class="text-2xl font-bold mt-4">Trip of a lifetime</h2>
                            <span
                                class="inline-block bg-green-100 text-green-800 text-xs md:text-sm font-medium px-3 py-1 rounded-full">
                                Traveled in : Oct 2024 on <span class="font-semibold">Cairo single tour</span>
                            </span>
                        </div>
                        <!-- Description -->
                        <p class="text-gray-700 mt-3 text-sm md:text-base">
                            Egypt's bustling capital, offers an unparalleled blend of ancient wonders and vibrant modern
                            life. From the awe-inspiring Pyramids of Giza and the Sphinx to the lively bazaars and rich
                            cultural heritage of Islamic Cairo, the city immerses travelers in history and unforgettable
                            experiences.
                        </p>

                        <!-- User Section -->
                        <div class="flex items-center mt-6">
                            <img src="images/user-3.png" alt="User profile"
                                class="w-12 h-12 rounded-full border border-gray-200">
                            <div class="ml-3">
                                <p class="font-bold">Theresa Conroy</p>
                                <p class="text-sm text-gray-500 flex items-center gap-1">
                                    <img loading="lazy" src="images/icons/location.svg" alt="Location icon" />
                                    <span>Milan, Italy</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide bg-[#F4F8F3] opacity-75 shadow-lg rounded-lg p-6 border border-gray-200">
                        <!-- Star Rating -->
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.452a1 1 0 00-.364 1.118l1.286 3.967c.3.921-.755 1.688-1.54 1.118l-3.375-2.452a1 1 0 00-1.175 0l-3.375 2.452c-.785.57-1.84-.197-1.54-1.118l1.286-3.967a1 1 0 00-.364-1.118L2.075 9.394c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.967z" />
                            </svg>
                            <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.452a1 1 0 00-.364 1.118l1.286 3.967c.3.921-.755 1.688-1.54 1.118l-3.375-2.452a1 1 0 00-1.175 0l-3.375 2.452c-.785.57-1.84-.197-1.54-1.118l1.286-3.967a1 1 0 00-.364-1.118L2.075 9.394c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.967z" />
                            </svg>
                            <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.452a1 1 0 00-.364 1.118l1.286 3.967c.3.921-.755 1.688-1.54 1.118l-3.375-2.452a1 1 0 00-1.175 0l-3.375 2.452c-.785.57-1.84-.197-1.54-1.118l1.286-3.967a1 1 0 00-.364-1.118L2.075 9.394c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.967z" />
                            </svg>
                            <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.452a1 1 0 00-.364 1.118l1.286 3.967c.3.921-.755 1.688-1.54 1.118l-3.375-2.452a1 1 0 00-1.175 0l-3.375 2.452c-.785.57-1.84-.197-1.54-1.118l1.286-3.967a1 1 0 00-.364-1.118L2.075 9.394c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.967z" />
                            </svg>
                            <svg class="w-6 h-6 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.452a1 1 0 00-.364 1.118l1.286 3.967c.3.921-.755 1.688-1.54 1.118l-3.375-2.452a1 1 0 00-1.175 0l-3.375 2.452c-.785.57-1.84-.197-1.54-1.118l1.286-3.967a1 1 0 00-.364-1.118L2.075 9.394c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.967z" />
                            </svg>
                        </div>
                        <!-- Travel Info -->
                        <div class="flex items-start flex-col">
                            <h2 class="text-2xl font-bold mt-4">Trip of a lifetime</h2>
                            <span
                                class="inline-block bg-green-100 text-green-800 text-xs md:text-sm font-medium px-3 py-1 rounded-full">
                                Traveled in : Oct 2024 on <span class="font-semibold">Cairo single tour</span>
                            </span>
                        </div>
                        <!-- Description -->
                        <p class="text-gray-700 mt-3 text-sm md:text-base">
                            Egypt's bustling capital, offers an unparalleled blend of ancient wonders and vibrant modern
                            life. From the awe-inspiring Pyramids of Giza and the Sphinx to the lively bazaars and rich
                            cultural heritage of Islamic Cairo, the city immerses travelers in history and unforgettable
                            experiences.
                        </p>

                        <!-- User Section -->
                        <div class="flex items-center mt-6">
                            <img src="images/user-3.png" alt="User profile"
                                class="w-12 h-12 rounded-full border border-gray-200">
                            <div class="ml-3">
                                <p class="font-bold">Theresa Conroy</p>
                                <p class="text-sm text-gray-500 flex items-center gap-1">
                                    <img loading="lazy" src="images/icons/location.svg" alt="Location icon" />
                                    <span>Milan, Italy</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide bg-[#F4F8F3] opacity-75 shadow-lg rounded-lg p-6 border border-gray-200">
                        <!-- Star Rating -->
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.452a1 1 0 00-.364 1.118l1.286 3.967c.3.921-.755 1.688-1.54 1.118l-3.375-2.452a1 1 0 00-1.175 0l-3.375 2.452c-.785.57-1.84-.197-1.54-1.118l1.286-3.967a1 1 0 00-.364-1.118L2.075 9.394c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.967z" />
                            </svg>
                            <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.452a1 1 0 00-.364 1.118l1.286 3.967c.3.921-.755 1.688-1.54 1.118l-3.375-2.452a1 1 0 00-1.175 0l-3.375 2.452c-.785.57-1.84-.197-1.54-1.118l1.286-3.967a1 1 0 00-.364-1.118L2.075 9.394c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.967z" />
                            </svg>
                            <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.452a1 1 0 00-.364 1.118l1.286 3.967c.3.921-.755 1.688-1.54 1.118l-3.375-2.452a1 1 0 00-1.175 0l-3.375 2.452c-.785.57-1.84-.197-1.54-1.118l1.286-3.967a1 1 0 00-.364-1.118L2.075 9.394c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.967z" />
                            </svg>
                            <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.452a1 1 0 00-.364 1.118l1.286 3.967c.3.921-.755 1.688-1.54 1.118l-3.375-2.452a1 1 0 00-1.175 0l-3.375 2.452c-.785.57-1.84-.197-1.54-1.118l1.286-3.967a1 1 0 00-.364-1.118L2.075 9.394c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.967z" />
                            </svg>
                            <svg class="w-6 h-6 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.375 2.452a1 1 0 00-.364 1.118l1.286 3.967c.3.921-.755 1.688-1.54 1.118l-3.375-2.452a1 1 0 00-1.175 0l-3.375 2.452c-.785.57-1.84-.197-1.54-1.118l1.286-3.967a1 1 0 00-.364-1.118L2.075 9.394c-.783-.57-.381-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.967z" />
                            </svg>
                        </div>
                        <!-- Travel Info -->
                        <div class="flex items-start flex-col">
                            <h2 class="text-2xl font-bold mt-4">Trip of a lifetime</h2>
                            <span
                                class="inline-block bg-green-100 text-green-800 text-xs md:text-sm font-medium px-3 py-1 rounded-full">
                                Traveled in : Oct 2024 on <span class="font-semibold">Cairo single tour</span>
                            </span>
                        </div>
                        <!-- Description -->
                        <p class="text-gray-700 mt-3 text-sm md:text-base">
                            Egypt's bustling capital, offers an unparalleled blend of ancient wonders and vibrant modern
                            life. From the awe-inspiring Pyramids of Giza and the Sphinx to the lively bazaars and rich
                            cultural heritage of Islamic Cairo, the city immerses travelers in history and unforgettable
                            experiences.
                        </p>

                        <!-- User Section -->
                        <div class="flex items-center mt-6">
                            <img src="images/user-3.png" alt="User profile"
                                class="w-12 h-12 rounded-full border border-gray-200">
                            <div class="ml-3">
                                <p class="font-bold">Theresa Conroy</p>
                                <p class="text-sm text-gray-500 flex items-center gap-1">
                                    <img loading="lazy" src="images/icons/location.svg" alt="Location icon" />
                                    <span>Milan, Italy</span>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Navigation buttons -->
            <div class="relative w-full md:w-5/12">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- End What Our Clients says About Cairo ? -->

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
                        // breakpoints: {
                        //     768: { slidesPerView: 1 },
                        //     1024: { slidesPerView: 1 },
                        // },
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

            initializeSwiper('.blog-swiper');
        });
    </script>
    <script defer src="js/image-switcher.js"></script>

</body>

</html>