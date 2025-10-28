<!DOCTYPE html>
<html lang="en">
<head><meta charset="utf-8"><title>Task 7</title></head>
<body>
  <h1>7. BMI Calculator</h1>
  <?php function h($s){return htmlspecialchars($s,ENT_QUOTES,'utf-8');} ?>
  <?php
    $out = '';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $weight = (float)($_POST['weight'] ?? 0);
      $height = (float)($_POST['height'] ?? 0);
      if ($height <= 0) $out = "Invalid height.";
      else $out = "BMI: " . round($weight / ($height * $height), 2);
    }
  ?>
  <form method="post">
    <label>Weight (kg): <input name="weight" type="number" step="any" value="<?php echo h($_POST['weight'] ?? ''); ?>"></label><br>
    <label>Height (m): <input name="height" type="number" step="any" value="<?php echo h($_POST['height'] ?? ''); ?>"></label><br>
    <button type="submit">Compute</button>
  </form>
  <?php if ($out): ?><p><strong>Result:</strong> <?php echo h($out); ?></p><?php endif; ?>
  <p><button><a href="index.php">Back</a></button></p>
  
</body>
</html>