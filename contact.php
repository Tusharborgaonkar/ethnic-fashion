<?php include 'includes/header.php'; ?>

<!-- PAGE HEADER -->
<div class="page-header" style="background:var(--bg-page);color:var(--color-charcoal);padding:140px 0 80px;border-bottom:1px solid var(--color-border);">
  <div class="container">
    <div class="eyebrow" style="color:var(--color-gold-dark);margin-bottom:1rem;">Concierge</div>
    <h1 style="color:var(--color-charcoal);font-size:clamp(2.5rem,5vw,4rem);margin-bottom:1rem;line-height:1.1;">Get in Touch</h1>
    <p style="color:var(--color-charcoal-muted);max-width:600px;margin:0 auto;font-size:1rem;">Whether you need sizing advice, bespoke tailoring, or information on our ethical sourcing, our concierge team is here to assist you.</p>
  </div>
</div>

<section class="section-padding" style="background:var(--bg-page);min-height:60vh;">
  <div class="container">
    
    <div class="contact-grid fade-up">
      <!-- Left: Contact Form -->
      <div style="background:var(--bg-offwhite);padding:var(--spacing-lg);">
        <h2 style="font-family:var(--font-display);font-size:2rem;margin-bottom:1.5rem;">Send a Message</h2>
        <form onsubmit="event.preventDefault(); vastramToast('Message sent! Our concierge will reply within 24 hours.'); this.reset();">
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
            <label class="form-label">Email Address *</label>
            <input type="email" class="form-input" required>
          </div>
          <div class="form-group">
            <label class="form-label">Subject (Optional)</label>
            <select class="form-select">
              <option>General Inquiry</option>
              <option>Order Status</option>
              <option>Bespoke Tailoring</option>
              <option>Returns & Exchanges</option>
            </select>
          </div>
          <div class="form-group">
            <label class="form-label">Message *</label>
            <textarea class="form-textarea" required placeholder="How can we help you?"></textarea>
          </div>
          <button type="submit" class="btn btn-primary btn-full btn-lg">Send Message</button>
        </form>
      </div>
      
      <!-- Right: Info -->
      <div style="padding:var(--spacing-lg) 0;">
        <h2 style="font-family:var(--font-display);font-size:2rem;margin-bottom:2rem;">Contact Details</h2>
        
        <div class="contact-info-item">
          <span class="contact-info-label">Email</span>
          <a href="mailto:hello@vastram.in" class="contact-info-value" style="color:var(--color-charcoal);text-decoration:underline;">hello@vastram.in</a>
        </div>
        
        <div class="contact-info-item" style="margin-top:2rem;">
          <span class="contact-info-label">Phone</span>
          <span class="contact-info-value">+91 (800) 123-4567</span>
          <span style="font-size:0.8rem;color:var(--color-charcoal-muted);">Mon-Fri: 10:00 AM - 6:00 PM IST</span>
        </div>
        
        <div class="contact-info-item" style="margin-top:2rem;">
          <span class="contact-info-label">Flagship Studio</span>
          <span class="contact-info-value" style="line-height:1.5;">Vastram Heritage House<br>142 Artisan Marg, Block C<br>Bandra West, Mumbai 400050<br>India</span>
          <a href="#" style="font-size:0.85rem;font-weight:600;letter-spacing:0.05em;text-transform:uppercase;color:var(--color-gold-dark);margin-top:8px;text-decoration:underline;">Get Directions</a>
        </div>
        
        <!-- Placeholder Map -->
        <div style="margin-top:2rem;width:100%;height:200px;background:var(--color-charcoal);position:relative;display:flex;align-items:center;justify-content:center;">
          <i data-lucide="map-pin" style="color:var(--color-gold);width:32px;height:32px;position:relative;z-index:2;"></i>
          <div style="position:absolute;inset:0;opacity:0.2;background-image:url('data:image/svg+xml,%3Csvg width=\'20\' height=\'20\' viewBox=\'0 0 20 20\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\' fill-rule=\'evenodd\'%3E%3Ccircle cx=\'3\' cy=\'3\' r=\'3\'/%3E%3Ccircle cx=\'13\' cy=\'13\' r=\'3\'/%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>
        
      </div>
    </div>
    
  </div>
</section>

<?php include 'includes/footer.php'; ?>
