<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary Calculator</title>
</head>
<body>
    <h1>Task 6: Salary Calculator</h1>
    <?php 
        $hourlyRate = 550; 
        $hoursPerWeek = 40; 
        $weeksPerYear = 52; 

        $annualSalary = $hourlyRate * $hoursPerWeek * $weeksPerYear;

        echo "<p>Hourly Rate: $$hourlyRate</p>";
        echo "<p>Hours per Week: $hoursPerWeek</p>";
        echo "<p>Weeks per Year: $weeksPerYear</p>";
        echo "<p>Annual Salary: $$annualSalary</p>";
        ?>
</body>
</html>