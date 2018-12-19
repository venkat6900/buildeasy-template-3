<?php
    include_once 'header.php';
    include 'db2.php';  
    $id_vendor = $_SESSION['id'];
    if(isset($_POST['submit'])){
       $image = $_FILES['image']['name'] ;
       $temp_name = $_FILES['image']['tmp_name'];
       $location = "profiles/";
       move_uploaded_file($temp_name, $location.$image);

       $mobile = $_POST['mobile'];
       $area = $_POST['area'];
       $address = $_POST['address'];
        
       $sql = "INSERT INTO `vendor_profile`(`id`, `id_vendor`, `image`, `mobile`, `area`, `address`)
                VALUES (null, '$id_vendor','$image', '$mobile', '$area', '$address' )";
        
       if(mysqli_query($con, $sql)){
           echo "<script>alert('data submitted successfully!!!');</script>";
       }
       else{
           echo "<script>alert('Error in updating???');</script>";
       }
    }  
?>
<section>
    <div class="container p-5">
         <div class="row mb-2">.
            <div class="col-md-12">
                <div class="card" style="width: 30rem;">
                    <img class="card-img-top" src="img/avatar-2.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h3>Update Image</h3>
                        <form action="#" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="form-label">Choose Image</label>
                                <input type="file" name="image" class="btn btn-warning"  value="upload">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Username</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Your New Name">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Enter Your new Email..">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Mobile</label>
                                <input type="text" name="mobile" class="form-control" placeholder="Enter Your Mobile number">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Area</label>
                                <input type="text" name="area" class="form-control" placeholder="Enter Your Area">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Address</label>
                                <input type="text" name="address" class="form-control" placeholder="Address">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>           
        </div>
        
        <div class="row">
            <div class="col-md-6 border border-danger p-3">
                <h3>Change Password</h3>
                <form action="#" method="post">
                    <div class="form-group">
						<label class="form-label">Password</label>
						<input type="password" class="form-control" placeholder="New Password">
                    </div>
                    <div class="form-group">
						<label class="form-label">Password</label>
						<input type="password" class="form-control" placeholder="New Password">
                    </div>
                    <div class="form-group">
						<label class="form-label">Confirm Password</label>
						<input type="password" class="form-control" placeholder="Confirm Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>  
</section>
<?php
    include_once 'footer.php';
?>