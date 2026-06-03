<?php include 'includes/header.php'; ?>

<!-- HERO SLIDER -->
<section class="hero" id="hero-section">
  <!-- Slides -->
  <div class="hero-slide active" data-index="0">
    <div class="hero-bg">
      <img src="assets/img/hero-sherwani.png" alt="Royal Gold Sherwani" id="hero-img-0">
    </div>
    <div class="hero-overlay"></div>
  </div>
  <div class="hero-slide" data-index="1">
    <div class="hero-bg">
      <img src="assets/img/hero-kurta.png" alt="Festive Kurta" id="hero-img-1">
    </div>
    <div class="hero-overlay"></div>
  </div>
  <div class="hero-slide" data-index="2">
    <div class="hero-bg">
      <img src="assets/img/collection-wedding.png" alt="Wedding Collection" id="hero-img-2">
    </div>
    <div class="hero-overlay"></div>
  </div>

  <!-- Hero Content -->
  <div class="hero-content">
    <div class="eyebrow" style="color:var(--color-gold);margin-bottom:1rem;" id="hero-eyebrow">Wedding Collection 2026</div>
    <h1 class="hero-title" id="hero-title">Draped in<br><em>Tradition.</em></h1>
    <p class="hero-subtitle" id="hero-subtitle">Handcrafted in India · Worn by Kings</p>
    <div class="hero-cta-row">
      <a href="shop.php" class="btn btn-gold btn-lg">Explore Collection</a>
      <a href="about.php" class="btn btn-outline btn-lg" style="border-color:rgba(255,255,255,.5);color:white;">Our Heritage</a>
    </div>
  </div>

  <!-- Slider Dots -->
  <div class="slider-dots">
    <div class="slider-dot active" data-target="0"></div>
    <div class="slider-dot" data-target="1"></div>
    <div class="slider-dot" data-target="2"></div>
  </div>
</section>

<!-- MARQUEE STRIP -->
<div style="background:var(--color-gold);overflow:hidden;height:44px;display:flex;align-items:center;">
  <div class="announcement-slider">
    <?php for($i=0;$i<4;$i++): ?>
    <div class="announcement-slide" style="color:var(--color-charcoal);font-family:var(--font-display);font-style:italic;font-size:.95rem;letter-spacing:.04em;">
      <span>Handloom Kurtas</span>
      <span class="sep" style="color:var(--color-charcoal-80);">✦</span>
      <span>Banarasi Sherwanis</span>
      <span class="sep" style="color:var(--color-charcoal-80);">✦</span>
      <span>Nehru Jackets</span>
      <span class="sep" style="color:var(--color-charcoal-80);">✦</span>
      <span>Indo-Western Fusion</span>
      <span class="sep" style="color:var(--color-charcoal-80);">✦</span>
      <span>Wedding Sherwanis</span>
      <span class="sep" style="color:var(--color-charcoal-80);">✦</span>
    </div>
    <?php endfor; ?>
  </div>
</div>

<!-- COLLECTION CATEGORIES -->
<section class="section-padding" style="background:var(--bg-page);">
  <div class="container">
    <div class="text-center mb-md fade-up">
      <div class="eyebrow mb-sm">Shop by Category</div>
      <h2 style="font-family:var(--font-display);font-size:clamp(2rem,4vw,3rem);">The Heritage Wardrobe</h2>
    </div>
    <div class="category-grid fade-up stagger-1">
      <a href="shop.php?cat=kurtas" class="category-card">
        <img src="assets/img/product-kurta-sage.png" alt="Kurtas">
        <div class="category-card-overlay">
          <div class="category-card-label">Kurtas<br><span style="font-size:.65rem;letter-spacing:.12em;font-family:var(--font-body);text-transform:uppercase;">From ₹1,299</span></div>
        </div>
      </a>
      <a href="shop.php?cat=sherwanis" class="category-card">
        <img src="assets/img/product-sherwani-gold.png" alt="Sherwanis">
        <div class="category-card-overlay">
          <div class="category-card-label">Sherwanis<br><span style="font-size:.65rem;letter-spacing:.12em;font-family:var(--font-body);text-transform:uppercase;">From ₹4,999</span></div>
        </div>
      </a>
      <a href="shop.php?cat=nehru" class="category-card">
        <img src="assets/img/product-nehru-navy.png" alt="Nehru Jackets">
        <div class="category-card-overlay">
          <div class="category-card-label">Nehru Jackets<br><span style="font-size:.65rem;letter-spacing:.12em;font-family:var(--font-body);text-transform:uppercase;">From ₹2,499</span></div>
        </div>
      </a>
      <a href="shop.php?cat=indo-western" class="category-card">
        <img src="assets/img/product-indo-western.png" alt="Indo Western">
        <div class="category-card-overlay">
          <div class="category-card-label">Indo-Western<br><span style="font-size:.65rem;letter-spacing:.12em;font-family:var(--font-body);text-transform:uppercase;">From ₹3,299</span></div>
        </div>
      </a>
      <a href="shop.php?cat=wedding" class="category-card">
        <img src="assets/img/collection-wedding.png" alt="Wedding Wear">
        <div class="category-card-overlay">
          <div class="category-card-label">Wedding Wear<br><span style="font-size:.65rem;letter-spacing:.12em;font-family:var(--font-body);text-transform:uppercase;">From ₹5,999</span></div>
        </div>
      </a>
    </div>
  </div>
