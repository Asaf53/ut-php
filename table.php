<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $apples = $_POST['apples'];
        $pears = $_POST['pears'];
        $totalFruit = $apples + $pears;
        $diff = $apples - $pears;
        $reverseDiff = -$diff;
        $multipleApples = $apples * 2;
        $dividedApples = $apples / 2;
        $modulusApples = $apples % 2;
    ?>
    <table border="1">
        <tr>
            <th>Description</th>
            <th>Calculated Value</th>
        </tr>
        <?php 
            print "<tr><td>Total Fruit</td><td>$totalFruit</td></tr>";
            print "<tr><td>Apples</td><td>$apples</td></tr>";
            print "<tr><td>Pears</td><td>$pears</td></tr>";
            print "<tr><td>Difference (Apples - Pears)</td><td>$diff</td></tr>";
            print "<tr><td>Reverse Difference (Pears - Apples)</td><td>$reverseDiff</td></tr>";
            print "<tr><td>Multiple of Apples (Apples * 2)</td><td>$multipleApples</td></tr>";
            print "<tr><td>Divided Apples (Apples / 2)</td><td>$dividedApples</td></tr>";
            print "<tr><td>Modulus of Apples (Apples % 2)</td><td>$modulusApples</td></tr>";
            print "<tr><td>Rounded to two decimal places</td><td>" . number_format($totalFruit, 2) . "</td></tr>";
         ?>
    </table>
</body>
</html>

