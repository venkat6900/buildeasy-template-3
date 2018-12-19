<?php
  
  include 'db.php';
  // $custmor_id = $_SESSION['id'];
  // $service_id = $_GET['id'];
  if(isset($_GET['id'])){
    // echo $_GET['id'];
    $service_id = $_GET['id'];
    $sql = $con->query("SELECT * FROM services WHERE id = '$service_id' ");
    $data = $sql->fetch_assoc();
  }
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
          <h1>Single Product</h1>
        </div>
        <div class="column">
          <ul class="breadcrumbs">
            <li><a href="index1.php">Home</a>
            </li>
            <li class="separator">&nbsp;</li>
            <li><a href="shop-grid-ls.php">Shop</a>
            </li>
            <li class="separator">&nbsp;</li>
            <li>Single Product</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container padding-bottom-3x">
      <div class="row">
        <!-- Poduct Gallery-->
        <div class="col-md-6">
          <div class="product-gallery">
            <img style="width:100%; height:400px;" src= <?php echo "dashboard/services/".$data['image']; ?> alt="service" class="img-responsive">
          </div>
        </div>
        <!-- Product Info-->
        <div class="col-md-6">
          <div class="padding-top-2x mt-2 hidden-md-up"></div>
          <div class="sp-categories pb-3"><i class="icon-tag"></i><a href="#"><?php echo $data['category']; ?></a></div>
          <h2 class="mb-3"><?php echo $data['service']; ?></h2>
          <span class="h3 d-block">₹ 899.00</span>
          <p class="text-muted"><?php echo $data['description']; ?><a href='#details' class='scroll-to'>More info</a></p>
          
          
          <form action="#" method="post">
            <div class="row align-items-end pb-4">         
                <div class="col-sm-4.5">
                  <div class="form-group mb-0">
                    <label for="quantity">Date of Service</label>
                    <input class="form-control" name="date" type="date" id="date-input" value="2017-06-13">
                   
                    <input  type="hidden" name="service"  value="<?php echo $data['service']; ?>"> 
                    <input  type="hidden" name="category" value="<?php echo $data['category']; ?>"> 
                    <input  type="hidden" name="service_id" value="<?php echo $data['id']; ?>">          
                  
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="pt-4 hidden-sm-up"></div>
                  <!-- <input type="submit" class="btn btn-primary" name="book" value="BOOK THIS SERVICE"> -->
                  <a href="account-login.php" class="btn btn-primary btn-block" target="_blank">
                   Book This Service</a>
                </div>
            </div>
          </form>
          
          
          <div class="pt-1 mb-4"><span class="text-medium">SKU:</span> #21457832</div>
          <hr class="mb-2">
          <div class="d-flex flex-wrap justify-content-between">
            <div class="mt-2 mb-2">
              <a class="btn btn-primary" href="shop-grid-ns.php">Back To Searching</a>
              
            </div>
            <div class="mt-2 mb-2"><span class="text-muted">Share:&nbsp;&nbsp;</span>
              <div class="d-inline-block"><a class="social-button shape-rounded sb-facebook" href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="socicon-facebook"></i></a><a class="social-button shape-rounded sb-twitter" href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="socicon-twitter"></i></a><a class="social-button shape-rounded sb-instagram" href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="socicon-instagram"></i></a><a class="social-button shape-rounded sb-google-plus" href="#" data-toggle="tooltip" data-placement="top" title="Google +"><i class="socicon-googleplus"></i></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Product Details-->
    <div class="bg-secondary padding-top-3x padding-bottom-2x mb-3" id="details">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3 class="h4">Details</h3>
            <p class="mb-4"><?php echo $data['description']; ?></p>
            <h3 class="h4">Features</h3>
            <ul class="list-icon mb-4">
              <li><i class="icon-check text-success"></i>Capture 4K30 Video and 12MP Photos</li>
              <li><i class="icon-check text-success"></i>Game-Style Controller with Touchscreen</li>
              <li><i class="icon-check text-success"></i>View Live Camera Feed</li>
              <li><i class="icon-check text-success"></i>Full Control of HERO6 Black</li>
              <li><i class="icon-check text-success"></i>Use App for Dedicated Camera Operation</li>
            </ul>
          </div>
          <div class="col-md-6">
            <h3 class="h4">Addres</h3>
            <ul class="list-unstyled mb-4">
              <li><?php echo $data['address']; ?></li>
              
            </ul>
            <h3 class="h4">Service Type</h3>
            <ul class="list-unstyled mb-4">
              <li><strong>Courier:</strong> 2 - 4 days, ₹22.50</li>
              <li><strong>Local Shipping:</strong> up to one week, ₹10.00</li>
              <li><strong>UPS Ground Shipping:</strong> 4 - 6 days, ₹18.00</li>
              <li><strong>Unishop Global Export:</strong> 3 - 4 days, ₹25.00</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
   
    <!-- Site Footer-->
  <?php
    include_once 'footer.php';
  ?>