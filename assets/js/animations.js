/* ==========================================================================
   YAHUUU GSAP ANIMATIONS
   --------------------------------------------------------------------------
   Handles:
   - Floating navbar scroll shrink animations
   - Split-word scroll reveals for bold storytelling
   - Hero banner parallax shifting
   - Card grid entry cascades
   - Viewport scroll triggered fade-ins
   ========================================================================== */

document.addEventListener("DOMContentLoaded", function() {

  // Verify GSAP is active before initializing animations
  if (typeof gsap === "undefined") {
    console.warn("GSAP is not loaded. Skipping animations.");
    return;
  }

  // Register ScrollTrigger plugin
  if (typeof ScrollTrigger !== "undefined") {
    gsap.registerPlugin(ScrollTrigger);
  }

  // Respect user preference for reduced motion
  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (prefersReducedMotion) {
    console.info("User prefers reduced motion. Skipping GSAP animations.");
    return;
  }

  // ==========================================================================
  // NAVBAR SCROLL SHRINK
  // ==========================================================================
  const navbar = document.querySelector(".navbar");
  if (navbar) {
    gsap.to(navbar, {
      paddingTop: "0.5rem",
      paddingBottom: "0.5rem",
      height: "70px",
      scrollTrigger: {
        trigger: "body",
        start: "top -50px",
        toggleActions: "play none none reverse",
        scrub: 0.5
      }
    });
  }

  // ==========================================================================
  // SPLIT-WORD TEXT REVEAL (SuperYou / Arih typography effect)
  // ==========================================================================
  const revealTexts = document.querySelectorAll(".reveal-text");
  revealTexts.forEach(element => {
    // Read words, wrap in containers to hide overflow
    const text = element.textContent.trim();
    const words = text.split(/\s+/);
    
    let splitHtml = "";
    words.forEach(word => {
      splitHtml += `
        <span class="split-word-outer" style="display: inline-block; overflow: hidden; margin-right: 0.25em; padding-bottom: 0.1em;">
          <span class="split-word-inner" style="display: inline-block; transform: translateY(105%); font-family: inherit; font-weight: inherit;">
            ${word}
          </span>
        </span>
      `;
    });

    element.innerHTML = splitHtml;

    // Trigger word entrance cascade as user scrolls to the section
    gsap.to(element.querySelectorAll(".split-word-inner"), {
      translateY: "0%",
      duration: 0.8,
      stagger: 0.03,
      ease: "power4.out",
      scrollTrigger: {
        trigger: element,
        start: "top 85%",
        toggleActions: "play none none none"
      }
    });
  });

  // ==========================================================================
  // HERO ENTRANCE (Fade up elements sequentially)
  // ==========================================================================
  const heroContent = document.querySelector(".hero-content");
  if (heroContent) {
    const subtitle = heroContent.querySelector(".hero-subtitle");
    const title = heroContent.querySelector(".hero-title");
    const cta = heroContent.querySelector(".hero-cta");

    const tl = gsap.timeline({ defaults: { ease: "power3.out" } });

    if (subtitle) {
      tl.fromTo(subtitle, 
        { opacity: 0, y: 30 }, 
        { opacity: 1, y: 0, duration: 0.8, delay: 0.4 }
      );
    }
    if (title) {
      tl.fromTo(title, 
        { opacity: 0, y: 40 }, 
        { opacity: 1, y: 0, duration: 1.0 }, 
        "-=0.6"
      );
    }
    if (cta) {
      tl.fromTo(cta, 
        { opacity: 0, y: 20 }, 
        { opacity: 1, y: 0, duration: 0.8 }, 
        "-=0.5"
      );
    }
  }

  // ==========================================================================
  // SECTION PARALLAX EFFECTS
  // ==========================================================================
  const parallaxWraps = document.querySelectorAll(".parallax-wrap");
  parallaxWraps.forEach(wrap => {
    const img = wrap.querySelector("img");
    if (img) {
      gsap.fromTo(img, 
        { y: "-10%" },
        { 
          y: "10%", 
          ease: "none",
          scrollTrigger: {
            trigger: wrap,
            start: "top bottom",
            end: "bottom top",
            scrub: true
          }
        }
      );
    }
  });

  // ==========================================================================
  // GRID CASCADES (Cards reveal column by column)
  // ==========================================================================
  const animatedGrids = document.querySelectorAll(".grid-cascade");
  animatedGrids.forEach(grid => {
    const cards = grid.children;
    if (cards.length > 0) {
      gsap.fromTo(cards, 
        { opacity: 0, y: 45 },
        { 
          opacity: 1, 
          y: 0, 
          duration: 0.8, 
          stagger: 0.12, 
          ease: "power2.out",
          scrollTrigger: {
            trigger: grid,
            start: "top 80%"
          }
        }
      );
    }
  });

  // ==========================================================================
  // VIEWPORT ENTRY FADES (Clean scroll triggers)
  // ==========================================================================
  const fadeUpItems = document.querySelectorAll(".fade-up-trigger");
  fadeUpItems.forEach(item => {
    gsap.fromTo(item, 
      { opacity: 0, y: 30 },
      { 
        opacity: 1, 
        y: 0, 
        duration: 0.8, 
        ease: "power2.out",
        scrollTrigger: {
          trigger: item,
          start: "top 85%"
        }
      }
    );
  });

});
