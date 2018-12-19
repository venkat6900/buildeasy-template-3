<?php
  include 'header.php';
  include 'db.php'; 
  $id_custmors = $_SESSION['id'];
  // echo $id_custmors;

  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];

    $query = $con->query("UPDATE `custmors` SET name = '$name', mobile = '$mobile'  ");
   

  }

  $sql = $con->query("SELECT * FROM custmors WHERE id = '$id_custmors' ");
  $data = $sql->fetch_assoc();
?>
    <!-- Page Title-->
    <div class="page-title">
      <div class="container">
        <div class="column">
          <h1>My Profile</h1>
        </div>
        <div class="column">
          <ul class="breadcrumbs">
            <li><a href="index-2.html">Home</a>
            </li>
            <li class="separator">&nbsp;</li>
            <li><a href="account-orders.html">Account</a>
            </li>
            <li class="separator">&nbsp;</li>
            <li>My Profile</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container padding-bottom-3x mb-2">
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
            <a class="list-group-item with-badge" href="account-orders.php">
              <i class="icon-shopping-bag"></i>Orders</a>
              <a class="list-group-item active" href="account-profile.php">
                <i class="icon-user"></i>Profile</a>
              <a class="list-group-item" href="account-address.php">
                <i class="icon-map-pin"></i>Addresses</a>
          </nav>
        </div>
        <div class="col-lg-8">
          <div class="padding-top-2x mt-2 hidden-lg-up"></div>
          <form class="row" method="post" action="#">
            <div class="col-md-6">
              <div class="form-group">
                <label for="account-fn">User Name</label>
                <input class="form-control" name="name" type="text" value="<?php echo $data['name']; ?>" required>
              </div>
            </div>           
            <div class="col-md-6">
              <div class="form-group">
                <label for="account-email">E-mail Address</label>
                <input class="form-control" name="email" type="email" id="account-email" value="<?php echo $data['email']; ?>" disabled>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="account-phone">Phone Number</label>
                <input class="form-control" name="mobile" type="text" id="account-phone" value="<?php echo $data['mobile']; ?>" required>
              </div>
            </div>
           
            <div class="col-12">
              <hr class="mt-2 mb-3">
              <div class="d-flex flex-wrap justify-content-between align-items-center">
                <div class="custom-control custom-checkbox d-block">
                  <input class="custom-control-input" type="checkbox" id="subscribe_me" checked>
                  <label class="custom-control-label" for="subscribe_me">Subscribe me to Newsletter</label>
                </div>
                <button class="btn btn-primary margin-right-none" name="submit" type="submit">Update Profile</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Site Footer-->
    <?php
      include_once 'footer.php';
    ?>