<?php include 'includes/header.php'; ?>

<!-- HERO BANNER SECTION (Mudaura Slider Structure + SuperYou Typography) -->
<section class="hero">
  <div class="hero-slider">
    <!-- Single slide matching screenshot -->
    <div class="hero-slide active">
      <div class="hero-img-wrap">
        <img src="assets/img/ethnic-hero.png" alt="Yahuuu Premium Indian Ethnic Wear">
      </div>
      <div class="hero-content" style="align-items: flex-start; text-align: left; max-width: 1440px; margin: 0 auto; padding-left: var(--spacing-lg); width: 100%;">
        <h1 class="hero-title" style="font-size: clamp(2.5rem, 7vw, 5.5rem); font-weight: 800; line-height: 1.0; margin-bottom: var(--spacing-xs); text-transform: uppercase;">
          CRAFTING RADIANCE<br>NATURALLY.
        </h1>
        <div class="hero-cta" style="margin-top: 0.5rem;">
          <a href="shop.php" class="nav-link-item" style="color: #ffffff; font-size: 1rem; font-family: var(--font-display); font-weight: 700; letter-spacing: 0.05em; border-bottom: 2px solid #ffffff; padding-bottom: 4px;">
            Shop all &rarr;
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Sub-hero caption (matching screenshot layout) -->
<div class="hero-bottom-caption container" style="padding-top: var(--spacing-lg); padding-bottom: var(--spacing-xs); display: flex; flex-direction: column; align-items: flex-start; text-align: left;">
  <p class="brand-serif-italic" style="color: var(--color-accent-green); font-size: 1.15rem; margin-bottom: 4px;">Made to transform</p>
  <h3 style="font-size: 1.25rem; font-weight: 800; letter-spacing: 0.05em; font-family: var(--font-display);">SILK, LINEN AND COTTON</h3>
</div>

<!-- STORY/MISSION SECTION (No Nasties Storytelling + SuperYou Bold Focus) -->
<section class="section-padding story-section" style="padding-top: var(--spacing-lg);">
  <div class="container">
    <div class="story-grid">
      <!-- Image box with subtle GSAP scroll parallax -->
      <div class="story-image parallax-wrap">
        <img src="assets/img/product-pants.png" alt="Heritage sustainable silk details">
      </div>
      <!-- Content Box -->
      <div class="story-content">
        <h2 class="reveal-text" style="margin-bottom: var(--spacing-sm);">Designed for a Better Planet</h2>
        <p class="fade-up-trigger">
          Every thread is woven with heritage craftsmanship. Our Indian ethnic wear is handcrafted by local artisans using organic, hand-spun silks and cottons. By preserving traditional handloom techniques, we save natural resources and enrich weaving communities.
        </p>
        <p class="fade-up-trigger" style="font-weight: 700; color: var(--color-charcoal);">
          Each heritage piece purchased removes 3x more CO2 from the atmosphere than it produces to manufacture, ship, and wash.
        </p>
        <div class="fade-up-trigger" style="margin-top: var(--spacing-md);">
          <a href="shop.php" class="btn btn-secondary">Learn Our Story</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- BESTSELLERS SHELF (Arih-style interactive carousel) -->
