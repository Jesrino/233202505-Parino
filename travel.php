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
        $mpg = 25; 
        $fuel_cost_per_gallon = 3.50; 
        $total_fuel_needed = $distance / $mpg;
        $total_travel_cost = $total_fuel_needed * $fuel_cost_per_gallon;

        echo "<p>Distance: $distance miles</p>";
        echo "<p>Miles per Gallon: $mpg</p>";
        echo "<p>Fuel Cost per Gallon: $$fuel_cost_per_gallon</p>";
        echo "<p>Total Fuel Needed: " . number_format($total_fuel_needed, 2) . " gallons</p>";
        echo "<p>Total Travel Cost: $" . number_format($total_travel_cost, 2) . "</p>";
    ?>
</body>
</html>