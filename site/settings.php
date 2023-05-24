<?php

$gebruikersnaam = $_GET[''];

session_start();

if (!isset($_SESSION['isIngelogd'])) {
    header("location: inloggen.php");
    exit();
}

if ($_SESSION['role'] != "administrator") {
    header("location: store.php ");
    exit();
}
