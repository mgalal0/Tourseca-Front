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
    <title>Touresca - Find Your Perfect Egyptian Tour</title>
    
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #095763;
            --accent-color: #C8E677;
            --secondary-color: #E0EAEB;
            --text-color: #333333;
            --light-bg: #F8F9FA;
        }

        .hero-section {
            background: linear-gradient(180deg, #276C76 0%, #BAD0B4 100%);

        }

        body {
        }
        

        
        .fancy-title {
            font-family: 'Berkshire Swash', cursive;
        }
        
        .highlight-text {
            color: #C8E677;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            color: white;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background-color: #07444d;
        }
        
        .btn-secondary {
            background-color: var(--secondary-color);
            color: var(--primary-color);
            transition: all 0.3s ease;
        }
        
        .btn-secondary:hover {
            background-color: var(--primary-color);
            color: white;
        }
        
        .search-box {
            background-color: white;
            border-radius: 50px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        
        .search-input {
            border-radius: 50px;
            border: 1px solid #E0EAEB;
        }
        
        .badge-best-seller {
            background-color: var(--accent-color);
            color: var(--primary-color);
        }
        
        .trip-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .trip-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .star-rating {
            color: #FFB800;
        }
        
        .book-now-btn {
            color: var(--primary-color);
            transition: all 0.3s ease;
        }
        
        .book-now-btn:hover svg {
            transform: translateX(5px);
        }
        
/* تصميم مخصص للـ checkbox */
.custom-checkbox {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    width: 20px;
    height: 22px;
    border: 2px solid #ddd;
    border-radius: 4px;
    margin: 0;
    padding: 0;
    position: relative;
    cursor: pointer;
    background-color: white;
}

/* تصميم حالة الـ checked */
.custom-checkbox:checked {
    background-color: #095763 !important;
    border-color: #095763 !important;
    position: relative;
}

/* إضافة علامة ✓ عند تحديد الـ checkbox */
.custom-checkbox:checked::after {
    content: '';
    position: absolute;
    left: 6px;
    top: 2px;
    width: 6px;
    height: 12px;
    border: solid white;
    border-width: 0 2px 2px 0;
    transform: rotate(45deg);
}
        
        .filter-section {
            background-color: #F8F9FA;
            border-radius: 16px;
        }
        
        @media (max-width: 768px) {
            .filters-container {
                position: fixed;
                left: -100%;
                top: 0;
                bottom: 0;
                width: 80%;
                z-index: 50;
                transition: left 0.3s ease;
                background-color: white;
                overflow-y: auto;
                padding: 1rem;
            }
            
            .filters-container.show {
                left: 0;
            }
            
            .filter-overlay {
                position: fixed;
                inset: 0;
                background-color: rgba(0, 0, 0, 0.5);
                z-index: 40;
                display: none;
            }
            
            .filter-overlay.show {
                display: block;
            }
        }
    </style>
</head>

<body>

<?php include "componets/navbar.php" ?>

    
    <!-- Hero Section -->
     <div class="hero-section pb-10">
        <section class="max-w-7xl px-4 sm:px-6 lg:px-8 mx-auto pt-8">
            <div class="mb-8">
                <h1 style="font-family: 'Berkshire Swash', cursive;"
                    class="text-[32px] md:text-[64px] font-semibold mb-4 text-[<?= $_yellow ?>]">
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
</div>

   <!-- Main Content -->
<section class="py-12 max-w-7xl mx-auto px-4">
    <div class="flex flex-col lg:flex-row gap-8">
        <!-- Mobile Filter Toggle Button -->
        <div class="lg:hidden mb-4">
            <button id="filter-toggle" class="flex items-center justify-center bg-[#095763] text-white px-4 py-2 rounded-lg w-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
                </svg>
                Filters
            </button>
        </div>
        
        <div id="filter-overlay" class="filter-overlay"></div>
        
        <!-- Filters Sidebar -->
        <div id="filters-container" class="filters-container lg:relative lg:left-0 lg:w-1/4 space-y-6">
            <div class="flex justify-between lg:hidden mb-4">
                <h3 class="text-xl font-semibold">Filters</h3>
                <button id="close-filters" class="text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            
            <!-- Destination Filter -->
            <div class="filter-section p-4 bg-[#F4F8F3] rounded-lg">
                <h3 class="font-semibold text-lg mb-3 text-[#095763]">Destination</h3>
                <div class="space-y-2">
                    <label class="flex items-center">
                        <input type="checkbox" class="custom-checkbox" checked>
                        <span class="ml-2">Luxor</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" class="custom-checkbox">
                        <span class="ml-2">Aswan</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" class="custom-checkbox" checked>
                        <span class="ml-2">Alexandria</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" class="custom-checkbox">
                        <span class="ml-2">Cairo</span>
                    </label>
                </div>
            </div>
            
            <!-- Duration Filter -->
            <div class="filter-section p-4 bg-[#F4F8F3] rounded-lg">
                <h3 class="font-semibold text-lg mb-3 text-[#095763]">Duration</h3>
                <div class="space-y-2">
                    <label class="flex items-center">
                        <input type="checkbox" class="custom-checkbox" checked>
                        <span class="ml-2">less than 10 days</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" class="custom-checkbox">
                        <span class="ml-2">10-20 days</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" class="custom-checkbox" checked>
                        <span class="ml-2">20-30 days</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" class="custom-checkbox">
                        <span class="ml-2">More than 30 days</span>
                    </label>
                </div>
            </div>
            
            <!-- Prices Filter -->
            <div class="filter-section p-4 bg-[#F4F8F3] rounded-lg">
                <h3 class="font-semibold text-lg mb-3 text-[#095763]">Prices</h3>
                <div class="space-y-2">
                    <label class="flex items-center">
                        <input type="checkbox" class="custom-checkbox" checked>
                        <span class="ml-2">less than 100$</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" class="custom-checkbox">
                        <span class="ml-2">100$ - 300$</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" class="custom-checkbox" checked>
                        <span class="ml-2">300$ - 500$</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" class="custom-checkbox">
                        <span class="ml-2">More than 500$</span>
                    </label>
                </div>
            </div>
            
            <!-- Trip Style Filter -->
            <div class="filter-section p-4 bg-[#F4F8F3] rounded-lg">
                <h3 class="font-semibold text-lg mb-3 text-[#095763]">Trip style</h3>
                <div class="space-y-2">
                    <label class="flex items-center">
                        <input type="checkbox" class="custom-checkbox" checked>
                        <span class="ml-2">Adventure</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" class="custom-checkbox">
                        <span class="ml-2">Culture</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" class="custom-checkbox" checked>
                        <span class="ml-2">Family</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" class="custom-checkbox">
                        <span class="ml-2">Group tours</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" class="custom-checkbox">
                        <span class="ml-2">Honey moon</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" class="custom-checkbox">
                        <span class="ml-2">Nature</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" class="custom-checkbox">
                        <span class="ml-2">Solo travelers</span>
                    </label>
                </div>
            </div>
        </div>
        
    <!-- Tour Results -->
<div class="lg:w-3/4 pt-6">
    <div class="flex flex-col gap-6">
    <!-- Tour Card with Fixed Swiper -->
<div class="trip-card bg-white rounded-2xl overflow-hidden shadow-md border border-gray-100 w-full max-w-4xl mx-auto">
    <div class="flex flex-col md:flex-row">
        <!-- Left side - Image with swiper -->
        <div class="md:w-2/5 w-full h-[300px] md:h-auto relative">
            <!-- Swiper for images -->
            <div class="swiper-container w-full h-full">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="images/swipe1.jpg" alt="Luxor Temple" class="w-full h-full object-cover">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/swipe2.jpg" alt="Pyramids" class="w-full h-full object-cover">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/swipe3.jpg" alt="Beach" class="w-full h-full object-cover">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/swipe1.jpg" alt="Luxor Temple" class="w-full h-full object-cover">
                    </div>
                </div>
                
                <!-- Best seller badge -->
                <div class="absolute top-4 left-4 z-10">
                    <span class="bg-[#C8E677] text-[#095763] px-3 py-1 rounded-full text-xs font-medium">Best seller</span>
                </div>
                
                <!-- Rating badge -->
                <div class="absolute top-4 right-4 z-10">
                    <div class="flex items-center bg-white/80 backdrop-blur-[2px] px-2 py-1 rounded-full">
                        <svg class="w-4 h-4 text-yellow-500 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <span class="text-xs font-medium">4.8</span>
                    </div>
                </div>
                
                <!-- Slide counter -->
                <div class="absolute bottom-4 right-4 z-10">
                    <div class="px-2 py-1 rounded-xl bg-gray-100 opacity-75 flex items-center justify-around text-xs">
                        <span class="current-slide">1</span>/<span class="total-slides">4</span>
                    </div>
                </div>
                
                <!-- Navigation buttons -->
                <button class="swiper-button-prev absolute left-2 top-1/2 transform -translate-y-1/2 z-10 bg-white/70 w-8 h-8 rounded-full flex items-center justify-center hover:bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-800" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </button>
                <button class="swiper-button-next absolute right-2 top-1/2 transform -translate-y-1/2 z-10 bg-white/70 w-8 h-8 rounded-full flex items-center justify-center hover:bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-800" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>
        
        <!-- Right side - Content -->
        <div class="md:w-3/5 w-full p-6">
            <h3 class="text-xl font-semibold mb-2 text-[#095763]">Luxor Trips</h3>
            <p class="text-gray-600 mb-6 text-sm">A private visit to Queen Nefertari's Tomb, known as the with an expert Egyptologist as the guide.</p>
            
            <!-- Days info -->
            <div class="flex items-center gap-2 mb-4">
                <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 8V12L15 15" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"/>
                </svg>
                <span class="text-gray-600 text-sm">3 Days, 2 Nights</span>
            </div>
            
            <!-- Price info -->
            <div class="flex items-center gap-2 mb-6">
                <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"/>
                    <path d="M15 9.5C15 8.11929 13.6569 7 12 7C10.3431 7 9 8.11929 9 9.5C9 10.8807 10.3431 12 12 12C13.6569 12 15 13.1193 15 14.5C15 15.8807 13.6569 17 12 17C10.3431 17 9 15.8807 9 14.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    <path d="M12 7V5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    <path d="M12 19V17" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
                <span class="text-gray-600 text-sm">Start from: <span class="font-medium">100$</span></span>
            </div>
            
            <!-- Book now button -->
            <div class="flex justify-end">
                <a href="single-tour.php" class="text-[#095763] font-medium flex items-center gap-2 group">
                    <span>Book now</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform duration-300 group-hover:translate-x-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
    
</div>

    <!-- Tour Card with Fixed Swiper -->
    <div class="trip-card bg-white rounded-2xl overflow-hidden shadow-md border border-gray-100 w-full max-w-4xl mx-auto">
    <div class="flex flex-col md:flex-row">
        <!-- Left side - Image with swiper -->
        <div class="md:w-2/5 w-full h-[300px] md:h-auto relative">
            <!-- Swiper for images -->
            <div class="swiper-container w-full h-full">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="images/swipe1.jpg" alt="Luxor Temple" class="w-full h-full object-cover">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/swipe2.jpg" alt="Pyramids" class="w-full h-full object-cover">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/swipe3.jpg" alt="Beach" class="w-full h-full object-cover">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/swipe1.jpg" alt="Luxor Temple" class="w-full h-full object-cover">
                    </div>
                </div>
                
                <!-- Best seller badge -->
                <div class="absolute top-4 left-4 z-10">
                    <span class="bg-[#C8E677] text-[#095763] px-3 py-1 rounded-full text-xs font-medium">Best seller</span>
                </div>
                
                <!-- Rating badge -->
                <div class="absolute top-4 right-4 z-10">
                    <div class="flex items-center bg-white/80 backdrop-blur-[2px] px-2 py-1 rounded-full">
                        <svg class="w-4 h-4 text-yellow-500 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <span class="text-xs font-medium">4.8</span>
                    </div>
                </div>
                
                <!-- Slide counter -->
                <div class="absolute bottom-4 right-4 z-10">
                    <div class="px-2 py-1 rounded-xl bg-gray-100 opacity-75 flex items-center justify-around text-xs">
                        <span class="current-slide">1</span>/<span class="total-slides">4</span>
                    </div>
                </div>
                
                <!-- Navigation buttons -->
                <button class="swiper-button-prev absolute left-2 top-1/2 transform -translate-y-1/2 z-10 bg-white/70 w-8 h-8 rounded-full flex items-center justify-center hover:bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-800" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </button>
                <button class="swiper-button-next absolute right-2 top-1/2 transform -translate-y-1/2 z-10 bg-white/70 w-8 h-8 rounded-full flex items-center justify-center hover:bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-800" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>
        
        <!-- Right side - Content -->
        <div class="md:w-3/5 w-full p-6">
            <h3 class="text-xl font-semibold mb-2 text-[#095763]">Luxor Trips</h3>
            <p class="text-gray-600 mb-6 text-sm">A private visit to Queen Nefertari's Tomb, known as the with an expert Egyptologist as the guide.</p>
            
            <!-- Days info -->
            <div class="flex items-center gap-2 mb-4">
                <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 8V12L15 15" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"/>
                </svg>
                <span class="text-gray-600 text-sm">3 Days, 2 Nights</span>
            </div>
            
            <!-- Price info -->
            <div class="flex items-center gap-2 mb-6">
                <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"/>
                    <path d="M15 9.5C15 8.11929 13.6569 7 12 7C10.3431 7 9 8.11929 9 9.5C9 10.8807 10.3431 12 12 12C13.6569 12 15 13.1193 15 14.5C15 15.8807 13.6569 17 12 17C10.3431 17 9 15.8807 9 14.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    <path d="M12 7V5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    <path d="M12 19V17" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
                <span class="text-gray-600 text-sm">Start from: <span class="font-medium">100$</span></span>
            </div>
            
            <!-- Book now button -->
            <div class="flex justify-end">
                <a href="single-tour.php" class="text-[#095763] font-medium flex items-center gap-2 group">
                    <span>Book now</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform duration-300 group-hover:translate-x-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>

    <!-- Tour Card with Fixed Swiper -->
    <div class="trip-card bg-white rounded-2xl overflow-hidden shadow-md border border-gray-100 w-full max-w-4xl mx-auto">
    <div class="flex flex-col md:flex-row">
        <!-- Left side - Image with swiper -->
        <div class="md:w-2/5 w-full h-[300px] md:h-auto relative">
            <!-- Swiper for images -->
            <div class="swiper-container w-full h-full">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="images/swipe1.jpg" alt="Luxor Temple" class="w-full h-full object-cover">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/swipe2.jpg" alt="Pyramids" class="w-full h-full object-cover">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/swipe3.jpg" alt="Beach" class="w-full h-full object-cover">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/swipe1.jpg" alt="Luxor Temple" class="w-full h-full object-cover">
                    </div>
                </div>
                
                <!-- Best seller badge -->
                <div class="absolute top-4 left-4 z-10">
                    <span class="bg-[#C8E677] text-[#095763] px-3 py-1 rounded-full text-xs font-medium">Best seller</span>
                </div>
                
                <!-- Rating badge -->
                <div class="absolute top-4 right-4 z-10">
                    <div class="flex items-center bg-white/80 backdrop-blur-[2px] px-2 py-1 rounded-full">
                        <svg class="w-4 h-4 text-yellow-500 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <span class="text-xs font-medium">4.8</span>
                    </div>
                </div>
                
                <!-- Slide counter -->
                <div class="absolute bottom-4 right-4 z-10">
                    <div class="px-2 py-1 rounded-xl bg-gray-100 opacity-75 flex items-center justify-around text-xs">
                        <span class="current-slide">1</span>/<span class="total-slides">4</span>
                    </div>
                </div>
                
                <!-- Navigation buttons -->
                <button class="swiper-button-prev absolute left-2 top-1/2 transform -translate-y-1/2 z-10 bg-white/70 w-8 h-8 rounded-full flex items-center justify-center hover:bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-800" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </button>
                <button class="swiper-button-next absolute right-2 top-1/2 transform -translate-y-1/2 z-10 bg-white/70 w-8 h-8 rounded-full flex items-center justify-center hover:bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-800" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>
        
        <!-- Right side - Content -->
        <div class="md:w-3/5 w-full p-6">
            <h3 class="text-xl font-semibold mb-2 text-[#095763]">Luxor Trips</h3>
            <p class="text-gray-600 mb-6 text-sm">A private visit to Queen Nefertari's Tomb, known as the with an expert Egyptologist as the guide.</p>
            
            <!-- Days info -->
            <div class="flex items-center gap-2 mb-4">
                <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 8V12L15 15" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"/>
                </svg>
                <span class="text-gray-600 text-sm">3 Days, 2 Nights</span>
            </div>
            
            <!-- Price info -->
            <div class="flex items-center gap-2 mb-6">
                <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"/>
                    <path d="M15 9.5C15 8.11929 13.6569 7 12 7C10.3431 7 9 8.11929 9 9.5C9 10.8807 10.3431 12 12 12C13.6569 12 15 13.1193 15 14.5C15 15.8807 13.6569 17 12 17C10.3431 17 9 15.8807 9 14.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    <path d="M12 7V5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    <path d="M12 19V17" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
                <span class="text-gray-600 text-sm">Start from: <span class="font-medium">100$</span></span>
            </div>
            
            <!-- Book now button -->
            <div class="flex justify-end">
                <a href="single-tour.php" class="text-[#095763] font-medium flex items-center gap-2 group">
                    <span>Book now</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform duration-300 group-hover:translate-x-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
    
</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Swiper
    const swiper = new Swiper('.swiper-container', {
        // Enable one slide at a time
        slidesPerView: 1,
        
        // Disable multiple slides being displayed at once
        direction: 'horizontal',
        
        // Set up pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        
        // Enable navigation buttons
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        
        // Enable looping
        loop: true,
        
        // Disable multirow display
        grid: {
            rows: 1,
        },
        
        // Disable grouping slides
        slidesPerGroup: 1,
        
        // Update counter when slide changes
        on: {
            init: function() {
                updateCounter(this.realIndex + 1);
            },
            slideChange: function() {
                updateCounter(this.realIndex + 1);
            },
        },
    });
    
    // Update the slide counter
    function updateCounter(current) {
        const currentSlideElement = document.querySelector('.current-slide');
        const totalSlidesElement = document.querySelector('.total-slides');
        
        if (currentSlideElement && totalSlidesElement) {
            currentSlideElement.textContent = current;
            // Subtract duplicate slides created by loop mode
            const totalSlides = document.querySelectorAll('.swiper-slide:not(.swiper-slide-duplicate)').length;
            totalSlidesElement.textContent = totalSlides;
        }
    }
});
</script>

