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
<?php
include "Rectangle.php";
$width = 10;
$height = 20;
$rectangle = new Rectangle($width, $height);
echo $rectangle->getArea();
echo $rectangle->getPerimeter();
echo "Your rectangle " . $rectangle->display();
?>
</body>
</html>