<?php
    include('include/header.php');
    if(isset($_REQUEST['id']))  {
        $id = $_REQUEST['id'];
        // echo $id; 

    }

   
    $sql = "SELECT * FROM  products WHERE id='$id'";
    $featured = $con->query($sql);


?>
<div class="col-md-2"></div>
<div class="col-md-8"></div>
<div class="row"></div>
<h2 class="text-center">Product Details</h2><br>
<?php

    while($product = mysqli_fetch_assoc($featured)):


?>  
<div class="col-md-5">
        <h4><?= $product['title'];?></h4>
        <img src="<?= $product['image'];?>" alt="<?= $product['title']; ?>"/>
        <p class="lprice"><b>₦ <?= $product['price'];?></b></p>
        <p class="desc">₦ <?= $product['description'];?></p>
        <p class="bname">₦ <?= $product['brand name'];?></p>
       
        </div>
        <?php endwhile; ?>

</div>
</div>
</body>
</html>
