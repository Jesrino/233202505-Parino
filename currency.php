<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Converter</title>
</head>
<body>
    <h1>Task 11: Currency Converter </h1>
    <php 
        $usd = 1.00;
        $eur = 0.85;
        $php = 55.00;
        $amountInUSD = 100; 
        $amountInEUR = $amountInUSD * $eur;
        $amountInGBP = $amountInUSD * $php;

        echo " Amount in USD:" . $amountInUSD . "<br>";
        echo "Converted to EUR: €" . number_format($amountInEUR, 2) . "<br>";
        echo "Converted to GBP: £" . number_format($amountInGBP, 2) . "<br>";
    
    
    
    
    
    
    
    ?>
    
        echo "Amount in USD:" . $amountInUSD . "<br>";
        echo "Converted to EUR: €" . number_format($amountInEUR, 2) . "<br>";
        echo "Converted to GBP: £" . number_format($amountInGBP, 2) . "<br>";
       
</body>
</html>