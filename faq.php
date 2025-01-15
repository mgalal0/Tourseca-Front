<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/font-2.css">
    <title>FAQ</title>
</head>
<body>

<?php include "componets/navbar.php"?>

<!-- FAQ Hero Section -->
<section class="bg-gradient-to-b from-[#105B66] to-[#BAD0B4] py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-0">
    <h1 class="font-['Berkshire_Swash'] text-[#C8E677] text-[40px] mb-2 md:text-6xl md:mb-8">FAQ</h1>
            <p class="text-white text[24px] max-w-3xl" style="line-height:30.4px;">
            We're here to help make your trip planning as smooth and enjoyable as possible, Find answers to our for your questions about traveling in Egypt.
        </p>
    </div>
</section>
<div class="mb-12">
<?php include "componets/faq.php"?>
</div>
<?php include "componets/footer.php"?>

</body>
</html>