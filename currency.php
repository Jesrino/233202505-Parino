<!-- <!DOCTYPE html>
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
    <p><button><a href="index.php">Back</a></button></p>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head><meta charset="utf-8"><title>Task 11</title></head>
<body>
  <h1>11. Currency Converter</h1>
  <?php function h($s){return htmlspecialchars($s,ENT_QUOTES,'utf-8');} ?>
  <?php
    $out = '';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $php_amount = (float)($_POST['php_amount'] ?? 0);
      $usd_rate = (float)($_POST['usd_rate'] ?? 0.018);
      $eur_rate = (float)($_POST['eur_rate'] ?? 0.017);
      $jpy_rate = (float)($_POST['jpy_rate'] ?? 2.65);
      $out = "USD: " . round($php_amount * $usd_rate,2) . ", EUR: " . round($php_amount * $eur_rate,2) . ", JPY: " . round($php_amount * $jpy_rate,2);
    }
  ?>
  <form method="post">
    <label>PHP Amount: <input name="php_amount" type="number" step="any" value="<?php echo h($_POST['php_amount'] ?? ''); ?>"></label><br>
    <label>USD rate: <input name="usd_rate" type="number" step="any" value="<?php echo h($_POST['usd_rate'] ?? '0.018'); ?>"></label><br>
    <label>EUR rate: <input name="eur_rate" type="number" step="any" value="<?php echo h($_POST['eur_rate'] ?? '0.017'); ?>"></label><br>
    <label>JPY rate: <input name="jpy_rate" type="number" step="any" value="<?php echo h($_POST['jpy_rate'] ?? '2.65'); ?>"></label><br>
    <button type="submit">Convert</button>
  </form>
  <?php if ($out): ?><p><strong>Result:</strong> <?php echo h($out); ?></p><?php endif; ?>
  <p><button><a href="index.php">Back</a></button></p>
</body>
</html>