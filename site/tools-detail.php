<?php

require 'database.php';

$id = $_GET['tool_id'];

$sql = "SELECT * FROM tools WHERE tool_id = $id";

$tool = mysqli_fetch_assoc(mysqli_query($conn, $sql));


include 'header.php'; ?>

<div class="product">
    <h1 class="product-title"><?php echo $tool['tool_name']; ?></h1>
    <p>
        <img src="images/<?php echo $tool['tool_image']; ?>" alt="" class="product-detail-image">
    <div class="product-category"><?php echo $tool['tool_category']; ?></div>
    <div class="product-brand"><?php echo $tool['tool_brand']; ?></div>
    <div class="product-price"><?php echo $tool['tool_price']; ?></div>
    </p>
    <a href="index.php">Terug</a>
</div>