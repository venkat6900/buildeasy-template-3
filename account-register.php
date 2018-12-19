<?php
    include 'db.php';
    if(isset($_POST['submit']))    
    {  
	
	        $name = $con->real_escape_string($_POST['name']);
            $email = $con->real_escape_string($_POST['email']);
            $mobile = $con->real_escape_string($_POST['mobile']);
            $password = $con->real_escape_string($_POST['password']);
            $cpassword = $con->real_escape_string($_POST['cpassword']);
            $image = $_FILES['image']['name'];
            $temp = $_FILES['image']['tmp_name'];
            $location = "profiles/";
            
            move_uploaded_file($temp, $location.$image);
           
        if($password == $cpassword){          
      
            $sql = $con->query("SELECT id FROM custmors WHERE email='$email'");
			if ($sql->num_rows > 0) {
				$msg = "Email already exists in the database!";
			} else {
				$token = 'qwertzuiopasdfghjklyxcvbnmQWERTZUIOPASDFGHJKLYXCVBNM0123456789!$/()*';
				$token = str_shuffle($token);
				$token = substr($token, 0, 10);

				$hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            
				$con->query("INSERT INTO `custmors`(`id`, `name`, `email`, `mobile`, `image`, `password`, `isEmailConfirmed`, `token`)
					VALUES (null, '$name', '$email', '$mobile', '$image', '$hashedPassword', '0', '$token');
				");

                require 'PHPMailer/PHPMailerAutoload.php';
                $mail = new PHPMailer;

                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = 'venkyhack452@gmail.com';                 // SMTP username
                $mail->Password = 'sreevenky4';                           // SMTP password
                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587;                                    // TCP port to connect to

                $mail->setFrom('venkyhack452@gmail.com', 'venkat');     
                $mail->addAddress($email, $name);

                $mail->Subject = "Please verify email!";
                $mail->isHTML(true);
                $mail->Body = "
                    Please click on the link below:<br><br>                    
                    <a href='https://localhost/template-3/confirm.php?email=$email&token=$token'>Click Here</a>
                    ";

                if ($mail->send())
                {
                    $msg = "You have been registered! Please verify your email!";
                }
                else{
                    $msg = "Something wrong happened! Please try again!";
                }                    
			}
		}
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
          <h1>Register Account</h1>
        </div>
        <div class="column">
          <ul class="breadcrumbs">
            <li><a href="index.php">Home</a>
            </li>
            <li class="separator">&nbsp;</li>
            <li><a href="account-orders.php">Account</a>
            </li>
            <li class="separator">&nbsp;</li>
            <li> Register</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container padding-bottom-3x mb-2">
      <div class="row">        
        <div class="col-md-6">
          <div class="padding-top-3x hidden-md-up"></div>
          <h3 class="margin-bottom-1x">No Account? Register</h3>
          <h4 class="text-danger"><?php if (isset($msg)) {echo $msg . "<br><br>";} ?></h4>
          <p>Registration takes less than a minute but gives you full control over your orders.</p>
          <form class="row" method="post"  action="account-register.php" enctype="multipart/form-data">
            
            <div class="col-sm-6">
              <div class="form-group">
                <label for="reg-un">User Name</label>
                <input class="form-control" type="text" name="name" id="reg-ln" required>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="reg-email">E-mail Address</label>
                <input class="form-control" type="email" name="email" id="reg-email" required>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="reg-phone">Phone Number</label>
                <input class="form-control" type="text" name="mobile" id="reg-phone" required>
              </div>
            </div>
             <div class="col-sm-6">
              <div class="form-group">
                <label for="reg-profile">Profile Picture</label>
                <input class="form-control" type="file" name="image" required>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="reg-pass">Password</label>
                <input class="form-control" type="password" name="password" id="reg-pass" required>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="reg-pass-confirm">Confirm Password</label>
                <input class="form-control" type="password" name="cpassword" id="reg-pass-confirm" required>
              </div>
            </div>
           
            <div class="col-12 text-center text-sm-right">
              <button class="btn btn-primary margin-bottom-none" name="submit" type="submit">Register</button>
            </div>
             <div class="col-12 text-center text-sm-right">
                <p>Already a user? goto <a href="account-login.php" class="btn btn-warning">Login</a></p>
             </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Site Footer-->
   <?php
        include_once 'footer.php';  
   ?>