<?php
// footer.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .footer-logo {
            font-family: 'Poppins', sans-serif;
            color: #C5FF4A;
        }
        .social-icon {
            background-color: rgba(255, 255, 255, 0.15);
            transition: all 0.3s ease;
        }
    </style>
</head>
<body>
    <footer class="bg-[#06414A] py-24">
        <div class="container mx-auto px-8">
            <div class="grid grid-cols-12 gap-8">
                <!-- Logo Section -->
                <div class="col-span-12 md:col-span-4 flex justify-center md:justify-start items-center order-1 md:order-1">
                    <div class="flex items-center">
                        <img src="images/logo_fotr.png" alt="Touresca Logo" class="w-50 h-20">
                    </div>
                </div>

                <!-- Navigation Links -->
                <div class="col-span-12 md:col-span-4 space-y-4 pl-4 md:pl-12 order-2 md:order-3">
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-chevron-right text-white text-xs"></i>
                        <a href="#" class="text-white hover:text-[#C5FF4A] transition-colors">Home</a>
                    </div>
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-chevron-right text-white text-xs"></i>
                        <a href="#" class="text-white hover:text-[#C5FF4A] transition-colors">Destinations</a>
                    </div>
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-chevron-right text-white text-xs"></i>
                        <a href="#" class="text-white hover:text-[#C5FF4A] transition-colors">About us</a>
                    </div>
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-chevron-right text-white text-xs"></i>
                        <a href="#" class="text-white hover:text-[#C5FF4A] transition-colors">FAQ</a>
                    </div>
                </div>

                <!-- Contact Section -->
                <div class="col-span-12 md:col-span-4 pl-4 md:pl-0 order-3 md:order-2">
                    <h3 class="text-[#C5FF4A] text-xl mb-6">Contact</h3>
                    <div class="space-y-4 text-white">
                        <div class="flex items-center space-x-3">
                            <i class="far fa-envelope w-5"></i>
                            <span>Info@Touresca.com</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-phone w-5"></i>
                            <span>+20108598345678</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-map-marker-alt w-5"></i>
                            <span>Lorem ipsum,Lorem ipsum</span>
                        </div>
                    </div>
                    
                    <!-- Social Media Icons -->
                    <div class="flex space-x-3 mt-6">
                        <a href="#" class="social-icon w-10 h-10 rounded-full flex items-center justify-center text-white">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon w-10 h-10 rounded-full flex items-center justify-center text-white">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="social-icon w-10 h-10 rounded-full flex items-center justify-center text-white">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="#" class="social-icon w-10 h-10 rounded-full flex items-center justify-center text-white">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <?php include "componets/scroll-to-top.php" ?>
</body>
</html>