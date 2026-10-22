<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .test {
            color: blue;
            font-size: 16px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <?php
        $name = $_POST['name'] ?? '';
        $surname = $_POST['surname'] ?? '';
        $position = $_POST['position'] ?? '';
        $comments = $_POST['comments'] ?? '';
        $age = $_POST['age'] ?? '';
        $email = $_POST['email'] ?? '';
        $gender = $_POST['gender'] ?? '';
        $hobby = $_POST['hobby'] ?? '';
        echo "Name: " . htmlspecialchars($name) . "<br>";
        echo "Surname: " . htmlspecialchars($surname) . "<br>";
        echo "Course: " . htmlspecialchars($position) . "<br>";
        echo "Comments: " . htmlspecialchars($comments) . "<br>";
        echo "Age: " . htmlspecialchars($age) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "Gender: " . htmlspecialchars($gender) . "<br>";
        echo "Hobby: " . htmlspecialchars(implode(", ", $hobby)) . "<br>";

        print "<p class='test'>Hello, " . htmlspecialchars($name) . "!</p>";
        print "<p class='test'>Your surname is: " . htmlspecialchars($surname) . "</p>";
        print "<p class='test'>Your course is: " . htmlspecialchars($position) . "</p>";
        print "<p class='test'>Your age is: " . htmlspecialchars($age) . "</p>";
        print "<p class='test'>Your email is: " . htmlspecialchars($email) . "</p>";
        print "<p class='test'>Your gender is: " . htmlspecialchars($gender) . "</p>";
        print "<p class='test'>Your hobby is: " . htmlspecialchars(implode(", ", $hobby)) . "</p>";
        print "<textarea class='test' disabled readonly>Your comments are: " . htmlspecialchars($comments) . "</textarea>";
    ?>
</body>
</html>

