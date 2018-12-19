<?php
    include_once 'header.php';
    include 'db2.php';
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM services WHERE id_vendor = '$id' ";
    $result = mysqli_query($con, $sql); 

?>
<section>
    <div class="container p-5">    
        <div class="row">
            <?php
                 while($data = mysqli_fetch_assoc($result)) {
            ?>
            <div class="col-md-4">
                <div class="card" style="width: 22rem;">
                    <img class="card-img-top" src="<?php echo 'services/'.$data['image']; ?>" height="10px" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $data['service']; ?></h5>
                        <p class="card-text"><?php echo $data['description']; ?></p>
                        <a href="#" class="btn btn-primary">Check Your Service</a>
                    </div>
                </div>
            </div>
            <?php } ?>           
        </div>
        
    </div>
</section>
<?php
    include_once 'footer.php';
?>