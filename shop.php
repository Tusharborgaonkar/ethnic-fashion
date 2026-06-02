<?php include 'includes/header.php'; ?>

<!-- SHOP HEADER -->
<section class="section-padding" style="padding-top: 140px; background-color: var(--bg-sage);">
  <div class="container">
    <div style="max-width: 600px;">
      <span class="brand-serif-italic" style="font-size: 1.2rem; color: var(--color-accent-green);">GOTS Certified Heritage</span>
      <h1 class="reveal-text" style="line-height: 0.9;">Handcrafted Heritage</h1>
      <p style="margin-top: var(--spacing-sm);">
        Browse our carbon-negative wardrobe essentials. 100% organic cotton, hand-spun silk, and natural artisan vegetable dyes.
      </p>
    </div>
  </div>
</section>

<!-- MAIN SHOP GRID & FILTERS -->
<section class="section-padding" style="background-color: var(--bg-offwhite);">
  <div class="container">
    
    <!-- Filter and Sort Header Bar -->
    <div class="filters-bar">
      <div class="filters-group">
        <!-- Category selector -->
        <select class="filter-select" id="category-filter" aria-label="Filter by category">
          <option value="all">All Items</option>
          <option value="tee">Handloom Kurtas</option>
          <option value="pants">Silk Dupattas</option>
          <option value="hoodie">Artisan Jackets</option>
        </select>

        <!-- Color selector -->
        <select class="filter-select" id="color-filter" aria-label="Filter by color">
          <option value="all">All Colors</option>
          <option value="sage">Sage Green</option>
          <option value="sand">Warm Sand</option>
          <option value="cream">Cream</option>
          <option value="charcoal">Charcoal</option>
        </select>
      </div>

      <!-- Sorting -->
      <div>
        <select class="filter-select" id="sort-select" aria-label="Sort products">
          <option value="default">Sort: Default</option>
          <option value="price-asc">Price: Low to High</option>
          <option value="price-desc">Price: High to Low</option>
        </select>
      </div>
    </div>

    <!-- Product Grid container (Cascade entries) -->
    <div class="grid grid-cols-3 grid-cascade" id="shop-product-grid">
      
      <!-- Product 1 -->
      <div class="product-card" data-category="tee" data-color="sage" data-price="1499">
        <span class="stock-tag low">Only 4 Left</span>
        <div class="product-card-img-wrap">
          <a href="product.php?id=organic-tee">
            <img src="assets/img/product-tee.png" alt="Handloom Cotton Kurta - Sage Green">
            <img src="assets/img/product-hoodie.png" alt="Alternate view" class="product-card-img-hover">
          </a>
          <div class="product-card-overlay">
            <div class="product-card-sizes">
              <button class="card-size-btn" onclick="yahuuuAddToCart({id: 'organic-tee', title: 'Handloom Cotton Kurta', price: 1499, image: 'assets/img/product-tee.png', size: 'S', color: 'Sage Green'})">S</button>
              <button class="card-size-btn" onclick="yahuuuAddToCart({id: 'organic-tee', title: 'Handloom Cotton Kurta', price: 1499, image: 'assets/img/product-tee.png', size: 'M', color: 'Sage Green'})">M</button>
              <button class="card-size-btn" onclick="yahuuuAddToCart({id: 'organic-tee', title: 'Handloom Cotton Kurta', price: 1499, image: 'assets/img/product-tee.png', size: 'L', color: 'Sage Green'})">L</button>
            </div>
          </div>
        </div>
        <div class="product-card-info">
          <a href="product.php?id=organic-tee"><h4 class="product-card-title">Handloom Cotton Kurta - Sage</h4></a>
          <div class="product-card-price">₹1,499.00</div>
          <div class="product-card-swatches">
            <span class="swatch active" style="background-color: #A2B29F;" title="Sage Green" onclick="location.href='product.php?id=organic-tee'"></span>
            <span class="swatch" style="background-color: #E8D3C9;" title="Warm Sand" onclick="location.href='product.php?id=organic-tee'"></span>
          </div>
        </div>
      </div>

      <!-- Product 2 -->
      <div class="product-card" data-category="tee" data-color="sand" data-price="1499">
        <span class="stock-tag in-stock">Eco Best</span>
        <div class="product-card-img-wrap">
          <a href="product.php?id=organic-tee">
            <img src="assets/img/product-pants.png" alt="Handloom Cotton Kurta - Warm Sand">
            <img src="assets/img/product-tee.png" alt="Alternate view" class="product-card-img-hover">
          </a>
          <div class="product-card-overlay">
            <div class="product-card-sizes">
              <button class="card-size-btn" onclick="yahuuuAddToCart({id: 'organic-tee-sand', title: 'Handloom Cotton Kurta - Sand', price: 1499, image: 'assets/img/product-pants.png', size: 'S', color: 'Warm Sand'})">S</button>
              <button class="card-size-btn" onclick="yahuuuAddToCart({id: 'organic-tee-sand', title: 'Handloom Cotton Kurta - Sand', price: 1499, image: 'assets/img/product-pants.png', size: 'M', color: 'Warm Sand'})">M</button>
              <button class="card-size-btn" onclick="yahuuuAddToCart({id: 'organic-tee-sand', title: 'Handloom Cotton Kurta - Sand', price: 1499, image: 'assets/img/product-pants.png', size: 'L', color: 'Warm Sand'})">L</button>
            </div>
          </div>
        </div>
        <div class="product-card-info">
          <a href="product.php?id=organic-tee"><h4 class="product-card-title">Handloom Cotton Kurta - Sand</h4></a>
          <div class="product-card-price">₹1,499.00</div>
          <div class="product-card-swatches">
            <span class="swatch" style="background-color: #A2B29F;" title="Sage Green" onclick="location.href='product.php?id=organic-tee'"></span>
            <span class="swatch active" style="background-color: #E8D3C9;" title="Warm Sand" onclick="location.href='product.php?id=organic-tee'"></span>
          </div>
        </div>
      </div>

      <!-- Product 3 -->
      <div class="product-card" data-category="pants" data-color="cream" data-price="2499">
        <span class="stock-tag in-stock">Artisan Made</span>
        <div class="product-card-img-wrap">
          <a href="product.php?id=linen-pants">
            <img src="assets/img/product-pants.png" alt="Banarasi Silk Dupatta - Cream">
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
          <a href="product.php?id=linen-pants"><h4 class="product-card-title">Banarasi Silk Dupatta - Cream</h4></a>
          <div class="product-card-price">₹2,499.00</div>
          <div class="product-card-swatches">
            <span class="swatch active" style="background-color: #FAF9F6;" title="Cream" onclick="location.href='product.php?id=linen-pants'"></span>
            <span class="swatch" style="background-color: #222222;" title="Charcoal" onclick="location.href='product.php?id=linen-pants'"></span>
          </div>
        </div>
      </div>

      <!-- Product 4 -->
      <div class="product-card" data-category="pants" data-color="charcoal" data-price="2499">
        <div class="product-card-img-wrap">
          <a href="product.php?id=linen-pants">
            <img src="assets/img/product-hoodie.png" alt="Banarasi Silk Dupatta - Charcoal">
            <img src="assets/img/product-pants.png" alt="Alternate view" class="product-card-img-hover">
          </a>
          <div class="product-card-overlay">
            <div class="product-card-sizes">
              <button class="card-size-btn" onclick="yahuuuAddToCart({id: 'linen-pants-charcoal', title: 'Banarasi Silk Dupatta - Charcoal', price: 2499, image: 'assets/img/product-hoodie.png', size: 'M', color: 'Charcoal'})">M</button>
              <button class="card-size-btn" onclick="yahuuuAddToCart({id: 'linen-pants-charcoal', title: 'Banarasi Silk Dupatta - Charcoal', price: 2499, image: 'assets/img/product-hoodie.png', size: 'L', color: 'Charcoal'})">L</button>
            </div>
          </div>
        </div>
        <div class="product-card-info">
          <a href="product.php?id=linen-pants"><h4 class="product-card-title">Banarasi Silk Dupatta - Charcoal</h4></a>
          <div class="product-card-price">₹2,499.00</div>
          <div class="product-card-swatches">
            <span class="swatch" style="background-color: #FAF9F6;" title="Cream" onclick="location.href='product.php?id=linen-pants'"></span>
            <span class="swatch active" style="background-color: #222222;" title="Charcoal" onclick="location.href='product.php?id=linen-pants'"></span>
          </div>
        </div>
      </div>

      <!-- Product 5 -->
      <div class="product-card" data-category="hoodie" data-color="charcoal" data-price="3999">
        <span class="stock-tag low">Only 2 Left</span>
        <div class="product-card-img-wrap">
          <a href="product.php?id=heavy-hoodie">
            <img src="assets/img/product-hoodie.png" alt="Artisan Chanderi Jacket - Charcoal">
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
          <a href="product.php?id=heavy-hoodie"><h4 class="product-card-title">Artisan Chanderi Jacket - Charcoal</h4></a>
          <div class="product-card-price">₹3,999.00</div>
          <div class="product-card-swatches">
            <span class="swatch active" style="background-color: #222222;" title="Charcoal" onclick="location.href='product.php?id=heavy-hoodie'"></span>
            <span class="swatch" style="background-color: #E8D3C9;" title="Sand" onclick="location.href='product.php?id=heavy-hoodie'"></span>
          </div>
        </div>
      </div>

      <!-- Product 6 -->
      <div class="product-card" data-category="hoodie" data-color="sand" data-price="3999">
        <div class="product-card-img-wrap">
          <a href="product.php?id=heavy-hoodie">
            <img src="assets/img/product-tee.png" alt="Artisan Chanderi Jacket - Sand">
            <img src="assets/img/product-hoodie.png" alt="Alternate view" class="product-card-img-hover">
          </a>
          <div class="product-card-overlay">
            <div class="product-card-sizes">
              <button class="card-size-btn" onclick="yahuuuAddToCart({id: 'heavy-hoodie-sand', title: 'Artisan Chanderi Jacket - Sand', price: 3999, image: 'assets/img/product-tee.png', size: 'S', color: 'Warm Sand'})">S</button>
              <button class="card-size-btn" onclick="yahuuuAddToCart({id: 'heavy-hoodie-sand', title: 'Artisan Chanderi Jacket - Sand', price: 3999, image: 'assets/img/product-tee.png', size: 'M', color: 'Warm Sand'})">M</button>
              <button class="card-size-btn" onclick="yahuuuAddToCart({id: 'heavy-hoodie-sand', title: 'Artisan Chanderi Jacket - Sand', price: 3999, image: 'assets/img/product-tee.png', size: 'L', color: 'Warm Sand'})">L</button>
            </div>
          </div>
        </div>
        <div class="product-card-info">
          <a href="product.php?id=heavy-hoodie"><h4 class="product-card-title">Artisan Chanderi Jacket - Sand</h4></a>
          <div class="product-card-price">₹3,999.00</div>
          <div class="product-card-swatches">
            <span class="swatch" style="background-color: #222222;" title="Charcoal" onclick="location.href='product.php?id=heavy-hoodie'"></span>
            <span class="swatch active" style="background-color: #E8D3C9;" title="Sand" onclick="location.href='product.php?id=heavy-hoodie'"></span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Front-end Dynamic Filters Script (Arih Instant interactions) -->
