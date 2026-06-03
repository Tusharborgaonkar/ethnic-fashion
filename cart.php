<?php include 'includes/header.php'; ?>

<div class="page-header" style="padding-top:120px;padding-bottom:var(--spacing-md);background:var(--bg-page);color:var(--color-charcoal);border-bottom:1px solid var(--color-border);">
  <div class="container">
    <h1 style="color:var(--color-charcoal);">Your Shopping Bag</h1>
  </div>
</div>

<section class="section-padding" style="background:var(--bg-page);min-height:60vh;">
  <div class="container" id="cart-page-content">
    
    <div class="cart-layout fade-up">
      <!-- Left: Items -->
      <div id="cart-page-items">
        <!-- JS will populate this -->
      </div>
      
      <!-- Right: Summary -->
      <div>
        <div class="order-summary-box">
          <h3 class="order-summary-title">Order Summary</h3>
          <div class="order-summary-row">
            <span style="color:var(--color-charcoal-muted);">Subtotal</span>
            <span id="cart-page-subtotal">₹0.00</span>
          </div>
          <div class="order-summary-row">
            <span style="color:var(--color-charcoal-muted);">Standard Shipping</span>
            <span style="color:var(--color-sage);">Complimentary</span>
          </div>
          <div class="order-summary-row">
            <span style="color:var(--color-charcoal-muted);">Tax</span>
            <span>Included</span>
          </div>
          <div class="order-summary-row total">
            <span>Total</span>
            <span id="cart-page-total">₹0.00</span>
          </div>
          <a href="checkout.php" class="btn btn-primary btn-full btn-lg" style="margin-top:1.5rem;" id="cart-page-checkout-btn">Proceed to Checkout</a>
          <a href="shop.php" class="btn btn-ghost btn-full" style="margin-top:0.5rem;">Continue Shopping</a>
          
          <div style="margin-top:1.5rem;padding-top:1rem;border-top:1px solid var(--color-border);display:flex;align-items:center;gap:10px;font-size:0.8rem;color:var(--color-charcoal-muted);">
            <i data-lucide="shield-check" style="color:var(--color-gold);"></i> Secure SSL encrypted checkout
          </div>
        </div>
      </div>
    </div>
    
  </div>
</section>

<script>
function renderCartPage() {
  const container = document.getElementById('cart-page-items');
  const layout = document.querySelector('.cart-layout');
  
  if (!vastramCart.length) {
    document.getElementById('cart-page-content').innerHTML = `
      <div class="text-center" style="padding:var(--spacing-xl) 0;">
        <i data-lucide="shopping-bag" style="width:64px;height:64px;color:var(--color-charcoal-muted);margin:0 auto 1.5rem;opacity:.5;"></i>
        <h2 style="margin-bottom:1rem;font-family:var(--font-display);font-size:2rem;">Your bag is empty</h2>
        <p style="color:var(--color-charcoal-muted);margin-bottom:2rem;">Add some ethnic elegance to your wardrobe.</p>
        <a href="shop.php" class="btn btn-primary">Browse Collection</a>
      </div>
    `;
    return;
  }
  
  let html = '';
  vastramCart.forEach(item => {
    html += `
      <div class="cart-item">
        <a href="product.php?id=${item.id}"><img src="${item.image}" alt="${item.title}" class="cart-item-img"></a>
        <div class="cart-item-details">
          <a href="product.php?id=${item.id}" style="color:inherit;"><div class="cart-item-name">${item.title}</div></a>
          <div class="cart-item-meta">${item.color ? 'Color: '+item.color : ''}</div>
          <div class="cart-item-meta">Size: ${item.size}</div>
          <button class="cart-item-remove" onclick="removePageItem('${item.id}','${item.size}','${item.color}')">Remove</button>
        </div>
        <div style="text-align:right;">
          <div class="cart-item-price mb-sm">₹${(item.price * (item.quantity||1)).toLocaleString('en-IN')}</div>
          <div class="qty-input-group" style="height:36px;width:100px;margin-left:auto;">
            <button class="qty-btn" style="width:30px;" onclick="updatePageQty('${item.id}','${item.size}','${item.color}',-1)">−</button>
            <span class="qty-val" style="width:40px;">${item.quantity||1}</span>
            <button class="qty-btn" style="width:30px;" onclick="updatePageQty('${item.id}','${item.size}','${item.color}',1)">+</button>
          </div>
        </div>
      </div>
    `;
  });
  
  container.innerHTML = html;
  
  const total = vastramGetTotal();
  const totalStr = '₹' + total.toLocaleString('en-IN') + '.00';
  document.getElementById('cart-page-subtotal').textContent = totalStr;
  document.getElementById('cart-page-total').textContent = totalStr;
  
  lucide.createIcons();
}

function updatePageQty(id, size, color, delta) {
  vastramUpdateQty(id, size, color, delta);
  renderCartPage();
}

function removePageItem(id, size, color) {
  vastramRemoveFromCart(id, size, color);
  renderCartPage();
}

document.addEventListener('DOMContentLoaded', () => {
  renderCartPage();
});
</script>

<?php include 'includes/footer.php'; ?>
