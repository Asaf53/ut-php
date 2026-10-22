<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
    <style>body { font-family: Arial, Arial, Helvetica, sans-serif; font-size: 16px;}</style>
</head>
<body>

<?php
    $sec = date('s');
    $colorArray = array('blue', 'green', 'red', 'maroon', 'gray');
    $colorIndex = $sec % 5;
    print '<h1 style="color: ' . $colorArray[$colorIndex] . ';">Hello, World!</h1>';
    echo "Welcome to Intelligent System";

    echo "<br>";
    echo "University of Tetova";
    echo "<br>";
    echo "Faculty of Computer Science and Engineering";
    echo "<br>";
    echo "Department of Software Engineering";

    $name = "Asaf Rushiti";
    $age = 22;
    $university = "University of Tetova";

    echo "<br>";
    echo $name;
    echo "<br>";
    echo $age;
    echo "<br>";
    echo $university;
    echo "<br>";

    $a = 20;
    $b = 5;

    $sum = $a +  $b;
    $difference = $a - $b;
    $product = $a * $b;
    $division = $a / $b;

    echo "Sum: " . $sum;
    echo "<br>";
    echo "Difference: " . $difference;
    echo "<br>";
    echo "Product: " . $product;
    echo "<br>";
    echo "Division: " . $division;

    $parkingName = "City Parking";
    $totalSpace = 100;
    $occupiedSpace = 65;
    $freeSpaces = 35;

    echo "<br>";
    echo "<h1>$parkingName</h1>";
    echo "Occupied spaces: " . $occupiedSpace;
    echo "<br>";
    echo "Free spaces: " . $freeSpaces;
?>

</body>
</html>