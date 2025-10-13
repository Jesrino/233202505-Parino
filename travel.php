<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Cost Estimator</title>
</head>
<body>
    <h1>Task 12: Travel Cost Estimator</h1>
    <?php
        $distance = 300; 
        $fuel_consumption = 10; 
        $fuel_cost= 61; 
        $total_fuel_needed = $distance / $fuel_consumption;
        $total_travel_cost = $total_fuel_needed * $fuel_cost;

        echo "Distance: " . $distance . " miles<br>";
        echo "Miles per Gallon: " . $fuel_consumption . "pg<br>";
        echo "Fuel Cost per Gallon: " . $fuel_cost . "<br>";
        echo "Total Fuel Needed: " . number_format($total_fuel_needed, 2) . " litters<br>";
        echo "Total Travel Cost: ₱" . number_format($total_travel_cost, 2) . "<br>";
    ?>
</body>
</html>