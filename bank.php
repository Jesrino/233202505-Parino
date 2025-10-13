<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Account Simulation</title>
</head>
<body>
    <h1>Task 9: Bank Account Simulation </h1>
    <?php
    $balance = 1000;
    $deposit = 500;
    $withdraw = 300;
    $balance += $deposit;
    $balance -= $withdraw;
    echo "Final Balance: $balance<br>";
    ?>
    <button> <a class="exit-button" href="index.php"></a> Go Back</button>
</body>
</html>