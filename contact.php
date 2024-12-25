<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/font-2.css">
    <title>Contact Us</title>
</head>
<body>
<?php include "componets/loader.php" ?>

<?php include "componets/navbar.php"?>
<!-- FAQ Hero Section -->
<section class="bg-gradient-to-b from-[#105B66] to-[#BAD0B4] py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-0">
    <h1 class="font-['Berkshire_Swash'] text-[#C8E677] text-[40px] mb-2 md:text-6xl md:mb-8">Contact Us</h1>
            <p class="text-white text[24px] max-w-4xl" style="line-height:30.4px;">
            Whether you’re planning your trip, have questions, or need support, we’re here to help. Please fill out the form below, and our team will get back to you as soon as possible.        </p>
    </div>
</section>



<div class="mb-12">
</div>
<!-- Contact Section -->
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid md:grid-cols-2 gap-8">
        <!-- Contact Form -->
        <div class="w-full">
            <div class="bg-[#F9F9F9] p-8 rounded-[20px] shadow-[0_4px_20px_0px_rgba(0,0,0,0.05)]">
                <h3 class="text-[#095763] text-2xl font-semibold mb-2">Contact Form</h3>
                <p class="text-gray-500 text-sm mb-6">Send us a message and we'll respond as soon as possible</p>
                
                <!-- Form -->
                <form>
                    <!-- Name -->
                    <div class="mb-4 relative">
                        <label class="block text-sm text-gray-600 mb-1">Your Name</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.6667 17.5V15.8333C16.6667 14.9493 16.3155 14.1014 15.6904 13.4763C15.0653 12.8512 14.2174 12.5 13.3334 12.5H6.66671C5.78265 12.5 4.93481 12.8512 4.30968 13.4763C3.68456 14.1014 3.33337 14.9493 3.33337 15.8333V17.5" stroke="#898989" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9.99996 9.16667C11.8409 9.16667 13.3333 7.67428 13.3333 5.83333C13.3333 3.99238 11.8409 2.5 9.99996 2.5C8.15901 2.5 6.66663 3.99238 6.66663 5.83333C6.66663 7.67428 8.15901 9.16667 9.99996 9.16667Z" stroke="#898989" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <input type="text" placeholder="example" class="w-full pl-10 pr-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:border-[#095763] bg-white">
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="mb-4 relative">
                        <label class="block text-sm text-gray-600 mb-1">Email</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.33329 3.33334H16.6666C17.5833 3.33334 18.3333 4.08334 18.3333 5.00001V15C18.3333 15.9167 17.5833 16.6667 16.6666 16.6667H3.33329C2.41663 16.6667 1.66663 15.9167 1.66663 15V5.00001C1.66663 4.08334 2.41663 3.33334 3.33329 3.33334Z" stroke="#898989" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M18.3333 5L9.99996 10.8333L1.66663 5" stroke="#898989" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <input type="email" placeholder="example@mail.com" class="w-full pl-10 pr-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:border-[#095763] bg-white">
                        </div>
                    </div>

                    <!-- Phone Number -->
                    <div class="mb-4">
                        <label class="block text-sm text-gray-600 mb-1">Phone Number</label>
                        <div class="flex">
                            <div class="relative flex-shrink-0">
                                <select class="appearance-none pl-8 pr-8 py-2 border border-gray-200 rounded-l-lg focus:outline-none focus:border-[#095763] bg-white">
                                    <option value="+20">+20</option>
                                </select>
                                <div class="absolute inset-y-0 left-2 flex items-center pointer-events-none">
                                    <img src="images/eg.svg" alt="Egypt flag" class="w-5 h-5">
                                </div>
                                <div class="absolute inset-y-0 right-2 flex items-center pointer-events-none">
                                    <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L5 5L9 1" stroke="#898989" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <input type="tel" placeholder="1234567890" class="w-full px-4 py-2 border border-gray-200 rounded-r-lg focus:outline-none focus:border-[#095763] bg-white border-l-0">
                        </div>
                    </div>

                    <!-- Country -->
                    <div class="mb-4">
                        <label class="block text-sm text-gray-600 mb-1">Country</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <img src="images/de.svg" alt="German flag" class="w-5 h-5">
                            </div>
                            <select class="w-full pl-10 pr-10 py-2 border border-gray-200 rounded-lg focus:outline-none focus:border-[#095763] bg-white appearance-none">
                                <option value="Germany">Germany</option>
                            </select>
                            <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none">
                                <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L5 5L9 1" stroke="#898989" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Message -->
                    <div class="mb-6 relative">
                        <label class="block text-sm text-gray-600 mb-1">Your message</label>
                        <div class="relative">
                            <div class="absolute left-3 top-3 pointer-events-none">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.5 8.33334H2.5" stroke="#898989" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17.5 5H2.5" stroke="#898989" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17.5 11.6667H2.5" stroke="#898989" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17.5 15H2.5" stroke="#898989" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <textarea placeholder="Please provide a brief description of how we can assist you - What's in your mind?" rows="4" class="w-full pl-10 pr-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:border-[#095763] bg-white"></textarea>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="w-full bg-[#C8E677] text-[#095763] font-semibold py-3 rounded-lg hover:bg-opacity-90 transition duration-300">
                        Send
                    </button>
                </form>
            </div>
        </div>

        <!-- Contact Information -->
        <div class="w-full">
            <div class=" p-8 ">
                <h3 class="text-[#095763] text-2xl font-semibold mb-8">Contact Information</h3>
                
                <!-- Phone -->
                <div class="flex items-start mb-8">
                    <div class="flex-shrink-0 mr-4">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.97 18.33C21.97 18.69 21.89 19.06 21.72 19.42C21.55 19.78 21.33 20.12 21.04 20.44C20.55 20.98 20.01 21.37 19.4 21.62C18.8 21.87 18.15 22 17.45 22C16.43 22 15.34 21.76 14.19 21.27C13.04 20.78 11.89 20.12 10.75 19.29C9.6 18.45 8.51 17.52 7.47 16.49C6.44 15.45 5.51 14.36 4.68 13.22C3.86 12.08 3.2 10.94 2.72 9.81C2.24 8.67 2 7.58 2 6.54C2 5.86 2.12 5.21 2.36 4.61C2.6 4 2.98 3.44 3.51 2.94C4.15 2.31 4.85 2 5.59 2C5.87 2 6.15 2.06 6.4 2.18C6.66 2.3 6.89 2.48 7.07 2.74L9.39 6.01C9.57 6.26 9.7 6.49 9.79 6.71C9.88 6.92 9.93 7.13 9.93 7.32C9.93 7.56 9.86 7.8 9.72 8.03C9.59 8.26 9.4 8.5 9.16 8.74L8.4 9.53C8.29 9.64 8.24 9.77 8.24 9.93C8.24 10.01 8.25 10.08 8.27 10.16C8.3 10.24 8.33 10.3 8.35 10.36C8.53 10.69 8.84 11.12 9.28 11.64C9.73 12.16 10.21 12.69 10.73 13.22C11.27 13.75 11.79 14.24 12.32 14.69C12.84 15.13 13.27 15.43 13.61 15.61C13.66 15.63 13.72 15.66 13.79 15.69C13.87 15.72 13.95 15.73 14.04 15.73C14.21 15.73 14.34 15.67 14.45 15.56L15.21 14.81C15.46 14.56 15.7 14.37 15.93 14.25C16.16 14.11 16.39 14.04 16.64 14.04C16.83 14.04 17.03 14.08 17.25 14.17C17.47 14.26 17.7 14.39 17.95 14.56L21.26 16.91C21.52 17.09 21.7 17.31 21.81 17.55C21.91 17.8 21.97 18.05 21.97 18.33Z" stroke="#095763" stroke-width="1.5" stroke-miterlimit="10"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-gray-500 text-sm mb-1">Phone Number</p>
                        <p class="text-[#095763] font-medium">+20100000000000</p>
                    </div>
                </div>

                <!-- Email -->
                <div class="flex items-start mb-8">
                    <div class="flex-shrink-0 mr-4">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="2" y="4" width="20" height="16" rx="3" stroke="#095763" stroke-width="1.5"/>
                            <path d="M2 7L12 13L22 7" stroke="#095763" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-gray-500 text-sm mb-1">Email</p>
                        <p class="text-[#095763] font-medium">info@Touresca.com</p>
                    </div>
                </div>

                <!-- Address -->
                <div class="flex items-start">
                    <div class="flex-shrink-0 mr-4">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 13.43C13.7231 13.43 15.12 12.0331 15.12 10.31C15.12 8.58687 13.7231 7.19 12 7.19C10.2769 7.19 8.88 8.58687 8.88 10.31C8.88 12.0331 10.2769 13.43 12 13.43Z" stroke="#095763" stroke-width="1.5"/>
                            <path d="M3.62001 8.49C5.59001 -0.169998 18.42 -0.159998 20.38 8.5C21.53 13.58 18.37 17.88 15.6 20.54C13.59 22.48 10.41 22.48 8.39001 20.54C5.63001 17.88 2.47001 13.57 3.62001 8.49Z" stroke="#095763" stroke-width="1.5"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-gray-500 text-sm mb-1">Address</p>
                        <p class="text-[#095763] font-medium">Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="lg:px-32 px-6">
<?php include "componets/get-help.php"?>
</div>
<br><br>
<br>

<?php include "componets/subscribe.php"?>
<br><br><br>
<?php include "componets/footer.php"?>

</body>
</html>