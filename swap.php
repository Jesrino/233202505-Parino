<!DOCTYPE html>
<html lang="en">
<head><meta charset="utf-8"><title>Task 5</title></head>
<body>
  <h1>5. Swapping Variables</h1>
  <?php function h($s){return htmlspecialchars($s,ENT_QUOTES,'utf-8');} ?>
  <?php
    $out = '';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $x = $_POST['x'] ?? '';
      $y = $_POST['y'] ?? '';
      $before = "Before: x=" . h($x) . ", y=" . h($y);
      $temp = $x;
      $x = $y;
      $y = $temp;
      $after = "After: x=" . h($x) . ", y=" . h($y);
      $out = $before . " | " . $after;
    }
  ?>
  <form method="post">
    <label>x: <input name="x" value="<?php echo h($_POST['x'] ?? ''); ?>"></label><br>
    <label>y: <input name="y" value="<?php echo h($_POST['y'] ?? ''); ?>"></label><br>
    <button type="submit">Swap</button>
  </form>
  <?php if ($out): ?><p><strong>Result:</strong> <?php echo $out; ?></p><?php endif; ?>
  <p><button><a href="index.php">Back</a></button></p>
</body>
</html>