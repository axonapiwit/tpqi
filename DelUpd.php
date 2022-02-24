<?php
require 'connect.php';
//รับค่าไอดีที่จะแก้ไข
$ProductID = mysqli_real_escape_string($con, $_GET['ProductID']);

//query ข้อมูลจากตาราง: 
$sql = "SELECT * FROM Products WHERE ProductID='$ProductID' ";
$result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error($con));
$row = mysqli_fetch_array($result);
extract($row);

//https://devbanban.com/?p=259

?>

<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 70%;
        }

        .input {
            color: palevioletred;
            background-color: white;
            border-color: pink;
            border-radius: 4px;
            padding: 6px;
        }

        .saveDel-button {
            color: white;
            background-color: palevioletred;
            border-radius: 4px;
            padding: 8px;
            cursor: pointer;
        }

        .reset-button {
            color: palevioletred;
            background-color: white;
            border-radius: 4px;
            padding: 8px;
            cursor: pointer;
        }
    </style>
    <title>Product</title>
    <meta charset="UTF-8">

</head>

<body>

    <form action="#" method="POST">
        <h1>
            <?php echo $ProductName; ?>
        </h1>
        <input class="input" type="hidden" name="Products" value="<?php echo $ProductID; ?>" />


        <label>ProductName*</label><br>
        <input class="input" name="pname" type="text" id="pname" size="40" value="<?php echo $ProductName; ?>" required> <br>

        <label>Picture*</label><br>
        <input class="input" name="pic" type="text" id="pic" size="40" value="<?php echo $Picture; ?>" required> <br>

        <label>Category*</label><br>
        <input class="input" name="category" type="text" id="category" size="40" value="<?php echo $Category; ?>" required> <br>

        <label>ProductDescription*</label><br>
        <input class="input" name="pdest" type="text" id="pdest" size="40" value="<?php echo $ProductDescription; ?>" required> <br>

        <label>Price*</label><br>
        <input class="input" name="price" type="number" id="price" value="<?php echo $Price; ?>" required> <br>

        <label>QuantityStock*</label><br>
        <input class="input" name="qstock" type="number" id="qstock" value="<?php echo $QuantityStock; ?>" required> <br>

        <br>

        <input class="saveDel-button" type="submit" value="Delete" onClick="this.form.action='frmDel.php'; submit()">

        <input class="saveDel-button" type="submit" value="Save" onClick="this.form.action='frmUpd.php'; submit()">


        <input class="reset-button" type="reset" value="Cancel">
    </form>


</body>

</html>