<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Math</title>
</head>
<body>
    <h1>Task 2: Simple Math</h1>

<?php

function h($s){ return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }

$a = $b = 0;
$sum = $difference = $product = null;
$quotient = null;
$resultDisplayed = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = (float)($_POST['a'] ?? 0);
    $b = (float)($_POST['b'] ?? 0);

    $sum = $a + $b;
    $difference = $a - $b;
    $product = $a * $b;
    $quotient = ($b == 0) ? 'undefined (division by zero)' : ($a / $b);

    $resultDisplayed = true;
}

if ($resultDisplayed) {
    echo "Value of A: " . h($a) . "<br>";
    echo "Value of B: " . h($b) . "<br>";
    echo "The sum is: " . h($sum) . "<br>";
    echo "The difference is: " . h($difference) . "<br>";
    echo "The product is: " . h($product) . "<br>";
    echo "The quotient is: " . h($quotient) . "<br>";
}
?>

    <form method="post" novalidate>
        <label>a: <input name="a" type="number" step="any" value="<?php echo h($_POST['a'] ?? ''); ?>"></label><br>
        <label>b: <input name="b" type="number" step="any" value="<?php echo h($_POST['b'] ?? ''); ?>"></label><br>
        <button type="submit">Compute</button>
    </form>

    <p><a href="index.php">Back</a></p>
</body>
</html>
