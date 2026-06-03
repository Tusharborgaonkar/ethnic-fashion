<!DOCTYPE html>

<html class="scroll-smooth" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Text:ital,wght@0,400;0,700;1,400&amp;family=Hanken+Grotesk:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
        }
        .reveal { opacity: 0; transform: translateY(20px); transition: all 1s ease-out; }
        .reveal.active { opacity: 1; transform: translateY(0); }
        .hero-gradient { background: linear-gradient(to bottom, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0) 20%, rgba(0,0,0,0) 80%, rgba(0,0,0,0.4) 100%); }
        .nav-blur { transition: background-color 0.4s ease, backdrop-filter 0.4s ease; }
        .nav-scrolled { background-color: rgba(255, 248, 243, 0.9); backdrop-filter: blur(12px); border-bottom: 1px solid rgba(0,0,0,0.05); }
    </style>
</head>
<body class="bg-surface text-on-surface font-body-md overflow-x-hidden">
<!-- Top Navigation -->
<header class="fixed top-0 w-full z-50 nav-blur flex justify-between items-center px-margin-mobile md:px-margin-desktop py-6 w-full" id="top-nav">
<div class="font-headline-lg text-headline-lg-mobile md:text-headline-lg uppercase tracking-tighter text-charcoal flex items-center">
            VÉRITÉ
        </div>
<nav class="hidden md:flex gap-8 items-center">
<a class="font-label-lg text-label-lg text-charcoal hover:text-terracotta transition-colors duration-300" href="#">Collections</a>
<a class="font-label-lg text-label-lg text-charcoal hover:text-terracotta transition-colors duration-300" href="#">Craftsmanship</a>
<a class="font-label-lg text-label-lg text-charcoal hover:text-terracotta transition-colors duration-300" href="#">Sustainability</a>
<a class="font-label-lg text-label-lg text-charcoal hover:text-terracotta transition-colors duration-300" href="#">Bespoke</a>
</nav>
<div class="flex items-center gap-6">
<button class="text-charcoal hover:scale-95 duration-200 ease-in-out">
<span class="material-symbols-outlined" data-icon="person">person</span>
</button>
<button class="text-charcoal hover:scale-95 duration-200 ease-in-out">
<span class="material-symbols-outlined" data-icon="shopping_bag">shopping_bag</span>
</button>
<button class="md:hidden text-charcoal">
<span class="material-symbols-outlined" data-icon="menu">menu</span>
</button>
</div>
</header>
<!-- Hero Section -->
<section class="relative h-screen w-full flex items-end overflow-hidden">
<div class="absolute inset-0 z-0">
<div class="w-full h-full bg-cover bg-center transition-transform duration-[10s] scale-105 hover:scale-100" style="background-image: url('https://lh3.googleusercontent.com/aida/AP1WRLsG1leLxi8HJfB93ak9d9JIyYaRfuAQ-tO2RsIMnx4lI7HnzuChpI9XYogLxjtLJx9mweJfy5sVXjpj4uFrkFW3XxizJWRlNhIWoV5AknALVdJwhD8URS3ffK1_PE7QQEIUg6hBw_q4E2y0ro11rzWF0knVw3k6LBQHi-O8EXMaoAcemMrxe771NZk635pfMc58u2_dgXfs-Qb69i2rOm7TNZ171ecjWKMvuObDG8TH4Hw8P3sHMdgdGA');"></div>
<div class="absolute inset-0 hero-gradient"></div>
</div>
<div class="relative z-10 px-margin-mobile md:px-margin-desktop pb-24 md:pb-32 w-full max-w-[1280px] mx-auto text-white">
<div class="max-w-2xl reveal active">
<h1 class="font-display-lg text-[48px] md:text-display-lg leading-tight mb-8">Poetry in <br/><span class="italic">Every Thread.</span></h1>
<p class="font-body-lg text-body-lg mb-12 opacity-90 font-light max-w-lg">Discover the Verité Heirloom Collection—where ancient hand-loom techniques meet modern minimalist silhouettes.</p>
<button class="bg-surface text-charcoal font-label-lg text-label-lg px-12 py-5 uppercase tracking-widest hover:bg-terracotta hover:text-white transition-all duration-500 flex items-center gap-4 group">
                    Explore Collection
                    <span class="material-symbols-outlined group-hover:translate-x-2 transition-transform duration-300" data-icon="arrow_forward">arrow_forward</span>
