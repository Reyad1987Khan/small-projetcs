<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$myColor = "Green";
    switch($myColor) {
        case "Green";
        echo "Her favourite color is :".$myColor;
        break;

        case "Yellow";
        echo "His favourite color is :".$myColor;
        break;

        case "White";
        echo "Ontora favourite color is :".$myColor;
        break;

        default:
        echo "Your favorite color is neither red, blue, nor green!";
    }
    ?>
</body>
</html>