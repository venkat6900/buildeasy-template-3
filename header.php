<?php
session_start();
if(!isset($_SESSION['id'])){
  
    header("location: account-login.php");
} else
{
      // echo $_SESSION['id'];
}


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
        <div class="site-branding d-flex"><a class="site-logo align-self-center" href="index1.php"><img src="img/logo/logo.png" alt="Unishop"></a></div>
        <!-- Search / Categories-->
        <div class="search-box-wrap d-flex">
          <div class="search-box-inner align-self-center">
            <div class="search-box d-flex">  

              <form class="input-group" method="post" action="search-results2.php">             
                  
                <input class="form-control" name="search" type="text" placeholder="Search for anything">
                 <span class="input-group-btn"><button type="submit" name="submit"><i class="icon-search"></i></button></span>
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
           <div class="toolbar-item hidden-on-mobile"><a href="#">
              <div><i class="icon-user"></i><span class="text-label">My Account</span></div></a>
            <div class="toolbar-dropdown text-center px-3">
              <a class="btn btn-primary btn-sm btn-block" href="account-profile.php">Profile</a>
              <a class="btn btn-primary btn-sm btn-block" href="account-orders.php">Orders</a>
              <a class="btn btn-danger btn-sm btn-block" href="account-signout.php">Sign Out</a>
            </div>
          </div>
          <div class="toolbar-item">
            <a href="cart.php">
              <div>
                <span class="cart-icon"><i class="icon-shopping-cart"></i></span>
                <span class="text-label">Cart</span>
              </div>
            </a>            
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
                <div><i class="flag-icon"><img src="img/flags/EN.png" alt="English"></i><span class="text-label">IND</span></div></a>
            </div>
            <div class="toolbar-item"><a href="product-comparison.php">
                <div><span class="compare-icon"><i class="icon-repeat"></i><span class="count-label">3</span></span><span class="text-label">Compare</span></div></a></div>
            <div class="toolbar-item"><a href="account-profile.php">
                <div><i class="icon-user"></i><span class="text-label">My Account</span></div></a>
                <div class="toolbar-dropdown text-center px-3">
                  <a class="btn btn-primary btn-sm btn-block" href="account-profile.php">Profile</a>
                  <a class="btn btn-primary btn-sm btn-block" href="account-orders.php">Orders</a>
                  <a class="btn btn-danger btn-sm btn-block" href="account-signout.php">Sign Out</a>
                </div>
            </div>
          </div>
          <!-- Slideable (Mobile) Menu-->
         
        <!-- Toolbar ( Put toolbar here only if you enable sticky navbar )-->
       
    </header>