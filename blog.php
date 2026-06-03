<?php include 'includes/header.php'; ?>

<!-- PAGE HEADER -->
<div class="page-header" style="background:var(--bg-dark);padding:140px 0 80px;">
  <div class="container">
    <div class="eyebrow" style="color:var(--color-gold);margin-bottom:1rem;">Artisan Journal</div>
    <h1 style="color:white;font-size:clamp(2.5rem,5vw,4rem);margin-bottom:1rem;line-height:1.1;">Stories from the Loom</h1>
    <p style="color:rgba(255,255,255,.7);max-width:600px;margin:0 auto;font-size:1rem;">Delve into the rich histories, styling guides, and the unseen artistry behind India's finest ethnic menswear.</p>
  </div>
</div>

<section class="section-padding" style="background:var(--bg-page);min-height:60vh;">
  <div class="container">
    
    <!-- FEATURED ARTICLE -->
    <a href="blog-detail.php?id=indigo-master" class="blog-hero-card fade-up" style="text-decoration:none;">
      <div class="blog-card-img">
        <img src="assets/img/blog-artisan.png" alt="The Master of Indigo Dyeing">
      </div>
      <div>
        <div class="blog-card-category">Craft Heritage</div>
        <h2 class="blog-card-title">The Master of Indigo: Ancient Alchemy in a Modern World</h2>
        <p class="blog-card-excerpt" style="font-size:1rem;margin-bottom:1.5rem;">Exploring the life of Harish Chandra, a seventh-generation master dyer who finds divinity in the fermentation of natural pigments in the historic lanes of Sanganer.</p>
        <div class="blog-card-meta">June 12, 2026 · 5 min read</div>
      </div>
    </a>
    
    <div class="divider mb-xl fade-up"></div>

    <!-- ARTICLE GRID -->
    <div class="grid grid-3 fade-up stagger-1">
      <a href="blog-detail.php?id=sherwani-history" class="blog-card">
        <div class="blog-card-img">
          <img src="assets/img/product-sherwani-gold.png" alt="History of Sherwani">
        </div>
        <div class="blog-card-category">Heritage</div>
        <div class="blog-card-title">The Sherwani: From Mughal Courts to Modern Mandaps</div>
        <div class="blog-card-excerpt">Tracing the evolution of India's most regal garment across five centuries of changing royal aesthetics.</div>
        <div class="blog-card-meta">May 28, 2026 · 7 min read</div>
      </a>
      
      <a href="blog-detail.php?id=styling-guide" class="blog-card">
        <div class="blog-card-img">
          <img src="assets/img/product-nehru-navy.png" alt="How to Style">
        </div>
        <div class="blog-card-category">Style Guide</div>
        <div class="blog-card-title">How to Style a Nehru Jacket for Every Occasion</div>
        <div class="blog-card-excerpt">From the boardroom to the baraat — the ultimate guide to wearing ethnic fusion with effortless confidence.</div>
        <div class="blog-card-meta">April 15, 2026 · 4 min read</div>
      </a>
      
      <a href="blog-detail.php?id=cotton-care" class="blog-card">
        <div class="blog-card-img">
          <img src="assets/img/product-kurta-sage.png" alt="Handloom Cotton Care">
        </div>
        <div class="blog-card-category">Garment Care</div>
        <div class="blog-card-title">Preserving Handloom: The Organic Cotton Care Guide</div>
        <div class="blog-card-excerpt">Expert advice on washing, storing, and maintaining the crisp elegance of your handcrafted cotton kurtas.</div>
        <div class="blog-card-meta">March 02, 2026 · 3 min read</div>
      </a>
      
      <a href="blog-detail.php?id=wedding-trends" class="blog-card">
        <div class="blog-card-img">
          <img src="assets/img/collection-wedding.png" alt="Wedding Trends">
        </div>
        <div class="blog-card-category">Editorial</div>
        <div class="blog-card-title">Groomswear Trends: The 2026 Wedding Season</div>
        <div class="blog-card-excerpt">Move over heavy embellishments. This season is all about understated luxury, rich jewel tones, and impeccable tailoring.</div>
        <div class="blog-card-meta">February 18, 2026 · 6 min read</div>
      </a>
      
      <a href="blog-detail.php?id=chikankari" class="blog-card">
        <div class="blog-card-img">
          <img src="assets/img/product-kurta-cream.png" alt="Chikankari">
        </div>
        <div class="blog-card-category">Craft Focus</div>
        <div class="blog-card-title">Shadows in Thread: The Art of Lucknowi Chikankari</div>
        <div class="blog-card-excerpt">Understanding the 32 distinct stitches that make up the delicate and ethereal embroidery of Awadh.</div>
        <div class="blog-card-meta">January 05, 2026 · 5 min read</div>
      </a>
    </div>
    
    <!-- PAGINATION -->
    <div class="flex-center mt-xl fade-up">
      <div style="display:flex;gap:8px;">
        <span style="width:40px;height:40px;display:flex;align-items:center;justify-content:center;background:var(--color-charcoal);color:white;font-weight:600;font-size:0.9rem;">1</span>
        <a href="#" style="width:40px;height:40px;display:flex;align-items:center;justify-content:center;border:1px solid var(--color-border);color:var(--color-charcoal);font-weight:600;font-size:0.9rem;transition:all var(--transition-fast);" onmouseover="this.style.borderColor='var(--color-charcoal)'" onmouseout="this.style.borderColor='var(--color-border)'">2</a>
        <a href="#" style="width:40px;height:40px;display:flex;align-items:center;justify-content:center;border:1px solid var(--color-border);color:var(--color-charcoal);font-weight:600;font-size:0.9rem;transition:all var(--transition-fast);" onmouseover="this.style.borderColor='var(--color-charcoal)'" onmouseout="this.style.borderColor='var(--color-border)'">3</a>
        <a href="#" style="width:40px;height:40px;display:flex;align-items:center;justify-content:center;border:1px solid var(--color-border);color:var(--color-charcoal);transition:all var(--transition-fast);" onmouseover="this.style.borderColor='var(--color-charcoal)'" onmouseout="this.style.borderColor='var(--color-border)'"><i data-lucide="chevron-right" style="width:16px;height:16px;"></i></a>
      </div>
    </div>
    
  </div>
</section>

<?php include 'includes/footer.php'; ?>
