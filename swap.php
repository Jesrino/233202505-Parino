<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swapping Variables</title>
</head>
<body>
    <h1>Task 5: Swapping Variables </h1>
    <?php 
        $a = 5;
        $b = 10;

        echo "Before swapping: a = $a, b = $b <br>";

        $temp = $a;
        $a = $b;
        $b = $temp;

        echo "After swapping: a = $a, b = $b</p>";
    ?>
    <button> <a class="exit-button" href="index.php"></a> Go Back</button>
</body> 
</html>