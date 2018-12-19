<?php
include_once 'db.php';
if(isset($_POST['book'])){
    $service = $_POST['service'];
    $category = $_POST['category'];
    $date = $_POST['date'];
    $service_id = $_POST['service_id'];

    $query = $con->query("SELECT * FROM cart WHERE id_service = '$service_id' ");
    if(mysqli_num_rows($query) > 0){
      echo "<script> alert('service already added to cart');</script> ";
    }
    else {       

        $sql = $con->query("INSERT INTO `cart`(`id`, `id_custmor`, `service_id`, `service`, `category`, `date`)
                            VALUES (null, '$custmor_id', '$service_id', '$service', '$category', '$date')");
        if(isset($sql)) {
          echo "<script> alert('service successfully added!!');</script> ";
          header('location: cart.php');      
        }
    } 
  }

?>