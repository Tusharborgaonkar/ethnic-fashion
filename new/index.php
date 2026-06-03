<!DOCTYPE html>

<html class="scroll-smooth" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Mudaura | Sustainably Crafted Heritage</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Text:ital,wght@0,400;0,700;1,400&amp;family=Hanken+Grotesk:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-background": "#201b12",
                        "tertiary-container": "#60543c",
                        "tertiary-fixed": "#f2e1c1",
                        "surface-container-highest": "#ece1d2",
                        "secondary-container": "#dee6cd",
                        "on-secondary-container": "#606753",
                        "primary-container": "#a42325",
                        "inverse-primary": "#ffb3ad",
                        "secondary": "#5a614d",
                        "on-primary-fixed": "#410004",
                        "surface-bright": "#fff8f3",
                        "on-tertiary": "#ffffff",
                        "surface-container-high": "#f2e6d8",
                        "outline": "#8d706e",
                        "background": "#fff8f3",
                        "primary-fixed-dim": "#ffb3ad",
                        "on-secondary-fixed-variant": "#424937",
                        "surface-variant": "#ece1d2",
                        "on-surface-variant": "#59413f",
                        "on-error": "#ffffff",
                        "surface-tint": "#b02c2c",
                        "secondary-fixed-dim": "#c2cab2",
                        "surface": "#fff8f3",
                        "on-secondary": "#ffffff",
                        "outline-variant": "#e1bfbb",
                        "deep-olive": "#3D4432",
                        "error": "#ba1a1a",
                        "error-container": "#ffdad6",
                        "surface-dim": "#e4d8ca",
                        "charcoal": "#1F282F",
                        "primary-fixed": "#ffdad7",
                        "inverse-on-surface": "#fbefe0",
                        "on-error-container": "#93000a",
                        "primary": "#820411",
                        "on-tertiary-container": "#d9c9aa",
                        "on-secondary-fixed": "#171e0e",
                        "on-tertiary-fixed-variant": "#51452e",
                        "inverse-surface": "#363026",
                        "secondary-fixed": "#dee6cd",
                        "on-tertiary-fixed": "#231a07",
                        "tertiary-fixed-dim": "#d5c5a6",
                        "on-primary-container": "#ffbab4",
                        "on-primary-fixed-variant": "#8e1118",
                        "on-surface": "#201b12",
                        "terracotta": "#A42325",
                        "surface-container": "#f8ecdd",
                        "sand": "#E8D5C7",
                        "on-primary": "#ffffff",
                        "surface-container-low": "#fef2e3",
                        "tertiary": "#483d26",
                        "surface-container-lowest": "#ffffff"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "gutter": "24px",
                        "margin-mobile": "20px",
                        "section-padding": "120px",
                        "margin-desktop": "64px",
                        "component-gap": "16px"
                    },
                    "fontFamily": {
                        "body-lg": ["Hanken Grotesk"],
                        "label-sm": ["Hanken Grotesk"],
                        "headline-md": ["Libre Caslon Text"],
                        "display-lg": ["Libre Caslon Text"],
                        "headline-lg": ["Libre Caslon Text"],
                        "label-lg": ["Hanken Grotesk"],
                        "headline-lg-mobile": ["Libre Caslon Text"],
                        "body-md": ["Hanken Grotesk"]
                    },
                    "fontSize": {
                        "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                        "label-sm": ["12px", {"lineHeight": "16px", "letterSpacing": "0.08em", "fontWeight": "500"}],
                        "headline-md": ["28px", {"lineHeight": "34px", "fontWeight": "400"}],
                        "display-lg": ["64px", {"lineHeight": "72px", "letterSpacing": "-0.02em", "fontWeight": "400"}],
                        "headline-lg": ["40px", {"lineHeight": "48px", "fontWeight": "400"}],
                        "label-lg": ["14px", {"lineHeight": "20px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                        "headline-lg-mobile": ["32px", {"lineHeight": "38px", "fontWeight": "400"}],
                        "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}]
                    }
                }
            }
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            line-height: 1;
            text-transform: none;
            letter-spacing: normal;
            word-wrap: normal;
            white-space: nowrap;
            direction: ltr;
        }

        /* Sophisticated Entrance Animations */
        .reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1.2s cubic-bezier(0.22, 1, 0.36, 1), transform 1.2s cubic-bezier(0.22, 1, 0.36, 1);
            will-change: transform, opacity;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        .stagger-item {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s cubic-bezier(0.22, 1, 0.36, 1), transform 0.8s cubic-bezier(0.22, 1, 0.36, 1);
            will-change: transform, opacity;
        }

        .stagger-item.active {
            opacity: 1;
            transform: translateY(0);
        }

        .text-reveal-container {
            overflow: hidden;
        }

        .text-reveal-item {
            transform: translateY(100%);
            transition: transform 1.2s cubic-bezier(0.22, 1, 0.36, 1);
            will-change: transform;
        }

        .text-reveal-item.active {
            transform: translateY(0);
        }

        /* Refined Product Grid Transitions */
        .product-card-image {
            transition: transform 1.2s cubic-bezier(0.22, 1, 0.36, 1);
        }
        
        .product-card:hover .product-card-image {
            transform: scale(1.05);
        }

        .product-info-reveal {
            opacity: 1;
            transform: translateY(0);
            transition: all 0.6s cubic-bezier(0.22, 1, 0.36, 1);
        }

        .product-card:hover .product-info-reveal {
            transform: translateY(-8px);
        }

        /* Organic Textures */
        .grain-bg {
            background-image: url("https://www.transparenttextures.com/patterns/natural-paper.png");
            opacity: 0.4;
        }

        .organic-shape {
            position: absolute;
            z-index: 0;
            pointer-events: none;
            opacity: 0.1;
        }

        .nav-blur {
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
    </style>
</head>
<body class="bg-background text-on-background font-body-md overflow-x-hidden selection:bg-primary/10 selection:text-primary">
<!-- TopNavBar -->
<header class="fixed top-0 left-0 right-0 z-50 transition-all duration-700 bg-transparent" id="top-nav">
<nav class="flex justify-between items-center w-full px-margin-desktop py-8 max-w-[1440px] mx-auto">
<!-- Brand Logo -->
<a class="font-display-lg text-headline-md uppercase tracking-[0.2em] text-primary transition-all duration-500 hover:opacity-80" href="#">
            Mudaura
        </a>
<!-- Navigation Links -->
<div class="hidden md:flex items-center space-x-12">
<a class="font-label-lg text-label-lg text-primary border-b border-primary pb-1" href="#">Collections</a>
<a class="font-label-lg text-label-lg text-on-surface/70 hover:text-primary transition-colors duration-500" href="#">Craftsmanship</a>
<a class="font-label-lg text-label-lg text-on-surface/70 hover:text-primary transition-colors duration-500" href="#">Heritage</a>
<a class="font-label-lg text-label-lg text-on-surface/70 hover:text-primary transition-colors duration-500" href="#">Our Story</a>
</div>
<!-- Trailing Icons -->
<div class="flex items-center space-x-6">
<button class="hover:text-primary transition-colors duration-500 active:scale-90">
<span class="material-symbols-outlined" data-icon="search">search</span>
</button>
<button class="hover:text-primary transition-colors duration-500 active:scale-90">
<span class="material-symbols-outlined" data-icon="person">person</span>
</button>
<button class="hover:text-primary transition-colors duration-500 active:scale-90 relative">
<span class="material-symbols-outlined" data-icon="shopping_bag">shopping_bag</span>
<span class="absolute -top-1 -right-1 w-1.5 h-1.5 bg-primary rounded-full"></span>
</button>
</div>
</nav>
</header>
<main>
<!-- Hero Section -->
<section class="relative h-screen w-full flex items-center justify-center overflow-hidden bg-surface-dim">
<div class="absolute inset-0 z-0">
<img alt="Hero Image" class="w-full h-full object-cover object-top transition-transform duration-[20s] scale-105" id="hero-img" src="https://lh3.googleusercontent.com/aida/AP1WRLsG1leLxi8HJfB93ak9d9JIyYaRfuAQ-tO2RsIMnx4lI7HnzuChpI9XYogLxjtLJx9mweJfy5sVXjpj4uFrkFW3XxizJWRlNhIWoV5AknALVdJwhD8URS3ffK1_PE7QQEIUg6hBw_q4E2y0ro11rzWF0knVw3k6LBQHi-O8EXMaoAcemMrxe771NZk635pfMc58u2_dgXfs-Qb69i2rOm7TNZ171ecjWKMvuObDG8TH4Hw8P3sHMdgdGA"/>
<div class="absolute inset-0 bg-gradient-to-b from-black/10 via-transparent to-background/60"></div>
</div>
<div class="relative z-10 text-center max-w-[900px] px-margin-mobile">
<div class="text-reveal-container mb-6">
<span class="text-reveal-item active inline-block font-label-lg text-label-lg uppercase tracking-[0.4em] text-on-background/60">
                    Spring / Summer 2024
                </span>
</div>
<h1 class="font-display-lg text-display-lg md:text-[88px] leading-[1.1] mb-10 text-on-background text-reveal-container">
<span class="text-reveal-item active inline-block">The Modern Heir</span>
</h1>
<div class="flex flex-col md:flex-row items-center justify-center gap-6 reveal active" style="transition-delay: 400ms;">
<a class="bg-charcoal text-white px-12 py-5 font-label-lg text-label-lg uppercase tracking-widest hover:bg-primary transition-all duration-500 shadow-xl shadow-charcoal/5" href="#collections">
                    Discover the Collection
                </a>
<a class="border border-charcoal/20 text-charcoal px-12 py-5 font-label-lg text-label-lg uppercase tracking-widest hover:bg-charcoal hover:text-white transition-all duration-500" href="#">
                    View Heritage
                </a>
</div>
</div>
<!-- Scroll Indicator -->
<div class="absolute bottom-12 left-1/2 -translate-x-1/2 flex flex-col items-center opacity-40 hover:opacity-100 transition-opacity duration-500 cursor-pointer">
<span class="font-label-sm text-label-sm uppercase tracking-[0.3em] mb-3">Scroll</span>
<div class="w-px h-12 bg-gradient-to-b from-primary to-transparent"></div>
</div>
</section>
<!-- Brand Story -->
<section class="py-section-padding bg-background relative overflow-hidden">
<!-- Background organic elements -->
<div class="grain-bg absolute inset-0"></div>
<svg class="organic-shape -top-20 -right-20 w-[600px] h-[600px]" viewbox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
<path d="M44.7,-76.4C58.2,-69.2,70,-58.5,77.3,-45.4C84.7,-32.4,87.6,-16.2,86.2,-0.8C84.8,14.6,79.1,29.1,70.9,41.9C62.7,54.7,52,65.8,39,73.1C26,80.4,10.7,83.9,-4.6,81.8C-19.9,79.8,-35.1,72.2,-48.3,62.8C-61.5,53.4,-72.7,42.3,-78.9,29C-85.1,15.7,-86.3,0.3,-82.7,-14C-79.1,-28.3,-70.7,-41.5,-59.4,-50.2C-48.1,-58.9,-33.9,-63,-20.5,-70.2C-7.1,-77.4,5.5,-87.7,21.1,-83.6C36.7,-79.5,41.2,-70.3,44.7,-76.4Z" fill="#820411" transform="translate(100 100)"></path>
</svg>
<div class="max-w-[1280px] mx-auto px-margin-desktop grid grid-cols-1 md:grid-cols-12 gap-gutter items-center relative z-10">
<div class="md:col-span-5 reveal">
<span class="font-label-sm text-label-sm uppercase tracking-[0.3em] text-primary mb-6 block">Our Philosophy</span>
<h2 class="font-headline-lg text-headline-lg mb-8 leading-tight">Crafted Heritage, <br/>Woven Memories</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant mb-6 leading-relaxed opacity-80">
                    Mudaura is born from the quiet strength of ancestral traditions, reimagined for the contemporary landscape. We believe in clothes that tell a story—of the hands that wove the fabric, the earth that nurtured the cotton, and the lineage of the man who wears it.
                </p>
<p class="font-body-lg text-body-lg text-on-surface-variant mb-10 leading-relaxed opacity-80">
                    Every stitch is an intentional act of sustainability, ensuring that our legacy remains as pure as the materials we source.
                </p>
<a class="inline-flex items-center group font-label-lg text-label-lg uppercase tracking-widest text-primary border-b border-transparent hover:border-primary transition-all duration-500 pb-1" href="#">
                    Read Our Story
                    <span class="material-symbols-outlined ml-3 group-hover:translate-x-2 transition-transform duration-500">arrow_right_alt</span>
</a>
</div>
<div class="md:col-start-7 md:col-span-6 relative reveal" style="transition-delay: 200ms;">
<div class="aspect-[4/5] bg-surface-container overflow-hidden group">
<img class="w-full h-full object-cover transition-transform duration-[1.5s] group-hover:scale-105" data-alt="Craftsmanship detail" src="https://lh3.googleusercontent.com/aida/AP1WRLvwMZeLvrUWBpVk8dPcOMotSP6p4CVSVIMMutsKYuKRZcrO0k7M7YJeZg5jgDfB-Oamr4P8zeDsZkm3bOtSdAokI7C2a3sX6VMWDiTFgZQYLYomM9cajK8dkgKlAz9X1GOF3wxivo99cefOR_LDKnyC2B9wGIw4jJPYDSRZ6D51e6W0HahV7Ar-r6jXqCf6FKMlnLiPUeThgl8jjCawy_7Dj826SoJbuObmvRQwBeZrbkmv3Eg4SIz1Lc4"/>
<div class="absolute inset-0 bg-primary/5 opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
</div>
<!-- Decorative Frame -->
<div class="absolute -bottom-8 -left-8 w-48 h-48 border border-primary/10 hidden md:block -z-10"></div>
</div>
</div>
</section>
<!-- New Arrivals -->
<section class="py-section-padding bg-surface-container-lowest" id="collections">
<div class="max-w-[1280px] mx-auto px-margin-desktop">
<div class="flex justify-between items-end mb-20 reveal">
<div>
<span class="font-label-sm text-label-sm uppercase tracking-[0.3em] text-primary mb-4 block">Seasonal Edit</span>
<h2 class="font-headline-lg text-headline-lg">New Arrivals</h2>
</div>
<a class="font-label-lg text-label-lg uppercase tracking-widest border-b border-charcoal/20 hover:border-primary hover:text-primary pb-2 transition-all duration-500 hidden md:block" href="#">Explore All</a>
</div>
<div class="grid grid-cols-1 md:grid-cols-4 gap-x-gutter gap-y-16">
<!-- Product 1 -->
<div class="stagger-item product-card group cursor-pointer">
<div class="aspect-[3/4] mb-8 overflow-hidden bg-surface-container relative">
<img alt="Linen Shirt" class="product-card-image w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida/AP1WRLsG1leLxi8HJfB93ak9d9JIyYaRfuAQ-tO2RsIMnx4lI7HnzuChpI9XYogLxjtLJx9mweJfy5sVXjpj4uFrkFW3XxizJWRlNhIWoV5AknALVdJwhD8URS3ffK1_PE7QQEIUg6hBw_q4E2y0ro11rzWF0knVw3k6LBQHi-O8EXMaoAcemMrxe771NZk635pfMc58u2_dgXfs-Qb69i2rOm7TNZ171ecjWKMvuObDG8TH4Hw8P3sHMdgdGA"/>
<div class="absolute inset-0 bg-charcoal/5 opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
<div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-700">
<button class="bg-white/90 nav-blur px-8 py-3.5 font-label-lg text-label-lg uppercase tracking-widest hover:bg-primary hover:text-white transition-all duration-500 transform translate-y-4 group-hover:translate-y-0">Quick View</button>
</div>
</div>
<div class="product-info-reveal">
<h3 class="font-label-lg text-label-lg mb-2 group-hover:text-primary transition-colors duration-500">Coastal Linen Tunic</h3>
<p class="font-body-md text-body-md text-on-surface-variant opacity-60">$185.00</p>
</div>
</div>
<!-- Product 2 -->
<div class="stagger-item product-card group cursor-pointer" style="transition-delay: 150ms;">
<div class="aspect-[3/4] mb-8 overflow-hidden bg-surface-container relative">
<img alt="Gold Knit Tee" class="product-card-image w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida/AP1WRLvwMZeLvrUWBpVk8dPcOMotSP6p4CVSVIMMutsKYuKRZcrO0k7M7YJeZg5jgDfB-Oamr4P8zeDsZkm3bOtSdAokI7C2a3sX6VMWDiTFgZQYLYomM9cajK8dkgKlAz9X1GOF3wxivo99cefOR_LDKnyC2B9wGIw4jJPYDSRZ6D51e6W0HahV7Ar-r6jXqCf6FKMlnLiPUeThgl8jjCawy_7Dj826SoJbuObmvRQwBeZrbkmv3Eg4SIz1Lc4"/>
<div class="absolute inset-0 bg-charcoal/5 opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
<div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-700">
<button class="bg-white/90 nav-blur px-8 py-3.5 font-label-lg text-label-lg uppercase tracking-widest hover:bg-primary hover:text-white transition-all duration-500 transform translate-y-4 group-hover:translate-y-0">Quick View</button>
</div>
</div>
<div class="product-info-reveal">
<h3 class="font-label-lg text-label-lg mb-2 group-hover:text-primary transition-colors duration-500">Aureum Open-Knit</h3>
<p class="font-body-md text-body-md text-on-surface-variant opacity-60">$145.00</p>
</div>
</div>
<!-- Product 3 -->
<div class="stagger-item product-card group cursor-pointer" style="transition-delay: 300ms;">
<div class="aspect-[3/4] mb-8 overflow-hidden bg-surface-container relative">
<img alt="Rafi Shirt" class="product-card-image w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida/AP1WRLst03k5zdq0dhc6DZpufa0ZKpyx930cTaBUr0_JsFhjPCTUtMwH4UvMYyED4ahEDhX1BcxW0fDfLCDf6b_KtUQoqHJj6mR_uCiqihNcLHXDudsa70DOW1aZ4UKXdiC207Cx-CFqWL-ZzRyFpL5OB90y3D5Fq-13cZ06wAdBwk2rx51aF8q2fjnh-GW1WYa9bqBW3Jy6OSRhmwuZ6LFLeMwML8MGiEFrEmrfq5NXyoIQpJHXqnhi61RBxnA"/>
<div class="absolute inset-0 bg-charcoal/5 opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
<div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-700">
<button class="bg-white/90 nav-blur px-8 py-3.5 font-label-lg text-label-lg uppercase tracking-widest hover:bg-primary hover:text-white transition-all duration-500 transform translate-y-4 group-hover:translate-y-0">Quick View</button>
</div>
</div>
<div class="product-info-reveal">
<h3 class="font-label-lg text-label-lg mb-2 group-hover:text-primary transition-colors duration-500">The Rafi Hand-Loomed Shirt</h3>
<p class="font-body-md text-body-md text-on-surface-variant opacity-60">$210.00</p>
</div>
</div>
<!-- Product 4 -->
<div class="stagger-item product-card group cursor-pointer" style="transition-delay: 450ms;">
<div class="aspect-[3/4] mb-8 overflow-hidden bg-surface-container relative">
<img alt="Olive Pants" class="product-card-image w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida/AP1WRLv1xQ_9Ojt6HmiiMxZl7nWnhU0nf4SmhBz9QpLDHJ4_lQKSLXkLIZZn-fbtsrihfBxfQ6dThkmzF8NxRmaHWkuu6HmCpxwbQGAw16t-PRZZsSWoDqomAdx4upPDdGH5QzzbPbTvjm2EAhH8nfxUGCNZ9I8xHPUPihzlUjKgsj-G3boUfN7oKVSRQDmlDDGXdg1EnsSX_bl4zBvV_x9kJVMumKGW7ZX1cI67zhdcYCWn6xXOom746P7eYTU"/>
<div class="absolute inset-0 bg-charcoal/5 opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
<div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-700">
<button class="bg-white/90 nav-blur px-8 py-3.5 font-label-lg text-label-lg uppercase tracking-widest hover:bg-primary hover:text-white transition-all duration-500 transform translate-y-4 group-hover:translate-y-0">Quick View</button>
</div>
</div>
<div class="product-info-reveal">
<h3 class="font-label-lg text-label-lg mb-2 group-hover:text-primary transition-colors duration-500">Tapered Olive Chinos</h3>
<p class="font-body-md text-body-md text-on-surface-variant opacity-60">$160.00</p>
</div>
</div>
</div>
</div>
</section>
<!-- Craftsmanship Highlight -->
<section class="py-section-padding bg-charcoal text-white overflow-hidden relative">
<div class="max-w-[1280px] mx-auto px-margin-desktop grid grid-cols-1 md:grid-cols-2 gap-24 items-center">
<div class="reveal">
<div class="relative overflow-hidden group">
<img alt="Fabric Detail" class="w-full h-auto object-cover grayscale brightness-75 group-hover:grayscale-0 group-hover:brightness-100 transition-all duration-[2s] scale-100 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida/AP1WRLvHYfe_EqNyCGl-qp9wKN-lrdYjqlA_Lb_fhDMMkuOlxvuT5YJHFvlA3rjWziGb_iJ78m9MY4QpgpUd0nI80B_oCaR0JoSOFK_5SpADFc59uwSfPdxIe0PO5OStCuh6z6kPEF75nPLDwLHF9mabuzgePwyhNUewVZ8QAydphxX1d9FgqYQQYNDw356U8xjKaHHt75rH96u_MdNt8YeqvN2BYI8aA5oA8grNVYLWUZYFD8OmvZjXSRvrBJE"/>
<div class="absolute inset-0 border-[20px] border-white/5 pointer-events-none"></div>
</div>
</div>
<div class="reveal" style="transition-delay: 200ms;">
<span class="font-label-sm text-label-sm uppercase tracking-[0.5em] text-sand mb-8 block">The Living Fabric</span>
<h2 class="font-display-lg text-headline-lg md:text-[56px] leading-[1.1] mb-10">A Tactile Dialogue Between Earth and Soul.</h2>
<p class="font-body-lg text-body-lg text-white/60 mb-12 leading-relaxed">
                    Sustainable luxury is not just a label; it is a philosophy embedded in every fiber. Our fabrics are handloomed by master artisans, preserving techniques that have spanned generations. Feel the gentle texture of organic cotton and the cool breathability of pure linen—garments that age gracefully and live as long as your memories.
                </p>
<div class="flex flex-wrap gap-6">
<span class="px-6 py-3 border border-white/10 font-label-sm text-label-sm uppercase tracking-widest hover:border-white/40 transition-colors duration-500">Handloomed</span>
<span class="px-6 py-3 border border-white/10 font-label-sm text-label-sm uppercase tracking-widest hover:border-white/40 transition-colors duration-500">Organic Cotton</span>
<span class="px-6 py-3 border border-white/10 font-label-sm text-label-sm uppercase tracking-widest hover:border-white/40 transition-colors duration-500">Natural Dyes</span>
</div>
</div>
</div>
</section>
<!-- Aesthetic Newsletter Section -->
<section class="py-section-padding bg-sand/50 relative overflow-hidden">
<div class="max-w-[800px] mx-auto px-margin-mobile text-center reveal">
<h2 class="font-headline-lg text-headline-lg mb-8">Join the Circle</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant/80 mb-14 max-w-[600px] mx-auto leading-relaxed">
                Subscribe to receive intimate collection previews, stories of heritage, and exclusive access to the world of Mudaura.
            </p>
<form class="flex flex-col md:flex-row gap-6 max-w-[600px] mx-auto">
<input class="flex-grow bg-transparent border-b border-charcoal/30 py-4 font-body-md focus:outline-none focus:border-primary transition-all duration-700 text-charcoal placeholder:text-charcoal/40" placeholder="Your Email Address" type="email"/>
<button class="bg-charcoal text-white px-12 py-5 font-label-lg text-label-lg uppercase tracking-widest hover:bg-primary transition-all duration-500 shadow-xl shadow-charcoal/5" type="submit">
                    Subscribe
                </button>
</form>
</div>
</section>
</main>
<!-- Footer -->
<footer class="bg-surface-container dark:bg-surface-dim border-t border-outline-variant/10">
<div class="grid grid-cols-1 md:grid-cols-4 gap-gutter px-margin-desktop py-section-padding max-w-[1440px] mx-auto">
<!-- Brand Column -->
<div class="flex flex-col space-y-8 reveal">
<a class="font-headline-md text-headline-md text-on-surface tracking-[0.1em] uppercase" href="#">Mudaura</a>
<p class="font-body-md text-body-md text-on-surface-variant/70 pr-12 leading-relaxed">
                Sustainably Crafted Heritage. Defining the modern ethnic wardrobe through traditional craftsmanship and ethical luxury.
            </p>
<div class="flex space-x-6 text-on-surface-variant">
<a class="hover:text-primary transition-all duration-500 hover:-translate-y-1" href="#"><span class="material-symbols-outlined">public</span></a>
<a class="hover:text-primary transition-all duration-500 hover:-translate-y-1" href="#"><span class="material-symbols-outlined">camera</span></a>
<a class="hover:text-primary transition-all duration-500 hover:-translate-y-1" href="#"><span class="material-symbols-outlined">mail</span></a>
</div>
</div>
<!-- Links Column 1 -->
<div class="reveal" style="transition-delay: 100ms;">
<h4 class="font-label-lg text-label-lg uppercase tracking-[0.2em] mb-10 text-on-surface/80">Shop</h4>
<ul class="space-y-5">
<li><a class="font-label-sm text-label-sm text-on-surface-variant/70 hover:text-primary hover:translate-x-2 transition-all duration-500 block" href="#">Menswear</a></li>
<li><a class="font-label-sm text-label-sm text-on-surface-variant/70 hover:text-primary hover:translate-x-2 transition-all duration-500 block" href="#">Accessories</a></li>
<li><a class="font-label-sm text-label-sm text-on-surface-variant/70 hover:text-primary hover:translate-x-2 transition-all duration-500 block" href="#">Collections</a></li>
<li><a class="font-label-sm text-label-sm text-on-surface-variant/70 hover:text-primary hover:translate-x-2 transition-all duration-500 block" href="#">Gifting</a></li>
</ul>
</div>
<!-- Links Column 2 -->
<div class="reveal" style="transition-delay: 200ms;">
<h4 class="font-label-lg text-label-lg uppercase tracking-[0.2em] mb-10 text-on-surface/80">Information</h4>
<ul class="space-y-5">
<li><a class="font-label-sm text-label-sm text-on-surface-variant/70 hover:text-primary hover:translate-x-2 transition-all duration-500 block" href="#">Sustainability</a></li>
<li><a class="font-label-sm text-label-sm text-on-surface-variant/70 hover:text-primary hover:translate-x-2 transition-all duration-500 block" href="#">Shipping &amp; Returns</a></li>
<li><a class="font-label-sm text-label-sm text-on-surface-variant/70 hover:text-primary hover:translate-x-2 transition-all duration-500 block" href="#">Store Locator</a></li>
<li><a class="font-label-sm text-label-sm text-on-surface-variant/70 hover:text-primary hover:translate-x-2 transition-all duration-500 block" href="#">Contact Us</a></li>
</ul>
</div>
<!-- Legal Column -->
<div class="reveal" style="transition-delay: 300ms;">
<h4 class="font-label-lg text-label-lg uppercase tracking-[0.2em] mb-10 text-on-surface/80">Legal</h4>
<ul class="space-y-5">
<li><a class="font-label-sm text-label-sm text-on-surface-variant/70 hover:text-primary hover:translate-x-2 transition-all duration-500 block" href="#">Privacy Policy</a></li>
<li><a class="font-label-sm text-label-sm text-on-surface-variant/70 hover:text-primary hover:translate-x-2 transition-all duration-500 block" href="#">Terms of Service</a></li>
<li><a class="font-label-sm text-label-sm text-on-surface-variant/70 hover:text-primary hover:translate-x-2 transition-all duration-500 block" href="#">Cookie Policy</a></li>
</ul>
</div>
</div>
<div class="max-w-[1440px] mx-auto px-margin-desktop py-10 border-t border-outline-variant/10 flex flex-col md:flex-row justify-between items-center text-on-surface-variant/60">
<p class="font-label-sm text-label-sm tracking-wider">© 2024 Mudaura. Sustainably Crafted Heritage.</p>
<div class="flex items-center space-x-3 font-label-sm text-label-sm mt-6 md:mt-0">
<span class="material-symbols-outlined text-[18px]">eco</span>
<span class="tracking-widest uppercase">PETA Approved Vegan</span>
</div>
</div>
</footer>
<script>
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Scroll-triggered navbar styling
    window.addEventListener('scroll', () => {
        const header = document.getElementById('top-nav');
        if (window.scrollY > 100) {
            header.classList.add('bg-white/90', 'nav-blur', 'py-4', 'shadow-[0_10px_30px_-15px_rgba(0,0,0,0.05)]');
            header.classList.remove('bg-transparent', 'py-8');
        } else {
            header.classList.remove('bg-white/90', 'nav-blur', 'py-4', 'shadow-[0_10px_30px_-15px_rgba(0,0,0,0.05)]');
            header.classList.add('bg-transparent', 'py-8');
        }
    });

    // Intersection Observer for Reveal Animations
    const revealOptions = {
        threshold: 0.15,
        rootMargin: '0px 0px -5% 0px'
    };

    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                // Optional: Unobserve after animation if you don't want it to repeat
                // revealObserver.unobserve(entry.target);
            }
        });
    }, revealOptions);

    document.querySelectorAll('.reveal, .stagger-item, .text-reveal-item').forEach(el => {
        revealObserver.observe(el);
    });

    // Hero Image Parallax subtle effect
    window.addEventListener('scroll', () => {
        const img = document.getElementById('hero-img');
        const scroll = window.scrollY;
        if (img) {
            img.style.transform = `scale(1.05) translateY(${scroll * 0.15}px)`;
        }
    });
</script>
</body></html>