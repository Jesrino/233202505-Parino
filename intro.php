<!DOCTYPE html>
<html lang="en">
<head><meta charset="utf-8"><title>Task 1</title></head>
<body>
   <style>
    body { font-family: Arial, sans-serif; margin: 20px; }
    label { display: block; margin-top: 10px; }
    input { margin-left: 10px; }
    button { margin-top: 15px; }
  </style>
  <h1>1. Introduce Yourself</h1>
  <?php function h($s){return htmlspecialchars($s,ENT_QUOTES,'utf-8');} ?>
  <?php
    $result = '';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $name = $_POST['name'] ?? '';
      $age = (int)($_POST['age'] ?? 0);
      $color = $_POST['color'] ?? '';
      $result = "Hi, I'm " . h($name) . ", I am " . h($age) . " years old, and my favorite color is " . h($color) . ".";
    }
  ?>
  <form method="post">
    <label>Name: <input name="name" value="<?php echo h($_POST['name'] ?? ''); ?>"></label><br>
    <label>Age: <input name="age" type="number" value="<?php echo h($_POST['age'] ?? ''); ?>"></label><br>
    <label>Favorite color: <input name="color" value="<?php echo h($_POST['color'] ?? ''); ?>"></label><br>
    <button type="submit">Submit</button>
  </form>
  <?php if ($result): ?><p><strong>Result:</strong> <?php echo $result; ?></p><?php endif; ?>
    <p><button><a href="index.php">Back</a></button></p>
</body>
</html>