</button>
</div>
</div>
</section>
<!-- Storytelling Section -->
<section class="py-section-padding bg-surface">
<div class="max-w-[1280px] mx-auto px-margin-mobile md:px-margin-desktop grid grid-cols-1 md:grid-cols-12 gap-gutter items-center">
<div class="md:col-span-5 reveal">
<span class="font-label-sm text-label-sm text-terracotta uppercase mb-6 block">Our Heritage</span>
<h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-charcoal mb-8">Woven with Wisdom, Worn with Grace.</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant mb-6 leading-relaxed">
                    At VÉRITÉ, we believe that true luxury lies in the preservation of heritage. Our garments are not merely clothes; they are stories whispered from the looms of artisans who have mastered their craft over generations.
                </p>
<p class="font-body-md text-body-md text-on-surface-variant mb-8 opacity-80 italic">
                    "We do not inherit the earth from our ancestors; we borrow it from our children." — A philosophy that guides every stitch.
                </p>
<div class="flex items-center gap-4">
<div class="h-[1px] w-12 bg-terracotta"></div>
<a class="font-label-lg text-label-lg text-charcoal uppercase tracking-widest hover:text-terracotta transition-colors" href="#">Our Studio Journey</a>
</div>
</div>
<div class="md:col-span-6 md:col-start-7 mt-12 md:mt-0 reveal">
<div class="aspect-[4/5] bg-sand overflow-hidden relative group">
<img class="w-full h-full object-cover grayscale-[30%] group-hover:grayscale-0 transition-all duration-700" data-alt="A detailed close-up of a hand-weaving process on a traditional wooden loom. Soft sunlight filters through a rustic workshop, highlighting the intricate terracotta-colored silk threads. The atmosphere is serene and focused, showcasing the organic, tactile nature of premium textile craftsmanship." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCSApC2DR_0SXV-KGjHfxh-0kq-syeGk4DecN8l3wkyoVpdGrym9t0VZSfA8FrE4wqquNNgYrPp4WLIDLnkv6-wDxPP9S0TZP1QUIHFaRSEVl_f-Mm2cStTuowmSLOFOw_gyVkUhkfw595abIw_A2kN92Tp4jaAGBDDRp8ivUS0h7d_o5cGu1oi0KX0qSCjqNfQl0D1aUJHKQs0XJki_dO0Y1ZTICyI9NMJf54ff1nEZRjyThcBc3OlBR666_s1lmoV382dGUkSv6c"/>
<div class="absolute bottom-0 right-0 bg-surface px-8 py-8 m-6">
<p class="font-headline-md text-headline-md italic">180 Hours</p>
<p class="font-label-sm text-label-sm opacity-60">to loom a single piece</p>
</div>
</div>
</div>
</div>
</section>
<!-- Collection Highlights (Bento-style Grid) -->
<section class="py-section-padding bg-surface-container-low">
<div class="max-w-[1280px] mx-auto px-margin-mobile md:px-margin-desktop">
<div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
<div class="reveal">
<h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-charcoal">The Vernal Edit</h2>
<p class="font-body-md text-body-md text-on-surface-variant mt-2">Essential silhouettes for the discerning contemporary man.</p>
</div>
<button class="font-label-lg text-label-lg border-b border-charcoal pb-1 uppercase tracking-widest hover:text-terracotta hover:border-terracotta transition-all reveal">View All Pieces</button>
</div>
<div class="grid grid-cols-1 md:grid-cols-4 gap-8">
<!-- Card 1 (Large) -->
<div class="md:col-span-2 group reveal">
<div class="aspect-[3/4] relative overflow-hidden bg-sand mb-6">
<img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="A male model wearing a minimalist olive green silk tunic standing in a contemporary courtyard with concrete walls. The lighting is soft and architectural, casting gentle shadows that emphasize the garment's organic drape. The overall vibe is sophisticated, quiet luxury, and modern ethnic style." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDGMAAmlD8purw4UnKi4a1JRSwvdLCa8f55ZdMNDpU0nf1qBXyhgY-1cuCvsQL0DWsAqIPAfGRIait8Y7VW6_ippap_ZS8pl6qWYoSiW3_Gr09VEC8QnzyKh2FXcJCCzNWfZH_f4Kjxy1GDz5ZY7uZIPVO83ARuq9RJ_R8ULvbJdCTJfRGg-CgL-VO8PE6uZYzUbODwF2Q3NEm0tRzB88sH5BoQKODSyYhTIy5atUPVLCnrq62IPgRmav3aGP5_TtKSVGITMI-b8f0"/>
<div class="absolute inset-0 bg-charcoal/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
<div class="absolute bottom-6 left-6 right-6">
<span class="inline-block bg-surface px-4 py-1 text-label-sm font-label-sm mb-4">Limited Release</span>
</div>
</div>
<div class="flex justify-between items-start">
<div>
<h3 class="font-label-lg text-label-lg uppercase mb-1">Earthen Tunic in Silk</h3>
<p class="font-body-md text-body-md text-on-surface-variant opacity-70">Hand-loomed Mulberry Silk</p>
</div>
<span class="font-label-lg text-label-lg">$340</span>
</div>
</div>
<!-- Card 2 -->
<div class="group reveal">
<div class="aspect-[3/4] relative overflow-hidden bg-sand mb-6">
<img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="Close up of a premium ivory cotton shirt with subtle hand-stitched detailing on the collar. The fabric texture is visible and invitingly soft. The lighting is high-key and airy, creating a clean, sustainable, and minimalist editorial look for a luxury brand." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDqlNi-vjTFZ1K4dcJm1kufzeVGxj9kOQ_2OTYpCbxHXQyGzibKQV_mXrFIbOzJtA5JPXmg0nDnRpuHirMTewh2YaHw3I9qGc0UktxIywYbM7g0fJW60LJ3WFaiTB9A-xMfT39QZyibM17eW302QpM2dAnBvBjbyGe0Mgefm3AUMgbRpUgLpqcSk_4OoWVddWTMMOBCHToMTjoHRI1MBPdgySbWDrl6oyAiT362kp16FxRUmiI6sA8GYjZmcDvdLYHA95LHri_Hyvk"/>
</div>
<div class="flex flex-col">
<h3 class="font-label-lg text-label-lg uppercase mb-1">Kora Nehru Jacket</h3>
<p class="font-body-md text-body-md text-on-surface-variant opacity-70 mb-2">Sustainable Cotton</p>
<span class="font-label-lg text-label-lg">$280</span>
</div>
</div>
<!-- Card 3 -->
<div class="group reveal">
<div class="aspect-[3/4] relative overflow-hidden bg-sand mb-6">
<img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="A modern interpretation of a traditional dhoti in charcoal gray, paired with sleek leather sandals. The shot is low-angle, focusing on the movement and fold of the fabric against a minimalist sandstone background. Mood is grounded, intellectual, and fashion-forward." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBn_m1H3kk9k7cfZ_f_CmUrioAAApkW5wkhXwNFtf--XpuwNTyMf5etwLOD-CykC3zyiwvR60MbkkJZROLsByeho6HUaKJet_AHCz6NVpwRNa1yNRRC0POvBcZSfTdGMFn_b44X8HaOmTGUkQZ0fiP2yDmuReLkZGpfB3W6FE1HDiKtwo04mKr3pzO4v_AAAvs01DGsmWVE-oo1YcgxDb3-tgDj0B_cZ-AtwID8EgNTF5EZpGWFnDYpPrijQisLcXt3GLBXchWs_-4"/>
</div>
<div class="flex flex-col">
<h3 class="font-label-lg text-label-lg uppercase mb-1">Basalt Draped Trousers</h3>
<p class="font-body-md text-body-md text-on-surface-variant opacity-70 mb-2">Linen-Viscose Blend</p>
<span class="font-label-lg text-label-lg">$195</span>
</div>
</div>
</div>
</div>
</section>
<!-- Ethos Section (Sustainable/Craft) -->
<section class="py-section-padding bg-charcoal text-sand overflow-hidden">
<div class="max-w-[1280px] mx-auto px-margin-mobile md:px-margin-desktop">
<div class="grid grid-cols-1 md:grid-cols-2 gap-24 items-center">
<div class="reveal">
<h2 class="font-display-lg text-headline-lg-mobile md:text-display-lg mb-12 italic border-b border-sand/20 pb-8">Sustainable by <br/>Design.</h2>
<div class="space-y-12">
<div class="flex gap-8 group">
<span class="material-symbols-outlined text-4xl text-terracotta" data-icon="eco">eco</span>
<div>
<h4 class="font-headline-md text-headline-md mb-2">Zero Waste Looming</h4>
<p class="font-body-md text-body-md opacity-70">Our pattern-making process is designed to utilize every inch of our hand-loomed fabric, reducing textile waste to less than 1%.</p>
</div>
</div>
<div class="flex gap-8 group">
<span class="material-symbols-outlined text-4xl text-terracotta" data-icon="water_drop">water_drop</span>
<div>
<h4 class="font-headline-md text-headline-md mb-2">Natural Dyeing</h4>
<p class="font-body-md text-body-md opacity-70">We use only botanical pigments—indigo, madder, and pomegranate—to achieve our signature muted palette without chemical runoff.</p>
</div>
</div>
<div class="flex gap-8 group">
<span class="material-symbols-outlined text-4xl text-terracotta" data-icon="groups">groups</span>
<div>
<h4 class="font-headline-md text-headline-md mb-2">Artisan Equity</h4>
<p class="font-body-md text-body-md opacity-70">Direct-to-artisan partnerships ensure that 40% of every sale goes directly to the weaving communities of Bengal and Rajasthan.</p>
</div>
</div>
</div>
</div>
<div class="relative reveal">
<div class="aspect-square bg-deep-olive p-12 flex items-center justify-center">
<div class="border border-sand/30 w-full h-full flex flex-col items-center justify-center text-center p-8 space-y-6">
<span class="font-label-sm text-label-sm tracking-[0.3em] uppercase">The VÉRITÉ Seal</span>
<span class="material-symbols-outlined text-6xl" data-icon="verified">verified</span>
<p class="font-headline-md text-headline-md italic">Authenticated Craftsmanship</p>
<p class="font-body-md text-body-md opacity-60">Each garment comes with a digital trace of the weaver, the loom, and the origin of its threads.</p>
<button class="font-label-lg text-label-lg border border-sand px-8 py-3 uppercase hover:bg-sand hover:text-charcoal transition-all">Learn More</button>
</div>
</div>
<!-- Decorative element -->
<div class="absolute -bottom-10 -right-10 w-40 h-40 border-r border-b border-terracotta opacity-40"></div>
</div>
</div>
</div>
</section>
<!-- Newsletter CTA -->
<section class="py-section-padding bg-surface">
<div class="max-w-[800px] mx-auto px-margin-mobile text-center reveal">
<h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-charcoal mb-6">Join the Inner Circle</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant mb-12">Receive exclusive access to new collection launches, artisan stories, and bespoke availability.</p>
<form class="flex flex-col md:flex-row gap-4">
<input class="flex-grow bg-transparent border-t-0 border-x-0 border-b border-outline focus:border-terracotta focus:ring-0 font-label-lg px-0 py-4 transition-all" placeholder="YOUR EMAIL ADDRESS" type="email"/>
<button class="bg-charcoal text-white font-label-lg text-label-lg px-12 py-4 uppercase tracking-widest hover:bg-terracotta transition-all" type="submit">Subscribe</button>
</form>
<p class="font-label-sm text-label-sm mt-6 opacity-40 uppercase">Quiet Luxury. Zero Spam.</p>
</div>
</section>
<!-- Footer -->
<footer class="bg-charcoal dark:bg-inverse-surface w-full">
<div class="grid grid-cols-1 md:grid-cols-12 gap-gutter px-margin-mobile md:px-margin-desktop py-section-padding items-end">
<div class="md:col-span-4 mb-12 md:mb-0">
<div class="font-headline-md text-headline-md text-sand mb-8 uppercase tracking-tighter">VÉRITÉ</div>
<p class="font-body-md text-body-md text-surface-variant max-w-xs mb-8">Crafting modern heirlooms for the man who values heritage, sustainability, and the beauty of hand-loomed textiles.</p>
<div class="flex gap-6">
<a class="text-sand hover:text-terracotta transition-all" href="#"><span class="material-symbols-outlined" data-icon="language">language</span></a>
<a class="text-sand hover:text-terracotta transition-all" href="#"><span class="material-symbols-outlined" data-icon="share">share</span></a>
<a class="text-sand hover:text-terracotta transition-all" href="#"><span class="material-symbols-outlined" data-icon="mail">mail</span></a>
</div>
</div>
<div class="md:col-span-2 flex flex-col gap-4 mb-8 md:mb-0">
<h5 class="font-label-lg text-label-lg text-sand uppercase mb-4 opacity-50">Discovery</h5>
<a class="font-label-sm text-label-sm text-surface-variant hover:text-terracotta transition-colors" href="#">The Studio</a>
<a class="font-label-sm text-label-sm text-surface-variant hover:text-terracotta transition-colors" href="#">Artisan Stories</a>
<a class="font-label-sm text-label-sm text-surface-variant hover:text-terracotta transition-colors" href="#">Care Guide</a>
</div>
<div class="md:col-span-2 flex flex-col gap-4 mb-8 md:mb-0">
<h5 class="font-label-lg text-label-lg text-sand uppercase mb-4 opacity-50">Support</h5>
<a class="font-label-sm text-label-sm text-surface-variant hover:text-terracotta transition-colors" href="#">Shipping</a>
<a class="font-label-sm text-label-sm text-surface-variant hover:text-terracotta transition-colors" href="#">Contact</a>
<a class="font-label-sm text-label-sm text-surface-variant hover:text-terracotta transition-colors" href="#">Returns</a>
</div>
<div class="md:col-span-4 text-right">
<p class="font-label-sm text-label-sm text-surface-variant opacity-60 mb-2 uppercase tracking-widest">© 2024 VÉRITÉ HEIRLOOMS.</p>
<p class="font-label-sm text-label-sm text-surface-variant opacity-60 uppercase tracking-widest">PRESERVING TEXTILE HERITAGE.</p>
</div>
</div>
</footer>
<script>
        // Reveal Animations on Scroll
        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

        // Sticky Nav Transformation
        window.addEventListener('scroll', () => {
            const nav = document.getElementById('top-nav');
            if (window.scrollY > 50) {
                nav.classList.add('nav-scrolled');
            } else {
                nav.classList.remove('nav-scrolled');
            }
        });

        // Simple paralax effect on hero
        window.addEventListener('scroll', () => {
            const scroll = window.pageYOffset;
            const heroImage = document.querySelector('.hero-gradient').previousElementSibling;
            heroImage.style.transform = `translateY(${scroll * 0.15}px) scale(1.05)`;
        });
    </script>
</body></html>