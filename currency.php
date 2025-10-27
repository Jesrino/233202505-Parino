<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Converter</title>
</head>
<body>
    <h1>Task 11: Currency Converter </h1>
    <form action=""></form>
    <?php
    $php_amount = 1000;
    $usd_rate = 0.018;
    $eur_rate = 0.017;
    $jpy_rate = 2.65;
    echo "₱  $php_amount = $ " . ($php_amount * $usd_rate) . "<br>";
    echo "₱ $php_amount = € " . ($php_amount * $eur_rate) . "<br>";
    echo "₱ $php_amount = ¥ " . ($php_amount * $jpy_rate) . "<br>";
    ?> 
    <button> <a class="exit-button" href="index.php"></a> Go Back</button>
</body>
</html>