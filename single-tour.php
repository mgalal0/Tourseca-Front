<?php
// single-tour.php
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
    <title>Single Tour</title>
    <meta name="description"
        content="Dreaming of a getaway within Egypt ? Discover unbeatable destinations across egypt , Whether you're craving the golden beaches of the Red Sea, the serene beauty of the Nile, or the vibrant culture of Cairo, secure your spot now !">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/font-2.css">
    <style>
        .background-container {
            background: linear-gradient(180deg, #276C76 0%, #BAD0B4 70%, #FFFFFF 100%);
            min-height: 100vh;
            position: relative;
            overflow: hidden;
        }

        /* start common styles */
        .btn {
            width: auto;
            /* height: 48px; */
            padding-bottom: 10px;
            cursor: pointer;
            font-size: 16px;
            color:
                <?= $_primary ?>
            ;
        }

        .btn-primary,
        .btn-secondary:hover {
            border-bottom: 2px solid
                <?= $_primary ?>
            ;
        }

        .btn-secondary {}

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: hwb(0deg 0% 100% / 30%);
        }

        .overlay:hover {
            background-color: hwb(0deg 0% 100% / 0%);
            animation: fadeIn 0.8s;
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
            .btn {
                font-size: 12px;
            }

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

        /* end common styles */
        /* start what are saying section styles */
        .blog-section .swiper-pagination-bullet,
        .reviews-section .swiper-pagination-bullet {
            background-color: #C1D5D8 !important;
        }

        .blog-section .swiper-pagination-bullet-active,
        .reviews-section .swiper-pagination-bullet-active {
            background-color:
                <?= $_primary ?>
                !important;
        }

        /* end what are saying section styles */
    </style>
</head>

<body>
    <?php include "componets/navbar.php" ?>
    <!-- Start Hero Section -->
    <div class="background-container">
        <section class="hero-section max-w-7xl px-4 sm:px-6 lg:px-8 mx-auto pt-24">
            <div class="mb-12 flex justify-between items-start">
                <div>
                    <h1 style="font-family: 'Berkshire Swash', cursive;"
                        class="text-[32px] md:text-[64px] font-semibold mb-4 text-[<?= $_yellow ?>]">
                        Grand tour of Cairo
                    </h1>
                    <ul class="grid grid-cols-2 gap-2 md:gap-6">
                        <li class="flex items-center gap-2">
                            <p class="w-[32px] h-[32px] rounded-full bg-[#FDFDFDB2] flex items-center justify-center">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_243_2329)">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M2.18619 2.17406H4.37753V0.96875C4.37753 0.796625 4.51791 0.65625 4.69003 0.65625H5.39441C5.56653 0.65625 5.70691 0.796625 5.70691 0.96875V2.17406H10.2931V0.96875C10.2931 0.796625 10.4335 0.65625 10.6056 0.65625H11.31C11.4821 0.65625 11.6225 0.796625 11.6225 0.96875V2.17406H13.8138C14.6565 2.17406 15.3438 2.86134 15.3438 3.704V4.68428H0.65625V3.704C0.65625 2.86134 1.34353 2.17406 2.18619 2.17406ZM15.3438 5.43431V13.8138C15.3438 14.6565 14.6565 15.3438 13.8138 15.3438H2.18619C1.34353 15.3438 0.65625 14.6565 0.65625 13.8138V5.43431H15.3438ZM3.10241 7.26297V9.16081H5.00022V7.26297H3.10241ZM3.10241 11.2423V13.1401H5.00022V11.2423H3.10241ZM10.9998 11.2423V13.1401H12.8976V11.2423H10.9998ZM7.05109 11.2423V13.1401H8.94891V11.2423H7.05109ZM10.9998 7.26297V9.16081H12.8976V7.26297H10.9998ZM7.05109 7.26297V9.16081H8.94891V7.26297H7.05109Z"
                                            fill="#095763" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_243_2329">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </p>
                            <p class="text-gray-100 text-sm md:text-base">Every <strong>Sunday ,Thursday</strong></p>
                        </li>
                        <li class="flex items-center gap-2">
                            <p class="w-[32px] h-[32px] rounded-full bg-[#FDFDFDB2] flex items-center justify-center">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15 2.5V13.5C15 13.7652 14.8946 14.0196 14.7071 14.2071C14.5196 14.3946 14.2652 14.5 14 14.5H12C11.7348 14.5 11.4804 14.3946 11.2929 14.2071C11.1054 14.0196 11 13.7652 11 13.5V2.5C11 2.23478 11.1054 1.98043 11.2929 1.79289C11.4804 1.60536 11.7348 1.5 12 1.5H14C14.2652 1.5 14.5196 1.60536 14.7071 1.79289C14.8946 1.98043 15 2.23478 15 2.5ZM9 5H7C6.73478 5 6.48043 5.10536 6.29289 5.29289C6.10536 5.48043 6 5.73478 6 6V13.5C6 13.7652 6.10536 14.0196 6.29289 14.2071C6.48043 14.3946 6.73478 14.5 7 14.5H9C9.26522 14.5 9.51957 14.3946 9.70711 14.2071C9.89464 14.0196 10 13.7652 10 13.5V6C10 5.73478 9.89464 5.48043 9.70711 5.29289C9.51957 5.10536 9.26522 5 9 5ZM4 8.5H2C1.73478 8.5 1.48043 8.60536 1.29289 8.79289C1.10536 8.98043 1 9.23478 1 9.5V13.5C1 13.7652 1.10536 14.0196 1.29289 14.2071C1.48043 14.3946 1.73478 14.5 2 14.5H4C4.26522 14.5 4.51957 14.3946 4.70711 14.2071C4.89464 14.0196 5 13.7652 5 13.5V9.5C5 9.23478 4.89464 8.98043 4.70711 8.79289C4.51957 8.60536 4.26522 8.5 4 8.5Z"
                                        fill="#095763" />
                                </svg>
                            </p>
                            <p class="text-gray-100 text-sm md:text-base">Activity level : <strong>High</strong></p>
                        </li>
                        <li class="flex items-center gap-2">
                            <p class="w-[32px] h-[32px] rounded-full bg-[#FDFDFDB2] flex items-center justify-center">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_243_2335)">
                                        <path
                                            d="M8 13C10.7614 13 13 10.7614 13 8C13 5.23858 10.7614 3 8 3C5.23858 3 3 5.23858 3 8C3 10.7614 5.23858 13 8 13Z"
                                            fill="#095763" />
                                        <path
                                            d="M14.6667 8.49992C14.5341 8.49992 14.4069 8.44724 14.3131 8.35347C14.2193 8.25971 14.1667 8.13253 14.1667 7.99992C14.1669 7.64732 14.1368 7.29536 14.0767 6.94792C14.0655 6.88318 14.0672 6.81687 14.0817 6.75279C14.0961 6.6887 14.1231 6.62809 14.161 6.57442C14.1988 6.52075 14.2469 6.47506 14.3025 6.43998C14.358 6.40489 14.4199 6.38108 14.4847 6.36992C14.6154 6.34738 14.7498 6.3777 14.8582 6.45421C14.9118 6.4921 14.9575 6.54019 14.9926 6.59573C15.0277 6.65127 15.0515 6.71318 15.0627 6.77792C15.1317 7.18159 15.1665 7.59038 15.1667 7.99992C15.1667 8.13253 15.114 8.25971 15.0202 8.35347C14.9265 8.44724 14.7993 8.49992 14.6667 8.49992ZM14.2133 6.08059C14.1125 6.08088 14.014 6.05065 13.9307 5.99389C13.8474 5.93714 13.7833 5.8565 13.7467 5.76259C13.597 5.37977 13.4098 5.01265 13.188 4.66659C13.1525 4.61135 13.1282 4.54965 13.1166 4.48503C13.1049 4.4204 13.1061 4.35412 13.1201 4.28995C13.134 4.22579 13.1605 4.165 13.1979 4.11106C13.2354 4.05712 13.2831 4.01109 13.3383 3.97559C13.3936 3.94009 13.4553 3.91581 13.5199 3.90416C13.5845 3.8925 13.6508 3.89368 13.715 3.90764C13.7791 3.9216 13.8399 3.94806 13.8939 3.98552C13.9478 4.02297 13.9938 4.07068 14.0293 4.12592C14.288 4.52784 14.5057 4.95464 14.6793 5.39992C14.7275 5.52343 14.7246 5.66099 14.6713 5.78238C14.6181 5.90377 14.5188 5.99904 14.3953 6.04726C14.3372 6.06934 14.2755 6.08064 14.2133 6.08059ZM12.2933 3.39992C12.1754 3.39995 12.0613 3.35814 11.9713 3.28192C11.657 3.01656 11.3169 2.7834 10.956 2.58592C10.8397 2.52227 10.7534 2.41501 10.7161 2.28773C10.6789 2.16046 10.6937 2.0236 10.7573 1.90725C10.821 1.79091 10.9282 1.70462 11.0555 1.66736C11.1828 1.63011 11.3197 1.64494 11.436 1.70859C11.8554 1.93803 12.2507 2.20894 12.616 2.51725C12.6946 2.58331 12.7509 2.67195 12.7773 2.77112C12.8037 2.87029 12.799 2.97519 12.7638 3.07159C12.7286 3.16799 12.6645 3.2512 12.5803 3.30994C12.4962 3.36868 12.396 3.4001 12.2933 3.39992ZM9.96933 2.12925C9.91914 2.12914 9.86926 2.1215 9.82133 2.10659C9.23135 1.92473 8.61738 1.83259 8 1.83325C7.86739 1.83325 7.74022 1.78058 7.64645 1.68681C7.55268 1.59304 7.5 1.46586 7.5 1.33325C7.5 1.20065 7.55268 1.07347 7.64645 0.979701C7.74022 0.885933 7.86739 0.833254 8 0.833254C8.71776 0.832698 9.43153 0.940123 10.1173 1.15192C10.2314 1.18749 10.329 1.26274 10.3924 1.36403C10.4557 1.46533 10.4808 1.58597 10.4629 1.70412C10.445 1.82226 10.3854 1.93009 10.2948 2.00808C10.2043 2.08607 10.0888 2.12905 9.96933 2.12925Z"
                                            fill="#095763" />
                                        <path
                                            d="M8.00065 15.1666C6.09993 15.1666 4.27706 14.4115 2.93305 13.0675C1.58904 11.7235 0.833984 9.90064 0.833984 7.99992C0.833984 6.0992 1.58904 4.27633 2.93305 2.93232C4.27706 1.58831 6.09993 0.833252 8.00065 0.833252C8.13326 0.833252 8.26044 0.88593 8.3542 0.979699C8.44797 1.07347 8.50065 1.20064 8.50065 1.33325C8.50065 1.46586 8.44797 1.59304 8.3542 1.68681C8.26044 1.78057 8.13326 1.83325 8.00065 1.83325C6.781 1.83325 5.58874 2.19492 4.57463 2.87252C3.56053 3.55012 2.77013 4.51323 2.30339 5.64004C1.83665 6.76685 1.71453 8.00676 1.95247 9.20298C2.19042 10.3992 2.77774 11.498 3.64016 12.3604C4.50258 13.2228 5.60138 13.8102 6.79759 14.0481C7.99381 14.286 9.23372 14.1639 10.3605 13.6972C11.4873 13.2304 12.4504 12.44 13.128 11.4259C13.8056 10.4118 14.1673 9.21957 14.1673 7.99992C14.1673 7.86731 14.22 7.74013 14.3138 7.64637C14.4075 7.5526 14.5347 7.49992 14.6673 7.49992C14.7999 7.49992 14.9271 7.5526 15.0209 7.64637C15.1146 7.74013 15.1673 7.86731 15.1673 7.99992C15.1652 9.89999 14.4095 11.7216 13.0659 13.0652C11.7224 14.4087 9.90072 15.1645 8.00065 15.1666Z"
                                            fill="#095763" />
                                        <path
                                            d="M10.668 10.4998C10.56 10.4998 10.4549 10.4647 10.3686 10.3998L7.70195 8.39984C7.63985 8.35326 7.58945 8.29287 7.55474 8.22344C7.52003 8.15402 7.50195 8.07746 7.50195 7.99984V4.6665C7.50195 4.5339 7.55463 4.40672 7.6484 4.31295C7.74217 4.21918 7.86934 4.1665 8.00195 4.1665C8.13456 4.1665 8.26174 4.21918 8.35551 4.31295C8.44927 4.40672 8.50195 4.5339 8.50195 4.6665V7.74984L10.9686 9.59984C11.0526 9.66284 11.1147 9.75068 11.1459 9.85091C11.1772 9.95115 11.1761 10.0587 11.1429 10.1583C11.1096 10.2579 11.0458 10.3444 10.9606 10.4058C10.8753 10.4671 10.773 10.5 10.668 10.4998Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_243_2335">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </p>
                            <p class="text-gray-100 text-sm md:text-base">Duration : <strong>3 Days , 2 Nights</strong>
                            </p>
                        </li>
                        <li class="flex items-center gap-2">
                            <p class="w-[32px] h-[32px] rounded-full bg-[#FDFDFDB2] flex items-center justify-center">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.67077 3.40012L10.6127 2.48181C10.6798 2.41644 10.7272 2.33358 10.7497 2.24262C10.7721 2.15167 10.7687 2.05624 10.7397 1.96715C10.7107 1.87806 10.6573 1.79887 10.5857 1.73853C10.514 1.67819 10.4269 1.63911 10.3342 1.62573L9.03197 1.43655L8.44987 0.256804C8.40363 0.178575 8.3378 0.113749 8.25887 0.0687163C8.17993 0.0236838 8.09063 0 7.99975 0C7.90888 0 7.81957 0.0236838 7.74064 0.0687163C7.66171 0.113749 7.59588 0.178575 7.54963 0.256804L6.96754 1.43655L5.66535 1.62573C5.57267 1.63919 5.4856 1.67832 5.414 1.73869C5.3424 1.79906 5.28912 1.87827 5.26019 1.96734C5.23127 2.05642 5.22784 2.15181 5.25032 2.24273C5.27279 2.33365 5.32025 2.41647 5.38735 2.48181L6.32924 3.40012L6.10694 4.69729C6.09119 4.7895 6.10154 4.88429 6.13681 4.97093C6.17208 5.05758 6.23087 5.13264 6.30654 5.18765C6.38221 5.24265 6.47175 5.27541 6.56505 5.28222C6.65835 5.28903 6.7517 5.26963 6.83456 5.22619L7.99975 4.61399L9.16444 5.22619C9.24732 5.26976 9.34073 5.28928 9.43411 5.28254C9.5275 5.27579 9.61713 5.24306 9.69288 5.18803C9.76863 5.13301 9.82748 5.05789 9.86277 4.97116C9.89806 4.88444 9.90838 4.78957 9.89257 4.69729L9.67077 3.40012ZM16.0041 3.4508C15.9751 3.36182 15.9218 3.28272 15.8503 3.22242C15.7787 3.16212 15.6917 3.12304 15.5991 3.10957L14.2969 2.91989L13.7143 1.74014C13.6682 1.66179 13.6024 1.59684 13.5234 1.55172C13.4445 1.50659 13.3551 1.48285 13.2642 1.48285C13.1733 1.48285 13.0839 1.50659 13.005 1.55172C12.926 1.59684 12.8602 1.66179 12.8141 1.74014L12.232 2.91989L10.9298 3.10907C10.8371 3.12253 10.7501 3.16166 10.6784 3.22203C10.6068 3.2824 10.5536 3.36161 10.5246 3.45068C10.4957 3.53976 10.4923 3.63515 10.5148 3.72607C10.5372 3.81699 10.5847 3.89981 10.6518 3.96515L11.5942 4.88346L11.3714 6.18063C11.3555 6.27295 11.3657 6.36789 11.4009 6.45469C11.4362 6.54149 11.495 6.6167 11.5708 6.67179C11.6466 6.72688 11.7363 6.75967 11.8297 6.76642C11.9231 6.77318 12.0166 6.75365 12.0995 6.71003L13.2637 6.09783L14.4289 6.71003C14.5118 6.75365 14.6053 6.77318 14.6987 6.76642C14.7922 6.75967 14.8818 6.72688 14.9576 6.67179C15.0334 6.6167 15.0922 6.54149 15.1275 6.45469C15.1627 6.36789 15.1729 6.27295 15.157 6.18063L14.9347 4.88346L15.8766 3.96515C15.9437 3.89985 15.9912 3.81707 16.0138 3.72617C16.0363 3.63528 16.0329 3.53989 16.0041 3.4508ZM5.0692 3.10907L3.76752 2.91989L3.18542 1.74014C3.14401 1.65611 3.0799 1.58534 3.00035 1.53586C2.9208 1.48638 2.82899 1.46015 2.7353 1.46015C2.64162 1.46015 2.5498 1.48638 2.47025 1.53586C2.3907 1.58534 2.32659 1.65611 2.28518 1.74014L1.70308 2.91989L0.400395 3.10907C0.307711 3.12253 0.220644 3.16166 0.149043 3.22203C0.0774415 3.2824 0.024164 3.36161 -0.00476242 3.45068C-0.0336888 3.53976 -0.0371097 3.63515 -0.014638 3.72607C0.0078337 3.81699 0.0553011 3.89981 0.122394 3.96515L1.06479 4.88346L0.842487 6.18063C0.826742 6.27284 0.837088 6.36763 0.872358 6.45427C0.907627 6.54092 0.966415 6.61598 1.04209 6.67099C1.11776 6.72599 1.2073 6.75875 1.3006 6.76556C1.3939 6.77237 1.48725 6.75296 1.57011 6.70953L2.7353 6.09733L3.89949 6.70953C3.98238 6.75324 4.07585 6.77287 4.16932 6.7662C4.26278 6.75952 4.35252 6.72681 4.42835 6.67176C4.50418 6.61671 4.56309 6.54153 4.59839 6.45473C4.6337 6.36793 4.64399 6.27298 4.62811 6.18063L4.40581 4.88346L5.34821 3.96515C5.41516 3.89976 5.46249 3.81694 5.48485 3.72605C5.50721 3.63517 5.50371 3.53984 5.47474 3.45085C5.44577 3.36185 5.39249 3.28273 5.32092 3.22242C5.24934 3.16211 5.16233 3.12303 5.0697 3.10957L5.0692 3.10907ZM13.0178 7.50389H2.98169C2.58255 7.50429 2.19987 7.66303 1.91764 7.94526C1.6354 8.22749 1.47667 8.61017 1.47627 9.00931V13.0238C1.47667 13.4229 1.6354 13.8056 1.91764 14.0878C2.19987 14.3701 2.58255 14.5288 2.98169 14.5292H6.28659L7.64498 15.8876C7.73908 15.9816 7.86669 16.0345 7.99975 16.0345C8.13281 16.0345 8.26043 15.9816 8.35453 15.8876L9.71292 14.5292H13.0178C13.417 14.5288 13.7996 14.3701 14.0819 14.0878C14.3641 13.8056 14.5228 13.4229 14.5232 13.0238V9.00931C14.5228 8.61017 14.3641 8.22749 14.0819 7.94526C13.7996 7.66303 13.417 7.50429 13.0178 7.50389ZM12.0142 12.522H3.9853C3.85221 12.522 3.72458 12.4691 3.63047 12.375C3.53636 12.2809 3.48349 12.1532 3.48349 12.0202C3.48349 11.8871 3.53636 11.7594 3.63047 11.6653C3.72458 11.5712 3.85221 11.5183 3.9853 11.5183H12.0142C12.1473 11.5183 12.2749 11.5712 12.369 11.6653C12.4631 11.7594 12.516 11.8871 12.516 12.0202C12.516 12.1532 12.4631 12.2809 12.369 12.375C12.2749 12.4691 12.1473 12.522 12.0142 12.522ZM12.0142 10.5147H3.9853C3.85221 10.5147 3.72458 10.4619 3.63047 10.3678C3.53636 10.2736 3.48349 10.146 3.48349 10.0129C3.48349 9.87984 3.53636 9.7522 3.63047 9.65809C3.72458 9.56399 3.85221 9.51112 3.9853 9.51112H12.0142C12.1473 9.51112 12.2749 9.56399 12.369 9.65809C12.4631 9.7522 12.516 9.87984 12.516 10.0129C12.516 10.146 12.4631 10.2736 12.369 10.3678C12.2749 10.4619 12.1473 10.5147 12.0142 10.5147Z"
                                        fill="#095763" />
                                </svg>
                            </p>
                            <p class="text-gray-100 text-sm md:text-base">Rating : <strong>4.8</strong></p>
                        </li>
                        <li class="flex items-center gap-2">
                            <p class="w-[32px] h-[32px] rounded-full bg-[#FDFDFDB2] flex items-center justify-center">
                                <svg width="16" height="10" viewBox="0 0 16 10" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.26441 6.15771C4.31364 6.08348 4.36435 6.01059 4.41846 5.9395L4.52875 5.79462L4.39954 5.71927C3.95693 5.46121 3.44784 5.32486 2.92686 5.32486C1.34103 5.32473 0.0507812 6.58154 0.0507812 8.12616V8.98696C0.0507812 9.1461 0.184248 9.27569 0.348389 9.27569H3.56643V8.46184C3.56643 8.36806 3.57067 8.26889 3.57958 8.14984L3.58394 8.0926C3.59305 7.98879 3.60599 7.88535 3.62275 7.78249L3.62528 7.76884C3.64385 7.65896 3.66678 7.54986 3.694 7.4418C3.72112 7.33561 3.7524 7.23052 3.78779 7.12679L3.66109 7.08496L3.79542 7.10435C3.86562 6.902 3.95121 6.70531 4.05145 6.51603L4.07338 6.47459C4.1203 6.38804 4.17034 6.30322 4.22338 6.22028L4.26441 6.15771ZM2.92686 4.60945C3.76551 4.60945 4.44775 3.94522 4.44775 3.12875C4.44775 2.3123 3.76551 1.64808 2.92686 1.64808C2.08823 1.64808 1.406 2.3123 1.406 3.12891C1.406 3.94522 2.08823 4.60941 2.92689 4.60941L2.92686 4.60945ZM12.0225 8.20334C12.0201 8.16313 12.017 8.12297 12.013 8.08289C12.0104 8.05609 12.0066 8.02955 12.0034 8.00288C11.9994 7.96728 11.9947 7.93175 11.9895 7.89631C11.9853 7.8689 11.9802 7.8415 11.9755 7.81406C11.9695 7.77964 11.9634 7.74521 11.9565 7.71101C11.9512 7.68447 11.945 7.65806 11.939 7.63152C11.9313 7.59668 11.9231 7.56195 11.9143 7.52735C11.9081 7.50267 11.9012 7.47812 11.8945 7.45373C11.8843 7.41719 11.8738 7.38071 11.8625 7.34465C11.8558 7.32302 11.8486 7.30135 11.8416 7.27981C11.8287 7.24074 11.8152 7.20192 11.8012 7.16336C11.7944 7.14535 11.7878 7.12746 11.7809 7.10942C11.7647 7.06723 11.7476 7.02536 11.7298 6.98384C11.7239 6.96993 11.718 6.95608 11.7119 6.94226C11.6917 6.89658 11.6706 6.85128 11.6487 6.80639C11.644 6.79703 11.6395 6.78764 11.6349 6.77835C11.6104 6.72927 11.5849 6.68073 11.5583 6.63276C11.5555 6.62764 11.5527 6.62251 11.5499 6.61735C11.5206 6.56518 11.4902 6.51371 11.4585 6.46298L11.4567 6.4601C10.7603 5.34576 9.50116 4.60015 8.06642 4.60015C6.84054 4.60015 5.743 5.14482 5.01492 5.99835L4.99864 6.01761C4.96529 6.05732 4.93273 6.09768 4.90098 6.13867C4.89386 6.14784 4.88658 6.15723 4.87944 6.16662C4.85076 6.20439 4.82276 6.24267 4.79546 6.28144C4.78616 6.29458 4.7769 6.30759 4.76789 6.32099C4.74425 6.3557 4.72113 6.39076 4.69853 6.42615C4.68725 6.44394 4.67574 6.46148 4.66488 6.47936C4.64632 6.50943 4.62866 6.53997 4.61103 6.57039C4.59737 6.59405 4.58333 6.61748 4.57032 6.64139C4.55792 6.66382 4.54641 6.68671 4.53439 6.70963C4.51759 6.74168 4.50057 6.77348 4.48468 6.80604C4.48355 6.80816 4.48269 6.8104 4.48153 6.81268C4.3854 7.01082 4.30665 7.21693 4.24617 7.42869C4.24403 7.43619 4.24178 7.44357 4.23963 7.45097C4.22737 7.49558 4.21589 7.54041 4.20521 7.58543C4.20184 7.59934 4.19848 7.61322 4.19534 7.627C4.18602 7.66813 4.17738 7.70941 4.16941 7.75082C4.16566 7.76999 4.16226 7.78916 4.15889 7.80829C4.15224 7.84597 4.14614 7.88374 4.14062 7.9216C4.137 7.94686 4.1337 7.97216 4.13072 7.9975C4.12659 8.03067 4.12245 8.06372 4.11918 8.09702C4.11582 8.13109 4.11357 8.16526 4.11107 8.19943C4.10931 8.22523 4.1069 8.25103 4.10569 8.27693C4.10267 8.33815 4.10078 8.39976 4.10078 8.46162V9.67237C4.10078 9.85315 4.25316 10.0001 4.44022 10.0001H11.693C11.8801 10.0001 12.0324 9.85315 12.0324 9.67237V8.46188C12.0324 8.39803 12.0307 8.3344 12.0274 8.27132C12.0263 8.24866 12.024 8.226 12.0225 8.20334ZM7.97366 3.76592C9.04079 3.76592 9.90883 2.92117 9.90883 1.88296C9.90883 0.844745 9.04079 0 7.97366 0C6.90654 0 6.03849 0.844745 6.03849 1.88296C6.03849 2.92117 6.90666 3.76592 7.97366 3.76592ZM13.0728 5.12565C12.5085 5.12565 11.9607 5.28579 11.4891 5.58891L11.3642 5.66904L11.4586 5.78251C11.6705 6.0371 11.8519 6.31561 11.999 6.61235L12.0055 6.62575C12.0327 6.68107 12.0587 6.73716 12.0841 6.79476L12.0935 6.8163C12.1173 6.87175 12.14 6.92762 12.1654 6.99397L12.1703 7.00637C12.218 7.13388 12.2594 7.26367 12.2943 7.39526L12.3022 7.42732C12.3158 7.47966 12.3283 7.5323 12.3397 7.58517L12.3533 7.65345C12.3669 7.72096 12.3786 7.78883 12.3885 7.85698C12.3945 7.89794 12.4001 7.93887 12.4047 7.98045C12.4076 8.00625 12.4107 8.03192 12.4132 8.05769C12.4176 8.10215 12.4207 8.14686 12.4234 8.19167L12.4279 8.25905C12.4312 8.32626 12.4333 8.39376 12.4333 8.46149V9.07626H15.6514C15.8155 9.07626 15.949 8.94667 15.949 8.7874V7.92663C15.9489 6.38234 14.6586 5.12565 13.0728 5.12565H13.0728ZM13.0728 4.47947C13.9114 4.47947 14.5936 3.81525 14.5936 2.99877C14.5936 2.1823 13.9114 1.51811 13.0727 1.51811C12.2341 1.51811 11.5519 2.18233 11.5519 2.99881C11.5519 3.81528 12.2341 4.47947 13.0728 4.47947Z"
                                        fill="#095763" />
                                </svg>
                            </p>
                            <p class="text-gray-100 text-sm md:text-base">Group size : <strong>15-24 person</strong></p>
                        </li>
                    </ul>
                </div>
                <div class="hidden md:block pt-4">
                    <strong
                        class="w-[95px] h-[38px] font-semibold flex justify-center items-center rounded-[32px] bg-[#DFFE8E]">
                        -45 %</strong>
                    <div class="flex items-center gap-2 mt-4 text-white">
                        <span>Start from:</span>
                        <span class="text-[40px] font-semibold">100.00$</span>
                        <span>/ Person</span>
                    </div>
                    <button class=" w-full h-[56px] bg-[#FBFEF3] text-[#05363D] font-semibold rounded-[32px] mt-6">
                        See dates and prices
                    </button>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 max-h-[680px]">
                <!-- Large Image -->
                <div class="col-span-2 md:col-span-1">
                    <img src="images/single-tour/abou-elholl.jpg" alt="Cairo"
                        class="rounded-lg w-full h-full object-cover">
                </div>
                <!-- Smaller Images -->
                <div class="grid col-span-2 md:col-span-1 gap-4">
                    <div class="">
                        <img src="images/single-tour/cairo.jpg" alt="Cairo" class="rounded-lg object-cover">
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <img src="images/destinations/khan-el-khalili.jpg" alt="Cairo"
                            class="rounded-lg h-auto object-cover">
                        <div class=" relative">
                            <div class="overlay flex justify-center items-center text-white text-2xl">+7 Photos</div>
                            <img src="images/single-tour/cairo.jpg" alt="Cairo" class="rounded-lg h-auto object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- End Hero Section -->



    <!-- Start tab-link -->
    <section class="tab-link shadow-[0_4px_8px_rgba(0,0,0,0.08)] ">
        <ul
            class="pb-4 max-w-7xl px-4 sm:px-6 lg:px-8 mx-auto relative my-12 md:my-16 grid grid-cols-3 md:grid-cols-8 gap-2">
            <li><a href="#" data-content="overview" class="btn btn-secondary btn-primary">Overview</a></li>
            <li><a href="#" data-content="itinerary" class="btn btn-secondary">Itinerary</a></li>
            <li><a href="#" data-content="flights" class="btn btn-secondary">Flights</a></li>
            <li><a href="#" data-content="prices" class="btn btn-secondary">Prices</a></li>
            <li><a href="#" data-content="reviews" class="btn btn-secondary">Reviews</a></li>
            <li><a href="#" data-content="faq" class="btn btn-secondary">FAQ</a></li>
        </ul>

    </section>
    <!-- End tab-link -->

    <div class="max-w-7xl mx-auto grid grid-cols-3 gap-8">
        <!-- start tab link content -->
        <div id="content" class=" col-span-3 md:col-span-2">
            <!-- overview -->
            <div class="tab-content" data-tab="overview">
                <section class="max-w-7xl px-4 sm:px-6 lg:px-8 mx-auto relative mb-16">
                    <h3 class="text-[<?= $_primary ?>] text-[26px] md:text-[36px] font-semibold mb-6">Overview</h3>
                    <h5 class="text-xl font-semibold mb-2">
                        Immerse yourself in Egypt’s rich history and vibrant culture .
                    </h5>
                    <p class="text-gray-500 leading-8 mt-0 mb-6 text-sm md:text-base">
                        Immerse yourself in Egypt’s rich history and vibrant culture on a grand journey through Cairo,
                        from
                        the ancient pyramids of Giza to the bustling bazaars of Khan El Khalili Immerse yourself in
                        Egypt’s
                        rich history and vibrant culture on a grand journey through Cairo, from the ancient pyramids of
                        Giza
                        to the bustling bazaars of Khan El Khalili.
                    </p>
                    <div class="flex justify-between items-start flex-wrap">
                        <div>
                            <h3 class="text-xl text-[<?= $_primary ?>] font-semibold">Your Trip include :</h3>
                            <ul class="mt-4">
                                <li class="flex items-center gap-2 mb-3">
                                    <img loading="lazy" src="images/icons/mark.svg" alt="Mark icon" />
                                    <span>All flights</span>
                                </li>
                                <li class="flex items-center gap-2 mb-3">
                                    <img loading="lazy" src="images/icons/mark.svg" alt="Mark icon" />
                                    <span>Accommodation</span>
                                </li>
                                <li class="flex items-center gap-2 mb-3">
                                    <img loading="lazy" src="images/icons/mark.svg" alt="Mark icon" />
                                    <span>All transfers</span>
                                </li>
                                <li class="flex items-center gap-2 mb-3">
                                    <img loading="lazy" src="images/icons/mark.svg" alt="Mark icon" />
                                    <span>Activities</span>
                                </li>
                                <li class="flex items-center gap-2 mb-3">
                                    <img loading="lazy" src="images/icons/mark.svg" alt="Mark icon" />
                                    <span>Some meals</span>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-xl text-[<?= $_primary ?>] font-semibold">Trip Highlights :</h3>
                            <ul class="mt-4">
                                <li class="flex items-center gap-2 mb-3">
                                    <img loading="lazy" src="images/icons/location.svg" alt="Location icon" />
                                    <span>The Pyramids of Giza</span>
                                </li>
                                <li class="flex items-center gap-2 mb-3">
                                    <img loading="lazy" src="images/icons/location.svg" alt="Location icon" />
                                    <span>Sphinx</span>
                                </li>
                                <li class="flex items-center gap-2 mb-3">
                                    <img loading="lazy" src="images/icons/location.svg" alt="Location icon" />
                                    <span>Egyptian Museum</span>
                                </li>
                                <li class="flex items-center gap-2 mb-3">
                                    <img loading="lazy" src="images/icons/location.svg" alt="Location icon" />
                                    <span>Khan El Khalili Bazaar</span>
                                </li>
                                <li class="flex items-center gap-2 mb-3">
                                    <img loading="lazy" src="images/icons/location.svg" alt="Location icon" />
                                    <span>Nile River Cruise</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>

            <!-- itinerary -->
            <div class="tab-content" data-tab="itinerary" style="display: none;">
                <?php include "componets/st-itinerary.php" ?>
            </div>
            <!-- flights -->
            <div class="tab-content" data-tab="flights" style="display: none;">
                <section class="max-w-7xl px-4 sm:px-6 lg:px-8 mx-auto relative mb-16">
                    <h3 class="text-[<?= $_primary ?>] text-[26px] md:text-[36px] font-semibold mb-6">Flights</h3>
                    <p class="text-gray-500 leading-8 mt-0 mb-4">
                        Round-trip flights are one more thing we handle to make your journey as smooth as possible. Our
                        team
                        of travel experts will find the best flight itinerary for you at a competitive rate, thanks to
                        our
                        partnerships with top airlines.
                    </p>
                    <div class="bg-[#F9FBF9] p-6 rounded-lg mb-4">
                        <h3 class="text-xl md:text-2xl font-bold mb-4">Add our airfare and you’ll get:</h3>

                        <ul class="list-disc list-inside">
                            <li class="mb-2 text-sm md:text-base">
                                Round-trip flight for your tour
                            </li>
                            <li class="mb-2 text-sm md:text-base">
                                Airport transfers at your destination
                            </li>
                            <li class="mb-2 text-sm md:text-base">
                                A great price locked in today
                            </li>
                            <li class="mb-2 text-sm md:text-base">
                                24/7 support from our dedicated service team
                            </li>
                            <li class="mb-2 text-sm md:text-base">
                                Options for arriving early, staying longer, or requesting an
                                upgrade
                            </li>
                            <li class="mb-2 text-sm md:text-base">
                                Flexible rebooking options if your tour itinerary changes
                            </li>
                        </ul>
                    </div>
                    <?php include "componets/sale.php" ?>
                </section>
            </div>

            <!-- prices -->
            <div class="tab-content" data-tab="prices" style="display: none;">
                <?php include "componets/st-prices.php" ?>
            </div>
            <!-- reviews -->
            <div class="tab-content" data-tab="reviews" style="display: none;">
                <section class="reviews-section max-w-7xl px-4 sm:px-6 lg:px-8 mx-auto relative mb-16">
                    <h3 class="text-[<?= $_primary ?>] text-[26px] md:text-[36px] font-semibold mb-6">Reviews</h3>
                    <?php include "componets/reviews.php" ?>
                </section>
            </div>

            <!-- faq -->
            <div class="tab-content" data-tab="faq" style="display: none;">
                <section class="max-w-7xl px-4 sm:px-6 lg:px-8 mx-auto relative mb-16">
                    <h3 class="text-[<?= $_primary ?>] text-[26px] md:text-[36px] font-semibold">FAQ</h3>
                    <?php include "componets/faq.php" ?>
                </section>
            </div>

        </div>
        <!-- end tab link content -->

        <div class="hidden md:block col-span-1">
            <?php include "componets/inquery-form.php" ?>

            <!-- start More trips to discover -->
            <div class="mt-8">
                <h3 class="text-[<?= $_primary ?>] text-3xl text-center">More trips to discover</h3>
                <div class="grid grid-cols-1 gap-4 my-6">
                    <div class="bg-white rounded-[20px] shadow-[0_2px_8px_rgba(0,0,0,0.08)] overflow-hidden ">
                        <div class="relative">
                            <div class="overlay"></div>
                            <img loading="lazy" src="images/swipe1.jpg" alt="Luxor Temple"
                                class="w-full h-[250px] object-cover">
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
                                    <span class="text-[<?= $_primary_two ?>] text-xs md:text-base">1/4</span>
                                    <button class="next hover:translate-x-1 duration-300">
                                        <img loading="lazy" src="images/icons/arrow-right-w.svg" alt="Arrow right icon"
                                            class="group-hover:translate-x-1 duration-300 w-[14px] md:w-[18px]" />

                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">Cairo Trips</h3>
                            <p class="text-gray-600 text-sm mb-6">A private visit to Queen Nefertari’s Tomb, known as
                                the
                                with an expert Egyptologist as the guide.</p>

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
                    <div class="bg-white rounded-[20px] shadow-[0_2px_8px_rgba(0,0,0,0.08)] overflow-hidden ">
                        <div class="relative">
                            <div class="overlay"></div>
                            <img loading="lazy" src="images/swipe1.jpg" alt="Luxor Temple"
                                class="w-full h-[250px] object-cover">
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
                                    <span class="text-[<?= $_primary_two ?>] text-xs md:text-base">1/4</span>
                                    <button class="next hover:translate-x-1 duration-300">
                                        <img loading="lazy" src="images/icons/arrow-right-w.svg" alt="Arrow right icon"
                                            class="group-hover:translate-x-1 duration-300 w-[14px] md:w-[18px]" />

                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">Cairo Trips</h3>
                            <p class="text-gray-600 text-sm mb-6">A private visit to Queen Nefertari’s Tomb, known as
                                the
                                with an expert Egyptologist as the guide.</p>

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
            <!-- end More trips to discover -->
        </div>
    </div>
    <!-- start subscribe -->
    <div class="mb-16">
        <?php include "componets/subscribe.php" ?>
    </div>
    <!-- end subscribe -->
    <?php include "componets/footer.php" ?>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Handle buttons with ".tab-link button"
            document.querySelectorAll('.tab-link a').forEach(link => {
                link.addEventListener('click', function (e) {
                    e.preventDefault();
                    // Hide all tab contents
                    document.querySelectorAll('.tab-content').forEach(content => {
                        content.style.display = 'none';
                    });

                    // Remove 'btn-primary' class from all links
                    document.querySelectorAll('.tab-link a').forEach(link => {
                        link.classList.remove('btn-primary');
                    });

                    // Get the content to display
                    const contentId = this.getAttribute('data-content');
                    const activeContent = document.querySelector(`.tab-content[data-tab="${contentId}"]`);

                    // Show the related content
                    if (activeContent) {
                        activeContent.style.display = 'block';
                    }

                    // Add 'btn-primary' class to the clicked link
                    this.classList.add('btn-primary');
                });
            });

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

            // Initialize Swiper instances
            initializeSwiper('.what-are-saying-swiper', {
                breakpoints: {
                    768: {
                        slidesPerView: 1,
                    },
                    1024: {
                        slidesPerView: 1.6,
                    },
                }
            });
            initializeSwiper('.single-tours-swiper');
            initializeSwiper('.blog-swiper');
        });
    </script>

</body>

</html>