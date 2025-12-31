<?php
include 'header.php';
require 'database.php';
?>
<div class="content">
Products
<div class="product_container">
    <?php 
    $query = "select * from products";
    $res = mysqli_query($db_connection, $query);
    while($product = mysqli_fetch_assoc($res)){
    ?>
    <div class="product">
        <p><?php echo $product['name']; ?></p>
        <p><?php echo $product['description']; ?></p>
        <p><?php echo $product['price']; ?></p>
        <p><img src="images" alt=""></p>
        <p><input type="button" value="Buy Now"></p>
    </div>
    <?php 
    }
    ?>
</div>

</div>