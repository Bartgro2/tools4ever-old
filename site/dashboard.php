<?php



session_start();

if (!isset($_SESSION['isIngelogd'])) {
    header("location: inloggen.php");
    exit();
}

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
    <h1><?php echo "Hallo! " . $_SESSION['voornaam'];?></h1>

    <div>
        <a href="logout.php">logout</a>
    </div>
</body>
</html>
