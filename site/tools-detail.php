<?php
require 'database.php';

$id = $_GET['id'];
$sql = "SELECT * FROM tools WHERE tool_id = $id";

$result = mysqli_query($conn,$sql);
  //zolang een rij gevuld kan worden wordt de loop uitgevoerd
$tool = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $tool['tool_name']?></h1>
    <h2><?php echo $tool['tool_category'] ?></h2>
    <h3><?php echo $tool['tool_price'] ?></h3>
    <h4><?php echo $tool['tool_brand'] ?></h4>
</body>
</html>