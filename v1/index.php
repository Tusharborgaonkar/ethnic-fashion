<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vastram | The Fashion Hub | Premium Indian Ethnic Wear</title>
  <meta name="description" content="Discover premium, handcrafted Indian ethnic wear for men and women at Vastram. From designer lehengas to premium silk sherwanis and heritage textiles.">
  
  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

  <!-- ==========================================================================
       SVG CLIP PATHS FOR TRADITIONAL INDIAN SCALLOPED ARCHES
       ========================================================================== -->
  <svg width="0" height="0" style="position: absolute;">
    <defs>
      <!-- Scalloped Multi-foil Indian Arch Clip Path in normalized 0-1 coordinates -->
      <clipPath id="scalloped-arch" clipPathUnits="objectBoundingBox">
        <path d="M 0.5,0 
                 C 0.58,0.01 0.63,0.03 0.68,0.06 
                 C 0.74,0.09 0.78,0.14 0.81,0.20
                 C 0.85,0.26 0.92,0.28 0.96,0.36
                 C 0.98,0.40 0.98,0.45 0.98,0.50
                 L 0.98,1 
                 L 0.02,1 
                 L 0.02,0.50
                 C 0.02,0.45 0.02,0.40 0.04,0.36
                 C 0.08,0.28 0.15,0.26 0.19,0.20
                 C 0.22,0.14 0.26,0.09 0.32,0.06
                 C 0.37,0.03 0.42,0.01 0.5,0 Z" />
      </clipPath>
    </defs>
  </svg>

  <!-- ==========================================================================
       NAVBAR HEADER
       ========================================================================== -->
  <div class="navbar-wrapper">
    <header class="navbar container">
      <!-- Left side: Vastram Logo -->
      <a href="index.php" class="logo" id="main-logo-link">
        <span class="logo-main">vastram</span>
        <span class="logo-sub">the fashion hub</span>
      </a>

      <!-- Center: Navigation links -->
      <nav class="nav-links-container" aria-label="Main Navigation">
        <ul class="nav-menu">
          <li class="nav-item">
            <a href="#" class="nav-link">Men <i data-lucide="chevron-down" style="width: 14px; height: 14px;"></i></a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Women <i data-lucide="chevron-down" style="width: 14px; height: 14px;"></i></a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Kids <i data-lucide="chevron-down" style="width: 14px; height: 14px;"></i></a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Accessories</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Virtual Try-On <span class="badge-new">NEW</span></a>
          </li>
        </ul>
      </nav>

      <!-- Right side: Action icons -->
      <div class="nav-actions">
        <button class="nav-icon" aria-label="Search Catalog" id="nav-search-btn">
          <i data-lucide="search" style="width: 22px; height: 22px;"></i>
        </button>
        <button class="nav-icon" aria-label="View Wishlist" id="nav-wishlist-btn">
          <i data-lucide="heart" style="width: 22px; height: 22px;"></i>
        </button>
        <button class="nav-icon" aria-label="Open Shopping Bag" id="nav-cart-btn">
          <i data-lucide="shopping-bag" style="width: 22px; height: 22px;"></i>
          <span class="cart-count" id="cart-indicator">0</span>
        </button>
      </div>
    </header>
  </div>

  <!-- ==========================================================================
       HERO SECTION
       ========================================================================== -->
  <section class="hero-section container" aria-label="Welcome Banner">
    <div class="hero-content">
      <h1 class="hero-heading">
        Find Your Perfect<br>
        <span class="accent">Blend</span> of Our<br>
        <span class="bold-accent">Traditional</span> and<br>
        Modern <span class="accent">Fashion</span>
        
        <!-- Rotating Gold Seal next to title -->
        <span class="hero-badge-wrap">
          <svg viewBox="0 0 100 100" class="brand-seal-badge" style="width: 76px; height: 76px;">
            <circle cx="50" cy="50" r="48" fill="none" stroke="#C5A880" stroke-width="1.5"/>
            <circle cx="50" cy="50" r="44" fill="none" stroke="#C5A880" stroke-width="0.8" stroke-dasharray="4 2"/>
            <path id="circle-text-path" fill="none" d="M 50,6 A 44,44 0 1,1 49.9,6" />
            <text font-family="'Figtree', sans-serif" font-size="7.5" font-weight="700" fill="#C5A880" letter-spacing="2">
              <textPath href="#circle-text-path" startOffset="0%">
                • HANDCRAFTED HERITAGE • LUXURY TEXTILES • ORIGINAL DESIGN •
              </textPath>
            </text>
            <text x="50" y="55" font-family="'EB Garamond', serif" font-size="18" fill="#C5A880" text-anchor="middle" font-weight="600">V</text>
          </svg>
        </span>
      </h1>
      
      <div class="hero-line"></div>
      
      <p class="hero-subtitle">Which style you looking for?</p>
      
      <!-- Interactive style chips -->
      <div class="hero-tags">
        <button class="hero-tag active" onclick="selectStyleTag(this)">Rental Wear</button>
        <button class="hero-tag" onclick="selectStyleTag(this)">Occasion Wear</button>
        <button class="hero-tag" onclick="selectStyleTag(this)">Wedding Collections</button>
        <button class="hero-tag" onclick="selectStyleTag(this)">Premium Fabrics</button>
        <button class="hero-tag" onclick="selectStyleTag(this)">Handloom Embroidery</button>
        <button class="hero-tag" onclick="selectStyleTag(this)">Shop By Fabric</button>
      </div>
      
      <a href="#featured-products" class="hero-btn" id="hero-cta-btn">
        Shop Now <i data-lucide="move-right" style="width: 18px; height: 18px;"></i>
      </a>
    </div>
    
    <!-- Hero Right Media with custom Scalloped Arch Frame and Gold Outline Overlay -->
    <div class="hero-media">
      <div class="hero-media-glow"></div>
      <div class="hero-frame-container">
        <!-- Arch Content -->
        <div class="arch-scalloped">
          <img src="assets/img/hero-couple.png" alt="Indian wedding wear sherwani and lehenga">
        </div>
        <!-- Gold Outline Overlay -->
        <svg viewBox="0 0 100 138" class="arch-svg-overlay" preserveAspectRatio="none">
          <path d="M 50,1 
                   C 58.3,2.0 63.3,4.0 68.3,7.2 
                   C 74.3,10.5 78.3,16.0 81.3,22.6 
                   C 85.3,29.2 92.3,31.4 96.3,40.2 
                   C 98.3,44.6 98.3,50.1 98.3,55.6 
                   L 98.3,137 
                   L 1.7,137 
                   L 1.7,55.6 
                   C 1.7,50.1 1.7,44.6 3.7,40.2 
                   C 7.7,31.4 14.7,29.2 18.7,22.6 
                   C 21.7,16.0 25.7,10.5 31.7,7.2 
                   C 36.7,4.0 41.7,2.0 50,1 Z" 
                fill="none" stroke="#C5A880" stroke-width="1.2"/>
        </svg>
      </div>
    </div>
  </section>

  <!-- ==========================================================================
       FEATURED PRODUCTS
       ========================================================================== -->
  <section class="section-padding container" id="featured-products" aria-label="Featured Collection">
    <div class="section-header">
      <div class="section-title-wrapper">
        <h2 class="section-title">Featured Products</h2>
        <div class="section-title-line"></div>
      </div>
      <a href="#" class="section-link">View All <i data-lucide="chevron-right" style="width: 16px; height: 16px;"></i></a>
    </div>

    <div class="grid product-grid">
      <!-- Product 1 -->
      <div class="product-card">
        <div class="product-card-img-wrap">
          <div class="arch-classic">
            <img src="assets/img/lehenga-floral.png" alt="Multi Color Georgette Embroidered Lehenga Choli">
          </div>
        </div>
        <div class="product-card-info">
          <h3 class="product-title">Multi Color Georgette Embroidered Lehenga Choli</h3>
          <div class="product-footer">
            <span class="product-price">₹2,200</span>
            <button class="btn-add-cart" onclick="addToCart('Multi Color Georgette Embroidered Lehenga Choli', 2200)">Add to Cart</button>
          </div>
        </div>
      </div>

      <!-- Product 2 -->
      <div class="product-card">
        <div class="product-card-img-wrap">
          <div class="arch-classic">
            <img src="assets/img/media-arrival.png" alt="Pastel Grey Silk Kurta Pajama Set">
          </div>
        </div>
        <div class="product-card-info">
          <h3 class="product-title">Pastel Grey Silk Kurta Pajama Set</h3>
          <div class="product-footer">
            <span class="product-price">₹1,850</span>
            <button class="btn-add-cart" onclick="addToCart('Pastel Grey Silk Kurta Pajama Set', 1850)">Add to Cart</button>
          </div>
        </div>
      </div>

      <!-- Product 3 -->
      <div class="product-card">
        <div class="product-card-img-wrap">
          <div class="arch-classic">
            <img src="assets/img/media-arrival.png" alt="Yellow Silk Blend Floral Printed Nehru Jacket">
          </div>
        </div>
        <div class="product-card-info">
          <h3 class="product-title">Yellow Silk Blend Floral Printed Nehru Jacket</h3>
          <div class="product-footer">
            <span class="product-price">₹2,500</span>
            <button class="btn-add-cart" onclick="addToCart('Yellow Silk Blend Floral Printed Nehru Jacket', 2500)">Add to Cart</button>
          </div>
        </div>
      </div>

      <!-- Product 4 -->
      <div class="product-card">
        <div class="product-card-img-wrap">
          <div class="arch-classic">
            <img src="assets/img/lehenga-purple.png" alt="Deep Purple Banarasi Silk Lehenga Choli">
          </div>
        </div>
        <div class="product-card-info">
          <h3 class="product-title">Deep Purple Banarasi Silk Lehenga Choli</h3>
          <div class="product-footer">
            <span class="product-price">₹3,500</span>
            <button class="btn-add-cart" onclick="addToCart('Deep Purple Banarasi Silk Lehenga Choli', 3500)">Add to Cart</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==========================================================================
       POPULAR CATEGORIES
       ========================================================================== -->
  <section class="section-padding container" aria-label="Product Categories">
    <div class="section-header" style="justify-content: center; margin-bottom: var(--spacing-xl);">
      <h2 class="section-title">Popular Categories</h2>
    </div>

    <div class="grid categories-grid">
      <!-- Category 1: Sarees -->
      <div class="category-card">
        <div class="category-card-inner arch-classic">
          <img src="assets/img/lehenga-purple.png" alt="Sarees Category">
          <div class="category-overlay">
            <h3 class="category-title">Sarees</h3>
          </div>
        </div>
        <!-- Gold Outline Overlay -->
        <svg viewBox="0 0 100 138" class="arch-svg-overlay" preserveAspectRatio="none">
          <rect x="1.5" y="1.5" width="97" height="135" rx="48" ry="48" fill="none" stroke="#C5A880" stroke-width="1.2" />
        </svg>
      </div>

      <!-- Category 2: Lehenga Choli -->
      <div class="category-card">
        <div class="category-card-inner arch-classic">
          <img src="assets/img/lehenga-floral.png" alt="Lehenga Choli Category">
          <div class="category-overlay">
            <h3 class="category-title">Lehenga Choli</h3>
          </div>
        </div>
        <svg viewBox="0 0 100 138" class="arch-svg-overlay" preserveAspectRatio="none">
          <rect x="1.5" y="1.5" width="97" height="135" rx="48" ry="48" fill="none" stroke="#C5A880" stroke-width="1.2" />
        </svg>
      </div>

      <!-- Category 3: Salwar Suit -->
      <div class="category-card">
        <div class="category-card-inner arch-classic">
          <img src="assets/img/media-arrival.png" alt="Salwar Suit Category">
          <div class="category-overlay">
            <h3 class="category-title">Salwar Suit</h3>
          </div>
        </div>
        <svg viewBox="0 0 100 138" class="arch-svg-overlay" preserveAspectRatio="none">
          <rect x="1.5" y="1.5" width="97" height="135" rx="48" ry="48" fill="none" stroke="#C5A880" stroke-width="1.2" />
        </svg>
      </div>

      <!-- Category 4: Indo-Western -->
      <div class="category-card">
        <div class="category-card-inner arch-classic">
          <img src="assets/img/hero-couple.png" alt="Indo-Western Category">
          <div class="category-overlay">
            <h3 class="category-title">Indo-Western</h3>
          </div>
        </div>
        <svg viewBox="0 0 100 138" class="arch-svg-overlay" preserveAspectRatio="none">
          <rect x="1.5" y="1.5" width="97" height="135" rx="48" ry="48" fill="none" stroke="#C5A880" stroke-width="1.2" />
        </svg>
      </div>

      <!-- Category 5: Kurtas -->
      <div class="category-card">
        <div class="category-card-inner arch-classic">
          <img src="assets/img/media-arrival.png" alt="Kurtas Category">
          <div class="category-overlay">
            <h3 class="category-title">Kurtas</h3>
          </div>
        </div>
        <svg viewBox="0 0 100 138" class="arch-svg-overlay" preserveAspectRatio="none">
          <rect x="1.5" y="1.5" width="97" height="135" rx="48" ry="48" fill="none" stroke="#C5A880" stroke-width="1.2" />
        </svg>
      </div>

      <!-- Category 6: Bundi Set -->
      <div class="category-card">
        <div class="category-card-inner arch-classic">
          <img src="assets/img/media-arrival.png" alt="Bundi Set Category">
          <div class="category-overlay">
            <h3 class="category-title">Bundi Set</h3>
          </div>
        </div>
        <svg viewBox="0 0 100 138" class="arch-svg-overlay" preserveAspectRatio="none">
          <rect x="1.5" y="1.5" width="97" height="135" rx="48" ry="48" fill="none" stroke="#C5A880" stroke-width="1.2" />
        </svg>
      </div>

      <!-- Category 7: Indo-Western (Men) -->
      <div class="category-card">
        <div class="category-card-inner arch-classic">
          <img src="assets/img/media-arrival.png" alt="Indo-Western Category">
          <div class="category-overlay">
            <h3 class="category-title">Indo-Western</h3>
          </div>
        </div>
        <svg viewBox="0 0 100 138" class="arch-svg-overlay" preserveAspectRatio="none">
          <rect x="1.5" y="1.5" width="97" height="135" rx="48" ry="48" fill="none" stroke="#C5A880" stroke-width="1.2" />
        </svg>
      </div>

      <!-- Category 8: Bandhgala -->
      <div class="category-card">
        <div class="category-card-inner arch-classic">
          <img src="assets/img/media-arrival.png" alt="Bandhgala Category">
          <div class="category-overlay">
            <h3 class="category-title">Bandhgala</h3>
          </div>
        </div>
        <svg viewBox="0 0 100 138" class="arch-svg-overlay" preserveAspectRatio="none">
          <rect x="1.5" y="1.5" width="97" height="135" rx="48" ry="48" fill="none" stroke="#C5A880" stroke-width="1.2" />
        </svg>
      </div>
    </div>
  </section>

  <!-- ==========================================================================
       POPULAR PRODUCTS
       ========================================================================== -->
  <section class="section-padding container" aria-label="Popular Collection">
    <div class="section-header">
      <div class="section-title-wrapper">
        <h2 class="section-title">Popular Products</h2>
        <div class="section-title-line"></div>
      </div>
      <a href="#" class="section-link">View All <i data-lucide="chevron-right" style="width: 16px; height: 16px;"></i></a>
    </div>

    <div class="grid product-grid">
      <!-- Product 1 -->
      <div class="product-card">
        <div class="product-card-img-wrap">
          <div class="arch-classic">
            <img src="assets/img/media-arrival.png" alt="Multi Color Silk Nehru Jacket & Kurta Set">
          </div>
        </div>
        <div class="product-card-info">
          <h3 class="product-title">Multi Color Silk Nehru Jacket & Kurta Set</h3>
          <div class="product-footer">
            <span class="product-price">₹1,200</span>
            <button class="btn-add-cart" onclick="addToCart('Multi Color Silk Nehru Jacket & Kurta Set', 1200)">Add to Cart</button>
          </div>
        </div>
      </div>

      <!-- Product 2 -->
      <div class="product-card">
        <div class="product-card-img-wrap">
          <div class="arch-classic">
            <img src="assets/img/ethnic-hero.png" alt="Premium Banarasi Red Mirror Lehenga Choli">
          </div>
        </div>
        <div class="product-card-info">
          <h3 class="product-title">Premium Banarasi Red Mirror Lehenga Choli</h3>
          <div class="product-footer">
            <span class="product-price">₹20,700</span>
            <button class="btn-add-cart" onclick="addToCart('Premium Banarasi Red Mirror Lehenga Choli', 20700)">Add to Cart</button>
          </div>
        </div>
      </div>

      <!-- Product 3 -->
      <div class="product-card">
        <div class="product-card-img-wrap">
          <div class="arch-classic">
            <img src="assets/img/lehenga-floral.png" alt="Ocean Blue Silk Embroidered Lehenga Choli">
          </div>
        </div>
        <div class="product-card-info">
          <h3 class="product-title">Ocean Blue Silk Embroidered Lehenga Choli</h3>
          <div class="product-footer">
            <span class="product-price">₹22,200</span>
            <button class="btn-add-cart" onclick="addToCart('Ocean Blue Silk Embroidered Lehenga Choli', 22200)">Add to Cart</button>
          </div>
        </div>
      </div>

      <!-- Product 4 -->
      <div class="product-card">
        <div class="product-card-img-wrap">
          <div class="arch-classic">
            <img src="assets/img/media-arrival.png" alt="Pink Silk Blend Nehru Jacket And Kurta Set">
          </div>
        </div>
        <div class="product-card-info">
          <h3 class="product-title">Pink Silk Blend Nehru Jacket And Kurta Set</h3>
          <div class="product-footer">
            <span class="product-price">₹5,900</span>
            <button class="btn-add-cart" onclick="addToCart('Pink Silk Blend Nehru Jacket And Kurta Set', 5900)">Add to Cart</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==========================================================================
       NEW ARRIVAL DETAIL BANNER
       ========================================================================== -->
  <section class="section-padding container" aria-label="New Arrivals Highlights">
    <div class="new-arrival-section">
      <!-- Grid of detail photos -->
      <div class="new-arrival-media">
        <div class="new-arrival-img">
          <img src="assets/img/media-arrival.png" alt="Blue Lehenga Detail view 1">
        </div>
        <div class="new-arrival-img">
          <img src="assets/img/lehenga-purple.png" alt="Blue Lehenga Detail view 2">
        </div>
        <div class="new-arrival-img">
          <img src="assets/img/lehenga-floral.png" alt="Blue Lehenga Detail view 3">
        </div>
      </div>
      
      <!-- Copy Pitch info -->
      <div class="new-arrival-content">
        <span class="new-arrival-subtitle">New Arrival</span>
        <h2 class="new-arrival-title">Fabulous Blue and Grey Silk Fabric Embroidered Lehenga Choli</h2>
        <button class="new-arrival-btn" onclick="addToCart('Fabulous Blue and Grey Silk Lehenga Choli', 24900)">Shop Now</button>
      </div>
    </div>
  </section>

  <!-- ==========================================================================
       NEWSLETTER BOX & INSTAGRAM BAR
       ========================================================================== -->
  <section class="section-padding container" aria-label="Newsletter and Instagram Feed">
    <div class="footer-top-grid">
      <!-- Newsletter form box -->
      <div class="newsletter-box">
        <h2 class="newsletter-title">Subscribe to <span class="accent">our newsletter</span> and get<br>updates on <span class="accent">new arrival</span>.</h2>
        <form class="newsletter-form" onsubmit="handleSubscribe(event)" id="newsletter-form-element">
          <input type="email" placeholder="your email address" class="newsletter-input" required aria-label="Email for newsletter">
          <button type="submit" class="newsletter-btn">Subscribe</button>
        </form>
      </div>

      <!-- Instagram Grid -->
      <div class="instagram-box">
        <h2 class="instagram-title">Follow us on Instagram</h2>
        <div class="instagram-feed">
          <div class="instagram-item">
            <img src="assets/img/lehenga-floral.png" alt="Instagram post 1">
          </div>
          <div class="instagram-item">
            <img src="assets/img/lehenga-purple.png" alt="Instagram post 2">
          </div>
          <div class="instagram-item">
            <img src="assets/img/media-arrival.png" alt="Instagram post 3">
          </div>
          <div class="instagram-item">
            <img src="assets/img/hero-couple.png" alt="Instagram post 4">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==========================================================================
       MAIN FOOTER
       ========================================================================== -->
  <footer class="footer-main container" aria-label="Main Directory">
    <div class="footer-grid">
      <div class="footer-brand">
        <a href="index.php" class="logo">
          <span class="logo-main">vastram</span>
          <span class="logo-sub">the fashion hub</span>
        </a>
        <p class="footer-brand-text">
          We believe in handcrafted ethics, offering the best of contemporary ethnic Indian wear for men, women and kids.
        </p>
      </div>

      <div class="footer-col">
        <h3 class="footer-heading">Quick Link</h3>
        <ul class="footer-links">
          <li><a href="#" class="footer-link">Men</a></li>
          <li><a href="#" class="footer-link">Women</a></li>
          <li><a href="#" class="footer-link">Kids</a></li>
          <li><a href="#" class="footer-link">Occasion</a></li>
          <li><a href="#" class="footer-link">Virtual</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h3 class="footer-heading">Vastram</h3>
        <ul class="footer-links">
          <li><a href="#" class="footer-link">About Us</a></li>
          <li><a href="#" class="footer-link">Contact Us</a></li>
          <li><a href="#" class="footer-link">FAQ</a></li>
          <li><a href="#" class="footer-link">Press</a></li>
          <li><a href="#" class="footer-link">Careers</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h3 class="footer-heading">Policy</h3>
        <ul class="footer-links">
          <li><a href="#" class="footer-link">Terms & Conditions</a></li>
          <li><a href="#" class="footer-link">Shipping</a></li>
          <li><a href="#" class="footer-link">Return</a></li>
          <li><a href="#" class="footer-link">Payment Policy</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h3 class="footer-heading">My Account</h3>
        <ul class="footer-links">
          <li><a href="#" class="footer-link">Login</a></li>
          <li><a href="#" class="footer-link">Shopping Bag</a></li>
          <li><a href="#" class="footer-link">Wishlist</a></li>
          <li><a href="#" class="footer-link">Order Tracking</a></li>
          <li><a href="#" class="footer-link">Order History</a></li>
        </ul>
      </div>
    </div>

    <div class="footer-bottom">
      <p>© 2026 - 2028 Vastram. All Rights Reserved.</p>
      <p>We Deliver Across the World</p>
    </div>
  </footer>

  <!-- Lucide Icon Library & Initialize -->
  <script src="https://unpkg.com/lucide@latest"></script>
  <script src="assets/js/app.js"></script>
</body>
</html>
