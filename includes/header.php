<?php
// Check if the current page is index.php (Homepage)
$is_home = (basename($_SERVER['PHP_SELF']) == 'index.php');
$nav_theme = $is_home ? 'homepage-nav' : 'standard-nav';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>YAHUUU | Handcrafted Indian Ethnic Wear & Heritage Textiles</title>
  <meta name="description" content="Yahuuu makes premium, planet-positive Indian ethnic wear. Handloom silks, organic block-print cottons, and carbon-neutral heritage wear.">
  
  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
</head>
<body>

  <!-- Load Shared Cart Drawer -->
  <?php include 'includes/cart-drawer.php'; ?>

  <!-- Navigation Menu Drawer (Mobile/Desktop off-canvas menu) -->
  <div class="drawer-backdrop" id="menu-backdrop"></div>
  <div class="drawer" id="menu-drawer">
    <div class="drawer-header">
      <h3 class="drawer-title">Menu</h3>
      <button class="drawer-close" id="menu-close-btn" aria-label="Close menu">
        <i data-lucide="x"></i>
      </button>
    </div>
    <div style="padding: var(--spacing-lg); display: flex; flex-direction: column; gap: var(--spacing-md); height: 100%;">
      <a href="index.php" class="nav-link" style="font-size: 1.5rem; margin-bottom: 0.5rem;">Home</a>
      <a href="shop.php" class="nav-link" style="font-size: 1.5rem; margin-bottom: 0.5rem;">Shop Collection</a>
      <a href="#" class="nav-link" style="font-size: 1.5rem; margin-bottom: 0.5rem;">Our Heritage</a>
      <a href="#" class="nav-link" style="font-size: 1.5rem; margin-bottom: 0.5rem;">Artisan Journal</a>
      
      <div style="margin-top: auto; border-top: 1px solid var(--color-border); padding-top: var(--spacing-md); display: flex; flex-direction: column; gap: var(--spacing-xs);">
        <p style="font-size: 0.85rem; color: var(--color-charcoal-muted);">Support</p>
        <a href="mailto:support@yahuuu.com" style="font-size: 1rem; font-weight: 700;">support@yahuuu.com</a>
        <p style="font-size: 0.8rem; margin-top: 0.5rem;">© 2026 YAHUUU. Handcrafted Heritage.</p>
      </div>
    </div>
  </div>

  <!-- Announcement Bar (Seamless Infinite Loop Marquee) -->
  <div class="announcement-bar">
    <div class="announcement-slider">
      <div class="announcement-slide">
        <span>BUY ANY 3 PRODUCTS AT ₹999</span>
        <span class="separator">•</span>
        <span>FLAT 5% ON PREPAID ORDERS</span>
        <span class="separator">•</span>
        <span>USE CODE 'MUD5' FOR 5% OFF</span>
        <span class="separator">•</span>
      </div>
      <div class="announcement-slide">
        <span>BUY ANY 3 PRODUCTS AT ₹999</span>
        <span class="separator">•</span>
        <span>FLAT 5% ON PREPAID ORDERS</span>
        <span class="separator">•</span>
        <span>USE CODE 'MUD5' FOR 5% OFF</span>
        <span class="separator">•</span>
      </div>
      <div class="announcement-slide">
        <span>BUY ANY 3 PRODUCTS AT ₹999</span>
        <span class="separator">•</span>
        <span>FLAT 5% ON PREPAID ORDERS</span>
        <span class="separator">•</span>
        <span>USE CODE 'MUD5' FOR 5% OFF</span>
        <span class="separator">•</span>
      </div>
      <div class="announcement-slide">
        <span>BUY ANY 3 PRODUCTS AT ₹999</span>
        <span class="separator">•</span>
        <span>FLAT 5% ON PREPAID ORDERS</span>
        <span class="separator">•</span>
        <span>USE CODE 'MUD5' FOR 5% OFF</span>
        <span class="separator">•</span>
      </div>
    </div>
  </div>

  <!-- FLOATING / OVERLAY NAVBAR HEADER -->
  <div class="navbar-wrapper <?php echo $nav_theme; ?>">
    <header class="navbar">
      <!-- Left side: Mobile menu toggle -->
      <button class="nav-icon-btn mobile-only" id="menu-toggle-btn" aria-label="Open menu">
        <i data-lucide="menu"></i>
      </button>

      <!-- Left side: Desktop navigation links -->
      <nav class="nav-links desktop-only">
        <a href="index.php" class="nav-link-item">HOME</a>
        <a href="shop.php" class="nav-link-item">SHOP</a>
        <a href="#" class="nav-link-item">CONTACT</a>
        <a href="#" class="nav-link-item">BLOGS</a>
      </nav>

      <!-- Center: Circular Gold Emblem Logo -->
      <a href="index.php" class="logo-center">
        <div class="gold-logo-seal">
          <svg viewBox="0 0 100 100" class="logo-svg" style="width: 46px; height: 46px; display: block;">
            <circle cx="50" cy="50" r="44" fill="none" stroke="#d4af37" stroke-width="2"/>
            <circle cx="50" cy="50" r="40" fill="none" stroke="#d4af37" stroke-width="1" stroke-dasharray="3 2"/>
            <text x="50" y="59" font-family="'Archivo', sans-serif" font-size="28" font-weight="700" fill="#d4af37" text-anchor="middle">Y</text>
          </svg>
        </div>
      </a>

      <!-- Right side: Action icons -->
      <div class="nav-actions">
        <!-- Search icon -->
        <button class="nav-icon-btn" aria-label="Search items">
          <i data-lucide="search"></i>
        </button>

        <!-- User profile icon (desktop only) -->
        <button class="nav-icon-btn desktop-only" aria-label="Account">
          <i data-lucide="user"></i>
        </button>

        <!-- Cart drawer toggle -->
        <button class="nav-icon-btn" id="cart-toggle-btn" aria-label="Open cart">
          <i data-lucide="shopping-bag"></i>
          <span class="cart-count" id="cart-nav-count">0</span>
        </button>
      </div>
    </header>
  </div>
