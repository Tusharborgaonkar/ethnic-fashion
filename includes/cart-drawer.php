<!-- Cart Drawer Side Panel -->
<div class="drawer-backdrop" id="cart-backdrop"></div>
<div class="drawer" id="cart-drawer">
  <!-- Header -->
  <div class="drawer-header">
    <h3 class="drawer-title">Shopping Bag</h3>
    <button class="drawer-close" id="cart-close-btn" aria-label="Close cart">
      <i data-lucide="x"></i>
    </button>
  </div>

  <!-- Cart Content Panel -->
  <div style="display: flex; flex-direction: column; height: calc(100% - 69px); justify-content: space-between;">
    <!-- Items scroll area -->
    <div class="cart-items-container" id="cart-items-list">
      <!-- Dynamically generated items will be appended here via app.js -->
    </div>

    <!-- Summary & Actions footer -->
    <div class="cart-footer" id="cart-footer-panel" style="display: none;">
      <!-- Free Shipping threshold tracker -->
      <div class="shipping-progress-container">
        <p class="shipping-bar-text" id="shipping-bar-text">
          Add <span>₹0.00</span> more to get <strong>Free Standard Shipping</strong>!
        </p>
        <div class="shipping-bar">
          <div class="shipping-progress" id="shipping-bar-progress"></div>
        </div>
      </div>

      <!-- Pricing lines -->
      <div class="cart-summary-line">
        <span>Subtotal</span>
        <span id="cart-subtotal">₹0.00</span>
      </div>
      <div class="cart-summary-line" style="font-size: 0.85rem; color: var(--color-charcoal-muted);">
        <span>Shipping</span>
        <span id="cart-shipping">Calculated at checkout</span>
      </div>
      <div class="cart-summary-line cart-summary-total">
        <span>Total</span>
        <span id="cart-total">₹0.00</span>
      </div>

      <!-- Animated Checkout Button (SuperYou Bold look) -->
      <button class="btn btn-primary" id="checkout-btn" style="width: 100%; margin-top: var(--spacing-sm);" onclick="alert('Proceeding to checkout mock page!')">
        Checkout
        <span class="btn-spinner"></span>
      </button>
    </div>
  </div>
</div>