<script>
document.addEventListener("DOMContentLoaded", function() {
  const categoryFilter = document.getElementById("category-filter");
  const colorFilter = document.getElementById("color-filter");
  const sortSelect = document.getElementById("sort-select");
  const productGrid = document.getElementById("shop-product-grid");
  const productCards = Array.from(document.querySelectorAll(".product-card"));

  function filterAndSortProducts() {
    const cat = categoryFilter.value;
    const col = colorFilter.value;
    const sortVal = sortSelect.value;

    // Filter
    productCards.forEach(card => {
      const matchesCat = (cat === "all" || card.dataset.category === cat);
      const matchesCol = (col === "all" || card.dataset.color === col);
      
      if (matchesCat && matchesCol) {
        card.style.display = "flex";
      } else {
        card.style.display = "none";
      }
    });

    // Sort visible cards
    let visibleCards = productCards.filter(card => card.style.display !== "none");
    
    if (sortVal === "price-asc") {
      visibleCards.sort((a, b) => Number(a.dataset.price) - Number(b.dataset.price));
    } else if (sortVal === "price-desc") {
      visibleCards.sort((a, b) => Number(b.dataset.price) - Number(a.dataset.price));
    }

    // Re-append items in order to grid
    visibleCards.forEach(card => {
      productGrid.appendChild(card);
    });

    // Re-animate layout using GSAP cascade for smooth transition
    if (typeof gsap !== "undefined") {
      gsap.fromTo(visibleCards, 
        { opacity: 0, scale: 0.95 },
        { opacity: 1, scale: 1, duration: 0.4, stagger: 0.05, ease: "power2.out" }
      );
    }
  }

  categoryFilter.addEventListener("change", filterAndSortProducts);
  colorFilter.addEventListener("change", filterAndSortProducts);
  sortSelect.addEventListener("change", filterAndSortProducts);
});
</script>

<?php include 'includes/footer.php'; ?>
