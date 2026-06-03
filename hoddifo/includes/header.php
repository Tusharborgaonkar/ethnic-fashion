<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopAKIRA | Women's Clothing & Fashion</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            -webkit-font-smoothing: antialiased;
            letter-spacing: 0.02em;
        }

        /* Base navbar styles */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 999999;
            transition: all 0.3s ease-in-out;
        }

        /* Transparent navbar for homepage */
        .navbar-transparent {
            background-color: transparent !important;
            border-bottom: none !important;
            box-shadow: none !important;
        }

        /* Scrolled state - becomes solid white */
        .navbar-scrolled {
            background-color: white !important;
            border-bottom: 1px solid #e5e5e5 !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05) !important;
        }

        /* Solid navbar for other pages */
        .navbar-solid {
            background-color: white;
            border-bottom: 1px solid #e5e5e5;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        /* Text colors for transparent navbar */
        .navbar-transparent .contact-link,
        .navbar-transparent .menu-button,
        .navbar-transparent .nav-icon,
        .navbar-transparent .contact-plus,
        .navbar-transparent .menu-button-text,
        .navbar-transparent .logo img {
            color: white;
            filter: brightness(0) invert(1);
        }

        /* Text colors when scrolled or on solid navbar */
        .navbar-scrolled .contact-link,
        .navbar-scrolled .menu-button,
        .navbar-scrolled .nav-icon,
        .navbar-scrolled .contact-plus,
        .navbar-scrolled .menu-button-text,
        .navbar-scrolled .logo img,
        .navbar-solid .contact-link,
        .navbar-solid .menu-button,
        .navbar-solid .nav-icon,
        .navbar-solid .contact-plus,
        .navbar-solid .menu-button-text,
        .navbar-solid .logo img {
            color: #1a1a1a;
            filter: none;
        }

        /* Logo styling - DIFFERENT FOR MOBILE AND DESKTOP */
        .logo {
            text-decoration: none;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo.hidden {
            display: none !important;
        }

        .logo:hover {
            opacity: 0.7;
        }

        .logo img {
            width: auto;
            object-fit: contain;
            transition: all 0.3s ease;
        }

        /* MOBILE: Logo left aligned, 150px height */
        @media (max-width: 768px) {
            .logo img {
                height: 150px; /* Mobile height */
                width: auto; /* Maintain aspect ratio */
            }

            .logo {
                position: absolute;
                left: -40px;
                top: 50%;
                transform: translateY(-50%);
            }
        }

        /* DESKTOP: Logo centered, 175px width */
        @media (min-width: 769px) {
            .logo img {
                width: 260px; /* Desktop width */
                height: auto; /* Maintain aspect ratio */
            }

            .logo {
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
            }
        }

        /* Menu button styling */
        .navbar-transparent .menu-button {
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.8);
        }

        .navbar-scrolled .menu-button,
        .navbar-solid .menu-button {
            color: #1a1a1a;
            border: 1px solid #1a1a1a;
        }

        .menu-button:hover {
            background-color: #1a1a1a;
            color: white !important;
            border-color: #1a1a1a;
        }

        .menu-button:hover .iconify {
            color: white !important;
        }

        /* Search input styling */
        .navbar-transparent .search-input {
            border-bottom: 1px solid rgba(255, 255, 255, 0.8);
            color: white;
        }

        .navbar-transparent .search-input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .navbar-scrolled .search-input,
        .navbar-solid .search-input {
            border-bottom: 1px solid #1a1a1a;
            color: #1a1a1a;
        }

        .navbar-scrolled .search-input::placeholder,
        .navbar-solid .search-input::placeholder {
            color: #666;
        }

        /* Mobile responsiveness */
        @media (max-width: 768px) {
            .contact-link {
                display: none !important;
            }

            .menu-button-text {
                display: none;
            }

            .menu-button {
                border: none;
                padding: 0;
                background-color: transparent;
            }

            .menu-button:hover {
                background-color: transparent;
                opacity: 0.6;
            }

            /* Mobile layout */
            .nav-container {
                display: flex;
                align-items: center;
                justify-content: space-between;
                width: 100%;
                position: relative;
                padding-left: 140px; /* Make space for the larger logo on mobile */
            }

            /* Hide nav-left on mobile since logo is absolutely positioned */
            .nav-left {
                display: none !important;
            }

            /* Search input on mobile */
            .search-input.active {
                width: 150px;
            }
        }

        /* Desktop layout */
        @media (min-width: 769px) {
            .nav-container {
                display: flex;
                align-items: center;
                justify-content: space-between;
                width: 100%;
                height: 100%;
                position: relative;
            }

            /* Show nav-left on desktop for contact link */
            .nav-left {
                display: flex !important;
                flex: 1;
            }

            /* Show nav-center on desktop for logo */
            .nav-center {
                display: flex !important;
                flex: 1;
                justify-content: center;
                position: relative;
            }

            /* Show nav-right on desktop */
            .nav-right {
                display: flex !important;
                flex: 1;
                justify-content: flex-end;
            }
        }

        /* Contact link */
        .contact-link {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 11px;
            font-weight: 500;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            transition: all 0.3s ease;
            cursor: pointer;
            text-decoration: none;
        }

        .contact-link:hover {
            opacity: 0.7;
        }

        .contact-plus {
            font-size: 14px;
            font-weight: 400;
            transition: all 0.3s ease;
        }

        .menu-button {
            display: flex;
            align-items: center;
            gap: 6px;
            padding: 8px 14px;
            background-color: transparent;
            font-size: 11px;
            font-weight: 500;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            cursor: pointer;
            transition: all 0.3s ease;
            border-radius: 2px;
        }

        .nav-icon {
            cursor: pointer;
            transition: all 0.3s ease;
            background: none;
            border: none;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .nav-icon:hover {
            opacity: 0.7;
        }

        .cart-badge {
            position: absolute;
            top: -4px;
            right: -4px;
            background-color: #ef4444;
            color: white;
            font-size: 10px;
            font-weight: 600;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .mobile-menu {
            position: fixed;
            top: 0;
            right: 0;
            width: 85vw;
            max-width: 300px;
            height: 100vh;
            background-color: white;
            transform: translateX(100%);
            transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            z-index: 9999999;
            box-shadow: -2px 0 15px rgba(0, 0, 0, 0.1);
        }

        .mobile-menu.active {
            transform: translateX(0);
        }

        .mobile-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(2px);
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s ease;
            z-index: 9999998;
        }

        .mobile-backdrop.active {
            opacity: 1;
            pointer-events: auto;
        }

        /* Search */
        .search-container {
            position: relative;
        }

        .search-input {
            position: absolute;
            right: 40px;
            top: 50%;
            transform: translateY(-50%);
            width: 0;
            opacity: 0;
            transition: all 0.3s ease;
            border: none;
            background: transparent;
            outline: none;
            font-size: 13px;
            letter-spacing: 0.05em;
            padding: 4px 0;
        }

        .search-input.active {
            width: 200px;
            opacity: 1;
        }

        /* Account Dropdown */
        .dropdown-menu {
            position: absolute;
            top: calc(100% + 8px);
            right: 0;
            background-color: white;
            border: 1px solid #e5e5e5;
            border-radius: 4px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            min-width: 160px;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: all 0.2s ease;
            z-index: 999999;
        }

        .dropdown-menu.show {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .dropdown-item {
            display: block;
            padding: 12px 16px;
            font-size: 13px;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: #1a1a1a;
            text-decoration: none;
            transition: background-color 0.2s ease;
            border-bottom: 1px solid #f5f5f5;
        }

        .dropdown-item:last-child {
            border-bottom: none;
        }

        .dropdown-item:hover {
            background-color: #f9f9f9;
        }

        /* Smooth transitions */
        .contact-link,
        .menu-button,
        .nav-icon,
        .contact-plus,
        .logo img {
            transition: color 0.3s ease, background-color 0.3s ease, border-color 0.3s ease, filter 0.3s ease;
        }

        /* Ensure navbar stays on top */
        .navbar {
            z-index: 9999 !important;
        }
    </style>
</head>

<body class="bg-white">

    <?php
    // PHP VARIABLES TO CONTROL NAVBAR TRANSPARENCY
    // Set these variables before including this file in your pages
    
    // Default values if not set
    $isHomepage = $isHomepage ?? false; // true = transparent navbar, false = solid navbar
    $showLogo = $showLogo ?? true; // true = show logo, false = hide logo
    ?>

    <!-- Mobile Backdrop -->
    <div class="mobile-backdrop" id="mobileBackdrop" onclick="closeMobileMenu()"></div>

    <!-- Mobile Menu -->
    <aside class="mobile-menu" id="mobileMenu">
        <div class="p-6 border-b border-neutral-200 flex items-center justify-between">
            <h3 class="text-lg font-semibold uppercase tracking-wider">Menu</h3>
            <button onclick="closeMobileMenu()" class="nav-icon">
                <span class="iconify" data-icon="lucide:x" data-width="24"></span>
            </button>
        </div>
        <nav class="p-6 space-y-4">
            <a href="bestseller.php"
                class="block text-xl font-medium tracking-tight hover:opacity-60 transition-opacity">Best Seller</a>
            <a href="new-arrival.php"
                class="block text-xl font-medium tracking-tight hover:opacity-60 transition-opacity">New Arrival</a>
            <a href="hoodies.php"
                class="block text-xl font-medium tracking-tight hover:opacity-60 transition-opacity">Hoodies</a>
            <a href="contact.php"
                class="block text-xl font-medium tracking-tight hover:opacity-60 transition-opacity">Contact Us</a>
            <a href="about.php"
                class="block text-xl font-medium tracking-tight hover:opacity-60 transition-opacity">About Us</a>
            <div class="pt-4 border-t border-neutral-200 space-y-3">
                <a href="login.php"
                    class="block text-base font-medium text-neutral-600 hover:text-black transition-colors">Login</a>
                <a href="signup.php"
                    class="block text-base font-medium text-neutral-600 hover:text-black transition-colors">Register</a>
            </div>
        </nav>
    </aside>

    <!-- Main Navigation -->
    <nav class="navbar" id="mainNavbar">
        <div class="max-w-[1920px] mx-auto px-6 h-16 flex items-center justify-between relative">
            <!-- Logo - Different positioning for mobile vs desktop -->
            <?php if ($showLogo): ?>
                <a href="index.php" class="logo">
                    <img src="hoo.png" alt="ShopAKIRA Logo">
                </a>
            <?php endif; ?>

            <div class="nav-container w-full">
                <!-- Left Side: Contact link (desktop only) -->
                <div class="nav-left">
                    <!-- Desktop contact link -->
                    <a href="contact.php" class="contact-link desktop-contact">
                        <span class="contact-plus">+</span>
                        <span>Contact Us</span>
                    </a>
                </div>

                <!-- Center: Logo container (desktop only) -->
                <div class="nav-center">
                    <!-- Logo is now absolutely positioned but centered for desktop -->
                </div>

                <!-- Right Side: Icons -->
                <div class="nav-right">
                    <div class="flex items-center gap-5 md:gap-6">
                        <!-- Search -->
                        <div class="search-container relative">
                            <input type="text" id="searchInput" class="search-input" placeholder="Search products..."
                                onkeypress="handleSearch(event)" />
                            <button onclick="toggleSearch()" class="nav-icon">
                                <span class="iconify" id="searchIcon" data-icon="lucide:search" data-width="20"></span>
                            </button>
                        </div>

                        <!-- Account -->
                        <div class="relative account-dropdown">
                            <button onclick="toggleAccountDropdown(event)" class="nav-icon account-trigger">
                                <span class="iconify" data-icon="lucide:user" data-width="20"></span>
                            </button>
                            <div class="dropdown-menu" id="accountDropdown">
                                <a href="login.php" class="dropdown-item">Login</a>
                                <a href="signup.php" class="dropdown-item">Register</a>
                            </div>
                        </div>

                        <!-- Cart -->
                        <a href="cart.php" class="relative nav-icon">
                            <span class="iconify" data-icon="lucide:shopping-bag" data-width="20"></span>
                        </a>

                        <!-- Menu Button -->
                        <button onclick="openMobileMenu()" class="menu-button">
                            <span class="iconify" data-icon="lucide:menu" data-width="18"></span>
                            <span class="menu-button-text">MENU</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <script>
        // Pass PHP variables to JavaScript
        const isHomepage = <?php echo $isHomepage ? 'true' : 'false'; ?>;
        const showLogo = <?php echo $showLogo ? 'true' : 'false'; ?>;

        // Set navbar class based on page type
        const navbar = document.getElementById('mainNavbar');

        if (isHomepage) {
            // Homepage starts with transparent navbar
            navbar.classList.add('navbar-transparent');
        } else {
            // Other pages have solid navbar
            navbar.classList.add('navbar-solid');
        }

        // Mobile Menu Functions
        function openMobileMenu() {
            document.getElementById('mobileMenu').classList.add('active');
            document.getElementById('mobileBackdrop').classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeMobileMenu() {
            document.getElementById('mobileMenu').classList.remove('active');
            document.getElementById('mobileBackdrop').classList.remove('active');
            document.body.style.overflow = '';
        }

        // Search Functions
        let searchOpen = false;

        function toggleSearch() {
            const searchInput = document.getElementById('searchInput');
            const searchIcon = document.getElementById('searchIcon');

            searchOpen = !searchOpen;

            if (searchOpen) {
                searchInput.classList.add('active');
                searchInput.focus();
                searchIcon.setAttribute('data-icon', 'lucide:x');
            } else {
                searchInput.classList.remove('active');
                searchInput.value = '';
                searchIcon.setAttribute('data-icon', 'lucide:search');
            }
        }

        function handleSearch(event) {
            if (event.key === 'Enter' && event.target.value.trim() !== '') {
                const searchTerm = event.target.value.trim();
                console.log('Searching for:', searchTerm);
                // Implement your search logic here
                // window.location.href = `search.php?q=${encodeURIComponent(searchTerm)}`;
            }
        }

        // Account Dropdown Functions
        function toggleAccountDropdown(event) {
            event.preventDefault();
            event.stopPropagation();

            const dropdown = document.getElementById('accountDropdown');
            dropdown.classList.toggle('show');
        }

        // Close dropdowns when clicking outside
        document.addEventListener('click', function (event) {
            const dropdown = document.getElementById('accountDropdown');
            const trigger = document.querySelector('.account-trigger');
            const searchInput = document.getElementById('searchInput');
            const searchIcon = document.getElementById('searchIcon');

            // Close account dropdown
            if (dropdown && !dropdown.contains(event.target) && trigger && !trigger.contains(event.target)) {
                dropdown.classList.remove('show');
            }

            // Close search
            if (searchOpen && searchInput && !searchInput.contains(event.target) && !event.target.closest('.search-container')) {
                if (searchInput) searchInput.classList.remove('active');
                if (searchInput) searchInput.value = '';
                if (searchIcon) searchIcon.setAttribute('data-icon', 'lucide:search');
                searchOpen = false;
            }
        });

        // Close on Escape key
        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape') {
                const dropdown = document.getElementById('accountDropdown');
                if (dropdown) dropdown.classList.remove('show');
                closeMobileMenu();

                if (searchOpen) {
                    const searchInput = document.getElementById('searchInput');
                    const searchIcon = document.getElementById('searchIcon');
                    if (searchInput) searchInput.classList.remove('active');
                    if (searchInput) searchInput.value = '';
                    if (searchIcon) searchIcon.setAttribute('data-icon', 'lucide:search');
                    searchOpen = false;
                }
            }
        });

        // JavaScript function to dynamically show/hide logo
        function setLogoVisibility(shouldShow) {
            const logo = document.querySelector('.logo');
            if (logo) {
                if (shouldShow) {
                    logo.classList.remove('hidden');
                } else {
                    logo.classList.add('hidden');
                }
            }
        }

        // Handle homepage scroll effect
        if (isHomepage) {
            window.addEventListener('scroll', function () {
                const navbar = document.getElementById('mainNavbar');
                if (window.scrollY > 50) {
                    // When scrolled, remove transparent class and add scrolled class
                    navbar.classList.remove('navbar-transparent');
                    navbar.classList.add('navbar-scrolled');
                } else {
                    // When at top, remove scrolled class and add transparent class
                    navbar.classList.remove('navbar-scrolled');
                    navbar.classList.add('navbar-transparent');
                }
            });
        }
    </script>

</body>

</html>