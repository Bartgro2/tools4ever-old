<?php
require 'database.php';

//de sql query
$sql = "SELECT * FROM tools";

//hier wordt de query uitgevoerd met de database
$result = mysqli_query($conn, $sql);

$all_tools = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<main>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Naam</th>
                    <th>Categorie</th>
                    <th>Prijs</th>
                    <th>Merk</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($all_tools as $tool) : ?>
                    <tr>
                        <td><?php echo $tool['tool_name'] ?></td>
                        <td><?php echo $tool['tool_category'] ?></td>
                        <td><?php echo $tool['tool_price'] ?></td>
                        <td><?php echo $tool['tool_brand'] ?></td>
                        <td> <a href="tools-detail.php?id=<?php echo $tool['tool_id'] ?>">tool</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>

        </table>
    </div>
</main>

<body>

</body>

</html>