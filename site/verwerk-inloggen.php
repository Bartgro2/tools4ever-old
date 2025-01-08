<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header($_SERVER["SERVER_PROTOCOL"] . " 405 Method Not Allowed", true, 405);
    include '405.php';
    exit;
}


$email  = $_POST['email'];
$password  = $_POST['password'];

require 'database.php';

$sql = "SELECT * FROM users WHERE email = '$email' ";

$result = mysqli_query($conn, $sql);

$user = mysqli_fetch_assoc($result);


if (!is_array($user)) {
    header("location: inloggen.php");
    exit;
}

if ($user['password'] === $_POST['password']) {

    session_start();

    $_SESSION['isIngelogd'] = true;

    $_SESSION['voornaam']  = $user['firstname'];

    $_SESSION['role'] = $user['role'];

    switch ($user['role']) {
        case 'admin':
            header('location: admin-dashboard.php');
            exit;
            break;
        case 'employee':
            header('location: employee-dashboard.php');
            exit;
            break;
        case 'customer':
            header('location: store.php');
            exit;

        default:
            header('location: store.php');
            exit;
            break;
    }

    header("location: dashboard.php");
    exit;
}


header("location: inloggen.php");
exit;