</section>

<!-- BESTSELLERS -->
<section class="section-padding" style="background:var(--bg-offwhite);">
  <div class="container">
    <div class="carousel-header fade-up">
      <div>
        <div class="eyebrow mb-sm">Bestsellers</div>
        <h2 style="font-family:var(--font-display);font-size:clamp(1.8rem,3.5vw,2.8rem);">Most Loved Pieces</h2>
      </div>
      <div style="display:flex;gap:1rem;align-items:center;">
        <a href="shop.php" class="btn btn-outline btn-sm">View All</a>
        <div class="carousel-controls">
          <button class="carousel-btn" id="shelf-prev" aria-label="Previous"><i data-lucide="chevron-left"></i></button>
          <button class="carousel-btn" id="shelf-next" aria-label="Next"><i data-lucide="chevron-right"></i></button>
        </div>
      </div>
    </div>

    <div class="product-shelf-wrapper fade-up stagger-1" id="bestseller-shelf">
      <div class="product-shelf">

        <!-- Card 1 -->
        <div class="product-card">
          <span class="stock-tag low">Only 3 Left</span>
          <div class="product-card-img-wrap">
            <a href="product.php?id=royal-sherwani">
              <img src="assets/img/product-sherwani-gold.png" alt="Royal Gold Sherwani">
              <img src="assets/img/product-kurta-maroon.png" alt="Alternate" class="product-card-img-hover">
            </a>
            <div class="product-card-overlay">
              <div class="product-card-sizes">
                <button class="card-size-btn" onclick="vastramAddToCart({id:'royal-sherwani',title:'Royal Gold Sherwani',price:7499,image:'assets/img/product-sherwani-gold.png',size:'M',color:'Ivory Gold'})">M</button>
                <button class="card-size-btn" onclick="vastramAddToCart({id:'royal-sherwani',title:'Royal Gold Sherwani',price:7499,image:'assets/img/product-sherwani-gold.png',size:'L',color:'Ivory Gold'})">L</button>
                <button class="card-size-btn" onclick="vastramAddToCart({id:'royal-sherwani',title:'Royal Gold Sherwani',price:7499,image:'assets/img/product-sherwani-gold.png',size:'XL',color:'Ivory Gold'})">XL</button>
              </div>
            </div>
          </div>
          <div class="product-card-info">
            <div class="product-card-eyebrow">Wedding Sherwani</div>
            <a href="product.php?id=royal-sherwani"><div class="product-card-title">Royal Zardozi Sherwani</div></a>
            <div class="product-card-price">₹7,499.00</div>
            <div class="product-card-swatches">
              <span class="swatch active" style="background:#F5EBD5;" title="Ivory Gold"></span>
              <span class="swatch" style="background:#7B1F1F;" title="Maroon"></span>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="product-card">
          <span class="stock-tag new">New Arrival</span>
          <div class="product-card-img-wrap">
            <a href="product.php?id=sage-kurta">
              <img src="assets/img/product-kurta-sage.png" alt="Sage Green Kurta">
              <img src="assets/img/product-kurta-cream.png" alt="Alternate" class="product-card-img-hover">
            </a>
            <div class="product-card-overlay">
              <div class="product-card-sizes">
                <button class="card-size-btn" onclick="vastramAddToCart({id:'sage-kurta',title:'Handloom Cotton Kurta',price:1799,image:'assets/img/product-kurta-sage.png',size:'S',color:'Sage Green'})">S</button>
                <button class="card-size-btn" onclick="vastramAddToCart({id:'sage-kurta',title:'Handloom Cotton Kurta',price:1799,image:'assets/img/product-kurta-sage.png',size:'M',color:'Sage Green'})">M</button>
                <button class="card-size-btn" onclick="vastramAddToCart({id:'sage-kurta',title:'Handloom Cotton Kurta',price:1799,image:'assets/img/product-kurta-sage.png',size:'L',color:'Sage Green'})">L</button>
              </div>
            </div>
          </div>
          <div class="product-card-info">
            <div class="product-card-eyebrow">Handloom Kurta</div>
            <a href="product.php?id=sage-kurta"><div class="product-card-title">Handloom Cotton Kurta</div></a>
            <div class="product-card-price">₹1,799.00</div>
            <div class="product-card-swatches">
              <span class="swatch active" style="background:#8FA98C;" title="Sage Green"></span>
              <span class="swatch" style="background:#FAF4EC;" title="Ivory"></span>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="product-card">
          <div class="product-card-img-wrap">
            <a href="product.php?id=navy-nehru">
              <img src="assets/img/product-nehru-navy.png" alt="Navy Nehru Jacket">
            </a>
            <div class="product-card-overlay">
              <div class="product-card-sizes">
                <button class="card-size-btn" onclick="vastramAddToCart({id:'navy-nehru',title:'Navy Nehru Jacket',price:3299,image:'assets/img/product-nehru-navy.png',size:'M',color:'Navy Blue'})">M</button>
                <button class="card-size-btn" onclick="vastramAddToCart({id:'navy-nehru',title:'Navy Nehru Jacket',price:3299,image:'assets/img/product-nehru-navy.png',size:'L',color:'Navy Blue'})">L</button>
              </div>
            </div>
          </div>
          <div class="product-card-info">
            <div class="product-card-eyebrow">Nehru Jacket</div>
            <a href="product.php?id=navy-nehru"><div class="product-card-title">Heritage Linen Nehru Jacket</div></a>
            <div class="product-card-price">₹3,299.00</div>
            <div class="product-card-swatches">
              <span class="swatch active" style="background:#1C3557;" title="Navy Blue"></span>
              <span class="swatch" style="background:#3D4432;" title="Deep Olive"></span>
            </div>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="product-card">
          <span class="stock-tag sale">20% Off</span>
          <div class="product-card-img-wrap">
            <a href="product.php?id=maroon-silk">
              <img src="assets/img/product-kurta-maroon.png" alt="Maroon Silk Kurta">
            </a>
            <div class="product-card-overlay">
              <div class="product-card-sizes">
                <button class="card-size-btn" onclick="vastramAddToCart({id:'maroon-silk',title:'Maroon Silk Kurta',price:2399,image:'assets/img/product-kurta-maroon.png',size:'S',color:'Maroon'})">S</button>
                <button class="card-size-btn" onclick="vastramAddToCart({id:'maroon-silk',title:'Maroon Silk Kurta',price:2399,image:'assets/img/product-kurta-maroon.png',size:'M',color:'Maroon'})">M</button>
                <button class="card-size-btn" onclick="vastramAddToCart({id:'maroon-silk',title:'Maroon Silk Kurta',price:2399,image:'assets/img/product-kurta-maroon.png',size:'L',color:'Maroon'})">L</button>
              </div>
            </div>
          </div>
          <div class="product-card-info">
            <div class="product-card-eyebrow">Silk Kurta</div>
            <a href="product.php?id=maroon-silk"><div class="product-card-title">Maroon Silk Thread Kurta</div></a>
            <div class="product-card-price"><span class="original">₹2,999.00</span>₹2,399.00</div>
          </div>
        </div>

        <!-- Card 5 -->
        <div class="product-card">
          <div class="product-card-img-wrap">
            <a href="product.php?id=indo-western-jacket">
              <img src="assets/img/product-indo-western.png" alt="Indo Western Jacket">
            </a>
            <div class="product-card-overlay">
              <div class="product-card-sizes">
                <button class="card-size-btn" onclick="vastramAddToCart({id:'indo-western-jacket',title:'Indo-Western Jacket',price:4599,image:'assets/img/product-indo-western.png',size:'M',color:'Charcoal'})">M</button>
                <button class="card-size-btn" onclick="vastramAddToCart({id:'indo-western-jacket',title:'Indo-Western Jacket',price:4599,image:'assets/img/product-indo-western.png',size:'L',color:'Charcoal'})">L</button>
              </div>
            </div>
          </div>
          <div class="product-card-info">
            <div class="product-card-eyebrow">Indo-Western</div>
            <a href="product.php?id=indo-western-jacket"><div class="product-card-title">Mandarin Collar Fusion Jacket</div></a>
            <div class="product-card-price">₹4,599.00</div>
          </div>
        </div>

        <!-- Card 6 -->
        <div class="product-card">
          <span class="stock-tag new">Artisan Pick</span>
          <div class="product-card-img-wrap">
            <a href="product.php?id=cream-chikankari">
              <img src="assets/img/product-kurta-cream.png" alt="Cream Chikankari Kurta">
            </a>
            <div class="product-card-overlay">
              <div class="product-card-sizes">
                <button class="card-size-btn" onclick="vastramAddToCart({id:'cream-chikankari',title:'Chikankari Kurta',price:2199,image:'assets/img/product-kurta-cream.png',size:'S',color:'Ivory'})">S</button>
                <button class="card-size-btn" onclick="vastramAddToCart({id:'cream-chikankari',title:'Chikankari Kurta',price:2199,image:'assets/img/product-kurta-cream.png',size:'M',color:'Ivory'})">M</button>
                <button class="card-size-btn" onclick="vastramAddToCart({id:'cream-chikankari',title:'Chikankari Kurta',price:2199,image:'assets/img/product-kurta-cream.png',size:'L',color:'Ivory'})">L</button>
              </div>
            </div>
          </div>
          <div class="product-card-info">
            <div class="product-card-eyebrow">Chikankari Kurta</div>
            <a href="product.php?id=cream-chikankari"><div class="product-card-title">Lucknawi Chikankari Kurta</div></a>
            <div class="product-card-price">₹2,199.00</div>
          </div>
        </div>

      </div><!-- .product-shelf -->
    </div><!-- .product-shelf-wrapper -->
  </div>
