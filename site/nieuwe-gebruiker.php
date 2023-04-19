<?php
require 'database.php';

if (!empty($_POST['naamProduct'])) {



    $firstname      = $_POST['firstname'];
    $lastname       = $_POST['lastname'];
    $email          = $_POST['email'];
    $password       = $_POST['password'];
    $address        = $_POST['address'];
    $city           = $_POST['city'];
    $role           = $_POST['role'];


    $sql =  "INSERT INTO users(firstname, lastname, email, password, address, city, role) VALUES ('$firstname','$lastname','$email','$password','$address','$city','$role')";

    mysqli_query($conn, $sql);

    if (mysqli_query($conn, $sql)) {
        header("location: tools-overzicht.php");
        exit;
    }
}

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
    <div>
        <main>
            <form action="" method="get">

                <label for="firstname">firstname</label>
                <input type="text" name="firstname" id="firstname">
                <label for="lastname">lastname</label>
                <input type="text" name="lastname" id="lastname">

                <label for="email">email</label>
                <input type="email" name="email" id="email">
                <label for="password">password</label>
                <input type="password" name="password" id="password">
                <label for="address">address</label>
                <input type="text" name="address" id="address">
                <label for="city">city</label>
                <input type="text" name="city" id="city">
                <select name="role" id="role">
                    <option value="administrator">administrator</option>
                    <option value="employee">employee</option>
                    <option value="customer">customer</option>
                </select>
                <button type="submit"></button>
            </form>
        </main>
    </div>
</body>

</html>