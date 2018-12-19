<?php
  include_once 'header.php';
  include 'db.php';

  $sql = $con->query("SELECT * FROM cart"); 

?>
    <!-- Page Title-->
    <div class="page-title">
      <div class="container">
        <div class="column">
          <h1>Cart</h1>
        </div>
        <div class="column">
          <ul class="breadcrumbs">
            <li><a href="index-2.html">Home</a>
            </li>
            <li class="separator">&nbsp;</li>
            <li>Cart</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container padding-bottom-3x mb-1">
     <!-- Shopping Cart-->
      <div class="table-responsive shopping-cart">
        <table class="table">
          <thead>
            <tr>
              <th>Product Name</th>
              <th class="text-center">Date Of Service</th>
              <th class="text-center">Service Id</th>              
              <th class="text-center">Operations</th>
            </tr>
          </thead>
          <tbody>
            <?php
            while($items = $sql->fetch_assoc())
            {
            ?>
            <tr>
              <td>
                <div class="product-item">
                  <div class="product-info">
                    <h4 class="product-title">
                      <a href="shop-single.php?id=<?php echo $items['id_service']; ?>"><?php echo $items['service']; ?></a>
                    </h4>
                    <span><?php echo $items['category']; ?></span>
                  </div>
                </div>
              </td>
              <td class="text-center">
                <div class="count-input">
                  <?php echo $items['date']; ?>
                </div>
              </td>
              <td class="text-center text-lg"><?php echo $items['service_id']; ?></td>              
              <td class="text-center">
                <a class="remove-from-cart" href="remove.php?id=<?php echo $items['id']; ?>" data-toggle="tooltip" title="Remove item">
                  <i class="icon-x"></i>
                </a>
            </td>
            </tr>
            <?php } ?>
    
          </tbody>
        </table>
      </div>
   
      <div class="shopping-cart-footer">
        <div class="column"><a class="btn btn-outline-secondary" href="shop-grid-ns.php"><i class="icon-arrow-left"></i>&nbsp;Back to Shopping</a></div>
        <div class="column">  
          <a class="btn btn-primary" href="checkout-address.php">Checkout</a>
        </div>
      </div>
     
    
    </div>
    <!-- Site Footer-->
    <?php
        include_once 'footer.php';
    ?>