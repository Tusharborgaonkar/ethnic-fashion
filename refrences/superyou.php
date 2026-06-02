
<!doctype html>
<html class="js" lang="en">

  <head> 
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
   
    <!-- Gokwik theme code start -->
    <link rel="preconnect" href="https://pdp.gokwik.co" crossorigin>
    <link rel="preconnect" href="https://api.gokwik.co" crossorigin>
    <link rel="dns-prefetch" href="https://pdp.gokwik.co/">
    <link rel="dns-prefetch" href="https://api.gokwik.co">
    


  <script>
    window.gaTag = {ga4: "G-4C63RJ23J4"}
    window.merchantInfo  = {
            mid: "1944k64z7wbg",
            environment: "production",
            type: "merchantInfo",
      		storeId: "90225901858",
      		fbpixel: "572741561921955",
          }
    var productFormSelector = '';
    var cart = {"note":"","attributes":{"_ly_value":"90abe78f-30be-4926-b3db-d473e340e3aa","_attribution":"Smart Cart 2.0","_source":"Rebuy","_barId":"16230-16064-15979-15963-13810-12684-4405921c-dfeb-4982-83fd-dff8199ecc6d"},"original_total_price":0,"total_price":0,"total_discount":0,"total_weight":0.0,"item_count":0,"items":[],"requires_shipping":false,"currency":"INR","items_subtotal_price":0,"cart_level_discount_applications":[],"checkout_charge_amount":0}
    var templateName = 'index'
  </script>

  <script src="https://pdp.gokwik.co/merchant-integration/build/merchant.integration.js?v4" defer></script>

  <script>
    if ('$' && '$' !== 'undefined') {
        const script = document.createElement('script');
        script.src = "https://www.googletagmanager.com/gtag/js?id="+ window.gaTag.ga4;
        script.defer = true;
        document.head.appendChild(script);
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', window.gaTag.ga4 ,{ 'groups': 'GA4','debug_mode':true });
    }
  </script>

  <script>
    window.addEventListener('gokwikLoaded', e => {
    var buyNowButton = document.getElementById('gokwik-buy-now');
if (buyNowButton) {
    buyNowButton.disabled = false;
    buyNowButton.classList.remove('disabled');
}
      var gokwikCheckoutButtons = document.querySelectorAll('.gokwik-checkout button');
gokwikCheckoutButtons.forEach(function(button) {
    button.disabled = false;
    button.classList.remove('disabled');
});
    //Do Not Touch This Line
    let clicked = false;
    let gokwikAdsID = "";
    const gokwikCheckoutEnable = (arrayOfElement) => {
      if (arrayOfElement.length === 0) return null;
      if (arrayOfElement.length > 1) {
        arrayOfElement.forEach(data => {
          if (data) {
            let targetElement = document.querySelectorAll(data);
            if (targetElement.length >= 1) {
              targetElement.forEach(element => {
                
                element.addEventListener("click", () => {
                  if (!clicked && gokwikAdsID) {
                    clicked = true;
                    gtag('event', 'conversion', {
                      'send_to': gokwikAdsID.toString().trim(),
                      'value': 0.0,
                      'currency': '',
                      'transaction_id': ''
                    });
                  }
                });
              });
            }
          }
        });
      }
    };
    gokwikCheckoutEnable(["#gokwik-buy-now",".gokwik-checkout button"])
    gokwikSdk.on('modal_closed', ()=>{
        clicked = false;
    })

    const targetElement = document.querySelector("body");
      function debounce(func, delay) {
        let timeoutId;
        return function () {
          const context = this;
          const args = arguments;
          clearTimeout(timeoutId);
          timeoutId = setTimeout(function () {
            func.apply(context, args);
          }, delay);
        };
      }

      const observer = new MutationObserver(() => {
     const addToCartButton = document.querySelector("button[name='add']");
const gokwikBuyNowButton = document.getElementById('gokwik-buy-now');

if (addToCartButton && addToCartButton.disabled) {
    gokwikBuyNowButton?.setAttribute('disabled', 'disabled');
} else {
    gokwikBuyNowButton?.removeAttribute('disabled');
}
        debouncedMyTimer();
      });

      const debouncedMyTimer = debounce(() => {
        observer.disconnect();
        //Do Not Touch this function
    
        gokwikCheckoutEnable(["#gokwik-buy-now",".gokwik-checkout button"])
        var gokwikCheckoutButtons = document.querySelectorAll('.gokwik-checkout button');
gokwikCheckoutButtons.forEach(function(button) {
    button.disabled = false;
    button.classList.remove('disabled');
});
        observer.observe(targetElement, { childList: true, subtree: true });
      }, 700);

      const config = { childList: true, subtree: true };
      observer.observe(targetElement, config);
    });
  </script>


  <script>
  let  targetNode = document.querySelector('html')
  let gkButtonCode = '<div class="gokwik-checkout" ><button type="button" style="width: 100% !important; height: 50px; background: #e32303;" class="btn-theme" onclick="onCheckoutClick(this)"> <span class="btn-text" style="display: flex; flex-direction: row; align-items: center; justify-content: center; width: 100%;"><span style="color: white !important; font-size: 16px;">Checkout</span><span style="font-size: 14px; color: #fff; margin: 0 10px;"></span><span class="pay-opt-icon" style="display: flex; align-items: center;"><img src="https://cdn.gokwik.co/v4/images/upi-icons.svg" alt="Payment Icons" style="height: 20px;"> </span> </span> <div style="display: none;"><div class="cir-loader">Loading..</div></div></button></div>'
  let buttonAdded = false
  let parsedBtnCode = new DOMParser().parseFromString(gkButtonCode, 'text/html').querySelectorAll('.gokwik-checkout')[0];

  const sideCartCallback = function(mutationList){
      mutationList.forEach((mutation) => {
         
          let sideCartButton = document.querySelector('.rebuy-cart__checkout-button');
        
     sideCartButton  &&   sideCartButton.replaceWith(parsedBtnCode); 
        
        
      })
    }
     const config = { attributes: true, childList: true, subtree: true };

  
      const customBtn = new MutationObserver(sideCartCallback)
      customBtn.observe(targetNode, config)
</script>





<style>
  
  .gokwik-checkout {
    width: 100%;
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: end;
    margin-bottom: 10px;
  }
  .gokwik-checkout button {
    max-width:100%;
    width: 100%;
    border: none;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #ef1400;
    position: relative;
    cursor: pointer;
    border-radius: 0px;
    height:48px;
    font-family: inherit;
    padding: 0 3rem;
    border: 1px solid #EF1400;
  }
  #gokwik-buy-now.disabled, .gokwik-disabled{
    opacity:0.5;
    cursor: not-allowed;
    }
    .gokwik-checkout button:focus {
    outline: none;
  }
  .gokwik-checkout button > span {
    display: flex;
  }
  .gokwik-checkout button > span.btn-text {
    display: flex;
    flex-direction: column;
    color: #ffffff;
    align-items: flex-start;
  }
  .gokwik-checkout button > span.btn-text > span:last-child {
  	padding-top: 2px;
      font-size: 10px;
  }
  .gokwik-checkout button > span.btn-text > span:first-child {
     font-size: 1.5rem;
    letter-spacing: .1rem;
    /* font-weight: 200; */
  }
  .gokwik-checkout button > span.pay-opt-icon img:first-child {
    margin-right: 10px;
    margin-left: 10px;
  }
  /*   Additional */
  .gokwik-checkout button.disabled{
    opacity:0.5;
    cursor: not-allowed;
    }
  .gokwik-checkout button.disabled .addloadr#btn-loader{
     display: flex!important;
  }
    #gokwik-buy-now.disabled .addloadr#btn-loader{
     display: flex!important;
  }
      #gokwik-buy-now:disabled{
     cursor: not-allowed;
  }

    #cart-notification__links .gokwik-checkout button > span.btn-text{
      color: white!important;
    }



  

  
   #gokwik-buy-now {
     background: #ef1400;
     width: 100%;
     color: #ffffff;
     cursor: pointer;
     line-height: 1;
     border: none;
      padding: 0 3rem;
     font-size: 16px;
     letter-spacing: .1rem;
      margin-bottom: 10px;
     position:relative;
     height: 47.25px;
     font-family: inherit;
     border: 1px solid #EF1400;
   }


  
  /* Loader CSS */
    #btn-loader{
      display: none;
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      justify-content: center;
      align-items: center;
      background:#ef1400;
      border-radius:0px;

    }

  .cir-loader,
  .cir-loader:after {
    border-radius: 50%;
    width: 35px;
    height: 35px;
  }
  .cir-loader {
    margin: 6px auto;
    font-size: 10px;
    position: relative;
    text-indent: -9999em;
    border-top: 0.5em solid rgba(255, 255, 255, 0.2);
    border-right: 0.5em solid rgba(255, 255, 255, 0.2);
    border-bottom: 0.5em solid rgba(255, 255, 255, 0.2);
    border-left: 0.5em solid #ffffff;
    -webkit-transform: translateZ(0);
    -ms-transform: translateZ(0);
    transform: translateZ(0);
    -webkit-animation: load8 1.1s infinite linear;
    animation: load8 1.1s infinite linear;
  }
  @-webkit-keyframes load8 {
    0% {
      -webkit-transform: rotate(0deg);
      transform: rotate(0deg);
    }
    100% {
      -webkit-transform: rotate(360deg);
      transform: rotate(360deg);
    }
  }
  @keyframes load8 {
    0% {
      -webkit-transform: rotate(0deg);
      transform: rotate(0deg);
    }
    100% {
      -webkit-transform: rotate(360deg);
      transform: rotate(360deg);
    }
  }
</style>
    <!-- Gokwik theme code End -->

   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=false;" >
    <meta name="theme-color" content="">
    <link rel="canonical" href="https://superyou.in/"><link rel="icon" type="image/png" href="//superyou.in/cdn/shop/files/34x34-Favicon.jpg?crop=center&height=32&v=1731861022&width=32"><link rel="preconnect" href="https://fonts.shopifycdn.com" crossorigin><link rel="preconnect" href="https://fonts.shopifycdn.com" crossorigin>
    <link rel="preconnect" href="https://cdn.shopify.com" crossorigin>

    <link rel="dns-prefetch" href="https://fonts.shopifycdn.com">
    <link rel="dns-prefetch" href="https://cdn.shopify.com">
    <!-- Replace existing script tags with this pattern -->

     
    <link rel="preload" href="//superyou.in/cdn/shop/t/51/assets/custom.css?v=143647824364255735781766474569" as="style">
       <link rel="preload" href="//superyou.in/cdn/shop/t/51/assets/base.css?v=63571914536404561661780153147" as="style">
       <link rel="preload" href="//superyou.in/cdn/shop/t/51/assets/style.css?v=74450056810172358961766474628" as="style">
       <link rel="preload" href="//superyou.in/cdn/shop/t/51/assets/custom-style.css?v=77922223269210361051772889571" as="style">
    <link rel="stylesheet" href="//superyou.in/cdn/shop/t/51/assets/custom.css?v=143647824364255735781766474569" media="print" onload="this.media='all'">
    
  <script>
      // Initialize script loading
      document.addEventListener('DOMContentLoaded', function() {
        const criticalScripts = [
          '//superyou.in/cdn/shop/t/51/assets/constants.js?v=132983761750457495441766474567',
          '//superyou.in/cdn/shop/t/51/assets/pubsub.js?v=158357773527763999511766474615',
          '//superyou.in/cdn/shop/t/51/assets/global.js?v=96614033362870815651766474572'
        ];
      
        const nonCriticalScripts = [
          '//superyou.in/cdn/shop/t/51/assets/details-disclosure.js?v=32198162727434593371766474570',
          '//superyou.in/cdn/shop/t/51/assets/details-modal.js?v=34757073096819458691766474570',
          '//superyou.in/cdn/shop/t/51/assets/search-form.js?v=133129549252120666541766474619'
        ];
      
        // Load critical scripts immediately
        ScriptLoader.loadParallel(criticalScripts, { priority: 'high' });
      
        // Load non-critical scripts after page load
        window.addEventListener('load', () => {
          ScriptLoader.loadParallel(nonCriticalScripts, { priority: 'low' });
        });
      
        // Conditionally load feature-specific scripts
        
          ScriptLoader.load('//superyou.in/cdn/shop/t/51/assets/animations.js?v=88693664871331136111766474550', { priority: 'low' });
        
      
        
          ScriptLoader.load('//superyou.in/cdn/shop/t/51/assets/predictive-search.js?v=57209189334897115771766474613', { priority: 'low' });
        
      });
</script>
     <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "OnlineStore",
        "name": "SuperYou",
        "url": "https://superyou.in/",
        "contactPoint": {
          "contactType": "Customer Service",
          "email": "hypedesk@superyou.in",
          "telephone": "+91-865-545-0110"
        },
        "hasMerchantReturnPolicy": {
          "@type": "MerchantReturnPolicy",
          "applicableCountry": ["IN"],
          "returnPolicyCategory": "https://schema.org/MerchantReturnFiniteReturnWindow",
          "merchantReturnDays": 7,
          "returnMethod": "https://schema.org/ReturnByMail",
          "returnFees": "https://schema.org/FreeReturn",
          "returnPolicy": "https://superyou.in/policies/refund-policy"
        },
        "sameAs": [
          "https://youtube.com/@be.superyou?si=LC2vtMyoRiIbeK1V",
          "https://www.linkedin.com/company/besuperyou/",
          "https://www.instagram.com/be.superyou",
          "https://www.facebook.com/profile.php?id=61566379874453"
        ]
      }
    </script>
    <script>
  (function() {
    // Consolidated font loading and optimization
    if ("fonts" in document) {
      const fontUrls = [
        "//superyou.in/cdn/fonts/roboto/roboto_n4.2019d890f07b1852f56ce63ba45b2db45d852cba.woff2",
        "//superyou.in/cdn/fonts/archivo/archivo_n7.651b020b3543640c100112be6f1c1b8e816c7f13.woff2",
        "//superyou.in/cdn/shop/t/51/assets/HelveticaNowDisplay-Bold.woff2?v=24868283273673930991766474573",
        "//superyou.in/cdn/shop/t/51/assets/HelveticaNowVar.ttf?v=85829420661730474241766521971"
      ];
      
      Promise.all(
        fontUrls.map(url => 
          new FontFace('CustomFont', `url(${url})`).load()
          .catch(err => console.warn('Font loading error:', err))
        )
      ).then(fonts => {
        fonts.forEach(font => {
          if (font) document.fonts.add(font);
        });
        document.documentElement.classList.add('fonts-loaded');
      });

      // Add font performance mark
      window.performance && window.performance.mark && 
      window.performance.mark('fonts.loaded');
    }
  })();
</script>
<script>
      window.shopUrl = 'https://superyou.in';
      window.routes = {
        cart_add_url: '/cart/add',
        cart_change_url: '/cart/change',
        cart_update_url: '/cart/update',
        cart_url: '/cart',
        predictive_search_url: '/search/suggest',
      };

      window.cartStrings = {
        error: `There was an error while updating your cart. Please try again.`,
        quantityError: `You can only add [quantity] of this item to your cart.`,
      };
   window.cart = {
        note: null,
        attributes: {},
        items: []
      };
  window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');

      window.variantStrings = {
        addToCart: `Add to cart`,
        soldOut: `Sold out`,
        unavailable: `Unavailable`,
        unavailable_with_option: `[value] - Unavailable`,
      };

      window.quickOrderListStrings = {
        itemsAdded: `[quantity] items added`,
        itemAdded: `[quantity] item added`,
        itemsRemoved: `[quantity] items removed`,
        itemRemoved: `[quantity] item removed`,
        viewCart: `View cart`,
        each: `[money]/ea`,
        min_error: `This item has a minimum of [min]`,
        max_error: `This item has a maximum of [max]`,
        step_error: `You can only add this item in increments of [step]`,
      };

      window.accessibilityStrings = {
        imageAvailable: `Image [index] is now available in gallery view`,
        shareSuccess: `Link copied to clipboard`,
        pauseSlideshow: `Pause slideshow`,
        playSlideshow: `Play slideshow`,
        recipientFormExpanded: `Gift card recipient form expanded`,
        recipientFormCollapsed: `Gift card recipient form collapsed`,
        countrySelectorSearchCount: `[count] countries/regions found`,
      };
    </script>
    <script>
    (function() {
      function updateCart() {
        const cartUpdateEvent = new CustomEvent('cart:update', {
          bubbles: true
        });
        document.dispatchEvent(cartUpdateEvent);
      }

      function handleCartError(error) {
        const errorEvent = new CustomEvent('cart:error', {
          bubbles: true,
          detail: { error: error }
        });
        document.dispatchEvent(errorEvent);
      }

      // Make functions globally available
      window.shopifyCartFunctions = {
        updateCart: updateCart,
        handleCartError: handleCartError
      };
    })();
  </script><title>
      SuperYou by Ranveer Singh | Protein snacks and Fermented Yeast Protein
      
    </title><meta name="description" content="Craving for a healthy snack? Superyou by Ranveer Singh brings you protein-packed wafers with high protein, fiber, and zero added sugar. Savor delicious flavors like chocolate and peanut butter. Try them today!"><!-- Article Specific Tags -->
    
    <script src="//superyou.in/cdn/shop/t/51/assets/constants.js?v=132983761750457495441766474567" defer="defer"></script>
    <script src="//superyou.in/cdn/shop/t/51/assets/pubsub.js?v=158357773527763999511766474615" defer="defer"></script>
    <script src="//superyou.in/cdn/shop/t/51/assets/global.js?v=96614033362870815651766474572" defer="defer"></script>
    <script src="//superyou.in/cdn/shop/t/51/assets/details-disclosure.js?v=32198162727434593371766474570" defer="defer"></script>
    <script src="//superyou.in/cdn/shop/t/51/assets/details-modal.js?v=34757073096819458691766474570" defer="defer"></script>
    <script src="//superyou.in/cdn/shop/t/51/assets/search-form.js?v=133129549252120666541766474619" defer="defer"></script>  
    <script src="//superyou.in/cdn/shop/t/51/assets/custom-js.js?v=20144384098799971291766474568" defer="defer"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/timothydesign/script/split-type.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/split-type@0.3.4/umd/index.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
    <script src="https://assets.codepen.io/16327/Flip.min.js" defer></script> 
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" defer></script><script src="//superyou.in/cdn/shop/t/51/assets/animations.js?v=88693664871331136111766474550" defer="defer"></script><script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');</script><meta name="google-site-verification" content="obAKFpB_jQp5hmzQudVQIwxbvBz9Eq_vQA71ie0RBqQ">
<meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/90225901858/digital_wallets/dialog">
<script async="async" src="/checkouts/internal/preloads.js?locale=en-IN"></script>
<script id="shopify-features" type="application/json">{"accessToken":"3f56b6f8c65eb22b11581347c7a9e001","betas":["rich-media-storefront-analytics"],"domain":"superyou.in","predictiveSearch":true,"shopId":90225901858,"locale":"en"}</script>
<script>var Shopify = Shopify || {};
Shopify.shop = "867a08-5f.myshopify.com";
Shopify.locale = "en";
Shopify.currency = {"active":"INR","rate":"1.0"};
Shopify.country = "IN";
Shopify.theme = {"name":"Latest Version - 300526","id":184147804450,"schema_name":"Refresh","schema_version":"15.2.0","theme_store_id":1567,"role":"main"};
Shopify.theme.handle = "null";
Shopify.theme.style = {"id":null,"handle":null};
Shopify.cdnHost = "superyou.in/cdn";
Shopify.routes = Shopify.routes || {};
Shopify.routes.root = "/";
Shopify.shopJsCdnBaseUrl = "https://cdn.shopify.com/shopifycloud/shop-js";</script>
<script type="module">!function(o){(o.Shopify=o.Shopify||{}).modules=!0}(window);</script>
<script>!function(o){function n(){var o=[];function n(){o.push(Array.prototype.slice.apply(arguments))}return n.q=o,n}var t=o.Shopify=o.Shopify||{};t.loadFeatures=n(),t.autoloadFeatures=n()}(window);</script>
<script>
  window.Shopify = window.Shopify || {};
  window.Shopify.SignInWithShop = window.Shopify.SignInWithShop || {};
  window.Shopify.SignInWithShop.assetMetrics = { sampleRate: 0.01 };
  window.Shopify.SignInWithShop.eligible = true;
</script>
<script id="shop-js-analytics" type="application/json">{"pageType":"index"}</script>
<script>
  window.Shopify = window.Shopify || {};
  if (!window.Shopify.featureAssets) window.Shopify.featureAssets = {};
  window.Shopify.featureAssets['shop-js'] = {"shop-toast-manager":["modules/v2/loader.shop-toast-manager.en.esm.js"],"listener":["modules/v2/loader.listener.en.esm.js"],"shop-login-button":["modules/v2/loader.shop-login-button.en.esm.js"],"shop-cash-offers":["modules/v2/loader.shop-cash-offers.en.esm.js"],"init-windoid":["modules/v2/loader.init-windoid.en.esm.js"],"init-shop-user-recognition":["modules/v2/loader.init-shop-user-recognition.en.esm.js"],"init-fed-cm":["modules/v2/loader.init-fed-cm.en.esm.js"],"init-shop-email-lookup-coordinator":["modules/v2/loader.init-shop-email-lookup-coordinator.en.esm.js"],"avatar":["modules/v2/loader.avatar.en.esm.js"],"checkout-modal":["modules/v2/loader.checkout-modal.en.esm.js"],"shop-button":["modules/v2/loader.shop-button.en.esm.js"],"init-shop-cart-sync":["modules/v2/loader.init-shop-cart-sync.en.esm.js"],"shop-user-recognition":["modules/v2/loader.shop-user-recognition.en.esm.js"],"pay-button":["modules/v2/loader.pay-button.en.esm.js"],"init-customer-accounts":["modules/v2/loader.init-customer-accounts.en.esm.js"],"shop-login":["modules/v2/loader.shop-login.en.esm.js"],"shop-cart-sync":["modules/v2/loader.shop-cart-sync.en.esm.js"],"init-customer-accounts-sign-up":["modules/v2/loader.init-customer-accounts-sign-up.en.esm.js"],"shop-follow-button":["modules/v2/loader.shop-follow-button.en.esm.js"],"init-shop-for-new-customer-accounts":["modules/v2/loader.init-shop-for-new-customer-accounts.en.esm.js"],"lead-capture":["modules/v2/loader.lead-capture.en.esm.js"],"payment-terms":["modules/v2/loader.payment-terms.en.esm.js"]};
</script>
<script>(function() {
  var isLoaded = false;
  function asyncLoad() {
    if (isLoaded) return;
    isLoaded = true;
    var urls = ["\/\/cdn.shopify.com\/proxy\/df65f71ee59bdc9df739b8f93cc328daa587ce83fbbfb88524cf7cf4cc582a7f\/api.goaffpro.com\/loader.js?shop=867a08-5f.myshopify.com\u0026sp-cache-control=cHVibGljLCBtYXgtYWdlPTkwMA","https:\/\/cdn.rebuyengine.com\/onsite\/js\/rebuy.js?shop=867a08-5f.myshopify.com","https:\/\/s3.ap-south-1.amazonaws.com\/cdn.limechat.ai\/packs\/js\/lc_fb_shopify.prod.min.js?shop=867a08-5f.myshopify.com","https:\/\/s3.ap-south-1.amazonaws.com\/cdn.limechat.ai\/packs\/js\/lc_fb_shopify.prod.min.js?shop=867a08-5f.myshopify.com","https:\/\/cdn.rebuyengine.com\/onsite\/js\/rebuy.js?shop=867a08-5f.myshopify.com","https:\/\/svc.nitrocommerce.ai\/v1\/services\/shopify\/xshopify.js?_t=7b5f6943-86ff-4dea-88e0-285e4e7deb3a\u0026shop=867a08-5f.myshopify.com"];
    for (var i = 0; i < urls.length; i++) {
      var s = document.createElement('script');
      s.type = 'text/javascript';
      s.async = true;
      s.src = urls[i];
      var x = document.getElementsByTagName('script')[0];
      x.parentNode.insertBefore(s, x);
    }
  };
  if(window.attachEvent) {
    window.attachEvent('onload', asyncLoad);
  } else {
    window.addEventListener('load', asyncLoad, false);
  }
})();</script>
<script id="__st">var __st={"a":90225901858,"offset":19800,"reqid":"f1a7e6b5-0298-4fb2-b762-2a08947fad09-1780395617","pageurl":"superyou.in\/","u":"4f13ad12b61c","p":"home"};</script>
<script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
<script id="captcha-bootstrap">!function(){'use strict';const t='contact',e='account',n='new_comment',o=[[t,t],['blogs',n],['comments',n],[t,'customer']],c=[[e,'customer_login'],[e,'guest_login'],[e,'recover_customer_password'],[e,'create_customer']],r=t=>t.map((([t,e])=>`form[action*='/${t}']:not([data-nocaptcha='true']) input[name='form_type'][value='${e}']`)).join(','),a=t=>()=>t?[...document.querySelectorAll(t)].map((t=>t.form)):[];function s(){const t=[...o],e=r(t);return a(e)}const i='password',u='form_key',d=['recaptcha-v3-token','g-recaptcha-response','h-captcha-response',i],f=()=>{try{return window.sessionStorage}catch{return}},m='__shopify_v',_=t=>t.elements[u];function p(t,e,n=!1){try{const o=window.sessionStorage,c=JSON.parse(o.getItem(e)),{data:r}=function(t){const{data:e,action:n}=t;return t[m]||n?{data:e,action:n}:{data:t,action:n}}(c);for(const[e,n]of Object.entries(r))t.elements[e]&&(t.elements[e].value=n);n&&o.removeItem(e)}catch(o){console.error('form repopulation failed',{error:o})}}const l='form_type',E='cptcha';function T(t){t.dataset[E]=!0}const w=window,h=w.document,L='Shopify',v='ce_forms',y='captcha';let A=!1;((t,e)=>{const n=(g='f06e6c50-85a8-45c8-87d0-21a2b65856fe',I='https://cdn.shopify.com/shopifycloud/storefront-forms-hcaptcha/ce_storefront_forms_captcha_hcaptcha.v1.5.2.iife.js',D={infoText:'Protected by hCaptcha',privacyText:'Privacy',termsText:'Terms'},(t,e,n)=>{const o=w[L][v],c=o.bindForm;if(c)return c(t,g,e,D).then(n);var r;o.q.push([[t,g,e,D],n]),r=I,A||(h.body.append(Object.assign(h.createElement('script'),{id:'captcha-provider',async:!0,src:r})),A=!0)});var g,I,D;w[L]=w[L]||{},w[L][v]=w[L][v]||{},w[L][v].q=[],w[L][y]=w[L][y]||{},w[L][y].protect=function(t,e){n(t,void 0,e),T(t)},Object.freeze(w[L][y]),function(t,e,n,w,h,L){const[v,y,A,g]=function(t,e,n){const i=e?o:[],u=t?c:[],d=[...i,...u],f=r(d),m=r(i),_=r(d.filter((([t,e])=>n.includes(e))));return[a(f),a(m),a(_),s()]}(w,h,L),I=t=>{const e=t.target;return e instanceof HTMLFormElement?e:e&&e.form},D=t=>v().includes(t);t.addEventListener('submit',(t=>{const e=I(t);if(!e)return;const n=D(e)&&!e.dataset.hcaptchaBound&&!e.dataset.recaptchaBound,o=_(e),c=g().includes(e)&&(!o||!o.value);(n||c)&&t.preventDefault(),c&&!n&&(function(t){try{if(!f())return;!function(t){const e=f();if(!e)return;const n=_(t);if(!n)return;const o=n.value;o&&e.removeItem(o)}(t);const e=Array.from(Array(32),(()=>Math.random().toString(36)[2])).join('');!function(t,e){_(t)||t.append(Object.assign(document.createElement('input'),{type:'hidden',name:u})),t.elements[u].value=e}(t,e),function(t,e){const n=f();if(!n)return;const o=[...t.querySelectorAll(`input[type='${i}']`)].map((({name:t})=>t)),c=[...d,...o],r={};for(const[a,s]of new FormData(t).entries())c.includes(a)||(r[a]=s);n.setItem(e,JSON.stringify({[m]:1,action:t.action,data:r}))}(t,e)}catch(e){console.error('failed to persist form',e)}}(e),e.submit())}));const S=(t,e)=>{t&&!t.dataset[E]&&(n(t,e.some((e=>e===t))),T(t))};for(const o of['focusin','change'])t.addEventListener(o,(t=>{const e=I(t);D(e)&&S(e,y())}));const B=e.get('form_key'),M=e.get(l),P=B&&M;t.addEventListener('DOMContentLoaded',(()=>{const t=y();if(P)for(const e of t)e.elements[l].value===M&&p(e,B);[...new Set([...A(),...v().filter((t=>'true'===t.dataset.shopifyCaptcha))])].forEach((e=>S(e,t)))}))}(h,new URLSearchParams(w.location.search),n,t,e,['guest_login'])})(!1,!0)}();</script>
<script integrity="sha256-JjoPp5ZfB1sSAs5SQaol1x1GgvveM+BgmRzyDexInEQ=" data-source-attribution="shopify.loadfeatures" defer="defer" src="//superyou.in/cdn/shopifycloud/storefront/assets/storefront/load_feature-1bd60354.js" crossorigin="anonymous"></script>
<script data-source-attribution="shopify.dynamic_checkout.dynamic.init">var Shopify=Shopify||{};Shopify.PaymentButton=Shopify.PaymentButton||{isStorefrontPortableWallets:!0,init:function(){window.Shopify.PaymentButton.init=function(){};var t=document.createElement("script");t.src="https://superyou.in/cdn/shopifycloud/portable-wallets/latest/portable-wallets.en.js",t.type="module",document.head.appendChild(t)}};
</script>
<script data-source-attribution="shopify.dynamic_checkout.buyer_consent">
  function portableWalletsHideBuyerConsent(e){var t=document.getElementById("shopify-buyer-consent"),n=document.getElementById("shopify-subscription-policy-button");t&&n&&(t.classList.add("hidden"),t.setAttribute("aria-hidden","true"),n.removeEventListener("click",e))}function portableWalletsShowBuyerConsent(e){var t=document.getElementById("shopify-buyer-consent"),n=document.getElementById("shopify-subscription-policy-button");t&&n&&(t.classList.remove("hidden"),t.removeAttribute("aria-hidden"),n.addEventListener("click",e))}window.Shopify?.PaymentButton&&(window.Shopify.PaymentButton.hideBuyerConsent=portableWalletsHideBuyerConsent,window.Shopify.PaymentButton.showBuyerConsent=portableWalletsShowBuyerConsent);
</script>
<script data-source-attribution="shopify.dynamic_checkout.cart.bootstrap">document.addEventListener("DOMContentLoaded",(function(){function t(){return document.querySelector("shopify-accelerated-checkout-cart, shopify-accelerated-checkout")}if(t())Shopify.PaymentButton.init();else{new MutationObserver((function(e,n){t()&&(Shopify.PaymentButton.init(),n.disconnect())})).observe(document.body,{childList:!0,subtree:!0})}}));
</script>
<script async="async" integrity="sha256-hlq21VGceRKy8z+Fjhropk1BwDPACP0RdQ5rBrATyUo=" src="//cdn.shopify.com/shopifycloud/storefront/assets/storefront/origin_trials-67b41cb9.js" crossorigin="anonymous"></script>
<script id="sections-script" data-sections="header" defer="defer" src="//superyou.in/cdn/shop/t/51/compiled_assets/scripts.js?v=184325197989695213571766474657"></script>
<script id="shopify-cfh-end">window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.end');</script>


    <style data-shopify>
      @font-face {
  font-family: Roboto;
  font-weight: 400;
  font-style: normal;
  font-display: swap;
  src: url("//superyou.in/cdn/fonts/roboto/roboto_n4.2019d890f07b1852f56ce63ba45b2db45d852cba.woff2") format("woff2"),
       url("//superyou.in/cdn/fonts/roboto/roboto_n4.238690e0007583582327135619c5f7971652fa9d.woff") format("woff");
}

      @font-face {
  font-family: Roboto;
  font-weight: 700;
  font-style: normal;
  font-display: swap;
  src: url("//superyou.in/cdn/fonts/roboto/roboto_n7.f38007a10afbbde8976c4056bfe890710d51dec2.woff2") format("woff2"),
       url("//superyou.in/cdn/fonts/roboto/roboto_n7.94bfdd3e80c7be00e128703d245c207769d763f9.woff") format("woff");
}

      @font-face {
  font-family: Roboto;
  font-weight: 400;
  font-style: italic;
  font-display: swap;
  src: url("//superyou.in/cdn/fonts/roboto/roboto_i4.57ce898ccda22ee84f49e6b57ae302250655e2d4.woff2") format("woff2"),
       url("//superyou.in/cdn/fonts/roboto/roboto_i4.b21f3bd061cbcb83b824ae8c7671a82587b264bf.woff") format("woff");
}

      @font-face {
  font-family: Roboto;
  font-weight: 700;
  font-style: italic;
  font-display: swap;
  src: url("//superyou.in/cdn/fonts/roboto/roboto_i7.7ccaf9410746f2c53340607c42c43f90a9005937.woff2") format("woff2"),
       url("//superyou.in/cdn/fonts/roboto/roboto_i7.49ec21cdd7148292bffea74c62c0df6e93551516.woff") format("woff");
}

      @font-face {
  font-family: Archivo;
  font-weight: 700;
  font-style: normal;
  font-display: swap;
  src: url("//superyou.in/cdn/fonts/archivo/archivo_n7.651b020b3543640c100112be6f1c1b8e816c7f13.woff2") format("woff2"),
       url("//superyou.in/cdn/fonts/archivo/archivo_n7.7e9106d320e6594976a7dcb57957f3e712e83c96.woff") format("woff");
}


      
        :root,
        .color-scheme-1 {
          --color-background: 255,255,255;
        
          --gradient-background: #ffffff;
        

        

        --color-foreground: 239,20,0;
        --color-background-contrast: 191,191,191;
        --color-shadow: 239,20,0;
        --color-button: 239,20,0;
        --color-button-text: 239,20,0;
        --color-secondary-button: 255,255,255;
        --color-secondary-button-text: 239,20,0;
        --color-link: 239,20,0;
        --color-badge-foreground: 239,20,0;
        --color-badge-background: 255,255,255;
        --color-badge-border: 239,20,0;
        --payment-terms-background-color: rgb(255 255 255);
      }
      
        
        .color-scheme-2 {
          --color-background: 255,255,255;
        
          --gradient-background: #ffffff;
        

        

        --color-foreground: 239,20,0;
        --color-background-contrast: 191,191,191;
        --color-shadow: 239,20,0;
        --color-button: 239,20,0;
        --color-button-text: 239,20,0;
        --color-secondary-button: 255,255,255;
        --color-secondary-button-text: 239,20,0;
        --color-link: 239,20,0;
        --color-badge-foreground: 239,20,0;
        --color-badge-background: 255,255,255;
        --color-badge-border: 239,20,0;
        --payment-terms-background-color: rgb(255 255 255);
      }
      
        
        .color-scheme-3 {
          --color-background: 239,20,0;
        
          --gradient-background: #ef1400;
        

        

        --color-foreground: 255,255,255;
        --color-background-contrast: 111,9,0;
        --color-shadow: 14,27,77;
        --color-button: 255,255,255;
        --color-button-text: 255,255,255;
        --color-secondary-button: 239,20,0;
        --color-secondary-button-text: 255,255,255;
        --color-link: 255,255,255;
        --color-badge-foreground: 255,255,255;
        --color-badge-background: 239,20,0;
        --color-badge-border: 255,255,255;
        --payment-terms-background-color: rgb(239 20 0);
      }
      
        
        .color-scheme-4 {
          --color-background: 255,255,255;
        
          --gradient-background: #ffffff;
        

        

        --color-foreground: 227,36,2;
        --color-background-contrast: 191,191,191;
        --color-shadow: 14,27,77;
        --color-button: 227,36,2;
        --color-button-text: 255,255,255;
        --color-secondary-button: 255,255,255;
        --color-secondary-button-text: 227,36,2;
        --color-link: 227,36,2;
        --color-badge-foreground: 227,36,2;
        --color-badge-background: 255,255,255;
        --color-badge-border: 227,36,2;
        --payment-terms-background-color: rgb(255 255 255);
      }
      
        
        .color-scheme-5 {
          --color-background: 255,255,255;
        
          --gradient-background: #ffffff;
        

        

        --color-foreground: 239,20,0;
        --color-background-contrast: 191,191,191;
        --color-shadow: 14,27,77;
        --color-button: 239,20,0;
        --color-button-text: 227,36,2;
        --color-secondary-button: 255,255,255;
        --color-secondary-button-text: 239,20,0;
        --color-link: 239,20,0;
        --color-badge-foreground: 239,20,0;
        --color-badge-background: 255,255,255;
        --color-badge-border: 239,20,0;
        --payment-terms-background-color: rgb(255 255 255);
      }
      
        
        .color-scheme-c4b56f92-a4d8-46d7-8701-a94961dd0b1a {
          --color-background: 255,255,255;
        
          --gradient-background: #ffffff;
        

        

        --color-foreground: 21,21,21;
        --color-background-contrast: 191,191,191;
        --color-shadow: 255,255,255;
        --color-button: 21,21,21;
        --color-button-text: 255,255,255;
        --color-secondary-button: 255,255,255;
        --color-secondary-button-text: 21,21,21;
        --color-link: 21,21,21;
        --color-badge-foreground: 21,21,21;
        --color-badge-background: 255,255,255;
        --color-badge-border: 21,21,21;
        --payment-terms-background-color: rgb(255 255 255);
      }
      

      body, .color-scheme-1, .color-scheme-2, .color-scheme-3, .color-scheme-4, .color-scheme-5, .color-scheme-c4b56f92-a4d8-46d7-8701-a94961dd0b1a {
        color: rgba(var(--color-foreground), 0.75);
        background-color: rgb(var(--color-background));
      }

      :root {
        --font-body-family: Roboto, sans-serif;
        --font-body-style: normal;
        --font-body-weight: 400;
        --font-body-weight-bold: 700;

        --font-heading-family: Archivo, sans-serif;
        --font-heading-style: normal;
        --font-heading-weight: 700;

        --font-body-scale: 1.05;
        --font-heading-scale: 1.0476190476190477;

        --media-padding: px;
        --media-border-opacity: 0.1;
        --media-border-width: 0px;
        --media-radius: 20px;
        --media-shadow-opacity: 0.0;
        --media-shadow-horizontal-offset: 0px;
        --media-shadow-vertical-offset: 4px;
        --media-shadow-blur-radius: 5px;
        --media-shadow-visible: 0;

        --page-width: 160rem;
        --page-width-margin: 0rem;

        --product-card-image-padding: 0.0rem;
        --product-card-corner-radius: 1.8rem;
        --product-card-text-alignment: left;
        --product-card-border-width: 0.2rem;
        --product-card-border-opacity: 1.0;
        --product-card-shadow-opacity: 0.1;
        --product-card-shadow-visible: 1;
        --product-card-shadow-horizontal-offset: 0.2rem;
        --product-card-shadow-vertical-offset: 0.4rem;
        --product-card-shadow-blur-radius: 0.5rem;

        --collection-card-image-padding: 1.6rem;
        --collection-card-corner-radius: 1.8rem;
        --collection-card-text-alignment: left;
        --collection-card-border-width: 0.1rem;
        --collection-card-border-opacity: 1.0;
        --collection-card-shadow-opacity: 0.0;
        --collection-card-shadow-visible: 0;
        --collection-card-shadow-horizontal-offset: 0.0rem;
        --collection-card-shadow-vertical-offset: 0.4rem;
        --collection-card-shadow-blur-radius: 0.5rem;

        --blog-card-image-padding: 1.6rem;
        --blog-card-corner-radius: 1.8rem;
        --blog-card-text-alignment: left;
        --blog-card-border-width: 0.1rem;
        --blog-card-border-opacity: 1.0;
        --blog-card-shadow-opacity: 0.0;
        --blog-card-shadow-visible: 0;
        --blog-card-shadow-horizontal-offset: 0.0rem;
        --blog-card-shadow-vertical-offset: 0.4rem;
        --blog-card-shadow-blur-radius: 0.5rem;

        --badge-corner-radius: 0.0rem;

        --popup-border-width: 1px;
        --popup-border-opacity: 0.1;
        --popup-corner-radius: 18px;
        --popup-shadow-opacity: 0.0;
        --popup-shadow-horizontal-offset: 0px;
        --popup-shadow-vertical-offset: 4px;
        --popup-shadow-blur-radius: 5px;

        --drawer-border-width: 0px;
        --drawer-border-opacity: 0.1;
        --drawer-shadow-opacity: 0.0;
        --drawer-shadow-horizontal-offset: 0px;
        --drawer-shadow-vertical-offset: 4px;
        --drawer-shadow-blur-radius: 0px;

        --spacing-sections-desktop: 0px;
        --spacing-sections-mobile: 0px;

        --grid-desktop-vertical-spacing: 20px;
        --grid-desktop-horizontal-spacing: 20px;
        --grid-mobile-vertical-spacing: 10px;
        --grid-mobile-horizontal-spacing: 10px;

        --text-boxes-border-opacity: 0.1;
        --text-boxes-border-width: 0px;
        --text-boxes-radius: 20px;
        --text-boxes-shadow-opacity: 0.0;
        --text-boxes-shadow-visible: 0;
        --text-boxes-shadow-horizontal-offset: 0px;
        --text-boxes-shadow-vertical-offset: 4px;
        --text-boxes-shadow-blur-radius: 5px;

        --buttons-radius: 0px;
        --buttons-radius-outset: 0px;
        --buttons-border-width: 1px;
        --buttons-border-opacity: 1.0;
        --buttons-shadow-opacity: 0.0;
        --buttons-shadow-visible: 0;
        --buttons-shadow-horizontal-offset: 0px;
        --buttons-shadow-vertical-offset: 4px;
        --buttons-shadow-blur-radius: 0px;
        --buttons-border-offset: 0px;

        --inputs-radius: 26px;
        --inputs-border-width: 1px;
        --inputs-border-opacity: 0.55;
        --inputs-shadow-opacity: 0.0;
        --inputs-shadow-horizontal-offset: 0px;
        --inputs-margin-offset: 0px;
        --inputs-shadow-vertical-offset: 4px;
        --inputs-shadow-blur-radius: 5px;
        --inputs-radius-outset: 27px;

        --variant-pills-radius: 40px;
        --variant-pills-border-width: 1px;
        --variant-pills-border-opacity: 0.55;
        --variant-pills-shadow-opacity: 0.0;
        --variant-pills-shadow-horizontal-offset: 0px;
        --variant-pills-shadow-vertical-offset: 4px;
        --variant-pills-shadow-blur-radius: 5px;
      }

      *,
      *::before,
      *::after {
        box-sizing: inherit;
      }

      html {
        box-sizing: border-box;
        font-size: calc(var(--font-body-scale) * 62.5%);
        height: 100%;
      }

      body {
        display: grid;
        grid-template-rows: auto auto 1fr auto;
        grid-template-columns: 100%;
        min-height: 100%;
        margin: 0;
        font-size: 1.5rem;
        letter-spacing: 0.06rem;
        line-height: calc(1 + 0.8 / var(--font-body-scale));
        font-family: var(--font-body-family);
        font-style: var(--font-body-style);
        font-weight: var(--font-body-weight);
      }

      @media screen and (min-width: 750px) {
        body {
          font-size: 1.6rem;
        }
      }
    </style>

    <link href="//superyou.in/cdn/shop/t/51/assets/base.css?v=63571914536404561661780153147" rel="stylesheet" type="text/css" media="all" />
    <link href="//superyou.in/cdn/shop/t/51/assets/style.css?v=74450056810172358961766474628" rel="stylesheet" type="text/css" media="all" />
     <link href="//superyou.in/cdn/shop/t/51/assets/custom-style.css?v=77922223269210361051772889571" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="//superyou.in/cdn/shop/t/51/assets/component-cart-items.css?v=123238115697927560811766474554" media="print" onload="this.media='all'">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet"><link href="//superyou.in/cdn/shop/t/51/assets/component-cart-drawer.css?v=85066701549514430691766474554" rel="stylesheet" type="text/css" media="all" />
      <link href="//superyou.in/cdn/shop/t/51/assets/component-cart.css?v=164708765130180853531766474555" rel="stylesheet" type="text/css" media="all" />
      <link href="//superyou.in/cdn/shop/t/51/assets/component-totals.css?v=15906652033866631521766474566" rel="stylesheet" type="text/css" media="all" />
      <link href="//superyou.in/cdn/shop/t/51/assets/component-price.css?v=101019534186928093711766474562" rel="stylesheet" type="text/css" media="all" />
      <link href="//superyou.in/cdn/shop/t/51/assets/component-discounts.css?v=152760482443307489271766474556" rel="stylesheet" type="text/css" media="all" />
<link href="//superyou.in/cdn/shop/t/51/assets/Product-hero.css?v=90607465074235168201766474613" rel="stylesheet" type="text/css" media="all" />

      <link rel="preload" as="font" href="//superyou.in/cdn/fonts/roboto/roboto_n4.2019d890f07b1852f56ce63ba45b2db45d852cba.woff2" type="font/woff2" crossorigin>
      

      <link rel="preload" as="font" href="//superyou.in/cdn/fonts/archivo/archivo_n7.651b020b3543640c100112be6f1c1b8e816c7f13.woff2" type="font/woff2" crossorigin>
      
<link
        rel="stylesheet"
        href="//superyou.in/cdn/shop/t/51/assets/component-predictive-search.css?v=118923337488134913561766474562"
        media="print"
        onload="this.media='all'"
      ><script>
      if (Shopify.designMode) {
        document.documentElement.classList.add('shopify-design-mode');
      }
    </script>
   
    
   
    <!-- Preload critical fonts -->
    <!-- <link rel="preload"  href="//superyou.in/cdn/shop/t/51/assets/HelveticaNowDisplay-Bold.woff2?v=24868283273673930991766474573" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="//superyou.in/cdn/shop/t/51/assets/HelveticaNowVar.ttf?v=85829420661730474241766521971" as="font" type="font/ttf" crossorigin = "anonymous"> -->
    <!-- Load custom fonts CSS -->
    <link href="//superyou.in/cdn/shop/t/51/assets/custom-fonts.css?v=123792071884862970031766474568" rel="stylesheet" type="text/css" media="all" />

    <meta name="google-site-verification" content="77kXg0IjEHdV0CBiiSHaXZ--HgzLomPRdajTGrPdUBY">
   
    

    <script src="//superyou.in/cdn/shop/t/51/assets/script-loader.js?v=128860713857796007311766474619" defer></script> 
    <script>
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "oeukzr4o5j");
</script>
<style>.drawer { visibility: hidden;}</style><script>
  window.faqSchemaData = [];
</script>

<meta property="og:site_name" content="SuperYou">
<meta property="og:url" content="https://superyou.in/">
<meta property="og:title" content="SuperYou by Ranveer Singh">
<meta property="og:type" content="website">
<meta property="og:description" content="Craving for a healthy snack? Superyou by Ranveer Singh brings you protein-packed wafers with high protein, fiber, and zero added sugar. Savor delicious flavors like chocolate and peanut butter. Try them today!"><meta name="twitter:title" content="SuperYou by Ranveer Singh">
<meta name="twitter:description" content="Craving for a healthy snack? Superyou by Ranveer Singh brings you protein-packed wafers with high protein, fiber, and zero added sugar. Savor delicious flavors like chocolate and peanut butter. Try them today!">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KC85C97Z');</script>
<!-- End Google Tag Manager -->

<style>
  /* ==========================================================================
     1. GLOBAL HARDWARE-ACCELERATED VARIABLE FONT REGISTRATION
     ========================================================================== */
  @font-face {
    font-family: 'Helvetica Now Variable';
    src: url('//superyou.in/cdn/shop/t/51/assets/HelveticaNowVar.ttf?v=85829420661730474241766521971') format('truetype-variations'),
         url('//superyou.in/cdn/shop/t/51/assets/HelveticaNowVar.ttf?v=85829420661730474241766521971') format('truetype');
    font-weight: 100 900;
    font-style: normal;
    font-display: swap;
  }

  @font-face {
    font-family: 'Helvetica Now Variable';
    src: url('//superyou.in/cdn/shop/t/51/assets/HelveticaNowVarItalic.ttf?v=17567977967952266211766521970') format('truetype-variations'),
         url('//superyou.in/cdn/shop/t/51/assets/HelveticaNowVarItalic.ttf?v=17567977967952266211766521970') format('truetype');
    font-weight: 100 900;
    font-style: italic;
    font-display: swap;
  }

  /* ==========================================================================
     2. GLOBAL SITE-WIDE TYPOGRAPHY SYSTEM OVERRIDES
     ========================================================================== */
  
  /* Fallback Root Definition */
  :root {
    --font-heading-family: 'Helvetica Now Variable', -apple-system, BlinkMacSystemFont, sans-serif;
    --font-body-family: 'Helvetica Now Variable', -apple-system, BlinkMacSystemFont, sans-serif;
  }

  /* Baseline Global Body Reset */
  body, html, p, span, li, a, input, textarea, select {
    font-family: 'Helvetica Now Variable', -apple-system, BlinkMacSystemFont, sans-serif !important;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }

  /* --------------------------------------------------------------------------
     RULE A: HEADLINES (Helvetica Now Display Compressed Settings Spec)
     -------------------------------------------------------------------------- */
  h1, h2, h3, h4, h5, h6, 
  .h1, .h2, .h3, .h4, .heading,
  .section-title, .banner__heading {
    font-family: 'Helvetica Now Variable', -apple-system, BlinkMacSystemFont, sans-serif !important;
    font-weight: 800 !important;       /* Maps bold/black display impact axis */
    font-stretch: 75% !important;     /* Dynamically tightens variable width engine widths */
    text-transform: uppercase !important;
    line-height: 0.9 !important;       /* Brand Guideline Exact: Leading 90% */
    letter-spacing: 0px !important;    /* Brand Guideline Exact: Tracking 0 */
  }

  /* --------------------------------------------------------------------------
     CRITICAL FIX: PRODUCT LOOP EXCLUSION SAFE-ZONE
     (Protects titles inside product grids from structural inheritance cascading down from RULE A)
     -------------------------------------------------------------------------- */
  .product-card h1, .product-card h2, .product-card h3, .product-card h4, .product-card h5, .product-card h6,
  .card-wrapper h1, .card-wrapper h2, .card-wrapper h3, .card-wrapper h4, .card-wrapper h5, .card-wrapper h6,
  .card__content h1, .card__content h2, .card__content h3, .card__content h4, .card__content h5, .card__content h6 {
    font-stretch: 100% !important;
    text-transform: none !important;
    letter-spacing: -0.2px !important;
    line-height: 1.2 !important;
    font-weight: 500 !important; /* Resets to clear regular font layout weights */
  }

  /* --------------------------------------------------------------------------
     RULE B: BODY & PRODUCTS COPY (Helvetica Now Text Settings Spec)
     -------------------------------------------------------------------------- */
  /* Product Titles and Loop Grids */
  .product-title, .product__title, .card__heading, .card-product__title, .title-product,
  .product-meta, .price, .price-item, .variant-picker label,
  .product-card .card__heading a, .card-wrapper .card__heading a {
    font-family: 'Helvetica Now Variable', -apple-system, BlinkMacSystemFont, sans-serif !important;
    font-stretch: 100% !important;     /* Natural layout expansion */
    text-transform: none !important;    /* Forces default sentence case rules */
    line-height: 1.2 !important;       /* Brand Guideline Exact: Leading 120% */
    letter-spacing: -0.2px !important; /* Brand Guideline Exact: Tracking -20 */
    font-weight: 500 !important;       /* Clean regular baseline weight to eliminate uneven rows */
  }
  
  .price, .price-item, .product-card .price, font-weight-bold {
    font-weight: 700 !important;
  }

  .header__menu-item, .menu-drawer__menu-item, .facet-checkbox, .localization-form__select {
    font-family: 'Helvetica Now Variable', -apple-system, BlinkMacSystemFont, sans-serif !important;
    font-weight: 700 !important;
    letter-spacing: -0.2px !important;
    line-height: 1.2 !important;
  }

  /* --------------------------------------------------------------------------
     RULE C: INTERACTION BUTTONS & CALLS TO ACTION (CTAs)
     -------------------------------------------------------------------------- */
  .button, .btn, button, 
  .shopify-payment-button__button,
  .atc-btn, .quick-add__submit, .shop-all-btn, .cat-pill {
    font-family: 'Helvetica Now Variable', -apple-system, BlinkMacSystemFont, sans-serif !important;
    font-weight: 800 !important;
    text-transform: uppercase !important;
    letter-spacing: -0.2px !important; /* Slight tracking edge separation for legibility */
  }
</style>

  <!-- BEGIN app block: shopify://apps/customerlabs-1pd-capi-tracking/blocks/header-embed-block/e7b7e586-f2a0-478c-a96a-edb8673644b2 --><script>



  !function(t,e,r,c,a,n,s){t.ClAnalyticsObject=a,t[a]=t[a]||[],t[a].methods=["trackSubmit","trackClick","pageview","identify","track", "trackConsent"],t[a].factory=function(e){return function(){var r=Array.prototype.slice.call(arguments);return r.unshift(e),t[a].push(r),t[a]}};for(var i=0;i<t[a].methods.length;i++){var o=t[a].methods[i];t[a][o]=t[a].factory(o)}n=e.createElement(r),s=e.getElementsByTagName(r)[0],n.async=1,n.crossOrigin="anonymous",n.src=c,s.parentNode.insertBefore(n,s)}(window,document,"script","https://cdn.js.customerlabs.co/cl83592k5z2lp7.js","_cl");_cl.SNIPPET_VERSION="2.0.0";

</script>
<!-- END app block --><!-- BEGIN app block: shopify://apps/sticky-add-to-cart-bar/blocks/app-embed/e98261d9-7a53-483b-8aaa-054afd5be639 --><link rel="preconnect" href="https://appsolve.io/" /><link rel="preconnect" href="https://cdn-sf.vitals.app/" /><script data-ver="58" id="vtlsAebData" class="notranslate">window.vtlsLiquidData = window.vtlsLiquidData || {};window.vtlsLiquidData.buildId = 68807;

window.vtlsLiquidData.apiHosts = {
	...window.vtlsLiquidData.apiHosts,
	"2": "https://satc.sqa-api.com"
};
	window.vtlsLiquidData.moduleSettings = {
		...window.vtlsLiquidData.moduleSettings,
		48: {"469":true,"491":true,"588":true,"595":false,"603":"","605":"","606":"","781":true,"783":1,"876":0,"1076":true,"1105":0,"1198":false},
		
		16: {"232":true,"245":"bottom","246":"bottom","247":"Add to Cart","411":true,"417":true,"418":true,"477":"custom","478":"ef1400","479":"ffffff","489":true,"843":"ffffff","844":"2e2e2e","921":false,"922":true,"923":false,"924":"0","925":"0","952":"{\"container\":{\"traits\":{\"height\":{\"default\":\"80px\"}}}}","1021":true,"1110":false,"1154":0,"1155":true,"1156":true,"1157":false,"1158":0,"1159":true,"1160":true,"1161":true,"1162":false,"1163":false,"1182":false,"1183":true,"1184":"","1185":false},
		
		51: null,
		
	}

window.vtlsLiquidData.shopThemeName = "Refresh";window.vtlsLiquidData.settingTranslation = {"16":{"1184":{"en":""}}};window.vtlsLiquidData.shopSettings={};window.vtlsLiquidData.shopSettings.cartType="drawer";window.vtlsLiquidData.spat="1dc93e0ff5e467e4da14dd14971e39a2";window.vtlsLiquidData.shopInfo={id:90225901858,domain:"superyou.in",shopifyDomain:"867a08-5f.myshopify.com",primaryLocaleIsoCode: "en",defaultCurrency:"INR",enabledCurrencies:["INR"],moneyFormat:"₹{{ amount }}",moneyWithCurrencyFormat:"₹{{ amount }}",appId:"2",appName:"Sticky Add to Cart Bar",};window.vtlsLiquidData.acceptedScopes = {};window.vtlsLiquidData.cacheKeys = [1779179183,1779179183,1779179183,1779179183,1779179183,1779179183,1779179183,1779179183 ];</script><script id="vtlsAebDynamicFunctions" class="notranslate">window.vtlsLiquidData = window.vtlsLiquidData || {};window.vtlsLiquidData.dynamicFunctions = ({$,vitalsGet,vitalsSet,VITALS_GET_$_DESCRIPTION,VITALS_GET_$_END_SECTION,VITALS_GET_$_ATC_FORM,VITALS_GET_$_ATC_BUTTON,submit_button,form_add_to_cart,cartItemVariantId,VITALS_EVENT_CART_UPDATED,VITALS_EVENT_DISCOUNTS_LOADED,VITALS_EVENT_RENDER_CAROUSEL_STARS,VITALS_EVENT_RENDER_COLLECTION_STARS,VITALS_EVENT_SMART_BAR_RENDERED,VITALS_EVENT_SMART_BAR_CLOSED,VITALS_EVENT_TABS_RENDERED,VITALS_EVENT_VARIANT_CHANGED,VITALS_EVENT_ATC_BUTTON_FOUND,VITALS_IS_MOBILE,VITALS_PAGE_TYPE,VITALS_APPEND_CSS,VITALS_HOOK__CAN_EXECUTE_CHECKOUT,VITALS_HOOK__GET_CUSTOM_CHECKOUT_URL_PARAMETERS,VITALS_HOOK__GET_CUSTOM_VARIANT_SELECTOR,VITALS_HOOK__GET_IMAGES_DEFAULT_SIZE,VITALS_HOOK__ON_CLICK_CHECKOUT_BUTTON,VITALS_HOOK__DONT_ACCELERATE_CHECKOUT,VITALS_HOOK__ON_ATC_STAY_ON_THE_SAME_PAGE,VITALS_HOOK__CAN_EXECUTE_ATC,VITALS_FLAG__IGNORE_VARIANT_ID_FROM_URL,VITALS_FLAG__UPDATE_ATC_BUTTON_REFERENCE,VITALS_FLAG__UPDATE_CART_ON_CHECKOUT,VITALS_FLAG__USE_CAPTURE_FOR_ATC_BUTTON,VITALS_FLAG__USE_FIRST_ATC_SPAN_FOR_PRE_ORDER,VITALS_FLAG__USE_HTML_FOR_STICKY_ATC_BUTTON,VITALS_FLAG__STOP_EXECUTION,VITALS_FLAG__USE_CUSTOM_COLLECTION_FILTER_DROPDOWN,VITALS_FLAG__PRE_ORDER_START_WITH_OBSERVER,VITALS_FLAG__PRE_ORDER_OBSERVER_DELAY,VITALS_FLAG__ON_CHECKOUT_CLICK_USE_CAPTURE_EVENT,handle,}) => {return {"147": {"location":"form","locator":"after"},"1229": {"location":"product_end","locator":"prepend"},"1233": {"location":"product_end","locator":"prepend"},};};</script><script id="vtlsAebDocumentInjectors" class="notranslate">window.vtlsLiquidData = window.vtlsLiquidData || {};window.vtlsLiquidData.documentInjectors = ({$,vitalsGet,vitalsSet,VITALS_IS_MOBILE,VITALS_APPEND_CSS}) => {const documentInjectors = {};documentInjectors["12"]={};documentInjectors["12"]["d"]=[];documentInjectors["12"]["d"]["0"]={};documentInjectors["12"]["d"]["0"]["a"]=[];documentInjectors["12"]["d"]["0"]["s"]="form[action*=\"\/cart\/add\"]:visible:not([id*=\"product-form-installment\"]):not([id*=\"product-installment-form\"]):not(.vtls-exclude-atc-injector *)";documentInjectors["11"]={};documentInjectors["11"]["d"]=[];documentInjectors["11"]["d"]["0"]={};documentInjectors["11"]["d"]["0"]["a"]={"ctx":"inside","last":false};documentInjectors["11"]["d"]["0"]["s"]="[name=\"add\"]:not(.swym-button)";documentInjectors["11"]["d"]["1"]={};documentInjectors["11"]["d"]["1"]["a"]={"ctx":"outside"};documentInjectors["11"]["d"]["1"]["s"]=".product-form__submit";documentInjectors["1"]={};documentInjectors["1"]["d"]=[];documentInjectors["1"]["d"]["0"]={};documentInjectors["1"]["d"]["0"]["a"]=null;documentInjectors["1"]["d"]["0"]["s"]=".product__description.rte";documentInjectors["2"]={};documentInjectors["2"]["d"]=[];documentInjectors["2"]["d"]["0"]={};documentInjectors["2"]["d"]["0"]["a"]={"l":"before"};documentInjectors["2"]["d"]["0"]["s"]=".shopify-section-group-footer-group";documentInjectors["2"]["d"]["1"]={};documentInjectors["2"]["d"]["1"]["a"]={"l":"after"};documentInjectors["2"]["d"]["1"]["s"]="div.product";documentInjectors["10"]={};documentInjectors["10"]["d"]=[];documentInjectors["10"]["d"]["0"]={};documentInjectors["10"]["d"]["0"]["a"]=[];documentInjectors["10"]["d"]["0"]["s"]="div.product-form__input.product-form__quantity";return documentInjectors;};</script><script id="vtlsAebBundle" src="https://cdn-sf.vitals.app/assets/js/bundle-b1fd84e699e14b2887f9895f18c14543.js" async></script>

<!-- END app block --><script src="https://cdn.shopify.com/extensions/019e74e9-4e4c-73b8-bf13-cf5171c57bba/rebuy-personalization-engine-345/assets/rebuy-extensions.js" type="text/javascript" defer="defer"></script>
<meta property="og:image" content="https://cdn.shopify.com/s/files/1/0902/2590/1858/files/SY_High_Resoultion.jpg?v=1731839721" />
<meta property="og:image:secure_url" content="https://cdn.shopify.com/s/files/1/0902/2590/1858/files/SY_High_Resoultion.jpg?v=1731839721" />
<meta property="og:image:width" content="5052" />
<meta property="og:image:height" content="3570" />
<link href="https://monorail-edge.shopifysvc.com" rel="dns-prefetch">
<script>(function(){if ("sendBeacon" in navigator && "performance" in window) {try {var session_token_from_headers = performance.getEntriesByType('navigation')[0].serverTiming.find(x => x.name == '_s').description;} catch {var session_token_from_headers = undefined;}var session_cookie_matches = document.cookie.match(/_shopify_s=([^;]*)/);var session_token_from_cookie = session_cookie_matches && session_cookie_matches.length === 2 ? session_cookie_matches[1] : "";var session_token = session_token_from_headers || session_token_from_cookie || "";function handle_abandonment_event(e) {var entries = performance.getEntries().filter(function(entry) {return /monorail-edge.shopifysvc.com/.test(entry.name);});if (!window.abandonment_tracked && entries.length === 0) {window.abandonment_tracked = true;var currentMs = Date.now();var navigation_start = performance.timing.navigationStart;var payload = {shop_id: 90225901858,url: window.location.href,navigation_start,duration: currentMs - navigation_start,session_token,page_type: "index"};window.navigator.sendBeacon("https://monorail-edge.shopifysvc.com/v1/produce", JSON.stringify({schema_id: "online_store_buyer_site_abandonment/1.1",payload: payload,metadata: {event_created_at_ms: currentMs,event_sent_at_ms: currentMs}}));}}window.addEventListener('pagehide', handle_abandonment_event);}}());</script>
<script>
  window.__TREKKIE_SHIM_QUEUE = window.__TREKKIE_SHIM_QUEUE || [];
</script>
<script id="web-pixels-manager-setup">(function(){var wpmLoader=function(){"use strict";return function(e,d,r,n){var o=arguments.length>4&&void 0!==arguments[4]?arguments[4]:{};if(!Boolean(null==(i=null==(a=window.Shopify)?void 0:a.analytics)?void 0:i.replayQueue)){var a,i;window.Shopify=window.Shopify||{};var t=window.Shopify;t.analytics=t.analytics||{};var s=t.analytics;s.replayQueue=[],s.publish=function(e,d,r){return s.replayQueue.push([e,d,r]),!0};try{self.performance.mark("wpm:start")}catch(e){}var l,u,c,m,p,f,h,g,y,w,v,b,S,P=(u=(l={modern:/Edge?\/(1{2}[4-9]|1[2-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Firefox\/(1{2}[4-9]|1[2-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Chrom(ium|e)\/(9{2}|\d{3,})\.\d+(\.\d+|)|(Maci|X1{2}).+ Version\/(15\.\d+|(1[6-9]|[2-9]\d|\d{3,})\.\d+)([,.]\d+|)( \(\w+\)|)( Mobile\/\w+|) Safari\/|Chrome.+OPR\/(9{2}|\d{3,})\.\d+\.\d+|(CPU[ +]OS|iPhone[ +]OS|CPU[ +]iPhone|CPU IPhone OS|CPU iPad OS)[ +]+(15[._]\d+|(1[6-9]|[2-9]\d|\d{3,})[._]\d+)([._]\d+|)|Android:?[ /-](13[3-9]|1[4-9]\d|[2-9]\d{2}|\d{4,})(\.\d+|)(\.\d+|)|Android.+Firefox\/(13[5-9]|1[4-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Android.+Chrom(ium|e)\/(13[3-9]|1[4-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|SamsungBrowser\/([2-9]\d|\d{3,})\.\d+/,legacy:/Edge?\/(1[6-9]|[2-9]\d|\d{3,})\.\d+(\.\d+|)|Firefox\/(5[4-9]|[6-9]\d|\d{3,})\.\d+(\.\d+|)|Chrom(ium|e)\/(5[1-9]|[6-9]\d|\d{3,})\.\d+(\.\d+|)([\d.]+$|.*Safari\/(?![\d.]+ Edge\/[\d.]+$))|(Maci|X1{2}).+ Version\/(10\.\d+|(1[1-9]|[2-9]\d|\d{3,})\.\d+)([,.]\d+|)( \(\w+\)|)( Mobile\/\w+|) Safari\/|Chrome.+OPR\/(3[89]|[4-9]\d|\d{3,})\.\d+\.\d+|(CPU[ +]OS|iPhone[ +]OS|CPU[ +]iPhone|CPU IPhone OS|CPU iPad OS)[ +]+(10[._]\d+|(1[1-9]|[2-9]\d|\d{3,})[._]\d+)([._]\d+|)|Android:?[ /-](13[3-9]|1[4-9]\d|[2-9]\d{2}|\d{4,})(\.\d+|)(\.\d+|)|Mobile Safari.+OPR\/([89]\d|\d{3,})\.\d+\.\d+|Android.+Firefox\/(13[5-9]|1[4-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Android.+Chrom(ium|e)\/(13[3-9]|1[4-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Android.+(UC? ?Browser|UCWEB|U3)[ /]?(15\.([5-9]|\d{2,})|(1[6-9]|[2-9]\d|\d{3,})\.\d+)\.\d+|SamsungBrowser\/(5\.\d+|([6-9]|\d{2,})\.\d+)|Android.+MQ{2}Browser\/(14(\.(9|\d{2,})|)|(1[5-9]|[2-9]\d|\d{3,})(\.\d+|))(\.\d+|)|K[Aa][Ii]OS\/(3\.\d+|([4-9]|\d{2,})\.\d+)(\.\d+|)/}).modern,c=l.legacy,(m=navigator.userAgent).match(u)?"modern":m.match(c)?"legacy":"unknown"),C="modern"===P?"modern":"legacy",_=(null!=n?n:{modern:"",legacy:""})[C],O=[(p={baseUrl:d,hashVersion:r,buildTarget:C}).baseUrl,"/wpm","/b",p.hashVersion,"modern"===p.buildTarget?"m":"l",".js"].join(""),U=(f={version:r,bundleTarget:P,surface:e.surface,pageUrl:self.location.href,monorailEndpoint:e.monorailEndpoint},h=f.version,g=f.bundleTarget,y=f.surface,w=f.pageUrl,v=f.monorailEndpoint,{emit:function(e){var d=e.status,r=e.errorMsg,n=(new Date).getTime(),o=JSON.stringify({metadata:{event_sent_at_ms:n},events:[{schema_id:"web_pixels_manager_load/3.1",payload:{version:h,bundle_target:g,page_url:w,status:d,surface:y,error_msg:r},metadata:{event_created_at_ms:n}}]});if(!v)return console&&console.warn&&console.warn("[Web Pixels Manager] No Monorail endpoint provided, skipping logging."),!1;try{return self.navigator.sendBeacon.bind(self.navigator)(v,o)}catch(e){}var a=new XMLHttpRequest;try{return a.open("POST",v,!0),a.setRequestHeader("Content-Type","text/plain"),a.send(o),!0}catch(e){return console&&console.warn&&console.warn("[Web Pixels Manager] Got an unhandled error while logging to Monorail."),!1}}});try{o.browserTarget=P,function(e){var d=e.src,r=e.async,n=void 0===r||r,o=e.onload,a=e.onerror,i=e.sri,t=e.scriptDataAttributes,s=void 0===t?{}:t,l=document.createElement("script"),u=document.querySelector("head"),c=document.querySelector("body");if(l.async=n,l.src=d,i&&(l.integrity=i,l.crossOrigin="anonymous"),s)for(var m in s)if(Object.prototype.hasOwnProperty.call(s,m))try{l.dataset[m]=s[m]}catch(e){}if(o&&l.addEventListener("load",o),a&&l.addEventListener("error",a),u)u.appendChild(l);else{if(!c)throw new Error("Did not find a head or body element to append the script");c.appendChild(l)}}({src:O,async:!0,onload:function(){if(!function(){var e,d;return Boolean(null==(d=null==(e=window.Shopify)?void 0:e.analytics)?void 0:d.initialized)}()){var d=window.webPixelsManager.init(e)||void 0;if(d){var r=window.Shopify.analytics;r.replayQueue.forEach(function(e){var r=e[0],n=e[1],o=e[2];d.publishCustomEvent(r,n,o)}),r.replayQueue=[],r.publish=d.publishCustomEvent,r.visitor=d.visitor,r.initialized=!0}}},onerror:function(){return U.emit({status:"failed",errorMsg:"".concat(O," has failed to load")})},sri:(b=_,S=/^sha384-[A-Za-z0-9+/=]+$/,"string"==typeof b&&S.test(b)?_:""),scriptDataAttributes:o}),U.emit({status:"loading"})}catch(e){U.emit({status:"failed",errorMsg:(null==e?void 0:e.message)||"Unknown error"})}}}}();wpmLoader({shopId: 90225901858,storefrontBaseUrl: "https://superyou.in",extensionsBaseUrl: "https://extensions.shopifycdn.com/cdn/shopifycloud/web-pixels-manager",monorailEndpoint: "https://monorail-edge.shopifysvc.com/unstable/produce_batch",surface: "storefront-renderer",enabledBetaFlags: ["2dca8a86","d5bdd5d0","5acaffe6","3b3c7daf","6faea013"],webPixelsConfigList: [{"id":"2771288354","configuration":"{\"webPixelName\":\"Judge.me\"}","eventPayloadVersion":"v1","runtimeContext":"STRICT","scriptVersion":"34ad157958823915625854214640f0bf","type":"APP","apiClientId":683015,"privacyPurposes":["ANALYTICS"],"dataSharingAdjustments":{"protectedCustomerApprovalScopes":["read_customer_email","read_customer_name","read_customer_personal_data","read_customer_phone"],"dataSharingControls":["share_all_events"]},"dataSharingState":"unrestricted"},{"id":"1021018402","configuration":"{\"config\":\"{\\\"google_tag_ids\\\":[\\\"G-4C63RJ23J4\\\",\\\"AW-16766203568\\\",\\\"GT-WV8WBWJC\\\"],\\\"target_country\\\":\\\"IN\\\",\\\"gtag_events\\\":[{\\\"type\\\":\\\"begin_checkout\\\",\\\"action_label\\\":[\\\"G-4C63RJ23J4\\\",\\\"AW-16766203568\\\/CRL1CMnrh-YZELDt37o-\\\"]},{\\\"type\\\":\\\"search\\\",\\\"action_label\\\":[\\\"G-4C63RJ23J4\\\",\\\"AW-16766203568\\\/jdE1CMvqh-YZELDt37o-\\\"]},{\\\"type\\\":\\\"view_item\\\",\\\"action_label\\\":[\\\"G-4C63RJ23J4\\\",\\\"AW-16766203568\\\/iNa5CMjqh-YZELDt37o-\\\",\\\"MC-85SRNXMXZS\\\"]},{\\\"type\\\":\\\"purchase\\\",\\\"action_label\\\":[\\\"G-4C63RJ23J4\\\",\\\"AW-16766203568\\\/wfCwCMLqh-YZELDt37o-\\\",\\\"MC-85SRNXMXZS\\\"]},{\\\"type\\\":\\\"page_view\\\",\\\"action_label\\\":[\\\"G-4C63RJ23J4\\\",\\\"AW-16766203568\\\/zwvnCMXqh-YZELDt37o-\\\",\\\"MC-85SRNXMXZS\\\"]},{\\\"type\\\":\\\"add_payment_info\\\",\\\"action_label\\\":[\\\"G-4C63RJ23J4\\\",\\\"AW-16766203568\\\/fgcECMzrh-YZELDt37o-\\\"]},{\\\"type\\\":\\\"add_to_cart\\\",\\\"action_label\\\":[\\\"G-4C63RJ23J4\\\",\\\"AW-16766203568\\\/5mRTCM7qh-YZELDt37o-\\\"]}],\\\"enable_monitoring_mode\\\":false}\"}","eventPayloadVersion":"v1","runtimeContext":"OPEN","scriptVersion":"f15305aac1e98c5c26a7c80e7bc37bde","type":"APP","apiClientId":1780363,"privacyPurposes":[],"dataSharingAdjustments":{"protectedCustomerApprovalScopes":["read_customer_address","read_customer_email","read_customer_name","read_customer_personal_data","read_customer_phone"],"dataSharingControls":["share_all_events"]},"dataSharingState":"unrestricted","enabledFlags":["9a3ed68a"]},{"id":"910164258","configuration":"{\"shop\":\"867a08-5f.myshopify.com\",\"cookie_duration\":\"604800\"}","eventPayloadVersion":"v1","runtimeContext":"STRICT","scriptVersion":"a2e7513c3708f34b1f617d7ce88f9697","type":"APP","apiClientId":2744533,"privacyPurposes":["ANALYTICS","MARKETING"],"dataSharingAdjustments":{"protectedCustomerApprovalScopes":["read_customer_address","read_customer_email","read_customer_name","read_customer_personal_data","read_customer_phone"],"dataSharingControls":["share_all_events"]},"dataSharingState":"unrestricted"},{"id":"119341346","eventPayloadVersion":"1","runtimeContext":"LAX","scriptVersion":"1","type":"CUSTOM","privacyPurposes":["ANALYTICS","MARKETING","SALE_OF_DATA"],"name":"Lively"},{"id":"190546210","eventPayloadVersion":"1","runtimeContext":"LAX","scriptVersion":"1","type":"CUSTOM","privacyPurposes":["ANALYTICS","MARKETING","SALE_OF_DATA"],"name":"Customer Events Test Purchase"},{"id":"206242082","eventPayloadVersion":"1","runtimeContext":"LAX","scriptVersion":"1","type":"CUSTOM","privacyPurposes":["ANALYTICS","MARKETING","SALE_OF_DATA"],"name":"Customer Labs Pixel"},{"id":"shopify-app-pixel","configuration":"{}","eventPayloadVersion":"v1","runtimeContext":"STRICT","scriptVersion":"0460","apiClientId":"shopify-pixel","type":"APP","privacyPurposes":["ANALYTICS","MARKETING"]},{"id":"shopify-custom-pixel","eventPayloadVersion":"v1","runtimeContext":"LAX","scriptVersion":"0460","apiClientId":"shopify-pixel","type":"CUSTOM","privacyPurposes":["ANALYTICS","MARKETING"]}],isMerchantRequest: false,initData: {"shop":{"name":"SuperYou","paymentSettings":{"currencyCode":"INR"},"myshopifyDomain":"867a08-5f.myshopify.com","countryCode":"IN","storefrontUrl":"https:\/\/superyou.in"},"customer":null,"cart":null,"checkout":null,"productVariants":[],"products":null,"purchasingCompany":null,"page":null},},"https://superyou.in/cdn","c5a2dbecw2e5701dcp16d0b08em93d9521b",{"modern":"","legacy":""},{"trekkieShim":true,"apiClientId":"580111","pageType":"home","shopId":"90225901858","storefrontBaseUrl":"https:\/\/superyou.in","extensionBaseUrl":"https:\/\/extensions.shopifycdn.com\/cdn\/shopifycloud\/web-pixels-manager","surface":"storefront-renderer","enabledBetaFlags":"[\"2dca8a86\", \"d5bdd5d0\", \"5acaffe6\", \"3b3c7daf\", \"6faea013\"]","isMerchantRequest":"false","hashVersion":"c5a2dbecw2e5701dcp16d0b08em93d9521b","publish":"custom","events":"[[\"page_viewed\",{}]]"});})();</script><script>
  window.ShopifyAnalytics = window.ShopifyAnalytics || {};
  window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
  window.ShopifyAnalytics.meta.currency = 'INR';
  var meta = {"page":{"pageType":"home","requestId":"f1a7e6b5-0298-4fb2-b762-2a08947fad09-1780395617"}};
  for (var attr in meta) {
    window.ShopifyAnalytics.meta[attr] = meta[attr];
  }
</script>
<script class="analytics">
  (function () {
    var customDocumentWrite = function(content) {
      var jquery = null;

      if (window.jQuery) {
        jquery = window.jQuery;
      } else if (window.Checkout && window.Checkout.$) {
        jquery = window.Checkout.$;
      }

      if (jquery) {
        jquery('body').append(content);
      }
    };

    var hasLoggedConversion = function(token) {
      if (token) {
        return document.cookie.indexOf('loggedConversion=' + token) !== -1;
      }
      return false;
    }

    var setCookieIfConversion = function(token) {
      if (token) {
        var twoMonthsFromNow = new Date(Date.now());
        twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

        document.cookie = 'loggedConversion=' + token + '; expires=' + twoMonthsFromNow;
      }
    }

    var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
    window.ShopifyAnalytics.lib.trekkie = window.trekkie;
    if (trekkie.integrations) {
      return;
    }
    trekkie.methods = [
      'identify',
      'page',
      'ready',
      'track',
      'trackForm',
      'trackLink'
    ];
    trekkie.factory = function(method) {
      return function() {
        var args = Array.prototype.slice.call(arguments);
        args.unshift(method);
        trekkie.push(args);
        if (window.__TREKKIE_SHIM_QUEUE && (method == 'track' || method == 'page')) {
          try {
            window.__TREKKIE_SHIM_QUEUE.push({
              from: 'trekkie-stub',
              method: method,
              args: args.slice(1)
            });
          } catch (e) {
            // no-op
          }
        }
        return trekkie;
      };
    };
    for (var i = 0; i < trekkie.methods.length; i++) {
      var key = trekkie.methods[i];
      trekkie[key] = trekkie.factory(key);
    }
    trekkie.load = function(config) {
      trekkie.config = config || {};
      trekkie.config.initialDocumentCookie = document.cookie;
      var first = document.getElementsByTagName('script')[0];
var script = document.createElement('script');
script.type = 'text/javascript';
script.onerror = function(e) {
  var scriptFallback = document.createElement('script');
  scriptFallback.type = 'text/javascript';
  scriptFallback.onerror = function(error) {
          var Monorail = {
      produce: function produce(monorailDomain, schemaId, payload) {
        var currentMs = new Date().getTime();
        var event = {
          schema_id: schemaId,
          payload: payload,
          metadata: {
            event_created_at_ms: currentMs,
            event_sent_at_ms: currentMs
          }
        };
        return Monorail.sendRequest("https://" + monorailDomain + "/v1/produce", JSON.stringify(event));
      },
      sendRequest: function sendRequest(endpointUrl, payload) {
        // Try the sendBeacon API
        if (window && window.navigator && typeof window.navigator.sendBeacon === 'function' && typeof window.Blob === 'function' && !Monorail.isIos12()) {
          var blobData = new window.Blob([payload], {
            type: 'text/plain'
          });

          if (window.navigator.sendBeacon(endpointUrl, blobData)) {
            return true;
          } // sendBeacon was not successful

        } // XHR beacon

        var xhr = new XMLHttpRequest();

        try {
          xhr.open('POST', endpointUrl);
          xhr.setRequestHeader('Content-Type', 'text/plain');
          xhr.send(payload);
        } catch (e) {
          console.log(e);
        }

        return false;
      },
      isIos12: function isIos12() {
        return window.navigator.userAgent.lastIndexOf('iPhone; CPU iPhone OS 12_') !== -1 || window.navigator.userAgent.lastIndexOf('iPad; CPU OS 12_') !== -1;
      }
    };
    Monorail.produce('monorail-edge.shopifysvc.com',
      'trekkie_storefront_load_errors/1.1',
      {shop_id: 90225901858,
      theme_id: 184147804450,
      app_name: "storefront",
      context_url: window.location.href,
      source_url: "//superyou.in/cdn/s/trekkie.storefront.f7140b8b25ae1195cf346a36a85e3e4bcf46adb3.min.js"});

  };
  scriptFallback.async = true;
  scriptFallback.src = '//superyou.in/cdn/s/trekkie.storefront.f7140b8b25ae1195cf346a36a85e3e4bcf46adb3.min.js';
  first.parentNode.insertBefore(scriptFallback, first);
};
script.async = true;
script.src = '//superyou.in/cdn/s/trekkie.storefront.f7140b8b25ae1195cf346a36a85e3e4bcf46adb3.min.js';
first.parentNode.insertBefore(script, first);

    };
    trekkie.load(
      {"Trekkie":{"appName":"storefront","development":false,"defaultAttributes":{"shopId":90225901858,"isMerchantRequest":null,"themeId":184147804450,"themeCityHash":"10736110255954755340","contentLanguage":"en","currency":"INR","eventMetadataId":"c55a6fd4-5386-4378-9a13-32dd02503f26"},"isServerSideCookieWritingEnabled":true,"monorailRegion":"shop_domain","enabledBetaFlags":["b5387b81","d5bdd5d0"]},"Session Attribution":{},"S2S":{"facebookCapiEnabled":false,"source":"trekkie-storefront-renderer","apiClientId":580111}}
    );

    var loaded = false;
    trekkie.ready(function() {
      if (loaded) return;
      loaded = true;

      window.ShopifyAnalytics.lib = window.trekkie;

      var originalDocumentWrite = document.write;
      document.write = customDocumentWrite;
      try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch(error) {};
      document.write = originalDocumentWrite;

      window.ShopifyAnalytics.lib.page(null,{"pageType":"home","requestId":"f1a7e6b5-0298-4fb2-b762-2a08947fad09-1780395617","shopifyEmitted":true});

      var match = window.location.pathname.match(/checkouts\/(.+)\/(thank_you|post_purchase)/)
      var token = match? match[1]: undefined;
      if (!hasLoggedConversion(token)) {
        setCookieIfConversion(token);
        
      }
    });

    var eventsListenerScript = document.createElement('script');
    eventsListenerScript.async = true;
    eventsListenerScript.src = "//superyou.in/cdn/shopifycloud/storefront/assets/shop_events_listener-4e26a9ce.js";
    document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);
})();</script>
<script
  defer
  src="https://superyou.in/cdn/shopifycloud/perf-kit/shopify-perf-kit-3.5.0.min.js"
  data-application="storefront-renderer"
  data-shop-id="90225901858"
  data-render-region="gcp-asia-southeast1"
  data-page-type="index"
  data-theme-instance-id="184147804450"
  data-theme-name="Refresh"
  data-theme-version="15.2.0"
  data-monorail-region="shop_domain"
  data-resource-timing-sampling-rate="10"
  data-shs="true"
  data-shs-beacon="true"
  data-shs-export-with-fetch="true"
  data-shs-logs-sample-rate="1"
  data-shs-beacon-endpoint="https://superyou.in/api/collect"
></script>
</head>

  <body class="index gradient animate--hover-3d-lift ">
    <a class="skip-to-content-link button visually-hidden" href="#MainContent">
      Skip to content
    </a><h1 class="suh1">Best Protein Snacks in India - SuperYou by Ranveer Singh</h1>

<link href="//superyou.in/cdn/shop/t/51/assets/quantity-popover.css?v=129068967981937647381766474615" rel="stylesheet" type="text/css" media="all" />
<link href="//superyou.in/cdn/shop/t/51/assets/component-card.css?v=120341546515895839841766474553" rel="stylesheet" type="text/css" media="all" />

<script src="//superyou.in/cdn/shop/t/51/assets/cart.js?v=53973376719736494311766474551" defer="defer"></script>
<script src="//superyou.in/cdn/shop/t/51/assets/quantity-popover.js?v=987015268078116491766474616" defer="defer"></script>



<cart-drawer class="drawer is-empty">
  <div id="CartDrawer" class="cart-drawer">
    <div id="CartDrawer-Overlay" class="cart-drawer__overlay"></div>
    <div
      class="drawer__inner gradient color-scheme-c4b56f92-a4d8-46d7-8701-a94961dd0b1a"
      role="dialog"
      aria-modal="true"
      aria-label="Your cart"
      tabindex="-1"
    ><div class="drawer__inner-empty">
          <div class="cart-drawer__warnings center cart-drawer__warnings--has-collection">
            <div class="cart-drawer__empty-content">
              <h2 class="cart__empty-text">Your cart is empty</h2>
              <button
                class="drawer__close"
                type="button"
                onclick="this.closest('cart-drawer').close()"
                aria-label="Close"
              >
                <span class="svg-wrapper"><svg class="icon icon-close" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M13.3 10.0007L19.4872 3.81339C20.1709 3.12976 20.1709 2.02141 19.4872 1.33882L18.6624 0.514033C17.9785 -0.169758 16.8702 -0.169758 16.1877 0.514033L10.0007 6.70114L3.81339 0.512721C3.12976 -0.170907 2.02141 -0.170907 1.33882 0.512721L0.512721 1.33761C-0.170907 2.02146 -0.170907 3.12981 0.512721 3.81235L6.70103 10.0007L0.513979 16.1878C-0.169813 16.8716 -0.169813 17.98 0.513979 18.6625L1.33882 19.4873C2.02244 20.1709 3.1308 20.1709 3.81339 19.4873L10.0006 13.3001L16.1878 19.4873C16.8716 20.1709 17.9799 20.1709 18.6625 19.4873L19.4873 18.6624C20.1709 17.9786 20.1709 16.8702 19.4873 16.1877L13.3 10.0007Z" fill="#151515"/>
</svg>
</span>
              </button>
              <a href="/collections/all" class="button">
                Continue shopping
              </a><p class="cart__login-title h3">Have an account?</p>
                <p class="cart__login-paragraph">
                  <a href="/account/login" class="link underlined-link">Log in</a> to check out faster.
                </p></div>
          </div><div class="cart-drawer__collection">
              
<div class="card-wrapper animate-arrow collection-card-wrapper">
  <div
    class="
      card
      card--card
       card--media
       color-scheme-2 gradient
      
      
    "
    style="--ratio-percent: 100%;"
  >
    <div
      class="card__inner  ratio"
      style="--ratio-percent: 100%;"
    ><div class="card__media">
          <div class="media media--transparent media--hover-effect">
            <img
              srcset="//superyou.in/cdn/shop/collections/12.png?v=1730878038&width=165 165w,//superyou.in/cdn/shop/collections/12.png?v=1730878038&width=330 330w,//superyou.in/cdn/shop/collections/12.png?v=1730878038&width=535 535w,//superyou.in/cdn/shop/collections/12.png?v=1730878038 718w"
              
              src="//superyou.in/cdn/shop/collections/12.png?v=1730878038&width=1500"
              sizes="
                (min-width: 1600px) 1500px,
                (min-width: 750px) calc(100vw - 10rem),
                calc(100vw - 3rem)
              "
              alt="Protein Wafers"
              height="641"
              width="718"
              loading="lazy"
              class="motion-reduce"
            >
          </div>
        </div><div class="card__content">
          <div class="card__information">
            <h3 class="card__heading">
              <a
                
                  href="/collections/protein-wafers"
                
                class="full-unstyled-link"
              >Protein Wafers
              </a>
            </h3><p class="card__caption">A satisfying crunch, mouth-watering flavors, AND it’s healthy? The SUPERYOU Protein Bars...<span class="icon-wrap"><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-arrow" viewBox="0 0 14 10"><path fill="currentColor" fill-rule="evenodd" d="M8.537.808a.5.5 0 0 1 .817-.162l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 1 1-.708-.708L11.793 5.5H1a.5.5 0 0 1 0-1h10.793L8.646 1.354a.5.5 0 0 1-.109-.546" clip-rule="evenodd"/></svg>
</span>
              </p></div>
        </div></div><div class="card__content">
        <div class="card__information">
          <h3 class="card__heading">
            <a
              
                href="/collections/protein-wafers"
              
              class="full-unstyled-link"
            >Protein Wafers<span class="icon-wrap"><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-arrow" viewBox="0 0 14 10"><path fill="currentColor" fill-rule="evenodd" d="M8.537.808a.5.5 0 0 1 .817-.162l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 1 1-.708-.708L11.793 5.5H1a.5.5 0 0 1 0-1h10.793L8.646 1.354a.5.5 0 0 1-.109-.546" clip-rule="evenodd"/></svg>
</span>
            </a>
          </h3></div>
      </div></div>
</div>

            </div></div><div class="drawer__header">
        <h2 class="drawer__heading">Your cart</h2>
        <button
          class="drawer__close"
          type="button"
          onclick="this.closest('cart-drawer').close()"
          aria-label="Close"
        >
          <span class="svg-wrapper"><svg class="icon icon-close" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M13.3 10.0007L19.4872 3.81339C20.1709 3.12976 20.1709 2.02141 19.4872 1.33882L18.6624 0.514033C17.9785 -0.169758 16.8702 -0.169758 16.1877 0.514033L10.0007 6.70114L3.81339 0.512721C3.12976 -0.170907 2.02141 -0.170907 1.33882 0.512721L0.512721 1.33761C-0.170907 2.02146 -0.170907 3.12981 0.512721 3.81235L6.70103 10.0007L0.513979 16.1878C-0.169813 16.8716 -0.169813 17.98 0.513979 18.6625L1.33882 19.4873C2.02244 20.1709 3.1308 20.1709 3.81339 19.4873L10.0006 13.3001L16.1878 19.4873C16.8716 20.1709 17.9799 20.1709 18.6625 19.4873L19.4873 18.6624C20.1709 17.9786 20.1709 16.8702 19.4873 16.1877L13.3 10.0007Z" fill="#151515"/>
</svg>
</span>
        </button>
      </div>
      <cart-drawer-items
        
          class=" is-empty"
        
      >
        <form
          action="/cart"
          id="CartDrawer-Form"
          class="cart__contents cart-drawer__form"
          method="post"
        >
          <div id="CartDrawer-CartItems" class="drawer__contents js-contents"><p id="CartDrawer-LiveRegionText" class="visually-hidden" role="status"></p>
            <p id="CartDrawer-LineItemStatus" class="visually-hidden" aria-hidden="true" role="status">
              Loading...
            </p>
          </div>
          <div id="CartDrawer-CartErrors" role="alert"></div>
        </form>
      </cart-drawer-items>
      <div class="drawer__footer"><!-- Start blocks -->
        <!-- Subtotals -->

        <div class="cart-drawer__footer" >
          <div></div>

          <div class="totals" role="status">
            <h2 class="totals__total">Estimated total</h2>
            <p class="totals__total-value">₹0.00</p>
          </div>

          <small class="tax-note caption-large rte">Taxes included. Discounts and <a href="/policies/shipping-policy">shipping</a> calculated at checkout.
</small>
        </div>

        <!-- CTAs -->

        <div class="cart__ctas" >
          <!-- <button
            type="submit"
            id="CartDrawer-Checkout"
            class="cart__checkout-button button"
            name="checkout"
            form="CartDrawer-Form"
            
              disabled
            
          >
            Check out
          </button> -->
           
<div class="gokwik-checkout">
  <button type='button' class="disabled button" disabled onclick="onCheckoutClick(this)">
            <span class="btn-text" >
                <span>Checkout</span>
                <span></span>
            </span>
          <span class="pay-opt-icon">
             <!-- <img src="https://cdn.gokwik.co/v4/images/upi-icons.svg"> -->
             <!-- <img src="https://cdn.gokwik.co/v4/images/right-arrow.svg"> -->
         
 </span>
    <div style="display:none" class="addloadr" id="btn-loader"><div class="cir-loader">Loading..</div></div>
  </button>
</div>


        </div>
      </div>
    </div>
  </div>
</cart-drawer>
<!-- BEGIN sections: header-group -->
<div id="shopify-section-sections--26131584254242__announcement_bar_Qz8B3d" class="shopify-section shopify-section-group-header-group announcement-bar-section"><link href="//superyou.in/cdn/shop/t/51/assets/component-slideshow.css?v=17933591812325749411766474565" rel="stylesheet" type="text/css" media="all" />
<link href="//superyou.in/cdn/shop/t/51/assets/component-slider.css?v=14039311878856620671766474565" rel="stylesheet" type="text/css" media="all" />

  <link href="//superyou.in/cdn/shop/t/51/assets/component-list-social.css?v=35792976012981934991766474558" rel="stylesheet" type="text/css" media="all" />


<div
  class="utility-bar color-scheme-4 gradient utility-bar--bottom-border"
  
>
  <div class="page-width utility-bar__grid"><div
        class="announcement-bar"
        role="region"
        aria-label="Announcement"
        
      ><a
              href="/collections/protein-powders"
              class="announcement-bar__link link link--text focus-inset animate-arrow"
            ><p class="announcement-bar__message h5">
            <span>Get 3% Prepaid Bonus on all orders🤩</span><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-arrow" viewBox="0 0 14 10"><path fill="currentColor" fill-rule="evenodd" d="M8.537.808a.5.5 0 0 1 .817-.162l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 1 1-.708-.708L11.793 5.5H1a.5.5 0 0 1 0-1h10.793L8.646 1.354a.5.5 0 0 1-.109-.546" clip-rule="evenodd"/></svg>
</p></a></div><div class="localization-wrapper">
</div>
  </div>
</div>


</div><div id="shopify-section-sections--26131584254242__header" class="shopify-section shopify-section-group-header-group section-header"><link rel="stylesheet" href="//superyou.in/cdn/shop/t/51/assets/component-list-menu.css?v=151968516119678728991766474557" media="print" onload="this.media='all'">
<link rel="stylesheet" href="//superyou.in/cdn/shop/t/51/assets/component-search.css?v=170402538347838889941766474564" media="print" onload="this.media='all'">
<link rel="stylesheet" href="//superyou.in/cdn/shop/t/51/assets/component-menu-drawer.css?v=147478906057189667651766474559" media="print" onload="this.media='all'">
<link rel="stylesheet" href="//superyou.in/cdn/shop/t/51/assets/component-cart-notification.css?v=54116361853792938221766474555" media="print" onload="this.media='all'"><link rel="stylesheet" href="//superyou.in/cdn/shop/t/51/assets/component-price.css?v=101019534186928093711766474562" media="print" onload="this.media='all'"><script>

  var style = document.createElement('style');
  style.innerHTML =
  header-drawer {
    justify-self: start;
    margin-left: -1.2rem;
  }.scrolled-past-header .header__heading-logo-wrapper {
      width: 75%;
    }.menu-drawer-container {
    display: flex;
  }

 

  .list-menu {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .list-menu--inline {
    display: inline-flex;
    flex-wrap: wrap;
  }

  summary.list-menu__item {
    padding-right: 2.7rem;
  }

  .list-menu__item {
    display: flex;
    align-items: center;
    line-height: calc(1 + 0.3 / var(--font-body-scale));
  }

  .list-menu__item--link {
    text-decoration: none;
    padding-bottom: 1rem;
    padding-top: 1rem;
    line-height: calc(1 + 0.8 / var(--font-body-scale));
  }

  @media screen and (min-width: 750px) {
    .list-menu__item--link {
      padding-bottom: 0.5rem;
      padding-top: 0.5rem;
    }
  }
  document.head.appendChild(style);
<script><style data-shopify>.header {
    padding: 6px 3rem 6px 3rem;
  }

  .section-header {
    position: sticky; /* This is for fixing a Safari z-index issue. PR #2147 */
    margin-bottom: 0px;
  }

  @media screen and (min-width: 750px) {
    .section-header {
      margin-bottom: 0px;
    }
  }

  @media screen and (min-width: 990px) {
    .header {
      padding-top: 12px;
      padding-bottom: 12px;
    }
  }</style><script src="//superyou.in/cdn/shop/t/51/assets/cart-notification.js?v=133508293167896966491766474551" defer="defer"></script><sticky-header data-sticky-type="reduce-logo-size" class="header-wrapper color-scheme-2 gradient header-wrapper--border-bottom"><header class="header header--middle-center header--mobile-center page-width header--has-menu header--has-social header--has-account">

<style>@media screen and (min-width: 990px) {
      header-drawer {
        display: none !important;
      }
    }summary.header__icon.header__icon--menu.header__icon--summary.link.focus-inset{
        border-right: 1px solid #15151510;
    border-left: 0;
    height: 48px;
  }
  details-modal.header__search.header__icon {
    height: 100%;
} 
   @media screen and (max-width: 550px) {  
  header.header {
       height: 48px !important;
  }
       .header__icons,
  header-drawer{
       height: 48px !important;
  }
     .header .header__icon{
               padding: 18px 20px !important;
        height: 60px;
     }
     img.header__heading-logo{
      height: 48px;
    width: auto;
     }
   }
a#cart-icon-bubble {
    height: 100%;
}
  details#Details-menu-drawer-container{
     height: 100%;
  }
  .header__icons,
  header-drawer{
        height: 60px;
  }
</style>


<header-drawer data-breakpoint="tablet">
  <details id="Details-menu-drawer-container" class="menu-drawer-container">
    <summary
      class="header__icon header__icon--menu header__icon--summary link focus-inset"
      aria-label="Menu"
    >
      <span><svg  class="icon icon-hamburger"  viewBox="0 0 24 18" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M21.7914 0.0117188H8.23359C7.01578 0.0117188 6.02498 1.00252 6.02498 2.22183C6.02498 3.43964 7.01578 4.43044 8.23359 4.43044H21.7913C23.0092 4.43044 24 3.43964 24 2.22183C24 1.00247 23.0092 0.0117188 21.7914 0.0117188ZM2.20941 0.0117188C0.991172 0.0117188 0 1.00284 0 2.22108C0 3.43931 0.991172 4.43044 2.20941 4.43044C3.42764 4.43044 4.41877 3.43931 4.41877 2.22108C4.41877 1.00284 3.42764 0.0117188 2.20941 0.0117188ZM2.20941 6.78984C0.991172 6.78984 0 7.78097 0 8.9992C0 10.2174 0.991172 11.2086 2.20941 11.2086C3.42764 11.2086 4.41877 10.2174 4.41877 8.9992C4.41877 7.78097 3.42764 6.78984 2.20941 6.78984ZM2.20941 13.568C0.991172 13.568 0 14.5591 0 15.7773C0 16.9956 0.991172 17.9867 2.20941 17.9867C3.42764 17.9867 4.41877 16.9956 4.41877 15.7773C4.41877 14.5591 3.42764 13.568 2.20941 13.568ZM21.7914 6.78984H8.23359C7.01578 6.78984 6.02498 7.78064 6.02498 8.99995C6.02498 10.2178 7.01578 11.2086 8.23359 11.2086H21.7913C23.0092 11.2086 24 10.2178 24 8.99995C24 7.78059 23.0092 6.78984 21.7914 6.78984ZM21.7914 13.568H8.23359C7.01578 13.568 6.02498 14.5588 6.02498 15.7781C6.02498 16.9959 7.01578 17.9867 8.23359 17.9867H21.7913C23.0092 17.9867 24 16.9959 24 15.7781C24 14.5588 23.0092 13.568 21.7914 13.568Z" fill="#151515"/>
</svg>
<svg class="icon icon-close" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M13.3 10.0007L19.4872 3.81339C20.1709 3.12976 20.1709 2.02141 19.4872 1.33882L18.6624 0.514033C17.9785 -0.169758 16.8702 -0.169758 16.1877 0.514033L10.0007 6.70114L3.81339 0.512721C3.12976 -0.170907 2.02141 -0.170907 1.33882 0.512721L0.512721 1.33761C-0.170907 2.02146 -0.170907 3.12981 0.512721 3.81235L6.70103 10.0007L0.513979 16.1878C-0.169813 16.8716 -0.169813 17.98 0.513979 18.6625L1.33882 19.4873C2.02244 20.1709 3.1308 20.1709 3.81339 19.4873L10.0006 13.3001L16.1878 19.4873C16.8716 20.1709 17.9799 20.1709 18.6625 19.4873L19.4873 18.6624C20.1709 17.9786 20.1709 16.8702 19.4873 16.1877L13.3 10.0007Z" fill="#151515"/>
</svg>
</span>
    </summary>
    <div id="menu-drawer" class="gradient menu-drawer motion-reduce color-scheme-c4b56f92-a4d8-46d7-8701-a94961dd0b1a">
      <div class="menu-drawer__inner-container">
        <div class="menu-drawer__navigation-container">
          <nav class="menu-drawer__navigation">
              <div class="navi-wrap">
                <div class="na-wr"><div class="in-wr"><img src="//superyou.in/cdn/shop/files/FOP_copy.jpg?v=1766404244&width=200" alt="Protein Chips - Variety Pack of 10" class="ins-img" loading="lazy"><div class="div-in">
                            <div class="names-div">Multigrain Chips</div>
                            <a class="sna" href="/products/superyou-protein-chips">Shop Now
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.4974 10L6.66406 6.16667L7.83073 5L12.8307 10L7.83073 15L6.66406 13.8333L10.4974 10Z" fill="#EF1400" />
                                </svg>
                            </a>
                        </div>
                    </div><div class="in-wr"><img src="//superyou.in/cdn/shop/files/WebsiteProductcard__1.jpg?v=1742214015&width=200" alt="Chocolate Protein Wafer - Pack of 10" class="ins-img" loading="lazy"><div class="div-in">
                            <div class="names-div">Chocolate</div>
                            <a class="sna" href="/products/chocolate-protein-wafer">Shop Now
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.4974 10L6.66406 6.16667L7.83073 5L12.8307 10L7.83073 15L6.66406 13.8333L10.4974 10Z" fill="#EF1400" />
                                </svg>
                            </a>
                        </div>
                    </div><div class="in-wr"><img src="//superyou.in/cdn/shop/files/WebsiteProductcard__3.jpg?v=1742215255&width=200" alt="Choco Peanut Butter Protein Wafer — Pack of 10" class="ins-img" loading="lazy"><div class="div-in">
                            <div class="names-div">Choco Peanut Butter</div>
                            <a class="sna" href="/products/choco-peanut-butter-protein-wafer">Shop Now
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.4974 10L6.66406 6.16667L7.83073 5L12.8307 10L7.83073 15L6.66406 13.8333L10.4974 10Z" fill="#EF1400" />
                                </svg>
                            </a>
                        </div>
                    </div><div class="in-wr"><img src="//superyou.in/cdn/shop/files/WebsiteProductcard.jpg?v=1742213791&width=200" alt="Strawberry Crème Protein Wafer — Pack of 10" class="ins-img" loading="lazy"><div class="div-in">
                            <div class="names-div">Strawberry Crème</div>
                            <a class="sna" href="/products/strawberry-creme-protein-wafer">Shop Now
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.4974 10L6.66406 6.16667L7.83073 5L12.8307 10L7.83073 15L6.66406 13.8333L10.4974 10Z" fill="#EF1400" />
                                </svg>
                            </a>
                        </div>
                    </div><div class="in-wr"><img src="//superyou.in/cdn/shop/files/WebsiteProductcard__2.jpg?v=1742214145&width=200" alt="Cheese Protein Wafer — Pack of 10" class="ins-img" loading="lazy"><div class="div-in">
                            <div class="names-div">Cheese Protein</div>
                            <a class="sna" href="/products/cheese-protein-wafer">Shop Now
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.4974 10L6.66406 6.16667L7.83073 5L12.8307 10L7.83073 15L6.66406 13.8333L10.4974 10Z" fill="#EF1400" />
                                </svg>
                            </a>
                        </div>
                    </div><div class="in-wr"><img src="//superyou.in/cdn/shop/files/FOP_copy_3.jpg?v=1766404279&width=200" alt="Protein Wafers - Variety Pack of 10" class="ins-img" loading="lazy"><div class="div-in">
                            <div class="names-div">Variety Box</div>
                            <a class="sna" href="/products/variety-box">Shop Now
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.4974 10L6.66406 6.16667L7.83073 5L12.8307 10L7.83073 15L6.66406 13.8333L10.4974 10Z" fill="#EF1400" />
                                </svg>
                            </a>
                        </div>
                    </div></div>
                <a href="#" class="wraps">
                    <div class="tag-link">SHOP ALL</div>
                    <div class="divs-hover"></div>
                </a>
            </div>
            <ul class="menu-drawer__menu has-submenu list-menu">
            
                
                <li><a
  id="HeaderDrawer-home"
  href="/"
  class="menu-drawer__menu-item list-menu__item link link--text focus-inset menu-drawer__menu-item--active"
  
    aria-current="page"
  
>
  <span>Home</span></a></li>
                <li><a
  id="HeaderDrawer-creatine-monohydrate"
  href="/pages/superyoupro"
  class="menu-drawer__menu-item list-menu__item link link--text focus-inset"
  
>
  <span>Creatine Monohydrate</span><span class="menu-item-new-badge">NEW</span></a></li>
                <li><a
  id="HeaderDrawer-protein-powder"
  href="/pages/superyou-pro"
  class="menu-drawer__menu-item list-menu__item link link--text focus-inset"
  
>
  <span>Protein Powder</span></a></li>
                <li><a
  id="HeaderDrawer-mega-protein-wafer-20g"
  href="/pages/mega-protein-range"
  class="menu-drawer__menu-item list-menu__item link link--text focus-inset"
  
>
  <span>Mega Protein Wafer 20g</span></a></li>
                <li><a
  id="HeaderDrawer-protein-wafers-10g"
  href="/collections/protein-wafers/Wafers"
  class="menu-drawer__menu-item list-menu__item link link--text focus-inset"
  
>
  <span>Protein Wafers 10g  </span></a></li>
                <li><a
  id="HeaderDrawer-protein-wafer-minis-5g"
  href="/collections/protein-wafers-mini"
  class="menu-drawer__menu-item list-menu__item link link--text focus-inset"
  
>
  <span>Protein Wafer Minis 5g</span></a></li>
                <li><a
  id="HeaderDrawer-multigrain-protein-chips-10g"
  href="/products/superyou-protein-chips"
  class="menu-drawer__menu-item list-menu__item link link--text focus-inset"
  
>
  <span>Multigrain Protein Chips 10g</span></a></li>
                <li><a
  id="HeaderDrawer-merchandise"
  href="/collections/merchandise"
  class="menu-drawer__menu-item list-menu__item link link--text focus-inset"
  
>
  <span>Merchandise</span></a></li>
                <li><a
  id="HeaderDrawer-about-us"
  href="/pages/about"
  class="menu-drawer__menu-item list-menu__item link link--text focus-inset"
  
>
  <span>About Us</span></a></li></ul>
          </nav>
          <div class="menu-drawer__utility-links"><a
                href="/account/login"
                class="menu-drawer__account link focus-inset h5 medium-hide large-up-hide"
                rel="nofollow"
              ><account-icon><span class="svg-wrapper"><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-account" viewBox="0 0 18 19"><path fill="currentColor" fill-rule="evenodd" d="M6 4.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-4a4 4 0 1 0 0 8 4 4 0 0 0 0-8m5.58 12.15c1.12.82 1.83 2.24 1.91 4.85H1.51c.08-2.6.79-4.03 1.9-4.85C4.66 11.75 6.5 11.5 9 11.5s4.35.26 5.58 1.15M9 10.5c-2.5 0-4.65.24-6.17 1.35C1.27 12.98.5 14.93.5 18v.5h17V18c0-3.07-.77-5.02-2.33-6.15-1.52-1.1-3.67-1.35-6.17-1.35" clip-rule="evenodd" stroke-width="3"/></svg>

</span></account-icon>Log in</a><div class="menu-drawer__localization header-localization">
</div><ul class="list list-social list-unstyled"><li class="list-social__item">
                  <a href="https://www.instagram.com/be.superyou" class="list-social__link link">
                    <span class="svg-wrapper"><svg class="icon icon-instagram" viewBox="0 0 20 20"><path fill="currentColor" fill-rule="evenodd" d="M13.23 3.492c-.84-.037-1.096-.046-3.23-.046-2.144 0-2.39.01-3.238.055-.776.027-1.195.164-1.487.273a2.4 2.4 0 0 0-.912.593 2.5 2.5 0 0 0-.602.922c-.11.282-.238.702-.274 1.486-.046.84-.046 1.095-.046 3.23s.01 2.39.046 3.229c.004.51.097 1.016.274 1.495.145.365.319.639.602.913.282.282.538.456.92.602.474.176.974.268 1.479.273.848.046 1.103.046 3.238.046s2.39-.01 3.23-.046c.784-.036 1.203-.164 1.486-.273.374-.146.648-.329.921-.602.283-.283.447-.548.602-.922.177-.476.27-.979.274-1.486.037-.84.046-1.095.046-3.23s-.01-2.39-.055-3.229c-.027-.784-.164-1.204-.274-1.495a2.4 2.4 0 0 0-.593-.913 2.6 2.6 0 0 0-.92-.602c-.284-.11-.703-.237-1.488-.273ZM6.697 2.05c.857-.036 1.131-.045 3.302-.045a63 63 0 0 1 3.302.045c.664.014 1.321.14 1.943.374a4 4 0 0 1 1.414.922c.41.397.728.88.93 1.414.23.622.354 1.279.365 1.942C18 7.56 18 7.824 18 10.005c0 2.17-.01 2.444-.046 3.292-.036.858-.173 1.442-.374 1.943-.2.53-.474.976-.92 1.423a3.9 3.9 0 0 1-1.415.922c-.51.191-1.095.337-1.943.374-.857.036-1.122.045-3.302.045-2.171 0-2.445-.009-3.302-.055-.849-.027-1.432-.164-1.943-.364a4.15 4.15 0 0 1-1.414-.922 4.1 4.1 0 0 1-.93-1.423c-.183-.51-.329-1.085-.365-1.943C2.009 12.45 2 12.167 2 10.004c0-2.161 0-2.435.055-3.302.027-.848.164-1.432.365-1.942a4.4 4.4 0 0 1 .92-1.414 4.2 4.2 0 0 1 1.415-.93c.51-.183 1.094-.33 1.943-.366Zm.427 4.806a4.105 4.105 0 1 1 5.805 5.805 4.105 4.105 0 0 1-5.805-5.805m1.882 5.371a2.668 2.668 0 1 0 2.042-4.93 2.668 2.668 0 0 0-2.042 4.93m5.922-5.942a.958.958 0 1 1-1.355-1.355.958.958 0 0 1 1.355 1.355" clip-rule="evenodd"/></svg>
</span>
                    <span class="visually-hidden">Instagram</span>
                  </a>
                </li><li class="list-social__item">
                  <a href="https://youtube.com/@be.superyou?si=LC2vtMyoRiIbeK1V" class="list-social__link link">
                    <span class="svg-wrapper"><svg class="icon icon-youtube" viewBox="0 0 20 20"><path fill="currentColor" d="M18.16 5.87c.34 1.309.34 4.08.34 4.08s0 2.771-.34 4.08a2.13 2.13 0 0 1-1.53 1.53c-1.309.34-6.63.34-6.63.34s-5.321 0-6.63-.34a2.13 2.13 0 0 1-1.53-1.53c-.34-1.309-.34-4.08-.34-4.08s0-2.771.34-4.08a2.17 2.17 0 0 1 1.53-1.53C4.679 4 10 4 10 4s5.321 0 6.63.34a2.17 2.17 0 0 1 1.53 1.53M8.3 12.5l4.42-2.55L8.3 7.4z"/></svg>
</span>
                    <span class="visually-hidden">YouTube</span>
                  </a>
                </li></ul>
          </div>
        </div>
      </div>
    </div>
  </details>
</header-drawer>


<nav class="header__inline-menu">
  <ul class="list-menu list-menu--inline" role="list"><li><a
    id="HeaderDrawer-shop-all"
    href="/collections/all"
    class="menu-drawer__menu-item list-menu__item link link--text focus-inset"
  >
    <span>SHOP ALL</span></a></li></ul>
</nav>
<style>
.menu-hierarchy-wrapper {
  padding: 1rem 0;
  border-bottom: 1px solid #15151510;
}

/* Parent Headings - Bold and crisp */
.hierarchy-parent-title {
  font-family: 'helvetica_now_varregular', sans-serif;
  font-weight: 900;
  font-size: 1.4rem;
  text-transform: uppercase;
  letter-spacing: 0.1rem;
  color: #EF1400; /* Impactful Red from your logo style */
  padding-bottom: 0.5rem !important;
  pointer-events: none; /* Makes it a label, not a button */
}

/* Sub-menu styling */
.hierarchy-list {
  padding-left: 0;
  margin-top: 0.5rem;
}

.hierarchy-item-container {
  margin-bottom: 0.5rem;
}

/* The Child Links */
.hierarchy-list .menu-drawer__menu-item {
  padding: 0.8rem 2rem !important;
  font-size: 1.8rem;
  font-weight: 500;
}

/* The Grandchild Links - Subtle Indentation */
.hierarchy-grandchild-list {
  padding-left: 2rem;
  border-left: 1px solid #15151510;
  margin-left: 2.2rem;
  margin-bottom: 1rem;
}

.hierarchy-grandchild-list .menu-drawer__menu-item {
  font-size: 1.5rem;
  opacity: 0.7;
  padding: 0.4rem 0 !important;
}

/* Active State */
.menu-drawer__menu-item--active {
  text-decoration: underline;
  text-underline-offset: 0.4rem;
  opacity: 1 !important;
}
</style>
<h1 class="header__heading"><a href="/" class="header__heading-link link link--text focus-inset"><span class="header__heading-logo-wrapper"><img src="//superyou.in/cdn/shop/files/SVG_Logo.svg?v=1741324883&amp;width=600" alt="SuperYou" srcset="//superyou.in/cdn/shop/files/SVG_Logo.svg?v=1741324883&amp;width=150 150w, //superyou.in/cdn/shop/files/SVG_Logo.svg?v=1741324883&amp;width=352 352w" width="150" height="auto" class="header__heading-logo motion-reduce">
    </span></a></h1><div class="header__icons header__icons--localization header-localization">
      <div class="desktop-localization-wrapper">
</div>
      

<details-modal class="header__search header__icon ">
  <details>
    <summary
      class=" header__icon--search header__icon--summary link focus-inset modal__toggle"
      aria-haspopup="dialog"
      aria-label="Search"
    >
      <span>
        <span class="svg-wrapper"><svg class="icon icon-search" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M23.0152 18.2515C22.3515 17.5877 20.2591 16.0428 18.1816 14.8466C18.1591 14.8804 18.1366 14.9141 18.1141 14.9516C20.4578 11.1755 19.9966 6.14695 16.7154 2.86583C12.8906 -0.955275 6.69208 -0.955275 2.86723 2.86583C-0.957619 6.69443 -0.953869 12.8892 2.86723 16.714C6.11835 19.9614 11.0794 20.4526 14.8443 18.1802C15.928 20.0627 17.5067 22.2713 18.2529 23.0175C19.5653 24.33 21.7027 24.3262 23.0152 23.0138C24.3276 21.6976 24.3276 19.5677 23.0152 18.2515ZM14.1355 14.1341C11.7356 16.5303 7.85079 16.5303 5.45088 14.1304C3.05472 11.7342 3.05097 7.84938 5.45088 5.44947C7.84704 3.05332 11.7356 3.05332 14.1318 5.44947C16.5317 7.84938 16.5317 11.738 14.1355 14.1341Z" fill="#151515"/>
</svg>

</span>
        <span class="svg-wrapper header__icon-close"><svg class="icon icon-close" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M13.3 10.0007L19.4872 3.81339C20.1709 3.12976 20.1709 2.02141 19.4872 1.33882L18.6624 0.514033C17.9785 -0.169758 16.8702 -0.169758 16.1877 0.514033L10.0007 6.70114L3.81339 0.512721C3.12976 -0.170907 2.02141 -0.170907 1.33882 0.512721L0.512721 1.33761C-0.170907 2.02146 -0.170907 3.12981 0.512721 3.81235L6.70103 10.0007L0.513979 16.1878C-0.169813 16.8716 -0.169813 17.98 0.513979 18.6625L1.33882 19.4873C2.02244 20.1709 3.1308 20.1709 3.81339 19.4873L10.0006 13.3001L16.1878 19.4873C16.8716 20.1709 17.9799 20.1709 18.6625 19.4873L19.4873 18.6624C20.1709 17.9786 20.1709 16.8702 19.4873 16.1877L13.3 10.0007Z" fill="#151515"/>
</svg>
</span>
      </span>
    </summary>
    <div
      class="search-modal modal__content gradient"
      role="dialog"
      aria-modal="true"
      aria-label="Search"
    >
      <div class="modal-overlay"></div>
      <div
        class="search-modal__content search-modal__content-bottom"
        tabindex="-1"
      ><predictive-search class="search-modal__form" data-loading-text="Loading..."><form action="/search" method="get" role="search" class="search search-modal__form">
          <div class="search-combobox" role="combobox" aria-expanded="false" aria-haspopup="listbox" aria-controls="predictive-search-results" aria-autocomplete="list">
            <input
              class="search__input field__input"
              id="Search-In-Modal"
              type="search"
              name="q"
              value=""
              placeholder="Search"aria-owns="predictive-search-results"
                autocomplete="off"
                autocapitalize="off"
                spellcheck="false">
            <label class="field__label" for="Search-In-Modal">Search</label>
            <input type="hidden" name="options[prefix]" value="last">
            <button
              type="reset"
              class="reset__button field__button hidden"
              aria-label="Clear search term"
            >
              <span class="svg-wrapper"><svg fill="none" stroke="currentColor" class="icon icon-close" viewBox="0 0 18 18"><circle cx="9" cy="9" r="8.5" stroke-opacity=".2"/><path stroke-linecap="round" stroke-linejoin="round" d="M11.83 11.83 6.172 6.17M6.229 11.885l5.544-5.77"/></svg>
</span>
            </button>
            <button class="search__button field__button" aria-label="Search">
              <span class="svg-wrapper"><svg class="icon icon-search" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M23.0152 18.2515C22.3515 17.5877 20.2591 16.0428 18.1816 14.8466C18.1591 14.8804 18.1366 14.9141 18.1141 14.9516C20.4578 11.1755 19.9966 6.14695 16.7154 2.86583C12.8906 -0.955275 6.69208 -0.955275 2.86723 2.86583C-0.957619 6.69443 -0.953869 12.8892 2.86723 16.714C6.11835 19.9614 11.0794 20.4526 14.8443 18.1802C15.928 20.0627 17.5067 22.2713 18.2529 23.0175C19.5653 24.33 21.7027 24.3262 23.0152 23.0138C24.3276 21.6976 24.3276 19.5677 23.0152 18.2515ZM14.1355 14.1341C11.7356 16.5303 7.85079 16.5303 5.45088 14.1304C3.05472 11.7342 3.05097 7.84938 5.45088 5.44947C7.84704 3.05332 11.7356 3.05332 14.1318 5.44947C16.5317 7.84938 16.5317 11.738 14.1355 14.1341Z" fill="#151515"/>
</svg>

</span>
            </button>
          </div><div class="predictive-search predictive-search--header" tabindex="-1" data-predictive-search>

<div class="predictive-search__loading-state">
  <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66"><circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path"/></svg>

</div>
</div>

            <span class="predictive-search-status visually-hidden" role="status" aria-hidden="true"></span></form></predictive-search><button
          type="button"
          class="search-modal__close-button modal__close-button link link--text focus-inset"
          aria-label="Close"
        >
          <span class="svg-wrapper"><svg class="icon icon-close" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M13.3 10.0007L19.4872 3.81339C20.1709 3.12976 20.1709 2.02141 19.4872 1.33882L18.6624 0.514033C17.9785 -0.169758 16.8702 -0.169758 16.1877 0.514033L10.0007 6.70114L3.81339 0.512721C3.12976 -0.170907 2.02141 -0.170907 1.33882 0.512721L0.512721 1.33761C-0.170907 2.02146 -0.170907 3.12981 0.512721 3.81235L6.70103 10.0007L0.513979 16.1878C-0.169813 16.8716 -0.169813 17.98 0.513979 18.6625L1.33882 19.4873C2.02244 20.1709 3.1308 20.1709 3.81339 19.4873L10.0006 13.3001L16.1878 19.4873C16.8716 20.1709 17.9799 20.1709 18.6625 19.4873L19.4873 18.6624C20.1709 17.9786 20.1709 16.8702 19.4873 16.1877L13.3 10.0007Z" fill="#151515"/>
</svg>
</span>
        </button>
      </div>
    </div>
  </details>
</details-modal>

<a
    href="/account/login"
    class="header__icon header__icon--account link focus-inset small-hide"
    rel="nofollow"
  ><account-icon><span class="svg-wrapper"><img 
              height="24px" 
              width="24px" 
              alt="account-icon" 
              src="https://cdn.shopify.com/s/files/1/0902/2590/1858/files/Group_eaae5131-e6ca-4705-bec6-1b25098ec54f.png?v=1741183192" 
              class=""
            />
          </span></account-icon><span class="visually-hidden">Log in</span>
  </a><a href="/cart" class="header__icon header__icon--cart link focus-inset" id="cart-icon-bubble">
          
            <span class="svg-wrapper"><svg class="icon icon-cart-empty" width="20" height="26" viewBox="0 0 20 26" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.71484 0.599609C11.0939 0.599636 12.4164 1.14791 13.3916 2.12305C14.3667 3.09819 14.915 4.42075 14.915 5.7998V6.2002H15.1787L15.4678 6.21387C16.1386 6.27782 16.7721 6.56515 17.2637 7.03418C17.8252 7.57007 18.1586 8.30177 18.1943 9.07715L18.8262 22.2363V22.2373C18.8448 22.6451 18.7807 23.0532 18.6377 23.4355C18.4947 23.8178 18.2758 24.1675 17.9941 24.4629C17.7126 24.7582 17.3739 24.9932 16.999 25.1543C16.6239 25.3154 16.2198 25.3996 15.8115 25.4004H3.61816C3.20991 25.3996 2.80579 25.3154 2.43066 25.1543C2.05572 24.9933 1.71716 24.7582 1.43555 24.4629C1.15393 24.1675 0.935003 23.8178 0.791992 23.4355C0.648984 23.0532 0.584845 22.6451 0.603516 22.2373V22.2363L1.23535 9.07715C1.27109 8.30172 1.60442 7.57008 2.16602 7.03418C2.72777 6.4982 3.47456 6.19943 4.25098 6.2002H4.51465V5.7998C4.5147 4.42075 5.06294 3.09819 6.03809 2.12305C7.01326 1.14795 8.33579 0.599609 9.71484 0.599609ZM4.25 8.59961C4.09165 8.59951 3.93887 8.6603 3.82422 8.76953C3.7096 8.87874 3.64235 9.0284 3.63477 9.18652V9.1875L3.00195 22.3496C2.99885 22.4347 3.01326 22.5208 3.04297 22.6006C3.07211 22.6787 3.11652 22.7501 3.17285 22.8115C3.23081 22.8702 3.29903 22.918 3.375 22.9502C3.4524 22.983 3.53606 22.9997 3.62012 23H15.8096C15.8934 22.9997 15.9765 22.9829 16.0537 22.9502C16.1305 22.9177 16.1995 22.8691 16.2578 22.8096C16.3134 22.7485 16.3578 22.6781 16.3867 22.6006C16.4159 22.5223 16.4292 22.4389 16.4268 22.3555L15.7949 9.1875V9.18652C15.7873 9.02839 15.7191 8.87874 15.6045 8.76953C15.4898 8.66047 15.337 8.59943 15.1787 8.59961H4.25ZM9.71484 3C8.97224 3 8.25948 3.29521 7.73438 3.82031C7.20953 4.34534 6.91509 5.05743 6.91504 5.7998V6.2002H12.5146V5.7998C12.5146 5.05727 12.2194 4.34537 11.6943 3.82031C11.1693 3.29526 10.4574 3.00003 9.71484 3Z" fill="#151515" stroke="#151515" stroke-width="0.8"/>
</svg>
 </span>
          
        <span class="visually-hidden">Cart</span></a>
    </div>
  </header>
</sticky-header>

<script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "SuperYou",
    
      "logo": "https:\/\/superyou.in\/cdn\/shop\/files\/SVG_Logo.svg?v=1741324883\u0026width=500",
    
    "sameAs": [
      "",
      "",
      "",
      "https:\/\/www.instagram.com\/be.superyou",
      "",
      "",
      "",
      "https:\/\/youtube.com\/@be.superyou?si=LC2vtMyoRiIbeK1V",
      ""
    ],
    "url": "https:\/\/superyou.in"
  }
</script>
  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "WebSite",
      "name": "SuperYou",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https:\/\/superyou.in\/search?q={search_term_string}",
        "query-input": "required name=search_term_string"
      },
      "url": "https:\/\/superyou.in"
    }
  </script><style>
    sticky-header { border-bottom: 0px solid #FFF !important;  }
    .header { width: 100% !important;  max-width: 100% !important;  padding: 0 !important; }
    .header__heading-link { padding: 0; line-height: normal !important; display: block; font-size: 0; 
      img { display: block; }                                       
    }
    svg.icon.icon-hamburger {
    filter: sepia(1);
}
    /* span.svg-wrapper img,
    svg.icon.icon-search {
    filter: invert(1);    
}   */
    .header__inline-menu,
    .header__inline-menu ul li,
    .header__inline-menu ul{height: 100%}
    .header__inline-menu ul { display: flex; margin: 0; padding: 0; list-style: none; }
    .header__inline-menu ul li a {display:flex;align-items: center; justify-content: center;font-size: 20px; font-family: 'helvetica_now_varregular'; height: 100%; color: #151515; font-weight: 900; padding: 16px 40px; border-right: 1px solid #15151510; text-decoration: none !important;
      span { text-decoration: none !important; }                             
    }
    .header .header__icon { border-left: 1px solid #15151510; padding: 25px 30px; height: 60px;}
     @media only screen and (max-width: 767px) {
       header.header { height: 60px; }
       .search-modal__form .search__button {right: 45px !important; top: 10px !important; }
       .header .header__icon { border-left: 1px solid #15151510; padding: 28px 20px; }
     }

  /* 1. Base Menu Item - Clean & Small */

  </style>


</div>
<!-- END sections: header-group -->
  

    <main id="MainContent" class="content-for-layout focus-none"  tabindex="-1">


<section id="shopify-section-template--26131582583074__custom_banner_complete_hT7gnp" class="shopify-section shopify-section--full-bleed"><div
  id="ultimate-banner-template--26131582583074__custom_banner_complete_hT7gnp"
  class="ultimate-banner 
         height-desktop--original 
         height-mobile--original 
         visibility--all
         banner--is-link
         "
  style="
    --text-color: #ffffff;
    --overlay-color: #000000;
    --overlay-opacity: 0.0;
    --desktop-aspect-ratio: 1.7777777777777777;
    --mobile-aspect-ratio: 1.775;
  "
>
  <div class="banner-media-container">
    
      <video 
        class="banner-video" 
        src="//superyou.in/cdn/shop/videos/c/vp/82f00aa1af094ec5adcdbd97cf2b9c07/82f00aa1af094ec5adcdbd97cf2b9c07.HD-1080p-7.2Mbps-84892202.mp4?v=0" 
        autoplay muted loop playsinline
        aria-label="">
      </video>
    
  </div>

  
</div>

<style>
.ultimate-banner { position: relative; display: flex; color: var(--text-color); overflow: hidden; }
.ultimate-banner.banner--is-link { cursor: pointer; }
.ultimate-banner .placeholder-svg { width: 100%; height: 100%; object-fit: cover; background-color: #f2f2f2; }

@media (max-width: 768px) { .visibility--hide-mobile { display: none !important; } }
@media (min-width: 769px) { .visibility--hide-desktop { display: none !important; } }

.height-desktop--small { height: 340px; }
.height-desktop--medium { height: 460px; }
.height-desktop--large { height: 600px; }
.height-desktop--original { height: auto; aspect-ratio: var(--desktop-aspect-ratio); }

@media (max-width: 768px) {
  .height-mobile--small { height: 420px; }
  .height-mobile--medium { height: 540px; }
  .height-mobile--large { height: 640px; }
  .height-mobile--original { height: auto; aspect-ratio: var(--mobile-aspect-ratio); }
}

.banner-media-container { position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 0; }
.banner-media-container::before { content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: var(--overlay-color); opacity: var(--overlay-opacity); z-index: 1; pointer-events: none; }
.banner-image, .banner-video { display: block; width: 100%; height: 100%; object-fit: cover; object-position: center; }

/* Critical: Ensure video controls don't swallow banner link clicks if not active */
.banner-video[controls] { z-index: 2; position: relative; }

.banner-content-wrapper { position: relative; z-index: 10; width: 100%; pointer-events: none; }
.banner-content-container { height: 100%; display: flex; padding: 2rem 0; }
.banner-content { width: var(--content-width); max-width: 600px; pointer-events: auto; }

.align-h--left { justify-content: flex-start; text-align: left; }
.align-h--center { justify-content: center; text-align: center; }
.align-h--right { justify-content: flex-end; text-align: right; }
.align-v--top { align-items: flex-start; }
.align-v--middle { align-items: center; }
.align-v--bottom { align-items: flex-end; }

.banner-heading { font-size: clamp(2rem, 5vw, 3.5rem); line-height: 1.1; margin-bottom: 1rem; }
.banner-subheading { font-size: clamp(1rem, 2.5vw, 1.2rem); line-height: 1.5; margin-bottom: 1.5rem; }
.banner-buttons { display: flex; flex-wrap: wrap; gap: 1rem; }
.align-h--center .banner-buttons { justify-content: center; }
.align-h--right .banner-buttons { justify-content: flex-end; }

.button { display: inline-block; padding: 12px 24px; text-decoration: none; border-radius: 4px; font-weight: 600; position: relative; z-index: 11; }
.button--primary { background-color: var(--text-color); color: var(--overlay-color); border: 2px solid var(--text-color); }
.button--secondary { background-color: transparent; color: var(--text-color); border: 2px solid var(--text-color); }

.parallax-enabled { min-height: 500px; }
.parallax-enabled .banner-image { height: 130%; transform: translateY(var(--parallax-offset, 0)); will-change: transform; }
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const banner = document.getElementById('ultimate-banner-template--26131582583074__custom_banner_complete_hT7gnp');
  if (!banner) return;

  // Parallax Logic
  if (banner.classList.contains('parallax-enabled')) {
    const image = banner.querySelector('.banner-image');
    if (image) {
      const handleScroll = () => {
        const bannerRect = banner.getBoundingClientRect();
        if (bannerRect.bottom > 0 && bannerRect.top < window.innerHeight) {
          const scrollPercent = (window.innerHeight - bannerRect.top) / (window.innerHeight + bannerRect.height);
          const offset = (scrollPercent - 0.5) * -30;
          image.style.setProperty('--parallax-offset', `${offset}%`);
        }
      };
      window.addEventListener('scroll', handleScroll, { passive: true });
    }
  }

  // Click Handler Logic
  const bannerLink = "\/products\/orange-mini-pack-of-10";
  if (bannerLink) {
    banner.addEventListener('click', (e) => {
      // If the user clicked a specific button or the video controls, let that happen.
      if (e.target.closest('.button') || e.target.closest('video[controls]')) {
        return;
      }
      // Otherwise, redirect to the banner link.
      window.location.href = bannerLink;
    });
  }
});
</script>

</section><div id="shopify-section-template--26131582583074__product_section_7pdHAY" class="shopify-section index-section Product-section"><style data-shopify>
#shopify-section-template--26131582583074__product_section_7pdHAY {
    position: relative;
    padding-top: 72px;
    padding-bottom: 72px;
    
      background-color: #ffffff;
    
    
      color: #151515;
    
  }
  .hideondesk{
    display:none;
  }
  @media only screen and (max-width: 767px) {
    #shopify-section-template--26131582583074__product_section_7pdHAY {
      padding-top: 20px;
      padding-bottom: 20px;
    }
    .hideondesk{
      display:flex;
    }
    .hide-on-mobile {
      display: none !important;
    } 
  }

/* ==========================================================================
   UNIFORM SYMMETRIC GRID LOCK (PREVENTS JAGGED ROWS)
   ========================================================================== */
#shopify-section-template--26131582583074__product_section_7pdHAY .swiper-slide {
  height: auto !important; 
  display: flex !important;
}

.product-card {
  display: flex !important;
  flex-direction: column !important;
  width: 100% !important;
  height: 100% !important; 
  justify-content: flex-start !important;
}

.product-card .productbottom-wrapper {
  display: flex !important;
  flex-direction: column !important;
  flex-grow: 1 !important; 
}

.product-card .atc-btn-wrapper {
  margin-top: auto !important; 
}

/* --- BRAND ALIGNED GRAPHIC TYPOGRAPHY OVERRIDES --- */
h2.section-title,
.product-card .title-product,
.card-product .card__heading,
.card-product__title {
  font-family: 'Helvetica Now Variable', -apple-system, BlinkMacSystemFont, sans-serif !important;
  text-transform: uppercase !important;
  font-weight: 800 !important;
  font-stretch: 75% !important;
  letter-spacing: 0px !important;
}

h2.section-title {
  font-size: 42px !important;
  line-height: 0.9 !important;
}

.product-card .title-product,
.card-product .card__heading,
.card-product__title {
  display: block !important;
  -webkit-line-clamp: unset !important;
  -webkit-box-orient: unset !important;
  overflow: visible !important;
  text-overflow: initial !important;
  white-space: normal !important;
  font-size: 16px !important;
  line-height: 1.0 !important;
  margin-bottom: 8px !important;
  min-height: 2.0em !important; 
  height: auto !important;
}

.product-card .review-rating {
  min-height: 20px; 
}

/* ==========================================================================
   STABLE MOBILE PHONE 2-COLUMN VIEW DESIGN PARAMETERS
   ========================================================================== */
@media only screen and (max-width: 767px) {
  .h2wrap .section-title {
    font-size: 32px !important;
    line-height: 0.9em !important;
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }

  #shopify-section-template--26131582583074__product_section_7pdHAY .swiper.product-swiper {
    overflow: visible !important;
  }

  #shopify-section-template--26131582583074__product_section_7pdHAY .product-swiper-wrapper {
    display: flex !important;
    flex-wrap: wrap !important;
    flex-direction: row !important;
    gap: 16px 12px !important; 
    width: 100% !important;
    transform: none !important; 
  }

  /* Forced specificity override to ensure display:none holds fast over display:flex */
  #shopify-section-template--26131582583074__product_section_7pdHAY .product-swiper-wrapper .product-slide.hide-on-mobile {
    display: none !important;
  }

  #shopify-section-template--26131582583074__product_section_7pdHAY .product-slide {
    width: calc(50% - 6px) !important; 
    flex-shrink: 0 !important;
    max-width: none !important;
    box-sizing: border-box !important;
    height: auto !important;
  }

  .product-card .title-product,
  .card-product .card__heading,
  .card-product__title {
    font-size: 14px !important;
    line-height: 1.0 !important;
    min-height: 2.0em !important; 
  }

  #shopify-section-template--26131582583074__product_section_7pdHAY .pro-swiper-pagination {
    display: none !important;
  }
}

/* ==========================================================================
   PROMO STRIP INTEGRATION & MOBILE GEOMETRY PROTECTION
   ========================================================================== */
@media screen and (max-width: 749px) {
  .promo-strip__text {
    font-family: 'Helvetica Now Variable', -apple-system, BlinkMacSystemFont, sans-serif !important;
    font-weight: 800 !important;
    font-stretch: 75% !important;
    text-transform: uppercase !important;
    font-size: 14px !important; 
    line-height: 1.1 !important;
    letter-spacing: 0px !important;
    word-break: break-word !important; 
    overflow: visible !important;
  }
  
  .section-template--26131582583074__product_section_7pdHAY-padding .product-form__submit[disabled],
  .section-template--26131582583074__product_section_7pdHAY-padding .product-form__submit[disabled]:hover {
    font-family: 'Helvetica Now Variable', -apple-system, BlinkMacSystemFont, sans-serif !important;
    font-weight: 800 !important;
    font-stretch: 75% !important;
    text-transform: uppercase !important;
    font-size: 12px !important; 
    line-height: 1.0 !important;
    letter-spacing: 0.5px !important;
    padding: 10px 4px !important;
  }
}

/* --- AUXILIARY OVERLAYS AND INTERACTIVES --- */
.confetti-overlay-container {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 10;
    display: flex;
    justify-content: center;
    align-items: center;
    pointer-events: none; 
    overflow: hidden; 
    background: linear-gradient(45deg, #0f2027, #203a43, #2c5364);
    background-size: 600% 600%;
    animation: gradientBackground 15s ease infinite;
    font-family: 'Roboto', sans-serif;
    opacity: 0;
    transition: opacity 0.5s ease-in-out;
  }
  .confetti-overlay-container.is-active { opacity: 1; }
  #clickable-template--26131582583074__product_section_7pdHAY {
    padding: 20px 40px; background: rgba(255, 255, 255, 0.1); color: #fff; font-size: 2em; border: 2px solid rgba(255, 255, 255, 0.3); border-radius: 12px; cursor: pointer; transition: background 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease; user-select: none; backdrop-filter: blur(5px); box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); pointer-events: auto; 
  }
  #clickable-template--26131582583074__product_section_7pdHAY:hover, #clickable-template--26131582583074__product_section_7pdHAY:focus { background: rgba(255, 255, 255, 0.2); transform: scale(1.05); box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3); outline: none; }
  #confetti-canvas-template--26131582583074__product_section_7pdHAY { position: absolute; top: 0; left: 0; pointer-events: none; width: 100%; height: 100%; }
  #resetBtn-template--26131582583074__product_section_7pdHAY { position: absolute; top: 20px; right: 20px; padding: 10px 20px; font-size: 1em; border: none; border-radius: 5px; cursor: pointer; background: rgba(255, 255, 255, 0.2); color: #fff; transition: background 0.3s ease; pointer-events: auto; }
  #resetBtn-template--26131582583074__product_section_7pdHAY:hover { background: rgba(255, 255, 255, 0.3); }
  .links { position: absolute; list-style: none; width: 180px; bottom: 40px; right: 20px; padding: 0; margin: 0; pointer-events: auto; }
  .links li { border-bottom: #222 1px solid; border-bottom: rgba(255,255,255,0.1) 1px solid; }
  .links li a { transition: opacity 0.2s ease-out; font-smoothing: subpixel-antialiased; font-family: 'Dosis', sans-serif; text-transform: uppercase; text-align: right; padding: 0.25em 0; letter-spacing: 2px; font-weight: 200; font-size: 12px; display: block; width: 100%; opacity: 0.4; color: #FFF; }
  .links li a:hover { opacity: 0.8; }
  .links li .who:before { opacity: 0.5; content: '@'; float: left; }
  .links li .blog:before { opacity: 0.5; content: '</>'; float: left; }

  @keyframes gradientBackground { 0% { background-position: 0% 50%; } 50% { background-position: 100% 50%; } 100% { background-position: 0% 50%; } }
  @keyframes rainbow { 0% { color: red; text-shadow: 0 0 10px red, 0 0 20px red; } 16% { color: orange; text-shadow: 0 0 10px orange, 0 0 20px orange; } 33% { color: yellow; text-shadow: 0 0 10px yellow, 0 0 20px yellow; } 50% { color: green; text-shadow: 0 0 10px green, 0 0 20px green; } 66% { color: blue; text-shadow: 0 0 10px blue, 0 0 20px blue; } 83% { color: indigo; text-shadow: 0 0 10px indigo, 0 0 20px indigo; } 100% { color: violet; text-shadow: 0 0 10px violet, 0 0 20px violet; } }
  @keyframes pulse { 0% { font-size: 2em; } 50% { font-size: 2.2em; } 100% { font-size: 2em; } }
  .glow { animation: rainbow 3s linear infinite, pulse 3s ease-in-out infinite; }
  .glow-box { border-radius: 12px; box-shadow: 0 0 30px rgba(255, 255, 255, 0.5); }

  @media (min-width: 768px) {
    #shopify-section-template--26131582583074__product_section_7pdHAY .product-card,
    #shopify-section-template--26131582583074__product_section_7pdHAY .card-wrapper,
    #shopify-section-template--26131582583074__product_section_7pdHAY .card__content {
      height: 100% !important; 
      display: flex !important;
      flex-direction: column !important;
      justify-content: flex-start !important;
    }

    #shopify-section-template--26131582583074__product_section_7pdHAY .product-card .media, 
    #shopify-section-template--26131582583074__product_section_7pdHAY .card__media {
      aspect-ratio: 1 / 1 !important; 
      padding-bottom: 0 !important;   
      height: auto !important;
      overflow: hidden;
    }

    #shopify-section-template--26131582583074__product_section_7pdHAY .card-information,
    #shopify-section-template--26131582583074__product_section_7pdHAY .card__content {
      padding-top: 10px !important;
      padding-bottom: 0px !important;
      display: flex !important;
      flex-direction: column !important;
      flex-grow: 1 !important;
    }

    #shopify-section-template--26131582583074__product_section_7pdHAY .product-card .review-rating {
      margin-bottom: 8px !important;
      transform: scale(0.9); 
      transform-origin: left;
    }

    #shopify-section-template--26131582583074__product_section_7pdHAY .product-card .atc-btn-wrapper {
      margin-top: auto !important; 
    }

    #shopify-section-template--26131582583074__product_section_7pdHAY .swiper-slide {
      will-change: transform; 
      contain: content; 
    }
  }
</style>

<div id="product-slider-section-template--26131582583074__product_section_7pdHAY" class="relative shop-banner">
    <img class="backgrount-image" src="//superyou.in/cdn/shop/files/rb_5729_1_1_1.png?v=1737358081" width="" height="" alt="Banner" loading="lazy">
    <div class="container">
      
        <div class="title-wrappers">
          <div class="h2wrap">
            <h2 gsap-text-anim class="section-title"></h2>    
          
            <h2 gsap-text-anim class="section-title">Our Range of Products</h2>
          
          </div>
            
            
            <div class="upper-jinx-wrapper">
                
                <img src="//superyou.in/cdn/shop/files/Group_213.svg?v=1739943384" width="" height="" alt="Banner" loading="lazy" >
                
                <div class="tag-wrapper">
                    Our range of products
                </div>
            </div>
            
            <div fade-in class="arrow-wrapper">
                <div class="arrow-hver-wrapper">
                    <div class="arrow prev2">
                        <svg width="11" height="17" viewBox="0 0 11 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.08503 6.8013L7.37852 0.507812C8.0556 -0.169271 9.14909 -0.169271 9.82617 0.507812C10.5033 1.1849 10.5033 2.27839 9.82617 2.95547L4.75482 8.02344L9.82617 13.0914C10.5033 13.7685 10.5033 14.862 9.82617 15.5391C9.14909 16.2161 8.0556 16.2161 7.37852 15.5391L1.08503 9.24557C0.411328 8.57188 0.411328 7.475 1.08503 6.8013Z" fill="currentcolor" /></svg>
                    </div>
                    <div class="div-hover"></div>
                </div>
                <div class="arrow-hver-wrapper">
                    <div class="arrow next2">
                        <svg width="11" height="17" viewBox="0 0 11 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.91497 6.8013L3.62148 0.507812C2.9444 -0.169271 1.85091 -0.169271 1.17383 0.507812C0.496745 1.1849 0.496745 2.27839 1.17383 2.95547L6.24518 8.02344L1.17383 13.0914C0.496745 13.7685 0.496745 14.862 1.17383 15.5391C1.85091 16.2161 2.9444 16.2161 3.62148 15.5391L9.91497 9.24557C10.5887 8.57188 10.5887 7.475 9.91497 6.8013Z" fill="currentcolor" /></svg>
                    </div>
                    <div class="div-hover"></div>
                </div>
            </div>
        </div>
      
      
        <div class="swiper product-swiper" data-section-id="template--26131582583074__product_section_7pdHAY">
            <div class="swiper-wrapper product-swiper-wrapper">
               
               

                    
                    <div class="swiper-slide product-slide ">
                       
<link href="//superyou.in/cdn/shop/t/51/assets/component-rating.css?v=61607815681206498061766474564" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/component-volume-pricing.css?v=81475673220178626351766474567" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/component-price.css?v=101019534186928093711766474562" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/quick-order-list.css?v=83761384229492353061766474617" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/quantity-popover.css?v=129068967981937647381766474615" rel="stylesheet" type="text/css" media="all" />
<link href="//superyou.in/cdn/shop/t/51/assets/quick-add.css?v=66647833350618835731766474616" rel="stylesheet" type="text/css" media="all" />
  <script src="//superyou.in/cdn/shop/t/51/assets/product-form.js?v=105601561156512401221766474613" defer="defer"></script><style>
   @media only screen and (max-width: 767px) {
     .rating-star:before { font-size: 14px !important; }
     .rating-wrapper { align-items: flex-start; }
     .rating-count { letter-spacing: normal; }
     p.rating-count.caption { line-height: 130%; }
     .product-card--out-of-stock .quick-add__submit { font-size: 1rem !important; }
     .product-card__promo-tag { font-size: 6px; }
   }
  .product-card--out-of-stock .product-top-wraper { position: relative; }
  .product-card--out-of-stock .product-top-wraper::before {
    content: ''; display: block; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(163, 160, 160, 0.6); z-index: 1;
  }
  .product-card--out-of-stock .image-wraper .img { opacity: 0.9; }
  .product-card--out-of-stock .title-product { color: #999; }
</style><div class="product-card " id="product-card-el--10121098199330"><span class="product-card__badge"><span>JUST LAUNCHED</span></span>

    <a href="/products/orange-mini-pack-of-10" class="product-top-wraper">
      <div class="pack-tag-line"></div>
      <div class="image-wraper">
        <img src="//superyou.in/cdn/shop/files/FOP_Box_P20.png?v=1779281110" alt="5g Orange Mini Protein Wafer - Pack of 10 X 2" class="img" loading="lazy">
      </div>
    </a>

    <div class="productbottom-wrapper">
      <div class="review-rating">
          <div class="rating-wrapper">
            <div class="rating" role="img" aria-label="Rating details">
              <span aria-hidden="true" class="rating-star" style="--percent: 100.0%;"></span>
            </div>
            <p class="rating-text caption"><span aria-hidden="true">5.0 / 5.0</span></p>
            <p class="rating-count caption"><span aria-hidden="true">| 1 Reviews</span></p>
          </div></div><a href="/products/orange-mini-pack-of-10" class="title-product" id="product-title--10121098199330">5g Orange Mini Protein Wafer - Pack of 10 X 2</a>

      <a href="/products/orange-mini-pack-of-10" class="title-tag-line">
        A Classic Treat, Packed with Protein Power
      </a><div class="price-product" id="price-product--10121098199330">
<span class="compate-price" id="compare-price--10121098199330">₹600</span>
          <span class="discounted-price" id="discounted-price--10121098199330">₹549/-</span>
          <span class="discount-percentage" id="discount-percentage--10121098199330">-9% OFF</span>
        
      </div><div class="product-card__promo-tag">Free Shipping + 3% Prepaid Bonus</div><div class="atc-btn-wrapper">
        
        <div class="quick-add no-js-hidden"><product-form data-section-id="template--26131582583074__product_section_7pdHAY"><form method="post" action="/cart/add" id="quick-add-10121098199330" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="51652705386786" class="product-variant-id">
                  <input type="hidden" name="quantity" value="1" id="product-quantity--10121098199330">
                  <div class="atc-hover">
                    <div class="div-hover"></div>
                    <button id="quick-add-10121098199330-submit" type="submit" name="add" class="quick-add__submit button button--full-width button--secondary">
                      <span>Add to cart</span>

<div class="loading__spinner hidden">
  <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66"><circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path"/></svg>

</div>
</button>
                  </div><input type="hidden" name="product-id" value="10121098199330" /><input type="hidden" name="section-id" value="template--26131582583074__product_section_7pdHAY" /></form></product-form></div>
      </div> </div> </div><script>
  if (typeof initPackSelectors === 'undefined') {
    function initPackSelectors() {
      const wrappers = document.querySelectorAll('.pack-selector-wrapper');
      wrappers.forEach(wrapper => {
        const cardId = wrapper.dataset.cardId;
        const buttons = wrapper.querySelectorAll('.pack-selector-btn');
        buttons.forEach(button => {
          if (button.dataset.listenerAttached) return;
          button.dataset.listenerAttached = true;
          button.addEventListener('click', () => {
            const data = button.dataset;
            buttons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            
            const titleEl = document.querySelector(`#product-title-${cardId}`);
            if (titleEl) titleEl.textContent = data.title;
            
            const mrpEl = document.querySelector(`#old-mrp-${cardId}`);
            if (mrpEl) mrpEl.textContent = `Old MRP ${data.oldMrp}`;
            
            const qtyEl = document.querySelector(`#product-quantity-${cardId}`);
            if (qtyEl) qtyEl.value = data.quantity;
            
            updatePrice(cardId, data.price, data.comparePrice);
          });
        });
      });
    }

    function updatePrice(cardId, price, comparePrice) {
      const priceContainer = document.querySelector(`#price-product-${cardId}`);
      if (!priceContainer) return;
      price = parseInt(price, 10);
      comparePrice = parseInt(comparePrice, 10);
      let html = '';
      if (comparePrice > price) {
        const discountPercentage = Math.round(((comparePrice - price) * 100) / comparePrice);
        html = `<span class="compate-price">${formatMoney(comparePrice)}</span><span class="discounted-price">${formatMoney(price)}/-</span><span class="discount-percentage">-${discountPercentage}% OFF</span>`;
      } else {
        html = `<span class="regular-price">${formatMoney(price)}/-</span>`;
      }
      priceContainer.innerHTML = html;
    }

    function formatMoney(cents) {
      let p = (cents / 100).toFixed(2);
      if (p.endsWith('.00')) p = p.slice(0, -3);
      return `₹${new Intl.NumberFormat('en-IN').format(p)}`;
    }

    document.addEventListener('DOMContentLoaded', initPackSelectors);
    document.addEventListener('shopify:section:load', initPackSelectors);
  }
</script>
                    </div>
                  


                    
                    <div class="swiper-slide product-slide ">
                       
<link href="//superyou.in/cdn/shop/t/51/assets/component-rating.css?v=61607815681206498061766474564" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/component-volume-pricing.css?v=81475673220178626351766474567" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/component-price.css?v=101019534186928093711766474562" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/quick-order-list.css?v=83761384229492353061766474617" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/quantity-popover.css?v=129068967981937647381766474615" rel="stylesheet" type="text/css" media="all" />
<link href="//superyou.in/cdn/shop/t/51/assets/quick-add.css?v=66647833350618835731766474616" rel="stylesheet" type="text/css" media="all" />
  <script src="//superyou.in/cdn/shop/t/51/assets/product-form.js?v=105601561156512401221766474613" defer="defer"></script><style>
   @media only screen and (max-width: 767px) {
     .rating-star:before { font-size: 14px !important; }
     .rating-wrapper { align-items: flex-start; }
     .rating-count { letter-spacing: normal; }
     p.rating-count.caption { line-height: 130%; }
     .product-card--out-of-stock .quick-add__submit { font-size: 1rem !important; }
     .product-card__promo-tag { font-size: 6px; }
   }
  .product-card--out-of-stock .product-top-wraper { position: relative; }
  .product-card--out-of-stock .product-top-wraper::before {
    content: ''; display: block; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(163, 160, 160, 0.6); z-index: 1;
  }
  .product-card--out-of-stock .image-wraper .img { opacity: 0.9; }
  .product-card--out-of-stock .title-product { color: #999; }
</style><div class="product-card " id="product-card-el--9844890370338"><span class="product-card__badge"><span>UPGRADED PACK</span></span>
    

    <a href="/products/unflavoured-1-kg-fermented-yeast-protein" class="product-top-wraper">
      <div class="pack-tag-line"></div>
      <div class="image-wraper">
        <img src="//superyou.in/cdn/shop/files/1kg_Unflavoured_JarFOPcopy.jpg?v=1779782286" alt="Unflavoured Fermented Yeast Protein - 1Kg Jar" class="img" loading="lazy">
      </div>
    </a>

    <div class="productbottom-wrapper">
      <div class="review-rating">
          <div class="rating-wrapper">
            <div class="rating" role="img" aria-label="Rating details">
              <span aria-hidden="true" class="rating-star" style="--percent: 86.6%;"></span>
            </div>
            <p class="rating-text caption"><span aria-hidden="true">4.33 / 5.0</span></p>
            <p class="rating-count caption"><span aria-hidden="true">| 66 Reviews</span></p>
          </div></div><a href="/products/unflavoured-1-kg-fermented-yeast-protein" class="title-product" id="product-title--9844890370338">Unflavoured Fermented Yeast Protein - 1Kg Jar</a>

      <a href="/products/unflavoured-1-kg-fermented-yeast-protein" class="title-tag-line">
        A Classic Treat, Packed with Protein Power
      </a><div class="price-product" id="price-product--9844890370338">
<span class="compate-price" id="compare-price--9844890370338">₹2,799</span>
          <span class="discounted-price" id="discounted-price--9844890370338">₹1,999/-</span>
          <span class="discount-percentage" id="discount-percentage--9844890370338">-29% OFF</span>
        
      </div><div class="product-card__promo-tag">Free Shipping + 3% Prepaid Bonus</div><div class="atc-btn-wrapper">
        
        <div class="quick-add no-js-hidden"><product-form data-section-id="template--26131582583074__product_section_7pdHAY"><form method="post" action="/cart/add" id="quick-add-9844890370338" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="50313999843618" class="product-variant-id">
                  <input type="hidden" name="quantity" value="1" id="product-quantity--9844890370338">
                  <div class="atc-hover">
                    <div class="div-hover"></div>
                    <button id="quick-add-9844890370338-submit" type="submit" name="add" class="quick-add__submit button button--full-width button--secondary">
                      <span>Add to cart</span>

<div class="loading__spinner hidden">
  <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66"><circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path"/></svg>

</div>
</button>
                  </div><input type="hidden" name="product-id" value="9844890370338" /><input type="hidden" name="section-id" value="template--26131582583074__product_section_7pdHAY" /></form></product-form></div>
      </div> </div> </div><script>
  if (typeof initPackSelectors === 'undefined') {
    function initPackSelectors() {
      const wrappers = document.querySelectorAll('.pack-selector-wrapper');
      wrappers.forEach(wrapper => {
        const cardId = wrapper.dataset.cardId;
        const buttons = wrapper.querySelectorAll('.pack-selector-btn');
        buttons.forEach(button => {
          if (button.dataset.listenerAttached) return;
          button.dataset.listenerAttached = true;
          button.addEventListener('click', () => {
            const data = button.dataset;
            buttons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            
            const titleEl = document.querySelector(`#product-title-${cardId}`);
            if (titleEl) titleEl.textContent = data.title;
            
            const mrpEl = document.querySelector(`#old-mrp-${cardId}`);
            if (mrpEl) mrpEl.textContent = `Old MRP ${data.oldMrp}`;
            
            const qtyEl = document.querySelector(`#product-quantity-${cardId}`);
            if (qtyEl) qtyEl.value = data.quantity;
            
            updatePrice(cardId, data.price, data.comparePrice);
          });
        });
      });
    }

    function updatePrice(cardId, price, comparePrice) {
      const priceContainer = document.querySelector(`#price-product-${cardId}`);
      if (!priceContainer) return;
      price = parseInt(price, 10);
      comparePrice = parseInt(comparePrice, 10);
      let html = '';
      if (comparePrice > price) {
        const discountPercentage = Math.round(((comparePrice - price) * 100) / comparePrice);
        html = `<span class="compate-price">${formatMoney(comparePrice)}</span><span class="discounted-price">${formatMoney(price)}/-</span><span class="discount-percentage">-${discountPercentage}% OFF</span>`;
      } else {
        html = `<span class="regular-price">${formatMoney(price)}/-</span>`;
      }
      priceContainer.innerHTML = html;
    }

    function formatMoney(cents) {
      let p = (cents / 100).toFixed(2);
      if (p.endsWith('.00')) p = p.slice(0, -3);
      return `₹${new Intl.NumberFormat('en-IN').format(p)}`;
    }

    document.addEventListener('DOMContentLoaded', initPackSelectors);
    document.addEventListener('shopify:section:load', initPackSelectors);
  }
</script>
                    </div>
                  


                    
                    <div class="swiper-slide product-slide ">
                       
<link href="//superyou.in/cdn/shop/t/51/assets/component-rating.css?v=61607815681206498061766474564" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/component-volume-pricing.css?v=81475673220178626351766474567" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/component-price.css?v=101019534186928093711766474562" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/quick-order-list.css?v=83761384229492353061766474617" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/quantity-popover.css?v=129068967981937647381766474615" rel="stylesheet" type="text/css" media="all" />
<link href="//superyou.in/cdn/shop/t/51/assets/quick-add.css?v=66647833350618835731766474616" rel="stylesheet" type="text/css" media="all" />
  <script src="//superyou.in/cdn/shop/t/51/assets/product-form.js?v=105601561156512401221766474613" defer="defer"></script><style>
   @media only screen and (max-width: 767px) {
     .rating-star:before { font-size: 14px !important; }
     .rating-wrapper { align-items: flex-start; }
     .rating-count { letter-spacing: normal; }
     p.rating-count.caption { line-height: 130%; }
     .product-card--out-of-stock .quick-add__submit { font-size: 1rem !important; }
     .product-card__promo-tag { font-size: 6px; }
   }
  .product-card--out-of-stock .product-top-wraper { position: relative; }
  .product-card--out-of-stock .product-top-wraper::before {
    content: ''; display: block; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(163, 160, 160, 0.6); z-index: 1;
  }
  .product-card--out-of-stock .image-wraper .img { opacity: 0.9; }
  .product-card--out-of-stock .title-product { color: #999; }
</style><div class="product-card " id="product-card-el--10049632895266"><span class="product-card__badge"><span>JUST LAUNCHED</span></span>

    <a href="/products/vanilla-fermented-yeast-500g" class="product-top-wraper">
      <div class="pack-tag-line"></div>
      <div class="image-wraper">
        <img src="//superyou.in/cdn/shop/files/Pro_Vanilla_FOPTrustified_2360c63a-ea91-4e82-9cb4-8c4186059c71.jpg?v=1773399867" alt="Vanilla Fermented Yeast Protein - 500g" class="img" loading="lazy">
      </div>
    </a>

    <div class="productbottom-wrapper">
      <div class="review-rating">
          <div class="rating-wrapper">
            <div class="rating" role="img" aria-label="Rating details">
              <span aria-hidden="true" class="rating-star" style="--percent: 90.0%;"></span>
            </div>
            <p class="rating-text caption"><span aria-hidden="true">4.5 / 5.0</span></p>
            <p class="rating-count caption"><span aria-hidden="true">| 14 Reviews</span></p>
          </div></div><a href="/products/vanilla-fermented-yeast-500g" class="title-product" id="product-title--10049632895266">Vanilla Fermented Yeast Protein - 500g</a>

      <a href="/products/vanilla-fermented-yeast-500g" class="title-tag-line">
        A Classic Treat, Packed with Protein Power
      </a><div class="price-product" id="price-product--10049632895266">
<span class="compate-price" id="compare-price--10049632895266">₹1,499</span>
          <span class="discounted-price" id="discounted-price--10049632895266">₹1,249/-</span>
          <span class="discount-percentage" id="discount-percentage--10049632895266">-17% OFF</span>
        
      </div><div class="product-card__promo-tag">Free Shipping + 3% Prepaid Bonus</div><div class="atc-btn-wrapper">
        
        <div class="quick-add no-js-hidden"><product-form data-section-id="template--26131582583074__product_section_7pdHAY"><form method="post" action="/cart/add" id="quick-add-10049632895266" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="51417231917346" class="product-variant-id">
                  <input type="hidden" name="quantity" value="1" id="product-quantity--10049632895266">
                  <div class="atc-hover">
                    <div class="div-hover"></div>
                    <button id="quick-add-10049632895266-submit" type="submit" name="add" class="quick-add__submit button button--full-width button--secondary">
                      <span>Add to cart</span>

<div class="loading__spinner hidden">
  <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66"><circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path"/></svg>

</div>
</button>
                  </div><input type="hidden" name="product-id" value="10049632895266" /><input type="hidden" name="section-id" value="template--26131582583074__product_section_7pdHAY" /></form></product-form></div>
      </div> </div> </div><script>
  if (typeof initPackSelectors === 'undefined') {
    function initPackSelectors() {
      const wrappers = document.querySelectorAll('.pack-selector-wrapper');
      wrappers.forEach(wrapper => {
        const cardId = wrapper.dataset.cardId;
        const buttons = wrapper.querySelectorAll('.pack-selector-btn');
        buttons.forEach(button => {
          if (button.dataset.listenerAttached) return;
          button.dataset.listenerAttached = true;
          button.addEventListener('click', () => {
            const data = button.dataset;
            buttons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            
            const titleEl = document.querySelector(`#product-title-${cardId}`);
            if (titleEl) titleEl.textContent = data.title;
            
            const mrpEl = document.querySelector(`#old-mrp-${cardId}`);
            if (mrpEl) mrpEl.textContent = `Old MRP ${data.oldMrp}`;
            
            const qtyEl = document.querySelector(`#product-quantity-${cardId}`);
            if (qtyEl) qtyEl.value = data.quantity;
            
            updatePrice(cardId, data.price, data.comparePrice);
          });
        });
      });
    }

    function updatePrice(cardId, price, comparePrice) {
      const priceContainer = document.querySelector(`#price-product-${cardId}`);
      if (!priceContainer) return;
      price = parseInt(price, 10);
      comparePrice = parseInt(comparePrice, 10);
      let html = '';
      if (comparePrice > price) {
        const discountPercentage = Math.round(((comparePrice - price) * 100) / comparePrice);
        html = `<span class="compate-price">${formatMoney(comparePrice)}</span><span class="discounted-price">${formatMoney(price)}/-</span><span class="discount-percentage">-${discountPercentage}% OFF</span>`;
      } else {
        html = `<span class="regular-price">${formatMoney(price)}/-</span>`;
      }
      priceContainer.innerHTML = html;
    }

    function formatMoney(cents) {
      let p = (cents / 100).toFixed(2);
      if (p.endsWith('.00')) p = p.slice(0, -3);
      return `₹${new Intl.NumberFormat('en-IN').format(p)}`;
    }

    document.addEventListener('DOMContentLoaded', initPackSelectors);
    document.addEventListener('shopify:section:load', initPackSelectors);
  }
</script>
                    </div>
                  


                    
                    <div class="swiper-slide product-slide ">
                       
<link href="//superyou.in/cdn/shop/t/51/assets/component-rating.css?v=61607815681206498061766474564" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/component-volume-pricing.css?v=81475673220178626351766474567" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/component-price.css?v=101019534186928093711766474562" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/quick-order-list.css?v=83761384229492353061766474617" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/quantity-popover.css?v=129068967981937647381766474615" rel="stylesheet" type="text/css" media="all" />
<link href="//superyou.in/cdn/shop/t/51/assets/quick-add.css?v=66647833350618835731766474616" rel="stylesheet" type="text/css" media="all" />
  <script src="//superyou.in/cdn/shop/t/51/assets/product-form.js?v=105601561156512401221766474613" defer="defer"></script><style>
   @media only screen and (max-width: 767px) {
     .rating-star:before { font-size: 14px !important; }
     .rating-wrapper { align-items: flex-start; }
     .rating-count { letter-spacing: normal; }
     p.rating-count.caption { line-height: 130%; }
     .product-card--out-of-stock .quick-add__submit { font-size: 1rem !important; }
     .product-card__promo-tag { font-size: 6px; }
   }
  .product-card--out-of-stock .product-top-wraper { position: relative; }
  .product-card--out-of-stock .product-top-wraper::before {
    content: ''; display: block; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(163, 160, 160, 0.6); z-index: 1;
  }
  .product-card--out-of-stock .image-wraper .img { opacity: 0.9; }
  .product-card--out-of-stock .title-product { color: #999; }
</style><div class="product-card " id="product-card-el--9998885126434">

    <a href="/products/20g-mega-protein-wafer" class="product-top-wraper">
      <div class="pack-tag-line"></div>
      <div class="image-wraper">
        <img src="//superyou.in/cdn/shop/files/3_20gProtein_Monocarton_FOP_EComD2C.jpg?v=1768802626" alt="20g Mega Protein Wafer - Pack of 6" class="img" loading="lazy">
      </div>
    </a>

    <div class="productbottom-wrapper">
      <div class="review-rating">
          <div class="rating-wrapper">
            <div class="rating" role="img" aria-label="Rating details">
              <span aria-hidden="true" class="rating-star" style="--percent: 97.6%;"></span>
            </div>
            <p class="rating-text caption"><span aria-hidden="true">4.88 / 5.0</span></p>
            <p class="rating-count caption"><span aria-hidden="true">| 34 Reviews</span></p>
          </div></div><a href="/products/20g-mega-protein-wafer" class="title-product" id="product-title--9998885126434">20g Mega Protein Wafer - Pack of 6</a>

      <a href="/products/20g-mega-protein-wafer" class="title-tag-line">
        A Classic Treat, Packed with Protein Power
      </a><div class="price-product" id="price-product--9998885126434">
<span class="compate-price" id="compare-price--9998885126434">₹690</span>
          <span class="discounted-price" id="discounted-price--9998885126434">₹625/-</span>
          <span class="discount-percentage" id="discount-percentage--9998885126434">-9% OFF</span>
        
      </div><div class="atc-btn-wrapper">
        
        <div class="quick-add no-js-hidden"><product-form data-section-id="template--26131582583074__product_section_7pdHAY"><form method="post" action="/cart/add" id="quick-add-9998885126434" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="50816699269410" class="product-variant-id">
                  <input type="hidden" name="quantity" value="1" id="product-quantity--9998885126434">
                  <div class="atc-hover">
                    <div class="div-hover"></div>
                    <button id="quick-add-9998885126434-submit" type="submit" name="add" class="quick-add__submit button button--full-width button--secondary">
                      <span>Add to cart</span>

<div class="loading__spinner hidden">
  <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66"><circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path"/></svg>

</div>
</button>
                  </div><input type="hidden" name="product-id" value="9998885126434" /><input type="hidden" name="section-id" value="template--26131582583074__product_section_7pdHAY" /></form></product-form></div>
      </div> </div> </div><script>
  if (typeof initPackSelectors === 'undefined') {
    function initPackSelectors() {
      const wrappers = document.querySelectorAll('.pack-selector-wrapper');
      wrappers.forEach(wrapper => {
        const cardId = wrapper.dataset.cardId;
        const buttons = wrapper.querySelectorAll('.pack-selector-btn');
        buttons.forEach(button => {
          if (button.dataset.listenerAttached) return;
          button.dataset.listenerAttached = true;
          button.addEventListener('click', () => {
            const data = button.dataset;
            buttons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            
            const titleEl = document.querySelector(`#product-title-${cardId}`);
            if (titleEl) titleEl.textContent = data.title;
            
            const mrpEl = document.querySelector(`#old-mrp-${cardId}`);
            if (mrpEl) mrpEl.textContent = `Old MRP ${data.oldMrp}`;
            
            const qtyEl = document.querySelector(`#product-quantity-${cardId}`);
            if (qtyEl) qtyEl.value = data.quantity;
            
            updatePrice(cardId, data.price, data.comparePrice);
          });
        });
      });
    }

    function updatePrice(cardId, price, comparePrice) {
      const priceContainer = document.querySelector(`#price-product-${cardId}`);
      if (!priceContainer) return;
      price = parseInt(price, 10);
      comparePrice = parseInt(comparePrice, 10);
      let html = '';
      if (comparePrice > price) {
        const discountPercentage = Math.round(((comparePrice - price) * 100) / comparePrice);
        html = `<span class="compate-price">${formatMoney(comparePrice)}</span><span class="discounted-price">${formatMoney(price)}/-</span><span class="discount-percentage">-${discountPercentage}% OFF</span>`;
      } else {
        html = `<span class="regular-price">${formatMoney(price)}/-</span>`;
      }
      priceContainer.innerHTML = html;
    }

    function formatMoney(cents) {
      let p = (cents / 100).toFixed(2);
      if (p.endsWith('.00')) p = p.slice(0, -3);
      return `₹${new Intl.NumberFormat('en-IN').format(p)}`;
    }

    document.addEventListener('DOMContentLoaded', initPackSelectors);
    document.addEventListener('shopify:section:load', initPackSelectors);
  }
</script>
                    </div>
                  


                    
                    <div class="swiper-slide product-slide  hide-on-mobile">
                       
<link href="//superyou.in/cdn/shop/t/51/assets/component-rating.css?v=61607815681206498061766474564" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/component-volume-pricing.css?v=81475673220178626351766474567" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/component-price.css?v=101019534186928093711766474562" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/quick-order-list.css?v=83761384229492353061766474617" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/quantity-popover.css?v=129068967981937647381766474615" rel="stylesheet" type="text/css" media="all" />
<link href="//superyou.in/cdn/shop/t/51/assets/quick-add.css?v=66647833350618835731766474616" rel="stylesheet" type="text/css" media="all" />
  <script src="//superyou.in/cdn/shop/t/51/assets/product-form.js?v=105601561156512401221766474613" defer="defer"></script><style>
   @media only screen and (max-width: 767px) {
     .rating-star:before { font-size: 14px !important; }
     .rating-wrapper { align-items: flex-start; }
     .rating-count { letter-spacing: normal; }
     p.rating-count.caption { line-height: 130%; }
     .product-card--out-of-stock .quick-add__submit { font-size: 1rem !important; }
     .product-card__promo-tag { font-size: 6px; }
   }
  .product-card--out-of-stock .product-top-wraper { position: relative; }
  .product-card--out-of-stock .product-top-wraper::before {
    content: ''; display: block; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(163, 160, 160, 0.6); z-index: 1;
  }
  .product-card--out-of-stock .image-wraper .img { opacity: 0.9; }
  .product-card--out-of-stock .title-product { color: #999; }
</style><div class="product-card " id="product-card-el--10015944311074"><span class="product-card__badge"><span>JUST LAUNCHED</span></span>

    <a href="/products/chocolate-fermented-yeast-protein-500g" class="product-top-wraper">
      <div class="pack-tag-line"></div>
      <div class="image-wraper">
        <img src="//superyou.in/cdn/shop/files/ProChocolate_FOPcopy2_3x_1_67038627-6488-4170-a205-05f7e5e011f8.jpg?v=1770291649" alt="Chocolate Fermented Yeast Protein - 500g" class="img" loading="lazy">
      </div>
    </a>

    <div class="productbottom-wrapper">
      <div class="review-rating">
          <div class="rating-wrapper">
            <div class="rating" role="img" aria-label="Rating details">
              <span aria-hidden="true" class="rating-star" style="--percent: 92.0%;"></span>
            </div>
            <p class="rating-text caption"><span aria-hidden="true">4.6 / 5.0</span></p>
            <p class="rating-count caption"><span aria-hidden="true">| 5 Reviews</span></p>
          </div></div><a href="/products/chocolate-fermented-yeast-protein-500g" class="title-product" id="product-title--10015944311074">Chocolate Fermented Yeast Protein - 500g</a>

      <a href="/products/chocolate-fermented-yeast-protein-500g" class="title-tag-line">
        A Classic Treat, Packed with Protein Power
      </a><div class="price-product" id="price-product--10015944311074">
<span class="compate-price" id="compare-price--10015944311074">₹1,499</span>
          <span class="discounted-price" id="discounted-price--10015944311074">₹1,249/-</span>
          <span class="discount-percentage" id="discount-percentage--10015944311074">-17% OFF</span>
        
      </div><div class="product-card__promo-tag">Free Shipping + 3% Prepaid Bonus</div><div class="atc-btn-wrapper">
        
        <div class="quick-add no-js-hidden"><product-form data-section-id="template--26131582583074__product_section_7pdHAY"><form method="post" action="/cart/add" id="quick-add-10015944311074" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="51242437607714" class="product-variant-id">
                  <input type="hidden" name="quantity" value="1" id="product-quantity--10015944311074">
                  <div class="atc-hover">
                    <div class="div-hover"></div>
                    <button id="quick-add-10015944311074-submit" type="submit" name="add" class="quick-add__submit button button--full-width button--secondary">
                      <span>Add to cart</span>

<div class="loading__spinner hidden">
  <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66"><circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path"/></svg>

</div>
</button>
                  </div><input type="hidden" name="product-id" value="10015944311074" /><input type="hidden" name="section-id" value="template--26131582583074__product_section_7pdHAY" /></form></product-form></div>
      </div> </div> </div><script>
  if (typeof initPackSelectors === 'undefined') {
    function initPackSelectors() {
      const wrappers = document.querySelectorAll('.pack-selector-wrapper');
      wrappers.forEach(wrapper => {
        const cardId = wrapper.dataset.cardId;
        const buttons = wrapper.querySelectorAll('.pack-selector-btn');
        buttons.forEach(button => {
          if (button.dataset.listenerAttached) return;
          button.dataset.listenerAttached = true;
          button.addEventListener('click', () => {
            const data = button.dataset;
            buttons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            
            const titleEl = document.querySelector(`#product-title-${cardId}`);
            if (titleEl) titleEl.textContent = data.title;
            
            const mrpEl = document.querySelector(`#old-mrp-${cardId}`);
            if (mrpEl) mrpEl.textContent = `Old MRP ${data.oldMrp}`;
            
            const qtyEl = document.querySelector(`#product-quantity-${cardId}`);
            if (qtyEl) qtyEl.value = data.quantity;
            
            updatePrice(cardId, data.price, data.comparePrice);
          });
        });
      });
    }

    function updatePrice(cardId, price, comparePrice) {
      const priceContainer = document.querySelector(`#price-product-${cardId}`);
      if (!priceContainer) return;
      price = parseInt(price, 10);
      comparePrice = parseInt(comparePrice, 10);
      let html = '';
      if (comparePrice > price) {
        const discountPercentage = Math.round(((comparePrice - price) * 100) / comparePrice);
        html = `<span class="compate-price">${formatMoney(comparePrice)}</span><span class="discounted-price">${formatMoney(price)}/-</span><span class="discount-percentage">-${discountPercentage}% OFF</span>`;
      } else {
        html = `<span class="regular-price">${formatMoney(price)}/-</span>`;
      }
      priceContainer.innerHTML = html;
    }

    function formatMoney(cents) {
      let p = (cents / 100).toFixed(2);
      if (p.endsWith('.00')) p = p.slice(0, -3);
      return `₹${new Intl.NumberFormat('en-IN').format(p)}`;
    }

    document.addEventListener('DOMContentLoaded', initPackSelectors);
    document.addEventListener('shopify:section:load', initPackSelectors);
  }
</script>
                    </div>
                  


                    
                    <div class="swiper-slide product-slide  hide-on-mobile">
                       
<link href="//superyou.in/cdn/shop/t/51/assets/component-rating.css?v=61607815681206498061766474564" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/component-volume-pricing.css?v=81475673220178626351766474567" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/component-price.css?v=101019534186928093711766474562" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/quick-order-list.css?v=83761384229492353061766474617" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/quantity-popover.css?v=129068967981937647381766474615" rel="stylesheet" type="text/css" media="all" />
<link href="//superyou.in/cdn/shop/t/51/assets/quick-add.css?v=66647833350618835731766474616" rel="stylesheet" type="text/css" media="all" />
  <script src="//superyou.in/cdn/shop/t/51/assets/product-form.js?v=105601561156512401221766474613" defer="defer"></script><style>
   @media only screen and (max-width: 767px) {
     .rating-star:before { font-size: 14px !important; }
     .rating-wrapper { align-items: flex-start; }
     .rating-count { letter-spacing: normal; }
     p.rating-count.caption { line-height: 130%; }
     .product-card--out-of-stock .quick-add__submit { font-size: 1rem !important; }
     .product-card__promo-tag { font-size: 6px; }
   }
  .product-card--out-of-stock .product-top-wraper { position: relative; }
  .product-card--out-of-stock .product-top-wraper::before {
    content: ''; display: block; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(163, 160, 160, 0.6); z-index: 1;
  }
  .product-card--out-of-stock .image-wraper .img { opacity: 0.9; }
  .product-card--out-of-stock .title-product { color: #999; }
</style><div class="product-card " id="product-card-el--9487398076706">

    <a href="/products/chocolate-protein-wafer" class="product-top-wraper">
      <div class="pack-tag-line">PACK OF 10</div>
      <div class="image-wraper">
        <img src="//superyou.in/cdn/shop/files/WebsiteProductcard__1.jpg?v=1742214015" alt="Chocolate Protein Wafer - Pack of 10" class="img" loading="lazy">
      </div>
    </a>

    <div class="productbottom-wrapper">
      <div class="review-rating">
          <div class="rating-wrapper">
            <div class="rating" role="img" aria-label="Rating details">
              <span aria-hidden="true" class="rating-star" style="--percent: 94.2%;"></span>
            </div>
            <p class="rating-text caption"><span aria-hidden="true">4.71 / 5.0</span></p>
            <p class="rating-count caption"><span aria-hidden="true">| 106 Reviews</span></p>
          </div></div><a href="/products/chocolate-protein-wafer" class="title-product" id="product-title--9487398076706">Chocolate Protein Wafer - Pack of 10</a>

      <a href="/products/chocolate-protein-wafer" class="title-tag-line">
        A Classic Treat, Packed with Protein Power
      </a><div class="price-product" id="price-product--9487398076706">
<span class="compate-price" id="compare-price--9487398076706">₹550</span>
          <span class="discounted-price" id="discounted-price--9487398076706">₹449/-</span>
          <span class="discount-percentage" id="discount-percentage--9487398076706">-18% OFF</span>
        
      </div><div class="atc-btn-wrapper">
        
        <div class="quick-add no-js-hidden"><product-form data-section-id="template--26131582583074__product_section_7pdHAY"><form method="post" action="/cart/add" id="quick-add-9487398076706" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="49160239776034" class="product-variant-id">
                  <input type="hidden" name="quantity" value="1" id="product-quantity--9487398076706">
                  <div class="atc-hover">
                    <div class="div-hover"></div>
                    <button id="quick-add-9487398076706-submit" type="submit" name="add" class="quick-add__submit button button--full-width button--secondary">
                      <span>Add to cart</span>

<div class="loading__spinner hidden">
  <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66"><circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path"/></svg>

</div>
</button>
                  </div><input type="hidden" name="product-id" value="9487398076706" /><input type="hidden" name="section-id" value="template--26131582583074__product_section_7pdHAY" /></form></product-form></div>
      </div> </div> </div><script>
  if (typeof initPackSelectors === 'undefined') {
    function initPackSelectors() {
      const wrappers = document.querySelectorAll('.pack-selector-wrapper');
      wrappers.forEach(wrapper => {
        const cardId = wrapper.dataset.cardId;
        const buttons = wrapper.querySelectorAll('.pack-selector-btn');
        buttons.forEach(button => {
          if (button.dataset.listenerAttached) return;
          button.dataset.listenerAttached = true;
          button.addEventListener('click', () => {
            const data = button.dataset;
            buttons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            
            const titleEl = document.querySelector(`#product-title-${cardId}`);
            if (titleEl) titleEl.textContent = data.title;
            
            const mrpEl = document.querySelector(`#old-mrp-${cardId}`);
            if (mrpEl) mrpEl.textContent = `Old MRP ${data.oldMrp}`;
            
            const qtyEl = document.querySelector(`#product-quantity-${cardId}`);
            if (qtyEl) qtyEl.value = data.quantity;
            
            updatePrice(cardId, data.price, data.comparePrice);
          });
        });
      });
    }

    function updatePrice(cardId, price, comparePrice) {
      const priceContainer = document.querySelector(`#price-product-${cardId}`);
      if (!priceContainer) return;
      price = parseInt(price, 10);
      comparePrice = parseInt(comparePrice, 10);
      let html = '';
      if (comparePrice > price) {
        const discountPercentage = Math.round(((comparePrice - price) * 100) / comparePrice);
        html = `<span class="compate-price">${formatMoney(comparePrice)}</span><span class="discounted-price">${formatMoney(price)}/-</span><span class="discount-percentage">-${discountPercentage}% OFF</span>`;
      } else {
        html = `<span class="regular-price">${formatMoney(price)}/-</span>`;
      }
      priceContainer.innerHTML = html;
    }

    function formatMoney(cents) {
      let p = (cents / 100).toFixed(2);
      if (p.endsWith('.00')) p = p.slice(0, -3);
      return `₹${new Intl.NumberFormat('en-IN').format(p)}`;
    }

    document.addEventListener('DOMContentLoaded', initPackSelectors);
    document.addEventListener('shopify:section:load', initPackSelectors);
  }
</script>
                    </div>
                  


                    
                    <div class="swiper-slide product-slide  hide-on-mobile">
                       
<link href="//superyou.in/cdn/shop/t/51/assets/component-rating.css?v=61607815681206498061766474564" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/component-volume-pricing.css?v=81475673220178626351766474567" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/component-price.css?v=101019534186928093711766474562" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/quick-order-list.css?v=83761384229492353061766474617" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/quantity-popover.css?v=129068967981937647381766474615" rel="stylesheet" type="text/css" media="all" />
<link href="//superyou.in/cdn/shop/t/51/assets/quick-add.css?v=66647833350618835731766474616" rel="stylesheet" type="text/css" media="all" />
  <script src="//superyou.in/cdn/shop/t/51/assets/product-form.js?v=105601561156512401221766474613" defer="defer"></script><style>
   @media only screen and (max-width: 767px) {
     .rating-star:before { font-size: 14px !important; }
     .rating-wrapper { align-items: flex-start; }
     .rating-count { letter-spacing: normal; }
     p.rating-count.caption { line-height: 130%; }
     .product-card--out-of-stock .quick-add__submit { font-size: 1rem !important; }
     .product-card__promo-tag { font-size: 6px; }
   }
  .product-card--out-of-stock .product-top-wraper { position: relative; }
  .product-card--out-of-stock .product-top-wraper::before {
    content: ''; display: block; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(163, 160, 160, 0.6); z-index: 1;
  }
  .product-card--out-of-stock .image-wraper .img { opacity: 0.9; }
  .product-card--out-of-stock .title-product { color: #999; }
</style><div class="product-card " id="product-card-el--10015947161890"><span class="product-card__badge"><span>JUST LAUNCHED</span></span>

    <a href="/products/cold-coffee-fermented-yeast-protein-500g" class="product-top-wraper">
      <div class="pack-tag-line"></div>
      <div class="image-wraper">
        <img src="//superyou.in/cdn/shop/files/ProCoffee_FOPcopy2_3x_1.jpg?v=1770292294" alt="Cold Coffee Fermented Yeast Protein - 500g" class="img" loading="lazy">
      </div>
    </a>

    <div class="productbottom-wrapper">
      <div class="review-rating">
          <div class="rating-wrapper">
            <div class="rating" role="img" aria-label="Rating details">
              <span aria-hidden="true" class="rating-star" style="--percent: 80.0%;"></span>
            </div>
            <p class="rating-text caption"><span aria-hidden="true">4.0 / 5.0</span></p>
            <p class="rating-count caption"><span aria-hidden="true">| 2 Reviews</span></p>
          </div></div><a href="/products/cold-coffee-fermented-yeast-protein-500g" class="title-product" id="product-title--10015947161890">Cold Coffee Fermented Yeast Protein - 500g</a>

      <a href="/products/cold-coffee-fermented-yeast-protein-500g" class="title-tag-line">
        A Classic Treat, Packed with Protein Power
      </a><div class="price-product" id="price-product--10015947161890">
<span class="compate-price" id="compare-price--10015947161890">₹1,499</span>
          <span class="discounted-price" id="discounted-price--10015947161890">₹1,249/-</span>
          <span class="discount-percentage" id="discount-percentage--10015947161890">-17% OFF</span>
        
      </div><div class="product-card__promo-tag">Free Shipping + 3% Prepaid Bonus</div><div class="atc-btn-wrapper">
        
        <div class="quick-add no-js-hidden"><product-form data-section-id="template--26131582583074__product_section_7pdHAY"><form method="post" action="/cart/add" id="quick-add-10015947161890" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="51242453958946" class="product-variant-id">
                  <input type="hidden" name="quantity" value="1" id="product-quantity--10015947161890">
                  <div class="atc-hover">
                    <div class="div-hover"></div>
                    <button id="quick-add-10015947161890-submit" type="submit" name="add" class="quick-add__submit button button--full-width button--secondary">
                      <span>Add to cart</span>

<div class="loading__spinner hidden">
  <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66"><circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path"/></svg>

</div>
</button>
                  </div><input type="hidden" name="product-id" value="10015947161890" /><input type="hidden" name="section-id" value="template--26131582583074__product_section_7pdHAY" /></form></product-form></div>
      </div> </div> </div><script>
  if (typeof initPackSelectors === 'undefined') {
    function initPackSelectors() {
      const wrappers = document.querySelectorAll('.pack-selector-wrapper');
      wrappers.forEach(wrapper => {
        const cardId = wrapper.dataset.cardId;
        const buttons = wrapper.querySelectorAll('.pack-selector-btn');
        buttons.forEach(button => {
          if (button.dataset.listenerAttached) return;
          button.dataset.listenerAttached = true;
          button.addEventListener('click', () => {
            const data = button.dataset;
            buttons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            
            const titleEl = document.querySelector(`#product-title-${cardId}`);
            if (titleEl) titleEl.textContent = data.title;
            
            const mrpEl = document.querySelector(`#old-mrp-${cardId}`);
            if (mrpEl) mrpEl.textContent = `Old MRP ${data.oldMrp}`;
            
            const qtyEl = document.querySelector(`#product-quantity-${cardId}`);
            if (qtyEl) qtyEl.value = data.quantity;
            
            updatePrice(cardId, data.price, data.comparePrice);
          });
        });
      });
    }

    function updatePrice(cardId, price, comparePrice) {
      const priceContainer = document.querySelector(`#price-product-${cardId}`);
      if (!priceContainer) return;
      price = parseInt(price, 10);
      comparePrice = parseInt(comparePrice, 10);
      let html = '';
      if (comparePrice > price) {
        const discountPercentage = Math.round(((comparePrice - price) * 100) / comparePrice);
        html = `<span class="compate-price">${formatMoney(comparePrice)}</span><span class="discounted-price">${formatMoney(price)}/-</span><span class="discount-percentage">-${discountPercentage}% OFF</span>`;
      } else {
        html = `<span class="regular-price">${formatMoney(price)}/-</span>`;
      }
      priceContainer.innerHTML = html;
    }

    function formatMoney(cents) {
      let p = (cents / 100).toFixed(2);
      if (p.endsWith('.00')) p = p.slice(0, -3);
      return `₹${new Intl.NumberFormat('en-IN').format(p)}`;
    }

    document.addEventListener('DOMContentLoaded', initPackSelectors);
    document.addEventListener('shopify:section:load', initPackSelectors);
  }
</script>
                    </div>
                  


                    
                    <div class="swiper-slide product-slide  hide-on-mobile">
                       
<link href="//superyou.in/cdn/shop/t/51/assets/component-rating.css?v=61607815681206498061766474564" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/component-volume-pricing.css?v=81475673220178626351766474567" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/component-price.css?v=101019534186928093711766474562" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/quick-order-list.css?v=83761384229492353061766474617" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/quantity-popover.css?v=129068967981937647381766474615" rel="stylesheet" type="text/css" media="all" />
<link href="//superyou.in/cdn/shop/t/51/assets/quick-add.css?v=66647833350618835731766474616" rel="stylesheet" type="text/css" media="all" />
  <script src="//superyou.in/cdn/shop/t/51/assets/product-form.js?v=105601561156512401221766474613" defer="defer"></script><style>
   @media only screen and (max-width: 767px) {
     .rating-star:before { font-size: 14px !important; }
     .rating-wrapper { align-items: flex-start; }
     .rating-count { letter-spacing: normal; }
     p.rating-count.caption { line-height: 130%; }
     .product-card--out-of-stock .quick-add__submit { font-size: 1rem !important; }
     .product-card__promo-tag { font-size: 6px; }
   }
  .product-card--out-of-stock .product-top-wraper { position: relative; }
  .product-card--out-of-stock .product-top-wraper::before {
    content: ''; display: block; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(163, 160, 160, 0.6); z-index: 1;
  }
  .product-card--out-of-stock .image-wraper .img { opacity: 0.9; }
  .product-card--out-of-stock .title-product { color: #999; }
</style><div class="product-card " id="product-card-el--10053667127586">

    <a href="/products/chocolate-fermented-yeast-protein-500g-unflavoured-creatine-combo" class="product-top-wraper">
      <div class="pack-tag-line"></div>
      <div class="image-wraper">
        <img src="//superyou.in/cdn/shop/files/Chocolate500g_UnflavourCreatine.jpg?v=1773658768" alt="Chocolate Fermented Yeast Protein 500g + Unflavoured Creatine Combo" class="img" loading="lazy">
      </div>
    </a>

    <div class="productbottom-wrapper">
      <div class="review-rating"></div><a href="/products/chocolate-fermented-yeast-protein-500g-unflavoured-creatine-combo" class="title-product" id="product-title--10053667127586">Chocolate Fermented Yeast Protein 500g + Unflavoured Creatine Combo</a>

      <a href="/products/chocolate-fermented-yeast-protein-500g-unflavoured-creatine-combo" class="title-tag-line">
        A Classic Treat, Packed with Protein Power
      </a><div class="price-product" id="price-product--10053667127586">
<span class="compate-price" id="compare-price--10053667127586">₹2,098</span>
          <span class="discounted-price" id="discounted-price--10053667127586">₹1,599/-</span>
          <span class="discount-percentage" id="discount-percentage--10053667127586">-24% OFF</span>
        
      </div><div class="product-card__promo-tag">Free Shipping + 3% Prepaid Bonus</div><div class="atc-btn-wrapper">
        
        <div class="quick-add no-js-hidden"><product-form data-section-id="template--26131582583074__product_section_7pdHAY"><form method="post" action="/cart/add" id="quick-add-10053667127586" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="51427975397666" class="product-variant-id">
                  <input type="hidden" name="quantity" value="1" id="product-quantity--10053667127586">
                  <div class="atc-hover">
                    <div class="div-hover"></div>
                    <button id="quick-add-10053667127586-submit" type="submit" name="add" class="quick-add__submit button button--full-width button--secondary">
                      <span>Add to cart</span>

<div class="loading__spinner hidden">
  <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66"><circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path"/></svg>

</div>
</button>
                  </div><input type="hidden" name="product-id" value="10053667127586" /><input type="hidden" name="section-id" value="template--26131582583074__product_section_7pdHAY" /></form></product-form></div>
      </div> </div> </div><script>
  if (typeof initPackSelectors === 'undefined') {
    function initPackSelectors() {
      const wrappers = document.querySelectorAll('.pack-selector-wrapper');
      wrappers.forEach(wrapper => {
        const cardId = wrapper.dataset.cardId;
        const buttons = wrapper.querySelectorAll('.pack-selector-btn');
        buttons.forEach(button => {
          if (button.dataset.listenerAttached) return;
          button.dataset.listenerAttached = true;
          button.addEventListener('click', () => {
            const data = button.dataset;
            buttons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            
            const titleEl = document.querySelector(`#product-title-${cardId}`);
            if (titleEl) titleEl.textContent = data.title;
            
            const mrpEl = document.querySelector(`#old-mrp-${cardId}`);
            if (mrpEl) mrpEl.textContent = `Old MRP ${data.oldMrp}`;
            
            const qtyEl = document.querySelector(`#product-quantity-${cardId}`);
            if (qtyEl) qtyEl.value = data.quantity;
            
            updatePrice(cardId, data.price, data.comparePrice);
          });
        });
      });
    }

    function updatePrice(cardId, price, comparePrice) {
      const priceContainer = document.querySelector(`#price-product-${cardId}`);
      if (!priceContainer) return;
      price = parseInt(price, 10);
      comparePrice = parseInt(comparePrice, 10);
      let html = '';
      if (comparePrice > price) {
        const discountPercentage = Math.round(((comparePrice - price) * 100) / comparePrice);
        html = `<span class="compate-price">${formatMoney(comparePrice)}</span><span class="discounted-price">${formatMoney(price)}/-</span><span class="discount-percentage">-${discountPercentage}% OFF</span>`;
      } else {
        html = `<span class="regular-price">${formatMoney(price)}/-</span>`;
      }
      priceContainer.innerHTML = html;
    }

    function formatMoney(cents) {
      let p = (cents / 100).toFixed(2);
      if (p.endsWith('.00')) p = p.slice(0, -3);
      return `₹${new Intl.NumberFormat('en-IN').format(p)}`;
    }

    document.addEventListener('DOMContentLoaded', initPackSelectors);
    document.addEventListener('shopify:section:load', initPackSelectors);
  }
</script>
                    </div>
                  


                    
                    <div class="swiper-slide product-slide  hide-on-mobile">
                       
<link href="//superyou.in/cdn/shop/t/51/assets/component-rating.css?v=61607815681206498061766474564" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/component-volume-pricing.css?v=81475673220178626351766474567" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/component-price.css?v=101019534186928093711766474562" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/quick-order-list.css?v=83761384229492353061766474617" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/quantity-popover.css?v=129068967981937647381766474615" rel="stylesheet" type="text/css" media="all" />
<link href="//superyou.in/cdn/shop/t/51/assets/quick-add.css?v=66647833350618835731766474616" rel="stylesheet" type="text/css" media="all" />
  <script src="//superyou.in/cdn/shop/t/51/assets/product-form.js?v=105601561156512401221766474613" defer="defer"></script><style>
   @media only screen and (max-width: 767px) {
     .rating-star:before { font-size: 14px !important; }
     .rating-wrapper { align-items: flex-start; }
     .rating-count { letter-spacing: normal; }
     p.rating-count.caption { line-height: 130%; }
     .product-card--out-of-stock .quick-add__submit { font-size: 1rem !important; }
     .product-card__promo-tag { font-size: 6px; }
   }
  .product-card--out-of-stock .product-top-wraper { position: relative; }
  .product-card--out-of-stock .product-top-wraper::before {
    content: ''; display: block; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(163, 160, 160, 0.6); z-index: 1;
  }
  .product-card--out-of-stock .image-wraper .img { opacity: 0.9; }
  .product-card--out-of-stock .title-product { color: #999; }
</style><div class="product-card " id="product-card-el--10053667324194"><span class="product-card__badge"><span>JUST LAUNCHED</span></span>

    <a href="/products/coffee-fermented-yeast-protein-unflavoured-creatine-combo" class="product-top-wraper">
      <div class="pack-tag-line"></div>
      <div class="image-wraper">
        <img src="//superyou.in/cdn/shop/files/ColdCoffee500g_UnflavourCreatine_54703965-0893-488c-b159-8d52a7ae9ef3.jpg?v=1773659022" alt="Coffee Fermented Yeast Protein 500g + Unflavoured Creatine Combo" class="img" loading="lazy">
      </div>
    </a>

    <div class="productbottom-wrapper">
      <div class="review-rating">
          <div class="rating-wrapper">
            <div class="rating" role="img" aria-label="Rating details">
              <span aria-hidden="true" class="rating-star" style="--percent: 92.0%;"></span>
            </div>
            <p class="rating-text caption"><span aria-hidden="true">4.6 / 5.0</span></p>
            <p class="rating-count caption"><span aria-hidden="true">| 5 Reviews</span></p>
          </div></div><a href="/products/coffee-fermented-yeast-protein-unflavoured-creatine-combo" class="title-product" id="product-title--10053667324194">Coffee Fermented Yeast Protein 500g + Unflavoured Creatine Combo</a>

      <a href="/products/coffee-fermented-yeast-protein-unflavoured-creatine-combo" class="title-tag-line">
        A Classic Treat, Packed with Protein Power
      </a><div class="price-product" id="price-product--10053667324194">
<span class="compate-price" id="compare-price--10053667324194">₹2,098</span>
          <span class="discounted-price" id="discounted-price--10053667324194">₹1,599/-</span>
          <span class="discount-percentage" id="discount-percentage--10053667324194">-24% OFF</span>
        
      </div><div class="product-card__promo-tag">Free Shipping + 3% Prepaid Bonus</div><div class="atc-btn-wrapper">
        
        <div class="quick-add no-js-hidden"><product-form data-section-id="template--26131582583074__product_section_7pdHAY"><form method="post" action="/cart/add" id="quick-add-10053667324194" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="51427975692578" class="product-variant-id">
                  <input type="hidden" name="quantity" value="1" id="product-quantity--10053667324194">
                  <div class="atc-hover">
                    <div class="div-hover"></div>
                    <button id="quick-add-10053667324194-submit" type="submit" name="add" class="quick-add__submit button button--full-width button--secondary">
                      <span>Add to cart</span>

<div class="loading__spinner hidden">
  <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66"><circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path"/></svg>

</div>
</button>
                  </div><input type="hidden" name="product-id" value="10053667324194" /><input type="hidden" name="section-id" value="template--26131582583074__product_section_7pdHAY" /></form></product-form></div>
      </div> </div> </div><script>
  if (typeof initPackSelectors === 'undefined') {
    function initPackSelectors() {
      const wrappers = document.querySelectorAll('.pack-selector-wrapper');
      wrappers.forEach(wrapper => {
        const cardId = wrapper.dataset.cardId;
        const buttons = wrapper.querySelectorAll('.pack-selector-btn');
        buttons.forEach(button => {
          if (button.dataset.listenerAttached) return;
          button.dataset.listenerAttached = true;
          button.addEventListener('click', () => {
            const data = button.dataset;
            buttons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            
            const titleEl = document.querySelector(`#product-title-${cardId}`);
            if (titleEl) titleEl.textContent = data.title;
            
            const mrpEl = document.querySelector(`#old-mrp-${cardId}`);
            if (mrpEl) mrpEl.textContent = `Old MRP ${data.oldMrp}`;
            
            const qtyEl = document.querySelector(`#product-quantity-${cardId}`);
            if (qtyEl) qtyEl.value = data.quantity;
            
            updatePrice(cardId, data.price, data.comparePrice);
          });
        });
      });
    }

    function updatePrice(cardId, price, comparePrice) {
      const priceContainer = document.querySelector(`#price-product-${cardId}`);
      if (!priceContainer) return;
      price = parseInt(price, 10);
      comparePrice = parseInt(comparePrice, 10);
      let html = '';
      if (comparePrice > price) {
        const discountPercentage = Math.round(((comparePrice - price) * 100) / comparePrice);
        html = `<span class="compate-price">${formatMoney(comparePrice)}</span><span class="discounted-price">${formatMoney(price)}/-</span><span class="discount-percentage">-${discountPercentage}% OFF</span>`;
      } else {
        html = `<span class="regular-price">${formatMoney(price)}/-</span>`;
      }
      priceContainer.innerHTML = html;
    }

    function formatMoney(cents) {
      let p = (cents / 100).toFixed(2);
      if (p.endsWith('.00')) p = p.slice(0, -3);
      return `₹${new Intl.NumberFormat('en-IN').format(p)}`;
    }

    document.addEventListener('DOMContentLoaded', initPackSelectors);
    document.addEventListener('shopify:section:load', initPackSelectors);
  }
</script>
                    </div>
                  


                    
                    <div class="swiper-slide product-slide  hide-on-mobile">
                       
<link href="//superyou.in/cdn/shop/t/51/assets/component-rating.css?v=61607815681206498061766474564" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/component-volume-pricing.css?v=81475673220178626351766474567" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/component-price.css?v=101019534186928093711766474562" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/quick-order-list.css?v=83761384229492353061766474617" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/quantity-popover.css?v=129068967981937647381766474615" rel="stylesheet" type="text/css" media="all" />
<link href="//superyou.in/cdn/shop/t/51/assets/quick-add.css?v=66647833350618835731766474616" rel="stylesheet" type="text/css" media="all" />
  <script src="//superyou.in/cdn/shop/t/51/assets/product-form.js?v=105601561156512401221766474613" defer="defer"></script><style>
   @media only screen and (max-width: 767px) {
     .rating-star:before { font-size: 14px !important; }
     .rating-wrapper { align-items: flex-start; }
     .rating-count { letter-spacing: normal; }
     p.rating-count.caption { line-height: 130%; }
     .product-card--out-of-stock .quick-add__submit { font-size: 1rem !important; }
     .product-card__promo-tag { font-size: 6px; }
   }
  .product-card--out-of-stock .product-top-wraper { position: relative; }
  .product-card--out-of-stock .product-top-wraper::before {
    content: ''; display: block; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(163, 160, 160, 0.6); z-index: 1;
  }
  .product-card--out-of-stock .image-wraper .img { opacity: 0.9; }
  .product-card--out-of-stock .title-product { color: #999; }
</style><div class="product-card " id="product-card-el--10044261663010">

    <a href="/products/creatine-monohydrate-zesty-lemon" class="product-top-wraper">
      <div class="pack-tag-line"></div>
      <div class="image-wraper">
        <img src="//superyou.in/cdn/shop/files/Creatine_Lemon_FOP_D2C_1.jpg?v=1778584576" alt="Creatine Monohydrate 112g - Zesty Lemon" class="img" loading="lazy">
      </div>
    </a>

    <div class="productbottom-wrapper">
      <div class="review-rating">
          <div class="rating-wrapper">
            <div class="rating" role="img" aria-label="Rating details">
              <span aria-hidden="true" class="rating-star" style="--percent: 97.8%;"></span>
            </div>
            <p class="rating-text caption"><span aria-hidden="true">4.89 / 5.0</span></p>
            <p class="rating-count caption"><span aria-hidden="true">| 9 Reviews</span></p>
          </div></div><a href="/products/creatine-monohydrate-zesty-lemon" class="title-product" id="product-title--10044261663010">Creatine Monohydrate 112g - Zesty Lemon</a>

      <a href="/products/creatine-monohydrate-zesty-lemon" class="title-tag-line">
        A Classic Treat, Packed with Protein Power
      </a><div class="price-product" id="price-product--10044261663010">
<span class="compate-price" id="compare-price--10044261663010">₹599</span>
          <span class="discounted-price" id="discounted-price--10044261663010">₹449/-</span>
          <span class="discount-percentage" id="discount-percentage--10044261663010">-25% OFF</span>
        
      </div><div class="atc-btn-wrapper">
        
        <div class="quick-add no-js-hidden"><product-form data-section-id="template--26131582583074__product_section_7pdHAY"><form method="post" action="/cart/add" id="quick-add-10044261663010" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="51399957840162" class="product-variant-id">
                  <input type="hidden" name="quantity" value="1" id="product-quantity--10044261663010">
                  <div class="atc-hover">
                    <div class="div-hover"></div>
                    <button id="quick-add-10044261663010-submit" type="submit" name="add" class="quick-add__submit button button--full-width button--secondary">
                      <span>Add to cart</span>

<div class="loading__spinner hidden">
  <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66"><circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path"/></svg>

</div>
</button>
                  </div><input type="hidden" name="product-id" value="10044261663010" /><input type="hidden" name="section-id" value="template--26131582583074__product_section_7pdHAY" /></form></product-form></div>
      </div> </div> </div><script>
  if (typeof initPackSelectors === 'undefined') {
    function initPackSelectors() {
      const wrappers = document.querySelectorAll('.pack-selector-wrapper');
      wrappers.forEach(wrapper => {
        const cardId = wrapper.dataset.cardId;
        const buttons = wrapper.querySelectorAll('.pack-selector-btn');
        buttons.forEach(button => {
          if (button.dataset.listenerAttached) return;
          button.dataset.listenerAttached = true;
          button.addEventListener('click', () => {
            const data = button.dataset;
            buttons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            
            const titleEl = document.querySelector(`#product-title-${cardId}`);
            if (titleEl) titleEl.textContent = data.title;
            
            const mrpEl = document.querySelector(`#old-mrp-${cardId}`);
            if (mrpEl) mrpEl.textContent = `Old MRP ${data.oldMrp}`;
            
            const qtyEl = document.querySelector(`#product-quantity-${cardId}`);
            if (qtyEl) qtyEl.value = data.quantity;
            
            updatePrice(cardId, data.price, data.comparePrice);
          });
        });
      });
    }

    function updatePrice(cardId, price, comparePrice) {
      const priceContainer = document.querySelector(`#price-product-${cardId}`);
      if (!priceContainer) return;
      price = parseInt(price, 10);
      comparePrice = parseInt(comparePrice, 10);
      let html = '';
      if (comparePrice > price) {
        const discountPercentage = Math.round(((comparePrice - price) * 100) / comparePrice);
        html = `<span class="compate-price">${formatMoney(comparePrice)}</span><span class="discounted-price">${formatMoney(price)}/-</span><span class="discount-percentage">-${discountPercentage}% OFF</span>`;
      } else {
        html = `<span class="regular-price">${formatMoney(price)}/-</span>`;
      }
      priceContainer.innerHTML = html;
    }

    function formatMoney(cents) {
      let p = (cents / 100).toFixed(2);
      if (p.endsWith('.00')) p = p.slice(0, -3);
      return `₹${new Intl.NumberFormat('en-IN').format(p)}`;
    }

    document.addEventListener('DOMContentLoaded', initPackSelectors);
    document.addEventListener('shopify:section:load', initPackSelectors);
  }
</script>
                    </div>
                  


                    
                    <div class="swiper-slide product-slide  hide-on-mobile">
                       
<link href="//superyou.in/cdn/shop/t/51/assets/component-rating.css?v=61607815681206498061766474564" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/component-volume-pricing.css?v=81475673220178626351766474567" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/component-price.css?v=101019534186928093711766474562" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/quick-order-list.css?v=83761384229492353061766474617" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/quantity-popover.css?v=129068967981937647381766474615" rel="stylesheet" type="text/css" media="all" />
<link href="//superyou.in/cdn/shop/t/51/assets/quick-add.css?v=66647833350618835731766474616" rel="stylesheet" type="text/css" media="all" />
  <script src="//superyou.in/cdn/shop/t/51/assets/product-form.js?v=105601561156512401221766474613" defer="defer"></script><style>
   @media only screen and (max-width: 767px) {
     .rating-star:before { font-size: 14px !important; }
     .rating-wrapper { align-items: flex-start; }
     .rating-count { letter-spacing: normal; }
     p.rating-count.caption { line-height: 130%; }
     .product-card--out-of-stock .quick-add__submit { font-size: 1rem !important; }
     .product-card__promo-tag { font-size: 6px; }
   }
  .product-card--out-of-stock .product-top-wraper { position: relative; }
  .product-card--out-of-stock .product-top-wraper::before {
    content: ''; display: block; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(163, 160, 160, 0.6); z-index: 1;
  }
  .product-card--out-of-stock .image-wraper .img { opacity: 0.9; }
  .product-card--out-of-stock .title-product { color: #999; }
</style><div class="product-card " id="product-card-el--10044260811042">

    <a href="/products/creatine-monohydrate-orange" class="product-top-wraper">
      <div class="pack-tag-line"></div>
      <div class="image-wraper">
        <img src="//superyou.in/cdn/shop/files/Creatine_Orange_FOP_D2C_1.jpg?v=1778584577" alt="Creatine Monohydrate 112g - Orange Kick" class="img" loading="lazy">
      </div>
    </a>

    <div class="productbottom-wrapper">
      <div class="review-rating">
          <div class="rating-wrapper">
            <div class="rating" role="img" aria-label="Rating details">
              <span aria-hidden="true" class="rating-star" style="--percent: 100.0%;"></span>
            </div>
            <p class="rating-text caption"><span aria-hidden="true">5.0 / 5.0</span></p>
            <p class="rating-count caption"><span aria-hidden="true">| 2 Reviews</span></p>
          </div></div><a href="/products/creatine-monohydrate-orange" class="title-product" id="product-title--10044260811042">Creatine Monohydrate 112g - Orange Kick</a>

      <a href="/products/creatine-monohydrate-orange" class="title-tag-line">
        A Classic Treat, Packed with Protein Power
      </a><div class="price-product" id="price-product--10044260811042">
<span class="compate-price" id="compare-price--10044260811042">₹599</span>
          <span class="discounted-price" id="discounted-price--10044260811042">₹449/-</span>
          <span class="discount-percentage" id="discount-percentage--10044260811042">-25% OFF</span>
        
      </div><div class="atc-btn-wrapper">
        
        <div class="quick-add no-js-hidden"><product-form data-section-id="template--26131582583074__product_section_7pdHAY"><form method="post" action="/cart/add" id="quick-add-10044260811042" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="51399954759970" class="product-variant-id">
                  <input type="hidden" name="quantity" value="1" id="product-quantity--10044260811042">
                  <div class="atc-hover">
                    <div class="div-hover"></div>
                    <button id="quick-add-10044260811042-submit" type="submit" name="add" class="quick-add__submit button button--full-width button--secondary">
                      <span>Add to cart</span>

<div class="loading__spinner hidden">
  <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66"><circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path"/></svg>

</div>
</button>
                  </div><input type="hidden" name="product-id" value="10044260811042" /><input type="hidden" name="section-id" value="template--26131582583074__product_section_7pdHAY" /></form></product-form></div>
      </div> </div> </div><script>
  if (typeof initPackSelectors === 'undefined') {
    function initPackSelectors() {
      const wrappers = document.querySelectorAll('.pack-selector-wrapper');
      wrappers.forEach(wrapper => {
        const cardId = wrapper.dataset.cardId;
        const buttons = wrapper.querySelectorAll('.pack-selector-btn');
        buttons.forEach(button => {
          if (button.dataset.listenerAttached) return;
          button.dataset.listenerAttached = true;
          button.addEventListener('click', () => {
            const data = button.dataset;
            buttons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            
            const titleEl = document.querySelector(`#product-title-${cardId}`);
            if (titleEl) titleEl.textContent = data.title;
            
            const mrpEl = document.querySelector(`#old-mrp-${cardId}`);
            if (mrpEl) mrpEl.textContent = `Old MRP ${data.oldMrp}`;
            
            const qtyEl = document.querySelector(`#product-quantity-${cardId}`);
            if (qtyEl) qtyEl.value = data.quantity;
            
            updatePrice(cardId, data.price, data.comparePrice);
          });
        });
      });
    }

    function updatePrice(cardId, price, comparePrice) {
      const priceContainer = document.querySelector(`#price-product-${cardId}`);
      if (!priceContainer) return;
      price = parseInt(price, 10);
      comparePrice = parseInt(comparePrice, 10);
      let html = '';
      if (comparePrice > price) {
        const discountPercentage = Math.round(((comparePrice - price) * 100) / comparePrice);
        html = `<span class="compate-price">${formatMoney(comparePrice)}</span><span class="discounted-price">${formatMoney(price)}/-</span><span class="discount-percentage">-${discountPercentage}% OFF</span>`;
      } else {
        html = `<span class="regular-price">${formatMoney(price)}/-</span>`;
      }
      priceContainer.innerHTML = html;
    }

    function formatMoney(cents) {
      let p = (cents / 100).toFixed(2);
      if (p.endsWith('.00')) p = p.slice(0, -3);
      return `₹${new Intl.NumberFormat('en-IN').format(p)}`;
    }

    document.addEventListener('DOMContentLoaded', initPackSelectors);
    document.addEventListener('shopify:section:load', initPackSelectors);
  }
</script>
                    </div>
                  


                    
                    <div class="swiper-slide product-slide  hide-on-mobile">
                       
<link href="//superyou.in/cdn/shop/t/51/assets/component-rating.css?v=61607815681206498061766474564" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/component-volume-pricing.css?v=81475673220178626351766474567" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/component-price.css?v=101019534186928093711766474562" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/quick-order-list.css?v=83761384229492353061766474617" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/quantity-popover.css?v=129068967981937647381766474615" rel="stylesheet" type="text/css" media="all" />
<link href="//superyou.in/cdn/shop/t/51/assets/quick-add.css?v=66647833350618835731766474616" rel="stylesheet" type="text/css" media="all" />
  <script src="//superyou.in/cdn/shop/t/51/assets/product-form.js?v=105601561156512401221766474613" defer="defer"></script><style>
   @media only screen and (max-width: 767px) {
     .rating-star:before { font-size: 14px !important; }
     .rating-wrapper { align-items: flex-start; }
     .rating-count { letter-spacing: normal; }
     p.rating-count.caption { line-height: 130%; }
     .product-card--out-of-stock .quick-add__submit { font-size: 1rem !important; }
     .product-card__promo-tag { font-size: 6px; }
   }
  .product-card--out-of-stock .product-top-wraper { position: relative; }
  .product-card--out-of-stock .product-top-wraper::before {
    content: ''; display: block; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(163, 160, 160, 0.6); z-index: 1;
  }
  .product-card--out-of-stock .image-wraper .img { opacity: 0.9; }
  .product-card--out-of-stock .title-product { color: #999; }
</style><div class="product-card " id="product-card-el--9797445845282"><span class="product-card__badge"><span>BESTSELLER</span></span>

    <a href="/products/chocolate-protein-powder" class="product-top-wraper">
      <div class="pack-tag-line"></div>
      <div class="image-wraper">
        <img src="//superyou.in/cdn/shop/files/1_4.jpg?v=1771314200" alt="Chocolate Fermented Yeast Protein - 1Kg" class="img" loading="lazy">
      </div>
    </a>

    <div class="productbottom-wrapper">
      <div class="review-rating">
          <div class="rating-wrapper">
            <div class="rating" role="img" aria-label="Rating details">
              <span aria-hidden="true" class="rating-star" style="--percent: 85.6%;"></span>
            </div>
            <p class="rating-text caption"><span aria-hidden="true">4.28 / 5.0</span></p>
            <p class="rating-count caption"><span aria-hidden="true">| 123 Reviews</span></p>
          </div></div><a href="/products/chocolate-protein-powder" class="title-product" id="product-title--9797445845282">Chocolate Fermented Yeast Protein - 1Kg</a>

      <a href="/products/chocolate-protein-powder" class="title-tag-line">
        Packed with protein and built to flex
      </a><div class="price-product" id="price-product--9797445845282">
<span class="compate-price" id="compare-price--9797445845282">₹2,899</span>
          <span class="discounted-price" id="discounted-price--9797445845282">₹2,249/-</span>
          <span class="discount-percentage" id="discount-percentage--9797445845282">-22% OFF</span>
        
      </div><div class="product-card__promo-tag">Free Shipping + 3% Prepaid Bonus</div><div class="atc-btn-wrapper">
        
        <div class="quick-add no-js-hidden"><product-form data-section-id="template--26131582583074__product_section_7pdHAY"><form method="post" action="/cart/add" id="quick-add-9797445845282" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="50150697140514" class="product-variant-id">
                  <input type="hidden" name="quantity" value="1" id="product-quantity--9797445845282">
                  <div class="atc-hover">
                    <div class="div-hover"></div>
                    <button id="quick-add-9797445845282-submit" type="submit" name="add" class="quick-add__submit button button--full-width button--secondary">
                      <span>Add to cart</span>

<div class="loading__spinner hidden">
  <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66"><circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path"/></svg>

</div>
</button>
                  </div><input type="hidden" name="product-id" value="9797445845282" /><input type="hidden" name="section-id" value="template--26131582583074__product_section_7pdHAY" /></form></product-form></div>
      </div> </div> </div><script>
  if (typeof initPackSelectors === 'undefined') {
    function initPackSelectors() {
      const wrappers = document.querySelectorAll('.pack-selector-wrapper');
      wrappers.forEach(wrapper => {
        const cardId = wrapper.dataset.cardId;
        const buttons = wrapper.querySelectorAll('.pack-selector-btn');
        buttons.forEach(button => {
          if (button.dataset.listenerAttached) return;
          button.dataset.listenerAttached = true;
          button.addEventListener('click', () => {
            const data = button.dataset;
            buttons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            
            const titleEl = document.querySelector(`#product-title-${cardId}`);
            if (titleEl) titleEl.textContent = data.title;
            
            const mrpEl = document.querySelector(`#old-mrp-${cardId}`);
            if (mrpEl) mrpEl.textContent = `Old MRP ${data.oldMrp}`;
            
            const qtyEl = document.querySelector(`#product-quantity-${cardId}`);
            if (qtyEl) qtyEl.value = data.quantity;
            
            updatePrice(cardId, data.price, data.comparePrice);
          });
        });
      });
    }

    function updatePrice(cardId, price, comparePrice) {
      const priceContainer = document.querySelector(`#price-product-${cardId}`);
      if (!priceContainer) return;
      price = parseInt(price, 10);
      comparePrice = parseInt(comparePrice, 10);
      let html = '';
      if (comparePrice > price) {
        const discountPercentage = Math.round(((comparePrice - price) * 100) / comparePrice);
        html = `<span class="compate-price">${formatMoney(comparePrice)}</span><span class="discounted-price">${formatMoney(price)}/-</span><span class="discount-percentage">-${discountPercentage}% OFF</span>`;
      } else {
        html = `<span class="regular-price">${formatMoney(price)}/-</span>`;
      }
      priceContainer.innerHTML = html;
    }

    function formatMoney(cents) {
      let p = (cents / 100).toFixed(2);
      if (p.endsWith('.00')) p = p.slice(0, -3);
      return `₹${new Intl.NumberFormat('en-IN').format(p)}`;
    }

    document.addEventListener('DOMContentLoaded', initPackSelectors);
    document.addEventListener('shopify:section:load', initPackSelectors);
  }
</script>
                    </div>
                  


                    
                    <div class="swiper-slide product-slide  hide-on-mobile">
                       
<link href="//superyou.in/cdn/shop/t/51/assets/component-rating.css?v=61607815681206498061766474564" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/component-volume-pricing.css?v=81475673220178626351766474567" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/component-price.css?v=101019534186928093711766474562" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/quick-order-list.css?v=83761384229492353061766474617" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/quantity-popover.css?v=129068967981937647381766474615" rel="stylesheet" type="text/css" media="all" />
<link href="//superyou.in/cdn/shop/t/51/assets/quick-add.css?v=66647833350618835731766474616" rel="stylesheet" type="text/css" media="all" />
  <script src="//superyou.in/cdn/shop/t/51/assets/product-form.js?v=105601561156512401221766474613" defer="defer"></script><style>
   @media only screen and (max-width: 767px) {
     .rating-star:before { font-size: 14px !important; }
     .rating-wrapper { align-items: flex-start; }
     .rating-count { letter-spacing: normal; }
     p.rating-count.caption { line-height: 130%; }
     .product-card--out-of-stock .quick-add__submit { font-size: 1rem !important; }
     .product-card__promo-tag { font-size: 6px; }
   }
  .product-card--out-of-stock .product-top-wraper { position: relative; }
  .product-card--out-of-stock .product-top-wraper::before {
    content: ''; display: block; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(163, 160, 160, 0.6); z-index: 1;
  }
  .product-card--out-of-stock .image-wraper .img { opacity: 0.9; }
  .product-card--out-of-stock .title-product { color: #999; }
</style><div class="product-card " id="product-card-el--9798393856290"><span class="product-card__badge"><span>BESTSELLER</span></span>

    <a href="/products/coffee-protein-powder" class="product-top-wraper">
      <div class="pack-tag-line"></div>
      <div class="image-wraper">
        <img src="//superyou.in/cdn/shop/files/1_6.jpg?v=1771317622" alt="Cold Coffee Fermented Yeast Protein - 1Kg" class="img" loading="lazy">
      </div>
    </a>

    <div class="productbottom-wrapper">
      <div class="review-rating">
          <div class="rating-wrapper">
            <div class="rating" role="img" aria-label="Rating details">
              <span aria-hidden="true" class="rating-star" style="--percent: 85.0%;"></span>
            </div>
            <p class="rating-text caption"><span aria-hidden="true">4.25 / 5.0</span></p>
            <p class="rating-count caption"><span aria-hidden="true">| 112 Reviews</span></p>
          </div></div><a href="/products/coffee-protein-powder" class="title-product" id="product-title--9798393856290">Cold Coffee Fermented Yeast Protein - 1Kg</a>

      <a href="/products/coffee-protein-powder" class="title-tag-line">
        Packed with protein and built to flex
      </a><div class="price-product" id="price-product--9798393856290">
<span class="compate-price" id="compare-price--9798393856290">₹2,899</span>
          <span class="discounted-price" id="discounted-price--9798393856290">₹2,249/-</span>
          <span class="discount-percentage" id="discount-percentage--9798393856290">-22% OFF</span>
        
      </div><div class="product-card__promo-tag">Free Shipping + 3% Prepaid Bonus</div><div class="atc-btn-wrapper">
        
        <div class="quick-add no-js-hidden"><product-form data-section-id="template--26131582583074__product_section_7pdHAY"><form method="post" action="/cart/add" id="quick-add-9798393856290" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="50155875041570" class="product-variant-id">
                  <input type="hidden" name="quantity" value="1" id="product-quantity--9798393856290">
                  <div class="atc-hover">
                    <div class="div-hover"></div>
                    <button id="quick-add-9798393856290-submit" type="submit" name="add" class="quick-add__submit button button--full-width button--secondary">
                      <span>Add to cart</span>

<div class="loading__spinner hidden">
  <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66"><circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path"/></svg>

</div>
</button>
                  </div><input type="hidden" name="product-id" value="9798393856290" /><input type="hidden" name="section-id" value="template--26131582583074__product_section_7pdHAY" /></form></product-form></div>
      </div> </div> </div><script>
  if (typeof initPackSelectors === 'undefined') {
    function initPackSelectors() {
      const wrappers = document.querySelectorAll('.pack-selector-wrapper');
      wrappers.forEach(wrapper => {
        const cardId = wrapper.dataset.cardId;
        const buttons = wrapper.querySelectorAll('.pack-selector-btn');
        buttons.forEach(button => {
          if (button.dataset.listenerAttached) return;
          button.dataset.listenerAttached = true;
          button.addEventListener('click', () => {
            const data = button.dataset;
            buttons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            
            const titleEl = document.querySelector(`#product-title-${cardId}`);
            if (titleEl) titleEl.textContent = data.title;
            
            const mrpEl = document.querySelector(`#old-mrp-${cardId}`);
            if (mrpEl) mrpEl.textContent = `Old MRP ${data.oldMrp}`;
            
            const qtyEl = document.querySelector(`#product-quantity-${cardId}`);
            if (qtyEl) qtyEl.value = data.quantity;
            
            updatePrice(cardId, data.price, data.comparePrice);
          });
        });
      });
    }

    function updatePrice(cardId, price, comparePrice) {
      const priceContainer = document.querySelector(`#price-product-${cardId}`);
      if (!priceContainer) return;
      price = parseInt(price, 10);
      comparePrice = parseInt(comparePrice, 10);
      let html = '';
      if (comparePrice > price) {
        const discountPercentage = Math.round(((comparePrice - price) * 100) / comparePrice);
        html = `<span class="compate-price">${formatMoney(comparePrice)}</span><span class="discounted-price">${formatMoney(price)}/-</span><span class="discount-percentage">-${discountPercentage}% OFF</span>`;
      } else {
        html = `<span class="regular-price">${formatMoney(price)}/-</span>`;
      }
      priceContainer.innerHTML = html;
    }

    function formatMoney(cents) {
      let p = (cents / 100).toFixed(2);
      if (p.endsWith('.00')) p = p.slice(0, -3);
      return `₹${new Intl.NumberFormat('en-IN').format(p)}`;
    }

    document.addEventListener('DOMContentLoaded', initPackSelectors);
    document.addEventListener('shopify:section:load', initPackSelectors);
  }
</script>
                    </div>
                  


                    
                    <div class="swiper-slide product-slide  hide-on-mobile">
                       
<link href="//superyou.in/cdn/shop/t/51/assets/component-rating.css?v=61607815681206498061766474564" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/component-volume-pricing.css?v=81475673220178626351766474567" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/component-price.css?v=101019534186928093711766474562" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/quick-order-list.css?v=83761384229492353061766474617" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/quantity-popover.css?v=129068967981937647381766474615" rel="stylesheet" type="text/css" media="all" />
<link href="//superyou.in/cdn/shop/t/51/assets/quick-add.css?v=66647833350618835731766474616" rel="stylesheet" type="text/css" media="all" />
  <script src="//superyou.in/cdn/shop/t/51/assets/product-form.js?v=105601561156512401221766474613" defer="defer"></script><style>
   @media only screen and (max-width: 767px) {
     .rating-star:before { font-size: 14px !important; }
     .rating-wrapper { align-items: flex-start; }
     .rating-count { letter-spacing: normal; }
     p.rating-count.caption { line-height: 130%; }
     .product-card--out-of-stock .quick-add__submit { font-size: 1rem !important; }
     .product-card__promo-tag { font-size: 6px; }
   }
  .product-card--out-of-stock .product-top-wraper { position: relative; }
  .product-card--out-of-stock .product-top-wraper::before {
    content: ''; display: block; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(163, 160, 160, 0.6); z-index: 1;
  }
  .product-card--out-of-stock .image-wraper .img { opacity: 0.9; }
  .product-card--out-of-stock .title-product { color: #999; }
</style><div class="product-card " id="product-card-el--9893862801698"><span class="product-card__badge"><span>JUST LAUNCHED</span></span>

    <a href="/products/cookies-cream-protein-wafers-pack-of-10" class="product-top-wraper">
      <div class="pack-tag-line"></div>
      <div class="image-wraper">
        <img src="//superyou.in/cdn/shop/files/1_2.jpg?v=1761730125" alt="Cookies &amp; Cream Protein Wafers - Pack of 10" class="img" loading="lazy">
      </div>
    </a>

    <div class="productbottom-wrapper">
      <div class="review-rating">
          <div class="rating-wrapper">
            <div class="rating" role="img" aria-label="Rating details">
              <span aria-hidden="true" class="rating-star" style="--percent: 100.0%;"></span>
            </div>
            <p class="rating-text caption"><span aria-hidden="true">5.0 / 5.0</span></p>
            <p class="rating-count caption"><span aria-hidden="true">| 17 Reviews</span></p>
          </div></div><a href="/products/cookies-cream-protein-wafers-pack-of-10" class="title-product" id="product-title--9893862801698">Cookies & Cream Protein Wafers - Pack of 10</a>

      <a href="/products/cookies-cream-protein-wafers-pack-of-10" class="title-tag-line">
        A Classic Treat, Packed with Protein Power
      </a><div class="price-product" id="price-product--9893862801698">
<span class="compate-price" id="compare-price--9893862801698">₹550</span>
          <span class="discounted-price" id="discounted-price--9893862801698">₹449/-</span>
          <span class="discount-percentage" id="discount-percentage--9893862801698">-18% OFF</span>
        
      </div><div class="atc-btn-wrapper">
        
        <div class="quick-add no-js-hidden"><product-form data-section-id="template--26131582583074__product_section_7pdHAY"><form method="post" action="/cart/add" id="quick-add-9893862801698" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="50472326201634" class="product-variant-id">
                  <input type="hidden" name="quantity" value="1" id="product-quantity--9893862801698">
                  <div class="atc-hover">
                    <div class="div-hover"></div>
                    <button id="quick-add-9893862801698-submit" type="submit" name="add" class="quick-add__submit button button--full-width button--secondary">
                      <span>Add to cart</span>

<div class="loading__spinner hidden">
  <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66"><circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path"/></svg>

</div>
</button>
                  </div><input type="hidden" name="product-id" value="9893862801698" /><input type="hidden" name="section-id" value="template--26131582583074__product_section_7pdHAY" /></form></product-form></div>
      </div> </div> </div><script>
  if (typeof initPackSelectors === 'undefined') {
    function initPackSelectors() {
      const wrappers = document.querySelectorAll('.pack-selector-wrapper');
      wrappers.forEach(wrapper => {
        const cardId = wrapper.dataset.cardId;
        const buttons = wrapper.querySelectorAll('.pack-selector-btn');
        buttons.forEach(button => {
          if (button.dataset.listenerAttached) return;
          button.dataset.listenerAttached = true;
          button.addEventListener('click', () => {
            const data = button.dataset;
            buttons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            
            const titleEl = document.querySelector(`#product-title-${cardId}`);
            if (titleEl) titleEl.textContent = data.title;
            
            const mrpEl = document.querySelector(`#old-mrp-${cardId}`);
            if (mrpEl) mrpEl.textContent = `Old MRP ${data.oldMrp}`;
            
            const qtyEl = document.querySelector(`#product-quantity-${cardId}`);
            if (qtyEl) qtyEl.value = data.quantity;
            
            updatePrice(cardId, data.price, data.comparePrice);
          });
        });
      });
    }

    function updatePrice(cardId, price, comparePrice) {
      const priceContainer = document.querySelector(`#price-product-${cardId}`);
      if (!priceContainer) return;
      price = parseInt(price, 10);
      comparePrice = parseInt(comparePrice, 10);
      let html = '';
      if (comparePrice > price) {
        const discountPercentage = Math.round(((comparePrice - price) * 100) / comparePrice);
        html = `<span class="compate-price">${formatMoney(comparePrice)}</span><span class="discounted-price">${formatMoney(price)}/-</span><span class="discount-percentage">-${discountPercentage}% OFF</span>`;
      } else {
        html = `<span class="regular-price">${formatMoney(price)}/-</span>`;
      }
      priceContainer.innerHTML = html;
    }

    function formatMoney(cents) {
      let p = (cents / 100).toFixed(2);
      if (p.endsWith('.00')) p = p.slice(0, -3);
      return `₹${new Intl.NumberFormat('en-IN').format(p)}`;
    }

    document.addEventListener('DOMContentLoaded', initPackSelectors);
    document.addEventListener('shopify:section:load', initPackSelectors);
  }
</script>
                    </div>
                  


                    
                    <div class="swiper-slide product-slide  hide-on-mobile">
                       
<link href="//superyou.in/cdn/shop/t/51/assets/component-rating.css?v=61607815681206498061766474564" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/component-volume-pricing.css?v=81475673220178626351766474567" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/component-price.css?v=101019534186928093711766474562" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/quick-order-list.css?v=83761384229492353061766474617" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/quantity-popover.css?v=129068967981937647381766474615" rel="stylesheet" type="text/css" media="all" />
<link href="//superyou.in/cdn/shop/t/51/assets/quick-add.css?v=66647833350618835731766474616" rel="stylesheet" type="text/css" media="all" />
  <script src="//superyou.in/cdn/shop/t/51/assets/product-form.js?v=105601561156512401221766474613" defer="defer"></script><style>
   @media only screen and (max-width: 767px) {
     .rating-star:before { font-size: 14px !important; }
     .rating-wrapper { align-items: flex-start; }
     .rating-count { letter-spacing: normal; }
     p.rating-count.caption { line-height: 130%; }
     .product-card--out-of-stock .quick-add__submit { font-size: 1rem !important; }
     .product-card__promo-tag { font-size: 6px; }
   }
  .product-card--out-of-stock .product-top-wraper { position: relative; }
  .product-card--out-of-stock .product-top-wraper::before {
    content: ''; display: block; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(163, 160, 160, 0.6); z-index: 1;
  }
  .product-card--out-of-stock .image-wraper .img { opacity: 0.9; }
  .product-card--out-of-stock .title-product { color: #999; }
</style><div class="product-card " id="product-card-el--9494053978402"><span class="product-card__badge"><span>BESTSELLER</span></span>

    <a href="/products/variety-box" class="product-top-wraper">
      <div class="pack-tag-line">PACK OF 10</div>
      <div class="image-wraper">
        <img src="//superyou.in/cdn/shop/files/FOP_copy_3.jpg?v=1766404279" alt="Protein Wafers - Variety Pack of 10" class="img" loading="lazy">
      </div>
    </a>

    <div class="productbottom-wrapper">
      <div class="review-rating">
          <div class="rating-wrapper">
            <div class="rating" role="img" aria-label="Rating details">
              <span aria-hidden="true" class="rating-star" style="--percent: 90.2%;"></span>
            </div>
            <p class="rating-text caption"><span aria-hidden="true">4.51 / 5.0</span></p>
            <p class="rating-count caption"><span aria-hidden="true">| 345 Reviews</span></p>
          </div></div><a href="/products/variety-box" class="title-product" id="product-title--9494053978402">Protein Wafers - Variety Pack of 10</a>

      <a href="/products/variety-box" class="title-tag-line">
        A Classic Treat, Packed with Protein Power
      </a><div class="price-product" id="price-product--9494053978402">
<span class="compate-price" id="compare-price--9494053978402">₹550</span>
          <span class="discounted-price" id="discounted-price--9494053978402">₹449/-</span>
          <span class="discount-percentage" id="discount-percentage--9494053978402">-18% OFF</span>
        
      </div><div class="atc-btn-wrapper">
        
        <div class="quick-add no-js-hidden"><product-form data-section-id="template--26131582583074__product_section_7pdHAY"><form method="post" action="/cart/add" id="quick-add-9494053978402" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="49180852977954" class="product-variant-id">
                  <input type="hidden" name="quantity" value="1" id="product-quantity--9494053978402">
                  <div class="atc-hover">
                    <div class="div-hover"></div>
                    <button id="quick-add-9494053978402-submit" type="submit" name="add" class="quick-add__submit button button--full-width button--secondary">
                      <span>Add to cart</span>

<div class="loading__spinner hidden">
  <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66"><circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path"/></svg>

</div>
</button>
                  </div><input type="hidden" name="product-id" value="9494053978402" /><input type="hidden" name="section-id" value="template--26131582583074__product_section_7pdHAY" /></form></product-form></div>
      </div> </div> </div><script>
  if (typeof initPackSelectors === 'undefined') {
    function initPackSelectors() {
      const wrappers = document.querySelectorAll('.pack-selector-wrapper');
      wrappers.forEach(wrapper => {
        const cardId = wrapper.dataset.cardId;
        const buttons = wrapper.querySelectorAll('.pack-selector-btn');
        buttons.forEach(button => {
          if (button.dataset.listenerAttached) return;
          button.dataset.listenerAttached = true;
          button.addEventListener('click', () => {
            const data = button.dataset;
            buttons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            
            const titleEl = document.querySelector(`#product-title-${cardId}`);
            if (titleEl) titleEl.textContent = data.title;
            
            const mrpEl = document.querySelector(`#old-mrp-${cardId}`);
            if (mrpEl) mrpEl.textContent = `Old MRP ${data.oldMrp}`;
            
            const qtyEl = document.querySelector(`#product-quantity-${cardId}`);
            if (qtyEl) qtyEl.value = data.quantity;
            
            updatePrice(cardId, data.price, data.comparePrice);
          });
        });
      });
    }

    function updatePrice(cardId, price, comparePrice) {
      const priceContainer = document.querySelector(`#price-product-${cardId}`);
      if (!priceContainer) return;
      price = parseInt(price, 10);
      comparePrice = parseInt(comparePrice, 10);
      let html = '';
      if (comparePrice > price) {
        const discountPercentage = Math.round(((comparePrice - price) * 100) / comparePrice);
        html = `<span class="compate-price">${formatMoney(comparePrice)}</span><span class="discounted-price">${formatMoney(price)}/-</span><span class="discount-percentage">-${discountPercentage}% OFF</span>`;
      } else {
        html = `<span class="regular-price">${formatMoney(price)}/-</span>`;
      }
      priceContainer.innerHTML = html;
    }

    function formatMoney(cents) {
      let p = (cents / 100).toFixed(2);
      if (p.endsWith('.00')) p = p.slice(0, -3);
      return `₹${new Intl.NumberFormat('en-IN').format(p)}`;
    }

    document.addEventListener('DOMContentLoaded', initPackSelectors);
    document.addEventListener('shopify:section:load', initPackSelectors);
  }
</script>
                    </div>
                  


                    
                    <div class="swiper-slide product-slide  hide-on-mobile">
                       
<link href="//superyou.in/cdn/shop/t/51/assets/component-rating.css?v=61607815681206498061766474564" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/component-volume-pricing.css?v=81475673220178626351766474567" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/component-price.css?v=101019534186928093711766474562" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/quick-order-list.css?v=83761384229492353061766474617" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/quantity-popover.css?v=129068967981937647381766474615" rel="stylesheet" type="text/css" media="all" />
<link href="//superyou.in/cdn/shop/t/51/assets/quick-add.css?v=66647833350618835731766474616" rel="stylesheet" type="text/css" media="all" />
  <script src="//superyou.in/cdn/shop/t/51/assets/product-form.js?v=105601561156512401221766474613" defer="defer"></script><style>
   @media only screen and (max-width: 767px) {
     .rating-star:before { font-size: 14px !important; }
     .rating-wrapper { align-items: flex-start; }
     .rating-count { letter-spacing: normal; }
     p.rating-count.caption { line-height: 130%; }
     .product-card--out-of-stock .quick-add__submit { font-size: 1rem !important; }
     .product-card__promo-tag { font-size: 6px; }
   }
  .product-card--out-of-stock .product-top-wraper { position: relative; }
  .product-card--out-of-stock .product-top-wraper::before {
    content: ''; display: block; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(163, 160, 160, 0.6); z-index: 1;
  }
  .product-card--out-of-stock .image-wraper .img { opacity: 0.9; }
  .product-card--out-of-stock .title-product { color: #999; }
</style><div class="product-card " id="product-card-el--9893862801698"><span class="product-card__badge"><span>JUST LAUNCHED</span></span>

    <a href="/products/cookies-cream-protein-wafers-pack-of-10" class="product-top-wraper">
      <div class="pack-tag-line"></div>
      <div class="image-wraper">
        <img src="//superyou.in/cdn/shop/files/1_2.jpg?v=1761730125" alt="Cookies &amp; Cream Protein Wafers - Pack of 10" class="img" loading="lazy">
      </div>
    </a>

    <div class="productbottom-wrapper">
      <div class="review-rating">
          <div class="rating-wrapper">
            <div class="rating" role="img" aria-label="Rating details">
              <span aria-hidden="true" class="rating-star" style="--percent: 100.0%;"></span>
            </div>
            <p class="rating-text caption"><span aria-hidden="true">5.0 / 5.0</span></p>
            <p class="rating-count caption"><span aria-hidden="true">| 17 Reviews</span></p>
          </div></div><a href="/products/cookies-cream-protein-wafers-pack-of-10" class="title-product" id="product-title--9893862801698">Cookies & Cream Protein Wafers - Pack of 10</a>

      <a href="/products/cookies-cream-protein-wafers-pack-of-10" class="title-tag-line">
        A Classic Treat, Packed with Protein Power
      </a><div class="price-product" id="price-product--9893862801698">
<span class="compate-price" id="compare-price--9893862801698">₹550</span>
          <span class="discounted-price" id="discounted-price--9893862801698">₹449/-</span>
          <span class="discount-percentage" id="discount-percentage--9893862801698">-18% OFF</span>
        
      </div><div class="atc-btn-wrapper">
        
        <div class="quick-add no-js-hidden"><product-form data-section-id="template--26131582583074__product_section_7pdHAY"><form method="post" action="/cart/add" id="quick-add-9893862801698" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="50472326201634" class="product-variant-id">
                  <input type="hidden" name="quantity" value="1" id="product-quantity--9893862801698">
                  <div class="atc-hover">
                    <div class="div-hover"></div>
                    <button id="quick-add-9893862801698-submit" type="submit" name="add" class="quick-add__submit button button--full-width button--secondary">
                      <span>Add to cart</span>

<div class="loading__spinner hidden">
  <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66"><circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path"/></svg>

</div>
</button>
                  </div><input type="hidden" name="product-id" value="9893862801698" /><input type="hidden" name="section-id" value="template--26131582583074__product_section_7pdHAY" /></form></product-form></div>
      </div> </div> </div><script>
  if (typeof initPackSelectors === 'undefined') {
    function initPackSelectors() {
      const wrappers = document.querySelectorAll('.pack-selector-wrapper');
      wrappers.forEach(wrapper => {
        const cardId = wrapper.dataset.cardId;
        const buttons = wrapper.querySelectorAll('.pack-selector-btn');
        buttons.forEach(button => {
          if (button.dataset.listenerAttached) return;
          button.dataset.listenerAttached = true;
          button.addEventListener('click', () => {
            const data = button.dataset;
            buttons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            
            const titleEl = document.querySelector(`#product-title-${cardId}`);
            if (titleEl) titleEl.textContent = data.title;
            
            const mrpEl = document.querySelector(`#old-mrp-${cardId}`);
            if (mrpEl) mrpEl.textContent = `Old MRP ${data.oldMrp}`;
            
            const qtyEl = document.querySelector(`#product-quantity-${cardId}`);
            if (qtyEl) qtyEl.value = data.quantity;
            
            updatePrice(cardId, data.price, data.comparePrice);
          });
        });
      });
    }

    function updatePrice(cardId, price, comparePrice) {
      const priceContainer = document.querySelector(`#price-product-${cardId}`);
      if (!priceContainer) return;
      price = parseInt(price, 10);
      comparePrice = parseInt(comparePrice, 10);
      let html = '';
      if (comparePrice > price) {
        const discountPercentage = Math.round(((comparePrice - price) * 100) / comparePrice);
        html = `<span class="compate-price">${formatMoney(comparePrice)}</span><span class="discounted-price">${formatMoney(price)}/-</span><span class="discount-percentage">-${discountPercentage}% OFF</span>`;
      } else {
        html = `<span class="regular-price">${formatMoney(price)}/-</span>`;
      }
      priceContainer.innerHTML = html;
    }

    function formatMoney(cents) {
      let p = (cents / 100).toFixed(2);
      if (p.endsWith('.00')) p = p.slice(0, -3);
      return `₹${new Intl.NumberFormat('en-IN').format(p)}`;
    }

    document.addEventListener('DOMContentLoaded', initPackSelectors);
    document.addEventListener('shopify:section:load', initPackSelectors);
  }
</script>
                    </div>
                  


                    
                    <div class="swiper-slide product-slide  hide-on-mobile">
                       
<link href="//superyou.in/cdn/shop/t/51/assets/component-rating.css?v=61607815681206498061766474564" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/component-volume-pricing.css?v=81475673220178626351766474567" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/component-price.css?v=101019534186928093711766474562" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/quick-order-list.css?v=83761384229492353061766474617" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/quantity-popover.css?v=129068967981937647381766474615" rel="stylesheet" type="text/css" media="all" />
<link href="//superyou.in/cdn/shop/t/51/assets/quick-add.css?v=66647833350618835731766474616" rel="stylesheet" type="text/css" media="all" />
  <script src="//superyou.in/cdn/shop/t/51/assets/product-form.js?v=105601561156512401221766474613" defer="defer"></script><style>
   @media only screen and (max-width: 767px) {
     .rating-star:before { font-size: 14px !important; }
     .rating-wrapper { align-items: flex-start; }
     .rating-count { letter-spacing: normal; }
     p.rating-count.caption { line-height: 130%; }
     .product-card--out-of-stock .quick-add__submit { font-size: 1rem !important; }
     .product-card__promo-tag { font-size: 6px; }
   }
  .product-card--out-of-stock .product-top-wraper { position: relative; }
  .product-card--out-of-stock .product-top-wraper::before {
    content: ''; display: block; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(163, 160, 160, 0.6); z-index: 1;
  }
  .product-card--out-of-stock .image-wraper .img { opacity: 0.9; }
  .product-card--out-of-stock .title-product { color: #999; }
</style><div class="product-card " id="product-card-el--9487398076706">

    <a href="/products/chocolate-protein-wafer" class="product-top-wraper">
      <div class="pack-tag-line">PACK OF 10</div>
      <div class="image-wraper">
        <img src="//superyou.in/cdn/shop/files/WebsiteProductcard__1.jpg?v=1742214015" alt="Chocolate Protein Wafer - Pack of 10" class="img" loading="lazy">
      </div>
    </a>

    <div class="productbottom-wrapper">
      <div class="review-rating">
          <div class="rating-wrapper">
            <div class="rating" role="img" aria-label="Rating details">
              <span aria-hidden="true" class="rating-star" style="--percent: 94.2%;"></span>
            </div>
            <p class="rating-text caption"><span aria-hidden="true">4.71 / 5.0</span></p>
            <p class="rating-count caption"><span aria-hidden="true">| 106 Reviews</span></p>
          </div></div><a href="/products/chocolate-protein-wafer" class="title-product" id="product-title--9487398076706">Chocolate Protein Wafer - Pack of 10</a>

      <a href="/products/chocolate-protein-wafer" class="title-tag-line">
        A Classic Treat, Packed with Protein Power
      </a><div class="price-product" id="price-product--9487398076706">
<span class="compate-price" id="compare-price--9487398076706">₹550</span>
          <span class="discounted-price" id="discounted-price--9487398076706">₹449/-</span>
          <span class="discount-percentage" id="discount-percentage--9487398076706">-18% OFF</span>
        
      </div><div class="atc-btn-wrapper">
        
        <div class="quick-add no-js-hidden"><product-form data-section-id="template--26131582583074__product_section_7pdHAY"><form method="post" action="/cart/add" id="quick-add-9487398076706" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="49160239776034" class="product-variant-id">
                  <input type="hidden" name="quantity" value="1" id="product-quantity--9487398076706">
                  <div class="atc-hover">
                    <div class="div-hover"></div>
                    <button id="quick-add-9487398076706-submit" type="submit" name="add" class="quick-add__submit button button--full-width button--secondary">
                      <span>Add to cart</span>

<div class="loading__spinner hidden">
  <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66"><circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path"/></svg>

</div>
</button>
                  </div><input type="hidden" name="product-id" value="9487398076706" /><input type="hidden" name="section-id" value="template--26131582583074__product_section_7pdHAY" /></form></product-form></div>
      </div> </div> </div><script>
  if (typeof initPackSelectors === 'undefined') {
    function initPackSelectors() {
      const wrappers = document.querySelectorAll('.pack-selector-wrapper');
      wrappers.forEach(wrapper => {
        const cardId = wrapper.dataset.cardId;
        const buttons = wrapper.querySelectorAll('.pack-selector-btn');
        buttons.forEach(button => {
          if (button.dataset.listenerAttached) return;
          button.dataset.listenerAttached = true;
          button.addEventListener('click', () => {
            const data = button.dataset;
            buttons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            
            const titleEl = document.querySelector(`#product-title-${cardId}`);
            if (titleEl) titleEl.textContent = data.title;
            
            const mrpEl = document.querySelector(`#old-mrp-${cardId}`);
            if (mrpEl) mrpEl.textContent = `Old MRP ${data.oldMrp}`;
            
            const qtyEl = document.querySelector(`#product-quantity-${cardId}`);
            if (qtyEl) qtyEl.value = data.quantity;
            
            updatePrice(cardId, data.price, data.comparePrice);
          });
        });
      });
    }

    function updatePrice(cardId, price, comparePrice) {
      const priceContainer = document.querySelector(`#price-product-${cardId}`);
      if (!priceContainer) return;
      price = parseInt(price, 10);
      comparePrice = parseInt(comparePrice, 10);
      let html = '';
      if (comparePrice > price) {
        const discountPercentage = Math.round(((comparePrice - price) * 100) / comparePrice);
        html = `<span class="compate-price">${formatMoney(comparePrice)}</span><span class="discounted-price">${formatMoney(price)}/-</span><span class="discount-percentage">-${discountPercentage}% OFF</span>`;
      } else {
        html = `<span class="regular-price">${formatMoney(price)}/-</span>`;
      }
      priceContainer.innerHTML = html;
    }

    function formatMoney(cents) {
      let p = (cents / 100).toFixed(2);
      if (p.endsWith('.00')) p = p.slice(0, -3);
      return `₹${new Intl.NumberFormat('en-IN').format(p)}`;
    }

    document.addEventListener('DOMContentLoaded', initPackSelectors);
    document.addEventListener('shopify:section:load', initPackSelectors);
  }
</script>
                    </div>
                  


                    
                    <div class="swiper-slide product-slide  hide-on-mobile">
                       
<link href="//superyou.in/cdn/shop/t/51/assets/component-rating.css?v=61607815681206498061766474564" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/component-volume-pricing.css?v=81475673220178626351766474567" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/component-price.css?v=101019534186928093711766474562" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/quick-order-list.css?v=83761384229492353061766474617" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/quantity-popover.css?v=129068967981937647381766474615" rel="stylesheet" type="text/css" media="all" />
<link href="//superyou.in/cdn/shop/t/51/assets/quick-add.css?v=66647833350618835731766474616" rel="stylesheet" type="text/css" media="all" />
  <script src="//superyou.in/cdn/shop/t/51/assets/product-form.js?v=105601561156512401221766474613" defer="defer"></script><style>
   @media only screen and (max-width: 767px) {
     .rating-star:before { font-size: 14px !important; }
     .rating-wrapper { align-items: flex-start; }
     .rating-count { letter-spacing: normal; }
     p.rating-count.caption { line-height: 130%; }
     .product-card--out-of-stock .quick-add__submit { font-size: 1rem !important; }
     .product-card__promo-tag { font-size: 6px; }
   }
  .product-card--out-of-stock .product-top-wraper { position: relative; }
  .product-card--out-of-stock .product-top-wraper::before {
    content: ''; display: block; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(163, 160, 160, 0.6); z-index: 1;
  }
  .product-card--out-of-stock .image-wraper .img { opacity: 0.9; }
  .product-card--out-of-stock .title-product { color: #999; }
</style><div class="product-card " id="product-card-el--9487397912866">

    <a href="/products/strawberry-creme-protein-wafer" class="product-top-wraper">
      <div class="pack-tag-line">PACK OF 10</div>
      <div class="image-wraper">
        <img src="//superyou.in/cdn/shop/files/WebsiteProductcard.jpg?v=1742213791" alt="Strawberry Crème Protein Wafer — Pack of 10" class="img" loading="lazy">
      </div>
    </a>

    <div class="productbottom-wrapper">
      <div class="review-rating">
          <div class="rating-wrapper">
            <div class="rating" role="img" aria-label="Rating details">
              <span aria-hidden="true" class="rating-star" style="--percent: 92.4%;"></span>
            </div>
            <p class="rating-text caption"><span aria-hidden="true">4.62 / 5.0</span></p>
            <p class="rating-count caption"><span aria-hidden="true">| 70 Reviews</span></p>
          </div></div><a href="/products/strawberry-creme-protein-wafer" class="title-product" id="product-title--9487397912866">Strawberry Crème Protein Wafer — Pack of 10</a>

      <a href="/products/strawberry-creme-protein-wafer" class="title-tag-line">
        A Berry-Licious Wafer with a Protein Punch
      </a><div class="price-product" id="price-product--9487397912866">
<span class="compate-price" id="compare-price--9487397912866">₹550</span>
          <span class="discounted-price" id="discounted-price--9487397912866">₹449/-</span>
          <span class="discount-percentage" id="discount-percentage--9487397912866">-18% OFF</span>
        
      </div><div class="atc-btn-wrapper">
        
        <div class="quick-add no-js-hidden"><product-form data-section-id="template--26131582583074__product_section_7pdHAY"><form method="post" action="/cart/add" id="quick-add-9487397912866" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="49180922315042" class="product-variant-id">
                  <input type="hidden" name="quantity" value="1" id="product-quantity--9487397912866">
                  <div class="atc-hover">
                    <div class="div-hover"></div>
                    <button id="quick-add-9487397912866-submit" type="submit" name="add" class="quick-add__submit button button--full-width button--secondary">
                      <span>Add to cart</span>

<div class="loading__spinner hidden">
  <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66"><circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path"/></svg>

</div>
</button>
                  </div><input type="hidden" name="product-id" value="9487397912866" /><input type="hidden" name="section-id" value="template--26131582583074__product_section_7pdHAY" /></form></product-form></div>
      </div> </div> </div><script>
  if (typeof initPackSelectors === 'undefined') {
    function initPackSelectors() {
      const wrappers = document.querySelectorAll('.pack-selector-wrapper');
      wrappers.forEach(wrapper => {
        const cardId = wrapper.dataset.cardId;
        const buttons = wrapper.querySelectorAll('.pack-selector-btn');
        buttons.forEach(button => {
          if (button.dataset.listenerAttached) return;
          button.dataset.listenerAttached = true;
          button.addEventListener('click', () => {
            const data = button.dataset;
            buttons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            
            const titleEl = document.querySelector(`#product-title-${cardId}`);
            if (titleEl) titleEl.textContent = data.title;
            
            const mrpEl = document.querySelector(`#old-mrp-${cardId}`);
            if (mrpEl) mrpEl.textContent = `Old MRP ${data.oldMrp}`;
            
            const qtyEl = document.querySelector(`#product-quantity-${cardId}`);
            if (qtyEl) qtyEl.value = data.quantity;
            
            updatePrice(cardId, data.price, data.comparePrice);
          });
        });
      });
    }

    function updatePrice(cardId, price, comparePrice) {
      const priceContainer = document.querySelector(`#price-product-${cardId}`);
      if (!priceContainer) return;
      price = parseInt(price, 10);
      comparePrice = parseInt(comparePrice, 10);
      let html = '';
      if (comparePrice > price) {
        const discountPercentage = Math.round(((comparePrice - price) * 100) / comparePrice);
        html = `<span class="compate-price">${formatMoney(comparePrice)}</span><span class="discounted-price">${formatMoney(price)}/-</span><span class="discount-percentage">-${discountPercentage}% OFF</span>`;
      } else {
        html = `<span class="regular-price">${formatMoney(price)}/-</span>`;
      }
      priceContainer.innerHTML = html;
    }

    function formatMoney(cents) {
      let p = (cents / 100).toFixed(2);
      if (p.endsWith('.00')) p = p.slice(0, -3);
      return `₹${new Intl.NumberFormat('en-IN').format(p)}`;
    }

    document.addEventListener('DOMContentLoaded', initPackSelectors);
    document.addEventListener('shopify:section:load', initPackSelectors);
  }
</script>
                    </div>
                  


                    
                    <div class="swiper-slide product-slide  hide-on-mobile">
                       
<link href="//superyou.in/cdn/shop/t/51/assets/component-rating.css?v=61607815681206498061766474564" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/component-volume-pricing.css?v=81475673220178626351766474567" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/component-price.css?v=101019534186928093711766474562" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/quick-order-list.css?v=83761384229492353061766474617" rel="stylesheet" type="text/css" media="all" />
  <link href="//superyou.in/cdn/shop/t/51/assets/quantity-popover.css?v=129068967981937647381766474615" rel="stylesheet" type="text/css" media="all" />
<link href="//superyou.in/cdn/shop/t/51/assets/quick-add.css?v=66647833350618835731766474616" rel="stylesheet" type="text/css" media="all" />
  <script src="//superyou.in/cdn/shop/t/51/assets/product-form.js?v=105601561156512401221766474613" defer="defer"></script><style>
   @media only screen and (max-width: 767px) {
     .rating-star:before { font-size: 14px !important; }
     .rating-wrapper { align-items: flex-start; }
     .rating-count { letter-spacing: normal; }
     p.rating-count.caption { line-height: 130%; }
     .product-card--out-of-stock .quick-add__submit { font-size: 1rem !important; }
     .product-card__promo-tag { font-size: 6px; }
   }
  .product-card--out-of-stock .product-top-wraper { position: relative; }
  .product-card--out-of-stock .product-top-wraper::before {
    content: ''; display: block; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(163, 160, 160, 0.6); z-index: 1;
  }
  .product-card--out-of-stock .image-wraper .img { opacity: 0.9; }
  .product-card--out-of-stock .title-product { color: #999; }
</style><div class="product-card " id="product-card-el--9864493269282">

    <a href="/products/choco-hazelnut-and-cookies-cream-pack-of-10-each" class="product-top-wraper">
      <div class="pack-tag-line"></div>
      <div class="image-wraper">
        <img src="//superyou.in/cdn/shop/files/1B.jpg?v=1759148198" alt="Mini Choco Hazelnut + Cookies &amp; Cream" class="img" loading="lazy">
      </div>
    </a>

    <div class="productbottom-wrapper">
      <div class="review-rating">
          <div class="rating-wrapper">
            <div class="rating" role="img" aria-label="Rating details">
              <span aria-hidden="true" class="rating-star" style="--percent: 100.0%;"></span>
            </div>
            <p class="rating-text caption"><span aria-hidden="true">5.0 / 5.0</span></p>
            <p class="rating-count caption"><span aria-hidden="true">| 6 Reviews</span></p>
          </div></div><a href="/products/choco-hazelnut-and-cookies-cream-pack-of-10-each" class="title-product" id="product-title--9864493269282">Mini Choco Hazelnut + Cookies & Cream</a>

      <a href="/products/choco-hazelnut-and-cookies-cream-pack-of-10-each" class="title-tag-line">
        A Classic Treat, Packed with Protein Power
      </a><div class="price-product" id="price-product--9864493269282">
<span class="compate-price" id="compare-price--9864493269282">₹600</span>
          <span class="discounted-price" id="discounted-price--9864493269282">₹549/-</span>
          <span class="discount-percentage" id="discount-percentage--9864493269282">-9% OFF</span>
        
      </div><div class="atc-btn-wrapper">
        
        <div class="quick-add no-js-hidden"><product-form data-section-id="template--26131582583074__product_section_7pdHAY"><form method="post" action="/cart/add" id="quick-add-9864493269282" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="50377507438882" class="product-variant-id">
                  <input type="hidden" name="quantity" value="1" id="product-quantity--9864493269282">
                  <div class="atc-hover">
                    <div class="div-hover"></div>
                    <button id="quick-add-9864493269282-submit" type="submit" name="add" class="quick-add__submit button button--full-width button--secondary">
                      <span>Add to cart</span>

<div class="loading__spinner hidden">
  <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66"><circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path"/></svg>

</div>
</button>
                  </div><input type="hidden" name="product-id" value="9864493269282" /><input type="hidden" name="section-id" value="template--26131582583074__product_section_7pdHAY" /></form></product-form></div>
      </div> </div> </div><script>
  if (typeof initPackSelectors === 'undefined') {
    function initPackSelectors() {
      const wrappers = document.querySelectorAll('.pack-selector-wrapper');
      wrappers.forEach(wrapper => {
        const cardId = wrapper.dataset.cardId;
        const buttons = wrapper.querySelectorAll('.pack-selector-btn');
        buttons.forEach(button => {
          if (button.dataset.listenerAttached) return;
          button.dataset.listenerAttached = true;
          button.addEventListener('click', () => {
            const data = button.dataset;
            buttons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            
            const titleEl = document.querySelector(`#product-title-${cardId}`);
            if (titleEl) titleEl.textContent = data.title;
            
            const mrpEl = document.querySelector(`#old-mrp-${cardId}`);
            if (mrpEl) mrpEl.textContent = `Old MRP ${data.oldMrp}`;
            
            const qtyEl = document.querySelector(`#product-quantity-${cardId}`);
            if (qtyEl) qtyEl.value = data.quantity;
            
            updatePrice(cardId, data.price, data.comparePrice);
          });
        });
      });
    }

    function updatePrice(cardId, price, comparePrice) {
      const priceContainer = document.querySelector(`#price-product-${cardId}`);
      if (!priceContainer) return;
      price = parseInt(price, 10);
      comparePrice = parseInt(comparePrice, 10);
      let html = '';
      if (comparePrice > price) {
        const discountPercentage = Math.round(((comparePrice - price) * 100) / comparePrice);
        html = `<span class="compate-price">${formatMoney(comparePrice)}</span><span class="discounted-price">${formatMoney(price)}/-</span><span class="discount-percentage">-${discountPercentage}% OFF</span>`;
      } else {
        html = `<span class="regular-price">${formatMoney(price)}/-</span>`;
      }
      priceContainer.innerHTML = html;
    }

    function formatMoney(cents) {
      let p = (cents / 100).toFixed(2);
      if (p.endsWith('.00')) p = p.slice(0, -3);
      return `₹${new Intl.NumberFormat('en-IN').format(p)}`;
    }

    document.addEventListener('DOMContentLoaded', initPackSelectors);
    document.addEventListener('shopify:section:load', initPackSelectors);
  }
</script>
                    </div>
                  

            </div>
          <div class="pro-swiper-pagination"></div>
        </div>

      
        
          <div fade-in class="shop-link-wrapper hide-on-mobile">
              <div class="atc-hover">
              <div class="div-hover"></div>
              <a class="shop-all-btn" href="/collections/all">Shop All</a>
              </div>
          </div>
        
        <div fade-in class="shop-link-wrapper hideondesk">
            <div class="atc-hover mobile-explore-trigger">
            <div class="div-hover"></div>
            <div class="shop-all-btn">Shop all</div>
            </div>
        </div>
      
    </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const sectionMobile = document.getElementById('product-slider-section-template--26131582583074__product_section_7pdHAY');
    if (window.innerWidth <= 767 && sectionMobile) {
      // Use explicit listener on the wrapper block to capture the interaction correctly
      const mobileTrigger = sectionMobile.querySelector('.mobile-explore-trigger');
      
      if (mobileTrigger) {
        mobileTrigger.addEventListener('click', function (e) {
          e.preventDefault();
          e.stopPropagation();
          
          const hiddenSlides = sectionMobile.querySelectorAll('.product-slide');
          hiddenSlides.forEach(slide => {
            // Remove helper class and force view setting via style injection
            slide.classList.remove('hide-on-mobile');
            slide.style.setProperty('display', 'flex', 'important');
          });
          
          // Fully drop parent wrapper visibility cleanly
          const wrapper = mobileTrigger.closest('.shop-link-wrapper');
          if(wrapper) wrapper.style.setProperty('display', 'none', 'important');
        });
      }
    }
  });
</script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const section = document.getElementById('product-slider-section-template--26131582583074__product_section_7pdHAY');
    if (!section) return;
    
    const swiperContainer = section.querySelector('.swiper[data-section-id="template--26131582583074__product_section_7pdHAY"]');
    if (!swiperContainer) return;

    let checkSwiper = setInterval(() => {
      if (typeof Swiper !== 'undefined') {
        clearInterval(checkSwiper);
        initializeHoverSlider();
      }
    }, 50);

    function initializeHoverSlider() {
      if (swiperContainer.swiper) {
        swiperContainer.swiper.destroy(true, true);
      }

      if (window.innerWidth >= 768) {
        const swiper = new Swiper(swiperContainer, {
          loop: false,    
          rewind: true,   
          freeMode: false,
          watchSlidesProgress: true,
          grabCursor: true,
          
          mousewheel: {
            forceToAxis: true,
            sensitivity: 1,
          },

          navigation: {
            nextEl: section.querySelector('.next2'),
            prevEl: section.querySelector('.prev2'),
          },
          pagination: {
            el: section.querySelector('.pro-swiper-pagination'),
            clickable: true,
          },
          breakpoints: {
            768: { slidesPerView: 2, spaceBetween: 20 },
            992: { slidesPerView: 3, spaceBetween: 30 },
            1200: { slidesPerView: 4, spaceBetween: 30 },
          }
        });
      }
    }
  });
</script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    try {
      const sectionElement = document.getElementById('product-slider-section-template--26131582583074__product_section_7pdHAY');
      if (!sectionElement) return;

      const swiperWrapper = sectionElement.querySelector('.product-swiper-wrapper');
      if (!swiperWrapper) return;

      const slides = swiperWrapper.querySelectorAll('.swiper-slide');
      
      slides.forEach(slide => {
        const isOutOfStock = slide.querySelector('.product-card--out-of-stock');
        if (isOutOfStock) {
          swiperWrapper.appendChild(slide);
        }
      });

      if (window.innerWidth >= 768) {
        const swiperContainer = sectionElement.querySelector('.swiper[data-section-id="template--26131582583074__product_section_7pdHAY"]');
        let checkSwiperInterval = setInterval(() => {
          if (swiperContainer && swiperContainer.swiper) {
            clearInterval(checkSwiperInterval);
            swiperContainer.swiper.update(); 
          }
        }, 150);

        setTimeout(() => clearInterval(checkSwiperInterval), 3000);
      }
    } catch (e) {
      console.error('Error sorting OOS products:', e);
    }
  });
</script>

<style> @media only screen and (max-width: 760px) {#shopify-section-template--26131582583074__product_section_7pdHAY .quick-add__submit {font-size: 14px; } #shopify-section-template--26131582583074__product_section_7pdHAY .h2wrap .section-title {line-height: 1.3em !important; } #shopify-section-template--26131582583074__product_section_7pdHAY h2 {font-size: 28px !important; }} #shopify-section-template--26131582583074__product_section_7pdHAY .quick-add__submit {background: #ef140b !important; border: none !important; border-radius: 0 !important; color: #ffffff !important;} </style></div><div id="shopify-section-template--26131582583074__simple_title_9UHHyP" class="shopify-section index-section SimpleTitle-section"><style data-shopify>
#shopify-section-template--26131582583074__simple_title_9UHHyP {
padding-top: 72px;
padding-bottom: 40px;


color: #151515;

}
h2.section-title {
    display: inline-flex;
    }
    #shopify-section-template--26131582583074__simple_title_9UHHyP  .title-wrappers {
        display: flex;
            flex-direction: row;
                justify-content: center;
                    gap: 8px;
                    }
                    
                    #shopify-section-template--26131582583074__simple_title_9UHHyP  .title-wrappers h2.section-title {
                        margin: 0;
                        }
                        @media only screen and (max-width: 767px) {
                        #shopify-section-template--26131582583074__simple_title_9UHHyP {
                        padding-top: 32px;
                        padding-bottom: 16px;
                        }
                        #shopify-section-template--26131582583074__simple_title_9UHHyP  .title-wrappers {
                            display: flex;
                                flex-direction: column;
                                    justify-content: center;
                                        gap: 0px;
                                        }
                                        }
                                        </style>
                                        
                                        <div class="relative reel-title">
                                            <div class="container">
                                                    
                                                            <div fade-in class="title-wrappers">
                                                                      
                                                                                                                                  
                                                                                                                                              <h2 gsap-text-anim class="section-title">
                                                                                                                                                              Watch SuperYou
                                                                                                                                                                          </h2>
                                                                                                                                                                                    
                                                                                                                                                                                               
                                                                                                                                                                                                           <h2 gsap-text-anim class="section-title">
                                                                                                                                                                                                                           Take Over
                                                                                                                                                                                                                                       </h2>
                                                                                                                                                                                                                                                 
                                                                                                                                                                                                                                                            
                                                                                                                                                                                                                                                                                                                                                          </div>
                                                                                                                                                                                                                                                                                                                                                                  
                                                                                                                                                                                                                                                                                                                                                                      </div>
                                                                                                                                                                                                                                                                                                                                                                      </div>
                                                                                                                                                                                                                                                                                                                                                                      
                                                                                                                                                                                                                                                                                                                                                                      
                                                                                                                                                                                                                                                                                                                                                                      </div><section id="shopify-section-template--26131582583074__custom_liquid_76c77M" class="shopify-section section"><style data-shopify>.section-template--26131582583074__custom_liquid_76c77M-padding {
    padding-top: calc(0px * 0.75);
    padding-bottom: calc(60px  * 0.75);
  }

  @media screen and (min-width: 750px) {
    .section-template--26131582583074__custom_liquid_76c77M-padding {
      padding-top: 0px;
      padding-bottom: 60px;
    }
  }</style><div class="color-scheme-1 gradient">
  <div class="section-template--26131582583074__custom_liquid_76c77M-padding">
    <script type="module" defer src="https://video.lively.li/LIVELY_SF_FEED.js"></script>

<div class="render_lively_html_content" 
     brand_id="81cba058b5" 
     flow="w3rt5" 
     wid_id="05a8425084" 
     style="z-index: 1; position: relative;">
</div>

<style>
  p.lively_sf_header {
    color: #151515 !important;
    font-family: antoniobold !important;
    font-size: 70px !important;
    display: none !important;
  }

  /* Ensures the container doesn't overlap header navigation */
  .render_lively_html_content {
    margin-top: 10px; 
    clear: both;
  }
</style>
  </div>
</div>


</section><div id="shopify-section-template--26131582583074__marquee_enpqGR" class="shopify-section index-section Marquee-section"><style data-shopify>
  #shopify-section-template--26131582583074__marquee_enpqGR {
    padding-top: 0px;
    padding-bottom: 0px;
    background-color: #ef1400;
    color: #ffffff;
    font-family: 'Helvetica Now Variable', -apple-system, BlinkMacSystemFont, sans-serif !important;
    overflow: hidden;
    line-height: 1.0;
  }

  /* Hardware-accelerated, butter-smooth slider layout tracking */
  #shopify-section-template--26131582583074__marquee_enpqGR .marquee-icon {
    display: flex;
    overflow: hidden;
    white-space: nowrap;
    align-items: center;
    width: 100%;
  }

  #shopify-section-template--26131582583074__marquee_enpqGR .marquee-icon-content {
    display: flex;
    align-items: center;
    flex-shrink: 0;
    will-change: transform;
    /* Optimized linear looping mechanics (Increased speed from standard baseline configs) */
    animation: marqueeHorizontal-template--26131582583074__marquee_enpqGR 18s linear infinite;
  }

  #shopify-section-template--26131582583074__marquee_enpqGR .content-wrapper {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 0 28px;
    border-right: 1px solid #000000;
    box-sizing: border-box;
    height: 1.3em; /* Flat geometric baseline box normalization */
  }

  /* Clean up image scale parameters to sit absolutely flush with the tracking line */
  #shopify-section-template--26131582583074__marquee_enpqGR .marquee-image {
    height: 1.0em;
    width: auto;
    object-fit: contain;
    margin-right: 12px;
    display: inline-block;
    vertical-align: middle;
  }

  /* ==========================================================================
     EXACT RULE A - COMPRESSED CONDENSED HEADLINE SPECIFICATION
     ========================================================================== */
  #shopify-section-template--26131582583074__marquee_enpqGR .content-text {
    font-family: 'Helvetica Now Variable', -apple-system, BlinkMacSystemFont, sans-serif !important;
    font-size: 20px !important;
    font-weight: 800 !important;       /* Bold/Black prominent display impact axis */
    font-stretch: 75% !important;     /* Tight variable width engineering configuration */
    text-transform: uppercase !important;
    line-height: 0.9 !important;       /* Brand Guideline Exact: Leading 90% */
    letter-spacing: 0px !important;    /* Brand Guideline Exact: Tracking 0 */
    display: inline-block;
    vertical-align: middle;
  }

  /* High performance CSS rendering loops using 3D layers */
  @keyframes marqueeHorizontal-template--26131582583074__marquee_enpqGR {
    0% {
      transform: translate3d(0, 0, 0);
    }
    100% {
      transform: translate3d(-100%, 0, 0);
    }
  }

  @media only screen and (max-width: 767px) {
    #shopify-section-template--26131582583074__marquee_enpqGR {
      padding-top: 0px;
      padding-bottom: 0px;
    }
    #shopify-section-template--26131582583074__marquee_enpqGR .marquee-icon-content {
      /* Slightly adjusted speed profile on mobile view constraints to keep elements perfectly legible */
      animation: marqueeHorizontal-template--26131582583074__marquee_enpqGR 14s linear infinite;
    }
    #shopify-section-template--26131582583074__marquee_enpqGR .content-wrapper {
      padding: 0 20px;
      height: 1.2em;
    }
    #shopify-section-template--26131582583074__marquee_enpqGR .content-text {
      font-size: 15px !important;
    }
    #shopify-section-template--26131582583074__marquee_enpqGR .marquee-image {
      height: 0.9em;
      margin-right: 8px;
    }
  }
</style>

<div class="relative marquee-banner">
    <div class="container">
        <div fade-in class="marquee-icon">
            <div class="marquee-icon-content">
                
                  
                    <div class="content-wrapper">
                        
                        <div class="content-text">190 kCal per 40g Wafer</div>
                    </div>
                  
                
                  
                    <div class="content-wrapper">
                        
                        <div class="content-text">10g Protein</div>
                    </div>
                  
                
                  
                    <div class="content-wrapper">
                        
                        <div class="content-text">No Palm Oil</div>
                    </div>
                  
                
                  
                    <div class="content-wrapper">
                        
                        <div class="content-text">No Added Sugar</div>
                    </div>
                  
                
            </div>
            <div class="marquee-icon-content" aria-hidden="true">
                
                  
                    <div class="content-wrapper">
                        
                        <div class="content-text">190 kCal per 40g Wafer</div>
                    </div>
                  
                
                  
                    <div class="content-wrapper">
                        
                        <div class="content-text">10g Protein</div>
                    </div>
                  
                
                  
                    <div class="content-wrapper">
                        
                        <div class="content-text">No Palm Oil</div>
                    </div>
                  
                
                  
                    <div class="content-wrapper">
                        
                        <div class="content-text">No Added Sugar</div>
                    </div>
                  
                
            </div>
            <div class="marquee-icon-content" aria-hidden="true">
                
                  
                    <div class="content-wrapper">
                        
                        <div class="content-text">190 kCal per 40g Wafer</div>
                    </div>
                  
                
                  
                    <div class="content-wrapper">
                        
                        <div class="content-text">10g Protein</div>
                    </div>
                  
                
                  
                    <div class="content-wrapper">
                        
                        <div class="content-text">No Palm Oil</div>
                    </div>
                  
                
                  
                    <div class="content-wrapper">
                        
                        <div class="content-text">No Added Sugar</div>
                    </div>
                  
                
            </div>
        </div>
    </div>
</div>

<style> #shopify-section-template--26131582583074__marquee_enpqGR .content-text {text-transform: none !important;} </style></div><section id="shopify-section-template--26131582583074__17764121227c0e0b30" class="shopify-section section"><div class="page-width scroll-trigger animate--slide-in"><div id="shopify-block-AR1FUemZ1TmFFSXU5O__rebuy_personalization_engine_rebuy_widget_dktnxk" class="shopify-block shopify-app-block">
  <div
    data-rebuy-id="283707"
    data-rebuy-shopify-product-ids=""
    >
  </div>


</div>
</div>


</section><div id="shopify-section-template--26131582583074__updated_about_video_player_C3mWzb" class="shopify-section"><style data-shopify>.video-section-template--26131582583074__updated_about_video_player_C3mWzb {
    padding: 80px 0;
    background-color: #ffffff;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    overflow: hidden;
  }

  .video-wrapper-template--26131582583074__updated_about_video_player_C3mWzb {
    width: 90%;
    /* Exact XD Specs: 1432px width and 806px height */
    max-width: 1432px;
    height: 806px;
    position: relative;
    border-radius: 20px; /* Optional: adds a crisp edge to the player */
    background-color: #000;
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    overflow: hidden;
  }

  .video-wrapper-template--26131582583074__updated_about_video_player_C3mWzb iframe,
  .video-wrapper-template--26131582583074__updated_about_video_player_C3mWzb video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensures the high-impact visual fills the frame */
  }

  /* Responsive Scaling to prevent cutting on smaller monitors */
  @media (max-width: 1440px) {
    .video-wrapper-template--26131582583074__updated_about_video_player_C3mWzb {
      height: 56vw; /* Maintains a cinematic aspect ratio as screen shrinks */
    }
  }

  @media (max-width: 768px) {
    .video-section-template--26131582583074__updated_about_video_player_C3mWzb {
      padding: 40px 0;
    }
    .video-wrapper-template--26131582583074__updated_about_video_player_C3mWzb {
      width: 95%;
      height: 500px; /* Vertical impact for mobile */
    }
  }</style><section class="video-section-template--26131582583074__updated_about_video_player_C3mWzb" role="region" aria-label="Brand Video">
  <div class="video-wrapper-template--26131582583074__updated_about_video_player_C3mWzb"><video playsinline="playsinline" autoplay="autoplay" loop="loop" muted="muted" preload="metadata" poster="//superyou.in/cdn/shop/files/preview_images/3f4c4cc470de49cfb00d4310aa2bd55e.thumbnail.0000000000_small.jpg?v=1766485546"><source src="//superyou.in/cdn/shop/videos/c/vp/3f4c4cc470de49cfb00d4310aa2bd55e/3f4c4cc470de49cfb00d4310aa2bd55e.HD-720p-2.1Mbps-65710077.mp4?v=0" type="video/mp4"><img src="//superyou.in/cdn/shop/files/preview_images/3f4c4cc470de49cfb00d4310aa2bd55e.thumbnail.0000000000_small.jpg?v=1766485546"></video>
</div>
</section>

</div><section id="shopify-section-template--26131582583074__177641247315881c62" class="shopify-section section"><div class="page-width scroll-trigger animate--slide-in"><div id="shopify-block-AYitjZEdOV3ZXclh3W__rebuy_personalization_engine_rebuy_widget_QHGrMf" class="shopify-block shopify-app-block">
  <div
    data-rebuy-id="283706"
    data-rebuy-shopify-product-ids=""
    >
  </div>


</div>
</div>


</section><div id="shopify-section-template--26131582583074__faq_section_NQTPTe" class="shopify-section index-section faq-section">
<style data-shopify>
/* --- ORIGINAL STYLES (All Other Pages) --- */
    #shopify-section-template--26131582583074__faq_section_NQTPTe {
      padding-top: 0px;
      padding-bottom: 0px;
      
        background-color: #ffe6c8;
      
      
        color: #151515;
      
      overflow: hidden;
    }/* Global Mobile Padding (Applied to both modes) */
  @media only screen and (max-width: 767px) {
    #shopify-section-template--26131582583074__faq_section_NQTPTe {
      padding-top: 0px;
      padding-bottom: 0px;
    }
  }

</style>

<div class="relative faq-banner">
    <div class="container">
        <div class="fa-grid-wrapper">
            <div class="fa-left">
                
                <div fade-in class="title-wrappers">
                    <h2 gsap-text-anim class="celeb-review-title">
                        FREQUENTLY ASKED QUESTIONS
                    </h2>
                    
                    <div class="upper-jinx-wrapper">
                        <img src="//superyou.in/cdn/shop/files/Group_406.svg?v=1739943568" width="" height="" alt="Element" loading="lazy">
                        <div class="tag-wrapper">
                            
                        </div>
                    </div>
                    
                </div>
                
                <div class="faq-content-wrappers">
                    <div class="faq-block-wrapper">
                        
                        <div fade-in class="faq-block">
                            <div class="faq-title-block">
                                <div class="faq-question-block">Why did you use maida in your wafers?</div>
                                <svg class="faq-icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.0001 4.16699V15.8337M4.16675 10.0003H15.8334" stroke="currentcolor"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="faq-content-wrapper">
                                <div class="faq-content">We use just 2g of maida in a 40g wafer—that’s as little as a single bite of biscuit! We tested whole wheat (atta), but let’s be real: it tasted like a “healthy” chocolate bar (read: not fun). So, we found the sweet spot—light, crispy wafers that still deliver on taste. Plus, we’ve packed in 3g of dietary fibre for better digestion.</div>
                            </div>
                        </div>
                        
                        <div fade-in class="faq-block">
                            <div class="faq-title-block">
                                <div class="faq-question-block">Is fermented yeast protein actually good?</div>
                                <svg class="faq-icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.0001 4.16699V15.8337M4.16675 10.0003H15.8334" stroke="currentcolor"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="faq-content-wrapper">
                                <div class="faq-content">Absolutely! Fermented yeast protein is a complete protein with all 9 essential amino acids, a PDCAAS of 1.0/1.0 (just like whey), and zero allergens. It’s easier to digest, more sustainable, and helps you build and recover muscle, minus the dairy drama.</div>
                            </div>
                        </div>
                        
                        <div fade-in class="faq-block">
                            <div class="faq-title-block">
                                <div class="faq-question-block">How do you get the sweetness without added sugar?</div>
                                <svg class="faq-icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.0001 4.16699V15.8337M4.16675 10.0003H15.8334" stroke="currentcolor"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="faq-content-wrapper">
                                <div class="faq-content">We use Maltitol—a nature-identical sweetener found in corn starch. It has the same sweetness as sugar but with a super low GI (30-35), meaning no crazy sugar spikes. Just pure, satisfying sweetness without the crash!</div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div fade-in class="tag-line-bottom">
                    <div class="tag-lines">Can’t find your question? Find it by clicking here.</div>
                    <div class="contact-hover">
                        <a href="/pages/faqs" class="contact-btn">Explore All faqs</a>
                        <div class="div-hover"></div>
                    </div>
                </div>
            </div>
                                   
            <div fade-in class="fa-right">
                
                  
                <img class="ran-img" src="//superyou.in/cdn/shop/files/RS_review.jpg?v=1752561952" width="" height="" alt="Ranveer Singh" loading="lazy">
                
            </div>
                                      
        </div>

    </div>
</div>



<script>window.faqSchemaData.push({
        "question": "Why did you use maida in your wafers?",
        "answer": "We use just 2g of maida in a 40g wafer—that’s as little as a single bite of biscuit! We tested whole wheat (atta), but let’s be real: it tasted like a “healthy” chocolate bar (read: not fun). So, we found the sweet spot—light, crispy wafers that still deliver on taste. Plus, we’ve packed in 3g of dietary fibre for better digestion."
      });window.faqSchemaData.push({
        "question": "Is fermented yeast protein actually good?",
        "answer": "Absolutely! Fermented yeast protein is a complete protein with all 9 essential amino acids, a PDCAAS of 1.0\/1.0 (just like whey), and zero allergens. It’s easier to digest, more sustainable, and helps you build and recover muscle, minus the dairy drama."
      });window.faqSchemaData.push({
        "question": "How do you get the sweetness without added sugar?",
        "answer": "We use Maltitol—a nature-identical sweetener found in corn starch. It has the same sweetness as sugar but with a super low GI (30-35), meaning no crazy sugar spikes. Just pure, satisfying sweetness without the crash!"
      });</script></div><div id="shopify-section-template--26131582583074__blog_section_iVUt9y" class="shopify-section index-section Blog-section">
<style data-shopify>
  #shopify-section-template--26131582583074__blog_section_iVUt9y {
    padding-top: 72px;
    padding-bottom: 72px;
    
    
      color: #151515;
    
  }


  .blog-block-link {
    text-decoration: none;
    color: inherit;
    display: block;
    height: 100%;
  }
  .blog-block {
    height: 100%;
    display: flex;
    flex-direction: column;
  }
  .second-part {
    flex-grow: 1;
  }
  .tab-rich h2{
  
    font-size: 1.7rem;
    font-weight: 700;
    margin: 10px 0;
    text-align: left;
  }
  .tab-rich p {
   
    font-size: 1.2rem;
    opacity: 0.8;
  }
  /* */

  @media only screen and (max-width: 767px) {
    #shopify-section-template--26131582583074__blog_section_iVUt9y {
      padding-top: 40px;
      padding-bottom: 40px;
    }
  }
</style>



<div class="relative blog-banner">
    <div class="container">
        
        <h2 gsap-text-anim class="celeb-review-title"> READ Our latest blogs</h2>
        

        <div fade-in class="swiper blog-swiper">
            <div class="swiper-wrapper blog-swiper-wrapper"><div class="swiper-slide blog-swiper-slide">
                        
        
                        <a href="/blogs/the-protein-zone/fermented-yeast-protein-powder-vs-soy-protein-powder-the-plant-based-showdown" class="blog-block-link">
                            <div class="blog-block">
                                <div class="imag-wrapper"><img src="//superyou.in/cdn/shop/articles/Why_Traditional_Protein_Powders_6038f420-0019-428d-830f-01cb6d3c0e33.jpg?v=1773138474" 
                                           width="1700" 
                                           height="1120"
                                           alt="Fermented Yeast Protein Powder vs. Soy Protein Powder: The Plant-Based Showdown" 
                                           loading="lazy"
                                           class="img"></div>
                                <div class="second-part">
                                    <div class="tab-rich">
                                     
                                        
                                        <h2>Fermented Yeast Protein Powder vs. Soy Protein Powder: The Plant-Based Showdown</h2><p>From Soy to Science: Rethinking Plant-Based Protein
Plant-based protein has long been marketed as...</p></div>
                                </div>
                            </div>
                        </a>
                    </div><div class="swiper-slide blog-swiper-slide">
                        
        
                        <a href="/blogs/the-protein-zone/fermented-yeast-protein-powder-vs-whey-protein-what-s-better-for-your-body" class="blog-block-link">
                            <div class="blog-block">
                                <div class="imag-wrapper"><img src="//superyou.in/cdn/shop/articles/Fermented_Yeast_Protein_Powder_vs._Whey_Protein_What_s_Better_for_Your_Body.jpg?v=1765445613" 
                                           width="2976" 
                                           height="1962"
                                           alt="Fermented Yeast Protein Powder vs. Whey Protein" 
                                           loading="lazy"
                                           class="img"></div>
                                <div class="second-part">
                                    <div class="tab-rich">
                                     
                                        
                                        <h2>Fermented Yeast Protein Powder vs. Whey Protein: What’s Better for Your Body?</h2><p>For decades, whey protein has been the gold standard. It built the modern supplement aisle. It’s ...</p></div>
                                </div>
                            </div>
                        </a>
                    </div><div class="swiper-slide blog-swiper-slide">
                        
        
                        <a href="/blogs/the-protein-zone/the-truth-about-carbs-in-protein-what-most-brands-wont-tell-you" class="blog-block-link">
                            <div class="blog-block">
                                <div class="imag-wrapper"><img src="//superyou.in/cdn/shop/articles/6_-_The_Truth_About_Carbs_in_Protein_What_Most_Brands_Won_t_Tell_You_jpg.png?v=1765337260" 
                                           width="1200" 
                                           height="800"
                                           alt="The Truth About Carbs in Protein: What Most Brands Won&#39;t Tell You" 
                                           loading="lazy"
                                           class="img"></div>
                                <div class="second-part">
                                    <div class="tab-rich">
                                     
                                        
                                        <h2>The Truth About Carbs in Protein: What Most Brands Won&#39;t Tell You</h2><p>Walking down the supplement aisle, you're bombarded with bold claims: "ZERO CARB!" "LOW CARB FORM...</p></div>
                                </div>
                            </div>
                        </a>
                    </div><div class="swiper-slide blog-swiper-slide">
                        
        
                        <a href="/blogs/the-protein-zone/new-to-protein-give-your-gut-time" class="blog-block-link">
                            <div class="blog-block">
                                <div class="imag-wrapper"><img src="//superyou.in/cdn/shop/articles/5_-_New_to_Protein_Give_Your_Gut_Time_jpg.png?v=1765337193" 
                                           width="1200" 
                                           height="800"
                                           alt="New to Protein? Give Your Gut Time" 
                                           loading="lazy"
                                           class="img"></div>
                                <div class="second-part">
                                    <div class="tab-rich">
                                     
                                        
                                        <h2>New to Protein? Give Your Gut Time</h2><p>Starting your fitness journey feels like learning a new language: suddenly everyone's talking abo...</p></div>
                                </div>
                            </div>
                        </a>
                    </div><div class="swiper-slide blog-swiper-slide">
                        
        
                        <a href="/blogs/the-protein-zone/fermented-yeast-protein-powder-and-digestibility-gentle-on-the-stomach-tough-on-muscle-building" class="blog-block-link">
                            <div class="blog-block">
                                <div class="imag-wrapper"><img src="//superyou.in/cdn/shop/articles/SuperYou_Blog_-_Fermented_Yeast_Protein_Powder_and_Digestibility_Gentle_on_the_Sto_jpg.png?v=1765337030" 
                                           width="1200" 
                                           height="800"
                                           alt="Fermented Yeast Protein Powder and Digestibility: Gentle on the Stomach, Tough on Muscle Building" 
                                           loading="lazy"
                                           class="img"></div>
                                <div class="second-part">
                                    <div class="tab-rich">
                                     
                                        
                                        <h2>Fermented Yeast Protein Powder and Digestibility: Gentle on the Stomach, Tough on Muscle Building</h2><p>Picture this: you've just smashed a brutal leg session, your muscles are primed for growth, and y...</p></div>
                                </div>
                            </div>
                        </a>
                    </div><div class="swiper-slide blog-swiper-slide">
                        
        
                        <a href="/blogs/the-protein-zone/the-amino-acid-profile-of-fermented-yeast-protein-powder-a-complete-protein-source" class="blog-block-link">
                            <div class="blog-block">
                                <div class="imag-wrapper"><img src="//superyou.in/cdn/shop/articles/SuperYou_Blog_Covers.png?v=1765336840" 
                                           width="1200" 
                                           height="800"
                                           alt="The Amino Acid Profile of Fermented Yeast Protein Powder: A Complete Protein Source" 
                                           loading="lazy"
                                           class="img"></div>
                                <div class="second-part">
                                    <div class="tab-rich">
                                     
                                        
                                        <h2>The Amino Acid Profile of Fermented Yeast Protein Powder: A Complete Protein Source</h2><p>Here's the hidden truth about protein completeness: while nutrition labels boast total protein pe...</p></div>
                                </div>
                            </div>
                        </a>
                    </div><div class="swiper-slide blog-swiper-slide">
                        
        
                        <a href="/blogs/the-protein-zone/fermented-yeast-protein-powder-for-vegans-complete-protein-complete-peace-of-mind" class="blog-block-link">
                            <div class="blog-block">
                                <div class="imag-wrapper"><img src="//superyou.in/cdn/shop/articles/Fermented_Yeast_Protein_Powder_for_Vegans_Complete_Protein_Complete_Peace_of_Mind_1.jpg?v=1764240276" 
                                           width="3750" 
                                           height="2470"
                                           alt="Fermented Yeast Protein Powder for Vegans: Complete Protein, Complete Peace of Mind" 
                                           loading="lazy"
                                           class="img"></div>
                                <div class="second-part">
                                    <div class="tab-rich">
                                     
                                        
                                        <h2>Fermented Yeast Protein Powder for Vegans: Complete Protein, Complete Peace of Mind</h2><p>Picture this: while fitness influencers debate rice-and-pea combinations and nutritionists argue ...</p></div>
                                </div>
                            </div>
                        </a>
                    </div><div class="swiper-slide blog-swiper-slide">
                        
        
                        <a href="/blogs/the-protein-zone/fermented-yeast-protein-powder-for-athletes-enhance-performance-naturally" class="blog-block-link">
                            <div class="blog-block">
                                <div class="imag-wrapper"><img src="//superyou.in/cdn/shop/articles/WhatsApp_Image_2025-11-20_at_14.43.21_35bbf6e9-7cc2-4cc6-b24f-27464aeaa012.jpg?v=1763635747" 
                                           width="1600" 
                                           height="1054"
                                           alt="Fermented Yeast Protein Powder for Athletes: Enhance Performance Naturally" 
                                           loading="lazy"
                                           class="img"></div>
                                <div class="second-part">
                                    <div class="tab-rich">
                                     
                                        
                                        <h2>Fermented Yeast Protein Powder for Athletes: Enhance Performance Naturally</h2><p>Here's what elite performance nutrition has been missing: while athletes obsess over timing windo...</p></div>
                                </div>
                            </div>
                        </a>
                    </div><div class="swiper-slide blog-swiper-slide">
                        
        
                        <a href="/blogs/the-protein-zone/how-fermented-yeast-protein-powder-helps-build-lean-muscle-without-bulk" class="blog-block-link">
                            <div class="blog-block">
                                <div class="imag-wrapper"><img src="//superyou.in/cdn/shop/articles/How_Fermented_Yeast_Protein_Powder_Helps_211594d0-8bb8-49c7-bfef-261783048ce2.jpg?v=1763446188" 
                                           width="2976" 
                                           height="1962"
                                           alt="Build Lean Muscle Without Bulk &amp; protein" 
                                           loading="lazy"
                                           class="img"></div>
                                <div class="second-part">
                                    <div class="tab-rich">
                                     
                                        
                                        <h2>How Fermented Yeast Protein Powder Helps Build Lean Muscle Without Bulk</h2><p>Strength Isn’t Always Measured in Size
In the world of performance nutrition, protein is often pa...</p></div>
                                </div>
                            </div>
                        </a>
                    </div><div class="swiper-slide blog-swiper-slide">
                        
        
                        <a href="/blogs/the-protein-zone/can-fermented-yeast-protein-powder-help-with-stress-mental-well-being" class="blog-block-link">
                            <div class="blog-block">
                                <div class="imag-wrapper"><img src="//superyou.in/cdn/shop/articles/Stress_Mental_Well_Being.jpg?v=1763445749" 
                                           width="2976" 
                                           height="1962"
                                           alt="Fermented Yeast Protein Powder Help with Stress &amp; Mental Well-Being" 
                                           loading="lazy"
                                           class="img"></div>
                                <div class="second-part">
                                    <div class="tab-rich">
                                     
                                        
                                        <h2>Can Fermented Yeast Protein Powder Help with Stress &amp; Mental Well-Being?</h2><p>Why We’re Talking About Protein and Mental Health in the Same Breath
Muscle isn’t the only thing ...</p></div>
                                </div>
                            </div>
                        </a>
                    </div></div>
            <div class="swiper-pagination-blog"></div>
          
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var swiper = new Swiper('.blog-swiper', {
            slidesPerView: 4,
            spaceBetween: 24,
            pagination: {
                el: '.swiper-pagination-blog',
                clickable: true,
            },
            navigation: {
                nextEl: '.arrow.nextb',
                prevEl: '.arrow.prevb',
            },
            breakpoints: {
                300: { slidesPerView: 1, spaceBetween: 10, },
                499: { slidesPerView: 1.5, spaceBetween: 10, },
                767: { slidesPerView: 2, spaceBetween: 20, },
                991: { slidesPerView: 3, spaceBetween: 20, },
                1440: { slidesPerView: 4, spaceBetween: 20, },
            },
        });
    });
</script>

</div><div id="shopify-section-template--26131582583074__footer_seo_content_6A3QDw" class="shopify-section footer-seo-content-section">
  <div
    class="seo-toggle-wrapper-v2"
    style="
      --color-text-v2: #808080;
      --color-background-v2: #ffffff;
      --border-radius-v2: 12px;
    "
  >
    <div class="page-width">
      <details class="seo-details-v2 seo-details--shadow">
        <summary class="seo-summary-v2">
          <h2 class="seo-summary-text-v2">Know More About SuperYou</h2>
          <span class="seo-summary-icon-v2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="icon-chevron-v2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
          </span>
        </summary>
        <div class="seo-content-wrapper-v2">
          <div class="seo-content-panel-v2 rte">
            
<ul class="seo-link-list-v2" role="list"><li ><h2 class="seo-link-title-v2">Healthy Snacks with a Better-for-You Promise</h2><p class="seo-link-description-v2">At SuperYou, our focus is on clean, protein-rich snacks that give you energy without the guilt. Our products are made with no palm oil, no added sugar, and added fiber, building a culture where taste and nutrition always go hand-in-hand</p>
    </li><li ><h2 class="seo-link-title-v2">Redefining Snacking in India with Protein</h2><p class="seo-link-description-v2">India deserves better snacks. We’re on a mission to replace empty-calorie munching with protein-rich, functional options that fit into daily life. With every wafer, chip, and scoop of protein powder, we’re making “better” the new normal for Indian snacking.</p>
    </li><li ><h2 class="seo-link-title-v2">Categories of SuperYou Protein Snacks</h2><p class="seo-link-description-v2">SuperYou offers three innovative protein formats, Protein Wafers, Multigrain Baked Chips and SuperYou Pro. Each is crafted to deliver high-quality nutrition in a way that fits seamlessly into everyday life, from sweet indulgence to savoury crunch to pure protein power.</p>
    </li><li ><h2 class="seo-link-title-v2">India’s First Protein Wafer</h2><p class="seo-link-description-v2">We created India’s first protein wafer - light, crunchy, and loaded with 10g protein. Available in indulgent flavours like Chocolate, Peanut Butter, Cheese, Coffee, and Strawberry Crème, it’s proof that protein snacks can be fun, delicious, and functional all at once.</p>
    </li><li ><h2 class="seo-link-title-v2">SuperYou Multigrain Chips: The Healthiest Chips in the World</h2><p class="seo-link-description-v2">For savoury snack lovers, our Multigrain Protein Chips deliver 10g protein and 3g fiber per pack. Baked, not fried, and bursting with bold flavours, they’re designed to replace junk food with the healthiest chips in the world - crunchy, tasty, and guilt-free.</p>
    </li><li ><h2 class="seo-link-title-v2">SuperYou Pro: Clean Protein Supplementation</h2><p class="seo-link-description-v2">For those seeking more, SuperYou Pro delivers fermented yeast protein with PDCAAS 1.0- clean, complete, and maaad tasty. It’s as effective as whey but cleaner, lighter, and built to support strength, recovery and everyday performance.</p>
    </li><li ><h2 class="seo-link-title-v2">Fermented Yeast Protein: Future of Nutrition</h2><p class="seo-link-description-v2">At the core of SuperYou is fermented yeast protein, cultivated through bio-fermentation into a nutrient-dense, high-quality source. As effective as whey but cleaner and lighter, it delivers all essential amino acids while using fewer resources than traditional farming</p>
    </li></ul></div>
        </div>
      </details>
    </div>
  </div>

<style data-shopify>.seo-toggle-wrapper-v2 {
    color: var(--color-text-v2);
    background-color: var(--color-background-v2);
    padding-top: 3rem;
    padding-bottom: 3rem;
  }

  .seo-details-v2 {
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 0;
    background-color: #fff;
    transition: box-shadow 0.3s ease;
  }
  
  .seo-details-v2.seo-details--shadow {
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
  }
  .seo-details-v2.seo-details--shadow:hover {
     box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
  }

  .seo-summary-v2 {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 1rem;
    padding: 1.5rem 2rem;
    cursor: pointer;
    list-style: none;
  }

  .seo-summary-v2::-webkit-details-marker { display: none; }

  h2.seo-summary-text-v2 {
    font-family: 'antoniobold', 'Antonio', sans-serif;
    font-size: 2rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    line-height: 1.2;
    color: #000;
    text-align: center !important;
    margin: 0;
  }
  
  .seo-summary-icon-v2 .icon-chevron-v2 {
    width: 1.5rem;
    height: 1.5rem;
    /* --- CONDITION: PRO BLACK VS NORMAL RED --- */
    color: #EF1400;
    transition: transform 0.3s cubic-bezier(0.22, 1, 0.36, 1);
  }
  
  .seo-details-v2[open] > .seo-summary-v2 .icon-chevron-v2 {
    transform: rotate(180deg);
  }
  
  .seo-content-wrapper-v2 {
    display: grid;
    grid-template-rows: 0fr;
    transition: grid-template-rows 0.4s cubic-bezier(0.22, 1, 0.36, 1);
  }
  
  .seo-details-v2[open] > .seo-content-wrapper-v2 {
    grid-template-rows: 1fr;
  }

  .seo-content-panel-v2 {
    overflow: hidden;
    padding: 0 2rem;
    border-top: 1px solid rgba(128, 128, 128, 0.1);
  }
  .seo-details-v2[open] .seo-content-panel-v2 {
    padding-top: 2.5rem;
    padding-bottom: 2rem;
  }

  .seo-content-panel-v2.rte p {
    line-height: 1.6;
    margin-bottom: 1rem;
  }

  .seo-link-list-heading-v2 {
    margin-top: 2.5rem;
    margin-bottom: 1.5rem;
    font-family: 'antoniobold', 'Antonio', sans-serif;
    text-transform: uppercase;
    font-size: 1.25rem;
    /* --- CONDITION: PRO BLACK VS NORMAL RED --- */
    color: #EF1400; 
  }
  
  .seo-link-list-v2 {
    list-style: none;
    padding-left: 0;
    margin: 0;
  }
  
  .seo-link-list-v2 li {
    position: relative;
    padding-left: 1.5em; 
    margin-bottom: 1.75rem; 
  }

  .seo-link-list-v2 li::before {
    content: '•';
    position: absolute;
    left: 0.25em;
    top: 0; 
    /* --- CONDITION: PRO BLACK VS NORMAL RED --- */
    color: #EF1400; 
    font-size: 1.5rem;
    line-height: 1.2; 
  }
  
  h2.seo-link-title-v2 {
    margin: 0 0 0.5rem 0;
    font-family: 'antoniobold', 'Antonio', sans-serif;
    font-weight: 700;
    text-transform: uppercase;
    font-size: 2rem; 
    line-height: 1.2;
    text-align: left;
    /* --- CONDITION: PRO BLACK VS NORMAL RED --- */
    color: #EF1400;
  }
  
  h2.seo-link-title-v2 a {
    /* --- CONDITION: PRO BLACK VS NORMAL RED --- */
    color: #EF1400;
    text-decoration: none;
  }
  h2.seo-link-title-v2 a:hover {
    text-decoration: underline;
  }

  p.seo-link-description-v2 {
    margin: 0;
    font-size: 1.6rem;
    line-height: 1.6;
    color: var(--color-text-v2);
    font-family: var(--font-body-family), sans-serif;
  }
  
  @media screen and (max-width: 749px) {
    .seo-toggle-wrapper-v2 {
      padding-top: 2rem;
      padding-bottom: 2rem;
    }
    .seo-summary-v2 {
      padding: 1.25rem;
      gap: 0.75rem;
    }
    h2.seo-summary-text-v2 {
      font-size: 1.3rem; 
    }
    h2.seo-link-title-v2 {
      font-size: 1.3rem;
    }
    p.seo-link-description-v2 {
      font-size: 0.95rem;
    }
    .seo-content-panel-v2 {
      padding-left: 1.25rem;
      padding-right: 1.25rem;
    }
    .seo-details-v2[open] .seo-content-panel-v2 {
      padding-top: 2rem;
      padding-bottom: 1.5rem;
    }
  }</style></div>
    </main>

    <!-- BEGIN sections: footer-group -->
<div id="shopify-section-sections--26131584221474__footer_section_jwaWfJ" class="shopify-section shopify-section-group-footer-group"><style data-shopify>
  /* 1. Global Footer Scoping */
  #shopify-section-sections--26131584221474__footer_section_jwaWfJ {
    padding-top: 0px;
    padding-bottom: 0px;
    background-color: #ef1400;
    color: #ffffff;
    line-height: 1.5;
  }

  /* 2. Fix for Smart Search (Corrected Syntax) */
  :root {
    --rb-smart-search-results-content-active-tab-color: #000000 !important;
  }

  .sy-footer-wrapper { 
    max-width: 100%; 
    margin: 0 auto; 
    padding: 0 20px; 
  }

  /* --- GRID --- */
  .footer-grid {
    display: flex;
    flex-wrap: wrap;
    border-top: 1px solid currentColor;
    border-bottom: 1px solid currentColor;
  }

  .footer-col {
    flex: 1;
    min-width: 200px;
    padding: 40px 25px;
    border-right: 1px solid currentColor;
  }

  .footer-col:last-child { border-right: none; }

  /* --- TYPOGRAPHY --- */
  .footer-title {
    font-size: 24px;
    font-weight: 800;
    text-transform: uppercase;
    margin-bottom: 25px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
  }

  .footer-title span { display: none; } 

  .footer-link-list { list-style: none; padding: 0; margin: 0; }
  .footer-link-list li { margin-bottom: 10px; }
  
  .footer-link {
    text-decoration: none;
    color: inherit;
    font-size: 15px;
    opacity: 0.9;
    transition: 0.2s;
  }
  .footer-link:hover { opacity: 1; text-decoration: underline; }

  /* --- CONTACTS --- */
  .contact-item {
    display: flex;
    gap: 12px;
    margin-bottom: 22px;
    text-decoration: none;
    color: inherit;
    align-items: flex-start;
  }

  .contact-icon {
    width: 22px;
    height: 22px;
    flex-shrink: 0;
  }
  .contact-icon svg { width: 100%; height: auto; }

  .contact-content { display: flex; flex-direction: column; }
  
  .contact-label {
    font-size: 11px;
    font-weight: 800;
    text-transform: uppercase;
    opacity: 0.7;
    margin-bottom: 2px;
    letter-spacing: 0.05em;
  }

  .contact-value {
    font-size: 17px;
    font-weight: 600;
    line-height: 1.2;
  }

  /* --- SOCIALS (Refined Size & Color) --- */
  .footer-socials {
    display: flex;
    gap: 15px; /* Slightly more gap for larger icons */
    flex-wrap: wrap;
    align-items: center;
  }
  .social-hver-wrapper {
    position: relative;
    display: inline-flex;
    transition: transform 0.2s;
  }
  .social-hver-wrapper:hover { transform: translateY(-3px); }
  
  /* FIXED: Targeted SVGs to be Black and Larger */
  .social-link svg {
    width: 28px !important; /* Increased Size */
    height: 28px !important;
    display: block;
    fill: #000000 !important; /* Forced Black */
  }

  /* --- BOTTOM BAR --- */
  .footer-bottom-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 25px 0;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
  }

  /* --- MOBILE --- */
  @media (max-width: 767px) {
    .footer-grid { flex-direction: column; border-top: none; }
    .footer-col { 
      border-right: none; 
      border-bottom: 1px solid currentColor; 
      padding: 20px 0;
    }
    .footer-title { font-size: 20px; margin-bottom: 0; cursor: pointer; }
    .footer-title span { display: inline-block; font-weight: 300; } 
    .col-content { display: none; padding-top: 15px; }
    .footer-col.active .col-content { display: block; }
    .contact-value { font-size: 15px; }
    .footer-bottom-bar { flex-direction: column; gap: 15px; text-align: center; }
  }
</style>

<div class="sy-footer-wrapper">
  <div class="footer-grid">
    
    <div class="footer-col js-footer-accordion">
      <h2 class="footer-title">SHOP ALL <span>+</span></h2>
      <div class="col-content">
        <ul class="footer-link-list">
          
            <li><a href="/pages/superyoupro" class="footer-link">Creatine Monohydrate</a></li>
          
            <li><a href="/pages/superyou-pro" class="footer-link">Fermented Yeast Protein</a></li>
          
            <li><a href="/products/20g-mega-protein-wafer" class="footer-link">20g Mega Protein Wafer</a></li>
          
            <li><a href="/collections/protein-wafers" class="footer-link">10g Protein Wafers</a></li>
          
            <li><a href="/collections/protein-wafers-mini" class="footer-link">5g Protein Wafers Minis</a></li>
          
            <li><a href="/products/superyou-protein-chips" class="footer-link">10g Multigrain Protein Chips</a></li>
          
        </ul>
      </div>
    </div>

    <div class="footer-col js-footer-accordion">
      <h2 class="footer-title">Know More <span>+</span></h2>
      <div class="col-content">
        <ul class="footer-link-list">
          
            <li><a href="https://superyou-pro.notion.site/Protein-Test-Reports-294635392e0e8087b2f6d26a169f1148?pvs=74" class="footer-link">Protein Lab Reports</a></li>
          
            <li><a href="https://superyou-pro.notion.site/Creatine-Test-Reports-31f635392e0e8082a7b1d8aa6494e3cc?pvs=74" class="footer-link">Creatine Lab Reports</a></li>
          
            <li><a href="https://superyou.clickpost.in/en" class="footer-link">Tracking Link</a></li>
          
            <li><a href="/pages/pro-affiliate" class="footer-link">SuperYou Pro Affiliate Program</a></li>
          
            <li><a href="/pages/about" class="footer-link">About Us</a></li>
          
            <li><a href="/pages/contact" class="footer-link">Connect Now</a></li>
          
        </ul>
      </div>
    </div>

    <div class="footer-col js-footer-accordion">
      <h2 class="footer-title">support & policy <span>+</span></h2>
      <div class="col-content">
        <ul class="footer-link-list">
          
            <li><a href="/pages/superyou-refer-and-earn" class="footer-link">Refer & Earn</a></li>
          
            <li><a href="/policies/terms-of-service" class="footer-link">Terms of Service</a></li>
          
            <li><a href="/policies/privacy-policy" class="footer-link">Privacy Policy</a></li>
          
            <li><a href="/policies/refund-policy" class="footer-link">Refund & Returns</a></li>
          
            <li><a href="/policies/shipping-policy" class="footer-link">Shipping Policy</a></li>
          
            <li><a href="https://cdn.shopify.com/s/files/1/0902/2590/1858/files/Equal_Opportunity_Employment_Policy.pdf?v=1746167786" class="footer-link">Employment Policy</a></li>
          
            <li><a href="/policies/contact-information" class="footer-link">Contact Us</a></li>
          
        </ul>
      </div>
    </div>

    <div class="footer-col js-footer-accordion">
      <h2 class="footer-title">Follow along <span>+</span></h2>
      <div class="col-content">
        <div class="footer-socials">
          
            <div class="social-hver-wrapper"> 
              <a href="https://www.instagram.com/be.superyou" class="social-link" target="_blank" rel="noopener">
                <svg viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg"><path d="M15.2868 2.42773H6.7154C4.34969 2.42773 2.42969 4.34773 2.42969 6.71345V15.2849C2.42969 17.6506 4.34969 19.5706 6.7154 19.5706H15.2868C17.6525 19.5706 19.5725 17.6506 19.5725 15.2849V6.71345C19.5725 4.34773 17.6525 2.42773 15.2868 2.42773ZM11.0011 15.2849C8.6354 15.2849 6.7154 13.3649 6.7154 10.9992C6.7154 8.63345 8.6354 6.71345 11.0011 6.71345C13.3668 6.71345 15.2868 8.63345 15.2868 10.9992C15.2868 13.3649 13.3668 15.2849 11.0011 15.2849ZM15.5868 7.24488C15.1154 7.24488 14.7297 6.85916 14.7297 6.38773C14.7297 5.91631 15.1154 5.53059 15.5868 5.53059C16.0583 5.53059 16.444 5.91631 16.444 6.38773C16.444 6.85916 16.0583 7.24488 15.5868 7.24488Z"/><path d="M11.0011 13.5706C12.4213 13.5706 13.5725 12.4193 13.5725 10.9992C13.5725 9.579 12.4213 8.42773 11.0011 8.42773C9.58096 8.42773 8.42969 9.579 8.42969 10.9992C8.42969 12.4193 9.58096 13.5706 11.0011 13.5706Z"/></svg>
              </a>
            </div>  
          
          
            <div class="social-hver-wrapper"> 
              <a href="https://www.youtube.com/@be.superyou" class="social-link" target="_blank" rel="noopener">
                <svg viewBox="0 0 22 17" xmlns="http://www.w3.org/2000/svg"><path d="M21.5467 3.09891C21.2932 2.15641 20.5501 1.41346 19.6077 1.15967C17.8862 0.688629 10.9997 0.688629 10.9997 0.688629C10.9997 0.688629 4.1136 0.688629 2.39202 1.14183C1.46778 1.39535 0.70658 2.15658 0.453063 3.09891C0 4.82034 0 8.39043 0 8.39043C0 8.39043 0 11.9785 0.453063 13.6819C0.70682 14.6242 1.44967 15.3672 2.39216 15.621C4.13171 16.0922 11 16.0922 11 16.0922C11 16.0922 17.8862 16.0922 19.6077 15.639C20.5502 15.3853 21.2932 14.6424 21.547 13.7C21.9999 11.9784 21.9999 8.40851 21.9999 8.40851C21.9999 8.40851 22.018 4.82031 21.5467 3.09891ZM8.80724 11.6885V5.09221L14.5336 8.39036L8.80724 11.6885Z"/></svg>
              </a>
            </div> 
          
          
        </div>
      </div>
    </div>

    <div class="footer-col js-footer-accordion">
      <h2 class="footer-title">Get in touch <span>+</span></h2>
      <div class="col-content">
        <a href="mailto:hypedesk@superyou.in" class="contact-item">
          <span class="contact-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
          </span>
          <div class="contact-content">
            <span class="contact-label">Order Related Queries</span>
            <span class="contact-value">hypedesk@superyou.in</span>
          </div>
        </a>

        <a href="mailto:marketing@superyou.in" class="contact-item">
          <span class="contact-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
          </span>
          <div class="contact-content">
            <span class="contact-label">Marketing/Collabs</span>
            <span class="contact-value">marketing@superyou.in</span>
          </div>
        </a>

        <div class="contact-item">
          <span class="contact-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
          </span>
          <div class="contact-content">
            <span class="contact-label">Working Hours</span>
            <span class="contact-value" style="font-size: 14px;">10AM - 6PM IST (Monday to Saturday)</span>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="footer-bottom-bar">
    <div>© 2026 SuperYou. All Rights Reserved.</div>
    <div style="display: flex; align-items: center; gap: 10px;">
      PAY USING: <img src="https://cdn.shopify.com/s/files/1/0902/2590/1858/files/Group_179.svg?v=1737451141" alt="Payments" height="22" width="auto">
    </div>
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const accordions = document.querySelectorAll('.js-footer-accordion');
    accordions.forEach(acc => {
      const title = acc.querySelector('.footer-title');
      title.addEventListener('click', () => {
        if (window.innerWidth < 768) {
          acc.classList.toggle('active');
          const span = title.querySelector('span');
          span.textContent = acc.classList.contains('active') ? '−' : '+';
        }
      });
    });
  });
</script>

</div>
<!-- END sections: footer-group -->
    <ul hidden>
      <li id="a11y-refresh-page-message">Choosing a selection results in a full page refresh.</li>
      <li id="a11y-new-window-message">Opens in a new window.</li>
    </ul><script src="//superyou.in/cdn/shop/t/51/assets/predictive-search.js?v=57209189334897115771766474613" defer="defer"></script><script src="//superyou.in/cdn/shop/t/51/assets/cart-drawer.js?v=169981311261118214701766474551" defer="defer"></script><script>
  // Performance monitoring
  if (window.performance && window.performance.mark) {
    window.addEventListener('load', () => {
      const pageLoadTime = performance.now();
      console.info(`Page fully loaded in ${pageLoadTime}ms`);
      
      // Create performance entry
      performance.mark('page-fully-loaded');
      
      // Measure important metrics
      const navigationTiming = performance.getEntriesByType('navigation')[0];
      const fcp = performance.getEntriesByName('first-contentful-paint')[0];
      
      console.info({
        'DOM Content Loaded': navigationTiming.domContentLoadedEventEnd - navigationTiming.startTime,
        'First Contentful Paint': fcp ? fcp.startTime : 'Not available',
        'Total Page Load': pageLoadTime
      });
    });
  }
</script>


<script>
  // The variable name in the line below has been corrected to 'faqSchemaData'
  if (typeof window.faqSchemaData !== 'undefined' && window.faqSchemaData.length > 0) {
    const schema = {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": window.faqSchemaData.map(item => {
        return {
          "@type": "Question",
          "name": item.question,
          "acceptedAnswer": {
            "@type": "Answer",
            "text": item.answer
          }
        }
      })
    };

    const scriptTag = document.createElement('script');
    scriptTag.type = 'application/ld+json';
    scriptTag.innerHTML = JSON.stringify(schema);
    document.head.appendChild(scriptTag);
  }
</script>

<script>
  window.cartProtection = window.cartProtection || {
  activeRequests: new Map(),
  lastRequestTime: 0
};

const originalFetch = window.fetch;
window.fetch = function(url, options = {}) {
  const isCartAdd = (typeof url === 'string' && url.includes('/cart/add')) ||
                    (url instanceof Request && url.url.includes('/cart/add'));
  
  if (isCartAdd) {
    const now = Date.now();
    let variantId = null;
    try {
      if (options.body) {
        const body = typeof options.body === 'string' ? JSON.parse(options.body) : options.body;
        variantId = body.id || body.items?.[0]?.id;
      }
    } catch {
      variantId = now;
    }
    
    const requestKey = `${variantId}-${Math.floor(now / 1000)}`;
    
    if (window.cartProtection.activeRequests.has(requestKey) || now - window.cartProtection.lastRequestTime < 1000) {
      return Promise.resolve(new Response(JSON.stringify({ message: 'Blocked' }), {
        status: 200,
        headers: { 'Content-Type': 'application/json' }
      }));
    }
    
    window.cartProtection.activeRequests.set(requestKey, now);
    window.cartProtection.lastRequestTime = now;
    
    return originalFetch.apply(this, arguments)
      .then(response => {
        setTimeout(() => {
          window.cartProtection.activeRequests.delete(requestKey);
        }, 2000);
        return response;
      })
      .catch(error => {
        window.cartProtection.activeRequests.delete(requestKey);
        throw error;
      });
  }
  
  return originalFetch.apply(this, arguments);
};

const originalXHROpen = XMLHttpRequest.prototype.open;
const originalXHRSend = XMLHttpRequest.prototype.send;

XMLHttpRequest.prototype.open = function(method, url, ...rest) {
  this._url = url;
  this._method = method;
  return originalXHROpen.call(this, method, url, ...rest);
};

XMLHttpRequest.prototype.send = function(data) {
  if (this._url && this._url.includes('/cart/add')) {
    const now = Date.now();
    let variantId = null;
    try {
      if (data) {
        const body = typeof data === 'string' ? JSON.parse(data) : data;
        variantId = body.id || body.items?.[0]?.id;
      }
    } catch {
      variantId = now;
    }
    
    const requestKey = `${variantId}-${Math.floor(now / 1000)}`;
    
    if (window.cartProtection.activeRequests.has(requestKey) || now - window.cartProtection.lastRequestTime < 1000) {
      setTimeout(() => {
        this.status = 200;
        this.readyState = 4;
        this.responseText = JSON.stringify({ message: 'Blocked' });
        this.onload && this.onload();
        this.onreadystatechange && this.onreadystatechange();
      }, 0);
      return;
    }
    
    window.cartProtection.activeRequests.set(requestKey, now);
    window.cartProtection.lastRequestTime = now;
    
    const originalOnLoad = this.onload;
    this.onload = function(...args) {
      setTimeout(() => {
        window.cartProtection.activeRequests.delete(requestKey);
      }, 2000);
      originalOnLoad && originalOnLoad.apply(this, args);
    };
  }
  
  return originalXHRSend.call(this, data);
};

window.addEventListener('load', function() {
  setTimeout(function() {
    fetch('/cart.js')
      .then(res => res.json())
      .then(cart => {
        const variantMap = new Map();
        
        cart.items.forEach((item, index) => {
          const key = item.variant_id;
          if (variantMap.has(key)) {
            const first = variantMap.get(key);
            first.duplicates.push(index);
            first.totalQty += item.quantity;
          } else {
            variantMap.set(key, { firstIndex: index, totalQty: item.quantity, duplicates: [] });
          }
        });
        
        const itemsWithDuplicates = Array.from(variantMap.values()).filter(item => item.duplicates.length > 0);
        
        if (itemsWithDuplicates.length > 0) {
          const updates = {};
          itemsWithDuplicates.forEach(item => {
            updates[item.firstIndex + 1] = item.totalQty;
            item.duplicates.forEach(dupIndex => updates[dupIndex + 1] = 0);
          });
          
          return fetch('/cart/update.js', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ updates })
          }).then(() => {
            document.dispatchEvent(new CustomEvent('cart:refresh'));
          });
        }
      })
      .catch(() => {});
  }, 1500);
});

</script>
<script id="rebuy-bundle-builder-template" type="text/template">
    <div
        class="rebuy-widget rebuy-bundle-builder"
        v-bind:id="'rebuy-widget-' + id"
    >
        <div
            class="rebuy-bundle-builder__main rebuy-bundle-builder-layout"
            v-bind:class="['rebuy-bundle-builder__layout--' + config.layout.type]"
            ref="stepTabsWrapper"
            >

            <div v-if="hasBundleHeaderSection()" class="rebuy-bundle-builder__main-header">
                <h1
                    v-if="getBundleConfigLabel('super_title')"
                    class="rebuy-bundle-builder__main-header-super-title"
                    v-html="getBundleConfigLabel('super_title')"
                >
                </h1>

                <h2
                    v-if="getBundleConfigLabel('title')"
                    class="rebuy-bundle-builder__main-header-title"
                    v-html="getBundleConfigLabel('title')"
                >
                </h2>

                <p
                    v-if="getBundleConfigLabel('description')"
                    class="rebuy-bundle-builder__main-header-description"
                    v-html="getBundleConfigLabel('description')"
                >
                </p>
            </div>
            <div v-if="hasBundleBuilderSorting()" class="rebuy-bundle-builder__header-utility-container">
                <select
                    aria-label="Sort By"
                    name="selected_sorting_option"
                    v-model="selected_sorting_option"
                    v-on:change="handleBundleBuilderSortingOptionChange"
                    class="rebuy-bundle-builder__header-utility-sorting rebuy-select"
                >
                    <option disabled value="">Sort By</option>
                    <option v-for="option in sorting_options" :value="option.value" :key="option.value"></option>
                </select>
            </div>
            <div class="rebuy-bundle-builder__main-body">
                <div class="rebuy-bundle-builder__steps-container">
                    <div v-if="isBundleBuilderTabLayout()" class="rebuy-bundle-builder__step-tabs rebuy-bundle-builder__step-tabs--sticky">
                        <div class="rebuy-bundle-builder__step-tabs-wrapper">
                            <div
                                v-for="(step, step_index) in config.steps"
                                class="rebuy-bundle-builder__step-tab"
                                v-bind:key="'rebuy-bundle-builder__step-tab-' + step_index"
                                v-bind:class="['rebuy-bundle-builder__step-tab-' + step_index, active_step_index === step_index ? 'active' : '']"
                                v-bind:aria-label="'Select step tab: ' + step.title"
                                role="button"
                                tabindex="0"
                                v-on:click="handleSelectingBundleStep(step_index)"
                                v-on:keydown.enter.space="handleSelectingBundleStep(step_index)"
                            >
                                <h3
                                    v-if="step.title"
                                    v-html="step.title"
                                    class="rebuy-bundle-builder__step-tab-title">
                                </h3>

                                <p
                                    v-if="step.description"
                                    v-html="step.description"
                                    class="rebuy-bundle-builder__step-tab-description">
                                </p>
                            </div>
                        </div>

                        <button
                            v-on:click="scrollToTargetBundleElement('main', id)"
                            class="rebuy-bundle-builder__scroll-to-button"
                            aria-label="scroll to top"
                            >
                            <rebuy-icon name="chevron-up"></rebuy-icon>
                            <span>Top</span>
                        </button>
                    </div>
                    <div
                        v-for="(step, step_index) in config.steps"
                        class="rebuy-bundle-builder__step-container"
                        v-bind:key="'rebuy-bundle-builder__step-container-' + step_index"
                        v-bind:class="[
                            'rebuy-bundle-builder__step-container-' + step_index,
                            step.unlocked ? '' : 'locked',
                            isBundleBuilderCollapsibleLayout() ? 'rebuy-bundle-builder__step-container--collapsible' : '',
                            !shouldRenderBundleStep(step_index) ? 'rebuy-bundle-builder__step-container--not-active' : 'rebuy-bundle-builder__step-container--active'
                        ]"
                        aria-label="step"
                        role="listitem"
                        >

                        <div v-if="!isBundleBuilderTabLayout()" class="rebuy-bundle-builder__step-header">
                            <div class="rebuy-bundle-builder__step-header-copy-container">
                                <h3
                                    v-if="step.title"
                                    v-html="step.title"
                                    class="rebuy-bundle-builder__step-header-title">
                                </h3>

                                <p
                                    v-if="step.description"
                                    v-html="step.description"
                                    class="rebuy-bundle-builder__step-header-description">
                                </p>
                            </div>

                            <div class="rebuy-bundle-builder__step-header-actions">
                                <div v-if="isBundleBuilderCollapsibleLayout()">
                                    <button
                                        class="rebuy-bundle-builder__step-header-collapse-button"
                                        v-on:click="handleCollapsingBundleStep(step_index)"
                                        v-bind:aria-label="shouldRenderBundleStep(step_index) ? 'Collapse ' + step.title : 'Expand ' + step.title"
                                    >
                                        <rebuy-icon
                                            :name="shouldRenderBundleStep(step_index) ? 'minus' : 'plus'"
                                            class="rebuy-bundle-builder__step-header-collapse-button-icon">
                                        </rebuy-icon>
                                    </button>
                                </div>

                                <button
                                    v-if="!isBundleBuilderCollapsibleLayout()"
                                    v-on:click="scrollToTargetBundleElement('step', id, (step_index - (step_index === 0 ? 0 : 1)))"
                                    :class="[
                                        'rebuy-bundle-builder__scroll-to-button',
                                        step_index === 0 ? 'rebuy-bundle-builder__top-button' : 'rebuy-bundle-builder__prev-button',
                                        'rebuy-bundle-builder__step-button-' + step_index
                                    ]"
                                    aria-label="scroll to top"
                                    >
                                    <rebuy-icon name="chevron-up"></rebuy-icon>
                                    <span v-html="step_index === 0 ? 'Top' : 'Prev'"></span>
                                </button>
                            </div>
                        </div>
                        <div
                            class="rebuy-bundle-builder__step-body rebuy-product-grid start-column rebuy-product-grid-step-100"
                            v-bind:class="[getBundleBuilderLayoutClasses(step), 'rebuy-product-grid__step-' + step_index]"
                            >
                            <div
                                v-for="(product, product_index) in step.products"
                                v-bind:class="[product.handle, 'product-id-' + product.id, productTagClasses(product), hasBundleBuilderStepSplideCarousel(step) ? 'splide__slide' : '']"
                                class="rebuy-product-block"
                                aria-label="product"
                                role="listitem"
                                >
                                <div v-if="product.type !== 'placeholder'" class="rebuy-bundle-builder__step-product">
                                    <div class="rebuy-product-media">
                                        <a
                                            class="rebuy-product-image clickable"
                                            v-bind:href="learnMoreURL(product)"
                                            v-on:click="learnMore(product, $event);"
                                            rel="nofollow"
                                        >
                                            <img
                                                v-if="product.hover_image"
                                                class="rebuy-style__hidden-block"
                                                v-bind:src="sizeImage(product.hover_image.src, '400x400')"
                                                v-bind:alt="'View ' + product.title"
                                            />

                                            <img
                                                class="rebuy-style__hover-transition"
                                                v-bind:loading="product_index > 1 ? 'lazy' : 'eager'"
                                                v-bind:src="getBundleBuilderProductImage(product)"
                                                v-bind:alt="'View ' + product.title"
                                                v-on:mouseover="handleProductImageHover(product, true)"
                                                v-on:mouseleave="handleProductImageHover(product, false)"
                                            />
                                        </a>
                                    </div>
                                    <div class="rebuy-product-info">
                                        <h5 class="rebuy-product-title clickable">
                                            <a
                                                class="rebuy-product-title clickable"
                                                v-bind:href="learnMoreURL(product)"
                                                v-on:click="learnMore(product, $event);"
                                                v-html="product.title"
                                                v-bind:aria-label="'View ' + product.title"
                                                rel="nofollow">
                                            </a>
                                        </h5>

                                        <div class="rebuy-variant-title" v-if="showVariantTitle(product)" v-html="product.selected_variant.title"></div>

                                        <div class="rebuy-product-review" v-if="hasProductReviews(product)" aria-label="product star rating">
                                            <span class="rebuy-star-rating">
                                                <span
                                                    v-if="product.reviews.star_rating"
                                                    class="rebuy-star-rating-value sr-only"
                                                    v-html="product.reviews.star_rating + ' stars out of 5 stars'"
                                                >
                                                </span>
                                                <span class="rebuy-star-rating-background"></span>
                                                <span class="rebuy-star-rating-foreground" v-bind:style="{ width: productReviewRatingPercentage(product) }"></span>
                                            </span>
                                            <span class="rebuy-review-count" v-html="productReviewCount(product)"></span>
                                        </div>

                                        <div class="rebuy-product-price">
                                            <div v-if="bundleVariantOnSale(product, product.selected_variant)">
                                                <span class="rebuy-money sale">
                                                    <span class="sr-only">Sale price</span>
                                                    <span tabindex="0" v-html="formatMoney(bundleVariantPrice(product, product.selected_variant))"></span>
                                                </span>
                                                <span class="rebuy-money compare-at">
                                                    <span class="sr-only">Original price</span>
                                                    <span v-html="formatMoney(bundleVariantCompareAtPrice(product, product.selected_variant))"></span>
                                                </span>
                                            </div>
                                            <div v-if="!(bundleVariantOnSale(product, product.selected_variant))">
                                                <span class="rebuy-money">
                                                    <span class="sr-only">Price</span>
                                                    <span tabindex="0" v-html="formatMoney(bundleVariantPrice(product, product.selected_variant))"></span>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="rebuy-product-description" v-if="showProductDescription(product)" v-html="text(product.body_html)"></div>
                                    </div>
                                    <div class="rebuy-product-options" v-if="showVariantSelect(product)">
                                        <select
                                            :id="id + '-' + 'select' + '-' + product_index"
                                            class="rebuy-select"
                                            v-bind:aria-label="'variant of ' + product.title"
                                            v-model="product.selected_variant_id"
                                            v-on:change="selectVariant(product)">
                                            <option
                                                v-for="variant in product.variants"
                                                class="rebuy-product-options__option"
                                                :class="{ 'rebuy-product-options__option--oos' : !variantAvailable(variant) }"
                                                v-bind:value="variant.id"
                                                :disabled="!variantAvailable(variant)"
                                                v-html="formatVariantOptionTitle(variant)">
                                            </option>
                                        </select>
                                    </div>
                                    <div class="rebuy-bundle-builder__product-actions rebuy-product-actions">
                                        <button
                                            v-if="hasProductQuickViewEnabled()"
                                            v-on:click="openVariantModal(product, step, step_index)"
                                            class="rebuy-button secondary rebuy-bundle-builder__product-quick-view"
                                            v-html="getBundleConfigLabel('quick_view_label')"
                                        >
                                        </button>

                                        <div class="rebuy-bundle-builder__product-quantity">
                                            <div v-if="foundStepProductInBundleHolder(product.selected_variant_id, step_index)">
                                                <div class="rebuy-bundle-builder__item-quantity-widget">
                                                    <button
                                                        class="rebuy-bundle-builder__item-quantity-widget-button"
                                                        v-on:click="removeLastAddedProductStep(product.selected_variant_id, step_index)"
                                                        v-bind:aria-label="'Decrease quantity of ' + product.title"
                                                        >
                                                        <rebuy-icon name="minus" class="rebuy-grey"></rebuy-icon>
                                                    </button>

                                                    <span
                                                        class="rebuy-bundle-builder__item-quantity-widget-label"
                                                        v-html="getBundleVariantQuantity(product.selected_variant_id, step_index)">
                                                    </span>

                                                    <button
                                                        class="rebuy-bundle-builder__item-quantity-widget-button"
                                                        v-on:click="addProductToBundle(product, step, step_index)"
                                                        v-bind:aria-label="'Increase quantity of ' + product.title"
                                                        v-bind:disabled="shouldDisableProductAddToBundle(product, step, step_index)"
                                                        >
                                                        <rebuy-icon name="plus" class="rebuy-grey"></rebuy-icon>
                                                    </button>
                                                </div>
                                            </div>


                                            <button
                                                v-if="!foundStepProductInBundleHolder(product.selected_variant_id, step_index)"
                                                class="rebuy-button"
                                                v-bind:disabled="shouldDisableProductAddToBundle(product, step, step_index)"
                                                v-bind:aria-label="buttonAriaLabel(product)"
                                                v-on:click="addProductToBundle(product, step, step_index)"
                                                >
                                                    <span v-html="getBundleConfigLabel('add_to_bundle', step)"></span>
                                            </button>
                                        </div>
                                    </div>
                                    </div>

                                <div
                                    v-if="product.type === 'placeholder'"
                                    class="rebuy-bundle-builder__step-product-skeleton">
                                    <span></span>
                                </div>
                                </div>
                            </div>
                        </div>
                    <div
                    class="rebuy-bundle-builder__group-container rebuy-bundle-builder__group-container--mobile"
                    v-bind:class="[has_container_expanded ? 'expanded' : 'default']">
                    <div class="rebuy-bundle-builder__group-container-inner">
                        <div class="rebuy-bundle-builder__group-container-header">
                            <div class="rebuy-bundle-builder__group-container-header--left">
                                <h3
                                    class="rebuy-bundle-builder__group-container-header-title"
                                    v-html="getBundleConfigLabel('bundle_container_title')"
                                >
                                </h3>

                                <span class="rebuy-bundle-builder__group-container-header-title-count">
                                    <span
                                        class="rebuy-bundle-builder__group-container-header-products_count"
                                        v-html="getBundleContainerHeaderValue('products_count')">
                                    </span>

                                    <span class="rebuy-bundle-builder__group-container-header-divider">/</span>

                                    <span
                                        class="rebuy-bundle-builder__group-container-header-container-length"
                                        v-html="getBundleContainerHeaderValue('container_length')">
                                    </span>
                                </span>
                            </div>
                        </div>

                        <div v-if="shouldDisplayBundleTierProgressBar()" class="rebuy-bundle-builder__group-container-progress-bar">
                            <div
                                class="rebuy-bundle-builder__group-progress-step-wrapper rebuy-bundle-builder__progress-step-wrapper"
                                v-bind:class="[ 'count-' + config.discount.tiers.length  ]"
                                >
                                <div
                                    v-for="(tier, tier_index) in config.discount.tiers"
                                    class="rebuy-bundle-builder__progress-step"
                                    v-bind:style="{ left: progressStepPosition(tier) }"
                                    v-bind:class="[
                                        progressTierReached(tier, products) ? 'complete' : '',
                                        'rebuy-bundle-builder__progress-step--' + tier_index
                                    ]"
                                    >

                                    <div
                                        class="rebuy-bundle-builder__progress-step-icon"
                                        v-bind:class="[ 'rebuy-bundle-builder__progress-step-icon-type-' + getBundleTierProgressStepType(tier) ]"
                                    >
                                        <span
                                            v-if="getBundleTierProgressStepType(tier) !== 'none'"
                                            v-html="formatBundleTierValue(tier.discount_value, tier.discount_type)"
                                            class="rebuy-bundle-builder__progress-step-value"
                                            v-bind:class="[ 'rebuy-bundle-builder__progress-step-value-type--' + getBundleTierProgressStepType(tier) ]"
                                            >
                                        </span>
                                    </div>

                                    <span
                                        class="rebuy-bundle-builder__progress-step-label"
                                        v-html="formatBundleTierLabel(tier)">
                                    </span>
                                </div>
                            </div>

                            <div class="rebuy-bundle-builder__progress-bar-wrapper">
                                <div
                                    class="rebuy-bundle-builder__progress-bar-meter"
                                    v-bind:class="[hasTierProgress(products) ? 'has-progress' : 'no-progress']">
                                    <div
                                        class="rebuy-bundle-builder__progress-bar-meter-fill"
                                        v-bind:style="{ width: (tiersPercentageComplete(config.discount.tiers, products) || '0%') }"
                                        role="progressbar"
                                        tabindex="0"
                                        aria-valuemin="0"
                                        aria-valuemax="100"
                                        v-bind:aria-valuenow="tiersPercentageComplete(config.discount.tiers, products)"
                                        aria-labelledby="rebuy-bundle-builder__progress-bar-meter-label"
                                    >
                                        <span class="sr-only"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div v-if="isEligibleDiscountWithGift()" class="rebuy-bundle-builder__group-container-gifts">
                            <h3 class="rebuy-bundle-builder__gift-header" v-html="getBundleDiscountTierLabel('gift_header_message')"></h3>

                            <div
                                v-for="(product, product_index) in eligible_discount.gift_items"
                                v-if="product.data"
                                class="rebuy-bundle-builder__gift-product"
                                v-bind:key="'rebuy-bundle-builder-gift-product--' + product_index"
                            >
                                <div class="rebuy-bundle-builder__gift-product-image">
                                    <img
                                        v-bind:src="itemImage(product.data, product.data.selected_variant, '80x80')"
                                        v-bind:alt="'View ' + product.data.title"
                                    />
                                </div>

                                <div class="rebuy-bundle-builder__gift-product-info-wrapper">
                                    <div class="rebuy-bundle-builder__gift-product-info">
                                        <h3 class="rebuy-bundle-builder__gift-product-title" v-html="product.data.title"></h3>
                                    </div>

                                    <div v-if="product.data.variants.length > 1" class="rebuy-product-options">
                                        <select
                                            :id="id + '-' + 'gift-select' + '-' + product_index"
                                            class="rebuy-select rebuy-bundle-builder__gift-product-select"
                                            v-bind:aria-label="'variant of ' + product.data.title"
                                            v-model="product.data.selected_variant_id"
                                            v-on:change="selectVariant(product.data)">
                                            <option
                                                v-for="variant in product.data.variants"
                                                class="rebuy-product-options__option"
                                                :class="{ 'rebuy-product-options__option--oos' : !variantAvailable(variant) }"
                                                v-bind:value="variant.id"
                                                :disabled="!variantAvailable(variant)"
                                                v-html="formatVariantOptionTitle(variant)">
                                            </option>
                                        </select>
                                    </div>

                                    <div class="rebuy-bundle-builder__gift-product-actions">
                                        <button
                                            v-if="hasSelectedGiftProduct(product.data)"
                                            class="rebuy-bundle-builder__gift-product-button rebuy-bundle-builder__gift-product-button--remove"
                                            v-on:click="handleRemovingGiftProduct(product.data)">
                                            <rebuy-icon name="x"></rebuy-icon>
                                        </button>

                                        <button
                                            v-if="!hasSelectedGiftProduct(product.data)"
                                            class="rebuy-button rebuy-bundle-builder__gift-product-button rebuy-bundle-builder__gift-product-button--add"
                                            v-on:click="handleAddingGiftProduct(product.data)">
                                            <span v-html="getBundleConfigLabel('select_gift')"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="rebuy-bundle-builder__group-container-body"
                            v-bind:class="[has_container_expanded ? 'expanded' : 'default']">
                            <div class="rebuy-bundle-builder__group-container-body-items">
                                <div
                                    v-for="(product, product_index) in bundleProducts"
                                    class="rebuy-bundle-builder__product-holder"
                                    aria-label="product"
                                    role="listitem"
                                    >
                                    <div
                                        v-if="product.classification === 'placeholder'"
                                        class="rebuy-bundle-builder__product-holder-template"
                                        >
                                        <div class="rebuy-bundle-builder__product-sign-holder">
                                            <span class="rebuy-bundle-builder__product-holder-icon">
                                                <rebuy-icon name="plus"></rebuy-icon>
                                            </span>
                                        </div>

                                        <div class="rebuy-bundle-builder__product-holder-detail">
                                            <h3
                                                class="rebuy-bundle-builder__product-holder-detail-title"
                                                v-html="getBundleConfigLabel('select_product')">
                                            </h3>

                                            <p
                                                v-if="product.label"
                                                class="rebuy-bundle-builder__product-holder-detail-description"
                                                v-html="product.label">
                                            </p>
                                        </div>
                                    </div>

                                    <div v-if="!product.classification" class="rebuy-bundle-builder__product-holder-data">
                                        <div class="rebuy-bundle-builder__product-holder-info--left">
                                            <div class="rebuy-bundle-builder__product-holder-media rebuy-product-media">
                                                <img
                                                    v-bind:src="itemImage(product, product.selected_variant, '80x80')"
                                                    v-bind:alt="'View ' + product.title"
                                                />
                                            </div>
                                            <div class="rebuy-bundle-builder__product-holder-info rebuy-product-info">
                                                <h3 class="rebuy-bundle-builder__product-holder-info-title rebuy-product-title" v-html="product.title"></h3>

                                                <p
                                                    v-if="!shouldHideDefaultVariantTitle(product)"
                                                    class="rebuy-bundle-builder__product-holder-info-variant rebuy-variant-title"
                                                    v-html="product.selected_variant.title"
                                                    >
                                                </p>

                                                <div class="rebuy-bundle-builder__product-holder-info-price rebuy-product-price">
                                                    <div v-if="bundleVariantOnSale(product, product.selected_variant, true)">
                                                        <span class="rebuy-money sale">
                                                            <span class="sr-only">Sale price</span>
                                                            <span tabindex="0" v-html="formatMoney(bundleVariantPrice(product, product.selected_variant))"></span>
                                                        </span>
                                                        <span class="rebuy-money compare-at">
                                                            <span class="sr-only">Original price</span>
                                                            <span v-html="formatMoney(bundleVariantCompareAtPrice(product, product.selected_variant))"></span>
                                                        </span>
                                                        <div
                                                            v-if="isFixedDiscountBundle()"
                                                            class="rebuy-bundle-builder__fixed-discount-line-item-message"
                                                            v-html="getBundleConfigLabel('fixed_tier_discount')">
                                                        </div>
                                                    </div>
                                                    <div v-if="!(bundleVariantOnSale(product, product.selected_variant, true))">
                                                        <span class="rebuy-money">
                                                            <span class="sr-only">Price</span>
                                                            <span tabindex="0" v-html="formatMoney(bundleVariantPrice(product, product.selected_variant))"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="rebuy-bundle-builder__product-holder-info--right">
                                            <button
                                                class="rebuy-bundle-builder__product-holder-info-delete"
                                                v-on:click="handleRemovingProductFromBundle(product_index)"
                                            >
                                                <rebuy-icon name="x"></rebuy-icon>
                                            </button>
                                        </div>
                                        </div>
                                </div>
                            </div>
                            <div
                                v-if="hasBundleBuilderTotalSavingsEnabled() && getBundleTotalSavingAmount(products) > 0"
                                class="rebuy-bundle-builder__total-savings-container">
                                    <span class="rebuy-bundle-builder__total-savings-label">
                                        Total Savings:
                                    </span>
                                    <span
                                        class="rebuy-bundle-builder__total-savings-amount rebuy-money sale"
                                        v-html="formatMoney(getBundleTotalSavingAmount(products))">
                                    </span>
                            </div>
                            <div v-if="hasSelectedEnabledBundleSubscription()" class="rebuy-bundle-builder__subscription-options">
                                <div
                                    class="rebuy-bundle-builder__action-box-cta rebuy-bundle-builder__action-box-subscription"
                                    v-bind:class="[!hasSellingPlansIntervalList() ? 'rebuy-bundle-builder__action-box-cta--disabled' : '' ]">
                                    <div class="rebuy-bundle-builder__action-box-top">
                                        <label class="rebuy-radio-label">
                                            <input
                                                class="radio-input rebuy-radio rebuy-bundle-builder__action-box-radio"
                                                v-model="selected_purchase_type"
                                                value="subscription"
                                                type="radio"
                                                v-bind:disabled="!hasSellingPlansIntervalList()"
                                            />
                                            <span
                                                class="rebuy-bundle-builder__action-box-label"
                                                v-html="getBundleConfigLabel('switch_to_subscription_title')"
                                            >
                                            </span>
                                        </label>

                                        <div class="rebuy-bundle-builder__action-box-price">
                                            <span v-if="bundleHasEligibleDiscount(products) || getSubBundleSubtotalSavingPercent(products)">
                                                <span class="rebuy-money compare-at">
                                                    <span class="sr-only">Original subtotal price</span>
                                                    <span v-html="formatMoney(getBundleSubtotal(products))"></span>
                                                </span>

                                                <span class="rebuy-money sale">
                                                    <span class="sr-only">Sale subtotal price</span>
                                                    <span tabindex="0" v-html="formatMoney(getSubBundleDiscountedSubtotal(products))"></span>
                                                </span>
                                            </span>

                                            <span v-if="!getSubBundleSubtotalSavingPercent(products) && (!bundleHasEligibleDiscount(products) && getBundleSubtotal(products))" class="rebuy-money sale">
                                                <span class="sr-only">Subtotal price</span>
                                                <span tabindex="0" v-html="formatMoney(getBundleSubtotal(products))"></span>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="rebuy-bundle-builder__action-box-bottom">
                                        <p
                                            v-if="getBundleConfigLabel('switch_to_subscription_description')"
                                            class="rebuy-bundle-builder__action-box-description"
                                            v-html="getBundleConfigLabel('switch_to_subscription_description')">
                                        </p>

                                        <div v-if="hasSellingPlansIntervalList()" class="rebuy-bundle-builder__action-box-details">
                                            <select
                                                id="rebuy-bundle-builder-subscription-interval"
                                                class="rebuy-select rebuy-bundle-builder__action-box-select"
                                                v-model="selected_interval"
                                                v-on:change="handleSubscriptionIntervalChange($event)"
                                                >
                                                <option
                                                    v-for="(interval, interval_index) in selling_plan_interval_list"
                                                    v-bind:key="'rebuy-bundle-builder-subscription-interval--' + interval_index"
                                                    v-bind:value="interval">
                                                    
                                                </option>
                                            </select>

                                            <span v-if="getBundleConfigLabel('save_label') && getSubBundleSubtotalSavingPercent(products)" class="rebuy-bundle-builder__action-box-saving">
                                                <span v-html="getBundleConfigLabel('save_label')"></span>
                                                <span v-html="getSubBundleSubtotalSavingPercent(products)"></span>
                                            </span>
                                        </div>

                                        <p
                                            v-if="hasExcludedBundleDiscountEnabled() && getBundleConfigLabel('excluded_bundle_discount_text')"
                                            class="rebuy-bundle-builder__action-box-note"
                                            v-html="getBundleConfigLabel('excluded_bundle_discount_text')">
                                        </p>
                                    </div>
                                </div>
                                <div v-if="!hasBundleBuilderSubscriptionOnlyEnabled()" class="rebuy-bundle-builder__action-box-cta rebuy-bundle-builder__action-box-subscription">
                                    <div class="rebuy-bundle-builder__action-box-top">
                                        <label class="rebuy-radio-label">
                                            <input
                                                class="radio-input rebuy-radio rebuy-bundle-builder__action-box-radio"
                                                v-model="selected_purchase_type"
                                                value="one-time"
                                                type="radio"
                                            />
                                            <span
                                                v-if="getBundleConfigLabel('one_time_title')"
                                                class="rebuy-bundle-builder__action-box-label"
                                                v-html="getBundleConfigLabel('one_time_title')"
                                            >
                                            </span>
                                        </label>

                                        <div class="rebuy-bundle-builder__action-box-price">
                                            <span v-if="bundleHasEligibleDiscount()">
                                                <span class="rebuy-money compare-at">
                                                    <span class="sr-only">Original subtotal price</span>
                                                    <span v-html="formatMoney(getBundleSubtotal(products))"></span>
                                                </span>

                                                <span class="rebuy-money sale">
                                                    <span class="sr-only">Sale subtotal price</span>
                                                    <span tabindex="0" v-html="formatMoney(getBundleDiscountedSubtotal(products))"></span>
                                                </span>
                                            </span>

                                            <span v-if="!bundleHasEligibleDiscount() && getBundleSubtotal(products)" class="rebuy-money sale">
                                                <span class="sr-only">Subtotal price</span>
                                                <span tabindex="0" v-html="formatMoney(getBundleSubtotal(products))"></span>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="rebuy-bundle-builder__action-box-bottom">
                                        <p
                                            v-if="getBundleConfigLabel('one_time_description')"
                                            class="rebuy-bundle-builder__action-box-description"
                                            v-html="getBundleConfigLabel('one_time_description')">
                                        </p>
                                    </div>
                                </div>
                                </div>
                        </div>
                        <div class="rebuy-bundle-builder__group-container-action">
                            <div class="rebuy-bundle-builder__cta-container">
                                <button
                                    class="rebuy-button"
                                    v-on:click="addSelectedProductsToCart()"
                                    v-bind:disabled="shouldDisableAddBundleToCart(products)"
                                    aria-label="Add all selected products to cart"
                                    >
                                    <span v-html="buttonWidgetLabel()"></span>

                                    <span v-if="!hasSelectedEnabledBundleSubscription()">
                                        <span v-if="bundleHasEligibleDiscount()">
                                            <span class="rebuy-money sale">
                                                <span class="sr-only">Sale subtotal price</span>
                                                <span tabindex="0" v-html="formatMoney(getBundleDiscountedSubtotal(products))"></span>
                                            </span>

                                            <span class="rebuy-money compare-at">
                                                <span class="sr-only">Original subtotal price</span>
                                                <span v-html="formatMoney(getBundleSubtotal(products))"></span>
                                            </span>
                                        </span>

                                        <span v-if="!bundleHasEligibleDiscount() && getBundleSubtotal(products)" class="rebuy-money sale">
                                            <span class="sr-only">Subtotal price</span>
                                            <span tabindex="0" v-html="formatMoney(getBundleSubtotal(products))"></span>
                                        </span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div
                    class="rebuy-bundle-builder__group-container rebuy-bundle-builder__group-container--desktop"
                    v-bind:class="[has_container_expanded ? 'expanded' : 'default']">
                    <div class="rebuy-bundle-builder__group-container-inner">
                        <div class="rebuy-bundle-builder__group-container-header">
                            <div class="rebuy-bundle-builder__group-container-header--left">
                                <h3
                                    class="rebuy-bundle-builder__group-container-header-title"
                                    v-html="getBundleConfigLabel('bundle_container_title')"
                                >
                                </h3>

                                <span class="rebuy-bundle-builder__group-container-header-title-count">
                                    <span
                                        class="rebuy-bundle-builder__group-container-header-products_count"
                                        v-html="getBundleContainerHeaderValue('products_count')">
                                    </span>

                                    <span class="rebuy-bundle-builder__group-container-header-divider">/</span>

                                    <span
                                        class="rebuy-bundle-builder__group-container-header-container-length"
                                        v-html="getBundleContainerHeaderValue('container_length')">
                                    </span>
                                </span>
                            </div>

                            <button
                                class="rebuy-bundle-builder__group-container-header-expand"
                                v-on:click="handleExpandingBundleContainer()"
                                >
                                <rebuy-icon v-if="hasBundleContainerExpanded()" name="chevron-down"></rebuy-icon>

                                <rebuy-icon v-if="!hasBundleContainerExpanded()" name="chevron-up"></rebuy-icon>
                            </button>
                        </div>

                        <div v-if="shouldDisplayBundleTierProgressBar()" class="rebuy-bundle-builder__group-container-progress-bar">
                            <div
                                class="rebuy-bundle-builder__group-progress-step-wrapper rebuy-bundle-builder__progress-step-wrapper"
                                v-bind:class="[ 'count-' + config.discount.tiers.length  ]"
                                >
                                <div
                                    v-for="(tier, tier_index) in config.discount.tiers"
                                    class="rebuy-bundle-builder__progress-step"
                                    v-bind:style="{ left: progressStepPosition(tier) }"
                                    v-bind:class="[
                                        progressTierReached(tier, products) ? 'complete' : '',
                                        'rebuy-bundle-builder__progress-step--' + tier_index
                                    ]"
                                    >

                                    <div
                                        class="rebuy-bundle-builder__progress-step-icon"
                                        v-bind:class="[ 'rebuy-bundle-builder__progress-step-icon-type-' + getBundleTierProgressStepType(tier) ]"
                                    >
                                        <span
                                            v-if="getBundleTierProgressStepType(tier) !== 'none'"
                                            v-html="formatBundleTierValue(tier.discount_value, tier.discount_type)"
                                            class="rebuy-bundle-builder__progress-step-value"
                                            v-bind:class="[ 'rebuy-bundle-builder__progress-step-value-type--' + getBundleTierProgressStepType(tier) ]"
                                            >
                                        </span>
                                    </div>

                                    <span
                                        class="rebuy-bundle-builder__progress-step-label"
                                        v-html="formatBundleTierLabel(tier)">
                                    </span>
                                </div>
                            </div>

                            <div class="rebuy-bundle-builder__progress-bar-wrapper">
                                <div
                                    class="rebuy-bundle-builder__progress-bar-meter"
                                    v-bind:class="[hasTierProgress(products) ? 'has-progress' : 'no-progress']">
                                    <div
                                        class="rebuy-bundle-builder__progress-bar-meter-fill"
                                        v-bind:style="{ width: (tiersPercentageComplete(config.discount.tiers, products) || '0%') }"
                                        role="progressbar"
                                        tabindex="0"
                                        aria-valuemin="0"
                                        aria-valuemax="100"
                                        v-bind:aria-valuenow="tiersPercentageComplete(config.discount.tiers, products)"
                                        aria-labelledby="rebuy-bundle-builder__progress-bar-meter-label"
                                    >
                                        <span class="sr-only"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div v-if="isEligibleDiscountWithGift()" class="rebuy-bundle-builder__group-container-gifts">
                            <h3 class="rebuy-bundle-builder__gift-header" v-html="getBundleDiscountTierLabel('gift_header_message')"></h3>

                            <div
                                v-for="(product, product_index) in eligible_discount.gift_items"
                                v-if="product.data"
                                class="rebuy-bundle-builder__gift-product"
                                v-bind:key="'rebuy-bundle-builder-gift-product-desktop--' + product_index"
                            >
                                <div class="rebuy-bundle-builder__gift-product-image">
                                    <img
                                        v-bind:src="itemImage(product.data, product.data.selected_variant, '80x80')"
                                        v-bind:alt="'View ' + product.data.title"
                                    />
                                </div>

                                <div class="rebuy-bundle-builder__gift-product-info-wrapper">
                                    <div class="rebuy-bundle-builder__gift-product-info">
                                        <h3 class="rebuy-bundle-builder__gift-product-title" v-html="product.data.title"></h3>
                                    </div>

                                    <div v-if="product.data.variants.length > 1" class="rebuy-product-options">
                                        <select
                                            :id="id + '-' + 'gift-select-desktop' + '-' + product_index"
                                            class="rebuy-select rebuy-bundle-builder__gift-product-select"
                                            v-bind:aria-label="'variant of ' + product.data.title"
                                            v-model="product.data.selected_variant_id"
                                            v-on:change="selectVariant(product.data)">
                                            <option
                                                v-for="variant in product.data.variants"
                                                class="rebuy-product-options__option"
                                                :class="{ 'rebuy-product-options__option--oos' : !variantAvailable(variant) }"
                                                v-bind:value="variant.id"
                                                :disabled="!variantAvailable(variant)"
                                                v-html="formatVariantOptionTitle(variant)">
                                            </option>
                                        </select>
                                    </div>

                                    <div class="rebuy-bundle-builder__gift-product-actions">
                                        <button
                                            v-if="hasSelectedGiftProduct(product.data)"
                                            class="rebuy-bundle-builder__gift-product-button rebuy-bundle-builder__gift-product-button--remove"
                                            v-on:click="handleRemovingGiftProduct(product.data)">
                                            <rebuy-icon name="x"></rebuy-icon>
                                        </button>

                                        <button
                                            v-if="!hasSelectedGiftProduct(product.data)"
                                            class="rebuy-button rebuy-bundle-builder__gift-product-button rebuy-bundle-builder__gift-product-button--add"
                                            v-on:click="handleAddingGiftProduct(product.data)">
                                            <span v-html="getBundleConfigLabel('select_gift')"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="rebuy-bundle-builder__group-container-body"
                            v-bind:class="[has_container_expanded ? 'expanded' : 'default']">
                            <div class="rebuy-bundle-builder__group-container-body-items">
                                <div
                                    v-for="(product, product_index) in bundleProducts"
                                    class="rebuy-bundle-builder__product-holder"
                                    aria-label="product"
                                    role="listitem"
                                    >
                                    <div
                                        v-if="product.classification === 'placeholder'"
                                        class="rebuy-bundle-builder__product-holder-template"
                                        >
                                        <div class="rebuy-bundle-builder__product-sign-holder">
                                            <span class="rebuy-bundle-builder__product-holder-icon">
                                                <rebuy-icon name="plus"></rebuy-icon>
                                            </span>
                                        </div>

                                        <div class="rebuy-bundle-builder__product-holder-detail">
                                            <h3
                                                class="rebuy-bundle-builder__product-holder-detail-title"
                                                v-html="getBundleConfigLabel('select_product')">
                                            </h3>

                                            <p
                                                v-if="product.label"
                                                class="rebuy-bundle-builder__product-holder-detail-description"
                                                v-html="product.label">
                                            </p>
                                        </div>
                                    </div>

                                    <div v-if="!product.classification" class="rebuy-bundle-builder__product-holder-data">
                                        <div class="rebuy-bundle-builder__product-holder-info--left">
                                            <div class="rebuy-bundle-builder__product-holder-media rebuy-product-media">
                                                <img
                                                    v-bind:src="itemImage(product, product.selected_variant, '80x80')"
                                                    v-bind:alt="'View ' + product.title"
                                                />
                                            </div>
                                            <div class="rebuy-bundle-builder__product-holder-info rebuy-product-info">
                                                <h3 class="rebuy-bundle-builder__product-holder-info-title rebuy-product-title" v-html="product.title"></h3>

                                                <p
                                                    v-if="!shouldHideDefaultVariantTitle(product)"
                                                    class="rebuy-bundle-builder__product-holder-info-variant rebuy-variant-title"
                                                    v-html="product.selected_variant.title"
                                                    >
                                                </p>

                                                <div class="rebuy-bundle-builder__product-holder-info-price rebuy-product-price">
                                                    <div v-if="bundleVariantOnSale(product, product.selected_variant, true)">
                                                        <span class="rebuy-money sale">
                                                            <span class="sr-only">Sale price</span>
                                                            <span tabindex="0" v-html="formatMoney(bundleVariantPrice(product, product.selected_variant))"></span>
                                                        </span>
                                                        <span class="rebuy-money compare-at">
                                                            <span class="sr-only">Original price</span>
                                                            <span v-html="formatMoney(bundleVariantCompareAtPrice(product, product.selected_variant))"></span>
                                                        </span>
                                                        <div
                                                            v-if="isFixedDiscountBundle()"
                                                            class="rebuy-bundle-builder__fixed-discount-line-item-message"
                                                            v-html="getBundleConfigLabel('fixed_tier_discount')">
                                                        </div>
                                                    </div>
                                                    <div v-if="!(bundleVariantOnSale(product, product.selected_variant, true))">
                                                        <span class="rebuy-money">
                                                            <span class="sr-only">Price</span>
                                                            <span tabindex="0" v-html="formatMoney(bundleVariantPrice(product, product.selected_variant))"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="rebuy-bundle-builder__product-holder-info--right">
                                            <button
                                                class="rebuy-bundle-builder__product-holder-info-delete"
                                                v-on:click="handleRemovingProductFromBundle(product_index)"
                                            >
                                                <rebuy-icon name="x"></rebuy-icon>
                                            </button>
                                        </div>
                                        </div>
                                </div>
                            </div>
                            <div
                                v-if="hasBundleBuilderTotalSavingsEnabled() && getBundleTotalSavingAmount(products) > 0"
                                class="rebuy-bundle-builder__total-savings-container">
                                    <span class="rebuy-bundle-builder__total-savings-label">
                                        Total Savings:
                                    </span>
                                    <span
                                        class="rebuy-bundle-builder__total-savings-amount rebuy-money sale"
                                        v-html="formatMoney(getBundleTotalSavingAmount(products))">
                                    </span>
                            </div>
                            <div v-if="hasSelectedEnabledBundleSubscription()" class="rebuy-bundle-builder__subscription-options">
                                <div
                                    class="rebuy-bundle-builder__action-box-cta rebuy-bundle-builder__action-box-subscription"
                                    v-bind:class="[!hasSellingPlansIntervalList() ? 'rebuy-bundle-builder__action-box-cta--disabled' : '' ]">
                                    <div class="rebuy-bundle-builder__action-box-top">
                                        <label class="rebuy-radio-label">
                                            <input
                                                class="radio-input rebuy-radio rebuy-bundle-builder__action-box-radio"
                                                v-model="selected_purchase_type"
                                                value="subscription"
                                                type="radio"
                                                v-bind:disabled="!hasSellingPlansIntervalList()"
                                            />
                                            <span
                                                class="rebuy-bundle-builder__action-box-label"
                                                v-html="getBundleConfigLabel('switch_to_subscription_title')"
                                            >
                                            </span>
                                        </label>

                                        <div class="rebuy-bundle-builder__action-box-price">
                                            <span v-if="bundleHasEligibleDiscount(products) || getSubBundleSubtotalSavingPercent(products)">
                                                <span class="rebuy-money compare-at">
                                                    <span class="sr-only">Original subtotal price</span>
                                                    <span v-html="formatMoney(getBundleSubtotal(products))"></span>
                                                </span>

                                                <span class="rebuy-money sale">
                                                    <span class="sr-only">Sale subtotal price</span>
                                                    <span tabindex="0" v-html="formatMoney(getSubBundleDiscountedSubtotal(products))"></span>
                                                </span>
                                            </span>

                                            <span v-if="!getSubBundleSubtotalSavingPercent(products) && (!bundleHasEligibleDiscount(products) && getBundleSubtotal(products))" class="rebuy-money sale">
                                                <span class="sr-only">Subtotal price</span>
                                                <span tabindex="0" v-html="formatMoney(getBundleSubtotal(products))"></span>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="rebuy-bundle-builder__action-box-bottom">
                                        <p
                                            v-if="getBundleConfigLabel('switch_to_subscription_description')"
                                            class="rebuy-bundle-builder__action-box-description"
                                            v-html="getBundleConfigLabel('switch_to_subscription_description')">
                                        </p>

                                        <div v-if="hasSellingPlansIntervalList()" class="rebuy-bundle-builder__action-box-details">
                                            <select
                                                id="rebuy-bundle-builder-subscription-interval-desktop"
                                                class="rebuy-select rebuy-bundle-builder__action-box-select"
                                                v-model="selected_interval"
                                                v-on:change="handleSubscriptionIntervalChange($event)"
                                                >
                                                <option
                                                    v-for="(interval, interval_index) in selling_plan_interval_list"
                                                    v-bind:key="'rebuy-bundle-builder-subscription-interval-desktop--' + interval_index"
                                                    v-bind:value="interval">
                                                    
                                                </option>
                                            </select>

                                            <span v-if="getBundleConfigLabel('save_label') && getSubBundleSubtotalSavingPercent(products)" class="rebuy-bundle-builder__action-box-saving">
                                                <span v-html="getBundleConfigLabel('save_label')"></span>
                                                <span v-html="getSubBundleSubtotalSavingPercent(products)"></span>
                                            </span>
                                        </div>

                                        <p
                                            v-if="hasExcludedBundleDiscountEnabled() && getBundleConfigLabel('excluded_bundle_discount_text')"
                                            class="rebuy-bundle-builder__action-box-note"
                                            v-html="getBundleConfigLabel('excluded_bundle_discount_text')">
                                        </p>
                                    </div>
                                </div>
                                <div v-if="!hasBundleBuilderSubscriptionOnlyEnabled()" class="rebuy-bundle-builder__action-box-cta rebuy-bundle-builder__action-box-subscription">
                                    <div class="rebuy-bundle-builder__action-box-top">
                                        <label class="rebuy-radio-label">
                                            <input
                                                class="radio-input rebuy-radio rebuy-bundle-builder__action-box-radio"
                                                v-model="selected_purchase_type"
                                                value="one-time"
                                                type="radio"
                                            />
                                            <span
                                                v-if="getBundleConfigLabel('one_time_title')"
                                                class="rebuy-bundle-builder__action-box-label"
                                                v-html="getBundleConfigLabel('one_time_title')"
                                            >
                                            </span>
                                        </label>

                                        <div class="rebuy-bundle-builder__action-box-price">
                                            <span v-if="bundleHasEligibleDiscount()">
                                                <span class="rebuy-money compare-at">
                                                    <span class="sr-only">Original subtotal price</span>
                                                    <span v-html="formatMoney(getBundleSubtotal(products))"></span>
                                                </span>

                                                <span class="rebuy-money sale">
                                                    <span class="sr-only">Sale subtotal price</span>
                                                    <span tabindex="0" v-html="formatMoney(getBundleDiscountedSubtotal(products))"></span>
                                                </span>
                                            </span>

                                            <span v-if="!bundleHasEligibleDiscount() && getBundleSubtotal(products)" class="rebuy-money sale">
                                                <span class="sr-only">Subtotal price</span>
                                                <span tabindex="0" v-html="formatMoney(getBundleSubtotal(products))"></span>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="rebuy-bundle-builder__action-box-bottom">
                                        <p
                                            v-if="getBundleConfigLabel('one_time_description')"
                                            class="rebuy-bundle-builder__action-box-description"
                                            v-html="getBundleConfigLabel('one_time_description')">
                                        </p>
                                    </div>
                                </div>
                                </div>
                        </div>
                        <div class="rebuy-bundle-builder__group-container-action">
                            <div class="rebuy-bundle-builder__cta-container">
                                <button
                                    class="rebuy-button"
                                    v-on:click="addSelectedProductsToCart()"
                                    v-bind:disabled="shouldDisableAddBundleToCart(products)"
                                    aria-label="Add all selected products to cart"
                                    >
                                    <span v-html="buttonWidgetLabel()"></span>

                                    <span v-if="!hasSelectedEnabledBundleSubscription()">
                                        <span v-if="bundleHasEligibleDiscount()">
                                            <span class="rebuy-money sale">
                                                <span class="sr-only">Sale subtotal price</span>
                                                <span tabindex="0" v-html="formatMoney(getBundleDiscountedSubtotal(products))"></span>
                                            </span>

                                            <span class="rebuy-money compare-at">
                                                <span class="sr-only">Original subtotal price</span>
                                                <span v-html="formatMoney(getBundleSubtotal(products))"></span>
                                            </span>
                                        </span>

                                        <span v-if="!bundleHasEligibleDiscount() && getBundleSubtotal(products)" class="rebuy-money sale">
                                            <span class="sr-only">Subtotal price</span>
                                            <span tabindex="0" v-html="formatMoney(getBundleSubtotal(products))"></span>
                                        </span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

        <div
            v-if="has_container_expanded"
            class="rebuy-bundle-builder__full-screen-background rebuy-full-screen__background"
            v-on:click="handleExpandingBundleContainer()">
        </div>
    </div>
</script>

<style>
/* * SDE FIXES: 
 * 1. Force mobile/desktop switching with !important to prevent layout freeze.
 * 2. Hide product list on MOBILE when EXPANDED to keep the success popup clean.
 */

/* Mobile: Show mobile version, FORCE hide desktop version */
@media (max-width: 768px) {
    .rebuy-bundle-builder__group-container--mobile {
        display: block !important;
    }
    .rebuy-bundle-builder__group-container--desktop {
        display: none !important;
    }

    /* * HIDE product list body on mobile when Expanded (Tier Achieved popup).
     * This prevents the list from cluttering the success/gift screen.
     */
    .rebuy-bundle-builder__group-container--mobile.expanded .rebuy-bundle-builder__group-container-body-items {
        display: none !important;
    }
}

/* Desktop: Hide mobile version, FORCE show desktop version */
@media (min-width: 769px) {
    .rebuy-bundle-builder__group-container--mobile {
        display: none !important;
    }
    .rebuy-bundle-builder__group-container--desktop {
        display: block !important;
    }
    
    /* Ensure progress bar is visible on desktop */
    .rebuy-bundle-builder__group-container--desktop .rebuy-bundle-builder__group-container-progress-bar {
        display: block;
    }

    /* Desktop: Ensure body STAYS visible when expanded (sidebar mode) */
    .rebuy-bundle-builder__group-container-body.expanded {
        display: block !important;
        max-height: none !important;
        overflow: visible !important;
    }
}

/* Fix for expanded state: BOTTOM SHEET Style (not full screen white void) */
.rebuy-bundle-builder__group-container.expanded {
    position: fixed !important;
    top: auto !important; /* Don't stick to top */
    bottom: 0 !important; /* Stick to bottom */
    left: 0 !important;
    right: 0 !important;
    width: 100% !important;
    height: auto !important; /* Height adjusts to content only */
    max-height: 85vh !important;
    z-index: 2147483647 !important; /* Max safe integer z-index */
    overflow-y: auto !important;
    background: white !important;
    margin: 0 !important;
    box-shadow: 0 -4px 10px rgba(0,0,0,0.1);
    border-top-left-radius: 12px;
    border-top-right-radius: 12px;
    padding-bottom: 20px; /* Safe area */
    -webkit-overflow-scrolling: touch; 
    will-change: transform; 
    transform: translate3d(0,0,0);
}

.rebuy-bundle-builder__group-container.expanded .rebuy-bundle-builder__group-container-inner {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    min-height: auto !important;
}

/* Ensure header stays at top when expanded */
.rebuy-bundle-builder__group-container.expanded .rebuy-bundle-builder__group-container-header {
    position: sticky;
    top: 0;
    background: white;
    z-index: 10;
    padding: 16px 0;
    margin-bottom: 16px;
    border-bottom: 1px solid #e0e0e0;
}

/* Prevent body scroll when expanded */
body.rebuy-bundle-expanded {
    overflow: hidden !important;
    height: 100%; 
}
</style>

<style>
header.header {
    overflow: visible!important;
}
.header--icon {
    color: #000;
    width: 40px;
    justify-content: center;
}
svg#svgkp {
    width: 27px;
    height: 27px;
}
path#svgkp-path {
    stroke-width: 1.3;
}
</style>

  <div id="shopify-block-Ab3N4UElqNDJTdFZLN__8238411214064901437" class="shopify-block shopify-app-block"><!-- BEGIN app snippet: widget_initializer -->










<!-- BEGIN app snippet: nector_auth --><!-- END app snippet -->

<script
  async
  src="https://cdn.nector.io/nector-static/no-cache/reward-widget/mainloader.min.js"
  data-op="widget"
  data-platform_url="https://platform.nector.io"
  data-websdk_url="https://websdk.nector.io"
  data-api_key="ak_dbdb07a3ae45b637ddcd053d5159f74036ae45692f6157b5664f36595531a66d"
  data-entity_id="e7f0715b-3ea9-4d98-be23-5e384a9c1d13"
  data-customer_id=""
  data-platform="shopify"
  
    data-target_currency="INR"
  
></script>
<!-- END app snippet -->
</div><div id="shopify-block-AVFIySTFEaVpmWUFPS__144831480468751239" class="shopify-block shopify-app-block"><!-- BEGIN app snippet: vite-tag -->


  <script src="https://cdn.shopify.com/extensions/019e87d6-ce44-7a31-a4f8-713af879d6ad/essential-post-purchase-upsell-1518/assets/app-embed-CBOjdCh8.js" type="module" crossorigin="anonymous"></script>
  <link rel="modulepreload" href="https://cdn.shopify.com/extensions/019e87d6-ce44-7a31-a4f8-713af879d6ad/essential-post-purchase-upsell-1518/assets/stylex-D_oas0bR.js" crossorigin="anonymous">
  <link href="//cdn.shopify.com/extensions/019e87d6-ce44-7a31-a4f8-713af879d6ad/essential-post-purchase-upsell-1518/assets/stylex-DI5Dahhn.css" rel="stylesheet" type="text/css" media="all" />

<!-- END app snippet -->


<essential-upsell-app-embed
  upsell-app-data="{&quot;funnels&quot;:[{&quot;id&quot;:&quot;6057fb23-d51c-4162-8d4a-f25a3519c27f&quot;,&quot;content&quot;:{&quot;offerType&quot;:&quot;CROSS_SELL&quot;,&quot;titleText&quot;:&quot;Buy together, Save 10%&quot;,&quot;buttonText&quot;:&quot;Add&quot;},&quot;upsell&quot;:{&quot;productsType&quot;:&quot;SPECIFIC&quot;,&quot;discountType&quot;:&quot;NONE&quot;,&quot;discountValue&quot;:null,&quot;specificProducts&quot;:[{&quot;shopifyId&quot;:&quot;gid://shopify/Product/9487398043938&quot;,&quot;shopifyHandle&quot;:&quot;cheese-protein-wafer&quot;},{&quot;shopifyId&quot;:&quot;gid://shopify/Product/9483316592930&quot;,&quot;shopifyHandle&quot;:&quot;choco-peanut-butter-protein-wafer&quot;},{&quot;shopifyId&quot;:&quot;gid://shopify/Product/9487398076706&quot;,&quot;shopifyHandle&quot;:&quot;chocolate-protein-wafer&quot;},{&quot;shopifyId&quot;:&quot;gid://shopify/Product/9494053978402&quot;,&quot;shopifyHandle&quot;:&quot;variety-box&quot;}]},&quot;design&quot;:{&quot;layoutType&quot;:&quot;CAROUSEL&quot;,&quot;stackedProductsCount&quot;:null,&quot;backgroundType&quot;:&quot;MONOCHROME&quot;,&quot;monochromeBackgroundColor&quot;:&quot;#ffffff&quot;,&quot;gradientBackgroundStartColor&quot;:null,&quot;gradientBackgroundEndColor&quot;:null,&quot;gradientBackgroundAngle&quot;:null,&quot;borderRadius&quot;:0,&quot;borderSize&quot;:1,&quot;borderColor&quot;:&quot;#151515&quot;,&quot;insideTopSpacing&quot;:10,&quot;insideBottomSpacing&quot;:10,&quot;outsideTopSpacing&quot;:20,&quot;outsideBottomSpacing&quot;:20,&quot;font&quot;:&quot;HELVETICA&quot;,&quot;titleSize&quot;:16,&quot;titleColor&quot;:&quot;#151515&quot;,&quot;productTitleSize&quot;:14,&quot;productTitleColor&quot;:&quot;#151515&quot;,&quot;productVariantSize&quot;:14,&quot;productVariantColor&quot;:&quot;#151515&quot;,&quot;productPriceSize&quot;:14,&quot;productPriceColor&quot;:&quot;#151515&quot;,&quot;discountedPriceSize&quot;:14,&quot;discountedPriceColor&quot;:&quot;#151515&quot;,&quot;buttonBackgroundColor&quot;:&quot;#202223&quot;,&quot;buttonTextSize&quot;:14,&quot;buttonTextColor&quot;:&quot;#fafafa&quot;,&quot;buttonBorderRadius&quot;:4,&quot;navigationIconColor&quot;:&quot;#151515&quot;,&quot;checkboxIconColor&quot;:null,&quot;checkboxBackgroundColor&quot;:null,&quot;checkboxBorderColor&quot;:null},&quot;placement&quot;:{&quot;type&quot;:&quot;CART_PAGE&quot;,&quot;triggerType&quot;:&quot;ALL&quot;,&quot;cartPagePositionType&quot;:&quot;BOTTOM_OF_THE_CART&quot;,&quot;specificProducts&quot;:[],&quot;specificCollections&quot;:[]}}]}"
  upsell-app-config-data='{&quot;analyticsBaseUrl&quot;:&quot;&quot;,&quot;storefrontAccessTokenValue&quot;:&quot;&quot;}'
  upsell-app-discounts-data="{&quot;funnels&quot;:[{&quot;id&quot;:&quot;6057fb23-d51c-4162-8d4a-f25a3519c27f&quot;,&quot;upsell&quot;:{&quot;discountType&quot;:&quot;NONE&quot;,&quot;discountValue&quot;:null},&quot;content&quot;:{&quot;offerType&quot;:&quot;CROSS_SELL&quot;}}]}"
  product-page-product="null"
  product-page-collection-ids="[]"
  cart-product-ids="[]"
  first-shop-product-id="9998885126434"
  shop-money-format="₹{{ amount }}"
  cart-items='
[]'
></essential-upsell-app-embed>


</div><div id="shopify-block-ATnVUSmc3ZTRQMGJya__12676059360672597252" class="shopify-block shopify-app-block"><!-- Async load CSS without render-blocking -->
<link rel="preload" href="https://cdn.shopify.com/extensions/019e4b77-8381-7628-9446-6e836faace61/referrush-293/assets/contact-form-styles.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="https://cdn.shopify.com/extensions/019e4b77-8381-7628-9446-6e836faace61/referrush-293/assets/contact-form-styles.css"></noscript>

<!-- blocks/contact-form.liquid -->
<template id="referrush-contact-form-template">
  <div id="contact_form_main_referrush" class="contact-form-container" data-shop-domain="867a08-5f.myshopify.com" data-y-position="20" data-position="left">
  </div>

  <!-- Refer and Earn Button -->
  <button id="referrush_widget_close_button" class="referrush-widget-close-button" aria-label="Close ReferRush Widget" style="display:none;">
    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
      <path d="M18 6L6 18M6 6l12 12"></path>
    </svg>
  </button>
  <button id="refer_and_earn_button_referrush" class="refer-and-earn-button" data-y-position="20" style="display:none;">Refer and Earn</button>
</template>

<script>
  // Load content and JS after DOM has finished parsing (non-blocking)
  window.addEventListener("DOMContentLoaded", () => {

    // Inject the template content into DOM
    const template = document.getElementById("referrush-contact-form-template");
    if (template) {
      document.body.appendChild(template.content.cloneNode(true));
    }

    // Lazy-load JS module
    const script = document.createElement("script");
    script.src = "https://cdn.shopify.com/extensions/019e4b77-8381-7628-9446-6e836faace61/referrush-293/assets/contact-form.js";
    script.type = "module";
    script.defer = true;
    document.body.appendChild(script);
  });
</script>

</div><div id="shopify-block-AeGNYaHB4QUNEc1FQe__773175526901516413" class="shopify-block shopify-app-block"><link rel="preload" href="https://cdn.shopify.com/extensions/019e4b77-8381-7628-9446-6e836faace61/referrush-293/assets/floating-popup-styles.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="https://cdn.shopify.com/extensions/019e4b77-8381-7628-9446-6e836faace61/referrush-293/assets/floating-popup-styles.css"></noscript>

<template id="referrush-popup-template">
<div id="popup_form_referrush" data-shop-domain="867a08-5f.myshopify.com">
  <style>
    .referrush-primary-button-text {
      color: #fff !important;
    }
  </style>
  <div id="popup_overlay_referrush">
  <div id="popup_content_referrush">
    <div id="close_button_referrush">&times;</div>
    <div id="skeleton_loader_referrush">
      <div class="skeleton-icon skeleton-item"></div>
      <div class="skeleton-line-sm skeleton-item"></div>
      <div class="skeleton-line-lg skeleton-item"></div>
      <div class="skeleton-button skeleton-item"></div>
      <div class="skeleton-line-sm skeleton-item"></div>
    </div>
    <div id="popup_text_referrush">
      <img id="referrush_gift_icon" width=80 height=80 src="https://firebasestorage.googleapis.com/v0/b/refero1.appspot.com/o/ReferRushData%2Fextensions%2Fnotification-popup%2Freferrush-popup-gift-icon.png?alt=media&token=0c4b6c85-8b4a-45a6-9b21-18166d70c5b9"/>
      <p id="referrer_name_title" class="content-description">Someone sent you</p>
      <h3 id="referrush-popup-title">10% off!</h3>
      <div id="copy_discount_code_section" class="copy-referral-container">
        <p id="discount_code_referrush" class="referral-code">
        </p>
        <button id="copy_code_button_referrush" class="copy-referral-button">
          Copy
        </button>
      </div>
      <button id="shop_now_button_referrush" class="referrush-primary-button">
        <div id="shop-now-text" class="referrush-primary-button-text">Accept gift</div>
      </button>
      <p id="referrush-discount-usage-text"></p>
      <p class="referrush-footer-text">Discount applied automatically</p>
    </div>
    <div id="referrush_error_state">
      <p class="content-description">Error</p>
      <h3>The referral link is invalid.</h3>
      <button id="close_error_referrush" class="referrush-primary-button">
        <span class="referrush-primary-button-text">Close</span>
      </button>
    </div>
    <div id="referrush-popup-tnc" style="text-align: center; font-size: 10px; color: #666; margin-top: 10px;">
      By accepting, you agree to our <a href="https://referrush.com/referrer-terms" target="_blank" style="text-decoration: underline; color: inherit;">Terms & Conditions</a>
    </div>
    <p class="powered-by-popup"> Powered by <a href="https://referrush.com" target="_blank">ReferRush</a> </p>
  </div>
  </div>
</div>
</template>

<script>
  window.addEventListener("DOMContentLoaded", () => {
    const script = document.createElement("script");
    script.src = "https://cdn.shopify.com/extensions/019e4b77-8381-7628-9446-6e836faace61/referrush-293/assets/floating-popup.js";
    script.type = "module";
    script.defer = true;
    document.body.appendChild(script);
  });
</script>


</div><div id="shopify-block-Ac2RSNzNpR2YxZXhDa__10482958812443994587" class="shopify-block shopify-app-block"><script
  id="bikScript"
  type="text/javascript"
>
  (async function () {
    const isProd = window.location.host !== 'icebreakerss.myshopify.com';
    const host = isProd ? 'cdn.bikinfo.co/bap' : 'api.staging.bik.ai/bap/static-scr';
    const storeUrl = Shopify.shop ?? window.location.origin;
    const lastModifiedAt = null || null;
    const isWidgetEnabled = null || "false";
    
    // Only proceed if widget is enabled (string "true")
    if (isWidgetEnabled === "true") {
      const response = await fetch(
          `https://${host}/storeFrontScriptsApiFunctions-getAllScriptSrc/?storeUrl=${storeUrl}&storeType=WHATSAPP&v=${lastModifiedAt}`,
          {
            method: "GET",
            mode: "cors",
            cache: "no-cache",
            credentials: "same-origin",
            headers: {
            "Content-Type": "application/json",
            },
            redirect: "follow",
            referrerPolicy: "no-referrer",
          }
      );
      const sources = await response.json();
      sources.data.forEach((src) => {
        const scriptTag = document.createElement("script");
        scriptTag.setAttribute("src", src);
        document.body.appendChild(scriptTag);
      });
    }
    
  })();
</script>
<a href="https://bik.ai" style="z-index: -1; position: fixed; top: -100%; bottom: -100%;"></a>

</div><div id="shopify-block-AZTA0UUdWeWUzNG9jV__1219337400145039034" class="shopify-block shopify-app-block"><!-- BEGIN app snippet: kwikpass --><script defer>
  function getCustomerId() {
    
    return null
    
  }
  
  function getThemeId() {
    
    return null
    
  }

  let token = null;
  let isDropdownVisible = false;
  let isDropdownMobileVisible = false;
  let isElementsWithAccountClickable = true;
  const ICON_SELECT_QUERY='.header__icon--account';
  const HORIZON_PROFILE_ICON = '.account-button.header-actions__action'
  
 // Define handleDrawer2 in global scope so it can be accessed by onclick attributes - for horizon themes
 function handleDrawer2() {
   const token = getValueFromCookiesOrLocalStorage(XGokwikCoreToken(window.merchantInfo.environment))
   if (token) {
     const kwikpassLoggedInElement = document.getElementById("icon-kwikpass");
     const crossIconElement = document.getElementById("icon-close-kwikpass")
     const drawerElement = document.getElementById("kwikpass-drawer-desktop")
     // display cross icon and hide icon-kwikpass if isDropdownVisible = true else display icon-kwikpass and hide cross icon
     if(drawerElement && crossIconElement && kwikpassLoggedInElement) {
       if(isDropdownVisible){
         drawerElement.style.display = "none";
         crossIconElement.style.display="none";
         kwikpassLoggedInElement.style.display="flex";
       }else{
         drawerElement.style.display = "block";
         crossIconElement.style.display="flex";
         kwikpassLoggedInElement.style.display="none";
       }
       isDropdownVisible = !isDropdownVisible;
     }
     
     const kwikpassLoggedInElementMbl = document.getElementById("icon-kwikpass-mobile");
     const crossIconElementMbl = document.getElementById("icon-close-kwikpass-mobile")
     const drawerElementMbl = document.getElementById("kwikpass-drawer-mobile")
     // display cross icon and hide icon-kwikpass if isDropdownMobileVisible = true else display icon-kwikpass and hide cross icon
     if(drawerElementMbl && crossIconElementMbl && kwikpassLoggedInElementMbl) {
       if(isDropdownMobileVisible){
         drawerElementMbl.style.display = "none";
         crossIconElementMbl.style.display="none";
         kwikpassLoggedInElementMbl.style.display="flex";
       }else{
         drawerElementMbl.style.display = "block";
         crossIconElementMbl.style.display="flex";
         kwikpassLoggedInElementMbl.style.display="none";
       }
       isDropdownMobileVisible = !isDropdownMobileVisible;
     }
   }
 }

 function addProfileIconInHorizon(){

  const kpLoader = `<svg
    class="loadergk kploader"
    width="17"
    height="16"
    viewBox="0 0 17 16"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
  >
  <path
    d="M8.50004 1.33325V3.99992M8.50004 11.9999V14.6666M4.50004 7.99992H1.83337M15.1667 7.99992H12.5M13.219 12.7189L11.3334 10.8333M13.219 3.33321L11.3334 5.21883M3.78109 12.7189L5.66671 10.8333M3.78109 3.33321L5.66671 5.21883"
    stroke="#111"
    stroke-width="1.6"
    stroke-linecap="round"
    stroke-linejoin="round"
  />
  </svg>`
   
   /*removing existing profile(person) icon - person icon is not present in this store*/
   // Note: profileButtonElement and profileButtonElementMbl are now defined later in the code (lines 356 and 376)

  // defining css and add it to style tag in head
  function appendCss() {
  let css = `
  .loadergk {
    display: none;
    animation: rotate 1.5s linear infinite;
  }
  @keyframes rotate {
    100% {
      transform: rotate(360deg);
    }
  }
  .kp-disabled-text-color{
    cursor: not-allowed;
  }
  #logout-button-desktop, #logout-button-mobile{
    cursor: pointer;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 8px;
    font-size: 14px;
    color: #344054;
    font-style: normal;
    font-weight: 600;
    line-height: 20px;
    width: 100%;
    border-radius: 8px;
    padding: 8px 14px;;
    border: 1px solid var(--gray-300, #d0d5dd);
    background: var(--base-white, #fff);
    box-shadow: 0px 1px 2px 0px rgba(16, 24, 40, 0.05);
  }
  #loggedin-icons{
    align-self: center;
    display: none;
  }
   #loggedin-icons-mobile{
   display:none;
  }
  /* Base drawer styles */
  #kwikpass-drawer-desktop,#kwikpass-drawer-mobile{
    padding: 16px;
    display: none;
    width: 10rem;
    position: absolute;
    box-shadow: 0px 0px 32px 0px rgba(16, 24, 40, 0.32);
    border-bottom-left-radius: 8px;
    border-bottom-right-radius: 8px;
    z-index: 999;
    background:#fff!important;
  }
  
  /* Old theme drawer - original positioning (MUST NOT BREAK) */
  .kp-old-theme #kwikpass-drawer-desktop,
  .kp-old-theme #kwikpass-drawer-mobile {
    right: 10%;
    top: 175%;
  }
  
  /* New theme drawer - use right: 0 to align with icon's right edge (responsive) */
  .kp-new-theme #kwikpass-drawer-desktop,
  .kp-new-theme #kwikpass-drawer-mobile {
    right: 74px;
    top: 78%;
  }
  #kwikpass-drawer-desktop > ul , #kwikpass-drawer-mobile > ul {
    margin: 0px 0px 15px 0px;
    padding: 0;
    width: 100%;
  }
  #kwikpass-drawer-desktop >ul >a , #kwikpass-drawer-mobile > ul > a {
    cursor: pointer;
    width: 100%;
    display: flex!important;
    justify-content: space-between;
    align-items: center;
    padding: 0;
    color: inherit;
    margin-left:0!important;
    text-decoration: none;
  }
  #kwikpass-drawer-desktop >ul >a:hover , #kwikpass-drawer-mobile > ul > a:hover , #kwikpass-drawer-desktop >ul >a:focus , #kwikpass-drawer-mobile > ul > a:focus {
    text-decoration: none;
  }
  #kwikpass-drawer-desktop >ul >a:focus , #kwikpass-drawer-mobile > ul > a:focus,#kwikpass-drawer-desktop >ul >a:active , #kwikpass-drawer-mobile > ul > a:active {
    text-decoration: none;
  }
  #kwikpass-drawer-desktop >ul >a:focus .loadergk , #kwikpass-drawer-mobile > ul > a:focus .loadergk {
    display: block;
  }
  #kwikpass-drawer-desktop >ul >a:not(:focus) .loadergk , #kwikpass-drawer-mobile > ul > a:not(:focus) .loadergk {
    display: none;
  } 
  #kwikpass-drawer-desktop > ul > a > p , #kwikpass-drawer-mobile > ul > a > p {
    font-size: 14px;
    font-style: normal;
    font-weight: 500;
    line-height: 142.857%;
    display: inline-flex;
    gap: 8px;
    align-items: center;
    margin: 0px 0 0px 0;
    color: #000;
  }
  /* Base icon styles */
  .header--icon{
    cursor: pointer;
    display: inline-flex;
    color: #000;
  }
  .header--icon--mobile{
    cursor: pointer;
    display: inline-flex;
    color: #000;
    width: 23px;
  }
  
  /* Old theme - original positioning (MUST NOT BREAK) */
  .kp-old-theme.header--icon,
  .kp-old-theme.header--icon--mobile {
    position: relative;
    top: 10px;
    margin: 0 10px;
  }
  
  /* New theme - match old theme visual appearance */
  .kp-new-theme.header--icon,
  .kp-new-theme.header--icon--mobile {
    display: inline-flex;
    align-items: center;
  }
  #icon-close-kwikpass, #icon-close-kwikpass-mobile{
    display: none;
    border-radius: 50px;
    border: 1px solid;
    margin: 0;
    padding: 2px;
    align-items: center;
    justify-content: center;
    margin-left:3px;
  }

  floating-panel-component.account-popover__panel.details-content.color-scheme-1 {
    display: none;
  }
 
  `;

    var style = document.createElement('style');
    style.innerHTML = css;
    document.getElementsByTagName('head')[0].appendChild(style);
  }

  // function call to append css to style tag
  appendCss() 

  const userIcon = `<svg width="23" height="23" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg" id="svgkp">
  <path d="M22.9129 12.935L13.7571 23.0474C13.5348 23.2929 13.1284 23.1084 13.1669 22.7794L14.0816 14.9731H10.6991C10.4034 14.9731 10.2484 14.6219 10.4478 14.4035L20.3133 3.59739C20.5589 3.32834 20.9984 3.58134 20.8891 3.92887L18.2354 12.3664H22.6607C22.9557 12.3664 23.1109 12.7163 22.9129 12.935Z" fill="#FEA203"/>
  <path id="svgkp-path"  fill-rule="evenodd" clip-rule="evenodd" d="M16.6079 5.35819C16.4805 5.1933 16.3421 5.03582 16.1932 4.8869C15.2702 3.96387 14.0183 3.44531 12.7129 3.44531C11.4075 3.44531 10.1556 3.96387 9.2326 4.8869C8.30957 5.80993 7.79102 7.06183 7.79102 8.36719C7.79102 9.67255 8.30957 10.9244 9.2326 11.8475C9.48368 12.0986 9.75909 12.3197 10.0533 12.5086L11.0235 11.4503C10.7335 11.2914 10.4649 11.0911 10.227 10.8531C9.56766 10.1938 9.19727 9.29959 9.19727 8.36719C9.19727 7.43479 9.56766 6.54057 10.227 5.88127C10.8863 5.22196 11.7805 4.85156 12.7129 4.85156C13.6453 4.85156 14.5395 5.22196 15.1988 5.88127C15.3636 6.04604 15.5103 6.22549 15.6377 6.41654L16.6079 5.35819ZM20.6413 18.6497L19.6746 19.7132C20.1676 20.4122 20.4473 21.2264 20.4473 22.0781V23.8359C20.4473 24.2243 20.7621 24.5391 21.1504 24.5391C21.5387 24.5391 21.8535 24.2243 21.8535 23.8359V22.0781C21.8535 20.7863 21.4016 19.6103 20.6413 18.6497ZM12.3111 17.5078H10.3026C7.27113 17.5078 4.97852 19.6394 4.97852 22.0781V23.8359C4.97852 24.2243 4.66372 24.5391 4.27539 24.5391C3.88707 24.5391 3.57227 24.2243 3.57227 23.8359V22.0781C3.57227 18.6922 6.67684 16.1016 10.3026 16.1016H12.4885L12.3111 17.5078Z" fill="currentColor" stroke="currentColor" stroke-width="0.1"/>
  </svg>`;
  
  // kwikpass icon for desktop - if user is not logged in
  const KwikpassNotLoggedIcon = `<div id="kp-login-button-header-logo" onclick="handleKpAndShopifyLogin()" style="cursor: pointer;display: flex;align-items: center;">${userIcon}</div>`
  
  // kwikpass icon for mobile - if user is not logged in
  const KwikpassNotLoggedIconMobile = `<div id="kp-login-button-header-logo-mobile" onclick="handleKpAndShopifyLogin()"  style="cursor: pointer;display: flex">${userIcon}</div>`
  
  // dropdown for desktop (opens on clicking kwikpass icon if user logged in)
  const drawerhtmlDesktop = `<div id="kwikpass-drawer-desktop" >
  <ul>
  <a href="javascript:void(0);" onclick="event.preventDefault();handleShopifyLogin(event,'/account')" tabindex="0" style=" display: flex">
  <p>
    <svg
        width="16"
        height="16"
        viewBox="0 0 20 20"
        fill="none"
        xmlns="http://www.w3.org/2000/svg" 
    >
        <path
        d="M4.6 2.20033L3.3 3.93366C3.04251 4.27697 2.91377 4.44863 2.91676 4.59232C2.91936 4.71736 2.97799 4.83462 3.07646 4.91172C3.18962 5.00032 3.40419 5.00032 3.83333 5.00032H16.1667C16.5958 5.00032 16.8104 5.00032 16.9235 4.91172C17.022 4.83462 17.0806 4.71736 17.0832 4.59232C17.0862 4.44863 16.9575 4.27697 16.7 3.93366L15.4 2.20033M4.6 2.20033C4.74667 2.00477 4.82 1.90699 4.91294 1.83647C4.99525 1.77401 5.08846 1.72741 5.18782 1.69903C5.3 1.66699 5.42222 1.66699 5.66667 1.66699H14.3333C14.5778 1.66699 14.7 1.66699 14.8122 1.69903C14.9115 1.72741 15.0047 1.77401 15.0871 1.83647C15.18 1.90699 15.2533 2.00477 15.4 2.20033M4.6 2.20033L3.03333 4.28921C2.83545 4.55306 2.73651 4.68498 2.66625 4.83026C2.6039 4.95917 2.55843 5.09559 2.53096 5.23612C2.5 5.3945 2.5 5.55941 2.5 5.88921L2.5 15.667C2.5 16.6004 2.5 17.0671 2.68166 17.4236C2.84144 17.7372 3.09641 17.9922 3.41002 18.152C3.76654 18.3337 4.23325 18.3337 5.16667 18.3337L14.8333 18.3337C15.7668 18.3337 16.2335 18.3337 16.59 18.152C16.9036 17.9922 17.1586 17.7372 17.3183 17.4236C17.5 17.0671 17.5 16.6004 17.5 15.667V5.88921C17.5 5.55941 17.5 5.3945 17.469 5.23613C17.4416 5.09559 17.3961 4.95918 17.3338 4.83026C17.2635 4.68498 17.1646 4.55306 16.9667 4.28921L15.4 2.20033M13.3333 8.33366C13.3333 9.21771 12.9821 10.0656 12.357 10.6907C11.7319 11.3158 10.8841 11.667 10 11.667C9.11594 11.667 8.2681 11.3158 7.64298 10.6907C7.01786 10.0656 6.66667 9.21771 6.66667 8.33366"
        stroke="currentColor"
        stroke-width="1.66667"
        stroke-linecap="round"
        stroke-linejoin="round"
        fill="none"
        />
    </svg>
  
    Order History
  </p>
  
  ${kpLoader}
  </a>
  </ul>
    <button id="logout-button-desktop">
      Logout
        <svg
        width="16"
        height="16"
        viewBox="0 0 20 20"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
        >
        <path
        d="M15 6.66667L18.3334 10M18.3334 10L15 13.3333M18.3334 10H7.50002M12.5 3.50337C11.4377 2.86523 10.2044 2.5 8.88891 2.5C4.90019 2.5 1.66669 5.85786 1.66669 10C1.66669 14.1421 4.90019 17.5 8.88891 17.5C10.2044 17.5 11.4377 17.1348 12.5 16.4966"
        stroke="currentColor"
        stroke-width="1.66667"
        stroke-linecap="round"
        stroke-linejoin="round"
        fill="none"
        />
        </svg>
    </button>
  </div>`;
  
  // dropdown for mobile (opens on clicking kwikpass icon if user logged in)
  const drawerhtmlMobile = `<div id="kwikpass-drawer-mobile">
  <ul>
  <a href="javascript:void(0);" onclick="event.preventDefault();handleShopifyLogin(event,'/account')" tabindex="0" style=" display: flex">
  <p>
    <svg
        width="16"
        height="16"
        viewBox="0 0 20 20"
        fill="none"
        xmlns="http://www.w3.org/2000/svg" 
        class="ordericon"
    >
        <path
        d="M4.6 2.20033L3.3 3.93366C3.04251 4.27697 2.91377 4.44863 2.91676 4.59232C2.91936 4.71736 2.97799 4.83462 3.07646 4.91172C3.18962 5.00032 3.40419 5.00032 3.83333 5.00032H16.1667C16.5958 5.00032 16.8104 5.00032 16.9235 4.91172C17.022 4.83462 17.0806 4.71736 17.0832 4.59232C17.0862 4.44863 16.9575 4.27697 16.7 3.93366L15.4 2.20033M4.6 2.20033C4.74667 2.00477 4.82 1.90699 4.91294 1.83647C4.99525 1.77401 5.08846 1.72741 5.18782 1.69903C5.3 1.66699 5.42222 1.66699 5.66667 1.66699H14.3333C14.5778 1.66699 14.7 1.66699 14.8122 1.69903C14.9115 1.72741 15.0047 1.77401 15.0871 1.83647C15.18 1.90699 15.2533 2.00477 15.4 2.20033M4.6 2.20033L3.03333 4.28921C2.83545 4.55306 2.73651 4.68498 2.66625 4.83026C2.6039 4.95917 2.55843 5.09559 2.53096 5.23612C2.5 5.3945 2.5 5.55941 2.5 5.88921L2.5 15.667C2.5 16.6004 2.5 17.0671 2.68166 17.4236C2.84144 17.7372 3.09641 17.9922 3.41002 18.152C3.76654 18.3337 4.23325 18.3337 5.16667 18.3337L14.8333 18.3337C15.7668 18.3337 16.2335 18.3337 16.59 18.152C16.9036 17.9922 17.1586 17.7372 17.3183 17.4236C17.5 17.0671 17.5 16.6004 17.5 15.667V5.88921C17.5 5.55941 17.5 5.3945 17.469 5.23613C17.4416 5.09559 17.3961 4.95918 17.3338 4.83026C17.2635 4.68498 17.1646 4.55306 16.9667 4.28921L15.4 2.20033M13.3333 8.33366C13.3333 9.21771 12.9821 10.0656 12.357 10.6907C11.7319 11.3158 10.8841 11.667 10 11.667C9.11594 11.667 8.2681 11.3158 7.64298 10.6907C7.01786 10.0656 6.66667 9.21771 6.66667 8.33366"
        stroke="currentColor"
        stroke-width="1.66667"
        stroke-linecap="round"
        stroke-linejoin="round"
        fill="none"
        />
    </svg>
  
    Order History
  </p>
  
  ${kpLoader}
  </a>
  </ul>
    <button id="logout-button-mobile">
      Logout
        <svg
        width="16"
        height="16"
        viewBox="0 0 20 20"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
        >
        <path
        d="M15 6.66667L18.3334 10M18.3334 10L15 13.3333M18.3334 10H7.50002M12.5 3.50337C11.4377 2.86523 10.2044 2.5 8.88891 2.5C4.90019 2.5 1.66669 5.85786 1.66669 10C1.66669 14.1421 4.90019 17.5 8.88891 17.5C10.2044 17.5 11.4377 17.1348 12.5 16.4966"
        stroke="currentColor"
        stroke-width="1.66667"
        stroke-linecap="round"
        stroke-linejoin="round"
        fill="none"
        />
        </svg>
    </button>
  </div>`;
  
  
  
  const kwikpassLoggedInIcon = `
    <div id="loggedin-icons">
      <div id="icon-close-kwikpass" class="icon-close-kwikpass" style="height: 20px; width:20px; cursor: pointer;" onclick="handleDrawer2()">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M18 6L6 18M6 6L18 18" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        </div>
        <div style="cursor: pointer;display: flex;" onclick="handleDrawer2()" id="icon-kwikpass">
        ${userIcon}
      </div>
    </div>`;
  
  const kwikpassLoggedInIconMobile = `
  <div id="loggedin-icons-mobile" >
    <div id="icon-close-kwikpass-mobile" style="cursor: pointer;height: 20px; width:20px;" onclick="handleDrawer2()">
      <svg width="17" height="17" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M18 6L6 18M6 6L18 18" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
      </div> 
      <div style="cursor: pointer;display: flex" onclick="handleDrawer2()" id="icon-kwikpass-mobile">
      ${userIcon}
    </div>
  </div>`;
  
  
  // It will change based on theme - Desktop
  const profileButtonElement = document.querySelector('.account-button.header-actions__action')
  const personIconElement = profileButtonElement?.parentElement
  const html = `
    ${KwikpassNotLoggedIcon}
    ${kwikpassLoggedInIcon}
    ${drawerhtmlDesktop}
  `;
  
  if(!document.getElementsByClassName("header--icon")?.[0]){
    // Detect theme
    const isOldTheme = document.querySelector('.account-popover') !== null;
    
    const kwipassDesktopNode = document.createElement('div')
    // Add theme-specific class
    kwipassDesktopNode.className = isOldTheme ? "header--icon kp-old-theme" : "header--icon kp-new-theme"
    kwipassDesktopNode.innerHTML = html
    // Hide original and insert Kwikpass button (works for both themes)
    if(personIconElement && profileButtonElement) {
      profileButtonElement.style.display = 'none';
      personIconElement.insertBefore(kwipassDesktopNode, profileButtonElement);
    }
  }
  
  //mobile - Get the second instance of account button
  const allAccountButtons = document.querySelectorAll('.account-button.header-actions__action')
  const profileButtonElementMbl = allAccountButtons[1] // Second instance (mobile)
  const personIconElementMbl = profileButtonElementMbl?.parentElement


  
  const htmlmobile = `
    ${KwikpassNotLoggedIconMobile}
    ${kwikpassLoggedInIconMobile}
    ${drawerhtmlMobile}
  `;
  
  if(!document.getElementsByClassName("header--icon--mobile")?.[0]){
    // Detect theme
    const isOldThemeMobile = document.querySelector('.account-drawer') !== null;
    
    const kwipassMobileNode = document.createElement('div')
    // Add theme-specific class
    kwipassMobileNode.className = isOldThemeMobile ? "header--icon--mobile kp-old-theme" : "header--icon--mobile kp-new-theme"
    kwipassMobileNode.innerHTML = htmlmobile
    // Hide original and insert Kwikpass button (works for both themes)
    if(personIconElementMbl && profileButtonElementMbl) {
      profileButtonElementMbl.style.display = 'none';
      personIconElementMbl.insertBefore(kwipassMobileNode, profileButtonElementMbl);
    }
  }
 }
 
 function addLoginButtonForHorizon(){
  
  function updateDOM(isKwikpassLogin = true) {
    token = getValueFromCookiesOrLocalStorage(XGokwikCoreToken(window.merchantInfo.environment));
    const isLogout = sessionStorage.getItem('isLogout');
    const phoneNumber = getValueFromCookiesOrLocalStorage('notify_phone_number');
  
    if ((!token && !isLogout) || (token && !phoneNumber)) {
      openIframe('kp_sso_token')
    }
  
    const drawerElementMobile = document.getElementById("kwikpass-drawer-mobile")
    if(drawerElementMobile){
      if(token){
        document.getElementById("kp-login-button-header-logo-mobile").style.display = "none"
        document.getElementById("loggedin-icons-mobile").style.display = "block"
      }else{
        document.getElementById("kp-login-button-header-logo-mobile").style.display = "flex"
        document.getElementById("loggedin-icons-mobile").style.display = "none"
        drawerElementMobile.style.display = "none"
      }
    }
  
    const drawerElement = document.getElementById("kwikpass-drawer-desktop")
    if(drawerElement){
      if(token){
        document.getElementById("kp-login-button-header-logo").style.display = "none"
        document.getElementById("loggedin-icons").style.display = "block"
      }else{
        document.getElementById("kp-login-button-header-logo").style.display = "flex"
        document.getElementById("loggedin-icons").style.display = "none"
        drawerElement.style.display = "none"
      }
    }
  
    // shopify logout
      const logoutLink = document.querySelectorAll('a[href*="/account/logout"]');
      logoutLink.forEach((element) => {
        element.addEventListener("click", (event) => {
        event.preventDefault()
        handleLogout()
      })
    });
  
    const logoutElement =  document.getElementById('logout-button-desktop')
    if(logoutElement) logoutElement.addEventListener('click', handleLogout);  
    
    //mobile
    const logoutElementMobile =  document.getElementById('logout-button-mobile')
    if(logoutElementMobile) logoutElementMobile.addEventListener('click', handleLogout);
  }
    
      let isElementsWithAccountClickable = true;
  
  // Add a click event listener to the document
  document.addEventListener('click', function(event) {
    const dropdownButton = document.getElementsByClassName('header--icon') ?. [0]
    // Check if the clicked element is the dropdown button or inside the dropdown menu
    const isClickInsideDropdown = dropdownButton?.contains(event.target);
  
    // If the click is outside the dropdown, hide the dropdown
    const kwikpassLoggedInElement = document.getElementById("icon-kwikpass");
    const crossIconElement = document.getElementById("icon-close-kwikpass")
    const drawerElement = document.getElementById("kwikpass-drawer-desktop")
  
    if (! isClickInsideDropdown && isDropdownVisible && token) {
      drawerElement.style.display = "none";
      crossIconElement.style.display = "none";
      kwikpassLoggedInElement.style.display = "flex";
      isDropdownVisible = ! isDropdownVisible;
    }
  
    //mobile
    const dropdownButtonMbl = document.getElementsByClassName('header--icon--mobile')?.[0]
  
    // Check if the clicked element is the dropdown button or inside the dropdown menu
    const isClickInsideDropdownMbl = dropdownButtonMbl?.contains(event.target);
  
    // If the click is outside the dropdown, hide the dropdown
    const kwikpassLoggedInElementMbl = document.getElementById("icon-kwikpass-mobile");
    const crossIconElementMbl = document.getElementById("icon-close-kwikpass-mobile")
    const drawerElementMbl = document.getElementById("kwikpass-drawer-mobile")
  
    if (! isClickInsideDropdownMbl && isDropdownMobileVisible && token) {
      drawerElementMbl.style.display = "none";
      crossIconElementMbl.style.display = "none";
      kwikpassLoggedInElementMbl.style.display = "flex";
      isDropdownMobileVisible = !isDropdownMobileVisible;
    }
  });
  
  document.addEventListener('DOMContentLoaded', function() {
    updateDOM();
  });
  
  window.addEventListener('update-dom', function() {
    const kwikpassLoggedInElement = document.getElementById("icon-kwikpass");
    const crossIconElement = document.getElementById("icon-close-kwikpass")
    const drawerElement = document.getElementById("kwikpass-drawer-desktop")
    if(drawerElement) drawerElement.style.display = "none";
    if(crossIconElement) crossIconElement.style.display="none";
    if(kwikpassLoggedInElement) kwikpassLoggedInElement.style.display="flex";
    
    const kwikpassLoggedInElementMbl = document.getElementById("icon-kwikpass-mobile");
    const crossIconElementMbl = document.getElementById("icon-close-kwikpass-mobile")
    const drawerElementMbl = document.getElementById("kwikpass-drawer-mobile")
    if(drawerElementMbl) drawerElementMbl.style.display = "none";
    if(crossIconElementMbl) crossIconElementMbl.style.display="none";
    if(kwikpassLoggedInElementMbl) kwikpassLoggedInElementMbl.style.display="flex";
    updateDOM();
  });
  addProfileIconInHorizon()
  updateDOM();
 }

 function handleDrawer1() {
    const token = getValueFromCookiesOrLocalStorage(XGokwikCoreToken(window.merchantInfo.environment));
    if (token) {
      const kwikpassLoggedInElement = document.getElementById("icon-kwikpass");
      const crossIconElement = document.getElementById("icon-close-kwikpass");
      const drawerElement = document.getElementById("kwikpass-drawer-desktop");
      // display cross icon and hide icon-kwikpass if isDropdownVisible = true else display icon-kwikpass and hide cross icon
      if(isDropdownVisible){
        drawerElement.style.display = "none";
        crossIconElement.style.display="none";
        kwikpassLoggedInElement.style.display="flex";
      }else{
        drawerElement.style.display = "block";
        crossIconElement.style.display="flex";
        kwikpassLoggedInElement.style.display="none";
      }
      isDropdownVisible = !isDropdownVisible;
    }
  }

  function addLoginButton(){
      function updateDOM() {
        token = getValueFromCookiesOrLocalStorage(XGokwikCoreToken(window.merchantInfo.environment));
        const isLogout = sessionStorage.getItem('isLogout');
        const phoneNumber = getValueFromCookiesOrLocalStorage('notify_phone_number');
    
        if ((!token && !isLogout) || (token && !phoneNumber)) {
          openIframe('kp_sso_token')
        }
    
        const drawerElement = document.getElementById("kwikpass-drawer-desktop")
        if(drawerElement){
          if(token){
          document.getElementById("kp-login-button-header-logo").style.display = "none"
          document.getElementById("loggedin-icons").style.display = "block"
          }else{
          document.getElementById("kp-login-button-header-logo").style.display = "flex"
          document.getElementById("loggedin-icons").style.display = "none"
          drawerElement.style.display = "none"
          }
        }
        // shopify logout
        const logoutLink = document.querySelectorAll('a[href*="/account/logout"]');
        logoutLink.forEach((element) => {
          element.addEventListener("click", (event) => {
            event.preventDefault()
            handleLogout()
          })
        });
    
       const logoutElement =  document.getElementById('logout-button-desktop')
        
        if(logoutElement) logoutElement.addEventListener('click', handleLogout); 
      }
      
      const elementsWithAccount = document.querySelectorAll('a[href="/account"]');
      elementsWithAccount.forEach((element) => {
        element.addEventListener('click', async (e) => {
          e.preventDefault();
          const customerId = getCustomerId()
          token = getValueFromCookiesOrLocalStorage(XGokwikCoreToken(window.merchantInfo.environment));
          kpHandleLogin('/account');
        });
      });
    
      document.addEventListener('DOMContentLoaded', function() {
        updateDOM();
      });
    
      window.addEventListener('update-dom', function() {
        updateDOM();
      });
    
      //TODO: update this with a query for the required button
    
      const loader = `<svg
        class="kploader"
        width="17"
        height="16"
        viewBox="0 0 17 16"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
      <path
        d="M8.50004 1.33325V3.99992M8.50004 11.9999V14.6666M4.50004 7.99992H1.83337M15.1667 7.99992H12.5M13.219 12.7189L11.3334 10.8333M13.219 3.33321L11.3334 5.21883M3.78109 12.7189L5.66671 10.8333M3.78109 3.33321L5.66671 5.21883"
        stroke="#111"
        stroke-width="1.6"
        stroke-linecap="round"
        stroke-linejoin="round"
      />
      </svg>`
    
       /*removing existing profile(person) icon - person icon is not present in this store*/
       const profileButtonElement = document.querySelector(ICON_SELECT_QUERY) || document.querySelector(HORIZON_PROFILE_ICON);
      
      // defining css and add it to style tag in head
      function appendCss() {
      let css = `
      .kploader {
        display: none;
        animation: rotate 1.5s linear infinite;
      }
      @keyframes rotate {
        100% {
          transform: rotate(360deg);
        }
      }
      .kp-disabled-text-color{
        cursor: not-allowed;
      }
      #logout-button-desktop{
        cursor: pointer;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 8px;
        font-size: 14px;
        color: #344054;
        font-style: normal;
        font-weight: 600;
        line-height: 20px;
        width: 100%;
        border-radius: 8px;
        padding: 8px 14px;;
        border: 1px solid var(--gray-300, #d0d5dd);
        background: var(--base-white, #fff);
        box-shadow: 0px 1px 2px 0px rgba(16, 24, 40, 0.05);
      }
      #loggedin-icons{
        align-self: center;
        display: none;
      }
      #kwikpass-drawer-desktop{
        padding: 16px;
        display: none;
        right: 0%;
        width: 18rem;
        position: absolute;
        top: 100%;
        box-shadow: 0px 0px 32px 0px rgba(16, 24, 40, 0.32);
        border-bottom-left-radius: 8px;
        border-bottom-right-radius: 8px;
        z-index: 999;
        background:#fff!important;
      }
      #kwikpass-drawer-desktop > ul{
        margin: 0px 0px 10px 0px;
        padding: 0;
        width: 100%;
      }
      #kwikpass-drawer-desktop >ul >a{
        cursor: pointer;
        width: 100%;
        display: flex!important;
        justify-content: space-between;
        align-items: center;
        padding: 0;
        color: inherit;
        margin-left:0!important;
        text-decoration: none;
      }
      #kwikpass-drawer-desktop >ul >a:hover , #kwikpass-drawer-desktop >ul >a:focus {
        text-decoration: none;
      }
      #kwikpass-drawer-desktop >ul >a:focus,#kwikpass-drawer-desktop >ul >a:active {
        text-decoration: none;
      }
      #kwikpass-drawer-desktop >ul >a:focus .kploader {
        display: block;
      }
      #kwikpass-drawer-desktop >ul >a:not(:focus) .kploader {
        display: none;
      }
      #kwikpass-drawer-desktop > ul > a > p {
        font-size: 14px;
        font-style: normal;
        font-weight: 500;
        line-height: 142.857%;
        display: inline-flex;
        gap: 8px;
        align-items: center;
        margin: 10px 0 10px 0;
        color: #000;
      }
      .header--icon{
        cursor: pointer;
        position: relative;
        display: inline-flex;
      }
      path#svgkp-path {
        stroke-width: 1;
      }
      #icon-close-kwikpass{
        display: none;
        border-radius: 50px;
        border: 1px solid;
        margin: 0;
        padding: 2px;
        align-items: center;
        justify-content: center;
       margin-left:3px;
      }
        `;
    
        var style = document.createElement('style');
        style.innerHTML = css;
        document.getElementsByTagName('head')[0].appendChild(style);
      }
    
      // function call to append css to style tag
      appendCss()
      // existing user icon to show in the header
      // TODO : fetch user icon form backend
      const userIcon = `<svg width="23" height="23" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg" id="svgkp">
          <path d="M22.9129 12.935L13.7571 23.0474C13.5348 23.2929 13.1284 23.1084 13.1669 22.7794L14.0816 14.9731H10.6991C10.4034 14.9731 10.2484 14.6219 10.4478 14.4035L20.3133 3.59739C20.5589 3.32834 20.9984 3.58134 20.8891 3.92887L18.2354 12.3664H22.6607C22.9557 12.3664 23.1109 12.7163 22.9129 12.935Z" fill="#FEA203"/>
          <path id="svgkp-path" fill-rule="evenodd" clip-rule="evenodd" d="M16.6079 5.35819C16.4805 5.1933 16.3421 5.03582 16.1932 4.8869C15.2702 3.96387 14.0183 3.44531 12.7129 3.44531C11.4075 3.44531 10.1556 3.96387 9.2326 4.8869C8.30957 5.80993 7.79102 7.06183 7.79102 8.36719C7.79102 9.67255 8.30957 10.9244 9.2326 11.8475C9.48368 12.0986 9.75909 12.3197 10.0533 12.5086L11.0235 11.4503C10.7335 11.2914 10.4649 11.0911 10.227 10.8531C9.56766 10.1938 9.19727 9.29959 9.19727 8.36719C9.19727 7.43479 9.56766 6.54057 10.227 5.88127C10.8863 5.22196 11.7805 4.85156 12.7129 4.85156C13.6453 4.85156 14.5395 5.22196 15.1988 5.88127C15.3636 6.04604 15.5103 6.22549 15.6377 6.41654L16.6079 5.35819ZM20.6413 18.6497L19.6746 19.7132C20.1676 20.4122 20.4473 21.2264 20.4473 22.0781V23.8359C20.4473 24.2243 20.7621 24.5391 21.1504 24.5391C21.5387 24.5391 21.8535 24.2243 21.8535 23.8359V22.0781C21.8535 20.7863 21.4016 19.6103 20.6413 18.6497ZM12.3111 17.5078H10.3026C7.27113 17.5078 4.97852 19.6394 4.97852 22.0781V23.8359C4.97852 24.2243 4.66372 24.5391 4.27539 24.5391C3.88707 24.5391 3.57227 24.2243 3.57227 23.8359V22.0781C3.57227 18.6922 6.67684 16.1016 10.3026 16.1016H12.4885L12.3111 17.5078Z" fill="currentColor" stroke="currentColor"/>
          </svg>`;
    
     // kwikpass icon for desktop - if user is not logged in
     const KwikpassNotLoggedIcon = `<div id="kp-login-button-header-logo" style="cursor: pointer;display: flex;align-items: center;">${userIcon}</div>`
    
     // dropdown for desktop (opens on clicking kwikpass icon if user logged in)
     const drawerhtmlDesktop = `<div id="kwikpass-drawer-desktop">
      <ul>
        <a href="javascript:void(0)" onclick="handleShopifyLogin(event,'/account')" tabindex="0" style=" display: flex">
        <p>
           <svg
            width="20"
            height="20"
            viewBox="0 0 20 20"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
             >
            <path
            d="M4.6 2.20033L3.3 3.93366C3.04251 4.27697 2.91377 4.44863 2.91676 4.59232C2.91936 4.71736 2.97799 4.83462 3.07646 4.91172C3.18962 5.00032 3.40419 5.00032 3.83333 5.00032H16.1667C16.5958 5.00032 16.8104 5.00032 16.9235 4.91172C17.022 4.83462 17.0806 4.71736 17.0832 4.59232C17.0862 4.44863 16.9575 4.27697 16.7 3.93366L15.4 2.20033M4.6 2.20033C4.74667 2.00477 4.82 1.90699 4.91294 1.83647C4.99525 1.77401 5.08846 1.72741 5.18782 1.69903C5.3 1.66699 5.42222 1.66699 5.66667 1.66699H14.3333C14.5778 1.66699 14.7 1.66699 14.8122 1.69903C14.9115 1.72741 15.0047 1.77401 15.0871 1.83647C15.18 1.90699 15.2533 2.00477 15.4 2.20033M4.6 2.20033L3.03333 4.28921C2.83545 4.55306 2.73651 4.68498 2.66625 4.83026C2.6039 4.95917 2.55843 5.09559 2.53096 5.23612C2.5 5.3945 2.5 5.55941 2.5 5.88921L2.5 15.667C2.5 16.6004 2.5 17.0671 2.68166 17.4236C2.84144 17.7372 3.09641 17.9922 3.41002 18.152C3.76654 18.3337 4.23325 18.3337 5.16667 18.3337L14.8333 18.3337C15.7668 18.3337 16.2335 18.3337 16.59 18.152C16.9036 17.9922 17.1586 17.7372 17.3183 17.4236C17.5 17.0671 17.5 16.6004 17.5 15.667V5.88921C17.5 5.55941 17.5 5.3945 17.469 5.23613C17.4416 5.09559 17.3961 4.95918 17.3338 4.83026C17.2635 4.68498 17.1646 4.55306 16.9667 4.28921L15.4 2.20033M13.3333 8.33366C13.3333 9.21771 12.9821 10.0656 12.357 10.6907C11.7319 11.3158 10.8841 11.667 10 11.667C9.11594 11.667 8.2681 11.3158 7.64298 10.6907C7.01786 10.0656 6.66667 9.21771 6.66667 8.33366"
            stroke="currentColor"
            stroke-width="1.66667"
            stroke-linecap="round"
            stroke-linejoin="round"
            fill="none"
          />
           </svg>
           Order History
        </p>
    
      ${loader}
        </a>
      </ul>
        <button id="logout-button-desktop">
          Logout
            <svg
              width="20"
              height="20"
              viewBox="0 0 20 20"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
              d="M15 6.66667L18.3334 10M18.3334 10L15 13.3333M18.3334 10H7.50002M12.5 3.50337C11.4377 2.86523 10.2044 2.5 8.88891 2.5C4.90019 2.5 1.66669 5.85786 1.66669 10C1.66669 14.1421 4.90019 17.5 8.88891 17.5C10.2044 17.5 11.4377 17.1348 12.5 16.4966"
              stroke="currentColor"
              stroke-width="1.66667"
              stroke-linecap="round"
              stroke-linejoin="round"
              fill="none"
            />
          </svg>
        </button>
      </div>`;
    
      const kwikpassLoggedInIcon = `
      <div id="loggedin-icons" >
        <div id="icon-close-kwikpass" class="icon-close-kwikpass" style="height: 20px; width:20px; cursor: pointer;" onclick="handleDrawer1()">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M18 6L6 18M6 6L18 18" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
           </div>
          <div style="cursor: pointer;display: flex;" onclick="handleDrawer1()" id="icon-kwikpass">
          ${userIcon}
         </div>
      </div>`;
    
    
      // It will change based on theme
      const personIconElement = document.querySelector(ICON_SELECT_QUERY)?.parentElement || document.querySelector(HORIZON_PROFILE_ICON)?.parentElement
      const html = `
        ${KwikpassNotLoggedIcon}
        ${kwikpassLoggedInIcon}
        ${drawerhtmlDesktop}
      `;


      if(!document.getElementsByClassName("header--icon")?.[0]){
        const kwipassDesktopNode = document.createElement('div')
        kwipassDesktopNode.className="header--icon"
        kwipassDesktopNode.innerHTML = html
        personIconElement?.replaceChild(kwipassDesktopNode,profileButtonElement)
      }

      let timerId=null;
      document.getElementById('kp-login-button-header-logo')?.addEventListener('click', () => {
            clearTimeout(timerId);
            timerId = null;
            handleKpAndShopifyLogin();
          });
      const kwikpassMobileIconElement = document.getElementById('kp-login-button-header-logo-mobile');
      if (kwikpassMobileIconElement) {
        kwikpassMobileIconElement.addEventListener('click', () => {
          clearTimeout(timerId);
          timerId = null;
          handleKpAndShopifyLogin();
        });
      }

    updateDOM();

  }

  let isdomReady = false;
  document.addEventListener('DOMContentLoaded', function() {
    isdomReady = true;
  }, { once: true });

  function handleManualIntegration(){
    if(isdomReady){
      handleDOMUpdate();
    }else{
      document.addEventListener('DOMContentLoaded', function() {
        handleDOMUpdate();
      });
    } 
    
    window.addEventListener('update-dom', function() {
      handleDOMUpdate();
    });
  }

  function handleNewVersionsOfHorizon(){
    const headerEl = document.querySelector("header");

    if (headerEl) {
      // Create an observer to watch attribute changes
      const observer = new MutationObserver((mutationsList) => {
        for (const mutation of mutationsList) {
          if (
            mutation.type === "attributes" &&
            mutation.attributeName === "data-hydrated"
          ) {
            const newValue = headerEl.getAttribute("data-hydrated");
            if (newValue === "true") {

              addProfileIconInHorizon();
              const drawerElementMobile = document.getElementById("kwikpass-drawer-mobile")
              if(drawerElementMobile){
                if(token){
                  document.getElementById("kp-login-button-header-logo-mobile").style.display = "none"
                  document.getElementById("loggedin-icons-mobile").style.display = "block"
                }else{
                  document.getElementById("kp-login-button-header-logo-mobile").style.display = "flex"
                  document.getElementById("loggedin-icons-mobile").style.display = "none"
                  drawerElementMobile.style.display = "none"
                }
              }
            
              const drawerElement = document.getElementById("kwikpass-drawer-desktop")
              if(drawerElement){
                if(token){
                  document.getElementById("kp-login-button-header-logo").style.display = "none"
                  document.getElementById("loggedin-icons").style.display = "block"
                }else{
                  document.getElementById("kp-login-button-header-logo").style.display = "flex"
                  document.getElementById("loggedin-icons").style.display = "none"
                  drawerElement.style.display = "none"
                }
              }
              const logoutElement =  document.getElementById('logout-button-desktop')
              if(logoutElement) logoutElement.addEventListener('click', handleLogout);  
              
              //mobile
              const logoutElementMobile =  document.getElementById('logout-button-mobile')
              if(logoutElementMobile) logoutElementMobile.addEventListener('click', handleLogout);

              // Stop observing once done (optional)
              observer.disconnect();
            }
          }
        }
      });

      observer.observe(headerEl, { attributes: true });

      setTimeout(() => {
        observer.disconnect();
      }, 10000);

}

  }

  function addScripts(){
    var kwikpassCoreFnUrl="https://pdp.gokwik.co/kwikpass/kwikpass-core-functions-min.js"
    var kwikpassMerchantV2Url="https://pdp.gokwik.co/kwikpass/plugin/build/kp-merchant-v2.js";
    var kwikpassSDKUrl="https://pdp.gokwik.co/kwikpass/plugin/build/kp-shopify-app-sdk.js";

    var kpCoreFnScript = document.createElement('script');
    kpCoreFnScript.src = kwikpassCoreFnUrl;
    kpCoreFnScript.async=false;

    kpCoreFnScript.onload = () => {
      if(document.querySelector(ICON_SELECT_QUERY)){
        addLoginButton();
      }else if(document.querySelector(HORIZON_PROFILE_ICON)){
        handleNewVersionsOfHorizon();
        addLoginButtonForHorizon();
        }else{
        handleManualIntegration();
      }
    };

    var kpMerchantV2Script = document.createElement('script');
    kpMerchantV2Script.src = kwikpassMerchantV2Url;
    kpMerchantV2Script.async=false;

    var kpMerchantV2SDKScript = document.createElement('script');
    kpMerchantV2SDKScript.src = kwikpassSDKUrl;
    kpMerchantV2SDKScript.async=false;

    document.body.appendChild(kpCoreFnScript);
    document.body.appendChild(kpMerchantV2Script);
    document.body.appendChild(kpMerchantV2SDKScript);
  }

  const __kp_mid = "1944k64z7wbg";
  if(!__kp_mid || __kp_mid === ''){
    window.merchantInfo  = {
      ...window.merchantInfo,
      environment: "production",
      type: "merchantInfo",
      integrationType: "PLUGIN",
    }

    var updateThemeMetaFieldGet = 'https://gkx.gokwik.co/kp/api/v1/shopify-app/update-theme-meta-field';


    const options = {
    method: 'GET',
    headers: {accept: 'application/json', shop: window.Shopify.shop }
    };

    fetch(updateThemeMetaFieldGet, options)
    .then(response => response.json())
    .then(response => {
      var data = response.data;
      if(data?.mid != null && data?.mid !== ''){
        window.merchantInfo["mid"] = data.mid;
      }

      addScripts();
    })
    .catch(err => console.error(err));
  }else{
    window.merchantInfo  = {
      ...window.merchantInfo,
      ...(__kp_mid != null && __kp_mid !== '' ? { mid: __kp_mid } : {}),
      environment: "production",
      type: "merchantInfo",
      integrationType: "PLUGIN",
    }

    addScripts();
  }

</script>
<!-- END app snippet -->

</div><div id="shopify-block-AQTlTWDBDUEVwNWNoZ__10641372206048101839" class="shopify-block shopify-app-block">
<script>
  window.Rebuy = window.Rebuy || {};
  window.Rebuy.customer = window.Rebuy.customer || {};
  
</script>





</div><script src="https://cdn.shopify.com/storefront/standard-actions.js" type="module" data-source-attribution="shopify.standard_actions"></script>
</body>
</html>
