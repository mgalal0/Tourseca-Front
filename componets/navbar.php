<?php
// navbar.php
$current_page = basename($_SERVER['PHP_SELF']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="styles/general.css">
    <style>
        .nav-link {
            position: relative;
        }
        .nav-link.active {
            background-color: #F5FEDD;
            padding: 8px 30px;
            border-radius: 20px;
        }
        .search-input::placeholder {
            color: #9ca3af;
            font-size: 14px;
        }
        /* Add mobile menu transition */
        .mobile-menu {
            transition: all 0.3s ease-in-out;
            display: none;
        }
        .mobile-menu.show {
            display: block;
        }

         a {
font-size: 18px;
font-weight: 600;
line-height: 28.8px;
text-align: left;
        }

        @media (max-width: 1200px) {
    .ss-s {
        display: none !important;
    }
}

    </style>
</head>
<body>
    <nav class="w-full bg-white border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <div class="flex items-center mb-2">
                        <img src="images/logo.png" alt="Globe Icon" class="h-10 w-30">
                    </div>
                </div>

                <!-- Navigation Links (Desktop) -->
                <div class="hidden md:flex items-center space-x-8">
    <a href="home.php" class="nav-link <?php echo ($current_page == 'home.php') ? 'active' : ''; ?> text-gray-800">Home</a>
    <a href="destinations.php" class="nav-link <?php echo ($current_page == 'destinations.php') ? 'active' : ''; ?> text-gray-600 hover:text-gray-800 transition duration-150">Destinations</a>
    <a href="blog.php" class="nav-link <?php echo ($current_page == 'blog.php') ? 'active' : ''; ?> text-gray-600 hover:text-gray-800 transition duration-150">Blog</a>
    <a href="about.php" class="nav-link <?php echo ($current_page == 'about.php') ? 'active' : ''; ?> text-gray-600 hover:text-gray-800 transition duration-150">About us</a>
    <a href="faq.php" class="nav-link <?php echo ($current_page == 'faq.php') ? 'active' : ''; ?> text-gray-600 hover:text-gray-800 transition duration-150">FAQ</a>
    <a href="contact.php" class="nav-link <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?> text-gray-600 hover:text-gray-800 transition duration-150">Contact us</a>
</div>

                <!-- Search Bar (Desktop Only) -->
                <div class="ss-s hidden md:flex items-center">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                        <input type="text" 
                               placeholder="Tours, destinations..." 
                               class="search-input w-80 pl-10 pr-24 py-2 rounded-full border border-gray-200 focus:outline-none focus:border-teal-600 text-sm"
                        >
                        <button class="absolute right-0 top-0 h-full px-6 bg-teal-600 text-white text-sm font-medium rounded-r-full hover:bg-teal-700 transition duration-150">
                            Search
                        </button>
                    </div>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="p-2 rounded-md hover:bg-gray-100 focus:outline-none">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="mobile-menu bg-white border-t">
    <div class="px-2 pt-2 pb-3 space-y-1">
        <a href="home.php" class="block px-3 py-2 rounded-md text-gray-600 <?php echo ($current_page == 'home.php') ? 'bg-green-50 text-gray-800' : ''; ?> hover:text-gray-800 hover:bg-gray-50 font-medium">Home</a>
        <a href="destinations.php" class="block px-3 py-2 rounded-md text-gray-600 <?php echo ($current_page == 'destinations.php') ? 'bg-green-50 text-gray-800' : ''; ?> hover:text-gray-800 hover:bg-gray-50 font-medium">Destinations</a>
        <a href="blog.php" class="block px-3 py-2 rounded-md text-gray-600 <?php echo ($current_page == 'blog.php') ? 'bg-green-50 text-gray-800' : ''; ?> hover:text-gray-800 hover:bg-gray-50 font-medium">Blog</a>
        <a href="about.php" class="block px-3 py-2 rounded-md text-gray-600 <?php echo ($current_page == 'about.php') ? 'bg-green-50 text-gray-800' : ''; ?> hover:text-gray-800 hover:bg-gray-50 font-medium">About us</a>
        <a href="faq.php" class="block px-3 py-2 rounded-md text-gray-600 <?php echo ($current_page == 'faq.php') ? 'bg-green-50 text-gray-800' : ''; ?> hover:text-gray-800 hover:bg-gray-50 font-medium">FAQ</a>
        <a href="contact.php" class="block px-3 py-2 rounded-md text-gray-600 <?php echo ($current_page == 'contact.php') ? 'bg-green-50 text-gray-800' : ''; ?> hover:text-gray-800 hover:bg-gray-50 font-medium">Contact us</a>
    </div>
</div>
    </nav>

    <script>
        // Improved Mobile menu toggle
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            menuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('show');
            });
        });
    </script>
</body>
</html>