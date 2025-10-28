<!DOCTYPE html>
<html lang="en">
<head><meta charset="utf-8"><title>Task 6</title></head>
<body>
  <h1>6. Salary Calculator</h1>
  <?php function h($s){return htmlspecialchars($s,ENT_QUOTES,'utf-8');} ?>
  <?php
    $out = '';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $basic = (float)($_POST['basic_salary'] ?? 0);
      $allow = (float)($_POST['allowance'] ?? 0);
      $ded = (float)($_POST['deduction'] ?? 0);
      $net = $basic + $allow - $ded;
      $out = "Net Salary: " . round($net,2);
    }
  ?>
  <form method="post">
    <label>Basic Salary: <input name="basic_salary" type="number" step="any" value="<?php echo h($_POST['basic_salary'] ?? ''); ?>"></label><br>
    <label>Allowance: <input name="allowance" type="number" step="any" value="<?php echo h($_POST['allowance'] ?? ''); ?>"></label><br>
    <label>Deduction: <input name="deduction" type="number" step="any" value="<?php echo h($_POST['deduction'] ?? ''); ?>"></label><br>
    <button type="submit">Calculate</button>
  </form>
  <?php if ($out): ?><p><strong>Result:</strong> <?php echo h($out); ?></p><?php endif; ?>
  <p><a href="index.php">Back</a></p>
</body>
</html>