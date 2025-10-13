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
    $basic_salary = 30000;
    $allowance = 5000;
    $deductions = 2000;
    $netsalary = $basic_salary + $allowance - $deductions;
    echo "Basic Salary: ". $basic_salary . "<br>";
    echo "Allowance: ". $allowance . "<br>";
    echo "Deduction: ". $deductions . "<br>";
    echo "Net Salary: ". $netsalary . "<br>";
        ?>
        <button> <a class="exit-button" href="index.php"></a> Go Back</button>
</body>
</html>