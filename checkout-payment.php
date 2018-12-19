<?php
    include_once 'header.php';
?>
    <!-- Page Title-->
    <div class="page-title">
      <div class="container">
        <div class="column">
          <h1>Checkout</h1>
        </div>
        <div class="column">
          <ul class="breadcrumbs">
            <li><a href="index-2.html">Home</a>
            </li>
            <li class="separator">&nbsp;</li>
            <li>Checkout</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container padding-bottom-3x mb-2">
      <div class="row">
        <!-- Checkout Adress-->
        <div class="col-xl-9 col-lg-8">
             <div class="steps flex-sm-nowrap mb-5">
            <a class="step " href="checkout-address.php">
              <h4 class="step-title">1. Address</h4>
            </a>          
            <a class="step active" href="checkout-payment.php">
              <h4 class="step-title">2. Payment</h4>
            </a>
            <a class="step" href="checkout-review.php">
              <h4 class="step-title">3. Review</h4>
            </a>
          </div>
          <h4>Choose Payment Method</h4>
          <hr class="padding-bottom-1x">
          <div class="accordion" id="accordion" role="tablist">
            <div class="card">
              <div class="card-header" role="tab">
                <h6><a href="#card" data-toggle="collapse">Pay After You Got Served</a></h6>
              </div>            
            </div>
            
         
          </div>
          <div class="d-flex justify-content-between paddin-top-1x mt-4">
            <a class="btn btn-outline-secondary" href="checkout-address.php">
              <i class="icon-arrow-left"></i><span class="hidden-xs-down">&nbsp;Back</span>
            </a>
            <a class="btn btn-primary" href="checkout-review.php">
              <span class="hidden-xs-down">Continue&nbsp;</span>
              <i class="icon-arrow-right"></i>
            </a>
          </div>
        </div>
        <!-- Sidebar          -->
        <div class="col-xl-3 col-lg-4">
          <aside class="sidebar">
            <div class="padding-top-2x hidden-lg-up"></div>
            <!-- Order Summary Widget-->
            <section class="widget widget-order-summary">
              <h3 class="widget-title">Service Summary</h3>
              <table class="table">
                  <?php
                  include 'db.php';
                  $sql = $con->query("SELECT * FROM cart");
                  while($data = $sql->fetch_assoc()){
                ?>
                <tr>
                  <td><?php echo $data['service']; ?></td> 
                  <td><?php echo $data['category']; ?></td> 
                  <td><?php echo $data['date']; ?></td>                 
                </tr>
               
                  <?php } ?>
              </table>
            </section>
          
            
        </div>
      </div>
    </div>
    <!-- Site Footer-->
    <?php
      include 'footer.php';
    ?>