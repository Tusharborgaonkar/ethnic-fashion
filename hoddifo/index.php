<?php
// IMPORTANT: Set these variables BEFORE including header.php
$isHomepage = true; // Set to true for transparent navbar on homepage
$showLogo = false; // Set to false to hide the logo from navbar

include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ultra Smooth Scroll Logo Animation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Add Swiper.js CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    
    <style>
        /* Custom animations */
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(10px);
            }
        }

        .fade-in-up {
            animation: fadeInUp 1s ease forwards;
        }

        .bounce-animation {
            animation: bounce 2s infinite;
        }

        /* Smooth transitions */
        .smooth-transition {
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Prevent horizontal scroll */
        body {
            overflow-x: hidden;
        }

        /* Hero Section with Swiper */
        #heroSection {
            position: relative;
            width: 100%;
            height: 100vh; /* Default for desktop */
            overflow: hidden;
        }

        .swiper {
            width: 100%;
            height: 100%;
            position: relative;
        }

        .swiper-slide {
            position: relative;
            overflow: hidden;
            height: 100%;
        }

        /* Use img tags for better control */
        .slide-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            background-color: #000; /* Fallback color while image loads */
        }

        /* Mobile-first approach for background images */
        .slide-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.2); /* Subtle overlay for better contrast */
            z-index: 1;
        }

        /* Enhanced overlay for better text visibility */
        .slide-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(
                to bottom,
                rgba(0, 0, 0, 0.3) 0%,
                rgba(0, 0, 0, 0.1) 20%,
                rgba(0, 0, 0, 0.1) 80%,
                rgba(0, 0, 0, 0.3) 100%
            );
            z-index: 2;
        }

        /* Autoplay Progress Bar */
        .autoplay-progress {
            position: absolute;
            right: 16px;
            bottom: 16px;
            z-index: 10;
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: white;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .autoplay-progress svg {
            --progress: 0;
            position: absolute;
            left: 0;
            top: 0px;
            z-index: 10;
            width: 100%;
            height: 100%;
            stroke-width: 4px;
            stroke: white;
            fill: none;
            stroke-dashoffset: calc(125.6px * (1 - var(--progress)));
            stroke-dasharray: 125.6;
            transform: rotate(-90deg);
        }

        /* Show progress bar on hover */
        #heroSection:hover .autoplay-progress {
            opacity: 1;
        }

        /* Autoplay Indicator */
        .autoplay-indicator {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 8px 16px;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 20px;
            color: white;
            font-size: 12px;
            z-index: 10;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        #heroSection:hover .autoplay-indicator {
            opacity: 0.7;
        }

        .autoplay-indicator .pulse {
            width: 8px;
            height: 8px;
            background: #ff4444;
            border-radius: 50%;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(0.8);
                opacity: 1;
            }
            50% {
                transform: scale(1.2);
                opacity: 0.7;
            }
            100% {
                transform: scale(0.8);
                opacity: 1;
            }
        }

        /* Touch/swipe hint - KEPT but hidden by default */
        .swipe-hint {
            position: absolute;
            bottom: 100px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            align-items: center;
            gap: 8px;
            opacity: 0;
            z-index: 10;
            background: rgba(0, 0, 0, 0.4);
            padding: 8px 16px;
            border-radius: 20px;
            backdrop-filter: blur(5px);
            pointer-events: none; /* Prevent interaction */
        }

        /* Swipe animation */
        .swipe-icon {
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .swipe-icon svg {
            width: 100%;
            height: 100%;
        }

        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap');

        :root {
            --font-sans: 'Inter', sans-serif;
        }

        body {
            font-family: var(--font-sans);
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            background-color: transparent !important;
            padding-top: 0 !important;
            overflow-x: hidden;
        }

        /* Slick Slider Custom Styles */
        .product-slider {
            position: relative;
            overflow: hidden;
            cursor: grab;
        }
        
        .product-slider .slick-track {
            display: flex !important;
        }
        
        .product-slider .slick-slide {
            height: auto;
        }
        
        .product-slider .slick-slide > div {
            height: 100%;
        }
        
        .product-slider .slick-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        
        .product-slider .slick-slide:hover img {
            transform: scale(1.05);
        }
        
        /* Hide arrows and dots */
        .product-slider .slick-arrow,
        .product-slider .slick-dots {
            display: none !important;
        }
        
        /* Single Progress Bar Container */
        .progress-bar-container {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: rgba(0, 0, 0, 0.1);
            z-index: 10;
            overflow: hidden;
        }
        
        /* Single Progress Bar that fills in steps */
        .progress-bar {
            height: 100%;
            background: #000;
            width: 25%; /* Start at 25% for first image */
            transition: width 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            will-change: width;
        }
        
        /* Smooth progress during drag */
        .product-slider.grabbing .progress-bar {
            transition: width 0.05s linear;
        }
        
        /* BESTSELLER Badge */
        .bestseller-badge {
            position: absolute;
            top: 12px;
            left: 12px;
            background: white;
            padding: 4px 8px;
            font-size: 10px;
            font-weight: 600;
            letter-spacing: 0.5px;
            z-index: 10;
        }
        
        /* RESPONSIVE MEDIA QUERIES - FIXED FOR MOBILE */
        /* Mobile (Default) - FIXED HEIGHT */
        @media (max-width: 768px) {
            #heroSection {
                height: 55vh !important; /* Increased to 55vh for better mobile viewing */
                max-height: 55vh;
                min-height: 500px; /* Minimum height for very short screens */
            }
            
            .swiper {
                height: 100% !important;
            }
            
            .swiper-slide {
                height: 100% !important;
            }
            
            /* FIXED: Ensure images properly fill the container on mobile */
            .slide-image {
                width: 100% !important;
                height: 100% !important;
                object-fit: cover !important;
                object-position: center center !important;
            }
            
            /* Optimize image positions for mobile */
            .swiper-slide:nth-child(1) .slide-image {
                object-position: center 30% !important;
            }
            
            .swiper-slide:nth-child(2) .slide-image {
                object-position: center center !important;
            }
            
            .swiper-slide:nth-child(3) .slide-image {
                object-position: center 40% !important;
            }
            
            /* Hide swipe hint on mobile */
            .swipe-hint {
                display: none !important;
            }
            
            /* Hide autoplay progress on mobile */
            .autoplay-progress {
                display: none !important;
            }
            
            .autoplay-indicator {
                display: none !important;
            }
            
            /* Product grid mobile optimization */
            .grid.grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
                gap: 1px !important;
            }

            .aspect-\[3\/4\] {
                aspect-ratio: 3/4 !important;
            }
            
            /* Thicker progress bar on mobile */
            .progress-bar-container {
                height: 3px;
            }
            
            .progress-bar {
                height: 3px;
            }
            
            .bestseller-badge {
                font-size: 9px;
                padding: 3px 6px;
            }
        }
        
        /* Small Mobile Devices - FIXED */
        @media (max-width: 480px) {
            #heroSection {
                height: 55vh !important;
                max-height: 55vh;
                min-height: 400px;
            }
            
            /* Ensure Swiper and slides take full height */
            .swiper, .swiper-slide {
                height: 100% !important;
            }
            
            /* FIXED: Force image to cover entire container */
            .slide-image {
                position: absolute !important;
                top: 0 !important;
                left: 0 !important;
                width: 100% !important;
                height: 100% !important;
                object-fit: cover !important;
                object-position: center center !important;
            }
            
            /* Adjust overlay for better contrast on small screens */
            .slide-overlay {
                background: linear-gradient(
                    to bottom,
                    rgba(0, 0, 0, 0.4) 0%,
                    rgba(0, 0, 0, 0.2) 15%,
                    rgba(0, 0, 0, 0.2) 85%,
                    rgba(0, 0, 0, 0.4) 100%
                );
            }
            
            /* Fine-tune image positions for optimal mobile viewing */
            .swiper-slide:nth-child(1) .slide-image {
                object-position: center 25% !important;
            }
            
            .swiper-slide:nth-child(3) .slide-image {
                object-position: center 35% !important;
            }
        }
        
        /* Tablet - FIXED */
        @media (min-width: 769px) and (max-width: 1024px) {
            #heroSection {
                height: 55vh !important;
                max-height: 55vh;
                min-height: 600px;
            }
            
            .slide-image {
                object-fit: cover !important;
                object-position: center center !important;
            }
        }
        
        /* Desktop (Default already handles this) */
        @media (min-width: 1025px) {
            #heroSection {
                height: 100vh !important;
                max-height: 100vh;
            }
            
            .slide-image {
                object-fit: cover !important;
                object-position: center center !important;
            }
        }
        
        /* Prevent horizontal scroll in hero section */
        #heroSection {
            overflow: hidden;
            width: 100%;
            max-width: 100vw;
        }
        
        /* Ensure images are properly loaded and displayed */
        .slide-image {
            /* Add loading optimization */
            background-color: #000; /* Fallback color while image loads */
        }
        
        /* Touch optimization */
        .product-slider {
            touch-action: pan-y;
            -webkit-tap-highlight-color: transparent;
        }
        
        /* Prevent horizontal scrolling */
        body {
            max-width: 100vw;
            overflow-x: hidden;
        }

        * {
            box-sizing: border-box;
        }
        
        /* Custom slider styles */
        .product-images-slider {
            position: relative;
        }
        
        /* Hover effect for desktop */
        .product-card:hover .product-slider .slick-slide img {
            transform: scale(1.05);
        }
        
        /* Dragging cursor */
        .product-slider.grabbing {
            cursor: grabbing;
        }

        /* REMOVED ALL NAVBAR ANIMATION STYLES */
        
        /* New styles for responsive hero images */
        .slide-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        
        /* Add responsive image loading */
        .slide-image.loading {
            filter: blur(5px);
        }
        
        .slide-image.loaded {
            filter: blur(0);
            transition: filter 0.5s ease;
        }
        
        /* FIX: Force important for critical mobile styles */
        @media (max-width: 768px) {
            .hero-fix {
                height: 55vh !important;
                max-height: 55vh !important;
            }
            
            .swiper-fix {
                height: 100% !important;
            }
            
            .slide-fix {
                height: 100% !important;
            }
            
            .image-fix {
                width: 100% !important;
                height: 100% !important;
                object-fit: cover !important;
            }
        }
        
        /* Product link styles */
        .product-link {
            display: block;
            text-decoration: none;
            color: inherit;
        }
        
        .product-link:hover {
            text-decoration: none;
        }
    </style>
