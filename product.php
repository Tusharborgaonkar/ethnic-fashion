<?php 
// Mock product data mapping
$productId = isset($_GET['id']) ? $_GET['id'] : 'sage-kurta';

$productData = [
  'royal-sherwani' => [
    'title' => 'Royal Zardozi Sherwani',
    'price' => 7499,
    'cat' => 'Wedding Sherwani',
    'desc' => 'A magnificent ivory and gold sherwani crafted for the modern groom. Featuring intricate hand-embroidered zardozi work by master artisans in Banaras, this piece exudes regal elegance. The tailored fit ensures a majestic silhouette.',
    'images' => ['assets/img/product-sherwani-gold.png', 'assets/img/hero-sherwani.png', 'assets/img/product-kurta-cream.png', 'assets/img/product-kurta-maroon.png'],
    'colors' => [['name' => 'Ivory Gold', 'hex' => '#F5EBD5'], ['name' => 'Maroon', 'hex' => '#7B1F1F']]
  ],
  'sage-kurta' => [
    'title' => 'Handloom Cotton Kurta',
    'price' => 1799,
    'cat' => 'Handloom Kurta',
    'desc' => 'Woven from 100% GOTS certified organic cotton, this sage green kurta offers breathable comfort and timeless style. Features subtle thread embroidery along the placket and cuffs. Perfect for festive gatherings or smart casual occasions.',
    'images' => ['assets/img/product-kurta-sage.png', 'assets/img/product-kurta-cream.png', 'assets/img/product-kurta-maroon.png', 'assets/img/hero-kurta.png'],
    'colors' => [['name' => 'Sage Green', 'hex' => '#8FA98C'], ['name' => 'Ivory', 'hex' => '#FAF4EC']]
  ],
  'navy-nehru' => [
    'title' => 'Heritage Linen Nehru Jacket',
    'price' => 3299,
    'cat' => 'Nehru Jacket',
    'desc' => 'Elevate your ethnic ensemble with this sharply tailored navy blue Nehru jacket. Cut from premium pure linen, it features a classic mandarin collar, welt pockets, and custom brass buttons. Versatile enough to pair with kurtas or formal shirts.',
    'images' => ['assets/img/product-nehru-navy.png', 'assets/img/product-indo-western.png', 'assets/img/product-kurta-sage.png', 'assets/img/hero-kurta.png'],
    'colors' => [['name' => 'Navy Blue', 'hex' => '#1C3557'], ['name' => 'Deep Olive', 'hex' => '#3D4432']]
  ]
];

// Fallback to sage kurta if ID not found
if(!isset($productData[$productId])) {
    $productId = 'sage-kurta';
}

$product = $productData[$productId];
$primaryImg = $product['images'][0];

include 'includes/header.php'; 
?>

