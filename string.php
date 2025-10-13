<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manipulation</title>
</head>
<body>
    <h1>Task 8: String Manipulation</h1>
    <?php 
    $sentence = "Hello, My Name is Jester  .";
    echo "Original Sentence: " . $sentence . "<br>";
    echo "Number of characters: " . strlen($sentence) . "<br>";
    echo "Number of words: " . str_word_count($sentence) . "<br>";
    echo "Uppercase: " . strtoupper($sentence) . "<br>";
    echo "Lowercase: " . strtolower($sentence) . "<br>";
    ?>
    <button> <a class="exit-button" href="index.php"></a> Go Back</button>
</body>
</html>