</section>

<!-- STORY SECTION -->
<section class="section-padding" style="background:var(--bg-page);">
  <div class="container">
    <div class="story-grid">
      <div class="story-image fade-up">
        <img src="assets/img/about-artisan.png" alt="Artisan crafting ethnic wear">
      </div>
      <div class="fade-up stagger-2">
        <div class="eyebrow mb-sm">Our Philosophy</div>
        <h2 style="font-family:var(--font-display);font-size:clamp(2rem,3.5vw,3rem);margin-bottom:1.5rem;">Woven From India's<br><em>Living Heritage</em></h2>
        <p style="color:var(--color-charcoal-muted);line-height:1.8;margin-bottom:1rem;">Every Vastram garment is a labour of love — handcrafted by master artisans in the weaving villages of Rajasthan, Banaras, and Lucknow. We work directly with families who have practised these crafts for seven generations.</p>
        <p style="color:var(--color-charcoal-muted);line-height:1.8;margin-bottom:2rem;">Our fabrics are GOTS certified organic. Our supply chain is transparent, our artisans are fairly compensated, and our carbon footprint is offset 3x.</p>
        <div style="display:flex;gap:3rem;margin-bottom:2rem;">
          <div><div style="font-family:var(--font-display);font-size:2.5rem;color:var(--color-gold-dark);">200+</div><div style="font-size:.75rem;font-weight:600;letter-spacing:.1em;text-transform:uppercase;color:var(--color-charcoal-muted);">Artisan Families</div></div>
          <div><div style="font-family:var(--font-display);font-size:2.5rem;color:var(--color-gold-dark);">7</div><div style="font-size:.75rem;font-weight:600;letter-spacing:.1em;text-transform:uppercase;color:var(--color-charcoal-muted);">Craft Traditions</div></div>
          <div><div style="font-family:var(--font-display);font-size:2.5rem;color:var(--color-gold-dark);">100%</div><div style="font-size:.75rem;font-weight:600;letter-spacing:.1em;text-transform:uppercase;color:var(--color-charcoal-muted);">Organic Fabrics</div></div>
        </div>
        <a href="about.php" class="btn btn-primary">Discover Our Story</a>
      </div>
    </div>
  </div>
