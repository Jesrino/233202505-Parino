<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Grading System</title>
</head>
<body>
      <h1>10. Simple Grading System</h1>
  <?php function h($s){return htmlspecialchars($s,ENT_QUOTES,'utf-8');} ?>
  <?php
    $out = '';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $math = (float)($_POST['math'] ?? 0);
      $english = (float)($_POST['english'] ?? 0);
      $science = (float)($_POST['science'] ?? 0);
      $avg = ($math + $english + $science) / 3;
      if ($avg >= 90) $grade = 'A';
      elseif ($avg >= 80) $grade = 'B';
      elseif ($avg >= 70) $grade = 'C';
      elseif ($avg >= 60) $grade = 'D';
      else $grade = 'F';
      $out = "Average: " . round($avg,2) . ", Grade: $grade";
    }
  ?>
  <form method="post">
    <label>Math: <input name="math" type="number" step="any" value="<?php echo h($_POST['math'] ?? ''); ?>"></label><br>
    <label>English: <input name="english" type="number" step="any" value="<?php echo h($_POST['english'] ?? ''); ?>"></label><br>
    <label>Science: <input name="science" type="number" step="any" value="<?php echo h($_POST['science'] ?? ''); ?>"></label><br>
    <button type="submit">Grade</button>
  </form>
  <?php if ($out): ?><p><strong>Result:</strong> <?php echo h($out); ?></p><?php endif; ?>
  <p><button><a href="index.php">Back</a></button></p>
</body>
</html>