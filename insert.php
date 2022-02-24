<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Document</title>
</head>

<body>
    <h2>New Product</h2>
    <form action="frminsert.php" method="POST">
        <label>ProductName*</label><br>
        <input class="input" name="pname" type="text" id="pname" size="40" required><br>

        <label>Picture*</label><br>
        <input class="input" name="pic" type="text" id="pic" size="40" required><br>

        <label>Category*</label><br>
        <input class="input" name="category" type="text" id="category" size="40" required><br>

        <label>ProductDescription*</label><br>
        <input class="input" name="pdest" type="text" id="pdest" size="40" required><br>

        <label>Price*</label><br>
        <input class="input" name="price" type="text" id="price" min="0" max="999" required><br>

        <label>QuantityStock*</label><br>
        <input class="input" name="qstock" type="text" id="qstock" min="0" max="999" required><br>

        <br>

        <input class="saveDel-button" type="button" value="Delete">
        <input class="saveDel-button" type="submit" value="Save">
        <input class="reset-button" type="reset" value="Cancel">
    </form>
</body>

</html>