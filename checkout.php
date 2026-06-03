<?php include 'includes/header.php'; ?>

<div class="page-header" style="padding-top:120px;padding-bottom:var(--spacing-md);background:var(--bg-page);color:var(--color-charcoal);border-bottom:1px solid var(--color-border);">
  <div class="container">
    <div class="checkout-progress">
      <div class="progress-step done"><div class="progress-step-num"><i data-lucide="check" style="width:14px;height:14px;"></i></div> Bag</div>
      <div class="progress-line"></div>
      <div class="progress-step active"><div class="progress-step-num">2</div> Details</div>
      <div class="progress-line"></div>
      <div class="progress-step"><div class="progress-step-num">3</div> Done</div>
    </div>
  </div>
</div>

<section class="section-padding" style="background:var(--bg-page);min-height:60vh;">
  <div class="container">
    
    <div class="checkout-layout fade-up">
      <!-- Left: Forms -->
      <div>
        <form id="checkout-form" onsubmit="processCheckout(event)">
          
          <div class="form-section-title">1. Contact Information</div>
          <div class="form-group">
            <label class="form-label">Email Address *</label>
            <input type="email" class="form-input" required placeholder="name@example.com">
          </div>
          <div class="form-group" style="display:flex;align-items:center;gap:8px;font-size:0.85rem;">
            <input type="checkbox" id="news-check" checked style="accent-color:var(--color-charcoal);">
            <label for="news-check" style="color:var(--color-charcoal-muted);">Email me with news and offers</label>
          </div>

          <div class="form-section-title" style="margin-top:var(--spacing-lg);">2. Shipping Address</div>
          <div class="form-row">
            <div class="form-group">
              <label class="form-label">First Name *</label>
              <input type="text" class="form-input" required>
            </div>
            <div class="form-group">
              <label class="form-label">Last Name *</label>
              <input type="text" class="form-input" required>
            </div>
          </div>
          <div class="form-group">
            <label class="form-label">Street Address *</label>
            <input type="text" class="form-input" required placeholder="House number and street name">
          </div>
          <div class="form-group">
            <label class="form-label">Apartment, suite, etc. (optional)</label>
            <input type="text" class="form-input">
          </div>
          <div class="form-row">
            <div class="form-group">
              <label class="form-label">City *</label>
              <input type="text" class="form-input" required>
            </div>
            <div class="form-group">
              <label class="form-label">State / Province *</label>
              <select class="form-select" required>
                <option value="">Select State</option>
                <option value="MH">Maharashtra</option>
                <option value="DL">Delhi</option>
                <option value="KA">Karnataka</option>
                <option value="RJ">Rajasthan</option>
                <option value="UP">Uttar Pradesh</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label class="form-label">PIN Code *</label>
              <input type="text" class="form-input" required>
            </div>
            <div class="form-group">
              <label class="form-label">Phone Number *</label>
              <input type="tel" class="form-input" required>
            </div>
          </div>
          
          <div class="form-section-title" style="margin-top:var(--spacing-lg);">3. Payment (Demo)</div>
          <p style="font-size:0.85rem;color:var(--color-charcoal-muted);margin-bottom:var(--spacing-md);">This is a demo checkout. No actual payment processing will occur.</p>
          <div style="border:1.5px solid var(--color-border);padding:var(--spacing-md);background:var(--color-white);margin-bottom:var(--spacing-lg);">
            <div class="form-group">
              <label class="form-label">Card Number</label>
              <div style="position:relative;">
                <input type="text" class="form-input" placeholder="0000 0000 0000 0000" style="padding-right:40px;">
                <i data-lucide="credit-card" style="position:absolute;right:12px;top:50%;transform:translateY(-50%);color:var(--color-charcoal-muted);"></i>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group" style="margin-bottom:0;">
                <label class="form-label">Expiration Date</label>
                <input type="text" class="form-input" placeholder="MM/YY">
              </div>
              <div class="form-group" style="margin-bottom:0;">
                <label class="form-label">Security Code</label>
                <input type="text" class="form-input" placeholder="CVV">
              </div>
            </div>
          </div>
          
          <button type="submit" class="btn btn-primary btn-full btn-lg" id="submit-order-btn">Place Order</button>

        </form>
      </div>
      
      <!-- Right: Summary -->
      <div>
        <div class="order-summary-box">
          <h3 class="order-summary-title" style="font-size:1.2rem;margin-bottom:1rem;">In Your Bag</h3>
          <div id="checkout-items" style="margin-bottom:1rem;border-bottom:1px solid var(--color-border);padding-bottom:1rem;max-height:300px;overflow-y:auto;">
            <!-- JS will populate -->
          </div>
          <div class="order-summary-row">
            <span style="color:var(--color-charcoal-muted);">Subtotal</span>
            <span id="co-subtotal">₹0.00</span>
          </div>
          <div class="order-summary-row">
            <span style="color:var(--color-charcoal-muted);">Shipping</span>
            <span style="color:var(--color-sage);">Free</span>
          </div>
          <div class="order-summary-row total">
            <span>Total</span>
            <span id="co-total" style="font-size:1.5rem;">₹0.00</span>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</section>

