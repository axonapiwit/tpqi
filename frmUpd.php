<?php
require 'connect.php';

$ProductID = $_POST['Products']; 
$pname = $_POST['pname'];
$pic = $_POST['pic'];
$category = $_POST['category'];
$pdest = $_POST['pdest'];
$price = $_POST['price'];
$qstock = $_POST['qstock'];


$sql = "UPDATE Products SET 
ProductName = '$pname',
Picture = '$pic',
Category = '$category',
ProductDescription = '$pdest',
Price = '$price',
QuantityStock = '$qstock'
WHERE ProductID = '$ProductID'";

$resultUpd = mysqli_query($con, $sql) or die("Error in query: $sql" . mysqli_error($con));

if ($resultUpd) {
    header("Location:http:///localhost/code/index.php");
}
