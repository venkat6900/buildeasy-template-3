<?php 
  include_once 'header.php';
  include 'db2.php';
  $sql = $con->query("SELECT vendors.name, vendors.email, vendor_profile.image, vendor_profile.mobile, vendor_profile.area, vendor_profile.address FROM vendors INNER JOIN vendor_profile ON vendors.id = vendor_profile.id_vendor");
  $info = $sql->fetch_assoc();
?>
<section>
  <div class="media">
    <img class="mr-3" src="<?php echo 'profiles/'.$info['image']; ?>" alt="Generic placeholder image" width="400px" height="400px">
    <div class="media-body mt-5 mr-5 ml-5">
      <ul class="list-group">
          <li class="list-group-item text-info"><h3><?php echo $info['name']; ?></h3></li>
          <li class="list-group-item"><?php echo $info['mobile']; ?></li>
          <li class="list-group-item"><?php echo $info['email']; ?></li>                   
          <li class="list-group-item"><?php echo $info['area']; ?></li>
          <li class="list-group-item"><?php echo $info['address']; ?></li>
        </ul>      
    </div>
  </div>
</section>
<?php
	include_once 'footer.php';
?>