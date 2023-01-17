<?php

    $con = mysqli_connect('localhost', 'root');
    mysqli_select_db($con, 'paladin');
    $sql = "SELECT * FROM  products WHERE featured=2";
    $featured = $con->query($sql);

?>
<?php

include('include/header.php');


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
        <a href="details.php">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">More</button>
        </a>
        </div>
        <?php endwhile; ?>

</div>
</div>

</body>
</html>