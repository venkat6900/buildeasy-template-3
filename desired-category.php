<?php
  include_once 'header.php';

  if(isset($_GET['category'])){
      $category = $_GET['category'];
  }
   include 'db.php';
  $sql = $con->query("SELECT * FROM services WHERE category = '$category' ");
?>
    <!-- Page Content-->
    <!-- Featured Categories-->
    <section class="container-fluid pt-30">
      <div class="row">
         <?php
          while($data = $sql->fetch_assoc()){
          $service_id = $data['id'];
      ?>
        <div class="col-md-6 mb-30">
          <a class="category-card flex-wrap flex-lg-nowrap" href="shop-single.php?id=<?php echo $service_id; ?>">
            <div class="category-card-info align-self-center">
              <h3 class="category-card-title"><?php echo $data['service']; ?></h3>
              <h4 class="category-card-subtitle"><?php echo $data['category']; ?></h4>
              <p class="d-inline-block bg-info text-white mt-3">&nbsp;&nbsp;Shop Now&nbsp;<i class="icon-chevron-right d-inline-block align-middle"></i>&nbsp;</p>
            </div>
            <div class="category-card-thumb">
              <img style="width:100%; height:250px;" src="<?php echo 'dashboard/services/'.$data['image']; ;?>" alt="Category"></div></a>
          </div>        
      <?php } ?>
      </div>
            <div class="text-center"><a class="btn btn-outline-secondary" href="shop-grid-ns.php">View All Products</a></div>
    </section>
    <!-- Featured Products-->
  
       
    
   



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