<!-- SUCCESS MODAL -->
<div class="drawer-backdrop" id="success-backdrop" style="z-index:1000;"></div>
<div id="success-modal" style="position:fixed;top:50%;left:50%;transform:translate(-50%,-50%) scale(0.95);background:white;padding:var(--spacing-xl);z-index:1010;width:90%;max-width:500px;text-align:center;box-shadow:var(--shadow-lg);opacity:0;pointer-events:none;transition:all var(--transition-base);">
  <div style="width:64px;height:64px;border-radius:50%;background:var(--color-sage);color:white;display:flex;align-items:center;justify-content:center;margin:0 auto var(--spacing-md);">
    <i data-lucide="check" style="width:32px;height:32px;"></i>
  </div>
  <h2 style="font-family:var(--font-display);font-size:2rem;margin-bottom:1rem;">Order Confirmed!</h2>
  <p style="color:var(--color-charcoal-muted);line-height:1.6;margin-bottom:2rem;">Thank you for your purchase. This is a demo site, so no actual charge was made and no items will ship. Your order number is #VST-<?php echo rand(10000, 99999); ?>.</p>
  <a href="index.php" class="btn btn-primary btn-full">Return to Home</a>
</div>

<script>
function renderCheckoutSummary() {
  const container = document.getElementById('checkout-items');
  if (!vastramCart.length) {
    window.location.href = 'cart.php';
    return;
  }
  
  let html = '';
  vastramCart.forEach(item => {
    html += `
      <div style="display:flex;gap:12px;margin-bottom:12px;">
        <div style="position:relative;">
          <img src="${item.image}" alt="${item.title}" style="width:60px;height:80px;object-fit:cover;border:1px solid var(--color-border);">
          <span style="position:absolute;top:-8px;right:-8px;background:var(--color-charcoal);color:white;width:20px;height:20px;border-radius:50%;font-size:10px;display:flex;align-items:center;justify-content:center;">${item.quantity||1}</span>
        </div>
        <div style="flex:1;">
          <div style="font-family:var(--font-display);font-size:1rem;">${item.title}</div>
          <div style="font-size:0.75rem;color:var(--color-charcoal-muted);">${item.color ? item.color+' · ' : ''}Size: ${item.size}</div>
        </div>
        <div style="font-weight:600;font-size:0.9rem;">₹${(item.price * (item.quantity||1)).toLocaleString('en-IN')}</div>
      </div>
    `;
  });
  container.innerHTML = html;
  
  const total = vastramGetTotal();
  const totalStr = '₹' + total.toLocaleString('en-IN') + '.00';
  document.getElementById('co-subtotal').textContent = totalStr;
  document.getElementById('co-total').textContent = totalStr;
}

function processCheckout(e) {
  e.preventDefault();
  const btn = document.getElementById('submit-order-btn');
  btn.classList.add('loading');
  
  setTimeout(() => {
    btn.classList.remove('loading');
    
    // Clear cart
    vastramCart = [];
    vastramSaveCart();
    
    // Show modal
    document.getElementById('success-backdrop').classList.add('open');
    const modal = document.getElementById('success-modal');
    modal.style.opacity = '1';
    modal.style.pointerEvents = 'all';
    modal.style.transform = 'translate(-50%,-50%) scale(1)';
  }, 1500);
}

document.addEventListener('DOMContentLoaded', () => {
  renderCheckoutSummary();
});
</script>

<?php include 'includes/footer.php'; ?>