</section>

<!-- WEDDING COLLECTION BANNER -->
<section style="position:relative;height:60vh;overflow:hidden;display:flex;align-items:center;justify-content:center;text-align:center;">
  <img src="assets/img/collection-wedding.png" alt="Wedding Collection" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;">
  <div style="position:absolute;inset:0;background:rgba(28,28,30,.55);"></div>
  <div style="position:relative;z-index:2;color:white;" class="fade-up">
    <div class="eyebrow" style="color:var(--color-gold);margin-bottom:1rem;">Exclusive Collection</div>
    <h2 style="font-family:var(--font-display);font-size:clamp(2.5rem,6vw,5rem);color:white;margin-bottom:1.5rem;line-height:1.05;">The Royal Wedding<br><em>Edit 2026</em></h2>
    <a href="shop.php?cat=wedding" class="btn btn-gold btn-lg">Shop Wedding Wear</a>
  </div>
</section>

<!-- JOURNAL PREVIEW -->
<section class="section-padding" style="background:var(--bg-offwhite);">
  <div class="container">
    <div class="carousel-header fade-up">
      <div>
        <div class="eyebrow mb-sm">Artisan Journal</div>
        <h2 style="font-family:var(--font-display);font-size:clamp(1.8rem,3vw,2.5rem);">Stories from the Loom</h2>
      </div>
      <a href="blog.php" class="btn btn-ghost" style="font-size:.72rem;">Read All Stories <i data-lucide="arrow-right" style="width:16px;height:16px;"></i></a>
    </div>
    <div class="grid grid-3 fade-up stagger-1">
      <a href="blog-detail.php?id=indigo-master" class="blog-card">
        <div class="blog-card-img">
          <img src="assets/img/blog-artisan.png" alt="The Indigo Master">
        </div>
        <div class="blog-card-category">Craft Heritage</div>
        <div class="blog-card-title">The Master of Indigo Dyeing</div>
        <div class="blog-card-excerpt">How Harish Chandra preserves a 400-year-old tradition in the lanes of Sanganer.</div>
        <div class="blog-card-meta">June 2026 · 5 min read</div>
      </a>
      <a href="blog-detail.php?id=sherwani-history" class="blog-card">
        <div class="blog-card-img">
          <img src="assets/img/product-sherwani-gold.png" alt="History of Sherwani">
        </div>
        <div class="blog-card-category">Heritage</div>
        <div class="blog-card-title">The Sherwani: From Mughal Courts to Modern Mandaps</div>
        <div class="blog-card-excerpt">Tracing the evolution of India's most regal garment across five centuries.</div>
        <div class="blog-card-meta">May 2026 · 7 min read</div>
      </a>
      <a href="blog-detail.php?id=styling-guide" class="blog-card">
        <div class="blog-card-img">
          <img src="assets/img/product-nehru-navy.png" alt="How to Style">
        </div>
        <div class="blog-card-category">Style Guide</div>
        <div class="blog-card-title">How to Style a Nehru Jacket for Every Occasion</div>
        <div class="blog-card-excerpt">From boardroom to baraat — the ultimate guide to wearing ethnic fusion.</div>
        <div class="blog-card-meta">April 2026 · 4 min read</div>
      </a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

