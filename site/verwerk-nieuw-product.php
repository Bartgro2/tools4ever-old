<?php
require 'database.php';


if($_SERVER["REQUEST_METHOD"] !== "POST"){
    header($_SERVER["SERVER_PROTOCOL"] . " 405 Method Not Allowed", true, 405);
    // echo "verkeerde request method gebruikt";
    include '405.php';
    exit;

}


$naam      = $_POST['naamProduct'];
$categorie = $_POST['categorieProduct'];
$prijs     = $_POST['prijsProduct'];
$merk      = $_POST['merkProduct'];


$sql = "INSERT INTO tools (tool_name, tool_category, tool_price, tool_brand) VALUES ('$naam', '$categorie', '$prijs', '$merk' )";

var_dump(mysqli_query($conn, $sql));