<div style="background:var(--bg-page);padding-top:120px;">
  <div class="container">
    <div class="breadcrumb fade-up">
      <a href="index.php">Home</a> <span class="breadcrumb-sep">/</span> <a href="shop.php">Shop</a> <span class="breadcrumb-sep">/</span> <span><?php echo $product['title']; ?></span>
    </div>

    <div class="product-page-grid fade-up stagger-1 mb-xl">
      <!-- Left: Images -->
      <div class="product-gallery">
        <div class="gallery-main" id="main-image-container">
          <img src="<?php echo $primaryImg; ?>" alt="<?php echo $product['title']; ?>" id="main-image">
        </div>
        <div class="gallery-thumbs">
          <?php foreach($product['images'] as $index => $img): ?>
          <div class="gallery-thumb <?php echo $index === 0 ? 'active' : ''; ?>" onclick="changeImage('<?php echo $img; ?>', this)">
            <img src="<?php echo $img; ?>" alt="Thumbnail <?php echo $index+1; ?>">
          </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Right: Details -->
      <div class="product-sticky-details">
        <span class="product-category-eyebrow"><?php echo $product['cat']; ?></span>
        <h1 style="font-family:var(--font-display);font-size:clamp(2rem,4vw,3rem);line-height:1.1;color:var(--color-charcoal);"><?php echo $product['title']; ?></h1>
        <div class="product-price-large">₹<?php echo number_format($product['price'], 2); ?></div>
        
        <p class="product-description-excerpt"><?php echo $product['desc']; ?></p>
        
        <!-- Swatches -->
        <div style="margin-top:1.5rem;">
          <span class="option-label">Color: <span id="color-label" style="color:var(--color-charcoal);"><?php echo $product['colors'][0]['name']; ?></span></span>
          <div class="option-swatches-row">
            <?php foreach($product['colors'] as $index => $color): ?>
            <div class="color-swatch-large <?php echo $index === 0 ? 'active' : ''; ?>" 
                 style="background:<?php echo $color['hex']; ?>;" 
                 onclick="selectColor(this, '<?php echo $color['name']; ?>')"
                 title="<?php echo $color['name']; ?>"></div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Sizes -->
        <div style="margin-top:1.5rem;">
          <div style="display:flex;justify-content:space-between;align-items:center;">
            <span class="option-label">Size: <span id="size-label" style="color:var(--color-charcoal);">M (38)</span></span>
            <button style="background:none;border:none;font-size:0.75rem;text-decoration:underline;color:var(--color-charcoal-muted);cursor:pointer;">Size Guide</button>
          </div>
          <div class="option-swatches-row">
            <button class="option-size-pill" onclick="selectSize(this, 'S')">S</button>
            <button class="option-size-pill active" onclick="selectSize(this, 'M')">M</button>
            <button class="option-size-pill" onclick="selectSize(this, 'L')">L</button>
            <button class="option-size-pill" onclick="selectSize(this, 'XL')">XL</button>
            <button class="option-size-pill unavailable">XXL</button>
          </div>
        </div>

        <!-- Add to Bag -->
        <div class="buy-actions-wrapper" style="margin-top:2rem;">
          <div class="qty-input-group">
            <button class="qty-btn" onclick="updateLocalQty(-1)">−</button>
            <span class="qty-val" id="pd-qty">1</span>
            <button class="qty-btn" onclick="updateLocalQty(1)">+</button>
          </div>
          <button class="btn btn-primary btn-full btn-lg" id="add-to-cart-btn" style="height:48px;" onclick="addCurrentToCart()">Add to Bag — ₹<?php echo number_format($product['price'], 2); ?></button>
        </div>
        
        <div style="margin-top:1.5rem;font-size:0.8rem;color:var(--color-charcoal-muted);display:flex;align-items:center;gap:8px;">
          <i data-lucide="truck" style="width:16px;height:16px;"></i> Complimentary shipping on this order.
        </div>

        <!-- Accordions -->
        <div class="product-accords-wrapper">
          <div class="accord-item active">
            <button class="accord-trigger" onclick="toggleAccord(this)">
              Product Details <span class="accord-icon">+</span>
            </button>
            <div class="accord-content" style="max-height:500px;">
              <div class="accord-content-inner">
                <p>Designed for unparalleled elegance, this garment represents the pinnacle of Indian craftsmanship.</p>
                <ul>
                  <li>100% Handloom Fabric</li>
                  <li>Intricate artisan embroidery</li>
                  <li>Tailored comfort fit</li>
                  <li>Ethically sourced materials</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accord-item">
            <button class="accord-trigger" onclick="toggleAccord(this)">
              Care Instructions <span class="accord-icon">+</span>
            </button>
            <div class="accord-content">
              <div class="accord-content-inner">
                <ul>
                  <li>Dry clean only for embellished pieces</li>
                  <li>Do not bleach or tumble dry</li>
                  <li>Warm iron on reverse side</li>
                  <li>Store in a breathable cotton garment bag</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accord-item">
            <button class="accord-trigger" onclick="toggleAccord(this)">
              Shipping & Returns <span class="accord-icon">+</span>
            </button>
            <div class="accord-content">
              <div class="accord-content-inner">
                <p><strong>Shipping:</strong> Dispatched within 48 hours. Delivery in 3-5 business days across India.</p>
                <p><strong>Returns:</strong> 7-day hassle-free returns for unworn items with tags intact. Custom tailored items are non-refundable.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- RELATED PRODUCTS -->