<style>
/* Hide Swiper default elements */
.swiper-button-next::after,
.swiper-button-prev::after {
    display: none;
}

/* Fix swiper container to show one slide at a time */
.swiper-container {
    overflow: hidden;
    position: relative;
    width: 100%;
    height: 100%;
}

.swiper-wrapper {
    display: flex;
    height: 100%;
}

.swiper-slide {
    flex-shrink: 0;
    width: 100%;
    height: 100%;
    position: relative;
}
</style>
<script>
// Mobile filters functionality
document.addEventListener('DOMContentLoaded', function() {
    const filterToggleBtn = document.getElementById('filter-toggle');
    const closeFiltersBtn = document.getElementById('close-filters');
    const filtersContainer = document.getElementById('filters-container');
    const filterOverlay = document.getElementById('filter-overlay');
    
    if (filterToggleBtn && closeFiltersBtn && filtersContainer && filterOverlay) {
        // Open filters when the filter button is clicked
        filterToggleBtn.addEventListener('click', function() {
            filtersContainer.classList.add('show');
            filterOverlay.classList.add('show');
            document.body.style.overflow = 'hidden'; // Prevent scrolling
        });
        
        // Close filters when the close button is clicked
        closeFiltersBtn.addEventListener('click', function() {
            filtersContainer.classList.remove('show');
            filterOverlay.classList.remove('show');
            document.body.style.overflow = ''; // Enable scrolling
        });
        
        // Close filters when clicking on the overlay
        filterOverlay.addEventListener('click', function() {
            filtersContainer.classList.remove('show');
            filterOverlay.classList.remove('show');
            document.body.style.overflow = ''; // Enable scrolling
        });
    }
});
</script>
</div>

<!-- Pagination -->
<div class="flex justify-center mt-10">
    <nav class="flex items-center space-x-2">
        <!-- Previous Arrow -->
        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-md bg-gray-200 text-gray-500 hover:bg-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
        </a>
        
        <!-- Page 1 - Active -->
        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-md bg-[#138EA0] text-white font-medium">1</a>
        
        <!-- Page 2 -->
        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-md border border-gray-200 text-[#138EA0] font-medium hover:bg-gray-50">2</a>
        
        <!-- Dots -->
        <span class="text-gray-500">...</span>
        
        <!-- Page 9 -->
        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-md border border-gray-200 text-[#138EA0] font-medium hover:bg-gray-50">9</a>
        
        <!-- Page 10 -->
        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-md border border-gray-200 text-[#138EA0] font-medium hover:bg-gray-50">10</a>
        
        <!-- Next Arrow -->
        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-md border border-[#138EA0] text-[#138EA0] hover:bg-[#138EA0] hover:text-white transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
            </svg>
        </a>
    </nav>
</div>

</div>
</section>
    
    <!-- Footer -->
<?php include "componets/footer.php" ?>

</body>
</html>