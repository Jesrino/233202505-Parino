 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area and Perimeter of a Rectangle</title>
</head>
<body>
    <H1>Task 3:Area and Perimeter of a Rectangle </H1>
    <form action="" method="POST">
        <label for="length">Enter Length:</label>
        <input type="number" id="length" name="length" required><br><br>

        <label for="width">Enter Width:</label>
        <input type="number" id="width" name="width" required><br><br>

        <input type="submit" value="Calculate">
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $length = $_POST['length'];
    $width = $_POST['width'];
    $area = $length * $width;
   
    echo "Length: " . $length ."<br>";
    echo "Width:" . $width . "<br>";
    echo "Area: " . $area . "<br>";
    }
    ?> 
</body>
</html> 