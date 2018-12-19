<?php
  include 'header.php';
  include 'db.php';
  $sql = $con->query("SELECT * FROM services LIMIT 8");
?>
    <!-- Main Slider-->
    <section class="hero-slider" style="background-image: url(img/hero-slider/slide1.jpg);">
      <div class="owl-carousel large-controls dots-inside" data-owl-carousel="{ &quot;nav&quot;: true, &quot;dots&quot;: true, &quot;loop&quot;: true, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 7000 }">
        
        <div class="item">
          <div class="container padding-top-3x">
            <div class="row justify-content-center align-items-center">
              <div class="col-lg-5 col-md-6 padding-bottom-2x text-md-left text-center">
                <div class="from-bottom"><img class="d-inline-block w-150 mb-4" src="img/hero-slider/logo02.png" alt="Puma">
                  <div class="h2 text-body text-light mb-2 pt-1">Solor Product Dealers</div>

                </div><a class="btn btn-primary scale-up delay-1" href="shop-grid-ns.php">Book This Service&nbsp;<i class="icon-arrow-right"></i></a>
              </div>
              <div class="col-md-6 padding-bottom-2x mb-3"><img class="d-block mx-auto" src="img/hero-slider/02.png" alt="Puma Backpack"></div>
            </div>
          </div>
        </div> 

        <div class="item">
          <div class="container padding-top-3x">
            <div class="row justify-content-center align-items-center">
              <div class="col-lg-5 col-md-6 padding-bottom-2x text-md-left text-center">
                <div class="from-bottom"><img class="d-inline-block w-150 mb-3" src="img/hero-slider/logo01.png" alt="Sony">
                  <div class="h2 text-body text-light mb-2 pt-1">Construction Services</div> 
                </div><a class="btn btn-primary scale-up delay-1" href="shop-single.php">Book This Service&nbsp;<i class="icon-arrow-right"></i></a>
              </div>
              <div class="col-md-6 padding-bottom-2x mb-3"><img class="d-block mx-auto" src="img/hero-slider/01.png" alt="Chuck Taylor All Star II"></div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="container padding-top-3x">
            <div class="row justify-content-center align-items-center">
              <div class="col-lg-5 col-md-6 padding-bottom-2x text-md-left text-center">
                <div class="from-bottom"><img class="d-inline-block w-150 mb-3" src="img/hero-slider/logo03.png" alt="Motorola">
                  <div class="h2 text-body text-light mb-2 pt-1">Beats Studio by Dr.Dre</div>
                 
                </div><a class="btn btn-primary scale-up delay-1" href="shop-single.php">Book This Service&nbsp;<i class="icon-arrow-right"></i></a>
              </div>
              <div class="col-md-6 padding-bottom-2x mb-3"><img class="d-block mx-auto" src="img/hero-slider/03.png" alt="Moto 360"></div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- Top Categories/Deals-->
    <section class="container padding-top-3x padding-bottom-2x">
      <div class="row">
        <div class="col-lg-4 col-sm-6">
          <div class="card border-0 bg-secondary mb-30">
            <div class="card-body d-table w-100">
              <div class="d-table-cell align-middle"><img class="d-block w-100" src="img/shop/categories/29.png" alt="Image"></div>
              <div class="d-table-cell align-middle pl-2">
                <h3 class="h6 text-thin">Tablets, Smartphones <br><strong>And more...</strong></h3>
                <h4 class="h6 d-table w-100 text-thin"><span class="d-table-cell align-bottom" style="line-height: 1.2;">UP<br>TO&nbsp;</span><span class="d-table-cell align-bottom h1 text-medium">50%</span><span class="d-table-cell align-bottom">&nbsp;off</span></h4><a class="text-decoration-none" href="shop-grid-ns.php">Shop now&nbsp;<i class="icon-chevron-right d-inline-block align-middle text-lg"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="card border-0 bg-secondary mb-30">
            <div class="card-body d-table w-100">
              <div class="d-table-cell align-middle"><img class="d-block w-100" src="img/shop/categories/30.png" alt="Image"></div>
              <div class="d-table-cell align-middle pl-2">
                <h3 class="h6 text-thin">DJ Phantom <span style='white-space: nowrap;'>HD Video Drone</span> <br><strong>Arrives</strong></h3>
                <h4 class="h6 d-table w-100 text-thin"><span class="d-table-cell align-top text-right" style="line-height: 1.2;">From&nbsp;<br><strong>₹&nbsp;</strong></span><span class="d-table-cell align-top h1 text-medium">990</span></h4><a class="text-decoration-none" href="shop-grid-ns.php">Shop now&nbsp;<i class="icon-chevron-right d-inline-block align-middle text-lg"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="card border-0 bg-secondary mb-30">
            <div class="card-body d-table w-100">
              <div class="d-table-cell align-middle"><img class="d-block w-100" src="img/shop/categories/31.png" alt="Image"></div>
              <div class="d-table-cell align-middle pl-2">
                <h3 class="h6 text-thin">Watches, Fitness Bands <br><strong>And more...</strong></h3>
                <h4 class="h6 d-table w-100 text-thin"><span class="d-table-cell align-bottom" style="line-height: 1.2;">UP<br>TO&nbsp;</span><span class="d-table-cell align-bottom h1 text-medium">39%</span><span class="d-table-cell align-bottom">&nbsp;off</span></h4><a class="text-decoration-none" href="shop-grid-ns.php">Shop now&nbsp;<i class="icon-chevron-right d-inline-block align-middle text-lg"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <!-- Featured Products-->
    <section class="container padding-bottom-2x mb-2">
      <h2 class="h3 pb-3 text-center">Featured Products</h2>
      <div class="row">      
      <?php
          while($data = $sql->fetch_assoc()){
          $service_id = $data['id'];
      ?>
     
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="product-card mb-30">
            <div class="product-badge bg-danger">Sale</div><a class="product-thumb" href="shop-single.php">
              <img style="width:100%; height:250px;" src="<?php echo 'dashboard/services/'.$data['image']; ?>" alt="Product"></a>
            <div class="product-card-body">
              <div class="product-category"><a href="#"><?php echo $data['category']; ?></a></div>
              <h3 class="product-title"><a href="shop-single.php"><?php echo $data['category']; ?></a></h3>
              <h4 class="product-price">
                ₹49.99
              </h4>
            </div>
            <div class="product-button-group">              
              <a class="product-button" href="shop-single.php?id= <?php echo $service_id ;  ?>">
                <i class="icon-arrow-right"></i><span>Details</span>
              </a>
            </div>
          </div>
        </div> 
      <?php } ?>
        </div>
      <div class="text-center"><a class="btn btn-outline-secondary" href="shop-grid-ns.php">View All Products</a></div>
    </section>





    
    
    
   



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
    

    <?php
      include 'footer.php';
    ?>