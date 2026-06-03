<!DOCTYPE html>

<html class="scroll-smooth" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>VÉRITÉ | Artisan Linen Shirt</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Text:ital,wght@0,400;0,700;1,400&amp;family=Hanken+Grotesk:wght@300;400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
                    "DEFAULT": "0",
                    "lg": "0",
                    "xl": "0",
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
            }
          }
        }
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
        }
        
        .liquid-fill-btn {
            position: relative;
            overflow: hidden;
            transition: color 0.4s ease;
        }
        
        .liquid-fill-btn::before {
            content: '';
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #E8D5C7; /* sand */
            transition: transform 0.6s cubic-bezier(0.19, 1, 0.22, 1);
            z-index: -1;
        }
        
        .liquid-fill-btn:hover::before {
            transform: translateY(-100%);
        }

        .liquid-fill-btn:hover {
            color: #1F282F; /* charcoal */
        }

        .sticky-panel {
            top: 120px;
            max-height: calc(100vh - 140px);
        }

        .fade-up-scroll {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .fade-up-scroll.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .custom-scrollbar::-webkit-scrollbar {
            width: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #E8D5C7;
        }
    </style>
</head>
<body class="bg-background text-on-surface selection:bg-sand selection:text-charcoal custom-scrollbar">
<!-- TopNavBar -->
<nav class="fixed top-0 w-full z-50 bg-surface/90 backdrop-blur-md flex justify-between items-center px-margin-desktop py-6">
<div class="flex-1 hidden md:flex items-center space-x-8">
<a class="font-label-lg text-label-lg text-charcoal hover:text-terracotta transition-colors duration-300" href="#">Collections</a>
<a class="font-label-lg text-label-lg text-charcoal hover:text-terracotta transition-colors duration-300" href="#">Craftsmanship</a>
<a class="font-label-lg text-label-lg text-charcoal hover:text-terracotta transition-colors duration-300" href="#">Sustainability</a>
<a class="font-label-lg text-label-lg text-charcoal hover:text-terracotta transition-colors duration-300" href="#">Bespoke</a>
</div>
<div class="flex-1 flex justify-center">
<span class="font-headline-lg text-headline-lg uppercase tracking-tighter text-charcoal">VÉRITÉ</span>
</div>
<div class="flex-1 flex justify-end items-center space-x-6">
<button class="material-symbols-outlined text-charcoal">shopping_bag</button>
<button class="material-symbols-outlined text-charcoal">person</button>
<button class="md:hidden material-symbols-outlined text-charcoal">menu</button>
</div>
</nav>
<!-- Main Content Canvas -->
<main class="pt-32 pb-section-padding px-margin-mobile md:px-margin-desktop max-w-[1440px] mx-auto">
<div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
<!-- Left Side: Image Gallery -->
<div class="md:col-span-7 flex flex-col space-y-gutter">
<div class="aspect-[3/4] bg-surface-container-low overflow-hidden">
<img alt="" class="w-full h-full object-cover" data-alt="A sophisticated editorial photograph of a premium handcrafted linen shirt in a natural off-white tone. The shirt is displayed on a male model against a soft, textured plaster wall with warm morning light filtering through a window, creating organic shadows. The aesthetic is minimalist and high-end, emphasizing the tactile quality of the hand-loomed fabric and clean tailoring." src="https://lh3.googleusercontent.com/aida/AP1WRLst03k5zdq0dhc6DZpufa0ZKpyx930cTaBUr0_JsFhjPCTUtMwH4UvMYyED4ahEDhX1BcxW0fDfLCDf6b_KtUQoqHJj6mR_uCiqihNcLHXDudsa70DOW1aZ4UKXdiC207Cx-CFqWL-ZzRyFpL5OB90y3D5Fq-13cZ06wAdBwk2rx51aF8q2fjnh-GW1WYa9bqBW3Jy6OSRhmwuZ6LFLeMwML8MGiEFrEmrfq5NXyoIQpJHXqnhi61RBxnA"/>
</div>
<!-- Additional detail shots (simulated scroll) -->
<div class="aspect-[3/4] bg-surface-container-low overflow-hidden fade-up-scroll">
<img alt="" class="w-full h-full object-cover scale-110 translate-y-10" data-alt="Close up macro shot of the linen shirt's texture, showing the intricate weave of the sustainable hand-loomed fibers. The lighting is soft and directional, highlighting the natural imperfections and high-quality craftsmanship of the textile. The mood is calm and grounded, fitting the brand's quiet luxury identity." src="https://lh3.googleusercontent.com/aida/AP1WRLst03k5zdq0dhc6DZpufa0ZKpyx930cTaBUr0_JsFhjPCTUtMwH4UvMYyED4ahEDhX1BcxW0fDfLCDf6b_KtUQoqHJj6mR_uCiqihNcLHXDudsa70DOW1aZ4UKXdiC207Cx-CFqWL-ZzRyFpL5OB90y3D5Fq-13cZ06wAdBwk2rx51aF8q2fjnh-GW1WYa9bqBW3Jy6OSRhmwuZ6LFLeMwML8MGiEFrEmrfq5NXyoIQpJHXqnhi61RBxnA"/>
</div>
</div>
<!-- Right Side: Sticky Info Panel -->
<div class="md:col-span-5 relative">
<div class="sticky sticky-panel flex flex-col">
<div class="mb-2">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-on-surface-variant">The Heritage Series</span>
</div>
<h1 class="font-headline-lg text-headline-lg text-charcoal mb-4">Shashi Linen Artisan Shirt</h1>
<div class="flex items-baseline space-x-4 mb-8">
<span class="font-headline-md text-headline-md text-terracotta">$185.00</span>
<span class="font-label-sm text-label-sm text-on-surface-variant line-through">$240.00</span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-10 max-w-md">
                        A testament to timeless elegance, the Shashi shirt is meticulously hand-loomed from 100% organic European flax. Featuring a relaxed silhouette and a subtle mandarin collar, it embodies the spirit of quiet confidence.
                    </p>
<!-- Size Selection -->
<div class="mb-8">
<span class="font-label-lg text-label-lg text-charcoal block mb-4">Select Size</span>
<div class="flex gap-4">
<button class="w-12 h-12 flex items-center justify-center border border-charcoal/10 font-label-lg hover:border-charcoal transition-colors">S</button>
<button class="w-12 h-12 flex items-center justify-center border border-charcoal font-label-lg bg-charcoal text-sand">M</button>
<button class="w-12 h-12 flex items-center justify-center border border-charcoal/10 font-label-lg hover:border-charcoal transition-colors">L</button>
<button class="w-12 h-12 flex items-center justify-center border border-charcoal/10 font-label-lg hover:border-charcoal transition-colors">XL</button>
</div>
</div>
<!-- CTA -->
<div class="flex flex-col space-y-4 mb-12">
<button class="liquid-fill-btn w-full py-5 bg-charcoal text-sand font-label-lg text-label-lg uppercase tracking-widest transition-all duration-300">
                            Buy Now
                        </button>
<button class="w-full py-5 border border-charcoal text-charcoal font-label-lg text-label-lg uppercase tracking-widest hover:bg-surface-container transition-all duration-300">
                            Add to Bag
                        </button>
</div>
<!-- How it's Made Section -->
<div class="border-t border-charcoal/5 pt-10">
<h3 class="font-label-lg text-label-lg uppercase tracking-widest mb-6">How It's Made</h3>
<div class="grid grid-cols-2 gap-y-6 gap-x-4">
<div class="flex items-center space-x-3">
<span class="material-symbols-outlined text-terracotta" data-icon="eco">eco</span>
<span class="font-label-sm text-label-sm">100% Organic Flax</span>
</div>
<div class="flex items-center space-x-3">
<span class="material-symbols-outlined text-terracotta" data-icon="water_drop">water_drop</span>
<span class="font-label-sm text-label-sm">Water-Saving Process</span>
</div>
<div class="flex items-center space-x-3">
<span class="material-symbols-outlined text-terracotta" data-icon="precision_manufacturing">precision_manufacturing</span>
<span class="font-label-sm text-label-sm">Hand-Loomed</span>
</div>
<div class="flex items-center space-x-3">
<span class="material-symbols-outlined text-terracotta" data-icon="workspace_premium">workspace_premium</span>
<span class="font-label-sm text-label-sm">Fair Trade Certified</span>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Style With Section -->
<section class="mt-section-padding pt-section-padding border-t border-charcoal/5">
<div class="flex justify-between items-end mb-12">
<h2 class="font-headline-lg text-headline-lg text-charcoal">Style With</h2>
<a class="font-label-lg text-label-lg text-terracotta border-b border-terracotta pb-1" href="#">View Collection</a>
</div>
<div class="grid grid-cols-2 md:grid-cols-4 gap-gutter">
<div class="group cursor-pointer fade-up-scroll">
<div class="aspect-[3/4] overflow-hidden mb-4 bg-surface-container">
<img alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" data-alt="A pair of olive-toned premium organic cotton trousers shown in a studio setting. The lighting is soft and even, highlighting the clean drape and minimalist design. The background is a warm neutral sand tone, creating a cohesive aesthetic with the rest of the collection." src="https://lh3.googleusercontent.com/aida/AP1WRLv1xQ_9Ojt6HmiiMxZl7nWnhU0nf4SmhBz9QpLDHJ4_lQKSLXkLIZZn-fbtsrihfBxfQ6dThkmzF8NxRmaHWkuu6HmCpxwbQGAw16t-PRZZsSWoDqomAdx4upPDdGH5QzzbPbTvjm2EAhH8nfxUGCNZ9I8xHPUPihzlUjKgsj-G3boUfN7oKVSRQDmlDDGXdg1EnsSX_bl4zBvV_x9kJVMumKGW7ZX1cI67zhdcYCWn6xXOom746P7eYTU"/>
</div>
<span class="font-label-lg text-label-lg block mb-1">Rafi Tapered Pants</span>
<span class="font-body-md text-body-md text-on-surface-variant">$120.00</span>
</div>
<div class="group cursor-pointer fade-up-scroll" style="transition-delay: 100ms;">
<div class="aspect-[3/4] overflow-hidden mb-4 bg-surface-container">
<img alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" data-alt="A close up shot of premium artisan trousers in a deep earth tone. The fabric has a visible textured grain, suggesting high-quality natural fibers. The setting is clean and minimalist with artistic lighting that casts soft gradients across the garment, emphasizing its tailored shape and sustainable origins." src="https://lh3.googleusercontent.com/aida/AP1WRLsMakxk5pOS0jHZRrGJE4OdTu0ECVnaN_zWtkGwORociiBeXY8j6KjspcC8n3lsbBi_HsKLq0AjpMSPFL-E5Jg1sTqv3Mx2FKmeLmEQI7u1lIrOZIpUYm0gbzQYe04DPLOAbaUPXBecb4TOUtw8ReC6mTFXD2IF9wVx-tBCYT6GJdsW1RB4OKtgos8SbY--S-dPlUBhnrdg-zETbaVbL1cLHPDcUTUECx0gLJAc-ed2HwHdclkWAEzvOC8"/>
</div>
<span class="font-label-lg text-label-lg block mb-1">Dimple Linen Slacks</span>
<span class="font-body-md text-body-md text-on-surface-variant">$145.00</span>
</div>
<!-- Empty space for editorial balance in grid -->
<div class="hidden md:flex flex-col justify-center px-8 border-l border-charcoal/5">
<p class="font-headline-md italic text-on-surface-variant leading-tight">
                        "Elegance is not about being noticed, it's about being remembered."
                    </p>
</div>
<div class="group cursor-pointer fade-up-scroll" style="transition-delay: 200ms;">
<div class="aspect-[3/4] overflow-hidden mb-4 bg-surface-container relative">
<div class="absolute inset-0 bg-charcoal/5 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
<span class="font-label-sm text-sand bg-charcoal px-4 py-2">Quick Shop</span>
</div>
<img alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" data-alt="Another variation of the artisan linen shirt, styled slightly differently to show its versatility. The lighting is low-key and dramatic, casting shadows that define the classic silhouette. The color palette is limited to sophisticated neutrals, reflecting a premium and intellectual brand identity." src="https://lh3.googleusercontent.com/aida/AP1WRLst03k5zdq0dhc6DZpufa0ZKpyx930cTaBUr0_JsFhjPCTUtMwH4UvMYyED4ahEDhX1BcxW0fDfLCDf6b_KtUQoqHJj6mR_uCiqihNcLHXDudsa70DOW1aZ4UKXdiC207Cx-CFqWL-ZzRyFpL5OB90y3D5Fq-13cZ06wAdBwk2rx51aF8q2fjnh-GW1WYa9bqBW3Jy6OSRhmwuZ6LFLeMwML8MGiEFrEmrfq5NXyoIQpJHXqnhi61RBxnA"/>
</div>
<span class="font-label-lg text-label-lg block mb-1">Mandarin Linen Vest</span>
<span class="font-body-md text-body-md text-on-surface-variant">$110.00</span>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="bg-charcoal text-sand w-full">
<div class="grid grid-cols-1 md:grid-cols-12 gap-gutter px-margin-desktop py-section-padding items-end">
<div class="md:col-span-4">
<span class="font-headline-md text-headline-md text-sand block mb-8">VÉRITÉ</span>
<p class="font-body-md text-body-md text-surface-variant/80 max-w-xs mb-12">
                    Honoring the slow craft of garment making. Sustainably sourced, ethically produced, and designed to last generations.
                </p>
</div>
<div class="md:col-span-4 flex flex-col space-y-4 mb-12 md:mb-0">
<h4 class="font-label-lg text-label-lg uppercase tracking-widest mb-4">Discovery</h4>
<a class="font-body-md text-surface-variant hover:text-terracotta transition-colors" href="#">The Studio</a>
<a class="font-body-md text-surface-variant hover:text-terracotta transition-colors" href="#">Artisan Stories</a>
<a class="font-body-md text-surface-variant hover:text-terracotta transition-colors" href="#">Care Guide</a>
<a class="font-body-md text-surface-variant hover:text-terracotta transition-colors" href="#">Shipping</a>
<a class="font-body-md text-surface-variant hover:text-terracotta transition-colors" href="#">Contact</a>
</div>
<div class="md:col-span-4 text-right">
<div class="flex justify-end space-x-6 mb-12">
<span class="material-symbols-outlined hover:text-terracotta cursor-pointer transition-colors" data-icon="public">public</span>
<span class="material-symbols-outlined hover:text-terracotta cursor-pointer transition-colors" data-icon="photo_camera">photo_camera</span>
<span class="material-symbols-outlined hover:text-terracotta cursor-pointer transition-colors" data-icon="mail">mail</span>
</div>
<p class="font-label-sm text-label-sm text-surface-variant">© 2024 VÉRITÉ HEIRLOOMS. PRESERVING TEXTILE HERITAGE.</p>
</div>
</div>
</footer>
<script>
        // Micro-interactions and effects
        
        // Scroll animations for elements
        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-up-scroll').forEach(el => {
            observer.observe(el);
        });

        // Header scroll effect
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('nav');
            if (window.scrollY > 50) {
                nav.classList.add('shadow-sm');
                nav.classList.replace('py-6', 'py-4');
            } else {
                nav.classList.remove('shadow-sm');
                nav.classList.replace('py-4', 'py-6');
            }
        });

        // Size picker interaction
        const sizeButtons = document.querySelectorAll('.grid.gap-4 button');
        sizeButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                sizeButtons.forEach(b => {
                    b.classList.remove('bg-charcoal', 'text-sand');
                    b.classList.add('border-charcoal/10');
                });
                btn.classList.add('bg-charcoal', 'text-sand');
                btn.classList.remove('border-charcoal/10');
            });
        });
    </script>
</body></html>