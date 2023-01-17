<?php
    include('include/header.php');
    $sql = "SELECT * FROM  products WHERE featured=1";
    $featured = $con->query($sql);
?>


<div class="col-md-2"></div>
<div class="col-md-8"></div>
<div class="row"></div>
<h2 class="text-center">Top Products</h2>   <br>  <br>
<?php

    while($product = mysqli_fetch_assoc($featured)):


?>  
<div class="col-md-5">
        <h4> <?= $product['title'];?></h4>
        <img src="<?= $product['image'];?>" alt="<?= $product['title']; ?>"/>
        <p class="lprice">₦ <?= $product['price'];?></p>
        <a href="details.php?id=<?=$product['id']; ?>">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">More</button>
        </a>
        </div>
        <?php endwhile; ?>

</div>
</div>

</body>
</html>