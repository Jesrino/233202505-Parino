<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Account Simulation</title>
</head>
<body>
 <h1>9. Bank Account Simulation</h1>
  <?php function h($s){return htmlspecialchars($s,ENT_QUOTES,'utf-8');} ?>
  <?php
    $out = '';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $balance = (float)($_POST['balance'] ?? 0);
      $deposit = (float)($_POST['deposit'] ?? 0);
      $withdraw = (float)($_POST['withdraw'] ?? 0);
      $balance += $deposit;
      $balance -= $withdraw;
      $out = "Final Balance: " . round($balance,2);
    }
  ?>
  <form method="post">
    <label>Balance: <input name="balance" type="number" step="any" value="<?php echo h($_POST['balance'] ?? ''); ?>"></label><br>
    <label>Deposit: <input name="deposit" type="number" step="any" value="<?php echo h($_POST['deposit'] ?? ''); ?>"></label><br>
    <label>Withdraw: <input name="withdraw" type="number" step="any" value="<?php echo h($_POST['withdraw'] ?? ''); ?>"></label><br>
    <button type="submit">Process</button>
  </form>
  <?php if ($out): ?><p><strong>Result:</strong> <?php echo h($out); ?></p><?php endif; ?>
  <p><button><a href="index.php">Back</a></button></p>
</body>
</html>