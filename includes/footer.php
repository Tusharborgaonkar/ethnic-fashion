  <!-- FOOTER -->
  <footer class="footer">
    <div class="container">
      <div class="footer-top">
        
        <!-- Left Column: Branding and eco certification -->
        <div>
          <h3 class="footer-brand-title">Yahuuu<span>cotton</span></h3>
          <p class="footer-brand-desc">
            We believe clothing should make the planet better. Every piece is hand-tailored in India from 100% GOTS certified organic cotton.
          </p>
          <div class="eco-badges">
            <span class="eco-badge">
              <i data-lucide="leaf" style="width: 14px; height: 14px;"></i>
              GOTS Organic
            </span>
            <span class="eco-badge">
              <i data-lucide="sun" style="width: 14px; height: 14px;"></i>
              Carbon Zero
            </span>
          </div>
        </div>

        <!-- Center Column: Quick Navigation Links -->
        <div>
          <h4 class="footer-column-title">Products</h4>
          <ul class="footer-links">
            <li><a href="shop.php" class="footer-link">Organic Tees</a></li>
            <li><a href="shop.php" class="footer-link">Linen Trousers</a></li>
            <li><a href="shop.php" class="footer-link">Heavyweight Hoodies</a></li>
            <li><a href="shop.php" class="footer-link">Shop All Catalog</a></li>
          </ul>
        </div>

        <!-- Right Column: Newsletter sign-up (No Nasties storytelling) -->
        <div>
          <h4 class="footer-column-title">Join the Cause</h4>
          <p class="footer-brand-desc" style="font-size: 0.85rem; margin-bottom: 0.5rem;">
            Sign up for 3x carbon offset updates, clothing drops, and sustainable living guidelines.
          </p>
          <form class="newsletter-form" onsubmit="event.preventDefault(); alert('Subscribed successfully!');">
            <input type="email" class="newsletter-input" placeholder="Enter your email" required aria-label="Email address">
            <button type="submit" class="newsletter-btn">Join</button>
          </form>
        </div>

      </div>

      <!-- Bottom bar -->
      <div class="footer-bottom">
        <p>© 2026 YAHUUU. Handcrafted in India. All Rights Reserved.</p>
        <div style="display: flex; gap: var(--spacing-md);">
          <a href="#" class="footer-link" style="font-size: 0.8rem;">Terms of Service</a>
          <a href="#" class="footer-link" style="font-size: 0.8rem;">Privacy Policy</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- ==========================================================================
     SCRIPTS & LIBRARIES (CDN)
     ========================================================================== -->
  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>
  
  <!-- GSAP Animation Core + ScrollTrigger plugin -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  
  <!-- Core App Scripts -->
  <script src="assets/js/app.js"></script>
  
  <!-- Animation Controller -->
  <script src="assets/js/animations.js"></script>

  <!-- Lucide icon activator -->
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      lucide.createIcons();
    });
  </script>
</body>
</html>
