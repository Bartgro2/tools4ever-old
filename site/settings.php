<?php
session_start();

$id = $_SESSION['userid'];
require 'database.php';

$sql = "SELECT * from users inner join user_settings on user_settings.user_id = users.id WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$user_settings = mysqli_fetch_assoc($result);

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
    <style>
    body{
    background-color: <?php echo $user_settings['background_color']; ?>
    }
</style>

</body>

</html>








echo $user_settings['background_color'];
?>