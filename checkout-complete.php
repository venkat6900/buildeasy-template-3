<?php
  include_once 'header.php';
  include 'db.php';
  $sql = $con->query("SELECT * FROM cart"); 
  $items = $sql->fetch_assoc()

?>
    <!-- Page Title-->
    <div class="page-title">
      <div class="container">
        <div class="column">
          <h1>Thank You</h1>
        </div>
        <div class="column">
          <ul class="breadcrumbs">
            <li><a href="index-2.html">Home</a>
            </li>
            <li class="separator">&nbsp;</li>
            <li>Thank you</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container padding-bottom-3x mb-2">
      <div class="card text-center">
        <div class="card-body padding-top-2x">
          <h3 class="card-title">Thank you for your order!</h3>
          <p class="card-text">Your order has been placed and will assist you as soon as possible.</p>
          <p class="card-text">Make sure you make note of your Service id number, which is <span class="text-medium text-success"><?php echo $items['service_id'];?></span></p>
          <p class="card-text">You will be receiving an email shortly with confirmation of your order. 
            <u>You can now:</u>
          </p>
          <div class="padding-top-1x padding-bottom-1x"><a class="btn btn-outline-secondary" href="shop-grid-ns.php">Go Back Shopping</a>
          
        </div>
        </div>
      </div>
    </div>
    <!-- Site Footer-->
    <?php
      include_once 'footer.php';
    ?>