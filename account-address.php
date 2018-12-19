<?php
 include 'header.php';
  include 'db.php'; 
  $id_custmors = $_SESSION['id'];
  if(isset($_POST['submit'])){
    $area = $_POST['area'];
    $address = $_POST['address'];
    $query = $con->query("INSERT INTO `custmor_profile`(`id`, `id_custmor`, `area`, `address`)
                          VALUES (null, '$id_custmors', '$area', '$address') ");
  }

  $sql = $con->query("SELECT * FROM custmors WHERE id = '$id_custmors' ");
  $data = $sql->fetch_assoc();

?>
    <!-- Page Title-->
    <div class="page-title">
      <div class="container">
        <div class="column">
          <h1>Contact / Shipping Address</h1>
        </div>
        <div class="column">
          <ul class="breadcrumbs">
            <li><a href="index-2.html">Home</a>
            </li>
            <li class="separator">&nbsp;</li>
            <li><a href="account-orders.html">Account</a>
            </li>
            <li class="separator">&nbsp;</li>
            <li>Contact Address</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container padding-bottom-3x mb-1">
      <div class="row">
        <div class="col-lg-4">
           <aside class="user-info-wrapper">
            <div class="user-cover" style="background-image: url(img/account/user-cover-img.jpg);">
              <div class="info-label" data-toggle="tooltip" title="You currently have 290 Reward Points to spend"><i class="icon-award"></i>290 points</div>
            </div>
            <div class="user-info">
              <div class="user-avatar"><a class="edit-avatar" href="#"></a><img src="<?php echo 'profiles/'.$data['image']; ?>" alt="User"></div>
              <div class="user-data">
                <h4 class="h5"><?php echo $data['name']; ?></h4><span>Joined February 06, 2017</span>
              </div>
            </div>
          </aside>
           <nav class="list-group">
            <a class="list-group-item" href="account-orders.php">
              <i class="icon-shopping-bag"></i>Orders</a>
              <a class="list-group-item" href="account-profile.php">
                <i class="icon-user"></i>Profile</a>
              <a class="list-group-item active" href="account-address.php">
                <i class="icon-map-pin"></i>Addresses</a>
          </nav>
        </div>
        <div class="col-lg-8">
          <div class="padding-top-2x mt-2 hidden-lg-up"></div>
          <h5>Contact Address</h5>
          <hr class="padding-bottom-1x">
          <form class="row" method="post" action="#">
            <div class="col-md-6">
              <div class="form-group">
                <label for="account-company">Door No / Area</label>
                <input class="form-control" name="area" type="text"  value="">
              </div>
            </div> 
            <div class="col-md-6">
              <div class="form-group">
                <label for="account-address">Address </label>
                <input class="form-control" name="address" type="text" value="">
              </div>
            </div>
            <div class="col-12 padding-top-1x">
              <h5>Shipping Address</h5>
              <hr class="padding-bottom-1x">
              <div class="custom-control custom-checkbox d-block">
                <input class="custom-control-input" type="checkbox" id="same_address" checked>
                <label class="custom-control-label" for="same_address">Same as Contact Address</label>
              </div>
              <hr class="margin-top-1x margin-bottom-1x">
              <div class="text-right">
                <button class="btn btn-primary margin-bottom-none" name="submit" type="submit">Update Address</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Site Footer-->
    <?php
      include_once 'footer.php';
    1?>