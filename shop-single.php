<?php
  include_once 'header.php';
  include 'db.php';
  $custmor_id = $_SESSION['id'];
  // $service_id = $_GET['id'];
  if(isset($_GET['id'])){
    // echo $_GET['id'];
    $service_id = $_GET['id'];
    $sql = $con->query("SELECT * FROM services WHERE id = '$service_id' ");
    $data = $sql->fetch_assoc();
  }



  

  
 
?>
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
          
          
          <form action="adding.php" method="post">
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
                  <input type="submit" class="btn btn-primary" name="book" value="BOOK THIS SERVICE">
                  <!-- <button class="btn btn-primary btn-block" name="submit" type="submit"> Book This Service</button> -->
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