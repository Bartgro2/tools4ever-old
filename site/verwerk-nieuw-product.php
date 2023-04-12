<?php

if (!empty($_POST['naamProduct'])) {



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
}