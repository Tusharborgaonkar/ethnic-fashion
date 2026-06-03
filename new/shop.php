<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>VÉRITÉ | Shop All</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Text:wght@400;700&amp;family=Hanken+Grotesk:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
        }
        
        .stagger-card {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1);
        }
        
        .stagger-card.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .filter-sidebar {
            transform: translateX(100%);
            transition: transform 0.5s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .filter-sidebar.open {
            transform: translateX(0);
        }

        .product-card-overlay {
            background: linear-gradient(to top, rgba(31, 40, 47, 0.8) 0%, rgba(31, 40, 47, 0) 40%);
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .product-card:hover .product-card-overlay {
            opacity: 1;
        }

        /* Puzzle Grid logic for Desktop */
        @media (min-width: 1024px) {
            .puzzle-grid {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                grid-auto-rows: 300px;
                gap: 24px;
            }
            .item-2x2 { grid-column: span 2; grid-row: span 2; }
            .item-1x2 { grid-column: span 1; grid-row: span 2; }
            .item-1x1 { grid-column: span 1; grid-row: span 1; }
        }
    </style>
<script id="tailwind-config">
  tailwind.config = {
    darkMode: "class",
    theme: {
      extend: {
        "colors": {
                "inverse-on-surface": "#fbefe0",
                "sand": "#E8D5C7",
                "surface-container": "#f8ecdd",
                "charcoal": "#1F282F",
                "surface-container-low": "#fef2e3",
                "on-tertiary-fixed-variant": "#51452e",
                "on-error-container": "#93000a",
                "secondary-container": "#dee6cd",
                "on-primary-fixed": "#410004",
                "primary-container": "#a42325",
                "surface-tint": "#b02c2c",
                "on-tertiary": "#ffffff",
                "on-secondary-container": "#606753",
                "secondary-fixed-dim": "#c2cab2",
                "on-primary": "#ffffff",
                "inverse-primary": "#ffb3ad",
                "on-primary-fixed-variant": "#8e1118",
                "surface-dim": "#e4d8ca",
                "on-error": "#ffffff",
                "on-tertiary-container": "#d9c9aa",
                "surface-bright": "#fff8f3",
                "outline-variant": "#e1bfbb",
                "on-background": "#201b12",
                "on-secondary-fixed": "#171e0e",
                "inverse-surface": "#363026",
                "surface-variant": "#ece1d2",
                "tertiary-container": "#60543c",
                "deep-olive": "#3D4432",
                "primary": "#820411",
                "on-tertiary-fixed": "#231a07",
                "terracotta": "#A42325",
                "surface-container-lowest": "#ffffff",
                "outline": "#8d706e",
                "error": "#ba1a1a",
                "primary-fixed-dim": "#ffb3ad",
                "surface-container-highest": "#ece1d2",
                "on-surface": "#201b12",
                "surface": "#fff8f3",
                "secondary": "#5a614d",
                "on-surface-variant": "#59413f",
                "tertiary-fixed-dim": "#d5c5a6",
                "background": "#fff8f3",
                "primary-fixed": "#ffdad7",
                "secondary-fixed": "#dee6cd",
                "on-secondary": "#ffffff",
                "tertiary": "#483d26",
                "surface-container-high": "#f2e6d8",
                "on-secondary-fixed-variant": "#424937",
                "error-container": "#ffdad6",
                "tertiary-fixed": "#f2e1c1",
                "on-primary-container": "#ffbab4"
        },
        "borderRadius": {
                "DEFAULT": "0.25rem",
                "lg": "0.5rem",
                "xl": "0.75rem",
                "full": "9999px"
        },
        "spacing": {
                "margin-mobile": "20px",
                "gutter": "24px",
                "component-gap": "16px",
                "section-padding": "120px",
                "margin-desktop": "64px"
        },
        "fontFamily": {
                "headline-md": ["Libre Caslon Text"],
                "headline-lg-mobile": ["Libre Caslon Text"],
                "body-md": ["Hanken Grotesk"],
                "label-sm": ["Hanken Grotesk"],
                "body-lg": ["Hanken Grotesk"],
                "label-lg": ["Hanken Grotesk"],
                "display-lg": ["Libre Caslon Text"],
                "headline-lg": ["Libre Caslon Text"]
        },
        "fontSize": {
                "headline-md": ["28px", {"lineHeight": "34px", "fontWeight": "400"}],
                "headline-lg-mobile": ["32px", {"lineHeight": "38px", "fontWeight": "400"}],
                "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                "label-sm": ["12px", {"lineHeight": "16px", "letterSpacing": "0.08em", "fontWeight": "500"}],
                "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                "label-lg": ["14px", {"lineHeight": "20px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                "display-lg": ["64px", {"lineHeight": "72px", "letterSpacing": "-0.02em", "fontWeight": "400"}],
                "headline-lg": ["40px", {"lineHeight": "48px", "fontWeight": "400"}]
        }
},
    },
  }
</script>
</head>
<body class="bg-surface text-on-surface font-body-md overflow-x-hidden">
<!-- TopNavBar -->
<header class="fixed top-0 w-full z-50 bg-surface/90 backdrop-blur-md transition-all duration-300">
<nav class="flex justify-between items-center px-margin-desktop py-6 w-full">
<div class="flex-1">
<a class="font-headline-lg text-headline-lg uppercase tracking-tighter text-charcoal" href="#">VÉRITÉ</a>
</div>
<div class="hidden md:flex flex-1 justify-center gap-10">
<a class="font-label-lg text-label-lg text-terracotta font-bold border-b-2 border-terracotta hover:text-terracotta transition-colors duration-300" href="#">Collections</a>
<a class="font-label-lg text-label-lg text-charcoal hover:text-terracotta transition-colors duration-300" href="#">Craftsmanship</a>
<a class="font-label-lg text-label-lg text-charcoal hover:text-terracotta transition-colors duration-300" href="#">Sustainability</a>
<a class="font-label-lg text-label-lg text-charcoal hover:text-terracotta transition-colors duration-300" href="#">Bespoke</a>
</div>
<div class="flex-1 flex justify-end gap-6 items-center">
<button class="flex items-center gap-2 font-label-lg text-label-lg hover:text-terracotta transition-colors" id="open-filters">
<span class="material-symbols-outlined">tune</span>
<span class="hidden sm:inline">Filter</span>
</button>
<div class="flex gap-4">
<span class="material-symbols-outlined cursor-pointer hover:text-terracotta transition-colors">shopping_bag</span>
<span class="material-symbols-outlined cursor-pointer hover:text-terracotta transition-colors">person</span>
</div>
</div>
</nav>
</header>
<!-- Sidebar Filters (Slide-out) -->
<div class="fixed inset-0 bg-charcoal/20 backdrop-blur-sm z-[60] opacity-0 pointer-events-none transition-opacity duration-300" id="filter-overlay"></div>
<aside class="filter-sidebar fixed top-0 right-0 h-full w-full max-w-md bg-surface z-[70] p-margin-desktop overflow-y-auto" id="filter-sidebar">
<div class="flex justify-between items-center mb-12">
<h2 class="font-headline-md text-headline-md text-charcoal">Refine</h2>
<button class="material-symbols-outlined text-3xl" id="close-filters">close</button>
</div>
<div class="space-y-10">
<section>
<h3 class="font-label-lg text-label-lg uppercase tracking-widest mb-4">Collection</h3>
<div class="flex flex-wrap gap-3">
<button class="px-4 py-2 bg-sand text-charcoal font-label-sm text-label-sm">Essential Silhouettes</button>
<button class="px-4 py-2 border border-outline-variant text-charcoal font-label-sm text-label-sm">Heritage Weaves</button>
<button class="px-4 py-2 border border-outline-variant text-charcoal font-label-sm text-label-sm">Bespoke Rituals</button>
</div>
</section>
<section>
<h3 class="font-label-lg text-label-lg uppercase tracking-widest mb-4">Fabric</h3>
<div class="space-y-3">
<label class="flex items-center gap-3 font-body-md cursor-pointer group">
<input class="form-checkbox text-terracotta rounded-none border-outline-variant focus:ring-0" type="checkbox"/>
<span class="group-hover:text-terracotta transition-colors">Hand-loomed Cotton</span>
</label>
<label class="flex items-center gap-3 font-body-md cursor-pointer group">
<input class="form-checkbox text-terracotta rounded-none border-outline-variant focus:ring-0" type="checkbox"/>
<span class="group-hover:text-terracotta transition-colors">Organic Linen</span>
</label>
<label class="flex items-center gap-3 font-body-md cursor-pointer group">
<input class="form-checkbox text-terracotta rounded-none border-outline-variant focus:ring-0" type="checkbox"/>
<span class="group-hover:text-terracotta transition-colors">Ahimsa Silk</span>
</label>
</div>
</section>
<section>
<h3 class="font-label-lg text-label-lg uppercase tracking-widest mb-4">Color</h3>
<div class="grid grid-cols-4 gap-4">
<div class="w-full aspect-square bg-charcoal cursor-pointer outline outline-offset-2 outline-terracotta"></div>
<div class="w-full aspect-square bg-sand cursor-pointer"></div>
<div class="w-full aspect-square bg-[#F5F5F5] cursor-pointer"></div>
<div class="w-full aspect-square bg-deep-olive cursor-pointer"></div>
</div>
</section>
</div>
<div class="mt-20">
<button class="w-full py-5 bg-charcoal text-surface font-label-lg text-label-lg uppercase tracking-widest hover:bg-terracotta transition-colors">Apply Filters</button>
</div>
</aside>
<!-- Main Canvas -->
<main class="pt-[140px] px-margin-desktop min-h-screen">
<!-- Breadcrumbs & Stats -->
<div class="flex justify-between items-baseline mb-12">
<div>
<h1 class="font-headline-lg text-headline-lg text-charcoal mb-2">Shop All</h1>
<p class="font-body-md text-on-surface-variant">Archiving heritage through 24 modern silhouettes.</p>
</div>
<div class="hidden sm:block text-right">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-widest">Showing 1–12 of 24</span>
</div>
</div>
<!-- Puzzle Grid -->
<div class="puzzle-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter mb-section-padding">
<!-- Large Feature Card 1 -->
<div class="stagger-card product-card group relative item-2x2 overflow-hidden">
<img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="A high-end editorial fashion shot of a model wearing a minimalist hand-loomed ivory tunic. The setting is a bright, sun-drenched architectural space with clean lines and warm shadows. The lighting is soft and natural, emphasizing the rich texture of the fabric. The overall mood is peaceful and intellectual, highlighting the premium craftsmanship of the garment." src="https://lh3.googleusercontent.com/aida/AP1WRLsMakxk5pOS0jHZRrGJE4OdTu0ECVnaN_zWtkGwORociiBeXY8j6KjspcC8n3lsbBi_HsKLq0AjpMSPFL-E5Jg1sTqv3Mx2FKmeLmEQI7u1lIrOZIpUYm0gbzQYe04DPLOAbaUPXBecb4TOUtw8ReC6mTFXD2IF9wVx-tBCYT6GJdsW1RB4OKtgos8SbY--S-dPlUBhnrdg-zETbaVbL1cLHPDcUTUECx0gLJAc-ed2HwHdclkWAEzvOC8"/>
<div class="product-card-overlay absolute inset-0 p-8 flex flex-col justify-end">
<div class="translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
<span class="font-label-sm text-label-sm text-sand uppercase tracking-widest mb-2 block">New Arrival</span>
<h3 class="font-headline-md text-headline-md text-surface">The Meridian Kurta</h3>
<p class="font-label-lg text-label-lg text-sand mt-1">$240.00</p>
</div>
</div>
</div>
<!-- Standard Card 1 -->
<div class="stagger-card product-card group relative item-1x2 overflow-hidden">
<img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="A detailed close-up of a premium gold-toned open-knit tee worn by a model in a sophisticated setting. The lighting is high-key and cinematic, showcasing the intricate knit patterns and the subtle sheen of the sustainable fibers. The background is a soft, warm neutral tone that complements the earthy color palette. The aesthetic is modern and high-tech but rooted in traditional textile art." src="https://lh3.googleusercontent.com/aida/AP1WRLvwMZeLvrUWBpVk8dPcOMotSP6p4CVSVIMMutsKYuKRZcrO0k7M7YJeZg5jgDfB-Oamr4P8zeDsZkm3bOtSdAokI7C2a3sX6VMWDiTFgZQYLYomM9cajK8dkgKlAz9X1GOF3wxivo99cefOR_LDKnyC2B9wGIw4jJPYDSRZ6D51e6W0HahV7Ar-r6jXqCf6FKMlnLiPUeThgl8jjCawy_7Dj826SoJbuObmvRQwBeZrbkmv3Eg4SIz1Lc4"/>
<div class="product-card-overlay absolute inset-0 p-6 flex flex-col justify-end text-center md:text-left">
<div class="translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
<h3 class="font-label-lg text-label-lg text-surface uppercase">Aurelia Knit Tee</h3>
<p class="font-label-sm text-label-sm text-sand mt-1">$185.00</p>
</div>
</div>
</div>
<!-- Standard Card 2 -->
<div class="stagger-card product-card group relative item-1x1 overflow-hidden">
<img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="A minimalist fashion portrait of a model in a tailored terracotta-colored set. The lighting is focused and artistic, creating deep shadows and bright highlights that emphasize the structure of the garment. The background is a simple plaster wall, adding to the tactile and organic feel of the composition. The mood is confident and quietly luxurious." src="https://lh3.googleusercontent.com/aida/AP1WRLvE94GQNOIkGM_tmH8C-96-pn7_X8CdrumuPjtlWyNCWUrL68ndhk8RHQ1_Jl3oHgVv38JmJlNU3GmdJZ0KChzdKUW7C5Ym-QVa07vYQ9MBw_KBomrp3ILhPVUPTFjou3chadVeQoeGn1pO7JK71krde7cz_GGf5z1cBaU_BBVwlyMQ3aaSP7xRheau2f4dOoDbwwXI-h3OIQQ5LNfeJPKw46J7jN0iy-ikhlXSpk6ua1tUEy-Ld5V5QkQ"/>
<div class="product-card-overlay absolute inset-0 p-4 flex flex-col justify-end">
<div class="translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
<h3 class="font-label-sm text-label-sm text-surface">Poppy Tailored Set</h3>
<p class="font-label-sm text-label-sm text-sand">$310.00</p>
</div>
</div>
</div>
<!-- Small Square Action Card -->
<div class="stagger-card item-1x1 bg-sand p-8 flex flex-col justify-center items-center text-center border border-charcoal/5">
<span class="material-symbols-outlined text-terracotta text-4xl mb-4" style="font-variation-settings: 'FILL' 1;">eco</span>
<h3 class="font-headline-md text-headline-md text-charcoal mb-2">Consciously Made</h3>
<p class="font-body-md text-on-surface-variant text-sm">Every thread is traced back to its origin in our partner craft clusters.</p>
</div>
<!-- Standard Card 3 -->
<div class="stagger-card product-card group relative item-1x2 overflow-hidden">
<img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="A model wearing a deep olive-toned heritage robe in an outdoor botanical setting. The lighting is dappled sunlight through leaves, creating a soft and natural atmosphere. The composition is editorial and airy, emphasizing the flow and movement of the organic linen fabric. The color palette is earthy and sophisticated, reflecting the brand's sustainable philosophy." src="https://lh3.googleusercontent.com/aida/AP1WRLst03k5zdq0dhc6DZpufa0ZKpyx930cTaBUr0_JsFhjPCTUtMwH4UvMYyED4ahEDhX1BcxW0fDfLCDf6b_KtUQoqHJj6mR_uCiqihNcLHXDudsa70DOW1aZ4UKXdiC207Cx-CFqWL-ZzRyFpL5OB90y3D5Fq-13cZ06wAdBwk2rx51aF8q2fjnh-GW1WYa9bqBW3Jy6OSRhmwuZ6LFLeMwML8MGiEFrEmrfq5NXyoIQpJHXqnhi61RBxnA"/>
<div class="product-card-overlay absolute inset-0 p-6 flex flex-col justify-end">
<div class="translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
<h3 class="font-label-lg text-label-lg text-surface uppercase">Rafi Heritage Robe</h3>
<p class="font-label-sm text-label-sm text-sand mt-1">$275.00</p>
</div>
</div>
</div>
<!-- Large Feature Card 2 -->
<div class="stagger-card product-card group relative item-2x2 overflow-hidden">
<img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="An artistic fashion shot of a model wearing the Moon Tailored Set in a cool-toned studio setting. The lighting is diffused and ethereal, casting a soft glow over the sand-colored garments. The composition uses negative space to create a sense of calm and modern minimalism. The texture of the hand-loomed fabric is clearly visible, evoking a feeling of high-end tactile quality." src="https://lh3.googleusercontent.com/aida/AP1WRLsSW6LnkiTnGzFVz3ou9bVJ9nTcpZ7FaXmcJJy4-f74FhyOsKwKdfEKEUfUkdaFxsuclUZQGsUdGpx-qiVGbK-NDgZg1GvdhRTJbQbe8VsZ8z6qWxlpWi6uYty6rvrNrx_1nOttgvwxm14mQnT32baqpLOUaB1NCTz6xqzXTC8aOAkfq1qzB5DKjBaEyJFmeX8IncC8wnkVNVTMuSOvZZ32bosxdVVsqN-YQ7ISZ86ERC6idCuC5wyXdQ"/>
<div class="product-card-overlay absolute inset-0 p-8 flex flex-col justify-end">
<div class="translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
<span class="font-label-sm text-label-sm text-sand uppercase tracking-widest mb-2 block">Bespoke Collection</span>
<h3 class="font-headline-md text-headline-md text-surface">The Moon Trousers</h3>
<p class="font-label-lg text-label-lg text-sand mt-1">$195.00</p>
</div>
</div>
</div>
<!-- Standard Card 4 -->
<div class="stagger-card product-card group relative item-1x2 overflow-hidden">
<img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="A model wearing a pristine white midi dress with intricate texture, standing in a stark, minimalist art gallery. The lighting is crisp and bright, creating high contrast between the garment and the architectural surroundings. The visual style is clean, modern, and high-fashion. The atmosphere is serene and quiet, reflecting a sophisticated, intellectual aesthetic." src="https://lh3.googleusercontent.com/aida/AP1WRLvF31a8PJO64wET41tZxdXiaHvlX6VVOfzD62WnZ_KaJbCrKlU_vt0mfF6wSQHX44r2b87NhzRJtIzZAYXlzjsGfMxnBMyW_sIVGW5MwT40lOFhpDDW1hNDu9e3w7uz_8wtdS9AZ5MA63NL1hEFuuSq3xcQudi5saaPA6J0me3fT_r4m-73zT3wWW-AbwB22duY-9sKziVgBZxm5yP_W4AzETNnMRK9Jdbz-MC8IfpxC8MLbQ-ABamNoEM"/>
<div class="product-card-overlay absolute inset-0 p-6 flex flex-col justify-end">
<div class="translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
<h3 class="font-label-lg text-label-lg text-surface uppercase">Blanc Halter Midi</h3>
<p class="font-label-sm text-label-sm text-sand mt-1">$350.00</p>
</div>
</div>
</div>
</div>
<!-- Pagination -->
<div class="flex justify-center items-center gap-8 mb-section-padding">
<button class="material-symbols-outlined text-charcoal hover:text-terracotta disabled:opacity-30" disabled="">west</button>
<div class="flex gap-4">
<span class="font-label-lg text-label-lg text-terracotta border-b-2 border-terracotta">01</span>
<span class="font-label-lg text-label-lg text-on-surface-variant hover:text-charcoal cursor-pointer">02</span>
<span class="font-label-lg text-label-lg text-on-surface-variant hover:text-charcoal cursor-pointer">03</span>
</div>
<button class="material-symbols-outlined text-charcoal hover:text-terracotta">east</button>
</div>
</main>
<!-- Footer -->
<footer class="bg-charcoal text-sand w-full">
<div class="grid grid-cols-1 md:grid-cols-12 gap-gutter px-margin-desktop py-section-padding items-end">
<div class="md:col-span-4">
<h2 class="font-headline-md text-headline-md text-sand mb-6">VÉRITÉ</h2>
<p class="font-body-md text-surface-variant max-w-sm">Crafting the future of ethnic wear by looking into the deep wisdom of our past. Minimalist. Sustainable. Timeless.</p>
</div>
<div class="md:col-span-5 grid grid-cols-2 gap-8">
<div class="flex flex-col gap-3">
<a class="font-label-sm text-label-sm text-surface-variant hover:text-terracotta transition-colors duration-300" href="#">The Studio</a>
<a class="font-label-sm text-label-sm text-surface-variant hover:text-terracotta transition-colors duration-300" href="#">Artisan Stories</a>
<a class="font-label-sm text-label-sm text-surface-variant hover:text-terracotta transition-colors duration-300" href="#">Care Guide</a>
</div>
<div class="flex flex-col gap-3">
<a class="font-label-sm text-label-sm text-surface-variant hover:text-terracotta transition-colors duration-300" href="#">Shipping</a>
<a class="font-label-sm text-label-sm text-surface-variant hover:text-terracotta transition-colors duration-300" href="#">Contact</a>
<div class="flex gap-4 mt-2">
<span class="material-symbols-outlined text-surface-variant cursor-pointer hover:text-sand">public</span>
<span class="material-symbols-outlined text-surface-variant cursor-pointer hover:text-sand">camera</span>
</div>
</div>
</div>
<div class="md:col-span-3 text-right">
<p class="font-label-sm text-label-sm text-surface-variant opacity-80 uppercase tracking-tighter">© 2024 VÉRITÉ HEIRLOOMS. PRESERVING TEXTILE HERITAGE.</p>
</div>
</div>
</footer>
<script>
        // Filter Sidebar Toggle
        const openFilters = document.getElementById('open-filters');
        const closeFilters = document.getElementById('close-filters');
        const filterSidebar = document.getElementById('filter-sidebar');
        const filterOverlay = document.getElementById('filter-overlay');

        const toggleFilters = (open) => {
            if (open) {
                filterSidebar.classList.add('open');
                filterOverlay.classList.remove('pointer-events-none');
                filterOverlay.classList.add('opacity-100');
                document.body.style.overflow = 'hidden';
            } else {
                filterSidebar.classList.remove('open');
                filterOverlay.classList.add('pointer-events-none');
                filterOverlay.classList.remove('opacity-100');
                document.body.style.overflow = 'auto';
            }
        };

        openFilters.addEventListener('click', () => toggleFilters(true));
        closeFilters.addEventListener('click', () => toggleFilters(false));
        filterOverlay.addEventListener('click', () => toggleFilters(false));

        // Intersection Observer for Stagger Fade
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('visible');
                    }, index * 100);
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.stagger-card').forEach(card => {
            observer.observe(card);
        });

        // Header Scroll Effect
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            if (window.scrollY > 50) {
                header.classList.add('py-4', 'shadow-sm');
                header.classList.remove('py-6');
            } else {
                header.classList.remove('py-4', 'shadow-sm');
                header.classList.add('py-6');
            }
        });
    </script>
</body></html>