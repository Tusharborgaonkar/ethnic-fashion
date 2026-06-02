<?php
// Dynamic product database array
$products = [
    'organic-tee' => [
        'id' => 'organic-tee',
        'title' => 'Handloom Cotton Kurta',
        'price' => 1499,
        'category' => 'Organic Cotton Kurtas',
        'desc' => 'Our signature daily wear kurta is handcrafted from 100% GOTS certified handloom cotton. Features a relaxed straight fit, traditional wooden button trims, and a carbon neutral footprint offset by 3x.',
        'images' => [
            'assets/img/product-tee.png',
            'assets/img/product-hoodie.png',
            'assets/img/product-pants.png'
        ],
        'colors' => [
            'Sage Green' => '#A2B29F',
            'Warm Sand' => '#E8D3C9'
        ],
        'sizes' => ['S', 'M', 'L']
    ],
    'linen-pants' => [
        'id' => 'linen-pants',
        'title' => 'Banarasi Silk Dupatta',
        'price' => 2499,
        'category' => 'Banarasi Silk Dupattas',
        'desc' => 'Premium heritage dupatta hand-woven in Banaras from organic spun silk. Features subtle gold zari floral borders, natural textured weave, and clean selvedge finishing.',
        'images' => [
            'assets/img/product-pants.png',
            'assets/img/product-tee.png',
            'assets/img/product-hoodie.png'
        ],
        'colors' => [
            'Cream' => '#FAF9F6',
            'Charcoal Black' => '#2F3E46'
        ],
        'sizes' => ['M', 'L', 'XL']
    ],
    'heavy-hoodie' => [
        'id' => 'heavy-hoodie',
        'title' => 'Artisan Chanderi Jacket',
        'price' => 3999,
        'category' => 'Artisan Jackets',
        'desc' => 'A structured overlay jacket handcrafted from authentic 450gsm Chanderi organic cotton-silk blend. Features hand-printed block motifs, side vents, and clean cotton inner lining.',
        'images' => [
            'assets/img/product-hoodie.png',
            'assets/img/product-pants.png',
            'assets/img/product-tee.png'
        ],
        'colors' => [
            'Charcoal' => '#222222',
            'Warm Sand' => '#E8D3C9'
        ],
        'sizes' => ['S', 'M', 'L']
    ]
];

// Read routing parameter
$prodId = isset($_GET['id']) ? $_GET['id'] : 'organic-tee';

// Default routing fallback
if (!array_key_exists($prodId, $products)) {
    $prodId = 'organic-tee';
}

$product = $products[$prodId];
?>

<?php include 'includes/header.php'; ?>

