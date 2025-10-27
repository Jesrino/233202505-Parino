<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Math</title>
</head>
<body>
    <form action=""></form>
    <H1>Task 2: Simple Math</H1>
    <?php
    $a=160;
    $b= 165;

    $sum=$a+$b;
    $difference=$a-$b;
    $product=$a*$b;
    $qoutient=$a/$b;

    echo "Value of A: ". $a . "<br>" ;
    echo "Value of B: ". $b . "<br>";
    echo "The sum is: ". $sum . "<br>";
    echo "The difference is: ". $difference . "<br>";
    echo "The product is: ". $product ."<br>";
    echo "The qoutient is: ". $qoutient ."<br>";

    ?>
    <button> <a class="exit-button" href="index.php"></a> Go Back</button>
</body>
</html>