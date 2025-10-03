<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
</head>
<body>
    <h1>Task 4: Temperature Converter</h1>
    <?php 
        $celsius = 25; 
        $fahrenheit = ($celsius * 9/5) + 32;

        echo "<p>Temperature in Celsius: $celsius °C</p>";
        echo "<p>Temperature in Fahrenheit: $fahrenheit °F</p>";

    ?>
</body>
</html>