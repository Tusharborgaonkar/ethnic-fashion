<?php $base = ''; ?>
<!-- NEWSLETTER SECTION -->
<section class="newsletter-section">
  <div class="eyebrow mb-md">Stay Connected</div>
  <h2 style="font-family:var(--font-display);font-size:clamp(1.8rem,4vw,2.8rem);color:white;margin-bottom:1rem;font-style:italic;">Join the Vastram Circle</h2>
  <p>Be the first to know about new arrivals, artisan stories, and exclusive festive collections.</p>
  <form class="newsletter-form" onsubmit="vastramNewsletterSubmit(event)">
    <input type="email" class="newsletter-input" placeholder="Your email address" required>
    <button type="submit" class="newsletter-btn">Subscribe</button>
  </form>
</section>

<!-- FOOTER -->
<footer class="footer">
  <div class="container">
    <div class="footer-grid">
      <!-- Brand -->
      <div>
        <div class="footer-brand-name">VASTRAM</div>
        <p class="footer-tagline">Handcrafted Men's Ethnic Wear woven from India's finest heritage traditions. Each piece tells the story of an artisan's soul.</p>
        <div class="footer-social">
          <a href="#" class="footer-social-btn" aria-label="Instagram"><i data-lucide="instagram"></i></a>
          <a href="#" class="footer-social-btn" aria-label="Facebook"><i data-lucide="facebook"></i></a>
          <a href="#" class="footer-social-btn" aria-label="Pinterest"><i data-lucide="award"></i></a>
          <a href="mailto:hello@vastram.in" class="footer-social-btn" aria-label="Email"><i data-lucide="mail"></i></a>
        </div>
      </div>
      <!-- Shop -->
      <div>
        <div class="footer-col-title">Shop</div>
        <ul class="footer-links">
          <li><a href="<?php echo $base; ?>shop.php?cat=kurtas" class="footer-link">Kurtas</a></li>
          <li><a href="<?php echo $base; ?>shop.php?cat=sherwanis" class="footer-link">Sherwanis</a></li>
          <li><a href="<?php echo $base; ?>shop.php?cat=nehru" class="footer-link">Nehru Jackets</a></li>
          <li><a href="<?php echo $base; ?>shop.php?cat=indo-western" class="footer-link">Indo-Western</a></li>
          <li><a href="<?php echo $base; ?>shop.php?cat=wedding" class="footer-link">Wedding Wear</a></li>
          <li><a href="<?php echo $base; ?>shop.php?cat=festive" class="footer-link">Festive Wear</a></li>
        </ul>
      </div>
      <!-- Information -->
      <div>
        <div class="footer-col-title">Information</div>
        <ul class="footer-links">
          <li><a href="<?php echo $base; ?>about.php" class="footer-link">Our Heritage</a></li>
          <li><a href="<?php echo $base; ?>blog.php" class="footer-link">Artisan Journal</a></li>
          <li><a href="<?php echo $base; ?>contact.php" class="footer-link">Contact Us</a></li>
          <li><a href="#" class="footer-link">Shipping & Returns</a></li>
          <li><a href="#" class="footer-link">Size Guide</a></li>
          <li><a href="#" class="footer-link">Store Locator</a></li>
        </ul>
      </div>
      <!-- Legal -->
      <div>
        <div class="footer-col-title">Legal</div>
        <ul class="footer-links">
          <li><a href="#" class="footer-link">Privacy Policy</a></li>
          <li><a href="#" class="footer-link">Terms of Service</a></li>
          <li><a href="#" class="footer-link">Cookie Policy</a></li>
          <li><a href="#" class="footer-link">Authenticity Guarantee</a></li>
        </ul>
        <div style="margin-top:1.5rem;padding:1rem;background:rgba(212,175,55,.08);border:1px solid rgba(212,175,55,.2);">
          <p style="font-size:.65rem;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:var(--color-gold);margin-bottom:.4rem;">Certified Ethical</p>
          <p style="font-size:.75rem;color:rgba(255,255,255,.5);">GOTS Certified · Carbon Neutral Shipping · Fair Trade Artisans</p>
        </div>
      </div>
    </div>
    <!-- Bottom bar -->
    <div class="footer-bottom">
      <span>© 2026 VASTRAM. All rights reserved. Handcrafted Heritage of India.</span>
      <div style="display:flex;align-items:center;gap:.5rem;">
        <i data-lucide="credit-card" style="width:16px;height:16px;opacity:.4;"></i>
        <span>Secure Payments · UPI · Cards · Net Banking</span>
      </div>
    </div>
  </div>
