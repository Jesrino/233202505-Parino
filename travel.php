<!DOCTYPE html>
<html lang="en">
<head><meta charset="utf-8"><title>Task 12</title></head>
<body>
  <h1>12. Travel Cost Estimator</h1>
  <?php function h($s){return htmlspecialchars($s,ENT_QUOTES,'utf-8');} ?>
  <?php
    $out = '';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $distance = (float)($_POST['distance'] ?? 0);
      $consumption = (float)($_POST['fuel_consumption'] ?? 1);
      $price = (float)($_POST['fuel_price'] ?? 0);
      if ($consumption <= 0) $out = "Invalid fuel consumption.";
      else $out = "Estimated cost: " . round(($distance / $consumption) * $price, 2);
    }
  ?>
  <form method="post">
    <label>Distance (km): <input name="distance" type="number" step="any" value="<?php echo h($_POST['distance'] ?? ''); ?>"></label><br>
    <label>Fuel consumption (km/l): <input name="fuel_consumption" type="number" step="any" value="<?php echo h($_POST['fuel_consumption'] ?? ''); ?>"></label><br>
    <label>Fuel price (per liter): <input name="fuel_price" type="number" step="any" value="<?php echo h($_POST['fuel_price'] ?? ''); ?>"></label><br>
    <button type="submit">Estimate</button>
  </form>
  <?php if ($out): ?><p><strong>Result:</strong> <?php echo h($out); ?></p><?php endif; ?>
  <p><a href="index.php">Back</a></p>
</body>
</html>