<?php
$_yellow = "#C8EC1F";
$_primary = "#095763";
$_primary_two = "#074C56";
?>

<section class="hero-section min-h-screen">
    <!-- Desktop -->
    <div class="hidden md:grid grid-cols-2 min-h-screen">
        <!-- Left side - Main Image -->
        <div class="relative h-full">
            <div class="absolute top-4 left-4 z-10">
                <span class="bg-[#FFB800] px-3 py-1 rounded-full text-sm font-medium">NEW</span>
            </div>
            <img src="images/single-tour/abou-elholl.jpg" 
                 alt="Cairo" 
                 class="w-full h-full object-cover">
        </div>

        <!-- Right side content -->
        <div class="flex flex-col justify-between p-8 h-full">
            <!-- Header Content -->
            <div>
                <h1 style="font-family: 'Berkshire Swash', cursive;"
                    class="text-[32px] md:text-[64px] font-semibold mb-4 text-[<?= $_yellow ?>]">
                    Grand tour of Cairo
                </h1>
                <ul class="grid grid-cols-2 gap-2 md:gap-6 mb-8">
                    <li class="flex items-center justify-start gap-2">
                        <p class="w-[32px] h-[32px] rounded-full bg-[#FDFDFDB2] flex items-center justify-center">
                            <!-- Clock SVG -->
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <!-- Your existing clock SVG code -->
                            </svg>
                        </p>
                        <p class="text-gray-100 text-sm font-light md:font-medium md:text-base">Duration :<strong>3
                                Days , 2 Nights</strong>
                        </p>
                    </li>
                    <li class="flex items-center justify-start gap-2">
                        <p class="w-[32px] h-[32px] rounded-full bg-[#FDFDFDB2] flex items-center justify-center">
                            <!-- Star SVG -->
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <!-- Your existing star SVG code -->
                            </svg>
                        </p>
                        <p class="text-gray-100 text-sm font-light md:font-medium md:text-base">Rating :
                            <strong>4.8</strong>
                        </p>
                    </li>
                </ul>
                <div class="mb-8">
                    <strong class="w-[95px] h-[38px] font-semibold flex justify-center items-center rounded-[32px] bg-[#DFFE8E]">
                        -45 %</strong>
                    <div class="flex items-center gap-2 mt-4 text-white">
                        <span>Start from:</span>
                        <span class="text-[40px] font-semibold">100.00$</span>
                        <span>/ Person</span>
                    </div>
                    <button class="mt-6 px-8 py-3 bg-[#FBFEF3] text-[#05363D] font-semibold rounded-full hover:bg-[<?= $_yellow ?>] transition-colors">
                        See dates and prices
                    </button>
                </div>
            </div>

            <!-- Bottom row of images -->
            <div class="grid grid-cols-3 gap-4 h-[200px]">
                <img src="images/single-tour/cairo.jpg" 
                     alt="Cairo" 
                     class="rounded-lg w-full h-full object-cover">
                <img src="images/single-tour/cairo.jpg" 
                     alt="Cairo" 
                     class="rounded-lg w-full h-full object-cover">
                <div class="relative modal-btn cursor-pointer">
                    <img src="images/destinations/khan-el-khalili.jpg" 
                         alt="Cairo" 
                         class="rounded-lg w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black/30 rounded-lg flex items-center justify-center">
                        <span class="text-white font-medium">See all (14)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Layout -->
    <div class="md:hidden min-h-screen">
        <div class="h-[60vh] relative">
            <div class="absolute top-4 left-4 z-10">
                <span class="bg-[#FFB800] px-3 py-1 rounded-full text-sm font-medium">NEW</span>
            </div>
            <img src="images/single-tour/abou-elholl.jpg" 
                 alt="Cairo" 
                 class="w-full h-full object-cover">
        </div>
        
        <div class="p-6">
            <h1 style="font-family: 'Berkshire Swash', cursive;"
                class="text-[32px] font-semibold mb-4 text-[<?= $_yellow ?>]">
                Grand tour of Cairo
            </h1>
            <!-- Rest of your mobile content -->
        </div>
    </div>
</section>

<style>
.hero-section {
    background: linear-gradient(90deg, transparent 50%, #276C76 50%);
}

@media (max-width: 768px) {
    .hero-section {
        background: linear-gradient(180deg, #276C76 0%, #BAD0B4 70%, #FFFFFF 100%);
    }
}

.rounded-lg {
    transition: transform 0.3s ease;
}

.rounded-lg:hover {
    transform: scale(1.02);
}
</style>