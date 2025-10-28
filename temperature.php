<!DOCTYPE html>
<html lang="en">
<head><meta charset="utf-8"><title>Task 4</title></head>
<body>
  <h1>4. Temperature Converter</h1>
  <?php function h($s){return htmlspecialchars($s,ENT_QUOTES,'utf-8');} ?>
  <?php
    $out = '';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $c = (float)($_POST['celsius'] ?? 0);
      $f = ($c * 9/5) + 32;
      $out = "$c °C = " . round($f,2) . " °F";
    }
  ?>
  <form method="post">
    <label>Celsius: <input name="celsius" type="number" step="any" value="<?php echo h($_POST['celsius'] ?? ''); ?>"></label><br>
    <button type="submit">Convert</button>
  </form>
  <?php if ($out): ?><p><strong>Result:</strong> <?php echo h($out); ?></p><?php endif; ?>
  <p><button><a href="index.php">Back</a></button></p>
</body>
</html>