<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swapping Variables</title>
</head>
<body>
    <h1>Task 5: Swapping Variables </h1>
    <form action=""></form>
    <?php 
        $a = 5;
        $b = 10;

        echo "Before swapping: a = $a, b = $b <br>";

        $temp = $a;
        $a = $b;
        $b = $temp;

        echo "After swapping: a = $a, b = $b</p>";
    ?>
    <p><button><a href="index.php">Back</a></button></p>
</body> 
</html>