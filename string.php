<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manipulation</title>
</head>
<body>
    <style>
    body { font-family: Arial, sans-serif; margin: 20px; }
    label { display: block; margin-top: 10px; }
    input { margin-left: 10px; }
    button { margin-top: 15px; }
  </style>
  
  <h1>8. String Manipulation</h1>
  <?php function h($s){return htmlspecialchars($s,ENT_QUOTES,'utf-8');} ?>
  <?php
    $out = '';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $sentence = $_POST['sentence'] ?? '';
      $chars = strlen($sentence);
      $words = str_word_count($sentence);
      $upper = strtoupper($sentence);
      $lower = strtolower($sentence);
      $out = "Chars: $chars, Words: $words, Upper: $upper, Lower: $lower";
    }
  ?>
  <form method="post">
    <label>Sentence: <input name="sentence" value="<?php echo h($_POST['sentence'] ?? ''); ?>" style="width:80%"></label><br>
    <button type="submit">Analyze</button>
  </form>
  <?php if ($out): ?><p><strong>Result:</strong> <?php echo h($out); ?></p><?php endif; ?>
  <p><button><a href="index.php">Back</a></button></p>
</body>
</html>