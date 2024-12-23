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
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/font-2.css">
    <title>Blog</title>
    <style>
        /* start common styles */
        .btn {
            height: 48px;
            border-radius: 24px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 500;
            padding: 0 5px;
            border: none;
            
        }
        
        
        .btn-secondary {
            background-color: #E0EAEB;
            color:
            <?= $_primary ?>
            ;
            
        }
        .btn-primary,
        .btn-secondary:hover {
            background-color:
            <?= $_yellow ?>
            ;
            color:
                <?= $_primary ?>
            ;
        }
    </style>
</head>

<body>
    <?php include "componets/navbar.php" ?>

    <!-- blog Hero Section -->
    <section class="bg-gradient-to-b from-[#105B66] to-[#BAD0B4] py-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-0">
            <h1 class="font-['Berkshire_Swash'] text-[#C8E677] text-[40px] mb-2 md:text-6xl md:mb-8">Blog</h1>
            <p class="text-white text[24px] max-w-6xl" style="line-height:30.4px;">
                Tips, Insights, and Must-See Spots. Discover everything you need to know for an unforgettable journey,
                from hidden gems to essential travel advice tailored for an amazing Egyptian adventure with us."
            </p>
            <div class="tab-link grid grid-cols-2 sm:grid-cols-3 md:grid-cols-8 gap-2 mt-8">
                <button class="btn btn-secondary btn-primary">All</button>
                <button class="btn btn-secondary">Most reading</button>
                <button class="btn btn-secondary">Discovering Egypt</button>
                <button class="btn btn-secondary">Travel tips</button>
                <button class="btn btn-secondary">Travel Trends</button>
                <button class="btn btn-secondary">Wonders of egypt</button>
                <button class="btn btn-secondary">Wonders of Egypt</button>
            </div>
        </div>
    </section>
    <!-- cards -->
    <section class="max-w-7xl px-4 sm:px-6 lg:px-0 mx-auto relative my-12">
        <!-- Grid Layout -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div
                class="col-span-1 sm:col-span-2 bg-[#F4F8F3] rounded-[20px] shadow-[0_2px_8px_rgba(0,0,0,0.08)] overflow-hidden ">
                <div class="relative">
                    <img loading="lazy" src="images/destinations/blog.jpg" alt="Luxor Temple"
                        class="w-full h-[350px] object-cover">
                </div>
                <div class="p-6">
                    <span
                        class="bg-[<?= $_yellow ?>] text-[<?= $_primary ?>] px-3 py-1 rounded-full text-xs font-medium ">Travel
                        tips</span>

                    <h3 class="text-xl font-semibold my-2">The Ultimate Guide to Exploring the Land of Pharaohs
                    </h3>
                    <p class="text-gray-600 text-sm font-weight-300">
                        <span>26 August 2024</span>
                        <span>15:30 AM</span>
                    </p>
                    <p class="text-gray-600 text-sm leading-7 mb-6 mt-2">Welcome to Egypt, a land where ancient
                        history,
                        breathtaking landscapes, and vibrant culture come

                        <a href="#" class="text-[<?= $_primary ?>] text-sm underline">
                            Read more
                        </a>
                    </p>


                </div>
            </div>
            <div class="bg-[#F4F8F3] rounded-[20px] shadow-[0_2px_8px_rgba(0,0,0,0.08)] overflow-hidden ">
                <div class="relative">
                    <img loading="lazy" src="images/destinations/blog.jpg" alt="Luxor Temple"
                        class="w-full h-[250px] object-cover">
                </div>
                <div class="p-6">
                    <span
                        class="bg-[<?= $_yellow ?>] text-[<?= $_primary ?>] px-3 py-1 rounded-full text-xs font-medium ">Travel
                        tips</span>

                    <h3 class="text-xl font-semibold my-2">The Ultimate Guide to Exploring the Land of Pharaohs
                    </h3>
                    <p class="text-gray-600 text-sm font-weight-300">
                        <span>26 August 2024</span>
                        <span>15:30 AM</span>
                    </p>
                    <p class="text-gray-600 text-sm leading-7 mb-6 mt-2">Welcome to Egypt, a land where ancient
                        history,
                        breathtaking landscapes, and vibrant culture come

                        <a href="#" class="text-[<?= $_primary ?>] text-sm underline">
                            Read more
                        </a>
                    </p>


                </div>
            </div>
            <div class="bg-[#F4F8F3] rounded-[20px] shadow-[0_2px_8px_rgba(0,0,0,0.08)] overflow-hidden ">
                <div class="relative">
                    <img loading="lazy" src="images/destinations/blog.jpg" alt="Luxor Temple"
                        class="w-full h-[250px] object-cover">
                </div>
                <div class="p-6">
                    <span
                        class="bg-[<?= $_yellow ?>] text-[<?= $_primary ?>] px-3 py-1 rounded-full text-xs font-medium ">Travel
                        tips</span>

                    <h3 class="text-xl font-semibold my-2">The Ultimate Guide to Exploring the Land of Pharaohs
                    </h3>
                    <p class="text-gray-600 text-sm font-weight-300">
                        <span>26 August 2024</span>
                        <span>15:30 AM</span>
                    </p>
                    <p class="text-gray-600 text-sm leading-7 mb-6 mt-2">Welcome to Egypt, a land where ancient
                        history,
                        breathtaking landscapes, and vibrant culture come

                        <a href="#" class="text-[<?= $_primary ?>] text-sm underline">
                            Read more
                        </a>
                    </p>


                </div>
            </div>
            <div class="bg-[#F4F8F3] rounded-[20px] shadow-[0_2px_8px_rgba(0,0,0,0.08)] overflow-hidden ">
                <div class="relative">
                    <img loading="lazy" src="images/destinations/blog.jpg" alt="Luxor Temple"
                        class="w-full h-[250px] object-cover">
                </div>
                <div class="p-6">
                    <span
                        class="bg-[<?= $_yellow ?>] text-[<?= $_primary ?>] px-3 py-1 rounded-full text-xs font-medium ">Travel
                        tips</span>

                    <h3 class="text-xl font-semibold my-2">The Ultimate Guide to Exploring the Land of Pharaohs
                    </h3>
                    <p class="text-gray-600 text-sm font-weight-300">
                        <span>26 August 2024</span>
                        <span>15:30 AM</span>
                    </p>
                    <p class="text-gray-600 text-sm leading-7 mb-6 mt-2">Welcome to Egypt, a land where ancient
                        history,
                        breathtaking landscapes, and vibrant culture come

                        <a href="#" class="text-[<?= $_primary ?>] text-sm underline">
                            Read more
                        </a>
                    </p>


                </div>
            </div>
            <div class="bg-[#F4F8F3] rounded-[20px] shadow-[0_2px_8px_rgba(0,0,0,0.08)] overflow-hidden ">
                <div class="relative">
                    <img loading="lazy" src="images/destinations/blog.jpg" alt="Luxor Temple"
                        class="w-full h-[250px] object-cover">
                </div>
                <div class="p-6">
                    <span
                        class="bg-[<?= $_yellow ?>] text-[<?= $_primary ?>] px-3 py-1 rounded-full text-xs font-medium ">Travel
                        tips</span>

                    <h3 class="text-xl font-semibold my-2">The Ultimate Guide to Exploring the Land of Pharaohs
                    </h3>
                    <p class="text-gray-600 text-sm font-weight-300">
                        <span>26 August 2024</span>
                        <span>15:30 AM</span>
                    </p>
                    <p class="text-gray-600 text-sm leading-7 mb-6 mt-2">Welcome to Egypt, a land where ancient
                        history,
                        breathtaking landscapes, and vibrant culture come

                        <a href="#" class="text-[<?= $_primary ?>] text-sm underline">
                            Read more
                        </a>
                    </p>


                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center flex-col items-center mt-8">
            <!-- Pagination Info -->
            <p class="text-gray-600 text-sm mb-4">Showing 1–5 of 43 tours</p>

            <!-- Pagination Navigation -->
            <nav class="flex space-x-2">
                <!-- Previous Button -->
                <button
                    class="px-3 py-1 border border-gray-300 text-gray-500 rounded-md hover:bg-gray-100 disabled:opacity-50 disabled:cursor-not-allowed">
                    &lt;
                </button>

                <!-- Page Numbers -->
                <button class="px-3 py-1 border border-[<?= $_primary ?>] bg-[<?= $_primary ?>] text-white rounded-md hover:bg-[<?= $_primary_two ?>]">
                    1
                </button>
                <button class="px-3 py-1 border border-gray-300 text-gray-500 rounded-md hover:bg-gray-100">
                    2
                </button>
                <button class="px-3 py-1 border border-gray-300 text-gray-500 rounded-md hover:bg-gray-100">
                    ...
                </button>
                <button class="px-3 py-1 border border-gray-300 text-gray-500 rounded-md hover:bg-gray-100">
                    9
                </button>
                <button class="px-3 py-1 border border-gray-300 text-gray-500 rounded-md hover:bg-gray-100">
                    10
                </button>

                <!-- Next Button -->
                <button class="px-3 py-1 border border-gray-300 text-gray-500 rounded-md hover:bg-gray-100">
                    &gt;
                </button>
            </nav>
        </div>

    </section>
    <?php include "componets/footer.php" ?>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Handle buttons with ".tab-link button"
            document.querySelectorAll('.tab-link button').forEach(button => {
                button.addEventListener('click', function (e) {

                    // Remove 'btn-primary' class from all links
                    document.querySelectorAll('.tab-link button').forEach(button => {
                        button.classList.remove('btn-primary');
                    });

                    // Add 'btn-primary' class to the clicked link
                    this.classList.add('btn-primary');
                });
            });

        });
    </script>
</body>

</html>