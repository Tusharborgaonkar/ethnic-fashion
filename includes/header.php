<?php
// Detect current page for active nav state
$currentPage = basename($_SERVER['PHP_SELF'], '.php');
$isHome = ($currentPage === 'index');
$navTheme = $isHome ? 'homepage-nav' : '';

// Dynamic base path (works in subdirectories too)
$base = '/yahuuu/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vastram | Handcrafted Men's Ethnic Wear</title>
  <meta name="description" content="Vastram — Premium handcrafted Indian ethnic wear for men. Kurtas, Sherwanis, Nehru Jackets, Indo-Western and Wedding wear, made by master artisans.">

  <!-- Design System -->
  <link rel="stylesheet" href="<?php echo $base; ?>assets/css/style.css?v=<?php echo time(); ?>">

  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js" defer></script>

  <!-- Tailwind CDN (utility layer) -->
  <script src="https://cdn.tailwindcss.com" defer></script>
</head>
<body>

<!-- TOAST CONTAINER -->
<div class="toast-container" id="toast-container"></div>

<!-- CART DRAWER BACKDROP -->
<div class="drawer-backdrop" id="cart-backdrop"></div>

<!-- CART DRAWER -->
<div class="drawer" id="cart-drawer">
  <div class="drawer-header">
    <h3 class="drawer-title">Your Bag (<span id="drawer-count">0</span>)</h3>
    <button class="drawer-close" id="cart-close-btn" aria-label="Close cart">
      <i data-lucide="x"></i>
    </button>
  </div>
  <div class="drawer-body" id="cart-drawer-items">
    <div class="cart-empty" id="cart-empty-state">
      <div class="cart-empty-icon">🛍️</div>
      <p style="font-family:var(--font-display);font-size:1.2rem;margin-bottom:.5rem;">Your bag is empty</p>
      <p style="font-size:.85rem;color:var(--color-charcoal-muted);margin-bottom:1.5rem;">Add some ethnic elegance to your wardrobe.</p>
      <a href="<?php echo $base; ?>shop.php" class="btn btn-primary btn-sm">Browse Collection</a>
    </div>
  </div>
  <div class="drawer-footer" id="cart-footer" style="display:none;">
    <div style="display:flex;justify-content:space-between;margin-bottom:1rem;">
      <span style="font-weight:600;font-size:.9rem;text-transform:uppercase;letter-spacing:.08em;">Total</span>
      <span style="font-family:var(--font-display);font-size:1.4rem;" id="cart-total-display">₹0.00</span>
    </div>
    <a href="<?php echo $base; ?>checkout.php" class="btn btn-primary btn-full btn-lg" id="checkout-btn">Proceed to Checkout</a>
    <a href="<?php echo $base; ?>cart.php" class="btn btn-ghost btn-full" style="margin-top:.5rem;text-align:center;font-size:.72rem;">View Full Cart</a>
  </div>
</div>

<!-- MENU DRAWER BACKDROP -->
<div class="drawer-backdrop" id="menu-backdrop"></div>