<!-- Hero Slider Script -->
<script>
(function() {
  const slides = document.querySelectorAll('.hero-slide');
  const dots   = document.querySelectorAll('.slider-dot');
  const heroes = [
    { eyebrow: 'Wedding Collection 2026', title: 'Draped in<br><em>Tradition.</em>', subtitle: 'Handcrafted in India · Worn by Kings' },
    { eyebrow: 'Festive Kurtas',          title: 'Wear the<br><em>Heritage.</em>',   subtitle: 'Artisan Handloom · GOTS Certified' },
    { eyebrow: 'The Royal Edit',          title: 'Regal by<br><em>Nature.</em>',     subtitle: 'Zardozi · Banarasi · Chikankari' }
  ];
  let current = 0;
  let timer;

  function goTo(n) {
    slides[current].classList.remove('active');
    dots[current].classList.remove('active');
    current = (n + slides.length) % slides.length;
    slides[current].classList.add('active');
    dots[current].classList.add('active');
    document.getElementById('hero-eyebrow').textContent = heroes[current].eyebrow;
    document.getElementById('hero-title').innerHTML = heroes[current].title;
    document.getElementById('hero-subtitle').textContent = heroes[current].subtitle;
  }

  function autoSlide() { timer = setInterval(() => goTo(current + 1), 5000); }

  dots.forEach(d => d.addEventListener('click', () => { clearInterval(timer); goTo(+d.dataset.target); autoSlide(); }));
  autoSlide();

  // Shelf carousel
  const shelf = document.getElementById('bestseller-shelf');
  document.getElementById('shelf-prev')?.addEventListener('click', () => shelf.scrollBy({ left: -320, behavior: 'smooth' }));
  document.getElementById('shelf-next')?.addEventListener('click', () => shelf.scrollBy({ left: 320, behavior: 'smooth' }));
})();
</script>
