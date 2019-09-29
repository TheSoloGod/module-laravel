<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Discount Calculator</h2>
    <form method="post" action="http://localhost:8000/discountCalculator">
        <table>
            <tr>
                <td>Product Description</td>
                <td><input type="text" name="description"></td>
            </tr>
            <tr>
                <td>List Price</td>
                <td><input type="number" name="price"></td>
            </tr>
            <tr>
                <td>Discount Percent (%)</td>
                <td><input type="number" name="percent"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit">Gửi </button></td>+
            </tr>
        </table>
    </form>
</body>
</html>
