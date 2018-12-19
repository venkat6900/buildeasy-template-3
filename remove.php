<?php 
include 'db.php';
if(isset($_GET['id'])){
    echo $_GET['id'];
    $id = $_GET['id'];

    $sql = $con->query("DELETE FROM `cart` WHERE id = '$id' ");
    header("refresh:0; url=cart.php");
}

?>