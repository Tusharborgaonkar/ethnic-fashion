<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Section</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background: #f5f5f5;
        }

        /* Footer Styles */
        footer {
            background: #1a1a1a;
            color: white;
            padding: 60px 50px 30px;
        }

        .footer-container {
            max-width: 1400px;
            margin: 0 auto;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-column h3 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 20px;
            letter-spacing: 1px;
        }

        .footer-column h4 {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 20px;
            letter-spacing: 0.5px;
        }

        .footer-column p {
            color: #999;
            line-height: 1.6;
            font-size: 14px;
        }

        .footer-column ul {
            list-style: none;
        }

        .footer-column ul li {
            margin-bottom: 12px;
        }

        .footer-column ul li a {
            color: #999;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s;
        }

        .footer-column ul li a:hover {
            color: white;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            background: #2a2a2a;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #999;
            transition: all 0.3s;
            text-decoration: none;
        }

        .social-links a:hover {
            background: white;
            color: #1a1a1a;
            transform: translateY(-3px);
        }

        .newsletter-form {
            display: flex;
            margin-top: 15px;
        }

        .newsletter-form input {
            flex: 1;
            padding: 12px 15px;
            background: #2a2a2a;
            border: none;
            color: white;
            border-radius: 3px 0 0 3px;
            font-size: 14px;
            outline: none;
        }

        .newsletter-form input::placeholder {
            color: #666;
        }

        .newsletter-form input:focus {
            background: #333;
        }

        .newsletter-form button {
            padding: 12px 25px;
            background: white;
            color: #1a1a1a;
            border: none;
            border-radius: 0 3px 3px 0;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .newsletter-form button:hover {
            background: #f0f0f0;
            transform: translateY(-2px);
        }

        .footer-bottom {
            border-top: 1px solid #2a2a2a;
            padding-top: 30px;
            text-align: center;
            color: #999;
            font-size: 14px;
        }

        /* Demo Content Section */
        .demo-content {
            min-height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-align: center;
            padding: 40px;
        }

        .demo-content h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .demo-content p {
            font-size: 18px;
            opacity: 0.9;
        }

        /* Responsive */
        @media (max-width: 768px) {
            footer {
                padding: 40px 20px 20px;
            }

            .footer-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .demo-content h1 {
                font-size: 32px;
            }
        }
    </style>
</head>
<body>
    <?php
    // Footer Configuration
    $companyName = "HOODIFO";
    $companyDescription = "Premium streetwear clothing with unique designs for fashion enthusiasts.";
    $currentYear = date('Y');
    
    // Quick Links
    $quickLinks = [
        ['name' => 'Home', 'url' => 'index.html'],
        ['name' => 'About', 'url' => 'about.html'],
        ['name' => 'Products', 'url' => 'products.html'],
        ['name' => 'Services', 'url' => 'services.html'],
        ['name' => 'Contact', 'url' => 'contact.html']
    ];
    
    // Customer Service Links
    $customerService = [
        ['name' => 'Shipping Info', 'url' => '#'],
        ['name' => 'Returns', 'url' => '#'],
        ['name' => 'Size Guide', 'url' => '#'],
        ['name' => 'FAQs', 'url' => '#']
    ];
    
    // Social Media Links
    $socialMedia = [
        ['name' => 'Facebook', 'icon' => 'fab fa-facebook-f', 'url' => '#'],
        ['name' => 'Instagram', 'icon' => 'fab fa-instagram', 'url' => '#'],
        ['name' => 'Twitter', 'icon' => 'fab fa-twitter', 'url' => '#'],
        ['name' => 'TikTok', 'icon' => 'fab fa-tiktok', 'url' => '#']
    ];
    ?>
    <!-- Footer Section -->
    <footer>
        <div class="footer-container">
            <div class="footer-grid">
                <!-- Company Info Column -->
                <div class="footer-column">
                    <h3><?php echo $companyName; ?></h3>
                    <p><?php echo $companyDescription; ?></p>
                </div>

                <!-- Quick Links Column -->
                <div class="footer-column">
                    <h4>Quick Links</h4>
                    <ul>
                        <?php foreach($quickLinks as $link): ?>
                        <li>
                            <a href="<?php echo $link['url']; ?>">
                                <?php echo $link['name']; ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Customer Service Column -->
                <div class="footer-column">
                    <h4>Customer Service</h4>
                    <ul>
                        <?php foreach($customerService as $service): ?>
                        <li>
                            <a href="<?php echo $service['url']; ?>">
                                <?php echo $service['name']; ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Connect With Us Column -->
                <div class="footer-column">
                    <h4>Connect With Us</h4>
                    <div class="social-links">
                        <?php foreach($socialMedia as $social): ?>
                        <a href="<?php echo $social['url']; ?>" 
                           aria-label="<?php echo $social['name']; ?>"
                           title="<?php echo $social['name']; ?>">
                            <i class="<?php echo $social['icon']; ?>"></i>
                        </a>
                        <?php endforeach; ?>
                    </div>
                    <p style="color: #999; font-size: 14px;">Subscribe to our newsletter</p>
                    <form class="newsletter-form" id="newsletterForm">
                        <input type="email" 
                               name="email" 
                               placeholder="Your email" 
                               required>
                        <button type="submit">Join</button>
                    </form>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <p>&copy; <?php echo $currentYear; ?> <?php echo $companyName; ?>. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        function initializeProductSliders() {
            $('.product-images-slider').each(function () {
                const $slider = $(this);

                // Prevent double initialization
                if ($slider.hasClass('slick-initialized')) {
                    return;
                }

                const $productSlider = $slider.closest('.product-slider');
                const $progressBar = $productSlider.find('.progress-bar');
                const totalSlides = $slider.children('div').length;

                $slider.slick({
                    dots: false,
                    arrows: false,
                    infinite: false,
                    speed: 400,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    swipe: true,
                    draggable: true,
                    adaptiveHeight: true
                });

                // 🔥 IMPORTANT: Use slick event binding AFTER initialization
                $slider.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
                    const progress = ((nextSlide + 1) / totalSlides) * 100;

                    $progressBar.css({
                        width: progress + '%',
                        transition: 'width 0.3s ease'
                    });
                });

                // Set initial progress
                $progressBar.css('width', (100 / totalSlides) + '%');
            });
        }

        $(document).ready(function () {
            initializeProductSliders();
        });

        $(window).on('resize', function () {
            $('.product-images-slider').each(function () {
                const $slider = $(this);

                if ($slider.hasClass('slick-initialized')) {
                    $slider.slick('unslick');
                }
            });

            setTimeout(function () {
                initializeProductSliders();
            }, 200);
        });

        // Newsletter Form Handler
        document.getElementById('newsletterForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const emailInput = this.querySelector('input[name="email"]');
            const email = emailInput.value;
            
            // Here you would typically send the email to your backend
            alert('Thank you for subscribing!\nEmail: ' + email);
            
            // Reset form
            this.reset();
        });

        // Smooth scroll for internal links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>
</html>