<?php

$zoekterm = $_POST['zoekveld'];

if(!empty($zoekterm)){
    header("location: index.php");
    exit;
}

require 'database.php';

$sql = "SELECT * FROM tools WHERE tool_name LIKE '%$zoekterm%'";

$result = mysqli_query($conn,$sql);

$tools = mysqli_fetch_all($result, MYSQLI_ASSOC);

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
    <?php foreach ($tools as $tool): ?>
            <p> <?php echo $tool['tool_name'] ?> </p>
        <?php endforeach; ?>
</body>
</html>