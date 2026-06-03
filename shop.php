<?php 
// Mock product data for the shop
$category = isset($_GET['cat']) ? htmlspecialchars($_GET['cat']) : 'all';

$products = [
  ['id' => 'royal-sherwani', 'title' => 'Royal Zardozi Sherwani', 'price' => 7499, 'img' => 'assets/img/product-sherwani-gold.png', 'cat' => 'sherwanis', 'badge' => 'Only 3 Left', 'badgeClass' => 'low'],
  ['id' => 'sage-kurta', 'title' => 'Handloom Cotton Kurta', 'price' => 1799, 'img' => 'assets/img/product-kurta-sage.png', 'cat' => 'kurtas', 'badge' => 'New Arrival', 'badgeClass' => 'new'],
  ['id' => 'navy-nehru', 'title' => 'Heritage Linen Nehru Jacket', 'price' => 3299, 'img' => 'assets/img/product-nehru-navy.png', 'cat' => 'nehru', 'badge' => '', 'badgeClass' => ''],
  ['id' => 'maroon-silk', 'title' => 'Maroon Silk Thread Kurta', 'price' => 2399, 'original_price' => 2999, 'img' => 'assets/img/product-kurta-maroon.png', 'cat' => 'kurtas', 'badge' => '20% Off', 'badgeClass' => 'sale'],
  ['id' => 'indo-western-jacket', 'title' => 'Mandarin Collar Fusion Jacket', 'price' => 4599, 'img' => 'assets/img/product-indo-western.png', 'cat' => 'indo-western', 'badge' => '', 'badgeClass' => ''],
  ['id' => 'cream-chikankari', 'title' => 'Lucknawi Chikankari Kurta', 'price' => 2199, 'img' => 'assets/img/product-kurta-cream.png', 'cat' => 'kurtas', 'badge' => 'Artisan Pick', 'badgeClass' => 'new']
];

// Duplicate products to fill the grid for demo purposes
$allProducts = array_merge($products, $products);

$filtered = [];
if ($category === 'all') {
    $filtered = $allProducts;
} else {
    foreach ($allProducts as $p) {
        if ($p['cat'] === $category) {
            $filtered[] = $p;
        }
    }
}
$pageTitle = 'Shop Collection';
if ($category === 'kurtas') $pageTitle = 'Handloom Kurtas';
if ($category === 'sherwanis') $pageTitle = 'Wedding Sherwanis';
if ($category === 'nehru') $pageTitle = 'Nehru Jackets';
if ($category === 'indo-western') $pageTitle = 'Indo-Western Fusion';
if ($category === 'wedding') $pageTitle = 'Wedding Wear';
if ($category === 'festive') $pageTitle = 'Festive Collection';

include 'includes/header.php'; 
?>

<!-- PAGE HEADER -->
<div class="page-header">
  <div class="container">
    <div class="breadcrumb" style="justify-content:center;">
      <a href="index.php">Home</a> <span class="breadcrumb-sep">/</span> <span>Shop</span> <?php if($category !== 'all'): ?><span class="breadcrumb-sep">/</span> <span><?php echo $pageTitle; ?></span><?php endif; ?>
    </div>
    <h1><?php echo $pageTitle; ?></h1>
    <p style="color:rgba(255,255,255,.7);max-width:600px;margin:1rem auto 0;font-size:0.95rem;">Explore our meticulously handcrafted collection of men's ethnic wear. Each piece is woven with India's rich heritage and designed for the modern gentleman.</p>
  </div>
</div>

