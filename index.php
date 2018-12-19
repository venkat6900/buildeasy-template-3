 <?php
        
          include 'db.php';
          $sql = $con->query("SELECT * FROM services ");
          $data = $sql->fetch_assoc();
          
?>

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>Unishop | Universal E-Commerce Template
    </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Unishop - Universal E-Commerce Template">
    <meta name="keywords" content="shop, e-commerce, modern, flat style, responsive, online store, business, mobile, blog, bootstrap 4, html5, css3, jquery, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Rokaux">
    <!-- Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon and Apple Icons-->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="apple-touch-icon" href="touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="180x180" href="touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="167x167" href="touch-icon-ipad-retina.png">
    <!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="css/vendor.min.css">
    <!-- Main Template Styles-->
    <link id="mainStyles" rel="stylesheet" media="screen" href="css/styles.min.css">
    <!-- Customizer Styles-->
    <link rel="stylesheet" media="screen" href="customizer/customizer.min.css">
    <!-- Google Tag Manager-->
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      '../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-T4DJFPZ');
      
    </script>
    <!-- Modernizr-->
    <script src="js/modernizr.min.js"></script>
  </head>
  <!-- Body-->
  <body>
    <!-- Google Tag Manager (noscript)-->
    <noscript>
      <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-T4DJFPZ" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
    </noscript>
   
    <!-- Header-->
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
    <header class="site-header navbar-sticky">
      <!-- Topbar-->
      <div class="topbar d-flex justify-content-between">
        <!-- Logo-->
        <div class="site-branding d-flex"><a class="site-logo align-self-center" href="index.php"><img src="img/logo/logo.png" alt="Unishop"></a></div>
        <!-- Search / Categories-->
        <div class="search-box-wrap d-flex">
          <div class="search-box-inner align-self-center">
            <div class="search-box d-flex">
              <div class="btn-group categories-btn">
               
              </div>
              <form class="input-group" method="get"><span class="input-group-btn">
                  <button type="submit"><i class="icon-search"></i></button></span>
                <input class="form-control" type="search" placeholder="Search for anything">
              </form>
            </div>
          </div>
        </div>
        <!-- Toolbar-->
        <div class="toolbar d-flex">
          <div class="toolbar-item visible-on-mobile mobile-menu-toggle"><a href="#">
              <div><i class="icon-menu"></i><span class="text-label">Menu</span></div></a></div>
          <div class="toolbar-item hidden-on-mobile"><a href="#">
              <div><i class="flag-icon"><img src="img/flags/EN.png" alt="English"></i><span class="text-label">IND</span></div></a>
           
          </div>

          
          <div class="toolbar-item hidden-on-mobile"><a href="account-login.php">
              <div><i class="icon-user"></i><span class="text-label">Custmor/Login</span></div></a>
           
          </div>
          <div class="toolbar-item hidden-on-mobile"><a href="dashboard/vendor_login.php">
              <div><i class="icon-user"></i><span class="text-label">Vendor/login</span></div></a>
            
            </div>
          </div>
        </div>

        <!-- Mobile Menu-->
        <div class="mobile-menu">
          <!-- Search Box-->
          <div class="mobile-search">
            <form class="input-group" method="get"><span class="input-group-btn">
                <button type="submit"><i class="icon-search"></i></button></span>
              <input class="form-control" type="search" placeholder="Search site">
            </form>
          </div>
          <!-- Toolbar-->
          <div class="toolbar">
            <div class="toolbar-item"><a href="#">
                <div><i class="flag-icon"><img src="img/flags/EN.png" alt="English"></i><span class="text-label">Eng / Usd</span></div></a>
              <ul class="toolbar-dropdown lang-dropdown w-100">
                <li class="px-3 pt-1 pb-2">
                  <select class="form-control form-control-sm">
                    <option value="usd">Rupees</option>
                    
                  </select>
                </li>
                <li><a href="#"><i class="flag-icon"><img src="img/flags/en.png" alt="Français"></i>&nbsp;INDIA</a></li>
              </ul>
            </div>
            <div class="toolbar-item"><a href="product-comparison.php">
                <div><span class="compare-icon"><i class="icon-repeat"></i><span class="count-label">3</span></span><span class="text-label">Compare</span></div></a></div>
            <div class="toolbar-item"><a href="account-login.php">
                <div><i class="icon-user"></i><span class="text-label">Sign In / Up</span></div></a></div>
          </div>
          <!-- Slideable (Mobile) Menu-->
         
        <!-- Toolbar ( Put toolbar here only if you enable sticky navbar )-->
       
    </header>

    <!-- Page Content-->
    <!-- Main Slider-->
    <section class="hero-slider" style="background-image: url(img/hero-slider/main-bg.jpg);">
      <div class="owl-carousel large-controls dots-inside" data-owl-carousel="{ &quot;nav&quot;: true, &quot;dots&quot;: true, &quot;loop&quot;: true, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 7000 }">
        <div class="item">
          <div class="container padding-top-3x">
            <div class="row justify-content-center align-items-center">
              <div class="col-lg-5 col-md-6 padding-bottom-2x text-md-left text-center">
                <div class="from-bottom"><img class="d-inline-block w-150 mb-4" src="img/hero-slider/logo02.png" alt="Puma">
                  <div class="h2 text-body mb-2 pt-1">Google Home - Smart Speaker</div>
                  <div class="h2 text-body mb-4 pb-1">starting at <span class="text-medium">₹129.00</span></div>
                </div><a class="btn btn-primary scale-up delay-1" href="shop-grid-ns1.php">View Offers&nbsp;<i class="icon-arrow-right"></i></a>
              </div>
              <div class="col-md-6 padding-bottom-2x mb-3"><img class="d-block mx-auto" src="img/hero-slider/02.png" alt="Puma Backpack"></div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="container padding-top-3x">
            <div class="row justify-content-center align-items-center">
              <div class="col-lg-5 col-md-6 padding-bottom-2x text-md-left text-center">
                <div class="from-bottom"><img class="d-inline-block w-150 mb-3" src="img/hero-slider/logo01.png" alt="Sony">
                  <div class="h2 text-body mb-2 pt-1">Modern Powerful Laptop</div>
                  <div class="h2 text-body mb-4 pb-1">for only <span class="text-medium">₹1,459.99</span></div>
                </div><a class="btn btn-primary scale-up delay-1" href="shop-single1.php">Shop Now&nbsp;<i class="icon-arrow-right"></i></a>
              </div>
              <div class="col-md-6 padding-bottom-2x mb-3"><img class="d-block mx-auto" src="img/hero-slider/01.png" alt="Chuck Taylor All Star II"></div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="container padding-top-3x">
            <div class="row justify-content-center align-items-center">
              <div class="col-lg-5 col-md-6 padding-bottom-2x text-md-left text-center">
                <div class="from-bottom"><img class="d-inline-block w-150 mb-3" src="img/hero-slider/logo03.png" alt="Motorola">
                  <div class="h2 text-body mb-2 pt-1">Beats Studio by Dr.Dre</div>
                  <div class="h2 text-body mb-4 pb-1">for only <span class="text-medium">₹349.50</span></div>
                </div><a class="btn btn-primary scale-up delay-1" href="shop-single1.php">Shop Now&nbsp;<i class="icon-arrow-right"></i></a>
              </div>
              <div class="col-md-6 padding-bottom-2x mb-3"><img class="d-block mx-auto" src="img/hero-slider/03.png" alt="Moto 360"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Top Categories/Deals-->
    <section class="container padding-top-3x padding-bottom-2x">
      <div class="row">
      <div class="col-lg-4 col-sm-6">
          <div class="card border-0 bg-secondary mb-30">
            <div class="card-body d-table w-100">
              <div class="d-table-cell align-middle"><img class="d-block w-100" src="img/shop/categories/31.png" alt="Image"></div>
              <div class="d-table-cell align-middle pl-2">
                <h3 class="h6 text-thin">Construction <span style='white-space: nowrap;'>Material</span> <br><strong>Dealers</strong></h3>
                <a class="text-decoration-none" href="shop-grid-ns1.php">Book now&nbsp;<i class="icon-chevron-right d-inline-block align-middle text-lg"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="card border-0  bg-secondary mb-30">
            <div class="card-body d-table w-100">
              <div class="d-table-cell align-middle"><img class="d-block w-100" src="img/shop/categories/31.png" alt="Image"></div>
              <div class="d-table-cell align-middle pl-2">
                <h3 class="h6 text-thin">Construction <span style='white-space: nowrap;'>Service</span> <br><strong>Providers</strong></h3>
                <a class="text-decoration-none" href="shop-grid-ns1.php">Book now&nbsp;<i class="icon-chevron-right d-inline-block align-middle text-lg"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="card border-0 bg-secondary mb-30">
            <div class="card-body d-table w-100">
              <div class="d-table-cell align-middle"><img class="d-block w-100" src="img/shop/categories/31.png" alt="Image"></div>
              <div class="d-table-cell align-middle pl-2">
                <h3 class="h6 text-thin">Building <span style='white-space: nowrap;'>Maintanence</span> <br><strong>Services</strong></h3>
                <a class="text-decoration-none" href="shop-grid-ns1.php">Book now&nbsp;<i class="icon-chevron-right d-inline-block align-middle text-lg"></i></a>
              </div>
            </div>
          </div>
        </div>
    </section>




    <!-- Featured Products-->
 <!-- Featured Products-->
    <section class="container padding-bottom-2x mb-2">
      <h2 class="h3 pb-3 text-center">Featured Products</h2>
      <div class="row">      
      <?php
          include 'db.php';
          $sql = $con->query("SELECT * FROM services LIMIT 8");
          while($data = $sql->fetch_assoc()){
          $service_id = $data['id'];
      ?>
     
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="product-card mb-30">
            <!-- <div class="product-badge bg-danger">Sale</div>--><a class="product-thumb" href="shop-single1.php"> 
              <img style="width:100%; height:250px;" src="<?php echo 'dashboard/services/'.$data['image']; ?>" alt="Product"></a>
            <div class="product-card-body">
              <div class="product-category"><a href="#"><?php echo $data['category']; ?></a></div>
              <h3 class="product-title"><a href="shop-single1.php"><?php echo $data['category']; ?></a></h3>
              <!-- <h4 class="product-price">
                ₹49.99
              </h4> -->
            </div>
            <div class="product-button-group">              
              <a class="product-button" href="shop-single1.php?id= <?php echo $service_id ;  ?>">
                <i class="icon-arrow-right"></i><span>Details</span>
              </a>
            </div>
          </div>
        </div> 
      <?php } ?>
        </div>
      <div class="text-center"><a class="btn btn-outline-secondary" href="shop-grid-ns1.php">View All Products</a></div>
    </section>


    <!-- Services-->
    <section class="container padding-top-3x padding-bottom-2x">
      <div class="row">
        <div class="col-md-3 col-sm-6 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded mx-auto mb-4" src="img/services/01.png" alt="Shipping">
          <h6 class="mb-2">On Time Service Provider</h6>
          <p class="text-sm text-muted mb-0">Perfect one service providing vendors</p>
        </div>
        <div class="col-md-3 col-sm-6 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded mx-auto mb-4" src="img/services/02.png" alt="Money Back">
          <h6 class="mb-2">Trusted Service providers</h6>
          <p class="text-sm text-muted mb-0">We Assist you with trusted vendor</p>
        </div>
        <div class="col-md-3 col-sm-6 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded mx-auto mb-4" src="img/services/03.png" alt="Support">
          <h6 class="mb-2">24/7 Customer Support</h6>
          <p class="text-sm text-muted mb-0">Friendly 24/7 customer support</p>
        </div>
        <div class="col-md-3 col-sm-6 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded mx-auto mb-4" src="img/services/04.png" alt="Payment">
          <h6 class="mb-2">Secure Card Payment</h6>
          <p class="text-sm text-muted mb-0">Trusted Service Providers</p>
        </div>
      </div>
    </section>
    
    
    
    <!-- Site Footer-->
   <?php
      include_once 'footer.php';
   ?>