<?php
    include_once 'header.php';
    if(isset($_POST['submit'])){
        $search = $_POST['search'];
        include 'db.php';
          $sql = $con->query("SELECT * FROM services WHERE
                                                   service LIKE '%$search%'
                                                OR description LIKE '%$search%'
                                                OR address LIKE '%$search%'
                                                OR category LIKE '%$search%' ");
                
    }
          
?>


    
    <!-- Page Title-->
    <div class="page-title">
      <div class="container">
        <div class="column">
          <h1>Search Results for: <span class="text-danger"><?php echo $search; ?></span></h1>
        </div>
        <div class="column">
        </div>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container padding-bottom-3x mb-2">
      <div class="row">
        <!-- Results-->
        <div class="col-xl-9 col-lg-8">
            <?php
                while($data = $sql->fetch_assoc()){
                    $service_id = $data['id'];
            ?>
          <div class="card mb-4">
            <div class="card-body"><span class="badge badge-primary">Product</span>
              <div class="d-flex pt-3"><a class="w-200 pr-4 hidden-xs-down" href="shop-single.php?id= <?php echo $service_id ;  ?>"><img src="<?php echo 'dashboard/services/'.$data['image'];?>" alt="Product"></a>
                <div>
                  <h6><a class="navi-link text-gray-dark" href="shop-single.php?id= <?php echo $service_id ;  ?>"><?php echo $data['service']; ?> </a></h6><span class="d-block mb-2 text-lg">
                   <a href="shop-single.php?id= <?php echo $service_id ;  ?>"><?php echo $data['category']; ?></span></a>
                  <a href="shop-single.php?id= <?php echo $service_id ;  ?>"><p><?php echo $data['description']; ?></p></a>
                </div>
              </div>
            </div>
          </div>
                <?php } ?>
          <!-- <div class="card bg-secondary mb-4">
            <div class="card-body"><span class="badge badge-warning">Blog post</span>
              <div class="pt-3">
                <h6><a class="navi-link text-gray-dark" href="blog-single-rs.html">What Apps Will Increase Your Productivity</a></h6>
                <p><span class='text-highlighted'>Lorem ipsum</span> dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco <span class='text-highlighted'>lorem ipsum</span> aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse. Aliquid id nobis, amet dolorum earum maxime.</p>
              </div>
            </div>
          </div> -->

          <!-- <div class="card mb-4">
            <div class="card-body"><span class="badge badge-primary">Product</span>
              <div class="d-flex pt-3"><a class="w-200 pr-4 hidden-xs-down" href="shop-single.html"><img src="img/shop/cart/02.jpg" alt="Product"></a>
                <div>
                  <h6><a class="navi-link text-gray-dark" href="shop-single.html">Apple iPhone X 256 GB Space Gray</a></h6><span class="d-block mb-2 text-lg">$1,450.00</span>
                  <p>Consequatur omnis <span class='text-highlighted'>lorem ipsum</span> reprehenderit suscipit voluptatem blanditiis aliquid rerum animi aliquam, dicta quas nesciunt commodi sequi minima totam architecto.</p>
                </div>
              </div>
            </div>
          </div> -->

          <!-- <div class="card bg-secondary mb-4">
            <div class="card-body"><span class="badge badge-warning">Blog post</span>
              <div class="pt-3">
                <h6><a class="navi-link text-gray-dark" href="blog-single-rs.html"><span class='text-highlighted'>Lorem Ipsum</span> Photography Changed My Life</a></h6>
                <p>Ut enim ad minim veniam, <span class='text-highlighted'>lorem ipsum</span> reprehenderit suscipit voluptatem blanditiis aliquid rerum animi aliquam, dicta quas nesciunt commodi sequi minima totam architecto.</p>
              </div>
            </div>
          </div> -->

          <!-- <div class="card mb-4">
            <div class="card-body"><span class="badge badge-primary">Product</span>
              <div class="d-flex pt-3"><a class="w-200 pr-4 hidden-xs-down" href="shop-single.html"><img src="img/shop/cart/03.jpg" alt="Product"></a>
                <div>
                  <h6><a class="navi-link text-gray-dark" href="shop-single.html">HP LaserJet Pro Laser Printer</a></h6><span class="d-block mb-2 text-lg">$188.50</span>
                  <p>Consequatur omnis <span class='text-highlighted'>lorem ipsum</span> reprehenderit suscipit voluptatem blanditiis aliquid rerum animi aliquam, dicta quas nesciunt commodi sequi minima totam architecto.</p>
                </div>
              </div>
            </div>
          </div> -->
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
        <!-- Sidebar          -->
        <div class="col-xl-3 col-lg-4">
          <div class="sidebar-toggle position-left"><i class="icon-menu"></i></div>
          <aside class="sidebar sidebar-offcanvas position-left"><span class="sidebar-close"><i class="icon-x"></i></span>
            <!-- Shop Categories-->
            <section class="widget widget-categories">
              <h3 class="widget-title">Shop Categories</h3>
              <ul>
                <li class="has-children expanded"><a href="#">Computers &amp; Accessories</a><span>(1138)</span>
                  <ul>
                    <li><a href="#">Desktop PCs</a><span>(508)</span>
                      <ul>
                        <li><a href="#">Office PC</a></li>
                        <li><a href="#">Gaming PC</a></li>
                        <li><a href="#">PC for Learning</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Laptops</a><span>(423)</span>
                      <ul>
                        <li><a href="#">15' Screens </a></li>
                        <li><a href="#">13' Screens</a></li>
                        <li><a href="#">Touch Screens</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Nettops</a><span>(97)</span></li>
                    <li><a href="#">PC Accessories</a><span>(110)</span></li>
                  </ul>
                </li>
                <li class="has-children"><a href="#">Smartphones &amp; Tablets</a><span>(2356)</span>
                  <ul>
                    <li><a href="#">Smartphones</a><span>(1032)</span>
                      <ul>
                        <li><a href="#">Android</a></li>
                        <li><a href="#">iOS</a></li>
                        <li><a href="#">QHD Screen</a></li>
                        <li><a href="#">WQHD Screen</a></li>
                        <li><a href="#">Full HD Screen</a></li>
                        <li><a href="#">Super Amoled</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Tablets</a><span>(937)</span>
                      <ul>
                        <li><a href="#">Wifi only</a></li>
                        <li><a href="#">Wifi + 3G</a></li>
                        <li><a href="#">Android</a></li>
                        <li><a href="#">iOS</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Phablets</a><span>(386)</span></li>
                  </ul>
                </li>
                <li class="has-children"><a href="#">TV, Video &amp; Audio</a><span>(420)</span>
                  <ul>
                    <li><a href="#">Smart TV Sets</a><span>(180)</span></li>
                    <li><a href="#">Blue-Ray Players</a><span>(132)</span></li>
                    <li><a href="#">Sound Systems</a><span>(47)</span></li>
                    <li><a href="#">Home Theaters</a><span>(61)</span></li>
                  </ul>
                </li>
                <li class="has-children"><a href="#">Cameras, Photo &amp; Video</a><span>(874)</span>
                  <ul>
                    <li><a href="#">Photo Cameras</a><span>(211)</span></li>
                    <li><a href="#">Video Cameras</a><span>(195)</span></li>
                    <li><a href="#">Action Cameras</a><span>(159)</span></li>
                    <li><a href="#">Tripods &amp; Stands</a><span>(203)</span></li>
                    <li><a href="#">Lenses</a><span>(106)</span></li>
                  </ul>
                </li>
                <li class="has-children"><a href="#">Headphones</a><span>(1239)</span>
                  <ul>
                    <li><a href="#">Earbud Headphones</a><span>(752)</span></li>
                    <li><a href="#">Over-Ear Headphones</a><span>(487)</span></li>
                    <li><a href="#">Bluetooth Headphones</a><span>(205)</span></li>
                    <li><a href="#">Sports &amp; Fitness Headphones</a><span>(96)</span></li>
                    <li><a href="#">Noise-Cancelling Headphones</a><span>(113)</span></li>
                  </ul>
                </li>
                <li class="has-children"><a href="#">Wearable Electronics</a><span>(340)</span>
                  <ul>
                    <li><a href="#">Smart Watches</a><span>(175)</span></li>
                    <li><a href="#">Fitness Trackers</a><span>(123)</span></li>
                    <li><a href="#">Smart Glasses</a><span>(42)</span></li>
                  </ul>
                </li>
                <li class="has-children"><a href="#">Printers &amp; Ink</a><span>(512)</span>
                  <ul>
                    <li><a href="#">All-In-One</a><span>(304)</span></li>
                    <li><a href="#">Copying</a><span>(115)</span></li>
                    <li><a href="#">Faxing</a><span>(211)</span></li>
                    <li><a href="#">Photo Printing</a><span>(68)</span></li>
                    <li><a href="#">Printing Only</a><span>(143)</span></li>
                    <li><a href="#">Scanning</a><span>(122)</span></li>
                  </ul>
                </li>
                <li class="has-children"><a href="#">Video Games</a><span>(656)</span>
                  <ul>
                    <li><a href="#">PlayStation 4</a><span>(100)</span></li>
                    <li><a href="#">Xbox One</a><span>(92)</span></li>
                    <li><a href="#">Nintendo Switch</a><span>(19)</span></li>
                    <li><a href="#">Games</a><span>(397)</span></li>
                    <li><a href="#">Accessories</a><span>(48)</span></li>
                  </ul>
                </li>
              </ul>
            </section>
            <!-- Blog Categories-->
            <section class="widget widget-categories margin-bottom-none">
              <h3 class="widget-title">Blog Categories</h3>
              <ul>
                <li><a href="#">Editor's Choice</a><span>(24)</span></li>
                <li><a href="#">Electronics</a><span>(12)</span></li>
                <li><a href="#">Industrial Design</a><span>(5)</span></li>
                <li><a href="#">Secure Payments Online</a><span>(2)</span></li>
                <li><a href="#">Smart Gadgets</a><span>(19)</span></li>
                <li><a href="#">Online Shopping</a><span>(7)</span></li>
              </ul>
            </section>
          </aside>
        </div>
      </div>
    </div>
    <!-- Site Footer-->
    <footer class="site-footer" style="background-image: url(img/footer-bg.png);">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <!-- Categories-->
            <section class="widget widget-links widget-light-skin">
              <h3 class="widget-title">Shop Departments</h3>
              <div class="row">
                <div class="col-md-6">
                  <ul>
                    <li><a href="#">Computers &amp; Accessories</a></li>
                    <li><a href="#">Smartphones &amp; Tablets</a></li>
                    <li><a href="#">TV, Video &amp; Audio</a></li>
                    <li><a href="#">Cameras, Photo &amp; Video</a></li>
                    <li><a href="#">Headphones</a></li>
                    <li><a href="#">Wearable Electronics</a></li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul>
                    <li><a href="#">Printers &amp; Ink</a></li>
                    <li><a href="#">Video Games</a></li>
                    <li><a href="#">Car Electronics</a></li>
                    <li><a href="#">Smart Home, IoT</a></li>
                    <li><a href="#">Musical Instruments</a></li>
                    <li><a href="#">Software</a></li>
                  </ul>
                </div>
              </div>
            </section>
          </div>
          <div class="col-lg-3 col-md-6">
            <!-- About Us-->
            <section class="widget widget-links widget-light-skin">
              <h3 class="widget-title">About Us</h3>
              <ul>
                <li><a href="#">Careers</a></li>
                <li><a href="#">About Unishop</a></li>
                <li><a href="#">Our Story</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Our Blog</a></li>
                <li><a href="#">Contacts</a></li>
              </ul>
            </section>
          </div>
          <div class="col-lg-3 col-md-6">
            <!-- Account / Shipping Info-->
            <section class="widget widget-links widget-light-skin">
              <h3 class="widget-title">Account &amp; Shipping Info</h3>
              <ul>
                <li><a href="#">My Account</a></li>
                <li><a href="#">Shipping Rates & Policies</a></li>
                <li><a href="#">Refunds & Replacements</a></li>
                <li><a href="#">Taxes</a></li>
                <li><a href="#">Delivery Info</a></li>
                <li><a href="#">Affiliate Program</a></li>
              </ul>
            </section>
          </div>
        </div>
        <hr class="hr-light mt-2 margin-bottom-2x hidden-md-down">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <!-- Contact Info-->
            <section class="widget widget-light-skin">
              <h3 class="widget-title">Get In Touch With Us</h3>
              <p class="text-white">Phone: +1 (900) 33 169 7720</p>
              <ul class="list-unstyled text-sm text-white">
                <li><span class="opacity-50">Monday-Friday:&nbsp;</span>9.00 am - 8.00 pm</li>
                <li><span class="opacity-50">Saturday:&nbsp;</span>10.00 am - 6.00 pm</li>
              </ul>
              <p><a class="navi-link-light" href="#">support@unishop.com</a></p><a class="social-button shape-circle sb-facebook sb-light-skin" href="#"><i class="socicon-facebook"></i></a><a class="social-button shape-circle sb-twitter sb-light-skin" href="#"><i class="socicon-twitter"></i></a><a class="social-button shape-circle sb-instagram sb-light-skin" href="#"><i class="socicon-instagram"></i></a><a class="social-button shape-circle sb-google-plus sb-light-skin" href="#"><i class="socicon-googleplus"></i></a>
            </section>
          </div>
          <div class="col-lg-3 col-md-6">
            <!-- Mobile App Buttons-->
            <section class="widget widget-light-skin">
              <h3 class="widget-title">Our Mobile App</h3><a class="market-button apple-button mb-light-skin" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">App Store</span></a><a class="market-button google-button mb-light-skin" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">Google Play</span></a><a class="market-button windows-button mb-light-skin" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">Windows Store</span></a>
            </section>
          </div>
          <div class="col-lg-6">
            <!-- Subscription-->
            <section class="widget widget-light-skin">
              <h3 class="widget-title">Be Informed</h3>
              <form class="row" action="http://rokaux.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;amp;id=1194bb7544" method="post" target="_blank" novalidate>
                <div class="col-sm-9">
                  <div class="input-group input-light">
                    <input class="form-control" type="email" name="EMAIL" placeholder="Your e-mail"><span class="input-group-addon"><i class="icon-mail"></i></span>
                  </div>
                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div style="position: absolute; left: -5000px;" aria-hidden="true">
                    <input type="text" name="b_c7103e2c981361a6639545bd5_1194bb7544" tabindex="-1">
                  </div>
                  <p class="form-text text-sm text-white opacity-50 pt-2">Subscribe to our Newsletter to receive early discount offers, latest news, sales and promo information.</p>
                </div>
                <div class="col-sm-3">
                  <button class="btn btn-primary btn-block mt-0" type="submit">Subscribe</button>
                </div>
              </form>
              <div class="pt-3"><img class="d-block" style="width: 324px;" alt="Cerdit Cards" src="img/credit-cards-footer.png"></div>
            </section>
          </div>
        </div>
        <!-- Copyright-->
        <p class="footer-copyright">© All rights reserved. Made with &nbsp;<i class="icon-heart text-danger"></i><a href="http://rokaux.com/" target="_blank"> &nbsp;by rokaux</a></p>
      </div>
    </footer>
    <!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="icon-chevron-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script src="js/vendor.min.js"></script>
    <script src="js/scripts.min.js"></script>
    <!-- Customizer scripts-->
    <script src="customizer/customizer.min.js"></script>
  </body>

<!-- Mirrored from themes.rokaux.com/unishop/v3.0/template-3/search-results.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Dec 2018 09:14:44 GMT -->
</html>