<section class="section-padding" style="background:var(--bg-page);">
  <div class="container">
    
    <!-- FILTERS -->
    <div class="filters-bar fade-up">
      <div class="filters-group">
        <select class="filter-select" onchange="window.location.href='shop.php?cat='+this.value">
          <option value="all" <?php echo $category==='all'?'selected':''; ?>>All Categories</option>
          <option value="kurtas" <?php echo $category==='kurtas'?'selected':''; ?>>Kurtas</option>
          <option value="sherwanis" <?php echo $category==='sherwanis'?'selected':''; ?>>Sherwanis</option>
          <option value="nehru" <?php echo $category==='nehru'?'selected':''; ?>>Nehru Jackets</option>
          <option value="indo-western" <?php echo $category==='indo-western'?'selected':''; ?>>Indo-Western</option>
        </select>
        <select class="filter-select desktop-only">
          <option>Size: All</option>
          <option>S (36)</option>
          <option>M (38)</option>
          <option>L (40)</option>
          <option>XL (42)</option>
        </select>
        <select class="filter-select desktop-only">
          <option>Color: All</option>
          <option>Ivory / Gold</option>
          <option>Navy / Charcoal</option>
          <option>Earth / Terracotta</option>
        </select>
      </div>
      <div class="filters-group">
        <select class="filter-select">
          <option>Sort: Recommended</option>
          <option>Newest Arrivals</option>
          <option>Price: Low to High</option>
          <option>Price: High to Low</option>
        </select>
      </div>
    </div>
    
    <div style="font-size:0.8rem;color:var(--color-charcoal-muted);margin-bottom:var(--spacing-md);" class="fade-up">
      Showing <?php echo count($filtered); ?> products
    </div>

    <!-- PRODUCT GRID -->
    <?php if(count($filtered) > 0): ?>
    <div class="grid grid-4 fade-up stagger-1">
      <?php foreach($filtered as $idx => $item): ?>
      <div class="product-card">
        <?php if($item['badge']): ?>
        <span class="stock-tag <?php echo $item['badgeClass']; ?>"><?php echo $item['badge']; ?></span>
        <?php endif; ?>
        <div class="product-card-img-wrap">
          <a href="product.php?id=<?php echo $item['id']; ?>">
            <img src="<?php echo $item['img']; ?>" alt="<?php echo $item['title']; ?>">
          </a>
          <div class="product-card-overlay">
            <div class="product-card-sizes">
              <button class="card-size-btn" onclick="vastramAddToCart({id:'<?php echo $item['id']; ?>',title:'<?php echo $item['title']; ?>',price:<?php echo $item['price']; ?>,image:'<?php echo $item['img']; ?>',size:'S',color:'Default'})">S</button>
              <button class="card-size-btn" onclick="vastramAddToCart({id:'<?php echo $item['id']; ?>',title:'<?php echo $item['title']; ?>',price:<?php echo $item['price']; ?>,image:'<?php echo $item['img']; ?>',size:'M',color:'Default'})">M</button>
              <button class="card-size-btn" onclick="vastramAddToCart({id:'<?php echo $item['id']; ?>',title:'<?php echo $item['title']; ?>',price:<?php echo $item['price']; ?>,image:'<?php echo $item['img']; ?>',size:'L',color:'Default'})">L</button>
              <button class="card-size-btn" onclick="vastramAddToCart({id:'<?php echo $item['id']; ?>',title:'<?php echo $item['title']; ?>',price:<?php echo $item['price']; ?>,image:'<?php echo $item['img']; ?>',size:'XL',color:'Default'})">XL</button>
            </div>
          </div>
        </div>
        <div class="product-card-info">
          <div class="product-card-eyebrow"><?php echo ucfirst(str_replace('-', ' ', $item['cat'])); ?></div>
          <a href="product.php?id=<?php echo $item['id']; ?>"><div class="product-card-title"><?php echo $item['title']; ?></div></a>
          <div class="product-card-price">
            <?php if(isset($item['original_price'])): ?>
            <span class="original">₹<?php echo number_format($item['original_price'], 2); ?></span>
            <?php endif; ?>
            ₹<?php echo number_format($item['price'], 2); ?>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    
    <div class="flex-center" style="margin-top:var(--spacing-xl);">
      <button class="btn btn-outline" onclick="this.classList.add('loading'); setTimeout(() => this.classList.remove('loading'), 1000);"><span class="btn-spinner"></span><span>Load More Products</span></button>
    </div>
    
    <?php else: ?>
    <div class="text-center" style="padding:var(--spacing-xl) 0;">
      <h3 style="margin-bottom:1rem;">No products found</h3>
      <p style="color:var(--color-charcoal-muted);margin-bottom:2rem;">Try changing your category filter.</p>
      <a href="shop.php" class="btn btn-primary">Clear Filters</a>
    </div>
    <?php endif; ?>

  </div>
</section>

<?php include 'includes/footer.php'; ?>