</footer>

<!-- MAIN APP SCRIPT -->
<script>
// ── CART STATE ──
let vastramCart = JSON.parse(localStorage.getItem('vastram_cart') || '[]');

function vastramSaveCart() {
  localStorage.setItem('vastram_cart', JSON.stringify(vastramCart));
  vastramUpdateUI();
}

function vastramAddToCart(item) {
  const idx = vastramCart.findIndex(c => c.id === item.id && c.size === item.size && c.color === item.color);
  if (idx > -1) {
    vastramCart[idx].quantity = (vastramCart[idx].quantity || 1) + (item.quantity || 1);
  } else {
    vastramCart.push({ ...item, quantity: item.quantity || 1 });
  }
  vastramSaveCart();
  vastramToast('Added to bag — ' + item.title);
  vastramOpenCartDrawer();
}

function vastramRemoveFromCart(id, size, color) {
  vastramCart = vastramCart.filter(c => !(c.id === id && c.size === size && c.color === color));
  vastramSaveCart();
}

function vastramUpdateQty(id, size, color, delta) {
  const idx = vastramCart.findIndex(c => c.id === id && c.size === size && c.color === color);
  if (idx > -1) {
    vastramCart[idx].quantity = Math.max(1, (vastramCart[idx].quantity || 1) + delta);
    vastramSaveCart();
  }
}

function vastramGetTotal() {
  return vastramCart.reduce((sum, c) => sum + (c.price * (c.quantity || 1)), 0);
}

function vastramUpdateUI() {
  const count = vastramCart.reduce((s, c) => s + (c.quantity || 1), 0);
  document.querySelectorAll('#cart-nav-count,#drawer-count').forEach(el => el.textContent = count);

  const drawerItems = document.getElementById('cart-drawer-items');
  const emptyState  = document.getElementById('cart-empty-state');
  const footer      = document.getElementById('cart-footer');
  const totalDisp   = document.getElementById('cart-total-display');

  if (!vastramCart.length) {
    if (emptyState) emptyState.style.display = '';
    if (footer) footer.style.display = 'none';
    if (drawerItems) drawerItems.innerHTML = `<div class="cart-empty" id="cart-empty-state"><div class="cart-empty-icon">🛍️</div><p style="font-family:var(--font-display);font-size:1.2rem;margin-bottom:.5rem;">Your bag is empty</p><p style="font-size:.85rem;color:var(--color-charcoal-muted);margin-bottom:1.5rem;">Add some ethnic elegance to your wardrobe.</p><a href="<?php echo $base; ?>shop.php" class="btn btn-primary btn-sm">Browse Collection</a></div>`;
    return;
  }
  if (footer) footer.style.display = '';
  if (totalDisp) totalDisp.textContent = '₹' + vastramGetTotal().toLocaleString('en-IN') + '.00';

  const html = vastramCart.map(item => `
    <div class="cart-drawer-item">
      <img src="${item.image}" alt="${item.title}" class="cart-drawer-img">
      <div class="cart-drawer-info">
        <div>
          <div class="cart-drawer-name">${item.title}</div>
          <div class="cart-drawer-meta">${item.color ? item.color + ' · ' : ''}Size: ${item.size}</div>
        </div>
        <div style="display:flex;justify-content:space-between;align-items:center;">
          <div class="cart-drawer-qty">
            <button onclick="vastramUpdateQty('${item.id}','${item.size}','${item.color}',-1)" style="width:24px;height:24px;border:1px solid var(--color-border);display:flex;align-items:center;justify-content:center;font-size:1rem;">−</button>
            <span>${item.quantity || 1}</span>
            <button onclick="vastramUpdateQty('${item.id}','${item.size}','${item.color}',1)"  style="width:24px;height:24px;border:1px solid var(--color-border);display:flex;align-items:center;justify-content:center;font-size:1rem;">+</button>
          </div>
          <span class="cart-drawer-price">₹${(item.price * (item.quantity||1)).toLocaleString('en-IN')}</span>
        </div>
        <button class="cart-drawer-remove" onclick="vastramRemoveFromCart('${item.id}','${item.size}','${item.color}')">Remove</button>
      </div>
    </div>
  `).join('');
  if (drawerItems) drawerItems.innerHTML = html;
}