<!-- MOBILE MENU DRAWER -->
<div class="drawer drawer-left" id="menu-drawer">
  <div class="drawer-header">
    <span class="logo-text">VAST<span>RAM</span></span>
    <button class="drawer-close" id="menu-close-btn" aria-label="Close menu">
      <i data-lucide="x"></i>
    </button>
  </div>
  <div class="drawer-body">
    <nav style="display:flex;flex-direction:column;gap:1.5rem;margin-bottom:2rem;">
      <a href="<?php echo $base; ?>index.php" class="<?php echo $currentPage==='index'?'text-gold':'' ?>" style="font-family:var(--font-display);font-size:1.5rem;">Home</a>
      <a href="<?php echo $base; ?>shop.php"  class="<?php echo $currentPage==='shop'?'text-gold':'' ?>"  style="font-family:var(--font-display);font-size:1.5rem;">Shop Collection</a>
      <a href="<?php echo $base; ?>about.php" class="<?php echo $currentPage==='about'?'text-gold':'' ?>" style="font-family:var(--font-display);font-size:1.5rem;">Our Heritage</a>
      <a href="<?php echo $base; ?>blog.php"  class="<?php echo $currentPage==='blog'?'text-gold':'' ?>"  style="font-family:var(--font-display);font-size:1.5rem;">Artisan Journal</a>
      <a href="<?php echo $base; ?>contact.php" class="<?php echo $currentPage==='contact'?'text-gold':'' ?>" style="font-family:var(--font-display);font-size:1.5rem;">Contact</a>
    </nav>
    <div style="border-top:1px solid var(--color-border);padding-top:1.5rem;">
      <p style="font-size:.72rem;font-weight:600;letter-spacing:.12em;text-transform:uppercase;color:var(--color-charcoal-muted);margin-bottom:.75rem;">Reach Us</p>
      <a href="mailto:hello@vastram.in" style="font-family:var(--font-display);font-size:1rem;">hello@vastram.in</a>
      <p style="font-size:.75rem;color:var(--color-charcoal-muted);margin-top:1.5rem;">© 2026 VASTRAM. Handcrafted Heritage.</p>
    </div>
  </div>
</div>

<!-- ANNOUNCEMENT BAR -->
<div class="announcement-bar">
  <div class="announcement-slider">
    <?php for($i=0;$i<4;$i++): ?>
    <div class="announcement-slide">
      <span>FREE SHIPPING ON ORDERS ABOVE ₹2499</span>
      <span class="sep">✦</span>
      <span>HANDCRAFTED BY MASTER ARTISANS</span>
      <span class="sep">✦</span>
      <span>USE CODE <strong>VASTRAM10</strong> FOR 10% OFF</span>
      <span class="sep">✦</span>
      <span>COMPLIMENTARY GIFT WRAPPING</span>
      <span class="sep">✦</span>
    </div>
    <?php endfor; ?>
  </div>
</div>

<!-- NAVBAR -->
<div class="navbar-wrapper <?php echo $navTheme; ?>" id="navbar-wrapper">
  <header class="navbar">
    <!-- Mobile: hamburger -->
    <button class="nav-icon-btn mobile-only" id="menu-toggle-btn" aria-label="Open menu">
      <i data-lucide="menu"></i>
    </button>

    <!-- Desktop: left nav -->
    <nav class="nav-links desktop-only">
      <a href="<?php echo $base; ?>index.php" class="nav-link-item <?php echo $currentPage==='index'?'active':''; ?>">Home</a>
      <a href="<?php echo $base; ?>shop.php"  class="nav-link-item <?php echo $currentPage==='shop'?'active':''; ?>">Shop</a>
      <a href="<?php echo $base; ?>about.php" class="nav-link-item <?php echo $currentPage==='about'?'active':''; ?>">Heritage</a>
      <a href="<?php echo $base; ?>blog.php"  class="nav-link-item <?php echo $currentPage==='blog' || $currentPage==='blog-detail'?'active':''; ?>">Journal</a>
      <a href="<?php echo $base; ?>contact.php" class="nav-link-item <?php echo $currentPage==='contact'?'active':''; ?>">Contact</a>
    </nav>

    <!-- Center: Logo -->
    <a href="<?php echo $base; ?>index.php" class="logo-center">
      <span class="logo-text">VAST<span>RAM</span></span>
    </a>

    <!-- Right: Actions -->
    <div class="nav-actions">
      <button class="nav-icon-btn" id="search-btn" aria-label="Search">
        <i data-lucide="search"></i>
      </button>
      <button class="nav-icon-btn desktop-only" aria-label="Account">
        <i data-lucide="user"></i>
      </button>
      <button class="nav-icon-btn" id="cart-toggle-btn" aria-label="Cart">
        <i data-lucide="shopping-bag"></i>
        <span class="cart-count" id="cart-nav-count">0</span>
      </button>
    </div>
  </header>
</div>
