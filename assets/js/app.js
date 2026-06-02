/* ==========================================================================
   YAHUUU APP SCRIPT
   --------------------------------------------------------------------------
   Controls client-side state:
   - Drawer panel animations (menu and cart drawer)
   - Cart local storage, operations, and dynamic UI rendering
   - Free shipping calculations (Indian Rupees)
   - Product accordion foldouts
   ========================================================================== */

document.addEventListener("DOMContentLoaded", function() {

  // ==========================================================================
  // DRAWER TOGGLES & ACTIONS
  // ==========================================================================
  
  const menuToggle = document.getElementById("menu-toggle-btn");
  const menuClose = document.getElementById("menu-close-btn");
  const menuDrawer = document.getElementById("menu-drawer");
  const menuBackdrop = document.getElementById("menu-backdrop");

  const cartToggle = document.getElementById("cart-toggle-btn");
  const cartClose = document.getElementById("cart-close-btn");
  const cartDrawer = document.getElementById("cart-drawer");
  const cartBackdrop = document.getElementById("cart-backdrop");

  // Open Drawer Function
  function openDrawer(drawer, backdrop) {
    if (drawer && backdrop) {
      drawer.classList.add("active");
      backdrop.classList.add("active");
      document.body.style.overflow = "hidden"; // Disable scroll
    }
  }

  // Close Drawer Function
  function closeDrawer(drawer, backdrop) {
    if (drawer && backdrop) {
      drawer.classList.remove("active");
      backdrop.classList.remove("active");
      document.body.style.overflow = ""; // Enable scroll
    }
  }

  // Bind Menu Events
  if (menuToggle) {
    menuToggle.addEventListener("click", () => openDrawer(menuDrawer, menuBackdrop));
  }
  if (menuClose) {
    menuClose.addEventListener("click", () => closeDrawer(menuDrawer, menuBackdrop));
  }
  if (menuBackdrop) {
    menuBackdrop.addEventListener("click", () => closeDrawer(menuDrawer, menuBackdrop));
  }

  // Bind Cart Events
  if (cartToggle) {
    cartToggle.addEventListener("click", () => openDrawer(cartDrawer, cartBackdrop));
  }
  if (cartClose) {
    cartClose.addEventListener("click", () => closeDrawer(cartDrawer, cartBackdrop));
  }
  if (cartBackdrop) {
    cartBackdrop.addEventListener("click", () => closeDrawer(cartDrawer, cartBackdrop));
  }

  // Export Drawer Control to global scope so other triggers can open cart
  window.yahuuuOpenCart = function() {
    openDrawer(cartDrawer, cartBackdrop);
  };

  // ==========================================================================
  // SHOPPING CART CONTROLLER
  // ==========================================================================
  
  const FREE_SHIPPING_THRESHOLD = 3000; // ₹3000

  // Load cart from localStorage or instantiate blank array
  let cart = JSON.parse(localStorage.getItem("yahuuu:cart")) || [];

  // Update navbar badge and render side-cart
  function updateCartState() {
    localStorage.setItem("yahuuu:cart", JSON.stringify(cart));
    
    // Dispatch custom event for modular bindings
    const event = new CustomEvent("cart:update", { detail: cart });
    document.dispatchEvent(event);
  }

  // Add Item to Cart
  window.yahuuuAddToCart = function(product) {
    // Expecting: { id, title, price, image, size, color, quantity }
    const existingIndex = cart.findIndex(item => 
      item.id === product.id && 
      item.size === product.size && 
      item.color === product.color
    );

    if (existingIndex > -1) {
      cart[existingIndex].quantity += Number(product.quantity || 1);
    } else {
      cart.push({
        id: product.id,
        title: product.title,
        price: Number(product.price),
        image: product.image,
        size: product.size,
        color: product.color,
        quantity: Number(product.quantity || 1)
      });
    }

    updateCartState();
    
    // Automatically slide cart open
    window.yahuuuOpenCart();
  };

  // Remove Item from Cart
  window.yahuuuRemoveFromCart = function(id, size, color) {
    cart = cart.filter(item => !(item.id === id && item.size === size && item.color === color));
    updateCartState();
  };

  // Modify Item Quantity
  window.yahuuuChangeQuantity = function(id, size, color, delta) {
    const index = cart.findIndex(item => item.id === id && item.size === size && item.color === color);
    if (index > -1) {
      cart[index].quantity += delta;
      if (cart[index].quantity <= 0) {
        cart.splice(index, 1);
      }
      updateCartState();
    }
  };

  // Render Cart drawer items dynamically
  function renderCartDrawer() {
    const listContainer = document.getElementById("cart-items-list");
    const footerPanel = document.getElementById("cart-footer-panel");
    const cartNavCount = document.getElementById("cart-nav-count");

    if (!listContainer) return;

    // Calculate quantities and subtotal
    let totalItems = 0;
    let subtotal = 0;

    cart.forEach(item => {
      totalItems += item.quantity;
      subtotal += item.price * item.quantity;
    });

    // Update navbar indicators
    if (cartNavCount) cartNavCount.textContent = totalItems;

    // If Cart is Empty
    if (cart.length === 0) {
      listContainer.innerHTML = `
        <div class="cart-empty-view">
          <i data-lucide="shopping-bag" class="cart-empty-icon" style="width: 48px; height: 48px;"></i>
          <h4 style="margin-bottom: var(--spacing-xs); text-transform: uppercase;">Your bag is empty</h4>
          <p style="font-size: 0.85rem; margin-bottom: var(--spacing-md);">Fill it with GOTS certified carbon zero garments.</p>
          <a href="shop.php" class="btn btn-secondary btn-sm" id="empty-cart-shop-btn" style="padding: 0.6rem 1.2rem;">Shop Grid</a>
        </div>
      `;
      if (footerPanel) footerPanel.style.display = "none";
      lucide.createIcons(); // Hydrate newly injected icons
      return;
    }

    // If Cart has elements
    if (footerPanel) footerPanel.style.display = "block";
    
    let html = "";
    cart.forEach(item => {
      html += `
        <div class="cart-item">
          <div class="cart-item-img">
            <img src="${item.image}" alt="${item.title}">
          </div>
          <div class="cart-item-details">
            <div>
              <div style="display: flex; justify-content: space-between; align-items: start;">
                <h4 class="cart-item-title">${item.title}</h4>
                <button class="cart-item-remove" onclick="yahuuuRemoveFromCart('${item.id}', '${item.size}', '${item.color}')">Remove</button>
              </div>
              <div class="cart-item-meta">Size: ${item.size} | Color: ${item.color}</div>
            </div>
            <div class="cart-item-quantity-row">
              <div class="qty-btn-group">
                <button class="qty-btn" onclick="yahuuuChangeQuantity('${item.id}', '${item.size}', '${item.color}', -1)">-</button>
                <span class="qty-val">${item.quantity}</span>
                <button class="qty-btn" onclick="yahuuuChangeQuantity('${item.id}', '${item.size}', '${item.color}', 1)">+</button>
              </div>
              <span class="cart-item-price">₹${(item.price * item.quantity).toFixed(2)}</span>
            </div>
          </div>
        </div>
      `;
    });

    listContainer.innerHTML = html;

    // Render shipping details progress bar (Arih/NoNasties design)
    const progressVal = document.getElementById("shipping-bar-progress");
    const progressText = document.getElementById("shipping-bar-text");
    const subtotalText = document.getElementById("cart-subtotal");
    const totalText = document.getElementById("cart-total");

    if (subtotalText) subtotalText.textContent = `₹${subtotal.toFixed(2)}`;
    if (totalText) totalText.textContent = `₹${subtotal.toFixed(2)}`; // Set taxes/shipping dynamic later if needed

    if (progressVal && progressText) {
      if (subtotal >= FREE_SHIPPING_THRESHOLD) {
        progressVal.style.width = "100%";
        progressText.innerHTML = `🌟 You qualify for <strong>Free Standard Shipping</strong>!`;
      } else {
        const needed = FREE_SHIPPING_THRESHOLD - subtotal;
        const pct = (subtotal / FREE_SHIPPING_THRESHOLD) * 100;
        progressVal.style.width = `${pct}%`;
        progressText.innerHTML = `Add <span>₹${needed.toFixed(2)}</span> more to qualify for <strong>Free Standard Shipping</strong>!`;
      }
    }
  }

  // Register event listener
  document.addEventListener("cart:update", renderCartDrawer);

  // Run initial render
  renderCartDrawer();


  // ==========================================================================
  // DYNAMIC DETAILS ACCORDIONS (Mudaura Style Descriptions)
  // ==========================================================================
  
  const accordions = document.querySelectorAll(".accord-item");

  accordions.forEach(item => {
    const trigger = item.querySelector(".accord-trigger");
    const content = item.querySelector(".accord-content");

    if (trigger && content) {
      trigger.addEventListener("click", () => {
        const isActive = item.classList.contains("active");

        // Close all other accordions first (MudAura style)
        accordions.forEach(acc => {
          acc.classList.remove("active");
          const accContent = acc.querySelector(".accord-content");
          if (accContent) accContent.style.maxHeight = null;
        });

        // Toggle state of current
        if (!isActive) {
          item.classList.add("active");
          content.style.maxHeight = content.scrollHeight + "px";
        }
      });
    }
  });

});