<section class="section-padding" style="background-color: var(--bg-offwhite);">
  <div class="container">
    <div class="product-carousel-header">
      <div>
        <span class="brand-serif-italic" style="font-size: 1.2rem; color: var(--color-accent-green);">Bestsellers</span>
        <h2>Heritage Wardrobe</h2>
      </div>
      <div class="carousel-controls">
        <button class="carousel-btn" aria-label="Previous items" onclick="document.getElementById('bestseller-shelf-wrap').scrollBy({left: -300, behavior: 'smooth'})">
          <i data-lucide="chevron-left"></i>
        </button>
        <button class="carousel-btn" aria-label="Next items" onclick="document.getElementById('bestseller-shelf-wrap').scrollBy({left: 300, behavior: 'smooth'})">
          <i data-lucide="chevron-right"></i>
        </button>
      </div>
    </div>

    <!-- Scrollable shelf wrapper -->
    <div class="product-shelf-wrapper" id="bestseller-shelf-wrap">
      <div class="product-shelf grid-cascade">
        
        <!-- Card 1: Handloom Cotton Kurta -->
        <div class="product-card">
          <span class="stock-tag low">Only 4 Left</span>
          <div class="product-card-img-wrap">
            <a href="product.php?id=organic-tee">
              <img src="assets/img/product-tee.png" alt="Handloom Cotton Kurta">
              <img src="assets/img/product-hoodie.png" alt="Alternate view" class="product-card-img-hover">
            </a>
            <!-- Quick Add Overlay on Hover -->
            <div class="product-card-overlay">
              <div class="product-card-sizes">
                <button class="card-size-btn" onclick="yahuuuAddToCart({id: 'organic-tee', title: 'Handloom Cotton Kurta', price: 1499, image: 'assets/img/product-tee.png', size: 'S', color: 'Sage Green'})">S</button>
                <button class="card-size-btn" onclick="yahuuuAddToCart({id: 'organic-tee', title: 'Handloom Cotton Kurta', price: 1499, image: 'assets/img/product-tee.png', size: 'M', color: 'Sage Green'})">M</button>
                <button class="card-size-btn" onclick="yahuuuAddToCart({id: 'organic-tee', title: 'Handloom Cotton Kurta', price: 1499, image: 'assets/img/product-tee.png', size: 'L', color: 'Sage Green'})">L</button>
              </div>
            </div>
          </div>
          <div class="product-card-info">
            <a href="product.php?id=organic-tee"><h4 class="product-card-title">Handloom Cotton Kurta</h4></a>
            <div class="product-card-price">₹1,499.00</div>
            <div class="product-card-swatches">
              <span class="swatch active" style="background-color: #A2B29F;" title="Sage Green"></span>
              <span class="swatch" style="background-color: #E8D3C9;" title="Warm Sand"></span>
            </div>
          </div>
        </div>

        <!-- Card 2: Banarasi Silk Dupatta -->
        <div class="product-card">
          <span class="stock-tag in-stock">Artisan Pick</span>
          <div class="product-card-img-wrap">
            <a href="product.php?id=linen-pants">
              <img src="assets/img/product-pants.png" alt="Banarasi Silk Dupatta">
              <img src="assets/img/product-tee.png" alt="Alternate view" class="product-card-img-hover">
            </a>
            <div class="product-card-overlay">
              <div class="product-card-sizes">
                <button class="card-size-btn" onclick="yahuuuAddToCart({id: 'linen-pants', title: 'Banarasi Silk Dupatta', price: 2499, image: 'assets/img/product-pants.png', size: 'M', color: 'Cream'})">M</button>
                <button class="card-size-btn" onclick="yahuuuAddToCart({id: 'linen-pants', title: 'Banarasi Silk Dupatta', price: 2499, image: 'assets/img/product-pants.png', size: 'L', color: 'Cream'})">L</button>
              </div>
            </div>
          </div>
          <div class="product-card-info">
            <a href="product.php?id=linen-pants"><h4 class="product-card-title">Banarasi Silk Dupatta</h4></a>
            <div class="product-card-price">₹2,499.00</div>
            <div class="product-card-swatches">
              <span class="swatch active" style="background-color: #FAF9F6;" title="Cream"></span>
              <span class="swatch" style="background-color: #2F3E46;" title="Charcoal Black"></span>
            </div>
          </div>
        </div>

        <!-- Card 3: Artisan Chanderi Jacket -->
        <div class="product-card">
          <div class="product-card-img-wrap">
            <a href="product.php?id=heavy-hoodie">
              <img src="assets/img/product-hoodie.png" alt="Artisan Chanderi Jacket">
              <img src="assets/img/product-pants.png" alt="Alternate view" class="product-card-img-hover">
            </a>
            <div class="product-card-overlay">
              <div class="product-card-sizes">
                <button class="card-size-btn" onclick="yahuuuAddToCart({id: 'heavy-hoodie', title: 'Artisan Chanderi Jacket', price: 3999, image: 'assets/img/product-hoodie.png', size: 'S', color: 'Charcoal'})">S</button>
                <button class="card-size-btn" onclick="yahuuuAddToCart({id: 'heavy-hoodie', title: 'Artisan Chanderi Jacket', price: 3999, image: 'assets/img/product-hoodie.png', size: 'M', color: 'Charcoal'})">M</button>
                <button class="card-size-btn" onclick="yahuuuAddToCart({id: 'heavy-hoodie', title: 'Artisan Chanderi Jacket', price: 3999, image: 'assets/img/product-hoodie.png', size: 'L', color: 'Charcoal'})">L</button>
              </div>
            </div>
          </div>
          <div class="product-card-info">
            <a href="product.php?id=heavy-hoodie"><h4 class="product-card-title">Artisan Chanderi Jacket</h4></a>
            <div class="product-card-price">₹3,999.00</div>
            <div class="product-card-swatches">
              <span class="swatch active" style="background-color: #222222;" title="Charcoal"></span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- BEST SELLER BEFORE/AFTER SLIDER -->
