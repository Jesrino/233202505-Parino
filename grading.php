<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Grading System</title>
</head>
<body>
    <h1>Task 10: Simple Grading System </h1>
<form action=""></form>
    <?php 
    $math = 85;
    $english = 78;
    $science = 85;
    echo "Math: " . $math . "<br>";
    echo "English: " . $english . "<br>";
    echo "Science: ". $science . "<br>";

    $average = ($math + $science + $english) / 3;
    echo "Average: ". round($average, 2) ."<br>";
    if ($average >= 90){
        $grade = "A";
    } elseif ($average >= 80){
        $grade = "B";
    } elseif ($average >= 70){
        $grade = "C";
    } elseif ($average >= 60){
        $grade = "D";
    } else {
        $grade = "F";
    }
    echo "Grade: ". $grade ."<br>";
    ?>
    <button> <a class="exit-button" href="index.php"></a> Go Back</button>
</body>
</html>