// ── DRAWERS ──
function vastramOpenCartDrawer() {
  document.getElementById('cart-drawer')?.classList.add('open');
  document.getElementById('cart-backdrop')?.classList.add('open');
  document.body.style.overflow = 'hidden';
}
function vastramCloseCartDrawer() {
  document.getElementById('cart-drawer')?.classList.remove('open');
  document.getElementById('cart-backdrop')?.classList.remove('open');
  document.body.style.overflow = '';
}
function vastramOpenMenuDrawer() {
  document.getElementById('menu-drawer')?.classList.add('open');
  document.getElementById('menu-backdrop')?.classList.add('open');
  document.body.style.overflow = 'hidden';
}
function vastramCloseMenuDrawer() {
  document.getElementById('menu-drawer')?.classList.remove('open');
  document.getElementById('menu-backdrop')?.classList.remove('open');
  document.body.style.overflow = '';
}

// ── TOAST ──
function vastramToast(msg, icon='✓') {
  const container = document.getElementById('toast-container');
  if (!container) return;
  const toast = document.createElement('div');
  toast.className = 'toast';
  toast.innerHTML = `<span class="toast-icon">${icon}</span><span>${msg}</span>`;
  container.appendChild(toast);
  setTimeout(() => toast.classList.add('show'), 50);
  setTimeout(() => { toast.classList.remove('show'); setTimeout(() => toast.remove(), 400); }, 3000);
}

// ── NEWSLETTER ──
function vastramNewsletterSubmit(e) {
  e.preventDefault();
  vastramToast('Subscribed! Welcome to the Vastram family 🙏');
  e.target.reset();
}

// ── SCROLL: sticky/transparent navbar ──
function vastramHandleScroll() {
  const nav = document.getElementById('navbar-wrapper');
  if (!nav) return;
  if (window.scrollY > 80) {
    nav.classList.add('scrolled');
  } else {
    nav.classList.remove('scrolled');
  }
}

// ── REVEAL ANIMATIONS ──
function vastramInitReveal() {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
  }, { threshold: 0.12 });
  document.querySelectorAll('.fade-up,.fade-in').forEach(el => observer.observe(el));
}

// ── INIT ──
document.addEventListener('DOMContentLoaded', () => {
  // Init Lucide icons
  if (typeof lucide !== 'undefined') lucide.createIcons();

  // Cart events
  document.getElementById('cart-toggle-btn')?.addEventListener('click', vastramOpenCartDrawer);
  document.getElementById('cart-close-btn')?.addEventListener('click', vastramCloseCartDrawer);
  document.getElementById('cart-backdrop')?.addEventListener('click', vastramCloseCartDrawer);

  // Menu events
  document.getElementById('menu-toggle-btn')?.addEventListener('click', vastramOpenMenuDrawer);
  document.getElementById('menu-close-btn')?.addEventListener('click', vastramCloseMenuDrawer);
  document.getElementById('menu-backdrop')?.addEventListener('click', vastramCloseMenuDrawer);

  // Scroll events
  window.addEventListener('scroll', vastramHandleScroll, { passive: true });

  // Reveal
  vastramInitReveal();

  // Init cart display
  vastramUpdateUI();
});
</script>
