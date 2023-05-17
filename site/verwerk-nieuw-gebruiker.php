<?php


if (!empty($_POST['firstname'])) {
require 'database.php';


    $firstname      = $_POST['firstname'];
    $lastname       = $_POST['lastname'];
    $email          = $_POST['email'];
    $password       = $_POST['password'];
    $address        = $_POST['address'];
    $city           = $_POST['city'];
    $role           = $_POST['role'];

    // wachtwoord hashen
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql =  "INSERT INTO users(firstname, lastname, email, password, address, city, role) 
    VALUES ('$firstname','$lastname','$email','$hashed_password','$address','$city','$role')";

    if (mysqli_query($conn, $sql)) {
        header("location: nieuwe-gebruiker.php");
        exit;
    }
}

?>