<!-- MAIN PRODUCT DISPLAY (MudAura Column Structure + SuperYou Buttons) -->
<main class="container" style="padding-top: 150px; padding-bottom: var(--spacing-xl); background-color: var(--bg-offwhite);">
  <div class="product-page-grid">
    
    <!-- LEFT COLUMN: IMAGE GALLERY -->
    <div class="product-gallery">
      <!-- Main view -->
      <div class="gallery-main fade-up-trigger">
        <img src="<?php echo $product['images'][0]; ?>" id="main-product-img" alt="<?php echo $product['title']; ?>">
      </div>
      <!-- Thumbnails list -->
      <div class="gallery-thumbs fade-up-trigger">
        <?php foreach ($product['images'] as $index => $imgUrl): ?>
          <div class="gallery-thumb <?php echo $index === 0 ? 'active' : ''; ?>" onclick="changeMainImage(this, '<?php echo $imgUrl; ?>')">
            <img src="<?php echo $imgUrl; ?>" alt="Thumbnail <?php echo $index + 1; ?>">
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- RIGHT COLUMN: STICKY PURCHASE PANEL -->
    <div class="product-sticky-details">
      <!-- Category breadcrumb -->
      <span class="product-category-eyebrow"><?php echo $product['category']; ?></span>
      
      <!-- Title & Price (SuperYou bold text look) -->
      <h2 style="font-size: 2.5rem; text-transform: uppercase; margin-bottom: 4px;"><?php echo $product['title']; ?></h2>
      <div class="product-price-large">₹<?php echo number_format($product['price'], 2); ?></div>

      <!-- Description excerpt -->
      <p class="product-description-excerpt"><?php echo $product['desc']; ?></p>

      <hr style="border: 0; border-top: 1px solid var(--color-border); margin: var(--spacing-xs) 0;">

      <!-- VARIANT SELECTORS Form state -->
      <div style="display: flex; flex-direction: column; gap: var(--spacing-md);">
        
        <!-- Color swatches -->
        <div class="option-selector-wrap">
          <span class="option-label">Color: <strong id="selected-color-label"><?php echo key($product['colors']); ?></strong></span>
          <div class="option-swatches-row">
            <?php $firstColor = true; ?>
            <?php foreach ($product['colors'] as $colorName => $colorHex): ?>
              <span 
                class="color-swatch-large <?php echo $firstColor ? 'active' : ''; ?>" 
                style="background-color: <?php echo $colorHex; ?>;" 
                title="<?php echo $colorName; ?>"
                onclick="selectColor(this, '<?php echo $colorName; ?>')">
              </span>
              <?php $firstColor = false; ?>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Size Selection pills -->
        <div class="option-selector-wrap">
          <span class="option-label">Size: <strong id="selected-size-label"><?php echo $product['sizes'][0]; ?></strong></span>
          <div class="option-swatches-row">
            <?php foreach ($product['sizes'] as $index => $sizeVal): ?>
              <button 
                class="option-size-pill <?php echo $index === 0 ? 'active' : ''; ?>"
                onclick="selectSize(this, '<?php echo $sizeVal; ?>')">
                <?php echo $sizeVal; ?>
              </button>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Quantity and Action Buttons Row -->
        <div class="option-selector-wrap">
          <span class="option-label">Quantity</span>
          <div class="buy-actions-wrapper">
            <!-- Counter block -->
            <div class="qty-input-group">
              <button class="qty-btn" onclick="changeProductQuantity(-1)">-</button>
              <span class="qty-val" id="product-qty-val">1</span>
              <button class="qty-btn" onclick="changeProductQuantity(1)">+</button>
            </div>
            
            <!-- Animated Add to Cart Button (GSAP feedback trigger) -->
            <button class="btn btn-primary" id="add-to-cart-action-btn" onclick="triggerAddToCart()">
              Add to Bag
              <span class="btn-spinner"></span>
            </button>
          </div>
        </div>

      </div>

      <!-- DESCRIPTION ACCORDIONS (Mudaura Accordion panels) -->
      <div class="product-accords-wrapper">
        <!-- Item 1 -->
        <div class="accord-item active">
          <button class="accord-trigger">
            <span>Product Details</span>
            <span class="accord-icon">+</span>
          </button>
          <div class="accord-content" style="max-height: 200px;">
            <div class="accord-content-inner">
              Our organic cotton fabrics are GOTS (Global Organic Textile Standard) certified. Woven with double-twisted ringspun yarn for maximum structural integrity and comfort.
              <ul>
                <li>Carbon zero supply chain</li>
                <li>Low-impact water-based organic dyes</li>
                <li>Made ethically in Jaipur, India</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Item 2 -->
        <div class="accord-item">
          <button class="accord-trigger">
            <span>Sizing & Fit</span>
            <span class="accord-icon">+</span>
          </button>
          <div class="accord-content">
            <div class="accord-content-inner">
              Designed with a standard unisex fit. For men, we recommend purchasing your true size. For women looking for a structured standard fit, we recommend ordering one size down.
            </div>
          </div>
        </div>

        <!-- Item 3 -->
        <div class="accord-item">
          <button class="accord-trigger">
            <span>Care Instructions</span>
            <span class="accord-icon">+</span>
          </button>
          <div class="accord-content">
            <div class="accord-content-inner">
              Machine wash cold with mild organic detergents. Do not bleach. Tumble dry low or air dry naturally in the shade to maintain textile strength. Warm iron if necessary.
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</main>

<!-- In-page gallery & swatches controllers -->
<script>
let currentProductQty = 1;
let selectedProductSize = "<?php echo $product['sizes'][0]; ?>";
let selectedProductColor = "<?php echo key($product['colors']); ?>";

// Dynamic Main image switcher
function changeMainImage(thumbEl, imgUrl) {
  // Reset active classes
  document.querySelectorAll(".gallery-thumb").forEach(t => t.classList.remove("active"));
  // Add class
  thumbEl.classList.add("active");
  // Set main source
  document.getElementById("main-product-img").src = imgUrl;
}

// Swatch Color selector
function selectColor(swatchEl, colorName) {
  document.querySelectorAll(".color-swatch-large").forEach(s => s.classList.remove("active"));
  swatchEl.classList.add("active");
  document.getElementById("selected-color-label").textContent = colorName;
  selectedProductColor = colorName;
}

// Size selector
function selectSize(sizeEl, sizeVal) {
  document.querySelectorAll(".option-size-pill").forEach(s => s.classList.remove("active"));
  sizeEl.classList.add("active");
  document.getElementById("selected-size-label").textContent = sizeVal;
  selectedProductSize = sizeVal;
}

// Quantity Counter
function changeProductQuantity(delta) {
  currentProductQty += delta;
  if (currentProductQty < 1) currentProductQty = 1;
  document.getElementById("product-qty-val").textContent = currentProductQty;
}

// Trigger Add to Cart with loader animation
function triggerAddToCart() {
  const btn = document.getElementById("add-to-cart-action-btn");
  if (!btn) return;
  
  // Show Loading Spinner state
  btn.classList.add("loading");
  
  // Mock async loading delay (Arih-style feedback)
  setTimeout(() => {
    btn.classList.remove("loading");
    
    // Trigger global yahuuuAddToCart
    window.yahuuuAddToCart({
      id: "<?php echo $product['id']; ?>",
      title: "<?php echo $product['title']; ?>",
      price: <?php echo $product['price']; ?>,
      image: "<?php echo $product['images'][0]; ?>",
      size: selectedProductSize,
      color: selectedProductColor,
      quantity: currentProductQty
    });
    
    // Reset quantity input
    currentProductQty = 1;
    document.getElementById("product-qty-val").textContent = currentProductQty;
  }, 800);
}
</script>

<?php include 'includes/footer.php'; ?>
