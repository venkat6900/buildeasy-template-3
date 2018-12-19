<?php
  include_once 'header.php';
  include 'db.php';

  $sql = $con->query("SELECT * FROM services");
 
?>
    <!-- Page Title-->
    <div class="page-title">
      <div class="container">
        <div class="column">
          <h1>Shop Grid No Sidebar</h1>
        </div>
        <div class="column">
          <ul class="breadcrumbs">
            <li><a href="index-2.html">Home</a>
            </li>
            <li class="separator">&nbsp;</li>
            <li>Shop Grid No Sidebar</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container padding-bottom-3x mb-1">
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
          <div class="shop-view"><a class="grid-view active" href="shop-grid-ns.html"><span></span><span></span><span></span></a><a class="list-view" href="shop-list-ns.php"><span></span><span></span><span></span></a></div>
        </div>
      </div>
      <!-- Products Grid-->
      <div class="row">
      <?php
      while($data = $sql->fetch_assoc()){
        $service_id = $data['id'];
      ?>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="product-card mb-30">
            <a class="product-thumb" href="shop-single.php?id=<?php echo $service_id ; ?>">
              <img style="width:100%; height: 250px;" src="<?php echo 'dashboard/services/'.$data['image']; ?>" alt="Product">
            </a>
            <div class="product-card-body">
              <div class="product-category"><a href="#"><?php echo $data['category']; ?></a></div>
              <h3 class="product-title"><a href="shop-single.php"><?php echo $data['service']; ?></a></h3>
              <h4 class="product-price">
              ₹49.99
              </h4>
            </div>
              <style>
                .bg-aqua{
                    background-color: #46a5e5;
                    font-size: 25px;
                    font-family: cambria;
                }
              </style>
            <div class="product-button-group bg-aqua">
              <a class="product-button btn-wishlist text-light" href="shop-single.php?id=<?php echo $service_id ; ?>">Check Details</a>
            </div>
          </div>
        </div>

        <?php } ?>
    </div>


           
       
      
        
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
    <!-- Site Footer-->
    <?php
        include_once 'footer.php';
    ?>