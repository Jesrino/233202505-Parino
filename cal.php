<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
</head>
<body>
    <h1>Task 7: BMI Calculator</h1>
    <form action=""></form>
    <?php
    $weight = 60; 
    $height = 1.75; 
    $bmi = $weight / ($height * $height);
    echo "Heigth: " . $height . "kg <br>";
    echo "Weight: " . $weight . "m <br>";
    echo "BMI: " . round($bmi, 2) . "<br>";
    ?>
    <p><button><a href="index.php">Back</a></button></p>
</body>
</html> 