/* ==========================================================================
   VASTRAM APPLICATION SCRIPT (v1)
   ========================================================================== */

document.addEventListener("DOMContentLoaded", function() {
  // Initialize Lucide SVG Icons
  if (typeof lucide !== "undefined") {
    lucide.createIcons();
  } else {
    console.warn("Lucide library is not loaded.");
  }
  
  // Initialize Cart Indicator
  updateCartUI();
});

/* ==========================================================================
   INTERACTIVE STYLE TAG CHIPS (Hero Section)
   ========================================================================== */
window.selectStyleTag = function(element) {
  // Deactivate all tags
  const tags = document.querySelectorAll(".hero-tag");
  tags.forEach(tag => {
    tag.classList.remove("active");
  });
  
  // Activate selected tag
  element.classList.add("active");
  
  // Provide subtle visual feedback (Toast)
  const styleName = element.textContent.trim();
  showToast(`Filtered collections by: ${styleName}`);
};

/* ==========================================================================
   SIMULATED CART STATE
   ========================================================================== */
let cart = JSON.parse(localStorage.getItem("vastram_cart")) || [];

window.addToCart = function(title, price) {
  // Add item to simulated state
  cart.push({ title, price });
  localStorage.setItem("vastram_cart", JSON.stringify(cart));
  
  // Update Navbar UI
  updateCartUI();
  
  // Display toast feedback
  showToast(`"${title}" added to your bag!`);
};

function updateCartUI() {
  const cartIndicator = document.getElementById("cart-indicator");
  if (cartIndicator) {
    cartIndicator.textContent = cart.length;
  }
}

/* ==========================================================================
   NEWSLETTER SUBSCRIPTION HANDLER
   ========================================================================== */
window.handleSubscribe = function(event) {
  event.preventDefault();
  const form = event.target;
  const input = form.querySelector(".newsletter-input");
  const email = input.value.trim();
  
  if (email) {
    // Show success feedback
    showToast(`Welcome! We've sent an update to ${email}.`);
    form.reset();
  }
};

/* ==========================================================================
   PREMIUM DYNAMIC TOAST SYSTEM
   ========================================================================== */
function showToast(message) {
  // Check if container exists, if not create it
  let container = document.getElementById("toast-container");
  if (!container) {
    container = document.createElement("div");
    container.id = "toast-container";
    // Inline styling for the absolute positioning
    container.style.position = "fixed";
    container.style.bottom = "32px";
    container.style.right = "32px";
    container.style.display = "flex";
    container.style.flexDirection = "column";
    container.style.gap = "10px";
    container.style.zIndex = "1000";
    document.body.appendChild(container);
  }
  
  // Create individual toast element
  const toast = document.createElement("div");
  toast.className = "toast-message";
  
  // Style toast dynamically for high-fidelity aesthetics
  toast.style.backgroundColor = "#6B1D2F"; // Burgundy brand color
  toast.style.color = "#FFFFFF";
  toast.style.fontFamily = "'Figtree', sans-serif";
  toast.style.fontSize = "0.85rem";
  toast.style.fontWeight = "600";
  toast.style.letterSpacing = "0.02em";
  toast.style.padding = "14px 24px";
  toast.style.border = "1px solid rgba(255, 255, 255, 0.1)";
  toast.style.boxShadow = "0 10px 30px rgba(107, 29, 47, 0.15)";
  toast.style.transform = "translateY(20px)";
  toast.style.opacity = "0";
  toast.style.transition = "all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1)";
  toast.innerText = message;
  
  container.appendChild(toast);
  
  // Trigger animation entrance on next frame
  requestAnimationFrame(() => {
    toast.style.transform = "translateY(0)";
    toast.style.opacity = "1";
  });
  
  // Schedule fading and removal
  setTimeout(() => {
    toast.style.transform = "translateY(-15px)";
    toast.style.opacity = "0";
    
    // Remove element from DOM after transition finishes
    toast.addEventListener("transitionend", () => {
      toast.remove();
      // Remove container if empty
      if (container.children.length === 0) {
        container.remove();
      }
    });
  }, 3500);
}
