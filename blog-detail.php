<?php 
// Mock Article Data
$articleId = isset($_GET['id']) ? $_GET['id'] : 'indigo-master';

$articles = [
  'indigo-master' => [
    'title' => 'The Master of Indigo: Ancient Alchemy in a Modern World',
    'category' => 'Craft Heritage',
    'date' => 'June 12, 2026',
    'author' => 'Aisha Sharma',
    'image' => 'assets/img/blog-artisan.png'
  ],
  'sherwani-history' => [
    'title' => 'The Sherwani: From Mughal Courts to Modern Mandaps',
    'category' => 'Heritage',
    'date' => 'May 28, 2026',
    'author' => 'Vikram Singh',
    'image' => 'assets/img/product-sherwani-gold.png'
  ]
];

if(!isset($articles[$articleId])) $articleId = 'indigo-master';
$article = $articles[$articleId];

include 'includes/header.php'; 
?>

<div style="background:var(--bg-page);padding-top:120px;">
  
  <article class="container-narrow fade-up">
    <!-- Header -->
    <div style="text-align:center;margin-bottom:var(--spacing-md);">
      <div class="breadcrumb" style="justify-content:center;">
        <a href="index.php">Home</a> <span class="breadcrumb-sep">/</span> <a href="blog.php">Journal</a> <span class="breadcrumb-sep">/</span> <span><?php echo $article['category']; ?></span>
      </div>
      <h1 style="font-family:var(--font-display);font-size:clamp(2rem,5vw,3.5rem);line-height:1.15;color:var(--color-charcoal);margin:1.5rem 0;"><?php echo $article['title']; ?></h1>
      <div style="font-size:0.85rem;color:var(--color-charcoal-muted);letter-spacing:0.05em;text-transform:uppercase;">
        By <?php echo $article['author']; ?> &nbsp;·&nbsp; <?php echo $article['date']; ?>
      </div>
    </div>
    
    <!-- Hero Image -->
    <div style="aspect-ratio:16/9;overflow:hidden;margin-bottom:var(--spacing-xl);">
      <img src="<?php echo $article['image']; ?>" alt="<?php echo $article['title']; ?>" style="width:100%;height:100%;object-fit:cover;">
    </div>
    
    <!-- Content Body -->
    <div style="font-size:1.1rem;line-height:1.9;color:var(--color-charcoal);padding-bottom:var(--spacing-xl);">
      
      <p style="margin-bottom:1.5rem;"><span style="font-family:var(--font-display);font-size:3.5rem;line-height:0.8;float:left;margin-right:8px;color:var(--color-gold-dark);">I</span>n the narrow, sun-drenched alleys of Sanganer, a rhythm persists that defies the relentless pace of the modern world. Here, time is not measured in minutes or hours, but in the slow, meticulous fermentation of organic indigo leaves.</p>
      
      <p style="margin-bottom:1.5rem;">Harish Chandra, a seventh-generation dyer, dips his calloused hands into a stone vat. When he pulls them out, they are stained a deep, indelible blue—the mark of a master artisan.</p>
      
      <h3 style="font-family:var(--font-display);font-size:1.8rem;margin:2.5rem 0 1rem;">The Alchemy of Blue</h3>
      <p style="margin-bottom:1.5rem;">True indigo dyeing is not merely a chemical process; it is an act of faith. "The vat is a living entity," Harish explains, adjusting the muslin cloth draping his shoulders. "It breathes, it sleeps, it requires feeding. If you are angry when you approach the vat, the color will turn muddy. The dye responds to the spirit of the dyer."</p>
      
      <blockquote style="font-family:var(--font-display);font-size:1.5rem;font-style:italic;color:var(--color-gold-dark);border-left:2px solid var(--color-gold);padding-left:1.5rem;margin:2.5rem 0;">
        "If you are angry when you approach the vat, the color will turn muddy. The dye responds to the spirit of the dyer."
      </blockquote>
      
      <p style="margin-bottom:1.5rem;">This profound connection to the craft is what sets Vastram's handloom textiles apart. Where synthetic dyes offer flat, uniform perfection, natural indigo yields fabrics with depth, character, and a subtle variegation that tells the story of its creation.</p>
      
      <div style="aspect-ratio:4/3;overflow:hidden;margin:2.5rem 0;">
        <img src="assets/img/product-kurta-sage.png" alt="Handloom detail" style="width:100%;height:100%;object-fit:cover;">
      </div>
      
      <h3 style="font-family:var(--font-display);font-size:1.8rem;margin:2.5rem 0 1rem;">Preserving the Legacy</h3>
      <p style="margin-bottom:1.5rem;">As industrial manufacturing threatened to wipe out artisanal clusters, Vastram partnered with families like Harish's to ensure these skills are not lost to history. By guaranteeing fair wages and consistent demand, we are helping a new generation see the value and dignity in traditional craftsmanship.</p>
      
      <p style="margin-bottom:1.5rem;">The next time you wear a Vastram garment, take a moment to look closely at the fabric. You are not just wearing a piece of clothing; you are wrapped in centuries of knowledge, patience, and art.</p>
      
      <!-- Share / Tags -->
      <div style="margin-top:3rem;padding-top:1.5rem;border-top:1px solid var(--color-border);display:flex;justify-content:space-between;align-items:center;">
        <div style="display:flex;gap:12px;">
          <span style="font-size:0.75rem;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;">Share:</span>
          <a href="#" style="color:var(--color-charcoal-muted);"><i data-lucide="twitter" style="width:18px;height:18px;"></i></a>
          <a href="#" style="color:var(--color-charcoal-muted);"><i data-lucide="facebook" style="width:18px;height:18px;"></i></a>
          <a href="#" style="color:var(--color-charcoal-muted);"><i data-lucide="link" style="width:18px;height:18px;"></i></a>
        </div>
        <div style="display:flex;gap:8px;">
          <a href="shop.php?cat=kurtas" class="btn btn-outline btn-sm" style="padding:6px 12px;font-size:0.65rem;">Shop Kurtas</a>
        </div>
      </div>
      
    </div>
  </article>

</div>

<!-- RELATED ARTICLES -->
<section class="section-padding" style="background:var(--bg-offwhite);border-top:1px solid var(--color-border);">
  <div class="container">
    <div class="text-center mb-md fade-up">
      <h2 style="font-family:var(--font-display);font-size:2rem;">More from the Journal</h2>
    </div>
    <div class="grid grid-3 fade-up stagger-1">
      <a href="blog-detail.php?id=sherwani-history" class="blog-card">
        <div class="blog-card-img">
          <img src="assets/img/product-sherwani-gold.png" alt="History of Sherwani">
        </div>
        <div class="blog-card-category">Heritage</div>
        <div class="blog-card-title">The Sherwani: From Mughal Courts to Modern Mandaps</div>
      </a>
      <a href="blog.php" class="blog-card">
        <div class="blog-card-img">
          <img src="assets/img/product-nehru-navy.png" alt="How to Style">
        </div>
        <div class="blog-card-category">Style Guide</div>
        <div class="blog-card-title">How to Style a Nehru Jacket for Every Occasion</div>
      </a>
      <a href="blog.php" class="blog-card">
        <div class="blog-card-img">
          <img src="assets/img/product-kurta-cream.png" alt="Chikankari">
        </div>
        <div class="blog-card-category">Craft Focus</div>
        <div class="blog-card-title">Shadows in Thread: The Art of Lucknowi Chikankari</div>
      </a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
