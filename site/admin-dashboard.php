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


$sql = "SELECT avg (tool_price) as average_price FROM tools";
$result = mysqli_query($conn, $sql);
$tool_price = mysqli_fetch_assoc($result);

$sql = "SELECT avg (tool_price) as average_price, tool_category FROM tools group by tool_category";
$result = mysqli_query($conn, $sql);
$tools_categories_prijzen = mysqli_fetch_all($result, MYSQLI_ASSOC);

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
    <h1>Welkom beste <?php echo $_SESSION['voornaam']; ?></h1>
    <p> <?php echo ($modifiedMutable); ?></p>
    <p> <?php echo date('Y-m-d', $timestamp); ?></p>
    <p> gebruikers <?php echo $users['employees'] ?></p>
    <p> gemiddelde tool prijs &euro;<?php echo round($tool_price['average_price'],2) ?></p>
    <?php foreach ($tools_categories_prijzen as $tool_category_prijs) : ?>
        <p> <?php echo $tool_category_prijs['tool_category'] ?> </p>
        <p> &euro;<?php echo round($tool_category_prijs['average_price'],2) ?> </p>
    <?php endforeach; ?>
    <div>
        <a href="logout.php">logout</a>
    </div>
    <div>
       
        <a href="settings.php"> gebruikers instelligen</a>
        
    </div>
</body>

</html>