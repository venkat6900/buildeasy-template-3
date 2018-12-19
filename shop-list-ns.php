<?php
  include_once 'header.php';
  include 'db.php';
  $sql = $con->query("SELECT * FROM services");
?>
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
              <div class="shop-view"><a class="grid-view" href="shop-grid-ns.php"><span></span><span></span><span></span></a><a class="list-view active" href="shop-list-ns.php"><span></span><span></span><span></span></a></div>
            </div>
          </div>
          <!-- Products List-->
        <?php
          while($data = $sql->fetch_assoc()){
            $service_id = $data['id']; 
         
        ?>

          <div class="product-card product-list mb-30"><a class="product-thumb" href="shop-single.php">
            <img style="width:100%; height:230px;" src="<?php echo 'dashboard/services/'.$data['image']; ?>" alt="Product"></a>
            <div class="product-card-inner">
              <div class="product-card-body">
                <div class="product-category"><a href="#"><?php echo $data['category']; ?></a></div>
                <h3 class="product-title"><a href="shop-single.php"></a><?php echo $data['service']; ?></h3>
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
                <a class="product-button text-light"  href="shop-single.php?id=<?php echo $service_id ; ?>">Check Details</span></a>
                
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