<section class="section-padding" style="background:var(--bg-offwhite);border-top:1px solid var(--color-border);">
  <div class="container">
    <div class="text-center mb-md fade-up">
      <h2 style="font-family:var(--font-display);font-size:2rem;">Complete the Look</h2>
    </div>
    <div class="product-shelf-wrapper fade-up stagger-1" style="display:flex;justify-content:center;">
      <div class="product-shelf">
        <!-- Reusing mock product card structure -->
        <div class="product-card" style="min-width:260px;">
          <div class="product-card-img-wrap">
            <a href="product.php?id=maroon-silk"><img src="assets/img/product-kurta-maroon.png" alt="Maroon Silk"></a>
          </div>
          <div class="product-card-info">
            <div class="product-card-title">Maroon Silk Thread Kurta</div>
            <div class="product-card-price">₹2,399.00</div>
          </div>
        </div>
        <div class="product-card" style="min-width:260px;">
          <div class="product-card-img-wrap">
            <a href="product.php?id=sage-kurta"><img src="assets/img/product-kurta-sage.png" alt="Sage Kurta"></a>
          </div>
          <div class="product-card-info">
            <div class="product-card-title">Handloom Cotton Kurta</div>
            <div class="product-card-price">₹1,799.00</div>
          </div>
        </div>
        <div class="product-card" style="min-width:260px;">
          <div class="product-card-img-wrap">
            <a href="product.php?id=cream-chikankari"><img src="assets/img/product-kurta-cream.png" alt="Cream Kurta"></a>
          </div>
          <div class="product-card-info">
            <div class="product-card-title">Lucknawi Chikankari Kurta</div>
            <div class="product-card-price">₹2,199.00</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
let pdSelectedColor = '<?php echo $product['colors'][0]['name']; ?>';
let pdSelectedSize = 'M';
let pdQty = 1;
const pdBasePrice = <?php echo $product['price']; ?>;

function changeImage(src, thumb) {
  document.getElementById('main-image').src = src;
  document.querySelectorAll('.gallery-thumb').forEach(t => t.classList.remove('active'));
  thumb.classList.add('active');
}

function selectColor(el, name) {
  document.querySelectorAll('.color-swatch-large').forEach(s => s.classList.remove('active'));
  el.classList.add('active');
  document.getElementById('color-label').textContent = name;
  pdSelectedColor = name;
}

function selectSize(el, size) {
  document.querySelectorAll('.option-size-pill').forEach(s => s.classList.remove('active'));
  el.classList.add('active');
  document.getElementById('size-label').textContent = size;
  pdSelectedSize = size;
}

function updateLocalQty(delta) {
  pdQty = Math.max(1, pdQty + delta);
  document.getElementById('pd-qty').textContent = pdQty;
  document.getElementById('add-to-cart-btn').innerHTML = `Add to Bag — ₹${(pdBasePrice * pdQty).toLocaleString('en-IN')}.00`;
}

function toggleAccord(btn) {
  const item = btn.closest('.accord-item');
  const content = item.querySelector('.accord-content');
  const isActive = item.classList.contains('active');
  
  // Close all
  document.querySelectorAll('.accord-item').forEach(i => {
    i.classList.remove('active');
    i.querySelector('.accord-content').style.maxHeight = null;
  });
  
  if (!isActive) {
    item.classList.add('active');
    content.style.maxHeight = content.scrollHeight + "px";
  }
}

function addCurrentToCart() {
  const btn = document.getElementById('add-to-cart-btn');
  btn.classList.add('loading');
  
  setTimeout(() => {
    btn.classList.remove('loading');
    vastramAddToCart({
      id: '<?php echo $productId; ?>',
      title: '<?php echo $product['title']; ?>',
      price: pdBasePrice,
      image: '<?php echo $primaryImg; ?>',
      size: pdSelectedSize,
      color: pdSelectedColor,
      quantity: pdQty
    });
  }, 500);
}
</script>

<?php include 'includes/footer.php'; ?>
