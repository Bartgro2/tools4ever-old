<?php

require 'database.php';

$sql = "SELECT * FROM tools";
$result = mysqli_query($conn, $sql);
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
    <div class="container">
        <main>
            <form action="verwerk-zoek.php" method="post">
                <label for="zoekveld">Zoek</label>
                <input type="search" name="zoekveld" id="">

                <button type="submit">
                    zoek
                </button>
            </form>

            <div class="flex-container">
                <?php foreach ($tools as $tool) : ?>
                    <div class="items">
                        <p><?php echo $tool['tool_name'] ?> </p>
                        <p><?php echo $tool['tool_category'] ?> </p>
                        <p><?php echo $tool['tool_price'] ?></p>
                        <p><?php echo $tool['tool_brand'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
    </div>
    </main>
</body>

</html>