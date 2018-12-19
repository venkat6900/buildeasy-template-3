<?php
	include_once 'header.php';
	include 'db2.php';
	$id_vendor = $_SESSION['id'];
	echo $id_vendor;
	if(isset($_POST['submit'])){
		$category = $_POST['category'];
		$service = $_POST['service'];
		$address = $_POST['address'];
		$description = $_POST['description'];
		$image = $_FILES['image']['name'];
		$temp = $_FILES['image']['tmp_name'];
		$location = "services/";

		move_uploaded_file($temp, $location.$image);

		$sql =$con->query("INSERT INTO `services`(`id`, `id_vendor`, `category`, `service`, `address`, `description`, `image`)
			 VALUES (null, '$id_vendor', '$category', '$service', '$address', '$description', '$image')");
		if(isset($sql)){
			echo "<script>alert('your data submitted!!!');</script>";	
		}
		else{
			echo "<script>alert('error in data submission..');</script>";
		}
		
	
	}		 
?>
<section class="m-5">                      
                           
    <div class="col-12 col-xl-6">
		<div class="card">
			<div class="card-header">
				<h5 class="card-title">ADD SERVICES</h5>
				<h6 class="card-subtitle text-muted">Default Bootstrap form layout.</h6>
			</div>
			<div class="card-body">
				<form action="#" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<select class="custom-select" name="category">							
							<option value="Construction Service Providers" selected>Construction Service Providers</option>
							<option value="Construction Material Dealers">Construction Material Dealers</option>
							<option value="Building Maintanence Services">Building Maintanence Services</option>
							<option value="Home Appliance Dealers">Home Appliance Dealers</option>
							<option value="Admixtures">Admixtures</option>
							<option value="Solar Product Dealers">Solar Product Dealers</option>							
						</select>
					</div>
					<div class="form-group">
						<label class="form-label">Service Name</label>
						<input type="text" name="service" class="form-control" placeholder="ex: building works, electrical works..">
					</div>
					<div class="form-group">
						<label class="form-label">Address</label>
						<input type="text" name="address" class="form-control" placeholder="Enter Your location Address">
					</div>
					<div class="form-group">
						<label class="form-label">Description</label>
						<textarea class="form-control" name="description" placeholder="Textarea" rows="3"></textarea>
					</div>
					<div class="form-group">
						<label class="form-label w-100">File input</label>
						<input type="file" name="image">
						<small class="form-text text-muted">Upload a Sample image of your service</small>
					</div>
					<div class="form-group">
						<label class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input">
							<span class="custom-control-label">Check me out</span>
						</label>
					</div>
					<button type="submit" name="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</section>
<?php
    include_once 'footer.php';
?>