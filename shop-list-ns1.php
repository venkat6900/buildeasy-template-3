<?php
  include 'db.php';
  $sql = $con->query("SELECT * FROM services");
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
    <!-- Page Title-->
    <div class="page-title">
      <div class="container">
        <div class="column">
          <h1>Shop List No Sidebar</h1>
        </div>
        <div class="column">
          <ul class="breadcrumbs">
            <li><a href="index1.php">Home</a>
            </li>
            <li class="separator">&nbsp;</li>
            <li>Shop List No Sidebar</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container padding-bottom-3x mb-1">
      <div class="row justify-content-center">
        <!-- Products-->
        <div class="col-lg-9">
          <!-- Promo banner--><a class="alert alert-default alert-dismissible fade show fw-section mb-30" href="shop-grid-ls.php" style="background-image: url(img/banners/shop-banner-bg.jpg);"><span class="alert-close" data-dismiss="alert"></span>
            <div class="d-flex flex-wrap flex-md-nowrap justify-content-between align-items-center">
              <div class="mx-auto mx-md-0 px-3 pb-2 text-center text-md-left"><span class="d-block text-lg text-thin mb-2">Limited Time Deals</span>
                <h3 class="text-gray-dark">Surface Pro 4</h3>
                <p class="d-inline-block bg-warning text-white">&nbsp;&nbsp;Shop Now&nbsp;<i class="icon-chevron-right d-inline-block align-middle"></i>&nbsp;</p>
              </div><img class="d-block mx-auto mx-md-0" src="img/banners/shop-banner.png" alt="Surface Pro 4">
            </div></a>
          <!-- Shop Toolbar-->
          <div class="shop-toolbar padding-bottom-1x mb-2">
            <div class="column">
              <div class="shop-sorting">
                <label for="sorting">Sort by:</label>
                <select class="form-control" id="sorting">
                  <option>Popularity</option>
                  <option>Low - High Price</option>
                  <option>High - Low Price</option>
                  <option>Average Rating</option>
                  <option>A - Z Order</option>
                  <option>Z - A Order</option>
                </select><span class="text-muted">Showing:&nbsp;</span><span>1 - 12 items</span>
              </div>
            </div>
            <div class="column">
              <div class="shop-view"><a class="grid-view" href="shop-grid-ns1.php"><span></span><span></span><span></span></a><a class="list-view active" href="shop-list-ns1.php"><span></span><span></span><span></span></a></div>
            </div>
          </div>
          <!-- Products List-->
        <?php
          while($data = $sql->fetch_assoc()){
            $service_id = $data['id']; 
         
        ?>

          <div class="product-card product-list mb-30"><a class="product-thumb" href="shop-single1.php">
            <img style="width:100%; height:230px;" src="<?php echo 'dashboard/services/'.$data['image']; ?>" alt="Product"></a>
            <div class="product-card-inner">
              <div class="product-card-body">
                <div class="product-category"><a href="#"><?php echo $data['category']; ?></a></div>
                <h3 class="product-title"><a href="shop-single1.php"></a><?php echo $data['service']; ?></h3>
                <h4 class="product-price">
                  ₹49.99
                </h4>
                <p class="text-sm text-muted hidden-xs-down my-1"><?php echo $data['description']; ?></p>
              </div>
              <style>
                .bg-aqua{
                    background-color: #46a5e5;
                    font-size: 25px;
                    font-family: cambria;
                }
              </style>
              <div class="product-button-group bg-aqua">
                <a class="product-button text-light"  href="shop-single1.php?id=<?php echo $service_id ; ?>">Check Details</span></a>
                
              </div>
            </div>
          </div>

            <?php } ?>

   
         
          <!-- Pagination-->
          <nav class="pagination">
            <div class="column">
              <ul class="pages">
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li>...</li>
                <li><a href="#">12</a></li>
              </ul>
            </div>
            <div class="column text-right hidden-xs-down"><a class="btn btn-outline-secondary btn-sm" href="#">Next&nbsp;<i class="icon-chevron-right"></i></a></div>
          </nav>
        </div>
      </div>
    </div>
    <!-- Site Footer-->
    <?php
      include_once 'footer.php';
    ?>