</head>

<body class="font-sans overflow-x-hidden">
    <!-- Fixed Header - No Background Animation -->
    <header id="header" class="fixed top-0 left-0 right-0 z-[100] py-6 px-8">
        <div class="max-w-[1400px] mx-auto flex justify-between items-center relative">
            <div id="headerLogoPlaceholder"></div>
        </div>
    </header>

    <!-- Animated Logo -->
    <div id="animatedLogo"
        class="smooth-transition fixed z-[20000] pointer-events-none will-change-transform will-change-width will-change-height will-change-opacity transform-origin-center bg-contain bg-no-repeat bg-center">
        <img src="hoo.png" alt="Logo" id="logoImage"
            class="logo-image w-full h-full object-contain">
    </div>

    <!-- Hero Section with Swiper - ADDED FIX CLASSES -->
    <section id="heroSection" class="relative overflow-hidden hero-fix">
        <!-- Swiper Container -->
        <div class="swiper h-full swiper-fix">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide slide-fix">
                    <div class="slide-overlay"></div>
                    <img 
                        src="https://i.pinimg.com/1200x/f5/bf/35/f5bf35dc3b635bc57fdea3f1f35bdcdc.jpg" 
                        alt="Fashion Banner 1" 
                        class="slide-image image-fix"
                        loading="eager"
                        onload="this.classList.add('loaded')"
                    >
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide slide-fix">
                    <div class="slide-overlay"></div>
                    <img 
                        src="https://i.pinimg.com/1200x/e2/02/cc/e202cc42f69f6b2512d2d24f3dd93aed.jpg" 
                        alt="Fashion Banner 2" 
                        class="slide-image image-fix"
                        loading="lazy"
                        onload="this.classList.add('loaded')"
                    >
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide slide-fix">
                    <div class="slide-overlay"></div>
                    <img 
                        src="https://i.pinimg.com/1200x/ac/df/d2/acdfd2236192cf8a7fa52ac854c326df.jpg" 
                        alt="Fashion Banner 3" 
                        class="slide-image image-fix"
                        loading="lazy"
                        onload="this.classList.add('loaded')"
                    >
                </div>
            </div>
        </div>

       
        

        <!-- Swipe Hint (hidden by default) -->
        <div class="swipe-hint">
            <div class="swipe-icon mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M7 17L1 12L7 7"/>
                    <path d="M1 12H23"/>
                    <path d="M17 7L23 12L17 17"/>
                </svg>
            </div>
            <span class="text-sm tracking-wider font-light">Swipe to navigate</span>
        </div>
    </section>

    
    <main>
        <!-- Collections Grid -->
        <section class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-0.5 bg-white lg:px-4 py-12">
            <!-- Card 1 - MEN'S COLLECTION -->
            <a href="all.php" class="group relative aspect-[3/4] overflow-hidden bg-neutral-50 cursor-pointer product-link">
                <img src="https://media.gucci.com/style/DarkGray_Center_0_0_1200x1200/1762969507/852675_XJHML_4330_002_100_0000_Light-technical-jersey-zip-jacket-with-crystals.jpg"
                    class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
                    alt="New Clothes">
                <div class="absolute inset-0 bg-black/10 group-hover:bg-black/20 transition-colors duration-500"></div>
                <div class="absolute bottom-8 left-0 w-full text-center">
                    <h3 class="text-2xl font-semibold text-white tracking-tight mb-3 drop-shadow-md">MEN'S COLLECTION
                    </h3>
                    <span class="shop-now-link inline-flex items-center gap-1 text-xs font-semibold text-white uppercase tracking-widest hover:underline underline-offset-4">
                         <span class="iconify" data-icon="lucide:arrow-right" data-width="12"></span>
                    </span>
                </div>
            </a>

            <!-- Card 2 - WOMEN'S COLLECTION -->
            <a href="all.php" class="group relative aspect-[3/4] overflow-hidden bg-neutral-50 cursor-pointer product-link">
                <img src="https://media.gucci.com/style/DarkGray_Center_0_0_1200x1200/1764659711/837931_XJHM2_9750_002_100_0000_Light-cotton-jersey-sweatshirt-with-print.jpg"
                    class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
                    alt="New Shoes">
                <div class="absolute inset-0 bg-black/10 group-hover:bg-black/20 transition-colors duration-500"></div>
                <div class="absolute bottom-8 left-0 w-full text-center">
                    <h3 class="text-2xl font-semibold text-white tracking-tight mb-3 drop-shadow-md">WOMEN'S COLLECTION
                    </h3>
                    <span class="shop-now-link inline-flex items-center gap-1 text-xs font-semibold text-white uppercase tracking-widest hover:underline underline-offset-4">
                         <span class="iconify" data-icon="lucide:arrow-right" data-width="12"></span>
                    </span>
                </div>
            </a>

            <!-- Card 3 - KID'S COLLECTION -->
            <a href="all.php" class="group relative aspect-[3/4] overflow-hidden bg-neutral-50 cursor-pointer product-link">
                <img src="https://media.gucci.com/style/DarkGray_Center_0_0_2400x2400/1756794626/847028_XKE8X_4030_001_100_0000_Light.jpg"
                    class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
                    alt="Bestsellers">
                <div class="absolute inset-0 bg-black/10 group-hover:bg-black/20 transition-colors duration-500"></div>
                <div class="absolute bottom-8 left-0 w-full text-center">
                    <h3 class="text-2xl font-semibold text-white tracking-tight mb-3 drop-shadow-md">KID'S COLLECTION
                    </h3>
                    <span class="shop-now-link inline-flex items-center gap-1 text-xs font-semibold text-white uppercase tracking-widest hover:underline underline-offset-4">
                         <span class="iconify" data-icon="lucide:arrow-right" data-width="12"></span>
                    </span>
                </div>
            </a>

            <!-- Card 4 - TRENDING STYLES -->
            <a href="all.php" class="group relative aspect-[3/4] overflow-hidden bg-neutral-50 cursor-pointer product-link">
                <img src="https://images.unsplash.com/photo-1548036328-c9fa89d128fa?q=80&w=1000&auto=format&fit=crop"
                    class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
                    alt="Faux Fur">
                <div class="absolute inset-0 bg-black/10 group-hover:bg-black/20 transition-colors duration-500"></div>
                <div class="absolute bottom-8 left-0 w-full text-center">
                    <h3 class="text-2xl font-semibold text-white tracking-tight mb-3 drop-shadow-md">TRENDING STYLES
                    </h3>
                    <span class="shop-now-link inline-flex items-center gap-1 text-xs font-semibold text-white uppercase tracking-widest hover:underline underline-offset-4">
                         <span class="iconify" data-icon="lucide:arrow-right" data-width="12"></span>
                    </span>
                </div>
            </a>
        </section>

        <!-- Products Grid -->
        <section class="py- md:py-20 bg-white">
            <div class="px-2 ">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-medium text-center tracking-[0.15em] mb-12 md:mb-16 text-black uppercase">
                    BEST SELLER
                </h2>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 md:gap-8 ">

                    <!-- Product 1 -->
                    <a href="product-detail.php" class="group cursor-pointer product-card relative product-link">
                        <div class="relative aspect-square overflow-hidden bg-neutral-100 mb-4 product-slider">
                            <!-- Images Slider -->
                            <div class="product-images-slider">
                                <!-- Slide 1 -->
                                <div>
                                    <img src="https://media.gucci.com/style/HEXFBFBFB_South_0_160_640x640/1765391457/852074_XKFCB_2254_001_100_0000_Light.jpg"
                                        class="w-full h-full object-cover"
                                        alt="Elegant Black Dress">
                                </div>
                                <!-- Slide 2 -->
                                <div>
                                    <img src="https://media.gucci.com/style/HEXFBFBFB_South_0_160_640x640/1761150618/852967_ZAUEO_9097_001_100_0000_Light.jpg"
                                        class="w-full h-full object-cover"
                                        alt="Elegant Black Dress View 2">
                                </div>
                                <!-- Slide 3 -->
                                <div>
                                    <img src="https://media.gucci.com/style/DarkGray_Center_0_0_1200x1200/1765391423/842667_ZAD88_9002_001_100_0000_Light-silk-wool-dress-with-crystal-horsebit.jpg"
                                        class="w-full h-full object-cover"
                                        alt="Elegant Black Dress View 3">
                                </div>
                                <!-- Slide 4 -->
                                <div>
                                    <img src="https://media.gucci.com/style/HEXFBFBFB_South_0_160_640x640/1765391444/851946_XKFAR_9943_001_100_0000_Light.jpg"
                                        class="w-full h-full object-cover"
                                        alt="Elegant Black Dress View 4">
                                </div>
                            </div>

                            <!-- Progress Bar Container -->
                            <div class="progress-bar-container">
                                <div class="progress-bar"></div>
                            </div>
                            
                            <!-- BESTSELLER Badge -->
                            <div class="bestseller-badge">
                                BESTSELLER
                            </div>
                        </div>

                        <h3 class="text-sm font-medium tracking-wide mb-1 text-neutral-900">Elegant Black Dress</h3>
                    </a>

                    <!-- Product 2 -->
                    <a href="product-detail.php" class="group cursor-pointer product-card relative product-link">
                        <div class="relative aspect-square overflow-hidden bg-neutral-100 mb-4 product-slider">
                            <div class="product-images-slider">
                                <!-- Slide 1 -->
                                <div>
                                    <img src="https://media.gucci.com/style/HEXFBFBFB_South_0_160_640x640/1761150618/852967_ZAUEO_9097_001_100_0000_Light.jpg"
                                        class="w-full h-full object-cover"
                                        alt="Silk Wool Dress">
                                </div>
                                <!-- Slide 2 -->
                                <div>
                                    <img src="https://media.gucci.com/style/DarkGray_Center_0_0_1200x1200/1765391423/842667_ZAD88_9002_001_100_0000_Light-silk-wool-dress-with-crystal-horsebit.jpg"
                                        class="w-full h-full object-cover"
                                        alt="Silk Wool Dress View 2">
                                </div>
                                <!-- Slide 3 -->
                                <div>
                                    <img src="https://media.gucci.com/style/HEXFBFBFB_South_0_160_640x640/1765391444/851946_XKFAR_9943_001_100_0000_Light.jpg"
                                        class="w-full h-full object-cover"
                                        alt="Silk Wool Dress View 3">
                                </div>
                                <!-- Slide 4 -->
                                <div>
                                    <img src="https://media.gucci.com/style/HEXFBFBFB_South_0_160_640x640/1757688303/857622_AAF1I_1000_002_068_0000_Light.jpg"
                                        class="w-full h-full object-cover"
                                        alt="Silk Wool Dress View 4">
                                </div>
                            </div>
                            
                            <!-- Progress Bar Container -->
                            <div class="progress-bar-container">
                                <div class="progress-bar"></div>
                            </div>
                        </div>

                        <h3 class="text-sm font-medium tracking-wide mb-1 text-neutral-900">Silk Wool Dress</h3>
                    </a>

                    <!-- Product 3 -->
                    <a href="product-detail.php" class="group cursor-pointer product-card relative product-link">
                        <div class="relative aspect-square overflow-hidden bg-neutral-100 mb-4 product-slider">
                            <div class="product-images-slider">
                                <!-- Slide 1 -->
                                <div>
                                    <img src="https://media.gucci.com/style/DarkGray_Center_0_0_1200x1200/1765391423/842667_ZAD88_9002_001_100_0000_Light-silk-wool-dress-with-crystal-horsebit.jpg"
                                        class="w-full h-full object-cover"
                                        alt="Crystal Horsebit Dress">
                                </div>
                                <!-- Slide 2 -->
                                <div>
                                    <img src="https://media.gucci.com/style/HEXFBFBFB_South_0_160_640x640/1765391444/851946_XKFAR_9943_001_100_0000_Light.jpg"
                                        class="w-full h-full object-cover"
                                        alt="Crystal Horsebit Dress View 2">
                                </div>
                                <!-- Slide 3 -->
                                <div>
                                    <img src="https://media.gucci.com/style/HEXFBFBFB_South_0_160_640x640/1757688303/857622_AAF1I_1000_002_068_0000_Light.jpg"
                                        class="w-full h-full object-cover"
                                        alt="Crystal Horsebit Dress View 3">
                                </div>
                                <!-- Slide 4 -->
                                <div>
                                    <img src="https://media.gucci.com/style/HEXFBFBFB_South_0_160_640x640/1765391457/852074_XKFCB_2254_001_100_0000_Light.jpg"
                                        class="w-full h-full object-cover"
                                        alt="Crystal Horsebit Dress View 4">
                                </div>
                            </div>

                            <!-- Progress Bar Container -->
                            <div class="progress-bar-container">
                                <div class="progress-bar"></div>
                            </div>
                            
                            <!-- BESTSELLER Badge -->
                            <div class="bestseller-badge">
                                BESTSELLER
                            </div>
                        </div>

                        <h3 class="text-sm font-medium tracking-wide mb-1 text-neutral-900">Crystal Horsebit Dress</h3>
                    </a>

                    <!-- Product 4 -->
                    <a href="product-detail.php" class="group cursor-pointer product-card relative product-link">
                        <div class="relative aspect-square overflow-hidden bg-neutral-100 mb-4 product-slider">
                            <div class="product-images-slider">
                                <!-- Slide 1 -->
                                <div>
                                    <img src="https://media.gucci.com/style/HEXFBFBFB_South_0_160_640x640/1765391457/852074_XKFCB_2254_001_100_0000_Light.jpg"
                                        class="w-full h-full object-cover"
                                        alt="Gucci Evening Dress">
                                </div>
                                <!-- Slide 2 -->
                                <div>
                                    <img src="https://media.gucci.com/style/HEXFBFBFB_South_0_160_640x640/1761150618/852967_ZAUEO_9097_001_100_0000_Light.jpg"
                                        class="w-full h-full object-cover"
                                        alt="Gucci Evening Dress View 2">
                                </div>
                                <!-- Slide 3 -->
                                <div>
                                    <img src="https://media.gucci.com/style/DarkGray_Center_0_0_1200x1200/1765391423/842667_ZAD88_9002_001_100_0000_Light-silk-wool-dress-with-crystal-horsebit.jpg"
                                        class="w-full h-full object-cover"
                                        alt="Gucci Evening Dress View 3">
                                </div>
                                <!-- Slide 4 -->
                                <div>
                                    <img src="https://media.gucci.com/style/HEXFBFBFB_South_0_160_640x640/1765391444/851946_XKFAR_9943_001_100_0000_Light.jpg"
                                        class="w-full h-full object-cover"
                                        alt="Gucci Evening Dress View 4">
                                </div>
                            </div>
                            
                            <!-- Progress Bar Container -->
                            <div class="progress-bar-container">
                                <div class="progress-bar"></div>
                            </div>
                        </div>

                        <h3 class="text-sm font-medium tracking-wide mb-1 text-neutral-900">Gucci Evening Dress</h3>
                    </a>
                </div>

                <!-- VIEW ALL BUTTON -->
                <div class="text-center mt-8">
                    <a href="all.php"
                        class="inline-block border-2 border-black text-black px-4 py-3 text-xs font-semibold tracking-widest uppercase hover:bg-black hover:text-white transition-all duration-300">
                        View All Products
                    </a>
                </div>
            </div>
        </section>

        <!-- New Arrivals Grid -->
        <section class="py-12 md:py-20 bg-white">
            <div class="px-2 ">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-medium text-center tracking-[0.15em] mb-12 md:mb-16 text-black uppercase">
                    NEW ARRIVAL
                </h2>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 md:gap-8">

                    <!-- Product 1 -->
                    <a href="product-detail.php" class="group cursor-pointer product-card relative product-link">
                        <div class="relative aspect-square overflow-hidden bg-neutral-100 mb-4 product-slider">
                            <div class="product-images-slider">
                                <!-- Slide 1 -->
                                <div>
                                    <img src="https://media.gucci.com/style/HEXFBFBFB_South_0_160_640x640/1765391457/852074_XKFCB_2254_001_100_0000_Light.jpg"
                                        class="w-full h-full object-cover"
                                        alt="New Arrival Dress">
                                </div>
                                <!-- Slide 2 -->
                                <div>
                                    <img src="https://media.gucci.com/style/HEXFBFBFB_South_0_160_640x640/1761150618/852967_ZAUEO_9097_001_100_0000_Light.jpg"
                                        class="w-full h-full object-cover"
                                        alt="New Arrival Dress View 2">
                                </div>
                                <!-- Slide 3 -->
                                <div>
                                    <img src="https://media.gucci.com/style/DarkGray_Center_0_0_1200x1200/1765391423/842667_ZAD88_9002_001_100_0000_Light-silk-wool-dress-with-crystal-horsebit.jpg"
                                        class="w-full h-full object-cover"
                                        alt="New Arrival Dress View 3">
                                </div>
                                <!-- Slide 4 -->
                                <div>
                                    <img src="https://media.gucci.com/style/HEXFBFBFB_South_0_160_640x640/1765391444/851946_XKFAR_9943_001_100_0000_Light.jpg"
                                        class="w-full h-full object-cover"
                                        alt="New Arrival Dress View 4">
                                </div>
                            </div>

                            <!-- Progress Bar Container -->
                            <div class="progress-bar-container">
                                <div class="progress-bar"></div>
                            </div>
                            
                            <!-- NEW Badge -->
                            <div class="bestseller-badge">
                                NEW
                            </div>
                        </div>

                        <h3 class="text-sm font-medium tracking-wide mb-1 text-neutral-900">New Arrival Dress</h3>
                    </a>

                    <!-- Product 2 -->
                    <a href="product-detail.php" class="group cursor-pointer product-card relative product-link">
                        <div class="relative aspect-square overflow-hidden bg-neutral-100 mb-4 product-slider">
                            <div class="product-images-slider">
                                <!-- Slide 1 -->
                                <div>
                                    <img src="https://media.gucci.com/style/HEXFBFBFB_South_0_160_640x640/1761150618/852967_ZAUEO_9097_001_100_0000_Light.jpg"
                                        class="w-full h-full object-cover"
                                        alt="Winter Silk Dress">
                                </div>
                                <!-- Slide 2 -->
                                <div>
                                    <img src="https://media.gucci.com/style/DarkGray_Center_0_0_1200x1200/1765391423/842667_ZAD88_9002_001_100_0000_Light-silk-wool-dress-with-crystal-horsebit.jpg"
                                        class="w-full h-full object-cover"
                                        alt="Winter Silk Dress View 2">
                                </div>
                                <!-- Slide 3 -->
                                <div>
                                    <img src="https://media.gucci.com/style/HEXFBFBFB_South_0_160_640x640/1765391444/851946_XKFAR_9943_001_100_0000_Light.jpg"
                                        class="w-full h-full object-cover"
                                        alt="Winter Silk Dress View 3">
                                </div>
                                <!-- Slide 4 -->
                                <div>
                                    <img src="https://media.gucci.com/style/HEXFBFBFB_South_0_160_640x640/1757688303/857622_AAF1I_1000_002_068_0000_Light.jpg"
                                        class="w-full h-full object-cover"
                                        alt="Winter Silk Dress View 4">
                                </div>
                            </div>
                            
                            <!-- Progress Bar Container -->
                            <div class="progress-bar-container">
                                <div class="progress-bar"></div>
                            </div>
                        </div>

                        <h3 class="text-sm font-medium tracking-wide mb-1 text-neutral-900">Winter Silk Dress</h3>
                    </a>

                    <!-- Product 3 -->
                    <a href="product-detail.php" class="group cursor-pointer product-card relative product-link">
                        <div class="relative aspect-square overflow-hidden bg-neutral-100 mb-4 product-slider">
                            <div class="product-images-slider">
                                <!-- Slide 1 -->
                                <div>
                                    <img src="https://media.gucci.com/style/DarkGray_Center_0_0_1200x1200/1765391423/842667_ZAD88_9002_001_100_0000_Light-silk-wool-dress-with-crystal-horsebit.jpg"
                                        class="w-full h-full object-cover"
                                        alt="Crystal Horsebit Dress">
                                </div>
                                <!-- Slide 2 -->
                                <div>
                                    <img src="https://media.gucci.com/style/HEXFBFBFB_South_0_160_640x640/1765391444/851946_XKFAR_9943_001_100_0000_Light.jpg"
                                        class="w-full h-full object-cover"
                                        alt="Crystal Horsebit Dress View 2">
                                </div>
                                <!-- Slide 3 -->
                                <div>
                                    <img src="https://media.gucci.com/style/HEXFBFBFB_South_0_160_640x640/1757688303/857622_AAF1I_1000_002_068_0000_Light.jpg"
                                        class="w-full h-full object-cover"
                                        alt="Crystal Horsebit Dress View 3">
                                </div>
                                <!-- Slide 4 -->
                                <div>
                                    <img src="https://media.gucci.com/style/HEXFBFBFB_South_0_160_640x640/1765391457/852074_XKFCB_2254_001_100_0000_Light.jpg"
                                        class="w-full h-full object-cover"
                                        alt="Crystal Horsebit Dress View 4">
                                </div>
                            </div>

                            <!-- Progress Bar Container -->
                            <div class="progress-bar-container">
                                <div class="progress-bar"></div>
                            </div>
                            
                            <!-- NEW Badge -->
                            <div class="bestseller-badge">
                                NEW
                            </div>
                        </div>

                        <h3 class="text-sm font-medium tracking-wide mb-1 text-neutral-900">Crystal Horsebit Dress</h3>
                    </a>

                    <!-- Product 4 -->
                    <a href="product-detail.php" class="group cursor-pointer product-card relative product-link">
                        <div class="relative aspect-square overflow-hidden bg-neutral-100 mb-4 product-slider">
                            <div class="product-images-slider">
                                <!-- Slide 1 -->
                                <div>
                                    <img src="https://media.gucci.com/style/HEXFBFBFB_South_0_160_640x640/1765391457/852074_XKFCB_2254_001_100_0000_Light.jpg"
                                        class="w-full h-full object-cover"
                                        alt="Gucci Evening Dress">
                                </div>
                                <!-- Slide 2 -->
                                <div>
                                    <img src="https://media.gucci.com/style/HEXFBFBFB_South_0_160_640x640/1761150618/852967_ZAUEO_9097_001_100_0000_Light.jpg"
                                        class="w-full h-full object-cover"
                                        alt="Gucci Evening Dress View 2">
                                </div>
                                <!-- Slide 3 -->
                                <div>
                                    <img src="https://media.gucci.com/style/DarkGray_Center_0_0_1200x1200/1765391423/842667_ZAD88_9002_001_100_0000_Light-silk-wool-dress-with-crystal-horsebit.jpg"
                                        class="w-full h-full object-cover"
                                        alt="Gucci Evening Dress View 3">
                                </div>
                                <!-- Slide 4 -->
                                <div>
                                    <img src="https://media.gucci.com/style/HEXFBFBFB_South_0_160_640x640/1765391444/851946_XKFAR_9943_001_100_0000_Light.jpg"
                                        class="w-full h-full object-cover"
                                        alt="Gucci Evening Dress View 4">
                                </div>
                            </div>
                            
                            <!-- Progress Bar Container -->
                            <div class="progress-bar-container">
                                <div class="progress-bar"></div>
                            </div>
                        </div>

                        <h3 class="text-sm font-medium tracking-wide mb-1 text-neutral-900">Gucci Evening Dress</h3>
                    </a>
                </div>

                <!-- VIEW ALL BUTTON -->
                <div class="text-center mt-8">
                    <a href="all.php"
                        class="inline-block border-2 border-black text-black px-4 py-3 text-xs font-semibold tracking-widest uppercase hover:bg-black hover:text-white transition-all duration-300">
                        View All Products
                    </a>
                </div>
            </div>
        </section>
    </main>

    <!-- Add Swiper.js JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    <script>
        // Logo Animation Variables
        const header = document.getElementById('header');
        const animatedLogo = document.getElementById('animatedLogo');
        const logoImage = document.getElementById('logoImage');
        const headerPlaceholder = document.getElementById('headerLogoPlaceholder');

        // Logo Animation State Variables
        let isInHeaderPosition = false;
        let animationFrame = null;
        let lastScrollY = 0;

        // Threshold for switching states (small scroll amount)
        const SCROLL_THRESHOLD = 50; // pixels - adjust this value to control when navbar changes

        // Detect mobile vs desktop
        let isMobile = window.innerWidth <= 768;

        // Get header position - final state
        function getHeaderLogoPosition() {
            const headerRect = header.getBoundingClientRect();

            if (isMobile) {
                return {
                    top: headerRect.top + (headerRect.height / 2) + 10,
                    left: 72,
                    width: 750,
                    height: 150,
                    opacity: 1
                };
            } else {
                return {
                    top: headerRect.top + (headerRect.height / 2) + 10,
                    left: window.innerWidth / 2,
                    width: 550,
                    height: 175,
                    opacity: 1
                };
            }
        }

        // Get hero position - initial state
        function getHeroLogoPosition() {
            if (isMobile) {
                const maxWidth = Math.min(window.innerWidth * 0.9, 1500);
                const calculatedHeight = maxWidth * 0.9;

                return {
                    top: window.innerHeight / 4,
                    left: window.innerWidth / 2,
                    width: maxWidth,
                    height: calculatedHeight,
                    opacity: 1
                };
            } else {
                const maxWidth = Math.min(window.innerWidth * 0.8, 1800);
                const calculatedHeight = maxWidth * 0.9;

                return {
                    top: window.innerHeight / 4,
                    left: window.innerWidth / 2,
                    width: maxWidth,
                    height: calculatedHeight,
                    opacity: 1
                };
            }
        }

        // Apply position to logo
        function applyLogoPosition(position) {
            animatedLogo.style.transform = `translate(${position.left}px, ${position.top}px) translate(-50%, -50%)`;
            animatedLogo.style.width = position.width + 'px';
            animatedLogo.style.height = position.height + 'px';
            animatedLogo.style.opacity = position.opacity;

            logoImage.style.width = '100%';
            logoImage.style.height = '100%';
        }

        // Update logo based on scroll direction and amount
        function updateLogoBasedOnScroll() {
            const currentScrollY = window.scrollY;
            const scrollDelta = currentScrollY - lastScrollY;

            // Determine if we should switch states
            if (currentScrollY > SCROLL_THRESHOLD) {
                // Scrolled enough to go to header position
                if (!isInHeaderPosition) {
                    isInHeaderPosition = true;
                    applyLogoPosition(getHeaderLogoPosition());
                }
            } else {
                // At top, should be in hero position
                if (isInHeaderPosition) {
                    isInHeaderPosition = false;
                    applyLogoPosition(getHeroLogoPosition());
                }
            }

            lastScrollY = currentScrollY;
        }

        // Handle scroll events
        function handleScroll() {
            if (!animationFrame) {
                animationFrame = requestAnimationFrame(() => {
                    updateLogoBasedOnScroll();
                    animationFrame = null;
                });
            }
        }

        // Load logo image and handle errors
        function loadLogoImage() {
            // Set initial position (hero position)
            applyLogoPosition(getHeroLogoPosition());
            isInHeaderPosition = false;

            // Check if image loads successfully
            logoImage.onerror = function () {
                console.warn('Logo image "hoo.png" not found. Using fallback styling.');
                animatedLogo.style.background = 'linear-gradient(45deg, #fff, #ccc)';
                animatedLogo.innerHTML = '<div class="w-full h-full flex items-center justify-center text-black font-bold text-2xl">LOGO</div>';
            };

            logoImage.src = logoImage.src;
        }

        // Initialize Swiper with autoplay every 3 seconds
        let heroSwiper;
        let autoplayProgressCircle;
        let autoplayProgressContent;
        let autoplayTimeDisplay;

        function initSwiper() {
            // Get progress elements
            autoplayProgressCircle = document.querySelector('.autoplay-progress svg');
            autoplayProgressContent = document.querySelector('.autoplay-progress');
            autoplayTimeDisplay = document.getElementById('autoplay-time');

            heroSwiper = new Swiper('.swiper', {
                // Optional parameters
                direction: 'horizontal',
                loop: true,
                speed: 1000, // Smooth transition speed
                
                // Enable touch/swipe for both desktop and mobile
                grabCursor: true,
                allowTouchMove: true,
                simulateTouch: true,
                touchRatio: 1,
                touchAngle: 45,
                shortSwipes: true,
                longSwipes: true,
                longSwipesRatio: 0.5,
                longSwipesMs: 300,
                followFinger: true,
                threshold: 5,

                // Autoplay every 3 seconds
                autoplay: {
                    delay: 3000, // 3 seconds
                    disableOnInteraction: false, // Continue autoplay after interaction
                    pauseOnMouseEnter: true, // Pause on hover
                    waitForTransition: true, // Wait for slide transition to finish
                },

                // Autoplay progress tracking
                on: {
                    init: function () {
                        console.log('Swiper initialized with 3-second autoplay');
                        updateAutoplayTimeDisplay();
                    },
                    autoplayTimeLeft(swiper, time, progress) {
                        // Update progress circle
                        if (autoplayProgressCircle) {
                            autoplayProgressCircle.style.setProperty('--progress', 1 - progress);
                        }
                        
                        // Update time display
                        if (autoplayTimeDisplay) {
                            const seconds = Math.ceil(time / 1000);
                            autoplayTimeDisplay.textContent = `${seconds}s`;
                        }
                    },
                    slideChange: function () {
                        console.log('Slide changed to: ' + this.activeIndex);
                        updateAutoplayTimeDisplay();
                    },
                    autoplayStart: function () {
                        console.log('Autoplay started');
                        if (autoplayProgressContent) {
                            autoplayProgressContent.style.opacity = '1';
                        }
                    },
                    autoplayStop: function () {
                        console.log('Autoplay stopped');
                    }
                },

                // Keyboard control
                keyboard: {
                    enabled: true,
                    onlyInViewport: true,
                },

                // Mousewheel control (for desktop)
                mousewheel: {
                    forceToAxis: true,
                    sensitivity: 0.5,
                    thresholdDelta: 10,
                    eventsTarget: 'container',
                },

                // Breakpoints
                breakpoints: {
                    320: { // Mobile
                        slidesPerView: 1,
                        spaceBetween: 0,
                    },
                    768: { // Tablet
                        slidesPerView: 1,
                        spaceBetween: 0,
                    },
                    1024: { // Desktop
                        slidesPerView: 1,
                        spaceBetween: 0,
                    }
                }
            });
            
            // Start autoplay
            heroSwiper.autoplay.start();
        }

        // Update autoplay time display
        function updateAutoplayTimeDisplay() {
            if (autoplayTimeDisplay && heroSwiper) {
                const delay = heroSwiper.params.autoplay.delay;
                autoplayTimeDisplay.textContent = `${delay / 1000}s`;
            }
        }

        // FIXED: Handle hero section resizing with proper mobile detection
        function setHeroSectionHeight() {
            const heroSection = document.getElementById('heroSection');
            const isMobileDevice = window.innerWidth <= 768;
            
            if (isMobileDevice) {
                // Mobile: Use 55vh for better viewing
                heroSection.style.height = '55vh';
                heroSection.style.maxHeight = '55vh';
                heroSection.style.minHeight = '500px';
            } else {
                // Desktop: Use 100vh
                heroSection.style.height = '100vh';
                heroSection.style.maxHeight = '100vh';
                heroSection.style.minHeight = '600px';
            }
            
            // Update isMobile variable
            isMobile = isMobileDevice;
            
            // Force Swiper to update
            if (heroSwiper) {
                setTimeout(() => {
                    heroSwiper.update();
                    heroSwiper.updateSize();
                    heroSwiper.updateSlides();
                }, 100);
            }
        }

        // Handle window resize
        let resizeTimeout;
        function handleResize() {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(function() {
                // Update hero section height
                setHeroSectionHeight();
                
                // Destroy and reinitialize Swiper on resize
                if (heroSwiper) {
                    heroSwiper.destroy(true, true);
                }
                initSwiper();
                
                // Update logo position based on state
                if (isInHeaderPosition) {
                    applyLogoPosition(getHeaderLogoPosition());
                } else {
                    applyLogoPosition(getHeroLogoPosition());
                }
            }, 250);
        }

        // Initialize everything on page load
        window.addEventListener('load', function () {
            lastScrollY = window.scrollY;
            loadLogoImage();
            
            // Set hero section height FIRST
            setHeroSectionHeight();
            
            // Then initialize Swiper
            setTimeout(() => {
                initSwiper();
            }, 100);
        });

        // FIXED: Also set height on DOMContentLoaded for faster initial render
        document.addEventListener('DOMContentLoaded', function() {
            setHeroSectionHeight();
        });

        // Listen to scroll events
        window.addEventListener('scroll', handleScroll, { passive: true });

        // Listen to resize events
        window.addEventListener('resize', function() {
            handleResize();
        }, { passive: true });

        // Initial setup
        loadLogoImage();
    </script>
</body>

</html>

<?php include "includes/footer.php"; ?>