<section class="section-padding before-after-section" style="background-color: var(--color-white); text-align: center;">
  <div class="container" style="max-width: 900px;">
    
    <div class="before-after-header" style="margin-bottom: var(--spacing-md);">
      <h2 style="font-weight: 800; text-transform: uppercase; letter-spacing: 0.05em; font-family: var(--font-display);">THE BEST SELLER</h2>
      <p style="color: var(--color-charcoal-muted); margin-top: 10px; font-size: 1.1rem;">Handcrafted with purity your skin truly deserves.</p>
    </div>

    <div class="before-after-wrapper" id="ba-wrapper">
      
      <!-- Before Image (Base Layer) -->
      <div class="before-after-image-container">
        <img src="assets/img/slider-before.png" alt="Before" class="before-after-image" draggable="false">
        <div class="before-after-label label-before">Before</div>
      </div>

      <!-- After Image (Clipped Overlay) -->
      <div class="before-after-overlay" id="ba-overlay">
        <img src="assets/img/slider-after.png" alt="After" class="before-after-image" draggable="false">
        <div class="before-after-label label-after">After</div>
      </div>

      <!-- Drag Cursor/Handle -->
      <div class="before-after-cursor" id="ba-cursor">
        <div class="cursor-icon">
          <svg viewBox="0 0 32 40" width="28" height="35" focusable="false">
            <path d="M0 16C0 7.16344 7.16344 0 16 0C24.8366 0 32 7.16344 32 16V24C32 32.8366 24.8366 40 16 40C7.16344 40 0 32.8366 0 24V16Z" fill="#ffffff"></path>
            <path fill="#000000" d="M11 14H13V26H11zM15 14H17V26H15zM19 14H21V26H19z"></path>
          </svg>
        </div>
      </div>

    </div>

    <a href="shop.php" class="btn btn-primary" style="margin-top: var(--spacing-lg); padding: 12px 40px; border-radius: 8px;">Shop now</a>

  </div>
</section>

<!-- EVENTS CTA SECTION -->
<section class="section-padding" style="text-align: center; background-color: var(--color-charcoal);">
  <div class="container">
    <div class="event-list__cta">
      <a href="/pages/events" class="button button-secondary button--xl event-list__cta-link btn-fill-animation" data-gsap-fill-button>
        <span class="event-list__cta-link-text event-list__cta-link-text--desktop">View All Events</span>
        <span class="event-list__cta-link-text event-list__cta-link-text--mobile">View All Events</span>
      </a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
