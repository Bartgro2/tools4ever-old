<?php



session_start();

if (!isset($_SESSION['isIngelogd'])) {
    header("location: inloggen.php");
    exit();
}

if ($_SESSION['role'] != "administrator") {
    header("location: store.php ");
    exit();
}

$timestamp = time();

include 'vendor/autoload.php';

use Carbon\Carbon;

$mutable = Carbon::now();

$modifiedMutable = $mutable->add(7, 'day');


require  'database.php';

$sql = "SELECT count(*) as employees FROM users";

$result = mysqli_query($conn, $sql);

$users = mysqli_fetch_assoc($result);


$sql = "SELECT avg (tool_price) as price FROM tools";

$result = mysqli_query($conn, $sql);

$tool_price = mysqli_fetch_assoc($result);

$sql = "SELECT avg (tool_price) as price, tool_category as category FROM tools group by category";

$result = mysqli_query($conn, $sql);

$tools_categorys_prijzen = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <h1><?php echo "Hallo! " . $_SESSION['voornaam']; ?></h1>
    <p> <?php echo ($modifiedMutable); ?></p>
    <p> <?php echo date('Y-m-d', $timestamp); ?></p>
    <p> gebruikers <?php echo $users['employees'] ?></p>
    <p> gemiddelde tool prijs <?php echo $tool_price['price'] ?></p>
    <?php foreach ($tools_categorys_prijzen as $tool_category_prijs) : ?>
        <p> <?php echo $tool_category_prijs['category'] ?> </p>
        <p> <?php echo $tool_category_prijs['price'] ?> </p>
    <?php endforeach; ?>
    <div>
        <a href="logout.php">logout</a>
    </div>
</body>

</html>