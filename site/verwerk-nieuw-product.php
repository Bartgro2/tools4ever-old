<?php



   

    if($_SERVER["REQUEST_METHOD"] !== "POST"){
        header($_SERVER["SERVER_PROTOCOL"] . " 405 Method Not Allowed", true, 405);
        include 'tools-overzicht.php';
        exit;
    }

    $naam       = $_POST['naamProduct'];
    $categorie  = $_POST['categorieProduct'];
    $prijs      = $_POST['prijsProduct'];
    $merk       = $_POST['merkProduct'];


    require 'database.php';

    $sql =  "INSERT INTO tools(tool_name, tool_category, tool_price, tool_brand) VALUES ('$naam','$categorie','$prijs','$merk')";

    mysqli_query($conn, $sql);

    if (mysqli_query($conn, $sql)) {
        header("location: tools-overzicht.php");
        exit;
    }
