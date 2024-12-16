<?php
// faq.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="styles/general.css">
    <style>
    .faq-item {
        border: none;
        background-color :#F4F8F3 !important;
        border-radius: 8px;
        margin-bottom: 1rem;
        background-color: #f8f9fa;
        overflow: hidden;
    }
    .faq-item.active {
        background-color: white;
        border: 3px solid #46818A;
    }
    .faq-item:not(.active) {
        background-color: #f8f9fa;
    }
    .faq-question {
        cursor: pointer;
        padding: 1.25rem;
    }
    .faq-answer {
        display: none;
        padding: 0 1.25rem 1.25rem 1.25rem;
    }
    .faq-answer.active {
        display: block;
    }
    .chevron {
        transition: transform 0.3s ease;
    }
    .chevron.active {
        transform: rotate(180deg);
    }

    .faq-question h3 {
        font-size: 24px !important;
font-weight: 500;
line-height: 38.4px;
text-align: left;
    }

    .faq-answer p {
        font-size: 20px;
font-weight: 400;
line-height: 32px;
text-align: left;
text-underline-position: from-font;
text-decoration-skip-ink: none;
    }

    @media (max-width: 768px) {
    /* For mobile phones */
    .faq-item {
        margin-bottom: 0.5rem;
    }
    .faq-question {
        padding: 1rem;
    }
    .faq-question h3 {
        font-size: 14px !important;
        line-height: 1.4;
    }
    .faq-answer {
        padding: 0 1rem 1rem 1rem;
    }
    .faq-answer p {
        font-size: 14px;
    }
    .container {
        padding-left: 1rem;
        padding-right: 1rem;
    }
}

@media (min-width: 769px) and (max-width: 1024px) {
    /* For tablets */
    .faq-question {
        padding: 1.15rem;
    }
    .faq-question h3 {
        font-size: 15px;
    }
    .container {
        padding-left: 2rem;
        padding-right: 2rem;
    }
}

@media (min-width: 1025px) {
    /* For desktop */
    .faq-question {
        padding: 1.25rem;
    }
    .faq-question h3 {
        font-size: 16px;
    }
}
</style>
</head>
<body>
    <div class="container mx-auto max-w-7xl py-12">
        <!-- FAQ Items -->
        <div class="space-y-4">
            <!-- FAQ Item 1 -->
            <div class="faq-item">
                <div class="faq-question flex justify-between items-center" onclick="toggleFAQ(0)">
                    <h3 class="text-[#004D40] font-medium">1. What's included in each travel package?</h3>
                    <svg class="chevron w-5 h-5 text-[#46818A]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
                <div class="faq-answer " id="faq-answer-0">
                    <p class="text-gray-600">
                        Lorem ipsum dolor sit amet consectetur. Dolor at sed purus sit lectus rhoncus neque. Sed purus quam vel proin. Massa suspendisse massa et aliquam.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="faq-item">
                <div class="faq-question flex justify-between items-center" onclick="toggleFAQ(1)">
                    <h3 class="text-[#004D40] font-medium">2. What's included in each travel package?</h3>
                    <svg class="chevron w-5 h-5 text-[#46818A]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
                <div class="faq-answer" id="faq-answer-1">
                    <p class="text-gray-600">
                        Lorem ipsum dolor sit amet consectetur. Dolor at sed purus sit lectus rhoncus neque. Sed purus quam vel proin. Massa suspendisse massa et aliquam.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="faq-item">
                <div class="faq-question flex justify-between items-center" onclick="toggleFAQ(2)">
                    <h3 class="text-[#004D40] font-medium">3. What's included in each travel package?</h3>
                    <svg class="chevron w-5 h-5 text-[#46818A]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
                <div class="faq-answer" id="faq-answer-2">
                    <p class="text-gray-600">
                        Lorem ipsum dolor sit amet consectetur. Dolor at sed purus sit lectus rhoncus neque. Sed purus quam vel proin. Massa suspendisse massa et aliquam.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="faq-item">
                <div class="faq-question flex justify-between items-center" onclick="toggleFAQ(3)">
                    <h3 class="text-[#004D40] font-medium">4. What's included in each travel package?</h3>
                    <svg class="chevron w-5 h-5 text-[#46818A]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
                <div class="faq-answer" id="faq-answer-3">
                    <p class="text-gray-600">
                        Lorem ipsum dolor sit amet consectetur. Dolor at sed purus sit lectus rhoncus neque. Sed purus quam vel proin. Massa suspendisse massa et aliquam.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleFAQ(index) {
            const allFaqItems = document.querySelectorAll('.faq-item');
            const allAnswers = document.querySelectorAll('.faq-answer');
            const allChevrons = document.querySelectorAll('.chevron');
            
            allFaqItems.forEach((item, i) => {
                if (i === index) {
                    item.classList.toggle('active');
                } else {
                    item.classList.remove('active');
                }
            });

            allAnswers.forEach((item, i) => {
                if (i === index) {
                    item.classList.toggle('active');
                } else {
                    item.classList.remove('active');
                }
            });

            allChevrons.forEach((item, i) => {
                if (i === index) {
                    item.classList.toggle('active');
                } else {
                    item.classList.remove('active');
                }
            });
        }
    </script>
</body>
</html>